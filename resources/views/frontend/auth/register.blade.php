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
                        <form class="row" method="post">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="reg-fn">名稱</label>
                                    <input class="form-control" type="text" id="reg-fn" required>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="reg-email">電子信箱</label>
                                    <input class="form-control" type="email" id="reg-email" required>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="reg-phone">手機號碼</label>
                                    <input class="form-control" type="text" id="reg-phone" required>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="reg-pass">密碼</label>
                                    <input class="form-control" type="password" id="reg-pass" required>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="reg-pass-confirm">確認密碼</label>
                                    <input class="form-control" type="password" id="reg-pass-confirm" required>
                                </div>
                            </div>
                            <div class="button">
                                <button class="btn" type="submit">註冊</button>
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
