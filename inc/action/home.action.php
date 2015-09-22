<?php
if(!defined('IN_TTAE')) exit('Access Denied'); 


class home extends app{
		function __construct(){
			if(!is_login()) return false;
		}
		function main(){
			global $_G;			
			
			$this->show();
		}
		

		function sign(){
			global $_G;
				$this->show();
		}
		function prize_ajax(){
			global $_G;
			$arr = array('status'=>'error');
			if(!$_GET['prizeid'] || !$_GET[convert]){
				$arr['msg'] = '抱歉,奖品ID不存在,或您要操作的奖品未知';
				json($arr);
				return false;
			}
			$prizeid = intval($_GET['prizeid']);
			$prize = DB::fetch_first("SELECT * FROM ".DB::table('reward_history')." WHERE  id= $prizeid");
			$convert =intval($_GET[convert]);
			if($convert!=1 && $convert!=3){
					$arr['msg'] = '抱歉, 您无权操作';
					json($arr);
					return false;
			}			
			

			if($prize[id]>0){
				if($prize[uid]!=$_G[uid]){
					$arr['msg'] = '抱歉, 当奖中奖的账号与当前登录的账号不一致,无非操作';
					json($arr);
					return false;
				}elseif(!$prize[prizeid]){
					$arr['msg'] = '抱歉, 没有任何中奖信息';
					json($arr);
					return false;
				}elseif($prize[convert] ==9 || $prize[convert] ==3){
					$arr['msg'] = '当前奖品已完成领奖或已被关闭,无法再进行操作';
					json($arr);
					return false;
				}elseif($convert ==1&& $prize[convert] !=0){
					$arr['msg'] = '抱歉, 当前奖品可能已经申请了兑换或已发货,无法再次申请领奖';
					json($arr);
					return false;
				}elseif($convert ==3&& $prize[convert] !=2){
					$arr['msg'] = '抱歉, 当前奖品状态可能未发货或在其它状态,无法确认收货操作';
					json($arr);
					return false;
				}
				
			}else{
				$arr['msg'] = '奖品不存在';
				json($arr);
				return false;
			}
			
			$ret = DB::update('reward_history',array('convert'=>$convert)," id=".$prizeid);
			
				$arr['status'] = "success";
				if($convert==1){
					$arr['msg'] = '兑换消息发送成功,请等待客服为您寄发奖品,请一定要认真填写资料中的收费地址与各种联系方式方便客户发放奖品';
				}elseif($convert ==3){
					$arr['msg'] = '操作成功,您已收货完成';
				}
				json($arr);
				return false;
		}
		
		//中奖的宝贝
		function prize_list(){
					global $_G;
					
					$prize = array();
					$showpage = '';
					
					$size  = 15;
					$start = ($_G[page]-1)*$size;
					$and .=  " AND uid = ".$_G[uid] ." AND  is_prize = 1";
					$url ='&prize=1';

					
					if($_GET[type] && in_array($_GET[type],array('prize','ticket','goods'))) {
						if($_GET[type]=='goods'){
							$type = daddslashes($_GET[type]).'_id';
						}else{
						$type = daddslashes($_GET[type]).'id';
						}
						$and .=" AND  {$type} >0";
						$url.="&type=".$type;
					}
					$count = getcount('reward_history',$and);
					if($count>0){
						$showpage = multi($count,$size,$_G[page],URL."m=home&a=prize_list".$url);
						$prize = DB::fetch_all("SELECT * FROM ".DB::table('reward_history')." WHERE 1 $and ORDER BY id DESC LIMIT $start,$size");
						if(count($prize)>0){
							foreach($prize as $k=>$v){

								$prize[$k] =parse('history',$v,false,true);
							}
						}
					}

					$this->add(array('prize'=>$prize,'count'=>$count,'showpage'=>$showpage));
					$this->show();
		}
		
		//抽过奖的宝贝
		function prize(){
			global $_G;
			
			$prize = array();
			$showpage = ''; 
			
			$size  = 15;
			$start = ($_G[page]-1)*$size;
			$and .=  " AND uid = ".$_G[uid];
			$url = '';
			$count = getcount('reward_history',$and);
			
			
			
			$rs = D(array('and'=>' AND uid = '.$_G[uid],'table'=>'reward_history','order'=>'id DESC '),array('url'=>URL.'m=home&a=prize','size'=>15));
			
			$this->add($rs);
			$this->show();
		}
		
		
		
		
		
		

