<script type="text/javascript">
    $('.btn-opne').click(function(){
        $('.form-reply').css('display', 'none');
        var service = this.id;
        var servies_id = "#f-" + service;
        $(servies_id).show('slow');
    });
</script>
<?php $__currentLoopData = $comment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="media mb-4 ml-4">
        <img class="d-flex mr-3 rounded-circle" src="/images/1666911623۲۰۲۲۱۰۰۹_۲۰۲۴۴۸.jpg" width="50" alt="">
        <div class="media-body">
            <h5 class="mt-0">مهمان</h5>
            <p><?php echo e($comment->description); ?></p>
            <div class="media mt-4 mb-4 row">
                <div class="col-md-12 mb-4">
                    <button type="button" class="btn btn-warning btn-opne" id="div-comment-<?php echo e($comment->id); ?>">پاسخ</button>
                </div>
                <div class="form-reply col-md-12" id="f-div-comment-<?php echo e($comment->id); ?>" style="display: none">
                    <?php echo Form::open(['method' => 'POST', 'route' => ['frontend.comment.reply']]); ?>

                    <?php echo $__env->make('partials.form-errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo Form::hidden('parent_id', $comment->id); ?>

                    <?php echo Form::hidden('post_id', $post->id); ?>

                    <div class="form-group">
                        <?php echo Form::textarea('description', null, ['class' => 'form-control', 'required']); ?>

                    </div>

                    <div class="form-group mt-3">
                        <?php echo Form::submit('submit', ['class'=>'btn btn-success']); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </div>
                <?php echo $__env->make('partials.comment', ['comment'=>$comment->replies], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>

    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH J:\xampp\htdocs\cms\resources\views/partials/comment.blade.php ENDPATH**/ ?>