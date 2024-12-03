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
                                                    href="/categories/{{ $category->id }}">
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
                                                                                href="/categories/{{ $child->id }}">{{ $child->name }}</a>
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
                    <!-- 其他選單 -->
                    <div class="col-lg-9 d-lg-flex pt-3 pt-lg-0 ps-lg-0">
                        <ul class="navbar-nav position-relative">

                            <li class="nav-item me-lg-n2 me-xl-0">
                                <a class="nav-link" href="#">活動訊息</a>
                            </li>

                            <li class="nav-item dropdown me-lg-n1 me-xl-0">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" data-bs-trigger="hover" data-bs-auto-close="outside"
                                    aria-expanded="false">會員專區</a>
                                <ul class="dropdown-menu">

                                    <li><a class="dropdown-item" href="#">登入</a></li>
                                    <li><a class="dropdown-item" href="#">加入會員</a></li>
                                    <li><a class="dropdown-item" href="#">忘記密碼</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown me-lg-n1 me-xl-0">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" data-bs-trigger="hover" data-bs-auto-close="outside"
                                    aria-expanded="false">常見問答</a>
                                <ul class="dropdown-menu">

                                    <li><a class="dropdown-item" href="#">登入</a></li>
                                    <li><a class="dropdown-item" href="#">加入會員</a></li>
                                    <li><a class="dropdown-item" href="#">忘記密碼</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown me-lg-n1 me-xl-0">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" data-bs-trigger="hover" data-bs-auto-close="outside"
                                    aria-expanded="false">關於我們</a>
                                <ul class="dropdown-menu">

                                    <li><a class="dropdown-item" href="#">登入</a></li>
                                    <li><a class="dropdown-item" href="#">加入會員</a></li>
                                    <li><a class="dropdown-item" href="#">忘記密碼</a></li>
                                </ul>
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
