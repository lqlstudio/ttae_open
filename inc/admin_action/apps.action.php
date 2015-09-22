<?php
if(!defined('IN_ADMIN')) exit('Access Denied'); 

class apps extends app{
		function main(){
			$this->hdp();
		}
	
		function version(){
			global $_G;
			if($_GET['onsubmit'] && check() ){
				insert_setting();
				cpmsg('修改成功','success','m=apps&a=version');
				return false;
			}
			$this->show();
		}
		
		
		function hdp(){
				global $_G;
				if($_GET['onsubmit'] && check() ){
					$arr = array();
					
					foreach($_POST[picurl] as $k=>$v){
						$tmp = array();
						$tmp['picurl'] = $_POST[picurl][$k];
						$tmp['url'] =$_POST[url][$k];
						$tmp['title'] =$_POST[title][$k];
						if($_FILES['file'.$k]){							
							$pic = upload($_FILES['file'.$k]);
							if($pic)$tmp['picurl'] = $pic;
						}

						if(!$tmp['picurl'] && $tmp['url']) continue;
						$arr[] = $tmp;
					}
					
					$arr = serialize($arr);
					if(isset($_G['setting']['app_hdp'])){
						set_setting('app_hdp',$arr );
					}else{
						insert_setting('app_hdp',$arr );
					}
					loadcache('setting','update');
					cpmsg('修改成功','success','m=apps&a=hdp');
					return false;
				}

			
			if($_G[setting]['app_hdp']){
				$hdp = dunserialize($_G[setting]['app_hdp']);
			}else{
				$hdp = array(array('picurl'=>'','url'=>''));
			}
			
			$size = 6;
			$this->add(array('hdp'=>$hdp,'size'=>$size ));
			$this->show('apps/hdp');
		}
		
		function nav(){
				global $_G;
				if($_GET['onsubmit'] && check() ){
					$arr = array();
					
					foreach($_POST[name] as $k=>$v){
						
						$tmp = array();
						$tmp['name'] = $_POST[name][$k];
						$tmp['url'] =$_POST[url][$k];
						if(!$tmp[name] && $tmp['url']) continue;
						$arr[] = $tmp;
					}
					
					
					$arr = serialize($arr);
					if(isset($_G['setting']['app_nav'])){
						set_setting('app_nav',$arr );
					}else{
						insert_setting('app_nav',$arr );
					}
					loadcache('setting','update');
					cpmsg('修改成功','success','m=apps&a=nav');
					return false;
				}

			
			if($_G[setting]['app_nav']){				
				$hdp = dunserialize($_G[setting]['app_nav']);
			}else{
				$hdp = array(array('name'=>'','url'=>''));
				//$nav = array(array('name'=>'给家换新衣','url'=>'#4','name'=>'百变萝莉','url'=>'#3'	,'name'=>'腊八专场','url'=>'#2'	,'name'=>'吃货9.9','url'=>'#1'));
			}

			$size = 4;
			$this->add(array('hdp'=>$hdp,'size'=>$size ));
			$this->show();
		}
		
		
		
		function gezi(){
				global $_G;
				if($_GET['onsubmit'] && check() ){
					$arr = array();
					
					foreach($_POST[picurl] as $k=>$v){
						$tmp = array();
						$tmp['picurl'] = $_POST[picurl][$k];
						$tmp['url'] =$_POST[url][$k];
						$tmp['title'] =$_POST[title][$k];
						if($_FILES['file'.$k]){							
							$pic = upload($_FILES['file'.$k]);
							if($pic)$tmp['picurl'] = $pic;
						}

						if(!$tmp['picurl'] && $tmp['url']) continue;
						$arr[] = $tmp;
					}
					
					$arr = serialize($arr);
					if(isset($_G['setting']['app_gezi'])){
						set_setting('app_gezi',$arr );
					}else{
						insert_setting('app_gezi',$arr );
					}
					loadcache('setting','update');
					cpmsg('修改成功','success','m=apps&a=gezi');
					return false;
				}

			
			if($_G[setting]['app_gezi']){
				$hdp = dunserialize($_G[setting]['app_gezi']);
			}else{
				$hdp = array(array('picurl'=>'','url'=>''));
			}
			$size = 6;
			
			$this->add(array('hdp'=>$hdp,'size'=>$size ));
			$this->show('apps/gezi');
		}
		
		
}
?>