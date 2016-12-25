<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">

    <title>主页</title>

    <link href="<?=base_url()?>public/admin/css/bootstrap.min.css?v=3.4.0" rel="stylesheet">
    <link href="<?=base_url()?>public/admin/font-awesome/css/font-awesome.css?v=4.3.0" rel="stylesheet">

    <!-- Morris -->
    <link href="<?=base_url()?>public/admin/css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="<?=base_url()?>public/admin/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="<?=base_url()?>public/admin/css/animate.css" rel="stylesheet">

    <link href="<?=base_url()?>public/admin/css/plugins/summernote/summernote.css" rel="stylesheet">
    <link href="<?=base_url()?>public/admin/css/plugins/summernote/summernote-bs3.css" rel="stylesheet">

    <link href="<?=base_url()?>public/admin/css/style.css?v=2.2.0" rel="stylesheet">

    <!-- Mainly scripts -->
    <script src="<?=base_url()?>public/admin/js/jquery-2.1.1.min.js"></script>
    <script src="<?=base_url()?>public/admin/js/bootstrap.min.js?v=3.4.0"></script>
    <script src="<?=base_url()?>public/admin/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?=base_url()?>public/admin/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Peity -->
    <script src="js/plugins/peity/jquery.peity.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?=base_url()?>public/admin/js/hplus.js?v=2.2.0"></script>
    <script src="<?=base_url()?>public/admin/js/plugins/pace/pace.min.js"></script>

    <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>

    <!-- Peity -->
    <script src="js/demo/peity-demo.js"></script>

</head>

<body>
<div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="side-menu">
                <li class="nav-header">

                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="<?=base_url()?>public/admin/img/profile_small.jpg" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                                <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?=$_SESSION['name']?:'无昵称'?></strong>
                             </span> <span class="text-muted text-xs block">超级管理员 <b class="caret"></b></span> </span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="javascript:;">修改头像</a>
                            </li>
                            <li><a href="javascript:;">个人资料</a>
                            </li>
                            <li><a href="javascript:;">联系我们</a>
                            </li>
                            <li><a href="javascript:;">信箱</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="<?=site_url('admin/home/logout')?>">安全退出</a>
                            </li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        H+
                    </div>

                </li>
                <li>
                    <a href="<?=site_url('admin/home/index')?>"><i class="fa fa-magic"></i> <span class="nav-label">主页</span></a>
                </li>

                <li>
                    <a href="javascript:;"><i class="fa fa-th-large"></i> <span class="nav-label">博客</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a class="nav-second-label" href="<?=site_url('admin/blog/write')?>">写博客</a>
                        </li>
                        <li><a class="nav-second-label" href="<?=site_url('admin/blog/index')?>">查看博客</a>
                        </li>
                    </ul>
                </li>




            </ul>

        </div>
    </nav>

    <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="javascript:;>"><i class="fa fa-bars"></i> </a>
                    <form role="search" class="navbar-form-custom" method="post">
                        <div class="form-group">
                            <input type="text" placeholder="请输入您需要查找的内容 …" class="form-control" name="top-search" id="top-search">
                        </div>
                    </form>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <span class="m-r-sm text-muted welcome-message"><a href="index.html" title="返回首页"><i class="fa fa-home"></i></a>欢迎使用H+后台静态模板</span>
                    </li>
                    <li>
                        <a href="<?=site_url('admin/home/logout')?>">
                            <i class="fa fa-sign-out"></i> 退出
                        </a>
                    </li>
                </ul>

            </nav>
        </div>

        <script>
            $(function(){
                $('.nav .nav-label').each(function(){
                    if($(this).html() == $('.breadcrumb').find('.f').html()) $(this).closest('a').click();
                });

                $('.nav .nav-second-label').each(function(){
                    if($(this).html() == $('.breadcrumb').find('.s').html()) $(this).closest('li').addClass('active');
                });
            })

        </script>