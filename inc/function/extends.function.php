<?php
if(!defined('IN_TTAE')) exit('Access Denied FROM UZ-SYSTEM'); 


function getuserpic($user){
	
	if($user[picurl])  return  $user[picurl];
	
        $picurl = avatar($user[username],$user['uid']);

	return $picurl;
}


function browserversion($type) {
	static $return = array();
	static $types = array('ie' => 'msie', 'firefox' => '', 'chrome' => '', 'opera' => '', 'safari' => '', 'mozilla' => '', 'webkit' => '', 'maxthon' => '', 'qq' => 'qqbrowser');
	if(!$return) {
		$useragent = strtolower($_SERVER['HTTP_USER_AGENT']);
		$other = 1;
		foreach($types as $i => $v) {
			$v = $v ? $v : $i;
			if(strpos($useragent, $v) !== false) {
				preg_match('/'.$v.'(\/|\s)([\d\.]+)/i', $useragent, $matches);
				$ver = $matches[2];
				$other = $ver !== 0 && $v != 'mozilla' ? 0 : $other;
			} else {
				$ver = 0;
			}
			$return[$i] = $ver;
		}
		$return['other'] = $other;
	}
	return $return[$type];
}

function get_fup($fid,$type='channels'){
	global $_G;
	
	if($_G[$type][$fid]) return $_G[$type];
		foreach($_G[$type] as $k=>$v){
			if($v[sub][$fid]) return $v;
			foreach($v[sub] as $k1=>$v1){
				if($v1[sub][$fid]) return $v1;
				foreach($v1[sub] as $k2=>$v2){
					if($v2[$fid]) return $v2;
				}
				
			}
		}
		return false;
}
function get_sub($fid,$type='channels'){
	global $_G;
	$id = $type=='channels' ? 'fid':'id';
		foreach($_G[$type] as $k=>$v){
			if($v[$id] == $fid)  return $v;			
			foreach($v[sub] as $k1=>$v1){				
				if($v1[$id] == $fid)  return $v1;
				foreach($v1[sub] as $k2=>$v2){					
					if($v2[$id] == $fid) {						
						 return $v2;
					}
				}
				
			}
		}	
}

function make_sql($in_talbe=''){
		global $_G,$app;
		$get = ($_GET);
		$in_talbe = $in_talbe ? $in_talbe :'goods';
		
		$and =$sort =$order =$url= '';
		if(isset($get[fid]) && $get[fid]>0){
			$fid = intval($get[fid]);
			$fup = get_sub($fid);
			if($fup && $fup[fid_in]){
				$and .= " AND fid in ( ".$fup[fid_in]." )";
			}else{
				$and .= " AND fid =".$fid;
			}			
			$url .="&fid=".$fid;
		}
	
		if(isset($get[cate]) &&   $get['cate']>0){
			$cate = intval($get['cate']);
			$and .= " AND cate = ".$cate;
			$url .= '&cate='.$cate;
		}
		
		
	
		
		
	//&and = yh_price_gt_100
		if(isset($get['and']) && trim($get['and'])){
			$tmp = explode('_',$get['and']);
			if(count($tmp) == 4){
				$tmp1 = array($tmp[0].'_'.$tmp[1],$tmp[2],$tmp[3]);
			}else{
				$tmp1 = $tmp;
			}
			if(!$table)$table = table($in_talbe);
			
			if(array_key_exists($tmp1[0],$table)){
					$and_f = ' = ';
					if($tmp1[1] == 'gt'){
						$and_f =' > ';
					}else if($tmp1[1] == 'lt'){
						$and_f =' < ';
					}else if($tmp1[1] == 'neq'){
						$and_f =' != ';
					}
					$and .= " AND ".$tmp1[0] .$and_f . $tmp1[2];
					$url .= '&'.$get['and'];
					
			}
			
		}
		
		if(isset($get['price']) && $get['price']>0){
			if(strpos($get[price],'_') !==false){
				$price = explode('_',$get[price]);
				$price[0] = intval($price[0]);
				$price[1] = intval($price[1]);
				$and .=" AND yh_price >= ".$price[0]." AND yh_price < ".$price[1];
				$url .= '&price='.$price[0].'_'.$price[1];				
			}else{
				$price = intval($get['price']);
				$and .=" AND yh_price < ".$price;
				$url .= '&price='.$price;
			}
		}

		if(isset($get['and_in']) && trim($get['and_in']) && $get[where] && array_key_exists($get[where],table('goods'))){
			$and_in = trim($get['and_in']);
			$field = trim($get[where]);
			if(!$table)$table = table($in_talbe);
			if(array_key_exists($field,$table) && preg_match("/^[a-z_0-9-,.]+$/",$and_in) && preg_match("/^[a-z_]+$/",$get[where])){				
				$tmp = explode('-',$and_in);
				$tmp2 = explode(',',$and_in);
				if($tmp && count($tmp)==2){
					$and .=" AND `$field` >= '".floatval($tmp[0])."' AND `$field` <='".floatval($tmp[1])."'";					
				}elseif($tmp2 && count($tmp2)>1){
					$and .=" AND `$field` in (".$and_in.")" ;
				}else{
					$and .=" AND `$field` = '".$and_in."'";
				}
				$url.="&and_in=".$and_in."&where=".$get[where];
			}
	
		}
		//sort
		if(isset($get['sort']) && $get['sort']){
			$url .= '&sort='.trim($get[sort]);
			$sort = $get['sort'] == 'asc' ? ' ASC '  : ' DESC ';

		}
		//order
		if($get['order'] && preg_match("/^[a-z_]+$/",$get['order'])){			
		if(!$table)$table = table($in_talbe);
			if(array_key_exists($get[order],$table)){				
					$order = trim($get[order]);
					$url .= '&order='.$order;
					if(!$sort) $sort = ' DESC ';
					$order = ' `'.$order.'` '. $sort;
			}
		}

		return array('and'=>$and,'url'=>$url,'order'=>$order);
}


