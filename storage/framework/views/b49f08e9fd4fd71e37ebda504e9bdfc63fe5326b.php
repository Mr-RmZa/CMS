<?php $__env->startSection('content'); ?>
    <?php if(Session::has('delete_comment')): ?>
        <div class="alert alert-danger">
            <div><?php echo e(session('delete_comment')); ?></div>
        </div>
    <?php elseif(Session::has('update_comment')): ?>
        <div class="alert alert-warning">
            <div><?php echo e(session('update_comment')); ?></div>
        </div>
    <?php elseif(Session::has('comment_active')): ?>
        <div class="alert alert-success">
            <div><?php echo e(session('comment_active')); ?></div>
        </div>
    <?php elseif(Session::has('comment_inactive')): ?>
        <div class="alert alert-danger">
            <div><?php echo e(session('comment_inactive')); ?></div>
        </div>
    <?php endif; ?>
    <h1 class="p-3">لیست نظرات</h1>
    <table class="table table-striped table-bordered table-hover table-dark">
        <thead>
        <tr>
            <th>شناسه</th>
            <th>توضیحات</th>
            <th>مطلب</th>
            <th>تاریخ ایجاد</th>
            <th>وضعیت</th>
            <th>عملیات</th>
        </tr>
        </thead>

        <tbody>
        <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><a href="<?php echo e(route('comment.edit', $comment->id)); ?>"><?php echo e($comment->id); ?></a></td>
                <td class="text-justify"><?php echo e($comment->description); ?></td>
                <td><?php echo e($comment->post->title); ?></td>
                <td><?php echo e(\Hekmatinasser\Verta\Verta::instance($comment->create_at)); ?></td>
                <td>
                    <?php if($comment->status == 0): ?>
                        <span class="tag tag-pill tag-danger">غیرفعال</span>
                    <?php else: ?>
                        <span class="tag tag-pill tag-success">فعال</span>
                    <?php endif; ?>
                </td>
                <td>
                    <?php if($comment->status == 0): ?>
                        <?php echo Form::open(['method' => 'POST', 'action' => 'App\Http\Controllers\Admin\AdminCommentController@actions', 'route' => ['comment.actions', $comment->id]]); ?>

                        <span class="input-group-btn">
                                <?php echo Form::hidden('action', 'active'); ?>

                                <?php echo Form::submit('فعال', ['class'=>'btn btn-success']); ?>

                        </span>
                        <?php echo Form::close(); ?>

                    <?php else: ?>
                        <?php echo Form::open(['method' => 'POST', 'action' => 'App\Http\Controllers\Admin\AdminCommentController@action', 'route' => ['comment.actions', $comment->id]]); ?>

                        <span class="input-group-btn">
                                <?php echo Form::hidden('action', 'inactive'); ?>

                                <?php echo Form::submit('غیر فعال', ['class'=>'btn btn-danger']); ?>

                        </span>
                        <?php echo Form::close(); ?>

                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <div class="col-md-6 offset-md-5"><?php echo e($comments->links("pagination::bootstrap-4")); ?></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH J:\xampp\htdocs\cms\resources\views/admin/comment/index.blade.php ENDPATH**/ ?>