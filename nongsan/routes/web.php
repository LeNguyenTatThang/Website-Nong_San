<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*Frontend*/

Route::get('/', 'App\Http\Controllers\HomeController@index');

Route::get('/trang-chu', 'App\Http\Controllers\HomeController@index'); 

Route::get('/danh-muc-san-pham/{category_id}', 'App\Http\Controllers\CategoryProductController@show_category_home');
Route::get('/chi-tiet-san-pham/{product_id}', 'App\Http\Controllers\Productcontroller@details_product');
Route::get('/san-pham/', 'App\Http\Controllers\Productcontroller@all_san_pham');
Route::get('/tuyendung', 'App\Http\Controllers\HomeController@tuyendung');

Route::get('/register/', 'App\Http\Controllers\Customercontroller@register_user');
Route::post('/register-p/', 'App\Http\Controllers\Customercontroller@register_user_p');

Route::get('/login','App\Http\Controllers\Customercontroller@login_user');
Route::post('/login-p','App\Http\Controllers\Customercontroller@login_user_p');

Route::get('/logout','App\Http\Controllers\Customercontroller@logout');

Route::get('/search','App\Http\Controllers\HomeController@search');
Route::get('/giam','App\Http\Controllers\HomeController@sapxepgiam');
Route::get('/tang','App\Http\Controllers\HomeController@sapxeptang');

//cart
Route::post('/update-cart-quantity','App\Http\Controllers\CartController@update_cart_quantity');
Route::post('/save-cart','App\Http\Controllers\CartController@save_cart');
Route::get('/show-cart','App\Http\Controllers\CartController@show_cart');
Route::get('/delete-to-cart/{rowId}','App\Http\Controllers\CartController@delele_to_cart');


//checkout
Route::get('/login-checkout','App\Http\Controllers\CheckoutController@login_checkout');
Route::get('/checkout','App\Http\Controllers\CheckoutController@show_checkout');
Route::post('/save-checkout-customer','App\Http\Controllers\CheckoutController@save_checkout_customer');
Route::get('/payment', 'App\Http\Controllers\CheckoutController@payment');

/*Backend*/
Route::get('/admin','App\Http\Controllers\Admincontroller@index');
Route::get('/dashboard','App\Http\Controllers\Admincontroller@show_dashboard');
Route::post('/admin-dashboard','App\Http\Controllers\Admincontroller@dashboard');

/*Category Product*/
Route::get('/add-category-product','App\Http\Controllers\CategoryProductController@add_category_product');
Route::get('/edit-category-product/{category_product_id}','App\Http\Controllers\CategoryProductController@edit_category_product');
Route::get('/delete-category-product/{category_product_id}','App\Http\Controllers\CategoryProductController@delete_category_product');
Route::get('/all-category-product','App\Http\Controllers\CategoryProductController@all_category_product');
Route::post('/save-category-product','App\Http\Controllers\CategoryProductController@save_category_product');
Route::post('/update-category-product/{category_product_id}','App\Http\Controllers\CategoryProductController@update_category_product');

/*Product*/
Route::get('/add-product','App\Http\Controllers\Productcontroller@add_product');
Route::get('/edit-product/{product_id}','App\Http\Controllers\Productcontroller@edit_product');
Route::get('/delete-product/{product_id}','App\Http\Controllers\Productcontroller@delete_product');
Route::get('/all-product','App\Http\Controllers\Productcontroller@all_product');
Route::post('/save-product','App\Http\Controllers\Productcontroller@save_product');
Route::post('/update-product/{product_id}','App\Http\Controllers\Productcontroller@update_product');

