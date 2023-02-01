<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\CategoryProduct;
use DB;
use Cart;
use Session;
session_start();

class CartController extends Controller
{
    public function save_cart(Request $request){
        $product_id = $request->product_id;
        $quantity = $request->qty;
        $product_info = DB::table('tbl_product')->where('product_id', $product_id)->first();

        
        $data['id'] = $product_info->product_id;
        $data['qty'] = $quantity;
        $data['name'] = $product_info->product_name;
        $data['price'] = $product_info->product_price;
        $data['weight'] = '123';
        $data['options']['image'] = $product_info->product_image;
        
        Cart::add($data);
        Cart::setGlobalTax(10);
        return Redirect::to('/show-cart');
    }

    public function show_cart(){
        $cate_product=DB::table('tbl_category_product')->where('category_status', '0')->orderby('category_id','desc')->get();

        return view('pages.cart.show_cart')->with('category', $cate_product);
    }
    public function delele_to_cart($rowId){
        Cart::update($rowId, 0);
        return Redirect::to('/show-cart');
    }

    public function update_cart_quantity(Request $request){
        $rowId = $request->rowId_cart;
        $qty = $request->cart_quantity;
        Cart::update($rowId, $qty);
        return Redirect::to('/show-cart');
    }

}
