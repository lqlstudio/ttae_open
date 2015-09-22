<?php /* Smarty version Smarty-3.1.15, created on 2015-09-19 23:33:14
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\admin\member\main.php" */ ?>
<?php /*%%SmartyHeaderCode:146655fd803a30a766-14485227%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b016d07e63c406ba210f26cc23f166f96e1a7e4e' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\admin\\member\\main.php',
      1 => 1441350033,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '146655fd803a30a766-14485227',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'count' => 0,
    'URL' => 0,
    '_G' => 0,
    '_GET' => 0,
    'v' => 0,
    'goods' => 0,
    'showpage' => 0,
    'CURMODULE' => 0,
    'CURACTION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55fd803a716aa9_73763253',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fd803a716aa9_73763253')) {function content_55fd803a716aa9_73763253($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../common_admin/left_bar.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form enctype="multipart/form-data" method="post"  action="">

<div class="table_top">
    <div class="table_top_l">共找到(<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
)条会员信息</div>
    <div class="table_top_r">
      <ul>
        <li ><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=member&a=main">全部</a></li>

<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_G']->value['group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
 <li <?php if ($_smarty_tpl->tpl_vars['_GET']->value['groupid']==$_smarty_tpl->tpl_vars['v']->value['id']) {?> class="on"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=member&a=main&groupid=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a></li>
<?php } ?>

<li <?php if ($_smarty_tpl->tpl_vars['_GET']->value['check']=='1') {?> class="on"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=member&a=main&check=1">待审核</a></li>
<li <?php if ($_smarty_tpl->tpl_vars['_GET']->value['check']=='0') {?> class="on"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=member&a=main&check=0">未审核</a></li>

<li <?php if ($_smarty_tpl->tpl_vars['_GET']->value['order']=='login_count') {?> class="on"<?php }?>>
<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=member&a=main&<?php if ($_smarty_tpl->tpl_vars['_GET']->value['groupid']!='') {?>groupid=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
<?php }?>&order=login_count&sort=<?php if ($_smarty_tpl->tpl_vars['_GET']->value['sort']=='desc') {?>asc<?php } else { ?>desc<?php }?>">登录次数</a>
</li>

<li <?php if ($_smarty_tpl->tpl_vars['_GET']->value['order']=='regdate') {?> class="on"<?php }?>>
<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=member&a=main&<?php if ($_smarty_tpl->tpl_vars['_GET']->value['groupid']!='') {?>groupid=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
<?php }?>&order=regdate&sort=<?php if ($_smarty_tpl->tpl_vars['_GET']->value['sort']=='desc') {?>asc<?php } else { ?>desc<?php }?>">注册时间</a>
</li>

<li <?php if ($_smarty_tpl->tpl_vars['_GET']->value['order']=='login_time') {?> class="on"<?php }?>>
<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=member&a=main&<?php if ($_smarty_tpl->tpl_vars['_GET']->value['groupid']!='') {?>groupid=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
<?php }?>&order=login_time&sort=<?php if ($_smarty_tpl->tpl_vars['_GET']->value['sort']=='desc') {?>asc<?php } else { ?>desc<?php }?>">登录时间</a>
</li>
<li <?php if ($_smarty_tpl->tpl_vars['_GET']->value['order']=='jf') {?> class="on"<?php }?>>

<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=member&a=main&<?php if ($_smarty_tpl->tpl_vars['_GET']->value['groupid']!='') {?>groupid=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
<?php }?>&order=jf&sort=<?php if ($_smarty_tpl->tpl_vars['_GET']->value['sort']=='desc') {?>asc<?php } else { ?>desc<?php }?>">积分</a>
</li>

      </ul>
    </div>
  </div>



  <div class="table_main">
  <table class="tb tb2 ">
    <tbody>
      <tr class="hover">
       <th class="td25">删除</th>
       <th class="td25">uid</th>       
        <th>用户名</th>

        <th>积分</th> 
     <th>签到次数</th>  
        <th>旺旺</th>  
        <th>qq</th>  
        <th>电话</th>  
        <th>登录ip</th>  
        <th>登录时间</th>
        <th>注册ip</th>  
        <th>注册时间</th>
     <th>登录次数</th>
        <th>编辑</th> 

        <th>删除</th>    
 
      </tr>
      </tbody>   
      <!--<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>-->
       <tbody>
      <tr class="hover">  
        <td class="td25"><input type="checkbox" name="del[<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
]" value="1" class="_del" />
         				 <input type="hidden" name="ids[<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" />
                         <input type="hidden" name="username[<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
" />
                         </td>
        <td class="td25"><?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
</td>        
        <td title="<?php echo $_smarty_tpl->tpl_vars['v']->value['email'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['jf'];?>
</td>
         <td><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=sign&a=main&uid=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
&type=sign" title="点击查看"><?php echo $_smarty_tpl->tpl_vars['v']->value['sign'];?>
 次</a></td>
        <td>
        <?php if ($_smarty_tpl->tpl_vars['v']->value['wangwang']) {?> 
      	 <a href="#" class="_wangwang" data-nick="<?php echo $_smarty_tpl->tpl_vars['v']->value['wangwang'];?>
"></a>        <?php }?>&nbsp;
        </td>
        <td><?php if ($_smarty_tpl->tpl_vars['v']->value['qq']) {?><a class="qq" data-qq="<?php echo $_smarty_tpl->tpl_vars['v']->value['qq'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['qq'];?>
</a><?php }?> &nbsp;</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['phone'];?>
</td>         
         <td><?php echo $_smarty_tpl->tpl_vars['v']->value['login_ip'];?>
</td>     
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['login_time'];?>
</td>
        
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['regip'];?>
</td>     
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['regdate'];?>
</td>
       <td><?php echo $_smarty_tpl->tpl_vars['v']->value['login_count'];?>
</td>
        
        <td><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=member&a=post&uid=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" >编辑</a></td>
        
        <td><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=member&a=del&uid=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" >删除</a></td>
       
        <td>
      </tr>
      </tbody>     
       <!--<?php } ?>-->
       <tbody>
      <tr>
        <td class="td25">
        <input type="checkbox" class="_del_all" />反选</td>
        <td><input type="checkbox"  name="_del_all" value="1"/>删除</td>
        <td colspan="12">
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
