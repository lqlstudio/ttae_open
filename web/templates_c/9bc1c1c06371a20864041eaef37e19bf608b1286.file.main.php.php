<?php /* Smarty version Smarty-3.1.15, created on 2015-09-20 23:32:05
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\ttae\shop\main.php" */ ?>
<?php /*%%SmartyHeaderCode:661655fd821b343fc3-70603645%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9bc1c1c06371a20864041eaef37e19bf608b1286' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\ttae\\shop\\main.php',
      1 => 1442763068,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '661655fd821b343fc3-70603645',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55fd821b76eef1_29457417',
  'variables' => 
  array (
    'CSSDIR' => 0,
    'shop' => 0,
    'v' => 0,
    'goods' => 0,
    'tags' => 0,
    '_G' => 0,
    'URL' => 0,
    'k1' => 0,
    'v1' => 0,
    'showpage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fd821b76eef1_29457417')) {function content_55fd821b76eef1_29457417($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['CSSDIR']->value;?>
/brandgroup.css" media="all" />-->


<div class="ppt_detail hide">
    <a href="<?php echo $_smarty_tpl->tpl_vars['shop']->value['id_url'];?>
" target="_blank" class="ppt_detaidover1"></a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['shop']->value['id_url'];?>
" target="_blank">
    <img class="detaigoodsimg" width="540" height="280" src="<?php echo $_smarty_tpl->tpl_vars['shop']->value['picurl'];?>
"></a>
	 <i class="newindexicon tggoodsico pos_first"></i>
     <i class="newindexicon tggoodsicohot pos_first"></i>
    <span class="ppt_date"><?php echo $_smarty_tpl->tpl_vars['shop']->value['start_time'];?>
~<?php echo $_smarty_tpl->tpl_vars['shop']->value['end_time'];?>
</span>
    <span class="pptdat_log"><img width="140"  height="70" src="<?php echo $_smarty_tpl->tpl_vars['shop']->value['pic_path'];?>
"></span>
	
    <h1 class="ppt_dailname"><?php echo $_smarty_tpl->tpl_vars['shop']->value['title'];?>
</h1>
    <span class="ppt_dailzhekou"><?php echo $_smarty_tpl->tpl_vars['shop']->value['zk'];?>
折起</span>
    <a class="ppt_detaitit" href="<?php echo $_smarty_tpl->tpl_vars['shop']->value['id_url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['shop']->value['title'];?>
</a>
    <div class="ppt_dtailprice">
        <b>￥</b><span><?php echo $_smarty_tpl->tpl_vars['shop']->value['yh_price'];?>
</span>  <em>￥</em>  <del><?php echo $_smarty_tpl->tpl_vars['shop']->value['price'];?>
</del>
    </div>
        <a href="<?php echo $_smarty_tpl->tpl_vars['shop']->value['id_url'];?>
" target="_blank" class="ppt_detailgobuy"></a>
        <div class="ppt_timeu start_time" data-time="<?php echo $_smarty_tpl->tpl_vars['v']->value['org_end_time'];?>
" id="display_lefttime"></div>

</div>

<div class="shop_bg cl">
<?php if ($_smarty_tpl->tpl_vars['shop']->value['picurl']) {?>
 <div class="_auto_ad" data-picurl="<?php echo $_smarty_tpl->tpl_vars['shop']->value['picurl'];?>
" ></div>
<?php }?>
<div class="shop_desc wp cl">


<div class="ppTitle area">
    <div class="ppLogo" >
      <span><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['shop']->value['url'];?>
"  data-sellerid="<?php echo $_smarty_tpl->tpl_vars['shop']->value['sid'];?>
"   isconvert="1"><img src="<?php echo $_smarty_tpl->tpl_vars['shop']->value['pic_path'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['shop']->value['name'];?>
"></a></span>
    </div>
    <div class="ppName">
      <h1><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['shop']->value['url'];?>
"  data-sellerid="<?php echo $_smarty_tpl->tpl_vars['shop']->value['sid'];?>
"   isconvert="1"><?php echo $_smarty_tpl->tpl_vars['shop']->value['title'];?>
</a></h1>

      <div class="ppInfor">
          <div class="desc_title_bg"></div>
          <span>
                <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['shop']->value['url'];?>
"  data-sellerid="<?php echo $_smarty_tpl->tpl_vars['shop']->value['sid'];?>
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



<div class="index2_contend cl">

    <a name="index_cate" style="display:block; clear:both; height:0px; overflow:hidden;"></a>
    <div class="i2_goodscond ">
        <ul class="i2_goodsul">
        
         <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
             <li class="i2_goodsli">
                <a class="index2_ico i2_ggi i2_ggi0" style="z-index: 2000;"></a>
                <div class="i2_goodsd">
                	<i class="index2_ico i2_gdp1 i2_gnew0" style=""></i>
                    <i class="index2_ico i2_gdp1 i2_ghot0" style=""></i>
                    <?php if ($_smarty_tpl->tpl_vars['v']->value['over']==1) {?><a class="i2_gdpover2"></a><?php }?>
                    <a class="i2_goodsjzbk" href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
" target="_blank" rel="nofollow" isconvert="1" data-itemid= "<?php echo $_smarty_tpl->tpl_vars['v']->value['num_iid'];?>
">
                       <img width="250" height="250" src="<?php echo $_smarty_tpl->tpl_vars['v']->value['picurl'];?>
_250x250.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
"  class="ver_img" >
                    </a>
                    <a class="i2_goodsname" href="<?php echo $_smarty_tpl->tpl_vars['v']->value['id_url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a>
                    <div class="i2_goodprice">
                    	<span class="i2_gprw1">￥</span> <b class="i2_gprw2"><?php echo $_smarty_tpl->tpl_vars['v']->value['yh_price'];?>
</b>
                        <div class="i2_gprw3">
                        	<span class="index2_ico i2_gprw4"><?php echo $_smarty_tpl->tpl_vars['v']->value['zk'];?>
折</span> <del class="i2_gprw5">￥<?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
</del>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['v']->value['baoyou']==1) {?>
                        <div class="i2_gprw6" >包邮</div>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['v']->value['sum']>300&&$_smarty_tpl->tpl_vars['v']->value['sum']!=999) {?>
                         <span class="sum" style="color: #0095FF;">已售:<?php echo $_smarty_tpl->tpl_vars['v']->value['sum'];?>
</span>
                         <?php }?>
                    </div>

                    
<?php if ($_smarty_tpl->tpl_vars['v']->value['status']==5) {?>
<a class="i2_gbuybtn btgotobuy_isover4"  href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
" rel="nofollow" isconvert="1" data-itemid= "<?php echo $_smarty_tpl->tpl_vars['v']->value['num_iid'];?>
"><span><?php echo $_smarty_tpl->tpl_vars['v']->value['h'];?>
点开始</span></a>
<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['status']==3||$_smarty_tpl->tpl_vars['v']->value['status']==4) {?>
<a class="i2_gbuybtn btgotobuy_isover2"  href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
" rel="nofollow" isconvert="1" data-itemid= "<?php echo $_smarty_tpl->tpl_vars['v']->value['num_iid'];?>
">抢光了</a>
                
<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['status']==1) {?>
<a class="i2_gbuybtn btgotobuy_isover1" href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
" rel="nofollow" isconvert="1" data-itemid= "<?php echo $_smarty_tpl->tpl_vars['v']->value['num_iid'];?>
">去<?php if ($_smarty_tpl->tpl_vars['v']->value['shop_type']==1) {?>天猫<?php } else { ?>淘宝<?php }?>抢购</a>
<?php }?>
                    
                                        
                    <div class="i2_goodsbtom">
                        <ul>
                           <?php if ($_smarty_tpl->tpl_vars['v']->value['baoyou']==1) {?><li class="i2goodsbtw1">包邮</li><?php }?>
                            <?php  $_smarty_tpl->tpl_vars['tags'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tags']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['v']->value['tag']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tags']->key => $_smarty_tpl->tpl_vars['tags']->value) {
$_smarty_tpl->tpl_vars['tags']->_loop = true;
?>
                            <li class="i2goodsbtww1"><?php echo $_smarty_tpl->tpl_vars['tags']->value;?>
</li>
                            <?php } ?>
                           
                        </ul>
                     
                       <i class="index2_ico i2_gtimeico i2_gtiico00" style="display: block;" ></i>
                        <div class="i2_goodstimed" style="display: none;">
                            <?php if ($_smarty_tpl->tpl_vars['v']->value['org_end_time']>0) {?>  <i class="index2_ico i2_gtiico00"></i>       <?php }?>                     
                            <span class=" start_time3"  data-time="<?php echo $_smarty_tpl->tpl_vars['v']->value['org_end_time'];?>
"  data-title="即将开始："></span>                            
                        </div>
                      
                    </div>

                    <div class="i2_shared">
                       
                       <?php if ($_smarty_tpl->tpl_vars['v']->value['org_start_time']>$_smarty_tpl->tpl_vars['_G']->value['timestamp']) {?>
                           
                           <h1>距开始:</h1>
                           <div class="index_fxshared _start_time" data-time="<?php echo $_smarty_tpl->tpl_vars['v']->value['org_start_time'];?>
"></div>
                           <?php } else { ?>
                           <h1>距结束:</h1>
                           <div class="index_fxshared _start_time" data-time="<?php echo $_smarty_tpl->tpl_vars['v']->value['org_end_time'];?>
"></div>
                       <?php }?>
                       
                        <a class="i2_shardwa" title="会员分享不同商品，每分享1个可获得<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['share_jf'];?>
积分"  href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
a=share&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['aid'];?>
&type=qqzone" target="_blank">
                            <span>分享送积分</span> <i class="index2_ico"></i>
                        </a>
						<div class="tag_list hide">标签：
                        <?php  $_smarty_tpl->tpl_vars['v1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v1']->_loop = false;
 $_smarty_tpl->tpl_vars['k1'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['v']->value['tags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v1']->key => $_smarty_tpl->tpl_vars['v1']->value) {
$_smarty_tpl->tpl_vars['v1']->_loop = true;
 $_smarty_tpl->tpl_vars['k1']->value = $_smarty_tpl->tpl_vars['v1']->key;
?>
                             <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
kw=<?php echo $_smarty_tpl->tpl_vars['k1']->value;?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['v1']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['v1']->value;?>
</a>
                        <?php } ?>
                       </div>
                    </div> 


                </div>
            </li>
  <?php } ?>
         </ul>

            <div style="clear:both;"></div>
         </div>
</div>
 <div class="redpage cl" ><?php echo $_smarty_tpl->tpl_vars['showpage']->value;?>
</div>
</div>  






<?php echo $_smarty_tpl->getSubTemplate ("../footer.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
