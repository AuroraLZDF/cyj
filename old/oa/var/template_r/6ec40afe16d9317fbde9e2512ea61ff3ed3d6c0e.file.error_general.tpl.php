<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-01 10:47:34
         compiled from "F:\www\mycyj\code\oa\tpl\errors\error_general.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18361583f85736ca066-09494132%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ec40afe16d9317fbde9e2512ea61ff3ed3d6c0e' => 
    array (
      0 => 'F:\\www\\mycyj\\code\\oa\\tpl\\errors\\error_general.tpl',
      1 => 1480560447,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18361583f85736ca066-09494132',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_583f8573752c01_44500996',
  'variables' => 
  array (
    'code' => 0,
    'message' => 0,
    'lastpage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583f8573752c01_44500996')) {function content_583f8573752c01_44500996($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Love My CYJ! | </title>

    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/css/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <!-- page content -->
        <div class="col-md-12">
            <div class="col-middle">
                <div class="text-center">
                    <h1 class="error-number"><?php echo $_smarty_tpl->tpl_vars['code']->value;?>
</h1>
                    <h2>Internal Server Error</h2>
                    <p><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
<a href="<?php echo $_smarty_tpl->tpl_vars['lastpage']->value;?>
" style="margin-left:20px;">返回上一页</a></p>
                </div>
            </div>
        </div>
        <!-- /page content -->
    </div>
</div>

<!-- jQuery -->
<?php echo '<script'; ?>
 src="/js/jquery.min.js"><?php echo '</script'; ?>
>
<!-- Bootstrap -->
<?php echo '<script'; ?>
 src="/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<!-- FastClick -->
<?php echo '<script'; ?>
 src="/js/fastclick.js"><?php echo '</script'; ?>
>
<!-- NProgress -->
<?php echo '<script'; ?>
 src="/js/nprogress.js"><?php echo '</script'; ?>
>

<!-- Custom Theme Scripts -->
<?php echo '<script'; ?>
 src="/js/custom.min.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }} ?>
