<?php

namespace App\Providers;

use App\Admin;
use App\Customer;
use App\Order;
use App\Product;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*',function($view) {
            $today = Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d');
            $min_price = Product::min('product_price');
            $max_price = Product::max('product_price');

            $min_price_range = $min_price + 500000;
            $max_price_range = $max_price + 10000000;
            
            $app_product = Product::Where('ExpirationDate','>',$today)->count();
            $app_order = Order::all()->count();
            $app_customer = Customer::all()->count();
            $app_users =Admin::all()->count();
            $share_image = '';
            $view->with('min_price', $min_price )->with('max_price', $max_price )->with('min_price_range', $min_price_range )->with('max_price_range', $max_price_range )
            -> with('app_product', $app_product )->with('app_order', $app_order )->with('app_customer', $app_customer )->with('app_users', $app_users );
            
        });
    }
}
