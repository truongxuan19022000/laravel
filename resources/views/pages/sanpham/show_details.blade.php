@extends('layout')
@section('content')
    <!--================Product Details Area =================-->
        <div class="container" style="margin: 50px auto;">
            @foreach($product_details as $key => $value)
            <div class="row product_d_price">
                <div class="col-lg-6">
                    <div class="product_img"><img class="img-fluid" width="405" height="329"
                                                  src="{{URL::to('uploads/product/'.$value->product_image)}}" alt=""></div>
                </div>
                <div class="col-lg-6">
                    <div class="product_details_text">
                        <form action="{{URL::to('/save-cart')}}" method="POST">
                            @csrf
                            <input type="hidden" value="{{$value->product_id}}"
                                   class="cart_product_id_{{$value->product_id}}">

                            <input type="hidden" value="{{$value->product_name}}"
                                   class="cart_product_name_{{$value->product_id}}">

                            <input type="hidden" value="{{$value->product_image}}"
                                   class="cart_product_image_{{$value->product_id}}">

                            <input type="hidden" value="{{$value->product_quantity}}"
                                   class="cart_product_quantity_{{$value->product_id}}">

                            <input type="hidden" value="{{$value->product_price}}"
                                   class="cart_product_price_{{$value->product_id}}">
                        <h4>{{$value->product_name}}</h4>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequ untur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, </p>
                        <h5>Price: <span>{{ number_format($value->product_price,0,',','.') }} VNĐ</span></h5>
                        <div class="quantity_box">
                            <label for="quantity">Quantity :</label>
                            <input name="qty" type="number" min="1" placeholder="1" id="quantity"
                                   class="cart_product_qty_{{$value->product_id}}" value="1"/>
                        </div>
                            <input type="button" value="Thêm giỏ hàng" class="btn pink_more btn-sm add-to-cart"
                                   data-id_product="{{$value->product_id}}" name="add-to-cart" />
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
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
                @foreach($relate as $key => $lienquan)
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="cake_feature_item">
                        <div class="cake_img">
                            <img width="270" height="226" src="{{URL::to('uploads/product/'.$lienquan->product_image)}}" alt="">
                        </div>
                        <div class="cake_text">
                            <h4>{{number_format($lienquan->product_price,0,',','.').' '.'VNĐ'}}</h4>
                            <h3>{{$lienquan->product_name}}</h3>
                            <a class="pest_btn" href="#">Add to cart</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--================End Similar Product Area =================-->
    <!--================End Product Details Area =================-->
@endsection
