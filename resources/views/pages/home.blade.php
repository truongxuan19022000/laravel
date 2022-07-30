@extends('layout')
@section('content')
    <!--================Product Area =================-->
        <div class="container">
        		<div class="row product_inner_row">
        			<div class="col-lg-9">
        				<div class="row m0 product_task_bar">
							<div class="product_task_inner">
								<div class="float-left">
									<a class="active" href="#"><i class="fa fa-th-large" aria-hidden="true"></i></a>
									<a href="#"><i class="fa fa-th-list" aria-hidden="true"></i></a>
									<span>Showing 1 - 10 of 55 results</span>
								</div>
							</div>
        				</div>
        				<div class="row product_item_inner">

                        @foreach($all_product as $key => $product)
						@if($product->ExpirationDate>$today)
                                    <div class="col-lg-4 col-md-4 col-6">
                                        <form>
                                            @csrf
                                            <input type="hidden" value="{{$product->product_id}}" class="cart_product_id_{{$product->product_id}}">
                                            <input type="hidden" value="{{$product->product_name}}" class="cart_product_name_{{$product->product_id}}">

                                            <input type="hidden" value="{{$product->product_quantity}}" class="cart_product_quantity_{{$product->product_id}}">

                                            <input type="hidden" value="{{$product->product_image}}" class="cart_product_image_{{$product->product_id}}">
                                            <input type="hidden" value="{{$product->product_price}}" class="cart_product_price_{{$product->product_id}}">
                                            <input type="hidden" value="1" class="cart_product_qty_{{$product->product_id}}">
                                            <div class="cake_feature_item">
                                                <a href="{{URL::to('/chi-tiet/'.$product->product_id)}}">
                                                <div class="cake_img">
                                                    <img width="270" height="226" src="{{URL::to('public/uploads/product/'.$product->product_image)}}" alt="">
                                                </div>
                                                <div class="cake_text">
{{--                                                    <h4>{{number_format($product->product_price,0,',','.').' '.'VNĐ'}}</h4>--}}
                                                    <h4>${{number_format($product->product_price,0,',','.').' '.'VNĐ'}}</h4>
                                                    <h3>{{$product->product_name}}</h3>
                                                </div>
                                                </a>
                                                <input type="button" value="Thêm giỏ hàng"  class="btn btn-default add-to-cart pest_btn" data-id_product="{{$product->product_id}}" name="add-to-cart">
                                            </div>
{{--                                            <a href="{{URL::to('/chi-tiet/'.$product->product_id)}}">--}}
{{--                                                <img src="{{URL::to('public/uploads/product/'.$product->product_image)}}" alt="" />--}}
{{--                                                <h2>{{number_format($product->product_price,0,',','.').' '.'VNĐ'}}</h2>--}}
{{--                                                <p>{{$product->product_name}}</p>--}}
{{--                                            </a>--}}
                                        </form>

                                    </div>
						@endif
                        @endforeach

        				</div>
        				<div class="product_pagination">
        					<div class="left_btn">
        						<a href="#"><i class="lnr lnr-arrow-left"></i> New posts</a>
        					</div>
        					<div class="middle_list">
								<nav aria-label="Page navigation example">
									<ul class="pagination">
                                    {!!$all_product->links()!!}
									</ul>
								</nav>
        					</div>
        					<div class="right_btn"><a href="#">Older posts <i class="lnr lnr-arrow-right"></i></a></div>
        				</div>
        			</div>
        			<div class="col-lg-3">
        				<div class="product_left_sidebar">
        					<aside class="left_sidebar search_widget">
        						<div class="input-group">
									<input type="text" class="form-control" placeholder="Enter Search Keywords">
									<div class="input-group-append">
										<button class="btn" type="button"><i class="icon icon-Search"></i></button>
									</div>
								</div>
        					</aside>
        					<aside class="left_sidebar p_catgories_widget">
        						<div class="p_w_title">
        							<h3>Product Categories</h3>
        						</div>
        						<ul class="list_style">
                                @foreach($category as $key => $cate)
        							<li><a href="{{URL::to('/danh-muc/'.$cate->slug_category_product)}}">{{$cate->category_name}}</a></li>
                                @endforeach
        						</ul>
        					</aside>
        					<aside class="left_sidebar p_price_widget">
        						<div class="p_w_title">
        							<h3>Filter By Price</h3>
        						</div>
        						<div class="filter_price">
									<div id="slider-range"></div>
       								<label for="amount">Price range:</label>
									<input type="text" id="amount" readonly />
       								<a href="#">Filter</a>
        						</div>
        					</aside>
        					<aside class="left_sidebar p_sale_widget">
        						<div class="p_w_title">
        							<h3>Top Sale Products</h3>
        						</div>
        						<div class="media">
        							<div class="d-flex">
        								<img src="public/layout/img/product/sale-product/s-product-1.jpg" alt="">
        							</div>
        							<div class="media-body">
        								<a href="#"><h4>Brown Cake</h4></a>
        								<ul class="list_style">
        									<li><a href="#"><i class="fa fa-star-o"></i></a></li>
        									<li><a href="#"><i class="fa fa-star-o"></i></a></li>
        									<li><a href="#"><i class="fa fa-star-o"></i></a></li>
        									<li><a href="#"><i class="fa fa-star-o"></i></a></li>
        									<li><a href="#"><i class="fa fa-star-o"></i></a></li>
        								</ul>
        								<h5>$29</h5>
        							</div>
        						</div>
        						<div class="media">
        							<div class="d-flex">
        								<img src="public/layout/img/product/sale-product/s-product-2.jpg" alt="">
        							</div>
        							<div class="media-body">
        								<a href="#"><h4>Brown Cake</h4></a>
        								<ul class="list_style">
        									<li><a href="#"><i class="fa fa-star-o"></i></a></li>
        									<li><a href="#"><i class="fa fa-star-o"></i></a></li>
        									<li><a href="#"><i class="fa fa-star-o"></i></a></li>
        									<li><a href="#"><i class="fa fa-star-o"></i></a></li>
        									<li><a href="#"><i class="fa fa-star-o"></i></a></li>
        								</ul>
        								<h5>$29</h5>
        							</div>
        						</div>
        						<div class="media">
        							<div class="d-flex">
        								<img src="public/layout/img/product/sale-product/s-product-3.jpg" alt="">
        							</div>
        							<div class="media-body">
        								<a href="#"><h4>Brown Cake</h4></a>
        								<ul class="list_style">
        									<li><a href="#"><i class="fa fa-star-o"></i></a></li>
        									<li><a href="#"><i class="fa fa-star-o"></i></a></li>
        									<li><a href="#"><i class="fa fa-star-o"></i></a></li>
        									<li><a href="#"><i class="fa fa-star-o"></i></a></li>
        									<li><a href="#"><i class="fa fa-star-o"></i></a></li>
        								</ul>
        								<h5>$29</h5>
        							</div>
        						</div>
        						<div class="media">
        							<div class="d-flex">
        								<img src="public/layout/img/product/sale-product/s-product-4.jpg" alt="">
        							</div>
        							<div class="media-body">
        								<a href="#"><h4>Brown Cake</h4></a>
        								<ul class="list_style">
        									<li><a href="#"><i class="fa fa-star-o"></i></a></li>
        									<li><a href="#"><i class="fa fa-star-o"></i></a></li>
        									<li><a href="#"><i class="fa fa-star-o"></i></a></li>
        									<li><a href="#"><i class="fa fa-star-o"></i></a></li>
        									<li><a href="#"><i class="fa fa-star-o"></i></a></li>
        								</ul>
        								<h5>$29</h5>
        							</div>
        						</div>
        					</aside>
        				</div>
        			</div>
        		</div>
        	</div>

        <!--================End Product Area =================-->

@endsection
