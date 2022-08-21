<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class suppliers extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
    	 'id_supplier','material_name','quantity','unit','product_id'
    ];
    protected $primaryKey = 'id_supplier';
 	protected $table = 'tbl_suppliers';
 	public function product(){
 	    return $this->hasOne('App\Product','product_id','id_supplier');
    }
}
