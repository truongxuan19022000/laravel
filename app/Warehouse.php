<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\suppliers;
class Warehouse extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
        'product_id','product_code','t_quantity','b_quantity','c_quantity'
    ];
    protected $primaryKey = 'id';
    protected $table = 'tbl_warehouse';
    protected $fieldOrder = [
        'created_by',
        'price'
    ];
    public function product(){
        return $this->hasOne('product_id','id_supplier','id');
    }
}
