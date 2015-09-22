<?php /* Smarty version Smarty-3.1.15, created on 2015-09-21 19:33:44
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\admin\duihuan\apply.php" */ ?>
<?php /*%%SmartyHeaderCode:2753355ffeb18a32aa0-64588914%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbb29ab04db98d13c9d820ceb548f0c508183c48' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\admin\\duihuan\\apply.php',
      1 => 1441350033,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2753355ffeb18a32aa0-64588914',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'count' => 0,
    'URL' => 0,
    '_G' => 0,
    'k1' => 0,
    '_GET' => 0,
    'v1' => 0,
    'goods' => 0,
    'v' => 0,
    'CURMODULE' => 0,
    'CURACTION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55ffeb18d3a976_22408463',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ffeb18d3a976_22408463')) {function content_55ffeb18d3a976_22408463($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common_admin/left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form enctype="multipart/form-data" method="post" >
  
  <div class="table_top">
  <div class="table_top_l">共找到(<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
)条对兑记录</div>
     <div class="table_top_r">
        <ul>
        	<li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=duihuan&a=apply">全部</a></li>
            
             <?php  $_smarty_tpl->tpl_vars['v1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v1']->_loop = false;
 $_smarty_tpl->tpl_vars['k1'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['setting']['duihuan_status']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v1']->key => $_smarty_tpl->tpl_vars['v1']->value) {
$_smarty_tpl->tpl_vars['v1']->_loop = true;
 $_smarty_tpl->tpl_vars['k1']->value = $_smarty_tpl->tpl_vars['v1']->key;
?> 
             <li> 
            <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=duihuan&a=apply&status=<?php echo $_smarty_tpl->tpl_vars['k1']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['_GET']->value['status']==$_smarty_tpl->tpl_vars['k1']->value) {?> class="on"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v1']->value;?>
</a>
            </li>
             <?php } ?>

        </ul>
  </div>  
  </div>
    <div class="table_main">
  <table class="tb tb2 ">
    <tbody>      
      <tr class="hover">
        <th class="td25">删除</th>
        <th>id</th>
	    <th>兑换商品</th>
        <th>用户名</th>
 <th>旺旺</th>
 <th>真实姓名</th>
 <th>ip</th>
  <th>状态</th>
 
        <th>编辑状态</th>
        <th>最后操作时间</th>
        
        <th>申请时间</th>
       
      </tr>
    <!--<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>-->
      <tr class="hover">
        <td class="td25"><input type="checkbox" name="del[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" value="1" class="_del" />
          <input type="hidden" name="ids[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" />
           <input type="hidden" name="duihuan_id[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['goods']['id'];?>
" />
          </td>
        <td><a href="/index.php?m=duihuan&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" target="_blank" title="前台查看"><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</a></td>
        <td  style="width:400px;overflow:hidden;"><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=duihuan&a=apply&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['duihuan_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['goods']['title'];?>
"  ><?php echo $_smarty_tpl->tpl_vars['v']->value['goods']['title'];?>
</a></td>
        <td><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=duihuan&a=apply&uid=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</a></td>
        <td><a href="#" target="_blank" class="_wangwang" data-nick="<?php echo $_smarty_tpl->tpl_vars['v']->value['wangwang'];?>
"></a></td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['truename'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['ip'];?>
</td>
         <td  class="red"><?php echo $_smarty_tpl->tpl_vars['v']->value['status_text'];?>
</td>

        <td >
			<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=duihuan&a=apply_edit&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="red">编辑状态</a>
            <input type="hidden" name="status[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]"  value="<?php echo $_smarty_tpl->tpl_vars['v']->value['status'];?>
"/>
             <input type="hidden" name="org_status[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]"  value="<?php echo $_smarty_tpl->tpl_vars['v']->value['status'];?>
"/>
        </td>
         <td><?php echo $_smarty_tpl->tpl_vars['v']->value['statustime'];?>
</td>
         <td><?php echo $_smarty_tpl->tpl_vars['v']->value['dateline'];?>
</td>
      </tr>
    <!--<?php } ?>-->
      
      <tr>
        <td class="td25"><input type="checkbox" class="_del_all" />
          反选</td>
          <td><input type="checkbox"  name="_del_all" value="1"/>删除</td>
        <td colspan="10"><div class="fixsel">
        
        
        <select name="in_status"  class="select">
        <option value="">----批量修改状态----</option>
            <?php  $_smarty_tpl->tpl_vars['v1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v1']->_loop = false;
 $_smarty_tpl->tpl_vars['k1'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['setting']['duihuan_status']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v1']->key => $_smarty_tpl->tpl_vars['v1']->value) {
$_smarty_tpl->tpl_vars['v1']->_loop = true;
 $_smarty_tpl->tpl_vars['k1']->value = $_smarty_tpl->tpl_vars['v1']->key;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['k1']->value;?>
" > <?php echo $_smarty_tpl->tpl_vars['v1']->value;?>
 </option>
            <?php } ?>
            </select>
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
