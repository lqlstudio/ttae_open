<?php /* Smarty version Smarty-3.1.15, created on 2015-09-21 22:51:39
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\admin\channel\post.php" */ ?>
<?php /*%%SmartyHeaderCode:1913655feca8e761049-22534016%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9bb0c72e08f657cc41cec001791e70fdf0fef41' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\admin\\channel\\post.php',
      1 => 1442763538,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1913655feca8e761049-22534016',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55feca8eab9b06_73336723',
  'variables' => 
  array (
    '_GET' => 0,
    'URL' => 0,
    'channel' => 0,
    '_G' => 0,
    'vv' => 0,
    'vvv' => 0,
    'a' => 0,
    'CURMODULE' => 0,
    'CURACTION' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55feca8eab9b06_73336723')) {function content_55feca8eab9b06_73336723($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common_admin/left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form enctype="multipart/form-data" method="post"  >

<!--<?php if ($_smarty_tpl->tpl_vars['_GET']->value['fid']) {?>--> 
<div class="table_top">
<a href="/index.php?m=channel&fid=<?php echo $_smarty_tpl->tpl_vars['_GET']->value['fid'];?>
" target="_blank">前台查看</a>&nbsp;&nbsp;
 <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=goods&a=post&fid=<?php echo $_smarty_tpl->tpl_vars['_GET']->value['fid'];?>
">发布商品</a> 
 </div>
<!--<?php }?>--> 
  <div class="table_main">
    <table class="tb tb2 nobdb">
      <tbody>        
        <tr class="noborder" >
          <td class="td_l">栏目名称:</td>
          <td class="vtop rowform"><input name="postdb[name]" value="<?php echo $_smarty_tpl->tpl_vars['channel']->value['name'];?>
" type="text" class="txt"></td>
          <td class="vtop tips2" >必填</td>
        </tr>
        <tr class="noborder" >
          <td class="td_l">栏目图片:</td>
          <td class="vtop rowform _hover_img">
<div class="upload_img" data-name="postdb[picurl]">
<input name="postdb[picurl]" value="<?php echo $_smarty_tpl->tpl_vars['channel']->value['picurl'];?>
" type="text" class="txt pic_upload" >
<?php if ($_smarty_tpl->tpl_vars['channel']->value['picurl']) {?>
<a href="/index.php?m=ajax&a=del_img&img_url=<?php echo $_smarty_tpl->tpl_vars['channel']->value['picurl'];?>
"  class="ajax_del" >删除</a>&nbsp;&nbsp;
<?php }?>
</div> 
<a href="<?php echo $_smarty_tpl->tpl_vars['channel']->value['picurl'];?>
" target="_blank" ><img src="<?php echo $_smarty_tpl->tpl_vars['channel']->value['picurl'];?>
"  /></a>
<input type="file" name="file" class="J_TCajaUploadImg upload_file_btn" data-url="/upload.php" />
          
          </td>
          <td class="vtop tips2" >可给当前栏目设置独立的banner,如果无法上传,请手动粘贴图片地址</td>
        </tr>
        
        <tr class="noborder" >
          <td class="td_l">图片链接</td>
          <td class="vtop rowform"><input name="postdb[url]" value="<?php echo $_smarty_tpl->tpl_vars['channel']->value['org_url'];?>
" type="text" class="txt"></td>
          <td class="vtop tips2" >如果填了栏目图片,可给它加个链接,如果没有图片,则无须添加</td>
        </tr>
        
        
        
        <tr class="noborder" >
          <td class="td_l">隐藏栏目:</td>
          <td class="vtop rowform"><ul>
              <li >
                <input class="radio" type="radio" name="postdb[hide]" value="1" <?php if ($_smarty_tpl->tpl_vars['channel']->value['hide']==1) {?> checked="checked"<?php }?> >
                &nbsp;是</li>
              <li>
                <input class="radio" type="radio" name="postdb[hide]" value="0" <?php if ($_smarty_tpl->tpl_vars['channel']->value['hide']==0) {?> checked="checked"<?php }?>>
                &nbsp;否</li>
            </ul></td>
          <td class="vtop tips2" >选择“不显示”将在前台导航和栏目列表页将栏目隐藏，但栏目内容仍将保留，且用户仍可通过直接提供带有 fid 的 URL 访问到此栏目</td>
        </tr>
        <tr class="noborder" >
          <td class="td_l">当前栏目class:</td>
          <td class="vtop rowform"><input name="postdb[classname]" value="<?php echo $_smarty_tpl->tpl_vars['channel']->value['classname'];?>
" type="text" class="txt"></td>
          <td class="vtop tips2" >一般不用填写</td>
        </tr>
        <tr class="noborder" >
          <td class="td_l">栏目排序:</td>
          <td class="vtop rowform"><input name="postdb[sort]" value="<?php echo $_smarty_tpl->tpl_vars['channel']->value['sort'];?>
" type="text" class="txt"></td>
          <td class="vtop tips2" >越小越靠前</td>
        </tr>
        <tr class="noborder" >
          <td class="td_l">上级栏目:</td>
          <td class="vtop rowform">
          
          <select name="postdb[fup]" class="select_fid">
           <option value="0" <?php if (0==$_smarty_tpl->tpl_vars['channel']->value['fup']) {?> selected="selected" class="on"  <?php }?>>----顶级栏目----</option>

<!--<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['channels']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?>-->
 <option value="<?php echo $_smarty_tpl->tpl_vars['vv']->value['fid'];?>
" <?php if ($_smarty_tpl->tpl_vars['channel']->value['fup']>0&&$_smarty_tpl->tpl_vars['channel']->value['fup']==$_smarty_tpl->tpl_vars['vv']->value['fid']) {?> selected="selected" class="on"  <?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['vv']->value['name'];?>
</option>
<!--<?php if ($_smarty_tpl->tpl_vars['vv']->value['sub']) {?>-->
      <!--<?php  $_smarty_tpl->tpl_vars['vvv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vvv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vv']->value['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vvv']->key => $_smarty_tpl->tpl_vars['vvv']->value) {
$_smarty_tpl->tpl_vars['vvv']->_loop = true;
?>-->
          <option value="<?php echo $_smarty_tpl->tpl_vars['vvv']->value['fid'];?>
" <?php if ($_smarty_tpl->tpl_vars['channel']->value['fup']>0&&$_smarty_tpl->tpl_vars['channel']->value['fup']==$_smarty_tpl->tpl_vars['vvv']->value['fid']) {?> selected="selected" class="on" <?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['vvv']->value['name'];?>
</option>
          <!--<?php if ($_smarty_tpl->tpl_vars['vvv']->value['sub']==3) {?>-->
           <!--<?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vvv']->value['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>-->
           <option value="<?php echo $_smarty_tpl->tpl_vars['a']->value['fid'];?>
" <?php if ($_smarty_tpl->tpl_vars['channel']->value['fup']>0&&$_smarty_tpl->tpl_vars['channel']->value['fup']==$_smarty_tpl->tpl_vars['a']->value['fid']) {?> selected="selected" class="on"  <?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['a']->value['name'];?>
</option>
          <!--<?php } ?>-->
          <!--<?php }?>-->  
      <!--<?php } ?>-->
<!--<?php }?>-->              
<!--<?php } ?>-->
            </select>
            
            </td>
          <td class="vtop tips2" >本栏目的上级栏目或分类</td>
        </tr>
        <tr class="noborder" >
          <td class="td_l">栏目模板:</td>
          <td class="vtop rowform"><input name="postdb[channel_tpl]" value="<?php echo $_smarty_tpl->tpl_vars['channel']->value['channel_tpl'];?>
" type="text" class="txt"></td>
          <td class="vtop tips2" >当前栏目使用的模板,如不填,默认使用channel.php(如要使用 当前模板目录下的/main.php,则只填main就行)</td>
        </tr>
        <tr class="noborder" >
          <td class="td_l">内容页模板:</td>
          <td class="vtop rowform"><input name="postdb[goods_tpl]" value="<?php echo $_smarty_tpl->tpl_vars['channel']->value['goods_tpl'];?>
" type="text" class="txt"></td>
          <td class="vtop tips2" >当前栏目的内容页使用的模板,如不填,默认使用goods.php</td>
        </tr>
        <tr class="noborder" >
          <td class="td_l">栏目分页大小:</td>
          <td class="vtop rowform"><input name="postdb[page]" value="<?php echo $_smarty_tpl->tpl_vars['channel']->value['page'];?>
" type="text" class="txt"></td>
          <td class="vtop tips2" >列表页分页大小,0或不填则默认为是全局设置中 商品默认显示条数</td>
        </tr>
        
        
        
         <tr class="noborder" >
          <td class="td_l">seo title:</td>
          <td class="vtop rowform">
          <input name="postdb[title]" value="<?php echo $_smarty_tpl->tpl_vars['channel']->value['title'];?>
" type="text" class="txt">
          </td>
          <td class="vtop tips2" >seo的标题,便于搜索引擎收录</td>
        </tr>
        
         <tr class="noborder" >
          <td class="td_l">seo keywords:</td>
          <td class="vtop rowform">
          <input name="postdb[keywords]" value="<?php echo $_smarty_tpl->tpl_vars['channel']->value['keywords'];?>
" type="text" class="txt _in_keywords">
          </td>
          <td class="vtop tips2" >seo的关键字,便于搜索引擎收录,多个用,分格开</td>
        </tr>
        <tr class="noborder" >
          <td class="td_l">seo description:</td>
          <td class="vtop rowform"><textarea rows="3"  name="postdb[description]"  cols="50" class="tarea"><?php echo $_smarty_tpl->tpl_vars['channel']->value['description'];?>
</textarea></td>
          <td class="vtop tips2" >seo的描述,便于搜索引擎收录,120字内</td>
        </tr>
        
        
         <tr class="noborder" >
        	 <td class="td_l">栏目内容:</td>
           <td class="vtop rowform" colspan="3">
<div class="kg_editorContainer"  data-config='{
"width":"900","height":"400"
        }'>
<textarea rows="6" name="postdb[content]" cols="70" class="ks-editor-textarea" id = "web_editor"><?php echo $_smarty_tpl->tpl_vars['channel']->value['content'];?>
</textarea></div>
           </td>
        </tr>
        <tr class="noborder" >
          <td colspan="3"><div class="fixsel">
          <?php if ($_smarty_tpl->tpl_vars['_GET']->value['fid']) {?>
                <input type="hidden" name="fid" value="<?php echo $_smarty_tpl->tpl_vars['_GET']->value['fid'];?>
" />
           <?php }?>
              <input type="submit" class="btn submit_btn"  name="onsubmit"  value="提交修改"></div></td>
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
