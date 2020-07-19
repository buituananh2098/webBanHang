@extends('frontend.layouts.master')
@section('titlePage', 'Kết quả thanh toán')

@section('content')
    <div class="container content-grid">
        <div class="row">
            <div class="span16 breadcrumbs-grid">
                <div id="breadcrumbs_58">
                    <div class="ty-breadcrumbs clearfix">
                            <span itemscope="" itemtype="" class="no-padding">
                                <a itemprop="url" href="{{ route('att.index') }}" class="ty-breadcrumbs__a">
                                    <span itemprop="title" class="no-padding">Trang chủ</span>
                                </a></span>
                        <span class="ty-breadcrumbs__slash">/</span><span class="ty-breadcrumbs__current">Kết quả thanh toán</span>
                    </div>
                    <!--breadcrumbs_58-->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="span16 auth-information-grid">
                <div class="vs-mainbox-general clearfix vs-sign-in-box" style="width: 100%;">
                    <h1 class="vs-mainbox-title clearfix">
                        <span>Kết quả thanh toán online</span>
                    </h1>
                    <h1 class="text-success" style="font-size: 28px;">
                        <span style="{{ $style }}">{{ $stringKq }}</span>
                    </h1>
                    <div class="vs-mainbox-body clearfix">
                        <div class="ty-login">
                            <div class="buttons-container clearfix">
                                <div class="center" style="text-align: center;">
                                    <a class="ty-btn__login ty-btn__secondary ty-btn" href="{{route('att.index')}}">Tiếp tục mua sắm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
