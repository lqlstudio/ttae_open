<?php /* Smarty version Smarty-3.1.15, created on 2015-09-20 22:41:52
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\ttae\home\goods.php" */ ?>
<?php /*%%SmartyHeaderCode:1236855fec5b0452389-72801082%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cfc39657ea0a0a06724b4fd722dd20b752f2c586' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\ttae\\home\\goods.php',
      1 => 1427718431,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1236855fec5b0452389-72801082',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CSSDIR' => 0,
    'goods' => 0,
    'v' => 0,
    'URL' => 0,
    'showpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55fec5b071e048_02045940',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fec5b071e048_02045940')) {function content_55fec5b071e048_02045940($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['CSSDIR']->value;?>
/home_goods_list.css" media="all" />



<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['CSSDIR']->value;?>
/apply.css" media="all" />

<?php echo $_smarty_tpl->getSubTemplate ("../apply/hd.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>




<div class="index2_box cl" >



 <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['goods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>

<div class="by_end cl">

	<div class="nav_p_top cl">

              <span>报名时间：<?php echo $_smarty_tpl->tpl_vars['v']->value['posttime'];?>
,上次操作时间:<?php echo $_smarty_tpl->tpl_vars['v']->value['dateline'];?>
&nbsp;&nbsp;</span>

              <!--<span class="hong">限时抢购</span>-->

              <em>审核结果：<i><?php echo $_smarty_tpl->tpl_vars['v']->value['status_text'];?>
</i>

              

               <?php if ($_smarty_tpl->tpl_vars['v']->value['check']==0||$_smarty_tpl->tpl_vars['v']->value['check']==2) {?>

             	<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=home&a=post&aid=<?php echo $_smarty_tpl->tpl_vars['v']->value['aid'];?>
">编辑</a>

                <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=home&a=del&aid=<?php echo $_smarty_tpl->tpl_vars['v']->value['aid'];?>
" class="_ajax_dialog">删除</a>

             	<?php }?>

              

              </em>

              

              

    </div>

	<div class="nav_pq cl">

		<div class="p_img">		

		<a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['org_url'];?>
"><img width="90" height="90" src="<?php echo $_smarty_tpl->tpl_vars['v']->value['picurl'];?>
_100x100.jpg"></a>

		</div>				  

		<ul class="p_text _hover_img">

			<li class="">

				<a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['org_url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a>

                <a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['picurl'];?>
" target="_blank"><img  src="<?php echo $_smarty_tpl->tpl_vars['v']->value['picurl'];?>
"></a>

			</li>

			<li class="_hover_img">

				<span>所属分类：<?php echo $_smarty_tpl->tpl_vars['v']->value['channel']['name'];?>
</span>

				<span>原价：<b><?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
</b>元</span>

				<span>活动价：<b><?php echo $_smarty_tpl->tpl_vars['v']->value['yh_price'];?>
</b>元</span>

				<span>是否包邮：<?php if ($_smarty_tpl->tpl_vars['v']->value['baoyou']==1) {?>是<?php } else { ?>否<?php }?></span>

			

                

			</li>

			<li>  

				<span>商品数量：<?php echo $_smarty_tpl->tpl_vars['v']->value['num'];?>
</span>

				<span>最高佣金：<?php echo $_smarty_tpl->tpl_vars['v']->value['commission'];?>
</span>

				<span>上线时间：<?php echo $_smarty_tpl->tpl_vars['v']->value['start_time'];?>
-<?php echo $_smarty_tpl->tpl_vars['v']->value['end_time'];?>
</span>

			</li>

			

		</ul>





    </div>

    <div class="pdly cl"><span>小编留言:</span><?php echo $_smarty_tpl->tpl_vars['v']->value['return_msg'];?>
</div>

    <div class="clear"></div>



</div>

<?php } ?>

</div>



<!--分页会因为上面的浮动而有点走位,关掉div的结束,重开始-->

<div class="cl redpage"><?php echo $_smarty_tpl->tpl_vars['showpage']->value;?>
</div>





<?php echo $_smarty_tpl->getSubTemplate ("../footer.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
