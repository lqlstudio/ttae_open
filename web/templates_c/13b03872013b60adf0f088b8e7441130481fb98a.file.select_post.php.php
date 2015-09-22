<?php /* Smarty version Smarty-3.1.15, created on 2015-09-21 00:29:44
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\admin\common_admin\select_post.php" */ ?>
<?php /*%%SmartyHeaderCode:1714855fedee32802a4-39941192%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13b03872013b60adf0f088b8e7441130481fb98a' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\admin\\common_admin\\select_post.php',
      1 => 1442766582,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1714855fedee32802a4-39941192',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55fedee357b0c5_05488584',
  'variables' => 
  array (
    'cate' => 0,
    'v' => 0,
    'IMGDIR' => 0,
    'URL' => 0,
    'CM' => 0,
    'vv' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fedee357b0c5_05488584')) {function content_55fedee357b0c5_05488584($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('./left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  

<div class="table_top">请选择要发布的分类</div>

<div class="table_main">
  <table class="tb tb2 nobdb">
    <tbody>
      <tr class="hover">
		 <td class="td25">id</td>
        <td class="td25">前台查看</td>
       
        <td class="td28">栏目名称</td>
        <td>添加信息</td>
        <td>管理信息</td>
      </tr>
    </tbody>
    <!--<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cate']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>-->
    <tbody>
      <tr class="hover" height="35">
		<td class="td25"><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
        <td class="td25"><a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
" target="_blank" title="前台查看"><img src="<?php echo $_smarty_tpl->tpl_vars['IMGDIR']->value;?>
/open.gif"></a></td>
        
        <td class="td28">
        <!--<?php if ($_smarty_tpl->tpl_vars['v']->value['sub']) {?>--> 
          <?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
 
          <!--<?php } else { ?>--> 
          <a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a> 
          <!--<?php }?>--></td>
        <td><!--<?php if (!$_smarty_tpl->tpl_vars['v']->value['sub']) {?>--> 
          <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=<?php echo $_smarty_tpl->tpl_vars['CM']->value;?>
&a=post&cate=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">添加信息</a> 
          <!--<?php } else { ?>--> 
          &nbsp; 
          <!--<?php }?>--></td>
        <td><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=<?php echo $_smarty_tpl->tpl_vars['CM']->value;?>
&a=main&cate=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">管理信息</a></td>
      </tr>
  
            <!--<?php if ($_smarty_tpl->tpl_vars['v']->value['sub']) {?>-->                   
             <!--<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['v']->value['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?>-->
              <tr class="hover">
                <td class="td25"><?php echo $_smarty_tpl->tpl_vars['vv']->value['id'];?>
</td>
                <td class="td25"><a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
" target="_blank" title="前台查看"><img src="<?php echo $_smarty_tpl->tpl_vars['IMGDIR']->value;?>
/open.gif"></a></td>
                <td  class="td28" ><div class="board"><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=<?php echo $_smarty_tpl->tpl_vars['CM']->value;?>
&a=post&cate=<?php echo $_smarty_tpl->tpl_vars['vv']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['vv']->value['name'];?>
</a></div></td>
                <td><div class="board"><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=<?php echo $_smarty_tpl->tpl_vars['CM']->value;?>
&a=post&cate=<?php echo $_smarty_tpl->tpl_vars['vv']->value['id'];?>
">添加信息</a></div></td>
                <td><a href="?m=<?php echo $_smarty_tpl->tpl_vars['CM']->value;?>
&a=main&id=<?php echo $_smarty_tpl->tpl_vars['vv']->value['id'];?>
">管理信息</a></td>
              </tr>
               <!--<?php } ?>-->                   
            <!--<?php }?>--> 
    
    
   <!--<?php } ?>-->
      </tbody>
    
  </table>
  <tbody>
    <tr class="hover">
      <td class="td25">&nbsp;</td>
      <td class="td25">&nbsp;</td>
      <td class="td25">&nbsp;</td>
      <td class="td28">&nbsp;</td>
    </tr>
  </tbody>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('./right_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
