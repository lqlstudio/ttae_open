<?php /* Smarty version Smarty-3.1.15, created on 2015-09-20 21:42:29
         compiled from "C:\TAE_SDK\apps\TTAE\v4_0\view\common\index\go_pay.php" */ ?>
<?php /*%%SmartyHeaderCode:642055feb7c5157246-95814926%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45c3d56279a446a15e4e3152a3fc0ed5f8cc8211' => 
    array (
      0 => 'C:\\TAE_SDK\\apps\\TTAE\\v4_0\\view\\common\\index\\go_pay.php',
      1 => 1441280846,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '642055feb7c5157246-95814926',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'num_iid' => 0,
    '_G' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55feb7c52f5a27_68998759',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55feb7c52f5a27_68998759')) {function content_55feb7c52f5a27_68998759($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../../common/header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</head>
<body>
<div class="uz_system"></div>
<a class="go_pay"  style="display:none;" data-tao_num_iid ="<?php echo $_smarty_tpl->tpl_vars['num_iid']->value;?>
" data-taoappkey="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['appkey'];?>
" data-tao_pid="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['pid'];?>
"  target="_blank" href="http://item.taobao.com/item.htm?id=<?php echo $_smarty_tpl->tpl_vars['num_iid']->value;?>
" data-type="0" biz-itemid="<?php echo $_smarty_tpl->tpl_vars['num_iid']->value;?>
"  data-style="2"  data-tmpl="0" data-weburl="<?php echo $_smarty_tpl->tpl_vars['_G']->value['setting']['taodianjing_url'];?>
"></a>
<script type="text/javascript" src="/assets/global/js/jquery-1.8.3.min.js"></script> 
<script type="text/javascript" src="/assets/global/js/go_pay.js"></script>
</body>
</html>
<?php }} ?>
