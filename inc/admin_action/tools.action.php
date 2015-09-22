<?php
if(!defined('IN_ADMIN')) exit('Access Denied'); 

class tools extends app{
	
		function main(){
         global $_G;
				$time = TIMESTAMP;
				$del[line] = getcount('goods'," end_time>0  AND end_time<".$time);
				$del[hide] = getcount('goods'," `hide` =1 or num=0 " );
				$del[baoyou] = getcount('goods'," `baoyou` =0 ");
				$del[tk] = getcount('goods'," bili ='-1' ");
				$del['sort'] = getcount('goods'," `sort` >0 ");
				
				$day0 = dmktime($_G[today]);
				$day3 =  dmktime(dgmdate(TIMESTAMP-3 *86400 ,'d'));
				$day7 =  dmktime(dgmdate(TIMESTAMP-7 *86400 ,'d'));
				$day30 =  dmktime(dgmdate(TIMESTAMP-30*86400 ,'d'));
				
				
				$day[d0] = getcount('goods',"posttime>".$day0);
				$day[d3] = getcount('goods',"posttime>".$day3);
				$day[d7] = getcount('goods',"posttime>".$day7);
				$day[d30] = getcount('goods',"posttime>".$day30);

				
				$this->add(array('del'=>$del,'day'=>$day)); 
				$this->show('tools/main');
		}
		
		function cache(){
					global $_G;
					if($_GET['onsubmit'] && check() ){
							if($_GET[postdb][system_cache] ==1){	
									memory('clear');
									loadcache ($_G[_config][cache_list],'update');
							}							
							api_post(array('m'=>'cache','a'=>'update','cache_list'=>implode(',',$_G[_config][cache_list])));
							remove_dir('web/templates_c/');
							
							cpmsg('更新成功','success','m=tools&a=cache');
							return false;
					}
					 $this->show('tools/cache');
		}
		
		function sql_runquery(){
				global $_G;				
				if($_GET['onsubmit'] && check()  && $_GET['query_string']){
					$query_string = trim($_GET['query_string']);
					if(strstr($query_string,';'))  $query_string = explode(';',$query_string);
					$query_string = (array)$query_string; 
					$update = true;

					$msg = '';
					$query_string = array_filter($query_string);
					$query_string = array_unique($query_string);
					$i = 0;
					foreach($query_string as $k=>$v){
						if($v){
							$cmd = trim(strtoupper(substr($v, 0, strpos($v, ' '))));
							if ($cmd === 'UPDATE' || $cmd === 'DELETE') $update = false;
							DB::query($v,array(),$update);
							$msg  .= '<p>'.$v.',影响行数:'.DB::affected_rows().'</p>';
							$i++;
						}
					}
					cpmsg('成功执行:'.$i.'条SQL语句'.$msg,'success','m='.__CLASS__.'&a='.__FUNCTION__,'',"<p claaa='red'>如果更改了某些系统数据,请手动更新系统缓存</p>");
					return false;
				}
				 $this->show();
		}
		
		
		/*工具聚合*/
		
		function muster_zhekou(){
				global $_G;
				return false;
				//工具不需要.删除了字段....
				$url = 'm='.__CLASS__.'&a='.__FUNCTION__;
				$main_url = URL.'m='.__CLASS__.'&a=main';

				
				if(!$_GET['ok']){
						cpmsg('您确定要执行当前操作吗?执行后不可恢复','error',$url.'&ok=1','确定',"<p><a href='".$main_url ."'>取消</a></p>");
						return false;
				}
				$list  = DB::fetch_all("SELECT aid,price,yh_price FROM ".DB::table('goods')." ORDER BY aid DESC  ");
				$res = array_chunk($list,100);
				$index = 0;
				foreach($res as $vv){
						foreach($vv as $k=>$v){
							$zk = (sprintf("%.1f",($v['yh_price']/$v['price']*10)));
							DB::update('goods',array('zhekou_shu'=>$zk),"aid=".$v[aid]);
							$index++;
						}
				}
				$msg  .= '<p>影响行数:'.$index.'</p>';
				cpmsg('操作成功'.$msg,'success','m=tools&a=main');
		}
		
		function muster_del_goods(){
				global $_G;
				$url = 'm='.__CLASS__.'&a='.__FUNCTION__;
				$main_url = URL.'m='.__CLASS__.'&a=main';
				if(!$_GET['ok']){
						cpmsg('您确定要执行当前操作吗?执行后不可恢复','error',$url.'&ok=1','确定',"<p><a href='".$main_url ."'>取消</a></p>");
						return false;
				}				
				$list  =  DB::fetch_all("Select aid,num_iid,title,Count(num_iid) From ".DB::table('goods')." Group By num_iid Having Count(num_iid) > 1");
				$res = array_chunk($list,100);
				$index = 0;
				$arr = array();
				foreach($res as $vv){
						foreach($vv as $k=>$v){
							DB::delete('goods',"num_iid=".$v[num_iid]);	
							$index+=DB::num_rows();
						}
				}
				$ext = '<p>共删除:'.$index.'条重复记录</p>';
				cpmsg('操作成功'.$ext,'success','m=tools&a=main');
		}
		