		function setting(){
			global $_G;
			

			if($_GET[onsubmit] && check()){
				$url = URL."m=home&a=setting";	
				
				$arr =array();
				
				
				if(isset($_GET[postdb][wangwang]) && $_GET[postdb][wangwang]) $arr[wangwang] =trim($_GET[postdb][wangwang]);				
				if(isset($_GET[postdb][name]) && $_GET[postdb][name]) 		$arr[name] =trim($_GET[postdb][name]);	
				if(isset($_GET[postdb][address]) && $_GET[postdb][address]) 	$arr[address] =trim($_GET[postdb][address]);	
				if(isset($_GET[postdb][content]) && $_GET[postdb][content]) 	$arr[content] =trim($_GET[postdb][content]);	
				if(isset($_GET[postdb][qq]) && $_GET[postdb][qq]) 			$arr[qq] =trim($_GET[postdb][qq]);	
				
			

				if(isset($_GET[postdb][alipay]) && $_GET[postdb][alipay]) {
					$alipay =trim($_GET[postdb][alipay]);	
					if(!is_email($alipay) && !is_phone($alipay)) {
						msg('支付宝账号只能为邮箱或手机号码,请重新输入');						
					}
					$arr[alipay] = $alipay;
				}
					
				if(isset($_GET[postdb][alipay_name]) && $_GET[postdb][alipay_name]) 	$arr[alipay_name] =trim($_GET[postdb][alipay_name]);	


				if($_G[member][login_type] && !$_G[member][username]){
					if(!$_GET[postdb][username]){
						msg("您当前是通过开放平台登录,你须绑定(或注册)一个用户名",'error',$url);
						return false;
					}
					
					$username = daddslashes($_GET[postdb][username]);
					$p = DB::fetch_first("SELECT * FROM ".DB::table('member')." WHERE username ='$username' ");
					if($p[uid]>0) {
						msg('用户名已被注册','error');
						return false;
					}
					$arr[username] = $username;
				}
				$email_msg = '';
				//未验证的情问下,允许再次重新修改
				if(isset($_GET[postdb][email]) && $_GET[postdb][email] && $_G[member][email_check]==0){
					$email = daddslashes($_GET[postdb][email]);
					if(!is_email($email))  {
						msg('邮箱格式不正确','error');
						return false;
					}
					$p = DB::fetch_first("SELECT uid FROM ".DB::table('member')." WHERE email ='$email' AND uid != ".$_G[uid]);
					if($p[uid]>0) {
						msg('邮箱已被注册','error');
						return false;
					}
					$arr[email] = $email;	
					$arr['email_check'] = 0;				
					if($_G[setting][email_check] == 1 && !$_SESSION['verify']){
						$status	=send_email($arr['email'],'email_check');
						if($status['status']=='success'){
							$email_msg = '<p>您修改了邮箱,您的账户还需要验证,我们已向您的邮箱'.$arr['email'].'发送了一封验证邮件,请在15分钟内查看并验证</p>';
						}else{
							$email_msg = '<p>发送验证邮件失败,错误信息:'.$status[msg].'</p>';	
						
						}	
					}
				}
				
				
				
				if(isset($_GET[postdb][phone]) && $_GET[postdb][phone] && $_G[member][phone_check]==0){
					$phone = daddslashes(trim($_GET[postdb][phone]));
					if(!is_phone($phone))  {
						msg('手机号码格式不正确','error');
						return false;
					}
					$p = DB::fetch_first("SELECT uid FROM ".DB::table('member')." WHERE phone ='$phone' AND uid != ".$_G[uid]);
					if($p[uid]>0) {
						msg('手机号码已被注册','error');
						return false;
					}
					$arr[phone] = $phone;
					$arr['phone_check'] = 0;
					
				}			

			
				if(isset($_GET[postdb][picurl]))$arr[picurl] = trim($_GET[postdb][picurl]);
				if($_FILES[file]) {
					$pic =  upload();
					if($pic)$arr[picurl] = $pic;
				}
				
				
				
				$arr = daddslashes($arr);
				update_member($arr);
				
				//更新用户积分
				$is_add = true;
				foreach($arr as $k=>$v){
					if ($k=='nick')continue;
					if(!$v || $v=='')$is_add = false;
				}
				$msg = '';
				if($is_add){
					$desc = '完善资料获取积分';
					$count = getcount('sign'," uid = ".$_G[uid]." AND `desc`='".$desc."' AND type = 'system'");
					if($count==0){
						$jf  	=	$_G[setting][user_info_jf];
						$add_jf = 	$_G['member']['jf']+$jf;
						
						$sid =insert_sign(array('desc'=>$desc,'type'=>'system','org_jf'=>$add_jf,'jf'=>$jf));
						if($sid){
							update_member(array('jf'=>$_G[member][jf]+$jf),$_G[uid]);
							$msg.=",成功完善资料,获得系统奖励".$jf.'积分';
						}
					}
				}
				msg("资料修改成功".$msg.$email_msg,'success',$url);
				return false;
			}
			
			
			$this->show('home/setting');
		}
		
		
		function jf_list(){
			global $_G;
			
			
			
			$and = ' AND uid=' .$_G[uid];
			$url = URL."m=home&a=jf_list";
			$jf_type =get_jf();
			
			if($_GET[type] && array_key_exists($_GET[type],$_G['setting']['jf_type'])){
				$type = addslashes(trim($_GET[type]));
				$and .= " AND type='{$type}'";
				$url.="&type=".$type;				
			}
			$size = $_G[mobile] ? 10 : 15;
			$rs = D(array("and"=>$and,'table'=>'sign','order'=>'id DESC'),array('size'=>$size,'url'=>$url));

			
			
			$rs[sign] = $rs['goods'];
			$this->add($rs);
			$this->show();
		}
		
		function jf_task(){
			global $_G;
			

			$sign = DB::fetch_first("SELECT * FROM ".DB::table('sign')." WHERE uid=".$_G[uid]." AND type = 'sign' ");
			if($sign[dateline]>0){
				$sign[dateline] = dgmdate($sign[dateline],'u');
			}else{
				$sign['dateline']	 = '暂无签到记录';
			}
			
			if(!TAE ){					
					foreach($_G[setting][sign_jf] as $k=>$v){
						$k=str_ireplace("i:",'',$k);
						$v=str_ireplace("i:",'',$v);
						$_G[setting][sign_jf][$k] = $v;
					}
			}

			$this->add(array('sign'=>$sign));
			$this->show();
		}
		
		
		function password(){
			global $_G;

			  if( $_GET[password1]&&$_GET[password2]&&$_GET[password3]&& $_GET[onsubmit] && check()){								
					  $password = (trim($_GET[password1]));
					  $password2 = (trim($_GET[password2]));
					  $password3 = (trim($_GET[password3]));
					  if($password2!=$password3) {
						  msg('两次输入的新密码不一致,请重新输入','error');
						  return false;
					  }
					  $user =$_G[member];			  
					  
					   if((authcode($user[password],'decode',$user['key']) ==$password) || ($user[login_name]!='' && $user[password]=='') ){
						  $update = array('login_time'=>TIMESTAMP,'login_ip'=>$_G['clientip'],'login_count'=>$user[login_count]+1);
						  $update['key'] = random(10);
						  $update[password] = authcode($password2,'encode',$update['key']);//将新密码加密
						  
							  $auth = authcode($user[uid].'|'.$update[password],'encode');
							  DB::update('member',$update,"uid=".$user[uid]);
							  if($user[login_name]==''){
								  dsetcookie("auth",$auth,86400);
							  }
							  msg('修改密码成功','success');
							  return false;
					  }else{						  
						  msg('原始密码不正确,请重新提交,',error,'m=home&a=password');
						   return false;
					  }		
			  }
			  
			  $this->show('home/password');
	}	
	
	
	function shiyong(){
			global $_G;
			

			
			$size  = 15;
			$start = ($_G[page]-1)*$size;
			$and =  " AND uid = ".$_G[uid];
			$url = URL."m=home&a=shiyong";
			$and2 = " AND a.uid = ".$_G[uid];
			
			if($_GET[type]){
				$type = intval($_GET[type]);
				$and .=' AND type = '.$type;
				$url .="&type=".$type;
				$and2 .=' AND a.type = '.$type;
			}

			$rs = D(array('and'=>$and,'table'=>'shiyong_apply','order'=>' id ASC '),array('url'=>$url,'size'=>$size));
			foreach($rs[goods] as $k=>$v){
				$rs[goods][$k][goods] = D(array('table'=>'shiyong','and'=>' AND id = ' . $v[shiyong_id]));
			}
			
			
			$this->add($rs);
			//$this->add(array('goods'=>$goods,'count'=>$count,'showpage'=>$showpage));
			$this->show('home/shiyong');
			
	}
	
