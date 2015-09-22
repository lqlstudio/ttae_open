<?php /* Smarty version Smarty-3.1.15, created on 2015-09-19 23:58:25
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\ttae\tags.php" */ ?>
<?php /*%%SmartyHeaderCode:3088755fd862107ab83-67057533%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b39e4be72a1a4665120c4a475e1e96cb90dbb245' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\ttae\\tags.php',
      1 => 1441274034,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3088755fd862107ab83-67057533',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tag_kw' => 0,
    '_G' => 0,
    'URL' => 0,
    'v' => 0,
    'tag_shop' => 0,
    'tag_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55fd8621146476_84142351',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fd8621146476_84142351')) {function content_55fd8621146476_84142351($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['tag_kw']->value) {?>
<div class="area wp" style="margin-top:15px;">
<div class="footer cl">
    <div class="tags">
     <li><a href="<?php echo $_smarty_tpl->tpl_vars['_G']->value['siteurl'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['title'];?>
</a></li>

	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tag_kw']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
      <li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
tag/<?php echo $_smarty_tpl->tpl_vars['v']->value['tagid'];?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a></li>
	<?php } ?>
    </div>
  </div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['tag_shop']->value) {?>
<div class="area wp">
<div class="footer cl">
    <div class="tags">
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_G']->value['siteurl'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['title'];?>
</a></li>
	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tag_shop']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
      <li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
shop/<?php echo $_smarty_tpl->tpl_vars['v']->value['seller_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
"  target="_blank" ><?php echo $_smarty_tpl->tpl_vars['v']->value['shop_title'];?>
</a></li>
	<?php } ?>
    </div>
  </div>
</div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['tag_link']->value) {?>
<div class="area wp">
<div class="footer cl">
    <div class="tags">
	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tag_link']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
      <li><a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
"  target="_blank" ><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a></li>
	<?php } ?>
    </div>
  </div>
</div>
<?php }?><?php }} ?>
