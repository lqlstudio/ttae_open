<?php
if(!defined('IN_ADMIN')) exit('Access Denied'); 

class admin extends app{
	
		function main(){
				global $_G;
				$msg = '您当前已正常安装运行,为安全考虑请删除根目录下的';
				$file = ROOT_PATH.'install.php';
				if(is_file($file)) msg($msg.'install.php和/install/目录,防止被恶意或失误重装','','m=admin&a=setting','我知道了');
				$file2 = ROOT_PATH.'updata.php';
				if(is_file($file2)) msg($msg.'updata.php,防止被恶意或误升级','','m=admin&a=setting','我知道了');
				
				$this->setting();
		}
		
		function seo(){
			global $_G;
			if($_GET['onsubmit'] && check() ){
				insert_setting();
				cpmsg('修改成功','success','m=admin&a=seo');
				return false;
			}
			$this->show();
		}
		
		
		function app(){
			global $_G;
			if($_GET['onsubmit'] && check() ){
				insert_setting();
				cpmsg('修改成功','success','m=admin&a=app');
				return false;
			}
			$this->show();
		}
		
		function mobile(){
			global $_G;
			if($_GET['onsubmit'] && check() ){				
				
				$url = $_GET[postdb][mobile_host];
				if($url){
					if(strpos($url,'http://') === false){
						msg('域名不正确');
						return false;
					}
					$arr = parse_url($url);			
					if(strpos($arr[host],'.') === false){
						msg('域名不正确');
						return false;
					}
					$_GET[postdb][mobile_host] = 'http://'.trim($arr[host],'/');
				}
				
				insert_setting();
				cpmsg('修改成功','success','m=admin&a=mobile');
				return false;
			}
			$this->show();
		}
		
		function reg(){
				global $_G;
				if($_GET['onsubmit'] && check() ){
					insert_setting();
					
					cpmsg('修改成功','success','m=admin&a=reg');
					return false;
				}
			$this->show();
		}
		

		function syn(){
				global $_G;
				
				if($_GET['onsubmit'] && check() ){				
							$syn_table = $syn_domain = '';
							if($_GET[syn_table] && count($_GET[syn_table])>0) {
								$f = array();
								foreach($_GET[syn_table] as $k=>$v){
									$f[] = $k;
								}
								if($f && count($f)>0)$syn_table = implode(',',$f);
							}
								
							$syn_domain	 =trim($_GET[syn_domain]);
							$syn_insert	 = intval($_GET[syn][syn_insert]);
							$syn_update	 = intval($_GET[syn][syn_update]);
							$syn_delete	 = intval($_GET[syn][syn_delete]);
							if(!isset($_G['setting']['syn_table'])){								
								insert_setting('syn_insert',$syn_insert);
								insert_setting('syn_update',$syn_update);
								insert_setting('syn_delete',$syn_delete);
								insert_setting('syn_table',$syn_table);
								insert_setting('syn_domain',$syn_domain);
								
							}else{								
								set_setting('syn_insert',$syn_insert);
								set_setting('syn_update',$syn_update);
								set_setting('syn_delete',$syn_delete);
								set_setting('syn_table',$syn_table);
								set_setting('syn_domain',$syn_domain);
							}
							
							
							insert_setting();
							cpmsg('修改成功','success','m=admin&a=syn');
							return false;
				}
				
				
				
				$syn_table = array(
							
							'channel'=>array('key'=>'channel','name'=>'栏目','check'=>0),
							'goods'=>array('key'=>'goods','name'=>'商品','check'=>0),
							'cate'=>array('key'=>'cate','name'=>'商品分类','check'=>0),							
							'shop'=>array('key'=>'shop','name'=>'店铺','check'=>0),
							'shop_type'=>array('key'=>'shop_type','name'=>'店铺分类','check'=>0),						
							'pics'=>array('key'=>'pics','name'=>'幻灯片','check'=>0),
							'pics_type'=>array('key'=>'pics_type','name'=>'幻灯片分类','check'=>0),
							'reward'=>array('key'=>'reward','name'=>'奖品','check'=>0),
							'reward_goods'=>array('key'=>'reward_goods','name'=>'抽奖商品','check'=>0),
							'ticket'=>array('key'=>'ticket','name'=>'中奖码','check'=>0),
							'ad'=>array('key'=>'ad','name'=>'广告','check'=>0),
							'friend_link'=>array('key'=>'friend_link','name'=>'友情链接','check'=>0),
							'article'=>array('key'=>'article','name'=>'文章','check'=>0),
							
				);
				
				include libfile('config/admin');			
				foreach($syn_table as $table=>$v1){			
						if(!array_key_exists($table,$menu)){
							  $v1['exists'] = false;
							  foreach($menu as $k=>$v){
								  if(array_key_exists($table,$v['nav'])){
									  $v1['exists'] = true;
								  }
							  }
							  if(!$v1['exists']) unset($syn_table[$table]); 
						}
				
				}
			
				
				if($_G['setting']['syn_domain'])$_G['setting']['syn_domain'] = implode("\r\n",$_G['setting']['syn_domain']);
				if($_G['setting']['syn_table']){
					foreach($_G['setting']['syn_table'] as $k=>$v){
						if($syn_table[$v])$syn_table[$v]['check']=1; 
						
					}
				}

				$this->add(array('syn_table'=>$syn_table));
				$this->show();
		}
		
