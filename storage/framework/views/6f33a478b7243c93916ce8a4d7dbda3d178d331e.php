<?php $__env->startSection('content'); ?>
    <?php if(Session::has('delete')): ?>
        <div class="alert alert-danger">
            <div><?php echo e(session('delete')); ?></div>
        </div>
    <?php elseif(Session::has('create')): ?>
        <div class="alert alert-success">
            <div><?php echo e(session('create')); ?></div>
        </div>
    <?php elseif(Session::has('update')): ?>
        <div class="alert alert-warning">
            <div><?php echo e(session('update')); ?></div>
        </div>
    <?php endif; ?>
    <h1 class="p-3">لیست کاربران</h1>
    <table class="table table-striped table-bordered table-hover table-dark">
        <thead>
        <tr>
            <th>آواتار</th>
            <th>نام</th>
            <th>ایمیل</th>
            <th>نقش</th>
            <th>تاریخ ایجاد</th>
            <th>وضعیت</th>
        </tr>
        </thead>

        <tbody>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td>
                    <img src="<?php echo e($user->photo ? $user->photo->path : '/images/1666564667۲۰۲۲۱۰۰۹_۲۰۲۴۴۸.jpg'); ?>" class="img-fluid" width="100">
                </td>
                <td><a href="<?php echo e(route('users.edit', $user->id)); ?>"><?php echo e($user->name); ?></a></td>
                <td><?php echo e($user->email); ?></td>
                <td>
                    <ul>
                        <?php $__currentLoopData = $user->roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($role->name); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </td>
                <td><?php echo e(\Hekmatinasser\Verta\Verta::instance($user->create_at)); ?></td>
                <td>
                    <?php if($user->status == 0): ?>
                        <span class="tag tag-pill tag-danger">غیرفعال</span>
                    <?php else: ?>
                        <span class="tag tag-pill tag-success">فعال</span>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <div class="col-md-6 offset-md-5"><?php echo e($users->links("pagination::bootstrap-4")); ?></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH J:\xampp\htdocs\cms\resources\views/admin/users/index.blade.php ENDPATH**/ ?>