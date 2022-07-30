<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Cake - Bakery</title>

    <title>{{$meta_title}}</title>
    <!-- Css layout bánh -->
    <link href="{{asset('public/layout/css/font-awesome.min.css')}}" rel="stylesheet">


    <link href="{{asset('public/layout/vendors/linearicons/style.css')}}" rel="stylesheet">
    <link href="{{asset('public/layout/vendors/flat-icon/flaticon.css')}}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{asset('public/layout/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/layout/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Rev slider css -->
    <link href="{{asset('public/layout/vendors/revolution/css/settings.css')}}" rel="stylesheet">
    <link href="{{asset('public/layout/vendors/revolution/css/layers.css')}}" rel="stylesheet">
    <link href="{{asset('public/layout/vendors/revolution/css/navigation.css')}}" rel="stylesheet">
    <link href="{{asset('public/layout/vendors/animate-css/animate.css')}}" rel="stylesheet">

    <!-- Extra plugin css -->
    <link href="{{asset('public/layout/vendors/owl-carousel/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/layout/vendors/magnifc-popup/magnific-popup.css')}}" rel="stylesheet">
    {{--    <link href="{{asset('public/frontend/css/style.css')}}" rel="stylesheet">--}}
    <link href="{{asset('public/frontend/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('public/layout/css/responsive.css')}}" rel="stylesheet">
    <!-- Css layout bánh -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!--================Error Main Area =================-->
<section class="error_area">
    <div class="container">
        <div class="error_inner">
            <div class="error_inner_text">
                <h3>404</h3>
                <h4>Oops! That page can’t be found</h4>
                <h5>Sorry, but the page you are looking for does not existing</h5>
                <a class="pink_btn" href="index.html">Go to home page</a>
            </div>
        </div>
    </div>
</section>
<!--================End Error Main Area =================-->

<!--================Footer Area =================-->
<footer class="footer_area">
    @include('pages.layout.footer')
</footer>
<!--================End Footer Area =================-->








<script src="{{asset('public/layout/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('public/layout/js/popper.min.js')}}"></script>
<script src="{{asset('public/layout/js/bootstrap.min.js')}}"></script>
<!-- Rev slider js -->
<script src="{{asset('public/layout/vendors/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('public/layout/vendors/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('public/layout/vendors/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('public/layout/vendors/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
<script
    src="{{asset('public/layout/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script
    src="{{asset('public/layout/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script
    src="{{asset('public/layout/vendors/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<!-- Extra plugin js -->
<script src="{{asset('public/layout/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('public/layout/vendors/magnifc-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('public/layout/vendors/datetime-picker/js/moment.min.js')}}"></script>
<script src="{{asset('public/layout/vendors/datetime-picker/js/bootstrap-datetimepicker.min.js')}}"></script>
<script src="{{asset('public/layout/vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('public/layout/vendors/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{asset('public/layout/vendors/lightbox/simpleLightbox.min.js')}}"></script>

<script src="{{asset('public/layout/js/theme.js')}}"></script>

</body>

</html>
