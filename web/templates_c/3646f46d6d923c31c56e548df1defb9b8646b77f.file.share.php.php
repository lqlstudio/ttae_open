<?php /* Smarty version Smarty-3.1.15, created on 2015-09-20 00:39:04
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\admin\admin\share.php" */ ?>
<?php /*%%SmartyHeaderCode:2222555fd8fa8565dc0-13008426%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3646f46d6d923c31c56e548df1defb9b8646b77f' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\admin\\admin\\share.php',
      1 => 1441350033,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2222555fd8fa8565dc0-13008426',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_G' => 0,
    'CURMODULE' => 0,
    'CURACTION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55fd8fa877d398_63691364',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fd8fa877d398_63691364')) {function content_55fd8fa877d398_63691364($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common_admin/left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form enctype="multipart/form-data" name="channel_add" method="post">
  
  <div class="table_main">
    <table class="tb tb2 nobdb">
      <tbody>
       
        <tr class="noborder">
          <td class="td_l">会员注册默认积分:</td>
          <td class="vtop rowform"><input class="txt" type="text" name="postdb[jf]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['jf'];?>
" /></td>
          <td class="vtop tips2">注册时会员账户默认获得的积分,填0则不获得积分</td>
        </tr>
        
          
        <tr class="noborder">
          <td class="td_l">完善资料获得积分:</td>
          <td class="vtop rowform"><input class="txt" type="text" name="postdb[user_info_jf]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['user_info_jf'];?>
" /></td>
          <td class="vtop tips2">第一次完善资料获得积分</td>
        </tr>
        
        
		 <tr class="noborder">
          <td class="td_l">分享宝贝积分:</td>
          <td class="vtop rowform"><input class="txt" type="text" name="postdb[share_goods]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['share_goods'];?>
" /></td>
          <td class="vtop tips2">分享站点宝贝可获得的</td>
        </tr>
        
         <tr class="noborder">
          <td class="td_l">分享宝贝天次数:</td>
          <td class="vtop rowform"><input class="txt" type="text" name="postdb[share_goods_num]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['share_goods_num'];?>
" /></td>
          <td class="vtop tips2">每人每天分享的宝贝,超过本数字则不再奖劢积分,防止作弊</td>
        </tr>
        
        
        
         <tr class="noborder">
          <td class="td_l">分享站点积分:</td>
          <td class="vtop rowform"><input class="txt" type="text" name="postdb[share_web]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['share_web'];?>
" /></td>
          <td class="vtop tips2">分享站点首页可获得的积分</td>
        </tr>
        
          
         <tr class="noborder">
          <td class="td_l">分享站点天次数:</td>
          <td class="vtop rowform"><input class="txt" type="text" name="postdb[share_web_num]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['share_web_num'];?>
" /></td>
          <td class="vtop tips2">在每天分享多少次以内,才会奖励积分,超过本数字则不再奖劢积分,防止作弊</td>
        </tr>
        

         <tr class="noborder">
          <td class="td_l">邀请积分:</td>
          <td class="vtop rowform"><input class="txt" type="text" name="postdb[yaoqing]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['yaoqing'];?>
" /></td>
          <td class="vtop tips2">邀请注册时增送的积分</td>
        </tr>
         <tr class="noborder">
          <td class="td_l">邀请天次数:</td>
          <td class="vtop rowform"><input class="txt" type="text" name="postdb[yaoqing_day]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['yaoqing_day'];?>
" /></td>
          <td class="vtop tips2">每人每天邀请注册会员,超过本数字则不再奖劢积分,防止作弊</td>
        </tr>

	 	 <tr class="noborder">
          <td class="td_l">邀请月次数:</td>
          <td class="vtop rowform"><input class="txt" type="text" name="postdb[yaoqing_num]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['yaoqing_num'];?>
" /></td>
          <td class="vtop tips2">每人每月邀请注册会员,超过本数字则不再奖劢积分,防止作弊</td>
        </tr>

      
	 	 <tr class="noborder">
          <td class="td_l">收藏/喜欢增加积分:</td>
          <td class="vtop rowform"><input class="txt" type="text" name="postdb[addfavorite_jf]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['addfavorite_jf'];?>
" /></td>
          <td class="vtop tips2">每收藏/喜欢一个商品增加多少个积分,0或空,则不增加</td>
        </tr>
        
  <tr class="noborder">
          <td class="td_l">收藏/喜欢天次数:</td>
          <td class="vtop rowform"><input class="txt" type="text" name="postdb[addfavorite_day]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['addfavorite_day'];?>
" /></td>
          <td class="vtop tips2">每人每天收藏/喜欢商品超过本数字则不再奖劢积分,防止作弊</td>
        </tr>

	 	 <tr class="noborder">
          <td class="td_l">收藏/喜欢月次数:</td>
          <td class="vtop rowform"><input class="txt" type="text" name="postdb[addfavorite_num]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['addfavorite_num'];?>
" /></td>
          <td class="vtop tips2">每人每月收藏/喜欢商品,超过本数字则不再奖劢积分,防止作弊</td>
        </tr>


        <tr>
          <td>&nbsp;</td>
          <td colspan="2"><div class="fixsel">
              <input type="submit" class="btn submit_btn"  name="onsubmit" value="提交">
            </div></td>
        </tr>
      </tbody>
    </table>
  </div>
<input type="hidden" name="m" value="<?php echo $_smarty_tpl->tpl_vars['CURMODULE']->value;?>
" />
<input type="hidden" name="a" value="<?php echo $_smarty_tpl->tpl_vars['CURACTION']->value;?>
" />
</form>
<?php echo $_smarty_tpl->getSubTemplate ('../common_admin/right_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
