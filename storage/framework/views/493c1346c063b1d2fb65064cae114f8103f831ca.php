<!--
 * CoreUI - Open Source Bootstrap Admin Template
 * @version v1.0.0-alpha.2
 * @link http://roxo.ir
 * Copyright (c) 2018 creativeLabs Masoud Salehi
 * @license MIT
 -->
<!DOCTYPE html>
<html lang="IR-fa" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Roxo Administrator">
    <meta name="author" content="Masoud Salehi">
    <meta name="keyword" content="Bootstrap Data">
    <!-- <link rel="shortcut icon" href="assets/ico/favicon.png"> -->
    <title>CoreUI Bootstrap 4 Admin Template</title>

    <!-- Icons -->
    <link rel="stylesheet" href="/fonts/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" integrity="sha512-4uGZHpbDliNxiAv/QzZNo/yb2FtAX+qiDb7ypBWiEdJQX8Pugp8M6il5SRkN8jQrDLWsh3rrPDSXRf3DwFYM6g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.3.2/css/simple-line-icons.css" rel="stylesheet">
    <!-- Main styles for this application -->
    <link href="<?php echo e(asset('css/all-admin.css')); ?>" rel="stylesheet">
    <?php echo $__env->yieldContent('style'); ?>
</head>
<!-- BODY options, add following classes to body to change options
		1. 'compact-nav'     	  - Switch sidebar to minified version (width 50px)
		2. 'sidebar-nav'		  - Navigation on the left
			2.1. 'sidebar-off-canvas'	- Off-Canvas
				2.1.1 'sidebar-off-canvas-push'	- Off-Canvas which move content
				2.1.2 'sidebar-off-canvas-with-shadow'	- Add shadow to body elements
		3. 'fixed-nav'			  - Fixed navigation
		4. 'navbar-fixed'		  - Fixed navbar
	-->

<body class="navbar-fixed sidebar-nav fixed-nav">
<header class="navbar">
    <div class="container-fluid">
        <button class="navbar-toggler mobile-toggler hidden-lg-up" type="button">&#9776;</button>
        <a class="navbar-brand pt-0" href="#">پنل مدیریت</a>
        <ul class="nav navbar-nav hidden-md-down">
            <li class="nav-item">
                <a class="nav-link navbar-toggler layout-toggler" href="#">&#9776;</a>
            </li>


        </ul>
    </div>
</header>
<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('dashboard.index')); ?>"><i class="icon-speedometer"></i> داشبورد <span class="tag tag-info">جدید</span></a>
            </li>

            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-people"></i> کاربران</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('users.create')); ?>"><i class="icon-user-follow"></i> ثبت کاربر</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('users.index')); ?>"><i class="icon-list"></i> لیست کاربران</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="fa fa-file-text"></i>مطالب</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('posts.create')); ?>"><i class="icon-plus"></i>مطلب جدید</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('posts.index')); ?>"><i class="icon-list"></i> لیست مطالب</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i>دسته بندی ها</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('category.create')); ?>"><i class="icon-plus"></i>دسته بندی جدبد</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('category.index')); ?>"><i class="icon-list"></i> لیست دسته بندی ها</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i>رسانه ها</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('photos.create')); ?>"><i class="icon-plus"></i>آپلود فایل</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('photos.index')); ?>"><i class="icon-list"></i>لیست فایل ها</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i>نظرات</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('comment.index')); ?>"><i class="icon-list"></i>لیست نظرات</a>
                    </li>
                </ul>
            </li>
















            <!--<li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-star"></i> Icons</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="icons-font-awesome.html"><i class="icon-star"></i> Font Awesome</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="icons-simple-line-icons.html"><i class="icon-star"></i> Simple Line Icons</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="widgets.html"><i class="icon-calculator"></i> Widgets <span class="tag tag-info">NEW</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="charts.html"><i class="icon-pie-chart"></i> Charts</a>
            </li>-->
            <!--<li class="divider"></li>
            <li class="nav-title">
                Extras
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-star"></i> Pages</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="pages-login.html" target="_top"><i class="icon-star"></i> Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages-register.html" target="_top"><i class="icon-star"></i> Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages-404.html" target="_top"><i class="icon-star"></i> Error 404</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages-500.html" target="_top"><i class="icon-star"></i> Error 500</a>
                    </li>
                </ul>
            </li>-->

        </ul>
    </nav>
</div>
<!-- Main content -->
<main class="main">



    <div class="container-fluid">

        <div class="animated fadeIn">























































































            <!--/row-->

            <div class="row">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>

    </div>
    <!--/.container-fluid-->
</main>

<!-- Bootstrap and necessary plugins -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js" integrity="sha512-qzrZqY/kMVCEYeu/gCm8U2800Wz++LTGK4pitW/iswpCbjwxhsmUwleL1YXaHImptCHG0vJwU7Ly7ROw3ZQoww==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.3/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js" integrity="sha512-ePSfiGQMIzYzXVQLqWoVC3yxVEHIM5Y3EGh9jPNxpf+hPuLtzPdxJX+lTC3ziPMlDgc5OsM4JThxGwN2DkWEeA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Plugins and scripts required by all views -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.1/Chart.min.js"></script>
<!-- CoreUI main scripts -->

<script src="<?php echo e(asset('js/all-admin.js')); ?>"></script>
<?php echo $__env->yieldContent('script'); ?>
</body>

</html>
<?php /**PATH J:\xampp\htdocs\cms\resources\views/admin/layouts/app.blade.php ENDPATH**/ ?>