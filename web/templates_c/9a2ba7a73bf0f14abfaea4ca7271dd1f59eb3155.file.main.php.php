<?php /* Smarty version Smarty-3.1.15, created on 2015-09-20 10:37:43
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\admin\channel\main.php" */ ?>
<?php /*%%SmartyHeaderCode:2900555fe1bf7228f73-54519030%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a2ba7a73bf0f14abfaea4ca7271dd1f59eb3155' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\admin\\channel\\main.php',
      1 => 1441350033,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2900555fe1bf7228f73-54519030',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'count' => 0,
    '_G' => 0,
    'URL' => 0,
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
  'unifunc' => 'content_55fe1bf77d90a0_36414333',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fe1bf77d90a0_36414333')) {function content_55fe1bf77d90a0_36414333($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common_admin/left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form enctype="multipart/form-data"  method="post" action="" >

<div class="table_top">共找到(<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
)条栏目信息</div>
  <div class="table_main">

  <table class="tb tb2 nobdb" >
    <tbody>

      <tr class="hover" >
        <td class="td25">fid</td>
        <td class="td25">排序</td>
        <td class="td28">栏目名称</td>
        
         <td class="td28">栏目图片</td>
          <td class="td28">栏目图片链接</td>
          
        <td class="td28">上级栏目</td>
        <td class="td28">隐藏</td>
         <td class="td28">编辑/删除</td>
        <td class="td28">清空商品</td>
        
      </tr>
      </tbody>
    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['channels']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
     <tbody>
      <tr class="hover" >
        <td class="td25"><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=goods&a=main&fid=<?php echo $_smarty_tpl->tpl_vars['v']->value['fid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['fid'];?>
</a>&nbsp;
        <a href="/index.php?&fid=<?php echo $_smarty_tpl->tpl_vars['v']->value['fid'];?>
" target="_blank" title="前台查看"><img src="<?php echo $_smarty_tpl->tpl_vars['IMGDIR']->value;?>
/open.gif" ></a>
          <input type="hidden" name="fid[<?php echo $_smarty_tpl->tpl_vars['v']->value['fid'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['fid'];?>
"></td>
        <td class="td25"><input type="text" name="sort[<?php echo $_smarty_tpl->tpl_vars['v']->value['fid'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['sort'];?>
" class="w40"></td>
        <td class="td28">
          <input type="text" name="name[<?php echo $_smarty_tpl->tpl_vars['v']->value['fid'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
">1级</td>
          
           <td class="td28 _hover_img"> <input type="text" name="picurl[<?php echo $_smarty_tpl->tpl_vars['v']->value['fid'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['picurl'];?>
">
             <a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['picurl'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['picurl'];?>
" /></a>
           </td>
         <td class="td28"> <input type="text" name="url[<?php echo $_smarty_tpl->tpl_vars['v']->value['fid'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['org_url'];?>
"></td>
         

        <td class="td28">
        <select name="fup[<?php echo $_smarty_tpl->tpl_vars['v']->value['fid'];?>
]" class="fup select_fid">
 <option value="0" <?php if ($_smarty_tpl->tpl_vars['v']->value['fid']==0) {?> selected="selected" class="on"  <?php }?>>----顶级栏目----</option>
<!--<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['channels']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?>-->
 <option value="<?php echo $_smarty_tpl->tpl_vars['vv']->value['fid'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['fup']==$_smarty_tpl->tpl_vars['vv']->value['fid']) {?> selected="selected" class="on"  <?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['vv']->value['name'];?>
</option>
<!--<?php if ($_smarty_tpl->tpl_vars['vv']->value['sub']) {?>-->
      <!--<?php  $_smarty_tpl->tpl_vars['vvv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vvv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vv']->value['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vvv']->key => $_smarty_tpl->tpl_vars['vvv']->value) {
$_smarty_tpl->tpl_vars['vvv']->_loop = true;
?>-->
          <option value="<?php echo $_smarty_tpl->tpl_vars['vvv']->value['fid'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['fid']==$_smarty_tpl->tpl_vars['vvv']->value['fid']) {?> selected="selected" class="on" <?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['vvv']->value['name'];?>
</option>
          <!--<?php if ($_smarty_tpl->tpl_vars['vvv']->value['sub']==3) {?>-->
           <!--<?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vvv']->value['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>-->
           <option value="<?php echo $_smarty_tpl->tpl_vars['a']->value['fid'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['fid']==$_smarty_tpl->tpl_vars['a']->value['fid']) {?> selected="selected" class="on"  <?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['a']->value['name'];?>
</option>
          <!--<?php } ?>-->
          <!--<?php }?>-->  
      <!--<?php } ?>-->
<!--<?php }?>-->              
<!--<?php } ?>-->
</select>

          </td>
        <td class="td28"><input type="checkbox" name="hide[<?php echo $_smarty_tpl->tpl_vars['v']->value['fid'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['fid'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['hide']==1) {?> checked<?php }?>></td>
        <td class="td28"><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
&a=post&fid=<?php echo $_smarty_tpl->tpl_vars['v']->value['fid'];?>
">编辑</a>&nbsp; <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
&a=del&fid=<?php echo $_smarty_tpl->tpl_vars['v']->value['fid'];?>
">删除</a></td>
        <td class="td28"> <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
&a=clear&fid=<?php echo $_smarty_tpl->tpl_vars['v']->value['fid'];?>
">清空商品(<?php echo $_smarty_tpl->tpl_vars['v']->value['count'];?>
)</a></td>
      </tr>
      </tbody>

<!--显示二级栏目-->
<?php if ($_smarty_tpl->tpl_vars['v']->value['sub']) {?>
   
        <!--<?php  $_smarty_tpl->tpl_vars['v1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['v']->value['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v1']->key => $_smarty_tpl->tpl_vars['v1']->value) {
$_smarty_tpl->tpl_vars['v1']->_loop = true;
?>-->
         <tbody>
        <tr class="hover" >
          <td class="td28"><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=goods&a=main&fid=<?php echo $_smarty_tpl->tpl_vars['v1']->value['fid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v1']->value['fid'];?>
</a>&nbsp;&nbsp;
           <a href="/index.php?&fid=<?php echo $_smarty_tpl->tpl_vars['v1']->value['fid'];?>
" target="_blank" title="前台查看"><img src="<?php echo $_smarty_tpl->tpl_vars['IMGDIR']->value;?>
/open.gif" ></a>
            <input type="hidden" name="fid[<?php echo $_smarty_tpl->tpl_vars['v1']->value['fid'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['v1']->value['fid'];?>
"></td>
          <td class="td25" >
          <div class="board">
          <input type="text" name="sort[<?php echo $_smarty_tpl->tpl_vars['v1']->value['fid'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['v1']->value['sort'];?>
"  class="w40">
          </div>
          </td>
          <td class="td28"><div class="board"> <input type="text" name="name[<?php echo $_smarty_tpl->tpl_vars['v1']->value['fid'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['v1']->value['name'];?>
">2级</div>
            </td>
            
         <td class="td28 _hover_img"> <input type="text" name="picurl[<?php echo $_smarty_tpl->tpl_vars['v1']->value['fid'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['v1']->value['picurl'];?>
">
           <a href="<?php echo $_smarty_tpl->tpl_vars['v1']->value['picurl'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['v1']->value['picurl'];?>
" /></a>
         </td>
         <td class="td28"> <input type="text" name="url[<?php echo $_smarty_tpl->tpl_vars['v1']->value['fid'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['v1']->value['org_url'];?>
"></td>
            

          <td class="td28"><select name="fup[<?php echo $_smarty_tpl->tpl_vars['v1']->value['fid'];?>
]" class="fup">
           <option value="0" <?php if ($_smarty_tpl->tpl_vars['v1']->value['fid']==0) {?> selected="selected" class="on"  <?php }?>>----顶级栏目----</option>
            <!--<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['channels']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?>-->
             <option value="<?php echo $_smarty_tpl->tpl_vars['vv']->value['fid'];?>
" <?php if ($_smarty_tpl->tpl_vars['v1']->value['fup']==$_smarty_tpl->tpl_vars['vv']->value['fid']) {?> selected="selected" class="on"  <?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['vv']->value['name'];?>
</option>
                    <!--<?php if ($_smarty_tpl->tpl_vars['vv']->value['sub']) {?>-->
                          <!--<?php  $_smarty_tpl->tpl_vars['vvv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vvv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vv']->value['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vvv']->key => $_smarty_tpl->tpl_vars['vvv']->value) {
$_smarty_tpl->tpl_vars['vvv']->_loop = true;
?>-->
                              <option value="<?php echo $_smarty_tpl->tpl_vars['vvv']->value['fid'];?>
" <?php if ($_smarty_tpl->tpl_vars['v1']->value['fup']==$_smarty_tpl->tpl_vars['vvv']->value['fid']) {?> selected="selected" class="on" <?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['vvv']->value['name'];?>
</option>
                              <!--<?php if ($_smarty_tpl->tpl_vars['vvv']->value['sub']==3) {?>-->
                                   <!--<?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vvv']->value['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>-->
                                   <option value="<?php echo $_smarty_tpl->tpl_vars['a']->value['fid'];?>
" <?php if ($_smarty_tpl->tpl_vars['v1']->value['fup']==$_smarty_tpl->tpl_vars['a']->value['fid']) {?> selected="selected" class="on"  <?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['a']->value['name'];?>
</option>
                                  <!--<?php } ?>-->
                             <!--<?php }?>-->            
                         <!--<?php } ?>-->
       				 <!--<?php }?>--> 
       	 <!--<?php } ?>-->          
            </select></td>
          <td><input type="checkbox" name="hide[<?php echo $_smarty_tpl->tpl_vars['v1']->value['fid'];?>
]"  value="<?php echo $_smarty_tpl->tpl_vars['v1']->value['fid'];?>
" <?php if ($_smarty_tpl->tpl_vars['v1']->value['hide']==1) {?> checked<?php }?>></td>
          <td><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
&a=post&fid=<?php echo $_smarty_tpl->tpl_vars['v1']->value['fid'];?>
">编辑</a>&nbsp; 
          <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
&a=del&fid=<?php echo $_smarty_tpl->tpl_vars['v1']->value['fid'];?>
"  class="_confirm" data-msg="您确定要删除当前栏目吗?删除后不可恢复">删除</a></td>
          <td> <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
&a=clear&fid=<?php echo $_smarty_tpl->tpl_vars['v1']->value['fid'];?>
" >清空商品(<?php echo $_smarty_tpl->tpl_vars['v1']->value['count'];?>
)</a></td>
        </tr>
        
        
        
        

        
        
        
        
        
        
        
<!--显示三级栏目-->
<?php if ($_smarty_tpl->tpl_vars['v1']->value['sub']) {?>
    <tbody>
        <!--<?php  $_smarty_tpl->tpl_vars['a1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['v1']->value['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a1']->key => $_smarty_tpl->tpl_vars['a1']->value) {
$_smarty_tpl->tpl_vars['a1']->_loop = true;
?>-->
        <tr class="hover" >
          <td class="td28"><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=goods&a=main&fid=<?php echo $_smarty_tpl->tpl_vars['a1']->value['fid'];?>
"><?php echo $_smarty_tpl->tpl_vars['a1']->value['fid'];?>
</a>&nbsp;&nbsp;
           <a href="/index.php?&fid=<?php echo $_smarty_tpl->tpl_vars['va']->value['fid'];?>
" target="_blank" title="前台查看"><img src="<?php echo $_smarty_tpl->tpl_vars['IMGDIR']->value;?>
/open.gif" ></a>
            <input type="hidden" name="fid[<?php echo $_smarty_tpl->tpl_vars['a1']->value['fid'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['a1']->value['fid'];?>
"></td>
          <td class="td25" >
          <div class="board"  style="margin-left: 30px;">
         	 <input type="text" name="sort[<?php echo $_smarty_tpl->tpl_vars['a1']->value['fid'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['a1']->value['sort'];?>
"  class="w40">
          </div>
          </td>
          <td class="td28"><div class="board" style="margin-left: 70px;"> <input type="text" name="name[<?php echo $_smarty_tpl->tpl_vars['a1']->value['fid'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['a1']->value['name'];?>
"><span class="red">3级</span></div>
            </td>
            
             <td class="td28 _hover_img"> <input type="text" name="picurl[<?php echo $_smarty_tpl->tpl_vars['a1']->value['fid'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['a1']->value['picurl'];?>
">
             <a href="<?php echo $_smarty_tpl->tpl_vars['a1']->value['picurl'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['a1']->value['picurl'];?>
" /></a>
             </td>
         <td class="td28"> <input type="text" name="url[<?php echo $_smarty_tpl->tpl_vars['a1']->value['fid'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['a1']->value['org_url'];?>
"></td>

          <td class="td28"><select name="fup[<?php echo $_smarty_tpl->tpl_vars['a1']->value['fid'];?>
]" class="fup">
           <option value="0" <?php if ($_smarty_tpl->tpl_vars['a1']->value['fid']==0) {?> selected="selected" class="on"  <?php }?>>----顶级栏目----</option>
            <!--<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['channels']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?>-->
             <option value="<?php echo $_smarty_tpl->tpl_vars['vv']->value['fid'];?>
" <?php if ($_smarty_tpl->tpl_vars['a1']->value['fup']==$_smarty_tpl->tpl_vars['vv']->value['fid']) {?> selected="selected" class="on"  <?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['vv']->value['name'];?>
</option>
                    <!--<?php if ($_smarty_tpl->tpl_vars['vv']->value['sub']) {?>-->
                          <!--<?php  $_smarty_tpl->tpl_vars['vvv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vvv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vv']->value['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vvv']->key => $_smarty_tpl->tpl_vars['vvv']->value) {
$_smarty_tpl->tpl_vars['vvv']->_loop = true;
?>-->
                              <option value="<?php echo $_smarty_tpl->tpl_vars['vvv']->value['fid'];?>
" <?php if ($_smarty_tpl->tpl_vars['a1']->value['fup']==$_smarty_tpl->tpl_vars['vvv']->value['fid']) {?> selected="selected" class="on" <?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['vvv']->value['name'];?>
</option>
                              <!--<?php if ($_smarty_tpl->tpl_vars['vvv']->value['sub']==3) {?>-->
                                   <!--<?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vvv']->value['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>-->
                                   <option value="<?php echo $_smarty_tpl->tpl_vars['a']->value['fid'];?>
" <?php if ($_smarty_tpl->tpl_vars['a1']->value['fup']==$_smarty_tpl->tpl_vars['a']->value['fid']) {?> selected="selected" class="on"  <?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['a']->value['name'];?>
</option>
                                  <!--<?php } ?>-->
                             <!--<?php }?>-->            
                         <!--<?php } ?>-->
       				 <!--<?php }?>--> 
       	 <!--<?php } ?>-->          
            </select></td>
          <td><input type="checkbox" name="hide[<?php echo $_smarty_tpl->tpl_vars['a1']->value['fid'];?>
]"  value="<?php echo $_smarty_tpl->tpl_vars['a1']->value['fid'];?>
" <?php if ($_smarty_tpl->tpl_vars['a1']->value['hide']==1) {?> checked<?php }?>></td>
          <td><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
&a=post&fid=<?php echo $_smarty_tpl->tpl_vars['a1']->value['fid'];?>
">编辑</a>&nbsp; 
          <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
&a=del&fid=<?php echo $_smarty_tpl->tpl_vars['a1']->value['fid'];?>
" >删除</a></td>
          <td><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
&a=clear&fid=<?php echo $_smarty_tpl->tpl_vars['a1']->value['fid'];?>
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
