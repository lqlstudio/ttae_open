<?php /* Smarty version Smarty-3.1.15, created on 2015-09-20 00:39:02
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\admin\admin\sign.php" */ ?>
<?php /*%%SmartyHeaderCode:1688855fd8fa6868210-80495519%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9513c93da3ba2fbd99f9fdb48200d22c3d2d5ed8' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\admin\\admin\\sign.php',
      1 => 1441350033,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1688855fd8fa6868210-80495519',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_G' => 0,
    'sign' => 0,
    'k' => 0,
    'v' => 0,
    'tb' => 0,
    'CURMODULE' => 0,
    'CURACTION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55fd8fa6a8a437_44365266',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fd8fa6a8a437_44365266')) {function content_55fd8fa6a8a437_44365266($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common_admin/left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form enctype="multipart/form-data" name="channel_add" method="post">
  
  <div class="table_main">
    <table class="tb tb2 nobdb">
      <tbody>



        
         <tr class="noborder">
          <td class="td_l">连续签到天数:</td>
          <td class="vtop rowform"><input class="txt" type="text" name="postdb[qd_days]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['qd_days'];?>
" /></td>
          <td class="vtop tips2">连续签到天数,会定义下面连续签到天数数量</td>
        </tr>
        
      
      <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sign']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
        <tr class="noborder">
          <td class="td_l">连续签到第<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
天</td>
          <td class="vtop rowform"><input name="qd[<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" type="text" class="txt"></td>
          <td class="vtop tips2">留空或0则不奖励积分</td>
        </tr>
      <?php } ?>

  		 <tr class="noborder">
          <td class="td_l">特别奖励</td>
          <td class="vtop rowform"><textarea rows="6" name="tb" cols="70" class="tarea"><?php echo $_smarty_tpl->tpl_vars['tb']->value;?>
</textarea></td>
          <td class="vtop tips2">总签到次数到达某一个值时,奖励多少积分(和连续签到无关,属于系统级别)
          <p>格式一行一组(次数=奖励积分数),1=5代表第一次签到奖励5积分,如:</p>
          <p>1=5</p>
          <p>3=10</p>
          <p>5=15</p>
          <p>10=20</p>
          </td>
        </tr>

        <tr>
          <td>&nbsp;</td>
          <td colspan="2"><div class="fixsel">
              <input type="submit" class="btn submit_btn"  name="onsubmit" value="提交">
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
