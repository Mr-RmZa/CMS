<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <h1 class="p-3">آپلود فایل</h1>

    <?php echo Form::open(['method' => 'POST', 'action' => 'App\Http\Controllers\Admin\AdminPhotoController@store', 'class'=>'dropzone', 'files'=>true]); ?>

    <?php echo $__env->make('partials.form-errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



    <?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH J:\xampp\htdocs\cms\resources\views/admin/photos/create.blade.php ENDPATH**/ ?>