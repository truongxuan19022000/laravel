@extends('admin.dashboard.test')
@section('admin_content')
    <div class="table-agile-info" style="padding: 25px;">
        <div class="panel panel-default">
            <div class="panel-heading">

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
                        <th style="width:20px;">
                            <label class="i-checks m-b-none">
                                <input type="checkbox"><i></i>
                            </label>
                        </th>
                        <th>Tên danh mục</th>
                        <th>Slug</th>
                        <th>Hiển thị</th>

                        <th style="width:30px;"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($all_category_product as $key => $cate_pro)
                        <tr>
                            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label>
                            </td>
                            <td>{{ $cate_pro->category_name }}</td>
                            <td>{{ $cate_pro->slug_category_product }}</td>
                            <td><span class="text-ellipsis">
                                          <?php
                                        if($cate_pro->category_status == 0){
                                        ?>
                                <a href="{{URL::to('/unactive-category-product/'.$cate_pro->category_id)}}"><span
                                        class="fa-thumb-styling fa fa-thumbs-up"></span></a>
                                <?php
                                                    }else{
                                                    ?>
                                 <a href="{{URL::to('/active-category-product/'.$cate_pro->category_id)}}"><span
                                         class="fa-thumb-styling fa fa-thumbs-down"></span></a>
                                <?php
                                                    }
                                                    ?>
                                </span></td>
                            <td>
                                <a href="{{URL::to('/edit-category-product/'.$cate_pro->category_id)}}"
                                   class="active styling-edit" ui-toggle-class="">
                                    <i class="fa fa-pencil-square-o text-success text-active"></i></a>
                                <a onclick="return confirm('Xóa danh mục sẽ ảnh hưởng sẽ sản phẩm,Bạn có chắc là muốn xóa danh mục này ko?')"
                                   href="{{URL::to('/delete-category-product/'.$cate_pro->category_id)}}"
                                   class="active styling-edit" ui-toggle-class="">
                                    <i class="fa fa-times text-danger text"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <!-----import data---->
                <form action="{{url('import-csv')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="file" accept=".xlsx"><br>
                    <input type="submit" value="Import file Excel" name="import_csv" class="btn btn-warning">
                </form>
                <!-----export data---->
                <form action="{{url('export-csv')}}" method="POST">
                    @csrf
                    <input type="submit" value="Export file Excel" name="export_csv" class="btn btn-success">
                </form>
            </div>
            <footer class="panel-footer">
                <div class="row">
                </div>
            </footer>
        </div>
    </div>
    @push('scripts')
        <script>
            $(document).ready(function () {
                $('#product_table').DataTable();
            });
        </script>
    @endpush
@endsection
