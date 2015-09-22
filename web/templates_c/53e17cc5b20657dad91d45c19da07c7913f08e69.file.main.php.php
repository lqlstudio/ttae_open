<?php /* Smarty version Smarty-3.1.15, created on 2015-09-20 00:39:53
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\admin\pics\main.php" */ ?>
<?php /*%%SmartyHeaderCode:2751355fd8fd9ed5b49-01622993%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53e17cc5b20657dad91d45c19da07c7913f08e69' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\admin\\pics\\main.php',
      1 => 1441350033,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2751355fd8fd9ed5b49-01622993',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'count' => 0,
    'pics' => 0,
    'v' => 0,
    'URL' => 0,
    'vv' => 0,
    '_G' => 0,
    'vvv' => 0,
    'CURMODULE' => 0,
    'CURACTION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55fd8fda28d745_88349418',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fd8fda28d745_88349418')) {function content_55fd8fda28d745_88349418($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common_admin/left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form enctype="multipart/form-data" method="post" >
  
  <div class="table_top">共找到(<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
)条幻灯片</div>
  <div class="table_main">
  <table class="tb tb2 ">
    <tbody>
      <tr class="hover">
       <th class="td25">删除</th>
       <th class="td25">id</th>       
        <th>排序</th>
        <th>名称</th>
        <th>图片地址</th>
        <th>链接地址</th>
        <th>所属分类</th>
        <th>隐藏</th> 
        <th>编辑</th>

        <th>删除</th>
        <th>添加时间</th>

      </tr>
      </tbody>
      <!--<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pics']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>-->
       <tbody>
      <tr class="hover">        
        <td class="td25" >&nbsp;</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
        <td>&nbsp;</td>
        <td colspan="5" class="red"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['v']->value['content'];?>
)</td>
        <td><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=pics&a=type_post&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">编辑</a></td>

        <td><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=pics&a=type_del&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" >删除</a></td>
         <td >&nbsp;</td>

      </tr>
      </tbody>     
<?php if ($_smarty_tpl->tpl_vars['v']->value['sub']) {?>
<tbody>
  <!--<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['v']->value['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?>-->
    <tr class="hover">
        <td class="td25"><input type="checkbox" name="del[<?php echo $_smarty_tpl->tpl_vars['vv']->value['id'];?>
]" value="1" class="_del" />
          <input type="hidden" name="ids[<?php echo $_smarty_tpl->tpl_vars['vv']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['vv']->value['id'];?>
" /></td>
        <td>&nbsp;</td>
        <td><div class="board"><input type="text" name="sort[<?php echo $_smarty_tpl->tpl_vars['vv']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['vv']->value['sort'];?>
"  class="w40"/></div></td>
        <td><div class="board"><?php echo $_smarty_tpl->tpl_vars['vv']->value['title'];?>
</div></td>
        
        <td class="_hover_img"><input type="text" name="picurl[<?php echo $_smarty_tpl->tpl_vars['vv']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['vv']->value['picurl'];?>
"  />
        <a href="<?php echo $_smarty_tpl->tpl_vars['vv']->value['picurl'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['vv']->value['picurl'];?>
"  /></a>
        </td>        
        <td><input type="text" name="url[<?php echo $_smarty_tpl->tpl_vars['vv']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['vv']->value['url'];?>
"  /></td>
        <td >
        <select name="fup[<?php echo $_smarty_tpl->tpl_vars['vv']->value['id'];?>
]">
          <!--<?php  $_smarty_tpl->tpl_vars['vvv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vvv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['pics_type']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vvv']->key => $_smarty_tpl->tpl_vars['vvv']->value) {
$_smarty_tpl->tpl_vars['vvv']->_loop = true;
?>--> 
         <option value="<?php echo $_smarty_tpl->tpl_vars['vvv']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['vv']->value['fup']==$_smarty_tpl->tpl_vars['vvv']->value['id']) {?> selected="selected" <?php }?> ><?php echo $_smarty_tpl->tpl_vars['vvv']->value['name'];?>
</option>
          <!--<?php } ?>-->
          </select> 
        </td>
       
        <td><input type="checkbox" name="hide[<?php echo $_smarty_tpl->tpl_vars['vv']->value['id'];?>
]" value="1" <?php if ($_smarty_tpl->tpl_vars['vv']->value['hide']==1) {?> checked="checked" <?php }?> /></td>
        <td><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=pics&a=post&id=<?php echo $_smarty_tpl->tpl_vars['vv']->value['id'];?>
">编辑</a></td>

        <td><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=pics&a=del&id=<?php echo $_smarty_tpl->tpl_vars['vv']->value['id'];?>
" >删除</a></td>
         <td ><?php echo $_smarty_tpl->tpl_vars['vv']->value['dateline'];?>
</td>

      </tr>
    <!--<?php } ?>-->
</tbody>
<?php }?>
       <!--<?php } ?>-->
       <tbody>
      <tr>
        <td class="td25"><input type="checkbox" class="_del_all" />反选</td>
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
