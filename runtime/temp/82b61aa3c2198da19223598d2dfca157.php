<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:85:"F:\phpStudy\PHPTutorial\WWW\interview_sys\public/../app/index\view\index\details.html";i:1525249071;s:78:"F:\phpStudy\PHPTutorial\WWW\interview_sys\public/../app/index\view\layout.html";i:1525249071;s:82:"F:\phpStudy\PHPTutorial\WWW\interview_sys\public/../app/index\view\layout\top.html";i:1525277449;s:85:"F:\phpStudy\PHPTutorial\WWW\interview_sys\public/../app/index\view\layout\header.html";i:1525277920;s:85:"F:\phpStudy\PHPTutorial\WWW\interview_sys\public/../app/index\view\layout\footer.html";i:1525277265;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="__STATIC__/module/index/assets/images/favicon.png">
    <?php echo parse_string_val($seo_info, get_defined_vars()) ?>
    <link href="__STATIC__/module/index/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="__STATIC__/module/index/assets/plugins/morrisjs/morris.css" rel="stylesheet">
    <link href="__STATIC__/module/index/main/css/style.css" rel="stylesheet">
    <link href="__STATIC__/module/index/main/css/colors/blue.css" id="theme" rel="stylesheet">
    <style>
        body{font-family: "Microsoft Yahei", "Helvetica Neue", Helvetica, Arial, sans-serif}
    </style>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="fix-header fix-sidebar card-no-border">
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
</div>
<div id="main-wrapper">
    <header class="topbar">
        <nav class="navbar top-navbar navbar-expand-md navbar-light">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html">
                   <b>

                    <img src="__STATIC__/module/index/assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                    <img src="__STATIC__/module/index/assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                    </b>
                    <span>
                         <img src="__STATIC__/module/index/assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                         <img src="__STATIC__/module/index/assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
                    </span>
                </a>
            </div>
            <div class="navbar-collapse">
                <ul class="navbar-nav mr-auto mt-md-0">
                    <!-- This is  -->
                    <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                    <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>

                </ul>
                <ul class="navbar-nav my-lg-0">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="__STATIC__/module/index/assets/images/users/1.jpg" alt="user" class="profile-pic" /></a>
                        <div class="dropdown-menu dropdown-menu-right scale-up">
                            <ul class="dropdown-user">
                                <li>
                                    <div class="dw-user-box">
                                        <div class="u-img"><img src="__STATIC__/module/index/assets/images/users/1.jpg" alt="user"></div>
                                        <div class="u-text">
                                            <h4>Steave Jobs</h4>
                                            <p class="text-muted">varun@gmail.com</p>
                                        </div>
                                    </div>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#"><i class="ti-user"></i>个人中心</a></li>
                                <li><a href="#"><i class="ti-wallet"></i> 安全退出</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <aside class="left-sidebar">
        <div class="scroll-sidebar">
            <div class="user-profile">
                <div class="profile-img"> <img src="__STATIC__/module/index/assets/images/users/profile.png" alt="user" />
                    <div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div>
                </div>
                <div class="profile-text">
                    <h5>Markarn Doe</h5>
                </div>
            </div>

            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li class="nav-devider"></li>
                    <li class="nav-small-cap" style="display: none">PERSONAL</li>
                    <li class="active">
                        <a class=" waves-effect waves-dark" href="<?php echo url('index/index/index'); ?>">
                            <i class="mdi mdi-gauge"></i>
                            <span class="hide-menu">
                                首页
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="true">
                            <i class="mdi mdi-gauge"></i>
                            <span class="hide-menu">首页
                                <span class="label label-rouded label-themecolor pull-right">4</span>
                            </span>
                        </a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="index.html">Minimal </a></li>
                            <li><a href="index2.html">Analytical</a></li>
                            <li><a href="index3.html">Demographical</a></li>
                            <li><a href="index4.html">Modern</a></li>
                        </ul>
                    </li>

                </ul>
            </nav>
        </div>
    </aside>
    <div class="page-wrapper">
<header class="jumbotron subhead article_details_header" id="overview">
    <div class="container">
            <h2><?php echo $article_info['name']; ?></h2>
            <p>
                <span  class="pull-left">
                    <span> 发布时间：<?php echo $article_info['create_time']; ?></span>
                </span>
            </p>
    </div>
</header>

<div id="main-container" class="container">
    <div class="row">
        
        <div class="span3 bs-docs-sidebar">
            <ul class="nav nav-list bs-docs-sidenav">
                <?php if(!(empty($category_list) || (($category_list instanceof \think\Collection || $category_list instanceof \think\Paginator ) && $category_list->isEmpty()))): if(is_array($category_list) || $category_list instanceof \think\Collection || $category_list instanceof \think\Paginator): $i = 0; $__LIST__ = $category_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <li <?php if(input('cid') == $vo['id']): ?> class="active" <?php endif; ?> ><a href="<?php echo url('index/index',array('cid' => $vo['id'])); ?>"/><i class='icon-chevron-right'></i><?php echo $vo['name']; ?></a></li> 
                    <?php endforeach; endif; else: echo "" ;endif; else: ?>
                    <div><?php echo config('empty_list_describe'); ?></div>
                <?php endif; ?>
                
            </ul>
        </div>

        <div class="span9">
            <div>
                <section>
                    <div class="container">
                        <p>
                            <?php echo $article_info['content']; ?>
                        </p>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
    </div>
</div>
<script src="__STATIC__/module/index/assets/plugins/jquery/jquery.min.js"></script>
<script src="__STATIC__/module/index/assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="__STATIC__/module/index/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="__STATIC__/module/index/main/js/jquery.slimscroll.js"></script>
<script src="__STATIC__/module/index/main/js/waves.js"></script>
<script src="__STATIC__/module/index/main/js/sidebarmenu.js"></script>
<script src="__STATIC__/module/index/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
<script src="__STATIC__/module/index/main/js/custom.min.js"></script>
<script src="__STATIC__/module/index/assets/plugins/sparkline/jquery.sparkline.min.js"></script>
<script src="__STATIC__/module/index/assets/plugins/raphael/raphael-min.js"></script>
<script src="__STATIC__/module/index/assets/plugins/morrisjs/morris.min.js"></script>
<script src="__STATIC__/module/index/main/js/dashboard1.js"></script>
<script src="__STATIC__/module/index/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>
