<?php /* Smarty version Smarty-3.1.15, created on 2015-09-21 00:30:05
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\admin\pics\post.php" */ ?>
<?php /*%%SmartyHeaderCode:262855fedf0df2dbb0-67987495%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7db0773c1a036dba776a74cd27e5d3a8b1c944e2' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\admin\\pics\\post.php',
      1 => 1441350033,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '262855fedf0df2dbb0-67987495',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pics' => 0,
    '_G' => 0,
    'v' => 0,
    '_GET' => 0,
    'CURMODULE' => 0,
    'CURACTION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55fedf0e281434_99509560',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fedf0e281434_99509560')) {function content_55fedf0e281434_99509560($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common_admin/left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form enctype="multipart/form-data" method="post" >
  
  <div class="table_main">
    <table class="tb tb2 nobdb">
      <tbody>
        <tr class="noborder">
          <td class="td_l">标题:</td>
          <td class="vtop rowform"><input name="postdb[title]" value="<?php echo $_smarty_tpl->tpl_vars['pics']->value['title'];?>
" type="text" class="txt"></td>
          <td class="vtop tips2">显示标题,可不填</td>
        </tr>
        
		 <tr class="noborder">
          <td class="td_l">所属分类:</td>
          <td class="vtop rowform">
          <select name="postdb[fup]">
            <!--<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['pics_type']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>--> 
         <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['pics']->value['fup']&&$_smarty_tpl->tpl_vars['pics']->value['fup']==$_smarty_tpl->tpl_vars['v']->value['id']) {?> selected="selected" <?php }?> ><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
          <!--<?php } ?>-->
          </select> 
          </td>
          <td class="vtop tips2">所属分类</td>
        </tr>

        <tr class="noborder">
          <td class="td_l">排序:</td>
          <td class="vtop rowform"><input name="postdb[sort]" value="<?php echo $_smarty_tpl->tpl_vars['pics']->value['sort'];?>
" type="text" class="txt w90"></td>
          <td class="vtop tips2">越大越靠前</td>
        </tr>

        
        
        <tr class="noborder">
          <td class="td_l">隐藏:</td>
          <td class="vtop rowform">
			<ul>
            <li >
              <input class="radio" type="radio" name="postdb[hide]" value="1" <?php if ($_smarty_tpl->tpl_vars['pics']->value['hide']==1) {?>checked="checked"<?php }?>>
              &nbsp;是</li>
            <li>
              <input class="radio" type="radio" name="postdb[hide]" value="0" <?php if ($_smarty_tpl->tpl_vars['pics']->value['hide']==0) {?>checked="checked"<?php }?>>
              &nbsp;否</li>
          </ul>
          
          </td>
          <td class="vtop tips2">选中的话,前台则不显示</td>
        </tr>
        
        
        <tr class="noborder">
          <td class="td_l">图片地址:</td>
          <td class="vtop rowform _hover_img">
          
<div class="upload_img" data-name="postdb[picurl]">
<input name="postdb[picurl]" value="<?php echo $_smarty_tpl->tpl_vars['pics']->value['picurl'];?>
" type="text" class="txt pic_upload" >
<?php if ($_smarty_tpl->tpl_vars['pics']->value['picurl']) {?>
<a href=""  class="ajax_del" >删除</a>&nbsp;&nbsp;
<?php }?>
</div>
<a href="<?php echo $_smarty_tpl->tpl_vars['pics']->value['picurl'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['pics']->value['picurl'];?>
"  /></a>

<input type="file" name="file" class="J_TCajaUploadImg upload_file_btn" data-url="/upload.php" /></td>

          <td class="vtop tips2">幻灯片的图片地址</td>
        </tr>
		 <tr class="noborder">
          <td class="td_l">链接地址:</td>
          <td class="vtop rowform"><input name="postdb[url]" value="<?php echo $_smarty_tpl->tpl_vars['pics']->value['url'];?>
" type="text" class="txt"></td>
          <td class="vtop tips2">图片链接跳转地址</td>
        </tr>
        
        
        <tr class="noborder">
        <td class="td_l">描述内容:</td>
        <td class="vtop rowform">
     <!--   <div class="kg_editorContainer"  data-config='{
        "width":"900"
        }'>-->
        
        <textarea rows="4" name="postdb[content]" cols="50" > <?php echo $_smarty_tpl->tpl_vars['pics']->value['content'];?>
</textarea>
        <!--</div>-->
        
        </td>
        <td class="vtop tips2"></td>
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
