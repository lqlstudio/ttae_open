<?php /* Smarty version Smarty-3.1.15, created on 2015-09-20 23:52:07
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\common_mobile\header.php" */ ?>
<?php /*%%SmartyHeaderCode:239355fed62757e4a6-36047264%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c2f6aa30ed04aaf0fbca02c92956f0c87ee7adb' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\common_mobile\\header.php',
      1 => 1441302004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '239355fed62757e4a6-36047264',
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
  'unifunc' => 'content_55fed6275ff251_03569928',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fed6275ff251_03569928')) {function content_55fed6275ff251_03569928($_smarty_tpl) {?><!DOCTYPE html>
<html  class="taeapp <?php if ($_smarty_tpl->tpl_vars['TAE']->value==1) {?>tae<?php } else { ?>web<?php }?> _<?php echo $_smarty_tpl->tpl_vars['CM']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['CA']->value;?>
">
<head>
<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta name="format-detection" content="telephone=no">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php if ($_smarty_tpl->tpl_vars['_G']->value['title']) {?><?php echo $_smarty_tpl->tpl_vars['_G']->value['title'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['title'];?>
<?php }?></title>
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
<?php }?>
<link rel="stylesheet" type="text/css" href="/assets/global/css/mobile_global.css" media="all">
</head>
<body>
<div class="uz_system"></div><?php }} ?>
