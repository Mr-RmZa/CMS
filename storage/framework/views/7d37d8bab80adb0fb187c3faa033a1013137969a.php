<?php $__env->startSection('content'); ?>
    <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="card card-inverse card-primary">
                            <div class="card-block p-b-0">
                                <h4 class="m-b-0"><?php echo e($post); ?></h4>
                                <p>مطالب</p>
                            </div>
                            <div class="chart-wrapper p-x-1" style="height:70px;">
                                <canvas id="card-chart1" class="chart" height="70"></canvas>
                            </div>
                        </div>
                    </div>
                    <!--/col-->

                    <div class="col-sm-6 col-lg-3">
                        <div class="card card-inverse card-info">
                            <div class="card-block p-b-0">
                                <h4 class="m-b-0"><?php echo e($category); ?></h4>
                                <p>دسته بندی ها</p>
                            </div>
                            <div class="chart-wrapper p-x-1" style="height:70px;">
                                <canvas id="card-chart2" class="chart" height="70"></canvas>
                            </div>
                        </div>
                    </div>
                    <!--/col-->

                    <div class="col-sm-6 col-lg-3">
                        <div class="card card-inverse card-warning">
                            <div class="card-block p-b-0">
                                <h4 class="m-b-0"><?php echo e($photo); ?></h4>
                                <p>رسانه ها</p>
                            </div>
                            <div class="chart-wrapper" style="height:70px;">
                                <canvas id="card-chart3" class="chart" height="70"></canvas>
                            </div>
                        </div>
                    </div>
                    <!--/col-->

                    <div class="col-sm-6 col-lg-3">
                        <div class="card card-inverse card-danger">
                            <div class="card-block p-b-0">
                                <h4 class="m-b-0"><?php echo e($user); ?></h4>
                                <p>کاربران</p>
                            </div>
                            <div class="chart-wrapper p-x-1" style="height:70px;">
                                <canvas id="card-chart4" class="chart" height="70"></canvas>
                            </div>
                        </div>
                    </div>
                    <!--/col-->

                </div>

    <div class="row">
        <div class="col-md-6">
            <h3 class="p-3">لیست آخرین کاربران</h3>
            <table class="table table-striped table-bordered table-hover table-dark">
                <thead>
                <tr>
                    <th>نام</th>
                    <th>ایمیل</th>
                    <th>تاریخ ایجاد</th>
                </tr>
                </thead>

                <tbody>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><a href="<?php echo e(route('users.edit', $user->id)); ?>"><?php echo e($user->name); ?></a></td>
                        <td><?php echo e($user->email); ?></td>
                        <td><?php echo e(\Hekmatinasser\Verta\Verta::instance($user->create_at)); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>

        <div class="col-md-6">
            <h3 class="p-3">لیست آخرین مطالب</h3>
            <table class="table table-striped table-bordered table-hover table-dark">
                <thead>
                <tr>
                    <th>شناسه</th>
                    <th>تصویر</th>
                    <th>تاریخ ایجاد</th>
                </tr>
                </thead>

                <tbody>
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><a href="<?php echo e(route('frontend.post.show', $post->slug)); ?>"><?php echo e($post->title); ?></a></td>
                        <td><?php echo e(\Illuminate\Support\Str::limit($post->description, 10)); ?></td>
                        <td><?php echo e(\Hekmatinasser\Verta\Verta::instance($post->create_at)); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH J:\xampp\htdocs\cms\resources\views/admin/dashboard/index.blade.php ENDPATH**/ ?>