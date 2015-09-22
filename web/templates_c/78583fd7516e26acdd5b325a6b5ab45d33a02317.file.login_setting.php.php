<?php /* Smarty version Smarty-3.1.15, created on 2015-09-20 12:31:00
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\admin\admin\login_setting.php" */ ?>
<?php /*%%SmartyHeaderCode:2669255fe36840eecb5-96640232%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78583fd7516e26acdd5b325a6b5ab45d33a02317' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\admin\\admin\\login_setting.php',
      1 => 1441350032,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2669255fe36840eecb5-96640232',
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
  'unifunc' => 'content_55fe36842bfdf1_37569561',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fe36842bfdf1_37569561')) {function content_55fe36842bfdf1_37569561($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common_admin/left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form enctype="multipart/form-data" name="channel_add" method="post">
  
  <div class="table_main">
    <table class="tb tb2 nobdb">
      <tbody>
        <tr class="noborder">
          <td class="td_l">qq空间应用域名:</td>
          <td class="vtop rowform"><input class="txt" type="text" name="postdb[qq_zone_url]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['qq_zone_url'];?>
" /></td>
          <td class="vtop tips2">如果是做了QQ空间应用的话, 则需配置独立域名.没有则不用理会</td>
        </tr>
        <tr class="noborder">
          <td class="td_l">qq appid:</td>
          <td class="vtop rowform"><input class="txt" type="text" name="postdb[qq_appid]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['qq_appid'];?>
" /></td>
          <td class="vtop tips2">QQ登录必须要设置的,不填写则不开启QQ登录,开启前请确保你已在腾讯申请了QQ登录组件</td>
        </tr>
        
		 <tr class="noborder">
          <td class="td_l">qq appkey:</td>
          <td class="vtop rowform"><input class="txt" type="text" name="postdb[qq_appkey]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['qq_appkey'];?>
" /></td>
          <td class="vtop tips2">QQ登录必须要设置的</td>
        </tr>
        
         <tr class="noborder">
          <td class="td_l">新浪微博appkey:</td>
          <td class="vtop rowform"><input class="txt" type="text" name="postdb[weibo_appkey]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['weibo_appkey'];?>
" /></td>
          <td class="vtop tips2">新浪微博appkey,不填写则不开启微博登录,开启前请确保你已在新浪申请了新浪微博登录组件
          <p>授权回调页：<?php echo $_smarty_tpl->tpl_vars['_G']->value['siteurl'];?>
/index.php?m=member&a=weibo_login</p>
          </td>
        </tr>
        
         <tr class="noborder">
          <td class="td_l">新浪微博appsecret:</td>
          <td class="vtop rowform"><input class="txt" type="text" name="postdb[weibo_appsecret]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['weibo_appsecret'];?>
" /></td>
          <td class="vtop tips2">新浪微博appsecret
<p>取消授权回调页：<?php echo $_smarty_tpl->tpl_vars['_G']->value['siteurl'];?>
/index.php?m=member&a=login</p>
          </td>
        </tr>
        
        
        
        <tr class="noborder">
          <td class="td_l">淘宝appkey:</td>
          <td class="vtop rowform"><input class="txt" type="text" name="postdb[taobao_appkey]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['taobao_appkey'];?>
" /></td>
          <td class="vtop tips2">淘宝appkey,不填写则不开启淘宝登录,开启前请确保你已在淘宝申请了网页登录接口</td>
        </tr>
        
         <tr class="noborder">
          <td class="td_l">淘宝appsecret:</td>
          <td class="vtop rowform"><input class="txt" type="text" name="postdb[taobao_appsecret]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['taobao_appsecret'];?>
" /></td>
          <td class="vtop tips2">淘宝appsecret</td>
        </tr>
        
       
       <tr class="noborder">
          <td class="td_l">微信appkey:</td>
          <td class="vtop rowform"><input class="txt" type="text" name="postdb[weixin_appkey]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['weixin_appkey'];?>
" /></td>
          <td class="vtop tips2">微信appkey,不填写则不开启,开启前请确保你已申请了网页登录接口</td>
        </tr>
        
         <tr class="noborder">
          <td class="td_l">微信appsecret:</td>
          <td class="vtop rowform"><input class="txt" type="text" name="postdb[weixin_appsecret]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['weixin_appsecret'];?>
" /></td>
          <td class="vtop tips2">微信appsecret</td>
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
