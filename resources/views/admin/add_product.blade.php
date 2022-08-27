@extends('admin.dashboard.test')
@section('admin_content')
<div class="row" style="padding: 25px;">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                        </header>
                        <?php

                        use Illuminate\Support\Facades\Session;

                        $message = Session::get('message');
                        if ($message) {
                            echo '<div id="error" class="alert alert-success" role="alert">' . $message . '</div>';
                            Session::put('message', null);
                        }
                        ?>
                        <div class="panel-body">

                            <div class="position-center">
                                <form role="form" action="{{URL::to('/save-product')}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mã sản phẩm</label>
                                    <input type="text" data-validation="length" data-validation-length="min4" data-validation-error-msg="Làm ơn điền ít nhất 10 ký tự"
                                    value="{{old('product_code')}}"
                                    name="product_code" class="form-control " id="slug"  >
                                </div>
                                    @error('product_code')
                                    <p style="color: red; margin: 15px;">{{$message}}</p>
                                    @enderror
                                    <div class="form-group">
                                    <label for="exampleInputEmail1">Tên sản phẩm</label>
                                    <input type="text" data-validation="length" data-validation-length="min4" data-validation-error-msg="Làm ơn điền ít nhất 10 ký tự" name="product_name"
                                           class="form-control" value="{{old('product_name')}}" id="slug"  >
                                        @error('product_name')
                                        <p style="color: red; margin: 15px;">{{$message}}</p>
                                        @enderror
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">SL sản phẩm</label>
                                    <input type="text" data-validation="number" data-validation-error-msg="Làm ơn điền số lượng" name="product_quantity"
                                           class="form-control" value="{{old('product_quantity')}}"  id="exampleInputEmail1" placeholder="Điền số lượng">
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Ngày hết hạn</label>
                                    <input type="date" name="ExpirationDate"  class="form-control" value="{{old('ExpirationDate')}}">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Giá Bán</label>
                                    <input type="text" data-validation="number" data-validation-error-msg="Làm ơn điền số tiền" name="product_price"
                                           class="form-control" value="{{old('product_price')}}"  >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Giá sản phẩm</label>
                                    <input type="text" data-validation="number" data-validation-error-msg="Làm ơn điền số tiền" name="price_cost"
                                           class="form-control" value="{{old('price_cost')}}"  >
                                </div>
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Hình ảnh sản phẩm</label>
                                    <input type="file" name="product_image"
                                           class="form-control"  id="exampleInputEmail1">
                                      @error('product_image')
                                      <p style="color: red; margin: 15px;">{{$message}}</p>
                                      @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả sản phẩm</label>
                                    <textarea style="resize: none"  rows="8"
                                              class="form-control" value="{{old('product_desc')}}" name="product_desc" id="ckeditor1" placeholder="Mô tả sản phẩm"></textarea>
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">Danh mục sản phẩm</label>
                                      <select name="category_id" class="form-control input-sm m-bot15">
                                        @foreach($cate_product as $key => $cate)
                                            <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Hiển thị</label>
                                      <select name="product_status" class="form-control input-sm m-bot15">
                                         <option value="0">Hiển thị</option>
                                            <option value="1">Ẩn</option>
                                    </select>
                                </div>
                                <button  type="submit" class="btn btn-info">Thêm sản phẩm</button>
                                </form>
                            </div>

                        </div>
                    </section>
            </div>
    <script>

    </script>
@endsection
