<<<<<<< HEAD
=======

>>>>>>> zerin
<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sash – Bootstrap 5  Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

    <!-- FAVICON -->
<<<<<<< HEAD
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('backend/assets/images/brand/favicon.ico') }}" />
=======
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('backend') }}/assets/images/brand/favicon.ico" />
>>>>>>> zerin

    <!-- TITLE -->
    <title>Login</title>

    <!-- BOOTSTRAP CSS -->
<<<<<<< HEAD
    <link id="style" href="{{ asset('backend/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="{{ asset('backend/assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/css/dark-style.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/css/transparent-style.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/css/skin-modes.css') }}" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="{{ asset('backend/assets/css/icons.css') }}" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="{{ asset('backend/assets/colors/color1.css') }}" />
=======
    <link id="style" href="{{ asset('backend') }}/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="{{ asset('backend') }}/assets/css/style.css" rel="stylesheet" />
    <link href="{{ asset('backend') }}/assets/css/dark-style.css" rel="stylesheet" />
    <link href="{{ asset('backend') }}/assets/css/transparent-style.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/assets/css/skin-modes.css" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="{{ asset('backend') }}/assets/css/icons.css" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="{{ asset('backend') }}/assets/colors/color1.css" />
>>>>>>> zerin

</head>

<body class="app sidebar-mini ltr login-img">

    <!-- BACKGROUND-IMAGE -->
    <div class="">

        <!-- GLOABAL LOADER -->
        <div id="global-loader">
<<<<<<< HEAD
            <img src="{{ asset('backend/assets/images/loader.svg') }}" class="loader-img" alt="Loader">
=======
            <img src="{{ asset('backend') }}/assets/images/loader.svg" class="loader-img" alt="Loader">
>>>>>>> zerin
        </div>
        <!-- /GLOABAL LOADER -->

        <!-- PAGE -->
        <div class="page">
            <div class="">

                <!-- CONTAINER OPEN -->
                <div class="col col-login mx-auto mt-7">
                    <div class="text-center">
<<<<<<< HEAD
                        <a href="index.html"><img src="{{ asset('backend/assets/images/brand/logo-white.png') }}" class="header-brand-img" alt=""></a>
=======
                        <img src="{{ asset('backend') }}/assets/images/brand/logo-white.png" class="header-brand-img" alt="">
>>>>>>> zerin
                    </div>
                </div>

                <div class="container-login100">
                    <div class="wrap-login100 p-6">
<<<<<<< HEAD
                        <form method="POST" action="{{ isset($guard) ? url($guard.'/login') : route('login') }}">
                            @csrf
=======
                        
>>>>>>> zerin
                            <span class="login100-form-title pb-5">
                                Login
                            </span>
                            <div class="panel panel-primary">
<<<<<<< HEAD

                                <div class="panel-body tabs-menu-body p-0 pt-5">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab5">
                                            <div class="wrap-input100 validate-input input-group" data-bs-validate="Valid email is required: ex@abc.xyz">
                                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                    <i class="zmdi zmdi-email text-muted" aria-hidden="true"></i>
                                                </a>
                                                <input class="input100 border-start-0 form-control ms-0" type="email" id="email" name="email" placeholder="Email">
                                            </div>
                                            <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                    <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                                </a>
                                                <input class="input100 border-start-0 form-control ms-0" type="password" id="password" name="password" placeholder="Password">
                                            </div>
                                            <div class="text-end pt-4">
                                                <p class="mb-0"><a href="{{ route('password.request') }}" class="text-primary ms-1">Forgot Password?</a></p>
                                            </div>
                                            <div class="container-login100-form-btn">
                                                <button class="login100-form-btn btn-primary" type="submit">
                                                        Login
                                                </button>
                                            </div>
                                            <div class="text-center pt-3">
                                                <p class="text-dark mb-0">Not a member?<a href="register.html" class="text-primary ms-1">Sign UP</a></p>
                                            </div>
                                        </div>
