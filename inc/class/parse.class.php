<?php

class parse {
				
			public function goods($goods){
					global $_G;
					
					$goods['channel_name'] = 	$goods[fid]	?	$_G['all_channel']['k'.$goods[fid]][name]:'';
					$goods['flag_name'] 	=	$_G['setting']['flag'][$goods[flag]];
					$goods['cate_name'] 	=	$goods[cate]	?	$_G['cate'][$goods[cate]][name]	:	'';
					$goods['shop_type_name'] =$goods['shop_type'] ==1? '天猫':($goods['shop_type'] ==2?'集市':'');
					$goods['baoyou_name'] 	=	$goods['baoyou'] ==1 ?'是':'否'; 					
					$goods['org_dateline']	=	$goods['dateline'];
					$goods['dateline'] 	=	dgmdate($goods['dateline'],'u');
					$goods['org_posttime'] 	=	$goods[posttime];
					$goods['posttime'] 	=	dgmdate($goods['posttime'],'u');
					$goods['h'] = 0;
			
					$goods['tags']= make_tags($goods['keywords'],'/index.php?a=all&tag=');
					
					if($goods['images']){
						$goods['images']	=	explode(',',$goods['images']);
						$goods['images'] = array_filter($goods['images']);
					}
					
					if(!$goods['yh_price']) $goods['yh_price'] =$goods['price'];
					
					$goods['price']		=	fix($goods['price'],1);
					$goods['yh_price']		= 	fix($goods['yh_price'],1);
					if($goods['yh_price']!=$goods['price']) {
						$goods['zk']	= fix($goods['yh_price']/$goods['price']*10,1);
					}else{
						$goods['zk'] = 0;
					}

					if($goods['sid']>0 && $goods['nick']) {
						$goods['shop_url'] = "http://store.taobao.com/?nick_uz=".urlencode($goods['nick']);
					}
					$goods['shop_url2'] =$gd['shop_url'] = 'http://store.taobao.com/shop/view_shop.htm?user_number_id='.$goods['sid'].'&nick_uz='.($goods['nick']);
					if(!$goods['picurl'] && count($goods['images'])>0) {
						$goods['picurl'] = $goods['images'][0];
					}
					//$goods['picurl'] = preg_replace("/_([0-9]+)(.*?)$/i",'',$goods['picurl']);
					$goods['picurl'] = preg_replace("/\.jpg(.*?)$/i",'.jpg',$goods['picurl']);
					
					//$goods['picurl']=
					//先判断是否在显示时间内
					$status = 1;	//正常状态
					$goods['status_text']	='正常显示';
					if($goods['check']==0) {
						$goods['status_text']	="未审核";
						$status  =2;
					}elseif($goods['check'] ==2){
						$goods['status_text']	="未通过";
						$goods['status_text2']	=$goods['return_msg'];			
						$status  =7;
					}elseif($goods['hide']==1){
						 $goods['status_text']	="已下架";
						 $status  =3;
					}elseif($goods['num']==0) {
						$goods['status_text']	="卖光了";
						$status  =4;
					}elseif($goods['start_time']>0 || $goods['end_time'] > 0){
							 
										if(($goods['start_time']>TIMESTAMP) && ($goods['end_time'] > 0 && $goods['end_time']<TIMESTAMP)){
											 $goods['status_text']	="已下架";
											 $status  =3;
										}elseif($goods['start_time']>TIMESTAMP)  {
											$goods['status_text']		='未开始';
											$status  =5;
											$goods[h] = intval(dgmdate($goods['start_time'],'H'));
										}elseif($goods['end_time'] > 0 && $goods['end_time']<TIMESTAMP)  {
											$goods['status_text']		='已结束';
											$status  =6;
										}
			
					}		
					
			
					if($_G[setting][bm_status_text] && $goods[check]>2){
							if(!is_array($_G[setting][bm_status_text])) {
								$bm_status_text = array();
								$tmp = explode("\r\n",$_G[setting][bm_status_text]);
								foreach($tmp as $k=>$v){
									$v = explode("|",$v);
									$bm_status_text[$v[0]] = array('status'=>$v[0],'name'=>$v[1],'content'=>$v[2]);
								}
								$_G[setting][bm_status_text] = $bm_status_text;
							}
							$check = intval($goods[check]);
							if($_G[setting][bm_status_text][$check]){
								$goods['status_text']	=$_G[setting][bm_status_text][$check][name];
								$goods['status_text2'] = $_G[setting][bm_status_text][$check][content];
								$status  =$_G[setting][bm_status_text][$check][status];
							}
					}
			
					$goods['status']		=	$status;	
					$goods['over']		=	0;			
					if($goods['num'] == 0 || $goods['hide'] ==1)$goods['over']	=1;		
					$goods['org_start_time'] 	= 	$goods['start_time'] ;
					$goods['org_end_time'] 	= 	$goods['end_time'];		
					$goods['start_time'] 	= 	$goods['start_time'] 	? dgmdate($goods['start_time'],'dt') :'';
					$goods['end_time'] 	= 	$goods['end_time'] 	? dgmdate($goods['end_time'],'dt') :'';
					
					$today = dmktime(dgmdate(TIMESTAMP,'d'));
					$tomorrow = dmktime(dgmdate(TIMESTAMP+86400,'d'));
					if(($goods[org_posttime]>$today) || ($goods['org_start_time'] >= $today && $goods['org_start_time'] < $tomorrow)){
						$goods['new'] = 1;
					}else{
						$goods['new'] = 0;
					}

					$goods = $this->goods_url($goods);
					
					if($goods['bili'] && $goods['bili']!= -1){
						$goods['yongjin'] = ($goods['yh_price'] * $goods['bili'] / 100);
						
					}
					return $goods;
			}
			
