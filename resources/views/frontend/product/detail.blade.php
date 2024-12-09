@extends('frontend.layouts.app')

@section('content')
    <section class="item-details section">
        <div class="container">
            <div class="top-area">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="product-images">
                            <main id="gallery">
                                <div class="main-img">
                                    <img src="{{ $product->primaryImage->image_url }}" id="current" alt="#">
                                </div>
                                <div class="images">
                                    @foreach ($product->images as $image)
                                        <img src="{{ $image->image_url }}" class="img" onclick="changeImage(this)"
                                            alt="#">
                                    @endforeach
                                </div>
                            </main>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="product-info">
                            <h2 class="title">{{ $product->name }}</h2>
                            <p class="category"><i class="lni lni-tag"></i> {{ $product->category->name }}
                                <a href="javascript:void(0)">{{ $product->category->parent->name }}</a>
                            </p>
                            @if ($product->special_price)
                                <h3 class="price">優惠價：{{ number_format($product->special_price) }}
                                    <span>原價：{{ number_format($product->price) }}</span>
                                </h3>
                            @else
                                <h3 class="price">價格：{{ number_format($product->price) }}</h3>
                            @endif
                            <p class="info-text">{{ $product->sub_title }}</p>
                            <div class="row">

                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="color">規格：</label>
                                        <select class="form-control" id="spec" name="spec">
                                            <option value="">請選擇規格</option>
                                            @foreach ($specs as $spec)
                                                <option value="{{ $spec->id }}" data-price="{{ number_format($product->special_price ?? number_format($product->price)) }}"
                                                    data-special-price="{{ number_format($spec->price) }}">
                                                    {{ $spec->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-group quantity">
                                        <label for="color">數量：</label>
                                        <select class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="bottom-content">
                                <div class="row align-items-end">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="button cart-button">
                                            <button class="btn" style="width: 100%;">直接購買</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="wish-button">
                                            <button class="btn">
                                                <i class="fas fa-shopping-cart"></i>
                                                加入購物車
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-details-info">
                <div class="single-block">
                    <div class="row">
                        <div class="col-lg-12 col-12">
                            <div class="info-body custom-responsive-margin">
                                <h4>商品介紹</h4>
                                <p>{!! $product->content !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        function changeImage(element) {
            let current = document.getElementById('current');
            current.src = element.src;
        }

        // 更新規格選擇的價格顯示
        document.getElementById('spec').addEventListener('change', function() {
            const selectedOption = this.options[this.selectedIndex];
            if (selectedOption.value === "") {
                return;
            }
            const priceElement = document.querySelector('.price');
            
            const price = selectedOption.dataset.price;
            const specialPrice = selectedOption.dataset.specialPrice;
            console.log(price, specialPrice);

            if (specialPrice && specialPrice !== "") {
                priceElement.innerHTML = `${specialPrice} <span style="text-decoration: line-through;">${price}</span>`;
            } else {
                priceElement.innerHTML = price;
            }
        });
    </script>
@endpush