	function shiyong_number(){
			global $_G;
			$id = intval($_GET[id]);
			if(!$id)msg('抱歉,ID不存在');
			$and = "id = ".$id." AND uid = ".$_G[uid];
			$goods  = D(array('and'=>$and,'table'=>'shiyong_apply'));
			
			if(!$goods)msg('抱歉,未找到您所试用的商品记录');
			if(!$_G[member][alipay])msg('您当前账号必须填写支付宝账号才能在订单完成后获得返现','error','?m=home&a=setting');
			
			if($goods[number]!='')msg('抱歉,当前商品的试用单号已填写,无法修改','error');
			
			if($_GET['onsubmit']){
					
					if($goods[status]>1)msg('抱歉,当前商品的试用状态为,无法修改');
					if(!$_GET[number])msg('抱歉,要提交的商品订单不能为空');
					$number = trim($_GET[number]);

					if(!preg_match("/^\d{15}$/",$number))msg('淘宝商品订单不正确,订单号是15位的数字');
					
					$rs  = D(array('and'=>" AND number = '".$number."'",'table'=>'shiyong_apply'));
					if($rs[id]>0)msg('当前订单号已被提交过,无法再次提交');
					
					$ok = DB::update('shiyong_apply',array('number'=>$number),$and);
					if($ok){
						$u = $goods[type]>0?'&type='.$goods[type]:'';
						msg('提交订单号成功,请耐心等待商家返现','success','?m=home&a=shiyong'.$u);
					}else{
						msg('提交订单号失败,请联系在线客服');
					}
					
			}
			$goods  = D(array('and'=>" AND id = ".$goods[shiyong_id],'table'=>'shiyong'));
			
			$this->add(array('goods'=>$goods));
			$this->show();
			
			
	}
		
		function duihuan(){
			global $_G;
			
			
			$size  = 15;
			$start = ($_G[page]-1)*$size;
			$and =  " AND uid = ".$_G[uid];
			$url = URL."m=home&a=duihuan";
			$showpage ='';
			$count = getcount('duihuan_apply',$and);
			if($count>0){
				$showpage = multi($count,$size,$_G[page],$url);
				$goods = DB::fetch_all("SELECT b.*,a.status as _status,a.content as message,a.dateline,a.statustime FROM ".DB::table('duihuan_apply').
							" as a , ".DB::table('duihuan')." as b  WHERE a.duihuan_id = b.id  $and ORDER BY id DESC LIMIT $start,$size");
				
				foreach($goods as $k=>$v){
					$v = parse('duihuan',$v);
					$v[status_text] = $_G[setting][duihuan_status][$v[_status]];
					$goods[$k]  = ($v);
					
				}
				
			}
		
			$this->add(array('goods'=>$goods,'count'=>$count,'showpage'=>$showpage));
			$this->show();
			
	}
				
		function addfavorite(){
			global $_G;
			
			
			$size  = 15;
			$start = ($_G[page]-1)*$size;
			$and =  " AND uid = ".$_G[uid] . " AND type = 'addfavorite'  AND aid >0";
			$url = URL."m=home&a=addfavorite";
			$and2 = '';
			if($_G[fid]>0){
				$and2=" AND a.fid=".intval($_G[fid]);
			}
			
			$showpage ='';
			$count = getcount('sign',$and);
			if($count>0){
				

				$where  = ' b.uid = '.$_G[uid]." AND b.type = 'addfavorite' AND b.aid>0" ;
				$sql  = " SELECT a.*,b.username,b.jf,b.ip,b.org_jf,b.type,b.add,b.desc,b.dateline as t FROM  ".
						DB::table('goods')." AS a LEFT join ".DB::table('sign')." AS b on a.aid = b.aid AND b.jf>-1 $and2 WHERE ".
						$where . " ORDER BY b.id DESC LIMIT $start,$size";
				$count2 = DB::fetch_first("SELECT count(a.aid) as count_num FROM  ".
							DB::table('goods')." AS a LEFT join ".DB::table('sign')." AS b on a.aid = b.aid AND b.jf>-1 $and2 WHERE " .$where );
				$count=$count2['count_num'];
				$goods = DB::fetch_all($sql);
				foreach($goods as $k=>$v){					
					$v = parse('goods',$v);
					$goods[$k]  = ($v);					
				}
				
				$showpage = multi($count,$size,$_G[page],$url);
				
			}	
			$this->add(array('goods'=>$goods,'count'=>$count,'showpage'=>$showpage));
					
			$this->show();
			
	}
	
