@extends("layouts.main")
@section('content')

    <div class="bg-light py-3 py-md-5">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-12 col-md-11 col-lg-8 col-xl-7 col-xxl-6">
                    <div class="bg-white p-4 p-md-5 rounded shadow-sm">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-5">
                                    <h3>@lang('lang.register')</h3>
                                </div>
                            </div>
                        </div>
                        <form action="{{route('register', ['locale' => app()->getLocale()])}}" method="POST">
                            @csrf
                            <div class="row gy-3 gy-md-4 overflow-hidden">
                                <div class="col-12">
                                    <label for="fname" class="form-label">@lang('lang.yourName') <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="fname" id="fname" required>
                                </div>
                                <div class="col-12">
                                    <label for="number" class="form-label">@lang('lang.yourNumber') <span class="text-danger">*</span></label>
                                    <input type="phone" class="form-control" name="number" id="number" required>
                                </div>
                                <div class="col-12">
                                    <label for="email" class="form-label">@lang('lang.email') <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required>
                                </div>
                                <div class="col-12">
                                    <label for="password" class="form-label">@lang('lang.pass') <span class="text-danger">*</span></label>
                                    <input type="password" class="form-control" name="password" id="password" value="" required>
                                </div>
                                <div class="col-12">
                                    <label for="password" class="form-label">@lang('lang.pass_review') <span class="text-danger">*</span></label>
                                    <input type="password" class="form-control" name="confirm_pass" id="confirm_pass" value="" required>
                                </div>
                                <div class="col-12">
                                    <div class="d-grid">
                                        <button class="btn btn-lg btn-primary" type="submit">@lang('lang.register')</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="row">
                            <div class="col-12">
                                <hr class="mt-5 mb-4 border-secondary-subtle">
                                <div class="d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-md-end">
                                    <a href="{{route('login.post', ['locale' => app()->getLocale()])}}" class="link-secondary text-decoration-none">@lang('lang.login')</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <p class="mt-5 mb-4">@lang('lang.or_sign')</p>
                                <div class="d-flex gap-3 flex-column flex-md-row">
                                    <a href="#!" class="btn bsb-btn-xl btn-outline-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                                            <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z" />
                                        </svg>
                                        <span class="ms-2 fs-6">Google</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
