<?php /* Smarty version Smarty-3.1.15, created on 2015-09-21 23:07:58
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\admin\shop\post.php" */ ?>
<?php /*%%SmartyHeaderCode:1758555fd8127678a15-86742011%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe77d8660d37506519e74b801889cc1184a619f9' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\admin\\shop\\post.php',
      1 => 1442848073,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1758555fd8127678a15-86742011',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55fd8127a8a433_39702009',
  'variables' => 
  array (
    'goods_id' => 0,
    'CURMODULE' => 0,
    'CURACTION' => 0,
    'shop' => 0,
    '_G' => 0,
    'vv' => 0,
    'vvv' => 0,
    'a' => 0,
    'k' => 0,
    'v' => 0,
    '_shop' => 0,
    '_GET' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fd8127a8a433_39702009')) {function content_55fd8127a8a433_39702009($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common_admin/left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


  
  <div class="table_main" style="padding-bottom:100px;">
   <form enctype="multipart/form-data"  method="post" action="" >
    <table class="tb tb2 nobdb">
      <tbody>
      
       
          <tr class="noborder" >
            <td  class="td_l">自动抓取:</td>
            <td class="vtop rowform">
            <input name="goods_id" value="<?php echo $_smarty_tpl->tpl_vars['goods_id']->value;?>
" type="text" class="txt" >
              &nbsp;
              <input type="submit" class="btn submit_btn"  name="get_submit" value="抓取" >
              </td>
            <td class="vtop tips2" style="color:#f00" >填写卖家店铺中的任何一款的商品链接或ID即可获取当前店铺的信息</td>
          </tr>
                    

 </tbody>
</table>
<input type="hidden" name="m" value="<?php echo $_smarty_tpl->tpl_vars['CURMODULE']->value;?>
" />
<input type="hidden" name="a" value="<?php echo $_smarty_tpl->tpl_vars['CURACTION']->value;?>
" />
</form>
<form enctype="multipart/form-data" method="post">
  <table class="tb tb2 nobdb">
      <tbody>

        <tr class="noborder">
          <td class="td_l">促销标题:</td>
          <td class="vtop rowform"><input name="postdb[title]" value="<?php echo $_smarty_tpl->tpl_vars['shop']->value['title'];?>
" type="text" class="txt _keywords"></td>
          <td class="vtop tips2">促销标题,必填</td>
        </tr>
        
         <tr class="noborder">
          <td class="td_l">卖家昵称:</td>
          <td class="vtop rowform"><input name="postdb[nick]" value="<?php echo $_smarty_tpl->tpl_vars['shop']->value['nick'];?>
" type="text" class="txt"></td>
          <td class="vtop tips2">店家昵称,必填</td>
        </tr>
        
        
         <tr class="noborder">
          <td class="td_l">店铺宣传图片:</td>
          <td class="vtop rowform _hover_img">
<div class="upload_img" data-name="postdb[picurl]">
<input name="postdb[picurl]" value="<?php echo $_smarty_tpl->tpl_vars['shop']->value['picurl'];?>
" type="text" class="txt pic_upload" >
<?php if ($_smarty_tpl->tpl_vars['shop']->value['picurl']) {?>
<a href=""  class="ajax_del" >删除</a>
<?php }?>
</div>
<a href="<?php echo $_smarty_tpl->tpl_vars['shop']->value['picurl'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['shop']->value['picurl'];?>
"  /></a>
<input type="file" name="file" class="J_TCajaUploadImg upload_file_btn" data-url="/upload.php" /></td>
          <td class="vtop tips2">店铺宣传图片,一般是用在店铺详情页,可空</td>
        </tr> 

       
  
        <tr class="noborder">
          <td class="td_l">店铺类型:</td>
          <td class="vtop rowform">
			<ul>
            <li >
              <input class="radio" type="radio" name="postdb[shop_type]" value="1" <?php if ($_smarty_tpl->tpl_vars['shop']->value['hide']==1) {?>checked="checked"<?php }?>>
              &nbsp;天猫商城</li>
            <li>
              <input class="radio" type="radio" name="postdb[shop_type]" value="2" <?php if ($_smarty_tpl->tpl_vars['shop']->value['hide']==2) {?>checked="checked"<?php }?>>
              &nbsp;淘宝C店</li>
              
              <li>
              <input class="radio" type="radio" name="postdb[shop_type]" value="0" <?php if ($_smarty_tpl->tpl_vars['shop']->value['hide']==0) {?>checked="checked"<?php }?>>
              &nbsp;未知</li>
          </ul>
          
          </td>
          <td class="vtop tips2"></td>
        </tr>
        
        
        
         <tr class="noborder">
          <td class="td_l">店铺分类:</td>
          <td class="vtop rowform">
          <select name="postdb[cate]">
          <option value="0">----请选择店铺分类----</option>
        
<!--<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['shop_cate']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?>-->
 <option value="<?php echo $_smarty_tpl->tpl_vars['vv']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['shop']->value['cate']==$_smarty_tpl->tpl_vars['vv']->value['id']) {?> selected="selected" class="on"  <?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['vv']->value['name'];?>
</option>
<!--<?php if ($_smarty_tpl->tpl_vars['vv']->value['sub']) {?>-->
      <!--<?php  $_smarty_tpl->tpl_vars['vvv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vvv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vv']->value['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vvv']->key => $_smarty_tpl->tpl_vars['vvv']->value) {
$_smarty_tpl->tpl_vars['vvv']->_loop = true;
?>-->
<option value="<?php echo $_smarty_tpl->tpl_vars['vvv']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['shop']->value['cate']==$_smarty_tpl->tpl_vars['vvv']->value['id']) {?> selected="selected" class="on" <?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['vvv']->value['name'];?>
</option>
          <!--<?php if ($_smarty_tpl->tpl_vars['vvv']->value['sub']) {?>-->
           <!--<?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vvv']->value['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>-->
           <option value="<?php echo $_smarty_tpl->tpl_vars['a']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['shop']->value['cate']==$_smarty_tpl->tpl_vars['a']->value['id']) {?> selected="selected" class="on"  <?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['a']->value['name'];?>
</option>
          <!--<?php } ?>-->
          <!--<?php }?>-->  
      <!--<?php } ?>-->
<!--<?php }?>-->              
<!--<?php } ?>-->

          
          </select> 
          </td>
          <td class="vtop tips2">店铺所属分类</td>
        </tr>
        
        <tr class="noborder">
          <td class="td_l">店铺标签:</td>
          <td class="vtop rowform">
          <select name="postdb[shop_tag]">
         <!-- <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['setting']['shop_tag']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>-->
          <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['k']->value==$_smarty_tpl->tpl_vars['shop']->value['shop_tag']) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
          <!--<?php } ?>-->
          </select> 
          </td>
          <td class="vtop tips2">店铺所属分类</td>
        </tr>
          <tr class="noborder">
          <td class="td_l">最低折扣:</td>
          <td class="vtop rowform"><input name="postdb[zk]" value="<?php echo $_smarty_tpl->tpl_vars['shop']->value['zk'];?>
" type="text" class="txt"></td>
          <td class="vtop tips2">折扣期内最低的折扣</td>
        </tr>
      <tr class="noborder">
          <td class="td_l">开始时间:</td>
          <td class="vtop rowform"><input name="postdb[start_time]" value="<?php echo $_smarty_tpl->tpl_vars['shop']->value['start_time'];?>
" type="text" class="txt _dateline"></td>
          <td class="vtop tips2">折扣开始时间</td>
        </tr>    
  <tr class="noborder">
          <td class="td_l">结束时间:</td>
          <td class="vtop rowform"><input name="postdb[end_time]" value="<?php echo $_smarty_tpl->tpl_vars['shop']->value['end_time'];?>
" type="text" class="txt _dateline"></td>
          <td class="vtop tips2">折扣结束时间</td>
        </tr>
        
        
        
         <tr class="noborder">
          <td class="td_l">卖家用户id:</td>
          <td class="vtop rowform"><input name="postdb[sid]" value="<?php echo $_smarty_tpl->tpl_vars['shop']->value['sid'];?>
" type="text" class="txt"></td>
          <td class="vtop tips2">卖家用户ID</td>
        </tr>

		

        <tr class="noborder">
          <td class="td_l">店标地址:</td>
          <td class="vtop rowform _hover_img">
<div class="upload_img" data-name="postdb[pic_path]">
<input name="postdb[pic_path]" value="<?php echo $_smarty_tpl->tpl_vars['shop']->value['pic_path'];?>
" type="text" class="txt pic_upload" >
<?php if ($_smarty_tpl->tpl_vars['shop']->value['pic_path']) {?>
<a href=""  class="ajax_del" >删除</a>
<?php }?>
</div>
<a href="<?php echo $_smarty_tpl->tpl_vars['shop']->value['pic_path'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['shop']->value['pic_path'];?>
"  /></a>
<input type="file" name="pic_path" class="J_TCajaUploadImg upload_file_btn" data-url="/upload.php" />

          
          </td>
          <td class="vtop tips2">大小120x60</td>
        </tr>
		 <tr class="noborder">
          <td class="td_l">店铺地址:</td>
          <td class="vtop rowform"><input name="postdb[url]" value="<?php echo $_smarty_tpl->tpl_vars['shop']->value['url'];?>
" type="text" class="txt"></td>
          <td class="vtop tips2"></td>
        </tr>
        
      
        <tr class="noborder">
          <td class="td_l">店铺排序:</td>
          <td class="vtop rowform"><input name="postdb[sort]" value="<?php echo $_smarty_tpl->tpl_vars['shop']->value['sort'];?>
" type="text" class="txt w90"></td>
          <td class="vtop tips2">越大越靠前</td>
        </tr>


   
        
        <tr class="noborder">
          <td class="td_l">隐藏:</td>
          <td class="vtop rowform">
			<ul>
            <li >
              <input class="radio" type="radio" name="postdb[hide]" value="1" <?php if ($_smarty_tpl->tpl_vars['shop']->value['hide']==1) {?>checked="checked"<?php }?>>
              &nbsp;是</li>
            <li>
              <input class="radio" type="radio" name="postdb[hide]" value="0" <?php if ($_smarty_tpl->tpl_vars['shop']->value['hide']==0) {?>checked="checked"<?php }?>>
              &nbsp;否</li>
          </ul>
          
          </td>
          <td class="vtop tips2">选中的话,前台则不显示</td>
        </tr>
        
         <tr class="noborder" >
          <td class="td_l">seo keywords:</td>
          <td class="vtop rowform">
          <input name="postdb[keywords]" value="<?php echo $_smarty_tpl->tpl_vars['shop']->value['keywords'];?>
" type="text" class="txt _in_keywords">
          </td>
          <td class="vtop tips2" >seo的关键字,便于搜索引擎收录,多个用,分格开</td>
        </tr>
        <tr class="noborder" >
          <td class="td_l">seo description:</td>
          <td class="vtop rowform"><textarea rows="3"  name="postdb[description]"  cols="50" class="tarea _keywords"><?php echo $_smarty_tpl->tpl_vars['shop']->value['description'];?>
</textarea></td>
          <td class="vtop tips2" >seo的描述,便于搜索引擎收录,120字内</td>
        </tr>

        
        <tr class="noborder">
          <td class="td_l">店铺描述:</td>
          <td class="vtop rowform" colspan="3">
<textarea rows="3" name="postdb[desc]" cols="50" class="textarea _keywords"><?php echo $_smarty_tpl->tpl_vars['shop']->value['desc'];?>
</textarea>
          </td>
          <td class="vtop tips2"></td>
        </tr>
      
      
      <?php if ($_smarty_tpl->tpl_vars['_shop']->value['t_num_iid']) {?>
      <tbody>    
         <tr class="noborder">
          <td class="td_l">&nbsp;&nbsp;</td>
          <td class="vtop rowform" colspan="3">
          <a href="#" class="tshop">推荐商品,点击添加</a>
          </td>
          <td class="vtop tips2"></td>
        </tr>
        </tbody> 
        <?php }?>
   
     <tbody> 
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
            <input type="hidden" name="m" value="<?php echo $_smarty_tpl->tpl_vars['CURMODULE']->value;?>
" />
<input type="hidden" name="a" value="<?php echo $_smarty_tpl->tpl_vars['CURACTION']->value;?>
" />
</form>
  </div>

<?php echo $_smarty_tpl->getSubTemplate ('../common_admin/right_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
