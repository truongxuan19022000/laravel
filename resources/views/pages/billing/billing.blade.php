@extends('layout')
@section('content')
    <div class="container">
        <div class="return_option">
            <h4>Returning customer? <a href="#">Click here to login</a></h4>
        </div>
        <div class="row">
            <div class="col-lg-7">
                <div class="main_title">
                    <h2>Billing Details</h2>
                </div>
                <div class="billing_form_area">
                    <form method="POST" class="billing_form row" action="{{route('vn_Payment')}}"
                          id="contactForm" novalidate="novalidate">
                        @csrf
                        <div class="form-group col-md-6">
                            <label for="first">Tên người nhận</label>
                            <input type="text" class="form-control shipping_name" id="shipping_name" name="shipping_name"
                                   value="{{old('shipping_name')}}"
                                   placeholder="Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="last">Số điện thoại người nhận</label>
                            <input type="text" class="form-control shipping_phone" id="shipping_phone" name="shipping_phone"
                                   value="{{old('shipping_phone')}}"
                                   placeholder="Phone">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="company">Email người gửi</label>
                            <input type="text" class="form-control shipping_email" id="shipping_email" name="shipping_email"
                                   value="{{old('shipping_email')}}"
                                   placeholder="Email">
                        </div>
                        @if(Session::get('shipping_city'))
                            <input type="text"  name="shipping_city" class="shipping_city"
                                   value="{{Session::get('shipping_city')}}"
                               hidden>
                        @endif
                        <div class="form-group col-md-12">
                            <label for="company">Địa chỉ người nhận</label>
                            <input type="text" class="form-control shipping_address" id="shipping_address" name="shipping_address"
                                   value="{{old('shipping_address')}}"
                                   placeholder="Address">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="address">Ghi chú đơn hàng</label>
                            <textarea name="shipping_notes" class="form-control shipping_notes"
                                      value="{{old('shipping_notes')}}"
                                      placeholder="Ghi chú đơn hàng của bạn" rows="5"></textarea>
                        </div>
                        @if(Session::get('fee'))
                            <input type="hidden" name="order_fee" class="order_fee"
                                   value="{{Session::get('fee')}}">
                        @else
                            <input type="hidden" name="order_fee" class="order_fee" value="10000">
                        @endif

                        @if(Session::get('coupon'))
                            @foreach(Session::get('coupon') as $key => $cou)
                                <input type="hidden" name="order_coupon" class="order_coupon"
                                       value="{{$cou['coupon_code']}}">
                            @endforeach
                        @else
                            <input type="hidden" name="order_coupon" class="order_coupon" value="no">
                        @endif
                        <div class="form-group col-md-6">
                            <label for="state1">Chọn hình thức thanh toán</label>
                            <select name="payment_select"
                                    class="form-control input-sm m-bot15 payment_select">
                                <option value="0" selected>Thanh toán VNPAY</option>
                                <option value="1">Tiền mặt</option>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <input type="submit" value="Xác nhận đơn hàng" name="redirect"
                                   class="btn btn-primary btn-sm send_order" hidden>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="exampleInputPassword1">Chọn thành phố</label>
                            <select name="city" id="city" class="form-control input-sm m-bot15 choose city">

                                <option value="">--Chọn tỉnh thành phố--</option>
                                @foreach($city as $key => $ci)
                                    <option value="{{$ci->matp}}">{{$ci->name_city}}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">Chọn quận huyện</label>
                            <select name="province" id="province"
                                    class="form-control input-sm m-bot15 province choose">
                                <option value="{{old('province')}}">--Chọn quận huyện--</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputPassword1">Chọn xã phường</label>
                            <select name="wards" id="wards" class="form-control input-sm m-bot15 wards">
                                <option value="{{old('wards')}}">--Chọn xã phường--</option>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <input type="button" value="Tính phí vận chuyển" name="calculate_order"
                                   class="btn btn-primary btn-sm calculate_delivery">
                        </div>

                    <div style="margin-top: 30px;" class="select_check col-md-12">
                        <div class="table-responsive cart_info">
                            <form action="{{url('/update-cart')}}" method="POST">
                                @csrf
                                <table class="table table-condensed">
                                    <thead>
                                    <tr class="cart_menu">
                                        <td class="image">Hình ảnh</td>
                                        <td class="description">Tên sản phẩm</td>
                                        <td class="price">Giá sản phẩm</td>
                                        <td class="quantity">Số lượng</td>
                                        <td class="total">Thành tiền</td>
                                        <td></td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(Session::get('cart')==true)
                                        @php
                                            $total = 0;
                                            $total_product = 0;
                                            @@$coupon = Session::get('coupon');
                                        @endphp
                                        @foreach(Session::get('cart') as $key => $cart)
                                            @php
                                                if (!empty($coupon)){
                                                 if ($cart['product_id'] == $coupon[0]['product_id']){
                                                    $subtotal = $cart['product_price']*$cart['product_qty'];
                                                    $total_product = $subtotal;
                                                  }
                                              }
                                                 $subtotal = $cart['product_price']*$cart['product_qty'];
                                                 $total+=$subtotal;
                                            @endphp

                                            <tr>
                                                <td class="cart_product">
                                                    <img src="{{asset('uploads/product/'.$cart['product_image'])}}"
                                                         width="90" alt="{{$cart['product_name']}}"/>
                                                </td>
                                                <td class="cart_description">
                                                    <h4><a href=""></a></h4>
                                                    <p>{{$cart['product_name']}}</p>
                                                </td>

                                                <td class="cart_price">
                                                    <p>{{number_format($cart['product_price'],0,',','.')}}đ</p>
                                                </td>
                                                <td class="cart_quantity">
                                                    <div class="cart_quantity_button">

                                                        <input class="cart_quantity" type="number" min="1"
                                                               name="cart_qty[{{$cart['session_id']}}]"
                                                               value="{{$cart['product_qty']}}">


                                                    </div>
                                                </td>
                                                <td class="cart_total">
                                                    <p class="cart_total_price">
                                                        {{number_format($subtotal,0,',','.')}}đ

                                                    </p>
                                                </td>
                                                <td class="cart_delete">
                                                    <a class="cart_quantity_delete"
                                                       href="{{url('/del-product/'.$cart['session_id'])}}"><i
                                                            class="fa fa-times"></i></a>
                                                </td>
                                            </tr>

                                        @endforeach
                                        <tr>
                                            <td><input type="submit" value="Cập nhật giỏ hàng" name="update_qty"
                                                       class="check_out btn btn-default btn-sm"></td>
                                            <td><a class="btn btn-default check_out" href="{{url('/del-all-product')}}">Xóa
                                                    tất
                                                    cả</a></td>
                                            <td>
                                                @if(Session::get('coupon'))
                                                    <a class="btn btn-default check_out"
                                                       href="{{url('/unset-coupon')}}">Xóa mã
                                                        khuyến mãi</a>
                                                @endif
                                            </td>

                                            <td>
                                            </td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    @else
                                        <tr>
                                            <td colspan="5">
                                                <center>
                                                    @php
                                                        echo '';
                                                    @endphp
                                                </center>
                                            </td>
                                        </tr>
                                    @endif
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="order_box_price">
                    <div class="main_title">
                        <h2>Your Order</h2>
                    </div>
                    <div class="payment_list">
                        <div class="price_single_cost">
                            @if(isset($total))
                                <td colspan="2">
                                    <div class="sub_total">
                                        <h5> Tổng tiền :<span>{{number_format($total,0,',','.')}}đ</span></h5>
                                    </div>
                                    @if(Session::get('coupon') && $total_product)
                                        @foreach(Session::get('coupon') as $key => $cou)
                                            @if($cou['coupon_condition']==1)
                                                <div class="sub_total">
                                                    <h5> Mã giảm : <span>{{$cou['coupon_number']}} %</span></h5>
                                                </div>
                                                @php
                                                    $total_coupon = ($total_product*$cou['coupon_number'])/100;
                                                    echo ' <div class="sub_total">
                                                    <h5>Tổng giảm: <span>'.number_format($total_coupon,0,',','.').'đ</span></h5>
                                                      </div>';
                                                @endphp
                                                <div class="sub_total">
                                                    <h5> Tổng đã giảm :
                                                        <span>{{number_format($total-$total_coupon,0,',','.')}}đ</span>
                                                    </h5>
                                                </div>
                                            @elseif($cou['coupon_condition']==2)
                                                <div class="sub_total">
                                                    <h5> Mã giảm : <span>{{number_format($cou['coupon_number'],0,',','.')}} đ</span>
                                                    </h5>
                                                </div>
                                                @php
                                                    $total_coupon = $total_product - $cou['coupon_number'];

                                                @endphp
                                                <div class="sub_total">
                                                    <h5> Tổng đã giảm :
                                                        <span>{{number_format($total,0,',','.')}}đ</span>
                                                    </h5>
                                                </div>
                                            @endif
                                        @endforeach
                                    @endif
                                    @if(Session::get('fee'))
                                            <div class="sub_total">
                                                <h5>Phí vận chuyển <span>{{number_format(Session::get('fee'),0,',','.')}}đ</span>
                                                    <a style="margin: 0px 10px;" class="cart_quantity_delete" href="{{url('/del-fee')}}"><i
                                                            class="fa fa-times"></i></a>
                                                </h5>
                                            </div>
                                        <?php $total_after_fee = $total + Session::get('fee'); ?>
                                    @endif

                                </td>
                                @php
                                    if (!empty($total_coupon)){
                                        $total = $total - $total_coupon;
                                        }
                                @endphp
                                <div class="total">
                                    <h3>Total <span>{{@@$total_after_fee ? number_format($total_after_fee,0,',','.') : number_format($total,0,',','.')}}đ</span></h3>
                                    <input type="text"  name="total_price" class="shipping_city"
                                           value="{{@@$total_after_fee ? $total_after_fee : $total}}"
                                           hidden>
                                </div>
                            @endif
                        </div>
                        <div id="accordion" class="accordion_area">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                                aria-expanded="true" aria-controls="collapseOne">
                                            Direct Bank Transfer
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                     data-parent="#accordion">
                                    <div class="card-body">
                                        Make your payment directly into our bank account. Please use your Order ID as
                                        the payment reference. Your order won’t be shipped until the funds have cleared
                                        in our account.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                                data-target="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo">
                                            Check Payment
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                     data-parent="#accordion">
                                    <div class="card-body">
                                        Make your payment directly into our bank account. Please use your Order ID as
                                        the payment reference. Your order won’t be shipped until the funds have cleared
                                        in our account.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                                data-target="#collapseThree" aria-expanded="false"
                                                aria-controls="collapseThree">
                                            Paypal
                                            <img src="img/checkout-card.png" alt="">
                                        </button>
                                        <a href="#">What is PayPal?</a>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                     data-parent="#accordion">
                                    <div class="card-body">
                                        Make your payment directly into our bank account. Please use your Order ID as
                                        the payment reference. Your order won’t be shipped until the funds have cleared
                                        in our account.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" name="redirect" value="submit" class="btn pest_btn send_order">Thanh toán đơn hàng</button>
                    </div>
                </div>
            </div>
        </div>
        </form>

    </div>
    <form class="billing_form row" novalidate="novalidate">
    @csrf
    </form>

@endsection
