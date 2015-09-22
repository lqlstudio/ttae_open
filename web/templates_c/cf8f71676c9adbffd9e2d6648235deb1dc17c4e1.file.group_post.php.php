<?php /* Smarty version Smarty-3.1.15, created on 2015-09-21 00:24:52
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\admin\member\group_post.php" */ ?>
<?php /*%%SmartyHeaderCode:2343955feddd46ca699-19082592%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf8f71676c9adbffd9e2d6648235deb1dc17c4e1' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\admin\\member\\group_post.php',
      1 => 1441350033,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2343955feddd46ca699-19082592',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'group' => 0,
    '_GET' => 0,
    '_G' => 0,
    'is_show' => 0,
    'user_menu' => 0,
    'v' => 0,
    'SYSTEM_TYPE' => 0,
    'k' => 0,
    'vv' => 0,
    'CURMODULE' => 0,
    'CURACTION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55feddd4a32008_77295152',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55feddd4a32008_77295152')) {function content_55feddd4a32008_77295152($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common_admin/left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form enctype="multipart/form-data" method="post" >
  <div class="table_top">用户组信息</div>
  <div class="table_main">
    <table class="tb tb2 nobdb">
      <tbody>
        <tr class="noborder">
          <td class="td_l">用户组名称:</td>
          <td class="vtop rowform">
          <?php if ($_smarty_tpl->tpl_vars['group']->value['system']==1) {?>
         <span class="red"><?php echo $_smarty_tpl->tpl_vars['group']->value['name'];?>
</span>   
          <?php } else { ?>
          <input name="name" value="<?php echo $_smarty_tpl->tpl_vars['group']->value['name'];?>
" type="text" class="txt"/>
          <?php }?>
          
          </td>
          <td class="vtop tips2">请输入网站名称</td>
        </tr>
        
        <tr class="noborder">
          <td class="td_l">是否可登录后台:</td>
          <td class="vtop rowform">
			<ul>
            <li >
              <input class="radio login_admin1" type="radio" name="login_admin" value="1" <?php if ($_smarty_tpl->tpl_vars['group']->value['login_admin']==1||$_smarty_tpl->tpl_vars['group']->value['id']==1) {?>checked="checked"<?php }?> <?php if ($_smarty_tpl->tpl_vars['group']->value['id']==1) {?> readonly<?php }?>/>
              &nbsp;是</li>
            <li>
              <input class="radio login_admin2" type="radio" name="login_admin" value="0" <?php if ($_smarty_tpl->tpl_vars['group']->value['login_admin']==0||$_smarty_tpl->tpl_vars['_GET']->value['id']==10) {?>checked="checked"<?php }?>    />
              &nbsp;否</li>
          </ul>
          
          </td>
          <td class="vtop tips2">选中的话,当前用户组的成员可直接进入后台<?php if ($_smarty_tpl->tpl_vars['_GET']->value['id']==10) {?> <span class="red">安全起见,普通用户组无法设定进入后台</span> <?php }?></td>
        </tr>
        


        <tr class="noborder" > 
        <td class="td_l">用户组图片:</td>
          <td class="vtop rowform _hover_img">

<div class="upload_img">
<input name="picurl" value="<?php echo $_smarty_tpl->tpl_vars['group']->value['picurl'];?>
" type="text" class="txt pic_upload" >
<?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['logo']) {?>
<a href=""  class="ajax_del" >删除</a>&nbsp;&nbsp;
<?php }?>
</div>
<a href="<?php echo $_smarty_tpl->tpl_vars['group']->value['picurl'];?>
" target="_blank" ><img src="<?php echo $_smarty_tpl->tpl_vars['group']->value['picurl'];?>
"  /></a>
<input type="file" name="file" class="J_TCajaUploadImg upload_file_btn" data-url="/upload.php" />
          
          </td>
          <td class="vtop tips2" >用户组图片</td>
        </tr>
        
        
        
        
         <?php if ($_smarty_tpl->tpl_vars['is_show']->value==1) {?>
            <tr class="noborder">
              <td class="td_l">积分升级范围:</td>
              <td class="vtop rowform">
                <input name="jf_min" value="<?php echo $_smarty_tpl->tpl_vars['group']->value['jf_min'];?>
" type="text" class="txt w90" <?php if ($_smarty_tpl->tpl_vars['_GET']->value['id']==10) {?>  disabled  readonly style="background:#ddd" <?php }?>>
                &nbsp;&nbsp;-&nbsp;&nbsp;
                <input name="jf_max" value="<?php echo $_smarty_tpl->tpl_vars['group']->value['jf_max'];?>
" type="text" class="txt w90"  <?php if ($_smarty_tpl->tpl_vars['_GET']->value['id']==10) {?>  disabled readonly style="background:#ddd" <?php }?> >
                
              </td>
              <td class="vtop tips2">用户的积分达到此范围内,自动升级至当前用户组,如:0-100,100-500,5000-1000
              <p>普通用户组,无法设置范围,它系统默认用户组,初始注册,或积分降为0,都将回到当前用户组</p>
              </td>
            </tr>
         <?php }?>
        
         <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['fanli']==1) {?>
            <tr class="noborder">
              <td class="td_l">返利比例:</td>
              <td class="vtop rowform">
                <input name="fanli" value="<?php echo $_smarty_tpl->tpl_vars['group']->value['fanli'];?>
" type="text" class="txt" >&nbsp;%
                
              </td>
              <td class="vtop tips2">如开始了返利模式,用户升级至当前用户组后,返利比例将按此处设置,为0则不返利
              </td>
            </tr>
         <?php }?>
         
        
        
      </tbody>
    </table>
    <br>

     <div class="table_top">权限分配  <span class="red">(注)某模块有添加发布功能,则默认就有了删除功能</span></div>
     <br>

     <table class="tb tb2 ">
      <tbody>
        <tr class="hover">
          <th >一级模块</th>
          <th >分类模块</th>
        </tr>
         
        <!--<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['user_menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>-->
        <?php if (!$_smarty_tpl->tpl_vars['v']->value['type']||$_smarty_tpl->tpl_vars['SYSTEM_TYPE']->value>=$_smarty_tpl->tpl_vars['v']->value['type']) {?>
        <tr class="hover model_item">
          <td><input type="checkbox"  name="model[<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
]" value="1" class="red model" <?php if ($_smarty_tpl->tpl_vars['v']->value['select']==1) {?>  checked<?php }?> />
            <?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>

            </td>
          <td style="height:auto"> 
          <?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_smarty_tpl->tpl_vars['kk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['v']->value['nav']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
 $_smarty_tpl->tpl_vars['kk']->value = $_smarty_tpl->tpl_vars['vv']->key;
?>
                  <?php if (!$_smarty_tpl->tpl_vars['vv']->value['type']||$_smarty_tpl->tpl_vars['SYSTEM_TYPE']->value>=$_smarty_tpl->tpl_vars['vv']->value['type']) {?>                  
                  <div class="cl z" style="min-width:105px">
                  <input type="checkbox"  <?php if ($_smarty_tpl->tpl_vars['vv']->value['select']==1) {?>  checked<?php }?>   name="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['vv']->value['a'];?>
]" value="1" class="model_sub"  style="margin-left:20px;"  /><?php echo $_smarty_tpl->tpl_vars['vv']->value['name'];?>
 </div>
                  <?php }?>
            <?php } ?> 
            
            </td>
        </tr>
        <?php }?>
        <!--<?php } ?>-->
        <tr>
          <td>&nbsp;</td>
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
