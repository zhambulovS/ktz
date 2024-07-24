<?php $__env->startSection('content'); ?>
    <div class="container">
        <form action="<?php echo e(route('post.update', $post->id)); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('patch'); ?>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input name="title" type="text" class="form-control" id="title" placeholder="Enter title" value="<?php echo e($post->title); ?>">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea name="content" class="form-control" id="content" placeholder="Enter content" ><?php echo e($post->content); ?></textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image URL</label>
                <input name="image" type="text" class="form-control" id="image" placeholder="Enter image URL" value="<?php echo e($post->image); ?>">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\test\resources\views/posts/edit.blade.php ENDPATH**/ ?>