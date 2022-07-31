<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <style>
        body{

            padding-top: 50px;
            padding-bottom:150px;
            background:
                linear-gradient(
                    rgba(251, 139, 166, 0.70),
                    rgba(224, 140, 194, 0.8),
                    rgba(194,139,228, 0.9)
                );
            background-size: cover;

        }

        #square {
            position: relative;
            width: 800px;
            height: 450px;
            display: block;
            margin: auto;
            background: #F3F6F8;
            z-index: 3;
        }

        #leftSquare {
            width: 40%;
            display: block;
            margin:  auto;
            height: 100%;
            position: absolute;
            top: 0%;
            left: 0%;
            background:linear-gradient(
                rgba(251, 139, 166, 0.70),
                rgba(224, 140, 194, 0.8),
                rgba(194,139,228, 0.9)
            ),  url("https://images.pexels.com/photos/1852/dawn-landscape-mountains-nature.jpg?h=350&auto=compress");
            background-size: cover;
            border-radius: 0%;
            z-index: 1;
        }

        #rightSquare {
            width: 60%;
            display: block;
            margin:  auto;
            height: 100%;
            position: absolute;
            top: 0%;
            right: 0%;
            background:none;
            background-size: cover;
            border-radius: 0%;
            z-index: 1;
        }

        #circle{
            border-radius: 50%;
            width: 60%;
            height: 40%;
            display: block;
            margin: auto;
            position: absolute;
            top: 8%;
            right: 20%;
        }

        .brand{
            position: absolute;
            display: block;
            top: 38%;
            left: 25%;
            margin: auto;
            width: 50%;
            height: 60%;
            z-index: 1;

        }

        #title{
            position: absolute;
            left: 21%;
            bottom: 37%;
            color: white;
            font-family:"lato";
            font-size: 20px;
            font-weight: 800;
            text-align: center;
            z-index: 3;
        }
        #subtitle{
            position: absolute;
            left: 7%;
            bottom: 32%;
            color: white;
            font-family:"lato";
            font-size: 13px;
            font-weight: 400;
            text-align: center;
            z-index: 3;
        }

        #container{

            margin-top: 15%;
        }

        .signup{
            color: rgb(228, 162, 208);
            font-family:"lato";
            font-size: 2em;
            font-weight: 800;
            text-align: center;
            text-transform: uppercase;
            z-index: 3;
        }

        .button{
            display: block;
            margin: auto;
            margin-bottom: 20px;
            z-index: 3;
            background: #2BA0EE;
        }

        #twitter{

            padding-left: 10px;
        }

        #footer{
            display: block;
            margin: auto;
            color: #333333;
            font-family:"lato";
            font-size: 10px;
            font-weight: 400;
            text-align: center;
            z-index: 3;
        }

        #terms{
            cursor: pointer;
            color: #FBADC1;
        }


        form{

            padding: 20px 0;
            position: relative;
        }

        .optin{

            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            outline: 0;
            border: 1px solid rgba(255, 255, 255, 0.8);
            background-color: rgba(255, 255, 255, 0.8);
            width: 75%;
            margin: auto;
            display: block;
            margin-bottom: 10px;
            border-radius: 3px;
            padding: 10px 15px;
            text-align: left;
            font-size: 18px;
            color: #333333;
            -webkit-transition-duration: 0.25s;
            transition-duration: 0.25s;
            font-weight: 300;


        }
        .optin:hover{
            background-color: rgba(255, 255, 255, 0.4);
        }
        .optin:focus {
            background-color: white;
            width: 90%;
            color: #CD98E3;
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
</head>
<body>
<form action="{{URL::to('/admin-dashboard')}}" method="post" class="login100-form validate-form flex-sb flex-w">
    {{ csrf_field() }}
<div class="animated slideInLeft" id="square">


    <div class="animated bounceInUp" id="leftSquare">
        <div class="animated bounceInUp" id="circle">
            <img class="brand img-responsive" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/827672/branding.png" />

        </div>

        <h2 id="title">Welcome to Divider</h2>
        <h3 id="subtitle">You are moments away from your first adventure.</h3>

    </div>

    <div class="animated bounceInDown" id="rightSquare">
        <div id="container">
            <h1 class="signup">Sign Up </h1>
            <form className="animated slideInLeft">
                <?php

                use Illuminate\Support\Facades\Session;

                $message = Session::get('message');
                if ($message) {
                    echo ' <div class="formError optin" >
                    <div class="formError-text">Email or password does not exist</div>
                </div>';
                    Session::put('message', null);
                }
                ?>
                <input
                        @error('admin_password')
                        style="border: 1px solid red"
                        @enderror
                        class="optin" type="text" name="admin_email" value="{{old('admin_email')}}" placeholder="Email" />
                @error('admin_email')
                <div class="formError optin" >
                                            <span class="item"><img
                                                    src="{{asset('uploads/common/icon-help-error.svg')}}"
                                                    alt=""></span>
                    <div class="formError-text">{{$message}}</div>
                </div>
                @enderror
                <input   @error('admin_password')
                         style="border: 1px solid red"
                         @enderror
                         class="optin" type="password" name="admin_password" placeholder="Password" />
                @error('admin_password')
                <div class="formError optin">
                                            <span class="item"><img
                                                    src="{{asset('uploads/common/icon-help-error.svg')}}"
                                                    alt=""></span>
                    <div class="formError-text">{{$message}}</div>
                </div>
                @enderror
            </form>
            <button class="animated infinite pulse button btn btn-info">
                <span><i class="fa fa-twitter" aria-hidden="true"></i></span><span id="twitter">
                   <input class="login100-form-btn" type="submit" id="login" value="Sign In" name="login">
                    </span>
            </button>
            <h3 id="footer">By continuing you agree to our <span id="terms">terms & conditions.</span></h3>
        </div>
    </div>
</div>
</form>

</body>
</html>
