@extends('admin_layout')
@section('admin_content')
    @push('styles')
    @endpush
    <div class="container-fluid">
        <style type="text/css">
            p.title_thongke {
                text-align: center;
                font-size: 20px;
                font-weight: bold;
            }
        </style>
        <div class="row invoiceTop">
            <ul>
                <li onclick="window.location.href='{{route('product_expired')}}'">
                    <div class="invoiceSta">
                        <p class="invoiceSta-title">Sản phẩm hết hạn</p>
                        <p class="invoiceSta-text"><span class="numberLarge f-roboto">{{count($p_expired)}}</span>（当月増加数：<span class="numberSmall f-roboto">10</span>）</p>
                    </div>
                    <div class="toList">
                        <a href="#">Quản lý一</a>
                    </div>
                </li>
                <li onclick="window.location.href='{{route('product_expire')}}'">
                    <div class="invoiceSta">
                        <p class="invoiceSta-title">Sản phẩn đến hạn</p>
                        <p class="invoiceSta-text"><span class="numberLarge f-roboto">{{count($p_expire)}}</span>（当月増加数：<span class="numberSmall f-roboto">10</span>）</p>
                    </div>
                    <div class="toList">
                        <a href="#">Quản lý一</a>
                    </div>
                </li>
                <li>
                    <div class="invoiceSta">
                        <p class="invoiceSta-title">Tổng doanh thu đạt được</p>
                        <p class="invoiceSta-text"><span class="numberLarge f-roboto">¥1,368,000</span></p>
                    </div>
                    <div class="toList">
                        <a href="#">一覧へ</a>
                    </div>
                </li>
                <li>
                    <div class="invoiceSta">
                        <p class="invoiceSta-title">Tổng số đơn hàng</p>
                        <p class="invoiceSta-text"><span class="numberLarge f-roboto">{{$orders}}</span></p>
                    </div>
                    <div class="toList">
                        <a href="#">一覧へ</a>
                    </div>
                </li>
            </ul>
            <!-- ./col -->
        </div>
        <!-- /.row -->
        <br><br>
        <div class="row ">
            <p class="title_thongke">Thống kê đơn hàng doanh số</p>
            <form autocomplete="off">
                @csrf
                <div class="col-md-2">
                    <p>Từ ngày: <input type="date" id="datepicker" class="form-control"></p>

                    <input type="button" id="btn-dashboard-filter" class="btn btn-primary btn-sm"
                           value="Lọc kết quả">
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
    <br><br>
    <div class="row">
        <div class="col-md-6 col-xs-12">
            <p class="title_thongke">Thống kê tổng sản phẩm bài viết đơn hàng</p>
            <div id="donut"></div>
        </div>
        <!-- /.card -->

    </div>
    @push('scripts')
        <script></script>
    @endpush
@endsection
