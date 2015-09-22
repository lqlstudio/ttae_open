<?php
if(!defined('IN_TTAE')) exit('Access Denied'); 

class index extends app{
	public function main(){
			global $_G,$app;
			
			if(isset($_GET[code]) || isset($_GET[state])){
				include_once libfile('action/member');
				$mb = new member();
				$mb->main();
				return false;
			}
			

			seo($_G['setting'][seo_title],$_G['setting'][seo_keywords],$_G['setting'][seo_description],false);
			$this->show();
			
		}
		function desktop(){
			global $_G;
			header("Content=type: text/html charset=".CHARSET);
			$file_name=urlencode_utf8($_G[setting][title]).'.url';
			$content = "[InternetShortcut]
			URL=".$_G[siteurl]."
			IconFile=C:\Windows\system32\SHELL32.dll
			IconIndex=130
			IDList=[{000214A0-0000-0000-C000-000000000046}]
			";
			
			header("Content-type: application/octet-stream");
			header("Accept-Ranges: bytes");
			header("Accept-Length: ".strlen($content)); 
			header("Content-Disposition: attachment; filename=".$file_name);
			echo $content;

		}
		
		function all($tpl=''){
				global $_G;				
				
				
				$url = URL.'a=all';
				$sql = make_sql();
				$size = $_G[setting][cate_page] ? $_G[setting][cate_page] : 120;	
				
				if($_GET[tag]){
					
							$tag  = trim_html($tag,1);
							$tag = daddslashes($_GET[tag]);				
							$and .="AND FIND_IN_SET('".$tag."', keywords) ";
							$url .="&tag=".urlencode_utf8($tag); 	
							$sql['and'] .= $and;
							$sql['url'] .= $url;
							
				}
				$sql['key'] = 'all_';
				$rs = D($sql,array('url'=>$url.$sql[url],'size'=>$size));
				
			
				$title = '';
				if($_GET[tag])$title .= $_GET[tag];
				$title .='全部商品';
				$this->add($rs);
				seo($title);
				$this->show($tpl);
				
		}
			
		function cate(){
				global $_G;
				$and = '';
				$url = URL.'a=cate';
				$id = intval($_GET[id]);
				$cate = $_G[goods_cate][$id];
				$sql = make_sql();
				if(!$cate[id] && !$_G[mobile]){
					msg('分类不存在');
					return false;
				}
				if($id){
					$and .= " AND cate = ".$id;
					$url .="&id=".$id;
				}
				$sql['and'].=$and;
				$sql[url] = $url.$sql[url];
				$size = $cate[page] ? $cate[page]: $_G[setting][cate_page] ;	
				

				$rs = D($sql,array('url'=>$sql[url],'size'=>$size));
				

				$this->add($rs);
				$this->add(array('cate'=>$cate));
				
				seo($cate[title],$cate[keywords],$cate[description]);
				$this->show($cate['tpl'] ? $cate['tpl'] : '');
				
		}
		
		function over(){
					global $_G;
					

					$and=" AND end_time > ".TIMESTAMP;
					$url = URL.'a=over';
					$and.=" AND `check`=1";
					$sql = make_sql();	
					$size = $_G[setting][cate_page] ? $_G[setting][cate_page] : 120;	
					
				
					$rs = D(array('and'=>$and .$sql['and'],'all'=>true,'order'=>' end_time ASC '),
						array('url'=>$url.$sql[url],'size'=>$size));	
					
					seo('已结束活动');
					$this->add($rs);
					$this->show();
		}
		
		function tomorrow(){
					global $_G;
					$h = intval(dgmdate(TIMESTAMP,'H'));
					
					
					if($h<10){		//未到10点显示今日上架的商品
						$start =dmktime(dgmdate(TIMESTAMP,'d'));
						$tomorrow = dmktime(dgmdate(TIMESTAMP+(86400),'d'));
						//$tomorrow = dmktime(dgmdate(TIMESTAMP+(86400*2),'d'));	//在10点和16点中间默认显示
					}else{	//上架第二天的商品
						$start = dmktime(dgmdate(TIMESTAMP+(86400),'d'));
						$tomorrow = dmktime(dgmdate(TIMESTAMP+(86400*2),'d'));
					}
					
					$and 	=' AND start_time>='.$start.' AND start_time<'.$tomorrow;
					$url = URL.'a=tomorrow';
					$and.=" AND `check`=1";
					$sql = make_sql();	
					$size = $_G[setting][cate_page] ? $_G[setting][cate_page] : 120;	
					
					$rs = D(array('and'=>$and .$sql['and'],'all'=>true,'order'=>$sql[order],'key'=>'tomorrow'),
						array('url'=>$url.$sql[url],'size'=>$size));	
					
					$rs[h] = $h;
					seo('明日预告');
					$this->add($rs);
					$this->show();
		}
		function 	history(){
					global $_G;							
					$and =" AND end_time>0 AND end_time < ".TIMESTAMP;
					$and.=" AND `check`=1 AND `hide`=0 ";
					$url = URL.'a=history';
					$sql = make_sql();	
					$size = $_G[setting][cate_page] ? $_G[setting][cate_page] : 120;	
					
					$rs = D(array('and'=>$and.$sql['and'],'order'=>$sql[order],'all'=>true),
						array('url'=>$url.$sql[url],'size'=>$size));
					
					seo('历史活动');
					$this->add($rs);
					$this->show();
		}
		
