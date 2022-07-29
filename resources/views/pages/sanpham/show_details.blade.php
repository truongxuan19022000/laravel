@extends('layout')
@section('content')
    <!--================Product Details Area =================-->
        <div class="container">
            <div class="row product_d_price">
                <div class="col-lg-6">
                    <div class="product_img"><img class="img-fluid" src="img/product/product-details-1.jpg" alt=""></div>
                </div>
                <div class="col-lg-6">
                    <div class="product_details_text">
                        <h4>Brown Cake</h4>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequ untur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, </p>
                        <h5>Price :<span>$24.5</span></h5>
                        <div class="quantity_box">
                            <label for="quantity">Quantity :</label>
                            <input type="text" placeholder="1" id="quantity">
                        </div>
                        <a class="pink_more" href="#">Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="product_tab_area">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Descripton</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Specification</a>
                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Review (0)</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    </div>
                </div>
            </div>
        </div>

    <!--================Similar Product Area =================-->
    <section class="similar_product_area p_100">
        <div class="container">
            <div class="main_title">
                <h2>Similar Products</h2>
            </div>
            <div class="row similar_product_inner">
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="cake_feature_item">
                        <div class="cake_img">
                            <img src="img/cake-feature/c-feature-1.jpg" alt="">
                        </div>
                        <div class="cake_text">
                            <h4>$29</h4>
                            <h3>Strawberry Cupcakes</h3>
                            <a class="pest_btn" href="#">Add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="cake_feature_item">
                        <div class="cake_img">
                            <img src="img/cake-feature/c-feature-2.jpg" alt="">
                        </div>
                        <div class="cake_text">
                            <h4>$29</h4>
                            <h3>Strawberry Cupcakes</h3>
                            <a class="pest_btn" href="#">Add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="cake_feature_item">
                        <div class="cake_img">
                            <img src="img/cake-feature/c-feature-3.jpg" alt="">
                        </div>
                        <div class="cake_text">
                            <h4>$29</h4>
                            <h3>Strawberry Cupcakes</h3>
                            <a class="pest_btn" href="#">Add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="cake_feature_item">
                        <div class="cake_img">
                            <img src="img/cake-feature/c-feature-4.jpg" alt="">
                        </div>
                        <div class="cake_text">
                            <h4>$29</h4>
                            <h3>Strawberry Cupcakes</h3>
                            <a class="pest_btn" href="#">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Similar Product Area =================-->
    <!--================End Product Details Area =================-->

    {{--    @foreach($product_details as $key => $value)--}}
{{--        <div class="product-details"><!--product-details-->--}}
{{--            <div class="col-sm-5">--}}
{{--                <div class="view-product">--}}
{{--                    <img src="{{URL::to('/public/uploads/product/'.$value->product_image)}}" alt=""/>--}}
{{--                    <h3>ZOOM</h3>--}}
{{--                </div>--}}
{{--                <div id="similar-product" class="carousel slide" data-ride="carousel">--}}

{{--                    <!-- Wrapper for slides -->--}}
{{--                    <div class="carousel-inner">--}}

{{--                        <div class="item active">--}}
{{--                            <a href=""><img src="{{URL::to('public/frontend/images/similar1.jpg')}}" alt=""></a>--}}
{{--                            <a href=""><img src="{{URL::to('public/frontend/images/similar2.jpg')}}" alt=""></a>--}}
{{--                            <a href=""><img src="{{URL::to('public/frontend/images/similar3.jpg')}}" alt=""></a>--}}
{{--                        </div>--}}


{{--                    </div>--}}

{{--                    <!-- Controls -->--}}
{{--                    <a class="left item-control" href="#similar-product" data-slide="prev">--}}
{{--                        <i class="fa fa-angle-left"></i>--}}
{{--                    </a>--}}
{{--                    <a class="right item-control" href="#similar-product" data-slide="next">--}}
{{--                        <i class="fa fa-angle-right"></i>--}}
{{--                    </a>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--            <div class="col-sm-7">--}}
{{--                <div class="product-information"><!--/product-information-->--}}
{{--                    <img src="images/product-details/new.jpg" class="newarrival" alt=""/>--}}
{{--                    <h2>{{$value->product_name}}</h2>--}}
{{--                    <p>Mã ID: {{$value->product_id}}</p>--}}
{{--                    <img src="images/product-details/rating.png" alt=""/>--}}

{{--                    <form action="{{URL::to('/save-cart')}}" method="POST">--}}
{{--                        @csrf--}}
{{--                        <input type="hidden" value="{{$value->product_id}}"--}}
{{--                               class="cart_product_id_{{$value->product_id}}">--}}

{{--                        <input type="hidden" value="{{$value->product_name}}"--}}
{{--                               class="cart_product_name_{{$value->product_id}}">--}}

