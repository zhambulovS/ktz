<?php $__env->startSection('content'); ?>
    <div>
        <a href="<?php echo e(route('post.create', ['locale' => app()->getLocale()])); ?>" class="btn btn-primary mb-3">Add Post</a>
    </div>

    <div>
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div>
                <a href="<?php echo e(route('post.show', ['locale' => app()->getLocale(), 'post' => $post->id])); ?>">
                    <?php echo e($post->id); ?>. <?php echo e($post->title); ?>

                </a>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\test\resources\views/posts/index.blade.php ENDPATH**/ ?>