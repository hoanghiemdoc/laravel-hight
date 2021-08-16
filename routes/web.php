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

Route::prefix('shop',)->group(function (){
    // truyền lớp shopController gọi id  vào web
    Route::get('/shop/product/{id}',[App\Http\Controllers\Front\ShopController::class,'show']);

    //truyền lớp post ở lớp controller vào đây
    Route::post('/shop/product/{id}',[App\Http\Controllers\Front\ShopController::class,'postComment']);

    // tạo một lớp  class index để lưu file index controller
    Route::get('/',[App\Http\Controllers\Front\ShopController::class,'index']);
});