	function favorite_list(){
			global $_G;
			$and = ' AND uid=' .$_G[uid];
			$url = URL."m=home&a=favorite_list";
			if($_GET[type] && array_key_exists($_GET[type],$_G['setting']['favorite_types'])){
				$type = addslashes(trim($_GET[type]));
				$and .= " AND type='{$type}'";
				$url.="&type=".$type;
			}

			$size = $_G[mobile] ? 10 : 15;
			$rs = D(array("and"=>$and,'table'=>'favorite','order'=>'id DESC'),array('size'=>$size,'url'=>$url));
			$this->add($rs);
			$this->show();
		
	}
	
	
	function favorite_del(){
			global $_G;
			
			$id = intval($_GET[id]);			
			if(!$id)msg('抱歉,要删除的收藏信息id不能为空');	
			$and = ' AND id = '.$id;
			$goods = D(array('and'=>$and,'table'=>'favorite'));
			if(!$goods[id]) msg('抱歉,未找到相关收藏信息');
			if($goods[uid]!=$_G[uid])msg('抱歉,您无权删除非自己收藏的信息');
			$id = DB::delete('favorite','id='.$id);			
			$jf = $goods['jf'];
			
			$msg = '';
			if($jf>0 && $goods[id]>0) {
						
						$jf = 0-$jf;
						$add_jf = 	$_G['member']['jf']+$jf;
						update_member(array('jf'=>$_G[member][jf]+$jf),$_G[uid]);
						$msg=",已扣除积分".$goods['jf'];
			}
			  
			msg('删除成功'.$msg,'success');			
	}
	
	
	function goods(){
		global $_G;

		

		$url = URL."m=home&a=goods";
		$and =  " AND uid = ".$_G[uid]." AND post > 0";
		
		if($_GET[num_iid]){
			$iid = get_goods_id($_GET[num_iid]);
			if($iid) {
				$and.=" AND num_iid='$iid'";
				$url.="&num_iid=".$iid;
			}
		}
		
		
		
		$rs = D(array('and'=>$and,'all'=>true),array('url'=>$url,'size'=>15));
		$this->add($rs);
		$this->show();
	}
	function post(){
		global $_G;
		
		if($_GET[aid]){
					$aid = intval($_GET['aid']);

					$goods = D(array('and'=>"and aid = " .$aid . " AND post >0 AND username ='". $_G[username] ."'",'all'=>true));
					
					if(!$goods[aid]){
						msg('要编辑的商品不存在','error');
						return false;
					}
					
					if($goods[username] !=$_G[username]){
						msg('无权编辑他人报名的商品','error');
						return false;
					}
					
					if($goods[check] ==1){
						msg('商品已审核无法进行编辑','error');
						return false;
					}
					
					if($_GET[onsubmit]){
						//编辑提交
						
						$arr = get_filed('goods',$_GET[postdb],$aid);						
						$arr[dateline]	 = TIMESTAMP;
						$arr[check] = 0;
						$arr[post] = $goods[post] +1;
						
						
										
						top('goods','update',$arr,$aid);						
					msg('重新报名成功,请认真填写相关内容,否则多次申核后还不成功,将禁止此商品报名,严重者将禁止店铺所有商品报名','success','m=home&a=post&aid='.$aid);
						return false;
						
					}
			
		}else{
					 $goods =get_filed('goods');
		}
		$this->add(array('goods'=>$goods));
		$this->show();
		
	}
	
	function tougao(){
		global $_G;
		
		$goods = get_filed('goods');
		
					if($_GET[onsubmit] && check()){
						$picurl = trim($_GET['postdb']['picurl']);
						if($picurl && !preg_match("/^http:\/\//",$picurl)){
							msg('抱歉,图片格式不正确,请重新提交','error',URL.'m='.__CLASS__.'&a='.__FUNCTION__);
							return false;
						}
						
						$title  = trim($_GET['postdb']['title']);
						if(!$title){
							msg('抱歉,商品标题不存在','error',URL.'m='.__CLASS__.'&a='.__FUNCTION__);
							return false;
						}
						$num_iid  = ($_GET['postdb']['num_iid']);
						if(!$num_iid){
							msg('抱歉,商品ID不存在','error',URL.'m='.__CLASS__.'&a='.__FUNCTION__);
							return false;
						}					

						$arr =  get_filed('goods',$_GET['postdb']);
						if($_FILES[file]){	
								$pic = upload();	
								if($pic)$arr[picurl] = $pic;						
						}
						$arr[uid] = $_G[uid];
						$arr[username] = $_G[username];
						$arr['check']  = 0;
						$arr['title']  = cutstr($arr[title],60,'');
						$arr['dateline'] = TIMESTAMP;
						$arr['post']  = 1;
						
						
						if($_GET[aid]){
							$aid=intval($_GET[aid]);
							top('goods','update',$arr,$aid);	
							$msg = '修改成功';
						}else{
							
							
							top('goods','insert',$arr);	
							$msg='投稿成功';
						}
						msg($msg.',请耐心等待审核（2个工作日内）','success',URL.'m='.__CLASS__.'&a='.__FUNCTION__);				

						
					}elseif($_GET['get_submit'] && check() && $_GET['goods_id']){
					
					
						//提交ID采集商品
						  if(get_goods_id(trim($_GET['goods_id']))){
							  $goods_id =get_goods_id(trim($_GET['goods_id']));							
						  }
							
						  if(!$goods_id) {
							  msg('抓取失败,商品ID或链接不存在或填写错误','error',URL.'m='.__CLASS__.'&a='.__FUNCTION__);
							  return false;
							}
						  $gd = top('goods','get_goods',$goods_id);
						  $nick = trim($gd[nick]);					  
						
						  $gd[goods_id] = $goods_id;
						  $gd['start_time'] = dgmdate($gd['start_time'],'dt');
							$gd['end_time'] = dgmdate($gd['end_time'],'dt');
						  foreach($gd as $k=>$v){
							  $goods[$k] = $v;
						  }
						  
				}else if($_GET[aid]){
					$aid = intval($_GET[aid]);
					  $goods =$goods = D(array('and'=>"and aid = " .$aid ,'all'=>true));
					  if($goods[check] ==1 )msg('当前商品已审核您无权再次编辑');
					  
				}else{
						 $goods =get_filed('goods');
						  $goods_id = '';
				}
			$this->add(array('goods'=>$goods,'goods_id'=>$goods_id));
			$this->show();
		
	}
	
