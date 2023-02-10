<?php $__env->startSection('content'); ?>
    <?php if(Session::has('delete_category')): ?>
        <div class="alert alert-danger">
            <div><?php echo e(session('delete_category')); ?></div>
        </div>
    <?php elseif(Session::has('create_category')): ?>
        <div class="alert alert-success">
            <div><?php echo e(session('create_category')); ?></div>
        </div>
    <?php elseif(Session::has('update_category')): ?>
        <div class="alert alert-warning">
            <div><?php echo e(session('update_category')); ?></div>
        </div>
    <?php endif; ?>
    <h1 class="p-3">لیست پست ها</h1>
    <table class="table table-striped table-bordered table-hover table-dark">
        <thead>
        <tr>
            <th>عنوان</th>
            <th>متا توضیحات</th>
            <th>متا برچسب ها</th>
            <th>تاریخ ایجاد</th>
        </tr>
        </thead>

        <tbody>
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><a href="<?php echo e(route('category.edit', $category->id)); ?>"><?php echo e($category->title); ?></a></td>
                <td><?php echo e($category->meta_description); ?></td>
                <td><?php echo e($category->meta_keywords); ?></td>
                <td><?php echo e(\Hekmatinasser\Verta\Verta::instance($category->create_at)); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <div class="col-md-6 offset-md-5"><?php echo e($categories->links("pagination::bootstrap-4")); ?></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH J:\xampp\htdocs\cms\resources\views/admin/category/index.blade.php ENDPATH**/ ?>