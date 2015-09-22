<?php /* Smarty version Smarty-3.1.15, created on 2015-09-21 00:26:10
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\admin\pics\type.php" */ ?>
<?php /*%%SmartyHeaderCode:1689555fede229c40b4-47195045%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b32705cb4a5c61b769195e001e33d9837e11eb3' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\admin\\pics\\type.php',
      1 => 1441350033,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1689555fede229c40b4-47195045',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'count' => 0,
    '_G' => 0,
    'v' => 0,
    'URL' => 0,
    'CURMODULE' => 0,
    'CURACTION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55fede22bd3988_22551168',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fede22bd3988_22551168')) {function content_55fede22bd3988_22551168($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common_admin/left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form enctype="multipart/form-data" method="post" >
  
  <div class="table_top">共找到(<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
)条分类</div>
  <div class="table_main">
    <table class="tb tb2 ">
      <tbody>
        <tr class="hover">
          <th class="td25">删除</th>
          <th class="td25">id</th>
          <th>后台显示名称</th>
          <th>前台显示名称</th>
        </tr>
      </tbody>
      <!--<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['pics_type']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>-->
      <tbody>
        <tr class="hover">
          <td class="td25" ><input type="checkbox" name="del[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" value="1" class="_del" />
          <input type="hidden" name="ids[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" /></td>
          <td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['v']->value['content'];?>
</td>
          <td><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=pics&a=type_post&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">编辑</a></td>
          <td><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=pics&a=type_del&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" >删除</a></td>
          <td >&nbsp;</td>
        </tr>
      </tbody>
      <!--<?php } ?>-->
      <tbody>
        <tr>
          <td class="td25"><input type="checkbox" class="_del_all" />
            反选</td>
             <td class="td25"><input type="checkbox"  name="_del_all" value="1"/>删除</td>
          <td colspan="8"><div class="fixsel">
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
