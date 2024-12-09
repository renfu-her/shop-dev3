@extends('frontend.layouts.app')

@section('content')
    <!-- Start Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">結帳</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li><a href="{{ route('home') }}"><i class="lni lni-home"></i> 首頁</a></li>
                        <li>結帳</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Start Checkout Area -->
    <section class="checkout-wrapper section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="checkout-steps-form-style-1">
                        <form action="{{ route('payment.process') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <!-- 付款方式 -->
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h4 class="title">付款方式</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="radio" name="payment" id="credit" value="Credit" checked>
                                        <label class="form-check-label" for="credit">線上刷卡</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="payment" id="atm" value="ATM">
                                        <label class="form-check-label" for="atm">ATM 虛擬帳號繳費</label>
                                    </div>
                                </div>
                            </div>

                            <!-- 收件人資訊 -->
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h4 class="title">收件人資訊</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" id="sameAsMember" name="sameAsMember">
                                        <label class="form-check-label" for="sameAsMember">同會員資料</label>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="single-form form-default">
                                                <label>姓名<span class="text-danger">*</span></label>
                                                <div class="form-input">
                                                    <input type="text" name="username" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-form form-default">
                                                <label>電話<span class="text-danger">*</span></label>
                                                <div class="form-input">
                                                    <input type="tel" name="phone" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 配送方式 -->
                                    <div class="single-form form-default">
                                        <label>配送方式<span class="text-danger">*</span></label>
                                        <div class="select-items">
                                            <select name="shipment" id="shipment" class="form-control" required>
                                                <option value="">請選擇配送方式</option>
                                                <option value="mail_send" data-fee="100">郵寄配送 (NT$100)</option>
                                                <option value="711_b2c" data-fee="60">7-11取貨 (NT$60)</option>
                                                <option value="family_b2c" data-fee="60">全家取貨 (NT$60)</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- 地址欄位 -->
                                    <div class="addr" style="display:none;">
                                        <div class="single-form form-default">
                                            <label>寄送地址<span class="text-danger">*</span></label>
                                            <div class="form-input">
                                                <div id="twzipcode"></div>
                                                <input type="text" name="address" class="mt-2" placeholder="請輸入詳細地址">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 超商取貨按鈕 -->
                                    <div class="map-btn" style="display:none;">
                                        <button type="button" class="btn btn-primary">選擇門市</button>
                                    </div>

                                    <!-- 訂單備註 -->
                                    <div class="single-form form-default">
                                        <label>訂單備註</label>
                                        <div class="form-input">
                                            <textarea name="note" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 發票資訊 -->
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h4 class="title">發票資訊</h4>
                                </div>
                                <div class="card-body">
                                    <div class="single-form form-default">
                                        <label>發票類型</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="invoice_type" id="invoice2" value="2" checked>
                                            <label class="form-check-label" for="invoice2">二聯式發票</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="invoice_type" id="invoice3" value="3">
                                            <label class="form-check-label" for="invoice3">三聯式發票</label>
                                        </div>
                                    </div>

                                    <!-- 三聯式發票欄位 -->
                                    <div class="invoice-company-fields" style="display:none;">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="single-form form-default">
                                                    <label>公司名稱</label>
                                                    <div class="form-input">
                                                        <input type="text" name="company_name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="single-form form-default">
                                                    <label>統一編號</label>
                                                    <div class="form-input">
                                                        <input type="text" name="company_number">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="single-form form-default">
                                                    <label>公司地址</label>
                                                    <div class="form-input">
                                                        <input type="text" name="company_address">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="checkout-sidebar">
                        <!-- 訂單摘要 -->
                        <div class="checkout-sidebar-price-table">
                            <h5 class="title">訂單摘要</h5>
                            <div class="sub-total-price">
                                @foreach($cart as $item)
                                    <div class="total-price">
                                        <p class="value">{{ $item['product_name'] }} x {{ $item['quantity'] }}</p>
                                        <p class="price">NT${{ number_format($item['price'] * $item['quantity']) }}</p>
                                    </div>
                                @endforeach
                                <div class="total-price shipping">
                                    <p class="value">運費</p>
                                    <p class="price shipping-fee">NT$0</p>
                                </div>
                            </div>
                            <div class="total-payable">
                                <div class="payable-price">
                                    <p class="value">總計</p>
                                    <p class="price">NT${{ number_format($total) }}</p>
                                </div>
                            </div>
                            <div class="price-table-btn">
                                <button type="submit" class="btn btn-alt">提交訂單</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Checkout Area -->
@endsection

@push('scripts')
<script src="{{ asset('frontend/js/jquery.twzipcode.min.js') }}"></script>
<script>
$(document).ready(function() {
    // 配送方式切換處理
    $('#shipment').change(function() {
        const selectedOption = $(this).find('option:selected');
        const shippingFee = parseInt(selectedOption.data('fee')) || 0;
        const shipmentType = $(this).val();

        // 更新運費顯示
        if (shippingFee > 0) {
            $('.shipping-fee').text('NT$' + shippingFee);
        } else {
            $('.shipping-fee').text('NT$0');
        }

        // 切換地址/門市選擇顯示
        if (shipmentType === 'mail_send') {
            $('.addr').show();
            $('.map-btn').hide();
        } else if (shipmentType === '711_b2c' || shipmentType === 'family_b2c') {
            $('.addr').hide();
            $('.map-btn').show();
        } else {
            $('.addr').hide();
            $('.map-btn').hide();
        }

        // 更新總金額
        updateTotal();
    });

    // 發票類型切換處理
    $('input[name="invoice_type"]').change(function() {
        if ($(this).val() === '3') {
            $('.invoice-company-fields').show();
        } else {
            $('.invoice-company-fields').hide();
        }
    });

    // 更新總金額函數
    function updateTotal() {
        const subtotal = {{ $total }};
        const shippingFee = parseInt($('#shipment option:selected').data('fee')) || 0;
        const total = subtotal + shippingFee;
        $('.total-payable .price').text('NT$' + total.toLocaleString());
    }
});
</script>
@endpush
