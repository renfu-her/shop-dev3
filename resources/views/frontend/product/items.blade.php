@extends('frontend.layouts.app')

@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">{{ $currentCategory->name }}</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li><a href="index.html"><i class="lni lni-home"></i> 首頁</a></li>
                        <li><a href="javascript:void(0)">商品分類</a></li>
                        <li>{{ $currentCategory->name }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Start Product Grids -->
    <section class="product-grids section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12">
                    <!-- Start Product Sidebar -->
                    <div class="product-sidebar">
                        <!-- Start Single Widget -->
                        <div class="single-widget search">
                            <h3>搜尋商品</h3>
                            <form action="#">
                                <input type="text" placeholder="搜尋商品...">
                                <button type="submit"><i class="lni lni-search-alt"></i></button>
                            </form>
                        </div>
                        <!-- End Single Widget -->
                        <!-- Start Single Widget -->
                        <div class="single-widget">
                            <h3>所有分類</h3>
                            @foreach ($categories as $category)
                                <ul class="list">
                                    <li>
                                        <a href="{{ route('products.items', $category->id) }}">{{ $category->name }}</a>
                                    </li>
                            @endforeach

                            </ul>
                        </div>
                    </div>
                    <!-- End Product Sidebar -->
                </div>
                <div class="col-lg-9 col-12">
                    <div class="product-grids-head">
                        <div class="product-grid-topbar">
                            <div class="row align-items-center">
                                <div class="col-lg-7 col-md-8 col-12">
                                    <div class="product-sorting">
                                        <label for="sorting">排序:</label>
                                        <select class="form-control" id="sorting">
                                            <option>人氣</option>
                                            <option>價格低到高</option>
                                            <option>價格高到低</option>
                                            <option>評價</option>
                                            <option>A - Z 排序</option>
                                            <option>Z - A 排序</option>
                                        </select>
                                        <h3 class="total-show-product">顯示: <span>1 - 12 項</span></h3>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-4 col-12">
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <button class="nav-link active" id="nav-grid-tab" data-bs-toggle="tab"
                                                data-bs-target="#nav-grid" type="button" role="tab"
                                                aria-controls="nav-grid" aria-selected="true"><i
                                                    class="lni lni-grid-alt"></i></button>
                                            <button class="nav-link" id="nav-list-tab" data-bs-toggle="tab"
                                                data-bs-target="#nav-list" type="button" role="tab"
                                                aria-controls="nav-list" aria-selected="false"><i
                                                    class="lni lni-list"></i></button>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-grid" role="tabpanel"
                                aria-labelledby="nav-grid-tab">
                                <div class="row">
                                    @forelse ($products as $product)
                                        <div class="col-lg-4 col-md-6 col-12">
                                            <div class="single-product">
                                                <div class="product-image">
                                                    <img src="{{ $product->primaryImage->image_url }}" alt="#">
                                                    <div class="button">
                                                        <a href="{{ route('products.itemDetail', $product->id) }}"
                                                            class="btn"><i class="lni lni-cart"></i> 加入購物車</a>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <span class="category">{{ $product->category->name }}</span>
                                                    <h4 class="title">
                                                        <a href="product-grids.html">{{ $product->name }}</a>
                                                    </h4>
                                                    <ul class="review">
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star"></i></li>
                                                        <li><span>4.0 評價(s)</span></li>
                                                    </ul>
                                                    <div class="price">
                                                        <span>{{ $product->price }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                        <div class="col-lg-12 col-md-12 col-12">
                                            <div class="single-product">
                                                <div class="product-image text-center m-5">
                                                    <span>
                                                        <h4>目前沒有商品</h4>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforelse
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <!-- Pagination -->
                                    <div class="pagination left">
                                        @if ($products->hasPages())
                                            <ul class="pagination-list">
                                                {{-- 上一頁 --}}
                                                @if ($products->onFirstPage())
                                                    <li class="disabled"><span><i class="lni lni-chevron-left"></i></span>
                                                    </li>
                                                @else
                                                    <li><a href="{{ $products->previousPageUrl() }}"><i
                                                                class="lni lni-chevron-left"></i></a></li>
                                                @endif

                                                {{-- 頁碼 --}}
                                                @foreach ($products->getUrlRange(1, $products->lastPage()) as $page => $url)
                                                    @if ($page == $products->currentPage())
                                                        <li class="active"><span>{{ $page }}</span></li>
                                                    @else
                                                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                                                    @endif
                                                @endforeach

                                                {{-- 下一頁 --}}
                                                @if ($products->hasMorePages())
                                                    <li><a href="{{ $products->nextPageUrl() }}"><i
                                                                class="lni lni-chevron-right"></i></a></li>
                                                @else
                                                    <li class="disabled"><span><i
                                                                class="lni lni-chevron-right"></i></span>
                                                    </li>
                                                @endif
                                            </ul>
                                        @endif
                                    </div>
                                    <!--/ End Pagination -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-list" role="tabpanel" aria-labelledby="nav-list-tab">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-12">
                                    <!-- Start Single Product -->
                                    <div class="single-product">
                                        <div class="row align-items-center">
                                            <div class="col-lg-4 col-md-4 col-12">
                                                <div class="product-image">
                                                    <img src="assets/images/products/product-1.jpg" alt="#">
                                                    <div class="button">
                                                        <a href="product-details.html" class="btn"><i
                                                                class="lni lni-cart"></i> Add to
                                                            Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-12">
                                                <div class="product-info">
                                                    <span class="category">Watches</span>
                                                    <h4 class="title">
                                                        <a href="product-grids.html">Xiaomi Mi Band 5</a>
                                                    </h4>
                                                    <ul class="review">
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star"></i></li>
                                                        <li><span>4.0 Review(s)</span></li>
                                                    </ul>
                                                    <div class="price">
                                                        <span>$199.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Product -->
                                </div>
                                <div class="col-lg-12 col-md-12 col-12">
                                    <!-- Start Single Product -->
                                    <div class="single-product">
                                        <div class="row align-items-center">
                                            <div class="col-lg-4 col-md-4 col-12">
                                                <div class="product-image">
                                                    <img src="assets/images/products/product-2.jpg" alt="#">
                                                    <span class="sale-tag">-25%</span>
                                                    <div class="button">
                                                        <a href="product-details.html" class="btn"><i
                                                                class="lni lni-cart"></i> Add to
                                                            Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-12">
                                                <div class="product-info">
                                                    <span class="category">Speaker</span>
                                                    <h4 class="title">
                                                        <a href="product-grids.html">Big Power Sound Speaker</a>
                                                    </h4>
                                                    <ul class="review">
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><span>5.0 Review(s)</span></li>
                                                    </ul>
                                                    <div class="price">
                                                        <span>$275.00</span>
                                                        <span class="discount-price">$300.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Product -->
                                </div>
                                <div class="col-lg-12 col-md-12 col-12">
                                    <!-- Start Single Product -->
                                    <div class="single-product">
                                        <div class="row align-items-center">
                                            <div class="col-lg-4 col-md-4 col-12">
                                                <div class="product-image">
                                                    <img src="assets/images/products/product-3.jpg" alt="#">
                                                    <div class="button">
                                                        <a href="product-details.html" class="btn"><i
                                                                class="lni lni-cart"></i> Add to
                                                            Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-12">
                                                <div class="product-info">
                                                    <span class="category">Camera</span>
                                                    <h4 class="title">
                                                        <a href="product-grids.html">WiFi Security Camera</a>
                                                    </h4>
                                                    <ul class="review">
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><span>5.0 Review(s)</span></li>
                                                    </ul>
                                                    <div class="price">
                                                        <span>$399.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Product -->
                                </div>
                                <div class="col-lg-12 col-md-12 col-12">
                                    <!-- Start Single Product -->
                                    <div class="single-product">
                                        <div class="row align-items-center">
                                            <div class="col-lg-4 col-md-4 col-12">
                                                <div class="product-image">
                                                    <img src="assets/images/products/product-4.jpg" alt="#">
                                                    <span class="new-tag">New</span>
                                                    <div class="button">
                                                        <a href="product-details.html" class="btn"><i
                                                                class="lni lni-cart"></i> Add to
                                                            Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-12">
                                                <div class="product-info">
                                                    <span class="category">Phones</span>
                                                    <h4 class="title">
                                                        <a href="product-grids.html">iphone 6x plus</a>
                                                    </h4>
                                                    <ul class="review">
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><span>5.0 Review(s)</span></li>
                                                    </ul>
                                                    <div class="price">
                                                        <span>$400.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Product -->
                                </div>
                                <div class="col-lg-12 col-md-12 col-12">
                                    <!-- Start Single Product -->
                                    <div class="single-product">
                                        <div class="row align-items-center">
                                            <div class="col-lg-4 col-md-4 col-12">
                                                <div class="product-image">
                                                    <img src="assets/images/products/product-7.jpg" alt="#">
                                                    <span class="sale-tag">-50%</span>
                                                    <div class="button">
                                                        <a href="product-details.html" class="btn"><i
                                                                class="lni lni-cart"></i> Add to
                                                            Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-12">
                                                <div class="product-info">
                                                    <span class="category">Headphones</span>
                                                    <h4 class="title">
                                                        <a href="product-grids.html">PX7 Wireless Headphones</a>
                                                    </h4>
                                                    <ul class="review">
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star"></i></li>
                                                        <li><span>4.0 Review(s)</span></li>
                                                    </ul>
                                                    <div class="price">
                                                        <span>$100.00</span>
                                                        <span class="discount-price">$200.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Product -->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <!-- Pagination -->
                                    <div class="pagination left">
                                        @if ($products->hasPages())
                                            <ul class="pagination-list">
                                                {{-- 上一頁 --}}
                                                @if ($products->onFirstPage())
                                                    <li class="disabled"><span><i class="lni lni-chevron-left"></i></span>
                                                    </li>
                                                @else
                                                    <li><a href="{{ $products->previousPageUrl() }}"><i
                                                                class="lni lni-chevron-left"></i></a></li>
                                                @endif

                                                {{-- 頁碼 --}}
                                                @foreach ($products->getUrlRange(1, $products->lastPage()) as $page => $url)
                                                    @if ($page == $products->currentPage())
                                                        <li class="active"><span>{{ $page }}</span></li>
                                                    @else
                                                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                                                    @endif
                                                @endforeach

                                                {{-- 下一頁 --}}
                                                @if ($products->hasMorePages())
                                                    <li><a href="{{ $products->nextPageUrl() }}"><i
                                                                class="lni lni-chevron-right"></i></a></li>
                                                @else
                                                    <li class="disabled"><span><i
                                                                class="lni lni-chevron-right"></i></span></li>
                                                @endif
                                            </ul>
                                        @endif
                                    </div>
                                    <!--/ End Pagination -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection

@push('styles')
    <style>
        .pagination-list {
            display: flex;
            list-style: none;
            padding: 0;
            margin: 0;
            justify-content: center;
        }

        .pagination-list li {
            margin: 0 5px;
        }

        .pagination-list li a,
        .pagination-list li span {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border: 1px solid #eee;
            color: #666;
            border-radius: 4px;
            text-decoration: none;
        }

        .pagination-list li.active span {
            background-color: #0167F3;
            color: #fff;
            border-color: #0167F3;
        }

        .pagination-list li.disabled span {
            color: #ccc;
            cursor: not-allowed;
        }

        .pagination-list li a:hover {
            background-color: #f8f9fa;
            color: #0167F3;
        }
    </style>
@endpush
