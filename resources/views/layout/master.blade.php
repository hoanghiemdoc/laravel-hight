<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="codelean Template">
    <meta name="keywords" content="codelean, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | CodeLean eCommerce</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/themify-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/style.css')}}" type="text/css">
</head>

<body>
<!-- Start coding here -->
<!--Page Preloader -->
<div id="preloder">
    <div class="loader"></div>
</div>
<!--Header section begin -->
<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="ht-left">
                <div class="mail-service">
                    <i class="fa fa-envelope"></i>
                    dat3578@gmail.com
                </div>
                <div class="phone-service">
                    <i class="fa fa-phone"></i>
                    +84 0394480757
                </div>
            </div>
            <div class="ht-right">
                <a href="{{asset('login.html')}}" class="login-panel"><i class="fa fa-user"></i>Login </a>
                <div class="lan-selector">
                    <select class="language_drop" name="countries" id="countries" style="width: 300px;">
                        <option value="yt" data-image="{{asset('public/frontend/img/flag-1.jpg')}}" data-imagecss="flag-yt" data-title="English" >
                            English
                        </option>

                        <option value="yu" data-image="{{asset('public/frontend/img/flag-2.jpg')}}" data-imagecss="flag-yu" data-title="Bangladesh" >
                            German
                        </option>
                    </select>
                </div>
                <div class="top-social">
                    <a href="#"><i class="ti-facebook"></i></a>
                    <a href="#"><i class="ti-twitter-alt"></i></a>
                    <a href="#"><i class="ti-linkedin"></i></a>
                    <a href="#"><i class="ti-pinterest"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="inner-header">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="logo">
                        <a href="{{asset('index.html')}}">
                            <img src="{{asset('public/frontend/img/logo.png')}}" height="25" alt="0">
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="advanced-search">
                        <button type="button" class="category-btn">All Category</button>
                        <div class="input-group" >
                            <input type="text" placeholder="What do you need?">
                            <button type="button"><i class="ti-search" ></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 text-right">
                    <ul class="nav-right">
                        <li class="heart-icon">
                            <a href="#">
                                <i class="icon_heart_alt"></i>
                                <span>1</span>
                            </a>
                        </li>
                        <li class="cart-icon">
                            <a href="#" >
                                <i  class="icon_bag_alt">
                                </i>
                                <span>3</span>
                            </a>
                            <div class="cart-hover">
                                <div class="select-items">
                                    <table>
                                        <tbody>
                                        <tr>
                                            <td class="si-pic"><img src="{{asset('public/frontend/img/select-product-1.jpg')}}"></td>
                                            <td class="si-text">
                                                <div class="product-selected">
                                                    <p>$60.00 x 1</p>
                                                    <h6>Kabino Beside Table</h6>
                                                </div>
                                            </td>
                                            <td class="si-close">
                                                <i class="ti-close"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="si-pic"><img src="{{asset('public/frontend/img/select-product-2.jpg')}}"></td>
                                            <td class="si-text">
                                                <div class="product-selected">
                                                    <p>$60.00 x 1</p>
                                                    <h6>Kabino Beside Table</h6>
                                                </div>
                                            </td>
                                            <td class="si-close">
                                                <i class="ti-close"></i>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="select-total">
                                    <span>total:</span>
                                    <h5>$120.00</h5>
                                </div>
                                <div class="select-button">
                                    <a href="{{asset('shopping-cart.html')}}" class="primary-btn view-card">VIEW CARD</a>
                                    <a href="{{asset('check-out.html')}}" class="primary-btn checkout-btn">CHECK OUT</a>
                                </div>
                            </div>
                        </li>
                        <li  class="cart-price">$150.00</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="nav-item">
        <div class="container">
            <div class="nav-depart">
                <div class="depart-btn">
                    <i class="ti-menu"></i>
                    <span>
              All departments
            </span>
                    <ul class="depart-hover">
                        <li class="active"><a href="#">Women's Clothing</a> </li>
                        <li><a href="#">Men's Clothing </a> </li>
                        <li><a href="#">Underwear</a> </li>
                        <li><a href="#">Kid's Clothing</a> </li>
                        <li><a href="#">Brand codeleamon</a> </li>
                        <li><a href="#">Accessories/Shoes</a> </li>
                        <li><a href="#">Luxury Brand</a> </li>
                        <li><a href="#">Brand Outdoor Appriel</a> </li>
                    </ul>
                </div>
            </div>
            <nav class="nav-menu mobile-menu">
                <ul>
                    <li class="active"><a href="{{asset('index.html')}}">Home</a> </li>
                    <li><a href="{{asset('shop.html')}}">Shop</a> </li>
                    <li> <a href="">Collection</a>
                        <ul class="dropdown">
                            <li><a href="">Men's</a> </li>
                            <li><a href="" >Wommen's</a></li>
                            <li><a href="">Kid's</a> </li>
                        </ul>
                    </li>
                    <li><a href="{{asset('blog.html')}}">Blog</a> </li>
                    <li><a href="{{asset('')}}contact.html">Contact</a> </li>
                    <li><a href="">Pages</a>
                        <ul class="dropdown">
                            <li><a href="{{asset('blog-details.html')}}">Blog Details</a> </li>
                            <li><a href="{{asset('shopping-cart.html')}}">Shopping Cart</a> </li>
                            <li><a href="{{asset('check-out.html')}}">Check Out</a> </li>
                            <li><a href="{{asset('faq.html')}}" >Faq</a></li>
                            <li><a href="{{asset('register.html')}}">Register</a> </li>
                            <li><a href="{{asset('login.html')}}">Login</a> </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <div id="mobile-menu-wrap"></div>
        </div>
    </div>
