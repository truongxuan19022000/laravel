@extends('layout')
@section('content')
    @push('custom-css')
        <style>
            login-form {

            }

            .signup-form {

            }

            .login-form h2, .signup-form h2 {
                color: #696763;
                font-family: 'Roboto', sans-serif;
                font-size: 20px;
                font-weight: 300;
                margin-bottom: 30px;
            }


            .login-form form input, .signup-form form input {
                background: #F0F0E9;
                border: medium none;
                color: #696763;
                display: block;
                font-family: 'Roboto', sans-serif;
                font-size: 14px;
                font-weight: 300;
                height: 40px;
                margin-bottom: 10px;
                outline: medium none;
                padding-left: 10px;
                width: 100%;
            }

            .login-form form span{
                line-height: 25px;
            }

            .login-form form span input {
                width: 15px;
                float: left;
                height: 15px;
                margin-right: 5px;
            }

            .login-form form button {
                margin-top: 23px;
            }

            .login-form form button, .signup-form form button {
                background: #FE980F;
                border: medium none;
                border-radius: 0;
                color: #FFFFFF;
                display: block;
                font-family: 'Roboto', sans-serif;
                padding: 6px 25px;
            }

            .login-form label{

            }


            .login-form label input {
                border: medium none;
                display: inline-block;
                height: 0;
                margin-bottom: 0;
                outline: medium none;
                padding-left: 0;
            }


            .or{
                background: #FE980F;
                border-radius: 40px;
                color: #FFFFFF;
                font-family: 'Roboto', sans-serif;
                font-size: 16px;
                height: 50px;
                line-height: 50px;
                margin-top: 75px;
                text-align: center;
                width: 50px;
            }
        #form{
            margin: 50px auto !important;
        }
            .formError {
                background: #FDEDF0;
                border-radius: 2px;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                margin-top: 4px;
                margin-bottom : 4px;
                padding: 8px 14px;
                color: #E01A48;
                font-size: 12px;
                line-height: 16px;
                font-weight: 500;
            }

            @media (max-width: 767px) {
                .formError {
                    font-size: 10px;
                    padding: 8px 6px;
                }
            }

            .formError .item {
                width: 20px;
                height: 20px;
                min-width: 20px;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
                margin-right: 8px;
            }

            @media (max-width: 767px) {
                .formError .item {
                    margin-right: 6px;
                    width: 12px;
                    width: 12px;
                    min-width: 12px;
                }
            }
        </style>
    @endpush
	<section id="form"><!--form-->
		<div class="container">
			<div class="row" style="display: flex;justify-content: center">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Đăng nhập tài khoản</h2>
						<form action="{{URL::to('/login-customer')}}" method="POST">
							{{csrf_field()}}
							<input type="text"
                                   @error('email_account')
                                   style="border: 1px solid red"
                                   @enderror
                                   name="email_account" placeholder="Tài khoản"  />
                            @error('email_account')
                            <div class="formError optin">
                                            <span class="item"><img
                                                    src="{{asset('public/uploads/common/icon-help-error.svg')}}"
                                                    alt=""></span>
                                <div class="formError-text">{{$message}}</div>
                            </div>
                            @enderror
							<input type="password"
                                   @error('password_account')
                                   style="border: 1px solid red"
                                   @enderror
                                   name="password_account" placeholder="Password" required />
                            @error('password_account')
                            <div class="formError optin">
                                            <span class="item"><img
                                                    src="{{asset('public/uploads/common/icon-help-error.svg')}}"
                                                    alt=""></span>
                                <div class="formError-text">{{$message}}</div>
                            </div>
                            @enderror
							<span>
								<input type="checkbox" class="checkbox">
								Ghi nhớ đăng nhập
							</span>
							<button type="submit" class="btn btn-default">Đăng nhập</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">Hoặc</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>Đăng ký</h2>
						<form action="{{URL::to('/add-customer')}}" method="POST">
							{{ csrf_field() }}
							<input type="text" name="customer_name" placeholder="Họ và tên"/>
							<input type="email" name="customer_email" placeholder="Địa chỉ email" required/>
							<input type="password" name="customer_password" placeholder="Mật khẩu" required/>
							<input type="text" name="customer_phone" placeholder="Phone" required/>
							<button type="submit" class="btn btn-default">Đăng ký</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
    @push('min-script')
        <script>

        </script>
    @endpush
@endsection
