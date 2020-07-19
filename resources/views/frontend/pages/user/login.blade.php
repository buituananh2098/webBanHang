@extends('frontend.layouts.master')
@section('titlePage', 'IBIE - Mua Đồ Nội Thất Và Trang Trí Trực Tuyến Uy Tín Giá Tốt')

@section('content')
    <div class="tygh-content clearfix">
        <div class="container content-grid vs-sign-in-page">
            <div class="row">
                <div class="span16 breadcrumbs-grid">
                    <div id="breadcrumbs_58">
                        <div class="ty-breadcrumbs clearfix">
                            <span itemscope="" itemtype="" class="no-padding">
                                <a itemprop="url" href="{{ route('att.index') }}" class="ty-breadcrumbs__a">
                                    <span itemprop="title" class="no-padding">Trang chủ</span>
                                </a></span>
                            <span class="ty-breadcrumbs__slash">/</span><span class="ty-breadcrumbs__current">Đăng nhập</span>
                        </div>
                        <!--breadcrumbs_58-->
                    </div>
                </div>
            </div>
        <div class="row">
            <div class="span8 auth-information-grid">
                <div class="vs-mainbox-general clearfix vs-sign-in-box">
                    <h1 class="vs-mainbox-title clearfix">
                        <span>Đăng nhập</span>
                    </h1>
                    <div class="vs-mainbox-body clearfix">
                        <div class="ty-login">
                            <form name="main_login_form" action="{{ route('att.login') }}" method="post" class="cm-processed-form">
                                @csrf
                                <div class="ty-control-group">
                                    <label for="login_main_login" class="ty-login__filed-label ty-control-group__label cm-required cm-trim cm-email">Email</label>
                                    <input type="text" id="login_main_login" name="user_login" size="30" value="" class="ty-login__input cm-focus">
                                </div>
                                <div class="ty-control-group ty-password-forgot">
                                    <label for="psw_main_login" class="ty-login__filed-label ty-control-group__label ty-password-forgot__label cm-required">Mật khẩu</label><a href="#" class="ty-password-forgot__a" tabindex="5">Quên mật khẩu?</a>
                                    <input type="password" id="psw_main_login" name="password" size="30" value="" class="ty-login__input" maxlength="32">
                                </div>
                                <div class="buttons-container clearfix">
                                    <div class="ty-float-right">
                                        <button class="ty-btn__login ty-btn__secondary ty-btn" type="submit" name="dispatch[auth.login]">Đăng nhập</button>
                                    </div>
                                    <div class="ty-login__remember-me">
                                        <label for="remember_me_main_login" class="ty-login__remember-me-label"><input class="checkbox" type="checkbox" name="remember_me" id="remember_me_main_login" value="Y">Nhớ mật khẩu</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="span8 main-content-grid">
                <div class="vs-sidebox clearfix ty-sidebox vs-register-box">
                    <h2 class="vs-sidebox-title clearfix">
                        <span>Đăng ký tài khoản</span>
                        <span class="vs-title-toggle cm-combination visible-phone visible-tablet" id="sw_sidebox_102">
                    <i class="ty-sidebox__icon-open ty-icon-down-open"></i>
                    <i class="ty-sidebox__icon-hide ty-icon-up-open"></i>
                    </span>
                    </h2>
                    <div class="vs-sidebox-body vs-toggle-body clearfix" id="sidebox_102">
                        <div class="ty-login-info">
                            <div class="ty-login-info__txt">
                                <h4>Bạn chưa có tài khoản?</h4>
                                <p>Hãy đăng ký ngay để nhận nhiều ưu đãi từ chúng tôi.</p>
                            </div>
                            <div class="center">
                                <a href="{{ route('att.page.register') }}">Đăng ký tài khoản</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
