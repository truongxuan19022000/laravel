<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!---------Seo--------->
    <meta name="description" content="{{$meta_desc}}">
    <meta name="keywords" content="{{$meta_keywords}}"/>
    <meta name="robots" content="INDEX,FOLLOW"/>
    <link rel="canonical" href="{{$url_canonical}}"/>
    <meta name="author" content="">
    <link rel="icon" type="image/x-icon" href="{{asset('layout/img/fav-icon.png')}}"/>
<!--//-------Seo--------->
    <title>{{$meta_title}}</title>
    <!-- Css layout bánh -->
    <link href="{{asset('layout/css/font-awesome.min.css')}}" rel="stylesheet">


    <link href="{{asset('layout/vendors/linearicons/style.css')}}" rel="stylesheet">
    <link href="{{asset('layout/vendors/flat-icon/flaticon.css')}}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{asset('layout/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('layout/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Rev slider css -->
    <link href="{{asset('layout/vendors/revolution/css/settings.css')}}" rel="stylesheet">
    <link href="{{asset('layout/vendors/revolution/css/layers.css')}}" rel="stylesheet">
    <link href="{{asset('layout/vendors/revolution/css/navigation.css')}}" rel="stylesheet">
    <link href="{{asset('layout/vendors/animate-css/animate.css')}}" rel="stylesheet">

    <!-- Extra plugin css -->
    <link href="{{asset('layout/vendors/owl-carousel/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('layout/vendors/magnifc-popup/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('layout/vendors/nice-select/css/nice-select.css')}}" rel="stylesheet">
{{--    <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">--}}
    <link href="{{asset('frontend/css/style.css?')}}{{\Carbon\Carbon::now()->format('h:i:s')}}" rel="stylesheet">
    <link href="{{asset('layout/css/responsive.css?')}}{{\Carbon\Carbon::now()->format('h:i:s')}}" rel="stylesheet">
    <!-- Css layout bánh -->
    <link href="{{asset('frontend/css/sweetalert.css?')}}{{\Carbon\Carbon::now()->format('h:i:s')}}" rel="stylesheet">
    <!-- Layout moi  -->
    @stack('custom-css')
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{('public/frontend/images/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">

</head><!--/head-->

<body>
<header class="main_header_area">
   @include('pages.layout.header')
</header>

<!--================Slider Area =================-->
<section class="main_slider_area">
    @include('pages.layout.slider')
</section>
<!--================End Slider Area =================-->

<!--================Product Area =================-->
@if(Route::is('cart'))
    <section class="cart_table_area p_100">
        @elseif(Route::is('home'))
            <section class="product_area p_100">
                @elseif(Route::is('product_detail'))
                    <section class="product_details_area p_100">
                        @elseif(Route::is('billing'))
                            <section class="billing_details_area p_100">
                                @endif
                                @yield('content')
    </section>
<!--================End Product Area =================-->

<!--================Service We offer Area =================-->
<section class="service_we_offer_area p_100">
    @include('pages.layout.service')
</section>
<!--================End Service We offer Area =================-->
<!--================Discover Menu Area =================-->
<section class="discover_menu_area menu_d_two">
    @include('pages.layout.menu')
</section>
<!--================End Discover Menu Area =================-->

<!--================Newsletter Area =================-->
<section class="newsletter_area gray_bg">
    @include('pages.layout.new')
</section>
<!--================End Newsletter Area =================-->
@include('pages.cart.cart_detail')
<footer class="footer_area">
   @include('pages.layout.footer')
</footer>
<!-- Footer -->


<script src="{{asset('frontend/js/jquery.js?')}}{{\Carbon\Carbon::now()->format('h:i:s')}}"></script>
<script src="{{asset('frontend/js/bootstrap.min.js?')}}{{\Carbon\Carbon::now()->format('h:i:s')}}"></script>
<script src="{{asset('frontend/js/jquery.scrollUp.min.js')}}"></script>
<script src="{{asset('frontend/js/price-range.js')}}"></script>
<script src="{{asset('frontend/js/jquery.prettyPhoto.js')}}"></script>
<script src="{{asset('frontend/js/main.js')}}"></script>


<script src="{{asset('frontend/js/sweetalert.min.js?')}}{{\Carbon\Carbon::now()->format('h:i:s')}}"></script>
{{--  <script src="https://www.paypal.com/sdk/js?client-id=sb"></script>
 <script>paypal.Buttons().render('body');</script> --}}
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0&appId=2339123679735877&autoLogAppEvents=1"></script>
<!-- Js layout moi -->
<script src="{{asset('layout/js/jquery-3.2.1.min.js?')}}{{\Carbon\Carbon::now()->format('h:i:s')}}"></script>
<script src="{{asset('layout/js/popper.min.js')}}"></script>
<script src="{{asset('layout/js/bootstrap.min.js')}}"></script>
<!-- Rev slider js -->
<script src="{{asset('layout/vendors/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('layout/vendors/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('layout/vendors/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('layout/vendors/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
<script
    src="{{asset('layout/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script
    src="{{asset('layout/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script
    src="{{asset('layout/vendors/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<!-- Extra plugin js -->
<script src="{{asset('layout/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('layout/vendors/magnifc-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('layout/vendors/datetime-picker/js/moment.min.js')}}"></script>
<script src="{{asset('layout/vendors/datetime-picker/js/bootstrap-datetimepicker.min.js')}}"></script>
<script src="{{asset('layout/vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('layout/vendors/jquery-ui/jquery-ui.min.js?')}}{{\Carbon\Carbon::now()->format('h:i:s')}}"></script>
<script src="{{asset('layout/vendors/lightbox/simpleLightbox.min.js')}}"></script>

<script src="{{asset('layout/js/theme.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.send_orderss').click(function () {
            console.log($('.shipping_email').val());
            swal({
                    title: "Xác nhận đơn hàng",
                    text: "Đơn hàng sẽ không được hoàn trả khi đặt,bạn có muốn đặt không?",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Cảm ơn, Mua hàng",
                    cancelButtonText: "Đóng,chưa mua",
                    closeOnConfirm: false,
                    closeOnCancel: false
                },
                function (isConfirm) {
                    if (isConfirm) {
                        var shipping_email = $('.shipping_email').val();
                        var shipping_name = $('.shipping_name').val();
                        var shipping_address = $('.shipping_address').val();
                        var shipping_phone = $('.shipping_phone').val();
                        var shipping_notes = $('.shipping_notes').val();
                        var shipping_method = $('.payment_select').val();
                        var shipping_city = $('.shipping_city').val();
                        var order_fee = $('.order_fee').val();
                        var order_coupon = $('.order_coupon').val();
                        var _token = $('input[name="_token"]').val();
                        $.ajax({
                            url: '{{url('/confirm-order')}}',
                            method: 'POST',
                            data: {
                                shipping_email: shipping_email,
                                shipping_name: shipping_name,
                                shipping_address: shipping_address,
                                shipping_phone: shipping_phone,
                                shipping_notes: shipping_notes,
                                _token: _token,
                                order_fee: order_fee,
                                order_coupon: order_coupon,
                                shipping_method: shipping_method,
                                shipping_city: shipping_city
                            },
                            success: function () {
                                swal("Đơn hàng", "Đơn hàng của bạn đã được gửi thành công", "success");
                                window.setTimeout(function () {
                                    location.href = '/';
                                }, 3000);
                            },
                            error: function (request, status, error) {
                                swal("Lỗi đặt hàng", "Bạn vui lòng điền đầy đủ thông tin", "error");
                                window.setTimeout(function () {
                                    window.location.preventDefault();
                                }, 3000);
                            }
                            });
                    } else {
                        swal("Đóng", "Đơn hàng chưa được gửi, làm ơn hoàn tất đơn hàng", "error");
                    }
                });
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.add-to-cart').click(function () {
            var id = $(this).data('id_product');
            // alert(id);
            var cart_product_id = $('.cart_product_id_' + id).val();
            var cart_product_name = $('.cart_product_name_' + id).val();
            var cart_product_image = $('.cart_product_image_' + id).val();
            var cart_product_quantity = $('.cart_product_quantity_' + id).val();
            var cart_product_price = $('.cart_product_price_' + id).val();
            var cart_product_qty = $('.cart_product_qty_' + id).val();
            var _token = $('input[name="_token"]').val();
            if (parseInt(cart_product_qty) > parseInt(cart_product_quantity)) {
                alert('Làm ơn đặt nhỏ hơn ' + cart_product_quantity);
            } else {
                $.ajax({
                    url: '{{url('/add-cart-ajax')}}',
                    method: 'POST',
                    data: {
                        cart_product_id: cart_product_id,
                        cart_product_name: cart_product_name,
                        cart_product_image: cart_product_image,
                        cart_product_price: cart_product_price,
                        cart_product_qty: cart_product_qty,
                        _token: _token,
                        cart_product_quantity: cart_product_quantity
                    },
                    success: function () {
                        swal({
                                title: "Đã thêm sản phẩm vào giỏ hàng",
                                text: "Bạn có thể mua hàng tiếp hoặc tới giỏ hàng để tiến hành thanh toán",
                                showCancelButton: true,
                                cancelButtonText: "Xem tiếp",
                                confirmButtonClass: "btn-success",
                                confirmButtonText: "Đi đến giỏ hàng",
                                closeOnConfirm: false
                            },
                            function () {
                                window.location.href = "{{url('/gio-hang')}}";
                            });
                    }
                });
            }
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.choose').on('change', function () {
            var action = $(this).attr('id');
            var ma_id = $(this).val();
            var _token = $('input[name="_token"]').val();
            var result = '';
            if (action == 'city') {
                result = 'province';
            } else {
                result = 'wards';
            }
            $.ajax({
                url: '{{url('/select-delivery-home')}}',
                method: 'POST',
                data: {action: action, ma_id: ma_id, _token: _token},
                success: function (data) {
                    $('#' + result).html(data);
                }
            });
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.calculate_delivery').click(function () {
            var matp = $('.city').val();
            var maqh = $('.province').val();
            var xaid = $('.wards').val();
            var _token = $('input[name="_token"]').val();
            if (matp == '' && maqh == '' && xaid == '') {
                alert('Vui lòng chọn tỉnh thành, quận huyện');
            } else {
                $.ajax({
                    url: '{{url('/calculate-fee')}}',
                    method: 'POST',
                    data: {matp: matp, maqh: maqh, xaid: xaid, _token: _token},
                    success: function () {
                        location.reload();
                    }
                });
            }
        });
    });
</script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    @stack('min-script')
</body>
</html>
