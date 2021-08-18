@extends('layout.master')   {{--thực hiện kế thừa các phần tử--}}

@section('title','Shopping-cart')  {{--thêm section chứa tên mỗi vùng--}}
<!-- -->
@section('body')  {{--    // thêm section phần body here--}}



    <!-- Breadcrumb Section Begin-->
    <div class="breacrumb-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="breadcrumb-text">
              <a href="./home.html"><i class="fa fa-home"></i>Home</a>
              <a href="./shop.html">Shop</a>
              <span>Shopping Cart</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Breadcrumb Section End-->

    <!-- Shopping Cart Section Begin-->
    <div class="shopping-cart spad">
      <div class="container">
        <div class="row">
    {{--// đặt dk để thông báo khi xóa giỏ hàng --}}
            @if(Cart::count() >0)
          <div class="col-lg-12">
            <div class="cart-table">
              <table>
                <thead>
                <tr>
                  <th>Image</th>
                  <th class="p-name">Product Name</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Total</th>
                  <th><i  onclick="confirm('are you sure deleteAll') == true ? window.location='./cart/destroy':''" class="ti-close" style="cursor:pointer"></i> </th>
                </tr>
                </thead>
                <tbody>
                @foreach($carts as $cart)
                <tr>
                  <td class="cart-pic"><img style="height: 200px" src="public/frontend/img/products/{{$cart->options->images[0]->path}}" ></td>
                  <td class="cart-title first-row">
                    <h5>{{$cart->name}}</h5>
                  </td>
                  <td class="p-price first-row"> ${{number_format($cart->price,2)}}</td>
                  <td class="qua-col first-row">
                      <div class="quantity">
                          <div class="pro-qty">
                              <input type="text" value="{{ $cart->qty }}" data-rowId="{{$cart->rowId}}">
                          </div>
                      </div>
                  </td>
                  <td class="total-price first-row">
                      ${{number_format($cart->price * $cart->qty,2)}}
                  </td>
                  <td class="close-td first-row"><i onclick="window.location='./cart/delete/{{$cart->rowId}}'" style="cursor: pointer" class="ti-close"></i></td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <div class="row">
              <div class="col-lg-4">
                <div class="cart-buttons">
                  <a href="#"class="primary-btn continue-shop">Continue shopping</a>
                  <a href="#" class="primary-btn up-cart">Update cart</a>
                </div>
                <div class="discount-coupon">
                  <h6>Discount Codes</h6>
                  <form action="#" class="coupon-form">
                    <input type="text" placeholder="Enter your code">
                    <button type="submit" class="site-btn coupon-btn">Apply</button>
                  </form>
                </div>
              </div>
              <div class="col-lg-4 offset-lg-4">
                <div class="proceed-checkout">
                  <ul>
                    <li class="subtotal">Subtotal<span>${{ $total }}</span></li>
                    <li class="cart-total">Total<span>${{ $subtotal }}</span></li>
                  </ul>
                  <a href="./checkout" class="proceed-btn">PROCEED TO CHECK OUT</a>
                </div>
              </div>
            </div>
          </div>
            @else
                <div class="col-lg-12">
                    <h4>giỏ hàng của bạn không có sản phẩm nào</h4>
                </div>
            @endif

        </div>
      </div>
    </div>
    <!-- Shopping Cart Section Begin-->


@endsection