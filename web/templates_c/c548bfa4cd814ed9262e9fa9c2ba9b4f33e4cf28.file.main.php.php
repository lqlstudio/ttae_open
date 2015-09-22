<?php /* Smarty version Smarty-3.1.15, created on 2015-09-19 23:13:11
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\admin\img\main.php" */ ?>
<?php /*%%SmartyHeaderCode:1788455fd7b87c02ca8-32459372%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c548bfa4cd814ed9262e9fa9c2ba9b4f33e4cf28' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\admin\\img\\main.php',
      1 => 1441609960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1788455fd7b87c02ca8-32459372',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'count' => 0,
    'URL' => 0,
    '_GET' => 0,
    'img' => 0,
    'v' => 0,
    'showpage' => 0,
    'CURMODULE' => 0,
    'CURACTION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55fd7b880524e9_25187333',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fd7b880524e9_25187333')) {function content_55fd7b880524e9_25187333($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common_admin/left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form enctype="multipart/form-data" method="POST"  action="">
  
  <div class="table_top">
 <div class="table_top_l">共找到(<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
)条值得买信息</div>
     <div class="table_top_r">
        <ul>

<li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=img&a=main"><span>全部</span></a></li>

<li <?php if ($_smarty_tpl->tpl_vars['_GET']->value['hide']==1) {?>class="on"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=img&a=main&hide=1"><span>隐藏</span></a></li>
<li <?php if ($_smarty_tpl->tpl_vars['_GET']->value['hide']==2) {?>class="on"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=img&a=main&hide=2"><span>非隐藏</span></a></li>
<li <?php if ($_smarty_tpl->tpl_vars['_GET']->value['picurl']==1) {?>class="on"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=img&a=main&picurl=1"><span>有图片</span></a></li>
<li <?php if ($_smarty_tpl->tpl_vars['_GET']->value['picurl']==2) {?>class="on"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=img&a=main&picurl=2"><span>无图片</span></a></li>
<li <?php if ($_smarty_tpl->tpl_vars['_GET']->value['url']==1) {?>class="on"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=img&a=main&url=1"><span>有跳转</span></a></li>
<li <?php if ($_smarty_tpl->tpl_vars['_GET']->value['url']==2) {?>class="on"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=img&a=main&url=2"><span>无跳转</span></a></li>

        </ul>
  </div>  

</div>

    <div class="table_main">
  <table class="tb tb2 ">
    <tbody>      
      <tr class="hover">
        <th class="td25">删除</th>
        <th>id</th>
        <th>排序</th>
        <th  class="goods_title">标题</th>
        <th>来源</th>
        <th>发布时间</th>
        <th>喜欢</th>
        <th>踩</th>
        <th>隐藏</th>
        <th>编辑</th>
        <th>删除</th>
      </tr>
      <!--<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['img']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>-->
      <tr class="hover">
        <td class="td25"><input type="checkbox" name="del[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" value="1" class="_del" />
          <input type="hidden" name="ids[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" /></td>
               <td><a href="/index.php?m=img&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</a></td>
        <td><input type="text" name="sort[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['sort'];?>
"  class="w40"/></td>
        <td class="goods_title _hover_img"><a href="/index.php?m=img&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['picurl'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['picurl'];?>
"  /></a>
        </td>
        <td>
<?php if ($_smarty_tpl->tpl_vars['v']->value['from_url']) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['from_url'];?>
" target="_blank" class="red"><?php echo $_smarty_tpl->tpl_vars['v']->value['from_name'];?>
</a>
<?php } else { ?>
&nbsp;
<?php }?>
        </td>
        <td ><?php echo $_smarty_tpl->tpl_vars['v']->value['dateline'];?>
</td>
        <td><input type="text" name="like[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['like'];?>
"  class="w40"/></td>
         <td><input type="text" name="hate[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['hate'];?>
"  class="w40"/></td>
        <td><input type="checkbox" name="hide[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" value="1" <?php if ($_smarty_tpl->tpl_vars['v']->value['hide']==1) {?> checked="checked" <?php }?> /></td>
        <td><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=img&a=post&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">编辑</a></td>
        <td><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=img&a=del&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" >删除</a></td>
      </tr>
      <!--<?php } ?>-->
      <tr>
        <td class="td25"><input type="checkbox" class="_del_all" />
          反选</td>
          <td class="td25"><input type="checkbox"  name="_del_all" value="1"/>删除</td>
        <td colspan="8">
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
