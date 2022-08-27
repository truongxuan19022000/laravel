@extends('layout')
@section('content')
    <!--================Contact Form Area =================-->
    <?php $billing_status = \Illuminate\Support\Facades\Session::get('Status_billing') ?>
    <section class="contact_form_area p_100">
        <div class="container">
            <div class="main_title">
                <h2>Đặt hàng thành công</h2>
                <h5>Vui lòng kiểm tra email về thông tin hóa đơn của đơn hàng của bạn</h5>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="row product_d_price">
                        <div class="col-lg-6">
                            <div class="product_img"><img class="img-fluid" width="405" height="329"
                                                          src="{{URL::to('uploads/product/'.$product_detail->product_image)}}" alt=""></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="product_details_text">
                                <h4>{{$product_detail->product_name}}</h4>
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequ untur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, </p>
                                <h5>Price :<span>{{$product_detail->product_price}}</span></h5>
                                <div class="quantity_box">
                                    <label for="quantity">Quantity :</label>
                                    <input type="text" placeholder="1" id="quantity">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-md-1">
                    <div class="contact_details">
                        <div class="contact_d_item">
                            <h3>Address :</h3>
                            <p>54B, Tailstoi Town 5238 <br /> La city, IA 522364</p>
                        </div>
                        <div class="contact_d_item">
                            <h5>Phone : <a href="tel:01372466790">01372.466.790</a></h5>
                            <h5>Email : <a href="mailto:rockybd1995@gmail.com">rockybd1995@gmail.com</a></h5>
                        </div>
                        <div class="contact_d_item">
                            <h3>Trạng thái đơn hàng :</h3>
                            <p class="text-danger">Đang chờ xác nhận</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