</header>
<!--Header section End-->


{{--BODY HERE--}}
@yield('body')  {{--// thực hiện phân vùng mỗi trang --}}

<!--Partner Logo Section Begin-->
<div class="partner-logo">
    <div class="container">
        <div class="logo-carousel owl-carousel">
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="{{asset('public/frontend/img/logo-carousel/logo-1.png')}}">
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="{{asset('public/frontend/img/logo-carousel/logo-2.png')}}">
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="{{asset('public/frontend/img/logo-carousel/logo-3.png')}}">
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="{{asset('public/frontend/img/logo-carousel/logo-4.png')}}">
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="{{asset('public/frontend/img/logo-carousel/logo-5.png')}}">
                </div>
            </div>
        </div>
    </div>
</div>

<!--Partner Logo Section End-->

<!-- Footer Section Begin-->

<footer class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer-left">
                    <div class="footer-logo">
                        <a href="{{asset('index.html')}}">
                            <img src="{{asset('public/frontend/img/footer-logo.png')}}" alt="" height="25px">
                        </a>
                    </div>
                    <ul>
                        <li>NGUYET CAU TAM GIANG</li>
                        <li>Phone: 0394480757</li>
                        <li>Email: dat3578@gmail.com</li>
                    </ul>
                    <div class="footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 offset-lg-1">
                <div class="footer-widget">
                    <h5>Information</h5>
                    <ul>
                        <li><a href="">About us</a> </li>
                        <li><a href="">Checkout</a> </li>
                        <li><a href="">Contact</a> </li>
                        <li><a href="">Servivius</a> </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="footer-widget">
                    <h5>My Account</h5>
                    <ul>
                        <li><a href="">My Account</a> </li>
                        <li><a href="">Checkout</a> </li>
                        <li><a href="">Shopping Cart</a> </li>
                        <li><a href="">Shop</a> </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="newslatter-item">
                    <h5>Join Our Newsletter Now</h5>
                    <p>Get E-mail updates about our lastest shop and special offerst</p>
                    <form action="#" class="subscribe-form">
                        <input type="text" placeholder="Enter your email">
                        <button type="button">Subcribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-reserved">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-text">
                        Copyright <script>document.write(new Date().getFullYear());</script>All rights resserved | This template is made width<i class="fa fa-heart-o"></i>by <a href="https://Codelean.vn" target="_blank">Codelean</a>
                    </div>
                    <div class="payment-pic">
                        <img src="{{asset('public/frontend/img/payment-method.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section Begin-->

<!-- Js Plugins -->

<script src="{{asset('public/frontend/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('public/frontend/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('public/frontend/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('public/frontend/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('public/frontend/js/jquery.zoom.min.js')}}"></script>
<script src="{{asset('public/frontend/js/jquery.dd.min.js')}}"></script>
<script src="{{asset('public/frontend/js/jquery.slicknav.js')}}"></script>
<script src="{{asset('public/frontend/js/owl.carousel.min.js')}}"></script>
{{--thêm muc xử lý carousel vào đây--}}

<script src="public/frontend/js/owlcarousel2-filter.min.js"></script>

<script src="public/frontend/js/main.js"></script>
</body>

</html>