		function sign(){
				global $_G;
				$size = $_G[setting][qd_days] ? $_G[setting][qd_days] : 7;
				$sign = array_fill(1,$size,'');
				$sign['n'] = '';

				if($_GET['onsubmit'] && check() ){
										$qd = $_GET[qd];
										$t = $_GET['tb'];
										$sign_jf = array();					
										
										foreach($qd as $k=>$v){
											$sign_jf[$k] =intval($v);
										}					
										$sign_jf = serialize($sign_jf);
										if(!isset($_G['setting'][sign_jf])){
												insert_setting('sign_jf',$sign_jf);
										}else{
												set_setting('sign_jf',$sign_jf);
										}
										
										$t = explode("\r\n",$t);
										$sign_tb = array();
										if($t){
											foreach($t as $k=>$v){							
												list($d,$value) = explode('=',$v);
												if($d>0 && $value>0){
													$sign_tb[$d] = intval($value);
												}
											}
										}
										
										if($sign_tb){
												$sign_tb = serialize($sign_tb);
												if(!isset($_G['setting'][sign_tb])){
													insert_setting('sign_tb',$sign_tb);
												}else{
													set_setting('sign_tb',$sign_tb);
												}
										}
										
										insert_setting();
									
										cpmsg('修改成功','success','m=admin&a=sign');
										return false;		

				}

				$tb = '';
				
				if(count($_G[setting][sign_tb])>0){
					
						foreach($_G[setting][sign_tb] as $k=>$v){
							
							$tb .= $k.'='.$v."\r\n";
						}				
				}
				//$sign = $_G[setting][sign_jf];
				foreach($sign as $k=>$v){
					$sign[$k] =$_G[setting][sign_jf][$k]; 
				}
				
				
				$this->add(array('sign'=>$sign,'tb'=>$tb));
				$this->show();
		}
		
		
		function setting(){
				global $_G;
				
				if($_GET['onsubmit'] && check() ){

					if($_GET[postdb][siteurl2]) $_GET[postdb][siteurl2]= preg_replace("/\/$/",'',$_GET[postdb][siteurl2]);
		
					insert_setting();		
					if($_FILES[file]){				
						$src = upload();
						if($src){
								set_setting('logo',$src);
								loadcache('setting','update');
						}
					}					
					cpmsg('修改成功','success','m=admin&a=setting');
					return false;
				}
				
				
				if($_G[setting]['wangwang'] ){
					foreach($_G[setting]['wangwang'] as $k=>$v){						
						$_G[setting]['wangwang'][$k] =urldecode_utf8($v);
					}
					$_G[setting]['wangwang'] = implode(',',$_G[setting]['wangwang']);
				}
				if($_G[setting]['qq'] ){
					foreach($_G[setting]['qq'] as $k=>$v){						
						$_G[setting]['qq'][$k] =urldecode_utf8($v);
					}
					$_G[setting]['qq'] = implode(',',$_G[setting]['qq']);
				}
				 $this->show('admin/setting');
		}
		function config(){
				global $_G;
				if($_GET['onsubmit'] && check() ){
					
					insert_setting();
					
					cpmsg('修改成功','success','m=admin&a=config');
					return false;
				}
				
				
			$this->show();
		}
		
