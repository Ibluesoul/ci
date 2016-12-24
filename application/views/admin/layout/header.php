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

    <!-- Custom and plugin javascript -->
    <script src="<?=base_url()?>public/admin/js/hplus.js?v=2.2.0"></script>
    <script src="<?=base_url()?>public/admin/js/plugins/pace/pace.min.js"></script>

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
                                <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Beaut-zihan</strong>
                             </span> <span class="text-muted text-xs block">超级管理员 <b class="caret"></b></span> </span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="form_avatar.html">修改头像</a>
                            </li>
                            <li><a href="profile.html">个人资料</a>
                            </li>
                            <li><a href="contacts.html">联系我们</a>
                            </li>
                            <li><a href="mailbox.html">信箱</a>
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
                <li class="active">
                    <a href="<?=site_url('admin/home/index')?>"><i class="fa fa-magic"></i> <span class="nav-label">主页</span></a>
                </li>

                <li>
                    <a href="javascript:;"><i class="fa fa-th-large"></i> <span class="nav-label">博客</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="<?=site_url('admin/blog/write')?>">写博客</a>
                        </li>
                        <li><a href="##">查看博客</a>
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
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="index.html#"><i class="fa fa-bars"></i> </a>
                    <form role="search" class="navbar-form-custom" method="post" action="search_results.html">
                        <div class="form-group">
                            <input type="text" placeholder="请输入您需要查找的内容 …" class="form-control" name="top-search" id="top-search">
                        </div>
                    </form>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <span class="m-r-sm text-muted welcome-message"><a href="index.html" title="返回首页"><i class="fa fa-home"></i></a>欢迎使用H+后台主题</span>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="index.html#">
                            <i class="fa fa-envelope"></i> <span class="label label-warning">16</span>
                        </a>
                        <ul class="dropdown-menu dropdown-messages">
                            <li>
                                <div class="dropdown-messages-box">
                                    <a href="profile.html" class="pull-left">
                                        <img alt="image" class="img-circle" src="<?=base_url()?>public/admin/img/a7.jpg">
                                    </a>
                                    <div class="media-body">
                                        <small class="pull-right">46小时前</small>
                                        <strong>小四</strong> 项目已处理完结
                                        <br>
                                        <small class="text-muted">3天前 2014.11.8</small>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="dropdown-messages-box">
                                    <a href="profile.html" class="pull-left">
                                        <img alt="image" class="img-circle" src="<?=base_url()?>public/admin/img/a4.jpg">
                                    </a>
                                    <div class="media-body ">
                                        <small class="pull-right text-navy">25小时前</small>
                                        <strong>国民岳父</strong> 这是一条测试信息
                                        <br>
                                        <small class="text-muted">昨天</small>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="text-center link-block">
                                    <a href="mailbox.html">
                                        <i class="fa fa-envelope"></i> <strong> 查看所有消息</strong>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="index.html#">
                            <i class="fa fa-bell"></i> <span class="label label-primary">8</span>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="mailbox.html">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i> 您有16条未读消息
                                        <span class="pull-right text-muted small">4分钟前</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="profile.html">
                                    <div>
                                        <i class="fa fa-qq fa-fw"></i> 3条新回复
                                        <span class="pull-right text-muted small">12分钟钱</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="text-center link-block">
                                    <a href="notifications.html">
                                        <strong>查看所有 </strong>
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?=site_url('admin/home/logout')?>">
                            <i class="fa fa-sign-out"></i> 退出
                        </a>
                    </li>
                </ul>

            </nav>
        </div>