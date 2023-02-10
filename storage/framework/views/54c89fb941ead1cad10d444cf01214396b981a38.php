<?php $__env->startSection('head'); ?>
    <meta name="description" content="توضیحات">
    <meta name="keywords" content="برچسب ها">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <h3 class="mt-4">آخرین مطالب</h3>
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <!-- Title -->
        <h1 class="mt-4"><?php echo e($post->title); ?></h1>

        <!-- Author -->
        <p class="lead">
            نویسنده توسط
            <a href="#"><?php echo e($post->user->name); ?></a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>انتشار شده در <?php echo e(\Hekmatinasser\Verta\Verta::instance($post->create_at)); ?></p>

        <hr>

        <!-- Preview Image -->
        <a href="<?php echo e(route('frontend.post.show', $post->slug)); ?>">
            <img src="<?php echo e($post->photo_id ? $post->photo->path : '/images/1666564667۲۰۲۲۱۰۰۹_۲۰۲۴۴۸.jpg'); ?>" class="img-fluid rounded">
        </a>
        <hr>

        <!-- Post Content -->
        <div class="mb-5">
            <p><?php echo e(\Illuminate\Support\Str::limit($post->description, 100)); ?></p>
            <p>
                <a href="<?php echo e(route('frontend.post.show', $post->slug)); ?>" class="float-right">ادامه مطلب...</a>
            </p>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <div class="col-md-6 offset-md-5"><?php echo e($posts->links("pagination::bootstrap-4")); ?></div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('navbar'); ?>
    <?php echo $__env->make('partials.navbar', ['categories'=>$categories], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('sidebar'); ?>
    <?php echo $__env->make('partials.sidebar', ['categories'=>$categories], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH J:\xampp\htdocs\cms\resources\views/frontend/main/index.blade.php ENDPATH**/ ?>