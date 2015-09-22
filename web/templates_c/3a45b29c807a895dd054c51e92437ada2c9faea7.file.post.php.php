<?php /* Smarty version Smarty-3.1.15, created on 2015-09-20 12:22:46
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\admin\cate\post.php" */ ?>
<?php /*%%SmartyHeaderCode:1786955fe3496bcf314-00288689%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a45b29c807a895dd054c51e92437ada2c9faea7' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\admin\\cate\\post.php',
      1 => 1441350033,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1786955fe3496bcf314-00288689',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_GET' => 0,
    'URL' => 0,
    'cate' => 0,
    'CURMODULE' => 0,
    'CURACTION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55fe3496e4ebf6_82236397',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fe3496e4ebf6_82236397')) {function content_55fe3496e4ebf6_82236397($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common_admin/left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form enctype="multipart/form-data" method="post"  >

<!--<?php if ($_smarty_tpl->tpl_vars['_GET']->value['id']) {?>--> 
<div class="table_top">
<a href="/index.php?m=cate&id=<?php echo $_smarty_tpl->tpl_vars['_GET']->value['id'];?>
" target="_blank">前台查看</a>&nbsp;&nbsp;
 <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=goods&a=post&id=<?php echo $_smarty_tpl->tpl_vars['_GET']->value['id'];?>
">发布商品</a> 
 </div>
<!--<?php }?>--> 
  <div class="table_main">
    <table class="tb tb2 nobdb">
      <tbody>        
        <tr class="noborder" >
          <td class="td_l">分类名称:</td>
          <td class="vtop rowform"><input name="postdb[name]" value="<?php echo $_smarty_tpl->tpl_vars['cate']->value['name'];?>
" type="text" class="txt"></td>
          <td class="vtop tips2" >必填</td>
        </tr>
        <tr class="noborder" >
          <td class="td_l">分类图片:</td>
          <td class="vtop rowform _hover_img">
<div class="upload_img" data-name="postdb[picurl]">
<input name="postdb[picurl]" value="<?php echo $_smarty_tpl->tpl_vars['cate']->value['picurl'];?>
" type="text" class="txt pic_upload" >
<?php if ($_smarty_tpl->tpl_vars['cate']->value['picurl']) {?>
<a class="ajax_del" >删除</a>&nbsp;&nbsp;
<?php }?>
</div> 
<a href="<?php echo $_smarty_tpl->tpl_vars['cate']->value['picurl'];?>
" target="_blank" ><img src="<?php echo $_smarty_tpl->tpl_vars['cate']->value['picurl'];?>
"  /></a>
<input type="file" name="file" class="J_TCajaUploadImg upload_file_btn" data-url="/upload.php" />
          
          </td>
          <td class="vtop tips2" >可给当前分类设置独立的banner</td>
        </tr>
        
        <tr class="noborder" >
          <td class="td_l">图片链接</td>
          <td class="vtop rowform"><input name="postdb[pic_url]" value="<?php echo $_smarty_tpl->tpl_vars['cate']->value['pic_url'];?>
" type="text" class="txt"></td>
          <td class="vtop tips2" >如果填了分类图片,可给它加个链接,如果没有图片,则无须添加</td>
        </tr>
        
         <tr class="noborder" >
          <td class="td_l">跳转地址</td>
          <td class="vtop rowform"><input name="postdb[url]" value="<?php echo $_smarty_tpl->tpl_vars['cate']->value['url'];?>
" type="text" class="txt"></td>
          <td class="vtop tips2" >可空</td>
        </tr>
        
        
        <tr class="noborder" >
          <td class="td_l">隐藏分类:</td>
          <td class="vtop rowform"><ul>
              <li >
                <input class="radio" type="radio" name="postdb[hide]" value="1" <?php if ($_smarty_tpl->tpl_vars['cate']->value['hide']==1) {?> checked="checked"<?php }?> >
                &nbsp;是</li>
              <li>
                <input class="radio" type="radio" name="postdb[hide]" value="0" <?php if ($_smarty_tpl->tpl_vars['cate']->value['hide']==0) {?> checked="checked"<?php }?>>
                &nbsp;否</li>
            </ul></td>
          <td class="vtop tips2" >隐藏后只有后台可见</td>
        </tr>

        <tr class="noborder" >
          <td class="td_l">分类排序:</td>
          <td class="vtop rowform"><input name="postdb[sort]" value="<?php echo $_smarty_tpl->tpl_vars['cate']->value['sort'];?>
" type="text" class="txt"></td>
          <td class="vtop tips2" >越大越靠前</td>
        </tr>
        
        <tr class="noborder" >
          <td class="td_l">分类模板:</td>
          <td class="vtop rowform"><input name="postdb[tpl]" value="<?php echo $_smarty_tpl->tpl_vars['cate']->value['tpl'];?>
" type="text" class="txt"></td>
          <td class="vtop tips2" >当前分类使用的模板,如不填,默认使用cate.php(如要使用 当前模板目录下的/main.php,则只填main就行)</td>
        </tr>

        <tr class="noborder" >
          <td class="td_l">分类分页大小:</td>
          <td class="vtop rowform"><input name="postdb[page]" value="<?php echo $_smarty_tpl->tpl_vars['cate']->value['page'];?>
" type="text" class="txt"></td>
          <td class="vtop tips2" >列表页分页大小,默认为20条</td>
        </tr>
         <tr class="noborder" >
          <td class="td_l">seo title:</td>
          <td class="vtop rowform">
          <input name="postdb[title]" value="<?php echo $_smarty_tpl->tpl_vars['cate']->value['title'];?>
" type="text" class="txt">
          </td>
          <td class="vtop tips2" >seo的标题,便于搜索引擎收录</td>
        </tr>
        
         <tr class="noborder" >
          <td class="td_l">seo keywords:</td>
          <td class="vtop rowform">
          <input name="postdb[keywords]" value="<?php echo $_smarty_tpl->tpl_vars['cate']->value['keywords'];?>
" type="text" class="txt _in_keywords">
          </td>
          <td class="vtop tips2" >seo的关键字,便于搜索引擎收录,多个用,分格开</td>
        </tr>
        <tr class="noborder" >
          <td class="td_l">seo description:</td>
          <td class="vtop rowform"><textarea rows="3"  name="postdb[description]"  cols="50" class="tarea"><?php echo $_smarty_tpl->tpl_vars['cate']->value['description'];?>
</textarea></td>
          <td class="vtop tips2" >seo的描述,便于搜索引擎收录,120字内</td>
        </tr>
        
        
         <tr class="noborder" >
        	 <td class="td_l">分类内容:</td>
           <td class="vtop rowform" colspan="3">
<div class="kg_editorContainer"  data-config='{
"width":"900","height":"400"
        }'>
<textarea rows="6" name="postdb[content]" cols="70" class="ks-editor-textarea" id = "web_editor"><?php echo $_smarty_tpl->tpl_vars['cate']->value['content'];?>
</textarea></div>
           </td>
        </tr>
        <tr class="noborder" >
          <td colspan="3"><div class="fixsel">
          <?php if ($_smarty_tpl->tpl_vars['_GET']->value['id']) {?>
                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['_GET']->value['id'];?>
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