			public function goods_url($goods,$focus=false){
					global $_G;
					
					if(!$goods[url]) $goods[url]="http://item.taobao.com/item.htm?id=".$goods[num_iid];
					$goods['org_url'] = $goods['url'];							
					$goods['id_url'] = '/index.php?itemid='.$goods['num_iid'];
					$goods['jump_url'] ='/index.php?a=go_pay&num_iid='.$goods[num_iid];		
					if($goods['click_url']){
						$goods['jump_url'].='&click=1';
						//$goods['jump_url'] =$goods['click_url'];
						//$goods['jump_url'] = str_replace('&amp;','&',$goods['jump_url']);
					}

				
					
					if($_G[setting][show_goods] ==1){
						if( CURMODULE == 'goods' || $focus || $_G[mobile]) {
							$goods['url'] =$goods['jump_url'];
						}else if(!ROBOT && $_G[setting][robot_jump] ==1){
							//非蜘蛛 则直接跳到卖家首页
							$goods['url']=$goods['jump_url'];			
						}else{				
							$goods['url'] =$goods['id_url'];				
						}
					}elseif($_G[mobile]){
						$goods['url'] =$goods['jump_url'];
					}
					
					return $goods;
			}

			public function shop($shop){
				global $_G;
				$shop[id_url]  ='/index.php?m=shop&id='.$shop[id];
				//if(!$shop[url])		$shop[url]	 =  'https://shop'. $shop['sid'].'.taobao.com';
				$shop['org_dateline']		=	$shop['dateline'];
				$shop['dateline']		 	= dgmdate($shop['dateline'],'u');
			
				$shop['org_start_time']		=	$shop['start_time'];
				$shop['start_time']		 	= dgmdate($shop['start_time'],'dt');
				
				$shop['org_end_time']		=	$shop['end_time'];
				$shop['end_time']		 	= dgmdate($shop['end_time'],'dt');
				
				return $shop;
			}
			
			public function article($article){
				global $_G;
				if(!$article) return false;
				if(!$article[url]){
					$article['target'] = '';
					$article[url]  = '/index.php?m=article&id='.$article[id];
					
				}else{
					$article['target'] = "target='_blank'";
				}
				$article[id_url]  = '/index.php?m=article&id='.$article[id];
				$article[tag_name] = $_G[setting][article_tag][$article[tag]];
				$article['org_dateline']		=	$article['dateline'];
				$article['dateline']		 	= dgmdate($article['dateline'],'u');
			
				if(!$article['picurl'])		$article['picurl'] = 'http://img03.taobaocdn.com/imgextra/i3/1905489005/T2sui3XrVXXXXXXXXX_!!1905489005-1-dgshop.gif';
				return $article;
			
			}
			
			public function img_goods($rs){	
					global $_G;
					if(!$rs) return '';
					$rs = urldecode_utf8($rs);
							
					$rs = json_decode($rs,true);		
					if(in_array($rs[num_iid],$_G[img_item]))return '';
					$_G[img_item][] = $rs[num_iid];
					$goods = '';
					$rs[id]=0;
					
					if(count($rs) == 3){
						$rs = self::goods_url($rs,1);
						$goods = '<a href="'.$rs[url].'"  target="_blank"><img src="'.$rs[picurl].'" /></a>';
					}elseif(count($rs)>4){
						
						$rs = self::goods_url($rs,1);
						$rs['yh_price']	= sprintf("%.1f",($rs['yh_price']));
						$rs['yh_price']	=str_replace('.0','',$rs['yh_price']);
						$rs['price']	= sprintf("%.1f",($rs['price']));
						$rs['price']	=str_replace('.0','',$rs['price']);
						
						  $goods.= '<div class="img_goods"><a rel="nofollow" href="'.$rs[url].'" title="'.$rs[title].'" target="_blank">';
						  $goods.='<img src="'.$rs[picurl].'_480x480.jpg" alt="'.$rs[title].'"></a>';
						  $goods.='<ul><span class="tit"><a rel="nofollow" href="'.$rs[url].'" title="'.$rs[title].'" target="_blank" >'.$rs[title].'</a></span>';
						  $goods.='<div class="rr_price"><em>￥</em>'.$rs[yh_price].($rs[baoyou]==1 ? '<span class="by">/包邮</span>':'').'</div>';
						  $goods.='<div class="many cl"><del>原价:￥'.$rs[price].'</del>  <i>立省<em>'.($rs[price]-$rs[yh_price]).'</em>元</i><span><b>'.$rs[sum].'</b>人已买</span></div>';
						  $goods.='<div class="butt_div"><a rel="nofollow" href="'.$rs[url].'" title="'.$rs[title].'" target="_blank" class="butt">立即抢购</a></div>';
						$str = '';
						if($rs[tags]){
							$kw = make_tags($rs[tags]);				
							$str.='<div class="goods_tags"><span>标<br/>签</span>';
							foreach($kw as $k1=>$v1){
								$str.='<a href="/index.php?m=img&a=list&tag='.$k1.'" target="_blank">'.$v1.'</a>';
							}
							$str.='</div>';
						}
						$goods.=$str.'</ul></div>';
					}
					return $goods;
			}
			
			
			public function img($img){
				global $_G;
				if(!$img) return false;
				
				$img['org_dateline']		= $img['dateline'];
				$img['dateline']		 	= dgmdate($img['dateline'],'u');
				$img['description']			= trim($img['description']);
				$img[id_url]  = '/index.php?m=img&id='.$img[id];
				
				if(!defined('IN_ADMIN')){
					if(!$img[url]) $img[url]  = '/index.php?m=img&id='.$img[id];
						$today = dmktime(dgmdate(TIMESTAMP,'d'));
						if($img[org_dateline]>$today){
							$img['new'] = 1;
						}else{
							$img['new'] = 0;
						}	
						$img['tags']	=	make_tags($img[keywords]);
						if(!$img['picurl'])		$img['picurl'] = 'http://img03.taobaocdn.com/imgextra/i3/1905489005/T2sui3XrVXXXXXXXXX_!!1905489005-1-dgshop.gif';
				}
				return $img;
			}
			

