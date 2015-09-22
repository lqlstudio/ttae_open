<?php /* Smarty version Smarty-3.1.15, created on 2015-09-20 23:52:07
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\mobile\header.php" */ ?>
<?php /*%%SmartyHeaderCode:246455fed6271f8c28-02628722%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '764d12c5b91e18fe1026c55ee8d3406eceac7019' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\mobile\\header.php',
      1 => 1441302228,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '246455fed6271f8c28-02628722',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CSSDIR' => 0,
    '_G' => 0,
    'URL' => 0,
    'IMGDIR' => 0,
    'CM' => 0,
    'CA' => 0,
    '_GET' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55fed6273eb2e0_40734410',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fed6273eb2e0_40734410')) {function content_55fed6273eb2e0_40734410($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../common_mobile/header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['CSSDIR']->value;?>
/main.css" media="all" />
<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['CSSDIR']->value;?>
/slider.css">
<script type="text/javascript" src="/assets/global/js/mobile.js"></script>


<div class="index2_head">
		<?php if ($_smarty_tpl->tpl_vars['_G']->value['uid']) {?>
        	 <a href="<?php echo $_smarty_tpl->tpl_vars['_G']->value['siteurl'];?>
" class="login">首页</a>
        <?php } else { ?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=member&a=login" class="login">登录</a>
         <?php }?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['_G']->value['siteurl'];?>
" class="log"><img src="<?php echo $_smarty_tpl->tpl_vars['IMGDIR']->value;?>
/logo.png"> </a>
    <ul><li>
    <?php if ($_smarty_tpl->tpl_vars['_G']->value['uid']) {?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=ajax&a=sign" class="_ajax_dialog" >签到</a> | 
    <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=home&a=jf_list">我的积分</a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=member&a=logout">退出</a>
    <?php } else { ?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=member&a=reg">注册</a>
    <?php }?>
    </li></ul>
</div>

<div class="index2_menud">
    <ul>
        <li <?php if ($_smarty_tpl->tpl_vars['CM']->value=='index'&&$_smarty_tpl->tpl_vars['CA']->value=='today') {?>class="curr"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
a=today" class="mobile_get"><span>今日新品</span></a></li>
        <!--<li <?php if ($_smarty_tpl->tpl_vars['CM']->value=='index'&&$_smarty_tpl->tpl_vars['CA']->value=='over') {?>class="curr"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
a=over" class="mobile_get"><span>即将下线</span></a></li>
        <li style="border-right:none " <?php if ($_smarty_tpl->tpl_vars['CM']->value=='index'&&$_smarty_tpl->tpl_vars['CA']->value=='history') {?>class="curr"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
a=history" class="mobile_get"><span>往期精品</span></a></li>-->
        
        <li <?php if ($_smarty_tpl->tpl_vars['CM']->value=='index'&&$_smarty_tpl->tpl_vars['CA']->value=='all'&&$_smarty_tpl->tpl_vars['_GET']->value['price']=='10') {?>class="curr"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
a=all&price=10" class="mobile_get"><span>9块9</span></a></li>
        <li style="border-right:none " <?php if ($_smarty_tpl->tpl_vars['CM']->value=='index'&&$_smarty_tpl->tpl_vars['CA']->value=='all'&&$_smarty_tpl->tpl_vars['_GET']->value['price']=='10_20') {?>class="curr"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
a=all&price=10_20" class="mobile_get"><span>19块9</span></a></li>
        
    </ul>
</div>


<?php if ($_smarty_tpl->tpl_vars['CM']->value=='index'&&$_smarty_tpl->tpl_vars['CA']->value=='main') {?>
<div class="new-ct main" style="">
    <div class="banner scroll-wrapper" id="idContainer2" ontouchstart="touchStart(event)" ontouchmove="touchMove(event);" ontouchend="touchEnd(event);" style="overflow: hidden;">

<ul class="scroller" style="position: relative; left: -781px; width: 300%;" id="idSlider2">
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['pics']['k32']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['v']->value['hide']==0) {?>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['picurl'];?>
"  /></a></li>
    <?php }?>
<?php } ?>
</ul>
        <ul class="new-banner-num new-tbl-type" id="idNum"></ul>
    </div>
    <input type="hidden" value="15" id="crazy">
</div>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['CM']->value=='index'||$_smarty_tpl->tpl_vars['CM']->value=='channel') {?>

<div class="i2_menu2d">
    <ul>
        <li style="position: relative" class="cagam_bg"><a class="cagam"><span>分类</span></a></li>
        <?php if ($_smarty_tpl->tpl_vars['CM']->value=='index'||$_smarty_tpl->tpl_vars['CM']->value=='channel') {?>
         <li style="position: relative" <?php if (!$_smarty_tpl->tpl_vars['_GET']->value['order']) {?>class="curr"<?php }?>>
         <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=<?php echo $_smarty_tpl->tpl_vars['CM']->value;?>
&a=<?php echo $_smarty_tpl->tpl_vars['CA']->value;?>
<?php if ($_smarty_tpl->tpl_vars['_G']->value['fid']) {?>&fid=<?php echo $_smarty_tpl->tpl_vars['_G']->value['fid'];?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['_G']->value['id']) {?>&id=<?php echo $_smarty_tpl->tpl_vars['_G']->value['id'];?>
<?php }?>" data-sort="" data-order="" class="mobile_get"><span>默认</span></a>
         </li>
         <li  style="position: relative" <?php if ($_smarty_tpl->tpl_vars['_GET']->value['order']=='yh_price') {?>class="curr"<?php }?>>
         <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=<?php echo $_smarty_tpl->tpl_vars['CM']->value;?>
&a=<?php echo $_smarty_tpl->tpl_vars['CA']->value;?>
<?php if ($_smarty_tpl->tpl_vars['_G']->value['fid']) {?>&fid=<?php echo $_smarty_tpl->tpl_vars['_G']->value['fid'];?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['_G']->value['id']) {?>&id=<?php echo $_smarty_tpl->tpl_vars['_G']->value['id'];?>
<?php }?>&order=yh_price&sort=asc" data-sort="asc" data-order="yh_price" class="mobile_get">
         <span>价格</span></a></li>
        <?php }?>
    </ul>
</div>

<div class="i2_cagd" style="border-top:1px solid #ddd; display:none; ">
    <div class="i2_cagdd">
        <ul>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=index&a=all" class="mobile_get"><i class="i2_icon one"></i><span>全部</span></a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
fid=1"  data-fid="1" class="mobile_get"><i class="i2_icon two"></i><span>女装</span></a></li>
            <li style="border-right: none">
            <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
fid=2" data-fid="2" class="mobile_get"><i class="i2_icon three"></i><span>男装</span></a></li>
        </ul>
    </div>
    <div class="i2_cagdd">
        <ul>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
fid=3" data-fid="3" class="mobile_get"><i class="i2_icon four"></i><span>母婴</span></a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
fid=4" data-fid="4" class="mobile_get"><i class="i2_icon five"></i><span>鞋子</span></a></li>
        <li style="border-right: none">
        	<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
fid=5" data-fid="5" class="mobile_get"><i class="i2_icon six"></i><span>家居</span></a></li>
        </ul>
    </div>
    <div class="i2_cagdd">
        <ul>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
fid=8" data-fid="8" class="mobile_get"><i class="i2_icon seven"></i><span>美妆</span></a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
fid=6" data-fid="6" class="mobile_get"><i class="i2_icon eight"></i><span>其他</span></a></li>
        <li style="border-right: none"></li>
        </ul>
    </div>
</div>
<?php }?><?php }} ?>
