<?php /* Smarty version Smarty-3.1.15, created on 2015-09-21 19:55:31
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\admin\admin\caiji.php" */ ?>
<?php /*%%SmartyHeaderCode:2700055fd8b829c6115-43965235%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd66564294f87a09c64332c7d882aa9f01f4ddf8a' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\admin\\admin\\caiji.php',
      1 => 1442834698,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2700055fd8b829c6115-43965235',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55fd8b82c90718_17905662',
  'variables' => 
  array (
    '_G' => 0,
    'field' => 0,
    'v' => 0,
    'CURMODULE' => 0,
    'CURACTION' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fd8b82c90718_17905662')) {function content_55fd8b82c90718_17905662($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common_admin/left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form enctype="multipart/form-data" name="channel_add" method="post">
  
  <div class="table_main">
    <table class="tb tb2 nobdb">
      <tbody>
      
      
       <tr class="noborder">
          <td class="td_l">采集方式:</td>
          <td class="vtop rowform">
           <input class="radio" type="radio" name="postdb[api_type]" value="0" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['api_type']==0) {?>checked="checked"<?php }?>>
            &nbsp;淘宝客API
            
          <input class="radio" type="radio" name="postdb[api_type]" value="1" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['api_type']==1) {?>checked="checked"<?php }?>>
            &nbsp;百川API
            </td>
          <td class="vtop tips2"><span class="red">
		<p>百川采集的字段更多一些,但是申请麻烦一些,不过有多媒体图片上传,发短信等接口 
        <span class="red">(<a href="http://www.uz-system.com/m-article-id-104.html" target="_blank">点击查看获取方法</a>)</span>推荐</p>
        <p>淘宝客API几乎不用申请,有在阿里妈妈申请了网站,有PID即有API权限
         <span class="red">(<a href="http://www.uz-system.com/m-article-id-106.html" target="_blank">点击查看获取方法</a>)</span></p>
         </span></td>
        </tr>         
       
       
       
        <tr class="noborder">
          <td class="td_l">百川Appkey:</td>
          <td class="vtop rowform"><input name="postdb[appkey]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['appkey'];?>
" type="text" class="txt"></td>
          <td class="vtop tips2">appkey,在采集商品时需要提供
            <span class="red">(<a href="http://www.uz-system.com/m-article-id-104.html" target="_blank">点击查看获取方法</a>)</span>
          <p>如果是用百川接口,必须填写百川的appkey,图片上传到百川时需要百川的appkey <span class="red">(必须申请)</span></p>
          </td>
        </tr>
        <tr class="noborder">
          <td class="td_l">百川secretKey:</td>
          <td class="vtop rowform"><input name="postdb[secretKey]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['secretKey'];?>
" type="text" class="txt"></td>
          <td class="vtop tips2">百川secretKey,同appkey相对应</td>
        </tr>      
        </tr>
        
        <tr class="noborder">
          <td class="td_l">淘宝客Appkey:</td>
          <td class="vtop rowform"><input name="postdb[taoke_appkey]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['taoke_appkey'];?>
" type="text" class="txt"></td>
          <td class="vtop tips2">
          appkey,在采集商品时需要提供 
          <span class="red">(<a href="http://www.uz-system.com/m-article-id-106.html" target="_blank">点击查看获取方法</a>)</span></p>
          <p>如果是淘客API,则需要填写淘宝客的appkey</p>
          </td>
        </tr>
        <tr class="noborder">
          <td class="td_l">淘宝客secretKey:</td>
          <td class="vtop rowform"><input name="postdb[taoke_secretKey]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['taoke_secretKey'];?>
" type="text" class="txt"></td>
          <td class="vtop tips2">淘宝客secretKey,同appkey相对应</td>
        </tr>      
        </tr>
        
        
       
        
		

 		<tr class="noborder">
          <td class="td_l">安全同步key:</td>
          <td class="vtop rowform"><input name="postdb[syn_key]" value="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['syn_key'];?>
" type="text" class="txt syn_key">&nbsp;<a href="#" class="srandom">生成</a></td>
          <td class="vtop tips2">使用采集插件,或是站点同步时进行验证的KEY,请不要随意池漏安全key,否则会有很大风险,留空不填则禁止采集和同步
          
          </td>
        </tr>

     
          
  	
        <tr class="noborder">
          <td class="td_l">是否采集商品详情:</td>
          <td class="vtop rowform"><input class="radio" type="radio" name="postdb[get_message]" value="1" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['get_message']==1) {?>checked="checked"<?php }?>>
            &nbsp;是
            <input class="radio" type="radio" name="postdb[get_message]" value="0" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['get_message']==0) {?>checked="checked"<?php }?>>
            &nbsp;否 </td>
          <td class="vtop tips2"><span class="red">一般不是必要请不要选择,详情非常占数据库空间</span></td>
        </tr>         
       
        
          <tr class="noborder">
          <td class="td_l">非蛛蜘是否自动跳转爱淘宝:</td>
          <td class="vtop rowform"><input class="radio" type="radio" name="postdb[robot_jump]" value="1" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['robot_jump']==1) {?>checked="checked"<?php }?>>
            &nbsp;是
            <input class="radio" type="radio" name="postdb[robot_jump]" value="0" <?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['robot_jump']==0) {?>checked="checked"<?php }?>>
            &nbsp;否 </td>
          <td class="vtop tips2">非蛛蜘是否自动跳转爱淘宝</td>
        </tr>         


      <tr class="noborder" >
          <td class="td_l">淘点金网址:</td>
          <td class="vtop rowform">
          <input name="postdb[taodianjing_url]" value="<?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['taodianjing_url']) {?><?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['taodianjing_url'];?>
<?php }?>" type="text" class="txt"></td>
          <td class="vtop tips2">在阿里妈妈申请淘点金时验证成功网址,只有这个pid和此网址才能正常使用淘点金!</td>
        </tr>
         <tr class="noborder" >
          <td class="td_l">淘点金pid:</td>
          <td class="vtop rowform"><input name="postdb[pid]" value="<?php if ($_smarty_tpl->tpl_vars['_G']->value['setting']['pid']) {?><?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['pid'];?>
<?php }?>" type="text" class="txt"></td>
          <td class="vtop tips2">来自阿里妈妈推广位生成的.格式为:mm_000000000_11111111_2222222
          </td>
        </tr>

        <tr class="noborder">
          <td class="td_l">自动更需要更新的字段:</td>
          <td class="vtop rowform">
          <input type="hidden" name="postdb[field]" value="" />
          <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
          <label for="<?php echo $_smarty_tpl->tpl_vars['v']->value['key'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
<input type="checkbox" name="field[<?php echo $_smarty_tpl->tpl_vars['v']->value['key'];?>
]" class="checkbox" value="1" <?php if ($_smarty_tpl->tpl_vars['v']->value['check']==1) {?> checked="checked" <?php }?>/></label>&nbsp;
          <?php } ?>
           </td>
          <td class="vtop tips2">
          <p>全不选则默认全部都检查和更新,不选中则不更新</p>
          <p>因为系统会自动检查商品上下架或卖出数量等信息然后同部更新站内的数据</p>
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
