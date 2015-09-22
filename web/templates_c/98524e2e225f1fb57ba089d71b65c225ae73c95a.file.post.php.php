<?php /* Smarty version Smarty-3.1.15, created on 2015-09-21 00:43:12
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\admin\ad\post.php" */ ?>
<?php /*%%SmartyHeaderCode:128455fee220a12a22-34480922%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98524e2e225f1fb57ba089d71b65c225ae73c95a' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\admin\\ad\\post.php',
      1 => 1441350032,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '128455fee220a12a22-34480922',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ad' => 0,
    'ad_types' => 0,
    'k' => 0,
    'v' => 0,
    '_GET' => 0,
    'CURMODULE' => 0,
    'CURACTION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55fee220cfb626_96250086',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fee220cfb626_96250086')) {function content_55fee220cfb626_96250086($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common_admin/left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form enctype="multipart/form-data" method="post" >
  
  <div class="table_main">
    <table class="tb tb2 nobdb">
      <tbody>
        <tr class="noborder">
          <td class="td_l">广告名称:</td>
          <td class="vtop rowform"><input name="postdb[name]" value="<?php echo $_smarty_tpl->tpl_vars['ad']->value['name'];?>
" type="text" class="txt"></td>
          <td class="vtop tips2">供后台查看,前台一般不显示</td>
        </tr>

        <tr class="noborder">
          <td class="td_l">隐藏:</td>
          <td class="vtop rowform">
			<ul>
            <li >
              <input class="radio" type="radio" name="postdb[hide]" value="1" <?php if ($_smarty_tpl->tpl_vars['ad']->value['hide']==1) {?>checked="checked"<?php }?>>
              &nbsp;是</li>
            <li>
              <input class="radio" type="radio" name="postdb[hide]" value="0" <?php if ($_smarty_tpl->tpl_vars['ad']->value['hide']==0) {?>checked="checked"<?php }?>>
              &nbsp;否</li>
          </ul>
          
          </td>
          <td class="vtop tips2">选中的话,前台则不显示</td>
        </tr>
        
        
 		 <tr class="noborder">
          <td class="td_l">开始时间:</td>
          <td class="vtop rowform">
          <input name="postdb[start_time]" value="<?php echo $_smarty_tpl->tpl_vars['ad']->value['start_time'];?>
" type="text" class="txt _dateline"></td>
          <td class="vtop tips2">未到时间,不会显示.留空或0,则一直显示</td>
        </tr>
        <tr class="noborder">
          <td class="td_l">结束时间:</td>
          <td class="vtop rowform">
          <input name="postdb[end_time]" value="<?php echo $_smarty_tpl->tpl_vars['ad']->value['end_time'];?>
" type="text" class="txt _dateline" ></td>
          <td class="vtop tips2">已到时间,不会显示.留空或0,则一直显示</td>
        </tr>
        
        
		 <tr class="noborder">
          <td class="td_l">广告类型:</td>
          <td class="vtop rowform">
          <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ad_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
           <input type="radio" name="postdb[type]"  value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"  class="ad_types radio" <?php if ($_smarty_tpl->tpl_vars['ad']->value['type']==$_smarty_tpl->tpl_vars['k']->value) {?> checked="checked"<?php }?> /><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
 
           
          <?php } ?>
			</td>
          <td class="vtop tips2"></td>
        </tr>
        
      
     </tbody>
   <tbody class="show_ads <?php if ($_smarty_tpl->tpl_vars['ad']->value['type']!=1||!$_smarty_tpl->tpl_vars['ad']->value['type']) {?>hide<?php }?>">
       <tr class="noborder">
        <td class="td_l">内容:</td>
        <td class="vtop rowform">
        <textarea rows="6" name="postdb[content]" cols="70"><?php echo $_smarty_tpl->tpl_vars['ad']->value['content'];?>
</textarea></td>
        <td class="vtop tips2"></td>
      </tr>
   </tbody>
   
  
 	<tbody class="show_ads <?php if ($_smarty_tpl->tpl_vars['ad']->value['type']!=2) {?>hide<?php }?>">
   		 <tr class="noborder">
          <td class="td_l">图片宽:</td>
          <td class="vtop rowform"><input name="postdb[width]" value="<?php echo $_smarty_tpl->tpl_vars['ad']->value['width'];?>
" type="text" class="txt"></td>
          <td class="vtop tips2"></td>
        </tr>   
        <tr class="noborder">
          <td class="td_l">图片高:</td>
          <td class="vtop rowform">
          <input name="postdb[height]" value="<?php echo $_smarty_tpl->tpl_vars['ad']->value['height'];?>
" type="text" class="txt"></td>
          <td class="vtop tips2"></td>
        </tr>   
         
            <tr class="noborder">
          <td class="td_l">图片地址:</td>
          <td class="vtop rowform _hover_img">
          
<div class="upload_img" data-name="postdb[picurl]">
<input name="postdb[picurl]" value="<?php echo $_smarty_tpl->tpl_vars['ad']->value['picurl'];?>
" type="text" class="txt pic_upload" >
<?php if ($_smarty_tpl->tpl_vars['ad']->value['picurl']) {?>
<a href=""  class="ajax_del" >删除</a>&nbsp;&nbsp;
<?php }?>
</div>
<a href="<?php echo $_smarty_tpl->tpl_vars['ad']->value['picurl'];?>
" target="_blank" ><img src="<?php echo $_smarty_tpl->tpl_vars['ad']->value['picurl'];?>
"  /></a>
<input type="file" name="file" class="J_TCajaUploadImg upload_file_btn" data-url="/upload.php" /></td>
          <td class="vtop tips2"></td>
        </tr>
        <tr class="noborder">
          <td class="td_l">链接地址:</td>
          <td class="vtop rowform"><input name="postdb[url]" value="<?php echo $_smarty_tpl->tpl_vars['ad']->value['url'];?>
" type="text" class="txt"></td>
          <td class="vtop tips2">链接地址</td>
        </tr>
          
          


        
        <tr class="noborder">
          <td class="td_l">新窗口打开:</td>
          <td class="vtop rowform">


<ul>
            <li >
              <input class="radio" type="radio" name="postdb[target]" value="1" <?php if ($_smarty_tpl->tpl_vars['ad']->value['target']==1) {?>checked="checked"<?php }?>>
              &nbsp;是</li>
            <li>
              <input class="radio" type="radio" name="postdb[target]" value="0" <?php if ($_smarty_tpl->tpl_vars['ad']->value['target']==0) {?>checked="checked"<?php }?>>
              &nbsp;否</li>
          </ul>
          
          
          </td>
          <td class="vtop tips2">选中则新窗口打开,否则本窗口打开,默认为新窗口打开</td>
        </tr>
     </tbody>
      <tbody class="show_ads <?php if ($_smarty_tpl->tpl_vars['ad']->value['type']!=3) {?>hide<?php }?>">
       <tr class="noborder">
        <td class="td_l">内容:</td>
        <td class="vtop" colspan="3"><div class="kg_editorContainer"  data-config='{
        "width":"1000","height":"400"
        }'>
        <textarea rows="6" name="postdb[html]" cols="70" class="ks-editor-textarea" id = "web_editor"><?php echo $_smarty_tpl->tpl_vars['ad']->value['html'];?>
</textarea></div></td>
      </tr>
   </tbody>
         
     
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
