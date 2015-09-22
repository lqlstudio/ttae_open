<?php /* Smarty version Smarty-3.1.15, created on 2015-09-20 23:52:06
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\mobile\index\main.php" */ ?>
<?php /*%%SmartyHeaderCode:2115555fed626d1d6c6-31895095%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40150df407727666d353b6e47fd4f71f06e4d7d6' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\mobile\\index\\main.php',
      1 => 1441302417,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2115555fed626d1d6c6-31895095',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_G' => 0,
    'goods' => 0,
    'v' => 0,
    'showpage' => 0,
    'JSDIR' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55fed62705be43_27639314',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fed62705be43_27639314')) {function content_55fed62705be43_27639314($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php if ($_smarty_tpl->tpl_vars['_G']->value['fid']) {?>
<div class="indexmenu2"><div class="indexmenu2d"><div class="cag_headt"><a href="<?php echo $_smarty_tpl->tpl_vars['_G']->value['siteurl'];?>
">&lt;</a><span> <?php echo $_smarty_tpl->tpl_vars['_G']->value['channel']['name'];?>
</span></div></div>
</div>
<?php }?>
<section class="deals" id="stage">
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
<div class="item_list">
    <a target="_blank" class="imgd" href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
">
        <img width="140" src="<?php echo $_smarty_tpl->tpl_vars['v']->value['picurl'];?>
_150x150.jpg">
        <?php if ($_smarty_tpl->tpl_vars['v']->value['new']==1) {?><i class="mb_ico goodsdpi gisnew1"></i><?php }?>
        <span class="goodsisover1"></span>
    </a>
    <h2><span><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></span></h2>
    <aside>￥<span><?php echo $_smarty_tpl->tpl_vars['v']->value['yh_price'];?>
</span></aside>
    <p><del>￥<?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
</del><cite><?php echo $_smarty_tpl->tpl_vars['v']->value['zk'];?>
折</cite>
    <b class="b1">已售<?php echo $_smarty_tpl->tpl_vars['v']->value['sum'];?>
</b></p>
</div>
<?php } ?>
</section>

<div class=" redpage cl">
  <?php echo $_smarty_tpl->tpl_vars['showpage']->value;?>

</div>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['JSDIR']->value;?>
/slider.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['JSDIR']->value;?>
/sliderrun.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['JSDIR']->value;?>
/hp.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['JSDIR']->value;?>
/index.js"></script>
<?php echo $_smarty_tpl->getSubTemplate ("../footer.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<?php }} ?>
