<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-23 11:23:43
         compiled from "F:\www\angular\code\tpl\oa\user\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6415585c98257000c7-69271384%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ac4355d3b0082602a72837004551e252c45c40c' => 
    array (
      0 => 'F:\\www\\angular\\code\\tpl\\oa\\user\\login.tpl',
      1 => 1482463421,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6415585c98257000c7-69271384',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_585c9825723351_79775335',
  'variables' => 
  array (
    'hiddenUrl' => 0,
    'hashKey' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_585c9825723351_79775335')) {function content_585c9825723351_79775335($_smarty_tpl) {?><!DOCTYPE html>
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
    <!-- Animate.css -->
    <link href="/css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="/css/custom.min.css" rel="stylesheet">
</head>

<body class="login">
<div>
    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <form action="<?php echo $_smarty_tpl->tpl_vars['hiddenUrl']->value;?>
/user/index/login" method="post">
                    <h1>登 录</h1>
                    <div>
                        <input type="text" class="form-control" placeholder="Username" name="username" required="required" />
                    </div>
                    <div>
                        <input type="password" class="form-control" placeholder="Password" name="password" required="required" />
                    </div>
                    <div>
                        <input type="hidden" name="hashKey" value="<?php echo $_smarty_tpl->tpl_vars['hashKey']->value;?>
">
                        <button type="submit" class="btn btn-success">提 交</button>
                        <a class="reset_pass" href="#">忘记密码？</a>
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">


                        <div class="clearfix"></div>
                        <br />

                        <div>
                            <h1><i class="fa fa-paw"></i> Love My CYJ!</h1>
                            <p>©2016 All Rights Reserved. Love My CYJ!</p>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>
<?php echo '<script'; ?>
 type="text/javascript" src="/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    $(function() {
        $('.reset_pass').click(function(){
            alert('请联系超级管理员！');
        });
    });
<?php echo '</script'; ?>
>
</body>
</html>
<?php }} ?>
