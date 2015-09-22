<?php /* Smarty version Smarty-3.1.15, created on 2015-09-21 22:47:15
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\ttae\shop\list.php" */ ?>
<?php /*%%SmartyHeaderCode:811355fd80829d7d57-01784057%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2420ebd3958a3069ffb176ae5eab85e96ad7fd1' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\ttae\\shop\\list.php',
      1 => 1442846832,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '811355fd80829d7d57-01784057',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55fd8082cca2a2_80299305',
  'variables' => 
  array (
    'CSSDIR' => 0,
    'URL' => 0,
    'CA' => 0,
    '_G' => 0,
    'v' => 0,
    'shop_list' => 0,
    's' => 0,
    'shop' => 0,
    'showpage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fd8082cca2a2_80299305')) {function content_55fd8082cca2a2_80299305($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['CSSDIR']->value;?>
/brandgroup.css" media="all" />

<div class="score_nav cl">
    <ul class="score_nav_ul">
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=shop&a=list" style="<?php if ($_smarty_tpl->tpl_vars['CA']->value=='all') {?>color:#E32014;<?php }?>">分类</a></li>
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['shop_cate']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
         <li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=shop&a=list&cate=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" style="<?php if ($_smarty_tpl->tpl_vars['_G']->value['fid']==$_smarty_tpl->tpl_vars['v']->value['fid']) {?>color:#E32014;<?php }?>"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a></li>
          <li class="iconBack"><em>|</em></li>
        <?php } ?>
       
        
         </span>
    </ul>
</div>


<div class="nav_position">
当前位置: 
      <a href="<?php echo $_smarty_tpl->tpl_vars['_G']->value['siteurl'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['title'];?>
</a> &gt; 
      <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=img&a=list" class="on">淘头条</a>
</div>


<div class="hpz_ppt_hotsell">
    <div class="hpz_ppt_title">
        <h1>本期品牌</h1>
       <!-- <h2>每周二早10点更新</h2>-->
                <span class="hpz_ppt_qhbtn" style="display:none;">
        	6月23品牌&nbsp;&nbsp;抢鲜看
        </span>
            </div>
</div>

<div class="hpz_ppt_logosd" style="border-color: rgb(238, 238, 238);">
    <ul class="hpz_pptlogul" style="display: block;">

	<?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shop_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
 
       <li class="hpz_pptlogli hpz_pptlogli3">
            <a class="hpz_pptloglia" href="<?php echo $_smarty_tpl->tpl_vars['s']->value['id_url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['s']->value['title'];?>
" target="_blank">
                <div class="ppt_be"></div>
                <div class="hpz_pptlogliaa">
                    <h5><?php echo $_smarty_tpl->tpl_vars['s']->value['title'];?>
</h5>
                    <span><i>全场<?php echo $_smarty_tpl->tpl_vars['s']->value['zk'];?>
折封顶</i></span>
                </div>
            </a>
            <a title="<?php echo $_smarty_tpl->tpl_vars['s']->value['title'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['s']->value['pic_path'];?>
" width="100"  height="50"></a>
        </li>

	<?php } ?>
    </ul>
    
</div>

<?php  $_smarty_tpl->tpl_vars['shop'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['shop']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shop_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['shop']->key => $_smarty_tpl->tpl_vars['shop']->value) {
$_smarty_tpl->tpl_vars['shop']->_loop = true;
?>


<div class="shop_desc wp cl" style=" margin-top: 20px; ">


            <div class="ppTitle area">
                <div class="ppLogo" >
                  <span><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['shop']->value['id_url'];?>
"  isconvert="1"><img src="<?php echo $_smarty_tpl->tpl_vars['shop']->value['pic_path'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['shop']->value['name'];?>
"></a></span>
                </div>
                <div class="ppName">
                  <h1><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['shop']->value['url'];?>
" data-sellerid="<?php echo $_smarty_tpl->tpl_vars['shop']->value['sid'];?>
"  isconvert="1"><?php echo $_smarty_tpl->tpl_vars['shop']->value['title'];?>
</a></h1>
                  
                  <div class="ppInfor">                    
                      <div class="desc_title_bg"></div>
                      <span>
                            <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['shop']->value['id_url'];?>
"  isconvert="1"><?php echo $_smarty_tpl->tpl_vars['shop']->value['title'];?>
卖专场<b><?php echo $_smarty_tpl->tpl_vars['shop']->value['zk'];?>
</b>折起 &gt; </a>
                             <?php echo $_smarty_tpl->tpl_vars['shop']->value['start_time'];?>
~<?php echo $_smarty_tpl->tpl_vars['shop']->value['end_time'];?>

                      
                      </span>                    
                  </div>
                   <div class="ppInfor">
                   <?php echo $_smarty_tpl->tpl_vars['shop']->value['desc'];?>

                   </div>
                </div>
                <div class="clear"></div>
              </div>


</div>

    <?php if ($_smarty_tpl->tpl_vars['shop']->value['goods']&&$_smarty_tpl->tpl_vars['shop']->value['count']>0) {?>
<div class="ppt_goodscontent">
    
	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shop']->value['goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>     
     <div class="ppt_goodsd">
         <a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
" ><img width="220" height="220" src="<?php echo $_smarty_tpl->tpl_vars['v']->value['picurl'];?>
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
" class="ppticons pptgobuy ppt2btn"></a>
     </div>
  <?php } ?>         
    <a class="ppt_moregoods" href="<?php echo $_smarty_tpl->tpl_vars['shop']->value['id_url'];?>
" >
         <span>
             查看更多
         </span>
        <i class="ppticons"></i>
    </a>
</div>
     <?php }?>
	<?php } ?>
<div style="width: 100%; height: 30px;border-bottom: 1px solid #eee"></div>



<div class="cl redpage"><?php echo $_smarty_tpl->tpl_vars['showpage']->value;?>
</div>





<?php echo $_smarty_tpl->getSubTemplate ("../footer.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
