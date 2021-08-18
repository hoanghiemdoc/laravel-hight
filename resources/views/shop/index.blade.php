@extends('layout.master')

@section('title','shop')


@section('body')
    <!-- Breadcrumb Section Begin-->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="index.html"><i class="fa fa-home"></i>Home</a>
                        <span>Shop</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End-->

    <!-- Product Shop Section Begin-->
    <section class="product-shop spad">
        <div class="container">
            {{--// hiển thị danh sách các mục sản phẩm trên database ở đây--}}
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">
{{--                    // tạo form đóng gói để lọc sản phẩm --}}
                      @include('shop.components.products-sidebar-filter')  {{--// thực hiện đóng gói kế thừa sản phẩm ở đây--}}

                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="product-show-option">
                        <div class="row">
                            <div class="col-lg-7 col-md-7">
                                {{--// xử lý phần xắp xếp danh sách sản phẩm--}}
                                <form action="">
                                    <div class="select-option">
                                        <select name="sort_by" class="sorting" onchange="this.form.submit()">
                                            <option {{request('sort_by') == 'latest' ? 'selected' : ''}} value="latest">
                                                Sorting latest
                                            </option>
                                            <option
                                                {{request('sort_by') == 'oldest' ? 'selected' : ''}}  value="oldest">
                                                sorting oldest
                                            </option>
                                            <option
                                                {{request('sort_by') == 'name-ascending' ? 'selected' : ''}}  value="name-ascending">
                                                Sorting name A-Z
                                            </option>
                                            <option
                                                {{request('sort_by') == 'name-descending' ? 'selected' : ''}}  value="name-descending">
                                                Sorting name Z-A
                                            </option>
                                            <option
                                                {{request('sort_by') == 'price-ascending' ? 'selected' : ''}}  value="price-ascending">
                                                Sorting Price ascending
                                            </option>
                                            <option
                                                {{request('sort_by') == 'price-descending' ? 'selected' : ''}}  value="price-descending">
                                                Sorting Price descending
                                            </option>
                                        </select>
                                        <select name="show" class="p-show" onchange="this.form.submit()">
                                            <option {{request('show') == '3' ? 'selected' : ''}}  value="3">
                                                Show:3
                                            </option>
                                            <option {{request('show') == '9' ? 'selected' : ''}}  value="9">
                                                Show:9
                                            </option>
                                            <option {{request('show') == '15' ? 'selected' : ''}}  value="15">
                                                Show:15
                                            </option>
                                        </select>
                                    </div>
                                </form>

                            </div>

                        </div>
                    </div>
                    <div class="product-list">
                        {{-- // thêm dữ liệu động phần phân trang vào đây--}}
                        <div class="row">
                            {{--                             //forEach phần phân trang--}}
                            @foreach($products as $product)
                                <div class="col-lg-4 col-sm-6">
                                    @include('shop.components.product-item')    {{--// truyền component từ product vào đây--}}
                                </div>
                            @endforeach

                        </div>
                    </div>
                    {{--// hiển thị mục phân trang--}}
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </section>
    <!-- Product Shop Section Begin-->



@endsection
