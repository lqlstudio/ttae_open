<?php /* Smarty version Smarty-3.1.15, created on 2015-09-20 20:13:17
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\admin\login\main.php" */ ?>
<?php /*%%SmartyHeaderCode:337355fea2dd066eb3-78012688%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71dd9715f3cc064299242c4f9b8618717e89e2b4' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\admin\\login\\main.php',
      1 => 1441477806,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '337355fea2dd066eb3-78012688',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'TPLDIR' => 0,
    'CURMODULE' => 0,
    'CURACTION' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55fea2dd1f2261_19951495',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fea2dd1f2261_19951495')) {function content_55fea2dd1f2261_19951495($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../common/header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['TPLDIR']->value;?>
/login/login.css" media="all" />


<a href="#" class="close_pic"></a>
<div class="login_box">
	<div class="logo"><a href="/">&nbsp;</a></div>
    <form enctype="multipart/form-data" action="" method="post"  name="login">
    <div class="login_form">
    	<div class="user">
        	<input class="text_value" value="" name="username" type="text" placeholder="用户名">
            <input class="text_value" value="" name="password" type="password"  placeholder="密码">
        </div>
        <input type="hidden" name="login" value="1" />
        <input type="submit" value="登录" name="login_submit"  class="button"/>
    </div>
<input type="hidden" name="m" value="<?php echo $_smarty_tpl->tpl_vars['CURMODULE']->value;?>
" />
<input type="hidden" name="a" value="<?php echo $_smarty_tpl->tpl_vars['CURACTION']->value;?>
" />
    </form>
    <div class="tip"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
    <div class="foot">
	Copyright &copy; 2014.Company <a href="http://www.hbkfz.cn" target="_blank" >湖北开发者网络科技有限公司</a> All rights reserved 
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("../../common/footer.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
