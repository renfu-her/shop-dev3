<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title', '購物車 dev03')</title>
    <meta name="keywords" content="@yield('seo_keywords', '購物車 dev03')">
    <meta name="description" content="@yield('seo_description', '購物車 dev03')">

    <meta property="og:title" content="@yield('seo_title', '購物車 dev03')">
    <meta property="og:description" content="@yield('seo_description', '購物車 dev03')">
    <meta property="og:image" content="@yield('seo_image', '購物車 dev03')">
    <meta property="og:url" content="@yield('seo_url', '購物車 dev03')">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/img/favicon.png') }}">

    <!-- all css here -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/custom.css?v=' . time()) }}">

    @yield('css')

</head>

<body>
    <!-- Add your site or application content here -->

    <!--header area start-->
    <div class="header_area">

        <!--header top start-->
        <div class="header_top top_four">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="top_left_sidebar left_sidebar_two">
                            <div class="contact_link link_two">
                                <span>免費客服專線：<strong>0123456789</strong></span>
                            </div>
                            <div class="switcher switcher_two">
                                <ul>
                                    <li class="currency"><a href="#">幣別：<strong>新台幣 </strong><i
                                                class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown_currency">
                                            <li class="select"><a href="#">新台幣 (TWD)</a></li>
                                            <li><a href="#">美元 (USD)</a></li>
                                        </ul>
                                    </li>
                                    <li class="languages"><a href="#"><img
                                                src="{{ asset('frontend/assets/img/logo/lion.jpg') }}" alt="">
                                            繁體中文 <i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown_languages">
                                            <li class="select"><img
                                                    src="{{ asset('frontend/assets/img/logo/lion.jpg') }}"
                                                    alt="">
                                                繁體中文</li>
                                            <li><a href="#"><img
                                                        src="{{ asset('frontend/assets/img/logo/lion1.jpg') }}"
                                                        alt=""> English
                                                </a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header_right_info right_info_two text-end">
                            <ul>
                                <li class="my_account"><a href="my-account.html"><i class="fa fa-user"
                                            aria-hidden="true"></i> 我的帳戶</a></li>
                                <li class="my_wishlist"><a href="wishlist.html"><i class="fa fa-heart-o"
                                            aria-hidden="true"></i>我的收藏</a></li>
                                <li class="link_checkout"><a href="checkout.html"><i class="fa fa-check"
                                            aria-hidden="true"></i> 結帳 </a></li>
                                <li class="log_in"><a href="login.html"><i class="fa fa-lock" aria-hidden="true"></i> 登入
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header middel-->
        <div class="header_middle middle_four">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="logo logo_four">
                            <a href="{{ route('home') }}"><img src="{{ asset('frontend/assets/img/logo/logo2.png') }}"
                                    alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="main_menu_inner menu_inner_four">
                            <div class="main_menu menu_four d-none d-lg-block">
                                <nav>
                                    <ul>
                                        <li class="active"><a href="index.html">首頁 <i class="fa fa-angle-down"></i></a>
                                            <ul class="sub_menu">
                                                <li class="active"><a href="index.html">商店首頁 1</a></li>
                                                <li><a href="index-2.html">商店首頁 2</a></li>
                                                <li><a href="index-3.html">商店首頁 3</a></li>
                                                <li><a href="index-4.html">商店首頁 4</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown_item"><a href="shop.html">商店 <i
                                                    class="fa fa-angle-down"></i></a>
                                            <ul class="sub_menu">
                                                <li><a href="shop-list.html">商品列表</a></li>
                                                <li><a href="shop-fullwidth.html">全寬商品網格</a></li>
                                                <li><a href="shop-fullwidth-list.html">全寬商品列表</a></li>
                                                <li><a href="shop-right-sidebar.html">右側欄商店</a></li>
                                                <li><a href="shop-right-sidebar-list.html">右側欄商品列表</a></li>
                                                <li><a href="single-product.html">商品詳情</a></li>
                                                <li><a href="single-product-video.html">商品影片詳情</a></li>
                                                <li><a href="single-product-gallery.html">商品相簿詳情</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown_item"><a href="portfolio.html">作品集 <i
                                                    class="fa fa-angle-down"></i></a>
                                            <ul class="sub_menu">
                                                <li><a href="portfolio.html">作品集</a></li>
                                                <li><a href="portfolio-details.html">作品詳情</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown_item"><a href="blog.html">部落格 <i
                                                    class="fa fa-angle-down"></i></a>
                                            <ul class="sub_menu">
                                                <li><a href="blog.html">部落格</a></li>
                                                <li><a href="blog-fullwidth.html">全寬部落格</a></li>
                                                <li><a href="blog-sidebar.html">側欄部落格</a></li>
                                                <li><a href="blog-details.html">文章詳情</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="about.html">關於我們</a></li>
                                        <li><a href="contact.html">聯絡我們</a></li>
                                        <li class="mega_item"><a href="#">功能 <i
                                                    class="fa fa-angle-down"></i></a>
                                            <ul class="mega_menu">
                                                <li><a href="#">第一欄</a>
                                                    <ul class="mega_dropdown">
                                                        <li><a href="shop.html">商店</a></li>
                                                        <li><a href="single-product.html">商品詳情</a></li>
                                                        <li><a href="cart.html">購物車</a></li>
                                                        <li><a href="checkout.html">結帳</a></li>
                                                        <li><a href="wishlist.html">願望清單</a></li>
                                                        <li><a href="my-account.html">我的帳戶</a></li>
                                                        <li><a href="login.html">登入</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">第二欄</a>
                                                    <ul class="mega_dropdown">
                                                        <li><a href="blog.html">部落格</a></li>
                                                        <li><a href="blog-fullwidth.html">全寬部落格</a></li>
                                                        <li><a href="blog-sidebar.html">側欄部落格</a></li>
                                                        <li><a href="blog-details.html">文章詳情</a></li>
                                                        <li><a href="404.html">404頁面</a></li>
                                                        <li><a href="faq.html">常見問題</a></li>
                                                        <li><a href="services.html">服務</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">第三欄</a>
                                                    <ul class="mega_dropdown">
                                                        <li><a href="about.html">關於我們</a></li>
                                                        <li><a href="about-2.html">關於我們 2</a></li>
                                                        <li><a href="contact.html">聯絡我們</a></li>
                                                        <li><a href="contact-2.html">聯絡我們 2</a></li>
                                                        <li><a href="portfolio.html">作品集</a></li>
                                                        <li><a href="portfolio-details.html">作品詳情</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>

                            <div class="mobile-menu mobile_menu_four d-lg-none">
                                <nav>
                                    <ul>
                                        <li>
                                            <a href="index.html">首頁</a>
                                            <ul>
                                                <li><a href="index.html">商店首頁 1</a></li>
                                                <li><a href="index-2.html">商店首頁 2</a></li>
                                                <li><a href="index-3.html">商店首頁 3</a></li>
                                                <li><a href="index-4.html">商店首頁 4</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="shop.html">商店</a>
                                            <ul>
                                                <li><a href="shop-list.html">商品列表</a></li>
                                                <li><a href="shop-fullwidth.html">全寬商品網格</a></li>
                                                <li><a href="shop-fullwidth-list.html">全寬商品列表</a></li>
                                                <li><a href="shop-right-sidebar.html">右側欄商店</a></li>
                                                <li><a href="shop-right-sidebar-list.html">右側欄商品列表</a></li>
                                                <li><a href="single-product.html">商品詳情</a></li>
                                                <li><a href="single-product-video.html">商品影片詳情</a></li>
                                                <li><a href="single-product-gallery.html">商品相簿詳情</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="portfolio.html">作品集</a>
                                            <ul>
                                                <li><a href="portfolio.html">作品集</a></li>
                                                <li><a href="portfolio-details.html">作品詳情</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="blog.html">部落格</a>
                                            <ul>
                                                <li><a href="blog.html">部落格</a></li>
                                                <li><a href="blog-fullwidth.html">全寬部落格</a></li>
                                                <li><a href="blog-sidebar.html">側欄部落格</a></li>
                                                <li><a href="blog-details.html">文章詳情</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="about.html">關於我們</a></li>
                                        <li><a href="contact.html">聯絡我們</a></li>
                                        <li><a href="#">功能</a>
                                            <ul>
                                                <li><a href="#">第一欄</a>
                                                    <ul>
                                                        <li><a href="shop.html">商店</a></li>
                                                        <li><a href="single-product.html">商品詳情</a></li>
                                                        <li><a href="cart.html">購物車</a></li>
                                                        <li><a href="checkout.html">結帳</a></li>
                                                        <li><a href="wishlist.html">願望清單</a></li>
                                                        <li><a href="my-account.html">我的帳戶</a></li>
                                                        <li><a href="login.html">登入</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">第二欄</a>
                                                    <ul>
                                                        <li><a href="blog.html">部落格</a></li>
                                                        <li><a href="blog-fullwidth.html">全寬部落格</a></li>
                                                        <li><a href="blog-sidebar.html">側欄部落格</a></li>
                                                        <li><a href="blog-details.html">文章詳情</a></li>
                                                        <li><a href="404.html">404頁面</a></li>
                                                        <li><a href="faq.html">常見問題</a></li>
                                                        <li><a href="services.html">服務</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">第三欄</a>
                                                    <ul>
                                                        <li><a href="about.html">關於我們</a></li>
                                                        <li><a href="about-2.html">關於我們 2</a></li>
                                                        <li><a href="contact.html">聯絡我們</a></li>
                                                        <li><a href="contact-2.html">聯絡我們 2</a></li>
                                                        <li><a href="portfolio.html">作品集</a></li>
                                                        <li><a href="portfolio-details.html">作品詳情</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--header area end-->

    <!--header bottom start-->
    <div class="header_bottom_four">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="categories_menu categorie_menu_four">
                        <div class="categories_title ca_title_two">
                            <h2 class="categori_toggle"><img
                                    src="{{ asset('frontend/assets/img/logo/categorie.png') }}" alt=""> 所有分類
                            </h2>
                        </div>
                        <div class="categories_menu_inner categorie_inner_four">
                            <ul>
                                <li><a href="#">
                                        <i class="fa fa-caret-right"></i> 電子產品 <i
                                            class="fa fa-angle-right"></i></a>
                                    <ul class="categories_mega_menu">
                                        <li><a href="#">筆記型電腦</a>
                                            <div class="categorie_sub_menu">
                                                <ul>
                                                    <li><a href="">戴爾筆電</a></li>
                                                    <li><a href="">惠普筆電</a></li>
                                                    <li><a href="">聯想筆電</a></li>
                                                    <li><a href="">蘋果筆電</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="#">相機</a>
                                            <div class="categorie_sub_menu">
                                                <ul>
                                                    <li><a href="">數位相機</a></li>
                                                    <li><a href="">攝影機</a></li>
                                                    <li><a href="">攝影配件</a></li>
                                                    <li><a href="">記憶卡</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="#">智慧型手機</a>
                                            <div class="categorie_sub_menu">
                                                <ul>
                                                    <li><a href="">蘋果手機</a></li>
                                                    <li><a href="">三星手機</a></li>
                                                    <li><a href="">摩托羅拉手機</a></li>
                                                    <li><a href="">聯想手機</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="#">電視</a>
                                            <div class="categorie_sub_menu">
                                                <ul>
                                                    <li><a href="">一體成型電腦</a></li>
                                                    <li><a href="">主機殼</a></li>
                                                    <li><a href="">翻新桌機</a></li>
                                                    <li><a href="">電競主機</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="fa fa-caret-right"></i> 時尚 <i
                                            class="fa fa-angle-right"></i></a>
                                    <ul class="categories_mega_menu">
                                        <li><a href="#">洋裝</a>
                                            <div class="categorie_sub_menu">
                                                <ul>
                                                    <li><a href="">毛衣</a></li>
                                                    <li><a href="">晚裝</a></li>
                                                    <li><a href="">日常</a></li>
                                                    <li><a href="">運動</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="#">手提包</a>
                                            <div class="categorie_sub_menu">
                                                <ul>
                                                    <li><a href="">肩背包</a></li>
                                                    <li><a href="">側背包</a></li>
                                                    <li><a href="">兒童包</a></li>
                                                    <li><a href="">外套</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="#">鞋類</a>
                                            <div class="categorie_sub_menu">
                                                <ul>
                                                    <li><a href="">短靴</a></li>
                                                    <li><a href="">木屐涼鞋</a></li>
                                                    <li><a href="">跑步</a></li>
                                                    <li><a href="">書籍</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="#">服飾</a>
                                            <div class="categorie_sub_menu">
                                                <ul>
                                                    <li><a href="">外套夾克</a></li>
                                                    <li><a href="">雨衣</a></li>
                                                    <li><a href="">夾克</a></li>
                                                    <li><a href="">T恤</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="fa fa-caret-right"></i> 家具與裝飾 <i
                                            class="fa fa-angle-right"></i></a>
                                    <ul class="categories_mega_menu decor">
                                        <li><a href="#">椅子</a>
                                            <div class="categorie_sub_menu">
                                                <ul>
                                                    <li><a href="">餐廳</a></li>
                                                    <li><a href="">臥室</a></li>
                                                    <li><a href="">家庭與辦公</a></li>
                                                    <li><a href="">客廳</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="#">照明</a>
                                            <div class="categorie_sub_menu">
                                                <ul>
                                                    <li><a href="">天花板照明</a></li>
                                                    <li><a href="">壁燈</a></li>
                                                    <li><a href="">戶外照明</a></li>
                                                    <li><a href="">智慧照明</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="#">沙發</a>
                                            <div class="categorie_sub_menu">
                                                <ul>
                                                    <li><a href="">布沙發</a></li>
                                                    <li><a href="">皮沙發</a></li>
                                                    <li><a href="">L型沙發</a></li>
                                                    <li><a href="">沙發床</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="fa fa-caret-right"></i> 玩具與興趣 <i
                                            class="fa fa-angle-right"></i></a>
                                    <ul class="categories_mega_menu hobbies">
                                        <li><a href="#">男孩玩具</a>
                                            <div class="categorie_sub_menu">
                                                <ul>
                                                    <li><a href="">積木玩具</a></li>
                                                    <li><a href="">電子玩具</a></li>
                                                    <li><a href="">動作人偶</a></li>
                                                    <li><a href="">特色玩具</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="#">女孩玩具</a>
                                            <div class="categorie_sub_menu">
                                                <ul>
                                                    <li><a href="">娃娃玩具</a></li>
                                                    <li><a href="">女孩學習玩具</a></li>
                                                    <li><a href="">美勞玩具</a></li>
                                                    <li><a href="">女孩遊戲</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="fa fa-caret-right"></i> 配件</a></li>
                                <li><a href="#"><i class="fa fa-caret-right"></i> 珠寶與手錶</a></li>
                                <li><a href="#"><i class="fa fa-caret-right"></i> 美妝保養</a></li>
                                <li><a href="#"><i class="fa fa-caret-right"></i> 書籍與辦公</a></li>
                                <li><a href="#"><i class="fa fa-caret-right"></i> 運動戶外</a></li>
                                <li id="cat_toggle" class="has-sub"><a href="#"><i
                                            class="fa fa-caret-right"></i> 更多分類</a>
                                    <ul class="categorie_sub">
                                        <li><a href="#"><i class="fa fa-caret-right"></i> 電腦與筆電</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="search_form form_four">
                        <form action="#">
                            <input placeholder="請輸入搜尋關鍵字..." type="text">
                            <div class="select_categories select_three selcct_c_four">
                                <select name="select" id="categorie">
                                    <option selected value="1">所有分類</option>
                                    <option value="2">電子產品</option>
                                    <option value="3">--筆記型電腦</option>
                                    <option value="4">---戴爾筆電</option>
                                    <option value="5">---惠普筆電</option>
                                    <option value="5">---聯想筆電</option>
                                    <option value="5">--相機</option>
                                    <option value="5">---數位相機</option>
                                    <option value="5">---蘋果筆電</option>
                                    <option value="5">---攝影機</option>
                                    <option value="5">---攝影配件</option>
                                    <option value="5">---記憶卡</option>
                                    <option value="5">--智慧型手機</option>
                                    <option value="5">---三星手機</option>
                                    <option value="5">---摩托羅拉手機</option>
                                    <option value="5">--電視</option>
                                    <option value="5">----洋裝</option>
                                    <option value="5">---毛衣</option>
                                    <option value="5">----晚裝</option>
                                    <option value="5">---日常</option>
                                    <option value="5">---運動</option>
                                    <option value="5">---肩背包</option>
                                    <option value="5">---側背包</option>
                                    <option value="5">---兒童包</option>
                                    <option value="5">---外套</option>
                                </select>
                            </div>
                            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="header_widget widget_four about_widget text-end">
                        <ul>
                            <li class="shopping_cart"><a href="#" title="查看我的購物車"><i
                                        class="fa fa-shopping-bag"></i></a>
                                <span class="cart__quantity">2</span>
                                <div class="mini_cart cart_left">
                                    <div class="cart_item">
                                        <div class="cart_img">
                                            <a href="#"><img
                                                    src="{{ asset('frontend/assets/img/cart/mini_cart1.jpg') }}"
                                                    alt=""></a>
                                        </div>
                                        <div class="cart_info">
                                            <a href="#">時尚手提包</a>
                                            <span class="cart_price">NT$3,450</span>
                                            <span class="quantity">數量: 1</span>
                                        </div>
                                        <div class="cart_remove">
                                            <a title="移除此商品" href="#"><i class="fa fa-times-circle"></i></a>
                                        </div>
                                    </div>
                                    <div class="cart_item">
                                        <div class="cart_img">
                                            <a href="#"><img
                                                    src="{{ asset('frontend/assets/img/cart/mini_cart2.jpg') }}"
                                                    alt=""></a>
                                        </div>
                                        <div class="cart_info">
                                            <a href="#">流蘇手提包</a>
                                            <span class="cart_price">NT$3,450</span>
                                            <span class="quantity">數量: 1</span>
                                        </div>
                                        <div class="cart_remove">
                                            <a title="移除此商品" href="#"><i class="fa fa-times-circle"></i></a>
                                        </div>
                                    </div>
                                    <div class="cart_price_line">
                                        <span>運費</span>
                                        <span class="prices">NT$210</span>
                                    </div>
                                    <div class="cart_total">
                                        <span>總計</span>
                                        <span class="prices">NT$210</span>
                                    </div>
                                    <div class="cart_button pt-20">
                                        <a href="checkout.html">結帳</a>
                                    </div>
                                </div>
                            </li>
                            <li><a href="wishlist.html" title="我的收藏"><i class="fa fa-heart-o"></i></a></li>
                            <li><a href="#" title="商品比較"><i class="fa fa-exchange"></i></a></li>
                        </ul>
                        <!--迷你購物車-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--header bottom end-->

    @yield('content')

    <!--footer area start-->
    <div class="footer_area">
        <div class="container">
            <div class="footer_top">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single_footer">
                            <h4>商店資訊</h4>
                            <ul>
                                <li><i class="fa fa-home"></i> 地址：您的地址</li>
                                <li><i class="fa fa-phone"></i> 0123456789</li>
                                <li><a href="#"><i class="fa fa-envelope-square"></i> demo@example.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single_footer">
                            <h4>資訊</h4>
                            <ul>
                                <li><a href="#"><i class="fa fa-circle"></i> 我們的部落格</a></li>
                                <li><a href="#"><i class="fa fa-circle"></i> 關於我們的商店</a></li>
                                <li><a href="#"><i class="fa fa-circle"></i> 安全購物</a></li>
                                <li><a href="#"><i class="fa fa-circle"></i> 配送資訊</a></li>
                                <li><a href="#"><i class="fa fa-circle"></i> 商店位置</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single_footer">
                            <h4>我的帳戶</h4>
                            <ul>
                                <li><a href="#"><i class="fa fa-circle"></i> 我的訂單</a></li>
                                <li><a href="#"><i class="fa fa-circle"></i> 關於我們</a></li>
                                <li><a href="#"><i class="fa fa-circle"></i> 聯絡我們</a></li>
                                <li><a href="#"><i class="fa fa-circle"></i> 購物車</a></li>
                                <li><a href="#"><i class="fa fa-circle"></i> 帳戶</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single_footer">
                            <h4>Instagram</h4>
                            <div class="instagram_img">
                                <div class="single_instagram_img">
                                    <a href="#"><img
                                            src="{{ asset('frontend/assets/img/instagram/instagram1.jpg') }}"
                                            alt=""></a>
                                </div>
                                <div class="single_instagram_img">
                                    <a href="#"><img
                                            src="{{ asset('frontend/assets/img/instagram/instagram2.jpg') }}"
                                            alt=""></a>
                                </div>
                                <div class="single_instagram_img">
                                    <a href="#"><img
                                            src="{{ asset('frontend/assets/img/instagram/instagram3.jpg') }}"
                                            alt=""></a>
                                </div>
                                <div class="single_instagram_img">
                                    <a href="#"><img
                                            src="{{ asset('frontend/assets/img/instagram/instagram4.jpg') }}"
                                            alt=""></a>
                                </div>
                                <div class="single_instagram_img">
                                    <a href="#"><img
                                            src="{{ asset('frontend/assets/img/instagram/instagram5.jpg') }}"
                                            alt=""></a>
                                </div>
                                <div class="single_instagram_img">
                                    <a href="#"><img
                                            src="{{ asset('frontend/assets/img/instagram/instagram6.jpg') }}"
                                            alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="footer_tags">
                        <a href="#" title="更多配件"> 配件 </a>
                        <a href="#" title="更多家具與裝飾"> 家具與裝飾 </a>
                        <a href="#" title="更多電子產品"> 電子產品 </a>
                        <a href="#" title="特價"> 特價 </a>
                        <a href="#" title="數位相機"> 數位相機 </a>
                        <a href="#" title="最受歡迎"> 最受歡迎 </a>
                        <a href="#" title="服飾"> 服飾 </a>
                        <a href="#" title="新品上市"> 新品上市 </a>
                        <a href="#" title="筆記型電腦"> 筆記型電腦 </a>
                        <a href="#" title="運動戶外"> 運動戶外 </a>
                        <a href="#" title="美妝保養"> 美妝保養 </a>
                        <a href="#" title="玩具與興趣"> 玩具與興趣 </a>
                        <a href="#" title="時尚"> 時尚 </a>
                        <a href="#" title="手錶"> 手錶 </a>
                        <a href="#" title="電競主機"> 電競主機 </a>
                        <a href="#" title="特別商品"> 特別商品 </a>
                        <a href="#" title="更多T恤"> T恤 </a>
                        <a href="#" title="線上購物"> 線上購物 </a>
                        <a href="#" title="電腦"> 電腦 </a>
                        <a href="#" title="書籍與辦公"> 書籍與辦公 </a>
                    </div>
                </div>
            </div>

            <div class="copyright_area">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="widget_copyright">
                            <p>
                                © 2024 <span class="text-capitalize">獅子商城</span>。
                                用 <span style="color:#ea3a3c;">&#10084;</span> 製作
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="payment">
                            <a href="#"><img src="{{ asset('frontend/assets/img/visha/payment.png') }}"
                                    alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--footer area end-->

    <!-- modal area start -->
    <div class="modal fade" id="modal_box" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal_body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <div class="modal_tab">
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img
                                                        src="{{ asset('frontend/assets/img/product/product18.jpg') }}"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab2" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img
                                                        src="{{ asset('frontend/assets/img/product/product23.jpg') }}"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab3" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img
                                                        src="{{ asset('frontend/assets/img/product/product18.jpg') }}"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab4" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img
                                                        src="{{ asset('frontend/assets/img/product/product7.jpg') }}"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal_tab_button">
                                        <ul class="nav product_navactive" role="tablist">
                                            <li>
                                                <a class="nav-link active" data-bs-toggle="tab" href="#tab1"
                                                    role="tab" aria-controls="tab1" aria-selected="false"><img
                                                        src="{{ asset('frontend/assets/img/cart/cart11.jpg') }}"
                                                        alt=""></a>
                                            </li>
                                            <li>
                                                <a class="nav-link" data-bs-toggle="tab" href="#tab2"
                                                    role="tab" aria-controls="tab2" aria-selected="false"><img
                                                        src="{{ asset('frontend/assets/img/cart/cart8.jpg') }}"
                                                        alt=""></a>
                                            </li>
                                            <li>
                                                <a class="nav-link button_three" data-bs-toggle="tab" href="#tab3"
                                                    role="tab" aria-controls="tab3" aria-selected="false"><img
                                                        src="{{ asset('frontend/assets/img/cart/cart2.jpg') }}"
                                                        alt=""></a>
                                            </li>
                                            <li>
                                                <a class="nav-link button_three" data-bs-toggle="tab" href="#tab4"
                                                    role="tab" aria-controls="tab3" aria-selected="false"><img
                                                        src="{{ asset('frontend/assets/img/cart/cart4.jpg') }}"
                                                        alt=""></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12">
                                <div class="modal_right">
                                    <div class="modal_title mb-15">
                                        <h2>時尚手提包</h2>
                                    </div>
                                    <div class="modal_price mb-10">
                                        <span class="new_price">NT$1,999</span>
                                        <span class="old_price">NT$2,499</span>
                                    </div>
                                    <div class="modal_content mb-10">
                                        <p>具有優雅垂褶袖設計的短袖上衣。</p>
                                    </div>
                                    <div class="modal_size mb-15">
                                        <h2>尺寸</h2>
                                        <ul>
                                            <li><a href="#">S</a></li>
                                            <li><a href="#">M</a></li>
                                            <li><a href="#">L</a></li>
                                            <li><a href="#">XL</a></li>
                                            <li><a href="#">XXL</a></li>
                                        </ul>
                                    </div>
                                    <div class="modal_add_to_cart mb-15">
                                        <form action="#">
                                            <input min="0" max="100" step="2" value="1"
                                                type="number">
                                            <button type="submit">加入購物車</button>
                                        </form>
                                    </div>
                                    <div class="modal_description mb-15">
                                        <p>這是一款時尚精美的手提包，採用優質材料製作，既實用又美觀。無論是日常使用還是特殊場合都非常適合。</p>
                                    </div>
                                    <div class="modal_social">
                                        <h2>分享商品</h2>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- modal area end -->


    <!-- all js here -->
    <script src="{{ asset('frontend/assets/js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>

    @yield('js')
</body>

</html>
