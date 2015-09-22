<?php
define('ROOT_PATH','../');
define('CURSCRIPT','fetch');
define('FETCH',true);
$cache_list = array('setting','channels','cate','shop');

include ROOT_PATH.'inc/class/application.class.php';
application::init();

$api = new api();
$api->init();



header("Content-Type: text/json");
header("KissyIoDataType:json");
header('Content-Type: text/html; charset='.CHARSET);


class api{
	
	function json($arr){
					global $_G;
					if($_G['json_status']) return false;
					$_G['json_status']= true;
					if(!isset($arr['status'])) $arr['status'] = 'error';
					$arr[tae] = TAE ? 1 :0;
					$arr['domain'] = $_SERVER['HTTP_HOST'];					
					echo json_encode($arr);
	}
	
	
	function init(){
				global $_G,$app;
				$_G[inajax] = 1;
				foreach($_GET as $k=>$v){
					if(!isset($_GET[$k])) $_GET[$k] = $v;					
				}
				if(!$_G[setting][syn_key]){
					$this->json(array('msg'=>'当前站点禁止进行同步采集发布'));
					return false;
				}
				if(!isset($_GET[syn_key]) || trim($_GET[syn_key])=='' ||  $_GET[syn_key] != $_G[setting][syn_key]) {
					$this->json(array('msg'=>'站点安全同步key不正确'));
					return false;
				}
				
				$a = $_GET['a'];
				if(!preg_match("/^[a-z_]+$/is",$a)){
						$this->json(array('status'=>'error','msg'=>'Module String Error'));
						return false;
				}
				if(method_exists($this,$a)){
					$this->$a();
					return false;
				}else{
					$this->json(array('status'=>'error','msg'=>'Action not Found'));
					return false;
				}
	}
	
	function get_config(){
			global $_G;

			$rt = array();
			$channel = array();
			$cate = array();		
			
			foreach($_G[channels] as $k=>$v){
				$tmp = array('fid'=>$v[fid],'name'=>$v[name]);
				if(isset($v[sub]) && $v[sub] && count($v[sub])>0){
					foreach($v[sub] as $k1=>$v1){
						$t1 =  array('fid'=>$v1[fid],'name'=>$v1[name]);
						if(isset($v1[sub]) && $v1[sub] && count($v1[sub])>0){
								foreach($v1[sub] as $k2=>$v2){
									$t1[sub][] = array('fid'=>$v2[fid],'name'=>$v2[name]);
								}
						}
						$tmp[sub][] = $t1;
					}
				}
				$channel[] = $tmp;
			}
			$data = array('channel'=>$channel);
			
			if(count($_G[cate])>0 && $_G[cate]){
				$cate = array();
				foreach($_G[cate] as $k=>$v){
					$cate[] = array('id'=>$v[id],'name'=>$v[name]);
				}
				$data['cate']=$cate;
			}
			
			if(count($_G[shop])>0 && $_G[shop]){
				$shop = array();
				foreach($_G[shop] as $k=>$v){
					$shop[] = array('id'=>$v[id],'title'=>$v[title]);
				}
				$data['shop']=$shop;
			}
			/*$data[shop] = array(
				array('id'=>0,'title'=>'取消推荐'),
				array('id'=>1,'title'=>'首页推荐'),
				array('id'=>2,'title'=>'整点抢10点'),
				array('id'=>3,'title'=>'整点抢20点')
			);*/

			$data[title] = array('channel'=>'栏目','cate'=>'分类','shop'=>'店铺');
			$this->json(array('data'=>$data,'status'=>'success')); 
			
	}
	