function loadcache($cachenames,$type='load',$lv=0) {
	global $_G;
	static $cache_server;	
	if(!$cachenames) return false;
	if(!$cache_server) {		
		$cache_server=new cache();
	}
	
	$cache =  $cache_server;
	
	$cachenames = (array)$cachenames;
	if($type =='load'){		
		  $data = $cache->fetch_all($cachenames,$lv);
		  foreach($data as $k => $v) {			  
				if(in_array($k,$_G[_config][cache_list])){
					$_G[$k] =$v;					
				}else{
					$_G['cache'][$k] = $v;
				}
		  }
	}elseif($type =='update'){
		foreach($cachenames as $k => $v) {			
			$res = $cache->update($v);
			$_G['cache'][$k] = $v;
			if(in_array($v,$_G[_config][cache_list])){
				 $_G[$v] = $res;
			}else{
				$_G['cache'][$v] = $res;
			}
		}
	}elseif($type =='delete'){
		foreach($cachenames as $v) {			
		  $cache->del($v);
		}
	}
	return true;
}
function savecache($cachenames,$data,$update=false,$lv=0){
	global $_G;
	static $cache_server;	
	if(!$cache_server) $cache_server=new cache();
	return $cache_server->insert($cachenames,$data,$update,$lv);
}


function update_member($arr,$uid ){
		global $_G;
		if(!$uid) $uid = $_G[uid];
		$uid = intval($uid);
		
		DB::update('member',$arr,"uid =".$uid);
		
		if(isset($arr['jf'])){
			update_group($uid);
		}
		
}
function delete_member($uid){		
		if(!$uid) return false;

		return DB::delete("member","uid =".$uid);
}


