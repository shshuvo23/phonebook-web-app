<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register V4</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{asset('/')}}signin/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}signin/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}signin/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}signin/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}signin/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}signin/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}signin/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}signin/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}signin/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}signin/css/util.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}signin/css/main.css">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100" style="background-image: url('{{asset('/')}}signin/images/bg-01.jpg');">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
            <form class="login100-form validate-form" action="{{ route('register') }}" method="POST">
                @csrf
                <span class="login100-form-title p-b-49">
						Register
					</span>
            <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
                <span class="label-input100">User Name</span>
                <input class="input100" type="text" name="name" placeholder="Type your email">
                <span class="focus-input100" data-symbol="&#xf206;"></span>
            </div>

                <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
                    <span class="label-input100">User Email</span>
                    <input class="input100" type="text" name="email" placeholder="Type your email">
                    <span class="focus-input100" data-symbol="&#xf206;"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <span class="label-input100">Password</span>
                    <input class="input100" type="password" name="password" placeholder="Type your password">
                    <span class="focus-input100" data-symbol="&#xf190;"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <span class="label-input100">Confirm Password</span>
                    <input class="input100" type="password" name="password_confirmation" placeholder="Type your password">
                    <span class="focus-input100" data-symbol="&#xf190;"></span>
                </div>
                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button type="submit" class="login100-form-btn">
                            Register
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!--===============================================================================================-->
<script src="{{asset('/')}}signin/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="{{asset('/')}}signin/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="{{asset('/')}}signin/vendor/bootstrap/js/popper.js"></script>
<script src="{{asset('/')}}signin/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="{{asset('/')}}signin/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="{{asset('/')}}signin/vendor/daterangepicker/moment.min.js"></script>
<script src="{{asset('/')}}signin/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="{{asset('/')}}signin/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="{{asset('/')}}signin/js/main.js"></script>

</body>
</html>