	function post_goods(){
		global $_G,$app;

			
		if(!$_GET['len']) {
				$this->json(array('msg'=>'要同步的数据长度不能为空','code'=>1));
				return false;
		}
		if(!$_GET['data']){
			$this->json(array('msg'=>'要同步的数据不能为空','code'=>2));
			return false;
		}

		$data = ($_GET['data']);
			$arr = json_decode($data,true);	
           if(!is_array($arr) || !$arr) $arr=json_decode(urldecode_utf8($data),true);	
		
		
		if(!is_array($arr) || !$arr){
			$this->json(array('msg'=>'要同步的数据解析失败','code'=>3));
			return false;
		}
		if(count($arr) != $_GET['len']){
			$this->json(array('msg'=>'要同步的数据长度和原数据长度不一致','code'=>4));
			return false;
		}


		$filed =table('goods');
		
		$len = 0;
		
		$top = top('goods');
		foreach($arr as $k=>$v){
			foreach($v as $k1=>$v1){
				if(!array_key_exists($k1,$filed)){
					unset($v[$k1]);
				}
			}
			$v['dateline'] = TIMESTAMP;
			$return_id =$top->insert($v);
			if($return_id) $len++;
		}		
		
		if(defined('ERROR') && ERROR ===true && count($arr)-$len>10){
			if(DB::error()){
				$msg = 'DB Error : '.(DB::error());
			}else{
				$msg = urlencode_utf8($_G['error_msg']);
			}
			$msg = '错误条数:'.(count($arr)-$len).',错误信息:'.$msg;
			L($msg);
			$this->json(array('status'=>'error','id'=>$return_id,'msg'=>$msg));
			return false;	
		}
		$this->json(array('status'=>'success','len'=>$len));
		

	}

   
	
	function get_url(){
		global $_G;
		$table = 'goods';
		$rs = DB::fetch_all("SELECT num_iid FROM ".DB::table($table)." WHERE `check` = 1 ORDER BY aid DESC LIMIT 10");		
		$data = array();
		foreach($rs as $k=>$v){
			$data[] = $v['num_iid'];
		}
		$data = implode(',',$data);
		$this->json(array('status'=>'success','data'=>$data,'type'=>$table));
	}
	
	
	
	
	function post_img(){
		global $_G,$app;
		if(!$_GET['data']){
			$this->json(array('msg'=>'要同步的数据不能为空','code'=>2));
			return false;
		}

		$data = ($_GET['data']);
		
		$arr = json_decode($data,true);	
        if(!is_array($arr) || !$arr) $arr=json_decode(urldecode_utf8($data),true);	
		
		if(!is_array($arr) || !$arr){
			$this->json(array('msg'=>'要同步的数据解析失败','code'=>3));
			return false;
		}
		$filed =table('img');
		$img = get_filed('img',$arr);
		
		$img['hide'] = intval($img['hide']);
		$img['sort'] = intval($img['sort']);
		$img['hate'] = intval($img['hate']);
		$img['like'] = intval($img['like']);
		
		if($arr['desc']) $img[description] = $arr['desc'];
		$img[message] = trim($img[message]);
		$img['dateline'] = TIMESTAMP;
		foreach($img as $k1=>$v1){
			if(!array_key_exists($k1,$filed)){
				unset($img[$k1]);
			}
			if(is_string($v1))$img[$k1] = str_replace(array('&yen;','￥'),array('',''),$v1);
		}
		if(preg_match("/^[0-9\.]+$/is",$img[description]))$img[description] = '';
		
		
		if(!$img[description]){
			if(strpos($img[message],'###{') !== false){
				$img[description] =preg_replace("/###\{(.*?)\}###/is",'',$img[message]);
				$img[description] = (cutstr(trim_html($img[description],1),250,''));
			}
			
		}


		$count = getcount('img',"title='".$img[title]."'");
		if($count>0){
			$this->json(array('status'=>'error','id'=>0,'msg'=>'当前看图购已发布过'));
			return false;
		}
		if(!$img[title]){
			$this->json(array('status'=>'error','id'=>0,'msg'=>'标题不能为空'));
			return false;
		}
		
		

		$id=DB::insert('img',$img,true);
		if($id>0){
			$this->json(array('status'=>'success','id'=>$id));
			return false;
		}else if(defined('ERROR') && ERROR ===true){
			if(DB::error()){
				$msg = 'DB Error : '.(DB::error());
			}else{
				$msg = urlencode_utf8($_G['error_msg']);
			}
			$this->json(array('status'=>'error','id'=>$return_id,'msg'=>$msg));
			return false;	
		}else{
			$this->json(array('status'=>'error','id'=>$id,'msg'=>'未成功,数据库未报错'));
			return false;
		}

	}

}


?>