<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductComment;
use Illuminate\Http\Request;


// lớp xử lý toàn bộ nội dung logic tại đay
class ShopController extends Controller
{
    // hàm gọi shopController  truyền id hiển thị thông tin các sản phẩm chi tiết
    public  function show($id){
        // get categories,brands
        $categories =  ProductCategory::all();
        $brands = Brand::all();
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


        return view('shop.show',compact('product','categories','brands','avgRating','relatedProducts'));// định nghĩa sp ở đây
    }


    // thực hiện phương thức post sản phẩm tại đây
    public function postComment(Request $request){
        ProductComment::create($request->all()); // thêm dữ liệu từ form vào bảng product_comment

        return redirect()->back();   //  sau đó quay lại trang chính
    }



    // tạo một index tại lớp controller
    public function index(Request $request) { // truyền sp request vào đây;

       // get categories,brands
        $categories =  ProductCategory::all();
        $brands = Brand::all();

      // hiển thị danh sách sản phẩm và phân trang

        // lấy dữ liệu trên database sau đó xắp xếp
        $perPage = $request->show ?? 3; // lấy dữ liệu nếu ko có sp cho bằng 3
        $sortBy = $request->sort_by ?? 'latest'; // gia tri từ data mặc định ko có sẽ bằng null

        $search = $request->search ?? ''; // lấy dữ liệu database từ require lên

        $products = Product::where('name','like','%' . $search . '%'); // search lấy danh sách id các sản phẩm

        // gọi hàm filter index[],category[]
        $products = $this->filter($products, $request);

        // gắn các phần tử từ phần  sortAndPagination lên đây
        $products = $this->sortAndPagination($products,$sortBy,$perPage);


        return view('shop.index',compact('products','categories','brands')); // trả lại các giá trị tại đây
    }

    // tạo phương thức hiển thị các tên name: woman, men,...

    public function category($categoryName, Request $request) {
         // tái xử dụng code get categories, brands
        $categories =  ProductCategory::all();
        $brands = Brand::all();


        // get Products:
        // lấy dữ liệu trên database sau đó xắp xếp
        $perPage = $request->show ?? 3; // lấy dữ liệu nếu ko có sp cho bằng 3
        $sortBy = $request->sort_by ?? 'latest'; // gia tri từ data mặc định ko có sẽ bằng null

        $products = ProductCategory::where('name',$categoryName)->first()->products->toQuery();

        // gọi hàm filter index[],category[]
        $products = $this->filter($products, $request);


        // gắn các phần tử từ phần  sortAndPagination lên đây
        $products = $this->sortAndPagination($products,$sortBy,$perPage);


        return view('shop.index',compact('categories','brands','products'));
    }


    // gộp các phương thức method từ trên vào đây
    public function  sortAndPagination($products,$sortBy,$perPage){
        // lấy danh sách sản phẩm các bảng
        switch ($sortBy){
            case 'latest':
                $products =$products->orderBy('id'); // truyền products lấy id search vào đây
                break;
            case 'oldest':
                $products =$products->orderByDesc('id');
                break;
            case 'name-ascending':
                $products =$products->orderBy('name');
                break;
            case 'name-descending':
                $products =$products->orderByDesc('name');
                break;
            case 'price-ascending':
                $products =$products->orderBy('price');
                break;
            case 'price-descending':
                $products =$products->orderByDesc('price');
                break;
            default:
                $products =$products->orderBy( $perPage );
        }
        $products = $products->paginate($perPage); // phần xử lý phân trang

        $products->appends(['sort_by' => $sortBy,'show' =>$perPage]);

        return $products;
    }

    // hàm chức năng lọc sản phẩm index[],category[]
    public function filter($products, Request $request){

        //Brands
        $brands = $request->brand ?? [];
        $brands_ids = array_keys($brands);
        $products = $brands_ids != null ? $products->whereIn('brand_id',$brands_ids) : $products;

        //price
        $priceMin = $request->price_min;
        $priceMax = $request->price_max;
        $priceMin =  str_replace('$','',$priceMin);
        $priceMax =  str_replace('$','',$priceMax);
        $products =  ($priceMin != null && $priceMax != null)? $products->whereBetween('price',[$priceMin,$priceMax]) : $products;

        //color
        $color = $request->color;
        $products = $color != null
            ? $products->whereHas('productDetail',function ($query) use ($color){
                return $query->where('color', $color)->where('qty','>',0);
            })
            :$products;

        // size
        $size = $request->size;
        $products = $size != null
            ? $products->whereHas('productDetail',function ($query) use ($size){
                return $query->where('size', $size)->where('qty','>',0);
            })
            :$products;

        return $products;
    }
}