{{--                        <input type="hidden" value="{{$value->product_image}}"--}}
{{--                               class="cart_product_image_{{$value->product_id}}">--}}

{{--                        <input type="hidden" value="{{$value->product_quantity}}"--}}
{{--                               class="cart_product_quantity_{{$value->product_id}}">--}}

{{--                        <input type="hidden" value="{{$value->product_price}}"--}}
{{--                               class="cart_product_price_{{$value->product_id}}">--}}

{{--                        <span>--}}
{{--									<span>{{number_format($value->product_price,0,',','.').'VNĐ'}}</span>--}}

{{--									<label>Số lượng:</label>--}}
{{--									<input name="qty" type="number" min="1"--}}
{{--                                           class="cart_product_qty_{{$value->product_id}}" value="1"/>--}}
{{--									<input name="productid_hidden" type="hidden" value="{{$value->product_id}}"/>--}}
{{--								</span>--}}
{{--                        <input type="button" value="Thêm giỏ hàng" class="btn btn-primary btn-sm add-to-cart"--}}
{{--                               data-id_product="{{$value->product_id}}" name="add-to-cart">--}}
{{--                    </form>--}}

{{--                    <p><b>Tình trạng:</b> Còn hàng</p>--}}
{{--                    <p><b>Điều kiện:</b> Mơi 100%</p>--}}
{{--                    <p><b>Số lượng kho còn:</b> {{$value->product_quantity}}</p>--}}
{{--                    <p><b>Danh mục:</b> {{$value->category_name}}</p>--}}
{{--                    <a href=""><img src="images/product-details/share.png" class="share img-responsive" alt=""/></a>--}}
{{--                </div><!--/product-information-->--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="category-tab shop-details-tab"><!--category-tab-->--}}
{{--            <div class="col-sm-12">--}}
{{--                <ul class="nav nav-tabs">--}}
{{--                    <li class="active"><a href="#details" data-toggle="tab">Mô tả</a></li>--}}
{{--                    <li><a href="#companyprofile" data-toggle="tab">Chi tiết sản phẩm</a></li>--}}

{{--                    <li><a href="#reviews" data-toggle="tab">Đánh giá</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--            <div class="tab-content">--}}
{{--                <div class="tab-pane fade active in" id="details">--}}
{{--                    <p>{!!$value->product_desc!!}</p>--}}

{{--                </div>--}}

{{--                <div class="tab-pane fade" id="companyprofile">--}}
{{--                    <p>{!!$value->product_content!!}</p>--}}


{{--                </div>--}}

{{--                <div class="tab-pane fade" id="reviews">--}}
{{--                    <div class="col-sm-12">--}}
{{--                        <ul>--}}
{{--                            <li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>--}}
{{--                            <li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>--}}
{{--                            <li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>--}}
{{--                        </ul>--}}
{{--                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut--}}
{{--                            labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco--}}
{{--                            laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in--}}
{{--                            voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>--}}
{{--                        <p><b>Write Your Review</b></p>--}}

{{--                        <form action="#">--}}
{{--										<span>--}}
{{--											<input type="text" placeholder="Your Name"/>--}}
{{--											<input type="email" placeholder="Email Address"/>--}}
{{--										</span>--}}
{{--                            <textarea name=""></textarea>--}}
{{--                            <b>Rating: </b> <img src="images/product-details/rating.png" alt=""/>--}}
{{--                            <button type="button" class="btn btn-default pull-right">--}}
{{--                                Submit--}}
{{--                            </button>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    @endforeach--}}
{{--    <div class="recommended_items"><!--recommended_items-->--}}
{{--        <h2 class="title text-center">Sản phẩm liên quan</h2>--}}

{{--        <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">--}}
{{--            <div class="carousel-inner">--}}
{{--                <div class="item active">--}}
{{--                    @foreach($relate as $key => $lienquan)--}}
{{--                        <div class="col-sm-4">--}}
{{--                            <div class="product-image-wrapper">--}}
{{--                                <div class="single-products">--}}
{{--                                    <div class="productinfo text-center product-related">--}}
{{--                                        <img src="{{URL::to('public/uploads/product/'.$lienquan->product_image)}}"--}}
{{--                                             alt=""/>--}}
{{--                                        <h2>{{number_format($lienquan->product_price,0,',','.').' '.'VNĐ'}}</h2>--}}
{{--                                        <p>{{$lienquan->product_name}}</p>--}}

{{--                                    </div>--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    @endforeach--}}


{{--                </div>--}}

{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}
    {{--   <ul class="pagination pagination-sm m-t-none m-b-none">
       {!!$relate->links()!!}
      </ul> --}}

@endsection
