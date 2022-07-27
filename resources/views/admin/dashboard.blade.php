@extends('admin_layout')
@section('admin_content')
<div class="container-fluid">
  <style type="text/css">
    p.title_thongke {
      text-align: center;
      font-size: 20px;
      font-weight: bold;
    }
  </style>
  <div class="row">
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-info">
        <div class="inner">
          <h3>150</h3>

          <p>New Orders</p>
        </div>
        <div class="icon">
          <i class="ion ion-bag"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-success">
        <div class="inner">
          <h3>53<sup style="font-size: 20px">%</sup></h3>

          <p>Bounce Rate</p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-warning">
        <div class="inner">
          <h3>44</h3>

          <p>User Registrations</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-danger">
        <div class="inner">
          <h3>65</h3>

          <p>Unique Visitors</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
  </div>
  <!-- /.row -->
  <p class="title_thongke">Thống kê đơn hàng doanh số</p>

  <div class="row ">

    <form autocomplete="off">
      @csrf

      <div class="col-md-2">
        <p>Từ ngày: <input type="date" id="datepicker" class="form-control"></p>

        <input type="button" id="btn-dashboard-filter" class="btn btn-primary btn-sm" value="Lọc kết quả"></p>

      </div>

      <div class="col-md-2">
        <p>Đến ngày: <input type="date" id="datepicker2" class="form-control"></p>

      </div>

      <div class="col-md-2">
        <p>
          Lọc theo:
          <select class="dashboard-filter form-control">
            <option>--Chọn--</option>
            <option value="thang9">Trong tháng 9</option>
            <option value="7ngay">7 ngày qua</option>
            <option value="thangtruoc">tháng trước</option>
            <option value="thangnay">tháng này</option>
            <option value="365ngayqua">365 ngày qua</option>
          </select>
        </p>
      </div>

    </form>


  </div>
  <div id="myfirstchart" style="height: 250px;"></div>


</div>

<div class="row">

  <div class="col-md-4 col-xs-12">
    <p class="title_thongke">Thống kê tổng sản phẩm bài viết đơn hàng</p>
    <div id="donut"></div>
  </div>
  <!-- /.card -->
  <div class="card" style="margin:0 50px;" >
    <div class="card-header border-0">
      <h3 class="card-title">Online Store Overview</h3>
      <div class="card-tools">
        <a href="#" class="btn btn-sm btn-tool">
          <i class="fas fa-download"></i>
        </a>
        <a href="#" class="btn btn-sm btn-tool">
          <i class="fas fa-bars"></i>
        </a>
      </div>
    </div>
    <div class="card-body">
      <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
        <p class="text-success text-xl">
          <i class="ion ion-ios-refresh-empty"></i>
        </p>
        <p class="d-flex flex-column text-right">
          <span class="font-weight-bold">
            <i class="ion ion-android-arrow-up text-success"></i> 12%
          </span>
          <span class="text-muted">CONVERSION RATE</span>
        </p>
      </div>
      <!-- /.d-flex -->
      <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
        <p class="text-warning text-xl">
          <i class="ion ion-ios-cart-outline"></i>
        </p>
        <p class="d-flex flex-column text-right">
          <span class="font-weight-bold">
            <i class="ion ion-android-arrow-up text-warning"></i> 0.8%
          </span>
          <span class="text-muted">SALES RATE</span>
        </p>
      </div>
      <!-- /.d-flex -->
      <div class="d-flex justify-content-between align-items-center mb-0">
        <p class="text-danger text-xl">
          <i class="ion ion-ios-people-outline"></i>
        </p>
        <p class="d-flex flex-column text-right">
          <span class="font-weight-bold">
            <i class="ion ion-android-arrow-down text-danger"></i> 1%
          </span>
          <span class="text-muted">REGISTRATION RATE</span>
        </p>
      </div>
      <!-- /.d-flex -->
    </div>
  </div>
  
</div>
</div>
<div class="card">
  <div class="card-header border-0">
    <div class="d-flex justify-content-between">
      <h3 class="card-title">Sales</h3>
      <a href="javascript:void(0);">View Report</a>
    </div>
  </div>
  <div class="card-body">
    <div class="d-flex">
      <p class="d-flex flex-column">
        <span class="text-bold text-lg">$18,230.00</span>
        <span>Sales Over Time</span>
      </p>
      <p class="ml-auto d-flex flex-column text-right">
        <span class="text-success">
          <i class="fas fa-arrow-up"></i> 33.1%
        </span>
        <span class="text-muted">Since last month</span>
      </p>
    </div>
    <!-- /.d-flex -->

    <div class="position-relative mb-4">
      <canvas id="sales-chart" height="200"></canvas>
    </div>

    <div class="d-flex flex-row justify-content-end">
      <span class="mr-2">
        <i class="fas fa-square text-primary"></i> This year
      </span>

      <span>
        <i class="fas fa-square text-gray"></i> Last year
      </span>
    </div>
  </div>
</div>

<!-- /.card -->
@endsection