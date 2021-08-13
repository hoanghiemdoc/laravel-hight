<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front;
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

    return \App\Models\Product::find(1)->productImages; // tìm các phần tử có brand_id == 1 và lọc ra;

});


// cách 1
//Route::get('/home','App\Http\Controllers\Front\HomeController@index');



// cách 2 truyền phần tử vào
Route::get('/home',[\App\Http\Controllers\Front\HomeController::class, 'index']);
