<?php
if(!defined('IN_ADMIN')) exit('Access Denied'); 

class goods extends app{
	
		function search(){
					global $_G;
					if($_GET[onsubmit] && check()){
						$this->main();
						return false;
					}
					$this->show();
		}
		
		function main(){
				global $_G;

				
				if($_GET['onsubmit'] && check()  && $_GET[ids]){
					$page = $_G[page]>1 ? '&page='.$_G[page] : '';
				
					foreach($_GET[ids] as $k=>$v){
								if($_GET[del][$k] ==0) continue;
								$aid = intval($v);
								$arr =array();
								$arr['start_time'] = dmktime($_GET['start_time'][$k]);
								$arr['end_time'] = dmktime($_GET['end_time'][$k]);
								$arr['sort'] =	intval($_GET['sort'][$k]);
								$arr['flag'] =	intval($_GET['flag'][$k]);

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
					$url = '';

					if(($_GET['post']) ==1) $url .= "&post=1";

					
					$page .= $_GET[cur_fid]>0 ? '&fid='.$_GET[cur_fid] : '';
					cpmsg('操作成功','success');
					return false;
				}

				

				if($_GET[search]==1 && $_GET['keyword'] && $_GET[search_type]){
					$keyword = trim($_GET['keyword']);
					$search_type =trim($_GET['search_type']); 
					$and.=" AND `". $search_type."` LIKE '%".$keyword."%'";
					$url.="&search=1&keyword=".urlencode_utf8($keyword).'&search_type='.$search_type;
				}
				
				if($_GET['fid'] && $_GET['fid']>0){
					$fid = intval($_GET['fid']);
					$and .=  " AND fid = $fid ";	
					$url .= "&fid=".$fid;
				}
				if(isset($_GET['checks'])){
					$check = intval($_GET['checks']);
					$and .=  " AND  post >0  AND `check` =".$check;	
					$url .= "&checks=".$check;
				}
				if(isset($_GET['post'])){					
					$and .=  " AND `post` >0";
					$url .= "&post=1";
				}
				
				if(isset($_GET['hide'])){
					$hide = intval($_GET['hide']);
					$and .=  " AND `hide` =".$hide;	
					$url .= "&hide=".$hide;
				}
				if(isset($_GET['flag']) && $_GET['flag']!='-1'){
					$flag = intval($_GET['flag']);
					$and .=  " AND `flag` =".$flag;	
					$url .= "&flag=".$flag;
				}
				if($_GET[cate]>0){
					$cate = intval($_GET[cate]);
					$and .=  " AND `cate` =".$cate;	
					$url .= "&cate=".$cate;
				}
				if($_GET[nick]){
					$nick = urldecode_utf8($_GET[nick]);
					$and .=  " AND `nick` ='$nick'";	
					$url .= "&nick=".$nick;
				}
				
				if(isset($_GET[baoyou])){
					$baoyou = intval($_GET[baoyou]);
					$and .=  " AND `baoyou` =".$baoyou;	
					$url .= "&baoyou=".$baoyou;
				}
				if(isset($_GET[shop_type])  && $_GET['shop_type']!='-1'){
					$shop_type = intval($_GET[shop_type]);
					$and .=  " AND `shop_type` =".$shop_type;	
					$url .= "&shop_type=".$shop_type;
				}
				if($_GET[taoke]==1){
					$taoke = '-1';
					$and .=  " AND `commission` =-1";	
					$url .= "&taoke=-1";
				}
				
				if($_GET[line]>0){
					$line = intval($_GET[line]);
					$time = TIMESTAMP;
					if($line ==1){
						$and .=" AND start_time>0  AND start_time > $time ";
						
					}elseif($line ==2){
						$and .=  " AND end_time>0  AND end_time<".$time;
					}
	
					$url .= "&line=".$line;
				}
				if($_GET[display]>0){
					$time = TIMESTAMP;
					$display = intval($_GET[display]);
					$and .=  " AND `hide`=1 OR `check`=0  OR num =0 OR  (start_time>0  AND start_time> $time )  OR (end_time>0  AND end_time< $time ) ";
					$url .= "&display=".$display;
				}
				
				
				
				if($_GET['commission_down']){
					$commission_down = intval($_GET[commission_down]);
					$and .= " AND bili >=".$commission_down;
					$url.="&commission_down=".$commission_down;
				}
				if($_GET['commission_up']){
					$commission_up = intval($_GET[commission_up]);
					$and .= " AND bili <=".$commission_up;
					$url.="&commission_up=".$commission_up;
					
				}
				
				if($_GET['yh_price_down']){
					$yh_price_down = intval($_GET[yh_price_down]);
					$and .= " AND yh_price >=".$yh_price_down;
					$url.="&yh_price_down=".$yh_price_down;
				}
				if($_GET['yh_price_up']){
					$yh_price_up = intval($_GET[yh_price_up]);
					$and .= " AND yh_price <=".$yh_price_up;
					$url.="&yh_price_up=".$yh_price_up;
				}
				
				
				
				
				$and.=" AND post = 0";
				$rs = D(array('and'=>$and,'all'=>true),array('url'=>URL."m=goods&a=main".$url,'size'=>40));
				foreach($rs['goods'] as $k=>$v){
						$rs['goods'][$k][title] = cutstr($v[title],'60','');
				}
				
				$rs['url']=URL."m=goods&a=main".$url.'&page='.$_G['page'];
				
				$this->add($rs); 
				$this->show('goods/main');
		}
		
		function apply(){
				global $_G;
				$and = ' AND `post` > 0';
				$url = '';
				
				if(isset($_GET['check'])){
					$check = intval($_GET['check']);
					$and .=  " AND `check` =".$check;	
					$url .= "&check=".$check;
				}
				
				$rs = D(array('and'=>$and,'all'=>true),array('url'=>URL."m=goods&a=apply".$url,'size'=>40));
				$this->add($rs); 
				$this->show();
			
		}
		
		function post(){
				global $_G;

				

				 $goods =get_filed(__CLASS__);
				$page = $_G[page]>1 ? '&page='.$_G[page] : '';
				$field = array();
				
				
				if($_GET['onsubmit'] && check() ){		//发布商品
						$arr = array();
						$arr = get_filed(__CLASS__,$_GET['postdb'],$_GET['aid']);
						
						
						
						$arr['images']  = $_GET['images'];
						
						$aid = '';
						$url = '&fid='.$arr['fid'];
						$msg = '发布';

						if($_FILES[file]){	
								$src = upload();
								if($src)	$arr[picurl] = $src;
						}
						
						if($_GET['aid']) {
							 $aid = intval($_GET['aid']);
							 $url = '&aid='.$aid;
							 $msg = '修改';
							 $id=top('goods','update',$arr,$aid);
							 
						}else{
											
							$id=top('goods','insert',$arr);
							$url.='&aid='.$id;
						}
						
						if(CURMODULE == 'goods'){
								$ext = "<p><a href='".URL."m=goods&a=post&fid=".$arr['fid'].$page."'>继续发布</a>&nbsp;&nbsp;&nbsp;&nbsp;";
								$ext.="<a href='".URL."m=goods&a=main".$page."'>返回列表页</a>&nbsp;&nbsp;&nbsp;&nbsp;";
								$ext.="<a href='".URL."m=goods&a=main&fid=".$arr[fid].$page."'>返回栏目列表页</a>";
						}elseif(CURMODULE == 'apply'){							
							$ext.="<a href='".URL."m=apply&a=main".$page."'>返回待审核列表</a>&nbsp;&nbsp;&nbsp;&nbsp;";
						}
						$ext.="</p>";
						
						if($id ===false){
							  cpmsg('发布失败,不能重复发布同一商品','error','m='.__CLASS__.'&a='.__FUNCTION__.'&fid='.$_G[fid]);
						}else{
							cpmsg($msg.'成功','success','m='.CURMODULE.'&a='.__FUNCTION__.$url,'编辑此商品',$ext);
						}
						return false;
					
				}elseif($_GET['get_submit']&& check() && $_GET['goods_id']){	
						
						//提交ID采集商品
					 $goods_id =get_goods_id($_GET['goods_id']);

					  if(!$goods_id) {
						  cpmsg('抓取失败,商品ID或链接不存在或填写错误','error','m='.__CLASS__.'&a='.__FUNCTION__);
						  return false;
					  }
					  if($_GET['goods_aid'] >0) $goods = D(array('and'=>" AND aid = ".intval($_GET['goods_aid']),'limit'=>1,'all'=>true)); 
					  
					  $gd = top('goods','get_goods',$goods_id);
					 
					  $gd[goods_id] = $goods_id;
					 //上线-下线时间默认为5天
					  $tomorrow2= dmktime(dgmdate(TIMESTAMP+(86400),'d') .' 10:00');
					  $tomorrow5= dmktime(dgmdate(TIMESTAMP+(86400*6),'d') .' 10:00');
					  $goods['start_time'] = dgmdate($tomorrow2,'dt');
					  $goods['end_time'] = dgmdate($tomorrow5,'dt');
					  
						$goods['keywords'] = get_keywords($goods['title']);
					
					  if($gd['yh_price'] != $gd['price'] && $gd['yh_price'] && $gd['price']){
						  $gd[zhekou_shu] =sprintf("%.1f",$gd['yh_price']/$gd['price'] * 10);
					  }
					  foreach($gd as $k=>$v){
						  $goods[$k] = $v;
					  }
					 

					  if((!$goods[yh_price])) echo '<h1 class="admin_msg">商品优惠价格采集失败,请注意手动填写</h1>';
				}elseif($_GET['aid']){				
							$aid	= 	intval($_GET['aid']);
							$gd = D(array('and'=>" AND aid = ".$aid,'limit'=>1,'all'=>true)); 
							if(!$gd[aid]){
								 cpmsg('抱歉,未找到任何信息','error');					
								 return false;
							}
							
							$_GET['goods_id']=$gd['num_iid'];

							foreach($gd as $k=>$v){
						  		$goods[$k] = $v;
					  		}
							
							if($_G['setting']['get_message']&& !$goods['message'] ){	 
								 $message = top('m_taobao','get_message',$goods[num_iid]);		
								if($message)		$goods['message']	  = $message;		
							}
							
							
				}else{
					$_GET[goods_id] = '';
					$goods =get_filed(__CLASS__);
					
					 //上线-下线时间默认为5天
					  $tomorrow2= dmktime(dgmdate(TIMESTAMP+(86400),'d') .' 10:00');
					  $tomorrow5= dmktime(dgmdate(TIMESTAMP+(86400*6),'d') .' 10:00');
					  $goods['start_time'] = dgmdate($tomorrow2,'dt');
					  $goods['end_time'] = dgmdate($tomorrow5,'dt');

				}
				
				
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
				  
					 
					  
				$this->add(array('goods'=>$goods,'field'=>$field,'bm_status_text'=>$bm_status_text));
				$tpl = '';
				if(!$_GET[fid] && !$_GET['aid'])$tpl = "goods/select_post";
				$this->show($tpl);
		}

	function check(){
			$check = intval($_GET[check]);		
			ajax_check(__CLASS__,array('check' => $check,'dateline'=>TIMESTAMP),'aid='.intval($_GET[aid]));
	}
	
		function check1(){
					global $_G;
					if(!$_GET['aid']) {
						cpmsg('抱歉,要审核的ID不存在','error',"m=goods&a=main");
						return false;
					}
					$aid = intval($_GET['aid']);
					$check = intval($_GET['check']);
					DB::update("goods",array('check'=>$check),"aid=".$aid);
					$page = $_G[page]>1 ? '&page='.$_G[page] : '';
					cpmsg('操作成功','error',"m=goods&a=main".$page);
					return false;
		}
		
		function del(){
					global $_G;
					$page = $_G[page]>1 ? '&page='.$_G[page] : '';
					if(!$_GET['aid']) {
						msg('抱歉,要删除的栏目ID不存在','error',"m=channel&a=main".$page);
						return false;
					}
					$aid = intval($_GET['aid']);
					
					if(!$_GET['ok']){
						msg('您确定要删除当前商品信息吗?删除后不可恢复?','error',"m=goods&a=del&ok=1&aid=".$aid.$page,'确定删除',"<p><a href='".URL."m=goods&a=main".$page."'>取消</a></p>");
						return false;
					}else{
						$num_iid = DB::result_first("SELECT num_iid FROM ".DB::table('goods')." WHERE aid = ".$aid);
						api_post(array('a'=>'delete','table'=>'goods','id'=>$num_iid,'pre_key'=>'num_iid'));
						
						DB::delete("goods","aid=".$aid);
						msg('删除成功','error');
						return false;
					}
		}
		
		function cate_add(){
					global $_G;
					
					if($_GET['onsubmit'] && check() ){
						$cate = get_filed('cate',$_GET['postdb'],$_GET['id']);
						$cate['page'] = $cate['page'] ? intval($cate['page']) : 20;
						$url = '';
						if($_FILES[file]){	
								$pic= upload();
								if($pic)$cate[picurl]  = $pic;
						}
							
						if($_GET['id']){
							$id = intval($_GET['id']);
							$r =DB::update('cate',$cate,"id=".$id);
							if($r>0)api_post(array('a'=>'update','table'=>'cate','data'=>$cate,'pre_key'=>'id','id'=>$id,'cache'=>'cate'));	
							$url = '&id='.$id;
							$msg = '修改';
						}else{
							$msg = '添加';
							$cate['dateline'] = TIMESTAMP;
							
							$r = DB::insert('cate',$cate,true);
							if($r>0) api_post(array('a'=>'insert','table'=>'cate','data'=>$cate,'cache'=>'cate','id'=>$r));
						}
						loadcache("cate",'update');
						cpmsg($msg.'分类成功','success','m='.__CLASS__.'&a='.__FUNCTION__.$url);
						return false;
					}elseif($_GET['id']) {
						$id = intval($_GET['id']);
						$cate = $_G['cate'][$id];
					}else{
						$cate = get_filed('cate');
					}
				
					$this->add(array('cate'=>$cate));
					$this->show();
		}
	
	function update(){
		global $_G;
		$success = 0;
		$type = $_G['setting']['api_type'];
		if(!$_GET[num_iid]) msg('商品num_iid不存在');
		
		//1,用淘宝客权限的API来获取,只能获取部分字段,一次最多10条,只能用open_iid
		//2,用百川高级商品权限,获取字段较多较完整,可返回open_iid,num_iid,url . 一次最多50条, 可用num_iid,open_iid	(推荐)
		//3,远程抓取,一般外站来用

		//0=阿里妈妈淘客	1 = 百川淘宝客	
		
		if($type == 1){	
			$rs = top('baichuan','get_goods',$_GET[num_iid]);	
			
			if(!$rs){
				msg('更新失败'+$_G['msg']);
			}
			if($rs['num_iid']) $rs = array($rs);
			foreach($rs as $k=>$v){
				if(!$v['num_iid']) continue;
				$id = $v['num_iid'];
				
				$v['dateline'] = TIMESTAMP;
				$len = DB::update('goods',$v,"num_iid='$id'");			
				if($len>0) $success++;
			}
		}else if($type == 0){						
			$tmp = explode(',',trim($_GET[num_iid]));
			$arr = array();
			foreach($tmp as $k=>$v){
				$arr[$v.''] = array('num_iid'=>$v);
			}
			
			$rs = top('tbk','extends_info_j',$arr);
			
			foreach($rs as $k=>$v){
				$id = $v['num_iid'];
				$v['dateline'] = TIMESTAMP;
				if(is_array($v['images'])) $v['images'] = implode(',',$v['images']);
				$len = DB::update('goods',$v,"num_iid='$id'");			
				if($len>0) $success++;
			}
		}else{
			$tmp = explode(',',trim($_GET[num_iid]));
			$ids = array();		
			$m = top('m_taobao');		
			foreach($tmp as $k=>$v){
				$v = get_goods_id($v);
				$len = $m->get($v,true);			
				if($len>0) $success++;
			}
			
		}
		json(array('status'=>'success','len'=>$success,'data'=>''));
		
	}
	

	//	new cate(分类的类型,数据表名);
	
		function cate(){
			require_once libfile('class/cate');
			$cate = new cate(__CLASS__,__CLASS__);
			$cate->main();
		}
		function cate_post(){
			require_once libfile('class/cate');
			$cate = new cate(__CLASS__,__CLASS__);
			$cate->post();
		}
		
		function cate_clear(){
			require_once libfile('class/cate');
			$cate = new cate(__CLASS__,__CLASS__);
			$cate->clear();
		}
		function batpost(){
			require_once libfile('class/cate');
			$cate = new cate(__CLASS__,__CLASS__);
			$cate->batpost();
		}
		function cate_del(){
			require_once libfile('class/cate');
			$cate = new cate(__CLASS__,__CLASS__);
			$cate->del();
		}
		
	
}
?>