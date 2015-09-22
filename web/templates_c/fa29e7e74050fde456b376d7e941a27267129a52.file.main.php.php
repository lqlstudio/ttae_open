<?php /* Smarty version Smarty-3.1.15, created on 2015-09-21 01:24:18
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\ttae\apply\main.php" */ ?>
<?php /*%%SmartyHeaderCode:187055fec5b4d43574-45871533%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa29e7e74050fde456b376d7e941a27267129a52' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\ttae\\apply\\main.php',
      1 => 1442769857,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '187055fec5b4d43574-45871533',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55fec5b529da86_65145155',
  'variables' => 
  array (
    'CSS' => 0,
    '_G' => 0,
    'v' => 0,
    '_GET' => 0,
    'CURMODULE' => 0,
    'CURACTION' => 0,
    'goods' => 0,
    'vv' => 0,
    'vvv' => 0,
    'a' => 0,
    'k' => 0,
    'readonly' => 0,
    'v1' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fec5b529da86_65145155')) {function content_55fec5b529da86_65145155($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->tpl_vars['CSS']->value;?>




<?php echo $_smarty_tpl->getSubTemplate ("../apply/hd.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>






<div class="b6_baomingbk goods_apply">

  <div class="b6_baomingnav cl">

  

  <div class="b6_bm_d2 cl">
  
   <div class="b6_bm_d2d1" style="margin:20px 0;">
         <div class="cl kefuqq">
<a >报名咨询:</a>
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['setting']['qq']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
        <a href="" data-qq="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" class="_qq"></a>
        <?php } ?>
        
        </div>

      </div>

      <div class="b6_bm_d2d1">
        <h1>商家报名结果查询</h1>
          <span> <b>商品ID:</b>
          <input type="text" name="item_id"  class="apply_check_value" value="" style="width:120px;">
          </span>
          <div style="text-align:center;">

            <input type="submit" value="查询" class="apply_check_btn">

          </div>
      </div>
      
      

      <div class="b6_bm_d2d1 b6_bm_d2d2 cl">

        <h1>商家报名要求</h1>

        <ul>

         <?php echo $_smarty_tpl->tpl_vars['_G']->value['ad']['k5']['show_html'];?>


        </ul>

      </div>

    </div>

  

 <div  class="cl z">

    <table class="tb tb2 nobdb" >

      <tbody>

      <form  method="post" action="" >

        <tr class="noborder" >

          <td  class="td_l">自动抓取:</td>

          <td class="vtop rowform"><input name="goods_id" value="<?php echo $_smarty_tpl->tpl_vars['_GET']->value['goods_id'];?>
" type="text" class="txt" >

            &nbsp;

            <input type="submit" class="btn"  name="get_submit" value="抓取"  ></td>

          <td class="vtop tips2" >填写商品ID或是商品链接,获取商品信息</td>

        </tr>

      <input type="hidden" name="m" value="<?php echo $_smarty_tpl->tpl_vars['CURMODULE']->value;?>
" />

<input type="hidden" name="a" value="<?php echo $_smarty_tpl->tpl_vars['CURACTION']->value;?>
" />

</form>

          <form  method="post" action="" >

        <tr class="noborder" >

          <td  class="td_l">商品标题:</td>

          <td class="vtop rowform"><input name="postdb[title]" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['title'];?>
" type="text" class="txt"></td>

          <td class="vtop tips2" >必填!10个字以内!</td>

        </tr>

        <tr class="noborder" >

          <td class="td_l">所属栏目:</td>

          <td class="vtop rowform" ><select name="postdb[fid]">

              <option value="0">----请选择报名的栏目----</option>



<!--<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['channels']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?>-->

  <!--<?php if ($_smarty_tpl->tpl_vars['vv']->value['hide']==0) {?>--> 

         	<option value="<?php echo $_smarty_tpl->tpl_vars['vv']->value['fid'];?>
" <?php if ($_smarty_tpl->tpl_vars['vv']->value['fid']==$_smarty_tpl->tpl_vars['_GET']->value['fid']) {?> selected="selected"<?php }?> >&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['vv']->value['name'];?>
</option>

            <!--<?php if ($_smarty_tpl->tpl_vars['vv']->value['sub']) {?>-->

                  <!--<?php  $_smarty_tpl->tpl_vars['vvv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vvv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vv']->value['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vvv']->key => $_smarty_tpl->tpl_vars['vvv']->value) {
$_smarty_tpl->tpl_vars['vvv']->_loop = true;
?>-->

                    <!--<?php if ($_smarty_tpl->tpl_vars['vvv']->value['hide']==0) {?>-->                     

                          <option value="<?php echo $_smarty_tpl->tpl_vars['vvv']->value['fid'];?>
" <?php if ($_smarty_tpl->tpl_vars['vvv']->value['fid']==$_smarty_tpl->tpl_vars['_GET']->value['fid']) {?> selected="selected"<?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['vvv']->value['name'];?>
</option>

                           <!--<?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vvv']->value['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>-->

                             <!--<?php if ($_smarty_tpl->tpl_vars['a']->value['hide']==0) {?>-->

                           		<option value="<?php echo $_smarty_tpl->tpl_vars['a']->value['fid'];?>
" <?php if ($_smarty_tpl->tpl_vars['a']->value['fid']==$_smarty_tpl->tpl_vars['_GET']->value['fid']) {?> selected="selected"<?php }?> >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['a']->value['name'];?>
</option>

                          	<!--<?php }?>-->  

                          <!--<?php } ?>-->

                      <!--<?php }?>-->  

                  <!--<?php } ?>-->

            <!--<?php }?>-->   

 <!--<?php }?>-->                     

<!--<?php } ?>-->

              

              

            </select></td>

          <td class="vtop tips2" >选择商品类别,如果没有请选择其他</td>

        </tr>

        

        <?php if ($_smarty_tpl->tpl_vars['_GET']->value['cate']>0) {?>        

        <input type="hidden" name="postdb[cate]"  value="<?php echo $_smarty_tpl->tpl_vars['_GET']->value['cate'];?>
"/>

        <?php } else { ?>

        <tr class="noborder hide" >

          <td class="td_l">商品分类:</td>

          <td class="vtop rowform"><select name="postdb[cate]">

              <option value="0">----请选择商品分类----</option>

              <!--<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['cate']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?>-->

              <option value="<?php echo $_smarty_tpl->tpl_vars['vv']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['goods']->value['cate']==$_smarty_tpl->tpl_vars['vv']->value['id']) {?> selected="selected"<?php }?> ><?php echo $_smarty_tpl->tpl_vars['vv']->value['name'];?>
</option>

              <!--<?php } ?>-->

            </select></td>

          <td class="vtop tips2" >商品报名所属分类</td>

        </tr>

         <?php }?>

        

        

        <tr class="noborder hide" >

          <td class="td_l">商品标签:</td>

          <td class="vtop rowform"><select name="postdb[flag]">

              <!--<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['setting']['flag']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['vv']->key;
?>-->

              <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['goods']->value['flag']==$_smarty_tpl->tpl_vars['k']->value) {?> selected="selected"<?php }?> ><?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
</option>

              <!--<?php } ?>-->

            </select></td>

          <td class="vtop tips2" >商品标签,可在全局设置里添加修改</td>

        </tr>

        <tr class="td_l noborder" >

          <td  class="td_l">店铺类型:</td>

          <td class="vtop rowform"><ul>

              <li >

                <input class="radio" type="radio" name="postdb[shop_type]" value="1" <?php if ($_smarty_tpl->tpl_vars['goods']->value['shop_type']==1) {?>checked="checked"<?php }?>>

                &nbsp;商城</li>

              <li>

                <input class="radio" type="radio" name="postdb[shop_type]" value="2" <?php if ($_smarty_tpl->tpl_vars['goods']->value['shop_type']==2) {?>checked="checked"<?php }?>>

                &nbsp;集市</li>

				</li>

            </ul></td>

          <td class="vtop tips2" >卖家店铺类型</td>

        </tr>

        <tr class="noborder"  style="display:none;">

          <td  class="td_l">商品ID:</td>

          <td class="vtop rowform"><input name="postdb[num_iid]" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['num_iid'];?>
" type="text" class="txt" <?php echo $_smarty_tpl->tpl_vars['readonly']->value;?>
></td>

          <td class="vtop tips2" >采集的请不要更改</td>

        </tr>

        <tr class="noborder" style="display:none;" >

          <td  class="td_l">商品分类ID:</td>

          <td class="vtop rowform"><input name="postdb[cid]" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['cid'];?>
" type="text" class="txt" <?php echo $_smarty_tpl->tpl_vars['readonly']->value;?>
></td>

          <td class="vtop tips2" >采集的请不要更改</td>

        </tr>

        <tr class="noborder" >

          <td class="td_l">商品主图:</td>

          <td class="vtop rowform _hover_img">

          

<div class="upload_img" data-name="postdb[picurl]">

<input name="postdb[picurl]" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['picurl'];?>
" type="text" class="txt pic_upload change_pic_main" >



</div>

<a href="<?php echo $_smarty_tpl->tpl_vars['goods']->value['picurl'];?>
" target="_blank" ><img src="<?php echo $_smarty_tpl->tpl_vars['goods']->value['picurl'];?>
"  /></a>

<input type="file" name="file" class="J_TCajaUploadImg upload_file_btn" data-url="/upload.php" />  

          </td>

          <td class="vtop tips2" >请填写或者上传320X220像素的图片!</td>

        </tr>



        <tr class="noborder"  style="display:none;">

          <td class="td_l">商品副图:</td>

          <td class="vtop rowform"> <?php if ($_smarty_tpl->tpl_vars['goods']->value['images']) {?>

            <?php  $_smarty_tpl->tpl_vars['v1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v1']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['goods']->value['images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v1']->key => $_smarty_tpl->tpl_vars['v1']->value) {
$_smarty_tpl->tpl_vars['v1']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v1']->key;
?>

            <p  class="_hover_img">

              <input  name="images[]" value="<?php echo $_smarty_tpl->tpl_vars['v1']->value;?>
" type="text" class="txt change_pic_value" <?php echo $_smarty_tpl->tpl_vars['readonly']->value;?>
>

             <a href="#" title="<?php echo $_smarty_tpl->tpl_vars['v1']->value;?>
" data-index="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" class="change_pic red">选为主图</a>

             <a href="<?php echo $_smarty_tpl->tpl_vars['v1']->value;?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['v1']->value;?>
"  /></a>

              </p>

            <?php } ?>

            <?php } else { ?>

            <input  name="images[]" value="" type="text" class="txt" >

            <?php }?> </td>

          <td class="vtop tips2" >留空则删除当前图片</td>

        </tr>

        

        

         <tr class="noborder"  style="display:none;">

        <td class="td_l">店铺ID:</td>

        <td class="vtop rowform"><input  name="postdb[sid]" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['sid'];?>
" type="text" class="txt" ></td>

        <td class="vtop tips2" >卖家的淘宝店铺ID</td>

      </tr>

        <tr class="noborder" style="display:none;" >

          <td class="td_l">商家昵称:</td>

          <td class="vtop rowform"><input  name="postdb[nick]" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['nick'];?>
" type="text" class="txt"<?php echo $_smarty_tpl->tpl_vars['readonly']->value;?>
 ></td>

          <td class="vtop tips2" >采集的请不要修改</td>

        </tr>

        <tr class="noborder" style="display:none;">

          <td class="td_l">商品链接地址:</td>

          <td class="vtop rowform"><input  name="postdb[url]" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['url'];?>
" type="text" class="txt" <?php echo $_smarty_tpl->tpl_vars['readonly']->value;?>
></td>

          <td class="vtop tips2" >采集的请不要修改</td>

        </tr>

        <tr class="noborder" >

          <td class="td_l">商品原价:</td>

          <td class="vtop rowform"><input  name="postdb[price]" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['price'];?>
" type="text" class="txt" <?php echo $_smarty_tpl->tpl_vars['readonly']->value;?>
></td>

          <td class="vtop tips2" >采集的请不要修改,最多一位小数</td>

        </tr>

         <tr class="noborder" >

          <td class="td_l" style="color: red;">活动价:</td>

          <td class="vtop rowform"><input  name="postdb[yh_price]" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['yh_price'];?>
" type="text" class="txt" ></td>

          <td class="vtop tips2" >优惠价,最多一位小数</td>

        </tr>

        <tr class="noborder" >

          <td class="td_l">商品库存数量:</td>

          <td class="vtop rowform"><input  name="postdb[num]" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['num'];?>
" type="text" class="txt" <?php echo $_smarty_tpl->tpl_vars['readonly']->value;?>
></td>

          <td class="vtop tips2" >请如实填写</td>

        </tr>

        <tr class="noborder hide" >

          <td class="td_l">上线时间段:</td>

          <td class="vtop rowform"><input  name="postdb[start_time]" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['start_time'];?>
" type="text" class="txt dateline" ></td>

          <td class="vtop tips2" >报名期望上线的时间段(具体时间客服会根据站内情况调整),如果报名整点秒杀请选择正确时间否则影响上线</td>

        </tr>

        <tr class="noborder hide" >

          <td class="td_l">下线时间段:</td>

          <td class="vtop rowform"><input  name="postdb[end_time]" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['end_time'];?>
" type="text" class="txt dateline" ></td>

          <td class="vtop tips2" >报名期望下线的时间段(具体时间客服会根据站内情况调整)</td>

        </tr>

        <tr class="noborder" style="display:none;">

          <td class="td_l">商品所在地:</td>

          <td class="vtop rowform"><input  name="postdb[city]" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['city'];?>
" type="text" class="txt w90" <?php echo $_smarty_tpl->tpl_vars['readonly']->value;?>
>

            省&nbsp;

            <input  name="postdb[state]" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['state'];?>
" type="text" class="txt w90" <?php echo $_smarty_tpl->tpl_vars['readonly']->value;?>
>

            市 </td>

          <td class="vtop tips2" >发货城市</td>

        </tr>

       <tr class="td_l noborder" >

          <td  class="td_l">包邮:</td>

          <td class="vtop rowform"><ul>

              <li >

                <input class="radio" type="radio" name="postdb[baoyou]" value="1" <?php if ($_smarty_tpl->tpl_vars['goods']->value['baoyou']==1) {?>checked="checked"<?php }?> <?php echo $_smarty_tpl->tpl_vars['readonly']->value;?>
>

                &nbsp;是</li>

              <li>

                <input class="radio" type="radio" name="postdb[baoyou]" value="0" <?php if (!$_smarty_tpl->tpl_vars['goods']->value['baoyou']) {?>checked="checked"<?php }?> <?php echo $_smarty_tpl->tpl_vars['readonly']->value;?>
>

                &nbsp;否</li>

            </ul></td>

          <td class="vtop tips2" >如实填写,活动商品必须包邮!</td>

        </tr>

        <tr class="noborder" >

          <td  class="td_l">联系人:</td>

          <td class="vtop rowform"><input name="postdb[apply_user]" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['apply_user'];?>
" type="text" class="txt"></td>

          <td class="vtop tips2" >请填写联系人</td>

        </tr>

        <tr class="noborder" >

          <td  class="td_l">旺旺:</td>

          <td class="vtop rowform"><input name="postdb[apply_wangwang]" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['apply_wangwang'];?>
" type="text" class="txt"></td>

          <td class="vtop tips2" >请填写联系旺旺</td>

        </tr>

         <tr class="noborder" >

          <td  class="td_l">佣金:</td>

          <td class="vtop rowform"><input name="postdb[commission]" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['commission'];?>
" type="text" class="txt"></td>

          <td class="vtop tips2" >5%以上!关系到审核通过的条件之一,填写不实则商品会直接删除或审核不通过</td>

		</tr>

    

        <tr class="noborder" >

          <td  class="td_l">联系电话:</td>

          <td class="vtop rowform"><input name="postdb[apply_phone]" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['apply_phone'];?>
" type="text" class="txt"></td>

          <td class="vtop tips2" >请填写联系电话</td>

        </tr>

        

         <tr class="noborder" >

            <td class="td_l">推荐理由:</td>

            <td class="vtop rowform">

            <textarea rows="3" name="postdb[ly]" cols="35" class="ks-editor-textarea"><?php echo $_smarty_tpl->tpl_vars['goods']->value['ly'];?>
</textarea>

            </td>

            <td class="vtop tips2">商品亮点或推荐理由,100字以内,关系到审核通过的条件之一</td>

   	 </tr>

        <tr>

          <td>&nbsp;</td>

          <td colspan="5"><div class="fixsel"> <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['show_goods']) {?>

              <div class="hide">

                <textarea rows="6" name="postdb[message]" cols="70" class="ks-editor-textarea"><?php echo $_smarty_tpl->tpl_vars['goods']->value['message'];?>
</textarea>

              </div>

              <?php }?>

              <input type="submit" class="btn"   name="onsubmit" title="按 Enter 键可随时提交您的修改" value="提交" >

            </div></td>

        </tr>

        

<input  name="postdb[sum]" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['sum'];?>
" type="hidden" class="txt" >

<input name="postdb[commission]" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['commission'];?>
" type="hidden" class="txt">

      <input type="hidden" name="m" value="<?php echo $_smarty_tpl->tpl_vars['CURMODULE']->value;?>
" />

<input type="hidden" name="a" value="<?php echo $_smarty_tpl->tpl_vars['CURACTION']->value;?>
" />

</form>

        </tbody>

      

    </table>

  </div>
  </div>

</div>

<?php echo $_smarty_tpl->getSubTemplate ("../footer.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
<?php }} ?>
