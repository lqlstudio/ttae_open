<?php /* Smarty version Smarty-3.1.15, created on 2015-09-20 22:46:17
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\common\showmessage.php" */ ?>
<?php /*%%SmartyHeaderCode:2856655fec6b97d0eb5-77398597%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e83ee7f6f8774e294759d5b53adab7c6629284b' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\common\\showmessage.php',
      1 => 1441719541,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2856655fec6b97d0eb5-77398597',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'TPLNAME' => 0,
    'alerttype' => 0,
    'message' => 0,
    'url' => 0,
    '_G' => 0,
    'ext_msg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55fec6b99c28a4_59829230',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fec6b99c28a4_59829230')) {function content_55fec6b99c28a4_59829230($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../".((string)$_smarty_tpl->tpl_vars['TPLNAME']->value)."/header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="cl showmessage">
  <div class="nfl">
    <div class="f_c altw">
      <div class="<?php echo $_smarty_tpl->tpl_vars['alerttype']->value;?>
">
        <p><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
        <p class="alert_btnleft"><p class="alert_btnleft">
        <?php if ($_smarty_tpl->tpl_vars['url']->value) {?>
         <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">返回上一页</a>      
        <?php } else { ?>
         <a href="<?php echo $_smarty_tpl->tpl_vars['_G']->value['siteurl'];?>
">返回首页</a>
        <?php }?>
        </p>
	       <?php if ($_smarty_tpl->tpl_vars['ext_msg']->value) {?><?php echo $_smarty_tpl->tpl_vars['ext_msg']->value;?>
<?php }?>
           </p>
      </div>
    </div>
  </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("../".((string)$_smarty_tpl->tpl_vars['TPLNAME']->value)."/footer.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
