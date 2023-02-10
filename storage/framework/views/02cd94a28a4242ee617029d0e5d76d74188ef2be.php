<?php $__env->startSection('content'); ?>
    <h1 class="p-3">ویرایش دسته بندی</h1>

    <?php echo Form::model($category ,['method' => 'PATCH', 'action' => ['App\Http\Controllers\Admin\AdminCategoryController@update', $category->id]]); ?>

    <?php echo $__env->make('partials.form-errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="form-group">
        <?php echo Form::label('title', 'عنوان'); ?>

        <?php echo Form::text('title', $category->title, ['class' => 'form-control', 'required']); ?>

    </div>

    <div class="form-group">
        <?php echo Form::label('slug', 'نام مستعار'); ?>

        <?php echo Form::text('slug', $category->slug, ['class' => 'form-control']); ?>

    </div>

    <div class="form-group">
        <?php echo Form::label('meta_description', 'متا توضیحات'); ?>

        <?php echo Form::textarea('meta_description', $category->meta_description, ['class' => 'form-control', 'required']); ?>

    </div>

    <div class="form-group">
        <?php echo Form::label('meta_keywords', 'متا برچسب ها'); ?>

        <?php echo Form::textarea('meta_keywords', $category->meta_keywords, ['class' => 'form-control', 'required']); ?>

    </div>

    <div class="form-group mt-3">
        <?php echo Form::submit('update', ['class'=>'btn btn-success col-md-3']); ?>

    </div>
    <?php echo Form::close(); ?>


    <?php echo Form::open(['method' => 'DELETE', 'action' => ['App\Http\Controllers\Admin\AdminCategoryController@destroy', $category->id]]); ?>


    <div class="form-group mt-3">
        <?php echo Form::submit('delete', ['class'=>'btn btn-danger col-md-3']); ?>

    </div>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH J:\xampp\htdocs\cms\resources\views/admin/category/edit.blade.php ENDPATH**/ ?>