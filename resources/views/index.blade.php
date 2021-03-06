@extends('layout.master')   {{--thực hiện kế thừa các phần tử--}}

@section('title','Home')  {{--thêm section chứa tên mỗi vùng--}}
<!-- -->
@section('body')  {{--    // thêm section phần body here--}}

<!-- Hero Section Begin -->
<section class="hero-section">
    <div class="hero-items owl-carousel">
        <div class="single-hero-items set-bg" data-setbg="{{asset('public/frontend/img/hero-1.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <span>Bag, Kids</span>
                        <h1>Black Friday
                        </h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi beatae dolor ducimus esse
                            fugit itaque quia totam vitae voluptatem? Ab aliquam,
                            distinctio excepturi facere id iste perspiciatis sit tempore vitae.</p>
                        <a href="#" class="primary-btn">Shop Now</a>
                    </div>
                </div>
                <div class="off-card">
                    <h2>Sale<span>58%</span></h2>
                </div>
            </div>
        </div>
        <div class="single-hero-items set-bg" data-setbg="{{asset('public/frontend/img/hero-2.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <span>Bag, Kids</span>
                        <h1>Black Friday
                        </h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi beatae dolor ducimus esse
                            fugit itaque quia totam vitae voluptatem? Ab aliquam,
                            distinctio excepturi facere id iste perspiciatis sit tempore vitae.</p>
                        <a href="#" class="primary-btn">Shop Now</a>
                    </div>
                </div>
                <div class="off-card">
                    <h2>Sale<span>58%</span></h2>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Hero Section End -->

<!-- Banner Section Begin-->
<div class="banner-section spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="single-banner">
                    <img src="{{asset('public/frontend/img/banner-1.jpg')}}" alt="">
                    <div class="inner-text">
                        <h4>Men's</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-banner">
                    <img src="{{asset('public/frontend/img/banner-2.jpg')}}" alt="">
                    <div class="inner-text">
                        <h4>woman's</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-banner">
                    <img src="{{asset('public/frontend/img/banner-3.jpg')}}" alt="">
                    <div class="inner-text">
                        <h4>Kid's</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Banner Section End-->


<!-- woman Banner Section Begin -->
<section class="woman-banner spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="product-large set-bg"
                     data-setbg="{{asset('public/frontend/img/products/women-large.jpg')}}">
                    <h2>woman's</h2>
                    <a href="#">Discover More</a>
                </div>
            </div>
            <div class="col-lg-8 offset-lg-1">
                <div class="filter-control">
                    <ul>
                        <li class="item active" data-tag="*" data-category="women">All</li>
                        <li class="item" data-tag=".Clothing" data-category="women">Clothing</li>
                        <li class="item" data-tag=".HandBag" data-category="women" >Handbag</li>
                        <li class="item" data-tag=".Shoes" data-category="women">Shoes</li>
                        <li class="item" data-tag=".Accessories" data-category="women">Accessroise</li>
                    </ul>
                </div>
                <div class="product-slider owl-carousel women">
                    {{--                // dùng vòng lặp để lặp các phẩn tử lên  chỉ cần lấy 1 cái rồi in ra--}}
                    @foreach($womanProducts as $womanProduct)
                          @include('shop.components.product-item',['product' => $womanProduct]) {{--// truyền component từ product vào đây--}}
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- woman Banner Section End -->

<!-- Deal Of The Week Section Begin-->
<section class="deal-of-week set-bg spad" data-setbg="public/frontend/img/time-g.jpg'">
    <div class="container">
        <div class="col-lg-6 text-center">
            <div class="section-title">
                <h2>Deal of The Week</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab at debitis dolorum exercitationem
                    maiores necessitatibus officiis quas rerum ullam. Atque deleniti dolore eius enim id
                    libero magni maxime unde? Omnis.</p>
                <div class="product-price">
                    $35.88
                    <span>/ HanBag</span>
                </div>
            </div>
            <div class="countdown-timer" id="countdown">
                <div class="cd-item">
                    <span>56</span>
                    <p>Days</p>
                </div>
                <div class="cd-item">
                    <span>12</span>
                    <p>Hrs</p>
                </div>
                <div class="cd-item">
                    <span>48</span>
                    <p>Mins</p>
                </div>
                <div class="cd-item">
                    <span>52</span>
                    <p>Secs</p>
                </div>
            </div>
            <a href="" class="primary-btn">Shop Now</a>
        </div>
    </div>
</section>
<!-- Deal Of The Week Section End-->

<!-- men Banner Section Begin -->
<section class="men-banner spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="product-large set-bg" data-setbg="{{asset('public/frontend/img/products/man-large.jpg')}}">
                    <h2>men's</h2>
                    <a href="#">Discover More</a>
                </div>
            </div>
            <div class="col-lg-8 offset-lg-1">

                <div class="filter-control">
                    <ul>
                        <li class="item active" data-tag="*" data-category="men">All</li>
                        <li class="item" data-tag=".Clothing" data-category="men">Clothing</li>
                        <li class="item" data-tag=".HandBag" data-category="men" >Handbag</li>
                        <li class="item" data-tag=".Shoes" data-category="men">Shoes</li>
                        <li class="item" data-tag=".Accessories" data-category="men">Accessroise</li>
                    </ul>
                </div>

                <div class="product-slider owl-carousel men">
                    <!--1 -->
                    @foreach( $menProducts  as $menProduct)
                        @include('shop.components.product-item',['product' => $menProduct])    {{--// truyền component từ product vào đây--}}
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- men Banner Section End -->

<!-- Instagram Section Begin-->
<div class="instagram-photo">
    <div class="insta-item set-bg" data-setbg="{{asset('public/frontend/img/insta-1.jpg')}}">
        <div class="inside-text">
            <i class="ti-instagram"></i>
            <h5><a href="#">Codelean_Collection</a></h5>
        </div>
    </div>
    <div class="insta-item set-bg" data-setbg="{{asset('public/frontend/img/insta-2.jpg')}}">
        <div class="inside-text">
            <i class="ti-instagram"></i>
            <h5><a href="#">Codelean_Collection</a></h5>
        </div>
    </div>
    <div class="insta-item set-bg" data-setbg="{{asset('public/frontend/img/insta-3.jpg')}}">
        <div class="inside-text">
            <i class="ti-instagram"></i>
            <h5><a href="#">Codelean_Collection</a></h5>
        </div>
    </div>
    <div class="insta-item set-bg" data-setbg="{{asset('public/frontend/img/insta-4.jpg')}}">
        <div class="inside-text">
            <i class="ti-instagram"></i>
            <h5><a href="#">Codelean_Collection</a></h5>
        </div>
    </div>
    <div class="insta-item set-bg" data-setbg="{{asset('public/frontend/img/insta-5.jpg')}}">
        <div class="inside-text">
            <i class="ti-instagram"></i>
            <h5><a href="#">Codelean_Collection</a></h5>
        </div>
    </div>
    <div class="insta-item set-bg" data-setbg="{{asset('public/frontend/img/insta-6.jpg')}}">
        <div class="inside-text">
            <i class="ti-instagram"></i>
            <h5><a href="#">Codelean_Collection</a></h5>
        </div>
    </div>
</div>
<!-- Instagram Section Begin-->

<!-- Latest Blog Section Begin-->
<section class="latest-blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Form The Blog</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($blogs as $blog)
            <div class="col-lg-4 col-md-6">
                <div class="single-latest-blog">
                    <img src="public/frontend/img/blog/{{$blog -> image}}" alt="">
                    <div class="latest-text">
                        <div class="tag-list">
                            <div class="tag-item">
                                <i class="fa fa-calendar-o">
                                   {{date('M d,Y',strtotime( $blog -> created_at))}}
                                </i>
                            </div>
                            <div class="tag-item">
                                <i class="fa fa-comment-o">
                                    {{count( $blog -> blogComments)}}
                                </i>
                            </div>
                        </div>
                        <a href="#">
                            <h4>{{$blog->title}}</h4>
                        </a>
                        <p>{{$blog->subtitle}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="benefit-items">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-benefit">
                        <div class="sb-icon">
                            <img src="{{asset('public/frontend/img/icon-1.png')}}" alt="">
                        </div>
                        <div class="sb-text">
                            <h6>Free Shipping</h6>
                            <p>For all order over 99$</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-benefit">
                        <div class="sb-icon">
                            <img src="{{asset('public/frontend/img/icon-2.png')}}" alt="">
                        </div>
                        <div class="sb-text">
                            <h6>Delivery on time</h6>
                            <p>If good have prolems</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-benefit">
                        <div class="sb-icon">
                            <img src="{{asset('public/frontend/img/icon-3.png')}}" alt="">
                        </div>
                        <div class="sb-text">
                            <h6>Secure payment</h6>
                            <p>100% secure payment</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Latest Blog Section End-->

@endsection
