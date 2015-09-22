<?php /* Smarty version Smarty-3.1.15, created on 2015-09-21 19:36:43
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\ttae\img\main.php" */ ?>
<?php /*%%SmartyHeaderCode:2164855fe801613c5a7-82061244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae4d3fe65868bcc325f31434678af1bb825db9b8' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\ttae\\img\\main.php',
      1 => 1442774030,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2164855fe801613c5a7-82061244',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55fe801644edd0_87830313',
  'variables' => 
  array (
    'CSS' => 0,
    '_G' => 0,
    'URL' => 0,
    'img' => 0,
    'k' => 0,
    'v' => 0,
    'like' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fe801644edd0_87830313')) {function content_55fe801644edd0_87830313($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->tpl_vars['CSS']->value;?>


<div class="nav_position">
当前位置: 
      <a href="<?php echo $_smarty_tpl->tpl_vars['_G']->value['siteurl'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['title'];?>
</a> &gt; 
      <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=img&a=list">淘头条</a> &gt;
       <a href="<?php echo $_smarty_tpl->tpl_vars['img']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['img']->value['title'];?>
" class="on"><?php echo $_smarty_tpl->tpl_vars['img']->value['title'];?>
</a>
</div>

<div class="w990 etao-content feed-detail cl">
  <div class="main">
    <div class="region feed-region ">
      
      <div class="feed-title J_feedTitle cl">
        <h1 class="cl"><?php echo $_smarty_tpl->tpl_vars['img']->value['title'];?>
<?php if ($_smarty_tpl->tpl_vars['img']->value['new']==1) {?><span class="new"></span><?php }?></h1>
      </div>
      <div class="feed-buy-box cl" >
        <div class="feed-meta cl">
         
          <div class="feed-meta-action">
            <div class="fx y">

<div class="bdsharebuttonbox" data-size="24" data-picurl="<?php echo $_smarty_tpl->tpl_vars['img']->value['picurl'];?>
"  data-desc="<?php echo $_smarty_tpl->tpl_vars['img']->value['description'];?>
">
</div>

            </div>
           <span>来源：<?php echo $_smarty_tpl->tpl_vars['img']->value['from_name'];?>
</span><span>发表于 <?php echo $_smarty_tpl->tpl_vars['img']->value['dateline'];?>
</span>
          </div>
        </div>
      </div>
      <!-- /info -->
      
      <div class="intro" ><?php echo $_smarty_tpl->tpl_vars['img']->value['description'];?>
..</div>
      
      <div class="feed-cnt">
      <?php echo $_smarty_tpl->tpl_vars['img']->value['message'];?>

      </div>
      <div class="explain"> 
      “<a href="<?php echo $_smarty_tpl->tpl_vars['_G']->value['siteurl'];?>
"><b><?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['title'];?>
</b></a>
      ”是一个中立的导购平台，致力于打造为广大网友买到高性价比包邮商品,每天为网友们提供严谨的、准确的、新鲜的、丰富的网购产品特价资讯。
      网站资讯信息大部分来自于网友爆料和其它站点收集，经过编辑审核后的内容也会得到大量网友的评价，这是一个大家帮助大家的互动社区。 
      </div>
      <div class="biao cl">
        <dl>
          <dt class="titb cl">标<br>签</dt>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['img']->value['tags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
          <dd class="bga"><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
m=img&a=list&tag=<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</a></dd>
<?php } ?>

        </dl>
        <dl class="like" style="margin:15px;">


<div class="baidu_share" data-size="32" data-picurl="<?php echo $_smarty_tpl->tpl_vars['img']->value['picurl'];?>
"  data-desc="<?php echo $_smarty_tpl->tpl_vars['img']->value['description'];?>
"></div>
        </dl>
      </div>
      <div class="page">
        <li>上一篇：<?php echo $_smarty_tpl->tpl_vars['img']->value['up'];?>
 </li>
        <li class="right">下一篇：<?php echo $_smarty_tpl->tpl_vars['img']->value['down'];?>
</li>
      </div>
    </div>
    <div class="cai"> <span>你可能<br>
      还喜欢</span>
      <ul>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['like']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
"  title="<?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
" ><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['picurl'];?>
_100x100.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
"></a></li>
<?php } ?>
      </ul>
    </div>
    <div class="region comment-region" id="feed_comments"> 
	<div class="_duoshuo" data-id="<?php echo $_smarty_tpl->tpl_vars['img']->value['id'];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['duoshuo'];?>
"></div>
    </div>
  </div>
    <?php echo $_smarty_tpl->getSubTemplate ("./right_bar.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  
</div>

<?php echo $_smarty_tpl->getSubTemplate ("../footer.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
