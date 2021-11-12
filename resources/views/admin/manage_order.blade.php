@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt kê đơn hàng
    </div>
    <div class="row w3-res-tb">



    </div>
    <div class="table-responsive">
      <?php
      use Illuminate\Support\Facades\Session;
      $message = Session::get('message');
      if ($message) {
        echo '<span class="text-alert">' . $message . '</span>';
        Session::put('message', null);
      }
      ?>
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>

            <th>Thứ tự</th>
            <th>Mã đơn hàng</th>
            <th>Ngày tháng đặt hàng</th>
            <th>Tình trạng đơn hàng</th>
            <th>Lý do hủy</th>

            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @php
          $i = 0;
          @endphp
          @foreach($order as $key => $ord)
          @php
          $i++;
          @endphp
          <tr>
            <td><i>{{$i}}</i></label></td>
            <td>{{ $ord->order_code }}</td>
            <td>{{ $ord->created_at }}</td>
            <td>@if($ord->order_status==1)
            <span class="text text-success">Đơn hàng mới</span>
              @elseif($ord->order_status==2)
              <span class="text text-primary">Đã xử lý</span>
              @else
              <span class="text text-danger">Đơn hàng đã bị hủy</span>
              @endif
            </td>
            <td>  <span class="text text-danger">{{ $ord->order_destroy }}</span></td>

            <td>
              @if($ord->order_status !=3)
              <!-- Trigger the modal with a button -->
              <p><button type="button"  class="btn btn-danger" id="{{ $ord->order_code }}"  data-toggle="modal" data-target="#huydon">Hủy đơn hàng</button></p>

              <!-- Modal -->
              <div id="huydon" class="modal fade" role="dialog">
                <div class="modal-dialog">
                <form>
                @csrf
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Lý do hủy đơn</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                      <p><textarea class="lydohuydon" cols="70" rows="5"></textarea></p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                      <button type="button" id="{{$ord->order_code}}" onclick="huydonhang(this.id)" class="btn btn-primary" >Gửi lý do</button>
                    </div>
                  </div>
                </form>

                </div>
              </div>
              @endif
              <a href="{{URL::to('/view-order/'.$ord->order_code)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-eye text-success text-active"></i></a>
                @if($ord->order_status ==3)
              <a onclick="return confirm('Bạn có chắc là muốn xóa đơn hàng này ko?')" href="{{URL::to('/delete-order/'.$ord->order_code)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-times text-danger text"></i>
              </a>
              @endif
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
            {!!$order->links()!!}
          </ul>
        </div>
      </div>
    </footer>

  </div>
</div>
@endsection