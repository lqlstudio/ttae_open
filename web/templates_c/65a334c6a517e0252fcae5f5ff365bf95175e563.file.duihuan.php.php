<?php /* Smarty version Smarty-3.1.15, created on 2015-09-20 00:38:46
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\ttae\home\duihuan.php" */ ?>
<?php /*%%SmartyHeaderCode:3274555fd8f9679d080-60044193%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65a334c6a517e0252fcae5f5ff365bf95175e563' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\ttae\\home\\duihuan.php',
      1 => 1441289793,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3274555fd8f9679d080-60044193',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'goods' => 0,
    'k' => 0,
    'v' => 0,
    'showpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55fd8f96a5adf5_88070785',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fd8f96a5adf5_88070785')) {function content_55fd8f96a5adf5_88070785($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("./home_header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>






 <div class="uc_scored1">

              <span style="float: left">我的兑换记录</span>

              <span style="float: right; font-size: 12px;"></span>

</div>





<ul class="uc_scoredtab" style="background-color: rgb(245, 245, 245);">

            <li class="uc_scoreli2" style="width:400px;"><b>标题</b></li>

            <li class="uc_scoreli4" style="width:80px"><b>总份数</b></li>

            <li class="uc_scoreli4" style="width:80px"><b>剩余</b></li>

            <li class="uc_scoreli2"  style="width:100px"><b>状态</b></li>            



</ul>



 <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['goods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>

<ul class="uc_scoredtab" <?php if ($_smarty_tpl->tpl_vars['k']->value%2==1) {?>style="background-color: rgb(245, 245, 245);"<?php }?>>

            <li class="uc_scoreli2 _hover_img"  style="width:400px;"><a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['id_url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a>

            <a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['picurl'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['picurl'];?>
"  /></a>

            </li>

            <li class="uc_scoreli4"  style="width:80px"><?php echo $_smarty_tpl->tpl_vars['v']->value['sum'];?>
</li>

             <li class="uc_scoreli4"  style="width:80px"><i style="color: #e32014"><?php echo $_smarty_tpl->tpl_vars['v']->value['num'];?>
</i></li>

             <li class="uc_scoreli2"  style="width:100px"><?php echo $_smarty_tpl->tpl_vars['v']->value['status_text'];?>
</li>

            <li class="uc_scoreli3" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['desc'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['desc'];?>
</li>

 </ul>

<?php } ?>



</div></div>

<!--分页会因为上面的浮动而有点走位,关掉div的结束,重开始-->

<div class="cl redpage"><?php echo $_smarty_tpl->tpl_vars['showpage']->value;?>
</div>

<div><div>



<?php echo $_smarty_tpl->getSubTemplate ("./home_footer.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
