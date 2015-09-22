<?php
define('IN_TTAE',true);
class app{
	
	 function add($arr){
					global $assign;
					if(!$arr|| !is_array($arr)) return false;
					foreach($arr as $k=>$v){
						if($k){
							$assign[$k]  = $v;
						}
					}

	}

	function data_api(){
							//加载用户数据接口
							if(defined('ERROR') === true) return false;
							include_once TPLDIR.'/data_api.php';
							$data = array();
							if(class_exists('data_api')){
								$data_api = new data_api();
								$module = CURMODULE;
								if(method_exists($data_api,$module)){									
									$data = $data_api->$module();
									if($data && is_array($data))$this->add($data);
								}
								$curmodule = CURMODULE.'_'.CURACTION;
								if(method_exists($data_api,$curmodule)){									
									$data = $data_api->$curmodule();
									if($data && is_array($data))$this->add($data);
								}
								if(method_exists($data_api,'main')){									
									$data = $data_api->main();
									if($data && is_array($data))$this->add($data);
								}
								unset($data_api);
							}
							
							return $data;
	}
	 function show($tpl='',$dir=''){
					global $_G,$assign;
					if($_G['is_show']) return ;
					$_G['is_show'] = true;
					
					include ROOT_PATH.'web/smarty/Smarty.class.php';	
					$smarty =	new Smarty();	
					
					
					/*	
					include  ROOT_PATH.'web/smarty/SimpleSmarty.php';	
					$smarty =	new SimpleSmarty();	
					$smarty->compile_dir = ROOT_PATH.'web/templates_c';
					$smarty->caching = true;
					
					*/
					
					/*if(DEBUG === true){
						$smarty->force_compile = true;
					}else{
						$smarty->compile_check = false;
					}*/
			
					if(defined('IN_ADMIN')){						
						$smarty->assign("menu", $_G['menu']);
						$_G['version'] = TTAE_VERSION;
						$_G['update_time'] = TTAE_UPDATE_TIME;
						
						
					}else{
						$this->data_api();
					}					
				
					$tae = TAE == true ? 1 : 0;
					
					if($_G['adminid'] ==1 &&DEBUG)$_G['runtime'] = (microtime(true) - $_G['starttime']);
					
					$smarty->assign("MOBILE", MOBILE?1:0);

					$smarty->assign("CURSCRIPT", CURSCRIPT);
					$smarty->assign("CURMODULE", CURMODULE);					
					$smarty->assign("CURACTION", CURACTION);
					
					$smarty->assign("CM", CURMODULE);					
					$smarty->assign("CA", CURACTION);					
					$smarty->assign("SYSTEM_TYPE", SYSTEM_TYPE);
					$smarty->assign("TAE", $tae);
					$smarty->assign("CSSDIR", CSSDIR);
					$smarty->assign("JSDIR", JSDIR);
					$smarty->assign("IMGDIR", IMGDIR);
					$smarty->assign("TPLDIR", TPLDIR);
					$smarty->assign("ASSDIR", '/assets/'.TPLNAME.'/'.CURMODULE);
					$smarty->assign("TPLDIR", '/assets/'.TPLNAME.'/');
					
					
					$commondir = '/assets/common/';
					if($_G[mobile])$commondir = '/assets/common_mobile/';
					$smarty->assign("COMMONDIR",$commondir);
					$smarty->assign("TPLNAME", TPLNAME);
					$smarty->assign("URL",URL);

					$css ='<link rel="stylesheet" type="text/css" href="'.CSSDIR.'/'.CURMODULE.'.css" media="all" />';
					$smarty->assign("CSS", $css);
					$js ='<script type="text/javascript" src="'.JSDIR.'/'.CURMODULE.'.js" ></script>';
					$smarty->assign("JS", $js);
					
					$safe_get = safe_output($_GET);					
					$query_text = http_build_query($safe_get);
					$smarty->assign("query_text",$query_text);
					$smarty->assign("_GET", $safe_get);
					$unset = array('table','_config','goods_sql','memory_list','cache_list');
					$tmp = array();
					foreach($_G as $k=>$v){
						if(!in_array($k,$unset)) $tmp[$k]= $v;
					}
					
					$smarty->assign("_G", $tmp);					
					if(count($assign)>0){
						foreach($assign as $k=>$v){							
							$smarty->assign($k, $v);
						}
					}
					
					if($_G[mobile] && $_G[setting][cnzz_id]){
						include_once ROOT_PATH.'web/lib/cs.php';	
						$cnzz = '';
						$cnzz_img_url = _cnzzTrackPageView($_G[setting][cnzz_id]);
						if(strpos($cnzz_img_url,'http') !== false){
							$cnzz = '<img src="'.$cnzz_img_url.'" style="display:none;" class="cnzz_img" >';
						}
						$smarty->assign("cnzz", $cnzz);						
					}
					unset($assign);
					$data = array();
					$data[] = $tae;
					$data[] = CURSCRIPT;
					$data[] = CURMODULE;
					$data[] = CURACTION;					
					$data[] = $_G[uid];
					$data[] = $_G[username];
					$data[] = 1;		//前台获取商品方法,1=用m_taobao,其它就是用淘点金
					$global_str = implode('|',$data);
					$smarty->assign("global_str", $global_str);	
					
					$dir = $dir ? $dir : TPLDIR;
					
					
					
					$common_dir  = ROOT_PATH.'view/common';
					if($_G['mobile'] == true)$common_dir.='_mobile';
					
					if($tpl){
						$show_tpl=($dir.'/'.$tpl.'.php');
						$show_tpl2=($common_dir.'/'.$tpl.'.php');
					}else{								
						$show_tpl=($dir.'/'.CURMODULE.'/'.CURACTION.'.php');
						$show_tpl2=($common_dir.'/'.CURMODULE.'/'.CURACTION.'.php');
					}
					if(!is_file($show_tpl)) {
						if(!is_file($show_tpl2)){
							$show_tpl = str_replace(array(ROOT_PATH.'view/'.TPLNAME.'/','.php'),'',$show_tpl);
							msg('Unable to load template file '.$show_tpl);
						}else{
							$show_tpl = $show_tpl2;
						}
					}
		
					try{						
						$smarty->display($show_tpl);
						$obj = DB::$db;
						if($_G[adminid] ==1 && isset($_GET['debug'])){	
						
						}else{
							unset($smarty,$data,$app,$obj,$db,$_confog);
						}
					}catch (Exception $e){
						
								//$e->trace = '';
								$file = end(explode('\\',$e->getFile()));
								$msg = '<br/> File : '.$file  . ' On line '.$e->getLine() . ' Code '.$e->getCode();
								$msg = $e->getMessage().$msg;
								$msg = str_replace(ROOT_PATH.'view/','',$msg);	
								//system_error('system',$msg);
								msg($msg);
								exit;
					}		
					
					output();
					
					if($_G[adminid] ==1 && isset($_GET['debug'])){						
					
						include_once libfile('function/debug');
					}
					if($_GET['update'] ==1 && $_G[adminid] ==1 ){
						memory('clear');
					}
					unset($_G);
					
					
			}
}

?>