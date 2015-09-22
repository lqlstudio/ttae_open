<?php /* Smarty version Smarty-3.1.15, created on 2015-09-21 22:49:23
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\ttae\footer.php" */ ?>
<?php /*%%SmartyHeaderCode:411955fd808339f686-02577292%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84588a20443f009f0a63eabfd40d9da7c5fbcc31' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\ttae\\footer.php',
      1 => 1442846959,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '411955fd808339f686-02577292',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55fd80834721b6_08418992',
  'variables' => 
  array (
    '_G' => 0,
    'IMGDIR' => 0,
    'URL' => 0,
    'CM' => 0,
    'CURMODULE' => 0,
    'v' => 0,
    'goods' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fd80834721b6_08418992')) {function content_55fd80834721b6_08418992($_smarty_tpl) {?><div style="clear:both;"></div>

<!--底部menu-->
 <div style="width: 100%; height: 30px;border-bottom: 1px solid #eee"></div>
<!--底部-->
<div class="hpz_bottom">
    <a href="<?php echo $_smarty_tpl->tpl_vars['_G']->value['siteurl'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['IMGDIR']->value;?>
/logo2.png"></a>
    <ul>
        <li class="hpz_bottomli1"><h1>关于我们</h1></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=article&id=1" target="_blank">公司简介</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=article&id=2" target="_blank">联系我们</a></li>
    </ul>
    <ul>
        <li class="hpz_bottomli1"><h1>商务合作</h1></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=apply&a=info" target="_blank">商家报名</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=home&a=goods" target="_blank">报名查询</a></li>
    </ul>
    <ul>
        <li class="hpz_bottomli1"><h1>下次怎么来</h1></li>
        <li><a href="#" class="_addfavorite">Ctrl+D加入收藏</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
a=desktop">下载桌面快捷方式</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
mobile=yes">手机版</a></li>
        
    </ul>
    <ul>
        <li class="hpz_bottomli1"><h1>关注我们</h1></li>
        <li class="hpzfootobj"><i class="indexiocns index_icon9" style="background-position: -300px -121px;"></i><a href="#" >&nbsp;微淘</a></li>
        <li class="hpzfootobj"><i class="indexiocns index_icon10" style="background-position: -320px -121px;"></i><a href="#">&nbsp;微信</a></li>
        <li><i class="indexiocns index_icon11" style="background-position: -113px -121px;"></i><a href="#" target="_blank">&nbsp;微博</a></li>
    </ul>
    <ul>
        <li class="hpz_bottomli1"><h1>帮助中心</h1></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=article&id=3" target="_blank">新手上路</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=article&id=5" target="_blank">积分问题</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=article&id=6" target="_blank">常见问题</a></li>
    </ul>


</div>


<div class="hpz_bottomtext">
    <?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['copyright'];?>
  <?php echo $_smarty_tpl->tpl_vars['_G']->value['runtime'];?>

    
</div>



<!--右边栏-->

<div class="rightnfixd">
    <span>
    <a href="#" class="rfixedico rightnfixda1"></a>
    <a class="rfixedico rightnfixda2"></a>
    <a href="javascript:;"  class="rfixedico rightnfixda3 _addfavorite"></a>
    </span>
    <i class="rfixedico rightnfixdspan1"><img src="<?php echo $_smarty_tpl->tpl_vars['IMGDIR']->value;?>
/wt.png"  /></i>
</div>


<?php if ($_smarty_tpl->tpl_vars['CM']->value=='index'||$_smarty_tpl->tpl_vars['CM']->value=='channel') {?>
<!--悬浮框-->
<div class="menufixd" style="top: 50px;<?php if ($_smarty_tpl->tpl_vars['CURMODULE']->value=='home') {?>display:none;<?php }?>">
    <h3 class="menufixedlog" style="display: block;"></h3>
    <span></span>
    <h1>商品分类</h1>	
        <ul class="fixedmenu1 cl">
 	  <li class="indexajaxlink" ><a href="<?php echo $_smarty_tpl->tpl_vars['_G']->value['siteurl'];?>
" class="<?php if ($_smarty_tpl->tpl_vars['_G']->value['fid']==0) {?>fixedselect<?php }?>">全部</a></li>
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['channels']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
         <li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
fid=<?php echo $_smarty_tpl->tpl_vars['v']->value['fid'];?>
" class="<?php if ($_smarty_tpl->tpl_vars['_G']->value['fid']==$_smarty_tpl->tpl_vars['v']->value['fid']) {?>fixedselect<?php }?>"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a></li>
         <?php } ?>
         
        <li><a class="" href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
a=tomorrow">预告</a></li>
        <li ><a  href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
a=over">即将结束</a></li>
    </ul>
    <ul class="fixedmenu2_1 cl">
        <li class=""><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=duihuan&a=list" class="newindexicon fixednico5">积分中心</a></li>
        <li class=""><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=shop&a=list" class="newindexicon fixednico3">品牌团</a></li>
         <li><a  href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=img&a=list" class="newindexicon fixednico4">值得买</a></li> 
    </ul>

</div>
<?php }?>

<div class="share_box_menu" style="display:none">
 <table cellpadding="0" cellspacing="0" class="fwin">
    <tbody>
      <tr>
        <td class="t_l"></td>
        <td class="t_c"></td>
        <td class="t_r"></td>
      </tr>
      <tr>
        <td class="m_l"></td>
        <td class="m_c fwin_content_sign"><h3 class="flb"><em>提示</em><span> <a title="关闭" class="fwin_window_close_sign flbc _hideMemu" target="_blank">关闭</a> </span></h3>
          <div class="content_box_0"><div class="_share" data-style="2" data-more="0" data-count="0" data-picurl="<?php echo $_smarty_tpl->tpl_vars['goods']->value['picurl'];?>
" style="  padding: 20px 0 0 100px;"></div></div></td>
        <td class="m_r"></td>
      </tr>
      <tr>
        <td class="b_l"></td>
        <td class="b_c"></td>
        <td class="b_r"></td>
      </tr>
    </tbody>
  </table>
</div>
<!--<div class="share_box hide">
<div class="_share" data-style="2" data-more="0" data-count="0"></div></div>
</div>-->

<?php echo $_smarty_tpl->getSubTemplate ("../common/footer.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
