<div class="container">
    <div class="row">
        <div class=" col-12 col-md-2">
            <div class="card px-2">
                <h2 class="text-center">Filter by</h2>
                <hr>
                <h4>Price:</h4>
                <div class="card-body">
                    <form id="price-range-form">
                        <label for="min-price" class="form-label">Min price: </label>
                        <span id="min-price-txt">$0</span>
                        <input type="range" class="form-range" min="0" max="99" id="min-price" step="1" value="0">
                        <label for="max-price" class="form-label">Max price: </label>
                        <span id="max-price-txt">$100</span>
                        <input type="range" class="form-range" min="1" max="100" id="max-price" step="1" value="100">
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-10">
            <div class="card">
                <div class="card-body">
                    <div class="row" id="display-items-div">

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="col-lg-4 col-md-4 col-6">
    <form>
        @csrf
        <input type="hidden" value="{{$product->product_id}}"
               class="cart_product_id_{{$product->product_id}}">
        <input type="hidden" value="{{$product->product_name}}"
               class="cart_product_name_{{$product->product_id}}">

        <input type="hidden" value="{{$product->product_quantity}}"  class="cart_product_quantity_{{$product->product_id}}">

        <input type="hidden" value="{{$product->product_image}}"  class="cart_product_image_{{$product->product_id}}">
        <input type="hidden" value="{{$product->product_price}}"  class="cart_product_price_{{$product->product_id}}">
        <input type="hidden" value="1" class="cart_product_qty_{{$product->product_id}}">
        <div class="cake_feature_item">
            <a href="{{URL::to('/chi-tiet/'.$product->product_id)}}">
                <div class="cake_img">
                    <img width="270" height="226"
                         src="{{URL::to('uploads/product/'.$product->product_image)}}"
                         alt="">
                </div>
                <div class="cake_text">
                    <h4>${{number_format($product->product_price,0,',','.')}}</h4>
                    <h3>{{$product->product_name}}</h3>
                </div>
            </a>
            <input type="button" value="Thêm giỏ hàng"
                   class="btn btn-default add-to-cart pest_btn"
                   data-id_product="{{$product->product_id}}" name="add-to-cart">
        </div>
        {{--                                            <a href="{{URL::to('/chi-tiet/'.$product->product_id)}}">--}}
        {{--                                                <img src="{{URL::to('uploads/product/'.$product->product_image)}}" alt="" />--}}
        {{--                                                <h2>{{number_format($product->product_price,0,',','.').' '.'VNĐ'}}</h2>--}}
        {{--                                                <p>{{$product->product_name}}</p>--}}
        {{--                                            </a>--}}
    </form>

</div>
