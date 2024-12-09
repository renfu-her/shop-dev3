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
                        <li>忘記密碼</li>
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
                            <h3>忘記密碼</h3>
                            <p>請輸入您的電子信箱，我們將會發送重置密碼的連結至您的信箱。</p>
                        </div>
                        <form class="row" method="post" id="forgetForm" action="{{ route('forget') }}">
                            
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="reg-email">電子信箱</label>
                                    <input class="form-control @error('email') is-invalid @enderror" type="email" id="email" name="email" value="{{ old('email') }}" required>
                                    @error('email')
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
                                <button class="btn" type="submit" id="forget">重置密碼</button>
                            </div>
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

            $('#forgetForm').submit(function(e) {
                e.preventDefault();
                return false;
            });

        });
    </script>
@endsection
