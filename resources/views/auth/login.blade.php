<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>Login</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/login/img/favicon.png') }}" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/login/img/icon/192x192.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/login/css/style.css') }}">
</head>

<body class="bg-white">

    <!-- loader -->
    <div id="loader">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- * loader -->


    <!-- App Capsule -->
    <div id="appCapsule" class="pt-0">

        <div class="login-form mt-1">
            <div class="section">
                <img src="{{ asset('assets/login/img/sample/photo/vector4.png') }}" alt="image" class="form-image">
            </div>
            <div class="section mt-1">
                <h2>S I M B O</h2>
                <h4 style="margin-top: -10px;">( SIMPANAN BANGUNARTA ONLINE )</h4>
            </div>
            <div class="section mt-1 mb-5">

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <input type="text" class="form-control" name="auth" id="auth" placeholder="Username" value="{{ old('auth') }}">
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>
                    </div>

                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>
                    </div>

                    <div class="text-center mt-1">
                        <a href="#">
                            
                            @if($errors->has('email'))
                                <b class="text-danger">{{ $errors->first('email') }}</b>
                            @elseif($errors->has('password'))
                                <b class="text-danger">{{ $errors->first('password') }}</b>
                            @else
                                <b class="text-primary">Lupa Username/ Password?</b>
                            @endif
                            
                        </a>
                    </div>

                    <div class="form-button-group">
                        <button type="submit" class="btn btn-primary btn-block btn-lg">Masuk</button>
                    </div>

                </form>
            </div>
        </div>


    </div>
    <!-- * App Capsule -->

    <script src="{{ asset('assets/login/js/lib/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('assets/login/js/lib/popper.min.js') }}"></script>
    <script src="{{ asset('assets/login/js/lib/bootstrap.min.js') }}"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.js"></script>
    <script src="{{ asset('assets/login/js/plugins/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/login/js/plugins/jquery-circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('assets/login/js/base.js') }}"></script>
</body>

</html>