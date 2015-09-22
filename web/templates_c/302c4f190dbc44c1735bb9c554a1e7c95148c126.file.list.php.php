<?php /* Smarty version Smarty-3.1.15, created on 2015-09-20 00:40:42
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\ttae\duihuan\list.php" */ ?>
<?php /*%%SmartyHeaderCode:1023555fd900a7284a9-89829021%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '302c4f190dbc44c1735bb9c554a1e7c95148c126' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\ttae\\duihuan\\list.php',
      1 => 1432553513,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1023555fd900a7284a9-89829021',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CSS' => 0,
    '_G' => 0,
    'URL' => 0,
    'IMGDIR' => 0,
    'sign' => 0,
    'v' => 0,
    'k' => 0,
    'tags' => 0,
    's' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55fd900ab34bd4_94410132',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fd900ab34bd4_94410132')) {function content_55fd900ab34bd4_94410132($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../header.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->tpl_vars['CSS']->value;?>

<div class="score_body">
  <div class="score_head">
    <div class="score_head_user">
      <div class="score_user_top">
        <div class="score_user_icon"> <?php if ($_smarty_tpl->tpl_vars['_G']->value['uid']) {?> <img src="<?php echo $_smarty_tpl->tpl_vars['_G']->value['member']['picurl'];?>
" width="80" height="80">
          <div class="score_user_topTxt">
            <p class="firstList">您好，<a class="buy" href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=home"><?php echo $_smarty_tpl->tpl_vars['_G']->value['username'];?>
</a></p>
            <p>可用积分:<em><?php echo $_smarty_tpl->tpl_vars['_G']->value['member']['jf'];?>
</em></p>
            <p style="margin-top:5px;">完善资料可获得10积分</p>
            <p></p>
          </div>
          <?php } else { ?> <img src="<?php echo $_smarty_tpl->tpl_vars['IMGDIR']->value;?>
/userpic.png" width="80" height="80">
          <div class="score_user_topTxt">
            <p class="firstList">您好，请<a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=member&a=login">登录</a></p>
            <p>可用积分:<em>0</em></p>
          </div>
          <?php }?> </div>
        <div class="score_user_but"> <?php if (!$_smarty_tpl->tpl_vars['sign']->value['id']) {?> <a  href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=ajax&a=sign" class="_ajax_dialog login">立即参与</a>
          <p>您今天还没有签到</p>
          <?php } else { ?> <a  style="background:#ccc;cursor: inherit;">已签到</a>
          <p>获得<em><?php echo $_smarty_tpl->tpl_vars['sign']->value['jf'];?>
</em>积分</p>
          <?php }?> </div>
      </div>
      <div class="score_user_bottom"> <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
a=task">赚取积分</a><i>|</i> <a href="#exchange">积分兑换</a> </div>
    </div>
    <div class="score_head_banner">
      <ul class="scoreindexul1" style="margin-left: 0px;">
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['pics']['k30']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
        
        <?php if ($_smarty_tpl->tpl_vars['v']->value['hide']==0) {?>
        <li class="show_li"><a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['picurl'];?>
"  width="830" height="240" /></a></li>
        <?php }?>
        
        <?php } ?>
      </ul>
      <ul class="indexiocns scoreindexul2">
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['pics']['k30']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['gd']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['gd']['index']++;
?>
        
        <?php if ($_smarty_tpl->tpl_vars['v']->value['hide']==0) {?>
        <li class="bar_li" data-index="<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['gd']['index'];?>
"></li>
        <?php }?>
        
        <?php } ?>
      </ul>
    </div>
  </div>
  <div class="score_state">
    <div class="score_state_left">
      <h3>积分夺宝</h3>
      <p><img src="http://img04.taobaocdn.com/imgextra/i4/1644048454/T2Ba5nXJVaXXXXXXXX-1644048454.jpg" width="233" height="298"></p>
    </div>
    <div class="score_state_right">
      <h3>
        <p><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
a=task">赚更多积分&gt;</a></p>
        做任务赚积分</h3>
      <ul class="score_state_rightUl">
        <li class="border">
          <div class="score_rightUl_list">
            <div class="icon"><img src="<?php echo $_smarty_tpl->tpl_vars['IMGDIR']->value;?>
/score_11.jpg" width="90" height="90"></div>
            <div class="score_rightUl_list_r">
              <h4>网站签到</h4>
              <p class="score_rightUl_r_txt"> 签到
                
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['setting']['sign_jf']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['a']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['a']['index']++;
?>                    
                
                <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['a']['index']<9) {?>
                
                <?php echo $_smarty_tpl->tpl_vars['k']->value;?>
天<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
分，
                
                <?php }?>
                
                <?php } ?>
                
                如果连续签到中断则从头开始。</p>
              <span> <?php if (!$_smarty_tpl->tpl_vars['sign']->value['id']) {?> <a id="sign_3_a" href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=ajax&a=sign" class="_ajax_dialog">立即参与</a>
              <p>获得<em>1-10</em>积分</p>
              <?php } else { ?> <a id="sign_3_b" style="background:#ccc;cursor: inherit;">已签到</a>
              <p>今日已获得<em><?php echo $_smarty_tpl->tpl_vars['sign']->value['jf'];?>
</em>积分</p>
              <?php }?> </span> </div>
          </div>
        </li>
        <li class="border">
          <div class="score_rightUl_list">
            <div class="icon"><img src="<?php echo $_smarty_tpl->tpl_vars['IMGDIR']->value;?>
/score_13.jpg" width="90" height="90"></div>
            <div class="score_rightUl_list_r">
              <h4>分享宝贝</h4>
              <p class="score_rightUl_r_txt">通过网站组件分享不同的商品，每分享一个链接可获得<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['share_goods'];?>
积分。</p>
              <span> <a  href="#index_space">立即参与&gt;</a>
              <p>共获得<em><?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['share_goods'];?>
</em>积分</p>
              </span> </div>
          </div>
        </li>
        <li>
          <div class="score_rightUl_list">
            <div class="icon"><img src="<?php echo $_smarty_tpl->tpl_vars['IMGDIR']->value;?>
/score_18.jpg" width="90" height="90"></div>
            <div class="score_rightUl_list_r">
              <h4>分享站点首页</h4>
              <p class="score_rightUl_r_txt">分享站点首页到微博</p>
              <span> <a id="vb_b" style="background:#ccc;cursor:inherit;display:none;">已完成</a> <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
a=share&type=web"  target="_blank" >立即参与&gt;</a>
              <p>获得<em><?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['share_web'];?>
</em>积分</p>
              </span> </div>
          </div>
        </li>
        <li>
          <div class="score_rightUl_list">
            <div class="icon"><img src="<?php echo $_smarty_tpl->tpl_vars['IMGDIR']->value;?>
/score_19.jpg" width="90" height="90"></div>
            <div class="score_rightUl_list_r">
              <h4>邀请任务</h4>
              <p class="score_rightUl_r_txt">通过专属的邀请代码发送给朋友并成功注册激活，每月最多可邀请20人。（同一IP仅限第一个注册的好友加积分）</p>
              <span> <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
a=yaoqing">立即参与&gt;</a>
              <p>共获得<em><?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['yaoqing'];?>
</em>积分</p>
              </span> </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
  <a name="exchange"></a>
  <div class="score_producte">
    <div class="score_producte_title">
      <h3>积分兑换</h3>
      <ul class="score_producte_title_ul">
        <li class="on" data-index="0">全部</li>
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
        <li  data-index="<?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
"><a><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a></li>
        <?php } ?>
      </ul>
    </div>
    <div class="score_producte_list" data-2="" data-1="" style="display: block;">
      <ul class="score_producte_listUl">
        <?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['s']->key;
?>
        
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['s']->value['goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
        <li>
          <div class="score_listUl_img"> <a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['id_url'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['picurl'];?>
_250x250.jpg" width="250" height="250"></a>
            <p><a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['id_url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></p>
            <div class="score_listUl_but"> <a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['id_url'];?>
" target="_blank">立即兑换</a>
              <p><em>￥<?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
</em>剩余<?php echo $_smarty_tpl->tpl_vars['v']->value['sum']-$_smarty_tpl->tpl_vars['v']->value['num'];?>
件</p>
              <p><i class="colorRed"><?php echo $_smarty_tpl->tpl_vars['v']->value['jf'];?>
</i>积分</p>
            </div>
          </div>
        </li>
        <?php } ?>  
        
        <?php } ?>
      </ul>
    </div>
    <?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['s']->key;
?>
    <div class="score_producte_list" data-2="" data-1="<?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
" style="display: none;">
      <ul class="score_producte_listUl">
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['s']->value['goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
        <li>
          <div class="score_listUl_img"> <a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['id_url'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['picurl'];?>
_250x250.jpg" width="250" height="250"></a>
            <p><a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['id_url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></p>
            <div class="score_listUl_but"> <a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['id_url'];?>
" target="_blank">立即兑换</a>
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
    <?php } ?> </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('../footer.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php }} ?>
