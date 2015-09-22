<?php /* Smarty version Smarty-3.1.15, created on 2015-09-21 21:54:35
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\ttae\goods\main.php" */ ?>
<?php /*%%SmartyHeaderCode:2173655feac340afc08-87970770%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2752dac879ad87423a4708543c39e9eb42dd4e0' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\ttae\\goods\\main.php',
      1 => 1442843326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2173655feac340afc08-87970770',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55feac344f2253_44156076',
  'variables' => 
  array (
    'CSSDIR' => 0,
    '_G' => 0,
    'URL' => 0,
    'goods' => 0,
    'v' => 0,
    'k' => 0,
    'tuijuan' => 0,
    'k1' => 0,
    'v1' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55feac344f2253_44156076')) {function content_55feac344f2253_44156076($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['CSSDIR']->value;?>
/goods.css" media="all">

<div class="nav_position">
<a href="<?php echo $_smarty_tpl->tpl_vars['_G']->value['siteurl'];?>
">首页</a> > <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
fid=<?php echo $_smarty_tpl->tpl_vars['_G']->value['fid'];?>
"><?php echo $_smarty_tpl->tpl_vars['goods']->value['channel']['name'];?>
</a> > <a href="<?php echo $_smarty_tpl->tpl_vars['goods']->value['id_url'];?>
" class="on"><?php echo $_smarty_tpl->tpl_vars['goods']->value['title'];?>
</a>
</div>


<div class="bucuo_detail_con">
   <div class="bucuo_goods_img">
  
   <a href="<?php echo $_smarty_tpl->tpl_vars['goods']->value['url'];?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['goods']->value['title'];?>
" isconvert="1" data-itemid= "<?php echo $_smarty_tpl->tpl_vars['v']->value['num_iid'];?>
">
     <img width="300" height="300" src="<?php echo $_smarty_tpl->tpl_vars['goods']->value['picurl'];?>
_300x300.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['goods']->value['title'];?>
">
   </a>
    </div>
   <div class="bucuo_de_goodsd">
      <ul>
          <li class="li1" style="width:670px;">
		  <b class="bucuo_de_bkico bucuo_icosource<?php echo $_smarty_tpl->tpl_vars['goods']->value['shop_type'];?>
"></b>
              <span><a href="<?php echo $_smarty_tpl->tpl_vars['goods']->value['url'];?>
" target="_blank" rel="nofollow" isconvert="1" data-itemid= "<?php echo $_smarty_tpl->tpl_vars['v']->value['num_iid'];?>
"><?php if ($_smarty_tpl->tpl_vars['goods']->value['baoyou']==1) {?>[包邮]<?php }?><?php echo $_smarty_tpl->tpl_vars['goods']->value['title'];?>
</a></span>
          </li>
          <li class="bucuo_de_bkico li2 lic<?php if ($_smarty_tpl->tpl_vars['goods']->value['status']==3||$_smarty_tpl->tpl_vars['goods']->value['status']==4) {?>2<?php } elseif ($_smarty_tpl->tpl_vars['goods']->value['status']==5) {?>3<?php } else { ?>1<?php }?>">
         
              <b>￥</b><span><?php echo $_smarty_tpl->tpl_vars['goods']->value['yh_price'];?>
</span>
               <span class="del">原价:<?php echo $_smarty_tpl->tpl_vars['goods']->value['price'];?>
元</span>
              <em><?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['title'];?>
折扣价</em>
              <a href="<?php echo $_smarty_tpl->tpl_vars['goods']->value['url'];?>
" target="_blank" rel="nofollow" title="<?php echo $_smarty_tpl->tpl_vars['goods']->value['title'];?>
" isconvert="1" data-itemid= "<?php echo $_smarty_tpl->tpl_vars['v']->value['num_iid'];?>
"></a>
          </li>
          <li class="li3">
          
              <span>
                  <h1>原价</h1>
                  <em><?php echo $_smarty_tpl->tpl_vars['goods']->value['price'];?>
</em>
              </span>
              <span>
                   <h1>折扣</h1>
                   <em><?php echo $_smarty_tpl->tpl_vars['goods']->value['zk'];?>
折</em>
              </span>
              <span>
                   <h1>共节省</h1>
                   <em style="color:#00AA00;"><?php echo $_smarty_tpl->tpl_vars['goods']->value['price']-$_smarty_tpl->tpl_vars['goods']->value['yh_price'];?>
</em>
              </span>
              
               <span>
                   <h1>已售</h1>
                   <em style="color:#00AA00;"><?php echo $_smarty_tpl->tpl_vars['goods']->value['sum'];?>
</em>
              </span>
              
          </li>
<li class="li4">
<em>
标签:
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['goods']->value['tags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
kw=<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</a>
<?php } ?>

</em>
					<!--<span class="ai_bucuobtw1"><?php echo $_smarty_tpl->tpl_vars['goods']->value['state'];?>
-<?php echo $_smarty_tpl->tpl_vars['goods']->value['city'];?>
</span>-->
					<span class="ai_bucuobtw2">现价<?php echo $_smarty_tpl->tpl_vars['goods']->value['yh_price'];?>
元</span>
         </li>
          <li class="li5">
               <div class="bucuo_de_fxd">

                  <em class="bucuo_de_bkico" style="background-position:-222px -41px;"></em><b>浏览(<?php echo $_smarty_tpl->tpl_vars['goods']->value['views'];?>
)</b>
                  <em class="bucuo_de_bkico" style="background-position:-246px -42px;margin-left:10px;"></em><b>
                  <a href="#" class="show_share_box" style="margin-left:0px;">分享</a></b>
				  <i class="bucuo_de_bkico" style="background-position:-270px -35px;"></i><a href="javascript:;">投诉</a>
                  
               </div>
          </li>
        <li class="li6"><?php echo $_smarty_tpl->tpl_vars['_G']->value['title'];?>
 在<?php echo $_smarty_tpl->tpl_vars['goods']->value['start_time'];?>
进行特惠折扣减价促销活动,原价<?php echo $_smarty_tpl->tpl_vars['goods']->value['price'];?>
现价<?php echo $_smarty_tpl->tpl_vars['goods']->value['yh_price'];?>
,开始时间<?php echo $_smarty_tpl->tpl_vars['goods']->value['start_time'];?>
结束时间<?php echo $_smarty_tpl->tpl_vars['goods']->value['end_time'];?>
,过后恢复原价.
当前商品来自：<?php if ($_smarty_tpl->tpl_vars['goods']->value['shop_type']==1) {?>天猫<?php } else { ?>淘宝集市<?php }?>,发货城市为：<?php echo $_smarty_tpl->tpl_vars['goods']->value['state'];?>
-<?php echo $_smarty_tpl->tpl_vars['goods']->value['city'];?>
,
标签关键字:
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['goods']->value['tags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
,
<?php } ?>
卖家<?php if ($_smarty_tpl->tpl_vars['goods']->value['baoyou']==1) {?>已<?php } else { ?>未<?php }?>包邮,商品近30天销量<?php echo $_smarty_tpl->tpl_vars['goods']->value['sum']+864;?>
,报名商家为<?php echo $_smarty_tpl->tpl_vars['goods']->value['username'];?>
,
请具体参看商家<?php echo $_smarty_tpl->tpl_vars['goods']->value['nick'];?>
的活动信息,点
击可立即进入卖家<?php echo $_smarty_tpl->tpl_vars['goods']->value['nick'];?>
商铺查看最新特惠活动.一切尽在<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['title'];?>

本商品关键为<?php echo $_smarty_tpl->tpl_vars['goods']->value['keywords'];?>
,商品ID为<?php echo $_smarty_tpl->tpl_vars['goods']->value['num_iid'];?>
</li>
      </ul>

   </div>

   <div class="bucuo_shop_info">
     <ul>
         <li class="li1"><em class="bucuo_de_bkico bucuo_icosource1"></em><span>
         <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
a=go_pay&num_iid=<?php echo $_smarty_tpl->tpl_vars['goods']->value['num_iid'];?>
&shop=1" target="_blank" rel="nofollow"><?php echo $_smarty_tpl->tpl_vars['goods']->value['nick'];?>
</a></span></li>
         <li class="li2">包邮：<?php if ($_smarty_tpl->tpl_vars['goods']->value['baoyou']==1) {?>是<?php } else { ?>否<?php }?></li>

         <!--<li class="li2">地址：<?php echo $_smarty_tpl->tpl_vars['goods']->value['state'];?>
<?php echo $_smarty_tpl->tpl_vars['goods']->value['city'];?>
</li>-->
         <li class="li2">类型：<?php if ($_smarty_tpl->tpl_vars['goods']->value['shop_type']==1) {?>天猫<?php } else { ?>淘宝集市<?php }?></li>
         <li class="li2">卖家：<?php echo $_smarty_tpl->tpl_vars['goods']->value['nick'];?>
</li>
         <li class="li2">浏览：<?php echo $_smarty_tpl->tpl_vars['goods']->value['views'];?>
</li>
         <li class="li3">
           <a class="bucuo_de_bkico" href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
a=go_pay&num_iid=<?php echo $_smarty_tpl->tpl_vars['goods']->value['num_iid'];?>
&shop=1" target="_blank" rel="nofollow"></a>
         </li>
     </ul>
     <div class="bucuo_det_zpbzd">
         <a class="bucuo_de_bkico" style="cursor:text;"> </a>
     </div>

   </div>
</div>


<div class="shuaixuan2 ff">
<div class="bucuo_detail_bmenu">
    <ul>
     	<?php if ($_smarty_tpl->tpl_vars['goods']->value['message']) {?><li class="bucuo_current"><a>商品详情</a></li><?php }?>
        <li  <?php if (!$_smarty_tpl->tpl_vars['goods']->value['message']) {?> class="bucuo_current"<?php }?>><a>同类热销推荐</a></li>
        <li class=""><a>买过的人说<span></span></a></li>
        <li class=""><a>用户讨论区</a></li>
    </ul>
</div>


  <div class="index_bucuozhekou " style="overflow:hidden;">
  
  <?php if ($_smarty_tpl->tpl_vars['goods']->value['message']) {?>
   <ul class="index_contentul2 id-itemlist" style="padding:10px;">
   <?php echo $_smarty_tpl->tpl_vars['goods']->value['message'];?>

   </ul>
  
  <?php }?>
    <ul class="index_contentul2 other_goods id-itemlist <?php if ($_smarty_tpl->tpl_vars['goods']->value['message']) {?>hide<?php }?>">


<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tuijuan']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
	 <li>
            <div class="ai_bucuowk">
                <a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['id_url'];?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['goods']->value['title'];?>
" rel="nofollow" isconvert="1" data-itemid= "<?php echo $_smarty_tpl->tpl_vars['v']->value['num_iid'];?>
">
                <img width="245" height="245" src="<?php echo $_smarty_tpl->tpl_vars['v']->value['picurl'];?>
_250x250.jpg"></a>
                <div class="ai_bucuoinfo11">
                    <div class="ai_bucuosginfol1">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['id_url'];?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['goods']->value['title'];?>
"><?php if ($_smarty_tpl->tpl_vars['v']->value['baoyou']==1) {?><b>【包邮】</b><?php }?><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a>
                     <span>
                        ￥<em><?php echo $_smarty_tpl->tpl_vars['v']->value['yh_price'];?>
</em><del>￥<?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
</del><b>（<?php echo $_smarty_tpl->tpl_vars['v']->value['zk'];?>
折）</b>
                     </span>
                    </div>
                    <a class="ai_bucuomsgbtn22" href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['goods']->value['title'];?>
" rel="nofollow" isconvert="1" data-itemid= "<?php echo $_smarty_tpl->tpl_vars['v']->value['num_iid'];?>
">立即抢购</a>
                </div>
                <div class="ai_bucuoinfo2">
                <div class="tag_list">标签：
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
    
    
     <ul class="index_contentul2 id-itemlist hide" style="padding:10px;">
     
     <div class="comment">
     <div class="comment-title">
     				 <div class="pl-box">
                        <p>以下是来自<?php if ($_smarty_tpl->tpl_vars['goods']->value['shop_type']==1) {?>天猫<?php } else { ?>淘宝<?php }?>买家的评论</p>
                      </div>
                      <div class="cf_b com-big">
                        <div class="com-list user-info-r">
                          <ul class="_comment_list" data-num_iid="<?php echo $_smarty_tpl->tpl_vars['goods']->value['num_iid'];?>
"></ul>
                        </div>
                      </div>
                      <p class="more"><a href="<?php echo $_smarty_tpl->tpl_vars['goods']->value['url'];?>
" target="_blank" rel="nofollow">查看更多评论&gt;&gt;</a></p>
     </div>
         </div>           
     
     
    </ul>
    
     <ul class="index_contentul2 id-itemlist hide" style="padding:10px;">
    		 <div class="cl _duoshuo" data-id="<?php echo $_smarty_tpl->tpl_vars['goods']->value['aid'];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['duoshuo'];?>
" ></div>
    </ul>
    
    
  </div>
  </div>



<?php echo $_smarty_tpl->getSubTemplate ("../tags.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("../footer.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
