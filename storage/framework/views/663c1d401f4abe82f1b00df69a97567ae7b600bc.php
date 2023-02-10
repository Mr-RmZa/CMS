<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php echo $__env->yieldContent('head'); ?>

    <title>Blog Post - Start Bootstrap Template</title>
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.5.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="/fonts/style.css">


    <style>
        body {
            padding-top: 54px;
        }

        @media (min-width: 992px) {
            body {
                padding-top: 56px;
            }
        }
    </style>
</head>

<body>

<!-- Navigation -->
<?php echo $__env->yieldContent('navbar'); ?>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">
        <?php echo $__env->yieldContent('content'); ?>
        </div>
        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

            <?php echo $__env->yieldContent('sidebar'); ?>

        </div>

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->



<!-- Bootstrap core JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js" integrity="sha512-qzrZqY/kMVCEYeu/gCm8U2800Wz++LTGK4pitW/iswpCbjwxhsmUwleL1YXaHImptCHG0vJwU7Ly7ROw3ZQoww==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.3/js/bootstrap.min.js"></script>

</body>

</html>
<?php /**PATH J:\xampp\htdocs\cms\resources\views/frontend/layouts/app.blade.php ENDPATH**/ ?>