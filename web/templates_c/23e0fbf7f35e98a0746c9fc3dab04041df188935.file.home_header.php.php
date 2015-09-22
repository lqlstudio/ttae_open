<?php /* Smarty version Smarty-3.1.15, created on 2015-09-20 22:09:20
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\ttae\home\home_header.php" */ ?>
<?php /*%%SmartyHeaderCode:1923255fd8f5adace40-36448573%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23e0fbf7f35e98a0746c9fc3dab04041df188935' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\ttae\\home\\home_header.php',
      1 => 1442758158,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1923255fd8f5adace40-36448573',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55fd8f5af0dcd8_11069837',
  'variables' => 
  array (
    'CSSDIR' => 0,
    'CLASS' => 0,
    '_G' => 0,
    'URL' => 0,
    'CURACTION' => 0,
    'today' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fd8f5af0dcd8_11069837')) {function content_55fd8f5af0dcd8_11069837($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['CSSDIR']->value;?>
/home.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['CSSDIR']->value;?>
/brandgroup.css" media="all" />

<div class="hpz_usercenter cl <?php echo $_smarty_tpl->tpl_vars['CLASS']->value;?>
" >

<!--用户中心左侧-->

<div class="uc_left cl">
  <div class="uc_photo"> <img id="thumbnails_big" width="160" height="160" src="<?php echo $_smarty_tpl->tpl_vars['_G']->value['member']['picurl'];?>
"></div>
  <ul>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=home&a=setting" class="<?php if ($_smarty_tpl->tpl_vars['CURACTION']->value=='setting') {?>uc_leftselect<?php }?>">基本资料</a></li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=home&a=password" class="<?php if ($_smarty_tpl->tpl_vars['CURACTION']->value=='password') {?>uc_leftselect<?php }?>">密码修改</a></li>
    
    <!-- <li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=home&a=goods"   class="<?php if ($_smarty_tpl->tpl_vars['CURACTION']->value=='goods') {?>uc_leftselect<?php }?>" >报名商品</a></li>-->
    
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=home&a=duihuan" class="<?php if ($_smarty_tpl->tpl_vars['CURACTION']->value=='duihuan') {?>uc_leftselect<?php }?>">积分兑换</a></li>
    
    <!--<li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=home&a=jf_task" class="<?php if ($_smarty_tpl->tpl_vars['CURACTION']->value=='jf_task') {?>uc_leftselect<?php }?>">积分任务</a></li>-->
    
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=home&a=jf_list" class="<?php if ($_smarty_tpl->tpl_vars['CURACTION']->value=='jf_list') {?>uc_leftselect<?php }?>">积分明细</a></li>
<?php if ($_smarty_tpl->tpl_vars['_G']->value['member']['groupid']==2) {?>
      <li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=home&a=goods_list"   class="<?php if ($_smarty_tpl->tpl_vars['CURACTION']->value=='goods') {?>uc_leftselect<?php }?>" >待审核商品</a></li>
<?php }?>
  </ul>
</div>

<!--用户中心右侧-->

<div class="uc_right ucinfo_right cl">
<h1>您好，欢迎加入<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['title'];?>
！今天是<?php echo $_smarty_tpl->tpl_vars['today']->value;?>
</h1>
<?php }} ?>
