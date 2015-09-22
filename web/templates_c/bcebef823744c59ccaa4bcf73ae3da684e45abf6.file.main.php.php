<?php /* Smarty version Smarty-3.1.15, created on 2015-09-20 23:31:18
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\ttae\channel\main.php" */ ?>
<?php /*%%SmartyHeaderCode:1882655fd8ffee8e392-07498432%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bcebef823744c59ccaa4bcf73ae3da684e45abf6' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\ttae\\channel\\main.php',
      1 => 1442762976,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1882655fd8ffee8e392-07498432',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55fd8fff1f2c41_44224571',
  'variables' => 
  array (
    'CSSDIR' => 0,
    'CURMODULE' => 0,
    'CURACTION' => 0,
    'time' => 0,
    'CA' => 0,
    'CM' => 0,
    'channel' => 0,
    'cate' => 0,
    '_G' => 0,
    'URL' => 0,
    'goods' => 0,
    'v' => 0,
    'tags' => 0,
    'k1' => 0,
    'v1' => 0,
    'showpage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fd8fff1f2c41_44224571')) {function content_55fd8fff1f2c41_44224571($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

 <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['CSSDIR']->value;?>
/index.css">
<?php if ($_smarty_tpl->tpl_vars['CURMODULE']->value=='index'&&$_smarty_tpl->tpl_vars['CURACTION']->value=='over') {?>
<div class="listtopcontent">
        <h1>即将结束</h1>
        <h2>最后疯抢，不容错过</h2>
        <div class="listlast_time">
           <h3>剩余时间：</h3>
           <b data-time="<?php echo $_smarty_tpl->tpl_vars['time']->value;?>
" id="display_lasttime" class="start_time2"></b>
        </div>
    
 </div>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['CA']->value=='main'&&$_smarty_tpl->tpl_vars['CM']->value=='channel') {?>

    <?php if ($_smarty_tpl->tpl_vars['channel']->value['picurl']) {?>
        <div class="_auto_ad" data-picurl="<?php echo $_smarty_tpl->tpl_vars['channel']->value['picurl'];?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['cate']->value['org_url'];?>
"></div>
    <?php } else { ?>
    <div class="nav_position">
    <a href="<?php echo $_smarty_tpl->tpl_vars['_G']->value['siteurl'];?>
">首页</a> > <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
fid=<?php echo $_smarty_tpl->tpl_vars['_G']->value['fid'];?>
" class="on"><?php echo $_smarty_tpl->tpl_vars['channel']->value['name'];?>
</a>
    </div>
    
    <?php }?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['CA']->value=='cate'&&$_smarty_tpl->tpl_vars['CM']->value=='index'&&$_smarty_tpl->tpl_vars['cate']->value['picurl']) {?>
    <div class="_auto_ad" data-picurl="<?php echo $_smarty_tpl->tpl_vars['cate']->value['picurl'];?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['cate']->value['pic_url'];?>
"></div>

<?php }?>

    <div class="i2_goodscond">
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
折</span> <del class="i2_gprw5 hide">￥<?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
</del>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['v']->value['baoyou']==1) {?>
                        <div class="i2_gprw6"  >包邮</div>
                        <?php }?>
                       
                         <?php if ($_smarty_tpl->tpl_vars['v']->value['sum']!=999) {?><span class="sum" >已售:<?php echo $_smarty_tpl->tpl_vars['v']->value['sum'];?>
</span><?php }?>
                       
                    </div>
<?php if ($_smarty_tpl->tpl_vars['v']->value['status']==5) {?>
<a class="i2_gbuybtn btgotobuy_isover4"  href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
"  rel="nofollow" isconvert="1" data-itemid= "<?php echo $_smarty_tpl->tpl_vars['v']->value['num_iid'];?>
"><span><?php echo $_smarty_tpl->tpl_vars['v']->value['h'];?>
点开始</span></a>
<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['status']==3||$_smarty_tpl->tpl_vars['v']->value['status']==4) {?>
<a class="i2_gbuybtn btgotobuy_isover2"  href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
" rel="nofollow" isconvert="1" data-itemid= "<?php echo $_smarty_tpl->tpl_vars['v']->value['num_iid'];?>
">抢光了</a>
                
<?php } else { ?>
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
                            <li class="i2goodsbtww1"><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
kw=<?php echo $_smarty_tpl->tpl_vars['tags']->value;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['tags']->value;?>
</a></li>
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
积分">
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
" ><?php echo $_smarty_tpl->tpl_vars['v1']->value;?>
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

 <div class="redpage cl" ><?php echo $_smarty_tpl->tpl_vars['showpage']->value;?>
</div>








<?php echo $_smarty_tpl->getSubTemplate ("../tags.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>




<?php echo $_smarty_tpl->getSubTemplate ("../footer.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<?php }} ?>
