<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-05 16:06:02
         compiled from "F:\www\mycyj\code\oa\tpl\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24387583f94f97d8be4-29811014%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a476c0d85435814863b5853aab5d1f96483e426a' => 
    array (
      0 => 'F:\\www\\mycyj\\code\\oa\\tpl\\header.tpl',
      1 => 1480925057,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24387583f94f97d8be4-29811014',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_583f94f97dca68_55190239',
  'variables' => 
  array (
    'imgpath' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583f94f97dca68_55190239')) {function content_583f94f97dca68_55190239($_smarty_tpl) {?><!DOCTYPE html>
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
    <!-- iCheck -->
    <link href="/css/green.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="/css/custom.min.css" rel="stylesheet">
    <!-- Dropzone.js -->
    <link href="/css/dropzone.min.css" rel="stylesheet">

    <?php echo '<script'; ?>
 src="/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/js/index.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/js/common.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
        var imgpath = '<?php echo $_smarty_tpl->tpl_vars['imgpath']->value;?>
';
    <?php echo '</script'; ?>
>
</head>

<body class="nav-md">
<!--消息弹层-->
<div class="modal-backdrop fade in" style="display: none;"></div>
<!--Success-->
<div id="success_layer" class="modal fade bs-example-modal-sm demo_layer" tabindex="-1" role="dialog" aria-hidden="true" style="opacity:1;">
    <div class="modal-dialog modal-sm" style="top: 125px;">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel2">Success</h4>
            </div>
            <div class="modal-body">
                <p id="success_mes" style="text-align: center;"></p>
                <p>即将跳转。。。</p>
            </div>
        </div>
    </div>
</div>
<!--Error-->
<div id="error_layer" class="modal fade bs-example-modal-sm demo_layer" tabindex="-1" role="dialog" aria-hidden="true" style="opacity:1;">
    <div class="modal-dialog modal-sm" style="top: 125px;">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close btn_close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel2">Error</h4>
            </div>
            <div class="modal-body">
                <p id="error_mes" style="text-align: center;"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn_close" data-dismiss="modal">关闭</button>
                <button type="button" class="btn btn-primary btn_close">确定</button>
            </div>

        </div>
    </div>
</div>
<!--Warning-->
<div id="warning_layer" class="modal fade bs-example-modal-sm demo_layer" tabindex="-1" role="dialog" aria-hidden="true" style="opacity:1;">
    <div class="modal-dialog modal-sm" style="top: 125px;">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close btn_close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel2">Warning</h4>
            </div>
            <div class="modal-body">
                <h4 style="text-align: center;">确实删除?</h4>
                <p id="warning_mes" style="text-align: center">删除后将无法恢复!</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn_close" data-dismiss="modal">取消</button>
                <a href="javascript:;" id="warning_link" type="button" class="btn btn-primary">确定</a>
            </div>

        </div>
    </div>
</div><?php }} ?>
