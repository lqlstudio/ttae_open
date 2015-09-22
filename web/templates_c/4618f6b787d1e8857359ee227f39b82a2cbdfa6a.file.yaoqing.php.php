<?php /* Smarty version Smarty-3.1.15, created on 2015-09-20 17:44:48
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\ttae\index\yaoqing.php" */ ?>
<?php /*%%SmartyHeaderCode:2223455fe8010ef12c1-93151202%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4618f6b787d1e8857359ee227f39b82a2cbdfa6a' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\ttae\\index\\yaoqing.php',
      1 => 1441283521,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2223455fe8010ef12c1-93151202',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CSSDIR' => 0,
    'URL' => 0,
    '_G' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55fe80111b4474_90432393',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fe80111b4474_90432393')) {function content_55fe80111b4474_90432393($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['CSSDIR']->value;?>
/yaoqing.css" media="all" />



<div class="score_inventbk">
        <div class="score_inventd">
          <span class="score_inventban"></span>
          <div class="score_inventmorejf">
               <h1>积分可用于</h1>
               <ul>
                   <li style="display:none;">
                       <a href="#" class="scoreicons inventico inventico1"></a>
                       <div class="inventmored">
                           <span>积分夺宝</span>
                           <i></i>
                           <a href="#" class="inventbtn">立即参与&gt;</a>
                       </div>
                   </li>
                   <li>
                       <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=duihuan&a=list#exchange" class="scoreicons inventico inventico2"></a>
                       <div class="inventmored">
                           <span>积分兑换</span>
                           <i></i>
                           <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=duihuan&a=list#exchange" class="inventbtn" target="_blank">立即参与&gt;</a>
                       </div>
                   </li>
               </ul>
          </div>

          <div class="scoreinventnav">
              
               <?php if (!$_smarty_tpl->tpl_vars['_G']->value['uid']) {?>
               	 <h2>
                   <span>马上邀请&nbsp;赚积分</span><b>登录后，邀请才能获得积分哦，<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=member&a=login" target="_blank" style="color: #e32014">立即登录</a></b>
               	 </h2>
               <?php }?>
              
              <h2>
                  <span style="font-size: 16px">邀请链接</span><b style="margin-top: 15px;">复制下面的专属链接，通过QQ，旺旺，微博，论坛发帖等方式发给好友，对方通过该链接注册激活即可。</b>
              </h2>

              <div class="score_inventform">
                 <div style="width: 580px; height: 120px;float: left">
					<p><input type="text" id="inventurl" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['siteurl'];?>
?u=<?php echo $_smarty_tpl->tpl_vars['_G']->value['uid'];?>
">  
                    <a class="invent_btnfz">复制</a></p>
                    <p style="clear:both;"></p>
                    <b class="inventspan">一键邀请</b>
                    <div class="index_fxshared">

 <div class="_share" data-style="2" data-count="0" data-more="0" data-content="优淘TAE系统专注于淘宝客网站和淘宝客APP开发订制,为淘客站长提供最好的淘客程序,以及免费的淘客源码下载,程序完全开源,兼容淘宝百川TAE1.0和2.0,可完美拖管至百川" data-picurl="<?php echo $_smarty_tpl->tpl_vars['_G']->value['siteurl'];?>
/assets/ttae/images/inventimg1.png"></div>

                        
                        
                    </div>
                 </div>
                 <span class="inventimgbk">


                 </span>


              </div>

              <h2>
                  <span>奖励规则</span>
              </h2>
              <ul class="invent_ul">
                  <li>1.邀请您的好友加入<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['title'];?>
，好友通过您的的专属邀请链接<a style="cursor:text;">成功注册并激活账户</a>，您将获得10个积分。</li>
                  <li>2.<a style="cursor:text;">切勿更改以上您专属的邀请链接</a>，一旦更改可能导致积分不能奖励到您的账号。</li>
                  <li>3.注意事项：禁止通过各种作弊手段进行虚假邀请注册好友获得积分，一旦反作弊系统检测到有作弊行为，我们将取消您的积分，情节严重者，我们直接对账号进行封号处理。</li>
                  <li>4.<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['title'];?>
拥有最终活动解释权。</li>
              </ul>

          </div>
          <span class="score_inventbtm"></span>
        </div>
   </div>




<?php echo $_smarty_tpl->getSubTemplate ("../footer.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<?php }} ?>
