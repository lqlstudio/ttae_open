<?php /* Smarty version Smarty-3.1.15, created on 2015-09-20 23:52:39
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\mobile\home\jf_list.php" */ ?>
<?php /*%%SmartyHeaderCode:106255fed647915273-36056827%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb553893f79610aa629d2925d56869ca3787a249' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\mobile\\home\\jf_list.php',
      1 => 1418616632,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '106255fed647915273-36056827',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_G' => 0,
    'IMGDIR' => 0,
    'URL' => 0,
    'goods' => 0,
    'v' => 0,
    'showpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55fed647b77900_54257684',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fed647b77900_54257684')) {function content_55fed647b77900_54257684($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="hpz_returntop"><span>我的积分</span></div>
<div class="mysinfobk cl">
    <span class="mysphotod">
        <img width="60" height="60" src="<?php echo $_smarty_tpl->tpl_vars['_G']->value['member']['picurl'];?>
">
    </span>
	    <ul>
        <li><?php echo $_smarty_tpl->tpl_vars['_G']->value['username'];?>
</li>
        <li><?php echo $_smarty_tpl->tpl_vars['_G']->value['member']['jf'];?>
积分</li>
    </ul>
    <img class="" style="float: right" src="<?php echo $_smarty_tpl->tpl_vars['IMGDIR']->value;?>
/mysimg.png">
</div>


<div class="mystabd cl">
    <div class="mystab">
        <i class="sign"></i>
        <ul>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=ajax&a=sign" class="_ajax_dialog" ><h1>签到赚积分</h1></a></li>
            <li>今天有<span>792</span>人获得积分</li>
        </ul>
    </div>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['goods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
 <div class="mystab">
        <i class="<?php if ($_smarty_tpl->tpl_vars['v']->value['jf']<1) {?>dec<?php } else { ?>add<?php }?>"></i>
        <ul>
            <li>积分:<?php echo $_smarty_tpl->tpl_vars['v']->value['jf'];?>
 累计:<?php echo $_smarty_tpl->tpl_vars['v']->value['org_jf'];?>
   -  <?php echo $_smarty_tpl->tpl_vars['v']->value['dateline'];?>
</li>
            <li><?php echo $_smarty_tpl->tpl_vars['v']->value['desc'];?>
</li>
        </ul>
    </div>
<?php } ?>
</div>

<div class="cl redpage"><?php echo $_smarty_tpl->tpl_vars['showpage']->value;?>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("../footer.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
