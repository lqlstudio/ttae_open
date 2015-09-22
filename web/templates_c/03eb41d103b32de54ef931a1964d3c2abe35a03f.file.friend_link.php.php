<?php /* Smarty version Smarty-3.1.15, created on 2015-09-20 10:39:20
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\admin\module\friend_link.php" */ ?>
<?php /*%%SmartyHeaderCode:1389255fe1c58888c24-18514726%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03eb41d103b32de54ef931a1964d3c2abe35a03f' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\admin\\module\\friend_link.php',
      1 => 1441350033,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1389255fe1c58888c24-18514726',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'count' => 0,
    '_G' => 0,
    'v' => 0,
    'URL' => 0,
    'TAE' => 0,
    'CURMODULE' => 0,
    'CURACTION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55fe1c58c35f35_33490184',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fe1c58c35f35_33490184')) {function content_55fe1c58c35f35_33490184($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common_admin/left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form enctype="multipart/form-data" method="post" action="">
  
  <div class="table_top">共找到(<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
)条友情链接</div>
    <div class="table_main">
  <table class="tb tb2 ">
    <tbody>      
      <tr class="hover">
        <th class="td25">删除</th>
        <th>id</th>
        <th>排序</th>
        <th>网站名称</th>
        <th>网站地址</th>
        <th>内容</th>
        <th>类型</th>
       <th title="是否存在本站友链">是否存在</th>
        <th>添加时间</th>
        <th>隐藏</th>
        <th>编辑</th>
        <th>删除</th>
      </tr>
      <!--<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['friend_link']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['f']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['f']['index']++;
?>-->
      <tr class="hover _hover_img">
        <td class="td25"><input type="checkbox" name="del[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" value="1" class="_del del_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['f']['index'];?>
" />
          <input type="hidden" name="ids[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"  class="ids"/></td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
        <td><input type="text" name="sort[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['sort'];?>
"  class="w40"/></td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>

        <a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['picurl'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['picurl'];?>
"  /></a>
        </td>
        <td><a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a></td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['content'];?>
</td>
        <td><?php if ($_smarty_tpl->tpl_vars['v']->value['picurl']) {?>图片链<?php } else { ?>文字链<?php }?></td>
       <td class="frined_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['f']['index'];?>
"   title="是否存在本站友链"><?php if ($_smarty_tpl->tpl_vars['v']->value['extends']==1) {?>是<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['extends']==0) {?> <span class="red">否</span><?php } else { ?>未知 <?php }?></td>
        <td ><?php echo $_smarty_tpl->tpl_vars['v']->value['dateline'];?>
</td>
        <td><input type="checkbox" name="hide[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" value="1" <?php if ($_smarty_tpl->tpl_vars['v']->value['hide']==1) {?> checked="checked" <?php }?> /></td>
        <td><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=module&a=friend_link_add&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">编辑</a></td>
        <td><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=module&a=friend_link&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
&t=del" >删除</a></td>
      </tr>
      <!--<?php } ?>-->
      <tr>
        <td class="td25"><input type="checkbox" class="_del_all" />
          反选</td>
                  <td><input type="checkbox"  name="_del_all" value="1"/>删除</td>
        <td colspan="8">
        
          <?php if ($_smarty_tpl->tpl_vars['TAE']->value==0) {?>
          <input type="button" class="check_friend_link y"  value=" 一键检查所有"  style="margin: 3px 0;padding: 5px 10px;border-color: #DDD #666 #666 #DDD;background: #DDD;color: #000;cursor: pointer;vertical-align: middle;">
          <?php }?>
        <div class="fixsel">
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
