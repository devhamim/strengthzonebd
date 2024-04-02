
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $setting->first()->title }}</title>

    <link rel="shortcut icon" href="{{ asset('uploads/setting') }}/{{ $setting->first()->favicon }}">
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/css/style.css">
    <link rel="stylesheet" id="primaryColor" href="{{ asset('backend') }}/assets/css/orange-color.css">
    <link rel="stylesheet" id="rtlStyle" href="#">
</head>
<body class="light-theme">

    <!-- main content start -->
    <div class="main-content login-panel">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <div class="text-center"><img width="150" src="https://www.boguraweb.com/uploads/logo/logo.jpg" alt=""></div>
                        </div>
                        <div class="card-body">
                            <h1>Boguraweb</h1>
                            <p>We serve a best quality website design &amp; development , Graphics Design , &amp; digital Marketing., Software development , android apps development short time grow up   Company in Bangladesh because all time maintain product &amp; services quality &amp; first priority our clients happiness .</p>
                            <div class="d-flex">
                                <a href="https://www.boguraweb.com/" target="_blank" class="btn btn-success mr-5 text-capitalize">visit site</a>
                                {{-- <a href="https://www.facebook.com/nugortechit/" target="_blank" class="btn btn-success text-capitalize">facebook page</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="login-body">
                        <div class="top d-flex justify-content-between align-items-center">
                            <div class="logo">
                                {{-- <img src="{{ asset('backend') }}/assets/images/logo-black.png" alt="Logo"> --}}
                            </div>
                            <a href="{{ url('/') }}"><i class="fa-duotone fa-house-chimney"></i></a>
                        </div>
                        <div class="bottom">
                            <h3 class="panel-title">Login</h3>

                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="input-group mb-30">
                                    <span class="input-group-text"><i class="fa-regular fa-user"></i></span>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="email address">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="input-group mb-20">
                                    <span class="input-group-text"><i class="fa-regular fa-lock"></i></span>
                                    <input id="password" type="password" class="form-control rounded-end @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                                    <a role="button" class="password-show"><i class="fa-duotone fa-eye"></i></a>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="d-flex justify-content-between mb-30">
                                    <div class="form-check">
                                        {{-- <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label text-white" for="loginCheckbox">
                                            Remember Me
                                        </label> --}}
                                    </div>
                                    @if (Route::has('password.request'))
                                        {{-- <a href="{{ route('password.request') }}" class="text-white fs-14">Forgot Password?</a> --}}
                                    @endif
                                </div>
                                <button type="submit" class="btn btn-primary w-100 login-btn">Sign in</button>

                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- footer start -->
        <div class="footer">
            <p>{{ $setting->first()->footer }}  Design & Development by <a href="https://www.boguraweb.com/" class="text-primary">Boguraweb</a></p>
        </div>
        <!-- footer end -->
    </div>
    <!-- main content end -->

    <script src="{{ asset('backend') }}/assets/vendor/js/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('backend') }}/assets/vendor/js/jquery.overlayScrollbars.min.js"></script>
    <script src="{{ asset('backend') }}/assets/vendor/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/main.js"></script>
</body>
</html>