		function tag(){
				global $_G;
				if($_GET['onsubmit'] && check() ){
					insert_setting();
					cpmsg('修改成功','success','m=admin&a=tag');
					return false;
				}
				if($_G['setting']['flag'] && is_array($_G['setting']['flag'])){
					$_G[setting]['flag'] = implode(',',$_G[setting]['flag']);
				}
				if($_G['setting']['shop_tag'] && is_array($_G['setting']['shop_tag'])){
					$_G[setting]['shop_tag'] = implode(',',$_G[setting]['shop_tag']);
				}
				
				if($_G['setting']['article_tag'] && is_array($_G['setting']['article_tag'])){
					$_G[setting]['article_tag'] = implode(',',$_G[setting]['article_tag']);
				}

				if($_G['setting']['brand_type'] && is_array($_G['setting']['brand_type'])){
					$_G[setting]['brand_type'] = implode(',',$_G[setting]['brand_type']);
				}
				
				if($_G['setting']['tags'] && is_array($_G['setting']['tags'])){
					$_G[setting]['tags'] = implode(',',$_G[setting]['tags']);
				}
			$this->show();
		}
		
		function email(){
				global $_G;
				if($_GET['onsubmit'] && check() ){					
					$email = ($_GET[postdb]);					
					$email = serialize($email);
					
					if(!isset($_G['setting']['email'])){
						insert_setting('email',$email );
					}else{
						set_setting('email',$email);
					}
					
					
					cpmsg('修改成功','success','m=admin&a=email');
					return false;
				}
			$this->show();
		}
		function share(){
				global $_G;
				if($_GET['onsubmit'] && check() ){
					insert_setting();
					
					cpmsg('修改成功','success','m=admin&a=share');
					return false;
				}
			$this->show();
		}
		function caiji(){
				global $_G;
				
				
				
				if($_GET['onsubmit'] && check() ){
					$field ='';
					if($_GET[field] && count($_GET[field])>0) {
						$f = array();
						foreach($_GET[field] as $k=>$v){
							$f[] = $k;
						}
						if($f && count($f)>0)$field = implode(',',$f);
					}					
					if(!isset($_G['setting']['filter_field'])){
						insert_setting('filter_field',$field );
					}else{
						set_setting('filter_field',$field);
					}
					
					insert_setting();
					cpmsg('修改成功','success','m=admin&a=caiji');
					return false;
				}
				
				$field = array(
							'picurl'=>array('key'=>'picurl','name'=>'主图','check'=>0),
							'title'=>array('key'=>'title','name'=>'标题','check'=>0),
							'num'=>array('key'=>'num','name'=>'库存数量','check'=>0),
							'yh_price'=>array('key'=>'yh_price','name'=>'优惠价','check'=>0),
							'sum'=>array('key'=>'sum','name'=>'销量','check'=>0),
							'views'=>array('key'=>'views','name'=>'收藏','check'=>0),
							'message'=>array('key'=>'message','name'=>'详情','check'=>0),
				);
			
				if($_G['setting']['filter_field']){
					foreach($_G['setting']['filter_field'] as $k=>$v){
						$field[$v]['check']=1;
					}
				}
				$this->add(array('field'=>$field));
				 $this->show();
		}
		
		function login_setting(){
				global $_G;
				if($_GET['onsubmit'] && check() ){
					insert_setting();
					
					cpmsg('修改成功','success','m=admin&a=login_setting');
					return false;
				}
				$this->show();
		}
}
?>