		function muster_del_aid(){
				global $_G;
				$url = 'm='.__CLASS__.'&a='.__FUNCTION__;
				$main_url = URL.'m='.__CLASS__.'&a=main';
				if(!$_GET['ok']){
						cpmsg('您确定要执行当前操作吗?执行后不可恢复','error',$url.'&ok=1','确定',"<p><a href='".$main_url ."'>取消</a></p>");
						return false;
				}				
				$list  =  DB::fetch_all("Select aid,num_iid,title,Count(aid) From ".DB::table('goods')." Group By aid Having Count(aid) > 1");
				
			
				$res = array_chunk($list,100);
				$index = 0;
				$arr = array();
				foreach($res as $vv){
						foreach($vv as $k=>$v){
							DB::delete('goods',"aid=".$v[aid]);	
							$index+=DB::num_rows();
						}
				}
				$ext = '<p>共删除:'.$index.'条重复记录</p>';
				cpmsg('操作成功'.$ext,'success','m=tools&a=main');
		}
		
function muster_views(){
				global $_G;
				$url = 'm='.__CLASS__.'&a='.__FUNCTION__;
				$main_url = URL.'m='.__CLASS__.'&a=main';
				
				if(!$_GET['ok']){
						cpmsg('您确定要执行当前操作吗?执行后不可恢复','error',$url.'&ok=1','确定',"<p><a href='".$main_url ."'>取消</a></p>");
						return false;
				}
				
				
				$index = DB::query("UPDATE ".DB::table('goods')." SET  `views` =  rand() * 10000");
							
				$msg  .= '<p>影响行数:'.$index.'</p>';
				cpmsg('操作成功'.$msg,'success','m=tools&a=main');
		}
		
		
		
		
		function muster_cate(){
				global $_G;
				$url = 'm='.__CLASS__.'&a='.__FUNCTION__;
				$main_url = URL.'m='.__CLASS__.'&a=main';

				
				if(!$_GET['ok']){
						cpmsg('操作前请确定你的商品分类名称都是数字型的,如9,9.9,29.9,否则将执行失败.您确定要执行当前操作吗?执行后不可恢复','error',$url.'&ok=1','确定',"<p><a href='".$main_url ."'>取消</a></p>");
						return false;
				}
				$list  = DB::fetch_all("SELECT aid,price,yh_price FROM ".DB::table('goods')." ORDER BY aid DESC  ");
				$res = array_chunk($list,100);
				$index = 0;
				foreach($res as $vv){
						foreach($vv as $k=>$v){
									foreach ($_G[cate] as $k3=>$v3){
												if(is_numeric($v3[name])){
														$now_price = floatval($v3[name]);
														if ($now_price>0.1 &&  $v[yh_price] <= $now_price &&  $v[yh_price]+9 >= $now_price){
															DB::update('goods',array('cate'=>$v3[id]),"aid=".$v[aid]);
															$index++;
														}
												}
									}
						}
				}
				$msg  .= '<p>影响行数:'.$index.'</p>';
				cpmsg('操作成功'.$msg,'success','m=tools&a=main');
		}
		
		
		
		
			
