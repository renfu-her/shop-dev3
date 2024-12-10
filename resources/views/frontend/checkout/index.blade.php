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
                <div class="col-lg-12">
                    <!-- 新增商品列表區塊 -->
                    <div class="card mb-2">
                        <div class="card-header">
                            <h5 class="mb-0">訂購商品</h5>
                        </div>
                        <div class="card-body">
                            <div class="cart-list-head">
                                <!-- 商品列表標題 -->
                                <div class="cart-list-title">
                                    <div class="row">
                                        <div class="col-lg-1 col-md-1 col-12">
                                            <p>商品圖片</p>
                                        </div>
                                        <div class="col-lg-5 col-md-4 col-12">
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
                                    </div>
                                </div>

                                <!-- 商品列表內容 -->
                                @foreach ($cart as $key => $item)
                                    <div class="cart-single-list">
                                        <div class="row align-items-center">
                                            <div class="col-lg-1 col-md-1 col-12">
                                                <img src="{{ $item['primary_image'] }}" alt="{{ $item['product_name'] }}">
                                            </div>
                                            <div class="col-lg-5 col-md-4 col-12">
                                                <h6 class="product-name">{{ $item['product_name'] }}</h6>
                                                <p class="product-des">
                                                    <span>規格：{{ $item['spec_name'] }}</span>
                                                </p>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-12">
                                                <p class="price">NT${{ number_format($item['price']) }}</p>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-12">
                                                <p>{{ $item['quantity'] }}</p>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-12">
                                                <p class="total-amount">
                                                    NT${{ number_format($item['price'] * $item['quantity']) }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- 訂單摘要 -->
                    <div class="checkout-sidebar-price-table mb-2">
                        <div class="sub-total-price">
                            <div class="total-price shipping">
                                <p class="value"><strong style="font-size: 1.2em;">運費</strong></p>
                                <p class="price shipping-fee"><strong style="font-size: 1.2em; color: red;">NT$0</strong></p>
                            </div>
                        </div>
                        <div class="total-payable">
                            <div class="payable-price">
                                <p class="value"><strong style="font-size: 1.2em;">總計</strong></p>
                                <p class="price"><strong style="font-size: 1.2em; color: red;">NT${{ number_format($total) }}</strong></p>
                            </div>
                        </div>

                    </div>

                    <!-- 原有的付款方式、收件人資訊等表單內容保持不變 -->
                    <div class="checkout-steps-form-style-1">
                        <form action="{{ route('payment.process') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <!-- 付款方式 -->
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h6 class="mb-0">付款方式</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-9 align-self-center">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="payment"
                                                    id="inlineRadio1" value="Credit" checked>
                                                <label class="form-check-label" for="inlineRadio1">線上刷卡</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="payment"
                                                    id="inlineRadio2" value="ATM">
                                                <label class="form-check-label" for="inlineRadio2">ATM 虛擬帳號繳費</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 收件人資訊 -->
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h6 class="mb-0">收件人資訊</h6>
                                </div>
                                <div class="card-body">
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" id="sameAsMember"
                                            name="sameAsMember">
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
                                                @foreach ($shippingSettings as $key => $shipping)
                                                    <option value="{{ $key }}"
                                                        data-fee="{{ $shipping['fee'] }}">
                                                        {{ $shipping['name'] }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <!-- 地址欄位 -->
                                    <div class="addr" style="display:none;">
                                        <div class="single-form form-default">
                                            <label>寄送地址<span class="text-danger">*</span></label>
                                            <div class="form-input">
                                                <div id="twzipcode" class="col-12">
                                                    <div class="row">
                                                        <div class="col-12 col-md-6 mb-2">
                                                            <select data-role="county" class="form-control"
                                                                name="county"></select>
                                                        </div>
                                                        <div class="col-12 col-md-6 mb-2">
                                                            <select data-role="district" class="form-control"
                                                                name="district"></select>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" data-role="zipcode" />
                                                </div>
                                                <div class="col-12">
                                                    <input type="text" class="form-control" id="address"
                                                        name="address" placeholder="請入詳細地址"
                                                        value="{{ Auth::guard('member')->user()->address }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 超商取貨按鈕 -->
                                    <div class="map-btn mt-2 mb-2" style="display:none;">
                                        <button type="button" class="btn btn-primary">選擇門市</button>
                                    </div>

                                    <input type="hidden" name="store_id" value="">
                                    <input type="hidden" name="store_name" value="">
                                    <input type="hidden" name="store_address" value="">
                                    <input type="hidden" name="store_telephone" value="">

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
                                    <h6 class="mb-0">發票資訊</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-9 align-self-center">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="invoice_type"
                                                    id="invoice2" value="2" checked>
                                                <label class="form-check-label" for="invoice2">二聯式發票</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="invoice_type"
                                                    id="invoice3" value="3">
                                                <label class="form-check-label" for="invoice3">三聯式發票</label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 三聯式發票欄位 -->
                                    <div class="invoice-company-fields mt-3" style="display:none;">
                                        <div class="form-group row">
                                            <label
                                                class="col-sm-2 col-form-label text-md-right text-sm-left align-self-center pr-0"
                                                for="note">發票寄送地址</label>
                                            <div class="col-sm-10 align-self-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="idCheck1"
                                                        name="invoiceSameAsMember">
                                                    <label class="form-check-label" for="idCheck1">同訂購人資料</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">

                                            <label class="col-sm-2"></label>
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div id="invoice_twzipcode" class="col-12">
                                                        <div class="row">
                                                            <div class="col-12 col-md-6 mb-2">
                                                                <select data-role="county" class="form-control"
                                                                    name="invoice_county"></select>
                                                            </div>
                                                            <div class="col-12 col-md-6 mb-2">
                                                                <select data-role="district" class="form-control"
                                                                    name="invoice_district"></select>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" data-role="zipcode" />
                                                    </div>
                                                    <div class="col-12">
                                                        <input type="text" class="form-control" id="address"
                                                            name="invoice_address" placeholder="請輸入詳細地址" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="single-form form-default">
                                                    <label>統一編號</label>
                                                    <div class="form-input">
                                                        <input type="text" id="invoice_taxid" name="invoice_taxid"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row invoiceTitleArea">
                                                <label class="col-sm-12 col-form-label" for="invoice_taxid_check"
                                                    style="color: red;">請輸入 8
                                                    位數統編，如果正確，發票抬頭會自動帶入</label>

                                            </div>
                                            <div class="col-md-12">
                                                <div class="single-form form-default">
                                                    <label>公司名稱</label>
                                                    <div class="form-input">
                                                        <input type="text" id="invoice_title" name="invoice_title"
                                                            readonly class="form-control">
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="price-table-btn text-center">
                                <button type="submit" class="btn btn-primary">提交訂單</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Checkout Area -->
@endsection

@push('scripts')
    <script src="{{ asset('frontend/assets/js/jquery.twzipcode.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#twzipcode').twzipcode({
                "zipcodeSel": "{{ Auth::guard('member')->user()->zipcode }}",
            });

            $('#invoice_twzipcode').twzipcode({
                "countyName": "invoice_county",
                "districtName": "invoice_district",
                "zipcodeName": "invoice_zipcode",
                "zipcodeSel": "{{ Auth::guard('member')->user()->invoice_zipcode }}",
            });

            // 監聽"同訂購人資料"選框的變化
            $('input[name="sameAsMember"]').change(function() {
                if ($(this).is(':checked')) {
                    // 如果勾選，填入會員資料
                    $('input[name="username"]').val('{{ Auth::guard('member')->user()->name }}');
                    $('input[name="phone"]').val('{{ Auth::guard('member')->user()->phone }}');

                    // 設置性別
                    if ('{{ Auth::guard('member')->user()->gender }}' === '1') {
                        $('#male').prop('checked', true);
                    } else {
                        $('#female').prop('checked', true);
                    }

                    // 如果地址區塊是顯示的，則填入地址資料
                    if ($('.addr').is(':visible')) {
                        // 修正地址欄位的選擇器，使用 twzipcode 的方法
                        $('select[data-role="county"]').val('{{ Auth::guard('member')->user()->county }}')
                            .trigger('change');
                        $('select[data-role="district"]').val(
                            '{{ Auth::guard('member')->user()->district }}');
                        $('input[name="address"]').val('{{ Auth::guard('member')->user()->address }}');
                    }
                } else {
                    // 如果取消勾選，清空所有欄位
                    $('input[name="username"]').val('');
                    $('input[name="phone"]').val('');
                    $('select[data-role="county"]').val('');
                    $('select[data-role="district"]').val('');
                    $('input[name="address"]').val('');
                }
            });



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

            // 門市地圖按鈕點擊事件
            $('.map-btn').click(function() {
                const shipmentType = $('#shipment').val();
                // 根據不同超商打開對應地圖
                if (shipmentType === '711_b2c') {
                    openSevenMap(shipmentType);
                } else if (shipmentType === 'family_b2c') {
                    openFamilyMap(shipmentType);
                }
            });

            // 監聽來自子視窗的消息
            window.addEventListener('message', function(event) {
                if (event.data.type === 'STORE_SELECTED') {
                    const storeData = event.data.data;

                    // 在寄送方式下方顯示選擇的門市資訊
                    const storeInfoHtml = `
                        <div class="form-group row">
                            <div class="col-sm-6 offset-sm-2">
                                <div class="store-info mt-2">
                                    <div class="alert alert-info mb-0">
                                        <strong>已選擇門市：</strong><br>
                                        門市：${storeData.store_name}<br>
                                        地址：${storeData.store_address}<br>
                                        電話：${storeData.store_telephone}
                                    </div>
                                </div>
                            </div>
                        </div>
                    `;

                    // 移除舊的門市資訊（如果有的話）
                    $('.store-info').closest('.form-group').remove();

                    // 添加新的門市資訊 - 改為添加在寄送方式的 form-group 後面
                    $('#shipment').closest('.form-group').after(storeInfoHtml);

                    // 將門市資訊存入隱藏欄位（方便表單提交）
                    if (!$('input[name="store_id"]').length) {
                        $('<input>').attr({
                            type: 'hidden',
                            name: 'store_id',
                            value: storeData.store_id
                        }).appendTo('form');
                    } else {
                        $('input[name="store_id"]').val(storeData.store_id);
                    }
                }
            });

            // 發票類型變更處理
            $('input[name="receipt"]').change(function() {
                const selectedValue = $(this).val();
                const invoiceArea = $('.invoiceArea'); // 假設三聯式發票區塊的 class 是 invoice-area
                console.log(invoiceArea);
                console.log(selectedValue);

                // 如果選擇三聯式發票(value=3)，顯示發票資訊區域
                if (selectedValue === '3') {
                    invoiceArea.show();
                    // 當顯示時，設置必填欄位
                    $('input[name="invoiceTaxid"]').prop('required', true);
                    $('input[name="invoiceTitle"]').prop('required', true);
                } else {
                    invoiceArea.hide();
                    // 當隱藏時，移除必填屬性
                    $('input[name="invoiceTaxid"]').prop('required', false);
                    $('input[name="invoiceTitle"]').prop('required', false);
                    // 清空欄位值
                    $('input[name="invoiceTaxid"]').val('');
                    $('input[name="invoiceTitle"]').val('');
                }
            });

            // 初始檢查發票類型
            $('input[name="receipt"]:checked').trigger('change');

            // 監聽發票區域的"同訂購人資料"複選框
            $('input[name="invoiceSameAsMember"]').change(function() {
                if ($(this).is(':checked')) {
                    // 如果勾選，填入會員資料
                    $('#invoice_twzipcode select[data-role="county"]')
                        .val('{{ Auth::guard('member')->user()->county }}')
                        .trigger('change');

                    $('#invoice_twzipcode select[data-role="district"]')
                        .val('{{ Auth::guard('member')->user()->district }}');

                    $('input[name="invoice_address"]')
                        .val('{{ Auth::guard('member')->user()->address }}');

                    // 如果是三聯式發票，也可以填入公司資訊（如果有的話）
                    // if ($('input[name="receipt"]:checked').val() === '3') {
                    //     $('input[name="invoice_title"]')
                    //         .val('{{ Auth::guard('member')->user()->company_name ?? '' }}');
                    //     $('input[name="invoice_taxid"]')
                    //         .val('{{ Auth::guard('member')->user()->tax_id ?? '' }}');
                    // }
                } else {
                    // 如果取消勾選，清空所有欄位
                    $('#invoice_twzipcode select[data-role="county"]').val('');
                    $('#invoice_twzipcode select[data-role="district"]').val('');
                    $('input[name="invoice_address"]').val('');
                    $('input[name="invoice_title"]').val('');
                    $('input[name="invoice_taxid"]').val('');
                }
            });

            // 當收貨人資訊的"同訂購人資料"被勾選時，如果發票區域的"同訂購人資料"也被勾選，
            // 則同步更新發票地址
            $('input[name="sameAsMember"]').change(function() {
                if ($('input[name="invoiceSameAsMember"]').is(':checked')) {
                    if ($(this).is(':checked')) {
                        // 同步更新發票地址為會員資料
                        $('#invoice_twzipcode select[data-role="county"]')
                            .val('{{ Auth::guard('member')->user()->county }}')
                            .trigger('change');
                        $('#invoice_twzipcode select[data-role="district"]')
                            .val('{{ Auth::guard('member')->user()->district }}');
                        $('input[name="invoice_address"]')
                            .val('{{ Auth::guard('member')->user()->address }}');
                    }
                }
            });

            // 當發票類型改變時，重置發票地址區域
            $('input[name="receipt"]').change(function() {
                const selectedValue = $(this).val();
                const invoiceArea = $('.invoiceArea');

                if (selectedValue === '3') {
                    invoiceArea.show();
                    // 如果"同訂購人資料"已勾選，則自動填入地址
                    if ($('input[name="invoiceSameAsMember"]').is(':checked')) {
                        $('#invoice_twzipcode select[data-role="county"]')
                            .val('{{ Auth::guard('member')->user()->county }}')
                            .trigger('change');
                        $('#invoice_twzipcode select[data-role="district"]')
                            .val('{{ Auth::guard('member')->user()->district }}');
                        $('input[name="invoice_address"]')
                            .val('{{ Auth::guard('member')->user()->address }}');
                    }
                } else {
                    invoiceArea.hide();
                    // 清空所有發票相關欄位
                    $('#invoice_twzipcode select[data-role="county"]').val('');
                    $('#invoice_twzipcode select[data-role="district"]').val('');
                    $('input[name="invoice_address"]').val('');
                    $('input[name="invoice_title"]').val('');
                    $('input[name="invoice_taxid"]').val('');
                }
            });

            // 統一編號驗證
            $('#invoice_taxid').blur(function() {
                const taxId = $(this).val();
                if (taxId.length === 8) {
                    $.ajax({
                        url: '{{ route('checkout.validate-invoice-number') }}',
                        method: 'POST',
                        data: {
                            invoice_taxid: taxId,
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            if (response.success) {
                                $('#invoice_title').val(response.company_name);
                                window.showToast('統一編號驗證成功', 'success');
                            } else {
                                window.showToast(response.message || '統一編號驗證失敗', 'error');
                                $('#invoice_taxid').val('').focus();
                            }
                        },
                        error: function(xhr) {
                            window.showToast('驗證過程發生錯誤，請稍後再試', 'error');
                            $('#invoice_taxid').val('').focus();
                        }
                    });
                } else if (taxId.length > 0) {
                    window.showToast('統一編號必須為8碼數字', 'error');
                    $('#invoice_taxid').val('').focus();
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


        // 開 7-11 地圖
        function openSevenMap(shipment) {
            // 計算視窗位置，使其置中
            const width = window.innerWidth;
            const height = window.innerHeight;
            const left = (window.screen.width - width) / 2;
            const top = (window.screen.height - height) / 2;

            const mapWindow = window.open(
                `{{ url('checkout/map/711-store/') }}/${shipment}`,
                'mapWindow',
                `width=${width},height=${height},left=${left},top=${top},scrollbars=yes`
            );

            // 設置輪詢檢查視窗是否關閉
            const timer = setInterval(function() {
                if (mapWindow.closed) {
                    clearInterval(timer);
                    checkStoreSelection();
                }
            }, 500);
        }

        // 開啟全家地圖
        function openFamilyMap(shipment) {
            // 計算視窗位置，使其置中
            const width = window.innerWidth;
            const height = window.innerHeight;
            const left = (window.screen.width - width) / 2;
            const top = (window.screen.height - height) / 2;

            const mapWindow = window.open(
                `{{ url('checkout/map/family-store/') }}/${shipment}`,
                'mapWindow',
                `width=${width},height=${height},left=${left},top=${top},scrollbars=yes`
            );

            // 設置輪詢檢查視窗是否關閉
            const timer = setInterval(function() {
                if (mapWindow.closed) {
                    clearInterval(timer);
                    checkStoreSelection();
                }
            }, 500);
        }

        // 檢查門市選擇
        function checkStoreSelection() {
            $.ajax({
                url: '{{ route('checkout.get.store') }}', // 需要新增這個路由
                method: 'GET',
                success: function(response) {
                    if (response.store) {
                        updateStoreInfo(response.store);
                    }
                }
            });
        }

        // 更新門市資訊顯示
        function updateStoreInfo(storeData) {
            const storeInfoHtml = `
                <div class="form-group row">
                    <div class="col-sm-6 offset-sm-2">
                        <div class="store-info mt-2">
                            <div class="alert alert-info mb-0">
                                <strong>已選擇門市：</strong><br>
                                門市：${storeData.store_name}<br>
                                地址：${storeData.store_address}<br>
                                電話：${storeData.store_telephone}
                            </div>
                        </div>
                    </div>
                </div>
            `;

            $('.store-info').closest('.form-group').remove();
            $('#shipment').closest('.form-group').after(storeInfoHtml);

            $('input[name="store_name"]').val(storeData.store_name);
            $('input[name="store_address"]').val(storeData.store_address);
            $('input[name="store_telephone"]').val(storeData.store_telephone);

            // 更新隱藏欄位
            if (!$('input[name="store_id"]').length) {
                $('<input>').attr({
                    type: 'hidden',
                    name: 'store_id',
                    value: storeData.store_id
                }).appendTo('form');
            } else {
                $('input[name="store_id"]').val(storeData.store_id);
            }
        }

        function numberFormat(number) {
            return new Intl.NumberFormat('zh-TW').format(number);
        }
    </script>
@endpush
