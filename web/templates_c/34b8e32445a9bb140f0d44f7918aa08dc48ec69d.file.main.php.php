<?php /* Smarty version Smarty-3.1.15, created on 2015-09-21 00:31:13
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\ttae\article\main.php" */ ?>
<?php /*%%SmartyHeaderCode:1778955fedf516f7660-83050522%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34b8e32445a9bb140f0d44f7918aa08dc48ec69d' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\ttae\\article\\main.php',
      1 => 1405864995,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1778955fedf516f7660-83050522',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CSS' => 0,
    'article_list' => 0,
    'v' => 0,
    's' => 0,
    'article' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55fedf518f09a9_60141187',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fedf518f09a9_60141187')) {function content_55fedf518f09a9_60141187($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->tpl_vars['CSS']->value;?>



<div class="about">  
<div class="xf-layout"> 
    <div class="xf-sub">
    	<div class="xf-box">
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
          <h3><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</h3>
          <ul class="art-list">
          <?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['v']->value['goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['s']->value['url'];?>
" ><?php echo $_smarty_tpl->tpl_vars['s']->value['title'];?>
</a></li>
          <?php } ?>
          </ul>
         <?php } ?>

        </div>
    </div>
    <div class="xf-main">
       <div class="xf-box">
          <div class="xf-article">
              <div class="xf-article-header">
                  <h1><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h1>
              </div>
              <div class="xf-article-cnt">
                  <?php echo $_smarty_tpl->tpl_vars['article']->value['message'];?>

          </div>  
       </div>
    </div>
</div>
</div>



<?php echo $_smarty_tpl->getSubTemplate ("../footer.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
