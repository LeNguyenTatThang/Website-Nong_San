<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Redirect;
use DB;

class Customercontroller extends Controller
{
    public function register_user(){
        $cate_product=DB::table('tbl_category_product')->where('category_status', '0')->orderby('category_id','desc')->get();
        return view('pages.register.register')->with('category', $cate_product);
    }

    public function register_user_p(Request $request){
        $data = array();
        $data['customer_name']= $request->customer_name;
        $data['customer_phone']= $request->customer_phone;
        $data['customer_email']= $request->customer_email;
        $data['customer_password']= md5($request->customer_password);
        $customer_id = DB::table('tbl_customer')->insertGetId($data);
        $email = $request->customer_email;
        $check = DB::table('tbl_customer') ->where('customer_email',$email)->exists();
        if($check)
        {
            return Redirect()->back()->with('error','Email đã được đăng ký.Vui lòng chọn email khác')->withInput();
        }
        session::put('customer_id',$customer_id );
        session::put('customer_name',$request->customer_name);
        session::put('customer_phone',$request->customer_phone);
        return Redirect::to('/login');
    }

    public function login_user(){
        $cate_product=DB::table('tbl_category_product')->where('category_status', '0')->orderby('category_id','desc')->get();
        return view('pages.login.login')->with('category', $cate_product);
    }
    public function login_user_p(Request $request){
        

        $customer_email = $request->customer_email;
        $customer_password = md5($request->customer_password);

        $result = DB::table('tbl_customer')->where('customer_email',$customer_email)->where('customer_password',$customer_password)->first();
        if($result){
            Session::put('customer_name',$result->customer_name);
            Session::put('customer_id',$result->customer_id);
            return Redirect::to('/trang-chu');
        }else{
            return Redirect::to('/login');
        }
    }
    public function logout(){
        Session::flush();
        return Redirect::to('/login');
    }

}
