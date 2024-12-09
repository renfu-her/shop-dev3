@extends('frontend.layouts.app')

@section('content')
    <!-- 開始 麵包屑導航 -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">會員登入</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li><a href="{{ url('/') }}"><i class="lni lni-home"></i> 首頁</a></li>
                        <li>會員登入</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- 結束 麵包屑導航 -->

    <!-- 開始 會員登入區塊 -->
    <div class="account-login section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
                    <form class="card login-form" method="post" id="loginForm" action="{{ route('login') }}">
                        <div class="card-body">
                            <div class="title text-center">
                                <h3>登入</h3>
                                {{-- <p>您可以使用社群媒體帳號或電子信箱登入。</p> --}}
                            </div>
                            <div class="form-group input-group">
                                <label for="reg-fn">電子信箱</label>
                                <input class="form-control" type="email" id="email" name="email" required>
                            </div>
                            <div class="form-group input-group">
                                <label for="reg-fn">密碼</label>
                                <input class="form-control" type="password" id="password" name="password" required>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
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
                        </div>
                        {{-- <div class="d-flex flex-wrap justify-content-between bottom-content">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input width-auto" id="exampleCheck1">
                                <label class="form-check-label">記住我</label>
                            </div>
                            <a class="lost-pass" href="account-password-recovery.html">忘記密碼？</a>
                        </div> --}}
                        <div class="button">
                            <button class="btn" type="button" id="login">登入</button>
                        </div>
                        <p class="outer-link">沒有帳號？ <a href="{{ route('register') }}">註冊這裡</a>
                        </p>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <!-- 結束 會員登入區塊 -->
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#login').on('click', function() {
                event.preventDefault();

                const email = $('#email').val();
                const password = $('#password').val();
                const captcha = $('#verify').val();

                if (!email) {
                    window.showToast('請輸入電子信箱', 'error');
                    return false;
                }

                if (!password) {
                    window.showToast('請輸入密碼', 'error');
                    return false;
                }

                if (!/^(?=.*[A-Za-z])(?=.*\d).{6,15}$/.test(password)) {
                    window.showToast('密碼必須為 6~15 字元，且至少包含一個英文字母和數字', 'error');
                    return false;
                }

                if (!captcha || captcha.length !== 5) {
                    window.showToast('請輸入 5 位驗證碼', 'error');
                    return false;
                }

                $('#loginForm').submit();
            });

        });
    </script>
@endpush
