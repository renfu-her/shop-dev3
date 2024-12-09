@extends('frontend.layouts.app')

@section('content')
    <!-- 開始 麵包屑導航 -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">會員註冊</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li><a href="{{ url('/') }}"><i class="lni lni-home"></i> 首頁</a></li>
                        <li>會員資料</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- 結束 麵包屑導航 -->

    <!-- 開始 忘記密碼區塊 -->
    <div class="account-login section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
                    <div class="register-form">
                        <div class="title">
                            <h3>會員資料</h3>
                        </div>
                        <form class="row" method="post" id="profileUpdateForm" action="{{ route('profile.update') }}">

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="reg-email">電子信箱</label>
                                    <input class="form-control @error('email') is-invalid @enderror" type="email"
                                        id="email" name="email" value="{{ $member->email }}" required disabled>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- 密碼以及確定密碼 -->
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="reg-pass-confirm">密碼</label>
                                    <input class="form-control @error('password') is-invalid @enderror" type="password"
                                        id="password" name="password" required>
                                    @error('password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="reg-pass-confirm">確定密碼</label>
                                    <input class="form-control @error('password_confirm') is-invalid @enderror"
                                        type="password" id="password_confirm" name="password_confirm" required>
                                    @error('password_confirm')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="input-group">
                                    <label for="reg-pass-confirm">驗證碼</label>
                                    <input type="text" class="form-control" id="verify" name="captcha"
                                        placeholder="請輸入驗證碼" style="text-transform: uppercase; width: 150px;"
                                        oninput="this.value = this.value.toUpperCase()" maxlength="5" required>
                                    <div class="input-group-append d-flex align-items-center">
                                        <span class="mx-2" style="font-size: 20px; letter-spacing: 3px;">
                                            <img src="{{ route('captcha.generate') }}" width="120" height="60"
                                                class="captchaImg" />
                                        </span>
                                        <button type="button" class="btn btn-link btn-refresh"
                                            style="text-decoration: none;">
                                            更換 <i class="fas fa-sync-alt"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="button">
                                <button class="btn" type="button" id="profileUpdate">更新資料</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 結束 會員註冊區塊 -->
@endsection

@push('styles')
    <style>
        img {
            max-width: 100%;
            height: auto;
            display: block;
            /* 確保圖片不會溢出容器 */
            object-fit: contain;
        }

        .captchaImg {
            width: 120px;
            height: 60px;
            object-fit: cover;
            overflow: hidden;
        }

        /* 如果有輪播圖片，也可以加上這個 */
        .slider-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* 確保所有媒體元素都在容器內 */
        video,
        canvas {
            max-width: 100%;
            height: auto;
        }
    </style>
@endpush


@push('scripts')
    <script>
        $(document).ready(function() {

            $('#profileUpdate').on('click', function() {

                const password = $('#password').val();
                const password_confirm = $('#password_confirm').val();
                const verify = $('#verify').val();

                if (password != password_confirm) {
                    window.showToast('密碼與確定密碼不相符', 'error');
                    return false;
                }

                if (verify.length != 5) {
                    window.showToast('驗證碼必須 5 碼', 'error');
                    return false;
                }

                $('#profileUpdateForm').submit();
            });

        });
    </script>
@endpush
