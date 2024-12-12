@extends('frontend.layouts.app')

@section('content')
    <!-- Start Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">購物車</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li><a href="{{ route('home') }}"><i class="lni lni-home"></i> 首頁</a></li>
                        <li>購物車</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Start Shopping Cart -->
    <div class="shopping-cart section">
        <div class="container">
            <div class="cart-list-head">
                <!-- Cart List Title -->
                <div class="cart-list-title">
                    <div class="row">
                        <div class="col-lg-1 col-md-1 col-12">
                            <p>商品圖片</p>
                        </div>
                        <div class="col-lg-4 col-md-3 col-12">
                            <p>商品名稱</p>
                        </div>
                        <div class="col-lg-2 col-md-2 col-12">
                            <p>單價</p>
                        </div>
                        <div class="col-lg-2 col-md-2 col-12">
                            <p>數量</p>
                        </div>
                        <div class="col-lg-2 col-md-2 col-12">
                            <p>小計</p>
                        </div>
                        <div class="col-lg-1 col-md-2 col-12">
                            <p>移除</p>
                        </div>
                    </div>
                </div>

                <!-- Cart Single List -->
                @forelse($cart as $key =>$item)
                    <div class="cart-single-list">
                        <div class="row align-items-center">
                            <div class="col-lg-1 col-md-1 col-12">
                                <a href="{{ route('products.itemDetail', $item['product_id']) }}">
                                    <img src="{{ $item['primary_image'] }}" alt="{{ $item['product_name'] }}">
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-3 col-12">
                                <h5 class="product-name">
                                    <a href="{{ route('products.itemDetail', $item['product_id']) }}">{{ $item['product_name'] }}</a>
                                </h5>
                                <p class="product-des">
                                    <span>規格：{{ $item['spec_name'] }}</span>
                                </p>
                            </div>
                            <div class="col-lg-2 col-md-2 col-12">
                                <div class="count-input">
                                    <p class="price">NT${{ number_format($item['price']) }}</p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-12">
                                <div class="count-input">
                                    <select class="form-control quantity-select" data-item-id="{{ $key }}">
                                        @for ($i = 1; $i <= 10; $i++)
                                            <option value="{{ $i }}"
                                                {{ $item['quantity'] == $i ? 'selected' : '' }}>
                                                {{ $i }}
                                            </option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-12">
                                <p class="total-amount">NT${{ number_format($item['price'] * $item['quantity']) }}</p>
                            </div>
                            <div class="col-lg-1 col-md-2 col-12">
                                <a href="javascript:void(0)" class="remove-item" data-item-id="{{ $key }}">
                                    <i class="lni lni-close"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="cart-single-list">
                        <div class="row">
                            <div class="col-12 text-center py-4">
                                <p>購物車是空的</p>
                            </div>
                        </div>
                    </div>
                @endforelse
            </div>

            <!-- Start Total Amount -->
            <div class="row">
                <div class="col-12">
                    <div class="total-amount">
                        <div class="row">
                            <div class="col-lg-8 col-md-6 col-12">
                                <div class="left">
                                    <div class="coupon">
                                        <a href="{{ route('home') }}" class="btn btn-alt">
                                            <i class="lni lni-arrow-left"></i> 繼續購物
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="right">
                                    <ul>
                                        <li>小計<span>NT${{ number_format($total) }}</span></li>
                                        <li>運費<span>{{ $shippingFee > 0 ? 'NT$' . number_format($shippingFee) : '免運' }}</span>
                                        </li>
                                        <li class="last">總計<span>NT${{ number_format($total + $shippingFee) }}</span>
                                        </li>
                                    </ul>
                                    <div class="button">
                                        <a href="{{ route('checkout.index') }}" class="btn">前往結帳</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Total Amount -->
        </div>
    </div>
    <!-- End Shopping Cart -->
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            // 更新數量
            $('.quantity-select').change(function() {
                const itemId = $(this).data('item-id');
                const quantity = $(this).val();

                $.ajax({
                    url: '{{ route('cart.update-quantity') }}',
                    method: 'POST',
                    data: {
                        item_id: itemId,
                        quantity: quantity,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.success) {
                            window.location.reload();
                        } else {
                            window.showToast(response.message);
                        }
                    },
                    error: function() {
                        window.showToast('更新失敗');
                    }
                });
            });

            // 刪除商品
            $('.remove-item').click(function() {
                const itemId = $(this).data('item-id');

                if (confirm('確定要移除此商品？')) {
                    $.ajax({
                        url: '{{ route('cart.remove') }}',
                        method: 'POST',
                        data: {
                            item_id: itemId,
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            if (response.success) {
                                window.location.reload();
                            } else {
                                window.showToast(response.message);
                            }
                        },
                        error: function() {
                            window.showToast('移除失敗');
                        }
                    });
                }
            });
        });
    </script>
@endpush
