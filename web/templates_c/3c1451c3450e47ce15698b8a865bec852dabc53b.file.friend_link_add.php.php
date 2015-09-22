<?php /* Smarty version Smarty-3.1.15, created on 2015-09-20 10:58:16
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\admin\module\friend_link_add.php" */ ?>
<?php /*%%SmartyHeaderCode:1134155fe20c81ed0f0-63197300%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c1451c3450e47ce15698b8a865bec852dabc53b' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\admin\\module\\friend_link_add.php',
      1 => 1441350033,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1134155fe20c81ed0f0-63197300',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'friend_link' => 0,
    '_GET' => 0,
    'CURMODULE' => 0,
    'CURACTION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55fe20c8414f67_23436176',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fe20c8414f67_23436176')) {function content_55fe20c8414f67_23436176($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common_admin/left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form enctype="multipart/form-data" method="post" >
  
  <div class="table_main">
    <table class="tb tb2 nobdb">
      <tbody>
        <tr class="noborder">
          <td class="td_l">网站名称:</td>
          <td class="vtop rowform"><input name="postdb[name]" value="<?php echo $_smarty_tpl->tpl_vars['friend_link']->value['name'];?>
" type="text" class="txt"></td>
          <td class="vtop tips2">请输入网站名称</td>
        </tr>
        <tr class="noborder">
          <td class="td_l">网站地址:</td>
          <td class="vtop rowform"><input name="postdb[url]" value="<?php echo $_smarty_tpl->tpl_vars['friend_link']->value['url'];?>
" type="text" class="txt"></td>
          <td class="vtop tips2">目标网站地址,必须加http://完整的地址</td>
        </tr>
        <tr class="noborder">
          <td class="td_l">排序:</td>
          <td class="vtop rowform"><input name="postdb[sort]" value="<?php echo $_smarty_tpl->tpl_vars['friend_link']->value['sort'];?>
" type="text" class="txt w90"></td>
          <td class="vtop tips2">越大越靠前</td>
        </tr>

        
        <tr class="noborder">
          <td class="td_l">隐藏:</td>
          <td class="vtop rowform">
			<ul>
            <li >
              <input class="radio" type="radio" name="postdb[hide]" value="1" <?php if ($_smarty_tpl->tpl_vars['friend_link']->value['hide']==1) {?>checked="checked"<?php }?>>
              &nbsp;是</li>
            <li>
              <input class="radio" type="radio" name="postdb[hide]" value="0" <?php if ($_smarty_tpl->tpl_vars['friend_link']->value['hide']==0) {?>checked="checked"<?php }?>>
              &nbsp;否</li>
          </ul>
          
          </td>
          <td class="vtop tips2">选中的话,前台则不显示</td>
        </tr>
        
        
        <tr class="noborder">
          <td class="td_l">图片链接:</td>
          <td class="vtop rowform _hover_img">
<div class="upload_img" data-name="postdb[picurl]">
<input name="postdb[picurl]" value="<?php echo $_smarty_tpl->tpl_vars['friend_link']->value['picurl'];?>
" type="text" class="txt pic_upload" >
<?php if ($_smarty_tpl->tpl_vars['friend_link']->value['picurl']) {?>
<a href=""  class="ajax_del" >删除</a>&nbsp;&nbsp;

<?php }?>
</div>
<a href="<?php echo $_smarty_tpl->tpl_vars['friend_link']->value['picurl'];?>
" target="_blank" ><img src="<?php echo $_smarty_tpl->tpl_vars['friend_link']->value['picurl'];?>
"  /></a>
<input type="file" name="file" class="J_TCajaUploadImg upload_file_btn" data-url="/upload.php" />
          
          </td>
          <td class="vtop tips2">有图片则为图片链,无图片则为文字链</td>
        </tr>
        <tr class="noborder">
          <td class="td_l">其它信息:</td>
          <td class="vtop rowform"><textarea rows="6" name="postdb[content]" cols="70" class="tarea"><?php echo $_smarty_tpl->tpl_vars['friend_link']->value['content'];?>
</textarea></td>
          <td class="vtop tips2">可填入联系方式或其它介绍信息</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td colspan="2"><div class="fixsel"> 
              <!--<?php if ($_smarty_tpl->tpl_vars['_GET']->value['id']) {?>-->
              <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['_GET']->value['id'];?>
" />
              <!--<?php }?>-->
              <input type="submit" class="btn submit_btn" name="onsubmit" value="提交">
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
