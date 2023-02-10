<?php $__env->startSection('head'); ?>
    <meta name="description" content="<?php echo e($post->meta_description); ?>">
    <meta name="keywords" content="<?php echo e($post->meta_keywords); ?>">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php if(Session::has('add_comment')): ?>
        <div class="alert alert-success mt-4">
            <div><?php echo e(session('add_comment')); ?></div>
        </div>
    <?php endif; ?>
        <!-- Title -->
        <h1 class="mt-4"><?php echo e($post->title); ?></h1>

        <!-- Author -->
        <p class="lead">
            نویسنده توسط
            <a href="#"><?php echo e($post->user->name); ?></a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Posted on <?php echo e(\Hekmatinasser\Verta\Verta::instance($post->create_at)); ?></p>

        <hr>

        <!-- Preview Image -->
        <img src="<?php echo e($post->photo_id ? $post->photo->path : '/images/1666564667۲۰۲۲۱۰۰۹_۲۰۲۴۴۸.jpg'); ?>" class="img-fluid rounded">

        <hr>

        <!-- Post Content -->
        <div>
            <p class="text-justify"><?php echo e($post->description); ?></p>
        </div>

        <hr>

        <!-- Comments Form -->
        <div class="card my-4">
            <h5 class="card-header">نظر خود را ثبت کنید:</h5>
            <div class="card-body">
                <?php echo Form::open(['method' => 'POST', 'route' => ['frontend.comment.store', $post->id]]); ?>

                <?php echo $__env->make('partials.form-errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <div class="form-group">
                    <?php echo Form::label('description', 'توضیحات'); ?>

                    <?php echo Form::textarea('description', null, ['class' => 'form-control', 'required']); ?>

                </div>

                <div class="form-group mt-3">
                    <?php echo Form::submit('submit', ['class'=>'btn btn-success']); ?>

                </div>
                <?php echo Form::close(); ?>

            </div>
        </div>

        <!-- Single Comment -->
        <?php echo $__env->make('partials.comment', ['comment'=>$post->comment, 'post'=>$post], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('navbar'); ?>
    <?php echo $__env->make('partials.navbar', ['categories'=>$categories], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('sidebar'); ?>
    <?php echo $__env->make('partials.sidebar', ['categories'=>$categories], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH J:\xampp\htdocs\cms\resources\views/frontend/posts/show.blade.php ENDPATH**/ ?>