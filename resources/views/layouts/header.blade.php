<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ route('main', ['locale' => app()->getLocale()]) }}">@lang('lang.laravel')</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav me-auto">
                <a class="nav-link {{ request()->routeIs('main') ? 'active' : '' }}" href="{{ route('main', ['locale' => app()->getLocale()]) }}">@lang('lang.home')</a>
                <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about', ['locale' => app()->getLocale()]) }}">@lang('lang.about')</a>
                <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact', ['locale' => app()->getLocale()]) }}">@lang('lang.contact')</a>
            </div>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle me-2" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ __('lang.' . app()->getLocale()) }}
                </button>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="{{ route(Route::currentRouteName(), array_merge(request()->route()->parameters(), ['locale' => 'kz'])) }}">@lang('lang.kz')</a>
                    <a class="dropdown-item" href="{{ route(Route::currentRouteName(), array_merge(request()->route()->parameters(), ['locale' => 'ru'])) }}">@lang('lang.ru')</a>
                    <a class="dropdown-item" href="{{ route(Route::currentRouteName(), array_merge(request()->route()->parameters(), ['locale' => 'en'])) }}">@lang('lang.en')</a>
                </div>
            </div>
            <div class="navbar">
                <a href="{{route('login', ['locale' => app()->getLocale()])}}" class="btn btn-primary me-2">@lang('lang.login')</a>
                <a href="{{route('register', ['locale' => app()->getLocale()])}}" class="btn btn-primary">@lang('lang.register')</a>
            </div>

        </div>
    </div>
</nav>
