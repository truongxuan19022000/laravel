<!DOCTYPE html>

<head>
	<title>Trang quản lý Admin Web</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- bootstrap-css -->
	<link rel="icon" type="image/png" href="{{asset('public/login/images/icons/favicon.ico')}}" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/login/vendor/bootstrap/css/bootstrap.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/login/vendor/animate/animate.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/login/vendor/css-hamburgers/hamburgers.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/login/vendor/animsition/css/animsition.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/login/vendor/select2/select2.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/login/vendor/daterangepicker/daterangepicker.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/login/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/login/css/main.css')}}">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style>
		#error {
			color: red;
		}
	</style>

</head>

<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('public/login/images/bg-01.jpg');">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
				<form action="{{URL::to('/admin-dashboard')}}" method="post" class="login100-form validate-form flex-sb flex-w">
					{{ csrf_field() }}
					<span class="login100-form-title p-b-53">
						Sign In With
					</span>
					<?php

use Illuminate\Support\Facades\Session;

$message = Session::get('message');
					if ($message) {
						echo '<div id="error" class="alert alert-danger" role="alert">' . $message . '</div>';
						Session::put('message', null);
					}
					?>
					<a href="{{url('/login-facebook')}}" class="btn-face m-b-20">
						<i class="fa fa-facebook-official"></i>
						Facebook
					</a>

					<a href="{{url('/login-google')}}" class="btn-google m-b-20">
						<img src="public/login/images/icons/icon-google.png" alt="GOOGLE">
						Google
					</a>
					
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Username
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Username is required">
					<input type="text" id="email" class="input100 ggg" name="admin_email" placeholder="">
					<span class="focus-input100"></span>
					</div>
					@foreach($errors->all() as $val)
					<span id="error">{{$val}}</span>
					@endforeach
					<div class="p-t-13 p-b-9">
						<span class="txt1">
							Password
						</span>

						<a href="#" class="txt2 bo1 m-l-5">
							Forgot?
						</a>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
					<input type="password" id="password"  class="input100 ggg"  name="admin_password" placeholder="">
					<span class="focus-input100"></span>
					</div>
					<div class="clearfix"></div>
					<div class="container-login100-form-btn m-t-17">
					<input class="login100-form-btn" type="submit" id="login" value="Sign In" name="login">
					</div>
					<div class="w-full text-center p-t-55">
						<span class="txt2">
							Not a member?
						</span>

						<a href="#" class="txt2 bo1">
							Sign up now
						</a>
					</div>
					{{-- <div class="g-recaptcha" data-sitekey="{{env('CAPTCHA_KEY')}}">
			</div>
			<br />
			@if($errors->has('g-recaptcha-response'))
			<span class="invalid-feedback" style="display:block">
				<strong>{{$errors->first('g-recaptcha-response')}}</strong>
			</span>
			@endif --}}

			</form>
			{{-- <p>Don't Have an Account ?<a href="registration.html">Create an account</a></p> --}}
		</div>
	</div>
	</div>
	<script src="{{asset('public/login/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
	<!--===============================================================================================-->
	<script src="{{asset('public/login/vendor/animsition/js/animsition.min.js')}}"></script>
	<!--===============================================================================================-->
	<script src="{{asset('public/login/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('public/login/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<!--===============================================================================================-->
	<script src="{{asset('public/login/vendor/select2/select2.min.js')}}"></script>
	<!--===============================================================================================-->
	<script src="{{asset('public/login/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('public/login/vendor/daterangepicker/daterangepicker.js')}}"></script>
	<!--===============================================================================================-->
	<script src="{{asset('public/login/vendor/countdowntime/countdowntime.js')}}"></script>
	<!--===============================================================================================-->
	<script src="{{asset('public/login/js/main.js')}}"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<!-- Thu vien validate_form -->


	</script>
</body>

</html>