//更新用户的用户组,  uid  || user_arr
function update_group($user_arr){
		global $_G;

		if(is_numeric($user_arr)){
			$user_arr = getuser($user_arr,'uid');
		}else if(!$user_arr ){
			$user_arr = $_G['member'];
		}else if(is_array($user_arr)){
			if(!$user_arr['jf'] || !$user_arr['groupid']) $user_arr = getuser($user_arr,$user_arr['uid']);
		}
		
		if(!$user_arr['uid'] || $user_arr['auto_update'] == 1) return false;
		
		//系统用户组不能升级
		$not_update = array(1,2,3,4,19,20,21,22);
		if(in_array($user_arr['groupid'],$not_update )) return false;	
			
		if($user_arr['jf']<=0 && $user_arr['groupid']!=10){
			DB::update('member',array('groupid'=>10),'uid='.$user_arr['uid']);
			return false;
		}
		$min = 10000;
		$update = false;
		//1,遍利所有用户组,查看当前用户积分是否存在此当中
		foreach($_G['group'] as $k=>$v){
			if(in_array($v['id'],$not_update)) continue;
			
			if($v['jf_min'] ==0  && $v['jf_max'] == 0) continue;
			if($user_arr['jf']>=$v['jf_min'] && $user_arr['jf']<$v['jf_max']){
				if($user_arr['groupid'] == $v['id']){					
					//已经是当前用户组了,就不用更新了
					$update = true;
					break;
				}				
				//自动更新当前用户组				
				DB::update('member',array('groupid'=>$v['id']),'uid='.$user_arr['uid']);
				if($user_arr['uid'] == $_G['uid']){
					$_G['member']['groupid'] = $v['id'] ;
					$_G['member']['group'] = $v;
					$_G['member']['group_name'] = $v['name'];
				}
				$update= true;
				break;
			}
			if($v['jf_min']<$min)  $min =$v['jf_min'];
		}
		
		//没有更新,而且有最小的积分, 并且用户的积分又小于最小的积分,则直接降为初始用户组
		if(!$update && $min != 10000 && $user_arr['jf']<$min){
			DB::update('member',array('groupid'=>10),'uid='.$user_arr['uid']);
			if($user_arr['uid'] == $_G['uid']){
					$_G['member']['groupid'] = 10 ;
					$_G['member']['group'] =$_G['group'][10];
					$_G['member']['group_name'] = $_G['group'][10]['name'];
			}
			$update = true;
		}		
		return $update;
}



function seo($title='',$keywords='',$description='',$focus=1){
	global $_G;
	$title = safe_output($title);
	$keywords = safe_output($keywords);
	$description = safe_output($description);
	
	if(!$title) $title = $_G[setting][seo_title];
	if(!$keywords) $keywords = $title.','.$_G[setting][seo_keywords];
	if(!$description) $description = $_G[setting][seo_description].$title;
	
	if($_G[setting][long_keywords]){
			//$title.=' - '.$_G[setting][long_keywords];
			if(CURMODULE =='index' && CURACTION == 'main'){
				
			}else{
				if($title != $_G[setting][title]) $title.=' - '.$_G[setting][title];
			}
			$keywords.=','.$_G[setting][long_keywords];
			$description.=' - '.$_G[setting][long_keywords];
	}

	//$title .= $_G[page] >1 ? ' - 第'.$_G[page].'页' : '';
	
	$_G[title] = $title;
	$_G[keywords] = $keywords;
	$_G[description] = $description;

}

/*	后台专用的 ajax 一键审核 */
function ajax_check($table,$field,$where){
			global $_G;
						
			if(!$table) msg('要更新的表不能为空','error');	
			if(!array_key_exists($table,table())) msg('要更新的表不能为空','error');	
			if(!$where){
				$id = intval($_GET[id]);	
				if(!$id) msg('id不能为空','error');	
				$check = intval($_GET[check]);
				$where = 'id='.$id;
			}else{
				$check = $field['check'];
				
			}
			if(!is_array($field) || !$field)  $field = array('check'=>$check);
			
			
			DB::update($table,$field,$where);
			
			if($check == 1){
				msg('已通过','success',$_G[referer]);
			}else if($check == 2){
				msg('已拒绝','success',$_G[referer]);
			}else if($check==0){
				msg('待审核','success',$_G[referer]);
			}
}


function parse($table,$value,$f1,$f2,$f3){
	$_parse = new parse();
	if(method_exists($_parse,$table)){
		if(!$value) return true;
		return $_parse->$table($value,$f1,$f2,$f3);
	}else{
		return $value;
	}
}




function L($msg){
	global $_G;
	if(trim($msg))$msg = trim($msg);
	
	$msg .="\r\ndateline:".dgmdate(TIMESTAMP,'dt')."\r\nIP:".$_G[clientip];
	$msg .= "\r\nMSG:".$msg;
	$msg.="\r\n".$_SERVER['REQUEST_METHOD'].':'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'?'.$_SERVER['QUERY_STRING'];
	$msg.="\r\nReferer:".$_SERVER[HTTP_REFERER]."\r\n";
	if(class_exists('DB')){
		$db = & DB::object();
		if(method_exists($db,'errorInfo')){
			if($db->errorInfo()){
				$dberror = str_replace(DB::table(),  '', $db->errorInfo());
				$msg.="\r\nDB:error_info:".$dberror;
				$msg.="\r\nDB:cur_sql:".$db->currentSql;
			}
		}
	}
	
	if(TAE){
		$appLog = Alibaba::Applog();
		$appLog->error($msg);
	}else{
		if(!class_exists('error'))include_once libfile('class/error');	
		error::writeErrorLog('system',$msg);
	}

}

