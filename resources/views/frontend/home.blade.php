@extends('frontend.layouts.app')

@section('content')
    <!-- Start Hero Area -->
    <section class="hero-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12 custom-padding-right">
                    <div class="slider-head">
                        <!-- Start Hero Slider -->
                        <div class="hero-slider">
                            <!-- Start Single Slider -->
                            <div class="single-slider"
                                style="background-image: url({{ asset('frontend/assets/images/hero/slider-bg1.jpg') }});">
                                <div class="content">
                                    <h2><span>無需退貨費（節省 $35）</span>
                                        M75 Sport Watch
                                    </h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut
                                        labore dolore magna aliqua.</p>
                                    <h3><span>現在僅售</span> $320.99</h3>
                                    <div class="button">
                                        <a href="product-grids.html" class="btn">立即購買</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Slider -->
                            <!-- Start Single Slider -->
                            <div class="single-slider"
                                style="background-image: url({{ asset('frontend/assets/images/hero/slider-bg2.jpg') }});">
                                <div class="content">
                                    <h2><span>大優惠</span>
                                        獲取最佳 CCTV 攝影機優惠
                                    </h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut
                                        labore dolore magna aliqua.</p>
                                    <h3><span>組合價：</span> $590.00</h3>
                                    <div class="button">
                                        <a href="product-grids.html" class="btn">立即購買</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Slider -->
                        </div>
                        <!-- End Hero Slider -->
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-12 md-custom-padding">
                            <!-- Start Small Banner -->
                            <div class="hero-small-banner"
                                style="background-image: url({{ asset('frontend/assets/images/hero/slider-bnr.jpg') }});">
                                <div class="content">
                                    <h2>
                                        <span>需要新行</span>
                                        iPhone 12 Pro Max
                                    </h2>
                                    <h3>$259.99</h3>
                                </div>
                            </div>
                            <!-- End Small Banner -->
                        </div>
                        <div class="col-lg-12 col-md-6 col-12">
                            <!-- Start Small Banner -->
                            <div class="hero-small-banner style2">
                                <div class="content">
                                    <h2>本週特賣！</h2>
                                    <p>本週所有線上商品最高可省下 50%。</p>
                                    <div class="button">
                                        <a class="btn" href="product-grids.html">立即購買</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Start Small Banner -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Area -->

    <!-- Start Featured Categories Area -->
    <section class="featured-categories section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>新品上市</h2>
                        <p>新品上市是我們精心挑選的，保證品質和滿意度。</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Category -->
                    <div class="single-category">
                        <h3 class="heading">電視與音響</h3>
                        <ul>
                            <li><a href="product-grids.html">智慧電視</a></li>
                            <li><a href="product-grids.html">QLED 電視</a></li>
                            <li><a href="product-grids.html">音響</a></li>
                            <li><a href="product-grids.html">耳機</a></li>
                            <li><a href="product-grids.html">查看全部</a></li>
                        </ul>
                        <div class="images">
                            <img src="{{ asset('frontend/assets/images/featured-categories/fetured-item-1.png') }}"
                                alt="#">
                        </div>
                    </div>
                    <!-- End Single Category -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Category -->
                    <div class="single-category">
                        <h3 class="heading">台式電腦與筆記型電腦</h3>
                        <ul>
                            <li><a href="product-grids.html">智慧電視</a></li>
                            <li><a href="product-grids.html">QLED 電視</a></li>
                            <li><a href="product-grids.html">音響</a></li>
                            <li><a href="product-grids.html">耳機</a></li>
                            <li><a href="product-grids.html">查看全部</a></li>
                        </ul>
                        <div class="images">
                            <img src="{{ asset('frontend/assets/images/featured-categories/fetured-item-2.png') }}"
                                alt="#">
                        </div>
                    </div>
                    <!-- End Single Category -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Category -->
                    <div class="single-category">
                        <h3 class="heading">CCTV 攝影機</h3>
                        <ul>
                            <li><a href="product-grids.html">智慧電視</a></li>
                            <li><a href="product-grids.html">QLED 電視</a></li>
                            <li><a href="product-grids.html">音響</a></li>
                            <li><a href="product-grids.html">耳機</a></li>
                            <li><a href="product-grids.html">查看全部</a></li>
                        </ul>
                        <div class="images">
                            <img src="{{ asset('frontend/assets/images/featured-categories/fetured-item-3.png') }}"
                                alt="#">
                        </div>
                    </div>
                    <!-- End Single Category -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Category -->
                    <div class="single-category">
                        <h3 class="heading">數位單反相機</h3>
                        <ul>
                            <li><a href="product-grids.html">智慧電視</a></li>
                            <li><a href="product-grids.html">QLED 電視</a></li>
                            <li><a href="product-grids.html">音響</a></li>
                            <li><a href="product-grids.html">耳機</a></li>
                            <li><a href="product-grids.html">查看全部</a></li>
                        </ul>
                        <div class="images">
                            <img src="{{ asset('frontend/assets/images/featured-categories/fetured-item-4.png') }}"
                                alt="#">
                        </div>
                    </div>
                    <!-- End Single Category -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Category -->
                    <div class="single-category">
                        <h3 class="heading">智慧手機</h3>
                        <ul>
                            <li><a href="product-grids.html">智慧電視</a></li>
                            <li><a href="product-grids.html">QLED 電視</a></li>
                            <li><a href="product-grids.html">音響</a></li>
                            <li><a href="product-grids.html">耳機</a></li>
                            <li><a href="product-grids.html">查看全部</a></li>
                        </ul>
                        <div class="images">
                            <img src="{{ asset('frontend/assets/images/featured-categories/fetured-item-5.png') }}"
                                alt="#">
                        </div>
                    </div>
                    <!-- End Single Category -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Category -->
                    <div class="single-category">
                        <h3 class="heading">遊戲主機</h3>
                        <ul>
                            <li><a href="product-grids.html">智慧電視</a></li>
                            <li><a href="product-grids.html">QLED 電視</a></li>
                            <li><a href="product-grids.html">音響</a></li>
                            <li><a href="product-grids.html">耳機</a></li>
                            <li><a href="product-grids.html">查看全部</a></li>
                        </ul>
                        <div class="images">
                            <img src="{{ asset('frontend/assets/images/featured-categories/fetured-item-6.png') }}"
                                alt="#">
                        </div>
                    </div>
                    <!-- End Single Category -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Features Area -->

    <!-- Start Trending Product Area -->
    <section class="trending-product section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>熱門商品</h2>
                        <p>我們的熱門商品是根據銷售數量和顧客評價精心挑選的，保證品質和滿意度。</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Product -->
                    <div class="single-product">
                        <div class="product-image">
                            <img src="{{ asset('frontend/assets/images/products/product-1.jpg') }}" alt="#">
                            <div class="button">
                                <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> 加入購物車</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <span class="category">手錶</span>
                            <h4 class="title">
                                <a href="product-grids.html">Xiaomi Mi Band 5</a>
                            </h4>
                            <ul class="review">
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star"></i></li>
                                <li><span>4.0 評價</span></li>
                            </ul>
                            <div class="price">
                                <span>$199.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Product -->
                    <div class="single-product">
                        <div class="product-image">
                            <img src="{{ asset('frontend/assets/images/products/product-2.jpg') }}" alt="#">
                            <span class="sale-tag">-25%</span>
                            <div class="button">
                                <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> 加入購物車</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <span class="category">擴音器</span>
                            <h4 class="title">
                                <a href="product-grids.html">Big Power Sound Speaker</a>
                            </h4>
                            <ul class="review">
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><span>5.0 評價</span></li>
                            </ul>
                            <div class="price">
                                <span>$275.00</span>
                                <span class="discount-price">$300.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Product -->
                    <div class="single-product">
                        <div class="product-image">
                            <img src="{{ asset('frontend/assets/images/products/product-3.jpg') }}" alt="#">
                            <div class="button">
                                <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> 加入購物車</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <span class="category">相機</span>
                            <h4 class="title">
                                <a href="product-grids.html">WiFi Security Camera</a>
                            </h4>
                            <ul class="review">
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><span>5.0 評價</span></li>
                            </ul>
                            <div class="price">
                                <span>$399.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Product -->
                    <div class="single-product">
                        <div class="product-image">
                            <img src="{{ asset('frontend/assets/images/products/product-4.jpg') }}" alt="#">
                            <span class="new-tag">新品</span>
                            <div class="button">
                                <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> 加入購物車</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <span class="category">手機</span>
                            <h4 class="title">
                                <a href="product-grids.html">iphone 6x plus</a>
                            </h4>
                            <ul class="review">
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><span>5.0 評價</span></li>
                            </ul>
                            <div class="price">
                                <span>$400.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Product -->
                    <div class="single-product">
                        <div class="product-image">
                            <img src="{{ asset('frontend/assets/images/products/product-5.jpg') }}" alt="#">
                            <div class="button">
                                <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> 加入購物車</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <span class="category">耳機</span>
                            <h4 class="title">
                                <a href="product-grids.html">Wireless Headphones</a>
                            </h4>
                            <ul class="review">
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><span>5.0 評價</span></li>
                            </ul>
                            <div class="price">
                                <span>$350.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Product -->
                    <div class="single-product">
                        <div class="product-image">
                            <img src="{{ asset('frontend/assets/images/products/product-6.jpg') }}" alt="#">
                            <div class="button">
                                <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> 加入購物車</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <span class="category">擴音器</span>
                            <h4 class="title">
                                <a href="product-grids.html">Mini Bluetooth Speaker</a>
                            </h4>
                            <ul class="review">
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star"></i></li>
                                <li><span>4.0 評價</span></li>
                            </ul>
                            <div class="price">
                                <span>$70.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Product -->
                    <div class="single-product">
                        <div class="product-image">
                            <img src="{{ asset('frontend/assets/images/products/product-7.jpg') }}" alt="#">
                            <span class="sale-tag">-50%</span>
                            <div class="button">
                                <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> 加入購物車</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <span class="category">耳機</span>
                            <h4 class="title">
                                <a href="product-grids.html">PX7 Wireless Headphones</a>
                            </h4>
                            <ul class="review">
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star"></i></li>
                                <li><span>4.0 評價</span></li>
                            </ul>
                            <div class="price">
                                <span>$100.00</span>
                                <span class="discount-price">$200.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Product -->
                    <div class="single-product">
                        <div class="product-image">
                            <img src="{{ asset('frontend/assets/images/products/product-8.jpg') }}" alt="#">
                            <div class="button">
                                <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> 加入購物車</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <span class="category">筆電</span>
                            <h4 class="title">
                                <a href="product-grids.html">Apple MacBook Air</a>
                            </h4>
                            <ul class="review">
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><span>5.0 評價</span></li>
                            </ul>
                            <div class="price">
                                <span>$899.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Trending Product Area -->

    <!-- Start Banner Area -->
    <section class="banner section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="single-banner"
                        style="background-image:url('{{ asset('frontend/assets/images/banner/banner-1-bg.jpg') }}')">
                        <div class="content">
                            <h2>Smart Watch 2.0</h2>
                            <p>Space Gray Aluminum Case with <br>Black/Volt Real Sport Band </p>
                            <div class="button">
                                <a href="product-grids.html" class="btn">查看詳情</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="single-banner custom-responsive-margin"
                        style="background-image:url('{{ asset('frontend/assets/images/banner/banner-2-bg.jpg') }}')">
                        <div class="content">
                            <h2>Smart Headphone</h2>
                            <p>Lorem ipsum dolor sit amet, <br>eiusmod tempor
                                incididunt ut labore.</p>
                            <div class="button">
                                <a href="product-grids.html" class="btn">立即購買</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!-- Start Special Offer -->
    <section class="special-offer section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>特別優惠</h2>
                        <p>Lorem Ipsum 的變體有許多種，但大多數都經歷了某種形式的改變。</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-12 col-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <!-- Start Single Product -->
                            <div class="single-product">
                                <div class="product-image">
                                    <img src="{{ asset('frontend/assets/images/products/product-3.jpg') }}"
                                        alt="#">
                                    <div class="button">
                                        <a href="product-details.html" class="btn"><i class="lni lni-cart"></i>
                                            加入購物車</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <span class="category">相機</span>
                                    <h4 class="title">
                                        <a href="product-grids.html">WiFi Security Camera</a>
                                    </h4>
                                    <ul class="review">
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><span>5.0 評價</span></li>
                                    </ul>
                                    <div class="price">
                                        <span>$399.00</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Product -->
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <!-- Start Single Product -->
                            <div class="single-product">
                                <div class="product-image">
                                    <img src="{{ asset('frontend/assets/images/products/product-8.jpg') }}"
                                        alt="#">
                                    <div class="button">
                                        <a href="product-details.html" class="btn"><i class="lni lni-cart"></i>
                                            加入購物車</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <span class="category">筆電</span>
                                    <h4 class="title">
                                        <a href="product-grids.html">Apple MacBook Air</a>
                                    </h4>
                                    <ul class="review">
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><span>5.0 評價</span></li>
                                    </ul>
                                    <div class="price">
                                        <span>$899.00</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Product -->
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <!-- Start Single Product -->
                            <div class="single-product">
                                <div class="product-image">
                                    <img src="{{ asset('frontend/assets/images/products/product-6.jpg') }}"
                                        alt="#">
                                    <div class="button">
                                        <a href="product-details.html" class="btn"><i class="lni lni-cart"></i>
                                            加入購物車</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <span class="category">擴音器</span>
                                    <h4 class="title">
                                        <a href="product-grids.html">Bluetooth Speaker</a>
                                    </h4>
                                    <ul class="review">
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star"></i></li>
                                        <li><span>4.0 評價</span></li>
                                    </ul>
                                    <div class="price">
                                        <span>$70.00</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Product -->
                        </div>
                    </div>
                    <!-- Start Banner -->
                    <div class="single-banner right"
                        style="background-image:url('{{ asset('frontend/assets/images/banner/banner-3-bg.jpg') }}');margin-top: 30px;">
                        <div class="content">
                            <h2>Samsung Notebook 9 </h2>
                            <p>Lorem ipsum dolor sit amet, <br>eiusmod tempor
                                incididunt ut labore.</p>
                            <div class="price">
                                <span>$590.00</span>
                            </div>
                            <div class="button">
                                <a href="product-grids.html" class="btn">立即購買</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Banner -->
                </div>
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="offer-content">
                        <div class="image">
                            <img src="{{ asset('frontend/assets/images/offer/offer-image.jpg') }}" alt="#">
                            <span class="sale-tag">-50%</span>
                        </div>
                        <div class="text">
                            <h2><a href="product-grids.html">Bluetooth Headphone</a></h2>
                            <ul class="review">
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><span>5.0 評價</span></li>
                            </ul>
                            <div class="price">
                                <span>$200.00</span>
                                <span class="discount-price">$400.00</span>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry incididunt ut
                                eiusmod tempor labores.</p>
                        </div>
                        <div class="box-head">
                            <div class="box">
                                <h1 id="days">000</h1>
                                <h2 id="daystxt">天</h2>
                            </div>
                            <div class="box">
                                <h1 id="hours">00</h1>
                                <h2 id="hourstxt">小時</h2>
                            </div>
                            <div class="box">
                                <h1 id="minutes">00</h1>
                                <h2 id="minutestxt">分鐘</h2>
                            </div>
                            <div class="box">
                                <h1 id="seconds">00</h1>
                                <h2 id="secondstxt">秒</h2>
                            </div>
                        </div>
                        <div style="background: rgb(204, 24, 24);" class="alert">
                            <h1 style="padding: 50px 80px;color: white;">很抱歉，活動已結束！ </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Special Offer -->

    <!-- Start Home Product List -->
    <section class="home-product-list section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12 custom-responsive-margin">
                    <h4 class="list-title">熱銷商品</h4>
                    <!-- Start Single List -->
                    <div class="single-list">
                        <div class="list-image">
                            <a href="product-grids.html"><img
                                    src="{{ asset('frontend/assets/images/home-product-list/01.jpg') }}"
                                    alt="#"></a>
                        </div>
                        <div class="list-info">
                            <h3>
                                <a href="product-grids.html">GoPro Hero4 Silver</a>
                            </h3>
                            <span>$287.99</span>
                        </div>
                    </div>
                    <!-- End Single List -->
                    <!-- Start Single List -->
                    <div class="single-list">
                        <div class="list-image">
                            <a href="product-grids.html"><img
                                    src="{{ asset('frontend/assets/images/home-product-list/02.jpg') }}"
                                    alt="#"></a>
                        </div>
                        <div class="list-info">
                            <h3>
                                <a href="product-grids.html">Puro Sound Labs BT2200</a>
                            </h3>
                            <span>$95.00</span>
                        </div>
                    </div>
                    <!-- End Single List -->
                    <!-- Start Single List -->
                    <div class="single-list">
                        <div class="list-image">
                            <a href="product-grids.html"><img
                                    src="{{ asset('frontend/assets/images/home-product-list/03.jpg') }}"
                                    alt="#"></a>
                        </div>
                        <div class="list-info">
                            <h3>
                                <a href="product-grids.html">HP OfficeJet Pro 8710</a>
                            </h3>
                            <span>$120.00</span>
                        </div>
                    </div>
                    <!-- End Single List -->
                </div>
                <div class="col-lg-4 col-md-4 col-12 custom-responsive-margin">
                    <h4 class="list-title">新上市</h4>
                    <!-- Start Single List -->
                    <div class="single-list">
                        <div class="list-image">
                            <a href="product-grids.html"><img
                                    src="{{ asset('frontend/assets/images/home-product-list/04.jpg') }}"
                                    alt="#"></a>
                        </div>
                        <div class="list-info">
                            <h3>
                                <a href="product-grids.html">iPhone X 256 GB Space Gray</a>
                            </h3>
                            <span>$1150.00</span>
                        </div>
                    </div>
                    <!-- End Single List -->
                    <!-- Start Single List -->
                    <div class="single-list">
                        <div class="list-image">
                            <a href="product-grids.html"><img
                                    src="{{ asset('frontend/assets/images/home-product-list/05.jpg') }}"
                                    alt="#"></a>
                        </div>
                        <div class="list-info">
                            <h3>
                                <a href="product-grids.html">Canon EOS M50 Mirrorless Camera</a>
                            </h3>
                            <span>$950.00</span>
                        </div>
                    </div>
                    <!-- End Single List -->
                    <!-- Start Single List -->
                    <div class="single-list">
                        <div class="list-image">
                            <a href="product-grids.html"><img
                                    src="{{ asset('frontend/assets/images/home-product-list/06.jpg') }}"
                                    alt="#"></a>
                        </div>
                        <div class="list-info">
                            <h3>
                                <a href="product-grids.html">Microsoft Xbox One S</a>
                            </h3>
                            <span>$298.00</span>
                        </div>
                    </div>
                    <!-- End Single List -->
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <h4 class="list-title">最受歡迎</h4>
                    <!-- Start Single List -->
                    <div class="single-list">
                        <div class="list-image">
                            <a href="product-grids.html"><img
                                    src="{{ asset('frontend/assets/images/home-product-list/07.jpg') }}"
                                    alt="#"></a>
                        </div>
                        <div class="list-info">
                            <h3>
                                <a href="product-grids.html">Samsung Gear 360 VR Camera</a>
                            </h3>
                            <span>$68.00</span>
                        </div>
                    </div>
                    <!-- End Single List -->
                    <!-- Start Single List -->
                    <div class="single-list">
                        <div class="list-image">
                            <a href="product-grids.html"><img
                                    src="{{ asset('frontend/assets/images/home-product-list/08.jpg') }}"
                                    alt="#"></a>
                        </div>
                        <div class="list-info">
                            <h3>
                                <a href="product-grids.html">Samsung Galaxy S9+ 64 GB</a>
                            </h3>
                            <span>$840.00</span>
                        </div>
                    </div>
                    <!-- End Single List -->
                    <!-- Start Single List -->
                    <div class="single-list">
                        <div class="list-image">
                            <a href="product-grids.html"><img
                                    src="{{ asset('frontend/assets/images/home-product-list/09.jpg') }}"
                                    alt="#"></a>
                        </div>
                        <div class="list-info">
                            <h3>
                                <a href="product-grids.html">Zeus Bluetooth Headphones</a>
                            </h3>
                            <span>$28.00</span>
                        </div>
                    </div>
                    <!-- End Single List -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Home Product List -->

    <!-- Start Brands Area -->
    <div class="brands">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-12 col-12">
                    <h2 class="title">熱門品牌</h2>
                </div>
            </div>
            <div class="brands-logo-wrapper">
                <div class="brands-logo-carousel d-flex align-items-center justify-content-between">
                    <div class="brand-logo">
                        <img src="{{ asset('frontend/assets/images/brands/01.png') }}" alt="#">
                    </div>
                    <div class="brand-logo">
                        <img src="{{ asset('frontend/assets/images/brands/02.png') }}" alt="#">
                    </div>
                    <div class="brand-logo">
                        <img src="{{ asset('frontend/assets/images/brands/03.png') }}" alt="#">
                    </div>
                    <div class="brand-logo">
                        <img src="{{ asset('frontend/assets/images/brands/04.png') }}" alt="#">
                    </div>
                    <div class="brand-logo">
                        <img src="{{ asset('frontend/assets/images/brands/05.png') }}" alt="#">
                    </div>
                    <div class="brand-logo">
                        <img src="{{ asset('frontend/assets/images/brands/06.png') }}" alt="#">
                    </div>
                    <div class="brand-logo">
                        <img src="{{ asset('frontend/assets/images/brands/03.png') }}" alt="#">
                    </div>
                    <div class="brand-logo">
                        <img src="{{ asset('frontend/assets/images/brands/04.png') }}" alt="#">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Brands Area -->

    <!-- Start Blog Section Area -->
    <section class="blog-section section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>我們的最新消息</h2>
                        <p>Lorem Ipsum 的變體有許多種，但大多數都經歷了某種形式的改變。</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Blog -->
                    <div class="single-blog">
                        <div class="blog-img">
                            <a href="blog-single-sidebar.html">
                                <img src="{{ asset('frontend/assets/images/blog/blog-1.jpg') }}" alt="#">
                            </a>
                        </div>
                        <div class="blog-content">
                            <a class="category" href="javascript:void(0)">電子商務</a>
                            <h4>
                                <a href="blog-single-sidebar.html">運送需要哪些資訊？</a>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt.</p>
                            <div class="button">
                                <a href="javascript:void(0)" class="btn">閱讀更多</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Blog -->
                    <div class="single-blog">
                        <div class="blog-img">
                            <a href="blog-single-sidebar.html">
                                <img src="{{ asset('frontend/assets/images/blog/blog-2.jpg') }}" alt="#">
                            </a>
                        </div>
                        <div class="blog-content">
                            <a class="category" href="javascript:void(0)">遊戲</a>
                            <h4>
                                <a href="blog-single-sidebar.html">有趣的遊戲主機事實</a>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt.</p>
                            <div class="button">
                                <a href="javascript:void(0)" class="btn">閱讀更多</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Blog -->
                    <div class="single-blog">
                        <div class="blog-img">
                            <a href="blog-single-sidebar.html">
                                <img src="{{ asset('frontend/assets/images/blog/blog-3.jpg') }}" alt="#">
                            </a>
                        </div>
                        <div class="blog-content">
                            <a class="category" href="javascript:void(0)">電子</a>
                            <h4>
                                <a href="blog-single-sidebar.html">電子、儀器與控制工程</a>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt.</p>
                            <div class="button">
                                <a href="javascript:void(0)" class="btn">閱讀更多</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Section Area -->

    <!-- Start Shipping Info -->
    <section class="shipping-info">
        <div class="container">
            <ul>
                <!-- Free Shipping -->
                <li>
                    <div class="media-icon">
                        <i class="lni lni-delivery"></i>
                    </div>
                    <div class="media-body">
                        <h5>免運費</h5>
                        <span>訂單滿 $99</span>
                    </div>
                </li>
                <!-- Money Return -->
                <li>
                    <div class="media-icon">
                        <i class="lni lni-support"></i>
                    </div>
                    <div class="media-body">
                        <h5>24/7 支援</h5>
                        <span>即時聊天或打電話</span>
                    </div>
                </li>
                <!-- Support 24/7 -->
                <li>
                    <div class="media-icon">
                        <i class="lni lni-credit-cards"></i>
                    </div>
                    <div class="media-body">
                        <h5>線上付款</h5>
                        <span>安全的付款服務</span>
                    </div>
                </li>
                <!-- Safe Payment -->
                <li>
                    <div class="media-icon">
                        <i class="lni lni-reload"></i>
                    </div>
                    <div class="media-body">
                        <h5>簡單退貨</h5>
                        <span>輕鬆的購物體驗</span>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- End Shipping Info -->
@endsection
