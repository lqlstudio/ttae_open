<?php /* Smarty version Smarty-3.1.15, created on 2015-09-20 00:40:03
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\admin\pics\type_post.php" */ ?>
<?php /*%%SmartyHeaderCode:2737755fd8fe345a9d3-67311298%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2a2ee975fa623f857ca9a94f7cda2e2302c195f' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\admin\\pics\\type_post.php',
      1 => 1441350033,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2737755fd8fe345a9d3-67311298',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type' => 0,
    '_GET' => 0,
    'CURMODULE' => 0,
    'CURACTION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55fd8fe3643a08_27901776',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fd8fe3643a08_27901776')) {function content_55fd8fe3643a08_27901776($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common_admin/left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form enctype="multipart/form-data" method="post"  action="">
  
  <div class="table_main">
    <table class="tb tb2 nobdb">
      <tbody>
        
        <tr>
          <td colspan="2" class="td27">后台显示名称:</td>
        </tr>
        <tr class="noborder">
          <td class="vtop rowform"><input name="postdb[name]" value="<?php echo $_smarty_tpl->tpl_vars['type']->value['name'];?>
" type="text" class="txt"></td>
          <td class="vtop tips2">必填,供后台添加幻灯片区分选择,中英文均可</td>
        </tr>
		<tr>
          <td colspan="2" class="td27">前台显示信息:</td>
        </tr>
        <tr class="noborder">
          <td class="vtop rowform">
          <textarea rows="6" name="postdb[content]" cols="70" class="tarea"><?php echo $_smarty_tpl->tpl_vars['type']->value['content'];?>
</textarea>
          </td>
          <td class="vtop tips2">可空,如前台有需要时可填写并调用.支持HTML</td>
        </tr>


        <tr>
         
          <td colspan="2"><div class="fixsel"> 
              <!--<?php if ($_smarty_tpl->tpl_vars['_GET']->value['id']) {?>-->
              <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['_GET']->value['id'];?>
" />
              <!--<?php }?>-->
              <input type="submit" class="btn submit_btn" name="onsubmit" value="提交">
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
