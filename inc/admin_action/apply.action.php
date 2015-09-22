<?php
if(!defined('IN_ADMIN')) exit('Access Denied'); 
include_once ROOT_PATH.'inc/admin_action/goods.action.php';

class apply extends app{
	
		
		
		
		
		function main(){
				global $_G;
				
				
				if($_GET['onsubmit'] && check()  && !$_GET[search]){
					$page = $_G[page]>1 ? '&page='.$_G[page] : '';
					foreach($_GET[ids] as $k=>$v){
								if($_GET[del][$k] ==0) continue;
								$aid = intval($v);
								$arr =array();
								$arr['start_time'] = dmktime($_GET['start_time'][$k]);
								$arr['end_time'] = dmktime($_GET['end_time'][$k]);
								$arr['sort'] =	intval($_GET['sort'][$k]);


								if(	$_GET['cate'][$k] > 0) $arr['cate'] = intval($_GET['cate'][$k]);
								
								$arr['hide'] =	intval($_GET['hide'][$k]);
		
								if($_GET['cate_in'] != '-1') $arr['cate'] =	intval($_GET['cate_in']);	
								if($_GET['flag_in'] >0) $arr['flag'] 	=	intval($_GET['flag_in']);	
								if($_GET['hide_in'] ==1 ) $arr['hide'] =	1;							
								if(($_GET['check'] ==1)) $arr['check'] =	1;
								if($_GET['in_fid']) $arr['fid'] = intval($_GET['in_fid']);
								
								
								if($_GET['start_time_in'] && dmktime($_GET['start_time_in'])>0){
									$arr['start_time'] = dmktime($_GET['start_time_in']);
								}
								if($_GET['end_time_in'] && dmktime($_GET['end_time_in'])>0){
									$arr['end_time'] = dmktime($_GET['end_time_in']);
								}
								$num_iid = $_GET['num_iid'][$k];								
								if($_GET['_del_all']==1 && $_GET['del'][$k]){
									api_post(array('a'=>'delete','table'=>'goods','id'=>$num_iid,'pre_key'=>'num_iid'));
									DB::delete("goods","aid=".intval($aid));
								}else{
									api_post(array('a'=>'update','table'=>'goods','data'=>$arr,'pre_key'=>'num_iid','id'=>$num_iid));	
									DB::update("goods",$arr,"aid=".$aid);
									
								}
					}
					
				
					 
					  
				$this->add(array('goods'=>$goods,'field'=>$field,'bm_status_text'=>$bm_status_text));
				
					$url = '';
					cpmsg('操作成功','success');
					return false;
				}
				
				
				
				$and = ' AND `post` > 0';
				$url = '';
				if(isset($_GET['checks'])){
					$check = intval($_GET['checks']);
					$and .=  " AND `check` =".$check;	
					$url .= "&checks=".$check;
				}
				
				$rs = D(array('and'=>$and,'all'=>true,'order'=>'aid ASC'),array('url'=>URL."m=apply&a=main".$url,'size'=>40));
				
				
					
				if($_G[setting][bm_status_text]){
					if(!is_array($_G[setting][bm_status_text])) {
						$bm_status_text = array();
						$tmp = explode("\r\n",$_G[setting][bm_status_text]);
						foreach($tmp as $k=>$v){
							$v = explode("|",$v);
							$bm_status_text[$v[0]] = array('status'=>$v[0],'name'=>$v[1],'content'=>$v[2]);
						}
						
					}else{
						$bm_status_text=$_G[setting][bm_status_text];
					}
					
				}
				  
				  $rs[bm_status_text]=$bm_status_text;
				  
				$this->add($rs); 
				$this->show('apply/main');

		}
		

		
		function post(){
				global $_G;
				$a_goods = new goods;
				$a_goods->post();
		}

		function check(){
					global $_G;
					$a_goods = new goods;
					$a_goods->check();
		}
		
		function del(){
					global $_G;
					$a_goods = new goods;
					$a_goods->del();
		}
		
		
		function setting(){
				global $_G;
				global $_G;
				if($_GET['onsubmit'] && check() ){
					insert_setting();					
					cpmsg('修改成功','success','m='.__CLASS__.'&a='.__FUNCTION__);
					return false;
				}

			$this->show();
	}
	
		
		
}
?>