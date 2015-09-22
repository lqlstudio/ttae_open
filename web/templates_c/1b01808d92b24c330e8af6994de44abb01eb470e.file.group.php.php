<?php /* Smarty version Smarty-3.1.15, created on 2015-09-21 00:24:50
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\admin\member\group.php" */ ?>
<?php /*%%SmartyHeaderCode:279855feddd2d6a725-00521941%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b01808d92b24c330e8af6994de44abb01eb470e' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\admin\\member\\group.php',
      1 => 1441350033,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '279855feddd2d6a725-00521941',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'URL' => 0,
    '_G' => 0,
    'v' => 0,
    'CURMODULE' => 0,
    'CURACTION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55feddd30dee07_75159017',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55feddd30dee07_75159017')) {function content_55feddd30dee07_75159017($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common_admin/left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form enctype="multipart/form-data" method="post" action="">
  <div class="table_top"><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=member&a=group_post" class="red">添加用户组</a>
  
<!-- <span>1-10 系统用户组	10-20站内用户组	20++ 其它登录用户组</span>-->
  </div>
  <div class="table_main">
    <table class="tb tb2 ">
      <tbody>
        <tr class="hover">
          <th>id</th>
          <th>名称</th>
          <th>是否可登录后台</th>
          <th>编辑权限</th>
          <th>积分范围</th>
         <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['fanli']==1) {?> <th>返利比例</th><?php }?>
          <th>删除</th>
          <th>添加时间</th>
        </tr>
        <!--<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>-->
        <tr class="hover ">
          <td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>

            <input type="hidden" name="ids[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"  class="ids"/></td>
          <td><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
 </td>
          <td> <?php if ($_smarty_tpl->tpl_vars['v']->value['login_admin']==1||$_smarty_tpl->tpl_vars['v']->value['id']==1) {?> <span class="red">是</span> <?php } else { ?> 否
            <?php }?> </td>
          <td>
          <?php if ($_smarty_tpl->tpl_vars['v']->value['id']==1) {?>
          <a href="javascript:;" class="red">无法修改</a>
          <?php } else { ?>
          <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=member&a=group_post&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">编辑权限</a>
          <?php }?>
          
          </td>
          <td><?php echo $_smarty_tpl->tpl_vars['v']->value['jf_min'];?>
 - <?php echo $_smarty_tpl->tpl_vars['v']->value['jf_max'];?>
</td>

          <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['fanli']==1) {?>  <td><?php echo $_smarty_tpl->tpl_vars['v']->value['fanli'];?>
</td><?php }?>
          <td><?php if ($_smarty_tpl->tpl_vars['v']->value['system']==1) {?> <a href="#" class="_showDialog red" data-msg="当前用户组为系统保留用户组,无法删除">无法删除</a> 
          <?php } else { ?><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=member&a=group_del&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" >删除</a><?php }?></td>
         
         <?php if ($_smarty_tpl->tpl_vars['v']->value['system']==1) {?>
         <td>-</td>
         <?php } else { ?>
          <td class="_dgmdate"  data-time="<?php echo $_smarty_tpl->tpl_vars['v']->value['dateline'];?>
"></td>
          <?php }?>
        </tr>
        <!--<?php } ?>-->
        
      </tbody>
    </table>
  </div>
  <input type="hidden" name="m" value="<?php echo $_smarty_tpl->tpl_vars['CURMODULE']->value;?>
" />
  <input type="hidden" name="a" value="<?php echo $_smarty_tpl->tpl_vars['CURACTION']->value;?>
" />
</form>
<?php echo $_smarty_tpl->getSubTemplate ('../common_admin/right_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <strong></strong><?php }} ?>
