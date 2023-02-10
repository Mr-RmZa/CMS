<?php $__env->startSection('content'); ?>
    <h1 class="p-3">ویرایش کاربر</h1>

    <?php echo Form::model($user ,['method' => 'PATCH', 'action' => ['App\Http\Controllers\Admin\AdminUserController@update', $user->id], 'files'=>true]); ?>    <?php echo $__env->make('partials.form-errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="form-group">
        <img src="<?php echo e($user->photo ? $user->photo->path : '/images/1666564667۲۰۲۲۱۰۰۹_۲۰۲۴۴۸.jpg'); ?>" class="img-fluid" width="100">
    </div>

    <div class="form-group">
        <?php echo Form::label('name', 'نام'); ?>

        <?php echo Form::text('name', null, ['class' => 'form-control']); ?>

    </div>

    <div class="form-group">
        <?php echo Form::label('email', 'ایمیل'); ?>

        <?php echo Form::text('email', null, ['class' => 'form-control']); ?>

    </div>

    <div class="form-group">
        <?php echo Form::label('roles', 'نقش'); ?>

        <?php echo Form::select('roles[]', $roles, null, ['multiple'=>'multiple', 'class' => 'form-control']); ?>

    </div>

    <div class="form-group">
        <?php echo Form::label('status', 'وضعیت'); ?>

        <?php echo Form::select('status', [0=>'غیرفعال',1=>'فعال'], null, ['class' => 'form-control']); ?>

    </div>

    <div class="form-group">
        <?php echo Form::label('password', 'رمز عبور'); ?>

        <?php echo Form::password('password', ['class' => 'form-control']); ?>

    </div>

    <div class="form-group">
        <?php echo Form::label('avatar', 'تصویر پروفایل'); ?>

        <?php echo Form::file('avatar', null, ['class' => 'form-control']); ?>

    </div>

    <div class="form-group mt-3">
        <?php echo Form::submit('update', ['class'=>'btn btn-success col-md-3']); ?>

    </div>
    <?php echo Form::close(); ?>


    <?php echo Form::open(['method' => 'DELETE', 'action' => ['App\Http\Controllers\Admin\AdminUserController@destroy', $user->id]]); ?>


    <div class="form-group mt-3">
        <?php echo Form::submit('delete', ['class'=>'btn btn-danger col-md-3']); ?>

    </div>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH J:\xampp\htdocs\cms\resources\views/admin/users/edit.blade.php ENDPATH**/ ?>