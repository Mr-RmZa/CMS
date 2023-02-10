<?php $__env->startSection('content'); ?>
    <?php if(Session::has('delete_photo')): ?>
        <div class="alert alert-danger">
            <div><?php echo e(session('delete_photo')); ?></div>
        </div>
    <?php elseif(Session::has('create_photo')): ?>
        <div class="alert alert-success">
            <div><?php echo e(session('create_photo')); ?></div>
        </div>
    <?php elseif(Session::has('update_photo')): ?>
        <div class="alert alert-warning">
            <div><?php echo e(session('update_photo')); ?></div>
        </div>
    <?php elseif(Session::has('delete_photos')): ?>
        <div class="alert alert-danger">
            <div><?php echo e(session('delete_photos')); ?></div>
        </div>
    <?php endif; ?>
    <h1 class="p-3">لیست فایل ها</h1>
    <br>
    <form action="/admin/delete/media" method="post" class="" >
        <?php echo e(csrf_field()); ?>

        <?php echo e(method_field('delete')); ?>

        <div class="from-group">
            <select name="checkBoxArray" id="" class="from-control">
                <option value="delete">حذف دسته جمعی</option>
            </select>
            <input type="submit" class="btn btn-primary" value="اعمال">
        </div>
        <br>
    <table class="table table-striped table-bordered table-hover table-dark">
        <thead>
        <tr>
            <th><input type="checkbox" id="option"></th>
            <th>شناسه</th>
            <th>تصویر</th>
            <th>کاربر</th>
            <th>تاریخ ایجاد</th>
            <th>عملیات</th>
        </tr>
        </thead>

        <tbody>
        <?php $__currentLoopData = $photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><input class="checkBox" type="checkbox" name="checkBoxArray[]" value="<?php echo e($photo->id); ?>"></td>
                <td><?php echo e($photo->id); ?></td>
                <td>
                    <img src="<?php echo e($photo->id ? $photo->path : '/images/1666564667۲۰۲۲۱۰۰۹_۲۰۲۴۴۸.jpg'); ?>" class="img-fluid" width="100">
                </td>
                <td><?php echo e($photo->user->name); ?></td>
                <td><?php echo e(\Hekmatinasser\Verta\Verta::instance($photo->create_at)); ?></td>
                <td>
                    <?php echo Form::open(['method' => 'DELETE', 'action' => ['App\Http\Controllers\Admin\AdminPhotoController@destroy', $photo->id]]); ?>


                    <div class="form-group mt-3">
                        <?php echo Form::submit('حذف', ['class'=>'btn btn-danger']); ?>

                    </div>

                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    </form>
    <div class="col-md-6 offset-md-5"><?php echo e($photos->links("pagination::bootstrap-4")); ?></div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>
        $(document).ready(function () {
            $('#option').click(function () {
                if (this.checked) {
                    $('.checkBox').each(function () {
                        this.checked = true;
                    })
                } else {
                    $('.checkBox').each(function () {
                        this.checked = false;
                    })
                }
            })
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH J:\xampp\htdocs\cms\resources\views/admin/photos/index.blade.php ENDPATH**/ ?>