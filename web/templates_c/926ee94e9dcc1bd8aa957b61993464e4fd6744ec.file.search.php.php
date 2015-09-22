<?php /* Smarty version Smarty-3.1.15, created on 2015-09-20 20:13:28
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\admin\img\search.php" */ ?>
<?php /*%%SmartyHeaderCode:1156855fea2e8c20521-55354162%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '926ee94e9dcc1bd8aa957b61993464e4fd6744ec' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\admin\\img\\search.php',
      1 => 1441350033,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1156855fea2e8c20521-55354162',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CURMODULE' => 0,
    'CURACTION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55fea2e8db4cc6_99797438',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fea2e8db4cc6_99797438')) {function content_55fea2e8db4cc6_99797438($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common_admin/left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form enctype="multipart/form-data" method="post" >
  
  <div class="table_main">
    <table class="tb tb2 nobdb">
      <tbody>
        
        <tr>
          <td colspan="2" class="td27" >关键字:</td>
        </tr>
        <tr class="noborder">
          <td class="vtop rowform"><input name="title" value=""  type="text" class="txt"></td>
          <td class="vtop tips2" >要搜索的关键字</td>
        </tr>
       
        <tr>
          <td colspan="2" class="td27" >来源站点:</td>
        </tr>
        <tr class="noborder">
          <td class="vtop rowform"><input name="from_name" value=""  type="text" class="txt"></td>
          <td class="vtop tips2" >要搜索的来源站点</td>
        </tr>
       
        <tr>
          <td colspan="2" class="td27" >来源网址:</td>
        </tr>
        <tr class="noborder">
          <td class="vtop rowform"><input name="from_url" value=""  type="text" class="txt"></td>
          <td class="vtop tips2" >要搜索的来源网址</td>
        </tr>
       
        <tr>
          <td colspan="2" class="td27" >SEO关键字:</td>
        </tr>
        <tr class="noborder">
          <td class="vtop rowform"><input name="keywords" value=""  type="text" class="txt"></td>
          <td class="vtop tips2" >要搜索的SEO关键字</td>
        </tr>
       
       
    <tr class="noborder">
          <tr class="noborder">
          <td class="vtop rowform">是否隐藏</td>
          <td class="vtop tips2" ></td>
        </tr>
         <tr class="noborder">
          <td class="vtop rowform">
               <ul>
                <li > <input class="radio" type="radio"  name="hide" value="" checked="checked">
                  &nbsp;不限</li>
                <li >
                  <input class="radio" type="radio" name="hide" value="1">
                  &nbsp;是</li>
                <li>
                  <input class="radio" type="radio" name="hide" value="2" >
                  &nbsp;否</li>
                  <li>
          </ul>
          </td>
          <td class="vtop tips2" >可空</td>
        </tr>     


       
    <tr class="noborder">
          <tr class="noborder">
          <td class="vtop rowform">是否有缩略图</td>
          <td class="vtop tips2" ></td>
        </tr>
        
         <tr class="noborder">
          <td class="vtop rowform">
               <ul>
                <li > <input class="radio" type="radio"  name="picurl" value="" checked="checked">
                  &nbsp;不限</li>
                <li >
                  <input class="radio" type="radio" name="picurl" value="1">
                  &nbsp;是</li>
                <li>
                  <input class="radio" type="radio" name="picurl" value="2" >
                  &nbsp;否</li>
                  <li>
                 
          </ul>
          </td>
          <td class="vtop tips2" >可空</td>
        </tr>   


 <tr class="noborder">
          <tr class="noborder">
          <td class="vtop rowform">是否有跳转URL</td>
          <td class="vtop tips2" ></td>
        </tr>
        
         <tr class="noborder">
          <td class="vtop rowform">
               <ul>
                <li > <input class="radio" type="radio"  name="url" value="" checked="checked">
                  &nbsp;不限</li>
                <li >
                  <input class="radio" type="radio" name="url" value="1">
                  &nbsp;是</li>
                <li>
                  <input class="radio" type="radio" name="url" value="2" >
                  &nbsp;否</li>
                  <li>
                 
          </ul>
          </td>
          <td class="vtop tips2" >可空</td>
        </tr>   


        <td colspan="3"><div class="fixsel"> 
        	<input type="hidden" name="search"  value="1" />
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