	function del(){
			global $_G;
			
			
			$aid = intval($_GET['aid']);					
			$goods = D(array('and'=>"and aid = " .$aid . " AND post >0 AND uid ='". $_G[uid] ."'",'all'=>true));
			if(!$goods[aid]){
				msg('要删除的商品不存在','error');
				return false;
			}
			
			if($goods[uid] !=$_G[uid]){
				msg('您无权删除','error');
				return false;
			} ;
			if($goods[check] ==1){
				msg('商品已审核无法进行删除','error');
				return false;
			}

			$id = DB::delete('goods','aid='.$aid);
			
			if($id){
				msg('删除成功','success');
			}else{
				msg('删除失败','error');
			}
			return false;
			
	}
	
	
		
	
	function _list(){ 
		global $_G;
		
		
	
		$size  = 15;
		$start = ($_G[page]-1)*$size;
		$and='  AND post >0  ';
		$and.=" AND username = '".$_G[member][username]."'";
		
		$url = URL."m=home&a=list";
		$rs = D(array('and'=>$and,'all'=>true,'cut'=>'title|50'),array('url'=>$url,'size'=>15));
		$this->add($rs);
		$this->show();
	}
	
	
	function goods_check(){
		global $_G;
		if($_GET[aid]){
			
			if($_G[member][groupid]!=2){
				msg('您权限操作','error');
				return false;
			}
			
			  $aid = intval($_GET['aid']);					
			  $goods = D(array('and'=>"and aid = " .$aid . " AND post >0 ",'all'=>true));
			  
			  if(!$goods[aid]){
				  msg('要编辑的商品不存在','error');
				  return false;
			  }
			  
			  
			  
			  if($_GET[onsubmit] && check()){
				  $arr = get_filed('goods',$_GET[postdb],$aid);						
				  				
				  top('goods','update',$arr,$aid);						
				  msg('修改报名商品信息成功','success');
				  return false;
				  
			  }
			
		}else{
				$goods =get_filed(__CLASS__);
		}
		$this->add(array('goods'=>$goods));
		$this->show();
		
	}
	
	function goods_del(){
			global $_G;
			
			
			$aid = intval($_GET['aid']);					
			$goods = D(array('and'=>"and aid = " .$aid . " AND post >0",'all'=>true));
			
			if($goods[uid]!=$_G[uid]) msg('您无权删除');
			
			if(!$goods[aid]){
				msg('要编辑的商品不存在','error');
				return false;
			}
			if($goods[check] ==1){
				msg('商品已审核无法进行删除','error');
				return false;
			}
			$id = DB::delete('goods','aid='.$aid);
			if($id){
				msg('删除成功','success');
			}else{
				msg('删除失败','error');
			}
			return false;
			
	}

	function yaoqing(){
			global $_G;
			seo('会员邀请赚积分');
			$this->show();
	}
	
	function yaoqing_miji(){
		global $_G;
			seo('邀请秘籍');
			$this->show();
	}
	function yaoqing_list(){
			global $_G;
			
			
			$and = " uid = ".$_G[uid] . " AND type = 'yaoqing' ";
			$url = "m=home&a=yaoqing_list";
			$size = 15;
			$rs = D(array('and'=>$and,'table'=>'sign','order'=>' id DESC'),array('size'=>$size,'url'=>$url));
			$this->add($rs);
			
			seo('会员邀请记录');
			$this->show();
	}
		
	//讨论
	function say_post(){
		global $_G;
		if($_G[member][groupid] == 3){
				 msg('抱歉,您当前是禁止用户,无法使用');
		  }else if($_G[member][check] == 0){
				  msg('抱歉,您当前账号未审核无法使用');
		  }
		if(!$_G[setting][say_status]) msg('抱歉,系统已关闭发布讨论功能','error');
		$goods = '';
		$url = 'm=home&a=say_post';
		if($_GET[onsubmit] && check()){
				
				if($_G[setting][say_block]){
					$list = explode(',',$_G[setting][say_block]);
					if(in_array($_G[username],$list)) msg('抱歉,您当前账号已被加入黑名单,无法发布讨论');
				}
				if($_GET[id]){
					$arr = array();
				}else{
					$arr = get_filed('say');
				}
				
				$arr[title] = safe_filter($_GET['postdb'][title]);
				$arr[picurl] = trim($_GET['postdb'][picurl]);
				$arr[keywords] = safe_filter($_GET['postdb'][keywords]);
				$arr[message] = safe_filter($_GET['postdb'][message]);
				if(!$arr[title])msg('标题不能为空');
				if(!$arr[message])msg('讨论内容不能为空');
				$arr[post] = 1;
				$arr[check] = intval($_G[setting][say_check]);
				$arr[cate] = intval($_GET['postdb'][cate]);
				$arr[description] = cutstr(trim_html($arr[message],1),250,'');
				if($_FILES[file]) {					
					$pic  = upload();
					if($pic)$arr[picurl] = $pic;
				}
				/*if(!$arr[picurl] && preg_match("/<img.*?src=\"(.*?)\"/is",$arr[message],$say_arr)){
						if($say_arr[1])$arr[picurl] = $say_arr[1];
				}*/
				//$arr = daddslashes($arr);
				
				  if($_GET['id']){
					  $id = intval($_GET['id']);
					  $goods = D(array('table'=>'say','and'=>' AND id = '.$id));
					 if($goods[uid]!=$_G[uid])msg('抱歉,您无权编辑非自己发布的信息','error','m=home&a=say_list');
									$id = intval($_GET['id']);			
									$url .="&id=".$id;						
									DB::update('say',$arr,"id=".$id);
									$msg = '修改成功';	
				  }else{					 
					$arr['dateline'] = TIMESTAMP;
					$arr[uid] = $_G[uid];
					$arr[username] = $_G[username];
					 $id =DB::insert('say',$arr,1);
					 $msg = '发布成功';					 
					 $jf=intval($_G[setting][style_jf]);
							if($_G[setting][say_post_jf]>0){
							$jf = intval($_G[setting][say_post_jf]);
							insert_sign(array('desc'=>'发布讨论主题-id-'.$id,'type'=>'say','org_jf'=>$_G[member][jf],'jf'=>$jf,'aid'=>0));
							update_member(array('jf'=>$_G[member][jf]+$jf),$_G[uid]);
						}
				  }				  
				
				if(!$id)msg('抱歉,发布失败,请联系在线客服');
				if($arr[check]==0) $msg.=',您所发布的信息需等审核后才能查看';
				
				
				msg($msg,'success',$url); 
		}else if($_GET[id]){
				$id = intval($_GET[id]);
				$goods = D(array('table'=>'say','and'=>' AND id = '.$id));
				
				if(!$goods[id]) msg('抱歉,未找到要编辑的讨论主题信息','error','m=home&a=say_list');
				if($goods[uid]!=$_G[uid])msg('抱歉,您无权编辑非自己发布的信息','error','m=home&a=say_list');
				if($goods[check]==1) msg('已审核的信息无法再次编辑','error','m=home&a=say_list');
				
			}
			
		$this->add(array('goods'=>$goods));
		
		
		seo('发布讨论');
		$this->show();
	}

