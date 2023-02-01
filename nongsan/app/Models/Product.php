<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'product_id', 'product_name', 'product_desc','product_image','product_price','category_id'
    ];
    protected $primaryKey = 'product_id';
 	protected $table = 'tbl_product';

 	// public function product(){
  //       $this->has('App\Models\Product');
  //   }
}
