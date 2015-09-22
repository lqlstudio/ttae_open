<?php /* Smarty version Smarty-3.1.15, created on 2015-09-20 10:36:55
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\admin\duihuan\main.php" */ ?>
<?php /*%%SmartyHeaderCode:89055fe1bc7ab99f7-31628055%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a83e3e2c86238fce8aca84a3a5a7a0047c1b1b3' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\admin\\duihuan\\main.php',
      1 => 1441350033,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89055fe1bc7ab99f7-31628055',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'count' => 0,
    'URL' => 0,
    '_G' => 0,
    '_GET' => 0,
    'k' => 0,
    'vv' => 0,
    'goods' => 0,
    'v' => 0,
    'IMGDIR' => 0,
    'showpage' => 0,
    'CURMODULE' => 0,
    'CURACTION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55fe1bc7df32a3_56794116',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fe1bc7df32a3_56794116')) {function content_55fe1bc7df32a3_56794116($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common_admin/left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form enctype="multipart/form-data"  method="post"  >

<div class="table_top">
   <div class="table_top_l">共找到(<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
)个兑换商品信息</div>
      <div class="table_top_r">
      <ul>
       <li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=duihuan&a=main">全部</a></li>
        <!--<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['duihuan_cate']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['vv']->key;
?>-->
              <li <?php if ($_smarty_tpl->tpl_vars['_GET']->value['cate']&&$_smarty_tpl->tpl_vars['_GET']->value['cate']==$_smarty_tpl->tpl_vars['k']->value) {?>class="on"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=duihuan&a=main&cate=<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['vv']->value['name'];?>
</a></li>
        <!--<?php } ?>-->
      
        
      </ul>
      </div>
  </div>
  
  
  <div class="table_main">
    <table class="tb tb2 ">
      <tbody>
        <tr class="hover">
          <td>删除</td>
          <td>id</td>
          <td  class="goods_title">标题</td> 
          <td>标签/分类</td>

          <td>兑换状态</td>


          <td>上线/下线时间</td>

          <td>所需积分</td>
          <td>兑换总数</td>
          <td>兑换成功</td>
          
          <td>排序</td>
          <td>下架</td>
          <td>编辑</td>
          <td>添加时间</td>
        </tr>
        <!--<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>-->
        <tr class="hover">
          <td><input type="checkbox" name="del[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" value="1" class="_del" />
            &nbsp;
            <input type="hidden" name="ids[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" />
            <a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['id_url'];?>
" target="_blank" title="新窗口打开"> <img src="<?php echo $_smarty_tpl->tpl_vars['IMGDIR']->value;?>
/open.gif" ></a></td>
          <td><a href="/index.php?m=duihuan&a=apply&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</a></td>
          <td class="_hover_img goods_title"><a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['id_url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a> <span class="red">(<?php echo $_smarty_tpl->tpl_vars['v']->value['count'];?>
人申请)</span>
           <?php if ($_smarty_tpl->tpl_vars['v']->value['picurl']) {?><a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['picurl'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['picurl'];?>
" alt="" /></a><?php }?>
          </td>
           <td>
			 <select name="cate[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]">

               <!--<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['duihuan_cate']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['vv']->key;
?>-->
            <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['cate']==$_smarty_tpl->tpl_vars['k']->value) {?> selected="selected"<?php }?> ><?php echo $_smarty_tpl->tpl_vars['vv']->value['name'];?>
</option>
            <!--<?php } ?>-->
              </select>
          </td>
          

          <td><?php if ($_smarty_tpl->tpl_vars['v']->value['status']) {?><?php echo $_smarty_tpl->tpl_vars['v']->value['status_text'];?>
<?php } else { ?><span class="red"><?php echo $_smarty_tpl->tpl_vars['v']->value['status_text'];?>
</span><?php }?></td>

          <td>
          <p><input type="text" name="start_time[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['start_time'];?>
" class="txt _dateline" /></p>
          <p><input type="text" name="end_time[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['end_time'];?>
" class="txt _dateline" /></p></td>

          <td><?php echo $_smarty_tpl->tpl_vars['v']->value['jf'];?>
</td>
          
          <td><?php echo $_smarty_tpl->tpl_vars['v']->value['sum'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['v']->value['num'];?>
</td>
          
          <td><input type="text" name="sort[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['sort'];?>
"  class="txt w40"/></td>
          <td><input type="checkbox" name="hide[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" value="1" <?php if ($_smarty_tpl->tpl_vars['v']->value['hide']==1) {?> checked="checked" <?php }?> /></td>
          <td><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=duihuan&a=post&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['_G']->value['page'];?>
">编辑</a></td>
          <td><?php echo $_smarty_tpl->tpl_vars['v']->value['dateline'];?>
</td>
        </tr>
        <!--<?php } ?>-->
        
        <tr>
          <td class="td28" colspan="4"><input type="checkbox" class="_del_all" />
            反选  (选中的才会执行相关操作...)</td>
          <td colspan="12"><div class="y"><?php echo $_smarty_tpl->tpl_vars['showpage']->value;?>
 </div></td>
        </tr>
        <tr>
          <td class="td28"><input type="checkbox" name="_del_all"  value="1"  />
            删除</td>

          <td class="td28"><input type="checkbox" name="hide_in"  value="1" />
           下架</td>
          <td  colspan="12"><input type="submit" class="btn submit_btn"  name="onsubmit" value="提交">
            提示:上方有独立选择了类型或分类,则不采用此处全部设置</td>
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
