<?php /* Smarty version Smarty-3.1.15, created on 2015-09-21 00:30:26
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\admin\article\post.php" */ ?>
<?php /*%%SmartyHeaderCode:203855fedf2221ec50-22106368%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9bb0ec0a341dbbaeaa67d43fdd7622646225be2' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\admin\\article\\post.php',
      1 => 1441350033,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203855fedf2221ec50-22106368',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'article' => 0,
    '_GET' => 0,
    '_G' => 0,
    'vv' => 0,
    'vvv' => 0,
    'a' => 0,
    'CURMODULE' => 0,
    'CURACTION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55fedf22546c07_87138388',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fedf22546c07_87138388')) {function content_55fedf22546c07_87138388($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common_admin/left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form enctype="multipart/form-data" method="post">
  
  <div class="table_main">
    <table class="tb tb2 nobdb">
      <tbody>
        <tr class="noborder" >
          <td class="td_l">标题:</td>
          <td class="vtop rowform"><input name="postdb[title]" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
" type="text" class="txt _keywords"></td>
          <td class="vtop tips2" >必填 <?php if ($_smarty_tpl->tpl_vars['_GET']->value['id']) {?> <a href="/index.php?m=article&id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
" target="_blank">前台查看当前文章</a> <?php }?></td>
        </tr>
        
        <tr class="noborder" >
        <td class="td_l">文章标签:</td>
        <td class="vtop rowform"><select name="postdb[cate]" class="select_fid"> 
 <option value="0">----请选择分类----</option>
<!--<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['article_cate']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?>-->
 <option value="<?php echo $_smarty_tpl->tpl_vars['vv']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['article']->value['cate']==$_smarty_tpl->tpl_vars['vv']->value['id']||$_smarty_tpl->tpl_vars['_GET']->value['cate']==$_smarty_tpl->tpl_vars['vv']->value['id']) {?> selected="selected" class="on"  <?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['vv']->value['name'];?>
</option>
<!--<?php if ($_smarty_tpl->tpl_vars['vv']->value['sub']) {?>-->
      <!--<?php  $_smarty_tpl->tpl_vars['vvv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vvv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vv']->value['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vvv']->key => $_smarty_tpl->tpl_vars['vvv']->value) {
$_smarty_tpl->tpl_vars['vvv']->_loop = true;
?>-->
       <option value="<?php echo $_smarty_tpl->tpl_vars['vvv']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['article']->value['cate']==$_smarty_tpl->tpl_vars['vvv']->value['id']||$_smarty_tpl->tpl_vars['_GET']->value['cate']==$_smarty_tpl->tpl_vars['vvv']->value['id']) {?> selected="selected" class="on" <?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['vvv']->value['name'];?>
</option>
          <!--<?php if ($_smarty_tpl->tpl_vars['vvv']->value['sub']) {?>-->
           <!--<?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vvv']->value['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>-->
           <option value="<?php echo $_smarty_tpl->tpl_vars['a']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['article']->value['cate']==$_smarty_tpl->tpl_vars['a']->value['id']||$_smarty_tpl->tpl_vars['_GET']->value['cate']==$_smarty_tpl->tpl_vars['a']->value['id']) {?> selected="selected" class="on"  <?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['a']->value['name'];?>
</option>
          <!--<?php } ?>-->
          <!--<?php }?>-->  
      <!--<?php } ?>-->
<!--<?php }?>-->              
<!--<?php } ?>-->
</select></td>
       <td class="vtop tips2" >文章标签,可给文章分组或做分类标记,可在全局设置里添加修改</td>
      </tr>
      
      
        
        <tr class="noborder" >
          <td class="td_l">缩略图:</td>
          <td class="vtop rowform _hover_img">
          
<div class="upload_img" data-name="postdb[picurl]">
<input name="postdb[picurl]" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['picurl'];?>
" type="text" class="txt pic_upload" >
<?php if ($_smarty_tpl->tpl_vars['article']->value['picurl']) {?>
<a href=""  class="ajax_del" >删除</a>&nbsp;&nbsp;
<?php }?>
</div>
<a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['picurl'];?>
" target="_blank" ><img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['picurl'];?>
"  /></a>

<input type="file" name="file" class="J_TCajaUploadImg upload_file_btn" data-url="/upload.php" />
          </td>
          <td class="vtop tips2" >可给当前设置独立的缩略图</td>
        </tr>
        <tr class="noborder" >
          <td class="td_l">隐藏:</td>
          <td class="vtop rowform"><ul>
              <li >
                <input class="radio" type="radio" name="postdb[hide]" value="1" <?php if ($_smarty_tpl->tpl_vars['article']->value['hide']==1) {?> checked="checked"<?php }?> >
                &nbsp;是</li>
              <li>
                <input class="radio" type="radio" name="postdb[hide]" value="0" <?php if ($_smarty_tpl->tpl_vars['article']->value['hide']==0) {?> checked="checked"<?php }?>>
                &nbsp;否</li>
            </ul></td>
          <td class="vtop tips2" >在前台调用时“不显示”,但用户通过ID访问则可直接打开</td>
        </tr>
        <tr class="noborder" >
          <td class="td_l">文章排序:</td>
          <td class="vtop rowform"><input name="postdb[sort]" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['sort'];?>
" type="text" class="txt w90"></td>
          <td class="vtop tips2" >越大越靠前</td>
        </tr>
       <tr class="noborder" >
          <td class="td_l">浏览量:</td>
          <td class="vtop rowform"><input name="postdb[views]" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['views'];?>
" type="text" class="txt w90"></td>
          <td class="vtop tips2" >浏览量,可空</td>
        </tr>
        
           <tr class="noborder" >
          <td class="td_l">文章模板:</td>
          <td class="vtop rowform"><input name="postdb[tpl]" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['tpl'];?>
" type="text" class="txt"></td>
          <td class="vtop tips2" >可空.当前文章独立使用的模板,可不填</td>
        </tr>
        
         <tr class="noborder" >
          <td class="td_l">跳转url:</td>
          <td class="vtop rowform"><input name="postdb[url]" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['url'];?>
" type="text" class="txt"></td>
          <td class="vtop tips2" >可空.可填写当前文章跳转的链接地址,如跳转到帮派或淘宝论坛等地址..</td>
        </tr>
          <tr class="noborder" >
          <td class="td_l">SEO关键字:</td>
          <td class="vtop rowform"><input name="postdb[keywords]" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['keywords'];?>
" type="text" class="txt _in_keywords"></td>
          <td class="vtop tips2" >可空.SEO优化才会用到,多少个,格开.在U站内一般用不到,站外才会用到</td>
        </tr>
        
        <tr class="noborder" >
          <td class="td_l">SEO描述:</td>
          <td class="vtop rowform">
           <textarea rows="3" name="postdb[description]" cols="50" class="textarea"><?php echo $_smarty_tpl->tpl_vars['article']->value['description'];?>
</textarea>
          </td>
          <td class="vtop tips2" >可空.SEO描述,200字内,不填或空则会默认截取文章内容前200字.在U站内一般用不到,站外才会用到</td>
        </tr>
       
        
        
        <tr class="noborder" >
          <td class="td_l">文章内容:</td>
          <td class="vtop rowform" colspan="3"><div class="kg_editorContainer"  data-config='{
          "width":"1100","height":"500"
        }'>
              <textarea rows="6" name="postdb[message]" cols="70" class="ks-editor-textarea _keywords" id = "web_editor" ><?php echo $_smarty_tpl->tpl_vars['article']->value['message'];?>
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
