<!-- Search Widget -->
<div class="card my-4">
    <h5 class="card-header">جستجو</h5>
    <div class="card-body">
        <?php echo Form::open(['method' => 'GET', 'action' => 'App\Http\Controllers\Frontend\PostController@search']); ?>

        <?php echo $__env->make('partials.form-errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="input-group">
            <?php echo Form::text('title', null, ['class' => 'form-control', 'required']); ?>

            <span class="input-group-btn">
                <?php echo Form::submit('جستجو', ['class'=>'btn btn-secondary']); ?>

                </span>
        </div>
        <?php echo Form::close(); ?>

    </div>
</div>

<!-- Categories Widget -->
<div class="card my-4">
    <h5 class="card-header">دسته بندی ها</h5>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-12">
                <ul class="list-unstyled mb-0">
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><?php echo e($category->title); ?></a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Side Widget -->
<div class="card my-4">
    <h5 class="card-header">Side Widget</h5>
    <div class="card-body">
        You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
    </div>
</div>
<?php /**PATH J:\xampp\htdocs\cms\resources\views/partials/sidebar.blade.php ENDPATH**/ ?>