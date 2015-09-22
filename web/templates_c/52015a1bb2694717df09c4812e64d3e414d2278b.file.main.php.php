<?php /* Smarty version Smarty-3.1.15, created on 2015-09-19 23:33:12
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\admin\sign\main.php" */ ?>
<?php /*%%SmartyHeaderCode:995755fd803878b069-48638980%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52015a1bb2694717df09c4812e64d3e414d2278b' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\admin\\sign\\main.php',
      1 => 1441350034,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '995755fd803878b069-48638980',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'count' => 0,
    '_GET' => 0,
    'URL' => 0,
    '_G' => 0,
    'k' => 0,
    'v' => 0,
    'sign_list' => 0,
    'showpage' => 0,
    'CURMODULE' => 0,
    'CURACTION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55fd8038a67864_19646029',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fd8038a67864_19646029')) {function content_55fd8038a67864_19646029($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common_admin/left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form enctype="multipart/form-data" method="post"  action="">
  
<div class="table_top">

<div class="table_top_l">共找到(<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
)条积分记录</div>
     <div class="table_top_r">
        <ul>
          
<li class="<?php if (!$_smarty_tpl->tpl_vars['_GET']->value['type']) {?>select<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=sign&a=main&type=jf_list<?php if ($_smarty_tpl->tpl_vars['_GET']->value['uid']) {?>&uid=<?php echo $_smarty_tpl->tpl_vars['_GET']->value['uid'];?>
<?php }?>">全&nbsp;&nbsp;部</a></li>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['setting']['jf_type']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
<li class="<?php if ($_smarty_tpl->tpl_vars['_GET']->value['type']==$_smarty_tpl->tpl_vars['k']->value) {?>on<?php }?>"> <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=sign&a=main&type=<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
<?php if ($_smarty_tpl->tpl_vars['_GET']->value['uid']) {?>&uid=<?php echo $_smarty_tpl->tpl_vars['_GET']->value['uid'];?>
<?php }?>"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</a></li>
<?php } ?>
           

        </ul>
  </div>  



</div>
  <div class="table_main">
  <table class="tb tb2 ">
    <tbody>
      <tr class="hover">
       <th class="td25">删除</th>
       <th class="td25">id</th>       
        <th>用户名</th>
        <th>领取积分</th>  
        <th>ip</th>
         <th>积分描述</th>
          <th>上次积分</th>
        <th>创建时间</th>
       
        
        <th>删除</th>        
      </tr>
      </tbody>   
      <!--<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sign_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
        <td><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=sign&a=main&uid=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</a></td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['jf'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['ip'];?>
</td>
         <td><?php echo $_smarty_tpl->tpl_vars['v']->value['desc'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['v']->value['org_jf'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['dateline'];?>
</td>
        <td><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=sign&a=del&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" >删除</a></td>
        <td>
      </tr>
      </tbody>     
       <!--<?php } ?>-->
       <tbody>
      <tr>
        <td class="td25">
        <input type="checkbox" class="_del_all" />反选</td>
        <td><input type="checkbox"  name="_del_all" value="1"/>删除</td>
        <td colspan="9">
        <div class="y"><?php echo $_smarty_tpl->tpl_vars['showpage']->value;?>
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
