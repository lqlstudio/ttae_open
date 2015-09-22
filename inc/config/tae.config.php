<?php


//短信
$_config['sms']['signature_id'] = 0;
$_config['sms']['template'] = array('code'=>'0','change_password'=>'0');


//百川 缓存
$_config['cache_config'] =  array(
			'host'  => '',			//主机地址
			'port'  => '11211',		//端口
			'username' => '',		//用户名
			'password' => '',      	//密码
);


//数据库配置

$_config['db']['dbhost'] = '';			//主机地址
$_config['db']['dbport'] = '3306';		//端口
$_config['db']['dbuser'] = '';			//用户名
$_config['db']['dbpw'] = '';			//密码
$_config['db']['dbname'] = 'app_db';	//数据库名称

$_config['db']['tablepre'] = 'ttae_';
$_config['db']['dbcharset'] = 'utf8';


?>