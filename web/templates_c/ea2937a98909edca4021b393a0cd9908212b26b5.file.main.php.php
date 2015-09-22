<?php /* Smarty version Smarty-3.1.15, created on 2015-09-20 10:37:14
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\admin\article\main.php" */ ?>
<?php /*%%SmartyHeaderCode:873855fe1bda411538-52325819%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea2937a98909edca4021b393a0cd9908212b26b5' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\admin\\article\\main.php',
      1 => 1441350033,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '873855fe1bda411538-52325819',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'count' => 0,
    'URL' => 0,
    '_GET' => 0,
    'article' => 0,
    'v' => 0,
    '_G' => 0,
    'vv' => 0,
    'vvv' => 0,
    'a' => 0,
    'showpage' => 0,
    'CURMODULE' => 0,
    'CURACTION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55fe1bda7ee934_90820889',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fe1bda7ee934_90820889')) {function content_55fe1bda7ee934_90820889($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common_admin/left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form enctype="multipart/form-data" method="POST"  action="">
  
  <div class="table_top">
 <div class="table_top_l">共找到(<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
)条文章信息</div>
     <div class="table_top_r">
        <ul>


<li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=article&a=main"><span>全部</span></a></li>

<li <?php if ($_smarty_tpl->tpl_vars['_GET']->value['hide']==1) {?>class="on"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=article&a=main&hide=1"><span>隐藏</span></a></li>
<li <?php if ($_smarty_tpl->tpl_vars['_GET']->value['hide']==2) {?>class="on"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=article&a=main&hide=2"><span>非隐藏</span></a></li>
<li <?php if ($_smarty_tpl->tpl_vars['_GET']->value['picurl']==1) {?>class="on"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=article&a=main&picurl=1"><span>有图片</span></a></li>
<li <?php if ($_smarty_tpl->tpl_vars['_GET']->value['picurl']==2) {?>class="on"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=article&a=main&picurl=2"><span>无图片</span></a></li>
<li <?php if ($_smarty_tpl->tpl_vars['_GET']->value['url']==1) {?>class="on"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=article&a=main&url=1"><span>有跳转</span></a></li>
<li <?php if ($_smarty_tpl->tpl_vars['_GET']->value['url']==2) {?>class="on"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=article&a=main&url=2"><span>无跳转</span></a></li>
   

        </ul>
  </div>  

</div>

    <div class="table_main">
  <table class="tb tb2 ">
    <tbody>      
      <tr class="hover">
        <th class="td25">删除</th>
        <th>id</th>
        <th>排序</th>
        <th  class="goods_title">标题</th>
        <th>标签</th>
        <th>发布时间</th>
        <th>隐藏</th>
        <th>编辑</th>
        <th>删除</th>
      </tr>
      <!--<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>-->
      <tr class="hover">
        <td class="td25"><input type="checkbox" name="del[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" value="1" class="_del" />
          <input type="hidden" name="ids[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" /></td>
               <td><a href="/index.php?m=article&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</a></td>
        <td><input type="text" name="sort[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['sort'];?>
"  class="w40"/></td>
        <td class="goods_title <?php if ($_smarty_tpl->tpl_vars['v']->value['picurl']) {?>_hover_img<?php }?>"><a href="/index.php?m=article&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a>
        <?php if ($_smarty_tpl->tpl_vars['v']->value['picurl']) {?><a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['picurl'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['picurl'];?>
"  /></a><?php }?>
        </td>
        <td>
<select name="cates[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" class="select_fid"> 
 <option value="0">----请选择分类----</option>
<!--<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['article_cate']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
        <td ><?php echo $_smarty_tpl->tpl_vars['v']->value['dateline'];?>
</td>
        <td><input type="checkbox" name="hide[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" value="1" <?php if ($_smarty_tpl->tpl_vars['v']->value['hide']==1) {?> checked="checked" <?php }?> /></td>
        <td><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=article&a=post&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">编辑</a></td>
        <td><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=article&a=del&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" >删除</a></td>
      </tr>
      <!--<?php } ?>-->
      <tr>
        <td class="td25"><input type="checkbox" class="_del_all" />
          反选</td>
          <td class="td25"><input type="checkbox"  name="_del_all" value="1"/>删除</td>
        <td colspan="8">
        <div class="y"><?php echo $_smarty_tpl->tpl_vars['showpage']->value;?>
</div>
        <div class="fixsel">
       <select name="in_cate" class="select_fid"> 
 <option value="-1">请选择要移动的分类</option>
<!--<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['article_cate']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
</select>

          &nbsp;&nbsp;
            <input type="submit" class="btn submit_btn" name="onsubmit"  value=" 提 交" >
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
