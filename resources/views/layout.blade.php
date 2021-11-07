<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!---------Seo--------->
    <meta name="description" content="{{$meta_desc}}">
    <meta name="keywords" content="{{$meta_keywords}}"/>
    <meta name="robots" content="INDEX,FOLLOW"/>
    <link  rel="canonical" href="{{$url_canonical}}" />
    <meta name="author" content="">
    <link  rel="icon" type="image/x-icon" href="" />

    {{--   <meta property="og:image" content="{{$image_og}}" />
      <meta property="og:site_name" content="http://localhost/tutorial_youtube/shopbanhanglaravel" />
      <meta property="og:description" content="{{$meta_desc}}" />
      <meta property="og:title" content="{{$meta_title}}" />
      <meta property="og:url" content="{{$url_canonical}}" />
      <meta property="og:type" content="website" /> --}}
    <!--//-------Seo--------->
    <title>{{$meta_title}}</title>
    <!-- Css layout bánh -->
    <link href="{{asset('public/layout/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{asset('public/layout/vendors/linearicons/style.css')}}" rel="stylesheet">
        <link href="{{asset('public/layout/vendors/flat-icon/flaticon.css')}}" rel="stylesheet">
        <link href="{{asset('public/layout/css/bootstrap.min.css')}}" rel="stylesheet">
        
        <link href="{{asset('public/layout/vendors/revolution/css/settings.css')}}" rel="stylesheet">
        <link href="{{asset('public/layout/vendors/revolution/css/layers.css')}}" rel="stylesheet">
        <link href="{{asset('public/layout/vendors/revolution/css/navigation.css')}}" rel="stylesheet">
        <link href="{{asset('public/layout/vendors/animate-css/animate.css')}}" rel="stylesheet">
        
        <link href="{{asset('public/layout/vendors/owl-carousel/owl.carousel.min.css')}}" rel="stylesheet">
        <link href="{{asset('public/layout/vendors/magnifc-popup/magnific-popup.css')}}" rel="stylesheet">
        
        <link href="{{asset('public/layout/css/stylelayout.css')}}" rel="stylesheet">
        <link href="{{asset('public/layout/css/responsive.css')}}" rel="stylesheet">
    <!-- Css layout bánh -->
    <link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/responsive.css')}}" rel="stylesheet">
     <link href="{{asset('public/frontend/css/sweetalert.css')}}" rel="stylesheet">
    <!-- Layout moi  -->
     
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
			<div class="top_header_area row m0">
				<div class="container">
					<div class="float-left">
						<a href="tell:+18004567890"><i class="fa fa-phone" aria-hidden="true"></i> + (1800) 456 7890</a>
						<a href="mainto:info@cakebakery.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> info@cakebakery.com</a>
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
						<a class="navbar-brand" href="index.html"><img src="public/layout/img/logo-2.png" alt=""></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="my_toggle_menu">
                            	<span></span>
                            	<span></span>
                            	<span></span>
                            </span>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav justify-content-end">
							<!-- 	<li><a href="cake.html">Our Cakes</a></li>
								<li><a href="menu.html">Menu</a></li>
								<li class="dropdown submenu">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">About Us</a>
									<ul class="dropdown-menu">
										<li><a href="about-us.html">About Us</a></li>
										<li><a href="our-team.html">Our Chefs</a></li>
										<li><a href="testimonials.html">Testimonials</a></li>
									</ul>
								</li>
								<li class="dropdown submenu">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
									<ul class="dropdown-menu">
										<li><a href="service.html">Services</a></li>
										<li class="dropdown submenu">
											<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Gallery</a>
											<ul class="dropdown-menu">
												<li><a href="portfolio.html">-  Gallery Classic</a></li>
												<li><a href="portfolio-full-width.html">-  Gallery Full width</a></li>
											</ul>
										</li>
										<li><a href="faq.html">Faq</a></li>
										<li><a href="what-we-make.html">What we make</a></li>
										<li><a href="special.html">Special Recipe</a></li>
										<li><a href="404.html">404 page</a></li>
										<li><a href="comming-soon.html">Coming Soon page</a></li>
									</ul>
								</li>
								<li class="dropdown submenu">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
									<ul class="dropdown-menu">
										<li><a href="blog.html">Blog with sidebar</a></li>
										<li><a href="blog-2column.html">Blog 2 column</a></li>
										<li><a href="single-blog.html">Blog details</a></li>
									</ul>
								</li>

								<li><a href="contact.html">Contact Us</a></li> -->
                                <li><a href="{{URL::to('/trang-chu')}}" class="active"><i class="fa fa-home"></i> Trang chủ</a></li>
                                <li class="dropdown submenu">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-birthday-cake"></i> Bánh</a>
									<ul class="dropdown-menu">
                                        @foreach($category as $key => $danhmuc)
                                        <li><a href="{{URL::to('/danh-muc/'.$danhmuc->slug_category_product)}}">{{$danhmuc->category_name}}</a></li>
                                        @endforeach
									</ul>
								</li>
                                <?php


                                    $customer_id = Session::get('customer_id');
                                   $shipping_id = Session::get('shipping_id');
                                   if($customer_id!=NULL && $shipping_id==NULL){
                                 ?>
                                  <li><a href="{{URL::to('/checkout')}}"><i class="fa fa-crosshairs"></i> Thanh toán</a></li>

                                <?php
                                 }elseif($customer_id!=NULL && $shipping_id!=NULL){
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
                                   if($customer_id!=NULL){
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
		</header>
    
    <!--================Slider Area =================-->
    <section class="main_slider_area">
        <div id="main_slider" class="rev_slider" data-version="5.3.1.6">
            <ul>
                <li data-index="rs-1587" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="img/home-slider/slider-3.jpg" data-rotate="0"
                    data-saveperformance="off" data-title="Creative" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="public/layout/img/home-slider/slider-3.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>

                    <!-- LAYER NR. 1 -->
                    <div class="slider_text_box">
                        <div class="tp-caption tp-resizeme first_text" data-x="['left','left','left','15','15']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['175','175','125','165','160']" data-fontsize="['65','65','65','40','30']" data-lineheight="['80','80','80','50','40']"
                            data-width="['800','800','800','500']" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                            data-textAlign="['left','left','left','left']">Quality Products ... <br /> with sweet, eggs & breads</div>

                        <div class="tp-caption tp-resizeme secand_text" data-x="['left','left','left','15','15']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['345','345','300','300','250']" data-fontsize="['20','20','20','20','16']" data-lineheight="['28','28','28','28']"
                            data-width="['640','640','640','640','350']" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-transform_idle="o:1;" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit quia consequuntur magni dolores eos qui ratione
                        </div>

                        <div class="tp-caption tp-resizeme slider_button" data-x="['left','left','left','15','15']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['435','435','390','390','360']" data-fontsize="['14','14','14','14']" data-lineheight="['46','46','46','46']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]">
                            <a class="main_btn" href="#">See the recipe</a>
                        </div>
                    </div>
                </li>
                <li data-index="rs-1588" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="img/home-slider/slider-4.jpg" data-rotate="0"
                    data-saveperformance="off" data-title="Creative" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="public/layout/img/home-slider/slider-4.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="slider_text_box">
                        <div class="tp-caption tp-resizeme first_text" data-x="['left','left','left','15','15']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['175','175','125','165','160']" data-fontsize="['65','65','65','40','30']" data-lineheight="['80','80','80','50','40']"
                            data-width="['800','800','800','500']" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                            data-textAlign="['left','left','left','left']">Cake Bakery ... <br /> make delicious products</div>

                        <div class="tp-caption tp-resizeme secand_text" data-x="['left','left','left','15','15']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['345','345','300','300','250']" data-fontsize="['20','20','20','20','16']" data-lineheight="['28','28','28','28']"
                            data-width="['640','640','640','640','350']" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-transform_idle="o:1;" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit quia consequuntur magni dolores eos qui ratione
                        </div>

                        <div class="tp-caption tp-resizeme slider_button" data-x="['left','left','left','15','15']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['435','435','390','390','360']" data-fontsize="['14','14','14','14']" data-lineheight="['46','46','46','46']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]">
                            <a class="main_btn" href="#">See the recipe</a>
                        </div>
                    </div>
                </li>
                <li data-index="rs-1589" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="img/home-slider/slider-5.jpg" data-rotate="0"
                    data-saveperformance="off" data-title="Creative" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="public/layout/img/home-slider/slider-5.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="slider_text_box">
                        <div class="tp-caption tp-resizeme first_text" data-x="['left','left','left','15','15']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['175','175','125','165','160']" data-fontsize="['65','65','65','40','30']" data-lineheight="['80','80','80','50','40']"
                            data-width="['800','800','800','500']" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                            data-textAlign="['left','left','left','left']">Cake theme ... <br /> made with care and love</div>

                        <div class="tp-caption tp-resizeme secand_text" data-x="['left','left','left','15','15']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['345','345','300','300','250']" data-fontsize="['20','20','20','20','16']" data-lineheight="['28','28','28','28']"
                            data-width="['640','640','640','640','350']" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-transform_idle="o:1;" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit quia consequuntur magni dolores eos qui ratione
                        </div>

                        <div class="tp-caption tp-resizeme slider_button" data-x="['left','left','left','15','15']" data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']" data-voffset="['435','435','390','390','360']" data-fontsize="['14','14','14','14']" data-lineheight="['46','46','46','46']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]">
                            <a class="main_btn" href="#">See the recipe</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!--================End Slider Area =================-->

      <!--================Product Area =================-->
      <section class="product_area p_100">
      @yield('content')

        </section>
        <!--================End Product Area =================-->
    
    <!--================Service We offer Area =================-->
    <section class="service_we_offer_area p_100">
        <div class="container">
            <div class="single_w_title">
                <h2>Services We offer</h2>
            </div>
            <div class="row we_offer_inner">
                <div class="col-lg-4">
                    <div class="s_we_item">
                        <div class="media">
                            <div class="d-flex">
                                <i class="flaticon-food-6"></i>
                            </div>
                            <div class="media-body">
                                <a href="#">
                                    <h4>Cookies Cakes</h4>
                                </a>
                                <p>Lorem Ipsum is simply my text of the printing and Ipsum is simply text of the Ipsum is simply.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="s_we_item">
                        <div class="media">
                            <div class="d-flex">
                                <i class="flaticon-food-5"></i>
                            </div>
                            <div class="media-body">
                                <a href="#">
                                    <h4>Tasty Cupcakes</h4>
                                </a>
                                <p>Lorem Ipsum is simply my text of the printing and Ipsum is simply text of the Ipsum is simply.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="s_we_item">
                        <div class="media">
                            <div class="d-flex">
                                <i class="flaticon-food-3"></i>
                            </div>
                            <div class="media-body">
                                <a href="#">
                                    <h4>Wedding Cakes</h4>
                                </a>
                                <p>Lorem Ipsum is simply my text of the printing and Ipsum is simply text of the Ipsum is simply.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="s_we_item">
                        <div class="media">
                            <div class="d-flex">
                                <i class="flaticon-book"></i>
                            </div>
                            <div class="media-body">
                                <a href="#">
                                    <h4>Awesome Recipes</h4>
                                </a>
                                <p>Lorem Ipsum is simply my text of the printing and Ipsum is simply text of the Ipsum is simply.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="s_we_item">
                        <div class="media">
                            <div class="d-flex">
                                <i class="flaticon-food-4"></i>
                            </div>
                            <div class="media-body">
                                <a href="#">
                                    <h4>Menu Planner</h4>
                                </a>
                                <p>Lorem Ipsum is simply my text of the printing and Ipsum is simply text of the Ipsum is simply.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="s_we_item">
                        <div class="media">
                            <div class="d-flex">
                                <i class="flaticon-transport"></i>
                            </div>
                            <div class="media-body">
                                <a href="#">
                                    <h4>Home Delivery</h4>
                                </a>
                                <p>Lorem Ipsum is simply my text of the printing and Ipsum is simply text of the Ipsum is simply.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Service We offer Area =================-->
<!--================Discover Menu Area =================-->
<section class="discover_menu_area menu_d_two">
        <div class="discover_menu_inner">
            <div class="container">
                <div class="single_pest_title">
                    <h2>Services We offer</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="discover_item_inner">
                            <div class="discover_item">
                                <h4>Double Chocolate Pie</h4>
                                <p>Chocolate puding, vanilla, fruite rasberry jam milk <span>$8.99</span></p>
                            </div>
                            <div class="discover_item">
                                <h4>Double Chocolate Pie</h4>
                                <p>Chocolate puding, vanilla, fruite rasberry jam milk <span>$8.99</span></p>
                            </div>
                            <div class="discover_item">
                                <h4>Double Chocolate Pie</h4>
                                <p>Chocolate puding, vanilla, fruite rasberry jam milk <span>$8.99</span></p>
                            </div>
                            <div class="discover_item">
                                <h4>Double Chocolate Pie</h4>
                                <p>Chocolate puding, vanilla, fruite rasberry jam milk <span>$8.99</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="discover_item_inner">
                            <div class="discover_item">
                                <h4>Double Chocolate Pie</h4>
                                <p>Chocolate puding, vanilla, fruite rasberry jam milk <span>$8.99</span></p>
                            </div>
                            <div class="discover_item">
                                <h4>Double Chocolate Pie</h4>
                                <p>Chocolate puding, vanilla, fruite rasberry jam milk <span>$8.99</span></p>
                            </div>
                            <div class="discover_item">
                                <h4>Double Chocolate Pie</h4>
                                <p>Chocolate puding, vanilla, fruite rasberry jam milk <span>$8.99</span></p>
                            </div>
                            <div class="discover_item">
                                <h4>Double Chocolate Pie</h4>
                                <p>Chocolate puding, vanilla, fruite rasberry jam milk <span>$8.99</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <a class="pest_btn" href="#">View Full Menu</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Discover Menu Area =================-->
    
    <!--================Newsletter Area =================-->
    <section class="newsletter_area gray_bg">
        <div class="container">
            <div class="newsletter_inner">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="news_left_text">
                            <h4>Join our Newsletter list to get all the latest offers, discounts and other benefits</h4>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="newsletter_form">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Enter your email address">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button">Subscribe Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Newsletter Area =================-->

    <footer class="footer_area">
        	<div class="footer_widgets">
        		<div class="container">
        			<div class="row footer_wd_inner">
        				<div class="col-lg-3 col-6">
        					<aside class="f_widget f_about_widget">
        						<img src="public/layout/img/footer-logo.png" alt="">
        						<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui bland itiis praesentium voluptatum deleniti atque corrupti.</p>
        						<ul class="nav">
        							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
        							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
        							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
        							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        						</ul>
        					</aside>
        				</div>
        				<div class="col-lg-3 col-6">
        					<aside class="f_widget f_link_widget">
        						<div class="f_title">
        							<h3>Quick links</h3>
        						</div>
        						<ul class="list_style">
        							<li><a href="#">Your Account</a></li>
        							<li><a href="#">View Order</a></li>
        							<li><a href="#">Privacy Policy</a></li>
        							<li><a href="#">Terms & Conditionis</a></li>
        						</ul>
        					</aside>
        				</div>
        				<div class="col-lg-3 col-6">
        					<aside class="f_widget f_link_widget">
        						<div class="f_title">
        							<h3>Work Times</h3>
        						</div>
        						<ul class="list_style">
        							<li><a href="#">Mon. :  Fri.: 8 am - 8 pm</a></li>
        							<li><a href="#">Sat. : 9am - 4pm</a></li>
        							<li><a href="#">Sun. : Closed</a></li>
        						</ul>
        					</aside>
        				</div>
        				<div class="col-lg-3 col-6">
        					<aside class="f_widget f_contact_widget">
        						<div class="f_title">
        							<h3>Contact Info</h3>
        						</div>
        						<h4>(1800) 574 9687</h4>
        						<p>Justshiop Store <br />256, baker Street,, New Youk, 5245</p>
        						<h5>cakebakery@contact.co.in</h5>
        					</aside>
        				</div>
        			</div>
        		</div>
        	</div>
        	<div class="footer_copyright">
        		<div class="container">
        			<div class="copyright_inner">
        				<div class="float-left">
        					<h5><a target="_blank" href="https://www.templatespoint.net">Templates Point</a></h5>
        				</div>
        				<div class="float-right">
        					<a href="#">Purchase Now</a>
        				</div>
        			</div>
        		</div>
        	</div>
        </footer>
        <!-- Footer -->


    <script src="{{asset('public/frontend/js/jquery.js')}}"></script>
    <script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/price-range.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('public/frontend/js/main.js')}}"></script>


    <script src="{{asset('public/frontend/js/sweetalert.min.js')}}"></script>
   {{--  <script src="https://www.paypal.com/sdk/js?client-id=sb"></script>
    <script>paypal.Buttons().render('body');</script> --}}
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0&appId=2339123679735877&autoLogAppEvents=1"></script>
<!-- Js layout moi -->
<script src="{{asset('public/layout/js/jquery-3.2.1.min.js')}}"></script>
        <script src="{{asset('public/layout/js/popper.min.js')}}"></script>
        <script src="{{asset('public/layout/js/bootstrap.min.js')}}"></script>
        <!-- Rev slider js -->
        <script src="{{asset('public/layout/vendors/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
        <script src="{{asset('public/layout/vendors/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
        <script src="{{asset('public/layout/vendors/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
        <script src="{{asset('public/layout/vendors/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
        <script src="{{asset('public/layout/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
        <script src="{{asset('public/layout/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
        <script src="{{asset('public/layout/vendors/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
        <!-- Extra plugin js -->
        <script src="{{asset('public/layout/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('public/layout/vendors/magnifc-popup/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('public/layout/vendors/datetime-picker/js/moment.min.js')}}"></script>
        <script src="{{asset('public/layout/vendors/datetime-picker/js/bootstrap-datetimepicker.min.js')}}"></script>
        <script src="{{asset('public/layout/vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
        <script src="{{asset('public/layout/vendors/jquery-ui/jquery-ui.min.js')}}"></script>
        <script src="{{asset('public/layout/vendors/lightbox/simpleLightbox.min.js')}}"></script>
        
        <script src="{{asset('public/layout/js/theme.js')}}"></script>
    <script type="text/javascript">

          $(document).ready(function(){
            $('.send_order').click(function(){
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
                function(isConfirm){
                     if (isConfirm) {
                        var shipping_email = $('.shipping_email').val();
                        var shipping_name = $('.shipping_name').val();
                        var shipping_address = $('.shipping_address').val();
                        var shipping_phone = $('.shipping_phone').val();
                        var shipping_notes = $('.shipping_notes').val();
                        var shipping_method = $('.payment_select').val();
                        var order_fee = $('.order_fee').val();
                        var order_coupon = $('.order_coupon').val();
                        var _token = $('input[name="_token"]').val();

                        $.ajax({
                            url: '{{url('/confirm-order')}}',
                            method: 'POST',
                            data:{shipping_email:shipping_email,shipping_name:shipping_name,shipping_address:shipping_address,shipping_phone:shipping_phone,shipping_notes:shipping_notes,_token:_token,order_fee:order_fee,order_coupon:order_coupon,shipping_method:shipping_method},
                            success:function(){
                               swal("Đơn hàng", "Đơn hàng của bạn đã được gửi thành công", "success");
                            }
                        });

                        window.setTimeout(function(){
                            location.reload();
                        } ,3000);

                      } else {
                        swal("Đóng", "Đơn hàng chưa được gửi, làm ơn hoàn tất đơn hàng", "error");

                      }

                });


            });
        });


    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.add-to-cart').click(function(){

                var id = $(this).data('id_product');
                // alert(id);
                var cart_product_id = $('.cart_product_id_' + id).val();
                var cart_product_name = $('.cart_product_name_' + id).val();
                var cart_product_image = $('.cart_product_image_' + id).val();
                var cart_product_quantity = $('.cart_product_quantity_' + id).val();
                var cart_product_price = $('.cart_product_price_' + id).val();
                var cart_product_qty = $('.cart_product_qty_' + id).val();
                var _token = $('input[name="_token"]').val();
                if(parseInt(cart_product_qty)>parseInt(cart_product_quantity)){
                    alert('Làm ơn đặt nhỏ hơn ' + cart_product_quantity);
                }else{
                    
                    $.ajax({
                        url: '{{url('/add-cart-ajax')}}',
                        method: 'POST',
                        data:{cart_product_id:cart_product_id,cart_product_name:cart_product_name,cart_product_image:cart_product_image,cart_product_price:cart_product_price,cart_product_qty:cart_product_qty,_token:_token,cart_product_quantity:cart_product_quantity},
                        success:function(){

                            swal({
                                    title: "Đã thêm sản phẩm vào giỏ hàng",
                                    text: "Bạn có thể mua hàng tiếp hoặc tới giỏ hàng để tiến hành thanh toán",
                                    showCancelButton: true,
                                    cancelButtonText: "Xem tiếp",
                                    confirmButtonClass: "btn-success",
                                    confirmButtonText: "Đi đến giỏ hàng",
                                    closeOnConfirm: false
                                },
                                function() {
                                    window.location.href = "{{url('/gio-hang')}}";
                                });

                        }

                    });
                }


            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.choose').on('change',function(){
            var action = $(this).attr('id');
            var ma_id = $(this).val();
            var _token = $('input[name="_token"]').val();
            var result = '';

            if(action=='city'){
                result = 'province';
            }else{
                result = 'wards';
            }
            $.ajax({
                url : '{{url('/select-delivery-home')}}',
                method: 'POST',
                data:{action:action,ma_id:ma_id,_token:_token},
                success:function(data){
                   $('#'+result).html(data);
                }
            });
        });
        });

    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.calculate_delivery').click(function(){
                var matp = $('.city').val();
                var maqh = $('.province').val();
                var xaid = $('.wards').val();
                var _token = $('input[name="_token"]').val();
                if(matp == '' && maqh =='' && xaid ==''){
                    alert('Làm ơn chọn để tính phí vận chuyển');
                }else{
                    $.ajax({
                    url : '{{url('/calculate-fee')}}',
                    method: 'POST',
                    data:{matp:matp,maqh:maqh,xaid:xaid,_token:_token},
                    success:function(){
                       location.reload();
                    }
                    });
                }
        });
    });
    </script>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  
</body>
</html>
