<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Login</title>

    <!-- Fontfaces CSS-->
    <link href="{{ asset('backendAssets/css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('backendAssets/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('backendAssets/vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('backendAssets/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('backendAssets/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ asset('backendAssets/vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('backendAssets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('backendAssets/vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('backendAssets/vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('backendAssets/vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('backendAssets/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('backendAssets/vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('backendAssets/css/theme.css') }}" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="{{ route('front') }}">
                                <h2 style="color:black;cursor:pointer;">Kanun</h2>
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="{{ route('AdminLogin') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                </div>
                                <div class="login-checkbox">                                   
                                    <label>
                                        <a href="{{ route('password.request') }}">Forgotten Password?</a>
                                    </label>
                                </div>

                                @if (\Session::has('error'))
                                    <div class="alert alert-danger">
                                        {!! \Session::get('error') !!}
                                    </div>
                                @endif

                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>                               
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="{{ asset('backendAssets/vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('backendAssets/vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{ asset('backendAssets/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
    <!-- Vendor JS       -->
    <script src="{{ asset('backendAssets/vendor/slick/slick.min.js') }}">
    </script>
    <script src="{{ asset('backendAssets/vendor/wow/wow.min.js') }}"></script>
    <script src="{{ asset('backendAssets/vendor/animsition/animsition.min.js') }}"></script>
    <script src="{{ asset('backendAssets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
    </script>
    <script src="{{ asset('backendAssets/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('backendAssets/vendor/counter-up/jquery.counterup.min.js') }}">
    </script>
    <script src="{{ asset('backendAssets/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('backendAssets/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('backendAssets/vendor/chartjs/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('backendAssets/vendor/select2/select2.min.js') }}">
    </script>

    <!-- Main JS-->
    <script src="{{ asset('backendAssets/js/main.js') }}"></script>

</body>

</html>
<!-- end document-->