<?php

namespace App\Http\Controllers;

use App\Product;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use App\Slider;
use App\Exports\ExcelExports;
use App\Exports\ExcelProduct;
use App\Imports\ExcelImports;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests;
use App\Imports\ExcelProduct as ImportsExcelProduct;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;

session_start();

class ProductController extends Controller
{
    /**
     * @var ProductRepository
     */
    private $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function AuthLogin()
    {
        $admin_id = Session::get('admin_id');
        if ($admin_id) {
            return Redirect::to('dashboard');
        } else {
            return Redirect::to('admin')->send();
        }
    }

    public function add_product()
    {
        $this->AuthLogin();
        $cate_product = DB::table('tbl_category_product')->orderby('category_id', 'desc')->get();
        $brand_product = DB::table('tbl_brand')->orderby('brand_id', 'desc')->get();
        $today = Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d');

        return view('admin.add_product')->with('cate_product', $cate_product)->with('brand_product', $brand_product)->with('today', $today);


    }

    public function all_product()
    {
        $this->AuthLogin();
        $today = Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d');
        $all_product = DB::table('tbl_product')
            ->join('tbl_category_product', 'tbl_category_product.category_id', '=', 'tbl_product.category_id')
            ->orderby('tbl_product.product_id', 'desc')->get();
        $manager_product = view('admin.all_product')->with('all_product', $all_product)->with('today', $today);
        return view('admin_layout')->with('admin.all_product', $manager_product);

    }

    public function save_product(Requests\Product $request)
    {
        $this->AuthLogin();
        $input = $request->all();
        $data = array();
        $product = $this->productRepository->findProduct($input['product_name'], $input['category_id']);
        if (!empty($product)) {
                try {
                        $data['product_code'] = $product->product_code;
                        $data['product_name'] = $product->product_name;
                        $data['product_quantity'] = $product->product_quantity + $input['product_quantity'];
                        $data['product_all'] = $product->product_quantity + $input['product_quantity'];
                        $data['product_price'] = $product->product_price;
                        $data['price_cost'] = $product->price_cost;
                        $data['product_desc'] = $product->product_desc;
                        $data['category_id'] = $product->category_id;
                        $data['ExpirationDate'] = Carbon::parse($product->ExpirationDate)->format('Y/m/d');
                        $data['product_status'] = $product->product_status;
                        $get_image = $request->file('product_image');
                        if ($get_image) {
                            $get_name_image = $get_image->getClientOriginalName();
                            $name_image = current(explode('.', $get_name_image));
                            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
                            $get_image->move('uploads/product', $new_image);
                            $data['product_image'] = $new_image;
                            DB::table('tbl_product')->where('product_id', $product->product_id)->update($data);
                            Session::put('message', 'update sản phẩm thành công');
                            return Redirect::to('all-product');

                        }
                    //update
                        DB::table('tbl_product')->where('product_id', $product->product_id)->update($data);
                        Session::put('message', 'Cập nhật sản phẩm thành công');
                        return Redirect::to('all-product');
                } catch (\Throwable $ex) {
                    Log::info($ex->getMessage());
                    DB::rollBack();
                    return Redirect::to('add-product');
                    Session::put('message', 'Thêm sản phẩm thất bại');
                }

        } else {
            try {
                $data = array();
                $data['product_name'] = $request->product_name;
                $data['product_code'] = $request->product_code;
                $data['product_quantity'] = $request->product_quantity;
                $data['product_all'] = $request->product_quantity;
                $data['product_price'] = $request->product_price;
                $data['price_cost'] = $request->price_cost;
                $data['product_desc'] = $request->product_desc;
                $data['product_content'] = $request->product_content;
                $data['category_id'] = $request->category_id;
                $data['ExpirationDate'] = Carbon::parse($request->ExpirationDate)->format('Y/m/d');
                $data['product_status'] = $request->product_status;
                $get_image = $request->file('product_image');
                if ($get_image) {
                    $get_name_image = $get_image->getClientOriginalName();
                    $name_image = current(explode('.', $get_name_image));
                    $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
                    $get_image->move('uploads/product', $new_image);
                    $data['product_image'] = $new_image;
                    DB::table('tbl_product')->insert($data);
                    Session::put('message', 'Thêm sản phẩm thành công');
                    return Redirect::to('all-product');

                }
                $data['product_image'] = '';
                DB::table('tbl_product')->insert($data);
                Session::put('message', 'Thêm sản phẩm thành công');
                return Redirect::to('all-product');
            } catch (\Throwable $ex) {
                Log::info($ex->getMessage());
                DB::rollBack();
                return Redirect::to('add-product');
                Session::put('message', 'Thêm sản phẩm thất bại');
            }
        }
    }

    public function unactive_product($product_id)
    {
        $this->AuthLogin();
        DB::table('tbl_product')->where('product_id', $product_id)->update(['product_status' => 1]);
        Session::put('message', 'Không kích hoạt sản phẩm thành công');
        return Redirect::to('all-product');

    }

    public function active_product($product_id)
    {
        $this->AuthLogin();
        DB::table('tbl_product')->where('product_id', $product_id)->update(['product_status' => 0]);
        Session::put('message', 'Không kích hoạt sản phẩm thành công');
        return Redirect::to('all-product');
    }

