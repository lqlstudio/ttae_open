<?php /* Smarty version Smarty-3.1.15, created on 2015-09-19 23:13:14
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\admin\img\post.php" */ ?>
<?php /*%%SmartyHeaderCode:3043755fd7b8ae6b448-75190642%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c5b219a1d257ed5ddb028915be58822df333bde' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\admin\\img\\post.php',
      1 => 1441609959,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3043755fd7b8ae6b448-75190642',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'img' => 0,
    '_GET' => 0,
    'CURMODULE' => 0,
    'CURACTION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55fd7b8b20b901_68201621',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fd7b8b20b901_68201621')) {function content_55fd7b8b20b901_68201621($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common_admin/left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form enctype="multipart/form-data" method="post">
  
  <div class="table_main">
    <table class="tb tb2 nobdb">
      <tbody>
        <tr class="noborder" >
          <td class="td_l">标题:</td>
          <td class="vtop rowform"><input name="postdb[title]" value="<?php echo $_smarty_tpl->tpl_vars['img']->value['title'];?>
" type="text" class="txt _keywords"></td>
          <td class="vtop tips2" >必填 <?php if ($_smarty_tpl->tpl_vars['_GET']->value['id']) {?> <a href="/index.php?m=img&id=<?php echo $_smarty_tpl->tpl_vars['img']->value['id'];?>
" target="_blank">前台查看当前值得买</a> <?php }?></td>
        </tr>
        
        
        <tr class="noborder" >
          <td class="td_l">缩略图:</td>
          <td class="vtop rowform _hover_img">
          
<div class="upload_img" data-name="postdb[picurl]">
<input name="postdb[picurl]" value="<?php echo $_smarty_tpl->tpl_vars['img']->value['picurl'];?>
" type="text" class="txt pic_upload" >
<?php if ($_smarty_tpl->tpl_vars['img']->value['picurl']) {?>
<a href=""  class="ajax_del" >删除</a>&nbsp;&nbsp;
<?php }?>
</div>
<a href="<?php echo $_smarty_tpl->tpl_vars['img']->value['picurl'];?>
" target="_blank" ><img src="<?php echo $_smarty_tpl->tpl_vars['img']->value['picurl'];?>
"  /></a>

<input type="file" name="file" class="J_TCajaUploadImg upload_file_btn" data-url="/upload.php" />
          </td>
          <td class="vtop tips2" >可给当前设置独立的缩略图</td>
        </tr>
        <tr class="noborder" >
          <td class="td_l">隐藏:</td>
          <td class="vtop rowform"><ul>
              <li >
                <input class="radio" type="radio" name="postdb[hide]" value="1" <?php if ($_smarty_tpl->tpl_vars['img']->value['hide']==1) {?> checked="checked"<?php }?> >
                &nbsp;是</li>
              <li>
                <input class="radio" type="radio" name="postdb[hide]" value="0" <?php if ($_smarty_tpl->tpl_vars['img']->value['hide']==0) {?> checked="checked"<?php }?>>
                &nbsp;否</li>
            </ul></td>
          <td class="vtop tips2" >在前台调用时“不显示”,但用户通过ID访问则可直接打开</td>
        </tr>
        <tr class="noborder" >
          <td class="td_l">排序:</td>
          <td class="vtop rowform"><input name="postdb[sort]" value="<?php echo $_smarty_tpl->tpl_vars['img']->value['sort'];?>
" type="text" class="txt w90"></td>
          <td class="vtop tips2" >越大越靠前</td>
        </tr>
       <tr class="noborder" >
          <td class="td_l">喜欢/踩:</td>
          <td class="vtop rowform"><input name="postdb[like]" value="<?php echo $_smarty_tpl->tpl_vars['img']->value['like'];?>
" type="text" class="txt w90">
          &nbsp;&nbsp;
          <input name="postdb[hate]" value="<?php echo $_smarty_tpl->tpl_vars['img']->value['hate'];?>
" type="text" class="txt w90">
          </td>
          <td class="vtop tips2" >喜欢/踩</td>
        </tr>
        
           
        
         <tr class="noborder" >
          <td class="td_l">跳转url:</td>
          <td class="vtop rowform"><input name="postdb[url]" value="<?php echo $_smarty_tpl->tpl_vars['img']->value['url'];?>
" type="text" class="txt"></td>
          <td class="vtop tips2" >可空.可填写当前值得买跳转的链接地址,如跳转到帮派或淘宝论坛等地址..</td>
        </tr>
        
        <tr class="noborder" >
          <td class="td_l">来源站点名称:</td>
          <td class="vtop rowform"><input name="postdb[from_name]" value="<?php echo $_smarty_tpl->tpl_vars['img']->value['from_name'];?>
" type="text" class="txt"></td>
          <td class="vtop tips2" >可空.来源站点名称</td>
        </tr>
        
        <tr class="noborder" >
          <td class="td_l">来源页面:</td>
          <td class="vtop rowform"><input name="postdb[from_url]" value="<?php echo $_smarty_tpl->tpl_vars['img']->value['from_url'];?>
" type="text" class="txt"></td>
          <td class="vtop tips2" >可空.来源页面</td>
        </tr>
        
          <tr class="noborder" >
          <td class="td_l">SEO关键字:</td>
          <td class="vtop rowform"><input name="postdb[keywords]" value="<?php echo $_smarty_tpl->tpl_vars['img']->value['keywords'];?>
" type="text" class="txt _in_keywords"></td>
          <td class="vtop tips2" >可空.SEO优化才会用到,多少个,格开.在U站内一般用不到,站外才会用到</td>
        </tr>
        
        <tr class="noborder" >
          <td class="td_l">SEO描述:</td>
          <td class="vtop rowform">
           <textarea rows="3" name="postdb[description]" cols="50" class="textarea"><?php echo $_smarty_tpl->tpl_vars['img']->value['description'];?>
</textarea>
          </td>
          <td class="vtop tips2" >可空.SEO描述,200字内,不填或空则会默认截取值得买内容前200字.在U站内一般用不到,站外才会用到</td>
        </tr>
       
        
        
        <tr class="noborder" >
          <td class="td_l">内容:</td>
          <td class="vtop rowform" colspan="3"><div class="kg_editorContainer"  data-config='{
          "width":"1100","height":"500"
        }'>
              <textarea rows="6" name="postdb[message]" cols="70" class="ks-editor-textarea _keywords" id = "web_editor" ><?php echo $_smarty_tpl->tpl_vars['img']->value['message'];?>
</textarea>
            </div>
            
            </td>
        </tr>
        <tr class="noborder" >
        <td class="td_l">&nbsp;</td>
          <td class="vtop rowform" colspan="3"><div class="fixsel"> <?php if ($_smarty_tpl->tpl_vars['_GET']->value['id']) {?>
              <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['_GET']->value['id'];?>
" />
              <?php }?>
              <input type="submit" class="btn submit_btn"  name="onsubmit"  value="提交修改">
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
