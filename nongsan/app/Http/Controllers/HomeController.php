<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\CategoryProduct;
use DB;
use Session;
session_start();

class HomeController extends Controller
{
    public function index(){
        $cate_product=DB::table('tbl_category_product')->where('category_status', '0')->orderby('category_id','desc')->get();
        $all_product=DB::table('tbl_product')->orderby('product_id','desc')->limit(3)->get();
        return view('pages.home')->with('category', $cate_product)->with('all_product', $all_product);
    }
    public function search(Request $request){
        $keywords = $request->keywords_submit;

        $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','asc')->get(); 

        $search = DB::table('tbl_product')->where('product_name','like','%'.$keywords.'%')->get();
        return view('pages.search')->with('category',$cate_product)->with('search',$search)->with('keywords',$keywords);
    }
    public function tuyendung(){
        return view('pages.tuyendung');
    }

    public function sapxeptang(){
        $cate_product=DB::table('tbl_category_product')->where('category_status', '0')->orderby('category_id','asc')->get();
        $all_product=DB::table('tbl_product')->orderby('product_price','asc')->get();
        return view('pages.product.product')->with('category', $cate_product)->with('all_product', $all_product);
    }
    public function sapxepgiam(){
        $cate_product=DB::table('tbl_category_product')->where('category_status', '0')->orderby('category_id','desc')->get();
        $all_product=DB::table('tbl_product')->orderby('product_price','desc')->get();
        return view('pages.product.product')->with('category', $cate_product)->with('all_product', $all_product);
    }
}