function F($file,$content){
			$ret = '';
			if($content){
				$ret =	file_put_contents(ROOT_PATH.'web/templates_c/'.$file,$content);
			}else{
				$ret =file_get_contents(ROOT_PATH.'web/templates_c/'.$file);	
			}		
			return $ret;
}



//百川或优站上使用,外站只能用memCache
function memory($cmd='',$key='', $value='', $ttl = 86400) {
	global $_G,$_CACHE;
	if(!is_object($_CACHE)){
			$config = array();
			$type =$_G['cache_type'];
			if($type == 'baichuan' || $type == 'aliyun_ocs')$config = $_G['_config']['cache_config'];
			$class = $type.'_cache';
			if(!class_exists($class)){
					$file = ROOT_PATH.'inc/class/cache/'.$class.'.php';
					include_once $file;
			}
			$obj = new $class();
			$enable = $obj->init($config);
			if(!$enable) return false;
			$_CACHE = $obj;
	}else{
		$obj = & $_CACHE;
	}
	
	
	if(defined('DEBUG'))	$_G['memory_debug'][$cmd][] = is_array($key) ?implode(',',$key) : $key;
	
	if($cmd == 'set'){
		return $obj->set($key,$value,$ttl);
	}else if($cmd == 'get'){
		return $obj->get($key);
	}else if($cmd == 'delete'){
		return $obj->delete($key);
	}else if($cmd == 'clear'){
		return $obj->clear();
	}else if($cmd == 'obj'){
		return $obj;
	}
	return false;
	
}

function insert_sign($arr){
	global $_G;
	
	
	
	$sign =array();
	
	$sign[uid]=$_G[uid];
	$sign[username]=$_G[username];
	$sign[jf]=$_G[setting][jf];
	$sign[ip]=$_G[clientip];
	$sign[org_jf]=0;
	$sign =get_filed('sign',$sign);
	
	$sign[dateline]=TIMESTAMP;

	foreach($arr as $k=>$v){
		if(array_key_exists($k,$sign)){
			$sign[$k]= $v;
		}
	}
	$sign[jf] = intval($sign[jf]);
	if(!$sign[org_jf]) $sign[org_jf] = $_G[member][jf]+$sign[jf];
	$sign[uid] = intval($sign[uid]);
	$sign['add'] = $sign[jf]<0?0:'1';
	$sign['aid'] = intval($sign['aid']);
	
	if($sign[jf]>0) update_group($sign[uid]);
	
	return DB::insert('sign',$sign,1);
}


function getuser($username,$type='username'){
	  global $_G; 
	
	  $member = DB::fetch_first("SELECT * FROM ".DB::table('member')." WHERE $type='$username'");
	  if($member && $member['uid']>0){
		  $member[org_picurl]= $member[picurl];
		  $member[picurl] = getuserpic($member);
		  $member[org_regdate] =  $member[regdate] ;
		  $member[org_login_time] =  $member[login_time];
		  
		  $member[regdate] = dgmdate($member[regdate],'u');
		  $member[login_time] = dgmdate($member[login_time],'u');
		
          $gid = $member['groupid'];
          $member['group'] = $_G['group'][$gid];
		 //$member['rank_group'] = $_G['rank'][$member['rank']];
		  
          $member['group_name']  =  $member['group']['name'];
		  $member['rank_name'] = $_G['rank'][$member['rank']]['name'];
		  if($_G['setting']['fanli'] !=1 )  $member['order_list'] = '';
		  return $member;
	  }
	  return false;
}


function make_tags($kw,$url){
			global $_G;
			if(!$kw) return array();
			$tag 	=	explode(',',$kw);
			$keywords= array();
			if($tag){
				$tag = array_unique($tag);
				$tag = array_filter($tag);			
				foreach($tag as $k=>$v){
					if($v){
						$uname = urlencode_utf8($v);
						$keywords[$uname] = $v;
						if($_G['setting']['get_tag'] && $url && !array_key_exists($v,$_G['tag_list']))$_G['tag_list'][$v] =array('url'=>$url.$uname,'title'=>$v);
					}
				}
			}
			
			return $keywords;
}


