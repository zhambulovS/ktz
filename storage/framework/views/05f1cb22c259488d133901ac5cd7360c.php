<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="<?php echo e(route('main', ['locale' => app()->getLocale()])); ?>"><?php echo app('translator')->get('lang.laravel'); ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav me-auto">
                <a class="nav-link <?php echo e(request()->routeIs('main') ? 'active' : ''); ?>" href="<?php echo e(route('main', ['locale' => app()->getLocale()])); ?>"><?php echo app('translator')->get('lang.home'); ?></a>
                <a class="nav-link <?php echo e(request()->routeIs('about') ? 'active' : ''); ?>" href="<?php echo e(route('about', ['locale' => app()->getLocale()])); ?>"><?php echo app('translator')->get('lang.about'); ?></a>
                <a class="nav-link <?php echo e(request()->routeIs('contact') ? 'active' : ''); ?>" href="<?php echo e(route('contact', ['locale' => app()->getLocale()])); ?>"><?php echo app('translator')->get('lang.contact'); ?></a>
            </div>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle me-2" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo e(__('lang.' . app()->getLocale())); ?>

                </button>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="<?php echo e(route(Route::currentRouteName(), array_merge(request()->route()->parameters(), ['locale' => 'kz']))); ?>"><?php echo app('translator')->get('lang.kz'); ?></a>
                    <a class="dropdown-item" href="<?php echo e(route(Route::currentRouteName(), array_merge(request()->route()->parameters(), ['locale' => 'ru']))); ?>"><?php echo app('translator')->get('lang.ru'); ?></a>
                    <a class="dropdown-item" href="<?php echo e(route(Route::currentRouteName(), array_merge(request()->route()->parameters(), ['locale' => 'en']))); ?>"><?php echo app('translator')->get('lang.en'); ?></a>
                </div>
            </div>
            <div class="navbar">
                <a href="<?php echo e(route('login', ['locale' => app()->getLocale()])); ?>" class="btn btn-primary me-2"><?php echo app('translator')->get('lang.login'); ?></a>
                <a href="<?php echo e(route('register', ['locale' => app()->getLocale()])); ?>" class="btn btn-primary"><?php echo app('translator')->get('lang.register'); ?></a>
            </div>

        </div>
    </div>
</nav>
<?php /**PATH C:\OSPanel\domains\test\resources\views/layouts/header.blade.php ENDPATH**/ ?>