			public function sign($gd){
				global $_G;
				$arr = $_G['setting']['jf_type'];
				$gd[org_dateline] = $gd[dateline];				
				$gd[dateline] = dgmdate($gd[dateline],'u');				
				$gd[name]=$arr[$gd[type]];
				return $gd;
			}
			
			public function theme($theme){
				global $_G;
				if(!$theme) return false;
				$theme['org_dateline']	=$theme['dateline']	;
				$theme['dateline']		= dgmdate($theme['dateline'],'u');
				$fid = intval($theme[fid]);
				$theme[count] = getcount('danpin','dp_id='.$theme[id]);
				
				$theme[url] = 'http://item.taobao.com/item.htm?id='.$theme[num_iid];
				$theme['url'] ='/index.php?a=go_pay&num_iid='.$theme[num_iid];
				
			
				
				$theme[id_url] = '/index.php?m=dapei&a=theme&id='.$theme[id];
				if($_G[dapei][$fid]){
					$dapei = $_G[dapei][$fid];
				}else{
					$continue = false;
					foreach($_G[dapei] as $k=>$v){
						if($continue) continue;
						if($v[sub][$fid]) {
							$dapei= $v;
							$continue= true;	
						}
						foreach($v[sub] as $k1=>$v1){
							if($continue) continue;
							if($v1[sub][$fid]) {
								$dapei= $v1;
								$continue= true;	
							}
							foreach($v1[sub] as $k2=>$v2){
								if($continue) continue;
								if($v2[$fid]) {
									$dapei= $v2;
									$continue= true;
								}
							}
						}
					}
				}
				$theme[dapei]  = $dapei;
				return $theme;
			}
			
		
			
			
			public function say($dp,$get_count){
					global $_G;		
					$dp['org_dateline']	=$dp['dateline']	;
					$dp['dateline']		= dgmdate($dp['dateline'],'u');
				
			
					$status = intval($dp[check]);
					
					if($dp[check] ==0){
						$dp[status_text] = '待审核';	
					}else if($dp[check] ==1){
						$dp[status_text] = '审核通过';	
					}else if($dp[check] ==2){
						$dp[status_text] = '拒绝';	
					}
					if($dp[hide] ==1){
						$dp[status_text] = '已隐藏';	
						$status = 3;
					}
					
					if($get_count !== false)$dp['comment_count'] = getcount('comment'," type_id = ".$dp[id]." AND type = 'say' AND `check`=1 ");
					$dp['cate_name']	=	$_G['say_cate'][$dp['cate']][name];
					$dp['tags']	=	make_tags($dp[keywords]);
					$dp[img] = 1;
					if(!$dp['picurl'])		{
						$dp['picurl2'] = 'http://img03.taobaocdn.com/imgextra/i3/1905489005/T2sui3XrVXXXXXXXXX_!!1905489005-1-dgshop.gif';
						$dp[img] = 0;
					}
					$dp[url] = URL.'m=say&id='.$dp[id];	
					$dp[flag_name] = $_G[setting][flag][$dp[flag]];
					$dp['user_pic'] = avatar($dp['username'], $dp['uid']);
					
					return $dp;
			}
			
			
			
