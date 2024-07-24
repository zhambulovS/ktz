<?php $__env->startSection('content'); ?>
    <div>
        <div> <?php echo e($post->id); ?>.<?php echo e($post->title); ?> </div>
        <div> <?php echo e($post->content); ?> </div>
    </div>
    <div>
        <a href="<?php echo e(route('post.edit', $post -> id)); ?>">Edit</a>
    </div>
    <div>
        <form action="<?php echo e(route('post.delete', $post -> id)); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('delete'); ?>
            <input type="submit" value="Delete" class="btn btn-danger">
        </form>
    </div>
    <div>
        <a href="<?php echo e(route('post.index', ['locale' => app()->getLocale()])); ?>">Back</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\test\resources\views/posts/show.blade.php ENDPATH**/ ?>