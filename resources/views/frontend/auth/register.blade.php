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
                        <li>會員註冊</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- 結束 麵包屑導航 -->

    <!-- 開始 會員註冊區塊 -->
    <div class="account-login section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
                    <div class="register-form">
                        <div class="title">
                            <h3>還沒有帳號？立即註冊</h3>
                            <p>註冊只需要不到一分鐘，就能完整管理您的訂單。</p>
                        </div>
                        <form class="row" method="post" id="registerForm" action="{{ route('register') }}">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="reg-fn">名稱</label>
                                    <input class="form-control @error('name') is-invalid @enderror" type="text" id="name" name="name" value="{{ old('name') }}" required>
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="reg-email">電子信箱</label>
                                    <input class="form-control @error('email') is-invalid @enderror" type="email" id="email" name="email" value="{{ old('email') }}" required>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="reg-phone">手機號碼</label>
                                    <input class="form-control @error('phone') is-invalid @enderror" type="text" id="phone" name="phone" maxlength="10"
                                        required onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                                    @error('phone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="reg-pass">密碼
                                        <span class="text-danger">(要包含英文、數字以及特殊符號，至少 8 個字元)</span></label>
                                    <input class="form-control @error('password') is-invalid @enderror" type="password" id="password" name="password" required>
                                    @error('password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="reg-pass-confirm">確認密碼</label>
                                    <input class="form-control @error('password_confirmation') is-invalid @enderror" type="password" id="password_confirmation"
                                        name="password_confirmation" required>
                                    @error('password_confirmation')
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

                            <div class="form-group d-flex align-items-center justify-content-center">
                                <input type="checkbox" id="agree" name="agree" required class="me-2">
                                <label for="agree" class="mb-0">
                                    <a href="{{ route('faq.index') }}" target="_blank">同意會員條款</a>
                                </label>
                            </div>

                            <div class="button">
                                <button class="btn" type="submit" id="register">註冊</button>
                            </div>
                            <p class="outer-link">已經有帳號了？ <a href="{{ route('login') }}">立即登入</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 結束 會員註冊區塊 -->
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {

            $('#registerForm').on('submit', function() {
                const name = $('#name').val();
                const email = $('#email').val();
                const phone = $('#phone').val();
                const password = $('#password').val();
                const password_confirmation = $('#password_confirmation').val();
                const captcha = $('#verify').val();

                if (!name) {
                    window.showToast('請輸入名稱', 'error');
                    return false;
                }

                if (!email) {
                    window.showToast('請輸入電子信箱', 'error');
                    return false;
                }

                if (!phone) {
                    window.showToast('請輸入手機號碼', 'error');
                    return false;
                }

                if (!password) {
                    window.showToast('請輸入密碼', 'error');
                    return false;
                }

                if (password.length < 8 || !/[a-zA-Z]/.test(password) || !/[0-9]/.test(password) || !
                    /[!@#$%^&*]/.test(
                        password)) {
                    window.showToast('密碼至少 8 個字元，包含英文、數字以及特殊符號', 'error');
                    return false;
                }

                if (!password_confirmation) {
                    window.showToast('請輸入確認密碼', 'error');
                    return false;
                }

                if (!captcha) {
                    window.showToast('請輸入驗證碼', 'error');
                    return false;
                }

                if (!$('#agree').is(':checked')) {
                    window.showToast('請勾選同意會員條款', 'error');
                    return false;
                }

            });

        });
    </script>
@endsection
