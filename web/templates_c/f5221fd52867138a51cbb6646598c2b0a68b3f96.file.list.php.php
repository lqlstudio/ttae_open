<?php /* Smarty version Smarty-3.1.15, created on 2015-09-20 17:44:50
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\ttae\img\list.php" */ ?>
<?php /*%%SmartyHeaderCode:595455fe8012bdd3c1-58202682%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5221fd52867138a51cbb6646598c2b0a68b3f96' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\ttae\\img\\list.php',
      1 => 1441610080,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '595455fe8012bdd3c1-58202682',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CSS' => 0,
    '_G' => 0,
    'URL' => 0,
    'goods' => 0,
    'v' => 0,
    'k1' => 0,
    'v1' => 0,
    'showpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55fe8012e5b166_43541019',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fe8012e5b166_43541019')) {function content_55fe8012e5b166_43541019($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->tpl_vars['CSS']->value;?>


<div class="nav_position">
当前位置: 
      <a href="<?php echo $_smarty_tpl->tpl_vars['_G']->value['siteurl'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['title'];?>
</a> &gt; 
      <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=img&a=list" class="on">淘头条</a>
</div>

<div class="w990 etao-content feed-detail cl">
  <div class="main">
    <div class="region feed-region ">
      

<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
<div class="listwz">
		<div class="spic">
         <a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['picurl'];?>
_180x180.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
"></a>
         </div>
       
       <div class="cl slist">
        <h3><a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></h3>
        <div class="lcont"><?php echo $_smarty_tpl->tpl_vars['v']->value['description'];?>
</div>
        <div class="feed-buy-box cl" >
        <div class="feed-meta cl">
            <div class="feed-meta-cnt">
               <span>标签：
               <?php  $_smarty_tpl->tpl_vars['v1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v1']->_loop = false;
 $_smarty_tpl->tpl_vars['k1'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['v']->value['tags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v1']->key => $_smarty_tpl->tpl_vars['v1']->value) {
$_smarty_tpl->tpl_vars['v1']->_loop = true;
 $_smarty_tpl->tpl_vars['k1']->value = $_smarty_tpl->tpl_vars['v1']->key;
?>
                     <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=img&a=list&tag=<?php echo $_smarty_tpl->tpl_vars['k1']->value;?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['v1']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['v1']->value;?>
</a>
                <?php } ?>
               </span>
            </div>
            <div class="feed-meta-action">
                <div class="xp">
                <span>发表于 <?php echo $_smarty_tpl->tpl_vars['v']->value['dateline'];?>
</span>
                <a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
">热度：<span class="J_commentCount">（<?php echo $_smarty_tpl->tpl_vars['v']->value['like'];?>
）</span></a></div>
            </div>
        </div>	
        </div>
        			 
    </div>
</div>
<?php } ?>
      
      
    </div>
  </div>
  <?php echo $_smarty_tpl->getSubTemplate ("./right_bar.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  
</div>

<div class="cl redpage">
<?php echo $_smarty_tpl->tpl_vars['showpage']->value;?>

    </div>



<?php echo $_smarty_tpl->getSubTemplate ("../footer.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