=======
                                <div class="tab-menu-heading">
                                    <div class="tabs-menu1">
                                        <!-- Tabs -->
                                        <ul class="nav panel-tabs">
                                            <li class="mx-0"><a href="#tab5" class="active" data-bs-toggle="tab">Email / Username</a></li>
                                            <li class="mx-0"><a href="#tab6" data-bs-toggle="tab">Mobile</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-body tabs-menu-body p-0 pt-5">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab5">
                                            <form action="{{ route('login') }}" method="post">
                                                @csrf
                                                <div class="wrap-input100 validate-input input-group" data-bs-validate="Valid email is required: ex@abc.xyz">
                                                    <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                        <i class="zmdi zmdi-email text-muted" aria-hidden="true"></i>
                                                    </a>
                                                    <input class="input100 border-start-0 form-control ms-0 @error('username') is-invalid @enderror" name="username" type="text" placeholder="Username" value="{{ old('username') }}">
                                                   
                                                    @error('username') 
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span> 
                                                    @enderror

                                                </div>
                                                <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                                    <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                        <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                                    </a>
                                                    <input class="input100 border-start-0 form-control ms-0 @error('password') is-invalid
                                                    @enderror" name="password" value="{{ old('password') }}" type="password" placeholder="Password">
                                                </div>
                                                <div class="text-end pt-4">
                                                    <p class="mb-0"><a href="forgot-password.html" class="text-primary ms-1">Forgot Password?</a></p>
                                                </div>
                                                <div class="container-login100-form-btn">                                                        
                                                    <button style="border: none" type="submit" class="login100-form-btn btn-primary" >Login</button>
                                                </div>
                                                <div class="text-center pt-3">
                                                    <p class="text-dark mb-0">Not a member?<a href="{{ route('register') }}" class="text-primary ms-1">Sign UP</a></p>
                                                </div> 
                                            </form>
                                            <label class="login-social-icon"><span>Login with Social</span></label>
                                            <div class="d-flex justify-content-center">
                                                <a href="javascript:void(0)">
                                                    <div class="social-login me-4 text-center">
                                                        <i class="fa fa-google"></i>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0)">
                                                    <div class="social-login me-4 text-center">
                                                        <i class="fa fa-facebook"></i>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0)">
                                                    <div class="social-login text-center">
                                                        <i class="fa fa-twitter"></i>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                       
                                        <div class="tab-pane" id="tab6">
                                            <div id="mobile-num" class="wrap-input100 validate-input input-group mb-4">
                                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                    <span>+00</span>
                                                </a>
                                                <input class="input100 border-start-0 form-control ms-0">
                                            </div>
                                            <div id="login-otp" class="justify-content-around mb-5">
                                                <input class="form-control text-center w-15" id="txt1" maxlength="1">
                                                <input class="form-control text-center w-15" id="txt2" maxlength="1">
                                                <input class="form-control text-center w-15" id="txt3" maxlength="1">
                                                <input class="form-control text-center w-15" id="txt4" maxlength="1">
                                            </div>
                                            <span>Note : Login with registered mobile number to generate OTP.</span>
                                            <div class="container-login100-form-btn ">
                                                <a href="javascript:void(0)" class="login100-form-btn btn-primary" id="generate-otp">
                                                    Proceed
                                                </a>
                                            </div>
                                        </div>
                                       
>>>>>>> zerin
                                    </div>
                                </div>
                            </div>

<<<<<<< HEAD
                        </form>
=======
                     
>>>>>>> zerin
                    </div>
                </div>
                <!-- CONTAINER CLOSED -->
            </div>
        </div>
        <!-- End PAGE -->

    </div>
    <!-- BACKGROUND-IMAGE CLOSED -->

    <!-- JQUERY JS -->
<<<<<<< HEAD
    <script src="{{ asset('backend/assets/js/jquery.min.js') }}"></script>

    <!-- BOOTSTRAP JS -->
    <script src="{{ asset('backend/assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- SHOW PASSWORD JS -->
    <script src="{{ asset('backend/assets/js/show-password.min.js') }}"></script>

    <!-- GENERATE OTP JS -->
    <script src="{{ asset('backend/assets/js/generate-otp.js') }}"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="{{ asset('backend/assets/plugins/p-scroll/perfect-scrollbar.js') }}"></script>

    <!-- Color Theme js -->
    <script src="{{ asset('backend/assets/js/themeColors.js') }}"></script>

    <!-- CUSTOM JS -->
    <script src="{{ asset('backend/assets/js/custom.js') }}"></script>


</body>

</html>
=======
    <script src="{{ asset('backend') }}/assets/js/jquery.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="{{ asset('backend') }}/assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="{{ asset('backend') }}/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- SHOW PASSWORD JS -->
    <script src="{{ asset('backend') }}/assets/js/show-password.min.js"></script>

    <!-- GENERATE OTP JS -->
    <script src="{{ asset('backend') }}/assets/js/generate-otp.js"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="{{ asset('backend') }}/assets/plugins/p-scroll/perfect-scrollbar.js"></script>

    <!-- Color Theme js -->
    <script src="{{ asset('backend') }}/assets/js/themeColors.js"></script>

    <!-- CUSTOM JS -->
    <script src="{{ asset('backend') }}/assets/js/custom.js"></script>

</body>

</html>
>>>>>>> zerin
