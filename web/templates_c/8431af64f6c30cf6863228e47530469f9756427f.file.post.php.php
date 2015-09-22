<?php /* Smarty version Smarty-3.1.15, created on 2015-09-20 21:56:42
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\admin\duihuan\post.php" */ ?>
<?php /*%%SmartyHeaderCode:278255febb1af05be3-59593718%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8431af64f6c30cf6863228e47530469f9756427f' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\admin\\duihuan\\post.php',
      1 => 1441350033,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '278255febb1af05be3-59593718',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'goods_id' => 0,
    'CURMODULE' => 0,
    'CURACTION' => 0,
    'goods' => 0,
    '_G' => 0,
    'k' => 0,
    'vv' => 0,
    '_GET' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55febb1b29ac23_41564994',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55febb1b29ac23_41564994')) {function content_55febb1b29ac23_41564994($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common_admin/left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


  
  <div class="table_main">  
  
   
   
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
            <td class="vtop tips2" >如果是淘宝商品,则可填写商品ID或是商品链接,可自动获取商品信息</td>
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
        <tr class="noborder" >
          <td class="td_l">标题:</td>
          <td class="vtop rowform"><input name="postdb[title]" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['title'];?>
" type="text" class="txt"></td>
          <td class="vtop tips2" >必填</td>
        </tr>
        
     <tr class="noborder" >
          <td class="td_l">商品id:</td>
          <td class="vtop rowform"><input name="postdb[num_iid]" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['num_iid'];?>
" type="text" class="txt"></td>
          <td class="vtop tips2" >可填卖家店铺中商品的ID或链接地址</td>
        </tr>
       <tr class="noborder">
          <td class="td_l">标签/分类:</td>
          <td class="vtop rowform">           
          <select name="postdb[cate]">
            <!--<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['duihuan_cate']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['vv']->key;
?>-->
            <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['goods']->value['tag']==$_smarty_tpl->tpl_vars['k']->value) {?> selected="selected"<?php }?> ><?php echo $_smarty_tpl->tpl_vars['vv']->value['name'];?>
</option>
            <!--<?php } ?>-->
          </select>
            </td>
          <td class="vtop tips2">可空</td>
        </tr>

        


        <tr class="noborder" >
          <td class="td_l">商品主图:</td>
          <td class="vtop rowform _hover_img">
          
<div class="upload_img" data-name="postdb[picurl]">
<input name="postdb[picurl]" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['picurl'];?>
" type="text" class="txt pic_upload" >
<?php if ($_smarty_tpl->tpl_vars['goods']->value['picurl']) {?>
<a href=""  class="ajax_del" >删除</a>&nbsp;&nbsp;
<?php }?>
</div>
<a href="<?php echo $_smarty_tpl->tpl_vars['goods']->value['picurl'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['goods']->value['picurl'];?>
"  /></a>
<input type="file" name="file" class="J_TCajaUploadImg upload_file_btn" data-url="/upload.php" />
          </td>
          <td class="vtop tips2" >商品图片</td>
        </tr>
 
       
         <tr class="noborder" >
          <td class="td_l">商品原价:</td>
          <td class="vtop rowform"><input name="postdb[price]" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['price'];?>
" type="text" class="txt"></td>
          <td class="vtop tips2" >商品原价,整数</td>
        </tr>
          

        <tr class="noborder" >
          <td class="td_l">开始时间:</td>
          <td class="vtop rowform"><input name="postdb[start_time]" value="<?php if ($_smarty_tpl->tpl_vars['goods']->value['org_start_time']>0) {?><?php echo $_smarty_tpl->tpl_vars['goods']->value['start_time'];?>
<?php }?>" type="text" class="txt _dateline"></td>
          <td class="vtop tips2" >未开始则不能兑换,留空则不限时间</td>
        </tr>

        
      <tr class="noborder" >
          <td class="td_l">结束时间:</td>
          <td class="vtop rowform"><input name="postdb[end_time]" value="<?php if ($_smarty_tpl->tpl_vars['goods']->value['org_end_time']>0) {?><?php echo $_smarty_tpl->tpl_vars['goods']->value['end_time'];?>
<?php }?>" type="text" class="txt _dateline"></td>
          <td class="vtop tips2" >已结束则不能兑换,留空则不限时间</td>
        </tr>
        
        <tr class="noborder" >
          <td class="td_l">兑换总份数:</td>
          <td class="vtop rowform"><input name="postdb[sum]" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['sum'];?>
" type="text" class="txt"></td>
          <td class="vtop tips2" >提供兑换商品的份数</td>
        </tr>
         <tr class="noborder" >
          <td class="td_l">已申请份数:</td>
          <td class="vtop rowform"><!--<input name="postdb[num]" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['num'];?>
" type="text" class="txt">-->
          <?php echo $_smarty_tpl->tpl_vars['goods']->value['num'];?>

          
          
          </td>
          <td class="vtop tips2" >一般无需更改(除非你要做假),在确认审核通过后,此数量会自动增加</td>
        </tr>
  <tr class="noborder" >
          <td class="td_l">兑换所需积分:</td>
          <td class="vtop rowform"><input name="postdb[jf]" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['jf'];?>
" type="text" class="txt"></td>
          <td class="vtop tips2" >需要扣除多少积分才能申请兑换,留空或0则不需扣积分</td>
        </tr>


         
        <tr class="noborder" >
          <td class="td_l">下架:</td>
          <td class="vtop rowform"><ul>
              <li >
                <input class="radio" type="radio" name="postdb[hide]" value="1" <?php if ($_smarty_tpl->tpl_vars['goods']->value['hide']==1) {?> checked="checked"<?php }?> >
                &nbsp;是</li>
              <li>
                <input class="radio" type="radio" name="postdb[hide]" value="0" <?php if ($_smarty_tpl->tpl_vars['goods']->value['hide']==0) {?> checked="checked"<?php }?>>
                &nbsp;否</li>
            </ul></td>
          <td class="vtop tips2" >在前台调用时不显示,且无法兑换此商品</td>
        </tr>
       <tr class="noborder" >
          <td class="td_l">排序:</td>
          <td class="vtop rowform"><input name="postdb[sort]" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['sort'];?>
" type="text" class="txt w90"></td>
          <td class="vtop tips2" >越大越靠前</td>
        </tr>
       

      <tr class="noborder" >
        <td class="td_l">兑换详细描述:</td>
        <td class="vtop rowform" colspan="3" >
<div class="kg_editorContainer"  data-config='{
          "width":"1100","height":"500"
        }'>
 			<textarea rows="6" name="postdb[content]" cols="70" class="ks-editor-textarea" id = "web_editor" ><?php echo $_smarty_tpl->tpl_vars['goods']->value['content'];?>
</textarea>
</div>
        </td>

      </tr>

        
        <tr class="noborder" >
        <td>&nbsp;</td>
          <td colspan="2"><div class="fixsel"> 
          	<?php if ($_smarty_tpl->tpl_vars['_GET']->value['id']) {?>
              <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['_GET']->value['id'];?>
" />
              <?php }?>
              <input type="submit" class="btn submit_btn"  name="onsubmit"  value="提交修改">
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
