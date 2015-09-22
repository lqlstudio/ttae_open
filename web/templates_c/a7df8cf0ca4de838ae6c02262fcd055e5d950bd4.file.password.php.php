<?php /* Smarty version Smarty-3.1.15, created on 2015-09-20 00:38:42
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\ttae\home\password.php" */ ?>
<?php /*%%SmartyHeaderCode:11255fd8f92e3cfb2-15242181%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7df8cf0ca4de838ae6c02262fcd055e5d950bd4' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\ttae\\home\\password.php',
      1 => 1414584760,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11255fd8f92e3cfb2-15242181',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CURMODULE' => 0,
    'CURACTION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55fd8f9309bd18_28841319',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fd8f9309bd18_28841319')) {function content_55fd8f9309bd18_28841319($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("./home_header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<ul class="cl">
  <form method="post">
    <li class="uc_zlli2"><span>提示:您必须输入原密码,然后输入两次新密码,才能进行修改</span></li>
    <li class="uc_zlli1">
      <label>原密码：</label>
      <input class="uinfo uc_zlli1text text check_text" name="password1" type="text" value="" data-msg="原密码不能为空">
    </li>
    <li class="uc_zlli1">
      <label>新  密  码：</label>
      <input class="uinfo uc_zlli1text text check_text" name="password2" type="text" value=""  data-msg="新密码不能为空">
    </li>
    </li>
    <li class="uc_zlli1">
      <label>确认新密码：</label>
      <input class="uinfo uc_zlli1text text check_text" name="password3"  type="text" value=""  data-msg="确认新密码不能为空">
      <h2></h2>
    </li>
    <li class="uc_zlli4">
      <label></label>
      <input type="submit" class="seting_onsubmit u_submit check_form"   name="onsubmit"value=" 保 存" />
    </li>
    <input type="hidden" name="m" value="<?php echo $_smarty_tpl->tpl_vars['CURMODULE']->value;?>
" />
    <input type="hidden" name="a" value="<?php echo $_smarty_tpl->tpl_vars['CURACTION']->value;?>
" />
  </form>
</ul>
<?php echo $_smarty_tpl->getSubTemplate ("./home_footer.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