	function say_list(){
			global $_G;
			$and = " uid = ".$_G[uid];
			$url = "m=home&a=say_list";
			$size = 15;
			$rs = D(array('and'=>$and,'table'=>'say','order'=>' `sort` DESC, id DESC'),array('size'=>$size,'url'=>$url));
			$this->add($rs);
			$this->show();
	}
	
	function say_del(){
			global $_G;
			
			$id = intval($_GET[id]);			
			if(!$id)msg('抱歉,要删除的讨论主题id不能为空');	
			$and = ' AND id = '.$id;
			$goods = D(array('and'=>$and,'table'=>'say'));
			if(!$goods[id]) msg('抱歉,未找到相关讨论主题');
			if($goods[uid]!=$_G[uid])msg('抱歉,您无权删除非自己发布的讨论主题');
			$id = DB::delete('say','id='.$id);
			
			 $jf=intval($_G[setting][say_post_jf]);
			  if($jf>0)	{
					  insert_sign(array('desc'=>'删除讨论主题','type'=>'say','org_jf'=>$_G[member][jf],'jf'=>0-$jf,'aid'=>0));
					  update_member(array('jf'=>$_G[member][jf]-$jf),$_G[uid]);
			  }			  
			msg('删除成功','success','m=home&a=say_list');			
	}
	
	function style_list(){
			global $_G;
			
			$and = " uid = ".$_G[uid];
			$url = "m=home&a=style_list";
			$size = 15;
			$rs = D(array('and'=>$and,'table'=>'style','order'=>' `sort` DESC, id DESC'),array('size'=>$size,'url'=>$url));
			$this->add($rs);
			$this->show();
	}
	
	
	
	function style_post(){
			global $_G;
			if($_G[member][groupid] == 3){
				 msg('抱歉,您当前是禁止用户,无法使用','error','?');
			}else if($_G[member][check] == 0){
				json('抱歉,您当前账号未审核无法使用','error','?');
			}
			if(!$_G[setting][style_status])msg('抱歉,系统未开放专辑投稿功能','error','?');
			
			
			if($_GET[onsubmit] && check()){
				$goods =get_filed('style',$_GET[postdb],$_GET[id]);
				
				$goods['check'] = intval($_G[setting][zj_check]);
				$goods['sort'] = 0;
				$goods['keywords'] = ($goods['keywords']);
				$goods['content'] = ($goods['content']);
				$goods['title'] = ($goods['title']);

				if(!$goods['title']) msg('搭配标题不能为空');
				if(!$goods['picurl']) msg('搭配主图不能为空');
				if(!$goods['tag']) msg('搭配分类不能为空');
				if(!$goods['content']) msg('搭配内容描述不能为空');
				if(strpos($goods[picurl],'http:') === false) msg('搭配的主图格式不正确');
				$goods['picurl'] = preg_replace('/_(\d+)(.*?)$/','',$goods['picurl']);
				
				if(!array_key_exists($goods['tag'],$_G[setting][style_tags])) msg('搭配的标签不存在');
				
				
				
				//单品
				  $goods[goods] = array();
				  foreach($_GET[dp_num_iid] as $k=>$v){
						
						  $arr = array();										
						  $arr[title] = ($_GET['dp_title'][$k]);						  
						  $arr[price] = sprintf("%.1f",$_GET['dp_price'][$k]);
						  $arr[num_iid] =get_goods_id($_GET['dp_num_iid'][$k]);
						  $arr[content] ='';
						  $arr[picurl] =$_GET['dp_picurl'][$k];						  
						  
						  if(!$arr[price] || !$arr[title] || !$arr[num_iid]) continue;
						  $goods[goods][] = $arr;
						  
				  }
				
				  $goods[length] = count($goods[goods]);
				  if($goods[length]>0) $goods[goods] = serialize($goods[goods]);
				  $goods['post'] = 1;
                  $goods['like'] = 0;
				
				 $url = '';
				  if($_GET['id']){
					  				
									$id = intval($_GET['id']);			
									$url .="&id=".$id;						
									DB::update('style',$goods,"id=".$id);
									$msg = '修改成功';	
				  }else{
                     

					 $goods['dateline'] = TIMESTAMP;					
					$goods['uid'] =$_G['uid'];
					$goods['username'] = $_G['username'];

					 $r=DB::insert('style',$goods,true);
					 $msg = '发布成功';
					 
					 $jf=intval($_G[setting][zj_jf]);
					if($jf>0 && $r>0)	{
							$msg  .= ',恭喜您获得'.$jf.'积分';
							insert_sign(array('desc'=>'发布搭配信息','type'=>'zj','org_jf'=>$_G[member][jf],'jf'=>$jf,'aid'=>$r));
							update_member(array('jf'=>$_G[member][jf]+$jf),$_G[uid]);
					}
				  }
			  
				  msg($msg,'success','m='.__CLASS__.'&a='.__FUNCTION__.$url);
				
			}else if($_GET[id]){
				$id = intval($_GET[id]);
				$goods = D(array('table'=>'style','and'=>' AND id = '.$id));
				if(!$goods[id]) msg('抱歉,未找到要编辑的搭配信息');
				if($goods[uid]!=$_G[uid])msg('抱歉,您无权编辑非自己发布的信息');
				if($goods[check]==1) msg('已审核的信息无法再次编辑');
				
			}
			
			$this->add(array('goods'=>$goods));
			$this->show();
	}
	
	function style_del(){
			global $_G;
			
			$id = intval($_GET[id]);			
			if(!$id)msg('抱歉,要删除的搭配id不能为空');	
			$and = ' AND id = '.$id;
			$goods = D(array('and'=>$and,'table'=>'style'));
			if(!$goods[id]) msg('抱歉,未找到相关搭配');
			if($goods[uid]!=$_G[uid])msg('抱歉,您无权删除非自己发布的信息');
			$id = DB::delete('style','id='.$id);
			
			 $jf=intval($_G[setting][style_jf]);
			  if($jf>0)	{
					  insert_sign(array('desc'=>'删除搭配信息','type'=>'style','org_jf'=>$_G[member][jf],'jf'=>0-$jf,'aid'=>0));
					  update_member(array('jf'=>$_G[member][jf]-$jf),$_G[uid]);
			  }
			  
			msg('删除成功','success');			
	}
	
