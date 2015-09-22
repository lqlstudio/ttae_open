<?php /* Smarty version Smarty-3.1.15, created on 2015-09-19 23:23:09
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\admin\fetch\main.php" */ ?>
<?php /*%%SmartyHeaderCode:1124255fd7dddaca949-88274798%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c08f54280a65427ffe7c5342d55a50623f5daac9' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\admin\\fetch\\main.php',
      1 => 1441350033,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1124255fd7dddaca949-88274798',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'count' => 0,
    'goods' => 0,
    'v' => 0,
    'URL' => 0,
    '_G' => 0,
    'showpage' => 0,
    'CURMODULE' => 0,
    'CURACTION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55fd7dddcff136_35779056',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fd7dddcff136_35779056')) {function content_55fd7dddcff136_35779056($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common_admin/left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form enctype="multipart/form-data" method="post" action="">  
  <div class="table_top">共找到(<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
)条采集规则信息</div>
  <div class="table_main">
  <table class="tb tb2 ">
    <tbody>
      <tr class="hover">
       <th class="td25">删除</th>
       <th class="td25">id</th>       
        <th>规则标题</th>
		 <th>总采集条数</th>
			<th>总执行次数</th>

        <th>编辑</th>
        <th>删除</th>        
        <th>添加时间</th>
        <th>执行</th>
        <th>最后执行时间</th>
      </tr>
      </tbody>
      <!--<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>-->
       <tbody>
      <tr class="hover">  
        <td class="td25"><input type="checkbox" name="del[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" value="1" class="_del" />
          <input type="hidden" name="ids[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" /></td>
        <td class="td25"><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>        
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['v']->value['sum'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['count'];?>
</td>
        <td><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=fetch&a=post&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">编辑</a></td>
        <td><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=fetch&a=del&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['_G']->value['page'];?>
"  class="_confirm" data-msg="您确定删除本商品?删除后不可恢复">删除</a></td>
         <td ><?php echo $_smarty_tpl->tpl_vars['v']->value['dateline'];?>
</td>
         
         <td><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=fetch&a=start&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" target="_blank" class="red" >执行</a></td>
         <td><?php echo $_smarty_tpl->tpl_vars['v']->value['updatetime'];?>
</td>
      </tr>
      </tbody>     
       <!--<?php } ?>-->
       <tbody>
      <tr>
        <td class="td25"><input type="checkbox" class="_del_all" />反选</td>
        <td><input type="checkbox"  name="_del_all" value="1"/>删除</td>
        <td colspan="9">
        <div class="y showpage"><?php echo $_smarty_tpl->tpl_vars['showpage']->value;?>
</div>
        <div class="fixsel">
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
