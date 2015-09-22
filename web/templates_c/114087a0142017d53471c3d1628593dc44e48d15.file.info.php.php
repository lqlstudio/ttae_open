<?php /* Smarty version Smarty-3.1.15, created on 2015-09-21 01:26:36
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\ttae\apply\info.php" */ ?>
<?php /*%%SmartyHeaderCode:569255fec5c693e5e7-93236927%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '114087a0142017d53471c3d1628593dc44e48d15' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\ttae\\apply\\info.php',
      1 => 1442769994,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '569255fec5c693e5e7-93236927',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55fec5c6c04f27_79835650',
  'variables' => 
  array (
    'CSSDIR' => 0,
    '_GET' => 0,
    '_G' => 0,
    'URL' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fec5c6c04f27_79835650')) {function content_55fec5c6c04f27_79835650($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['CSSDIR']->value;?>
/apply.css" media="all" />

<div style="background:#F2F2F2" class="cl">



<?php echo $_smarty_tpl->getSubTemplate ("./hd.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>








<?php if (!$_smarty_tpl->tpl_vars['_GET']->value['t']) {?>
<div class="cl _auto_ad" data-picurl="<?php echo $_smarty_tpl->tpl_vars['_G']->value['ad']['k9']['picurl'];?>
"></div>
<?php }?>

    

<div class="nav_3 w1000 cl">

<?php if (!$_smarty_tpl->tpl_vars['_GET']->value['t']) {?>


    <div class="pro_li">

		<div class="biaoti">9块9包邮劲爆秒杀</div>

		<div class="main">价格必须9.9元以下并包邮,少数偏远地区可不包邮商品市场价值在20元以上。集市店信誉3钻以上,天猫店不限,商品必须有20条以上真实好评、无较差评价,月销交易成功量需为50件以上, </div>

		<div class="botom">

				<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=apply">活动报名</a>

				</div>

   </div>

	<div class="pro_li marginleft">

    <div class="biaoti">19块9包邮</div>

		<div class="main">价格必须19.9元以下并包邮,少数偏远地区可不包邮商品市场价值在30元以上。集市店信誉1钻以上,天猫店不限,商品必须20条以上真实好评、无较差评价, 月销交易成功量需为50件以上, </div>

        <div class="botom">

				<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=apply">活动报名</a>

		</div>

    </div>

    <div class="pro_li marginleft">

        <div class="biaoti">品牌店铺</div>

        <div class="main">

                 品牌秒杀是针对知名品牌商，推出的全方位多角度的推广方案。<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['title'];?>
会根据品牌制定符合品牌定位的推广方案，最大限度的将品牌价值传递给网站用户。 报名前联系客服

		</div>

		<div class="botom"><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=apply">活动报名</a></div>

    </div>    



<?php } elseif ($_smarty_tpl->tpl_vars['_GET']->value['t']=='yq') {?>

		<?php echo $_smarty_tpl->tpl_vars['_G']->value['ad']['k5']['show_html'];?>


<?php } elseif ($_smarty_tpl->tpl_vars['_GET']->value['t']=='sh') {?>

		<?php echo $_smarty_tpl->tpl_vars['_G']->value['ad']['k6']['show_html'];?>


<?php } elseif ($_smarty_tpl->tpl_vars['_GET']->value['t']=='hz') {?>

		<?php echo $_smarty_tpl->tpl_vars['_G']->value['ad']['k7']['show_html'];?>


<?php }?>

 <div class="clear"></div>

<div class="cl kefuqq">
<a >报名咨询:</a>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['setting']['qq']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
<a href="" data-qq="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" class="_qq"></a>
<?php } ?>

</div>

</div>



<?php echo $_smarty_tpl->getSubTemplate ("../footer.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