		function 	today(){
					global $_G;
					$today = dmktime(dgmdate(TIMESTAMP,'d'));
					$tomorrow = dmktime(dgmdate(TIMESTAMP+86400,'d'));
					
					if($_GET[post] == 1){
						$and = " dateline >=$today && dateline < $tomorrow  ";
					}else{
						$and =" start_time >=$today && start_time < $tomorrow  ";
					}
					
					$and.=" AND `check`=1 AND `hide`=0 ";
					$url = URL.'a=today';
					$sql = make_sql();	
					$size = $_G[setting][cate_page] ? $_G[setting][cate_page] : 120;	
					
					$rs = D(array('and'=>$and .$sql['and'],'all'=>true,'order'=>$sql[order],'key'=>'today','time'=>120),
							array('url'=>URL.'a=today'.$sql[url],'size'=>$size));	
					
					seo('今日新品');
					$this->add($rs);
					$this->show();
		}
		
		
		function search(){
				global $_G;
					$and ='';
					$url = URL.'a=search';
				
					$rs = array();

					if($_GET['kw']){		
							$string  = stripsearchkey(trim($_GET['kw']));
							
							if(preg_match("/^%+$|^_+$|^\*+$/is",$string)) {
								msg('非法搜索关键字'); 
							}
							$string = safe_output($string);
							if(dstrlen($string)<2){
								msg('要搜索的关键字长度不能小于2'); 
							}
							$_GET[kw] =$string;
							$and .=" AND title like '%$string%' ";
							$url .="&kw=".urlencode_utf8($string);
							$and.=" AND `check`=1 AND `hide`=0 ";
							$and .= " AND ( end_time = 0 or  end_time > ".TIMESTAMP.")";	
							$sql = make_sql();	
							$size =60;
							
							$rs = D(array('and'=>$and .$sql['and'],'order'=>$sql[order]),
									array('url'=>$url.$sql[url],'size'=>$size));	
							//dump($and .$sql['and'],1);
							
					
					}else if($_GET['price1'] && $_GET['price2']){						
						$sql = make_sql();	
						$size =60;
						$rs = D(array('and'=>$and .$sql['and'],'all'=>true,'order'=>$sql[order],'key'=>'search'),
						array('url'=>$url.$sql[url],'size'=>$size));						
					}
					seo($string.' - 商品搜索');
					$this->add($rs);
					$this->show();

		}
		
		
		function go_pay(){
			global $_G;
			$num_iid = ($_GET['num_iid']);
			$num_iid = get_goods_id($num_iid);
			if(!$num_iid){
				showmessage('宝贝id不正确'); 
				return false;
			}
			
			if($_GET['click'] ==1 ){
				//$click_url = DB::result_first("SELECT click_url FROM ".DB::table('goods')." WHERE num_iid='$num_iid'");

				//$click_url = str_replace('&amp;','&',$click_url);
				//$this->add(array('click_url'=>$click_url));
				//header("Referer:http://ai.taobao.com/auction/edetail.htm");
/*$click_url = 'http://s.click.taobao.com/t?e=m%3D2%26s%3DDv%2FKsL1pGh8cQipKwQzePOeEDrYVVa64qu1K02Mshg5RAdhuF14FMU9qssvvGZ%2Fplovu%2FCElQOugUBjkt1DakAMg8eC0qqGb8lL3kOTMXXIFTLi4DB8uzQDZoj23Uir%2BmNbhwBUv8lcSCsd2fnKqpT7lCjCC8ck8&amp;pvid=200_10.176.139.154_18079_1438337167812&prepvid=200_10.176.139.154_18079_1438337167812&extra=&spm=a231o.7705542.10006.7.c37vsh';*/
				//header("Location:".$click_url);
				//header("Location:/test.php");
			//	exit;
			
			}
			//返利...
			save_fanli($num_iid);
			seo('查看商品详情');
			$this->add(array('num_iid'=>$num_iid));
			$this->show();
		}
		
		
		
		

    function task() {
        seo('积分任务');
        $this->show();
    }

    function yaoqing() {
        global $_G;
        seo('会员邀请赚积分');
        $this->show();
    }
		
		function friend_link(){
				seo('友情链接');
				$this->show();
		}
		
