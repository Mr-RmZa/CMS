<?php $__env->startSection('content'); ?>
    <h1 class="p-3">ویرایش کاربر</h1>

    <?php echo Form::model($post ,['method' => 'PATCH', 'action' => ['App\Http\Controllers\Admin\AdminPostController@update', $post->id], 'files'=>true]); ?>

    <?php echo $__env->make('partials.form-errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="form-group">
        <img src="<?php echo e($post->photo ? $post->photo->path : '/images/1666564667۲۰۲۲۱۰۰۹_۲۰۲۴۴۸.jpg'); ?>" class="img-fluid" width="100">
        <?php echo Form::label('title', 'عنوان'); ?>

        <?php echo Form::text('title', $post->title, ['class' => 'form-control', 'required']); ?>

    </div>

    <div class="form-group">
        <?php echo Form::label('slug', 'نام مستعار'); ?>

        <?php echo Form::text('slug', $post->slug, ['class' => 'form-control']); ?>

    </div>

    <div class="form-group">
        <?php echo Form::label('description', 'توضیحات'); ?>

        <?php echo Form::textarea('description', $post->description, ['class' => 'form-control', 'required']); ?>

    </div>

    <div class="form-group">
        <?php echo Form::label('category', 'دسته بندی'); ?>

        <?php echo Form::select('category', $categories, $post->category->id, ['class' => 'form-control', 'required']); ?>

    </div>

    <div class="form-group">
        <?php echo Form::label('status', 'وضعیت'); ?>

        <?php echo Form::select('status', [0=>'غیرفعال',1=>'فعال'], null, ['class' => 'form-control', 'required']); ?>

    </div>

    <div class="form-group">
        <?php echo Form::label('meta_description', 'متا توضیحات'); ?>

        <?php echo Form::textarea('meta_description', $post->meta_description, ['class' => 'form-control', 'required']); ?>

    </div>

    <div class="form-group">
        <?php echo Form::label('meta_keywords', 'متا برچسب ها'); ?>

        <?php echo Form::textarea('meta_keywords', $post->meta_keywords, ['class' => 'form-control', 'required']); ?>

    </div>

    <div class="form-group">
        <?php echo Form::label('org_photo', 'تصویر اصلی'); ?>

        <?php echo Form::file('org_photo', null, ['class' => 'form-control']); ?>

    </div>

    <div class="form-group mt-3">
        <?php echo Form::submit('update', ['class'=>'btn btn-success col-md-3']); ?>

    </div>
    <?php echo Form::close(); ?>


    <?php echo Form::open(['method' => 'DELETE', 'action' => ['App\Http\Controllers\Admin\AdminPostController@destroy', $post->id]]); ?>


    <div class="form-group mt-3">
        <?php echo Form::submit('delete', ['class'=>'btn btn-danger col-md-3']); ?>

    </div>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH J:\xampp\htdocs\cms\resources\views/admin/posts/edit.blade.php ENDPATH**/ ?>