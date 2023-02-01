<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Product;
use DB;
use Session;

class Productcontroller extends Controller{
	//backend 
	public function add_product(){
		$cate_product=DB::table('tbl_category_product')->orderby('category_id','desc')->get();
		return view('admin.add_product')->with('cate_product',$cate_product);
	}
	public function all_product(){
		$all_product=DB::table('tbl_product')->join('tbl_category_product' , 'tbl_category_product.category_id', '=', 'tbl_product.category_id')->orderby('tbl_product.product_id')->get();
		$manager_product=view('admin.all_product')->with('all_product',$all_product);
		return view('admin_layout')->with('admin.all_product',$manager_product);
	}
	public function save_product(Request $request){
		$data = $request->all();
		$product= new Product();

		$product->product_name=$data['product_name'];
		$product->product_price=$data['product_price'];
		$product->product_desc=$data['product_desc'];
		$product->category_id=$data['product_cate'];
		$get_image=$request->file('product_image');
		if($get_image){
			$get_name_image=$get_image->getClientOriginalName();
			$name_image =current(explode('.',$get_name_image));
			$new_image=$name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
			$get_image->move('public/uploads/product',$new_image);
			$product->product_image=$new_image;
			$product->save();
			Session::put('message','Thêm sản phẩm thành công');
			return Redirect::to('add-product');
		}
		$product->save();
		Session::put('message','Thêm sản phẩm thành công');
		return Redirect::to('add-product');
	}
	public function edit_product($product_id){
		$cate_product=DB::table('tbl_category_product')->orderby('category_id','desc')->get();
		$edit_product=DB::table('tbl_product')->where('product_id',$product_id)->get();
		$manager_product=view('admin.edit_product')->with('edit_product',$edit_product)->with('cate_product',$cate_product);
		return view('admin_layout')->with('admin.edit_product',$manager_product);
	}
	public function update_product(Request $request,$product_id){
		$data = array();
		$data['product_name']=$request->product_name;
		$data['product_price']=$request->product_price;
		$data['product_desc']=$request->product_desc;
		$data['category_id']=$request->cate_product;
		$get_image=$request->file('product_image');
		if($get_image){
			$get_name_image=$get_image->getClientOriginalName();
			$name_image =current(explode('.',$get_name_image));
			$new_image=$name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
			$get_image->move('public/uploads/product',$new_image);
			$data['product_image']=$new_image;
			DB::table('tbl_product')->where('product_id',$product_id)->update($data);
			Session::put('message','Cập nhật sản phẩm thành công');
			return Redirect::to('all-product');
		}
		DB::table('tbl_product')->where('product_id',$product_id)->update($data);
		Session::put('message','Cập nhật sản phẩm thành công');
		return Redirect::to('all-product');
	}
	public function delete_product($product_id){
		DB::table('tbl_product')->where('product_id',$product_id)->delete();
		Session::put('message','Xóa sản phẩm thành công');
		return Redirect::to('all-product');
	}

	//End admin page
	public function details_product($product_id){
		$cate_product=DB::table('tbl_category_product')->where('category_status', '0')->orderby('category_id','desc')->get();
		$details_product=DB::table('tbl_product')->join('tbl_category_product' , 'tbl_category_product.category_id', '=', 'tbl_product.category_id')->where('tbl_product.product_id', $product_id)->get();

		foreach($details_product as $key => $value)
		{
			$category_id = $value->category_id;
		}
		
		$related_product=DB::table('tbl_product')->join('tbl_category_product' , 'tbl_category_product.category_id', '=', 'tbl_product.category_id')->where('tbl_category_product.category_id', $category_id)->whereNotIn('tbl_product.product_id', [$product_id])->get();
		
		return view('pages.product.show_details')->with('category', $cate_product)->with('details_product', $details_product)->with('related_product', $related_product);
		

	}
	// fontend

	public function all_san_pham(){
        $cate_product=DB::table('tbl_category_product')->where('category_status', '0')->orderby('category_id','desc')->get();
        $all_product=DB::table('tbl_product')->orderby('product_id','desc')->get();
        return view('pages.product.product')->with('category', $cate_product)->with('all_product', $all_product);
    }
}