			public function shiyong_apply($dp){
					global $_G;		
					$dp['org_dateline']	=$dp['dateline']	;
					$dp['dateline']		= dgmdate($dp['dateline'],'u');
				
					$dp['org_statustime']	=	$dp['statustime'];
					$dp['statustime']		 	= dgmdate($dp['statustime'],'dt');
					$dp[status_text] = $_G[setting][shiyong_status][$dp[status]];
					
					$dp[type_name] = $_G[setting][shiyong_type][$dp[type]];
					
					if(defined('IN_ADMIN'))$dp[goods] = D(array('table'=>'shiyong','and'=>'id='.$dp[shiyong_id]));
					return $dp;
			}
			
			
			public function shiyong($dp){
					global $_G;		
					
					$dp[status] = 1;
					$dp[status_text] = '已上架';
					if($dp[start_time]>0 && $dp[start_time]>TIMESTAMP) {
						$dp[status] = 2;
						$dp[status_text] = '待上架';
					}
					if($dp[end_time]>0 && $dp[end_time]<TIMESTAMP) {
						$dp[status] = 3;
						$dp[status_text] = '已结束';
					}
					if($dp[hide]==1) {
						$dp[status] = 4;
						$dp[status_text] = '已下架';
					}
					if($dp[num]>=$dp[sum]) {
						$dp[status] = 5;
						$dp[status_text] = '已完结';
					}
					if($dp[check] == 0) {
						$dp[status] = 0;
						$dp[status_text] = '待审核';
					}
					if($dp[check] == 2) {
						$dp[status] = 6;
						$dp[status_text] = '已拒绝';
					}
			
					$dp['org_dateline']	=$dp['dateline']	;
					$dp['dateline']		= dgmdate($dp['dateline'],'u');
				
					$dp['org_start_time']	=	$dp['start_time'];
					$dp['start_time']		 	= dgmdate($dp['start_time'],'dt');
					
					$dp['org_end_time']		=	$dp['end_time'];
					$dp['end_time']		 	= 	dgmdate($dp['end_time'],'dt');
					
					$dp['url'] ='http://item.taobao.com/item.htm?id='.($dp[num_iid]);
					$dp['url'] ='/index.php?a=go_pay&num_iid='.$dp[num_iid];
					$dp['id_url'] ='/index.php?m=shiyong&id='.($dp[id]);
					$dp['count'] = getcount('shiyong_apply','shiyong_id='.$dp[id]);
					
					
					//闪电试用,附带叠加试用
					if($dp[type] ==1 && $dp[did]>0 && $dp[did] != $dp[id]){
						 $dp[dj] =  D(array('table'=>'shiyong','and'=>'id='.$dp[did]));		
						 
					}
					$dp[type_name] = $_G[setting][shiyong_type][$dp[type]];
					return $dp;
					
			}
			
			
			public function duihuan_apply($dp){
					global $_G;		
					$dp['org_dateline']	=$dp['dateline']	;
					$dp['dateline']		= dgmdate($dp['dateline'],'u');
				
					$dp['org_statustime']	=	$dp['statustime'];
					$dp['statustime']		 	= dgmdate($dp['statustime'],'dt');
					$dp[status_text] = $_G[setting][duihuan_status][$dp[status]];
					
					if(defined('IN_ADMIN'))$dp[goods] = D(array('table'=>'duihuan','and'=>'id='.$dp[duihuan_id]));
					return $dp;
			}
			
			
			public function duihuan($dp){
					global $_G;		
					
					$dp[status] = 1;
					$dp[status_text] = '已开始';
					if($dp[start_time]>0 && $dp[start_time]>TIMESTAMP) {
						$dp[status] = 2;
						$dp[status_text] = '未开始';
						
					}
					
					if($dp[end_time]>0 && $dp[end_time]<TIMESTAMP) {
						$dp[status] = 3;
						$dp[status_text] = '已结束';
					}
					if($dp[hide]==1) {
						$dp[status] = 4;
						$dp[status_text] = '已下架';
					}
					
					
					
					if(defined('IN_ADMIN')){
						$str = " AND status > 1";
					}else{
						$str = ' AND status !=1';
					}
					$dp['num'] = getcount('duihuan_apply','duihuan_id='.$dp[id].$str);
					
					if($dp[num]>=$dp[sum]) {
						$dp[status] = 5;
						$dp[status_text] = '已完结';
					}
			
					$dp['org_dateline']	=$dp['dateline']	;
					$dp['dateline']		= dgmdate($dp['dateline'],'u');
				
					$dp['org_start_time']	=	$dp['start_time'];
					$dp['start_time']		 	= dgmdate($dp['start_time'],'dt');
					
					$dp['org_end_time']		=	$dp['end_time'];
					$dp['end_time']		 	= 	dgmdate($dp['end_time'],'dt');
					
					if($dp[num_iid]){
						$dp['url'] ='http://item.taobao.com/item.htm?id='.($dp[num_iid]);
						$dp['url'] ='/index.php?a=go_pay&num_iid='.$dp[num_iid];
					}else{
						$dp['url'] = (TAE && !BC) ? 'javascript:;' : '###';
					}
					$dp['id_url'] ='/index.php?m=duihuan&id='.($dp[id]);
					
					$dp[shop] = $dp[shopid] && $_G[shop][$dp[shopid]] ? $_G[shop][$dp[shopid]] :array();
					$dp['count'] = getcount('duihuan_apply','duihuan_id='.$dp[id]);
					
					return $dp;
					
			}
			

			
			
			public function addfavorite_apply($dp){
					global $_G;	
					$dp['org_dateline']	=$dp['dateline']	;
					$dp['dateline']		= dgmdate($dp['dateline'],'u');
					if(defined('IN_ADMIN'))$dp[goods] = D(array('table'=>'addfavorite','and'=>'id='.$dp[addfavorite_id]));
					return $dp;
			}
			public function favorite($dp){
					global $_G;	

					$dp['dateline']		= dgmdate($dp['dateline'],'u');
					$dp['name']			= $_G['setting']['favorite_types'][$dp['type']];
					
					return $dp;
			}
			
