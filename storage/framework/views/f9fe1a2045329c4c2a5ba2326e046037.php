<?php $__env->startSection('content'); ?>
    <div class="container">
        <form action="<?php echo e(route('post.store', ['locale' => app()->getLocale()])); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input name="title" type="text" class="form-control" id="title" placeholder="Enter title">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea name="content" class="form-control" id="content" placeholder="Enter content"></textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image URL</label>
                <input name="image" type="text" class="form-control" id="image" placeholder="Enter image URL">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\test\resources\views/posts/create.blade.php ENDPATH**/ ?>