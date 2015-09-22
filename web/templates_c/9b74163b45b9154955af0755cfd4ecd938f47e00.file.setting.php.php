<?php /* Smarty version Smarty-3.1.15, created on 2015-09-20 00:37:51
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\ttae\home\setting.php" */ ?>
<?php /*%%SmartyHeaderCode:3071955fd8f5f311965-13420415%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b74163b45b9154955af0755cfd4ecd938f47e00' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\ttae\\home\\setting.php',
      1 => 1420460155,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3071955fd8f5f311965-13420415',
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
  'unifunc' => 'content_55fd8f5f579007_03480742',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fd8f5f579007_03480742')) {function content_55fd8f5f579007_03480742($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("./home_header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<ul class="cl">
  <form method="post">
    <li class="uc_zlli2"><span>请完善以下用户信息，以便我们更好的为您提供服务。</span></li>
    <li class="uc_zlli1">
      <label>用 户 名：</label>
      ：
      
      <?php if ($_smarty_tpl->tpl_vars['_G']->value['member']['login_type']&&!$_smarty_tpl->tpl_vars['_G']->value['username']) {?>
      <input class="uinfo text"  name="postdb[username]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['member']['username'];?>
">
      <?php } else { ?>
      
      <?php echo $_smarty_tpl->tpl_vars['_G']->value['username'];?>

      
      <?php }?> <span style="margin-left:100px;">注册时间: <?php echo $_smarty_tpl->tpl_vars['_G']->value['member']['regdate'];?>
&nbsp;&nbsp;登录IP: <?php echo $_smarty_tpl->tpl_vars['_G']->value['member']['login_ip'];?>
</span> </li>
    <li class="uc_zlli1">
      <label>邮箱地址：</label>
      <input class="uinfo text"  name="postdb[email]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['member']['email'];?>
">
    <li class="uc_zlli3 _hover_img" style="position: relative;">
      <div class="cl">
        <label>头　　像：</label>
        <div class="upload_img" data-name="postdb[picurl]">
          <input name="postdb[picurl]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['member']['picurl'];?>
" type="text" class="txt pic_upload text" >
          图片大小建议尺寸为：160*160 </div>
      </div>
      <div class="cl">
        <label>&nbsp;</label>
        <a href="<?php echo $_smarty_tpl->tpl_vars['_G']->value['member']['picurl'];?>
" target="_blank" ><img src="<?php echo $_smarty_tpl->tpl_vars['_G']->value['member']['picurl'];?>
"  /></a>
        <input type="file" name="file" class="J_TCajaUploadImg upload_file_btn" data-url="/upload.php" />
      </div>
    </li>
    <li class="uc_zlli1">
      <label>收货人姓名：</label>
      <input class="uinfo uc_zlli1text text" name="postdb[name]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['member']['name'];?>
">
    </li>
    <li class="uc_zlli1">
      <label>旺　　旺：</label>
      <input class="uinfo uc_zlli1text text" name="postdb[wangwang]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['member']['wangwang'];?>
">
    </li>
    <li class="uc_zlli1">
      <label>q　　q：</label>
      <input class="uinfo uc_zlli1text text" name="postdb[qq]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['member']['qq'];?>
">
    </li>
    </li>
    <li class="uc_zlli1">
      <label>手　　机：</label>
      <input class="uinfo uc_zlli1text text" name="postdb[phone]"  type="text" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['member']['phone'];?>
">
      <h2></h2>
    </li>
    <li class="uc_zlli1">
      <label>收货地址：</label>
      <input class="uinfo uc_zlli1text text" name="postdb[address]"  type="text" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['member']['address'];?>
">
    </li>
    <li class="uc_zlli6">
      <label>个人简介：</label>
      <textarea class="uinfo text" name="postdb[content]"><?php echo $_smarty_tpl->tpl_vars['_G']->value['member']['content'];?>
</textarea>
    </li>
    <li class="uc_zlli4">
      <label></label>
      <input type="submit" class="seting_onsubmit u_submit"   name="onsubmit"value=" 保 存" />
    </li>
    <input type="hidden" name="m" value="<?php echo $_smarty_tpl->tpl_vars['CURMODULE']->value;?>
" />
    <input type="hidden" name="a" value="<?php echo $_smarty_tpl->tpl_vars['CURACTION']->value;?>
" />
  </form>
</ul>
<?php echo $_smarty_tpl->getSubTemplate ("./home_footer.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
