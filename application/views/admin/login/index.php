<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><meta name="renderer" content="webkit">

    <title>登录</title>

    <link href="<?=base_url()?>public/admin/css/bootstrap.min.css?v=3.4.0" rel="stylesheet">
    <link href="<?=base_url()?>public/admin/font-awesome/css/font-awesome.css?v=4.3.0" rel="stylesheet">

    <link href="<?=base_url()?>public/admin/css/animate.css" rel="stylesheet">
    <link href="<?=base_url()?>public/admin/css/style.css?v=2.2.0" rel="stylesheet">

</head>

<body class="gray-bg">

<div class="middle-box text-center loginscreen  animated fadeInDown">
    <div>
        <div>

            <h1 class="logo-name">DX</h1>

        </div>
        <h3>欢迎使用 后台</h3>

        <form class="m-t" role="form" method="post" action="<?=site_url("admin/login/signIn")?>">
            <div class="form-group">
                <input type="email" name="account" class="form-control" placeholder="用户名" required="">
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="密码" required="">
            </div>
            <button type="submit" class="btn btn-primary block full-width m-b">登 录</button>


            <p class="text-muted text-center"> <a href="javascript:alert('忘记就忘记吧')"><small>忘记密码了？</small></a>
            </p>

        </form>
    </div>
</div>

<!-- Mainly scripts -->
<script src="<?=base_url()?>public/admin/js/jquery-2.1.1.min.js"></script>
<script src="<?=base_url()?>public/admin/js/bootstrap.min.js?v=3.4.0"></script>

</body>

</html>