@include('partials/head')

<body class="auth-page sign-in">
    @include('sweetalert::alert')
    
    <div class="connect-container align-content-stretch d-flex flex-wrap">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5">
                    <div class="auth-form">
                        <div class="row">
                            <div class="col">
                                <div class="logo-box"><a href="#" class="logo-text">SmartService</a></div>
                                <form method="POST" action="/">
                                    @csrf

                                    <div class="form-group">
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            name="email" value="{{ old('email') }}" required autocomplete="email"
                                            autofocus placeholder="Enter email" id="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                                            name="password" required autocomplete="current-password" id="password"
                                            placeholder="Password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block btn-submit">Sign In</button>

                                    <div class="auth-options">
                                        <div class="row">
                                            <div class="custom-control custom-checkbox form-group col-3 p-0">
                                                <input type="checkbox" class="custom-control-input" id="exampleCheck1"
                                                    name="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <label class="custom-control-label"
                                                    for="exampleCheck1">{{ __('Remember Me') }}</label>
                                            </div>
                                            <div class="col-6 p-0">
                                                 <a href="/register">Belum punya akun ?</a>
                                            </div>
                                            @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}" class="forgot-link">Forgot Password?</a>
                                            @endif
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block d-xl-block">
                    <div class="auth-image"></div>
                </div>
            </div>
        </div>
    </div>

    @include('partials/script')
</body>
<html>