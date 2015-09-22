<?php /* Smarty version Smarty-3.1.15, created on 2015-09-20 10:34:35
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\admin\ad\main.php" */ ?>
<?php /*%%SmartyHeaderCode:905255fe1b3b5f6e40-33450262%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b6946ddce9ac407c882fe217d93e5ff9f40c60e' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\admin\\ad\\main.php',
      1 => 1441350032,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '905255fe1b3b5f6e40-33450262',
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
  'unifunc' => 'content_55fe1b3b8f4fc9_35184609',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fe1b3b8f4fc9_35184609')) {function content_55fe1b3b8f4fc9_35184609($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common_admin/left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <div class="table_top">共找到(<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
)条广告信息</div>
<form enctype="multipart/form-data" method="post" action="">  

  <div class="table_main">
  <table class="tb tb2 ">
    <tbody>
      <tr class="hover">
       <th class="td25">删除</th>
       <th class="td25">id</th>       
        <th>广告名称</th>
        <th>广告类型</th>
        <th>开始时间</th>
        <th>结束时间</th>  
        <th>当前状态</th>
        <th>隐藏</th>      
        <th>编辑</th>
        <th>删除</th>        
        <th>添加时间</th>
      </tr>
      </tbody>
      <!--<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['ad']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
        <td><input type="text" name="name[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
"  class="txt" /></td>
        <td  <?php if ($_smarty_tpl->tpl_vars['v']->value['type']==2) {?>class="_hover_img"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['type_name'];?>

        <?php if ($_smarty_tpl->tpl_vars['v']->value['type']==2) {?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['picurl'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['picurl'];?>
"  /></a>
        <?php }?>
        </td>
        <td><input type="text" name="start_time[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['start_time'];?>
"  class="txt _dateline" /></td>
        <td><input type="text" name="end_time[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['end_time'];?>
"  class="txt _dateline" /></td>
        <td>
        <?php if ($_smarty_tpl->tpl_vars['v']->value['show']) {?>
        正常显示
        <?php } else { ?>
        <span class="red">不显示</span>
        <?php }?>
        </td>
        <td><input name="hide[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" value="1" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['v']->value['hide']==1) {?> checked="checked"<?php }?> class="checkbox"></td>
        <td><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=ad&a=post&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">编辑</a></td>
        <td><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=ad&a=del&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" >删除</a></td>
         <td ><?php echo $_smarty_tpl->tpl_vars['v']->value['dateline'];?>
</td>
      </tr>
      </tbody>     
       <!--<?php } ?>-->
       <tbody>
      <tr>
        <td class="td25"><input type="checkbox" class="_del_all" />反选</td>
        <td><input type="checkbox"  name="_del_all" value="1"/>删除</td>
        <td colspan="9"><div class="fixsel">
            <input type="submit" class="btn submit_btn" name="onsubmit"  value=" 提 交" >
          </div>
          </td>
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
