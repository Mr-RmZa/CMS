<?php $__env->startSection('content'); ?>
    <h1 class="p-3">ویرایش دسته بندی</h1>

    <?php echo Form::model($comment ,['method' => 'PATCH', 'action' => ['App\Http\Controllers\Admin\AdminCommentController@update', $comment->id]]); ?>

    <?php echo $__env->make('partials.form-errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="form-group">
        <?php echo Form::label('description', 'توضیحات'); ?>

        <?php echo Form::textarea('description', $comment->description, ['class' => 'form-control', 'required']); ?>

    </div>

    <div class="form-group mt-3">
        <?php echo Form::submit('update', ['class'=>'btn btn-success col-md-3']); ?>

    </div>
    <?php echo Form::close(); ?>


    <?php echo Form::open(['method' => 'DELETE', 'action' => ['App\Http\Controllers\Admin\AdminCommentController@destroy', $comment->id]]); ?>


    <div class="form-group mt-3">
        <?php echo Form::submit('delete', ['class'=>'btn btn-danger col-md-3']); ?>

    </div>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH J:\xampp\htdocs\cms\resources\views/admin/comment/edit.blade.php ENDPATH**/ ?>