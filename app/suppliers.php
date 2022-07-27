<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class suppliers extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'supplier_name', 'material_name','quantity','unit', 'date','price','total'
    ];
    protected $primaryKey = 'id_supplier';
 	protected $table = 'tbl_suppliers';
}