	function style_like(){
			global $_G;
			$type = 'style';
			$rs = D(array('table'=>'like','and'=>"uid=".$_G[uid] ." AND type = '".$type."'"),array('size'=>20,'url'=>'m=home&a=style_like'));
			$this->add($rs);
			$this->show();
	}
	
	
	function zj_list(){
			global $_G;
			
			$and = " uid = ".$_G[uid];
			$url = "m=home&a=zj_list";
			$size = 15;
			$rs = D(array('and'=>$and,'table'=>'zj','order'=>' `sort` DESC, id DESC'),array('size'=>$size,'url'=>$url));
			$this->add($rs);
			$this->show();
	}
	
		function zj_del(){
			global $_G;
			
			$id = intval($_GET[id]);			
			if(!$id)msg('抱歉,要删除的专辑id不能为空');	
			$and = ' AND id = '.$id;
			$goods = D(array('and'=>$and,'table'=>'zj'));
			if(!$goods[id]) msg('抱歉,未找到相关专辑');
			if($goods[uid]!=$_G[uid])msg('抱歉,您无权删除非自己发布的信息');
			$id = DB::delete('zj','id='.$id);			
			$jf = $_G['setting']['zj_like_jf'];
			

			if($jf>0 && $goods[id]>0) {
						$jf = 0-$jf;
						$add_jf = 	$_G['member']['jf']+$jf;
						update_member(array('jf'=>$_G[member][jf]+$jf),$_G[uid]);
						DB::delete('sign','aid='.$id);
			}
			  
			msg('删除成功','success');			
	}
	
	
	
	
	function zj_post(){
			global $_G;
			
			if($_G[member][groupid] == 3){
				 msg('抱歉,您当前是禁止用户,无法使用','error','?');
			}else if($_G[member][check] == 0){
				json('抱歉,您当前账号未审核无法使用','error','?');
			}
			if(!$_G[setting][style_status])msg('抱歉,系统未开放专辑投稿功能','error','?');
			
			
			if($_GET[onsubmit] && check()){
				$goods =get_filed('zj',$_GET[postdb],$_GET[id]);
				
				$goods['check'] = intval($_G[setting][zj_check]);
				$goods['sort'] = 0;
				$goods['keywords'] = ($goods['keywords']);
				$goods['content'] = ($goods['content']);
				$goods['title'] = ($goods['title']);
				
				
				if(!$goods['title']) msg('专辑标题不能为空');
				if(!$goods['picurl']) msg('专辑主图不能为空');
				if(!$goods['tag']) msg('专辑分类不能为空');
				if(!$goods['content']) msg('专辑内容描述不能为空');
				if(strpos($goods[picurl],'http:') === false) msg('专辑的主图格式不正确');
				$goods['picurl'] = preg_replace('/_(\d+)(.*?)$/','',$goods['picurl']);
				
				if(!array_key_exists($goods['tag'],$_G[setting][zj_tags])) msg('专辑的标签不存在');
				
				
				
				//单品
				  $goods[goods] = array();
				  foreach($_GET[dp_num_iid] as $k=>$v){
						
						  $arr = array();										
						  $arr[title] = ($_GET['dp_title'][$k]);						  
						  $arr[price] = sprintf("%.1f",$_GET['dp_price'][$k]);
						  $arr[num_iid] =get_goods_id($_GET['dp_num_iid'][$k]);
						  $arr[content] ='';
						  $arr[picurl] =$_GET['dp_picurl'][$k];						  
						  
						  if(!$arr[price] || !$arr[title] || !$arr[num_iid]) continue;
						  $goods[goods][] = $arr;
						  
				  }
				
				  $goods[length] = count($goods[goods]);
				  if($goods[length]>0) $goods[goods] = serialize($goods[goods]);
				  $goods['post'] = 1;
                  $goods['like'] = 0;
				
				 $url = '';
				  if($_GET['id']){
					  				
									$id = intval($_GET['id']);			
									$url .="&id=".$id;						
									DB::update('zj',$goods,"id=".$id);
									$msg = '修改成功';	
				  }else{
                     

					 $goods['dateline'] = TIMESTAMP;
					
					$goods['uid'] =$_G['uid'];
					$goods['username'] = $_G['username'];

					 $r=DB::insert('zj',$goods,true);
					 $msg = '发布成功';
					 
					 $jf=intval($_G[setting][zj_jf]);
					if($jf>0 && $r>0)	{
							$msg  .= ',恭喜您获得'.$jf.'积分';
							insert_sign(array('desc'=>'发布专辑信息','type'=>'zj','org_jf'=>$_G[member][jf],'jf'=>$jf,'aid'=>$r));
							update_member(array('jf'=>$_G[member][jf]+$jf),$_G[uid]);
					}
				  }
			  
				  msg($msg,'success','m='.__CLASS__.'&a='.__FUNCTION__.$url);
				
			}else if($_GET[id]){
				$id = intval($_GET[id]);
				$goods = D(array('table'=>'zj','and'=>' AND id = '.$id));
				if(!$goods[id]) msg('抱歉,未找到要编辑的专辑信息');
				if($goods[uid]!=$_G[uid])msg('抱歉,您无权编辑非自己发布的信息');
				if($goods[check]==1) msg('已审核的信息无法再次编辑');
				
			}
			
			$this->add(array('goods'=>$goods));
			$this->show();
	}
	
	function zj_like(){
			global $_G;
			$type = 'zj';
			$rs = D(array('table'=>'like','and'=>"uid=".$_G[uid] ." AND type = '".$type."'"),array('size'=>15,'url'=>'m=home&a=zj_like'));
			$this->add($rs);
			$this->show();
	}
	
	function comment_list(){
			global $_G;
			
			$and = '';
			$url = 'm=home&a=comment_list';
			if($_GET[type]){
				$type = trim($_GET[type]);
				if(array_key_exists($type,$_G[setting][comment_types])){
					$and .=" AND type = '$type'";
					$url.="&type=".$type;
				}
			}
			
			$rs = D(array('and'=>$and."  AND  `check` = 1   AND is_reply = 0 ",'order'=>' id DESC  ','table'=>'comment'),array('size'=>15,'url'=>$url));
			
				
			$this->add($rs);
			$this->show();
	}
	
