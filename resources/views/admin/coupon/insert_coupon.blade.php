@extends('admin.dashboard.test')
@section('admin_content')
<div class="row" style="padding: 25px;">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                        </header>
                         <?php
                            $message = Session::get('message');
                            if($message){
                                echo '<span class="text-alert">'.$message.'</span>';
                                Session::put('message',null);
                            }
                            ?>
                        <div class="panel-body">

                            <div class="position-center">
                                <form role="form" action="{{URL::to('/insert-coupon-code')}}" method="post">
                                    @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên mã giảm giá</label>
                                    <input type="text" name="coupon_name" class="form-control" id="exampleInputEmail1" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mã giảm giá</label>
                                    <input type="text" name="coupon_code" class="form-control" id="exampleInputEmail1" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Số lượng mã</label>
                                      <input type="text" name="coupon_time" class="form-control" id="exampleInputEmail1" >
                                </div>
                                    @if(!empty($product))
                                    <div class="form-group">
                                    <label for="exampleInputPassword1">Tên sản phẩm</label>
                                      <input type="text" class="form-control"
                                             id="exampleInputEmail1" value="{{$product->product_name}}" disabled>
                                        <input type="hidden" name="product_id" value="{{$product->product_id}}">
                                    </div>
                                    @endif
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Tính năng mã</label>
                                     <select name="coupon_condition" class="form-control input-sm m-bot15">
                                             <option value="0">----Chọn-----</option>
                                            <option value="1">Giảm theo phần trăm</option>
                                            <option value="2">Giảm theo tiền</option>

                                    </select>
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">Nhập số % hoặc tiền giảm</label>
                                     <input type="text" name="coupon_number" class="form-control" id="exampleInputEmail1" >
                                </div>
                                    <div class="form-group">
                                    <label for="exampleInputPassword1">Ngày hết hạn</label>
                                     <input type="date" name="end_date_coupon" class="form-control" id="exampleInputEmail1" >
                                </div>


                                <button type="submit"  class="btn btn-info">Thêm mã</button>
                                </form>
                            </div>

                        </div>
                    </section>

            </div>
@endsection
