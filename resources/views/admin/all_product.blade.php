@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt kê sản phẩm
    </div>
    <div class="table-responsive" style="padding: 25px;">
      <?php

      use Illuminate\Support\Facades\Session;

      $message = Session::get('message');
      if ($message) {
        echo '<div id="error" class="alert alert-success" role="alert">' . $message . '</div>';
        Session::put('message', null);
      }
      ?>
      <table id="product_table" class="table table-striped table-bordered" style="width:100%">
        <thead>
          <tr>
            <th>STT</th>
            <th>Tên sản phẩm</th>
            <th>SL</th>
            <th>Giá bán</th>
            <th>Giá gốc</th>
            <th>Hình sản phẩm</th>
            <th>Danh mục</th>
            <th>Ngày hết hạn</th>
            <th>Hạn</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          <?php $stt=1;?>
          @foreach($all_product as $key => $pro)
          <tr>
            <td><?php echo $stt++ ?></td>
            <td>{{ $pro->product_name }}</td>
            <td>{{ $pro->product_quantity }}</td>
            <td>{{ number_format($pro->product_price,0,',','.') }}đ</td>
            <td>{{ number_format($pro->price_cost,0,',','.') }}đ</td>
            <td><img src="{{asset('uploads/product/'.$pro->product_image)}}" height="100" width="100"></td>
            <td>{{ $pro->category_name }}</td>
            <td>{{ $pro->ExpirationDate }}</td>
            <td>
              @if(\Carbon\Carbon::parse($pro->ExpirationDate) > $today)
              <span class="text text-success">Còn hạn</span>
              @else
              <span class="text text-danger">Hết hạn</span>
              @endif
            </td>


            <td>
              @if(\Carbon\Carbon::parse($pro->ExpirationDate) > $today)
              <a href="{{URL::to('/edit-product/'.$pro->product_id)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i></a>
                @endif
              <a onclick="return confirm('Bạn có chắc là muốn xóa sản phẩm này ko?')" href="{{URL::to('/delete-product/'.$pro->product_id)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-times text-danger text"></i>
              </a>
            </td>
          </tr>
          @endforeach
        </tbody>
          <tfoot>
          <tr>
              <th>STT</th>
              <th>Tên sản phẩm</th>
              <th>Số lượng</th>
              <th>Giá bán</th>
              <th>Giá gốc</th>
              <th>Hình sản phẩm</th>
              <th>Danh mục</th>
              <th>Ngày sản xuất</th>
              <th>Ngày hết hạn</th>
              <th>Hạn</th>
              <th style="width:30px;"></th>
          </tr>
          </tfoot>
      </table>
            <!-----import data---->
            <form action="{{url('importProduct-csv')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <input type="file" name="file" accept=".xlsx"><br>

                <input type="submit" value="Import file Excel" name="import_csv" class="btn btn-warning">
            </form>

            <!-----export data---->
            <form action="{{url('exportProduct-csv')}}" method="POST" style="margin-top: 10px;">
                @csrf
                <input type="submit" value="Export file Excel" name="export_csv" class="btn btn-success">
            </form>
    </div>
    <footer class="panel-footer">
      <div class="row">
        <div class="col-sm-7 text-right text-center-xs">

        </div>
      </div>
    </footer>
  </div>
</div>
@push('scripts')
    <script>
        $(document).ready( function () {
            $('#product_table').DataTable();
        } );
    </script>
@endpush
@endsection
