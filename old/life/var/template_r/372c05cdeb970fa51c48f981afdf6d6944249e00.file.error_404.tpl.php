<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-11-29 13:09:40
         compiled from "F:\www\mycyj\code\life\tpl\errors\error_404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5064583d0d94dd03c7-89050431%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '372c05cdeb970fa51c48f981afdf6d6944249e00' => 
    array (
      0 => 'F:\\www\\mycyj\\code\\life\\tpl\\errors\\error_404.tpl',
      1 => 1478563553,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5064583d0d94dd03c7-89050431',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_583d0d94efd083_01549015',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583d0d94efd083_01549015')) {function content_583d0d94efd083_01549015($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<body class="four-zero-four">
    <div class="four-zero-four-container">
        <div class="error-code">404</div>
        <div class="error-message">This page doesn't exist</div>
        <div class="button-place">
            <a href="/" class="btn btn-default btn-lg waves-effect">GO TO HOMEPAGE</a>
        </div>
    </div>


<?php echo $_smarty_tpl->getSubTemplate ('foot.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
