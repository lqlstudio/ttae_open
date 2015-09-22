<?php /* Smarty version Smarty-3.1.15, created on 2015-09-20 21:56:22
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\ttae\duihuan\main.php" */ ?>
<?php /*%%SmartyHeaderCode:547155febb0692d526-99525896%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '511f8264da6930db8f1623bd5ef9b8a6c00e2d6a' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\ttae\\duihuan\\main.php',
      1 => 1441287190,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '547155febb0692d526-99525896',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CSS' => 0,
    'URL' => 0,
    'goods' => 0,
    '_G' => 0,
    'v' => 0,
    'duihuan_success' => 0,
    'duihuan_goods' => 0,
    'CM' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55febb06c4e9e6_60413896',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55febb06c4e9e6_60413896')) {function content_55febb06c4e9e6_60413896($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../header.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->tpl_vars['CSS']->value;?>


<div class="score_body">
  <div class="score_producte">
    <div class="score_producte_dobk">
      <div class="score_producte_dobkl">
        <div class="score_dobkl_title"> <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=home&a=duihuan" target="_blank">我的兑换&gt;</a>
          <ul class="score_dobkl_titleNav">
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=duihuan&a=list">积分兑换</a></li>
            <li>&lt;</li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=duihuan&a=list#exchange">女装</a></li>
            <li>&lt;</li>
            <li>详情</li>
          </ul>
        </div>
        <div class="score_dobkl_cont">
          <p class="leftImg"><img src="<?php echo $_smarty_tpl->tpl_vars['goods']->value['picurl'];?>
_350x350.jpg" width="350" height="350"></p>
          <div class="score_dobkl_cont_explain">
            <h4><em>[<?php echo $_smarty_tpl->tpl_vars['goods']->value['jf'];?>
积分]</em><?php echo $_smarty_tpl->tpl_vars['goods']->value['title'];?>
</h4>
            <ul class="list">
              <li>积分：<em><i><?php echo $_smarty_tpl->tpl_vars['goods']->value['jf'];?>
</i>积分</em></li>
              <li>价值：￥<?php echo $_smarty_tpl->tpl_vars['goods']->value['price'];?>
</li>
              <li>库存：<?php echo $_smarty_tpl->tpl_vars['goods']->value['sum']-$_smarty_tpl->tpl_vars['goods']->value['num'];?>
件</li>
            </ul>
            <div class="but  <?php if ($_smarty_tpl->tpl_vars['goods']->value['status']>1) {?>disable<?php }?>"> <?php if ($_smarty_tpl->tpl_vars['goods']->value['status']>1) {?> <a  class="now disable" ><?php echo $_smarty_tpl->tpl_vars['goods']->value['status_text'];?>
</a> <?php } elseif (!$_smarty_tpl->tpl_vars['_G']->value['uid']) {?> <a  class="showdialog disable now" data-msg="未登录无法进行兑换操作" >未登录</a> <?php } elseif ($_smarty_tpl->tpl_vars['_G']->value['member']['jf']>=$_smarty_tpl->tpl_vars['v']->value['jf']) {?> <a href="#" class="now duihuan_start" data-id="<?php echo $_smarty_tpl->tpl_vars['goods']->value['id'];?>
" >立即兑换</a> <?php } else { ?> <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=duihuan&a=apply&id=<?php echo $_smarty_tpl->tpl_vars['goods']->value['id'];?>
" data-msg="您的积分不足<?php echo $_smarty_tpl->tpl_vars['goods']->value['jf'];?>
,无法申请兑换" class="showdialog now" >积分不足</a> <?php }?> </div>
          </div>
          <div class="miaoshu">
            <ul>
              <li class="dbli dbli1 dbseclect" data-index="0">商品详情</li>
              <li class="dbli dbli1" data-index="1">兑换规则</li>
              <li class="dbli dbli1" data-index="2">注意事项</li>
              <li class="dbli dbli1" data-index="3">已成功兑换</li>
               <li class="dbli dbli1" data-index="4">评论</li>
            </ul>
          </div>
          <div class="dbmiaoshuobj" style="display: block" > <?php echo $_smarty_tpl->tpl_vars['goods']->value['content'];?>
 </div>
          <div class="dbmiaoshuobj" style="display: none">
         
         
         
          <p>
    <br/>
</p>
<p>
    <br/><span style="font-size:14px;"><span style="font-family: 宋体;">1、本站注册会员均可通过积分换购礼品。&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br/><br/>
	2、所有的商品均可享受包邮，您不用承担任何费用。&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br/><br/>
	3、一旦进行积分兑换，消耗的积分不予返还。&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<br/><br/>
	4、兑换后，我们会在7个工作日内完成发货，详情见个人中心---兑换中心。&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<br/><br/>
	5、同一商品每个用户仅允许兑换一件。&nbsp;&nbsp; </span></span>
</p>
          </div>
          <div class="dbmiaoshuobj" style="display: none"> 兑换后，我们会在7个工作日内完成发货，详情见个人中心---兑换中心。            
同一商品每个用户仅允许兑换一件。  </div>
          <div class="dbmiaoshuobj" style="display: none">
            <div class="cgdh">
              <ul>
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['duihuan_success']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                <li><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['user']['picurl'];?>
" width="80" height="80"/>
                  <p><?php echo $_smarty_tpl->tpl_vars['v']->value['user']['nick'];?>
</p>
                </li>

                <?php } ?>
              </ul>
            </div>
          </div>
           <div class="dbmiaoshuobj" >
<div class="_duoshuo" data-id="<?php echo $_smarty_tpl->tpl_vars['goods']->value['id'];?>
"  data-name="ttae" style="margin-top:30px;"></div>
            </div>
          
        </div>
      </div>
      <div class="score_producte_dobkr">
        <h3>积分兑换</h3>
        <ul class="score_producte_listUl rightBlock">
          <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['duihuan_goods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
          <li>
            <div class="score_listUl_img"> <a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['id_url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['picurl'];?>
_220x220.jpg" width="215" height="215"></a>
              <p><a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['id_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></p>
              <div class="score_listUl_but"> <a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['id_url'];?>
">立即兑换</a>
                <p><em>￥<?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
</em>剩余<?php echo $_smarty_tpl->tpl_vars['v']->value['sum']-$_smarty_tpl->tpl_vars['v']->value['num'];?>
件</p>
                <p><i class="colorRed"><?php echo $_smarty_tpl->tpl_vars['v']->value['jf'];?>
</i>积分</p>
              </div>
            </div>
          </li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </div>
</div>





 
<div class="duihuan_box cl duihuan_box_menu" style="display:none; position:fixed;">
  <div class="duihuan_box_close"></div>
  <div class="duihuan_box_m cl">
    <ul>
      <form action="" method="post">
        <li style="font-size:14px;color:#F00;">请填写收货信息,方便我们审核成功后直接发放的宝贝给您</li>
        <li><span>旺旺:</span>
          <input type="text" name="postdb[wangwang]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['member']['wangwang'];?>
"  class="check_text"  data-reg="wangwang" style="width:200px">
        </li>
        <li><span>姓名:</span>
          <input name="postdb[truename]"  value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['member']['name'];?>
" type="text" class="check_text"   data-reg="truename" style="width:200px">
        </li>
        <li><span>联系电话:</span>
          <input name="postdb[phone]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['member']['phone'];?>
" class="check_text" data-reg="phone" style="width:200px">
        </li>
        <li><span>地址:</span>
          <input name="postdb[address]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['member']['address'];?>
" class="check_text" data-type="address" style="width:200px">
        </li>
        <li><span>支付宝:</span>
          <input name="postdb[alipay]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['member']['alipay'];?>
" class="check_text" data-type="alipay" style="width:200px">
        </li>
       

        <li><span>&nbsp;</span>
          <input type="submit" value="提交申请" name="onsubmit" class="btn _check_form" >
        </li>
        <input type="hidden"  value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['id'];?>
" class="shiyong_id" name="id" />

        <input type="hidden" name="m" value="<?php echo $_smarty_tpl->tpl_vars['CM']->value;?>
" >
        <input type="hidden" name="a" value="apply" >
      </form>
    </ul>
  </div>
</div>




<?php echo $_smarty_tpl->getSubTemplate ('../footer.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 

<?php }} ?>
