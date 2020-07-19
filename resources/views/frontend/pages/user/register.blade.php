@extends('frontend.layouts.master')
@section('titlePage', 'IBIE - Mua Đồ Nội Thất Và Trang Trí Trực Tuyến Uy Tín Giá Tốt')

@section('content')
    <div class="tygh-content clearfix">
        <div class="container content-grid">

            <div class="row">                <div class="span16 breadcrumbs-grid">
                    <div id="breadcrumbs_58">

                        <div class="ty-breadcrumbs clearfix">
                            <span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb" class="no-padding"><a itemprop="url" href="https://ibie.vn/" class="ty-breadcrumbs__a"><span itemprop="title" class="no-padding">Nội thất</span></a></span><span class="ty-breadcrumbs__slash">/</span><span class="ty-breadcrumbs__current">Đăng ký</span>
                        </div>

                        <!--breadcrumbs_58--></div>
                </div>
            </div>
            <div class="row">                <div class="span8 main-content-grid vs-register-page">
                    <div class="vs-mainbox-general clearfix">
                        <h1 class="vs-mainbox-title clearfix">
                            <span>Đăng ký tài khoản</span>
                        </h1>
                        <div class="vs-mainbox-body clearfix"><!-- Inline script moved to the bottom of the page -->
                            <div class="ty-account">
                                <form name="profiles_register_form" enctype="multipart/form-data" action="{{ route('att.register') }}" method="post" class="cm-processed-form">
                                    @csrf
                                    <input type="hidden" name="ship_to_another" value="1">
                                    <div class="clearfix">
                                        <div class="ty-control-group ty-profile-field__item ty-last-name">
                                            <label for="elm_6" class="ty-control-group__title cm-profile-field  cm-required ">Tên</label>
                                            <input x-autocompletetype="given-name" type="text" id="elm_6" name="firstname" size="32" value="" class="ty-input-text   cm-focus">
                                        </div>
                                        <div class="ty-control-group ty-profile-field__item ty-first-name">
                                            <label for="elm_7" class="ty-control-group__title cm-profile-field  cm-required ">Họ</label>
                                            <input x-autocompletetype="surname" type="text" id="elm_7" name="lastname" size="32" value="" class="ty-input-text  ">
                                        </div>
                                        <div class="ty-control-group ty-profile-field__item ty-phone">
                                            <label for="elm_9" class="ty-control-group__title cm-profile-field cm-mask-phone-label cm-required ">Điện thoại</label>
                                            <input x-autocompletetype="phone-full" type="text" id="elm_9" name="phone" size="32" value="" class="ty-input-text cm-mask-phone  ">
                                        </div>
                                    </div>
                                    <div class="ty-control-group">
                                        <label for="email" class="ty-control-group__title cm-required cm-email cm-trim">Email</label>
                                        <input type="text" id="email" name="email" size="32" maxlength="128" value="" class="ty-input-text cm-focus">
                                    </div>

                                    <div class="ty-control-group">
                                        <label for="password1" class="ty-control-group__title cm-required cm-password">Mật khẩu</label>
                                        <input type="password" id="password1" name="password1" size="32" maxlength="32" value="" class="ty-input-text cm-autocomplete-off" autocomplete="off">
                                    </div>

                                    <div class="ty-control-group">
                                        <label for="password2" class="ty-control-group__title cm-required cm-password">Xác nhận mật khẩu</label>
                                        <input type="password" id="password2" name="password2" size="32" maxlength="32" value="" class="ty-input-text cm-autocomplete-off" autocomplete="off">
                                    </div>

                                    <div class="ty-age-verification-birthday">

                                        <div class="ty-control-group">
                                            <label class="ty-control-group__title" for="birthday">Đăng ký ngày sinh nhật. Chúng tôi sẽ có những phần quà bất ngờ và thú vị dành cho bạn.</label>

                                            <div class="ty-calendar__block">
                                                <input type="date" name="birthday" class="ty-calendar__input cm-calendar hasDatepicker" value=""/>
{{--                                                <input type="date" id="birthday" name="birthday" class="ty-calendar__input cm-calendar hasDatepicker" value="" size="10">--}}
{{--                                                <a class="cm-external-focus ty-calendar__link" data-ca-external-focus-id="birthday">--}}
{{--                                                    <i class="ty-icon-calendar ty-calendar__button" title="Lịch"></i>--}}
{{--                                                </a>--}}
                                            </div>

                                            <!-- Inline script moved to the bottom of the page -->
                                        </div>
                                    </div>
                                    <div class="ty-profile-field__buttons buttons-container">
                                        <button class="ty-btn__secondary ty-btn" type="submit" name="">Đăng ký</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="span8 profile-information-grid">
                    <div class="ty-account-benefits">
                        <h4>Những lợi ích khi đăng ký tài khoản:</h4> <ul><li>- Kiểm tra đơn hàng nhanh chóng và dễ dàng.</li> <li>- Nhiều khuyến mãi hấp dẫn dành cho các chủ tài khoản.</li> <li>- Mua hàng nhanh hơn trong những lần sau.</li></ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
