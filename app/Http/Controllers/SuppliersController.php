<?php

namespace App\Http\Controllers;

use App\suppliers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
use PDF;
class SuppliersController extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers=DB::table('tbl_product')
            ->join('tbl_suppliers','tbl_suppliers.product_id','=','tbl_product.product_id')
            ->orderBy('id_supplier','desc')
            ->get();
        return view('admin.all_suppliers')->with('suppliers',$suppliers);
    }
    public function add_supplier(){
        $this->AuthLogin();
        $products = DB::table('tbl_product')->get();
    	return view('admin.add_supplier',compact('products'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $suppliers=new suppliers();
        $suppliers->material_name=$request->material_name;
        $suppliers->quantity=$request->quantity;
        $suppliers->unit=$request->unit;
        $suppliers->product_id=$request->product_id;
        $suppliers->save();
        Session::put('message','Thêm nguyên liệu thành công');
    	return Redirect::route('all_suppliers');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\suppliers  $suppliers
     * @return \Illuminate\Http\Response
     */
    public function show(suppliers $suppliers)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\suppliers  $suppliers
     * @return \Illuminate\Http\Response
     */
    public function edit(suppliers $suppliers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\suppliers  $suppliers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = array();
        $data['material_name'] = $request->material_name;
        $data['quantity'] = $request->quantity;
        $data['unit'] = $request->unit;
        $data['product_id'] = $request->product_id;
        DB::table('tbl_suppliers')->where('id_supplier', $id)->update($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\suppliers  $suppliers
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tbl_suppliers')->where('id_supplier', $id)->delete();
        Session::put('message', 'Xóa sản phẩm thành công');
    }
    /* sử dụng pdf in hóa đơn */
	public function print_supplier($id_supplier)
	{
		$pdf = App::make('dompdf.wrapper');
		$pdf->loadHTML($this->print_order_convert($id_supplier));

		return $pdf->stream();
	}
    /* Thực hiện cv in hóa đơn */
	public function print_order_convert($id_supplier)
	{
        $suppliers=suppliers::where('id_supplier',$id_supplier)->first();
        $output = '';

		$output .= '<style>body{
			font-family: DejaVu Sans;
		}
		.table-styling{
			border:1px solid #000;
		}
		.table-styling tbody tr td{
			border:1px solid #000;
		}
		</style>
		<h4><center>Cửa hàng bánh Cake Bakery</center></h4>
		<h4><center>Chi tiết phiếu nhập hàng</center></h4>
		<p>Người nhập hàng: Admin</p>
        <p>Ngày nhập hàng: ' .$suppliers->date.'</p>
		<table class="table-styling">
				<thead>
					<tr>
						<th>Tên nhà cung cấp</th>
						<th>Nguyên liệu</th>
						<th>Số lượng</th>
						<th>Đơn vị</th>
						<th>Ngày nhập</th>
						<th>Tổng tiền</th>
					</tr>
				</thead>
				<tbody>';

		$output .= '
					<tr>
						<td>' . $suppliers->supplier_name . '</td>
						<td>' . $suppliers->material_name . '</td>
						<td>' . $suppliers->quantity . '</td>
						<td>' . $suppliers->unit . '</td>
						<td>' . $suppliers->price . '</td>
						<td>' . $suppliers->total . '</td>

					</tr>';


		$output .= '
				</tbody>

		</table>
        <p style="margin-top:30px;font-weight:bold;">Người xuất hóa đơn</p>
        <p>(Ký ghi rõ họ tên)</p>

        ';
        return $output;

    }
}