	function comment_del(){
			global $_G;
			
			$id = intval($_GET[id]);			
			if(!$id)msg('抱歉,要删除的评论id不能为空');	
			$and = ' AND id = '.$id;
			$goods = D(array('and'=>$and,'table'=>'comment'));
			if(!$goods[id]) msg('抱歉,未找到相关评论信息');
			if($goods[uid]!=$_G[uid])msg('抱歉,您无权删除非自己发布的评论信息');
			$id = DB::delete('comment','id='.$id);			
			$jf = $goods['jf'];
			
			$msg = '';
			if($jf>0 && $goods[id]>0) {
						
						$jf = 0-$jf;
						$add_jf = 	$_G['member']['jf']+$jf;
						update_member(array('jf'=>$_G[member][jf]+$jf),$_G[uid]);
						$msg=",已扣除积分".$goods['jf'];
			}
			  
			msg('删除成功'.$msg,'success');			
	}
	
	function pay_setting(){
			global $_G;
			
			
			if($_GET[onsubmit] && check()){
					$url = URL."m=home&a=pay_setting";	
					$qq = implode(',',$_G['setting']['qq']);
					$arr =array();
					if(isset($_GET[postdb][order_number])){
							if($_G['member']['order_number'])msg('您当前已绑定了订单号,无法修改,如有疑问请咨询在线客服qq '.$qq);
						
							$number =trim($_GET[postdb][order_number]);	
							if(!is_numeric($number)) msg('订单号码只能为4位或16位纯数字');
							$len = dstrlen($number);
							if($len == 4){
								$arr[order_number] = ($number);
							}else if($len == 16){
								$number = substr($number,-4);
							}else{
								 msg('订单号码只能为4位或16位纯数字');
							}
							$arr[order_number] = $number;
							$count = getcount('member',"order_number='$number'");
							if($count>0) msg('订单号已被绑定,请更换新的淘宝账号');
							
							
					}
					if(isset($_GET[postdb][alipay])){
							$alipay =trim($_GET[postdb][alipay]);	
							if(!is_email($alipay) && !is_phone($alipay)) {
								msg('支付宝账号只能为邮箱或手机号码,请重新输入');						
							}							
							if($_G['member']['alipay'])msg('您当前已绑定了支付宝,无法修改,如有疑问请咨询在线客服qq '.$qq);
							$member = DB::fetch_first("SELECT * FROM ".DB::table('member')." WHERE alipay='$alipay'");
							if($member['uid']>0)msg('当前支付宝已绑定了账号'.$member['username']);							
							$arr[alipay] = $alipay;
					}					
					if(isset($_GET[postdb][alipay_name])){
						$arr[alipay_name] =trim($_GET[postdb][alipay_name]);
					}			
					if(count($arr) == 0) msg('您提交的数据为空');
					$arr = daddslashes($arr);
					update_member($arr);
					msg("修改成功",'success',$url);
					
					
			}
			$this->show();		
	}
	
	function order_list(){
				global $_G;
				$url = 'm=home&a=order_list';
				
				$order_number = $_G['member']['order_number'];
				$and = " order_number like  '%$order_number'";
				$status = -1;
				if(isset($_GET['status'])){
					$status = intval($_GET['status']);
					$and.=" AND status = ".$status;
					$url.="&status=".$status;
					
					
				}
				// 0 = 待结算	3=已认领
				if($status == 0 || $status == 3){
					$and .= " AND uid =".$_G['uid']; 	
				}
				if($order_number){
					$rs = D(array('table'=>'order_list','and'=>$and),array('size'=>15,'url'=>$url));
				}
				
				$this->add($rs);
				$this->show();		
	}
	
	function order_post(){
				global $_G;
				
				$this->show();		
	}
	
	function money_list(){
				global $_G;
				$url = 'm=home&a=money_list';
				$and = " AND uid =".$_G['uid']; 
				if(isset($_GET['status'])){
					$status = intval($_GET['status']);
					$and.=" AND status = ".$status;
					$url.="&status=".$status;
				}
				
				
				$rs = D(array('table'=>'money','and'=>$and),array('size'=>15,'url'=>$url));
				$this->add($rs);
				$this->show();		
	}
	
	//提现	
	function tixian(){
			global $_G;
			
			if($_G[member][groupid] == 3){
				 msg('抱歉,您当前是禁止用户,无法使用','error','?');
			}else if($_G[member][check] == 0){
				json('抱歉,您当前账号未审核无法使用','error','?');
			}

			if(!$_G['member']['alipay'] || !$_G['member']['alipay_name'])msg('您必须设置支付宝账号和姓名才能进行提现','error','m=home&a=pay_setting');
			
			if($_GET['onsubmit'] && check()){
						$money = fix($_GET['money'],2);
						if($money> $_G['member']['money']){
							msg('您提现的金额不能大于您账号的可用余额');
						}
						if($_G['setting']['tixian_min']>0 && $money<$_G['setting']['tixian_min'])msg('您提现的金额不能小于'.$_G['setting']['tixian_min'].'元');

						$arr  = array();
						$arr['uid'] = $_G['uid'];
						$arr['username'] = $_G['username'];
						
						$arr['status'] = 0	;	//	0申请中
						$arr['msg'] = '';
						$arr['dateline'] = TIMESTAMP;	
						$arr['updatetime'] = 0;	
						$arr['org_money'] =$_G['member']['money'];
						$arr['shouxufei'] = 0;
						if($_G['setting']['shouxufei']>0){
							$arr['shouxufei'] = $money *( $_G['setting']['shouxufei'] /100) ;	
						}

						$arr['money'] = $money;
						DB::insert('tixian',$arr);
						$update_money = $_G['member']['money']-$money;
						update_member(array('money'=>$update_money), $_G['uid']);
						msg('提现申请成功,我们会在3个工作日内处理,请耐心等待...','success');
				
			}
			
			
			$this->show();
	}
	
	
	//提现记录
	function tixian_list(){
				global $_G;
				$url = 'm=home&a=tixian_list';
				$and = " AND uid =".$_G['uid']; 
				if(isset($_GET['status'])){
					$status = intval($_GET['status']);
					$and.=" AND status = ".$status;
					$url.="&status=".$status;
				}
				
				
				$rs = D(array('table'=>'tixian','and'=>$and),array('size'=>15,'url'=>$url));
				$this->add($rs);
				$this->show();		
	}
	
	
	
}
?>