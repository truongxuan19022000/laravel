@extends('layout')
@section('content')
    <form action="{{url('/update-cart')}}" method="POST">
        @csrf
        <section id="cart_items">
            <div class="container">
                <div class="breadcrumbs">
                    <ol class="breadcrumb">
                        <li><a href="{{URL::to('/')}}">Trang chủ</a></li>
                        <li class="active">Giỏ hàng của bạn</li>
                    </ol>
                </div>
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {!! session()->get('message') !!}
                    </div>
                @elseif(session()->has('error'))
                    <div class="alert alert-danger">
                        {!! session()->get('error') !!}
                    </div>
                @endif
                <div class="table-responsive cart_info">
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
                                <td><a class="btn btn-default check_out" href="{{url('/del-all-product')}}">Xóa tất
                                        cả</a></td>
                                <td>
                                    @if(Session::get('coupon'))
                                        <a class="btn btn-default check_out" href="{{url('/unset-coupon')}}">Xóa mã
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
        </section> <!--/#cart_items-->

        <div class="container">
            <div class="row cart_total_inner">

                <div class="col-lg-7">
                    <div class="cart_total_text">
                        <div class="cart_head">
                            Cart Total
                        </div>
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
                                                    <span>{{number_format($total-$total_coupon,0,',','.')}}đ</span></h5>
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
                                                <h5> Tổng đã giảm : <span>{{number_format($total_coupon,0,',','.')}}đ</span>
                                                </h5>
                                            </div>
                                        @endif
                                    @endforeach
                                @endif
                                <div class="sub_total">
                                    <h5> Phí vận chuyển : <span>Free</span></h5>
                                </div>
                            </td>
                            @php
                                if (!empty($total_coupon)){
                                    $total = $total - $total_coupon;
                                    }
                            @endphp
                            <div class="total">
                                <h4>Total <span>{{number_format($total,0,',','.')}}đ</span></h4>
                            </div>
                        @endif
                        <div class="cart_footer">
                            @if(Session::get('customer_id'))
                                <a class="pest_btn" href="{{url('/checkout')}}">Đặt hàng</a>
                            @else
                                <a class="pest_btn" href="{{url('/dang-nhap')}}">Đặt hàng</a>
                            @endif
                        </div>
                    </div>
                </div>
    </form>
    <div class="col-lg-5">
        @if(Session::get('cart'))
            <div class="cart_total_text">
                <div class="cart_head">
                    Apply Coupon
                </div>
                <form method="POST" action="{{url('/check-coupon')}}">
                    @csrf
                    <input type="text" class="form-control" name="coupon" placeholder="Nhập mã giảm giá"><br>
                    <input type="submit" class="btn btn-default check_coupon" name="check_coupon"
                           value="Tính mã giảm giá">

                </form>
            </div>
        @endif
    </div>
    </div>
    </div>

@endsection
