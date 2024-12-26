<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>XeMart - Ecommerce Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}">
    <!-- Animate Css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">
    <!-- Owl Slider -->
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
    <!-- Custom Style -->
    <link rel="stylesheet" href="{{ asset('frontend/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="load-list">
            <div class="load"></div>
            <div class="load load2"></div>
        </div>
    </div>
    <!-- End Preloader -->
    <!-- Top Bar 2 -->
    <section class="top-bar2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="top-right text-right">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item"><a href=""><img
                                        src="{{ asset('frontend/images/user.png') }}">
                                    我的帳戶</a></li>
                            <li class="list-inline-item"><a href=""><img
                                        src="{{ asset('frontend/images/wishlist.png') }}">
                                    願望清單</a>
                            </li>
                            <li class="list-inline-item"><a href=""><img
                                        src="{{ asset('frontend/images/checkout.png') }}">
                                    結帳</a>
                            </li>
                            <li class="list-inline-item"><a href=""><img
                                        src="{{ asset('frontend/images/login.png') }}">
                                    登入</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Top Bar 2 -->
    <!-- Logo Area 2 -->
    <section class="logo-area2">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="logo">
                        <a href=""><img src="{{ asset('frontend/images/logo.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-7 padding-fix">
                    <form action="#" class="search-bar d-flex">
                        <input type="text" name="search-bar" placeholder="查詢商品名稱">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <div class="col-lg-3 col-md-2">
                    <div class="carts-area d-flex">
                        <div class="wsh-box ml-auto">
                            <a href="" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                <img src="{{ asset('frontend/images/heart.png') }}" alt="favorite">
                                <span>0</span>
                            </a>
                        </div>
                        <div class="cart-box ml-4">
                            <a href="" data-toggle="tooltip" data-placement="top" title="Shopping Cart"
                                class="cart-btn">
                                <img src="{{ asset('frontend/images/cart.png') }}" alt="cart">
                                <span>2</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Logo Area 2 -->
    <!-- Cart Body -->
    <div class="cart-body">
        <div class="close-btn">
            <button class="close-cart">
                <img src="{{ asset('frontend/images/close.png') }}" alt="">
                關閉
            </button>
        </div>
        <div class="crt-bd-box">
            <div class="cart-heading text-center">
                <h5>購物車</h5>
            </div>
            <div class="cart-content">
                <div class="content-item d-flex justify-content-between">
                    <div class="cart-img">
                        <a href=""><img src="{{ asset('frontend/images/cart1.png') }}" alt=""></a>
                    </div>
                    <div class="cart-disc">
                        <p><a href="">商品一</a></p>
                        <span>1 x $199.00</span>
                    </div>
                    <div class="delete-btn">
                        <a href=""><i class="fa fa-trash-o"></i></a>
                    </div>
                </div>
                <div class="content-item d-flex justify-content-between">
                    <div class="cart-img">
                        <a href=""><img src="{{ asset('frontend/images/cart2.png') }}" alt=""></a>
                    </div>
                    <div class="cart-disc">
                        <p><a href="">商品二</a></p>
                        <span>1 x $199.00</span>
                    </div>
                    <div class="delete-btn">
                        <a href=""><i class="fa fa-trash-o"></i></a>
                    </div>
                </div>
            </div>
            <div class="cart-btm">
                <p class="text-right">總計: <span>$398.00</span></p>
                <a href="#">結帳</a>
            </div>
        </div>
    </div>
    <div class="cart-overlay"></div>
    <!-- End Cart Body -->
    <!-- Sticky Menu -->
    <section class="sticky-menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-3">
                    <div class="sticky-logo">
                        <a href="index.html"><img src="{{ asset('frontend/images/logo.png') }}" alt=""
                                class="img-fluid"></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-7">
                    <div class="main-menu">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item"><a>首頁 <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown list-unstyled">
                                    <li><a href="index.html">首頁一</a></li>
                                    <li><a href="02-home-two.html">首頁二</a></li>
                                </ul>
                            </li>
                            <li class="list-inline-item mega-menu"><a>商品分類 <i class="fa fa-angle-down"></i></a>
                                <div class="mega-box">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="clt-area">
                                                <h6>衣服</h6>
                                                <div class="link-box">
                                                    <a href="">- 西裝</a>
                                                    <a href="">- 傳統服飾</a>
                                                    <a href="">- 冬裝</a>
                                                    <a href="">- 夏裝</a>
                                                    <a href="">- 內衣</a>
                                                    <a href="">- 睡衣</a>
                                                    <a href="">- 男裝</a>
                                                    <a href="">- 女裝</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="sm-phn">
                                                <h6>電子商品</h6>
                                                <div class="dept-box">
                                                    <a href="">- 三星</a>
                                                    <a href="">- 華為</a>
                                                    <a href="">- 一加</a>
                                                    <a href="">- 小米</a>
                                                    <a href="">- 蘋果</a>
                                                    <a href="">- Blackberry</a>
                                                    <a href="">- Nokia</a>
                                                    <a href="">- Oppo</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="lt-news">
                                                <h6>最新消息</h6>
                                                <div class="news-box d-flex">
                                                    <div class="news-img">
                                                        <img src="{{ asset('frontend/images/mega-img-1.jpg') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="news-con">
                                                        <p>Lorem ipsum dolor sit...</p>
                                                        <span>Feb 10, 2020</span>
                                                    </div>
                                                </div>
                                                <div class="news-box d-flex">
                                                    <div class="news-img">
                                                        <img src="{{ asset('frontend/images/mega-img-2.jpg') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="news-con">
                                                        <p>Lorem ipsum dolor sit...</p>
                                                        <span>Feb 12, 2020</span>
                                                    </div>
                                                </div>
                                                <div class="news-box d-flex">
                                                    <div class="news-img">
                                                        <img src="{{ asset('frontend/images/mega-img-3.jpg') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="news-con">
                                                        <p>Lorem ipsum dolor sit...</p>
                                                        <span>Feb 21, 2020</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="m-slider owl-carousel">
                                                <div class="slider-item">
                                                    <img src="{{ asset('frontend/images/mega-1.jpg') }}"
                                                        alt="" class="img-fluid">
                                                    <span>-65%</span>
                                                </div>
                                                <div class="slider-item">
                                                    <img src="{{ asset('frontend/images/mega-2.jpg') }}"
                                                        alt="" class="img-fluid">
                                                    <span>-50%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mega-bnr">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <a href="#" class="bnr-box text-center">
                                                            <img src="{{ asset('frontend/images/mega-b-1.jpg') }}"
                                                                alt="">
                                                            <span>相機</span>
                                                        </a>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <a href="#" class="bnr-box text-center">
                                                            <img src="{{ asset('frontend/images/mega-b-2.jpg') }}"
                                                                alt="">
                                                            <span>滑鼠</span>
                                                        </a>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <a href="#" class="bnr-box text-center">
                                                            <img src="{{ asset('frontend/images/mega-b-3.jpg') }}"
                                                                alt="">
                                                            <span>耳機</span>
                                                        </a>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <a href="#" class="bnr-box text-center">
                                                            <img src="{{ asset('frontend/images/mega-b-4.jpg') }}"
                                                                alt="">
                                                            <span>喇叭</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-inline-item"><a>頁面 <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown list-unstyled">
                                    <li><a href="03-about-us.html">關於我們</a></li>
                                    <li><a href="04-category.html">商品分類</a></li>
                                    <li><a href="05-single-product.html">單一商品</a></li>
                                    <li><a href="06-shopping-cart.html">購物車</a></li>
                                    <li><a href="07-checkout.html">結帳</a></li>
                                    <li><a href="08-login.html">登入</a></li>
                                    <li><a href="09-register.html">註冊</a></li>
                                    <li><a href="10-wishlist.html">願望清單</a></li>
                                    <li><a href="11-compare.html">比較</a></li>
                                    <li><a href="15-track-order.html">追蹤訂單</a></li>
                                    <li><a href="12-terms-condition.html">條款及條件</a></li>
                                    <li><a href="13-faq.html">常見問題</a></li>
                                    <li><a href="14-404.html">404</a></li>
                                </ul>
                            </li>
                            <li class="list-inline-item"><a>部落格 <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown list-unstyled">
                                    <li><a href="16-blog-one.html">部落格一</a></li>
                                    <li><a href="17-blog-two.html">部落格二</a></li>
                                    <li><a href="18-blog-three.html">部落格三</a></li>
                                    <li><a href="19-blog-details.html">部落格詳情</a></li>
                                </ul>
                            </li>
                            <li class="list-inline-item"><a href="20-contact.html">聯絡我們</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-2">
                    <div class="carts-area d-flex">
                        <div class="src-box">
                            <form action="#">
                                <input type="text" name="search" placeholder="Search Here">
                                <button type="button" name="button"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div class="wsh-box ml-auto">
                            <a href="" data-toggle="tooltip" data-placement="top" title="願望清單">
                                <img src="{{ asset('frontend/images/heart.png') }}" alt="favorite">
                                <span>0</span>
                            </a>
                        </div>
                        <div class="cart-box ml-4">
                            <a href="" data-toggle="tooltip" data-placement="top" title="購物車"
                                class="cart-btn">
                                <img src="{{ asset('frontend/images/cart.png') }}" alt="cart">
                                <span>2</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Sticky Menu -->
    <!-- Menu Area 2 -->
    <section class="menu-area2">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-0">
                    <div class="sidemenu">
                        <p>所有分類 <i class="fa fa-bars"></i></p>
                        <ul class="list-unstyled gt-menu">
                            <li><a href=""><img src="{{ asset('frontend/images/m-cloth.png') }}"
                                        alt="">男裝<i class="fa fa-angle-right"></i></a>
                                <div class="mega-menu">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="smartphone">
                                                <h6>手機</h6>
                                                <a href="">- Samsung</a>
                                                <a href="">- Huawei</a>
                                                <a href="">- Asus</a>
                                                <a href="">- Sony</a>
                                                <a href="">- Apple</a>
                                                <a href="">- Xiaomi</a>
                                                <a href="">- Oppo</a>
                                                <a href="">- One Plus</a>
                                                <a href="">- Nokia</a>
                                                <a href="">- Htc</a>
                                                <a href="">- Vivo</a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="tablet">
                                                <h6>平板</h6>
                                                <a href="">- Samsung</a>
                                                <a href="">- Huawei</a>
                                                <a href="">- Apple</a>
                                                <a href="">- Xiaomi</a>
                                                <a href="">- Sony</a>
                                                <a href="">- Asus</a>
                                            </div>
                                            <div class="f-phone">
                                                <h6>功能手機</h6>
                                                <a href="">- Samsung</a>
                                                <a href="">- Nokia</a>
                                                <a href="">- Infinix</a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="accesories">
                                                <h6>配件</h6>
                                                <a href="">- 行動電源</a>
                                                <a href="">- 電池及充電器</a>
                                                <a href="">- 線材及配件</a>
                                                <a href="">- 背蓋/翻蓋保護套</a>
                                                <a href="">- 螢幕保護貼</a>
                                                <a href="">- 耳機</a>
                                                <a href="">- 記憶卡</a>
                                                <a href="">- 手機殼</a>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mg-bnr">
                                                <img src="{{ asset('frontend/images/ipn.png') }}" alt="">
                                                <div class="mg-content text-right">
                                                    <h4>iPhone</h4>
                                                    <span>最高省50%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href=""><img src="{{ asset('frontend/images/w-cloth.png') }}"
                                        alt="">Women's Clothing<i class="fa fa-angle-right"></i></a>
                                <div class="mega-menu">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="smartphone">
                                                <h6>手機</h6>
                                                <a href="">- Samsung</a>
                                                <a href="">- Huawei</a>
                                                <a href="">- Asus</a>
                                                <a href="">- Sony</a>
                                                <a href="">- Apple</a>
                                                <a href="">- Xiaomi</a>
                                                <a href="">- Oppo</a>
                                                <a href="">- One Plus</a>
                                                <a href="">- Nokia</a>
                                                <a href="">- Htc</a>
                                                <a href="">- Vivo</a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="tablet">
                                                <h6>平板</h6>
                                                <a href="">- Samsung</a>
                                                <a href="">- Huawei</a>
                                                <a href="">- Apple</a>
                                                <a href="">- Xiaomi</a>
                                                <a href="">- Sony</a>
                                                <a href="">- Asus</a>
                                            </div>
                                            <div class="f-phone">
                                                <h6>功能手機</h6>
                                                <a href="">- Samsung</a>
                                                <a href="">- Nokia</a>
                                                <a href="">- Infinix</a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="accesories">
                                                <h6>配件</h6>
                                                <a href="">- 行動電源</a>
                                                <a href="">- 電池及充電器</a>
                                                <a href="">- 線材及配件</a>
                                                <a href="">- 背蓋/翻蓋保護套</a>
                                                <a href="">- 螢幕保護貼</a>
                                                <a href="">- 耳機</a>
                                                <a href="">- 記憶卡</a>
                                                <a href="">- 手機殼</a>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mg-bnr tab-bnr">
                                                <img src="{{ asset('frontend/images/tab.png') }}" alt="">
                                                <div class="mg-content text-right"></div>
                                                    <h4>平板</h4>
                                                    <span>最高省50%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href=""><img src="{{ asset('frontend/images/ele.png') }}"
                                        alt="">Electronics<i class="fa fa-angle-right"></i></a>
                                <div class="mega-menu">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="smartphone">
                                                <h6>手機</h6>
                                                <a href="">- Samsung</a>
                                                <a href="">- Huawei</a>
                                                <a href="">- Asus</a>
                                                <a href="">- Sony</a>
                                                <a href="">- Apple</a>
                                                <a href="">- Xiaomi</a>
                                                <a href="">- Oppo</a>
                                                <a href="">- One Plus</a>
                                                <a href="">- Nokia</a>
                                                <a href="">- Htc</a>
                                                <a href="">- Vivo</a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="tablet">
                                                <h6>平板</h6>
                                                <a href="">- Samsung</a>
                                                <a href="">- Huawei</a>
                                                <a href="">- Apple</a>
                                                <a href="">- Xiaomi</a>
                                                <a href="">- Sony</a>
                                                <a href="">- Asus</a>
                                            </div>
                                            <div class="f-phone">
                                                <h6>功能手機</h6>
                                                <a href="">- Samsung</a>
                                                <a href="">- Nokia</a>
                                                <a href="">- Infinix</a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="accesories">
                                                <h6>配件</h6>
                                                <a href="">- 行動電源</a>
                                                <a href="">- 電池及充電器</a>
                                                <a href="">- 線材及配件</a>
                                                <a href="">- 背蓋/翻蓋保護套</a>
                                                <a href="">- 螢幕保護貼</a>
                                                <a href="">- 耳機</a>
                                                <a href="">- 記憶卡</a>
                                                <a href="">- 手機殼</a>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mg-bnr pw-bnr">
                                                <img src="{{ asset('frontend/images/pbank.png') }}" alt="">
                                                <div class="mg-content text-right">
                                                    <h4>Powerbank</h4>
                                                    <span>最高省50%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href=""><img src="{{ asset('frontend/images/sm.png') }}"
                                        alt="">手機&平板</a>
                            </li>
                            <li><a href=""><img src="{{ asset('frontend/images/com.png') }}"
                                        alt="">電腦&辦公室</a></li>
                            <li><a href=""><img src="{{ asset('frontend/images/tv.png') }}"
                                        alt="">家電</a></li>
                            <li><a href=""><img src="{{ asset('frontend/images/shoe.png') }}"
                                        alt="">皮件&鞋</a></li>
                            <li><a href=""><img src="{{ asset('frontend/images/kid.png') }}"
                                        alt="">小孩&嬰兒</a></li>
                            <li><a href=""><img src="{{ asset('frontend/images/watch.png') }}"
                                        alt="">珠寶&手錶</a>
                            </li>
                            <li><a href=""><img src="{{ asset('frontend/images/health.png') }}"
                                        alt="">健康&美容</a>
                            </li>
                            <li><a href=""><img src="{{ asset('frontend/images/car.png') }}"
                                        alt="">汽車</a></li>
                            <li><a href=""><img src="{{ asset('frontend/images/sport.png') }}"
                                        alt="">運動&戶外</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12">
                    <div class="main-menu">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item">
                                <a>首頁 <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown list-unstyled">
                                    <li><a href="index.html">首頁一</a></li>
                                    <li><a href="02-home-two.html">首頁二</a></li>
                                </ul>
                            </li>
                            <li class="list-inline-item">
                                <a>會員專區 <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown list-unstyled">
                                    <li><a href="{{ route('login') }}">登入</a></li>
                                    <li><a href="{{ route('register') }}">加入會員</a></li>
                                    <li><a href="{{ route('forget') }}">忘記密碼</a></li>
                                </ul>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">關於我們</a>
                            </li>
                            <li class="list-inline-item"><a>最新消息 <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown list-unstyled">
                                    <li><a href="16-blog-one.html">Blog Style 1</a></li>
                                    <li><a href="17-blog-two.html">Blog Style 2</a></li>
                                    <li><a href="18-blog-three.html">Blog Style 3</a></li>
                                    <li><a href="19-blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">常見問題 <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown list-unstyled">
                                    <li><a href="#">會員購物相關聲明</a></li>
                                    <li><a href="#">退換貨說明</a></li>
                                    <li><a href="#">隱私權聲明</a></li>
                                </ul>
                            </li>
                            <li class="list-inline-item cup-btn"><a href="">取得優惠券</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Menu Area 2 -->
    <!-- Mobile Menu -->
    <section class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <a href=""><img src="{{ asset('frontend/images/logo.png') }}" alt=""></a>
                            <a href=""><span>登入</span></a>
                            <ul class="list-unstyled">
                                <li><a href="">首頁</a>
                                    <ul class="list-unstyled">
                                        <li><a href="index.html">首頁一</a></li>
                                        <li><a href="02-home-two.html">首頁二</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">會員專區</a>
                                    <ul class="list-unstyled">
                                        <li><a href="{{ route('login') }}">登入</a></li>
                                        <li><a href="{{ route('register') }}">加入會員</a></li>
                                        <li><a href="{{ route('forget') }}">忘記密碼</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">關於我們</a>
                                </li>
                                <li><a href="">最新消息</a>
                                    <ul class="list-unstyled">
                                        <li><a href="16-blog-one.html">Blog Style 1</a></li>
                                        <li><a href="17-blog-two.html">Blog Style 2</a></li>
                                        <li><a href="18-blog-three.html">Blog Style 3</a></li>
                                        <li><a href="19-blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">常見問題</a>
                                    <ul class="list-unstyled">
                                        <li><a href="#">會員購物相關聲明</a></li>
                                        <li><a href="#">退換貨說明</a></li>
                                        <li><a href="#">隱私權聲明</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Mobile Menu -->
    <!-- Slider Area 2 -->
    <section class="slider-area2">
        <div class="slider-wrapper owl-carousel">
            <div class="slider-item slider1">
                <div class="slider-table">
                    <div class="slider-tablecell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4 col-sm-0">
                                    <div class="img1 wow fadeInRight effect" data-wow-duration="1s"
                                        data-wow-delay="0s">
                                        <img src="{{ asset('frontend/images/sm-1.png') }}" alt=""
                                            class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="slider-box">
                                        <div class="wow fadeInUp effect" data-wow-duration="1.2s"
                                            data-wow-delay="0.5s">
                                            <h4>手機優惠</h4>
                                        </div>
                                        <div class="wow fadeInUp effect" data-wow-duration="1.2s"
                                            data-wow-delay="0.6s">
                                            <h1>Huawei Honor 8x | 8x Max</h1>
                                        </div>
                                        <div class="wow fadeInUp effect" data-wow-duration="1.2s"
                                            data-wow-delay="0.7s">
                                            <p>手機優惠</p>
                                        </div>
                                        <div class="wow fadeInUp effect" data-wow-duration="1.2s"
                                            data-wow-delay="0.8s">
                                            <a href="#">了解更多</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item slider2">
                <div class="slider-table">
                    <div class="slider-tablecell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="slider-box">
                                        <div class="wow fadeInUp effect" data-wow-duration="1.2s"
                                            data-wow-delay="0.5s">
                                            <h4>手機優惠</h4>
                                        </div>
                                        <div class="wow fadeInUp effect" data-wow-duration="1.2s"
                                            data-wow-delay="0.6s">
                                            <h1>Samsung Galaxy S9 | S9+</h1>
                                        </div>
                                        <div class="wow fadeInUp effect" data-wow-duration="1.2s"
                                            data-wow-delay="0.7s">
                                            <p>手機優惠</p>
                                        </div>
                                        <div class="wow fadeInUp effect" data-wow-duration="1.2s"
                                            data-wow-delay="0.8s">
                                            <a href="#">了解更多</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="img2 wow fadeInRight effect" data-wow-duration="1s"
                                        data-wow-delay="0s">
                                        <img src="{{ asset('frontend/images/sm-2.png') }}" alt=""
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Slider Area 2 -->
    <!-- Service Area -->
    <section class="service-area">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="service-box d-flex">
                        <div class="sr-img">
                            <img src="{{ asset('frontend/images/service-1.png') }}" alt="">
                        </div>
                        <div class="">
                            <h6>免運費</h6>
                            <p>Ullam et rem cum totam accusantium quos dolorem.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box d-flex">
                        <div class="sr-img">
                            <img src="{{ asset('frontend/images/service-2.png') }}" alt="">
                        </div>
                        <div class="">
                            <h6>退貨保證</h6>
                            <p>Ullam et rem cum totam accusantium quos dolorem.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box d-flex">
                        <div class="sr-img">
                            <img src="{{ asset('frontend/images/service-3.png') }}" alt="">
                        </div>
                        <div class="">
                            <h6>安全付款</h6>
                            <p>Ullam et rem cum totam accusantium quos dolorem.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Service Area -->
    <!-- Feature Product Area -->
    <section class="feat-pro2">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="sec-title">
                        <h5>熱門商品</h5>
                    </div>
                    <div class="feat-box">
                        <img src="{{ asset('frontend/images/appliance.jpg') }}" alt="" class="img-fluid">
                        <div class="ft-bx-content">
                            <h5>熱門商品</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-12 padding-fix-l20">
                            <div class="ftr-product">
                                <div class="tab-box d-flex justify-content-end">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#all">全部</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#elec">電子產品</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#smart">手機</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#shoe">鞋類</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="all" role="tabpanel">
                                        <div class="tab-slider owl-carousel">
                                            <div class="tab-item">
                                                <div class="tab-img">
                                                    <img class="main-img img-fluid"
                                                        src="{{ asset('frontend/images/tab-1.png') }}"
                                                        alt="">
                                                    <img class="sec-img img-fluid"
                                                        src="{{ asset('frontend/images/tab-16.png') }}"
                                                        alt="">
                                                    <div class="layer-box">
                                                        <a href="" class="it-comp" data-toggle="tooltip"
                                                            data-placement="left" title="比較"><img
                                                                src="{{ asset('frontend/images/it-comp.png') }}"
                                                                alt=""></a>
                                                        <a href="" class="it-fav" data-toggle="tooltip"
                                                            data-placement="left" title="收藏"><img
                                                                src="{{ asset('frontend/images/it-fav.png') }}"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="tab-heading">
                                                    <p><a href="">Samsung Smart Led Tv 42"</a></p>
                                                </div>
                                                <div class="img-content d-flex justify-content-between">
                                                    <div>
                                                        <ul class="list-unstyled list-inline fav">
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star-o"></i>
                                                            </li>
                                                        </ul>
                                                        <ul class="list-unstyled list-inline price">
                                                            <li class="list-inline-item">$120.00</li>
                                                            <li class="list-inline-item">$150.00</li>
                                                        </ul>
                                                    </div>
                                                    <div>
                                                        <a href="" data-toggle="tooltip" data-placement="top"
                                                            title="加入購物車"><img
                                                                src="{{ asset('frontend/images/it-cart.png') }}"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-item">
                                                <div class="tab-img">
                                                    <img class="main-img img-fluid"
                                                        src="{{ asset('frontend/images/tab-2.png') }}"
                                                        alt="">
                                                    <img class="sec-img img-fluid"
                                                        src="{{ asset('frontend/images/tab-16.png') }}"
                                                        alt="">
                                                    <span class="sale">Sale</span>
                                                    <div class="layer-box">
                                                        <a href="" class="it-comp" data-toggle="tooltip"
                                                            data-placement="left" title="比較"><img
                                                                src="{{ asset('frontend/images/it-comp.png') }}"
                                                                alt=""></a>
                                                        <a href="" class="it-fav" data-toggle="tooltip"
                                                            data-placement="left" title="收藏"><img
                                                                src="{{ asset('frontend/images/it-fav.png') }}"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="tab-heading">
                                                    <p><a href="">Samsung Smart Led Tv 42"</a></p>
                                                </div>
                                                <div class="img-content d-flex justify-content-between">
                                                    <div>
                                                        <ul class="list-unstyled list-inline fav">
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star-o"></i>
                                                            </li>
                                                        </ul>
                                                        <ul class="list-unstyled list-inline price">
                                                            <li class="list-inline-item">$120.00</li>
                                                            <li class="list-inline-item">$150.00</li>
                                                        </ul>
                                                    </div>
                                                    <div>
                                                        <a href="" data-toggle="tooltip" data-placement="top"
                                                            title="加入購物車"><img
                                                                src="{{ asset('frontend/images/it-cart.png') }}"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-item">
                                                <div class="tab-img">
                                                    <img class="main-img img-fluid"
                                                        src="{{ asset('frontend/images/tab-3.png') }}"
                                                        alt="">
                                                    <img class="sec-img img-fluid"
                                                        src="{{ asset('frontend/images/tab-16.png') }}"
                                                        alt="">
                                                    <div class="layer-box">
                                                        <a href="" class="it-comp" data-toggle="tooltip"
                                                            data-placement="left" title="比較"><img
                                                                src="{{ asset('frontend/images/it-comp.png') }}"
                                                                alt=""></a>
                                                        <a href="" class="it-fav" data-toggle="tooltip"
                                                            data-placement="left" title="收藏"><img
                                                                src="{{ asset('frontend/images/it-fav.png') }}"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="tab-heading">
                                                    <p><a href="">Samsung Smart Led Tv 42"</a></p>
                                                </div>
                                                <div class="img-content d-flex justify-content-between">
                                                    <div>
                                                        <ul class="list-unstyled list-inline fav">
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star-o"></i>
                                                            </li>
                                                        </ul>
                                                        <ul class="list-unstyled list-inline price">
                                                            <li class="list-inline-item">$120.00</li>
                                                            <li class="list-inline-item">$150.00</li>
                                                        </ul>
                                                    </div>
                                                    <div>
                                                        <a href="" data-toggle="tooltip" data-placement="top"
                                                            title="加入購物車"><img
                                                                src="{{ asset('frontend/images/it-cart.png') }}"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-item">
                                                <div class="tab-img">
                                                    <img class="main-img img-fluid"
                                                        src="{{ asset('frontend/images/tab-4.png') }}"
                                                        alt="">
                                                    <img class="sec-img img-fluid"
                                                        src="{{ asset('frontend/images/tab-16.png') }}"
                                                        alt="">
                                                    <div class="layer-box">
                                                        <a href="" class="it-comp" data-toggle="tooltip"
                                                            data-placement="left" title="比較"><img
                                                                src="{{ asset('frontend/images/it-comp.png') }}"
                                                                alt=""></a>
                                                        <a href="" class="it-fav" data-toggle="tooltip"
                                                            data-placement="left" title="收藏"><img
                                                                src="{{ asset('frontend/images/it-fav.png') }}"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="tab-heading">
                                                    <p><a href="">Samsung Smart Led Tv 42"</a></p>
                                                </div>
                                                <div class="img-content d-flex justify-content-between">
                                                    <div>
                                                        <ul class="list-unstyled list-inline fav">
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star-o"></i>
                                                            </li>
                                                        </ul>
                                                        <ul class="list-unstyled list-inline price">
                                                            <li class="list-inline-item">$120.00</li>
                                                            <li class="list-inline-item">$150.00</li>
                                                        </ul>
                                                    </div>
                                                    <div>
                                                        <a href="" data-toggle="tooltip" data-placement="top"
                                                            title="加入購物車"><img
                                                                src="{{ asset('frontend/images/it-cart.png') }}"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="elec" role="tabpanel">
                                        <div class="tab-slider owl-carousel">
                                            <div class="tab-item">
                                                <div class="tab-img">
                                                    <img class="main-img img-fluid"
                                                        src="{{ asset('frontend/images/tab-5.png') }}"
                                                        alt="">
                                                    <img class="sec-img img-fluid"
                                                        src="{{ asset('frontend/images/tab-16.png') }}"
                                                        alt="">
                                                    <div class="layer-box">
                                                        <a href="" class="it-comp" data-toggle="tooltip"
                                                            data-placement="left" title="比較"><img
                                                                src="{{ asset('frontend/images/it-comp.png') }}"
                                                                alt=""></a>
                                                        <a href="" class="it-fav" data-toggle="tooltip"
                                                            data-placement="left" title="收藏"><img
                                                                src="{{ asset('frontend/images/it-fav.png') }}"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="tab-heading">
                                                    <p><a href="">Samsung Smart Led Tv 42"</a></p>
                                                </div>
                                                <div class="img-content d-flex justify-content-between">
                                                    <div>
                                                        <ul class="list-unstyled list-inline fav">
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star-o"></i>
                                                            </li>
                                                        </ul>
                                                        <ul class="list-unstyled list-inline price">
                                                            <li class="list-inline-item">$120.00</li>
                                                            <li class="list-inline-item">$150.00</li>
                                                        </ul>
                                                    </div>
                                                    <div>
                                                        <a href="" data-toggle="tooltip" data-placement="top"
                                                            title="加入購物車"><img
                                                                src="{{ asset('frontend/images/it-cart.png') }}"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-item">
                                                <div class="tab-img">
                                                    <img class="main-img img-fluid"
                                                        src="{{ asset('frontend/images/tab-6.png') }}"
                                                        alt="">
                                                    <img class="sec-img img-fluid"
                                                        src="{{ asset('frontend/images/tab-16.png') }}"
                                                        alt="">
                                                    <span class="new">New</span>
                                                    <div class="layer-box">
                                                        <a href="" class="it-comp" data-toggle="tooltip"
                                                            data-placement="left" title="比較"><img
                                                                src="{{ asset('frontend/images/it-comp.png') }}"
                                                                alt=""></a>
                                                        <a href="" class="it-fav" data-toggle="tooltip"
                                                            data-placement="left" title="收藏"><img
                                                                src="{{ asset('frontend/images/it-fav.png') }}"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="tab-heading">
                                                    <p><a href="">Samsung Smart Led Tv 42"</a></p>
                                                </div>
                                                <div class="img-content d-flex justify-content-between">
                                                    <div>
                                                        <ul class="list-unstyled list-inline fav">
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star-o"></i>
                                                            </li>
                                                        </ul>
                                                        <ul class="list-unstyled list-inline price">
                                                            <li class="list-inline-item">$120.00</li>
                                                            <li class="list-inline-item">$150.00</li>
                                                        </ul>
                                                    </div>
                                                    <div>
                                                        <a href="" data-toggle="tooltip" data-placement="top"
                                                            title="加入購物車"><img
                                                                src="{{ asset('frontend/images/it-cart.png') }}"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-item">
                                                <div class="tab-img">
                                                    <img class="main-img img-fluid"
                                                        src="{{ asset('frontend/images/tab-7.png') }}"
                                                        alt="">
                                                    <img class="sec-img img-fluid"
                                                        src="{{ asset('frontend/images/tab-16.png') }}"
                                                        alt="">
                                                    <div class="layer-box">
                                                        <a href="" class="it-comp" data-toggle="tooltip"
                                                            data-placement="left" title="比較"><img
                                                                src="{{ asset('frontend/images/it-comp.png') }}"
                                                                alt=""></a>
                                                        <a href="" class="it-fav" data-toggle="tooltip"
                                                            data-placement="left" title="收藏"><img
                                                                src="{{ asset('frontend/images/it-fav.png') }}"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="tab-heading">
                                                    <p><a href="">Samsung Smart Led Tv 42"</a></p>
                                                </div>
                                                <div class="img-content d-flex justify-content-between">
                                                    <div>
                                                        <ul class="list-unstyled list-inline fav">
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star-o"></i>
                                                            </li>
                                                        </ul>
                                                        <ul class="list-unstyled list-inline price">
                                                            <li class="list-inline-item">$120.00</li>
                                                            <li class="list-inline-item">$150.00</li>
                                                        </ul>
                                                    </div>
                                                    <div>
                                                        <a href="" data-toggle="tooltip" data-placement="top"
                                                            title="加入購物車"><img
                                                                src="{{ asset('frontend/images/it-cart.png') }}"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-item">
                                                <div class="tab-img">
                                                    <img class="main-img img-fluid"
                                                        src="{{ asset('frontend/images/tab-8.png') }}"
                                                        alt="">
                                                    <img class="sec-img img-fluid"
                                                        src="{{ asset('frontend/images/tab-16.png') }}"
                                                        alt="">
                                                    <div class="layer-box">
                                                        <a href="" class="it-comp" data-toggle="tooltip"
                                                            data-placement="left" title="比較"><img
                                                                src="{{ asset('frontend/images/it-comp.png') }}"
                                                                alt=""></a>
                                                        <a href="" class="it-fav" data-toggle="tooltip"
                                                            data-placement="left" title="收藏"><img
                                                                src="{{ asset('frontend/images/it-fav.png') }}"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="tab-heading">
                                                    <p><a href="">Samsung Smart Led Tv 42"</a></p>
                                                </div>
                                                <div class="img-content d-flex justify-content-between">
                                                    <div>
                                                        <ul class="list-unstyled list-inline fav">
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star-o"></i>
                                                            </li>
                                                        </ul>
                                                        <ul class="list-unstyled list-inline price">
                                                            <li class="list-inline-item">$120.00</li>
                                                            <li class="list-inline-item">$150.00</li>
                                                        </ul>
                                                    </div>
                                                    <div>
                                                        <a href="" data-toggle="tooltip" data-placement="top"
                                                            title="加入購物車"><img
                                                                src="{{ asset('frontend/images/it-cart.png') }}"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="smart" role="tabpanel">
                                        <div class="tab-slider owl-carousel">
                                            <div class="tab-item">
                                                <div class="tab-img">
                                                    <img class="main-img img-fluid"
                                                        src="{{ asset('frontend/images/tab-9.png') }}"
                                                        alt="">
                                                    <img class="sec-img img-fluid"
                                                        src="{{ asset('frontend/images/tab-16.png') }}"
                                                        alt="">
                                                    <div class="layer-box">
                                                        <a href="" class="it-comp" data-toggle="tooltip"
                                                            data-placement="left" title="比較"><img
                                                                src="{{ asset('frontend/images/it-comp.png') }}"
                                                                alt=""></a>
                                                        <a href="" class="it-fav" data-toggle="tooltip"
                                                            data-placement="left" title="收藏"><img
                                                                src="{{ asset('frontend/images/it-fav.png') }}"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="tab-heading">
                                                    <p><a href="">Samsung Smart Led Tv 42"</a></p>
                                                </div>
                                                <div class="img-content d-flex justify-content-between">
                                                    <div>
                                                        <ul class="list-unstyled list-inline fav">
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i
                                                                    class="fa fa-star-o"></i>
                                                            </li>
                                                        </ul>
                                                        <ul class="list-unstyled list-inline price">
                                                            <li class="list-inline-item">$120.00</li>
                                                            <li class="list-inline-item">$150.00</li>
                                                        </ul>
                                                    </div>
                                                    <div>
                                                        <a href="" data-toggle="tooltip"
                                                            data-placement="top" title="加入購物車"><img
                                                                src="{{ asset('frontend/images/it-cart.png') }}"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-item">
                                                <div class="tab-img">
                                                    <img class="main-img img-fluid"
                                                        src="{{ asset('frontend/images/tab-10.png') }}"
                                                        alt="">
                                                    <img class="sec-img img-fluid"
                                                        src="{{ asset('frontend/images/tab-16.png') }}"
                                                        alt="">
                                                    <span class="sale">Sale</span>
                                                    <div class="layer-box">
                                                        <a href="" class="it-comp" data-toggle="tooltip"
                                                            data-placement="left" title="比較"><img
                                                                src="{{ asset('frontend/images/it-comp.png') }}"
                                                                alt=""></a>
                                                        <a href="" class="it-fav" data-toggle="tooltip"
                                                            data-placement="left" title="收藏"><img
                                                                src="{{ asset('frontend/images/it-fav.png') }}"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="tab-heading">
                                                    <p><a href="">Samsung Smart Led Tv 42"</a></p>
                                                </div>
                                                <div class="img-content d-flex justify-content-between">
                                                    <div>
                                                        <ul class="list-unstyled list-inline fav">
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i
                                                                    class="fa fa-star-o"></i>
                                                            </li>
                                                        </ul>
                                                        <ul class="list-unstyled list-inline price">
                                                            <li class="list-inline-item">$120.00</li>
                                                            <li class="list-inline-item">$150.00</li>
                                                        </ul>
                                                    </div>
                                                    <div>
                                                        <a href="" data-toggle="tooltip"
                                                            data-placement="top" title="加入購物車"><img
                                                                src="{{ asset('frontend/images/it-cart.png') }}"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-item">
                                                <div class="tab-img">
                                                    <img class="main-img img-fluid"
                                                        src="{{ asset('frontend/images/tab-11.png') }}"
                                                        alt="">
                                                    <img class="sec-img img-fluid"
                                                        src="{{ asset('frontend/images/tab-16.png') }}"
                                                        alt="">
                                                    <div class="layer-box">
                                                        <a href="" class="it-comp" data-toggle="tooltip"
                                                            data-placement="left" title="比較"><img
                                                                src="{{ asset('frontend/images/it-comp.png') }}"
                                                                alt=""></a>
                                                        <a href="" class="it-fav" data-toggle="tooltip"
                                                            data-placement="left" title="收藏"><img
                                                                src="{{ asset('frontend/images/it-fav.png') }}"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="tab-heading">
                                                    <p><a href="">Samsung Smart Led Tv 42"</a></p>
                                                </div>
                                                <div class="img-content d-flex justify-content-between">
                                                    <div>
                                                        <ul class="list-unstyled list-inline fav">
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i
                                                                    class="fa fa-star-o"></i>
                                                            </li>
                                                        </ul>
                                                        <ul class="list-unstyled list-inline price">
                                                            <li class="list-inline-item">$120.00</li>
                                                            <li class="list-inline-item">$150.00</li>
                                                        </ul>
                                                    </div>
                                                    <div>
                                                        <a href="" data-toggle="tooltip"
                                                            data-placement="top" title="加入購物車"><img
                                                                src="{{ asset('frontend/images/it-cart.png') }}"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-item">
                                                <div class="tab-img">
                                                    <img class="main-img img-fluid"
                                                        src="{{ asset('frontend/images/tab-12.png') }}"
                                                        alt="">
                                                    <img class="sec-img img-fluid"
                                                        src="{{ asset('frontend/images/tab-16.png') }}"
                                                        alt="">
                                                    <div class="layer-box">
                                                        <a href="" class="it-comp" data-toggle="tooltip"
                                                            data-placement="left" title="比較"><img
                                                                src="{{ asset('frontend/images/it-comp.png') }}"
                                                                alt=""></a>
                                                        <a href="" class="it-fav" data-toggle="tooltip"
                                                            data-placement="left" title="收藏"><img
                                                                src="{{ asset('frontend/images/it-fav.png') }}"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="tab-heading">
                                                    <p><a href="">Samsung Smart Led Tv 42"</a></p>
                                                </div>
                                                <div class="img-content d-flex justify-content-between">
                                                    <div>
                                                        <ul class="list-unstyled list-inline fav">
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i
                                                                    class="fa fa-star-o"></i>
                                                            </li>
                                                        </ul>
                                                        <ul class="list-unstyled list-inline price">
                                                            <li class="list-inline-item">$120.00</li>
                                                            <li class="list-inline-item">$150.00</li>
                                                        </ul>
                                                    </div>
                                                    <div>
                                                        <a href="" data-toggle="tooltip"
                                                            data-placement="top" title="加入購物車"><img
                                                                src="{{ asset('frontend/images/it-cart.png') }}"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="shoe" role="tabpanel">
                                        <div class="tab-slider owl-carousel">
                                            <div class="tab-item">
                                                <div class="tab-img">
                                                    <img class="main-img img-fluid"
                                                        src="{{ asset('frontend/images/tab-13.png') }}"
                                                        alt="">
                                                    <img class="sec-img img-fluid"
                                                        src="{{ asset('frontend/images/tab-16.png') }}"
                                                        alt="">
                                                    <div class="layer-box">
                                                        <a href="" class="it-comp" data-toggle="tooltip"
                                                            data-placement="left" title="比較"><img
                                                                src="{{ asset('frontend/images/it-comp.png') }}"
                                                                alt=""></a>
                                                        <a href="" class="it-fav" data-toggle="tooltip"
                                                            data-placement="left" title="收藏"><img
                                                                src="{{ asset('frontend/images/it-fav.png') }}"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="tab-heading">
                                                    <p><a href="">Samsung Smart Led Tv 42"</a></p>
                                                </div>
                                                <div class="img-content d-flex justify-content-between">
                                                    <div>
                                                        <ul class="list-unstyled list-inline fav">
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i
                                                                    class="fa fa-star-o"></i>
                                                            </li>
                                                        </ul>
                                                        <ul class="list-unstyled list-inline price">
                                                            <li class="list-inline-item">$120.00</li>
                                                            <li class="list-inline-item">$150.00</li>
                                                        </ul>
                                                    </div>
                                                    <div>
                                                        <a href="" data-toggle="tooltip"
                                                            data-placement="top" title="加入購物車"><img
                                                                src="{{ asset('frontend/images/it-cart.png') }}"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-item">
                                                <div class="tab-img">
                                                    <img class="main-img img-fluid"
                                                        src="{{ asset('frontend/images/tab-14.png') }}"
                                                        alt="">
                                                    <img class="sec-img img-fluid"
                                                        src="{{ asset('frontend/images/tab-16.png') }}"
                                                        alt="">
                                                    <span class="new">New</span>
                                                    <div class="layer-box">
                                                        <a href="" class="it-comp" data-toggle="tooltip"
                                                            data-placement="left" title="比較"><img
                                                                src="{{ asset('frontend/images/it-comp.png') }}"
                                                                alt=""></a>
                                                        <a href="" class="it-fav" data-toggle="tooltip"
                                                            data-placement="left" title="收藏"><img
                                                                src="{{ asset('frontend/images/it-fav.png') }}"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="tab-heading">
                                                    <p><a href="">Samsung Smart Led Tv 42"</a></p>
                                                </div>
                                                <div class="img-content d-flex justify-content-between">
                                                    <div>
                                                        <ul class="list-unstyled list-inline fav">
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i
                                                                    class="fa fa-star-o"></i>
                                                            </li>
                                                        </ul>
                                                        <ul class="list-unstyled list-inline price">
                                                            <li class="list-inline-item">$120.00</li>
                                                            <li class="list-inline-item">$150.00</li>
                                                        </ul>
                                                    </div>
                                                    <div>
                                                        <a href="" data-toggle="tooltip"
                                                            data-placement="top" title="加入購物車"><img
                                                                src="{{ asset('frontend/images/it-cart.png') }}"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-item">
                                                <div class="tab-img">
                                                    <img class="main-img img-fluid"
                                                        src="{{ asset('frontend/images/tab-15.png') }}"
                                                        alt="">
                                                    <img class="sec-img img-fluid"
                                                        src="{{ asset('frontend/images/tab-16.png') }}"
                                                        alt="">
                                                    <div class="layer-box">
                                                        <a href="" class="it-comp" data-toggle="tooltip"
                                                            data-placement="left" title="比較"><img
                                                                src="{{ asset('frontend/images/it-comp.png') }}"
                                                                alt=""></a>
                                                        <a href="" class="it-fav" data-toggle="tooltip"
                                                            data-placement="left" title="收藏"><img
                                                                src="{{ asset('frontend/images/it-fav.png') }}"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="tab-heading">
                                                    <p><a href="">Samsung Smart Led Tv 42"</a></p>
                                                </div>
                                                <div class="img-content d-flex justify-content-between">
                                                    <div>
                                                        <ul class="list-unstyled list-inline fav">
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i
                                                                    class="fa fa-star-o"></i>
                                                            </li>
                                                        </ul>
                                                        <ul class="list-unstyled list-inline price">
                                                            <li class="list-inline-item">$120.00</li>
                                                            <li class="list-inline-item">$150.00</li>
                                                        </ul>
                                                    </div>
                                                    <div>
                                                        <a href="" data-toggle="tooltip"
                                                            data-placement="top" title="加入購物車"><img
                                                                src="{{ asset('frontend/images/it-cart.png') }}"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-item">
                                                <div class="tab-img">
                                                    <img class="main-img img-fluid"
                                                        src="{{ asset('frontend/images/tab-16.png') }}"
                                                        alt="">
                                                    <img class="sec-img img-fluid"
                                                        src="{{ asset('frontend/images/tab-16.png') }}"
                                                        alt="">
                                                    <div class="layer-box">
                                                        <a href="" class="it-comp" data-toggle="tooltip"
                                                            data-placement="left" title="比較"><img
                                                                src="{{ asset('frontend/images/it-comp.png') }}"
                                                                alt=""></a>
                                                        <a href="" class="it-fav" data-toggle="tooltip"
                                                            data-placement="left" title="收藏"><img
                                                                src="{{ asset('frontend/images/it-fav.png') }}"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="tab-heading">
                                                    <p><a href="">Samsung Smart Led Tv 42"</a></p>
                                                </div>
                                                <div class="img-content d-flex justify-content-between">
                                                    <div>
                                                        <ul class="list-unstyled list-inline fav">
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i
                                                                    class="fa fa-star-o"></i>
                                                            </li>
                                                        </ul>
                                                        <ul class="list-unstyled list-inline price">
                                                            <li class="list-inline-item">$120.00</li>
                                                            <li class="list-inline-item">$150.00</li>
                                                        </ul>
                                                    </div>
                                                    <div>
                                                        <a href="" data-toggle="tooltip"
                                                            data-placement="top" title="加入購物車"><img
                                                                src="{{ asset('frontend/images/it-cart.png') }}"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Feature Product Area -->
    <!-- Full Banner -->
    <section class="f-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="f-bnr-img">
                        <a href="#"><img src="{{ asset('frontend/images/f-banner-1.jpg') }}"
                                alt="" class="img-fluid"></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="f-bnr-img">
                        <a href="#"><img src="{{ asset('frontend/images/f-banner-2.jpg') }}"
                                alt="" class="img-fluid"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Full Banner -->
    <!-- Best Offer -->
    <section class="best-ofr">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="bst-slider">
                        <div class="sec-title">
                            <h6>新品推薦</h6>
                        </div>
                        <div class="bst-body owl-carousel">
                            <div class="bst-items">
                                <div class="bst-box d-flex">
                                    <div class="bst-img">
                                        <a href="#"><img src="{{ asset('frontend/images/sbar-1.png') }}"
                                                alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="bst-content">
                                        <p><a href="">商品名稱</a></p>
                                        <ul class="list-unstyled list-inline fav">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                        <ul class="list-unstyled list-inline price">
                                            <li class="list-inline-item">$120.00</li>
                                            <li class="list-inline-item">$150.00</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="bst-box d-flex">
                                    <div class="bst-img">
                                        <a href="#"><img src="{{ asset('frontend/images/sbar-2.png') }}"
                                                alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="bst-content">
                                        <p><a href="">商品名稱</a></p>
                                        <ul class="list-unstyled list-inline fav">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                        <ul class="list-unstyled list-inline price">
                                            <li class="list-inline-item">$120.00</li>
                                            <li class="list-inline-item">$150.00</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="bst-box d-flex">
                                    <div class="bst-img">
                                        <a href="#"><img src="{{ asset('frontend/images/sbar-3.png') }}"
                                                alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="bst-content">
                                        <p><a href="">商品名稱</a></p>
                                        <ul class="list-unstyled list-inline fav">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                        <ul class="list-unstyled list-inline price">
                                            <li class="list-inline-item">$120.00</li>
                                            <li class="list-inline-item">$150.00</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="bst-box d-flex">
                                    <div class="bst-img">
                                        <a href="#"><img src="{{ asset('frontend/images/sbar-4.png') }}"
                                                alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="bst-content">
                                        <p><a href="">商品名稱</a></p>
                                        <ul class="list-unstyled list-inline fav">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                        <ul class="list-unstyled list-inline price">
                                            <li class="list-inline-item">$120.00</li>
                                            <li class="list-inline-item">$150.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="bst-items">
                                <div class="bst-box d-flex">
                                    <div class="bst-img">
                                        <a href="#"><img src="{{ asset('frontend/images/sbar-5.png') }}"
                                                alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="bst-content">
                                        <p><a href="">商品名稱</a></p>
                                        <ul class="list-unstyled list-inline fav">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                        <ul class="list-unstyled list-inline price">
                                            <li class="list-inline-item">$120.00</li>
                                            <li class="list-inline-item">$150.00</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="bst-box d-flex">
                                    <div class="bst-img">
                                        <a href="#"><img src="{{ asset('frontend/images/sbar-6.png') }}"
                                                alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="bst-content">
                                        <p><a href="">商品名稱</a></p>
                                        <ul class="list-unstyled list-inline fav">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                        <ul class="list-unstyled list-inline price">
                                            <li class="list-inline-item">$120.00</li>
                                            <li class="list-inline-item">$150.00</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="bst-box d-flex">
                                    <div class="bst-img">
                                        <a href="#"><img src="{{ asset('frontend/images/sbar-7.png') }}"
                                                alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="bst-content">
                                        <p><a href="">商品名稱</a></p>
                                        <ul class="list-unstyled list-inline fav">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                        <ul class="list-unstyled list-inline price">
                                            <li class="list-inline-item">$120.00</li>
                                            <li class="list-inline-item">$150.00</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="bst-box d-flex">
                                    <div class="bst-img">
                                        <a href="#"><img src="{{ asset('frontend/images/sbar-8.png') }}"
                                                alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="bst-content">
                                        <p><a href="">商品名稱</a></p>
                                        <ul class="list-unstyled list-inline fav">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                        <ul class="list-unstyled list-inline price">
                                            <li class="list-inline-item">$120.00</li>
                                            <li class="list-inline-item">$150.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="bst-slider">
                        <div class="sec-title">
                            <h6>熱門優惠</h6>
                        </div>
                        <div class="bst-body owl-carousel">
                            <div class="bst-items">
                                <div class="bst-box d-flex">
                                    <div class="bst-img">
                                        <a href="#"><img src="{{ asset('frontend/images/sbar-9.png') }}"
                                                alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="bst-content">
                                        <p><a href="">商品名稱</a></p>
                                        <ul class="list-unstyled list-inline fav">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                        <ul class="list-unstyled list-inline price">
                                            <li class="list-inline-item">$120.00</li>
                                            <li class="list-inline-item">$150.00</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="bst-box d-flex">
                                    <div class="bst-img">
                                        <a href="#"><img src="{{ asset('frontend/images/sbar-10.png') }}"
                                                alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="bst-content">
                                        <p><a href="">商品名稱</a></p>
                                        <ul class="list-unstyled list-inline fav">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                        <ul class="list-unstyled list-inline price">
                                            <li class="list-inline-item">$120.00</li>
                                            <li class="list-inline-item">$150.00</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="bst-box d-flex">
                                    <div class="bst-img">
                                        <a href="#"><img src="{{ asset('frontend/images/sbar-11.png') }}"
                                                alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="bst-content">
                                        <p><a href="">商品名稱</a></p>
                                        <ul class="list-unstyled list-inline fav">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                        <ul class="list-unstyled list-inline price">
                                            <li class="list-inline-item">$120.00</li>
                                            <li class="list-inline-item">$150.00</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="bst-box d-flex">
                                    <div class="bst-img">
                                        <a href="#"><img src="{{ asset('frontend/images/sbar-12.png') }}"
                                                alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="bst-content">
                                        <p><a href="">商品名稱</a></p>
                                        <ul class="list-unstyled list-inline fav">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                        <ul class="list-unstyled list-inline price">
                                            <li class="list-inline-item">$120.00</li>
                                            <li class="list-inline-item">$150.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="bst-items">
                                <div class="bst-box d-flex">
                                    <div class="bst-img">
                                        <a href="#"><img src="{{ asset('frontend/images/sbar-13.png') }}"
                                                alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="bst-content">
                                        <p><a href="">商品名稱</a></p>
                                        <ul class="list-unstyled list-inline fav">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                        <ul class="list-unstyled list-inline price">
                                            <li class="list-inline-item">$120.00</li>
                                            <li class="list-inline-item">$150.00</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="bst-box d-flex">
                                    <div class="bst-img">
                                        <a href="#"><img src="{{ asset('frontend/images/sbar-14.png') }}"
                                                alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="bst-content">
                                        <p><a href="">商品名稱</a></p>
                                        <ul class="list-unstyled list-inline fav">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                        <ul class="list-unstyled list-inline price">
                                            <li class="list-inline-item">$120.00</li>
                                            <li class="list-inline-item">$150.00</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="bst-box d-flex">
                                    <div class="bst-img">
                                        <a href="#"><img src="{{ asset('frontend/images/sbar-3.png') }}"
                                                alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="bst-content">
                                        <p><a href="">商品名稱</a></p>
                                        <ul class="list-unstyled list-inline fav">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                        <ul class="list-unstyled list-inline price">
                                            <li class="list-inline-item">$120.00</li>
                                            <li class="list-inline-item">$150.00</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="bst-box d-flex">
                                    <div class="bst-img">
                                        <a href="#"><img src="{{ asset('frontend/images/sbar-6.png') }}"
                                                alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="bst-content">
                                        <p><a href="">商品名稱</a></p>
                                        <ul class="list-unstyled list-inline fav">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                        <ul class="list-unstyled list-inline price">
                                            <li class="list-inline-item">$120.00</li>
                                            <li class="list-inline-item">$150.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="bst-slider">
                        <div class="sec-title">
                            <h6>最高評分</h6>
                        </div>
                        <div class="bst-body owl-carousel">
                            <div class="bst-items">
                                <div class="bst-box d-flex">
                                    <div class="bst-img">
                                        <a href="#"><img src="{{ asset('frontend/images/sbar-7.png') }}"
                                                alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="bst-content">
                                        <p><a href="">商品名稱</a></p>
                                        <ul class="list-unstyled list-inline fav">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                        <ul class="list-unstyled list-inline price">
                                            <li class="list-inline-item">$120.00</li>
                                            <li class="list-inline-item">$150.00</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="bst-box d-flex">
                                    <div class="bst-img">
                                        <a href="#"><img src="{{ asset('frontend/images/sbar-13.png') }}"
                                                alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="bst-content">
                                        <p><a href="">商品名稱</a></p>
                                        <ul class="list-unstyled list-inline fav">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                        <ul class="list-unstyled list-inline price">
                                            <li class="list-inline-item">$120.00</li>
                                            <li class="list-inline-item">$150.00</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="bst-box d-flex">
                                    <div class="bst-img">
                                        <a href="#"><img src="{{ asset('frontend/images/sbar-11.png') }}"
                                                alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="bst-content">
                                        <p><a href="">商品名稱</a></p>
                                        <ul class="list-unstyled list-inline fav">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                        <ul class="list-unstyled list-inline price">
                                            <li class="list-inline-item">$120.00</li>
                                            <li class="list-inline-item">$150.00</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="bst-box d-flex">
                                    <div class="bst-img">
                                        <a href="#"><img src="{{ asset('frontend/images/sbar-8.png') }}"
                                                alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="bst-content">
                                        <p><a href="">商品名稱</a></p>
                                        <ul class="list-unstyled list-inline fav">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                        <ul class="list-unstyled list-inline price">
                                            <li class="list-inline-item">$120.00</li>
                                            <li class="list-inline-item">$150.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="bst-items">
                                <div class="bst-box d-flex">
                                    <div class="bst-img">
                                        <a href="#"><img src="{{ asset('frontend/images/sbar-3.png') }}"
                                                alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="bst-content">
                                        <p><a href="">商品名稱</a></p>
                                        <ul class="list-unstyled list-inline fav">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                        <ul class="list-unstyled list-inline price">
                                            <li class="list-inline-item">$120.00</li>
                                            <li class="list-inline-item">$150.00</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="bst-box d-flex">
                                    <div class="bst-img">
                                        <a href="#"><img src="{{ asset('frontend/images/sbar-5.png') }}"
                                                alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="bst-content">
                                        <p><a href="">商品名稱</a></p>
                                        <ul class="list-unstyled list-inline fav">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                        <ul class="list-unstyled list-inline price">
                                            <li class="list-inline-item">$120.00</li>
                                            <li class="list-inline-item">$150.00</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="bst-box d-flex">
                                    <div class="bst-img">
                                        <a href="#"><img src="{{ asset('frontend/images/sbar-2.png') }}"
                                                alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="bst-content">
                                        <p><a href="">商品名稱</a></p>
                                        <ul class="list-unstyled list-inline fav">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                        <ul class="list-unstyled list-inline price">
                                            <li class="list-inline-item">$120.00</li>
                                            <li class="list-inline-item">$150.00</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="bst-box d-flex">
                                    <div class="bst-img">
                                        <a href="#"><img src="{{ asset('frontend/images/sbar-9.png') }}"
                                                alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="bst-content">
                                        <p><a href="">商品名稱</a></p>
                                        <ul class="list-unstyled list-inline fav">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                        <ul class="list-unstyled list-inline price">
                                            <li class="list-inline-item">$120.00</li>
                                            <li class="list-inline-item">$150.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Best Offer -->
    <!-- Banner Three -->
    <section class="banner3">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="banner3-box">
                        <a href="#"><img src="{{ asset('frontend/images/m-banner-3.jpg') }}"
                                alt="" class="img-fluid"></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="banner3-box">
                        <a href="#"><img src="{{ asset('frontend/images/m-banner-4.jpg') }}"
                                alt="" class="img-fluid"></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="banner3-box">
                        <a href="#"><img src="{{ asset('frontend/images/m-banner-2.jpg') }}"
                                alt="" class="img-fluid"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Three -->
    <!-- Front blog area -->
    <section class="f-blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="sec-title">
                        <h5>最新消息</h5>
                    </div>
                    <div class="fb-slider owl-carousel">
                        <div class="blog-item">
                            <div class="blog-img">
                                <a href="#"><img src="{{ asset('frontend/images/news-1.jpg') }}"
                                        alt="" class="img-fluid"></a>
                            </div>
                            <div class="blog-content">
                                <h5><a href="">Sint eius inventore magni quod.</a></h5>
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item"><i class="fa fa-user-o"></i><a
                                            href="">John</a></li>
                                    <li class="list-inline-item"><i class="fa fa-calendar"></i>Feb 10, 2020</li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectet adipisicing elit. Delectus, expedita dolorum
                                    tenetur soluta. sunt in culpa qui...</p>
                            </div>
                        </div>
                        <div class="blog-item">
                            <div class="blog-img">
                                <a href="#"><img src="{{ asset('frontend/images/news-2.jpg') }}"
                                        alt="" class="img-fluid"></a>
                            </div>
                            <div class="blog-content">
                                <h5><a href="">Sint eius inventore magni quod.</a></h5>
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item"><i class="fa fa-user-o"></i><a
                                            href="">John</a></li>
                                    <li class="list-inline-item"><i class="fa fa-calendar"></i>Feb 10, 2020</li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectet adipisicing elit. Delectus, expedita dolorum
                                    tenetur soluta. sunt in culpa qui...</p>
                            </div>
                        </div>
                        <div class="blog-item">
                            <div class="blog-img">
                                <a href="#"><img src="{{ asset('frontend/images/news-3.jpg') }}"
                                        alt="" class="img-fluid"></a>
                            </div>
                            <div class="blog-content">
                                <h5><a href="">Sint eius inventore magni quod.</a></h5>
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item"><i class="fa fa-user-o"></i><a
                                            href="">John</a></li>
                                    <li class="list-inline-item"><i class="fa fa-calendar"></i>Feb 10, 2020</li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectet adipisicing elit. Delectus, expedita dolorum
                                    tenetur soluta. sunt in culpa qui...</p>
                            </div>
                        </div>
                        <div class="blog-item">
                            <div class="blog-img">
                                <a href="#"><img src="{{ asset('frontend/images/news-4.jpg') }}"
                                        alt="" class="img-fluid"></a>
                            </div>
                            <div class="blog-content">
                                <h5><a href="">Sint eius inventore magni quod.</a></h5>
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item"><i class="fa fa-user-o"></i><a
                                            href="">John</a></li>
                                    <li class="list-inline-item"><i class="fa fa-calendar"></i>Feb 10, 2020</li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectet adipisicing elit. Delectus, expedita dolorum
                                    tenetur soluta. sunt in culpa qui...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Front blog area -->
    <!-- Brand area 2 -->
    <section class="brand2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="tp-bnd owl-carousel">
                        <div class="bnd-items">
                            <a href="#"><img src="{{ asset('frontend/images/brand-01.png') }}"
                                    alt="" class="img-fluid"></a>
                        </div>
                        <div class="bnd-items">
                            <a href="#"><img src="{{ asset('frontend/images/brand-02.png') }}"
                                    alt="" class="img-fluid"></a>
                        </div>
                        <div class="bnd-items">
                            <a href="#"><img src="{{ asset('frontend/images/brand-03.png') }}"
                                    alt="" class="img-fluid"></a>
                        </div>
                        <div class="bnd-items">
                            <a href="#"><img src="{{ asset('frontend/images/brand-04.png') }}"
                                    alt="" class="img-fluid"></a>
                        </div>
                        <div class="bnd-items">
                            <a href="#"><img src="{{ asset('frontend/images/brand-05.png') }}"
                                    alt="" class="img-fluid"></a>
                        </div>
                        <div class="bnd-items">
                            <a href="#"><img src="{{ asset('frontend/images/brand-06.png') }}"
                                    alt="" class="img-fluid"></a>
                        </div>
                        <div class="bnd-items">
                            <a href="#"><img src="{{ asset('frontend/images/brand-07.png') }}"
                                    alt="" class="img-fluid"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Brand area 2 -->
    <!-- Footer Area -->
    <section class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="f-contact">
                        <h5>聯絡資訊</h5>
                        <div class="f-add">
                            <i class="fa fa-map-marker"></i>
                            <span>地址 :</span>
                            <p>795 South Park Avenue, New York, NY USA 94107</p>
                        </div>
                        <div class="f-email">
                            <i class="fa fa-envelope"></i>
                            <span>Email :</span>
                            <p>enquery@domain.com</p>
                        </div>
                        <div class="f-phn">
                            <i class="fa fa-phone"></i>
                            <span>電話 :</span>
                            <p>+1 908 875 7678</p>
                        </div>
                        <div class="f-social">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><a href=""><i class="fa fa-facebook"></i></a>
                                </li>
                                <li class="list-inline-item"><a href=""><i class="fa fa-twitter"></i></a>
                                </li>
                                <li class="list-inline-item"><a href=""><i class="fa fa-linkedin"></i></a>
                                </li>
                                <li class="list-inline-item"><a href=""><i
                                            class="fa fa-google-plus"></i></a></li>
                                <li class="list-inline-item"><a href=""><i class="fa fa-pinterest"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="f-cat">
                        <h5>分類</h5>
                        <ul class="list-unstyled">
                            <li><a href=""><i class="fa fa-angle-right"></i>服飾</a></li>
                            <li><a href=""><i class="fa fa-angle-right"></i>電子產品</a></li>
                            <li><a href=""><i class="fa fa-angle-right"></i>智慧型手機與平板</a></li>
                            <li><a href=""><i class="fa fa-angle-right"></i>電腦與辦公室</a></li>
                            <li><a href=""><i class="fa fa-angle-right"></i>家電</a></li>
                            <li><a href=""><i class="fa fa-angle-right"></i>皮件與鞋類</a></li>
                            <li><a href=""><i class="fa fa-angle-right"></i>嬰幼兒</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="f-link">
                        <h5>快速連結</h5>
                        <ul class="list-unstyled">
                            <li><a href=""><i class="fa fa-angle-right"></i>我的帳戶</a></li>
                            <li><a href=""><i class="fa fa-angle-right"></i>購物車</a></li>
                            <li><a href=""><i class="fa fa-angle-right"></i>我的收藏</a></li>
                            <li><a href=""><i class="fa fa-angle-right"></i>結帳</a></li>
                            <li><a href=""><i class="fa fa-angle-right"></i>訂單紀錄</a></li>
                            <li><a href=""><i class="fa fa-angle-right"></i>登入</a></li>
                            <li><a href=""><i class="fa fa-angle-right"></i>門市資訊</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="f-sup">
                        <h5>客服</h5>
                        <ul class="list-unstyled">
                            <li><a href=""><i class="fa fa-angle-right"></i>聯絡我們</a></li>
                            <li><a href=""><i class="fa fa-angle-right"></i>付款政策</a></li>
                            <li><a href=""><i class="fa fa-angle-right"></i>退貨政策</a></li>
                            <li><a href=""><i class="fa fa-angle-right"></i>隱私政策</a></li>
                            <li><a href=""><i class="fa fa-angle-right"></i>常見問題</a></li>
                            <li><a href=""><i class="fa fa-angle-right"></i>條款與條件</a></li>
                            <li><a href=""><i class="fa fa-angle-right"></i>配送資訊</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="footer-btm">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>Copyright &copy; 2020 | Designed With <i class="fa fa-heart"></i> by <a href="#"
                            target="_blank">SnazzyTheme</a></p>
                </div>
                <div class="col-md-6 text-right">
                    <img src="{{ asset('frontend/images/payment.png') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="back-to-top text-center">
            <img src="{{ asset('frontend/images/backtotop.png') }}" alt="" class="img-fluid">
        </div>
    </section>
    <!-- End Footer Area -->
    <!-- =========================================
        JavaScript Files
        ========================================== -->
    <!-- jQuery JS -->
    <script src="{{ asset('frontend/js/jquery-1.12.4.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <!-- Owl Slider -->
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <!-- Wow Animation -->
    <script src="{{ asset('frontend/js/wow.min.js') }}"></script>
    <!-- Price Filter -->
    <script src="{{ asset('frontend/js/price-filter.js') }}"></script>
    <!-- Mean Menu -->
    <script src="{{ asset('frontend/js/jquery.meanmenu.min.js') }}"></script>
    <!-- Custom JS -->
    <script src="{{ asset('frontend/js/plugins.js') }}"></script>
    <script src="{{ asset('frontend/js/custom.js') }}"></script>
</body>

</html>
