@extends('admin_layout')
@section('admin_content')
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Liệt kê sản phẩm sắp đến hạn
            </div>
            <div class="row w3-res-tb">
                <div class="col-sm-5 m-b-xs">
                    <select class="input-sm form-control w-sm inline v-middle">
                        <option value="0">Bulk action</option>
                        <option value="1">Delete selected</option>
                        <option value="2">Bulk edit</option>
                        <option value="3">Export</option>
                    </select>
                    <button class="btn btn-sm btn-default">Apply</button>
                </div>
                <div class="col-sm-4">
                </div>
                <div class="col-sm-3">
                    <div class="input-group">
                        <input type="text" class="input-sm form-control" placeholder="Search">
                        <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Go!</button>
          </span>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
<!--                --><?php
//                use Illuminate\Support\Facades\Session;
//                $message = Session::get('message');
//                if($message){
//                    echo '<div id="error" class="alert alert-success" role="alert">' . $message . '</div>';
//                    Session::put('message', null);
//                }
//                ?>
                <table class="table table-striped b-t b-light">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Giá bán</th>
                        <th>Giá gốc</th>
                        <th>Hình sản phẩm</th>
                        <th>Ngày sản xuất</th>
                        <th>Ngày hết hạn</th>
                        <th>Hạn</th>
                        <th style="width:30px;"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $key => $pro)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{ $pro->product_name }}</td>
                            <td>{{ $pro->product_quantity }}</td>
                            <td>{{ number_format($pro->product_price,0,',','.') }}đ</td>
                            <td>{{ number_format($pro->price_cost,0,',','.') }}đ</td>
                            <td><img src="{{asset('uploads/product/'.$pro->product_image)}}" height="100" width="100"></td>
{{--                            <td>{{ $pro->category_name }}</td>--}}
                            <td>{{ $pro->ManufactureDate }}</td>
                            <td>{{ $pro->ExpirationDate }}</td>
                            <td>
                                    <span class="text text-success">Còn hạn</span>
                            </td>


                            <td>
                                    <a href="{{route('add_coupon',['product_id' => $pro->product_id])}}" class="active styling-edit" ui-toggle-class="">
                                        <i class="fa fa-gift text-success text-active"></i></a>
                                <a onclick="return confirm('Bạn có chắc là muốn xóa sản phẩm này ko?')" href="{{URL::to('/delete-product/'.$pro->product_id)}}" class="active styling-edit" ui-toggle-class="">
                                    <i class="fa fa-times text-danger text"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <footer class="panel-footer">
                <div class="row">

                    <div class="col-sm-5 text-center">
                        <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
                    </div>
                    <div class="col-sm-7 text-right text-center-xs">
                        <ul class="pagination pagination-sm m-t-none m-b-none">
{{--                            {!!$all_category_product->links()!!}--}}
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection
