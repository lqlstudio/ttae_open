<?php /* Smarty version Smarty-3.1.15, created on 2015-09-20 00:40:25
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\ttae\index\friend_link.php" */ ?>
<?php /*%%SmartyHeaderCode:1668455fd8ff96c1503-17385947%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b658f07a47f01e5a4efda98ea26217fc41cc70b0' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\ttae\\index\\friend_link.php',
      1 => 1413218244,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1668455fd8ff96c1503-17385947',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_G' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55fd8ff98f0be9_77893238',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fd8ff98f0be9_77893238')) {function content_55fd8ff98f0be9_77893238($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("../header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<div class="cl friend_link_more" >
<div class="h1">友情链接:</div>
<!--<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['friend_link']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>-->
                 	<!--<?php if ($_smarty_tpl->tpl_vars['v']->value['hide']==0) {?>-->
        			<a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a>
                    <!--<?php }?>-->
 <!--<?php } ?>-->  
</div>
<?php echo $_smarty_tpl->getSubTemplate ("../footer.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<?php }} ?>
