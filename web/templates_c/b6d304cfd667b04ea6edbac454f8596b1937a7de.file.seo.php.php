<?php /* Smarty version Smarty-3.1.15, created on 2015-09-20 21:32:44
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\admin\admin\seo.php" */ ?>
<?php /*%%SmartyHeaderCode:2185155fd8fa4dac669-19150410%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6d304cfd667b04ea6edbac454f8596b1937a7de' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\admin\\admin\\seo.php',
      1 => 1442755957,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2185155fd8fa4dac669-19150410',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55fd8fa50e7433_03510310',
  'variables' => 
  array (
    '_G' => 0,
    'SYSTEM_TYPE' => 0,
    'CURMODULE' => 0,
    'CURACTION' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fd8fa50e7433_03510310')) {function content_55fd8fa50e7433_03510310($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common_admin/left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form enctype="multipart/form-data" name="channel_add" method="post">
  
  <div class="table_main">
    <table class="tb tb2 nobdb">
      <tbody>
      
      <tr class="noborder" >
          <td class="td_l">seo title:</td>
          <td class="vtop rowform">
          <input name="postdb[seo_title]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['seo_title'];?>
" type="text" class="txt">
          </td>
          <td class="vtop tips2" >站点首页的title,显示在网站顶部标题中..</td>
        </tr>
        
 		<tr class="noborder" >
          <td class="td_l">seo keywords:</td>
          <td class="vtop rowform">
          <input name="postdb[seo_keywords]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['seo_keywords'];?>
" type="text" class="txt">
          </td>
          <td class="vtop tips2" >站点首页的seo的关键字,便于搜索引擎收录,多个用,分格开</td>
        </tr>
        <tr class="noborder" >
          <td class="td_l">seo description:</td>
          <td class="vtop rowform"><textarea rows="3"  name="postdb[seo_description]"  cols="50" class="tarea"><?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['seo_description'];?>
</textarea></td>
          <td class="vtop tips2" >站点首页的seo的描述,便于搜索引擎收录,120字内</td>
        </tr>

 <tr class="noborder">
          <td class="td_l">长尾关键字:</td>
          <td class="vtop rowform">
               <input name="postdb[long_keywords]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['long_keywords'];?>
" type="text" class="txt">
            </td>
          <td class="vtop tips2">在标题,关键字,描述后面,自动加上 要优化的关键字,留空代码不添加长尾</td>
</tr>
        
        
<?php if ($_smarty_tpl->tpl_vars['SYSTEM_TYPE']->value>3) {?>
         <tr class="noborder">
          <td class="td_l">开启邮件订阅:</td>
          <td class="vtop rowform">   <input name="postdb[rss_task]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['rss_task'];?>
" type="text" class="txt"></td>
          <td class="vtop tips2">
          qq邮箱订阅, <a href="http://open.mail.qq.com/cgi-bin/dy_template?t=dy_iframe&sid=ZQ2heYw7x9n6BgNX">查看申请地址</a>.如有开通,请埴官订阅的链接.
          如果未开通请留空
          </td>
        </tr>   
<?php }?>


      <tr class="noborder">
          <td class="td_l">开启伪静态:</td>
          <td class="vtop rowform"><input class="radio" type="radio" name="postdb[rewrite]" value="1" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['rewrite']==1) {?>checked="checked"<?php }?>>
            &nbsp;是
            <input class="radio" type="radio" name="postdb[rewrite]" value="0" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['rewrite']==0) {?>checked="checked"<?php }?>>
            &nbsp;否 </td>
          <td class="vtop tips2">需要空间支持rewrite,否则页面打不开或报错</td>
        </tr>

      <tr class="noborder">
          <td class="td_l">登录关闭伪静态:</td>
          <td class="vtop rowform"><input class="radio" type="radio" name="postdb[login_rewrite]" value="1" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['login_rewrite']==1) {?>checked="checked"<?php }?>>
            &nbsp;是
            <input class="radio" type="radio" name="postdb[login_rewrite]" value="0" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['login_rewrite']==0) {?>checked="checked"<?php }?>>
            &nbsp;否 </td>
          <td class="vtop tips2">会员登录后是否关闭伪静态,关闭后可提升效率</td>
        </tr>

      <tr class="noborder">
          <td class="td_l">伪静态类型:</td>
          <td class="vtop rowform">

              <input class="radio" type="radio" name="postdb[rewrite_mode]" value="0" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['rewrite_mode']=="0") {?>checked="checked"<?php }?>>
              &nbsp;模式1
              <input class="radio" type="radio" name="postdb[rewrite_mode]" value="1" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['rewrite_mode']=="1") {?>checked="checked"<?php }?>>
              &nbsp;模式2 
               <input class="radio" type="radio" name="postdb[rewrite_mode]" value="2" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['rewrite_mode']=="2") {?>checked="checked"<?php }?>>
              &nbsp;模式3 
              </td>
          <td class="vtop tips2">

              <p>模式1 :  网址/m-img-a-main.html或 或 /m-img-id-1885.html</p>
              <p>模式2 :  网址/m/img/a/main.html 或 /m/img/id/1885.html</p>
			  <p>模式3 :  虚拟目录模式 /img/list/ 或  /img/1885.html <span class="red">推荐</span></p>
              <p class="red">修改好后请不要再修改,不然搜索引擎收录后会打不开</p>
          </td>
      </tr>




        <tr class="noborder">
          <td class="td_l">是否自动获取关键字:</td>
          <td class="vtop rowform"><input class="radio" type="radio" name="postdb[auto_keywords]" value="1" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['auto_keywords']==1) {?>checked="checked"<?php }?>>
            &nbsp;是
            <input class="radio" type="radio" name="postdb[auto_keywords]" value="0" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['auto_keywords']==0) {?>checked="checked"<?php }?>>
            &nbsp;否 </td>
          <td class="vtop tips2">开启后,在发布商品和添加文章时如果没有填写关键字,则可以自动根据标题获取相关关键字,利于SEO.</td>
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
