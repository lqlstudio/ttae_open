<?php /* Smarty version Smarty-3.1.15, created on 2015-09-20 22:28:20
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\ttae\home\home_footer.php" */ ?>
<?php /*%%SmartyHeaderCode:2786555fd8f5b29bb24-33966082%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08c5d71e62e5c207da390e5aaba141514565521b' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\ttae\\home\\home_footer.php',
      1 => 1442759292,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2786555fd8f5b29bb24-33966082',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55fd8f5b2c8c51_38584197',
  'variables' => 
  array (
    'history' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fd8f5b2c8c51_38584197')) {function content_55fd8f5b2c8c51_38584197($_smarty_tpl) {?>



</div>



</div>


<div class="wp cl">
    <?php if ($_smarty_tpl->tpl_vars['history']->value) {?>
<div class="ppt_goodscontent">
     <a class="left_btn"></a>
     <div class="ppt_box">
             <div class="ppt_box_m">
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['history']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>     
             <div class="ppt_goodsd">
                 <a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
"  target="_blank"><img width="220" height="220" src="<?php echo $_smarty_tpl->tpl_vars['v']->value['picurl'];?>
_220x220.jpg"></a>
                 <i class="newindexicon ppt_dbico"></i>
                 <i class="newindexicon ppt_dbicoh"></i>
                 <a class="ppt_gtit" href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a>
                 <div class="ppt_ginfo">
                    <ul>
                        <li><b>￥</b><span><?php echo $_smarty_tpl->tpl_vars['v']->value['yh_price'];?>
</span></li>
                        <li><del>￥<?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
</del></li>
                    </ul>
                 </div>
                 <a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
" target="_blank" class="ppticons pptgobuy ppt2btn"></a>
             </div>
          <?php } ?>        
          </div> 
  </div>
   <a class="right_btn"></a>
</div>
     <?php }?>
</div>



<?php echo $_smarty_tpl->getSubTemplate ("../footer.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
          

    

<?php }} ?>
