<?php /* Smarty version Smarty-3.1.15, created on 2015-09-20 23:48:51
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\ttae\home\post.php" */ ?>
<?php /*%%SmartyHeaderCode:2730155fed487c5e045-68908315%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e33dff202ad6e89ddc9a42f6195b43dc4f03dddd' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\ttae\\home\\post.php',
      1 => 1442764128,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2730155fed487c5e045-68908315',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55fed48809d5d6_46382162',
  'variables' => 
  array (
    'CSSDIR' => 0,
    'goods' => 0,
    '_G' => 0,
    'vv' => 0,
    'vvv' => 0,
    'a' => 0,
    'readonly' => 0,
    'CURMODULE' => 0,
    'CURACTION' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fed48809d5d6_46382162')) {function content_55fed48809d5d6_46382162($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['CSSDIR']->value;?>
/home_goods_list.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['CSSDIR']->value;?>
/apply-new.css" media="all" />



<div class="index2_box cl home_post " >





    <ul class="cl">

       <form method="post">

      <li class="uc_zlli2">

      <span style="color:#03C;">重新提交未通过审核的商品,,请认真填写相关内容,否则多次申核后还不成功,将禁止此商品报名,严重者将禁止店铺所有商品报名

      </span>      

      </li>

      

<li style="font-size:24px;text-align:center;">

<?php if ($_smarty_tpl->tpl_vars['goods']->value['check']==0) {?>

 当前商品<?php echo $_smarty_tpl->tpl_vars['goods']->value['status_text'];?>


<?php } elseif ($_smarty_tpl->tpl_vars['goods']->value['check']==2) {?>

     当前商品 <span  style="color:#F00;">未通过审核原因:<?php echo $_smarty_tpl->tpl_vars['goods']->value['return_msg'];?>
</span>

<?php }?>

</li>

      <li class="uc_zlli1">

       <label>标题：</label>

        <input class="uinfo text"  name="postdb[title]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['title'];?>
" style="width: 380px;">

     </li>

        

        

     <li class="uc_zlli1">

       <label>报名栏目：</label>

<select name="postdb[fid]">

              <option value="0">----请选择报名的栏目----</option>



<!--<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['channels']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?>-->

  <!--<?php if ($_smarty_tpl->tpl_vars['vv']->value['hide']==0) {?>--> 

         	<option value="<?php echo $_smarty_tpl->tpl_vars['vv']->value['fid'];?>
" <?php if ($_smarty_tpl->tpl_vars['vv']->value['fid']==$_smarty_tpl->tpl_vars['goods']->value['fid']) {?> selected="selected"<?php }?> >&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['vv']->value['name'];?>
</option>

            <!--<?php if ($_smarty_tpl->tpl_vars['vv']->value['sub']) {?>-->

                  <!--<?php  $_smarty_tpl->tpl_vars['vvv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vvv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vv']->value['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vvv']->key => $_smarty_tpl->tpl_vars['vvv']->value) {
$_smarty_tpl->tpl_vars['vvv']->_loop = true;
?>-->

                    <!--<?php if ($_smarty_tpl->tpl_vars['vvv']->value['hide']==0) {?>-->                     

                          <option value="<?php echo $_smarty_tpl->tpl_vars['vvv']->value['fid'];?>
" <?php if ($_smarty_tpl->tpl_vars['vvv']->value['fid']==$_smarty_tpl->tpl_vars['goods']->value['fid']) {?> selected="selected"<?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['vvv']->value['name'];?>
</option>

                           <!--<?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vvv']->value['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>-->

                             <!--<?php if ($_smarty_tpl->tpl_vars['a']->value['hide']==0) {?>-->

                           		<option value="<?php echo $_smarty_tpl->tpl_vars['a']->value['fid'];?>
" <?php if ($_smarty_tpl->tpl_vars['a']->value['fid']==$_smarty_tpl->tpl_vars['goods']->value['fid']) {?> selected="selected"<?php }?> >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['a']->value['name'];?>
</option>

                          	<!--<?php }?>-->  

                          <!--<?php } ?>-->

                      <!--<?php }?>-->  

                  <!--<?php } ?>-->

            <!--<?php }?>-->   

 <!--<?php }?>-->                     

<!--<?php } ?>-->

       </select>

     </li> 

     

      <li class="uc_zlli1">

       <label>报名分类：</label>

<select name="postdb[cate]">


 <option value="0">----请选择分类----</option>
<!--<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['goods_cate']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?>-->
 <option value="<?php echo $_smarty_tpl->tpl_vars['vv']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['goods']->value['cate']==$_smarty_tpl->tpl_vars['vv']->value['id']) {?> selected="selected" class="on"  <?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['vv']->value['name'];?>
</option>
<!--<?php if ($_smarty_tpl->tpl_vars['vv']->value['sub']) {?>-->
      <!--<?php  $_smarty_tpl->tpl_vars['vvv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vvv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vv']->value['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vvv']->key => $_smarty_tpl->tpl_vars['vvv']->value) {
$_smarty_tpl->tpl_vars['vvv']->_loop = true;
?>-->
<option value="<?php echo $_smarty_tpl->tpl_vars['vvv']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['goods']->value['cate']==$_smarty_tpl->tpl_vars['vvv']->value['id']) {?> selected="selected" class="on" <?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['vvv']->value['name'];?>
</option>
          <!--<?php if ($_smarty_tpl->tpl_vars['vvv']->value['sub']) {?>-->
           <!--<?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vvv']->value['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>-->
           <option value="<?php echo $_smarty_tpl->tpl_vars['a']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['goods']->value['cate']==$_smarty_tpl->tpl_vars['a']->value['id']) {?> selected="selected" class="on"  <?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['a']->value['name'];?>
</option>
          <!--<?php } ?>-->
          <!--<?php }?>-->  
      <!--<?php } ?>-->
<!--<?php }?>-->              
<!--<?php } ?>-->
</select>

     </li> 

     <li class="uc_zlli3 _hover_img" style="position: relative;">

      <div class="cl">

        <label>商品主图：</label>

        <div class="upload_img" data-name="postdb[picurl]">

        <input name="postdb[picurl]" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['picurl'];?>
" type="text" class="txt pic_upload text" >

        </div>

       </div>

       <div class="cl ">

        <label>&nbsp;</label>

        <a href="<?php echo $_smarty_tpl->tpl_vars['goods']->value['picurl'];?>
" target="_blank" ><img src="<?php echo $_smarty_tpl->tpl_vars['goods']->value['picurl'];?>
"  /></a>

        <input type="file" name="file" class="J_TCajaUploadImg upload_file_btn" data-url="/upload.php" />

        </div>

        

      </li>

     

      <li class="uc_zlli1">

       <label>是否包邮：</label>

 <input class="radio" type="radio" name="postdb[baoyou]" value="1" <?php if ($_smarty_tpl->tpl_vars['goods']->value['baoyou']==1) {?>checked="checked"<?php }?> <?php echo $_smarty_tpl->tpl_vars['readonly']->value;?>
>

                &nbsp;是  &nbsp;&nbsp;&nbsp;&nbsp;

<input class="radio" type="radio" name="postdb[baoyou]" value="0" <?php if (!$_smarty_tpl->tpl_vars['goods']->value['baoyou']) {?>checked="checked"<?php }?> <?php echo $_smarty_tpl->tpl_vars['readonly']->value;?>
>

                &nbsp;否

     </li> 

     

     

      <li class="uc_zlli1">

       <label>店铺类型：</label>

 <input class="radio" type="radio" name="postdb[shop_type]" value="1" <?php if ($_smarty_tpl->tpl_vars['goods']->value['shop_type']==1) {?>checked="checked"<?php }?>>

                &nbsp;商城&nbsp;&nbsp;&nbsp;&nbsp;

 <input class="radio" type="radio" name="postdb[shop_type]" value="2" <?php if ($_smarty_tpl->tpl_vars['goods']->value['shop_type']==2) {?>checked="checked"<?php }?>>

                &nbsp;集市

     </li> 

     

      <li class="uc_zlli1">

       <label>商品库存数：</label>

        <input class="uinfo text"  name="postdb[num]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['num'];?>
">

     </li> 

      

      <li class="uc_zlli1">

        <label>商品优惠价：</label>

        <input class="uinfo uc_zlli1text text" name="postdb[yh_price]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['yh_price'];?>
">

      </li>

      <li class="uc_zlli1">

         <label>销    量：</label>

        <input class="uinfo uc_zlli1text text" name="postdb[sum]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['sum'];?>
">

      </li>

         <li class="uc_zlli1">

         <label>上线时间段：</label>

        <input class="uinfo uc_zlli1text text _dateline" name="postdb[start_time]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['start_time'];?>
">

      </li> 



       

      </li>

      <li class="uc_zlli1">

        <label>下线时间段：</label>

        <input class="uinfo uc_zlli1text text _dateline" name="postdb[end_time]"  type="text" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['end_time'];?>
">

        <h2></h2>

      </li>



        <li class="uc_zlli1">

        <label>佣金比例：</label>

         <input class="uinfo uc_zlli1text text" name="postdb[bili]"  type="text" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['bili'];?>
">%
         

      </li>

      

      <li class="uc_zlli6">

        <label>推荐理由：</label>

        <textarea class="uinfo textarea" name="postdb[ly]"><?php echo $_smarty_tpl->tpl_vars['goods']->value['ly'];?>
</textarea>

      </li>

      

      <li class="uc_zlli1">

        <label>联系人：</label>

         <input class="uinfo uc_zlli1text text" name="postdb[apply_user]"  type="text" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['apply_user'];?>
">

      </li>

      

     

      <li class="uc_zlli1">

        <label>旺旺：</label>

         <input class="uinfo uc_zlli1text text" name="postdb[apply_wangwang]"  type="text" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['apply_wangwang'];?>
">

      </li>

        <li class="uc_zlli1">

        <label>联系电话：</label>

         <input class="uinfo uc_zlli1text text" name="postdb[apply_phone]"  type="text" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['apply_phone'];?>
">

      </li>

       <li class="uc_zlli1">

        <label>联系qq：</label>

         <input class="uinfo uc_zlli1text text" name="postdb[apply_qq]"  type="text" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['apply_qq'];?>
">

      </li>

      



      

      

      <li class="uc_zlli4">

        <label></label>

         <input type="submit" class="seting_onsubmit u_submit"   name="onsubmit"value=" 保 存" />

            

      </li>

<input type="hidden" name="aid" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['aid'];?>
" />

<input type="hidden" name="m" value="<?php echo $_smarty_tpl->tpl_vars['CURMODULE']->value;?>
" />

<input type="hidden" name="a" value="<?php echo $_smarty_tpl->tpl_vars['CURACTION']->value;?>
" />

</form>

    </ul>

</div>

<?php echo $_smarty_tpl->getSubTemplate ("../footer.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
