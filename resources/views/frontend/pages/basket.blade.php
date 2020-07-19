@extends('frontend.layouts.master')
@section('title', 'Rỏ hàng')
@section('content')
    @if(isset($quotes['quotes']) && !empty($quotes['quotes']) && isset($quotes['items']) && !empty($quotes['items']))
        <div class="tygh-content clearfix">
            <div class="container content-grid">
                <div class="row">
                    <div class="span12 vs-cart-page">
                        <!-- Inline script moved to the bottom of the page -->
                        <!-- Inline script moved to the bottom of the page -->
                        <!-- Inline script moved to the bottom of the page -->
                        <form name="checkout_form" class="cm-check-changes cm-processed-form" action="#" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="redirect_mode" value="cart">
                            <input type="hidden" name="result_ids" value="cart_items,checkout_totals,checkout_steps,cart_status*,checkout_cart">
                            <h1 class="ty-mainbox-title">
                                <i class="vs-icon-grid-add-to-cart"></i><span>Nội dung giỏ hàng</span>
                            </h1>
                            <div class="buttons-container ty-cart-content__top-buttons clearfix">
                                <div class="ty-float-left ty-cart-content__left-buttons">
                                    <a href="{{ route('att.index') }}phong-an/bo-ban-an-4-ghe/" class="ty-btn ty-btn__secondary ">Tiếp tục mua sắm</a>
                                    <a class="ty-btn cm-confirm nobg vs-clear-cart ty-cart-content__clear-button text-button " href="{{ route('att.index') }}index.php?dispatch=checkout.clear">Xóa giỏ hàng</a>
                                </div>
                                <div class="ty-float-right ty-cart-content__right-buttons">
                                    <button id="button_cart" class="ty-btn__tertiary  ty-btn" type="submit" name="dispatch[checkout.update]">Tính lại</button>
                                    <a href="{{ route('att.checkout') }}" class="ty-btn ty-btn__primary ">Tiến hành thanh toán</a>
                                </div>
                            </div>
                            <div>
                                <div class="ty-mainbox-cart__body">
                                    <div id="cart_items">
                                        <table class="ty-cart-content ty-table">
                                            <thead>
                                            <tr class="vs-cart-header">
                                                <th class="ty-cart-content__title ty-left">Sản phẩm</th>
                                                <th class="ty-cart-content__title ty-left">&nbsp;</th>
                                                <th class="ty-cart-content__title ty-right">Đơn giá</th>
                                                <th class="ty-cart-content__title quantity-cell">Số lượng</th>
                                                <th class="ty-cart-content__title ty-right">Số tiền</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($quotes['items'] as $item)
                                            <tr class="vs-cart-product">
                                                <td class="ty-cart-content__product-elem ty-cart-content__image-block">
                                                    <div class="ty-cart-content__image cm-reload-1441395505" id="product_image_update_1441395505">
                                                        <a href="#">
                                                            <img class="ty-pict cm-image" id="det_img_1441395505"
                                                                 src="{{ load_avt($item->product_id) }}"
                                                                 style="" data-src="" alt="{{ $item->product_code }}"
                                                                 title="{{ $item->product_name }}">
                                                        </a>
                                                        <!--product_image_update_1441395505-->
                                                    </div>
                                                </td>
                                                <td class="ty-cart-content__product-elem ty-cart-content__description" style="width: 50%;">
                                                    <a href="#" class="ty-cart-content__product-title">{{ $item->product_name }}</a><a class=" ty-cart-content__product-delete ty-delete-big"
                                                       href="{{ route('att.remove.item', [$quotes['quotes']->id, $item->id]) }}"
                                                       data-ca-target-id="cart_items,checkout_totals,cart_status*,checkout_steps,checkout_cart"
                                                       title="Loại bỏ"><i class="vs-icon-delete"></i>
                                                    </a>
                                                    <div class="ty-product-variations__variation-features ty-product-variations__variation-features--secondary">Mặt veneer</div>
                                                    <div class="ty-cart-content__sku ty-sku cm-hidden-wrapper " id="sku_{{ $item->product_id }}">
                                                        Mã:
                                                        <span class="cm-reload-{{ $item->product_id }}" id="product_code_update_{{ $item->product_id }}">
                                                            {{ $item->product_code }}
                                                        </span>
                                                    </div>
                                                    <!-- Inline script moved to the bottom of the page -->
                                                    <div class="cm-picker-cart-product-variation-features ty-product-options">
{{--                                                        <div class="ty-control-group ty-product-options__item clearfix">--}}
{{--                                                            <label class="ty-control-group__label ty-product-options__item-label">Chọn mặt bàn:</label>--}}
{{--                                                            <bdi>--}}
{{--                                                                <select class="cm-ajax" data-ca-target-id="checkout*,cart*">--}}
{{--                                                                    <option data-ca-variant-id="1721" data-ca-product-id="11607" data-ca-change-url="{{ route('att.index') }}index.php?dispatch=checkout.change_variation&amp;cart_item_id=1441395505&amp;product_id=11607" selected="selected">--}}
{{--                                                                        Mặt veneer--}}
{{--                                                                    </option>--}}
{{--                                                                    <option data-ca-variant-id="549" data-ca-product-id="11608" data-ca-change-url="{{ route('att.index') }}index.php?dispatch=checkout.change_variation&amp;cart_item_id=1441395505&amp;product_id=11608">--}}
{{--                                                                        Mặt gỗ--}}
{{--                                                                    </option>--}}
{{--                                                                </select>--}}
{{--                                                            </bdi>--}}
{{--                                                        </div>--}}
                                                    </div>
                                                    @if(!empty($item->reward_points))
                                                    <div id="options_{{ $item->product_id }}" class="ty-product-options ty-group-block">
                                                        <div class="ty-group-block__arrow">
                                                            <span class="ty-caret-info"><span class="ty-caret-outer"></span><span class="ty-caret-inner"></span></span>
                                                        </div>
                                                        <bdi>
                                                            <div class="cm-reload-1441395505" id="product_info_update_1441395505">
                                                                <div class="ty-reward-points__product-info">
                                                                    <strong class="ty-control-group__label">Điểm thưởng:</strong>
                                                                    <span class="ty-control-group__item" id="price_in_points_1441395505">{{ $item->reward_points }}</span>
                                                                </div>
                                                            </div>
                                                        </bdi>
                                                    </div>
                                                    @endif
                                                </td>
                                                <td class="ty-cart-content__product-elem ty-cart-content__price cm-reload-1441395505" id="price_display_update_1441395505">
                                                    <bdi><span id="sec_product_price_1441395505" class="ty-sub-price">{{ current_price($item->price) }}</span>&nbsp;<span class="ty-sub-price">đ</span></bdi>
                                                </td>
                                                <td class="ty-cart-content__product-elem ty-cart-content__qty ">
                                                    <div class="quantity cm-reload-1441395505 changer" id="quantity_update_1441395505">
                                                        <input type="hidden" name="cart_products[{{ $item->product_id }}]" value="{{ $item->product_id }}">
                                                        <label for="amount_{{ $item->product_id }}"></label>
                                                        <div class="ty-center ty-value-changer cm-value-changer">
                                                            <a class="cm-decrease ty-value-changer__decrease">−</a>
                                                            <input type="text" size="3" id="amount_{{ $item->product_id }}" name="cart_products[{{ $item->product_id }}][amount]" value="{{ $item->amount }}" class="ty-value-changer__input cm-amount" data-ca-min-qty="1">
                                                            <a class="cm-increase ty-value-changer__increase">+</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="ty-cart-content__product-elem ty-cart-content__price cm-reload-{{ $item->product_id }}" id="price_subtotal_update_{{ $item->product_id }}">
                                                    <bdi><span id="sec_product_subtotal_{{ $item->product_id }}" class="price">{{ current_price($item->amount * $item->price) }}</span>&nbsp;<span class="price">đ</span></bdi>
                                                </td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        <!--cart_items-->
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="ty-cart-total">
                            <div class="ty-cart-total__wrapper clearfix" id="checkout_totals">
                                <div class="ty-coupons__container">
                                    <div>
                                        <form class="cm-ajax cm-ajax-force cm-ajax-full-render cm-processed-form" name="coupon_code_form" action="#" method="post">
                                            <input type="hidden" name="result_ids" value="checkout*,cart_status*,cart_items,payment-methods,litecheckout_form">
                                            <input type="hidden" name="redirect_url" value="index.php?sef_rewrite=1&amp;dispatch=checkout.cart">
                                            <div class="ty-gift-certificate-coupon ty-discount-coupon__control-group ty-input-append">
                                                <label for="coupon_field" class="hidden cm-required">Mã giảm giá</label>
                                                <input type="text" class="ty-input-text cm-hint" id="coupon_field" name="hint_coupon_code" size="40" value="Thẻ quà tặng/ mã giảm giá">
                                                <button title="Áp dụng" class="ty-btn-go" type="submit">Áp dụng</button>
                                                <input type="hidden" name="dispatch" value="checkout.apply_coupon">
                                            </div>
                                        </form>
                                    </div>
                                    <ul class="ty-coupons__list ty-discount-info">
                                        <li class="ty-caret-info"><span class="ty-caret-outer"></span><span class="ty-caret-inner"></span></li>
                                        <li class="ty-coupons__item">
                                            <div id="applied_promotions">
                                                <span class="ty-strong">Khuyến mãi</span>
                                                <ul>
                                                    <li>
                                                        Giảm giá 15% cho đơn hàng từ 5.000.000 đ
                                                    </li>
                                                </ul>
                                                <!--applied_promotions-->
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <ul class="ty-cart-statistic ty-statistic-list">
                                    <li class="ty-cart-statistic__item ty-statistic-list-subtotal">
                                        <span class="ty-cart-statistic__title">Thành tiền</span>
                                        <span class="ty-cart-statistic__value"><bdi><span>{{ current_price($quotes['quotes']->total) }}</span>&nbsp;đ</bdi></span>
                                    </li>
                                    @if(!empty($quotes['quotes']->discount))
                                    <li class="ty-cart-statistic__item ty-statistic-list-subtotal-discount">
                                        <span class="ty-cart-statistic__title">Đơn hàng giảm giá</span>
                                        <span class="ty-cart-statistic__value discount-price">-<bdi><span>{{ current_price($quotes['quotes']->discount) }}</span>&nbsp;đ</bdi></span>
                                    </li>
                                    @endif
                                </ul>
                                <div class="clearfix"></div>
                                <ul class="ty-cart-statistic__total-list">
                                    <li class="ty-cart-statistic__item ty-cart-statistic__total">
                                        <span class="ty-cart-statistic__total-title">Tổng cộng</span>
                                        <span class="ty-cart-statistic__total-value">
                        <bdi><span id="sec_cart_total" class="ty-price">{{ current_price($quotes['quotes']->total - $quotes['quotes']->discount) }}</span>&nbsp;<span class="ty-price">đ</span></bdi>
                        </span>
                                    </li>
                                </ul>
                                <!--checkout_totals-->
                            </div>
                        </div>
                        <div class="buttons-container ty-cart-content__bottom-buttons clearfix">
                            <div class="ty-float-left ty-cart-content__left-buttons">
                                <a href="{{ route('att.index') }}" class="ty-btn ty-btn__secondary ">Tiếp tục mua sắm</a>
                            </div>
                            <div class="ty-float-right ty-cart-content__right-buttons">
                                <a class="ty-btn ty-btn__tertiary cm-external-click " data-ca-external-click-id="button_cart">Tính lại</a>
                                <a href="{{ route('att.checkout') }}" class="ty-btn ty-btn__primary ">Tiến hành thanh toán</a>
                            </div>
                        </div>
                    </div>
                    <div class="span4 ">
                        <div class="vs-sidebox clearfix vs-sidebox-icon">
                            <h2 class="vs-sidebox-title clearfix">
                                <i class="vs-icon-justify"></i><span class="vs-sidebox-name">Sản phẩm mua kèm</span>
                                <span class="vs-title-toggle cm-combination visible-phone visible-tablet" id="sw_sidebox_98">
                <i class="ty-sidebox__icon-open ty-icon-down-open"></i>
                <i class="ty-sidebox__icon-hide ty-icon-up-open"></i>
                </span>
                            </h2>
                            <div class="vs-sidebox-body vs-toggle-body clearfix" id="sidebox_98">
                                <ul class="template-small-item">
                                    <li class="clearfix">
                                        <form action="{{ route('att.index') }}" method="post" name="product_form_98000249" enctype="multipart/form-data" class="cm-disable-empty-files cm-ajax cm-ajax-full-render cm-ajax-status-middle cm-processed-form">
                                            <input type="hidden" name="result_ids" value="cart_status*,wish_list*,checkout*,account_info*">
                                            <input type="hidden" name="redirect_url" value="index.php?sef_rewrite=1&amp;dispatch=checkout.cart">
                                            <input type="hidden" name="product_data[249][product_id]" value="249">
                                            <div class="item-image product-item-image animate scale already-visible">
                                                <div class="thumb-discount-label"><span>-35%</span></div>
                                                <a href="{{ route('att.index') }}san-pham/bo-ban-ghe-mam-non-hinh-but-chi/"><img class="ty-pict cm-image" src="{{ route('att.index') }}images/thumbnails/60/60/detailed/1/Bo-ban-ghe-tre-em-hinh-but-chi.jpg" alt="Bộ bàn ghế mầm non mẫu giáo bút chì" title="Bộ bàn ghế mầm non mẫu giáo bút chì">
                                                </a>
                                            </div>
                                            <div class="item-description">
                                                <bdi>
                                                    <a href="{{ route('att.index') }}san-pham/bo-ban-ghe-mam-non-hinh-but-chi/" class="product-title" title="Bộ bàn ghế mầm non hình bút chì">Bộ bàn ghế mầm non hình bút chì</a>
                                                </bdi>
                                                <div class="rating-wrapper">
                                                </div>
                                                <div>
                                    <span class="cm-reload-98000249 ty-price-update" id="price_update_98000249">
                                        <input type="hidden" name="appearance[show_price_values]" value="1">
                                        <input type="hidden" name="appearance[show_price]" value="1">
                                        <span class="ty-price" id="line_discounted_price_98000249"><bdi><span id="sec_discounted_price_98000249" class="ty-price-num">1.549.000</span>&nbsp;<span class="ty-price-num">đ</span></bdi></span>
                                        <!--price_update_98000249-->
                                    </span>
                                                    &nbsp;
                                                    <span class="cm-reload-98000249" id="old_price_update_98000249">
                                        <span class="ty-list-price ty-nowrap" id="line_list_price_98000249"><span class="ty-strike"><bdi><span id="sec_list_price_98000249" class="ty-list-price ty-nowrap">2.380.000</span>&nbsp;<span class="ty-list-price ty-nowrap">đ</span></bdi></span></span>
                                                        <!--old_price_update_98000249-->
                                    </span>
                                                </div>
                                            </div>
                                        </form>
                                    </li>
                                    <li class="clearfix">
                                        <form action="{{ route('att.index') }}" method="post" name="product_form_98000257" enctype="multipart/form-data" class="cm-disable-empty-files cm-ajax cm-ajax-full-render cm-ajax-status-middle cm-processed-form">
                                            <input type="hidden" name="result_ids" value="cart_status*,wish_list*,checkout*,account_info*">
                                            <input type="hidden" name="redirect_url" value="index.php?sef_rewrite=1&amp;dispatch=checkout.cart">
                                            <input type="hidden" name="product_data[257][product_id]" value="257">
                                            <div class="item-image product-item-image animate scale already-visible">
                                                <div class="thumb-discount-label"><span>-35%</span></div>
                                                <a href="{{ route('att.index') }}san-pham/giuong-tang-cao-cong-chua/"><img class="ty-pict cm-image" src="{{ route('att.index') }}images/thumbnails/60/60/detailed/16/Giường-tầng-Công-chúa-cho-bé-gái_0.jpg" alt="Giường tầng cao hình Công chúa 1m2" title="Giường tầng cao hình Công chúa 1m2">
                                                </a>
                                            </div>
                                            <div class="item-description">
                                                <bdi>
                                                    <a href="{{ route('att.index') }}san-pham/giuong-tang-cao-cong-chua/" class="product-title" title="Giường tầng cao hình Công chúa">Giường tầng cao hình Công chúa</a>
                                                </bdi>
                                                <div class="rating-wrapper">
                                                    <p class="nowrap stars">
                                                        <a href="{{ route('att.index') }}san-pham/giuong-tang-cao-cong-chua/?selected_section=discussion#discussion">
                                                            <i class="ty-icon-star"></i><i class="ty-icon-star"></i><i class="ty-icon-star"></i><i class="ty-icon-star"></i><i class="ty-icon-star"></i></a>
                                                    </p>
                                                </div>
                                                <div>
                                    <span class="cm-reload-98000257 ty-price-update" id="price_update_98000257">
                                        <input type="hidden" name="appearance[show_price_values]" value="1">
                                        <input type="hidden" name="appearance[show_price]" value="1">
                                        <span class="ty-price" id="line_discounted_price_98000257"><bdi><span id="sec_discounted_price_98000257" class="ty-price-num">11.390.000</span>&nbsp;<span class="ty-price-num">đ</span></bdi></span>
                                        <!--price_update_98000257-->
                                    </span>
                                                    &nbsp;
                                                    <span class="cm-reload-98000257" id="old_price_update_98000257">
                                        <span class="ty-list-price ty-nowrap" id="line_list_price_98000257"><span class="ty-strike"><bdi><span id="sec_list_price_98000257" class="ty-list-price ty-nowrap">17.520.000</span>&nbsp;<span class="ty-list-price ty-nowrap">đ</span></bdi></span></span>
                                                        <!--old_price_update_98000257-->
                                    </span>
                                                </div>
                                            </div>
                                        </form>
                                    </li>
                                    <li class="clearfix">
                                        <form action="{{ route('att.index') }}" method="post" name="product_form_98000259" enctype="multipart/form-data" class="cm-disable-empty-files cm-ajax cm-ajax-full-render cm-ajax-status-middle cm-processed-form">
                                            <input type="hidden" name="result_ids" value="cart_status*,wish_list*,checkout*,account_info*">
                                            <input type="hidden" name="redirect_url" value="index.php?sef_rewrite=1&amp;dispatch=checkout.cart">
                                            <input type="hidden" name="product_data[259][product_id]" value="259">
                                            <div class="item-image product-item-image animate scale already-visible">
                                                <div class="thumb-discount-label"><span>-35%</span></div>
                                                <a href="{{ route('att.index') }}san-pham/giuong-tang-thap-doremon/"><img class="ty-pict cm-image" src="{{ route('att.index') }}images/thumbnails/60/60/detailed/16/Giường-tầng-lùn-hình-Doremon_0.jpg" alt="Giường tầng thấp Doremon 1m2" title="Giường tầng thấp Doremon 1m2">
                                                </a>
                                            </div>
                                            <div class="item-description">
                                                <bdi>
                                                    <a href="{{ route('att.index') }}san-pham/giuong-tang-thap-doremon/" class="product-title" title="Giường tầng thấp Doremon">Giường tầng thấp Doremon</a>
                                                </bdi>
                                                <div class="rating-wrapper">
                                                    <p class="nowrap stars">
                                                        <a href="{{ route('att.index') }}san-pham/giuong-tang-thap-doremon/?selected_section=discussion#discussion">
                                                            <i class="ty-icon-star"></i><i class="ty-icon-star"></i><i class="ty-icon-star"></i><i class="ty-icon-star"></i><i class="ty-icon-star"></i></a>
                                                    </p>
                                                </div>
                                                <div>
                                    <span class="cm-reload-98000259 ty-price-update" id="price_update_98000259">
                                        <input type="hidden" name="appearance[show_price_values]" value="1">
                                        <input type="hidden" name="appearance[show_price]" value="1">
                                        <span class="ty-price" id="line_discounted_price_98000259"><bdi><span id="sec_discounted_price_98000259" class="ty-price-num">7.290.000</span>&nbsp;<span class="ty-price-num">đ</span></bdi></span>
                                        <!--price_update_98000259-->
                                    </span>
                                                    &nbsp;
                                                    <span class="cm-reload-98000259" id="old_price_update_98000259">
                                        <span class="ty-list-price ty-nowrap" id="line_list_price_98000259"><span class="ty-strike"><bdi><span id="sec_list_price_98000259" class="ty-list-price ty-nowrap">11.220.000</span>&nbsp;<span class="ty-list-price ty-nowrap">đ</span></bdi></span></span>
                                                        <!--old_price_update_98000259-->
                                    </span>
                                                </div>
                                            </div>
                                        </form>
                                    </li>
                                    <li class="clearfix">
                                        <form action="{{ route('att.index') }}" method="post" name="product_form_98000264" enctype="multipart/form-data" class="cm-disable-empty-files cm-ajax cm-ajax-full-render cm-ajax-status-middle cm-processed-form">
                                            <input type="hidden" name="result_ids" value="cart_status*,wish_list*,checkout*,account_info*">
                                            <input type="hidden" name="redirect_url" value="index.php?sef_rewrite=1&amp;dispatch=checkout.cart">
                                            <input type="hidden" name="product_data[264][product_id]" value="264">
                                            <div class="item-image product-item-image animate scale already-visible">
                                                <div class="thumb-discount-label"><span>-35%</span></div>
                                                <a href="{{ route('att.index') }}san-pham/giuong-gau-pooh/"><img class="ty-pict cm-image" src="{{ route('att.index') }}images/thumbnails/60/60/detailed/16/Giường-trẻ-em-hình-gấu-Pooh_0.jpg" alt="Giường gấu Pooh 1m2" title="Giường gấu Pooh 1m2">
                                                </a>
                                            </div>
                                            <div class="item-description">
                                                <bdi>
                                                    <a href="{{ route('att.index') }}san-pham/giuong-gau-pooh/" class="product-title" title="Giường gấu Pooh">Giường gấu Pooh</a>
                                                </bdi>
                                                <div class="rating-wrapper">
                                                    <p class="nowrap stars">
                                                        <a href="{{ route('att.index') }}san-pham/giuong-gau-pooh/?selected_section=discussion#discussion">
                                                            <i class="ty-icon-star"></i><i class="ty-icon-star"></i><i class="ty-icon-star"></i><i class="ty-icon-star"></i><i class="ty-icon-star"></i></a>
                                                    </p>
                                                </div>
                                                <div>
                                    <span class="cm-reload-98000264 ty-price-update" id="price_update_98000264">
                                        <input type="hidden" name="appearance[show_price_values]" value="1">
                                        <input type="hidden" name="appearance[show_price]" value="1">
                                        <span class="ty-price" id="line_discounted_price_98000264"><bdi><span id="sec_discounted_price_98000264" class="ty-price-num">4.590.000</span>&nbsp;<span class="ty-price-num">đ</span></bdi></span>
                                        <!--price_update_98000264-->
                                    </span>
                                                    &nbsp;
                                                    <span class="cm-reload-98000264" id="old_price_update_98000264">
                                        <span class="ty-list-price ty-nowrap" id="line_list_price_98000264"><span class="ty-strike"><bdi><span id="sec_list_price_98000264" class="ty-list-price ty-nowrap">7.060.000</span>&nbsp;<span class="ty-list-price ty-nowrap">đ</span></bdi></span></span>
                                                        <!--old_price_update_98000264-->
                                    </span>
                                                </div>
                                            </div>
                                        </form>
                                    </li>
                                    <li class="clearfix">
                                        <form action="{{ route('att.index') }}" method="post" name="product_form_98000267" enctype="multipart/form-data" class="cm-disable-empty-files cm-ajax cm-ajax-full-render cm-ajax-status-middle cm-processed-form">
                                            <input type="hidden" name="result_ids" value="cart_status*,wish_list*,checkout*,account_info*">
                                            <input type="hidden" name="redirect_url" value="index.php?sef_rewrite=1&amp;dispatch=checkout.cart">
                                            <input type="hidden" name="product_data[267][product_id]" value="267">
                                            <div class="item-image product-item-image animate scale already-visible">
                                                <div class="thumb-discount-label"><span>-35%</span></div>
                                                <a href="{{ route('att.index') }}san-pham/tu-quan-ao-3-canh-hinh-cong-chua/"><img class="ty-pict cm-image" src="{{ route('att.index') }}images/thumbnails/60/60/detailed/16/Tủ-quần-áo-3-cánh-hình-Công-chúa-1m2-1m6_0.jpg" alt="Tủ quần áo 3 cánh hình Công chúa 1m2" title="Tủ quần áo 3 cánh hình Công chúa 1m2">
                                                </a>
                                            </div>
                                            <div class="item-description">
                                                <bdi>
                                                    <a href="{{ route('att.index') }}san-pham/tu-quan-ao-3-canh-hinh-cong-chua/" class="product-title" title="Tủ quần áo 3 cánh hình Công chúa">Tủ quần áo 3 cánh hình Công chúa</a>
                                                </bdi>
                                                <div class="rating-wrapper">
                                                    <p class="nowrap stars">
                                                        <a href="{{ route('att.index') }}san-pham/tu-quan-ao-3-canh-hinh-cong-chua/?selected_section=discussion#discussion">
                                                            <i class="ty-icon-star"></i><i class="ty-icon-star"></i><i class="ty-icon-star"></i><i class="ty-icon-star"></i><i class="ty-icon-star"></i></a>
                                                    </p>
                                                </div>
                                                <div>
                                    <span class="cm-reload-98000267 ty-price-update" id="price_update_98000267">
                                        <input type="hidden" name="appearance[show_price_values]" value="1">
                                        <input type="hidden" name="appearance[show_price]" value="1">
                                        <span class="ty-price" id="line_discounted_price_98000267"><bdi><span id="sec_discounted_price_98000267" class="ty-price-num">5.890.000</span>&nbsp;<span class="ty-price-num">đ</span></bdi></span>
                                        <!--price_update_98000267-->
                                    </span>
                                                    &nbsp;
                                                    <span class="cm-reload-98000267" id="old_price_update_98000267">
                                        <span class="ty-list-price ty-nowrap" id="line_list_price_98000267"><span class="ty-strike"><bdi><span id="sec_list_price_98000267" class="ty-list-price ty-nowrap">9.060.000</span>&nbsp;<span class="ty-list-price ty-nowrap">đ</span></bdi></span></span>
                                                        <!--old_price_update_98000267-->
                                    </span>
                                                </div>
                                            </div>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="tygh-content clearfix">
            <div class="container content-grid">
                <div class="row">
                    <div class="span12 vs-cart-page">
                        <!-- Inline script moved to the bottom of the page -->
                        <!-- Inline script moved to the bottom of the page -->
                        <!-- Inline script moved to the bottom of the page -->
                        <p class="ty-no-items">Giỏ hàng của bạn chưa có sản phẩm</p>
                        <div class="buttons-container wrap vs-empty-cart-buttons">
                            <a href="{{ route('att.index') }}" class="ty-btn ty-btn__secondary ">Tiếp tục mua sắm</a>
                        </div>
                    </div>
                    <div class="span4 ">
                        <div class="vs-sidebox clearfix vs-sidebox-icon">
                            <h2 class="vs-sidebox-title clearfix">
                                <i class="vs-icon-justify"></i><span class="vs-sidebox-name">Sản phẩm mua kèm</span>
                                <span class="vs-title-toggle cm-combination visible-phone visible-tablet" id="sw_sidebox_98">
                        <i class="ty-sidebox__icon-open ty-icon-down-open"></i>
                        <i class="ty-sidebox__icon-hide ty-icon-up-open"></i>
                        </span>
                            </h2>
                            <div class="vs-sidebox-body vs-toggle-body clearfix" id="sidebox_98">
                                <ul class="template-small-item">
                                    <li class="clearfix">
                                        <form action="{{ route('att.index') }}" method="post" name="product_form_98000249" enctype="multipart/form-data" class="cm-disable-empty-files cm-ajax cm-ajax-full-render cm-ajax-status-middle cm-processed-form">
                                            <input type="hidden" name="result_ids" value="cart_status*,wish_list*,checkout*,account_info*">
                                            <input type="hidden" name="redirect_url" value="index.php?sef_rewrite=1&amp;dispatch=checkout.cart">
                                            <input type="hidden" name="product_data[249][product_id]" value="249">
                                            <div class="item-image product-item-image animate scale already-visible">
                                                <div class="thumb-discount-label"><span>-35%</span></div>
                                                <a href="{{ route('att.index') }}san-pham/bo-ban-ghe-mam-non-hinh-but-chi/"><img class="ty-pict cm-image" src="{{ route('att.index') }}images/thumbnails/60/60/detailed/1/Bo-ban-ghe-tre-em-hinh-but-chi.jpg" alt="Bộ bàn ghế mầm non mẫu giáo bút chì" title="Bộ bàn ghế mầm non mẫu giáo bút chì">
                                                </a>
                                            </div>
                                            <div class="item-description">
                                                <bdi>
                                                    <a href="{{ route('att.index') }}san-pham/bo-ban-ghe-mam-non-hinh-but-chi/" class="product-title" title="Bộ bàn ghế mầm non hình bút chì">Bộ bàn ghế mầm non hình bút chì</a>
                                                </bdi>
                                                <div class="rating-wrapper">
                                                </div>
                                                <div>
                                            <span class="cm-reload-98000249 ty-price-update" id="price_update_98000249">
                                                <input type="hidden" name="appearance[show_price_values]" value="1">
                                                <input type="hidden" name="appearance[show_price]" value="1">
                                                <span class="ty-price" id="line_discounted_price_98000249"><bdi><span id="sec_discounted_price_98000249" class="ty-price-num">1.549.000</span>&nbsp;<span class="ty-price-num">đ</span></bdi></span>
                                                <!--price_update_98000249-->
                                            </span>
                                                    &nbsp;
                                                    <span class="cm-reload-98000249" id="old_price_update_98000249">
                                                <span class="ty-list-price ty-nowrap" id="line_list_price_98000249"><span class="ty-strike"><bdi><span id="sec_list_price_98000249" class="ty-list-price ty-nowrap">2.380.000</span>&nbsp;<span class="ty-list-price ty-nowrap">đ</span></bdi></span></span>
                                                        <!--old_price_update_98000249-->
                                            </span>
                                                </div>
                                            </div>
                                        </form>
                                    </li>
                                    <li class="clearfix">
                                        <form action="{{ route('att.index') }}" method="post" name="product_form_98000257" enctype="multipart/form-data" class="cm-disable-empty-files cm-ajax cm-ajax-full-render cm-ajax-status-middle cm-processed-form">
                                            <input type="hidden" name="result_ids" value="cart_status*,wish_list*,checkout*,account_info*">
                                            <input type="hidden" name="redirect_url" value="index.php?sef_rewrite=1&amp;dispatch=checkout.cart">
                                            <input type="hidden" name="product_data[257][product_id]" value="257">
                                            <div class="item-image product-item-image animate scale already-visible">
                                                <div class="thumb-discount-label"><span>-35%</span></div>
                                                <a href="{{ route('att.index') }}san-pham/giuong-tang-cao-cong-chua/"><img class="ty-pict cm-image" src="{{ route('att.index') }}images/thumbnails/60/60/detailed/16/Giường-tầng-Công-chúa-cho-bé-gái_0.jpg" alt="Giường tầng cao hình Công chúa 1m2" title="Giường tầng cao hình Công chúa 1m2">
                                                </a>
                                            </div>
                                            <div class="item-description">
                                                <bdi>
                                                    <a href="{{ route('att.index') }}san-pham/giuong-tang-cao-cong-chua/" class="product-title" title="Giường tầng cao hình Công chúa">Giường tầng cao hình Công chúa</a>
                                                </bdi>
                                                <div class="rating-wrapper">
                                                    <p class="nowrap stars">
                                                        <a href="{{ route('att.index') }}san-pham/giuong-tang-cao-cong-chua/?selected_section=discussion#discussion">
                                                            <i class="ty-icon-star"></i><i class="ty-icon-star"></i><i class="ty-icon-star"></i><i class="ty-icon-star"></i><i class="ty-icon-star"></i></a>
                                                    </p>
                                                </div>
                                                <div>
                                            <span class="cm-reload-98000257 ty-price-update" id="price_update_98000257">
                                                <input type="hidden" name="appearance[show_price_values]" value="1">
                                                <input type="hidden" name="appearance[show_price]" value="1">
                                                <span class="ty-price" id="line_discounted_price_98000257"><bdi><span id="sec_discounted_price_98000257" class="ty-price-num">11.390.000</span>&nbsp;<span class="ty-price-num">đ</span></bdi></span>
                                                <!--price_update_98000257-->
                                            </span>
                                                    &nbsp;
                                                    <span class="cm-reload-98000257" id="old_price_update_98000257">
                                                <span class="ty-list-price ty-nowrap" id="line_list_price_98000257"><span class="ty-strike"><bdi><span id="sec_list_price_98000257" class="ty-list-price ty-nowrap">17.520.000</span>&nbsp;<span class="ty-list-price ty-nowrap">đ</span></bdi></span></span>
                                                        <!--old_price_update_98000257-->
                                            </span>
                                                </div>
                                            </div>
                                        </form>
                                    </li>
                                    <li class="clearfix">
                                        <form action="{{ route('att.index') }}" method="post" name="product_form_98000259" enctype="multipart/form-data" class="cm-disable-empty-files cm-ajax cm-ajax-full-render cm-ajax-status-middle cm-processed-form">
                                            <input type="hidden" name="result_ids" value="cart_status*,wish_list*,checkout*,account_info*">
                                            <input type="hidden" name="redirect_url" value="index.php?sef_rewrite=1&amp;dispatch=checkout.cart">
                                            <input type="hidden" name="product_data[259][product_id]" value="259">
                                            <div class="item-image product-item-image animate scale already-visible">
                                                <div class="thumb-discount-label"><span>-35%</span></div>
                                                <a href="{{ route('att.index') }}san-pham/giuong-tang-thap-doremon/"><img class="ty-pict cm-image" src="{{ route('att.index') }}images/thumbnails/60/60/detailed/16/Giường-tầng-lùn-hình-Doremon_0.jpg" alt="Giường tầng thấp Doremon 1m2" title="Giường tầng thấp Doremon 1m2">
                                                </a>
                                            </div>
                                            <div class="item-description">
                                                <bdi>
                                                    <a href="{{ route('att.index') }}san-pham/giuong-tang-thap-doremon/" class="product-title" title="Giường tầng thấp Doremon">Giường tầng thấp Doremon</a>
                                                </bdi>
                                                <div class="rating-wrapper">
                                                    <p class="nowrap stars">
                                                        <a href="{{ route('att.index') }}san-pham/giuong-tang-thap-doremon/?selected_section=discussion#discussion">
                                                            <i class="ty-icon-star"></i><i class="ty-icon-star"></i><i class="ty-icon-star"></i><i class="ty-icon-star"></i><i class="ty-icon-star"></i></a>
                                                    </p>
                                                </div>
                                                <div>
                                            <span class="cm-reload-98000259 ty-price-update" id="price_update_98000259">
                                                <input type="hidden" name="appearance[show_price_values]" value="1">
                                                <input type="hidden" name="appearance[show_price]" value="1">
                                                <span class="ty-price" id="line_discounted_price_98000259"><bdi><span id="sec_discounted_price_98000259" class="ty-price-num">7.290.000</span>&nbsp;<span class="ty-price-num">đ</span></bdi></span>
                                                <!--price_update_98000259-->
                                            </span>
                                                    &nbsp;
                                                    <span class="cm-reload-98000259" id="old_price_update_98000259">
                                                <span class="ty-list-price ty-nowrap" id="line_list_price_98000259"><span class="ty-strike"><bdi><span id="sec_list_price_98000259" class="ty-list-price ty-nowrap">11.220.000</span>&nbsp;<span class="ty-list-price ty-nowrap">đ</span></bdi></span></span>
                                                        <!--old_price_update_98000259-->
                                            </span>
                                                </div>
                                            </div>
                                        </form>
                                    </li>
                                    <li class="clearfix">
                                        <form action="{{ route('att.index') }}" method="post" name="product_form_98000264" enctype="multipart/form-data" class="cm-disable-empty-files cm-ajax cm-ajax-full-render cm-ajax-status-middle cm-processed-form">
                                            <input type="hidden" name="result_ids" value="cart_status*,wish_list*,checkout*,account_info*">
                                            <input type="hidden" name="redirect_url" value="index.php?sef_rewrite=1&amp;dispatch=checkout.cart">
                                            <input type="hidden" name="product_data[264][product_id]" value="264">
                                            <div class="item-image product-item-image animate scale already-visible">
                                                <div class="thumb-discount-label"><span>-35%</span></div>
                                                <a href="{{ route('att.index') }}san-pham/giuong-gau-pooh/"><img class="ty-pict cm-image" src="{{ route('att.index') }}images/thumbnails/60/60/detailed/16/Giường-trẻ-em-hình-gấu-Pooh_0.jpg" alt="Giường gấu Pooh 1m2" title="Giường gấu Pooh 1m2">
                                                </a>
                                            </div>
                                            <div class="item-description">
                                                <bdi>
                                                    <a href="{{ route('att.index') }}san-pham/giuong-gau-pooh/" class="product-title" title="Giường gấu Pooh">Giường gấu Pooh</a>
                                                </bdi>
                                                <div class="rating-wrapper">
                                                    <p class="nowrap stars">
                                                        <a href="{{ route('att.index') }}san-pham/giuong-gau-pooh/?selected_section=discussion#discussion">
                                                            <i class="ty-icon-star"></i><i class="ty-icon-star"></i><i class="ty-icon-star"></i><i class="ty-icon-star"></i><i class="ty-icon-star"></i></a>
                                                    </p>
                                                </div>
                                                <div>
                                            <span class="cm-reload-98000264 ty-price-update" id="price_update_98000264">
                                                <input type="hidden" name="appearance[show_price_values]" value="1">
                                                <input type="hidden" name="appearance[show_price]" value="1">
                                                <span class="ty-price" id="line_discounted_price_98000264"><bdi><span id="sec_discounted_price_98000264" class="ty-price-num">4.590.000</span>&nbsp;<span class="ty-price-num">đ</span></bdi></span>
                                                <!--price_update_98000264-->
                                            </span>
                                                    &nbsp;
                                                    <span class="cm-reload-98000264" id="old_price_update_98000264">
                                                <span class="ty-list-price ty-nowrap" id="line_list_price_98000264"><span class="ty-strike"><bdi><span id="sec_list_price_98000264" class="ty-list-price ty-nowrap">7.060.000</span>&nbsp;<span class="ty-list-price ty-nowrap">đ</span></bdi></span></span>
                                                        <!--old_price_update_98000264-->
                                            </span>
                                                </div>
                                            </div>
                                        </form>
                                    </li>
                                    <li class="clearfix">
                                        <form action="{{ route('att.index') }}" method="post" name="product_form_98000267" enctype="multipart/form-data" class="cm-disable-empty-files cm-ajax cm-ajax-full-render cm-ajax-status-middle cm-processed-form">
                                            <input type="hidden" name="result_ids" value="cart_status*,wish_list*,checkout*,account_info*">
                                            <input type="hidden" name="redirect_url" value="index.php?sef_rewrite=1&amp;dispatch=checkout.cart">
                                            <input type="hidden" name="product_data[267][product_id]" value="267">
                                            <div class="item-image product-item-image animate scale already-visible">
                                                <div class="thumb-discount-label"><span>-35%</span></div>
                                                <a href="{{ route('att.index') }}san-pham/tu-quan-ao-3-canh-hinh-cong-chua/"><img class="ty-pict cm-image" src="{{ route('att.index') }}images/thumbnails/60/60/detailed/16/Tủ-quần-áo-3-cánh-hình-Công-chúa-1m2-1m6_0.jpg" alt="Tủ quần áo 3 cánh hình Công chúa 1m2" title="Tủ quần áo 3 cánh hình Công chúa 1m2">
                                                </a>
                                            </div>
                                            <div class="item-description">
                                                <bdi>
                                                    <a href="{{ route('att.index') }}san-pham/tu-quan-ao-3-canh-hinh-cong-chua/" class="product-title" title="Tủ quần áo 3 cánh hình Công chúa">Tủ quần áo 3 cánh hình Công chúa</a>
                                                </bdi>
                                                <div class="rating-wrapper">
                                                    <p class="nowrap stars">
                                                        <a href="{{ route('att.index') }}san-pham/tu-quan-ao-3-canh-hinh-cong-chua/?selected_section=discussion#discussion">
                                                            <i class="ty-icon-star"></i><i class="ty-icon-star"></i><i class="ty-icon-star"></i><i class="ty-icon-star"></i><i class="ty-icon-star"></i></a>
                                                    </p>
                                                </div>
                                                <div>
                                            <span class="cm-reload-98000267 ty-price-update" id="price_update_98000267">
                                                <input type="hidden" name="appearance[show_price_values]" value="1">
                                                <input type="hidden" name="appearance[show_price]" value="1">
                                                <span class="ty-price" id="line_discounted_price_98000267"><bdi><span id="sec_discounted_price_98000267" class="ty-price-num">5.890.000</span>&nbsp;<span class="ty-price-num">đ</span></bdi></span>
                                                <!--price_update_98000267-->
                                            </span>
                                                    &nbsp;
                                                    <span class="cm-reload-98000267" id="old_price_update_98000267">
                                                <span class="ty-list-price ty-nowrap" id="line_list_price_98000267"><span class="ty-strike"><bdi><span id="sec_list_price_98000267" class="ty-list-price ty-nowrap">9.060.000</span>&nbsp;<span class="ty-list-price ty-nowrap">đ</span></bdi></span></span>
                                                        <!--old_price_update_98000267-->
                                            </span>
                                                </div>
                                            </div>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