		 function muster_sort(){
			  global $_G;
				$url = 'm='.__CLASS__.'&a='.__FUNCTION__;
				$main_url = URL.'m='.__CLASS__.'&a=main';
				
				if($_GET['day']>0)  $url .="&day=".intval($_GET[day]);				
				
				if(!$_GET['ok']){
						cpmsg('您确定要批量修改发布商品的排序吗?当前操作吗?执行后不可恢复','error',$url.'&ok=1','确定',"<p><a href='".$main_url ."'>取消</a></p>");
						return false;
				}
				
				if($_GET['day']>0){
					$day = TIMESTAMP-intval($_GET[day]) *86400 ;
					$today = dmktime(dgmdate($day ,'d'));
				}else{
					$today = dmktime($_G[today]);
				}


				$list  = DB::fetch_all("SELECT aid FROM ".DB::table('goods')." WHERE  posttime> $today AND `sort` < 1000000 ORDER BY aid DESC ");
				$count = count($list)-1;
				
				$amax = $list[0][aid];
				$amin = $list[count($list)-1][aid];

				$index = 0;					
				  foreach($list as $k=>$v){
						  $sort = mt_rand($amin,$amax);
						  DB::update('goods',array('sort'=>$sort),"aid=".$v[aid]);
						  $index++;
				  }
				
				
				$msg  .= '<p>影响行数:'.$index.'</p>';
				cpmsg('操作成功'.$msg,'success','m=tools&a=main');
		  }
		
		
		
		
		
		
		function del(){
				$url = 'm='.__CLASS__.'&a='.__FUNCTION__.'&t=';
				$main_url = URL.'m='.__CLASS__.'&a=main';
				
				$t = isset($_GET[t]) ? ($_GET[t]) : '';
				$url.=$t;
				if(!$_GET['ok']){
						cpmsg('您确定要执行当前操作吗?执行后不可恢复','error',$url.'&ok=1','确定',"<p><a href='".$main_url ."'>取消</a></p>");
						return false;
				}
				$time = TIMESTAMP;
				$and = '';
				
				if($t == 'line'){
						$and .=  " end_time>0  AND end_time<".$time;
				}elseif($t=='hide'){
					$and .=  " `hide` =1 or num=0 " ;	
				}elseif($t=='baoyou'){
					$and .=  " `baoyou` =0 ";	
				}elseif($t=='tk'){
					$and .=  " `bili` =-1 ";	
				}
				
				DB::delete('goods',$and);
				$index = DB::num_rows();
				$msg  .= '<p>共删除:'.$index.'条商品信息</p>';
				cpmsg('操作成功'.$msg,'success','m=tools&a=main');
		}
		
		
		function cover_user_name(){
			global $_G;		
			
			$url = 'm='.__CLASS__.'&a='.__FUNCTION__;
			$main_url = URL.'m='.__CLASS__.'&a=main';	
			$user = DB::fetch_all(" SELECT uid,username FROM ".DB::table('member').' ORDER BY uid DESC');
			
			if(!$_GET['ok']){
				cpmsg('您确定要批量转换会员昵称吗?执行后不可恢复','error',$url.'&ok=1','确定',"<p><a href='".$main_url ."'>取消</a></p>");
				return false;
			}
			$index = 0;
			foreach($user as $k=>$v){
				if(strlen($v[username])>20 && strlen($v[username])<36){
					$new = $nickConvertingService->convert($v[username]);
					$u = DB::fetch_first(" SELECT uid,username FROM ".DB::table('member')." WHERE username='$new' ORDER BY uid DESC");
					if($u[uid]>0){
						DB::delete('member','uid='.$v[uid]);
					}else{					
						DB::update('member',array('username'=>$new),'uid='.$v[uid]);
					}
					$index++;
				}
			}
			$msg  .= '<p>影响行数:'.$index.'</p>';
			cpmsg('操作成功'.$msg,'success','m=tools&a=main');

		}
		
		function clear_sort(){
			$url = 'm='.__CLASS__.'&a='.__FUNCTION__;
			$main_url = URL.'m='.__CLASS__.'&a=main';	
			if(!$_GET['ok']){
				cpmsg('您确定要一键清空所有商品的排序吗?执行后不可恢复','error',$url.'&ok=1','确定',"<p><a href='".$main_url ."'>取消</a></p>");
				return false;
			}
			//$index = DB::update('goods',' `sort`= 0 ','aid>1289');
			DB::query("UPDATE ".DB::table('goods')." set `sort`=0");
			$index = DB::num_rows();
			$msg  .= '<p>影响行数:'.$index.'</p>';
			cpmsg('操作成功'.$msg,'success','m=tools&a=main');
		}
		
