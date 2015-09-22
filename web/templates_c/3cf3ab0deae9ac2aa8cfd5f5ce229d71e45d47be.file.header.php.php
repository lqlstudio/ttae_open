<?php /* Smarty version Smarty-3.1.15, created on 2015-09-19 23:10:29
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\common\header.php" */ ?>
<?php /*%%SmartyHeaderCode:343155fd7ae570a4a6-70460049%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3cf3ab0deae9ac2aa8cfd5f5ce229d71e45d47be' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\common\\header.php',
      1 => 1441300519,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '343155fd7ae570a4a6-70460049',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'TAE' => 0,
    'CM' => 0,
    'CA' => 0,
    '_G' => 0,
    'query_text' => 0,
    'global_str' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55fd7ae579a7c4_03586882',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fd7ae579a7c4_03586882')) {function content_55fd7ae579a7c4_03586882($_smarty_tpl) {?><!doctype html>
<html  class="taeapp <?php if ($_smarty_tpl->tpl_vars['TAE']->value==1) {?>tae<?php } else { ?>web<?php }?> _<?php echo $_smarty_tpl->tpl_vars['CM']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['CA']->value;?>
">
<head>
<meta charset="<?php echo $_smarty_tpl->tpl_vars['_G']->value['charset'];?>
">
<title><?php if ($_smarty_tpl->tpl_vars['_G']->value['title']) {?><?php echo $_smarty_tpl->tpl_vars['_G']->value['title'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['title'];?>
<?php }?></title>
<link href="/favicon.ico" type="image/x-icon" rel=icon />
<meta name="author" content="uz-system.com 7x24 service d_cms@qq.om"/>
<meta name="system_info" content="by uz-system version <?php echo $_smarty_tpl->tpl_vars['_G']->value['version'];?>
"/>
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['_G']->value['keywords'];?>
"/>
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['_G']->value['description'];?>
"/>
<?php if (!$_smarty_tpl->tpl_vars['_G']->value['cpmsg']) {?>
<meta name="tk" content="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['pid'];?>
|<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['taodianjing_url'];?>
|1"/>
<meta name="get" content="<?php echo $_smarty_tpl->tpl_vars['query_text']->value;?>
"/>
<meta name="set" content="<?php echo $_smarty_tpl->tpl_vars['global_str']->value;?>
"/>
<script type="text/javascript" src="/assets/global/js/jquery-1.8.3.min.js"></script> 
<!-- <script type="text/javascript" src="/assets/global/js/jquery.easing.min.js"></script>  -->
<script type="text/javascript" src="http://a.alimama.cn/tkapi.js"></script>
<script type="text/javascript" src="/assets/global/js/global.js"></script>
<?php }?>
<link rel="stylesheet" type="text/css" href="/assets/global/css/global.css" media="all" />
</head>
<body>
<div class="uz_system"></div><?php }} ?>