			public function addfavorite($dp){
					global $_G;		
					
					$dp['org_dateline']	=$dp['dateline']	;
					$dp['dateline']		= dgmdate($dp['dateline'],'u');
				
			
					$dp['url'] ='http://item.taobao.com/item.htm?id='.($dp[num_iid]);
					$dp['url'] ='/index.php?a=go_pay&num_iid='.$dp[num_iid];
					
					$dp['id_url'] ='/index.php?m=addfavorite';
					if($_G[uid] && !defined('IN_ADMIN')){
						$dp[is_apply] = getcount('addfavorite_apply'," addfavorite_id=".$dp[id] ." AND uid=".$_G[uid]);
					}else{
						$dp[is_apply] = 0;
					}
					$dp['count'] = getcount('addfavorite_apply','addfavorite_id='.$dp[id]);
					return $dp;
					
			}
			
			
			public function reward_goods($goods){	
					global $_G;
					if(!$goods[aid]) return false;

					$goods[total] = $goods[num] =$goods[sum] = 0;
					
					$count = 0;
					foreach($_G[prize] as $k=>$v){			
						if($v[type]=='goods' && $v[goods_id] > 0&& $v[goods_id] == $goods[aid]){
							$goods[prize]  = $v;
							$count = $v['num'];
						}			
						if( $v[type]=='prize' || ($v[type]=='ticket'  &&  $v[shopid]>0 && $goods[shopid]==$v[shopid]) || ($v[type]=='goods' &&  $v[goods_id]>0 && $goods[aid]==$v[goods_id])){
							
							
							if(defined('IN_ADMIN') ||  $v[is_prize] ==1 && $v[num]>0){	
								$goods[sum]  += $v[total];
								$goods[num] += $v[num];
								$goods[total] += $v[count];							
								$count+= $v['num'];
							}
						}
						
					
					}
					
					
					if($goods[shopid]>0){
						$goods[shop]  = $_G[shop][$goods[shopid]];
					}
				
			
					$goods['org_dateline']	=	$goods['dateline'];
					$goods['dateline'] 	=	dgmdate($goods['dateline'],'u');
					$goods['images']		=	explode(',',$goods['images']);
					$goods['price']		=	str_replace('.0','',$goods['price']);
					$goods['yh_price']		= 	str_replace('.0','',$goods['yh_price']);
							
					if($goods['sid']>0 && $goods['nick']) {
						$goods['shop_url'] = 'http://shop'.$goods[sid].'.taobao.com/?nick_uz='.($goods['nick']);
					}
					//先判断是否在显示时间内
					
					
			//先判断是否在显示时间内
					$status = 1;	//正常状态
					$goods['status_text']	='立即抽奖';
					if($goods['hide']==1){
						 $goods['status_text']	="已下架";
						 $status  =3;
					}elseif($goods['num']==0) {
						$goods['status_text']	="抢光了";
						$status  =4;
					}elseif($goods['start_time']>0 || $goods['end_time'] > 0){
							 
										if(($goods['start_time']>TIMESTAMP) && ($goods['end_time'] > 0 && $goods['end_time']<TIMESTAMP)){
											 $goods['status_text']	="已下架";
											 $status  =3;
										}elseif($goods['start_time']>TIMESTAMP)  {
											$goods['status_text']		='未开始';
											$status  =5;
											$goods[h] = dgmdate($goods[start_time],'H');
										}elseif($goods['end_time'] > 0 && $goods['end_time']<TIMESTAMP)  {
											$goods['status_text']		='已结束';
											$status  =6;
										}
			
					}
					if($count ==0){
						$goods['status_text']		='已完结';
						$status  =7;
					}
					
					
					$goods['status']		=	$status;		
					$goods['org_start_time'] =$goods['start_time'] ;
					$goods['org_end_time'] =$goods['end_time'] ;		
					$goods['start_time'] 	= 	$goods['start_time'] 	? dgmdate($goods['start_time'],'dt') :'';
					$goods['end_time'] 	= 	$goods['end_time'] 	? dgmdate($goods['end_time'],'dt') :'';
					$goods['org_url']		=	$goods['url'];
					$goods['id_url'] = '/index.php?m=reward&aid='.$goods['aid'];
			
					return $goods;
			}
			
			
			public function history($history,$get_user=false,$get_goods=false){
					global $_G;
					if(!$history[id]) return false;
					if($history[prizeid]>0){	
						if(!$_G[prize])loadcache("prize",'load',4);
						if(!$_G[prize])loadcache("prize",'update',4);
						$history[prize] = $_G[prize][$history[prizeid]];
			
					}
			
					if($history[ticketid]>0){	
						$history[ticket] = DB::fetch_first("SELECT * FROM ".DB::table('ticket')." WHERE id = ".$history[ticketid]);
					}
					$history[org_dateline] = $history[dateline];
					$history[dateline] = dgmdate($history[dateline],'u');
					
					
					
					if($get_user && $history[uid]>0){
						$history[user] = getuser($history[uid],'uid');
						if($history[user][uid]){
							$history[nick] = $history[user][nick];
							$history[picurl] = $history[user][picurl];
						}
					
						$history[picurl] = getuserpic($history[user]);
					}else{
						$history[nick]  ='匿名';
						$history[picurl] =  '/assets/global/images/avatar.png';
					}
					if($get_goods && $history[goods_id]>0){
						$history[goods] = DB::fetch_first("SELECT * FROM ".DB::table('reward_goods')." WHERE aid=".$history[goods_id]);
					}
					
					
					return $history;
			}
			
			
				
			public function reward_history($dp){
					global $_G;
					
					$dp['org_dateline']	=$dp['dateline']	;
					$dp['dateline']		= dgmdate($dp['dateline'],'u');
					$dp[id_url] = '/index.php?m=reward&aid='.$dp[goods_id];
					return $dp;
					
			}
			
			
			public function activity($dp){
					global $_G;		
					
					$dp[status] = 1;
					$dp[status_text] = '正常显示';
					if($dp[start_time]>0 && $dp[start_time]>TIMESTAMP) {
						$dp[status] = 2;
						$dp[status_text] = '未开始';
						
					}
					if($dp[end_time]>0 && $dp[end_time]<TIMESTAMP) {
						$dp[status] = 3;
						$dp[status_text] = '已结束';
					}
					if($dp[hide]==1) {
						$dp[status] = 4;
						$dp[status_text] = '已隐藏';
					}
					
					$dp['org_dateline']	=$dp['dateline']	;
					$dp['dateline']		= dgmdate($dp['dateline'],'u');
				
					$dp['org_start_time']	=	$dp['start_time'];
					$dp['start_time']		 	= dgmdate($dp['start_time'],'dt');
					
					$dp['org_end_time']		=	$dp['end_time'];
					$dp['end_time']		 	= 	dgmdate($dp['end_time'],'dt');
					return $dp;
					
			}
			
