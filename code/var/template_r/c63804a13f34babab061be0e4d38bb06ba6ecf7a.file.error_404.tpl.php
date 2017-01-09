<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-26 10:01:48
         compiled from "F:\www\angular\code\tpl\oa\errors\error_404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1235058607a0ca578b4-34758095%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c63804a13f34babab061be0e4d38bb06ba6ecf7a' => 
    array (
      0 => 'F:\\www\\angular\\code\\tpl\\oa\\errors\\error_404.tpl',
      1 => 1480560447,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1235058607a0ca578b4-34758095',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lastpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58607a0cb0b3e1_45857721',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58607a0cb0b3e1_45857721')) {function content_58607a0cb0b3e1_45857721($_smarty_tpl) {?><!DOCTYPE html>
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
                <div class="text-center text-center">
                    <h1 class="error-number">404</h1>
                    <h2>Sorry but we couldn't find this page</h2>
                    <p>This page you are looking for does not exist.<a href="<?php echo $_smarty_tpl->tpl_vars['lastpage']->value;?>
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
