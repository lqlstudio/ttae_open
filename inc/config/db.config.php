<?php
if(!defined('IN_TTAE')) exit('Access Denied'); 
define('TTAE_VERSION','4.1');
define('TTAE_UPDATE_TIME','20150920');
define('SYSTEM_TYPE',3);
//define('DEBUG', true);


if(function_exists('error_reporting')) error_reporting(E_ERROR | E_PARSE | E_CORE_ERROR | E_COMPILE_ERROR);//E_ALL
$_confog = array('cache_list'=>array(),'db'=>array(),'cache_config'=>'','sms'=>array());
$_config['cache_list'] = array('setting','all_channel','channels','friend_link','pics_type','pics','ad','goods_cate','table','group','article_cate','duihuan_cate');
$_config['cache_type']='auto';	// auto || memcache || baichuan || file ||  aliyun_ocs



 
$_config['authkey'] = 'a15e8t1z3h6';
$_config['db']['dbhost'] = 'localhost';
$_config['db']['dbport'] = '3306';
$_config['db']['dbuser'] = 'admin';
$_config['db']['dbpw'] = '123456';
$_config['db']['dbcharset'] = 'utf8';
$_config['db']['dbname'] = 'ttae';
$_config['db']['tablepre'] = 'ttae_';


?>