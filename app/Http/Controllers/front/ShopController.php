<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductComment;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    // hàm gọi shopController  truyền id hiển thị thông tin các sản phẩm chi tiết
    public  function show($id){
        $product = Product::findOrFail($id);

        // thực hiện tính trung bình số lượng comment, sao
        $avgRating = 0;
        $sumRating = array_sum(array_column($product->productComments->toArray(),'rating'));
        $countRating = count($product->productComments);
         if ($countRating !=0){
             $avgRating = $sumRating/$countRating;
         }

         // lấy dữ liệu các sp liên quan các sp category cùng loại cũng như tiêu đề liên quan giới hạn 4 loại hàng
         $relatedProducts = Product::where('product_category_id',$product->product_category_id)->where('tag',$product->tag)->limit(4)->get();


        return view('shop.show',compact('product','avgRating','relatedProducts'));
    }

    // thực hiện phương thức post sản phẩm tại đây
    public function postComment(Request $request){
        ProductComment::create($request->all()); // thêm dữ liệu từ form vào bảng product_comment

        return redirect()->back();   //  sau đó quay lại trang chính
    }

    // tạo một index tại lớp controller
    public function index(Request $request) { // truyền sp request vào đây;

      // hiển thị danh sách sản phẩm và phân trang
        $products = Product::all();

//        // lấy dữ liệu trên database sau đó xắp xếp
//        $perPage = $request->show ?? 3; // lấy dữ liệu nếu ko có sp cho bằng 3
//        $sortBy = $request->sort_by ?? 'latest'; // gia tri từ data mặc định ko có sẽ bằng null
//
//      // lấy danh sách sản phẩm các bảng
//        switch ($sortBy){
//            case 'latest':
//                $products = Product::orderBy('id');
//                break;
//            case 'oldest':
//                $products = Product::orderByDesc('id');
//                break;
//            case 'name-ascending':
//                $products = Product::orderBy('name');
//                break;
//            case 'name-descending':
//                $products = Product::orderByDesc('name');
//                break;
//            case 'price-ascending':
//                $products = Product::orderBy('price');
//                break;
//            case 'price-descending':
//                $products = Product::orderByDesc('price');
//                break;
//            default:
//                $products = Product::orderBy( $perPage );
//        }
//
//         $products =$products->paginate(6); // phần xử lý phân trang
//
//        $products->appends(['sort_by' => $sortBy,'show' =>$perPage]);

        return view('shop.index',compact('products'));
    }


}
