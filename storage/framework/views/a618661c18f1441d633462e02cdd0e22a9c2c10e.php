<?php $__env->startSection('content'); ?>
    <h1 class="p-3">ایجاد دسته بندی جدید</h1>

    <?php echo Form::open(['method' => 'POST', 'action' => 'App\Http\Controllers\Admin\AdminCategoryController@store']); ?>

    <?php echo $__env->make('partials.form-errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="form-group">
        <?php echo Form::label('title', 'عنوان'); ?>

        <?php echo Form::text('title', null, ['class' => 'form-control', 'required']); ?>

    </div>

    <div class="form-group">
        <?php echo Form::label('slug', 'نام مستعار'); ?>

        <?php echo Form::text('slug', null, ['class' => 'form-control']); ?>

    </div>

    <div class="form-group">
        <?php echo Form::label('meta_description', 'متا توضیحات'); ?>

        <?php echo Form::textarea('meta_description', null, ['class' => 'form-control', 'required']); ?>

    </div>

    <div class="form-group">
        <?php echo Form::label('meta_keywords', 'متا برچسب ها'); ?>

        <?php echo Form::textarea('meta_keywords', null, ['class' => 'form-control', 'required']); ?>

    </div>

    <div class="form-group mt-3">
        <?php echo Form::submit('submit', ['class'=>'btn btn-success']); ?>

    </div>
    <?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH J:\xampp\htdocs\cms\resources\views/admin/category/create.blade.php ENDPATH**/ ?>