    public function edit_product($product_id)
    {
        $this->AuthLogin();
        $cate_product = DB::table('tbl_category_product')->orderby('category_id', 'desc')->get();
        $brand_product = DB::table('tbl_brand')->orderby('brand_id', 'desc')->get();

        $edit_product = DB::table('tbl_product')->where('product_id', $product_id)->get();

        $manager_product = view('admin.edit_product')->with('edit_product', $edit_product)->with('cate_product', $cate_product)->with('brand_product', $brand_product);

        return view('admin_layout')->with('admin.edit_product', $manager_product);
    }

    public function update_product(Request $request, $product_id)
    {
        $this->AuthLogin();
        $data = array();
        $data['product_name'] = $request->product_name;
        $data['product_quantity'] = $request->product_quantity;
        $data['product_price'] = $request->product_price;
        $data['price_cost'] = $request->price_cost;
        $data['product_desc'] = $request->product_desc;
        $data['product_content'] = $request->product_content;
        $data['category_id'] = $request->product_cate;
        $data['ManufactureDate'] = $request->ManufactureDate;
        $data['ExpirationDate'] = $request->ExpirationDate;
        $data['product_status'] = $request->product_status;
        $get_image = $request->file('product_image');

        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/product', $new_image);
            $data['product_image'] = $new_image;
            DB::table('tbl_product')->where('product_id', $product_id)->update($data);
            Session::put('message', 'Cập nhật sản phẩm thành công');
            return Redirect::to('all-product');
        }

        DB::table('tbl_product')->where('product_id', $product_id)->update($data);
        Session::put('message', 'Cập nhật sản phẩm thành công');
        return Redirect::to('all-product');
    }

    public function delete_product($product_id)
    {
        $this->AuthLogin();
        DB::table('tbl_product')->where('product_id', $product_id)->delete();
        Session::put('message', 'Xóa sản phẩm thành công');
        return Redirect::to('all-product');
    }

    //End Admin Page
    public function details_product($product_id, Request $request)
    {
        //slide
        try {
            $slider = Slider::orderBy('slider_id', 'DESC')->where('slider_status', '1')->take(4)->get();
            $cate_product = DB::table('tbl_category_product')->where('category_status', '0')->orderby('category_id', 'desc')->get();
            $brand_product = DB::table('tbl_brand')->where('brand_status', '0')->orderby('brand_id', 'desc')->get();
            $details_product = DB::table('tbl_product')
                ->join('tbl_category_product', 'tbl_category_product.category_id', '=', 'tbl_product.category_id')
                ->where('tbl_product.product_id', $product_id)->get();

            foreach ($details_product as $key => $value) {
                $category_id = $value->category_id;
                //seo
                $meta_desc = $value->product_desc;
                $meta_keywords = $value->product_id;
                $meta_title = $value->product_name;
                $url_canonical = $request->url();
                //--seo
            }
            $today = Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d');
            $related_product = DB::table('tbl_product')
                ->join('tbl_category_product', 'tbl_category_product.category_id', '=', 'tbl_product.category_id')
                ->where('tbl_product.ExpirationDate', '>=', $today)
                ->where('tbl_category_product.category_id', $category_id)
                ->whereNotIn('tbl_product.product_id', [$product_id])
                ->orderby(DB::raw('RAND()'))->paginate(3);
            return view('pages.sanpham.show_details')->with('category', $cate_product)->with('brand', $brand_product)->with('product_details', $details_product)->with('relate', $related_product)->with('meta_desc', $meta_desc)->with('meta_keywords', $meta_keywords)->with('meta_title', $meta_title)->with('url_canonical', $url_canonical)->with('slider', $slider);

        } catch (\Throwable $ex) {
            return back();
        }

    }

    public function exportProduct_csv()
    {
        return Excel::download(new ExcelProduct, 'product.xlsx');
    }

    public function importProduct_csv(Request $request)
    {
        $path = $request->file('file')->getRealPath();
        Excel::import(new ImportsExcelProduct, $path);
        return back();
    }
    public function expired(){
        $today = Carbon::now('Asia/Ho_Chi_Minh')->format('Y/m/d');
        $products = DB::table('tbl_product')
            ->orderBy('product_id','desc')
            ->whereDate('ExpirationDate','<', $today)->get();
        return view('admin.product-status.Expired')->with('products',$products);
    }
    public function expire(){
        $today = Carbon::now('Asia/Ho_Chi_Minh')->format('Y/m/d');
        $after_day = Carbon::now('Asia/Ho_Chi_Minh')->addDay(2)->format('Y/m/d');
        $products = DB::table('tbl_product')
            ->whereBetween('ExpirationDate',[$today,$after_day])->get();
        return view('admin.product-status.Expire')->with('products',$products);
    }
    public function productSaled(){
        $today = Carbon::now('Asia/Ho_Chi_Minh')->format('m');
        $today_day = Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d');
        $after_day = Carbon::now('Asia/Ho_Chi_Minh')->addDay(2)->format('Y/m/d');
        $products = DB::table('tbl_order')
            ->join('tbl_order_details','tbl_order.order_id','=','tbl_order_details.order_id')
            ->join('tbl_product','tbl_order_details.product_id','=','tbl_product.product_id')
            ->orWhereDate('tbl_order.order_date','=',$today_day)
            ->get();
        return view('admin.product-status.ProductSaled')->with('products',$products);
    }
    public function filter_price(Request $request){
    dd($request->all());
    }
}