			public function cate($dp){
				$dp[url] = '/index.php?a=cate&id='.$dp[id]; 
				$dp[count] = getcount('goods'," AND cate = ".$dp[id]);
				$dp['org_dateline'] = $dp['dateline'];
				$dp['dateline'] = dgmdate($dp['dateline'],'u');
				return $dp;
			}
				
			public function comment($dp){
				global $_G;
				//回复统计
				$dp['count'] = getcount('comment'," AND type = '".$dp[type]."' AND type_id = ".$dp[type_id]." AND `check`=1 AND is_reply=1 AND reply_id =".$dp[id]);
				$dp['content']  = dstripcslashes($dp['content']);
				if(defined('IN_ADMIN')){
					$dp['content']  = htmlspecialchars($dp['content']);
				}				
				$dp['c_content'] = cutstr($dp['content'],80);
				$dp['org_dateline'] = $dp['dateline'];
				$dp['dateline'] = dgmdate($dp['dateline'],'u');
				
				if (!$dp['user_pic']) {					
					$dp['user_pic'] = avatar($dp['username'], $dp['uid']);
				}
				
				$dp['type_name'] = $_G[setting][comment_types][$dp[type]];
				return $dp;
			}
			
			public function style($dp){
				global $_G;
				
				if(!$dp[content]){
					$dp['content'] =$dp['title'] ;
				}else{
					$dp['content'] =trim_html($dp[content],1);
				}
				$dp['org_dateline'] = $dp['dateline'];
				$dp['dateline'] = dgmdate($dp['dateline'],'u');				
				$dp['tag_name'] = $_G[setting][style_tags][$dp[tag]];
				$dp['tags'] = make_tags($dp[keywords],'/index.php?m=style&a=list&tag=');
				$dp[images] = explode(',',$dp[images]);
			
				$dp[id_url] =$dp[url] = '/index.php?m=style&id='.$dp[id];
				$check_text = array('待审核','已通过','未通过');
				$dp[check_text] = $check_text[$dp[check]];

				$today = dmktime(dgmdate(TIMESTAMP, 'd'));
				if ($dp[dateline] > $today) {
					$dp['new'] = 1;
				} else {
					$dp['new'] = 0;
				}
				
				if (!$dp['user_pic']) {					
					$dp['user_pic'] = avatar($dp['username'], $dp['uid']);
				}


				$min = 0;
				if($dp[goods]){
					
					$dp[goods] = stripcslashes($dp[goods]);
					$dp[goods]  =unserialize($dp[goods]);					
					if(is_array($dp[goods]) && $dp[goods]){
						foreach($dp[goods] as $k=>$v){
							if($v['num_iid']){
                               // $url = "http://item.taobao.com/item.htm?id=".$v[num_iid];
                               if(CURACTION=='goods'){
								  $url = '/index.php?a=go_pay&num_iid='.$v[num_iid]; 
								}else{
							    	$url = '/index.php?m=style&a=goods&id='.$dp['id'].'&num_iid='.$v[num_iid];
								}
								$url = '/index.php?a=go_pay&num_iid='.$v[num_iid]; 
                               $v[url]  =$url;
                            }
							if($v[content]) $v[content]=trim_html($v[content],1);
							//if($dp[images] && $v[picurl] && !in_array($v[picurl],$dp[images])) $v[images][] = $v[picurl];
							if(!$v['price'])$v['price']=$v['yh_price'];
							$dp[goods][$k] = $v;
						}
					}else{
						$dp[goods] = array();
					}
				}else{
					$dp[goods] = array();
				}
				$dp[length] = count($dp[goods]);
				//$dp['yh_price']  = $dp[goods][0]['yh_price'];
				$dp['price']  = $dp[goods][0]['price'];
				$dp['num_iid']  = $dp[goods][0]['num_iid'];
			
				return $dp;
			}
		
		
			function fetch($rs){
				global $_G;
				$rs['channel_name'] = $_G['all_channel']['k'.$rs['fid']]['name'];

				$rs['value'] = dunserialize($rs['value']);
				$rs['dateline'] = dgmdate($rs['dateline'],'u');	
				$rs['updatetime'] = dgmdate($rs['updatetime'],'u');	
				return $rs;
			}
			
			
			
