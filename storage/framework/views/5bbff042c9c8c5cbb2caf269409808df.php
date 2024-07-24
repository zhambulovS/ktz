<?php $__env->startSection('content'); ?>

    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <form class="d-flex ms-auto" method="GET" action="<?php echo e(route('search', ['locale' => app()->getLocale()])); ?>">
                <input id="search-input" class="form-control me-2" type="search" name="search" placeholder="<?php echo app('translator')->get('lang.search'); ?>">
                <button class="btn btn-outline-primary" type="submit"> <?php echo app('translator')->get('lang.search'); ?> </button>
            </form>
        </div>
    </nav>

    <table class="table table-sm">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col"><?php echo app('translator')->get('lang.full_name'); ?></th>
            <th scope="col"><?php echo app('translator')->get('lang.email'); ?></th>
            <th scope="col"><?php echo app('translator')->get('lang.number'); ?></th>
            <th scope="col"><?php echo app('translator')->get('lang.message'); ?></th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th scope="row"><?php echo e($article->id); ?></th>
                <td><?php echo e($article->full_name); ?></td>
                <td><?php echo e($article->email); ?></td>
                <td><?php echo e($article->number); ?></td>
                <td><?php echo e($article->text); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\test\resources\views/index.blade.php ENDPATH**/ ?>