<?php /* Smarty version Smarty-3.1.15, created on 2015-09-20 17:44:51
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\ttae\img\right_bar.php" */ ?>
<?php /*%%SmartyHeaderCode:1313955fe8013217fb0-57699060%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3165e1ac083e0b1055a9affecdef1fb2dc8e392c' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\ttae\\img\\right_bar.php',
      1 => 1441610079,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1313955fe8013217fb0-57699060',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'URL' => 0,
    'new' => 0,
    'v' => 0,
    'tags' => 0,
    'k' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55fe801328e020_04370759',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fe801328e020_04370759')) {function content_55fe801328e020_04370759($_smarty_tpl) {?>  <div class="side">
    
    <div class="mod wanke-digest fixed-mod pad cl">
      <div class="hd cl">
        <h3><span class="ir">最新导购</span></h3>
        <a class="more dib" href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=img&a=list" title="最新导购" >更多</a> </div>
      <ul class="wl">
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['new']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
        <div class="fl">
          <li class="wd-head pic"> <a class="cont" href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
"> <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['picurl'];?>
_150x150.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
"> </a></li>
          <p class="wd-hl al"><a class="wd-link" href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></p>
        </div>
<?php } ?>
        
        <div class="clear8"></div>
      </ul>
    </div>
    
    <div class="mod ytaghot fixed-mod cl">
      <div class="hd cl">
        <h3><span class="ir">热门搜索</span></h3>
        </div>
      <div class="bd">
        <dl>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
           <dd><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=img&a=list&tag=<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</a></dd>
<?php } ?>

        </dl>
        <div class="clear8"></div>
      </div>
    </div>
  </div><?php }} ?>
