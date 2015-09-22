<?php /* Smarty version Smarty-3.1.15, created on 2015-09-19 23:38:42
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\admin\goods\select_post.php" */ ?>
<?php /*%%SmartyHeaderCode:653655fd8182cadeb7-75888311%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '539d1e7009503ab21613e6b99e0ad80f35b54717' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\admin\\goods\\select_post.php',
      1 => 1441350033,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '653655fd8182cadeb7-75888311',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_G' => 0,
    'v' => 0,
    'IMGDIR' => 0,
    'URL' => 0,
    'vv' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55fd8183099c70_23062965',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fd8183099c70_23062965')) {function content_55fd8183099c70_23062965($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common_admin/left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  

<div class="table_top">请选择要发布的栏目</div>

<div class="table_main">
  <table class="tb tb2 nobdb">
    <tbody>
      <tr class="hover">
		 <td class="td25">fid</td>
        <td class="td25">前台查看</td>
       
        <td class="td28">栏目名称</td>
        <td>添加信息</td>
        <td>管理商品</td>
      </tr>
    </tbody>
    <!--<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['channels']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>-->
    <tbody>
      <tr class="hover" height="35">
		<td class="td25"><?php echo $_smarty_tpl->tpl_vars['v']->value['fid'];?>
</td>
        <td class="td25"><a href="index.php?m=channel&fid=<?php echo $_smarty_tpl->tpl_vars['v']->value['fid'];?>
" target="_blank" title="前台查看"><img src="<?php echo $_smarty_tpl->tpl_vars['IMGDIR']->value;?>
/open.gif"></a></td>
        
        <td class="td28">
        <!--<?php if ($_smarty_tpl->tpl_vars['v']->value['sub']) {?>--> 
          <?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
 
          <!--<?php } else { ?>--> 
          <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=goods&a=post&fid=<?php echo $_smarty_tpl->tpl_vars['v']->value['fid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a> 
          <!--<?php }?>--></td>
        <td><!--<?php if (!$_smarty_tpl->tpl_vars['v']->value['sub']) {?>--> 
          <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=goods&a=post&fid=<?php echo $_smarty_tpl->tpl_vars['v']->value['fid'];?>
">添加商品</a> 
          <!--<?php } else { ?>--> 
          &nbsp; 
          <!--<?php }?>--></td>
        <td><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=goods&a=main&fid=<?php echo $_smarty_tpl->tpl_vars['v']->value['fid'];?>
">管理商品</a></td>
      </tr>
  
            <!--<?php if ($_smarty_tpl->tpl_vars['v']->value['sub']) {?>-->                   
             <!--<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['v']->value['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?>-->
              <tr class="hover">
                <td class="td25"><?php echo $_smarty_tpl->tpl_vars['vv']->value['fid'];?>
</td>
                <td class="td25"><a href="index.php?m=channel&fid=<?php echo $_smarty_tpl->tpl_vars['vv']->value['fid'];?>
" target="_blank" title="前台查看"><img src="<?php echo $_smarty_tpl->tpl_vars['IMGDIR']->value;?>
/open.gif"></a></td>
                <td  class="td28" ><div class="board"><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=goods&a=post&fid=<?php echo $_smarty_tpl->tpl_vars['vv']->value['fid'];?>
"><?php echo $_smarty_tpl->tpl_vars['vv']->value['name'];?>
</a></div></td>
                <td><div class="board"><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=goods&a=post&fid=<?php echo $_smarty_tpl->tpl_vars['vv']->value['fid'];?>
">添加商品</a></div></td>
                <td><a href="?m=goods&a=main&fid=<?php echo $_smarty_tpl->tpl_vars['vv']->value['fid'];?>
">管理商品</a></td>
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
<?php echo $_smarty_tpl->getSubTemplate ('../common_admin/right_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
