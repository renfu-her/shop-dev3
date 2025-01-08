@extends('frontend.layouts.app')

@section('title', '首頁')

@section('content')
    <!--baner slide show-->
    <div class="banner_slide_show slide_show_two mb-40">
        <div class="container">
            <div class="row">
                <div class="col-12 ">
                    <div class="banner_slider">
                        <div class="slider_active slider_a_four owl-carousel">
                            <div class="single_slider single_sl_four"
                                style="background-image: url({{ asset('frontend/assets/img/slider/slider8.jpg') }})">
                                <div class="row">
                                    <div class="col-lg-6 offset-lg-6 col-md-7 offset-md-5">
                                        <div class="slider_content slider_c_four">
                                            <h1>Protect Your
                                                <br>
                                                Tablet Device

                                            </h1>
                                            <h3>With a case from our <br>outstanding range </h3>


                                            <div class="slider_button s_button_four">
                                                <a href="#">shop it! </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single_slider single_sl_four"
                                style="background-image: url({{ asset('frontend/assets/img/slider/slider7.jpg') }})">
                                <div class="row">
                                    <div class="col-lg-6 offset-lg-6 col-md-7 offset-md-5">
                                        <div class="slider_content slider_c_four elgant_bags elgant">
                                            <h1>Elegant <br>Bags </h1>
                                            <div class="slider_desc">
                                                <p>Lorem ipsum dolor sit amet, ex <br> eam mundi populo accusamus,
                                                    aliquam </p>
                                            </div>
                                            <div class="slider_discount">
                                                <ul>
                                                    <li><i class="fa fa-check"></i> Save up to 10% off</li>
                                                    <li><i class="fa fa-check"></i> Free Shipping</li>
                                                    <li><i class="fa fa-check"></i> Start at $99.00</li>
                                                </ul>
                                            </div>
                                            <div class="slider_button">
                                                <a href="#">shop it! </a>
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
    <!--baner slide end-->

    <!--categorie banner area-->

    <!--categorie banner end-->
    <div class="categorir_banner_four mb-40">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="categorie_banner_title">
                        <h2>shop by categories</h2>
                    </div>
                </div>
                <div class="categorie_banner_active owl-carousel">
                    <div class="col-lg-2">
                        <div class="single_banner_categorie">
                            <div class="categorie_thumb">
                                <a href="#"><img src="{{ asset('frontend/assets/img/categorie/categorie.jpg') }}"
                                        alt=""></a>
                                <div class="categorie_number">
                                    <span>(12) products</span>
                                </div>
                            </div>
                            <div class="categorie_name">
                                <a href="#">Electronics</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="single_banner_categorie">
                            <div class="categorie_thumb">
                                <a href="#"><img src="{{ asset('frontend/assets/img/categorie/categorie2.jpg') }}"
                                        alt=""></a>
                                <div class="categorie_number">
                                    <span>(12) products</span>
                                </div>
                            </div>
                            <div class="categorie_name">
                                <a href="#">Electronics</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="single_banner_categorie">
                            <div class="categorie_thumb">
                                <a href="#"><img src="{{ asset('frontend/assets/img/categorie/categorie3.jpg') }}"
                                        alt=""></a>
                                <div class="categorie_number">
                                    <span>(12) products</span>
                                </div>
                            </div>
                            <div class="categorie_name">
                                <a href="#">Electronics</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="single_banner_categorie">
                            <div class="categorie_thumb">
                                <a href="#"><img src="{{ asset('frontend/assets/img/categorie/categorie4.jpg') }}"
                                        alt=""></a>
                                <div class="categorie_number">
                                    <span>(12) products</span>
                                </div>
                            </div>
                            <div class="categorie_name">
                                <a href="#">Electronics</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="single_banner_categorie">
                            <div class="categorie_thumb">
                                <a href="#"><img src="{{ asset('frontend/assets/img/categorie/categorie5.jpg') }}"
                                        alt=""></a>
                                <div class="categorie_number">
                                    <span>(12) products</span>
                                </div>
                            </div>
                            <div class="categorie_name">
                                <a href="#">Electronics</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="single_banner_categorie">
                            <div class="categorie_thumb">
                                <a href="#"><img src="{{ asset('frontend/assets/img/categorie/categorie6.jpg') }}"
                                        alt=""></a>
                                <div class="categorie_number">
                                    <span>(12) products</span>
                                </div>
                            </div>
                            <div class="categorie_name">
                                <a href="#">Electronics</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="single_banner_categorie">
                            <div class="categorie_thumb">
                                <a href="#"><img src="{{ asset('frontend/assets/img/categorie/categorie7.jpg') }}"
                                        alt=""></a>
                                <div class="categorie_number">
                                    <span>(12) products</span>
                                </div>
                            </div>
                            <div class="categorie_name">
                                <a href="#">Electronics</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--product area strt-->
    <div class="product_area product_four">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8">
                    <div class="product_inner product_inner_four">
                        <div class="top_title">
                            <h2> hot deals</h2>
                        </div>
                        <div class="row">
                            <div class="product_active owl-carousel">
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a href="single-product.html"><img
                                                    src="{{ asset('frontend/assets/img/product/product1.jpg') }}"
                                                    alt=""></a>
                                            <div class="product_discount">
                                                <span>-10%</span>
                                            </div>
                                            <div class="product_action">
                                                <ul>
                                                    <li><a href="#" title=" Add to Wishlist "><i
                                                                class="fa fa-heart"></i></a></li>
                                                    <li><a href="#" title=" Add to Compare "><i
                                                                class="fa fa-retweet"></i></a></li>
                                                    <li><a href="#" title=" Add to cart "><i
                                                                class="fa fa-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="quick_view">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                    title="Quick view"><i class="fa fa-search"></i></a>
                                            </div>

                                        </div>
                                        <div class="product_content">
                                            <div class="product_timing">
                                                <div data-countdown="2022/12/15"></div>
                                            </div>
                                            <div class="samll_product_ratting">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="small_product_name">
                                                <a title="Printed Summer Dress" href="single-product.html">Printed
                                                    Summer Dress</a>
                                            </div>
                                            <div class="small_product_price">
                                                <span class="new_price"> $140.00 </span>
                                                <span class="old_price"> $150.50 </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a href="single-product.html"><img
                                                    src="{{ asset('frontend/assets/img/product/product2.jpg') }}"
                                                    alt=""></a>

                                            <div class="product_action">
                                                <ul>
                                                    <li><a href="#" title=" Add to Wishlist "><i
                                                                class="fa fa-heart"></i></a></li>
                                                    <li><a href="#" title=" Add to Compare "><i
                                                                class="fa fa-retweet"></i></a></li>
                                                    <li><a href="#" title=" Add to cart "><i
                                                                class="fa fa-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="quick_view">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                    title="Quick view"><i class="fa fa-search"></i></a>
                                            </div>

                                        </div>
                                        <div class="product_content">
                                            <div class="product_timing">
                                                <div data-countdown="2022/12/15"></div>
                                            </div>
                                            <div class="samll_product_ratting">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="small_product_name">
                                                <a title="Printed Summer Dress" href="single-product.html">Summer
                                                    Dress</a>
                                            </div>
                                            <div class="small_product_price">
                                                <span class="new_price"> $140.00 </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a href="single-product.html"><img
                                                    src="{{ asset('frontend/assets/img/product/product4.jpg') }}"
                                                    alt=""></a>
                                            <div class="product_discount">
                                                <span>-10%</span>
                                            </div>
                                            <div class="product_action">
                                                <ul>
                                                    <li><a href="#" title=" Add to Wishlist "><i
                                                                class="fa fa-heart"></i></a></li>
                                                    <li><a href="#" title=" Add to Compare "><i
                                                                class="fa fa-retweet"></i></a></li>
                                                    <li><a href="#" title=" Add to cart "><i
                                                                class="fa fa-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="quick_view">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                    title="Quick view"><i class="fa fa-search"></i></a>
                                            </div>

                                        </div>
                                        <div class="product_content">
                                            <div class="product_timing">
                                                <div data-countdown="2022/12/15"></div>
                                            </div>
                                            <div class="samll_product_ratting">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="small_product_name">
                                                <a title="Printed Summer Dress" href="single-product.html">Printed
                                                    Dress</a>
                                            </div>
                                            <div class="small_product_price">
                                                <span class="new_price"> $140.00 </span>
                                                <span class="old_price"> $150.50 </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a href="single-product.html"><img
                                                    src="{{ asset('frontend/assets/img/product/product3.jpg') }}"
                                                    alt=""></a>

                                            <div class="product_action">
                                                <ul>
                                                    <li><a href="#" title=" Add to Wishlist "><i
                                                                class="fa fa-heart"></i></a></li>
                                                    <li><a href="#" title=" Add to Compare "><i
                                                                class="fa fa-retweet"></i></a></li>
                                                    <li><a href="#" title=" Add to cart "><i
                                                                class="fa fa-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="quick_view">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                    title="Quick view"><i class="fa fa-search"></i></a>
                                            </div>

                                        </div>
                                        <div class="product_content">
                                            <div class="product_timing">
                                                <div data-countdown="2022/12/15"></div>
                                            </div>
                                            <div class="samll_product_ratting">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="small_product_name">
                                                <a title="Printed Summer Dress" href="single-product.html">hanbag
                                                    elit</a>
                                            </div>
                                            <div class="small_product_price">
                                                <span class="new_price"> $140.00 </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a href="single-product.html"><img
                                                    src="{{ asset('frontend/assets/img/product/product5.jpg') }}"
                                                    alt=""></a>
                                            <div class="product_discount">
                                                <span>-10%</span>
                                            </div>
                                            <div class="product_action">
                                                <ul>
                                                    <li><a href="#" title=" Add to Wishlist "><i
                                                                class="fa fa-heart"></i></a></li>
                                                    <li><a href="#" title=" Add to Compare "><i
                                                                class="fa fa-retweet"></i></a></li>
                                                    <li><a href="#" title=" Add to cart "><i
                                                                class="fa fa-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="quick_view">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                    title="Quick view"><i class="fa fa-search"></i></a>
                                            </div>

                                        </div>
                                        <div class="product_content">
                                            <div class="product_timing">
                                                <div data-countdown="2022/12/15"></div>
                                            </div>
                                            <div class="samll_product_ratting">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="small_product_name">
                                                <a title="Printed Summer Dress" href="single-product.html"> Summer
                                                    Dress</a>
                                            </div>
                                            <div class="small_product_price">
                                                <span class="new_price"> $140.00 </span>
                                                <span class="old_price"> $150.50 </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a href="single-product.html"><img
                                                    src="{{ asset('frontend/assets/img/product/product6.jpg') }}"
                                                    alt=""></a>

                                            <div class="product_action">
                                                <ul>
                                                    <li><a href="#" title=" Add to Wishlist "><i
                                                                class="fa fa-heart"></i></a></li>
                                                    <li><a href="#" title=" Add to Compare "><i
                                                                class="fa fa-retweet"></i></a></li>
                                                    <li><a href="#" title=" Add to cart "><i
                                                                class="fa fa-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="quick_view">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                    title="Quick view"><i class="fa fa-search"></i></a>
                                            </div>

                                        </div>
                                        <div class="product_content">
                                            <div class="product_timing">
                                                <div data-countdown="2022/12/15"></div>
                                            </div>
                                            <div class="samll_product_ratting">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="small_product_name">
                                                <a title="Printed Summer Dress" href="single-product.html">Printed
                                                    Summer Dress</a>
                                            </div>
                                            <div class="small_product_price">
                                                <span class="new_price"> $140.00 </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="product_banner product_banner_two fix">
                        <a href="#"><img src="{{ asset('frontend/assets/img/banner/banner1.jpg') }}"
                                alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--product area end-->

    <!--banner area start-->
    <div class="banner_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_banner fix">
                        <a href="#"><img src="{{ asset('frontend/assets/img/banner/banner2.jpg') }}"
                                alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_banner fix">
                        <a href="#"><img src="{{ asset('frontend/assets/img/banner/banner3.jpg') }}"
                                alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_banner b_three fix">
                        <a href="#"><img src="{{ asset('frontend/assets/img/banner/banner4.jpg') }}"
                                alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--banner area end-->
    <!--featured area css here-->
    <div class="featured_area mb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="featured_produt feature_p_four mb-40">
                        <div class="top_title">
                            <h2> Bestseller</h2>
                        </div>
                        <div class="f_active_four owl-carousel">
                            <div class="single_featured">
                                <div class="single_product single_p_four">
                                    <div class="product_thumb">
                                        <a href="single-product.html"><img
                                                src="{{ asset('frontend/assets/img/product/product20.jpg') }}"
                                                alt=""></a>
                                        <div class="product_discount">
                                            <span>New</span>
                                        </div>
                                        <div class="product_action">
                                            <ul>
                                                <li><a href="#" title=" Add to Wishlist "><i
                                                            class="fa fa-heart"></i></a></li>
                                                <li><a href="#" title=" Add to Compare "><i
                                                            class="fa fa-retweet"></i></a></li>
                                                <li><a href="#" title=" Add to cart "><i
                                                            class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="quick_view">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                title="Quick view"><i class="fa fa-search"></i></a>
                                        </div>

                                    </div>
                                    <div class="product_content">
                                        <div class="samll_product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="small_product_name">
                                            <a title="Printed Summer Dress" href="{{ route('home') }}">Aliquam
                                                furniture</a>
                                        </div>
                                        <div class="small_product_price">
                                            <span class="new_price"> $140.00 </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single_featured">
                                <div class="single_product single_p_four">
                                    <div class="product_thumb">
                                        <a href="{{ route('home') }}"><img
                                                src="{{ asset('frontend/assets/img/product/product21.jpg') }}"
                                                alt=""></a>
                                        <div class="product_discount">
                                            <span>New</span>
                                        </div>
                                        <div class="product_action">
                                            <ul>
                                                <li><a href="#" title=" Add to Wishlist "><i
                                                            class="fa fa-heart"></i></a></li>
                                                <li><a href="#" title=" Add to Compare "><i
                                                            class="fa fa-retweet"></i></a></li>
                                                <li><a href="#" title=" Add to cart "><i
                                                            class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="quick_view">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                title="Quick view"><i class="fa fa-search"></i></a>
                                        </div>

                                    </div>
                                    <div class="product_content">
                                        <div class="samll_product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="small_product_name">
                                            <a title="Printed Summer Dress" href="{{ route('home') }}">Aliquam
                                                lobortis</a>
                                        </div>
                                        <div class="small_product_price">
                                            <span class="new_price"> $140.00 </span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="single_featured">
                                <div class="single_product single_p_four">
                                    <div class="product_thumb">
                                        <a href="{{ route('home') }}"><img
                                                src="{{ asset('frontend/assets/img/product/product22.jpg') }}"
                                                alt=""></a>
                                        <div class="product_discount">
                                            <span>New</span>
                                        </div>
                                        <div class="product_action">
                                            <ul>
                                                <li><a href="#" title=" Add to Wishlist "><i
                                                            class="fa fa-heart"></i></a></li>
                                                <li><a href="#" title=" Add to Compare "><i
                                                            class="fa fa-retweet"></i></a></li>
                                                <li><a href="#" title=" Add to cart "><i
                                                            class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="quick_view">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                title="Quick view"><i class="fa fa-search"></i></a>
                                        </div>

                                    </div>
                                    <div class="product_content">
                                        <div class="samll_product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="small_product_name">
                                            <a title="Printed Summer Dress" href="{{ route('home') }}">hanbag elit</a>
                                        </div>
                                        <div class="small_product_price">
                                            <span class="new_price"> $130.00 </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single_featured">
                                <div class="single_product single_p_four">
                                    <div class="product_thumb">
                                        <a href="{{ route('home') }}"><img
                                                src="{{ asset('frontend/assets/img/product/product26.jpg') }}"
                                                alt=""></a>
                                        <div class="product_discount">
                                            <span>New</span>
                                        </div>
                                        <div class="product_action">
                                            <ul>
                                                <li><a href="#" title=" Add to Wishlist "><i
                                                            class="fa fa-heart"></i></a></li>
                                                <li><a href="#" title=" Add to Compare "><i
                                                            class="fa fa-retweet"></i></a></li>
                                                <li><a href="#" title=" Add to cart "><i
                                                            class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="quick_view">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                title="Quick view"><i class="fa fa-search"></i></a>
                                        </div>

                                    </div>
                                    <div class="product_content">
                                        <div class="samll_product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="small_product_name">
                                            <a title="Printed Summer Dress" href="{{ route('home') }}">Aliquam
                                                lobortis</a>
                                        </div>
                                        <div class="small_product_price">
                                            <span class="new_price"> $140.00 </span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="featured_produt feature_p_four">
                        <div class="top_title">
                            <h2> Bestseller</h2>
                        </div>
                        <div class="f_active_four owl-carousel">
                            <div class="single_featured">
                                <div class="single_product single_p_four">
                                    <div class="product_thumb">
                                        <a href="{{ route('home') }}"><img
                                                src="{{ asset('frontend/assets/img/product/product9.jpg') }}"
                                                alt=""></a>
                                        <div class="product_discount">
                                            <span>-10%</span>
                                        </div>
                                        <div class="product_action">
                                            <ul>
                                                <li><a href="#" title=" Add to Wishlist "><i
                                                            class="fa fa-heart"></i></a></li>
                                                <li><a href="#" title=" Add to Compare "><i
                                                            class="fa fa-retweet"></i></a></li>
                                                <li><a href="#" title=" Add to cart "><i
                                                            class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="quick_view">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                title="Quick view"><i class="fa fa-search"></i></a>
                                        </div>

                                    </div>
                                    <div class="product_content">
                                        <div class="samll_product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="small_product_name">
                                            <a title="Printed Summer Dress" href="{{ route('home') }}">Dignissim
                                                furniture</a>
                                        </div>
                                        <div class="small_product_price">
                                            <span class="new_price"> $140.00 </span>
                                            <span class="old_price"> $150.50 </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single_featured">
                                <div class="single_product single_p_four">
                                    <div class="product_thumb">
                                        <a href="{{ route('home') }}"><img
                                                src="{{ asset('frontend/assets/img/product/product29.jpg') }}"
                                                alt=""></a>
                                        <div class="product_discount">
                                            <span>New</span>
                                        </div>
                                        <div class="product_action">
                                            <ul>
                                                <li><a href="#" title=" Add to Wishlist "><i
                                                            class="fa fa-heart"></i></a></li>
                                                <li><a href="#" title=" Add to Compare "><i
                                                            class="fa fa-retweet"></i></a></li>
                                                <li><a href="#" title=" Add to cart "><i
                                                            class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="quick_view">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                title="Quick view"><i class="fa fa-search"></i></a>
                                        </div>

                                    </div>
                                    <div class="product_content">
                                        <div class="samll_product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="small_product_name">
                                            <a title="Printed Summer Dress" href="{{ route('home') }}">Aliquam
                                                furniture</a>
                                        </div>
                                        <div class="small_product_price">
                                            <span class="new_price"> $120.00 </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single_featured">
                                <div class="single_product single_p_four">
                                    <div class="product_thumb">
                                        <a href="{{ route('home') }}"><img
                                                src="{{ asset('frontend/assets/img/product/product31.jpg') }}"
                                                alt=""></a>
                                        <div class="product_discount">
                                            <span>New</span>
                                        </div>
                                        <div class="product_action">
                                            <ul>
                                                <li><a href="#" title=" Add to Wishlist "><i
                                                            class="fa fa-heart"></i></a></li>
                                                <li><a href="#" title=" Add to Compare "><i
                                                            class="fa fa-retweet"></i></a></li>
                                                <li><a href="#" title=" Add to cart "><i
                                                            class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="quick_view">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                title="Quick view"><i class="fa fa-search"></i></a>
                                        </div>

                                    </div>
                                    <div class="product_content">
                                        <div class="samll_product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="small_product_name">
                                            <a title="Printed Summer Dress" href="{{ route('home') }}">Aliquam
                                                lobortis</a>
                                        </div>
                                        <div class="small_product_price">
                                            <span class="new_price"> $140.00 </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single_featured">
                                <div class="single_product single_p_four">
                                    <div class="product_thumb">
                                        <a href="{{ route('home') }}"><img
                                                src="{{ asset('frontend/assets/img/product/product33.jpg') }}"
                                                alt=""></a>
                                        <div class="product_discount">
                                            <span>New</span>
                                        </div>
                                        <div class="product_action">
                                            <ul>
                                                <li><a href="#" title=" Add to Wishlist "><i
                                                            class="fa fa-heart"></i></a></li>
                                                <li><a href="#" title=" Add to Compare "><i
                                                            class="fa fa-retweet"></i></a></li>
                                                <li><a href="#" title=" Add to cart "><i
                                                            class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="quick_view">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"
                                                title="Quick view"><i class="fa fa-search"></i></a>
                                        </div>

                                    </div>
                                    <div class="product_content">
                                        <div class="samll_product_ratting">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="small_product_name">
                                            <a title="Printed Summer Dress" href="{{ route('home') }}">summer
                                                furniture</a>
                                        </div>
                                        <div class="small_product_price">
                                            <span class="new_price"> $140.00 </span>
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
    <!--featured area css end-->

    <!--banner area start-->
    <div class="banner_area banner_four">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single_banner mb-30 fix">
                        <a href="#"><img src="{{ asset('frontend/assets/img/banner/banner6.jpg') }}"
                                alt=""></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_banner mb-30 fix">
                        <a href="#"><img src="{{ asset('frontend/assets/img/banner/banner15.jpg') }}"
                                alt=""></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_banner fix">
                        <a href="#"><img src="{{ asset('frontend/assets/img/banner/banner16.jpg') }}"
                                alt=""></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_banner fix">
                        <a href="#"><img src="{{ asset('frontend/assets/img/banner/banner17.jpg') }}"
                                alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--banner area end-->

    <!--featured area css here-->
    <div class="featured_area fashion mb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="blog_area_two blog_four">
                        <div class="top_title mb-10">
                            <h2> Blog Posts</h2>
                        </div>
                        <div class="blog_active_two active_four owl-carousel">
                            <div class="blog_item_four">
                                <div class="single_blog single_blog_four">
                                    <div class="blog_thumb thumb_four">
                                        <a href="blog-details.html"><img
                                                src="{{ asset('frontend/assets/img/blog/blog1.jpg') }}"
                                                alt=""></a>
                                    </div>
                                    <div class="blog_content blog_c_four">
                                        <h4 class="blog_title"><a href="blog-details.html">Share the Love for
                                                PrestaShop 1.6</a></h4>
                                        <p class="blog_desc"> Lorem Ipsum is simply dummy text of the industry. Lorem
                                            Ipsum has been the...</p>
                                    </div>
                                </div>
                                <div class="single_blog single_blog_four">
                                    <div class="blog_thumb thumb_four">
                                        <a href="blog-details.html"><img
                                                src="{{ asset('frontend/assets/img/blog/blog2.jpg') }}"
                                                alt=""></a>
                                    </div>
                                    <div class="blog_content blog_c_four">
                                        <h4 class="blog_title"><a href="blog-details.html">Share the Love for
                                                PrestaShop 1.6</a></h4>
                                        <p class="blog_desc"> Lorem Ipsum is simply dummy text of the industry. Lorem
                                            Ipsum has been the...</p>
                                    </div>
                                </div>
                            </div>
                            <div class="blog_item_four">
                                <div class="single_blog single_blog_four">
                                    <div class="blog_thumb thumb_four">
                                        <a href="blog-details.html"><img
                                                src="{{ asset('frontend/assets/img/blog/blog3.jpg') }}"
                                                alt=""></a>
                                    </div>
                                    <div class="blog_content blog_c_four">
                                        <h4 class="blog_title"><a href="blog-details.html">Share the Love for
                                                PrestaShop 1.6</a></h4>
                                        <p class="blog_desc"> Lorem Ipsum is simply dummy text of the industry. Lorem
                                            Ipsum has been the...</p>
                                    </div>
                                </div>
                                <div class="single_blog single_blog_four">
                                    <div class="blog_thumb thumb_four">
                                        <a href="blog-details.html"><img
                                                src="{{ asset('frontend/assets/img/blog/blog4.jpg') }}"
                                                alt=""></a>
                                    </div>
                                    <div class="blog_content blog_c_four">
                                        <h4 class="blog_title"><a href="blog-details.html">Share the Love for
                                                PrestaShop 1.6</a></h4>
                                        <p class="blog_desc"> Lorem Ipsum is simply dummy text of the industry. Lorem
                                            Ipsum has been the...</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 ">
                    <div class="brand_logo brand_logo_two">
                        <div class="top_title mb-10">
                            <h2> logo brands</h2>
                        </div>
                        <div class="brand_active_two active_four owl-carousel">
                            <div class="single_brand_item single_i_four">
                                <div class="brand_itens_inner">
                                    <div class="single_brand single_b_four">
                                        <a href="#"><img src="{{ asset('frontend/assets/img/brand/brand1.jpg') }}"
                                                alt=""></a>
                                    </div>
                                    <div class="single_brand single_b_four">
                                        <a href="#"><img src="{{ asset('frontend/assets/img/brand/brand2.jpg') }}"
                                                alt=""></a>
                                    </div>
                                </div>
                                <div class="brand_itens_inner">
                                    <div class="single_brand single_b_four">
                                        <a href="#"><img src="{{ asset('frontend/assets/img/brand/brand3.jpg') }}"
                                                alt=""></a>
                                    </div>
                                    <div class="single_brand single_b_four">
                                        <a href="#"><img src="{{ asset('frontend/assets/img/brand/brand4.jpg') }}"
                                                alt=""></a>
                                    </div>
                                </div>
                                <div class="brand_itens_inner">
                                    <div class="single_brand single_b_four">
                                        <a href="#"><img src="{{ asset('frontend/assets/img/brand/brand5.jpg') }}"
                                                alt=""></a>
                                    </div>
                                    <div class="single_brand single_b_four">
                                        <a href="#"><img src="{{ asset('frontend/assets/img/brand/brand6.jpg') }}"
                                                alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="single_brand_item single_i_four">
                                <div class="brand_itens_inner">
                                    <div class="single_brand single_b_four">
                                        <a href="#"><img src="{{ asset('frontend/assets/img/brand/brand4.jpg') }}"
                                                alt=""></a>
                                    </div>
                                    <div class="single_brand single_b_four">
                                        <a href="#"><img src="{{ asset('frontend/assets/img/brand/brand2.jpg') }}"
                                                alt=""></a>
                                    </div>
                                </div>
                                <div class="brand_itens_inner">
                                    <div class="single_brand single_b_four">
                                        <a href="#"><img src="{{ asset('frontend/assets/img/brand/brand3.jpg') }}"
                                                alt=""></a>
                                    </div>
                                    <div class="single_brand single_b_four">
                                        <a href="#"><img src="{{ asset('frontend/assets/img/brand/brand6.jpg') }}"
                                                alt=""></a>
                                    </div>
                                </div>
                                <div class="brand_itens_inner">
                                    <div class="single_brand single_b_four">
                                        <a href="#"><img src="{{ asset('frontend/assets/img/brand/brand1.jpg') }}"
                                                alt=""></a>
                                    </div>
                                    <div class="single_brand single_b_four">
                                        <a href="#"><img src="{{ asset('frontend/assets/img/brand/brand5.jpg') }}"
                                                alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 ">
                    <div class="shipping_area shipping_four">
                        <div class="top_title">
                            <h2> logo brands</h2>
                        </div>
                        <div class="single_shipping single_sp_four">
                            <div class="shippin_icone icone_four">
                                <i class="fa fa-truck"></i>
                            </div>
                            <div class="shipping_content sp_c_four">
                                <h3>Free shipping on orders over $100</h3>
                            </div>
                        </div>
                        <div class="single_shipping single_sp_four">
                            <div class="shippin_icone icone_four">
                                <i class="fa fa-history"></i>
                            </div>
                            <div class="shipping_content sp_c_four">
                                <h3>30-day returns money back guarantee</h3>
                            </div>
                        </div>
                        <div class="single_shipping single_sp_four box3">
                            <div class="shippin_icone icone_four">
                                <i class="fa fa-headphones"></i>
                            </div>
                            <div class="shipping_content sp_c_four">
                                <h3>24/7 online support consultations</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--featured area css end-->

    <!--newsletter area start-->
    <div class="newsletter_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2 col-md-6">
                    <div class="footer_logo">
                        <a href="#"><img src="{{ asset('frontend/assets/img/logo/logo.png') }}"
                                alt=""></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="social_icone">
                        <ul>
                            <li><a href="#" title="facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" title="twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" title="feed"><i class="fa fa-feed"></i></a></li>
                            <li><a href="#" title="linkedin"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#" title="pinterest"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="newslatter_inner fix">
                        <h4>send Newsletters</h4>
                        <form action="#">
                            <input placeholder="enter your email" type="text">
                            <button type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--newsletter area end-->
@endsection
