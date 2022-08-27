<div class="top_header_area row m0">
    <div class="container">
        <div class="float-left">
            <a href="tell:+18004567890"><i class="fa fa-phone" aria-hidden="true"></i> + (1800) 456 7890</a>
            <a href="mainto:info@cakebakery.com"><i class="fa fa-envelope-o" aria-hidden="true"></i>
                info@cakebakery.com</a>
        </div>
        <div class="float-right">
            <ul class="h_social list_style">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
            <ul class="h_search list_style">
                <li class="shop_cart"><a href="#"><i class="lnr lnr-cart"></i></a></li>
                <li><a class="popup-with-zoom-anim" href="#test-search"><i class="fa fa-search"></i></a></li>
            </ul>
        </div>
    </div>
</div>
<div class="main_menu_two">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{URL::to('/')}}"><img src="{{asset('layout/img/logo-2.png')}}" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
							<span class="my_toggle_menu">
                            	<span></span>
                            	<span></span>
                            	<span></span>
                            </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav justify-content-end">
                    <li><a href="{{URL::to('/')}}" class="active"><i class="fa fa-home"></i> Trang chủ</a>
                    </li>
                    <li class="dropdown submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                           aria-haspopup="true" aria-expanded="false"><i class="fa fa-birthday-cake"></i> Bánh</a>
                        <ul class="dropdown-menu">
                            @foreach($category as $key => $danhmuc)
                                <li>
                                    <a href="{{URL::to('/danh-muc/'.$danhmuc->slug_category_product)}}">{{$danhmuc->category_name}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <?php
                    $customer_id = Session::get('customer_id');
                    $shipping_id = Session::get('shipping_id');
                    if($customer_id != NULL && $shipping_id == NULL){
                    ?>
                    <li><a href="{{URL::to('/checkout')}}"><i class="fa fa-crosshairs"></i> Thanh toán</a></li>

                    <?php
                    }elseif($customer_id != NULL && $shipping_id != NULL){
                    ?>
                    <li><a href="{{URL::to('/payment')}}"><i class="fa fa-crosshairs"></i> Thanh toán</a></li>
                    <?php
                    }else{
                    ?>
                    <li><a href="{{URL::to('/dang-nhap')}}"><i class="fa fa-crosshairs"></i> Thanh toán</a></li>
                    <?php
                    }
                    ?>


                    <li><a href="{{URL::to('/gio-hang')}}"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
                    <?php
                    $customer_id = Session::get('customer_id');
                    if($customer_id != NULL){
                    ?>
                    <li><a href="{{URL::to('/logout-checkout')}}"><i class="fa fa-lock"></i> Đăng xuất</a></li>

                    <?php
                    }else{
                    ?>
                    <li><a href="{{URL::to('/dang-nhap')}}"><i class="fa fa-lock"></i> Đăng nhập</a></li>
                    <?php
                    }
                    ?>

                </ul>
            </div>
        </nav>
    </div>
</div>
