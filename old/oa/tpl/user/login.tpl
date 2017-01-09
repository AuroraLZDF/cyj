<!DOCTYPE html>
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
                <form action="/user/index/login" method="post">
                    <h1>登 录</h1>
                    <div>
                        <input type="text" class="form-control" placeholder="Username" name="username" required="required" />
                    </div>
                    <div>
                        <input type="password" class="form-control" placeholder="Password" name="password" required="required" />
                    </div>
                    <div>
                        <input type="hidden" name="hashKey" value="{$hashKey}">
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
<script type="text/javascript" src="/js/jquery.min.js"></script>
<script type="text/javascript">
    $(function() {
        $('.reset_pass').click(function(){
            alert('请联系超级管理员！');
        });
    });
</script>
</body>
</html>
