<?php /* Smarty version Smarty-3.1.15, created on 2015-09-19 23:33:04
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\admin\admin\setting.php" */ ?>
<?php /*%%SmartyHeaderCode:2311955fd8030334bc1-46654782%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29366f34c1fd83ee3c5f6a039f837c6107f256af' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\admin\\admin\\setting.php',
      1 => 1442668069,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2311955fd8030334bc1-46654782',
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
  'unifunc' => 'content_55fd803055c607_89847517',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fd803055c607_89847517')) {function content_55fd803055c607_89847517($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common_admin/left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form enctype="multipart/form-data" name="channel_add" method="post">
  <div class="table_main">
    <table class="tb tb2 ">
      <tbody>

        <tr class="noborder" >
          <td class="td_l">站点名称:</td>
          <td class="vtop rowform"><input name="postdb[title]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['title'];?>
" type="text" class="txt"></td>
          <td class="vtop tips2" >站点名称，将显示在浏览器窗口标题等位置</td>
        </tr>
         <tr class="noborder" >
          <td class="td_l">站点网址:</td>
          <td class="vtop rowform"><input name="postdb[siteurl2]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['siteurl2'];?>
" type="text" class="txt"></td>
          <td class="vtop tips2" >以http://开头,结尾不要/,如:http://aimeizhuang.uz.taobao.com,在接口商品中会用到,必须和采集配置Appkey和siteKey对应同一个U站</td>
        </tr>
        

        <tr class="noborder" > 
        <td class="td_l">站点logo:</td>
          <td class="vtop rowform _hover_img">

<div class="upload_img" data-name="postdb[logo]">
<input name="postdb[logo]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['logo'];?>
" type="text" class="txt pic_upload" >
<?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['logo']) {?>
<a href=""  class="ajax_del" >删除</a>&nbsp;&nbsp;
<?php }?>
           </div>
<a href="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['logo'];?>
" target="_blank" ><img src="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['logo'];?>
"  /></a>
<input type="file" name="file" class="J_TCajaUploadImg upload_file_btn" data-url="/upload.php" />
          
          </td>
          <td class="vtop tips2" >站点logo,如果无法上传,请手动粘贴图片地址</td>
        </tr>
      
        <tr class="noborder" >
         <td class="td_l">客服QQ:</td>
          <td class="vtop rowform"><input name="postdb[qq]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['qq'];?>
" type="text" class="txt"></td>
          <td class="vtop tips2" >多个请用,分格开</td>
        </tr>

        <tr class="noborder" >
         <td class="td_l">管理员邮箱:</td>
          <td class="vtop rowform"><input name="postdb[admin_email]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['admin_email'];?>
" type="text" class="txt"></td>
          <td class="vtop tips2" >管理员 E-mail，将作为系统发邮件的时候的发件人地址</td>
        </tr>

        <tr class="noborder" >
        <td class="td_l">站点默认分享内容:</td>
          <td class="vtop rowform"><input name="postdb[share]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['share'];?>
" type="text" class="txt"></td>
          <td class="vtop tips2" >在分享的地方,默认显示的内容</td>
        </tr>

        <tr class="noborder" >
          <td class="td_l">网站版权信息:</td>
          <td class="vtop rowform"><textarea rows="6" name="postdb[copyright]" cols="70" class="tarea"><?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['copyright'];?>
</textarea></td>
          <td class="vtop tips2" >网站版权或介绍信息</td>
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
