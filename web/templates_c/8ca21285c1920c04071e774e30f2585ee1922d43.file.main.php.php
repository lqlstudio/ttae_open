<?php /* Smarty version Smarty-3.1.15, created on 2015-09-20 12:28:21
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\admin\shop\main.php" */ ?>
<?php /*%%SmartyHeaderCode:1353055fd7b10d50403-18107744%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ca21285c1920c04071e774e30f2585ee1922d43' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\admin\\shop\\main.php',
      1 => 1442723300,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1353055fd7b10d50403-18107744',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55fd7b113b70a6_24763564',
  'variables' => 
  array (
    'count' => 0,
    'URL' => 0,
    '_G' => 0,
    '_GET' => 0,
    'v' => 0,
    'goods' => 0,
    'IMGDIR' => 0,
    'vv' => 0,
    'vvv' => 0,
    'a' => 0,
    'kk' => 0,
    'showpage' => 0,
    'CURMODULE' => 0,
    'CURACTION' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fd7b113b70a6_24763564')) {function content_55fd7b113b70a6_24763564($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common_admin/left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form enctype="multipart/form-data"  method="post" action="" >
  

  
<div class="table_top">
 <div class="table_top_l">共找到(<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
)条店铺信息</div>
     <div class="table_top_r">
        <ul>


<li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=shop&a=main"><span>全部</span></a></li>
  
  <li class="red">所属分类</li> 
  <!--<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['shop_cate']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>-->
  <li <?php if ($_smarty_tpl->tpl_vars['_GET']->value['cate']==$_smarty_tpl->tpl_vars['v']->value['id']) {?>class="on"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=shop&a=main&cate=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><span><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</span></a></li>
  <!--<?php } ?>-->

<li  class="red">店铺类型</li>
  <li <?php if ($_smarty_tpl->tpl_vars['_GET']->value['shop_type']=='0') {?>class="on"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=shop&a=main&shop_type=0"><span>商城</span></a></li>  
  <li <?php if ($_smarty_tpl->tpl_vars['_GET']->value['shop_type']&&$_smarty_tpl->tpl_vars['_GET']->value['shop_type']==1) {?>class="on"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=shop&a=main&shop_type=1"><span>商城</span></a></li>
<li <?php if ($_smarty_tpl->tpl_vars['_GET']->value['shop_type']&&$_smarty_tpl->tpl_vars['_GET']->value['shop_type']==2) {?>class="on"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=shop&a=main&shop_type=2"><span>集市</span></a></li>

  
        </ul>
  </div>  

</div>

  
  <div class="table_main">
    <table class="tb tb2 nobdb" >
      <tbody>
        <tr class="hover" >
          <td  class="td25">删除</td>
          <td  class="td25">id</td>
          <td >排序</td>
          <td class="td28">促销标题</td>
          <td >店铺类型</td>
          <td >店铺分类</td>
           <td >店铺标签</td>
          <td>店标图片</td>     

          <td>旺旺</td>
          <td>隐藏</td>
          <td>编辑</td>
          <td>删除</td>
          <td>添加时间</td>
        </tr>
      </tbody>
      <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
        <tr class="hover" >
          <td  class="td25"><input type="checkbox" name="del[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" value="1" class="_del" />
            <input type="hidden" name="ids[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" />
            <input type="hidden" name="sid[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
" />
            </td>
          <td  class="td25">
          <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=goods&a=main&nick=<?php echo $_smarty_tpl->tpl_vars['v']->value['nick'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</a>&nbsp;
          <a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
" target="_blank" title="点击查看"><img src="<?php echo $_smarty_tpl->tpl_vars['IMGDIR']->value;?>
/open.gif" ></a></td>
          <td><input type="text" name="sort[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['sort'];?>
" class="w40"></td>
          <td  class="_hover_img td28" style="width:320px;">
          
          <a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['id_url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a>
          <a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['picurl'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['picurl'];?>
"  /></a>
          </td>
           <td >
          <select name="shop_type[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]">
          
          	<option value="0" <?php if ($_smarty_tpl->tpl_vars['v']->value['shop_type']==0) {?> selected="selected"<?php }?>>未知</option>
              <option value="1" <?php if ($_smarty_tpl->tpl_vars['v']->value['shop_type']==1) {?> selected="selected"<?php }?> >集市</option>
              <option value="2" <?php if ($_smarty_tpl->tpl_vars['v']->value['shop_type']==2) {?> selected="selected"<?php }?> >商城</option>
          </select> 
           </td>
          <td >
          <select name="cate[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]">
        <option value="0">----请选择店铺分类----</option>
       <!--<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['shop_cate']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?>-->
<option value="<?php echo $_smarty_tpl->tpl_vars['vv']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['cate']==$_smarty_tpl->tpl_vars['vv']->value['id']) {?> selected="selected" class="on"  <?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['vv']->value['name'];?>
</option>
<!--<?php if ($_smarty_tpl->tpl_vars['vv']->value['sub']) {?>-->
    <!--<?php  $_smarty_tpl->tpl_vars['vvv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vvv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vv']->value['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vvv']->key => $_smarty_tpl->tpl_vars['vvv']->value) {
$_smarty_tpl->tpl_vars['vvv']->_loop = true;
?>-->
<option value="<?php echo $_smarty_tpl->tpl_vars['vvv']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['cate']==$_smarty_tpl->tpl_vars['vvv']->value['id']) {?> selected="selected" class="on" <?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['vvv']->value['name'];?>
</option>
        <!--<?php if ($_smarty_tpl->tpl_vars['vvv']->value['sub']) {?>-->
         <!--<?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vvv']->value['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>-->
         <option value="<?php echo $_smarty_tpl->tpl_vars['a']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['cate']==$_smarty_tpl->tpl_vars['a']->value['id']) {?> selected="selected" class="on"  <?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['a']->value['name'];?>
</option>
        <!--<?php } ?>-->
        <!--<?php }?>-->  
    <!--<?php } ?>-->	
<!--<?php }?>-->              
<!--<?php } ?>-->
          </select> 
          
          </td>
          
         <td >
          <select name="shop_tag[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]">
         <!-- <?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_smarty_tpl->tpl_vars['kk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['setting']['shop_tag']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
 $_smarty_tpl->tpl_vars['kk']->value = $_smarty_tpl->tpl_vars['vv']->key;
?>-->
          <option value="<?php echo $_smarty_tpl->tpl_vars['kk']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['kk']->value==$_smarty_tpl->tpl_vars['v']->value['shop_tag']) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
</option>
          <!--<?php } ?>-->
          </select> 
          </td>
          <td class="_hover_img"><a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['pic_path'];?>
" target="_blank">点击查看</a>
          <a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['pic_path'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['pic_path'];?>
"  /></a>
          </td>
          
       
          <td><a href="" class="_wangwang" data-nick="<?php echo $_smarty_tpl->tpl_vars['v']->value['nick'];?>
" title="点击这里给我发消息"></a>
          </td>
          <td ><input type="checkbox" name="hide[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" value="1" <?php if ($_smarty_tpl->tpl_vars['v']->value['hide']==1) {?> checked<?php }?>></td>
          <td ><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=shop&a=post&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">编辑</a></td>
          <td><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=shop&a=del&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">删除</a></td>
          <td><?php echo $_smarty_tpl->tpl_vars['v']->value['dateline'];?>
</td>
        </tr>
      <?php } ?>
        <tr>
          <td class="td25"><input type="checkbox" class="_del_all" />
          反选</td>
          <td  class="td25"><input type="checkbox"  name="_del_all" value="1"/>删除</td>
          <td  colspan="11"><div class="y"><?php echo $_smarty_tpl->tpl_vars['showpage']->value;?>
</div>
            <div class="fixsel">
            
             <select name="shop_type_in">
             <option value="-1" >店铺类型</option>
              <option value="1" >集市</option>
              <option value="2" >商城</option>
          </select> &nbsp;&nbsp;&nbsp;
            
              <select name="cate_in">
               <option value="-1" >----请选择店铺分类----</option>
            
 <option value="-1">请选择要移动的分类</option>
<!--<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['shop_cate']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?>-->
 <option value="<?php echo $_smarty_tpl->tpl_vars['vv']->value['id'];?>
">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['vv']->value['name'];?>
</option>
<!--<?php if ($_smarty_tpl->tpl_vars['vv']->value['sub']) {?>-->
      <!--<?php  $_smarty_tpl->tpl_vars['vvv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vvv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vv']->value['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vvv']->key => $_smarty_tpl->tpl_vars['vvv']->value) {
$_smarty_tpl->tpl_vars['vvv']->_loop = true;
?>-->
          <option value="<?php echo $_smarty_tpl->tpl_vars['vvv']->value['id'];?>
" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['vvv']->value['name'];?>
</option>
          <!--<?php if ($_smarty_tpl->tpl_vars['vvv']->value['sub']) {?>-->
           <!--<?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vvv']->value['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>-->
           <option value="<?php echo $_smarty_tpl->tpl_vars['a']->value['id'];?>
" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['a']->value['name'];?>
</option>
          <!--<?php } ?>-->
          <!--<?php }?>-->  
      <!--<?php } ?>-->
<!--<?php }?>-->              
<!--<?php } ?>-->

              
              </select> &nbsp;&nbsp;&nbsp;            
            
            <select name="shop_tag_in">
             <option value="-1" >店铺标签</option>
             <!-- <?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_smarty_tpl->tpl_vars['kk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['setting']['shop_tag']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
 $_smarty_tpl->tpl_vars['kk']->value = $_smarty_tpl->tpl_vars['vv']->key;
?>-->
              <option value="<?php echo $_smarty_tpl->tpl_vars['kk']->value;?>
" ><?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
</option>
              <!--<?php } ?>-->
              </select> &nbsp;&nbsp;&nbsp;
              <input type="submit" class="btn submit_btn"  name="onsubmit"  value="提交修改">
              
            </div></td>
        </tr>

    </table>
  </div>
<input type="hidden" name="m" value="<?php echo $_smarty_tpl->tpl_vars['CURMODULE']->value;?>
" />
<input type="hidden" name="a" value="<?php echo $_smarty_tpl->tpl_vars['CURACTION']->value;?>
" />
</form>
<?php echo $_smarty_tpl->getSubTemplate ('../common_admin/right_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
