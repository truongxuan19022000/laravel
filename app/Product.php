<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\suppliers;
class Product extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'product_id','product_name','product_code','product_quantity','product_all', 'product_slug','category_id','product_desc','product_content','product_price','product_image','product_status','price_cost','ManufactureDate','ExpirationDate','expiry'
    ];
    protected $primaryKey = 'product_id';
 	protected $table = 'tbl_product';
    protected $fieldOrder = [
        'created_by',
        'price'
    ];
    public function supplier(){
        return $this->hasOne('suppliers','id_supplier','product_id');
    }
}
