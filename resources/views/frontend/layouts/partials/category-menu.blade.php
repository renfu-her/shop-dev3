@php
    $categories = App\Models\Category::getMainCategories();
@endphp

<div class="collapse navbar-stuck-hide" id="stuckNav">
    <nav class="offcanvas offcanvas-start" id="navbarNav" tabindex="-1" aria-labelledby="navbarNavLabel">
        <div class="offcanvas-header py-3">
            <h5 class="offcanvas-title" id="navbarNavLabel">瀏覽分類</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body py-3 py-lg-0">
            <div class="container px-0 px-lg-3">
                <div class="row">
                    <!-- Categories mega menu -->
                    <div class="col-lg-3">
                        <div class="navbar-nav">
                            <div class="dropdown w-100">
                                <!-- 在大螢幕上顯示的按鈕 -->
                                <div class="cursor-pointer d-none d-lg-block" data-bs-toggle="dropdown"
                                    data-bs-trigger="hover" data-bs-theme="dark">
                                    <a class="position-absolute top-0 start-0 w-100 h-100" href="/categories">
                                        <span class="visually-hidden">分類</span>
                                    </a>
                                    <button type="button"
                                        class="btn btn-lg btn-secondary dropdown-toggle w-100 rounded-bottom-0 justify-content-start pe-none">
                                        <i class="ci-grid fs-lg"></i>
                                        <span class="ms-2 me-auto">分類</span>
                                    </button>
                                </div>

                                <!-- 在小螢幕上顯示的按鈕 -->
                                <button type="button"
                                    class="btn btn-lg btn-secondary dropdown-toggle w-100 justify-content-start d-lg-none mb-2"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                    <i class="ci-grid fs-lg"></i>
                                    <span class="ms-2 me-auto">分類</span>
                                </button>

                                <!-- Mega menu -->
                                <ul class="dropdown-menu dropdown-menu-static w-100 rounded-top-0 rounded-bottom-4 py-1 p-lg-1"
                                    style="--cz-dropdown-spacer: 0; --cz-dropdown-item-padding-y: .625rem; --cz-dropdown-item-spacer: 0">
                                    <li class="d-lg-none pt-2">
                                        <a class="dropdown-item fw-medium" href="/categories">
                                            <i class="ci-grid fs-xl opacity-60 pe-1 me-2"></i>
                                            所有分類
                                            <i class="ci-chevron-right fs-base ms-auto me-n1"></i>
                                        </a>
                                    </li>
                                    @foreach ($categories as $category)
                                        <li class="dropend position-static">
                                            <div class="position-relative rounded pt-2 pb-1 px-lg-2"
                                                data-bs-toggle="dropdown" data-bs-trigger="hover">
                                                <a class="dropdown-item fw-medium stretched-link d-none d-lg-flex"
                                                    href="/categories/{{ $category->slug }}">
                                                    <i
                                                        class="{{ $category->icon ?? 'ci-folder' }} fs-xl opacity-60 pe-1 me-2"></i>
                                                    <span class="text-truncate">{{ $category->name }}</span>
                                                    @if ($category->children->count() > 0)
                                                        <i class="ci-chevron-right fs-base ms-auto me-n1"></i>
                                                    @endif
                                                </a>
                                                <div class="dropdown-item fw-medium text-wrap stretched-link d-lg-none">
                                                    <i
                                                        class="{{ $category->icon ?? 'ci-folder' }} fs-xl opacity-60 pe-1 me-2"></i>
                                                    {{ $category->name }}
                                                    @if ($category->children->count() > 0)
                                                        <i class="ci-chevron-down fs-base ms-auto me-n1"></i>
                                                    @endif
                                                </div>
                                            </div>
                                            @if ($category->children->count() > 0)
                                                <div class="dropdown-menu rounded-4 p-4"
                                                    style="top: 1rem; height: calc(100% - .1875rem); --cz-dropdown-spacer: .3125rem; animation: none;">
                                                    <div class="d-flex flex-column flex-lg-row h-100 gap-4">
                                                        @foreach ($category->children->chunk(8) as $chunk)
                                                            <div style="min-width: 194px">
                                                                <ul class="nav flex-column gap-2 mt-n2">
                                                                    @foreach ($chunk as $child)
                                                                        <li class="d-flex w-100 pt-1">
                                                                            <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                                                href="/categories/{{ $child->slug }}">{{ $child->name }}</a>
                                                                        </li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Navbar nav -->
                    <div class="col-lg-9 d-lg-flex pt-3 pt-lg-0 ps-lg-0">
                        <ul class="navbar-nav position-relative">
                            <li class="nav-item dropdown me-lg-n1 me-xl-0">
                                <a class="nav-link dropdown-toggle active" aria-current="page" href="#"
                                    role="button" data-bs-toggle="dropdown" data-bs-trigger="hover"
                                    aria-expanded="false">Home</a>
                                <ul class="dropdown-menu">
                                    <li class="hover-effect-opacity px-2 mx-n2">
                                        <a class="dropdown-item d-block mb-0" href="home-electronics.html">
                                            <span class="fw-medium">Electronics Store</span>
                                            <span class="d-block fs-xs text-body-secondary">Megamenu + Hero
                                                slider</span>
                                            <div class="d-none d-lg-block hover-effect-target position-absolute top-0 start-100 bg-body border border-light-subtle rounded rounded-start-0 transition-none invisible opacity-0 pt-2 px-2 ms-n2"
                                                style="width: 212px; height: calc(100% + 2px); margin-top: -1px">
                                                <img class="position-relative z-2 d-none-dark"
                                                    src="{{ asset('frontend/img/mega-menu/demo-preview/electronics-light.jpg') }}"
                                                    alt="Electronics Store">
                                                <img class="position-relative z-2 d-none d-block-dark"
                                                    src="{{ asset('frontend/img/mega-menu/demo-preview/electronics-dark.jpg') }}"
                                                    alt="Electronics Store">
                                                <span
                                                    class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none-dark"
                                                    style="box-shadow: .875rem .5rem 2rem -.5rem #676f7b; opacity: .1"></span>
                                                <span
                                                    class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none d-block-dark"
                                                    style="box-shadow: .875rem .5rem 1.875rem -.5rem #080b12; opacity: .25"></span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="hover-effect-opacity px-2 mx-n2">
                                        <a class="dropdown-item d-block mb-0" href="home-fashion-v1.html">
                                            <span class="fw-medium">Fashion Store v.1</span>
                                            <span class="d-block fs-xs text-body-secondary">Hero promo
                                                slider</span>
                                            <div class="d-none d-lg-block hover-effect-target position-absolute top-0 start-100 bg-body border border-light-subtle rounded rounded-start-0 transition-none invisible opacity-0 pt-2 px-2 ms-n2"
                                                style="width: 212px; height: calc(100% + 2px); margin-top: -1px">
                                                <img class="position-relative z-2 d-none-dark"
                                                    src="{{ asset('frontend/img/mega-menu/demo-preview/fashion-1-light.jpg') }}"
                                                    alt="Fashion Store v.1">
                                                <img class="position-relative z-2 d-none d-block-dark"
                                                    src="{{ asset('frontend/img/mega-menu/demo-preview/fashion-1-dark.jpg') }}"
                                                    alt="Fashion Store v.1">
                                                <span
                                                    class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none-dark"
                                                    style="box-shadow: .875rem .5rem 2rem -.5rem #676f7b; opacity: .1"></span>
                                                <span
                                                    class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none d-block-dark"
                                                    style="box-shadow: .875rem .5rem 1.875rem -.5rem #080b12; opacity: .25"></span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="hover-effect-opacity px-2 mx-n2">
                                        <a class="dropdown-item d-block mb-0" href="home-fashion-v2.html">
                                            <span class="fw-medium">Fashion Store v.2</span>
                                            <span class="d-block fs-xs text-body-secondary">Hero banner with
                                                hotspots</span>
                                            <div class="d-none d-lg-block hover-effect-target position-absolute top-0 start-100 bg-body border border-light-subtle rounded rounded-start-0 transition-none invisible opacity-0 pt-2 px-2 ms-n2"
                                                style="width: 212px; height: calc(100% + 2px); margin-top: -1px">
                                                <img class="position-relative z-2 d-none-dark"
                                                    src="{{ asset('frontend/img/mega-menu/demo-preview/fashion-2-light.jpg') }}"
                                                    alt="Fashion Store v.2">
                                                <img class="position-relative z-2 d-none d-block-dark"
                                                    src="{{ asset('frontend/img/mega-menu/demo-preview/fashion-2-dark.jpg') }}"
                                                    alt="Fashion Store v.2">
                                                <span
                                                    class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none-dark"
                                                    style="box-shadow: .875rem .5rem 2rem -.5rem #676f7b; opacity: .1"></span>
                                                <span
                                                    class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none d-block-dark"
                                                    style="box-shadow: .875rem .5rem 1.875rem -.5rem #080b12; opacity: .25"></span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="hover-effect-opacity px-2 mx-n2">
                                        <a class="dropdown-item d-block mb-0" href="home-furniture.html">
                                            <span class="fw-medium">Furniture Store</span>
                                            <span class="d-block fs-xs text-body-secondary">Fancy product
                                                carousel</span>
                                            <div class="d-none d-lg-block hover-effect-target position-absolute top-0 start-100 bg-body border border-light-subtle rounded rounded-start-0 transition-none invisible opacity-0 pt-2 px-2 ms-n2"
                                                style="width: 212px; height: calc(100% + 2px); margin-top: -1px">
                                                <img class="position-relative z-2 d-none-dark"
                                                    src="{{ asset('frontend/img/mega-menu/demo-preview/furniture-light.jpg') }}"
                                                    alt="Furniture Store">
                                                <img class="position-relative z-2 d-none d-block-dark"
                                                    src="{{ asset('frontend/img/mega-menu/demo-preview/furniture-dark.jpg') }}"
                                                    alt="Furniture Store">
                                                <span
                                                    class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none-dark"
                                                    style="box-shadow: .875rem .5rem 2rem -.5rem #676f7b; opacity: .1"></span>
                                                <span
                                                    class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none d-block-dark"
                                                    style="box-shadow: .875rem .5rem 1.875rem -.5rem #080b12; opacity: .25"></span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="hover-effect-opacity px-2 mx-n2">
                                        <a class="dropdown-item d-block mb-0" href="home-grocery.html">
                                            <span class="fw-medium">Grocery Store</span>
                                            <span class="d-block fs-xs text-body-secondary">Hero slider +
                                                Category cards</span>
                                            <div class="d-none d-lg-block hover-effect-target position-absolute top-0 start-100 bg-body border border-light-subtle rounded rounded-start-0 transition-none invisible opacity-0 pt-2 px-2 ms-n2"
                                                style="width: 212px; height: calc(100% + 2px); margin-top: -1px">
                                                <img class="position-relative z-2 d-none-dark"
                                                    src="{{ asset('frontend/img/mega-menu/demo-preview/grocery-light.jpg') }}"
                                                    alt="Grocery Store">
                                                <img class="position-relative z-2 d-none d-block-dark"
                                                    src="{{ asset('frontend/img/mega-menu/demo-preview/grocery-dark.jpg') }}"
                                                    alt="Grocery Store">
                                                <span
                                                    class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none-dark"
                                                    style="box-shadow: .875rem .5rem 2rem -.5rem #676f7b; opacity: .1"></span>
                                                <span
                                                    class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none d-block-dark"
                                                    style="box-shadow: .875rem .5rem 1.875rem -.5rem #080b12; opacity: .25"></span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="hover-effect-opacity px-2 mx-n2">
                                        <a class="dropdown-item d-block mb-0" href="home-marketplace.html">
                                            <span class="fw-medium">Marketplace</span>
                                            <span class="d-block fs-xs text-body-secondary">Multi-vendor,
                                                digital goods</span>
                                            <div class="d-none d-lg-block hover-effect-target position-absolute top-0 start-100 bg-body border border-light-subtle rounded rounded-start-0 transition-none invisible opacity-0 pt-2 px-2 ms-n2"
                                                style="width: 212px; height: calc(100% + 2px); margin-top: -1px">
                                                <img class="position-relative z-2 d-none-dark"
                                                    src="{{ asset('frontend/img/mega-menu/demo-preview/marketplace-light.jpg') }}"
                                                    alt="Marketplace">
                                                <img class="position-relative z-2 d-none d-block-dark"
                                                    src="{{ asset('frontend/img/mega-menu/demo-preview/marketplace-dark.jpg') }}"
                                                    alt="Marketplace">
                                                <span
                                                    class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none-dark"
                                                    style="box-shadow: .875rem .5rem 2rem -.5rem #676f7b; opacity: .1"></span>
                                                <span
                                                    class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none d-block-dark"
                                                    style="box-shadow: .875rem .5rem 1.875rem -.5rem #080b12; opacity: .25"></span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="hover-effect-opacity px-2 mx-n2">
                                        <a class="dropdown-item d-block mb-0" href="home-single-store.html">
                                            <span class="fw-medium">Single Product Store</span>
                                            <span class="d-block fs-xs text-body-secondary">Single product /
                                                mono brand</span>
                                            <div class="d-none d-lg-block hover-effect-target position-absolute top-0 start-100 bg-body border border-light-subtle rounded rounded-start-0 transition-none invisible opacity-0 pt-2 px-2 ms-n2"
                                                style="width: 212px; height: calc(100% + 2px); margin-top: -1px">
                                                <img class="position-relative z-2 d-none-dark"
                                                    src="{{ asset('frontend/img/mega-menu/demo-preview/single-store-light.jpg') }}"
                                                    alt="Single Product Store">
                                                <img class="position-relative z-2 d-none d-block-dark"
                                                    src="{{ asset('frontend/img/mega-menu/demo-preview/single-store-dark.jpg') }}"
                                                    alt="Single Product Store">
                                                <span
                                                    class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none-dark"
                                                    style="box-shadow: .875rem .5rem 2rem -.5rem #676f7b; opacity: .1"></span>
                                                <span
                                                    class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none d-block-dark"
                                                    style="box-shadow: .875rem .5rem 1.875rem -.5rem #080b12; opacity: .25"></span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown position-static me-lg-n1 me-xl-0">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">Shop</a>
                                <div class="dropdown-menu rounded-4 p-4">
                                    <div class="d-flex flex-column flex-lg-row gap-4">
                                        <div style="min-width: 190px">
                                            <div class="h6 mb-2">Electronics Store</div>
                                            <ul class="nav flex-column gap-2 mt-0">
                                                <li class="d-flex w-100 pt-1">
                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                        href="shop-categories-electronics.html">Categories
                                                        Page</a>
                                                </li>
                                                <li class="d-flex w-100 pt-1">
                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                        href="shop-catalog-electronics.html">Catalog with Side
                                                        Filters</a>
                                                </li>
                                                <li class="d-flex w-100 pt-1">
                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                        href="shop-product-general-electronics.html">Product
                                                        General Info</a>
                                                </li>
                                                <li class="d-flex w-100 pt-1">
                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                        href="shop-product-details-electronics.html">Product
                                                        Details</a>
                                                </li>
                                                <li class="d-flex w-100 pt-1">
                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                        href="shop-product-reviews-electronics.html">Product
                                                        Reviews</a>
                                                </li>
                                            </ul>
                                            <div class="h6 pt-4 mb-2">Fashion Store</div>
                                            <ul class="nav flex-column gap-2 mt-0">
                                                <li class="d-flex w-100 pt-1">
                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                        href="shop-catalog-fashion.html">Catalog with Side
                                                        Filters</a>
                                                </li>
                                                <li class="d-flex w-100 pt-1">
                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                        href="shop-product-fashion.html">Product Page</a>
                                                </li>
                                            </ul>
                                            <div class="h6 pt-4 mb-2">Furniture Store</div>
                                            <ul class="nav flex-column gap-2 mt-0">
                                                <li class="d-flex w-100 pt-1">
                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                        href="shop-catalog-furniture.html">Catalog with Top
                                                        Filters</a>
                                                </li>
                                                <li class="d-flex w-100 pt-1">
                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                        href="shop-product-furniture.html">Product Page</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div style="min-width: 190px">
                                            <div class="h6 mb-2">Grocery Store</div>
                                            <ul class="nav flex-column gap-2 mt-0">
                                                <li class="d-flex w-100 pt-1">
                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                        href="shop-catalog-grocery.html">Catalog with Side
                                                        Filters</a>
                                                </li>
                                                <li class="d-flex w-100 pt-1">
                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                        href="shop-product-grocery.html">Product Page</a>
                                                </li>
                                            </ul>
                                            <div class="h6 pt-4 mb-2">Marketplace</div>
                                            <ul class="nav flex-column gap-2 mt-0">
                                                <li class="d-flex w-100 pt-1">
                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                        href="shop-catalog-marketplace.html">Catalog with Top
                                                        Filters</a>
                                                </li>
                                                <li class="d-flex w-100 pt-1">
                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                        href="shop-product-marketplace.html">Digital Product
                                                        Page</a>
                                                </li>
                                                <li class="d-flex w-100 pt-1">
                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                        href="checkout-marketplace.html">Cart / Checkout</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div style="min-width: 190px">
                                            <div class="h6 mb-2">Checkout v.1</div>
                                            <ul class="nav flex-column gap-2 mt-0">
                                                <li class="d-flex w-100 pt-1">
                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                        href="checkout-v1-cart.html">Shopping Cart</a>
                                                </li>
                                                <li class="d-flex w-100 pt-1">
                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                        href="checkout-v1-delivery-1.html">Delivery Info (Step
                                                        1)</a>
                                                </li>
                                                <li class="d-flex w-100 pt-1">
                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                        href="checkout-v1-delivery-2.html">Delivery Info (Step
                                                        2)</a>
                                                </li>
                                                <li class="d-flex w-100 pt-1">
                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                        href="checkout-v1-shipping.html">Shipping Address</a>
                                                </li>
                                                <li class="d-flex w-100 pt-1">
                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                        href="checkout-v1-payment.html">Payment</a>
                                                </li>
                                                <li class="d-flex w-100 pt-1">
                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                        href="checkout-v1-thankyou.html">Thank You Page</a>
                                                </li>
                                            </ul>
                                            <div class="h6 pt-4 mb-2">Checkout v.2</div>
                                            <ul class="nav flex-column gap-2 mt-0">
                                                <li class="d-flex w-100 pt-1">
                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                        href="checkout-v2-cart.html">Shopping Cart</a>
                                                </li>
                                                <li class="d-flex w-100 pt-1">
                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                        href="checkout-v2-delivery.html">Delivery Info</a>
                                                </li>
                                                <li class="d-flex w-100 pt-1">
                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                        href="checkout-v2-pickup.html">Pickup from Store</a>
                                                </li>
                                                <li class="d-flex w-100 pt-1">
                                                    <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0"
                                                        href="checkout-v2-thankyou.html">Thank You Page</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown me-lg-n1 me-xl-0">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" data-bs-trigger="hover" data-bs-auto-close="outside"
                                    aria-expanded="false">Account</a>
                                <ul class="dropdown-menu">
                                    <li class="dropend">
                                        <a class="dropdown-item dropdown-toggle" href="#!" role="button"
                                            data-bs-toggle="dropdown" data-bs-trigger="hover"
                                            aria-expanded="false">Auth Pages</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="account-signin.html">Sign
                                                    In</a></li>
                                            <li><a class="dropdown-item" href="account-signup.html">Sign
                                                    Up</a></li>
                                            <li><a class="dropdown-item"
                                                    href="account-password-recovery.html">Password
                                                    Recovery</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropend">
                                        <a class="dropdown-item dropdown-toggle" href="#!" role="button"
                                            data-bs-toggle="dropdown" data-bs-trigger="hover"
                                            aria-expanded="false">Shop User</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="account-orders.html">Orders
                                                    History</a></li>
                                            <li><a class="dropdown-item" href="account-wishlist.html">Wishlist</a>
                                            </li>
                                            <li><a class="dropdown-item" href="account-payment.html">Payment
                                                    Methods</a></li>
                                            <li><a class="dropdown-item" href="account-reviews.html">My
                                                    Reviews</a></li>
                                            <li><a class="dropdown-item" href="account-info.html">Personal
                                                    Info</a></li>
                                            <li><a class="dropdown-item" href="account-addresses.html">Addresses</a>
                                            </li>
                                            <li><a class="dropdown-item"
                                                    href="account-notifications.html">Notifications</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropend">
                                        <a class="dropdown-item dropdown-toggle" href="#!" role="button"
                                            data-bs-toggle="dropdown" data-bs-trigger="hover"
                                            aria-expanded="false">Marketplace
                                            User</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item"
                                                    href="account-marketplace-dashboard.html">Dashboard</a>
                                            </li>
                                            <li><a class="dropdown-item"
                                                    href="account-marketplace-products.html">Products</a></li>
                                            <li><a class="dropdown-item"
                                                    href="account-marketplace-sales.html">Sales</a></li>
                                            <li><a class="dropdown-item"
                                                    href="account-marketplace-payouts.html">Payouts</a></li>
                                            <li><a class="dropdown-item"
                                                    href="account-marketplace-purchases.html">Purchases</a>
                                            </li>
                                            <li><a class="dropdown-item"
                                                    href="account-marketplace-favorites.html">Favorites</a>
                                            </li>
                                            <li><a class="dropdown-item"
                                                    href="account-marketplace-settings.html">Settings</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown me-lg-n1 me-xl-0">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" data-bs-trigger="hover" data-bs-auto-close="outside"
                                    aria-expanded="false">Pages</a>
                                <ul class="dropdown-menu">
                                    <li class="dropend">
                                        <a class="dropdown-item dropdown-toggle" href="#!" role="button"
                                            data-bs-toggle="dropdown" data-bs-trigger="hover"
                                            aria-expanded="false">About</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="about-v1.html">About v.1</a>
                                            </li>
                                            <li><a class="dropdown-item" href="about-v2.html">About v.2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropend">
                                        <a class="dropdown-item dropdown-toggle" href="#!" role="button"
                                            data-bs-toggle="dropdown" data-bs-trigger="hover"
                                            aria-expanded="false">Blog</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="blog-grid-v1.html">Grid View
                                                    v.1</a></li>
                                            <li><a class="dropdown-item" href="blog-grid-v2.html">Grid View
                                                    v.2</a></li>
                                            <li><a class="dropdown-item" href="blog-list.html">List View</a>
                                            </li>
                                            <li><a class="dropdown-item" href="blog-single-v1.html">Single
                                                    Post v.1</a></li>
                                            <li><a class="dropdown-item" href="blog-single-v2.html">Single
                                                    Post v.2</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropend">
                                        <a class="dropdown-item dropdown-toggle" href="#!" role="button"
                                            data-bs-toggle="dropdown" data-bs-trigger="hover"
                                            aria-expanded="false">Contact</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="contact-v1.html">Contact
                                                    v.1</a></li>
                                            <li><a class="dropdown-item" href="contact-v2.html">Contact
                                                    v.2</a></li>
                                            <li><a class="dropdown-item" href="contact-v3.html">Contact
                                                    v.3</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropend">
                                        <a class="dropdown-item dropdown-toggle" href="#!" role="button"
                                            data-bs-toggle="dropdown" data-bs-trigger="hover"
                                            aria-expanded="false">Help Center</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="help-topics-v1.html">Help
                                                    Topics v.1</a></li>
                                            <li><a class="dropdown-item" href="help-topics-v2.html">Help
                                                    Topics v.2</a></li>
                                            <li><a class="dropdown-item" href="help-single-article-v1.html">Help
                                                    Single Article
                                                    v.1</a></li>
                                            <li><a class="dropdown-item" href="help-single-article-v2.html">Help
                                                    Single Article
                                                    v.2</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropend">
                                        <a class="dropdown-item dropdown-toggle" href="#!" role="button"
                                            data-bs-toggle="dropdown" data-bs-trigger="hover"
                                            aria-expanded="false">404 Error</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="404-electronics.html">404
                                                    Electronics</a></li>
                                            <li><a class="dropdown-item" href="404-fashion.html">404
                                                    Fashion</a></li>
                                            <li><a class="dropdown-item" href="404-furniture.html">404
                                                    Furniture</a></li>
                                            <li><a class="dropdown-item" href="404-grocery.html">404
                                                    Grocery</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="terms-and-conditions.html">Terms
                                            &amp; Conditions</a></li>
                                </ul>
                            </li>
                            <li class="nav-item me-lg-n2 me-xl-0">
                                <a class="nav-link" href="docs/installation.html">Docs</a>
                            </li>
                            <li class="nav-item me-lg-n2 me-xl-0">
                                <a class="nav-link" href="docs/typography.html">Components</a>
                            </li>
                        </ul>
                        <hr class="d-lg-none my-3">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item dropdown me-lg-n2 me-xl-n1">
                                <a class="nav-link dropdown-toggle fs-sm px-3" href="#!" role="button"
                                    data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">Eng</a>
                                <ul class="dropdown-menu fs-sm"
                                    style="--cz-dropdown-min-width: 7.5rem; --cz-dropdown-spacer: .25rem">
                                    <li><a class="dropdown-item" href="#!">Français</a></li>
                                    <li><a class="dropdown-item" href="#!">Deutsch</a></li>
                                    <li><a class="dropdown-item" href="#!">Italiano</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown me-lg-n1">
                                <a class="nav-link dropdown-toggle fs-sm px-3" href="#!" role="button"
                                    data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">USD
                                    ($)</a>
                                <ul class="dropdown-menu dropdown-menu-end fs-sm"
                                    style="--cz-dropdown-min-width: 7rem; --cz-dropdown-spacer: .25rem">
                                    <li><a class="dropdown-item" href="#!">€ EUR</a></li>
                                    <li><a class="dropdown-item" href="#!">£ UKP</a></li>
                                    <li><a class="dropdown-item" href="#!">¥ JPY</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

    </nav>
</div>
