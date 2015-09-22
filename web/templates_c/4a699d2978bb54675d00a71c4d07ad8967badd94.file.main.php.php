<?php /* Smarty version Smarty-3.1.15, created on 2015-09-19 23:38:13
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\admin\apply\main.php" */ ?>
<?php /*%%SmartyHeaderCode:582255fd8165413674-02799721%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a699d2978bb54675d00a71c4d07ad8967badd94' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\admin\\apply\\main.php',
      1 => 1441350033,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '582255fd8165413674-02799721',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'count' => 0,
    'URL' => 0,
    '_GET' => 0,
    'bm_status_text' => 0,
    'v' => 0,
    'goods' => 0,
    'IMGDIR' => 0,
    '_G' => 0,
    'vv' => 0,
    'showpage' => 0,
    'vvv' => 0,
    'a' => 0,
    'CURMODULE' => 0,
    'CURACTION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55fd81658cbbf2_96102386',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fd81658cbbf2_96102386')) {function content_55fd81658cbbf2_96102386($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common_admin/left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form enctype="multipart/form-data"  method="post"  >

<div class="table_top">

 <div class="table_top_l">共找到(<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
)个商品信息</div>
     <div class="table_top_r">
        <ul>

<li>按条件查看商品</li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=apply&a=main">全部</a></li>
<li <?php if ($_smarty_tpl->tpl_vars['_GET']->value['check']&&$_smarty_tpl->tpl_vars['_GET']->value['checks']==1) {?>class="on"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=apply&a=main&checks=1"><span>已审核</span></a></li>
<li <?php if ($_smarty_tpl->tpl_vars['_GET']->value['check']&&$_smarty_tpl->tpl_vars['_GET']->value['checks']==2) {?>class="on"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=apply&a=main&checks=2"><span>已拒绝</span></a></li>
<li <?php if ($_smarty_tpl->tpl_vars['_GET']->value['check']&&$_smarty_tpl->tpl_vars['_GET']->value['checks']==0) {?>class="on"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=apply&a=main&checks=0"><span>未审核</span></a></li>

<?php if ($_smarty_tpl->tpl_vars['bm_status_text']->value) {?>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bm_status_text']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
<li <?php if ($_smarty_tpl->tpl_vars['_GET']->value['check']&&$_smarty_tpl->tpl_vars['_GET']->value['checks']==$_smarty_tpl->tpl_vars['v']->value['status']) {?>class="on"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=apply&a=main&checks=<?php echo $_smarty_tpl->tpl_vars['v']->value['status'];?>
"><span><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</span></a></li>

<?php } ?>
<?php }?>

        </ul>
  </div>  

</div>
  <div class="table_main">
  <table class="tb tb2 ">
    <tbody>

      <tr class="hover">
        <td>删除</td>
        <td>aid</td>
        <td >所属栏目</td>
        <td class="goods_title">标题</td>
          
        <td>旺旺</td>
        
        <td>优惠价</td>
       
        <td>佣金</td>   

         <td>分类</td>

        <td>上线/下线时间</td>       
        <td>包邮</td>

        <td>排序</td>
        <td>下架</td>        
        <td>审核</td>        
        <td>编辑</td>

        <td>删除</td>

        <td>报名时间</td>
      </tr>
      <!--<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['goods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>-->
      <tr class="hover">
        <td><input type="checkbox" name="del[<?php echo $_smarty_tpl->tpl_vars['v']->value['aid'];?>
]" value="1" class="_del" />
          &nbsp;
          <input type="hidden" name="ids[<?php echo $_smarty_tpl->tpl_vars['v']->value['aid'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['aid'];?>
" />
           <input type="hidden" name="num_iid[<?php echo $_smarty_tpl->tpl_vars['v']->value['aid'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['num_iid'];?>
" />
          <a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['id_url'];?>
" target="_blank" title="新窗口打开"> <img src="<?php echo $_smarty_tpl->tpl_vars['IMGDIR']->value;?>
/open.gif" ></a></td>
        <td title="<?php echo $_smarty_tpl->tpl_vars['v']->value['num_iid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['aid'];?>
</td>
        <td><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=apply&a=main&fid=<?php echo $_smarty_tpl->tpl_vars['v']->value['fid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['channel_name'];?>
</a></td>
        <td class="_hover_img goods_title" style="width:430px">
       <a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
" target="_blank"><?php if ($_smarty_tpl->tpl_vars['v']->value['title']) {?><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
<?php }?></a>
        <?php if ($_smarty_tpl->tpl_vars['v']->value['shop_type']==1) {?>(商城)<?php } elseif ($_smarty_tpl->tpl_vars['v']->value['shop_type']==2) {?>(集市)<?php }?>&nbsp;
        <?php if ($_smarty_tpl->tpl_vars['v']->value['hide']==1) {?> <span class="red">(下架)</span><?php }?> 
        <a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['picurl'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['picurl'];?>
"  /></a>
        </td>
        
        <td title="<?php echo $_smarty_tpl->tpl_vars['v']->value['apply_wangwang'];?>
" ><a href="#" target="_blank" class="_wangwang" data-nick="<?php echo $_smarty_tpl->tpl_vars['v']->value['apply_wangwang'];?>
"></a></td>     
        <td><div class="price"><?php echo $_smarty_tpl->tpl_vars['v']->value['yh_price'];?>
</div></td>
         <td><div class="commission"  data-iid="<?php echo $_smarty_tpl->tpl_vars['v']->value['num_iid'];?>
" data-zk="<?php echo $_smarty_tpl->tpl_vars['v']->value['zk'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['commission'];?>
</div></td>
           <td><select name="cate[<?php echo $_smarty_tpl->tpl_vars['v']->value['aid'];?>
]">
            <option value="0">----无分类----</option>
            <!--<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['cate']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?>-->
            <option value="<?php echo $_smarty_tpl->tpl_vars['vv']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['cate']['id']==$_smarty_tpl->tpl_vars['vv']->value['id']) {?> selected="selected"<?php }?> ><?php echo $_smarty_tpl->tpl_vars['vv']->value['name'];?>
</option>
            <!--<?php } ?>-->
          </select></td>

        <td><p><input type="text" name="start_time[<?php echo $_smarty_tpl->tpl_vars['v']->value['aid'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['start_time'];?>
" class="txt _dateline" /></p>
        <p><input type="text" name="end_time[<?php echo $_smarty_tpl->tpl_vars['v']->value['aid'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['end_time'];?>
" class="txt _dateline" /></p>
        </td>
        <td><span <?php if ($_smarty_tpl->tpl_vars['v']->value['baoyou']==0) {?> class="red"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['baoyou_name'];?>
</span></td>

        <td><input type="text" name="sort[<?php echo $_smarty_tpl->tpl_vars['v']->value['aid'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['sort'];?>
"  class="txt w40"/></td>
        <td><input type="checkbox" name="hide[<?php echo $_smarty_tpl->tpl_vars['v']->value['aid'];?>
]" value="1" <?php if ($_smarty_tpl->tpl_vars['v']->value['hide']==1) {?> checked="checked" <?php }?> /></td>
        <td>
       <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=apply&a=check&aid=<?php echo $_smarty_tpl->tpl_vars['v']->value['aid'];?>
" data-check="<?php echo $_smarty_tpl->tpl_vars['v']->value['check'];?>
" data-default="0|1|2" class="_check_status <?php if ($_smarty_tpl->tpl_vars['v']->value['check']==0) {?>red<?php }?>"></a>
       
        </td>
        <td><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=apply&a=post&aid=<?php echo $_smarty_tpl->tpl_vars['v']->value['aid'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['_G']->value['page'];?>
">编辑</a></td>

        <td><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=apply&a=del&aid=<?php echo $_smarty_tpl->tpl_vars['v']->value['aid'];?>
&page=<?php echo $_smarty_tpl->tpl_vars['_G']->value['page'];?>
" class="_confirm" data-msg="您确定删除本商品?删除后不可恢复">删除</a></td>

        <td <?php if ($_smarty_tpl->tpl_vars['v']->value['posttime']>0) {?>title="发布时间:<?php echo $_smarty_tpl->tpl_vars['v']->value['posttime'];?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['posttime'];?>
</td>
      </tr>
      <!--<?php } ?>-->
     
     <tr>
      <td class="td28" colspan="4"><input type="checkbox" class="_del_all" />反选 </td>
      <td colspan="13"><div class="y"><?php echo $_smarty_tpl->tpl_vars['showpage']->value;?>
 </div></td>          
     </tr>
      <tr>
       
        <td class="td28"><input type="checkbox" name="_del_all"  value="1"  />删除</td>
        <td class="td28"> <input type="checkbox" name="check"  value="1"  />审核</td>
        <td class="td28"><input type="checkbox" name="hide_in"  value="1" />下架</td>
        <td  colspan="13">
          <div class="fixsel cl">

          
            
            
          
<select name="in_fid" class="select_fid"> 
 <option value="0">请选择要移动的栏目</option>
<!--<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['channels']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?>-->
 <option value="<?php echo $_smarty_tpl->tpl_vars['vv']->value['fid'];?>
" <?php if ($_smarty_tpl->tpl_vars['_GET']->value['fid']==$_smarty_tpl->tpl_vars['vv']->value['fid']) {?> selected="selected" class="on"  <?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['vv']->value['name'];?>
</option>
<!--<?php if ($_smarty_tpl->tpl_vars['vv']->value['sub']) {?>-->
      <!--<?php  $_smarty_tpl->tpl_vars['vvv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vvv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vv']->value['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vvv']->key => $_smarty_tpl->tpl_vars['vvv']->value) {
$_smarty_tpl->tpl_vars['vvv']->_loop = true;
?>-->
          <option value="<?php echo $_smarty_tpl->tpl_vars['vvv']->value['fid'];?>
" <?php if ($_smarty_tpl->tpl_vars['_GET']->value['fid']==$_smarty_tpl->tpl_vars['vvv']->value['fid']) {?> selected="selected" class="on" <?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['vvv']->value['name'];?>
</option>
          <!--<?php if ($_smarty_tpl->tpl_vars['vvv']->value['sub']) {?>-->
           <!--<?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vvv']->value['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>-->
           <option value="<?php echo $_smarty_tpl->tpl_vars['a']->value['fid'];?>
" <?php if ($_smarty_tpl->tpl_vars['_GET']->value['fid']==$_smarty_tpl->tpl_vars['a']->value['fid']) {?> selected="selected" class="on"  <?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['a']->value['name'];?>
</option>
          <!--<?php } ?>-->
          <!--<?php }?>-->  
      <!--<?php } ?>-->
<!--<?php }?>-->              
<!--<?php } ?>-->
</select>
            

&nbsp;&nbsp;
<select name="cate_in">
<option value="-1">请选择商品分类</option>
<option value="0">无分类</option>
<!--<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['goods_cate']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?>-->
<option value="<?php echo $_smarty_tpl->tpl_vars['vv']->value['id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['vv']->value['name'];?>
</option>
<!--<?php } ?>-->
</select> &nbsp;&nbsp;
<?php if ($_smarty_tpl->tpl_vars['_GET']->value['fid']) {?>
<input type="hidden" name="cur_fid" value="<?php echo $_smarty_tpl->tpl_vars['_GET']->value['fid'];?>
" />
<?php }?>

&nbsp;&nbsp;
上线时间:
<input type="text" name="start_time_in" value="" class="txt _dateline start_time_in" style="width:180px" />&nbsp;&nbsp;
下线时间:
<input type="text" name="end_time_in" value="" class="txt _dateline start_time_in" style="width:180px" />
        

          </div></td>
        
      </tr>
      <tr>
      	<td >&nbsp;</td>
          <td  colspan="15"><input type="submit" class="btn submit_btn"  name="onsubmit"  value="提交">&nbsp;&nbsp;全局设置,将会把所有选中的商品修改成此处设置的
          
          </td>
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
