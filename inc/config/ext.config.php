<?php

$ext = array();
$ext['comment_types']	= array();
$ext['shiyong_type']	= array(); 
$ext['jf_type'] 		= array('system'=>'系统奖励','sign'=>'签到积分','yaoqing'=>'邀请任务','share'=>'内容分享');						
$ext['duihuan_status']	= array('待审核','已拒绝','已通过待兑换','已兑换');
$ext['favorite_types']	= array();
$ext['like_types']		= array();
$ext['share_types']		= array('goods'=>'商品');
$ext['history_views'] 	= array('goods');
$ext['order_status'] 	= array(0=>'待结算',1=>'待认领',2=>'已失效',3=>'已认领');
$ext['money_status']  	= array();
$ext['tixian_status'] 	= array();
$ext['share_type_callback']= array('mshare'=>'一键分享','qzone'=>'QQ空间','tsina'=>'新浪微博','renren'=>'人人网','tqq'=>'',
								'kaixin001'=>'开心网','douban'=>'豆瓣网','sqq'=>'QQ好友','weixin'=>'微信');
$ext['get_tag'] = true;
$ext['avatar_type'] = 2;	//用户头像
$ext['favorite_jf'] = 1;	//收藏增加积分
$ext['like_jf'] = 1;		//喜欢商品增加积分
?>