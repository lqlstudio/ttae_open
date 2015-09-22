<?php /* Smarty version Smarty-3.1.15, created on 2015-09-20 00:38:41
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\ttae\home\jf_list.php" */ ?>
<?php /*%%SmartyHeaderCode:888355fd8f9109c883-48384563%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '926639962d5fbbc5e8d17543be133061fee4082e' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\ttae\\home\\jf_list.php',
      1 => 1441289823,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '888355fd8f9109c883-48384563',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_G' => 0,
    '_GET' => 0,
    'URL' => 0,
    'k' => 0,
    'v' => 0,
    'sign' => 0,
    'showpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55fd8f91326b80_35759007',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fd8f91326b80_35759007')) {function content_55fd8f91326b80_35759007($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("./home_header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="uc_scored1"> <span style="float: left">&nbsp;我的账户可用积分：<i style="color: #e32014;"><?php echo $_smarty_tpl->tpl_vars['_G']->value['member']['jf'];?>
</i></span> <span style="float: right; font-size: 12px;"></span> </div>
<div class="uc_scoremenu">
  <ul>
    <li class="<?php if (!$_smarty_tpl->tpl_vars['_GET']->value['type']) {?>select<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=home&a=jf_list">全&nbsp;&nbsp;部</a></li>
    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['setting']['jf_type']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
    <li class="<?php if ($_smarty_tpl->tpl_vars['_GET']->value['type']==$_smarty_tpl->tpl_vars['k']->value) {?>select<?php }?>"> <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=home&a=jf_list&type=<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</a></li>
    <?php } ?>
  </ul>
</div>
<ul class="uc_scoredtab" style="background-color: rgb(245, 245, 245);">
  <li class="uc_scoreli2" style="width:160px;"><b>时间</b></li>
  <li class="uc_scoreli4" style="width:80px"><b>积分</b></li>
  <li class="uc_scoreli2"  style="width:100px"><b>累计</b></li>
  <li class="uc_scoreli3" ><b>事项</b></li>
</ul>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sign']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
<ul class="uc_scoredtab" <?php if ($_smarty_tpl->tpl_vars['k']->value%2==1) {?>style="background-color: rgb(245, 245, 245);"<?php }?>>
  <li class="uc_scoreli2"  style="width:160px;"><?php echo $_smarty_tpl->tpl_vars['v']->value['dateline'];?>
</li>
  <li class="uc_scoreli4"  style="width:80px"><i style="color: #e32014"><?php echo $_smarty_tpl->tpl_vars['v']->value['jf'];?>
</i></li>
  <li class="uc_scoreli2"  style="width:100px"><?php echo $_smarty_tpl->tpl_vars['v']->value['org_jf'];?>
</li>
  <li class="uc_scoreli3" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['desc'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['desc'];?>
</li>
</ul>
<?php } ?>
</div>
</div>

<!--分页会因为上面的浮动而有点走位,关掉div的结束,重开始-->

<div class="cl redpage"><?php echo $_smarty_tpl->tpl_vars['showpage']->value;?>
</div>
<div>
<div>
<?php echo $_smarty_tpl->getSubTemplate ("./home_footer.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