			public function movie($dp,$get_count){
					global $_G;		
					$dp['org_dateline']	=$dp['dateline']	;
					$dp['dateline']		= dgmdate($dp['dateline'],'u');
				
	
					
					if($get_count !== false)$dp['comment_count'] = getcount('comment'," type_id = ".$dp[id]." AND type = 'movie' AND `check`=1 ");
					
					$dp['tags']	=	make_tags($dp[keywords]);
					$dp[img] = 1;
					
					if(!$dp['picurl'] && !defined('IN_ADMIN'))		{
						$dp['picurl'] = 'http://img03.taobaocdn.com/imgextra/i3/1905489005/T2sui3XrVXXXXXXXXX_!!1905489005-1-dgshop.gif';
						$dp[img] = 0;
					}
					$dp[url] = '/index.php?m=movie&id='.$dp[id];	
					
					//if(defined('IN_ADMIN'))$dp[user] = getuser($dp[uid],'uid');
					$dp[flag_name] = $_G[setting][flag][$dp[flag]];
					$dp[tag_name] = $_G[setting][movie_tags][$dp[tag]];
					
					
					$today = dmktime(dgmdate(TIMESTAMP,'d'));
					if($dp[dateline]>$today){
							$dp['new'] = 1;
						}else{
							$dp['new'] = 0;
					}
					$dp['user_pic'] =avatar($dp['username'],$dp[uid]);

					
					return $dp;
			}
			
			
			public function zj($dp){
				global $_G;
				
				if(!$dp[content]){
					$dp['content'] =$dp['title'] ;
				}else{
					$dp['content'] =trim_html($dp[content],1);
				}
				$dp['org_dateline'] = $dp['dateline'];
				$dp['dateline'] = dgmdate($dp['dateline'],'u');				
				$dp['tag_name'] = $_G[setting][style_tags][$dp[tag]];
				$dp['tags'] = make_tags($dp[keywords],'/index.php?m=zj&a=list&tag=');
				
			
				$dp[id_url] =$dp[url] = '/index.php?m=zj&id='.$dp[id];
				$check_text = array('待审核','已通过','未通过');
				$dp[check_text] = $check_text[$dp[check]];

				$today = dmktime(dgmdate(TIMESTAMP, 'd'));
				if ($dp[dateline] > $today) {
					$dp['new'] = 1;
				} else {
					$dp['new'] = 0;
				}
				$dp['user_url2'] = '/index.php?m=zj&a=list&u='.$dp['uid'];
				if (!$dp['user_pic']) {	
					$dp['user_url2'].='&c=1';	
					$dp['user_pic'] = avatar($dp['username'], $dp['uid']);
				}
				if(!$dp['user_url'])$dp['user_url'] =$dp['user_url2'];

				
				$min = 0;
				if($dp[goods]){
					$tmp =$dp[goods];
					//$dp[goods] = str_replace("\\",'',$dp[goods]);
					//if(defined('IN_ADMIN'))dump($dp['goods'],1);
					
					$dp[goods] = stripcslashes($dp[goods]);
					$dp[goods]  =dunserialize($dp[goods]);					
					
					if(!$dp[goods]){
						//$dp[goods] = dunserialize($tmp);		
					}
					if(is_array($dp[goods]) && $dp[goods]){
						$goods = array();
						foreach($dp[goods] as $k=>$v){
							if(!$v['num_iid'] && $v['url']) continue;
							if($v['num_iid']){
                               // $url = "http://item.taobao.com/item.htm?id=".$v[num_iid];
                            
							   if(CURACTION=='goods'){
							 	 $url = '/index.php?a=go_pay&id=0&num_iid='.$v[num_iid];
							   }else{
								 $url = '/index.php?m=zj&a=goods&id='.$dp['id'].'&num_iid='.$v[num_iid];   
							  }
							   $url = '/index.php?a=go_pay&id=0&num_iid='.$v[num_iid];
                               $v[url]  =$url;
                            }
							if($v[content]) $v[content]=trim_html($v[content],1);
							//if($dp[images] && $v[picurl] && !in_array($v[picurl],$dp[images])) $v[images][] = $v[picurl];
							$v[picurl] = str_replace('http:http:','http:',$v[picurl]);
							//$dp[goods][$k] = $v;
							$goods [] =$v;
						}
						
						$dp[goods]=$goods ;
						$dp[length] = count($goods);
					}else{
						$dp[goods] = array();
					}
				}else{
					$dp[goods] = array();
				}

				$dp['price']  = $dp[goods][0]['price'];
				$dp['num_iid']  = $dp[goods][0]['num_iid'];
			
				return $dp;
			}
		
			public function shishang($dp,$get_count){
					global $_G;		
					$dp['org_dateline']	=$dp['dateline']	;
					$dp['dateline']		= dgmdate($dp['dateline'],'u');
					if($get_count !== false)$dp['comment_count'] = getcount('comment'," type_id = ".$dp[id]." AND type = 'movie' AND `check`=1 ");
					$dp['tags']	=	make_tags($dp[keywords]);
					$dp[url] = '/index.php?m=shishang&id='.$dp[id];	
					$dp[flag_name] = $_G[setting][flag][$dp[flag]];
					$today = dmktime(dgmdate(TIMESTAMP,'d'));
					if($dp[dateline]>$today){
							$dp['new'] = 1;
						}else{
							$dp['new'] = 0;
					}
					$dp['user_pic'] =avatar($dp['username'],$dp[uid]);
					if(!$dp['description'] && $dp['message'])$dp['description'] = cutstr(trim_html($dp['message'],1),260);
					
					return $dp;
			}

			
			
			
			function youhui($dp,$get_count){
					global $_G;		
					$dp['org_dateline']	=$dp['dateline']	;
					$dp['dateline']		= dgmdate($dp['dateline'],'u');
					$status = intval($dp[check]);
					
					if($dp[check] ==0){
						$dp[status_text] = '待审核';	
					}else if($dp[check] ==1){
						$dp[status_text] = '审核通过';	
					}else if($dp[check] ==2){
						$dp[status_text] = '拒绝';	
					}
					
					$dp[cate_name] = $_G[youhui_cate][$dp[cate]]['name'];
					if(!$dp['description']) $dp['description'] = cutstr(trim_html($dp['message'],1),300);
					
					$dp['tags']	=	make_tags($dp[keywords]);
					
					if(!$dp['picurl'])		{
						$dp['picurl'] = 'http://img03.taobaocdn.com/imgextra/i3/1905489005/T2sui3XrVXXXXXXXXX_!!1905489005-1-dgshop.gif';						
					}
					$dp[id_url] = '/index.php?m=youhui&id='.$dp[id];
					if($get_count !== false)$dp['comment_count'] = getcount('comment'," type_id = ".$dp[id]." AND type = 'youhui' AND `check`=1 ");
					//if(defined('IN_ADMIN'))$dp[user] = getuser($dp[uid],'uid');
					return $dp;
			}
			
