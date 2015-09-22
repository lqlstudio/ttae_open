<?php /* Smarty version Smarty-3.1.15, created on 2015-09-20 23:52:07
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\mobile\footer.php" */ ?>
<?php /*%%SmartyHeaderCode:1871855fed62778d702-32773871%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a3ba96bb8c845c2fa315c5425f8c714aa3c4fd7' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\mobile\\footer.php',
      1 => 1441303524,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1871855fed62778d702-32773871',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_G' => 0,
    'URL' => 0,
    'JSDIR' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55fed6277f6d73_15067469',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fed6277f6d73_15067469')) {function content_55fed6277f6d73_15067469($_smarty_tpl) {?><div style="width: 100%; height: 60px; margin: 0 auto"></div>
<div class="i2_botd cl">
    <ul class="uline">
      <li><a href="<?php echo $_smarty_tpl->tpl_vars['_G']->value['siteurl'];?>
">首页</a></li>
      <li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
mobile=no">电脑版</a></li>
      <li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
mobile=yes" style="color: #666">手机版</a></li>
    </ul>
</div>
<?php if (!$_smarty_tpl->tpl_vars['_G']->value['uid']) {?>
<div class="botmlogind">
    <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=member&a=login" class="a1">登录</a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=member&a=reg" class="a2">注册</a>
</div>
<?php }?>
<div class="bottom">
copyright @2014 <?php echo $_smarty_tpl->tpl_vars['_G']->value['host'];?>

</div>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['JSDIR']->value;?>
/main.js"></script>
<?php echo $_smarty_tpl->getSubTemplate ("../common_mobile/footer.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
