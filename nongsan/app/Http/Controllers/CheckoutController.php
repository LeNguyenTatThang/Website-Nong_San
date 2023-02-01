<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Product;
use DB;
use Session;
session_start();

class CheckoutController extends Controller
{
    

    public function show_checkout(){
        $cate_product=DB::table('tbl_category_product')->where('category_status', '0')->orderby('category_id','desc')->get();

        return view('pages.checkout.show_checkout')->with('category', $cate_product);
    }

    public function save_checkout_customer(Request $request){
        $data = array();
        $data['shipping_name'] = $request->shipping_name;
        $data['shipping_phone'] = $request->shipping_phone;
        $data['shipping_email'] = $request->shipping_email;
        $data['shipping_notes'] = $request->shipping_notes;
        $data['shipping_address'] = $request->shipping_address;

        $shipping_id = DB::table('tbl_shipping')->insertGetId($data);
        Session::put('shipping_id',$shipping_id);
        return Redirect('/payment');
    }

    public function payment(){
        
        $cate_product=DB::table('tbl_category_product')->where('category_status', '0')->orderby('category_id','desc')->get();

        return view('pages.checkout.thanhcong')->with('category', $cate_product);
    }
}