			function order_list($dp){
					global $_G;	
					$satus_text = $_G['setting']['order_status'];
					$dp['org_dateline']	=$dp['dateline']	;
					$dp['dateline']		= dgmdate($dp['dateline'],'u');
					$dp['org_create_time']	=$dp['create_time']	;
					$dp['create_time']		= dgmdate($dp['create_time'],'u');
					$dp['status_text']		= $satus_text[$dp['status']];
					
					if($dp['uid']>0 && $dp['status'] == 1){
						DB::update(__FUNCTION__,array('status'=>3),'id='.$dp['id']);
					}
					
				return $dp;
			}
			function money($dp){
					global $_G;	
					$satus_text = $_G['setting']['money_status'];
					$dp['org_dateline']	=$dp['dateline']	;
					$dp['dateline']		= dgmdate($dp['dateline'],'u');					
					$dp['status_text']		= $satus_text[$dp['status']];
					//$dp['money']  = fix($dp['money'],2);
					if(!defined('IN_ADMIN')){
						$dp['desc'] = preg_replace("/\(.*?\)/is",'',$dp['desc']);
					}
					return $dp;
			}
			
			
			
			public function gift($dp){
				global $_G;
				
				if(!$dp[content]){
					$dp['content'] =$dp['title'] ;
				}else{
					$dp['content'] =trim_html($dp[content],1);
				}
				$dp['org_dateline'] = $dp['dateline'];
				$dp['dateline'] = dgmdate($dp['dateline'],'u');	
				
				
				$dp['duixiang_name'] = $_G[setting][duixiang][$dp[duixiang]]['name'];
				$dp['changhe_name'] = $_G[setting][changhe][$dp[changhe]]['name'];
				$dp['gexing_name'] = $_G[setting][gexing][$dp[gexing]]['name'];
			
				$dp['leimu_name'] = $_G[setting][leimu][$dp[leimu]]['name'];
				$cate = $dp['cate'];
				
				if($_G[gift_cate][$cate]){
						$dp['cate_name'] = $_G[gift_cate][$cate]['name'];
				}else{
						
						//最多遍利两级
						foreach($_G[gift_cate] as $k=>$v){							
							if($v['id'] == $cate){								
								$dp['cate_name'] =$v['name'];
								break;
							}else{								
								foreach($v['sub'] as $k1=>$v1){
									if($v1['id'] == $cate){
										$dp['cate_name'] =$v1['name'];
										break;
									}									
								}
							}
						}
						
				}
				
				
				$dp['tags'] = make_tags($dp[keywords],'/index.php?m=gift&a=list&tag=');
				$dp[images] = explode(',',$dp[images]);
			
				$dp[id_url] =$dp[url] = '/index.php?m=gift&id='.$dp[id];
				$check_text = array('待审核','已通过','未通过');
				$dp[check_text] = $check_text[$dp[check]];

				$today = dmktime(dgmdate(TIMESTAMP, 'd'));
				if ($dp[dateline] > $today) {
					$dp['new'] = 1;
				} else {
					$dp['new'] = 0;
				}
				
				
				$min = 0;
				if($dp[goods]){
					$dp[goods] = stripcslashes($dp[goods]);
					$dp[goods]  =unserialize($dp[goods]);					
					if(is_array($dp[goods]) && $dp[goods]){
						foreach($dp[goods] as $k=>$v){							
							if($v['num_iid']){
                               // $url = "http://item.taobao.com/item.htm?id=".$v[num_iid];
                               $url = '/index.php?a=go_pay&num_iid='.$v[num_iid];
                               $v[url]  =$url;
                            }
							if($v[content]) $v[content]=trim_html($v[content],1);
							//if($dp[images] && $v[picurl] && !in_array($v[picurl],$dp[images])) $v[images][] = $v[picurl];
							//if(!$v['price'])$v['price']=$v['yh_price'];
							$v['like'] = intval($v['like']);
							$dp[goods][$k] = $v;
						}
						//最多只能添加10条
						$dp[goods] = array_splice($dp[goods],0,10);
					}else{
						$dp[goods] = array();
					}
				}else{
					$dp[goods] = array();
				}				
				$dp['price']  = $dp[goods][0]['price'];
				return $dp;
			}
		
		public function message($dp){
				global $_G;
				
				$dp['org_dateline'] = $dp['dateline'];
				$dp['dateline'] = dgmdate($dp['dateline'],'u');
				
				return $dp;
		}
			
			
		public function tixian($dp){
				global $_G;
				
				$dp['org_dateline'] = $dp['dateline'];
				$dp['dateline'] = dgmdate($dp['dateline'],'u');
				
				$dp['org_updatetime'] = $dp['updatetime'];
				$dp['updatetime'] = dgmdate($dp['updatetime'],'u');
				
				$satus_text = $_G['setting']['tixian_status'];
				$dp['status_text']		= $satus_text[$dp['status']];
				
				return $dp;
		}



}

?>