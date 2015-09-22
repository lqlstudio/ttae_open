<?php /* Smarty version Smarty-3.1.15, created on 2015-09-20 12:22:43
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\admin\cate\main.php" */ ?>
<?php /*%%SmartyHeaderCode:2442055fe3493e63794-41261544%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'caeee8bc5da225b31f8ec6aae1802056e51979db' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\admin\\cate\\main.php',
      1 => 1441350033,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2442055fe3493e63794-41261544',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'count' => 0,
    'cate' => 0,
    'URL' => 0,
    'CM' => 0,
    'v' => 0,
    'IMGDIR' => 0,
    'vv' => 0,
    'vvv' => 0,
    'a' => 0,
    'v1' => 0,
    'a1' => 0,
    'va' => 0,
    'CURMODULE' => 0,
    'CURACTION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55fe34945409a7_50374742',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fe34945409a7_50374742')) {function content_55fe34945409a7_50374742($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common_admin/left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form enctype="multipart/form-data"  method="post" action="" >

<div class="table_top">共找到(<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
)条分类信息</div>
  <div class="table_main">

  <table class="tb tb2 nobdb" >
    <tbody>

      <tr class="hover" >
        <td class="td25">id</td>
        <td class="td25">排序</td>
        <td class="td28">分类名称</td>
        
         <td class="td28">分类图片</td>
          <td class="td28">分类图片链接</td>
          
        <td class="td28">上级分类</td>
        <td class="td28">隐藏</td>
         <td class="td28">编辑/删除</td>
        <td class="td28">清空商品</td>
        
      </tr>
      </tbody>
    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cate']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
     <tbody>
      <tr class="hover" >
        <td class="td25"><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=<?php echo $_smarty_tpl->tpl_vars['CM']->value;?>
&a=main&cate=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</a>&nbsp;
        <a href="/index.php?m=<?php echo $_smarty_tpl->tpl_vars['CM']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" target="_blank" title="前台查看"><img src="<?php echo $_smarty_tpl->tpl_vars['IMGDIR']->value;?>
/open.gif" ></a>
          <input type="hidden" name="ids[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"></td>
        <td class="td25"><input type="text" name="sort[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['sort'];?>
" class="w40"></td>
        <td class="td28">
          <input type="text" name="name[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
">1级</td>
          
           <td class="td28 _hover_img"> <input type="text" name="picurl[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['picurl'];?>
">
             <a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['picurl'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['picurl'];?>
" /></a>
           </td>
         <td class="td28"> <input type="text" name="pic_url[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['pic_url'];?>
"></td>
         

        <td class="td28">
        <select name="fup[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" class="fup select_id">
 <option value="0" <?php if ($_smarty_tpl->tpl_vars['v']->value['id']==0) {?> selected="selected" class="on"  <?php }?>>----顶级分类----</option>
<!--<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cate']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?>-->
 <option value="<?php echo $_smarty_tpl->tpl_vars['vv']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['fup']==$_smarty_tpl->tpl_vars['vv']->value['id']) {?> selected="selected" class="on"  <?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['vv']->value['name'];?>
</option>
<!--<?php if ($_smarty_tpl->tpl_vars['vv']->value['sub']) {?>-->
      <!--<?php  $_smarty_tpl->tpl_vars['vvv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vvv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vv']->value['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vvv']->key => $_smarty_tpl->tpl_vars['vvv']->value) {
$_smarty_tpl->tpl_vars['vvv']->_loop = true;
?>-->
          <option value="<?php echo $_smarty_tpl->tpl_vars['vvv']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['id']==$_smarty_tpl->tpl_vars['vvv']->value['id']) {?> selected="selected" class="on" <?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['vvv']->value['name'];?>
</option>
          <!--<?php if ($_smarty_tpl->tpl_vars['vvv']->value['sub']==3) {?>-->
           <!--<?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vvv']->value['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>-->
           <option value="<?php echo $_smarty_tpl->tpl_vars['a']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['id']==$_smarty_tpl->tpl_vars['a']->value['id']) {?> selected="selected" class="on"  <?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['a']->value['name'];?>
</option>
          <!--<?php } ?>-->
          <!--<?php }?>-->  
      <!--<?php } ?>-->
<!--<?php }?>-->              
<!--<?php } ?>-->
</select>

          </td>
        <td class="td28"><input type="checkbox" name="hide[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['hide']==1) {?> checked<?php }?>></td>
        <td class="td28"><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=<?php echo $_smarty_tpl->tpl_vars['CM']->value;?>
&a=cate_post&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">编辑</a>&nbsp; 
        <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=<?php echo $_smarty_tpl->tpl_vars['CM']->value;?>
&a=cate_del&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">删除</a></td>
        <td class="td28"><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=<?php echo $_smarty_tpl->tpl_vars['CM']->value;?>
&a=cate_clear&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">清空商品(<?php echo $_smarty_tpl->tpl_vars['v']->value['count'];?>
)</a></td>
      </tr>
      </tbody>

<!--显示二级分类-->
<?php if ($_smarty_tpl->tpl_vars['v']->value['sub']) {?>
   
        <!--<?php  $_smarty_tpl->tpl_vars['v1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['v']->value['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v1']->key => $_smarty_tpl->tpl_vars['v1']->value) {
$_smarty_tpl->tpl_vars['v1']->_loop = true;
?>-->
         <tbody>
        <tr class="hover" >
          <td class="td28"><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=<?php echo $_smarty_tpl->tpl_vars['CM']->value;?>
&a=main&cate=<?php echo $_smarty_tpl->tpl_vars['v1']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v1']->value['id'];?>
</a>&nbsp;&nbsp;
           <a href="/index.php?m=<?php echo $_smarty_tpl->tpl_vars['CM']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['v1']->value['id'];?>
" target="_blank" title="前台查看"><img src="<?php echo $_smarty_tpl->tpl_vars['IMGDIR']->value;?>
/open.gif" ></a>
            <input type="hidden" name="ids[<?php echo $_smarty_tpl->tpl_vars['v1']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['v1']->value['id'];?>
"></td>
          <td class="td25" >
          <div class="board">
          <input type="text" name="sort[<?php echo $_smarty_tpl->tpl_vars['v1']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['v1']->value['sort'];?>
"  class="w40">
          </div>
          </td>
          <td class="td28"><div class="board"> <input type="text" name="name[<?php echo $_smarty_tpl->tpl_vars['v1']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['v1']->value['name'];?>
">2级</div>
            </td>
            
         <td class="td28 _hover_img"> <input type="text" name="picurl[<?php echo $_smarty_tpl->tpl_vars['v1']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['v1']->value['picurl'];?>
">
           <a href="<?php echo $_smarty_tpl->tpl_vars['v1']->value['picurl'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['v1']->value['picurl'];?>
" /></a>
         </td>
         <td class="td28"> <input type="text" name="pic_url[<?php echo $_smarty_tpl->tpl_vars['v1']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['v1']->value['pic_url'];?>
"></td>
            

          <td class="td28"><select name="fup[<?php echo $_smarty_tpl->tpl_vars['v1']->value['id'];?>
]" class="fup">
           <option value="0" <?php if ($_smarty_tpl->tpl_vars['v1']->value['id']==0) {?> selected="selected" class="on"  <?php }?>>----顶级分类----</option>
            <!--<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cate']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?>-->
             <option value="<?php echo $_smarty_tpl->tpl_vars['vv']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['v1']->value['fup']==$_smarty_tpl->tpl_vars['vv']->value['id']) {?> selected="selected" class="on"  <?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['vv']->value['name'];?>
</option>
                    <!--<?php if ($_smarty_tpl->tpl_vars['vv']->value['sub']) {?>-->
                          <!--<?php  $_smarty_tpl->tpl_vars['vvv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vvv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vv']->value['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vvv']->key => $_smarty_tpl->tpl_vars['vvv']->value) {
$_smarty_tpl->tpl_vars['vvv']->_loop = true;
?>-->
                              <option value="<?php echo $_smarty_tpl->tpl_vars['vvv']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['v1']->value['fup']==$_smarty_tpl->tpl_vars['vvv']->value['id']) {?> selected="selected" class="on" <?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['vvv']->value['name'];?>
</option>
                              <!--<?php if ($_smarty_tpl->tpl_vars['vvv']->value['sub']==3) {?>-->
                                   <!--<?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vvv']->value['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>-->
                                   <option value="<?php echo $_smarty_tpl->tpl_vars['a']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['v1']->value['fup']==$_smarty_tpl->tpl_vars['a']->value['id']) {?> selected="selected" class="on"  <?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['a']->value['name'];?>
</option>
                                  <!--<?php } ?>-->
                             <!--<?php }?>-->            
                         <!--<?php } ?>-->
       				 <!--<?php }?>--> 
       	 <!--<?php } ?>-->          
            </select></td>
          <td><input type="checkbox" name="hide[<?php echo $_smarty_tpl->tpl_vars['v1']->value['id'];?>
]"  value="<?php echo $_smarty_tpl->tpl_vars['v1']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['v1']->value['hide']==1) {?> checked<?php }?>></td>
          <td><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=<?php echo $_smarty_tpl->tpl_vars['CM']->value;?>
&a=cate_post&id=<?php echo $_smarty_tpl->tpl_vars['v1']->value['id'];?>
">编辑</a>&nbsp; 
          <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=<?php echo $_smarty_tpl->tpl_vars['CM']->value;?>
&a=cate_del&id=<?php echo $_smarty_tpl->tpl_vars['v1']->value['id'];?>
"  class="_confirm" data-msg="您确定要删除当前分类吗?删除后不可恢复">删除</a></td>
          <td> <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=<?php echo $_smarty_tpl->tpl_vars['CM']->value;?>
&a=cate_clear&id=<?php echo $_smarty_tpl->tpl_vars['v1']->value['id'];?>
" >清空商品(<?php echo $_smarty_tpl->tpl_vars['v1']->value['count'];?>
)</a></td>
        </tr>
        
        
        
        

        
        
        
        
        
        
        
<!--显示三级分类-->
<?php if ($_smarty_tpl->tpl_vars['v1']->value['sub']) {?>
    <tbody>
        <!--<?php  $_smarty_tpl->tpl_vars['a1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['v1']->value['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a1']->key => $_smarty_tpl->tpl_vars['a1']->value) {
$_smarty_tpl->tpl_vars['a1']->_loop = true;
?>-->
        <tr class="hover" >
          <td class="td28"><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=<?php echo $_smarty_tpl->tpl_vars['CM']->value;?>
&a=main&cate=<?php echo $_smarty_tpl->tpl_vars['a1']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['a1']->value['id'];?>
</a>&nbsp;&nbsp;
           <a href="/index.php?m=<?php echo $_smarty_tpl->tpl_vars['CM']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['va']->value['id'];?>
" target="_blank" title="前台查看"><img src="<?php echo $_smarty_tpl->tpl_vars['IMGDIR']->value;?>
/open.gif" ></a>
            <input type="hidden" name="ids[<?php echo $_smarty_tpl->tpl_vars['a1']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['a1']->value['id'];?>
"></td>
          <td class="td25" >
          <div class="board"  style="margin-left: 30px;">
         	 <input type="text" name="sort[<?php echo $_smarty_tpl->tpl_vars['a1']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['a1']->value['sort'];?>
"  class="w40">
          </div>
          </td>
          <td class="td28"><div class="board" style="margin-left: 70px;"> <input type="text" name="name[<?php echo $_smarty_tpl->tpl_vars['a1']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['a1']->value['name'];?>
"><span class="red">3级</span></div>
            </td>
            
             <td class="td28 _hover_img"> <input type="text" name="picurl[<?php echo $_smarty_tpl->tpl_vars['a1']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['a1']->value['picurl'];?>
">
             <a href="<?php echo $_smarty_tpl->tpl_vars['a1']->value['picurl'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['a1']->value['picurl'];?>
" /></a>
             </td>
         <td class="td28"> <input type="text" name="pic_url[<?php echo $_smarty_tpl->tpl_vars['a1']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['a1']->value['pic_url'];?>
"></td>

          <td class="td28"><select name="fup[<?php echo $_smarty_tpl->tpl_vars['a1']->value['id'];?>
]" class="fup">
           <option value="0" <?php if ($_smarty_tpl->tpl_vars['a1']->value['id']==0) {?> selected="selected" class="on"  <?php }?>>----顶级分类----</option>
            <!--<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cate']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?>-->
             <option value="<?php echo $_smarty_tpl->tpl_vars['vv']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['a1']->value['fup']==$_smarty_tpl->tpl_vars['vv']->value['id']) {?> selected="selected" class="on"  <?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['vv']->value['name'];?>
</option>
                    <!--<?php if ($_smarty_tpl->tpl_vars['vv']->value['sub']) {?>-->
                          <!--<?php  $_smarty_tpl->tpl_vars['vvv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vvv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vv']->value['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vvv']->key => $_smarty_tpl->tpl_vars['vvv']->value) {
$_smarty_tpl->tpl_vars['vvv']->_loop = true;
?>-->
                              <option value="<?php echo $_smarty_tpl->tpl_vars['vvv']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['a1']->value['fup']==$_smarty_tpl->tpl_vars['vvv']->value['id']) {?> selected="selected" class="on" <?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['vvv']->value['name'];?>
</option>
                              <!--<?php if ($_smarty_tpl->tpl_vars['vvv']->value['sub']==3) {?>-->
                                   <!--<?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vvv']->value['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>-->
                                   <option value="<?php echo $_smarty_tpl->tpl_vars['a']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['a1']->value['fup']==$_smarty_tpl->tpl_vars['a']->value['id']) {?> selected="selected" class="on"  <?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['a']->value['name'];?>
</option>
                                  <!--<?php } ?>-->
                             <!--<?php }?>-->            
                         <!--<?php } ?>-->
       				 <!--<?php }?>--> 
       	 <!--<?php } ?>-->          
            </select></td>
          <td><input type="checkbox" name="hide[<?php echo $_smarty_tpl->tpl_vars['a1']->value['id'];?>
]"  value="<?php echo $_smarty_tpl->tpl_vars['a1']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['a1']->value['hide']==1) {?> checked<?php }?>></td>
          <td><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=<?php echo $_smarty_tpl->tpl_vars['CM']->value;?>
&a=cate_post&id=<?php echo $_smarty_tpl->tpl_vars['a1']->value['id'];?>
">编辑</a>&nbsp; 
              <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=<?php echo $_smarty_tpl->tpl_vars['CM']->value;?>
&a=cate_del&id=<?php echo $_smarty_tpl->tpl_vars['a1']->value['id'];?>
" >删除</a></td>
          <td><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=<?php echo $_smarty_tpl->tpl_vars['CM']->value;?>
&a=cate_clear&id=<?php echo $_smarty_tpl->tpl_vars['a1']->value['id'];?>
" >清空商品(<?php echo $_smarty_tpl->tpl_vars['a1']->value['count'];?>
)</a></td>
        </tr>
        <!--<?php } ?>-->
    </tbody>
    
<?php }?>
        
        
         </tbody>
        <!--<?php } ?>-->
    
<?php }?>

    <?php } ?>
	 <tbody class="tb tb2 ">
      <tr>
      <td>&nbsp;</td>
        <td colspan="4"><div class="fixsel">
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
