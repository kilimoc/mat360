<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mat360|Sacco Manager Registration</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{asset('assets/vendor/font-awesome/css/font-awesome.min.css')}}">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="{{asset('assets/css/fontastic.css')}}">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="{{asset('assets/css/grasp_mobile_progress_circle-1.0.0.min.css')}}">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="{{asset('assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css')}}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset('assets/css/style.default.css')}}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<body>
<div class="page login-page">
    <div class="container">
        <div class="form-outer text-center d-flex align-items-center">
            <div class="form-inner">
                <div class="logo text-uppercase"><span>Sacco Manager</span><strong class="text-primary"> Registration</strong></div>
                <p>Please complete your registration below</p>
                <p>@include('flash_message')</p>
                <form class="text-left form-validate" method="post" action="{{route('newSaccoManager.submit')}}">
                    @csrf
                    <div class="form-group-material">
                        <input id="idno" type="text" name="idno" value="{{request()->idnumber}}" class="input-material" readonly>
                        <label for="idno" class="label-material">ID Number</label>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group-material">
                        <input id="fname" type="text" name="fname" required data-msg="Please enter Owner First Name" class="input-material">
                        <label for="fname" class="label-material">First Name</label>
                    </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group-material">
                        <input id="lname" type="text" name="lname" required data-msg="Please enter Owner Last Name" class="input-material">
                        <label for="lname" class="label-material">Last Name</label>
                    </div>
                        </div>
                    </div>
                    <div class="form-group-material">
                        <input id="phone" type="text" name="phone" required data-msg="Enter Active Phone Number" class="input-material">
                        <label for="phone" class="label-material">Phone Number</label>
                    </div>
                    <div class="form-group-material">
                        <input id="email" type="email" name="email" required data-msg="Please enter your email address" class="input-material">
                        <label for="email" class="label-material">Email Address</label>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group-material">
                                <input id="password" type="password" name="password" required data-msg="Please enter your password" class="input-material">
                                <label for="password" class="label-material">Password</label>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group-material">
                                <input id="cpassword" type="password" name="cpassword" required data-msg="Please enter the same password" class="input-material">
                                <label for="cpassword" class="label-material">Confirm Password</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-center">
                        <input id="register" type="submit" value="Complete Registration" class="btn btn-primary btn-block">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- JavaScript files-->
<script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/vendor/popper.js/umd/popper.min.js')}}"> </script>
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/grasp_mobile_progress_circle-1.0.0.min.js')}}"></script>
<script src="{{asset('assets/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
<script src="{{asset('assets/vendor/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('assets/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('assets/js/charts-home.js')}}"></script>
<!-- Main File-->
<script src="{{asset('assets/js/front.js')}}"></script>
</body>
</html>