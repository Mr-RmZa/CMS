<?php $__env->startSection('content'); ?>
    <?php if(Session::has('delete_post')): ?>
        <div class="alert alert-danger">
            <div><?php echo e(session('delete_post')); ?></div>
        </div>
    <?php elseif(Session::has('create_post')): ?>
        <div class="alert alert-success">
            <div><?php echo e(session('create_post')); ?></div>
        </div>
    <?php elseif(Session::has('update_post')): ?>
        <div class="alert alert-warning">
            <div><?php echo e(session('update_post')); ?></div>
        </div>
    <?php endif; ?>
    <h1 class="p-3">لیست پست ها</h1>
    <table class="table table-striped table-bordered table-hover table-dark">
        <thead>
        <tr>
            <th>تصویر</th>
            <th>عنوان</th>
            <th>کاربر</th>
            <th>توضیحات</th>
            <th>دسته بندی</th>
            <th>تاریخ ایجاد</th>
            <th>وضعیت</th>
        </tr>
        </thead>

        <tbody>
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td>
                    <img src="<?php echo e($post->photo_id ? $post->photo->path : '/images/1666564667۲۰۲۲۱۰۰۹_۲۰۲۴۴۸.jpg'); ?>" class="img-fluid" width="100">
                </td>
                <td><a href="<?php echo e(route('posts.edit', $post->id)); ?>"><?php echo e($post->title); ?></a></td>
                <td>
                    <img src="<?php echo e($post->user->photo_id ? $post->user->photo->path : '/images/1666564667۲۰۲۲۱۰۰۹_۲۰۲۴۴۸.jpg'); ?>" class="img-fluid" width="100">
                    <?php echo e($post->user->name); ?>

                </td>
                <td><?php echo e(\Illuminate\Support\Str::limit($post->description, 20)); ?></td>
                <td><?php echo e($post->category->title); ?></td>
                <td><?php echo e(\Hekmatinasser\Verta\Verta::instance($post->create_at)); ?></td>
                <td>
                    <?php if($post->status == 0): ?>
                        <span class="tag tag-pill tag-danger">غیرفعال</span>
                    <?php else: ?>
                        <span class="tag tag-pill tag-success">فعال</span>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <div class="col-md-6 offset-md-5"><?php echo e($posts->links("pagination::bootstrap-4")); ?></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH J:\xampp\htdocs\cms\resources\views/admin/posts/index.blade.php ENDPATH**/ ?>