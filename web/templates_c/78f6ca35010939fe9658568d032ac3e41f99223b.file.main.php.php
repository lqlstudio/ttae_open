<?php /* Smarty version Smarty-3.1.15, created on 2015-09-20 10:39:16
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\admin\tools\main.php" */ ?>
<?php /*%%SmartyHeaderCode:3157555fe1c54b6e449-42601539%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78f6ca35010939fe9658568d032ac3e41f99223b' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\admin\\tools\\main.php',
      1 => 1441350034,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3157555fe1c54b6e449-42601539',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'URL' => 0,
    'del' => 0,
    'day' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55fe1c54d55775_42909793',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fe1c54d55775_42909793')) {function content_55fe1c54d55775_42909793($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common_admin/left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


  
  <div class="table_top">系统的各类工具聚合</div>
<div class="table_main">
    <table class="tb tb2 ">
      <tbody>
      
      
   
        <tr>
          <td class="td27" >&nbsp;</td>
        </tr>
        <tr>
          <td class="td27" ><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=tools&a=muster_del_goods" class="btn submit_btn">删除重复商品</a></td>
          <!--<td class="td27" ><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=tools&a=muster_del_aid" class="btn submit_btn">删除重复主键</a></td>-->
          <td class="td27" ><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=tools&a=muster_views" class="btn submit_btn">随机浏览次数</a></td>
           <td class="td27" ><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=tools&a=clear_sort" class="btn submit_btn">一键清空所有商品排序(<?php echo $_smarty_tpl->tpl_vars['del']->value['sort'];?>
)</a></td>
        </tr>     
    <tr>
        <td class="10"> </td>
    </tr>
       <!--    
    
    <tr>
         <td class="td27" > <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=tools&a=muster_sort" class="btn submit_btn">随机打乱今日商品(<?php echo $_smarty_tpl->tpl_vars['day']->value['d0'];?>
)</a></td>
          <td class="td27" > <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=tools&a=muster_sort&day=3" class="btn submit_btn">随机打乱3天内发布的商品(<?php echo $_smarty_tpl->tpl_vars['day']->value['d3'];?>
)</a></td>
          <td class="td27" > <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=tools&a=muster_sort&day=7" class="btn submit_btn">随机打乱7天内发布的商品(<?php echo $_smarty_tpl->tpl_vars['day']->value['d7'];?>
)</a></td>
          <td class="td27" > <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=tools&a=muster_sort&day=30" class="btn submit_btn">随机打乱30天内发布的商品(<?php echo $_smarty_tpl->tpl_vars['day']->value['d30'];?>
)</a></td>
        </tr>
 <tr>
        <td class="10">&nbsp;</td>
    </tr>
    -->
<tr>
         <td class="td27" > <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=tools&a=del&t=line" class="btn submit_btn">删除所有下线商品(<?php echo $_smarty_tpl->tpl_vars['del']->value['line'];?>
)</a></td>
          <td class="td27" > <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=tools&a=del&t=hide" class="btn submit_btn">删除所有下架商品(<?php echo $_smarty_tpl->tpl_vars['del']->value['hide'];?>
)</a></td>
          <td class="td27" > <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=tools&a=del&t=baoyou" class="btn submit_btn">删除所有不包邮商品(<?php echo $_smarty_tpl->tpl_vars['del']->value['baoyou'];?>
)</a></td>
          <td class="td27" > <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=tools&a=del&t=tk" class="btn submit_btn">删除所有非淘客商品(<?php echo $_smarty_tpl->tpl_vars['del']->value['tk'];?>
)</a></td>
        </tr>


        <tr>
        	<td  colspan="10">数据量太多则处理速度较慢,执行后请耐心等待...</td>
            
        </tr>
      </tbody>
    </table>
  </div>

<?php echo $_smarty_tpl->getSubTemplate ('../common_admin/right_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php }} ?>
