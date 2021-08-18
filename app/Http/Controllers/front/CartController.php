<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    //
     public function add($id){
         $product = Product::findOrFail($id);

         Cart::add([
             'id' =>$id,
             'name' =>$product->name,
             'qty' =>1,
             'price' =>$product->discount ?? $product->price,
             'weight' =>$product->weight ??0,
             'options' =>[
                'images' => $product->productImages],
         ]);

//         dd(Cart::content()); // test để lấy dữ liệu các sản phẩm  xem được chưa

         return back(); // quay trở lại trang chủ
     }

     // thêm một class index của shop-cart vào đây
     public function index(){
         // hiển thị dữ liệu sản phẩm từ giỏ hàng
         $carts = Cart::content();
         $total = Cart::total();
         $subtotal = Cart::subtotal();


         return view('shop.cart',compact('carts','total','subtotal'));
     }

     // xóa sp trong giỏ hàng
      public function delete($rowId){
         Cart::remove($rowId);

         return back();
      }

      // xóa tất cả sản phẩm trong giỏ hàng
    public function destroy(){
        Cart::destroy();

        return back();
    }

    // update sản phẩm trong giỏ hàng
    public function update(Request $request){
        if($request->ajax()){
            Cart::update($request->rowId,$request->qty);
        }
    }



}