		function share(){
					global $_G;
					
						$type = ($_GET[type]);
						if($_GET[id] || $_GET[aid]){
							$aid = $_GET[id] ? intval($_GET[id]) : intval($_GET[aid]);	
							$goods = D(array('and'=>'and aid = '.$aid));
							if($goods[aid]>0){
								$share = get_share($goods);
							}
							
							$desc = '分享商品-'.$goods[title].'-'.$type.'-aid='.$aid;
							$share_type = 'share_goods';
						}else{
							$share = get_share($goods);
							$desc = '分享站点';
							$share_type = 'share_web';
						}						

						if(isset($share[$type]) && $share[$type]){
							$url =  $share[$type];
							if($_G[uid]){								
								
								$count = getcount('sign'," uid = ".$_G[uid]." AND `desc`='".$desc."' AND type = '".$share_type."'");
								
								$is_add = false;
								if($count == 0 ) $is_add = true;
								$today = dmktime(dgmdate(TIMESTAMP,'d'));
								
								$count_day = getcount('sign'," uid = ".$_G[uid]." AND type = '".$share_type."' AND dateline >=".$today);
								
								if($share_type == 'web' || $share_type == 'share_web'){
									if($count_day > $_G[setting][share_web_num]) $is_add =false;
								}elseif($share_type == 'share_goods'){
									if($count_day > $_G[setting][share_goods_num]) $is_add =false;
								}
								
								
								if($is_add){
										$jf  	=	$_G[setting][share_goods];
										$add_jf = 	$_G['member']['jf']+$jf;
										$sid =insert_sign(array('desc'=>$desc,'type'=>'share_goods','org_jf'=>$add_jf,'jf'=>$jf));
										if($sid){
											update_member(array('jf'=>$_G[member][jf]+$jf),$_G[uid]);
										}
								}
								
							}
						}else{
							$url =  $share['weibo'];
						}
						_header("Location:".$url);
		}
		
		function map(){
			global $_G;
			$tmp = DB::fetch_all("SELECT tag FROM ".DB::table('goods')." WHERE tag != '' ORDER BY aid DESC LIMIT 1000");
			$tags = array();
			foreach($tmp as $k=>$v){
				$tmp2= explode(',',$v[tag]);
				foreach($tmp2 as $v2){
					$tags[] =$v2;
				}
			}
			foreach($_G[setting][goods_tag] as $k=>$v){
				$tags[]=$v;
			}
			$tags = array_filter($tags);
			$tags = array_unique($tags);
			$this->add(array('tags'=>$tags));
			$this->show();			
		}
		
		  
		function rss(){
			global $_G; 
			$goods = DB::fetch_all("SELECT title,aid,dateline FROM ".DB::table('goods')." WHERE `check`=1 AND hide = 0 ORDER BY aid DESC LIMIT 100");

$rs ='<?xml version="1.0" ?>
<rss version="2.0" xmlns:blogChannel="http://backend.userland.com/blogChannelModule">
  <channel>
	<title>'.$_G[setting][title].'</title>
	<link>'.$_G[siteurl].'</link>
	<description>'.trim_html($_G[setting][seo_description],1).'</description>
	<language>zh-cn</language>
	<copyright>'.trim_html($_G[setting][copyright],1).'</copyright>
	<lastBuildDate>'.gmstrftime(TIMESTAMP).'</lastBuildDate>
	<generator>优淘TAE系统'.TTAE_VERSION.' by d_cms@qq.com</generator>
	<managingEditor>'.$_G[setting][admin_email].'</managingEditor>
	<webMaster>85914984@qq.com</webMaster>
	<ttl>40</ttl>';

foreach ($goods as $k=>$v){
	  $rs .='
	  <item>
	  	<title>'.$v[title].'</title>			
		  <category>'.$_G[all_channel][$v[fid]][name].'</category>
		  <description>'.trim_html($v[description].$v[ly],1).'</description>
		  <pubDate>'.gmstrftime('%a,%d %b %Y %H:%M:%S',$v[dateline]).' GMT</pubDate>
		  <guid>'.$_G[siteurl].URL.'aid='.$v[aid].'</guid>
		  <link>'.$_G[siteurl].URL.'aid='.$v[aid].'</link>
	  </item>';
}
$rs .='
  </channel>
</rss>';
			header('Content-Type: text/xml; charset='.CHARSET);
			echo $rs;
		}
		
		
		function rss_task(){
			global $_G;
			$url = $_G[setting][rss_task];
			if(!$url) msg('站点未开启邮箱订阅功能,无法进行订阅');
			$id = sub_str($url,'id=',-1);
			if(!$id) msg('抱歉,订阅链无效');
			
			$email = '';
			if($_GET['email'] || $_GET['to']){
				$email = urldecode_utf8($_GET['email']?$_GET['email'] : $_GET['to']);
			}elseif($_G[uid] && $_G[member][email]){
				$email = $_G[member][email];
			}
			if(!$email){
				msg('必须填写Email地址才能进行订阅..');
			}
			
				
			$this->add(array('email'=>$email,'id'=>$id));
			$this->show();
			
		}
		function app(){
				seo($_G[setting][title].'手机端app');
				$this->show();
		}
		
		function upload(){
			global $_G;

			$arr = array('state'=>'上传失败,文件不存在','url'=>'','title'=>'','original'=>'','type'=>'.jpg','size'=>1);
			if($_FILES['file']){
				$url = upload($_FILES['file']);
				
				if($url && is_string($url)){
					$arr['state']='SUCCESS';
					$arr['url']=$url;
				}
			}
			echo json_encode($arr);
			exit;
		}
		

}
?>