<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>Admindek | Admin Template</title>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('public/backend/bower_components/bootstrap/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('public/backend/assets/pages/waves/css/waves.min.css') }}" media="all">
    <link rel="stylesheet" href="{{ asset('public/backend/assets/icon/feather/css/feather.css') }}">

    <link rel="stylesheet" href="{{ asset('public/backend/assets/icon/themify-icons/themify-icons.css') }}">

    <link rel="stylesheet" href="{{ asset('public/backend/assets/icon/icofont/css/icofont.css') }}">

    <link rel="stylesheet" href="{{ asset('public/backend/assets/icon/font-awesome/css/font-awesome.min.css') }}">

    <link rel="stylesheet" href="{{ asset('public/backend/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/backend/assets/css/pages.css') }}">
</head>
<body themebg-pattern="theme1">

<div class="theme-loader">
    <div class="loader-track">
        <div class="preloader-wrapper">
            <div class="spinner-layer spinner-blue">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
            <div class="spinner-layer spinner-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
            <div class="spinner-layer spinner-yellow">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
            <div class="spinner-layer spinner-green">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="login-block">

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">

                <form class="md-float-material form-material" action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="text-center">
                        <img src="{{ asset('public/backend/assets/images/logo.png') }}" alt="logo.png">
                    </div>
                    <div class="auth-box card">
                        <div class="card-block">
                            <div class="row m-b-20">
                                <div class="col-md-12">
                                    <h3 class="text-center txt-primary">Sign In</h3>
                                </div>
                            </div>
                            {{--<div class="row m-b-20">
                                <div class="col-md-6">
                                    <button class="btn btn-facebook m-b-20 btn-block"><i class="icofont icofont-social-facebook"></i>facebook</button>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn btn-twitter m-b-20 btn-block"><i class="icofont icofont-social-twitter"></i>twitter</button>
                                </div>
                            </div>--}}
                            <p class="text-muted text-center p-b-5">Sign in with your regular account</p>
                            <div class="form-group form-primary">
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" required="required" value="{{ old('email') }}">
                                <span class="form-bar"></span>
                                <label class="float-label">Email</label>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group form-primary">
                                <input type="password" name="password" class="form-control @error('email') is-invalid @enderror" required="required">
                                <span class="form-bar"></span>
                                <label class="float-label">Password</label>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ password }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="row m-t-25 text-left">
                                <div class="col-12">
                                    <div class="checkbox-fade fade-in-primary">
                                        <label>
                                            <input type="checkbox" value="" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                            <span class="text-inverse">Remember me</span>
                                        </label>
                                    </div>
                                    @if (Route::has('password.request'))
                                    <div class="forgot-phone text-right float-right">
                                        <a href="{{ route('password.request') }}" class="text-right f-w-600"> Forgot Password?</a>
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <div class="row m-t-30">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">LOGIN</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </form>

            </div>

        </div>

    </div>

    </div>

</section>


<script src="{{ asset('public/backend/bower_components/jquery/js/jquery.min.js') }}"></script>
<script src="{{ asset('public/backend/bower_components/jquery-ui/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('public/backend/bower_components/popper.js/js/popper.min.js') }}"></script>
<script src="{{ asset('public/backend/bower_components/bootstrap/js/bootstrap.min.js') }}"></script>

<script src="{{ asset('public/backend/assets/pages/waves/js/waves.min.js') }}" ></script>

<script src="{{ asset('public/backend/bower_components/jquery-slimscroll/js/jquery.slimscroll.js') }}"></script>

<script src="{{ asset('public/backend/bower_components/modernizr/js/modernizr.js') }}"></script>
<script src="{{ asset('public/backend/bower_components/modernizr/js/css-scrollbars.js') }}"></script>
<script src="{{ asset('public/backend/assets/js/common-pages.js') }}"></script>
</body>
</html>
