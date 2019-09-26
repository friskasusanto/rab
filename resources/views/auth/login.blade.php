<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Material Admin - Login</title>

        <!-- BEGIN META -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="your,keywords">
        <meta name="description" content="Short explanation about this website">
        <!-- END META -->

        <!-- BEGIN STYLESHEETS -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
        <link type="text/css" rel="stylesheet" href="{{asset('backend/assets/css/theme-default/bootstrap.css?1422792965')}}" />
        <link type="text/css" rel="stylesheet" href="{{asset('backend/assets/css/theme-default/materialadmin.css?1425466319')}}" />
        <link type="text/css" rel="stylesheet" href="{{asset('backend/assets/css/theme-default/font-awesome.min.css?1422529194')}}" />
        <link type="text/css" rel="stylesheet" href="{{asset('backend/assets/css/theme-default/material-design-iconic-font.min.css?1421434286')}}" />
        <!-- END STYLESHEETS -->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script type="text/javascript" src="../../assets/js/libs/utils/html5shiv.js?1403934957"></script>
        <script type="text/javascript" src="../../assets/js/libs/utils/respond.min.js?1403934956"></script>
        <![endif]-->
    </head>
    <body class="menubar-hoverable header-fixed ">

        <!-- BEGIN LOGIN SECTION -->
        <section class="section-account">
            <div class="img-backdrop" style="background-image: url('{{asset('backend/assets/img/img16.jpg')}}')"></div>
            <div class="spacer"></div>
            <div class="card contain-sm style-transparent">
                <div class="card-body">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12 offset-md-4">
                                <center>
                                    <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                    </button>
                                </center>
                            </div>
                        </div>
                        <center>
                            <div class="form-group row mb-0">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                    <a class="btn btn-link" href="{{ route('register') }}">
                                        or Sign up here
                                    </a>
                            </div>
                        </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
                <!-- END LOGIN SECTION -->

                <!-- BEGIN JAVASCRIPT -->
                <script src="{{asset('backend/assets/js/libs/jquery/jquery-1.11.2.min.js')}}"></script>
                <script src="{{asset('backend/assets/js/libs/jquery/jquery-migrate-1.2.1.min.js')}}"></script>
                <script src="{{asset('backend/assets/js/libs/bootstrap/bootstrap.min.js')}}"></script>
                <script src="{{asset('backend/assets/js/libs/spin.js/spin.min.js')}}"></script>
                <script src="{{asset('backend/assets/js/libs/autosize/jquery.autosize.min.js')}}"></script>
                <script src="{{asset('backend/assets/js/libs/nanoscroller/jquery.nanoscroller.min.js')}}"></script>
                <script src="{{asset('backend/assets/js/core/source/App.js')}}"></script>
                <script src="{{asset('backend/assets/js/core/source/AppNavigation.js')}}"></script>
                <script src="{{asset('backend/assets/js/core/source/AppOffcanvas.js')}}"></script>
                <script src="{{asset('backend/assets/js/core/source/AppCard.js')}}"></script>
                <script src="{{asset('backend/assets/js/core/source/AppForm.js')}}"></script>
                <script src="{{asset('backend/assets/js/core/source/AppNavSearch.js')}}"></script>
                <script src="{{asset('backend/assets/js/core/source/AppVendor.js')}}"></script>
                <script src="{{asset('backend/assets/js/core/demo/Demo.js')}}"></script>
                <!-- END JAVASCRIPT -->

            </body>
        </html>

