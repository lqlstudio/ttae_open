<?php /* Smarty version Smarty-3.1.15, created on 2015-09-19 23:10:28
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\admin\common_admin\cpmsg.php" */ ?>
<?php /*%%SmartyHeaderCode:2675355fd7ae4ee2826-55501085%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f15c9d6e10731e537f6b869451e421d4d118f5d' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\admin\\common_admin\\cpmsg.php',
      1 => 1440510692,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2675355fd7ae4ee2826-55501085',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'classname' => 0,
    'message' => 0,
    'url' => 0,
    'title' => 0,
    'ext_message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55fd7ae5155d60_91834093',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fd7ae5155d60_91834093')) {function content_55fd7ae5155d60_91834093($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('./left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="cl cpmsg">
  <div class="infobox cl">
    <h4 class="<?php echo $_smarty_tpl->tpl_vars['classname']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</h4>
    <p class="marginbot"><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" class="lightlink"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a></p>
    <?php echo $_smarty_tpl->tpl_vars['ext_message']->value;?>

  </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('./right_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
