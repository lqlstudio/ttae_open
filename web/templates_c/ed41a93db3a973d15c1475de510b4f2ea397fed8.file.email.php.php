<?php /* Smarty version Smarty-3.1.15, created on 2015-09-20 22:00:44
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\admin\admin\email.php" */ ?>
<?php /*%%SmartyHeaderCode:514455febc0c7d04e7-81715158%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed41a93db3a973d15c1475de510b4f2ea397fed8' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\admin\\admin\\email.php',
      1 => 1441350032,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '514455febc0c7d04e7-81715158',
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
  'unifunc' => 'content_55febc0c9e06a4_26860806',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55febc0c9e06a4_26860806')) {function content_55febc0c9e06a4_26860806($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common_admin/left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form enctype="multipart/form-data" name="channel_add" method="post">
  
  <div class="table_main">
    <table class="tb tb2 nobdb">
      <tbody>
      
        <tr class="noborder">
          <td class="td_l">是否开启邮件发送功能:</td>
          <td class="vtop rowform"><input class="radio" type="radio" name="postdb[status]" value="1" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['email']['status']==1) {?>checked="checked"<?php }?>>
            &nbsp;是
            <input class="radio" type="radio" name="postdb[status]" value="0" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['email']['status']==0) {?>checked="checked"<?php }?>>
            &nbsp;否 </td>
          <td class="vtop tips2">是否开启邮件发送功能</td>
        </tr>
      
      <tr class="noborder" >
          <td class="td_l">SMTP 服务器:</td>
          <td class="vtop rowform">
          <input name="postdb[smtp]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['email']['smtp'];?>
" type="text" class="txt">
          </td>
          <td class="vtop tips2" >如果是qq邮箱，则填smtp.qq.com，其它类似</td>
        </tr>
        
 		<tr class="noborder" >
          <td class="td_l">发件人邮箱地址:</td>
          <td class="vtop rowform">
          <input name="postdb[address]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['email']['address'];?>
" type="text" class="txt">
          </td>
          <td class="vtop tips2" >发件人的完整地址，如：123456789@qq.com</td>
        </tr>
        <tr class="noborder" >
          <td class="td_l">发件人邮箱密码:</td>
          <td class="vtop rowform"> <input name="postdb[password]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['email']['password'];?>
" type="password" class="txt"></td>
          <td class="vtop tips2" >如果是QQ邮箱则一般是QQ登录密码，如果不正确请自己尝试登录邮箱确认密码后再填写</td>
        </tr>

		<tr class="noborder" >
          <td class="td_l">端口:</td>
          <td class="vtop rowform"> <input name="postdb[port]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['email']['port'];?>
" type="text" class="txt w90"></td>
          <td class="vtop tips2" >一般是25</td>
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
