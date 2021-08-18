<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\ShopController;
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

Route::get('/', function () {
//    return view('welcome');

//    return \App\Models\Product::all();

//    return \App\Models\Product::find(1)->productImages; // tìm các phần tử có brand_id == 1 và lọc ra;

});


// cách 1
//Route::get('/home','App\Http\Controllers\Front\HomeController@index');



// cách 2 truyền phần tử vào
Route::get('/home',[\App\Http\Controllers\Front\HomeController::class, 'index']);


// nhóm 2 controller lại lưu ý: lệnh PREFIX nhóm 2 lớp controller vào
// ko dc khỏi cần nhóm link lại

Route::prefix('shop')->group(function (){

    // tạo một lớp  class index để lưu file index controller
    Route::get('/',[App\Http\Controllers\Front\ShopController::class,'index']);

    // truyền lớp shopController gọi id  vào web
    Route::get('/product/{id}',[App\Http\Controllers\Front\ShopController::class,'show']);

//truyền lớp post ở lớp controller vào đây
    Route::post('/product/{id}',[App\Http\Controllers\Front\ShopController::class,'postComment']);

// tạo danh sách hiển thị các tên woman, man ,...
    Route::get('/{categoryName}',[App\Http\Controllers\Front\ShopController::class,'category']);


});

// tốt nhất là vứt ra ngoài nếu cho vào trong predix ko chạy được



// thêm phần giỏ hàng vào đây
Route::prefix('cart')->group(function (){
    // add tất cả các sp trong giỏ hàng
    Route::get('add/{id}',[App\Http\Controllers\Front\CartController::class,'add']);

    //thêm môt lớp controller thêm giỏ hàng vào đây
    Route::get('/',[App\Http\Controllers\Front\CartController::class,'index']);

    // xóa một sp trong giỏ hàng
    Route::get('delete/{rowId}',[App\Http\Controllers\Front\CartController::class,'delete']);
    Route::get('/destroy',[App\Http\Controllers\Front\CartController::class,'destroy']);

    // update một sản phẩm trong giỏ hàng
    Route::get('/update',[App\Http\Controllers\Front\CartController::class,'update']);
});



// checkout giỏ hàng
Route::prefix('checkout')->group(function () {
    Route::get('/',[App\Http\Controllers\Front\checkOutController::class,'index']);

});
