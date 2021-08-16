<?php


namespace App\Http\Controllers\Front;
use App\Models\Blog;
use App\Models\Product;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class HomeController extends BaseController
{
  public function index(){
     // thêm biến dữ liệu lấy danh sách sản phẩm trên database
      $menProducts = Product::where('featured',true)->where('product_category_id',1)->get();
      $womanProducts = Product::where('featured',true)->where('product_category_id',2)->get();

//      dd($menProducts); // cach để lấy phần tử bằng lệnh này xem lấy dc chưa
//      dd($womanProducts);

      // lấy blog của file
      $blogs = Blog::orderBy('id','desc') ->limit(3)->get();
//          dd($blogs);
      // truyền phần tử tại đây
      return view('index',compact('menProducts','womanProducts','blogs'));
  }

}