//获取积分分类,或是某个会员的积分统计
function get_jf($uid){
			global $_G;
			$share = array();
					
			$share_type = $_G[setting][jf_type];
			
			if(!$uid) return $share_type;
			$and = " uid = ".$uid;
			foreach($share_type as $k=>$v){
				$where = $and ." AND type = '".$k."' ";
				$sum = DB::result_first(" SELECT sum(jf) as jf FROM ".DB::table('sign')." WHERE ". $where);
				if(!$sum) $sum = 0;
				$share[$k] = $sum;
			}
			return $share;
}

/*
 * 自动生成用户头象
 *
 * */
function avatar($user_name, $uid = 0, $size = 120) {
    global $_G;
    if (!$user_name) {
        return '/assets/global/images/avatar.png';
    }
	if($uid>0 && $uid == $_G['uid']){
		if($_G['member']['picurl']) return $_G['member']['picurl'];
	}
	
    $name = $uid;
    if (!$uid) {
        $name = $_G['uid'];
    }
    if (!$uid) {
        $name = cutstr(md5($user_name), 5, '');
    }
    $path = '/assets/' . $_G['setting']['template'] . '/avatars/' . $name . '.png';
    if (file_exists(ROOT_PATH . $path)) {
        return $path;
    }
	$dir = dirname(ROOT_PATH . $path);
	if(!is_dir($dir)) dmkdir($dir);
    $atavar_type = $_G['setting']['avatar_type'];
    if ($atavar_type == 1) {
        if (!class_exists('MDAvtars')) {
            require_once ROOT_PATH . "web/lib/md_avtars/MaterialDesign.Avatars.class.php";
        }
        $Avatar = new MDAvtars($user_name, $size);
        $Avatar->Save(ROOT_PATH . $path, $size);
        $Avatar->Free();
    } elseif ($atavar_type == 2) {
        if (!class_exists('Identicon')) {
            require_once ROOT_PATH . "web/lib/generator_avatar/Identicon.php";
        }
        $identicon = new Identicon();
        $identicon->save($user_name, ROOT_PATH . $path, $size);
    }
    return $path;
}

/*
	保存历史浏览记录,最多保存20条
	@cookies name
	@保存的id
	return void
*/
function save_history($name,$id){
		global $_G;
		if(!$name || !$id) return false;
		if(!in_array($name,$_G['setting']['history_views'])) return ;
		$name .='_views'; 
		$ids = C($name);
		if($ids){
			$ids = explode(',',$ids);
			$ids = array_filter($ids);
			$ids = array_unique($ids);
			if(!in_array($id,$ids)){
				$ids =array_slice($ids,-20);
			}
		}else{
			$ids = array();
		}
		if(!in_array($id,$ids)){
			$ids[] = $id;
			C($name,implode(',',$ids),86400*30);
		}
	
}
/*
	获取历史浏览记录
	@cookies name
	@ 获取的个数
	@ return string
*/

function get_history($name,$len){
		global $_G;
		if(!$name)return false;	
		if(!in_array($name,$_G['setting']['history_views'])) return ;
		
		$name .='_views'; 
		$ids = C($name);
		if(!$ids)return false;
		if(!$len) return $ids;

		$ids = explode(',',$ids);
		$ids = array_filter($ids);
		$ids = array_unique($ids);	
		$data =array_slice($ids,0-$len);
		return implode(',',$data);
}



function save_fanli($num_iid){
		global $_G;
		if($_G['uid'] && $_G['setting']['fanli'] ==1 ){
				$arr = array();
				$order_list = array();
				if($_G['member']['order_list']){
						$list = (array)dunserialize($_G['member']['order_list']);
						foreach($list as $k=>$v){							
							// 之前没有浏览过,就添加进去
							list($id,$time) = explode(',',$v);								
							if($id != $num_iid)$order_list[] = $v;
						}
						//最多保存200条浏览记录及时间
						$order_list = array_slice($order_list,-199);							
				}
				$order_list[] = $num_iid.','.TIMESTAMP;						
				$arr['order_list'] =serialize($order_list);				
				update_member($arr);
		}
}


?>