		function update_goods(){
			global $_G;
			$url = '?m='.__CLASS__.'&a='.__FUNCTION__;
			$main_url = URL.'m='.__CLASS__.'&a=main';	
			
			
//			include_once libfile('api/m_taobao');
//			$m = new m_taobao();
			$m = top('m_taobao');
			$size = $_GET[size]>0 ? intval($_GET[size]) :50;
			$start = ($_G[page]-1) * $size;
			if($_GET[onsubmit]){
				$and . '';
				$url .= '&onsubmit=1&page='.($_G[page]+1).'&size='.$size;
				if($_GET[posttime1]){
					$posttime1 = dmktime($_GET[posttime1]);
					$and.=" AND posttime >=" .$posttime1;
					$url.="&posttime1=".$posttime1;
				}
				if($_GET[posttime2]){
					$posttime2 = dmktime($_GET[posttime2]);
					$and.=" AND posttime <=" .$posttime2;
					$url.="&posttime2=".$posttime2;
				}
				if($_GET['time']>0){
					$time = TIMESTAMP - intval($_GET['time']) * 3600;					
					$and.=" AND dateline <=" .$time;
					$url.="&time=".$time;
				}
				$field =$_GET[field];
				
				foreach($_GET[field] as $k=>$v){
						$url.="&field[".$k."]=1" ;
				}
				$count = getcount('goods',$and);
				
				if($count == 0){
					cpmsg('未找到任何商品信息,请修改更新条件后再试...'.$msg,'success','m=tools&a=main');
					return false;
				}
				
				$page_size = intval(ceil($count/$size));
				$rs =  ('<p>共找到'.$count . '条商品,每页'.$size.'条,共'.$page_size.'页,当前正在更新'.$_G[page].'页</p>');
				$rs .=   '<p><b>本更新比较费资源,请勿关闭本页面或胡乱点击本页面....</b></p>';
				
				$list = DB::fetch_all("SELECT aid,num_iid,title,posttime FROM ".DB::table('goods')." WHERE 1 ".$and ." ORDER BY aid DESC LIMIT $start,$size");
				
				if($_G[page] ==1) {
					$_SESSION[update_goods][start_time]  = TIMESTAMP;
					$_SESSION[update_goods][page_size]  = $page_size;
				}
				$_SESSION[update_goods][page]=intval($_G[page]);
				$_SESSION[update_goods][url]=$url;

				if($_G[page]<$page_size){
						$rs .= '准备更新下一页....
						<script type="text/javascript">
						var timer = null;
						function start(){
							var url  = "'.$url.'"
							timer =setTimeout(function(){
							window.location.href = url;
							},5000);	
						};
						function stop(t){
							clearTimeout(timer);
							t.value = "继续更新请刷新页面";
						}
						start();
						</script>;
						<input type="button" value="停止" onClick="stop(this);" style="height:24px;line-height:24px;color:#f00">';
				}else{
					$rs .= "<p style='color:#F00;'>更新完毕,成功: ".$_SESSION[update_goods][success_len].' 条,用时 '.
						((TIMESTAMP-$_SESSION[update_goods][start_time])/60).' 分钟</p>';
				}				
				foreach($list as $k=>$v){

					
					$goods = $m->get($v[num_iid],false);		//先获取商品信息,再来更新
					
					//肯定是没有获取成功
					if($goods[sum] == 0 && $goods[num] == 0 ){
						$rs.= '<p>id='.$v[aid].',销量和库存获取失败,跳过  '.$v[title].'</p>';
						continue;
					}
					//只更新10天前的商品,一般上线时间是5天,可能5天后卖家没有修改价格..
					if($_GET[field][yh_price] ==1 && $v[posttime] + 864000 > TIMESTAMP) unset($goods[yh_price]);
					
					$data = array();
					foreach($field as $k1=>$v1){
						if($v1 ==1)	$data[$k1] = $goods[$k1];						
					}
					$data[dateline] = TIMESTAMP;
					$len = DB::update('goods',$data,'aid='.$v[aid]);				
					if($len) {
						$rs.= '<p>id='.$v[aid].',更新成功 '.$v[title].'</p>';
						$_SESSION[update_goods][success_len] = intval($_SESSION[update_goods][success_len])+1;
					}
				}	
				if($_G[page]>=$page_size){
				
					$msg ="更新完毕,成功: ".$_SESSION[update_goods][success_len].' 条,用时 '.	((TIMESTAMP-$_SESSION[update_goods][start_time])/60).' 分钟';
						unset($_SESSION[update_goods]);
					msg($msg,'success','m=tools&a=update_goods'); 
					return false;					
				}
				echo $rs;
				return false;
				
			}
			
			
			$field = array(
						'picurl'=>array('key'=>'picurl','name'=>'主图','check'=>0),
						'title'=>array('key'=>'title','name'=>'标题','check'=>0),
						'num'=>array('key'=>'num','name'=>'库存数量','check'=>0),
						'yh_price'=>array('key'=>'yh_price','name'=>'优惠价','check'=>0),
						'sum'=>array('key'=>'sum','name'=>'销量','check'=>0),
						'views'=>array('key'=>'views','name'=>'收藏','check'=>0),
			);
			
			if($_G['setting']['filter_field']){
					foreach($_G['setting']['filter_field'] as $k=>$v){
						$field[$v]['check']=1;
					}
			}
			$info = '';
			if($_SESSION[update_goods] && $_SESSION[update_goods][page]>1){
				$msg = '您上次在 '.dgmdate($_SESSION[update_goods][start_time],'dt').' 更新到第'.$_SESSION[update_goods][page].
					'页,还有'.($_SESSION[update_goods][page_size] -$_SESSION[update_goods][page]).'页未完成,点击可继续上次更新?';
				$info = '<a class="red" target="_blank" href="'.$_SESSION[update_goods][url].'">'.$msg.'</a>';
			}
			unset($_SESSION[update_goods]);
			$this->add(array('field'=>$field,'info'=>$info));
			$this->show();
			
		}
		
}
?>
