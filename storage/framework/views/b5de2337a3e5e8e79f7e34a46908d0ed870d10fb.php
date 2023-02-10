<?php $__env->startSection('content'); ?>
    <h1 class="p-3">ایجاد کاربر جدید</h1>

    <?php echo Form::open(['method' => 'POST', 'action' => 'App\Http\Controllers\Admin\AdminUserController@store', 'files'=>true]); ?>

    <?php echo $__env->make('partials.form-errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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

        <?php echo Form::select('roles[]', $roles, 3, ['multiple'=>'multiple', 'class' => 'form-control']); ?>

    </div>

    <div class="form-group">
        <?php echo Form::label('status', 'وضعیت'); ?>

        <?php echo Form::select('status', [0=>'غیرفعال',1=>'فعال'], 1, ['class' => 'form-control']); ?>

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
        <?php echo Form::submit('submit', ['class'=>'btn btn-success']); ?>

    </div>
    <?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH J:\xampp\htdocs\cms\resources\views/admin/users/create.blade.php ENDPATH**/ ?>