@extends('frontend.layouts.master')
@section('title', 'Thanh toán')
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
                        <span class="ty-breadcrumbs__slash">/</span><span class="ty-breadcrumbs__current">Thanh toán</span>
                    </div>
                    <!--breadcrumbs_58-->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="span12 main-content-grid">
                <div class="litecheckout litecheckout__form vs-mainbox-general clearfix" id="litecheckout_form">
                    <h1 class="vs-mainbox-title clearfix">
            <span class="ty-checkout__title">Thanh toán an toàn&nbsp;<i
                    class="ty-checkout__title-icon ty-icon-lock"></i></span>
                    </h1>
                    <div data-ca-lite-checkout-element="form">
                        <form name="litecheckout_payments_form" id="create_form"
                              action="{{ route('att.checkout.submit') }}" method="post"
                              data-ca-lite-checkout-element="checkout-form" data-ca-lite-checkout-ready-for-checkout="false"
                              class="litecheckout__payment-methods cm-processed-form">
                            @csrf
                            <input type="hidden" name="quote_id" value="{{ $quotes['quotes']->id }}">
                            <input type="hidden" value="1" name="ship_to_another"
                                   data-ca-lite-checkout-field="ship_to_another"
                                   data-ca-lite-checkout-auto-save-on-change="true">
                            <div class="litecheckout__group">
                                <div class="litecheckout__container">
                                    <div class="litecheckout__group" id="litecheckout_step_location">
                                        <div class="litecheckout__group">
                                            <div class="litecheckout__item">
                                                <h2 class="litecheckout__step-title">Giao hàng đến</h2>
                                            </div>
                                            <!-- Inline script moved to the bottom of the page -->
                                            <div
                                                class="litecheckout__field cm-field-container litecheckout__field--small litecheckout__field--input"
                                                data-ca-error-message-target-method="append">
                                                <input class="litecheckout__input shipping-address" placeholder=" "
                                                       id="litecheckout_s_address" type="text" name="address"
                                                       value="" data-ca-lite-checkout-field="user_data.s_address"
                                                       data-ca-lite-checkout-auto-save="true" autocomplete=""
                                                       aria-label="Số nhà/đường phố/thôn xã"
                                                       title="Số nhà/đường phố/thôn xã">
                                                <label class="litecheckout__label " for="litecheckout_s_address">Số
                                                    nhà/đường phố/thôn xã</label>
                                            </div>
                                            <div class="litecheckout__field litecheckout__field--xsmall cm-field-container"
                                                 data-ca-error-message-target-method="append">
{{--                                                <select data-ca-lite-checkout-field="user_data.s_state"--}}
{{--                                                        class="cm-state cm-location-shipping litecheckout__input litecheckout__input--selectable litecheckout__input--selectable--select"--}}
{{--                                                        data-ca-lite-checkout-element="state"--}}
{{--                                                        data-ca-lite-checkout-is-state-code-container="true"--}}
{{--                                                        data-ca-lite-checkout-last-value="" id="litecheckout_state">--}}
{{--                                                    <option value="HN">Hà Nội</option>--}}
{{--                                                </select>--}}
                                                <input type="text" data-ca-lite-checkout-field="user_data.s_state"
                                                       id="litecheckout_state_d" data-ca-lite-checkout-element="state"
                                                       data-ca-lite-checkout-is-state-code-container="false"
                                                       data-ca-lite-checkout-last-value="" placeholder=" " value=""
                                                       class="cm-state cm-location-shipping litecheckout__input hidden cm-skip-avail-switch"
                                                       disabled="" name="city">
                                                <label class="litecheckout__label cm-required" for="litecheckout_state">Tỉnh/TP </label>
                                            </div>
                                            <div class="litecheckout__field litecheckout__field--auto">
                                                <select data-ca-lite-checkout-field="user_data.s_country"
                                                        class="cm-country cm-location-shipping litecheckout__input litecheckout__input--selectable litecheckout__input--selectable--select"
                                                        data-ca-lite-checkout-element="country" required=""
                                                        id="litecheckout_country">
                                                    <option disabled="">Chọn quốc gia</option>
                                                    <option value="VN" selected="selected">Việt Nam</option>
                                                </select>
                                                <label class="litecheckout__label cm-required" for="litecheckout_country">Quốc
                                                    gia: </label>
                                            </div>
                                        </div>
                                        <div id="litecheckout_autocomplete_dropdown"
                                             class="litecheckout__autocomplete-dropdown"></div>
                                        <!--litecheckout_step_location-->
                                    </div>
                                </div>
                                <div class="litecheckout__container">
                                    <div class="litecheckout__group litecheckout__step" id="litecheckout_step_shipping">
                                        <div class="litecheckout__group litecheckout__shippings"
                                             data-ca-lite-checkout-overlay-message="Enter city and state and click here to update shipping rates"
                                             data-ca-lite-checkout-overlay-class="litecheckout__overlay--active"
                                             data-ca-lite-checkout-element="shipping-methods" id="shipping_rates_list">
                                            <input type="hidden" name="additional_result_ids[]"
                                                   value="litecheckout_final_section,litecheckout_step_payment,checkout*">
                                            <div class="litecheckout__group">
                                                <p class="litecheckout__shipping-method__text">
                                                    Khu vực miễn phí vận chuyển được quy định tại mục Thông tin sản phẩm
                                                    <br> Phí vận chuyển (nếu có) sẽ được thông báo khi xác nhận đơn hàng.
                                                </p>
                                            </div>
                                            <div class="litecheckout__group">
                                                <div class="litecheckout__item">
                                                </div>
                                            </div>
                                        </div>
                                        <!--litecheckout_step_shipping-->
                                    </div>
                                </div>
                                <div class="litecheckout__group">
                                    <div class="litecheckout__item litecheckout__item--fill">
                                        <h2 class="litecheckout__step-title">Thông tin Khách hàng</h2>
                                    </div>
                                </div>
                                <div id="litecheckout_step_customer_info" class="litecheckout__group">
                                    <div
                                        class="litecheckout__field cm-field-container litecheckout__field--small litecheckout__field--input"
                                        data-ca-error-message-target-method="append">
                                        <input class="litecheckout__input last-name" placeholder=" "
                                               id="litecheckout_fullname" type="text" name="customer_name" value=""
                                               data-ca-lite-checkout-field="user_data.fullname"
                                               data-ca-lite-checkout-auto-save="true" autocomplete="" aria-label="Họ tên"
                                               title="Họ tên" data-ca-fullname-format="firstname_first">
                                        <label class="litecheckout__label  cm-required" for="litecheckout_fullname">Họ
                                            tên</label>
                                    </div>
                                    <div
                                        class="litecheckout__field cm-field-container litecheckout__field--small litecheckout__field--input"
                                        data-ca-error-message-target-method="append">
                                        <input class="litecheckout__input phone cm-mask-phone" placeholder=" "
                                               id="litecheckout_phone" type="tel" name="customer_phone_number" value=""
                                               data-ca-lite-checkout-field="user_data.phone"
                                               data-ca-lite-checkout-auto-save="true" autocomplete=""
                                               aria-label="Điện thoại" title="Điện thoại">
                                        <label class="litecheckout__label  cm-mask-phone-label cm-required"
                                               for="litecheckout_phone">Điện thoại</label>
                                    </div>
                                    <div
                                        class="litecheckout__field cm-field-container litecheckout__field--small litecheckout__field--input"
                                        data-ca-error-message-target-method="append">
                                        <input class="litecheckout__input" placeholder=" " id="litecheckout_email"
                                               type="text" name="customer_email" value=""
                                               data-ca-lite-checkout-field="user_data.email"
                                               data-ca-lite-checkout-auto-save="true" autocomplete="" aria-label="Email"
                                               title="Email">
                                        <label class="litecheckout__label  cm-email cm-required" for="litecheckout_email">Email</label>
                                    </div>
                                </div>
                                <div class="litecheckout__group" data-ca-lite-checkout-element="address-group">
                                    <div
                                        class="litecheckout__field cm-field-container litecheckout__field--small litecheckout__field--input"
                                        data-ca-error-message-target-method="append">
                                        <input class="litecheckout__input shipping-address" placeholder=" "
                                               id="litecheckout_s_address" type="text" name="customer_address" value=""
                                               data-ca-lite-checkout-field="user_data.s_address"
                                               data-ca-lite-checkout-auto-save="true" autocomplete=""
                                               aria-label="Số nhà/đường phố/thôn xã" title="Số nhà/đường phố/thôn xã">
                                        <label class="litecheckout__label " for="litecheckout_s_address">Số nhà/đường
                                            phố/thôn xã</label>
                                    </div>
                                </div>
                                <div class="litecheckout__container">
                                    <div class="cm-processing-personal-data"
                                         data-ca-processing-personal-data-without-click="true">
                                        <div class="litecheckout__group">
                                            <div class="litecheckout__field">
                                    <textarea data-ca-lite-checkout-field="customer_notes"
                                              class="litecheckout__input litecheckout__input--textarea"
                                              id="litecheckout_comment_to_shipping" autocomplete="disabled"
                                              placeholder=" " data-ca-lite-checkout-element="customer_notes"
                                              data-ca-lite-checkout-auto-save="true" aria-label="Ghi chú"
                                              title="Ghi chú" name="description"></textarea>
                                                <label class="litecheckout__label" for="litecheckout_comment_to_shipping">Ghi
                                                    chú </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="litecheckout__container">
                                    <div class="litecheckout__group">
                                        <div class="litecheckout__item">
                                            <h2 class="litecheckout__step-title">Chọn phương thức thanh toán</h2>
                                        </div>
                                    </div>
                                    <div class="litecheckout__step litecheckout__container" id="litecheckout_step_payment">
                                        <div class="litecheckout__section">
                                            <div class="litecheckout__group">
                                                <div onclick="openTab(1)" style="display: block"
                                                    class="litecheckout__shipping-method litecheckout__field litecheckout__field--xsmall">
                                                    <input type="radio" name="selected_payment_method" id="radio_6"
                                                           data-ca-target-form="litecheckout_payments_form"
                                                           data-ca-url="checkout.checkout"
                                                           data-ca-result-ids="litecheckout_final_section,litecheckout_step_payment,shipping_rates_list,checkout*"
                                                           class="litecheckout__shipping-method__radio cm-select-payment hidden"
                                                           value="6" checked="">
                                                    <label id="payments_6"
                                                           class="litecheckout__shipping-method__wrapper js-litecheckout-toggle"
                                                           for="radio_6" data-ca-toggling="payments_form_wrapper_6"
                                                           data-ca-hide-all-in=".litecheckout__payment-methods">
                                                        <p class="litecheckout__shipping-method__title">Nhận hàng trả tiền
                                                            (C.O.D)
                                                        </p>
                                                        <p class="litecheckout__shipping-method__delivery-time">Bằng tiền
                                                            mặt hoặc quẹt thẻ
                                                        </p>
                                                    </label>
                                                </div>
                                                <div onclick="openTab(2)"
                                                    class="litecheckout__shipping-method litecheckout__field litecheckout__field--xsmall">
                                                    <input type="radio" name="selected_payment_method" id="radio_12"
                                                           data-ca-target-form="litecheckout_payments_form"
                                                           data-ca-url="checkout.checkout"
                                                           data-ca-result-ids="litecheckout_final_section,litecheckout_step_payment,shipping_rates_list,checkout*"
                                                           class="litecheckout__shipping-method__radio cm-select-payment hidden"
                                                           value="12">
                                                    <label id="payments_12"
                                                           class="litecheckout__shipping-method__wrapper js-litecheckout-toggle"
                                                           for="radio_12" data-ca-toggling="payments_form_wrapper_12"
                                                           data-ca-hide-all-in=".litecheckout__payment-methods">
                                                        <p class="litecheckout__shipping-method__title">Cổng thanh toán VNPay</p>
                                                        <p class="litecheckout__shipping-method__delivery-time">Thanh toán online
                                                        </p>
                                                    </label>
                                                </div>

                                                <div
                                                    class="litecheckout__shipping-method litecheckout__field litecheckout__field--xsmall">
                                                    <input type="radio" name="selected_payment_method" id="radio_13"
                                                           data-ca-target-form="litecheckout_payments_form"
                                                           data-ca-url="checkout.checkout"
                                                           data-ca-result-ids="litecheckout_final_section,litecheckout_step_payment,shipping_rates_list,checkout*"
                                                           class="litecheckout__shipping-method__radio cm-select-payment hidden"
                                                           value="13">
                                                    <label id="payments_13"
                                                           class="litecheckout__shipping-method__wrapper js-litecheckout-toggle"
                                                           for="radio_13" data-ca-toggling="payments_form_wrapper_13"
                                                           data-ca-hide-all-in=".litecheckout__payment-methods">
                                                        <p class="litecheckout__shipping-method__title">Trả góp 0% lãi
                                                            suất
                                                        </p>
                                                        <p class="litecheckout__shipping-method__delivery-time">Bằng thẻ tín
                                                            dụng của 26 NH
                                                        </p>
                                                    </label>
                                                </div>
                                            </div>
                                            <div id="payment1" style="display: none;" class="tabcontent litecheckout__group litecheckout__payment-methods">
                                                <div class="litecheckout__group litecheckout__payment-method"
                                                     data-ca-toggling-by="payments_form_wrapper_6" data-ca-hideble="true">
                                                    <input type="hidden" name="payment_id" value="6">
                                                    <input type="hidden" name="result_ids" value="">
                                                    <input type="hidden" name="dispatch" value="checkout.place_order">
                                                    <input type="hidden" name="customer_notes" value="">
                                                    <input type="hidden" name="payment_id" value="6">
                                                    <div class="litecheckout__item litecheckout__payment-instructions">
                                                        <p>Hình thức Thanh toán khi nhận hàng (C.O.D) chỉ áp dụng với Khách
                                                            hàng nhận hàng tại nội thành TP. Hồ Chí Minh và Hà Nội. Nếu quý
                                                            khách muốn quẹt thẻ (chỉ áp dụng tại TP.HCM), xin vui lòng báo
                                                            trước để chúng tôi mang theo Máy quẹt.
                                                        </p>
                                                        <p>Với Khách hàng ở ngoại thành và các tỉnh khác, xin vui lòng đặt
                                                            cọc tối thiểu 30% giá trị đơn hàng. Số còn lại, Quý khách có thể
                                                            thanh toán ngay khi nhận hàng.
                                                        </p>
                                                        <h4>Thông tin chuyển khoản của chúng tôi như sau:</h4>
                                                        <p style="line-height: 20.8px;">1. Tài khoản cá nhân:</p>
                                                        <ul style="line-height: 20.8px;">
                                                            <li>Ngân hàng: Vietcombank - CN Hồ Chí Minh</li>
                                                            <li>Chủ tài khoản: Nguyễn Thùy Trang</li>
                                                            <li>Số tài khoản: 0071000691397</li>
                                                        </ul>
                                                        <p style="line-height: 20.8px;">2. Tài khoản công ty:</p>
                                                        <ul style="line-height: 20.8px;">
                                                            <li>Ngân hàng: Vietcombank - CN Phú Thọ</li>
                                                            <li>Chủ tài khoản: Công ty TNHH SX và TM IBIE</li>
                                                            <li>Số tài khoản: 0421000474032</li>
                                                        </ul>
                                                        <p style="line-height: 20.8px;">Nội dung:&nbsp;&lt;Tên Khách hàng&gt;
                                                            thanh toán đơn hàng số &lt;số đơn hàng&gt;
                                                        </p>
                                                        <p style="line-height: 20.8px;">Trong đó, số đơn hàng sẽ được cấp
                                                            khi Quý khách đặt hàng thành công. Để xem lại thông tin đơn
                                                            hàng, Quý khách vui lòng đăng nhập tài khoản và chọn Thông tin
                                                            đơn hàng.
                                                        </p>
                                                        <p style="line-height: 20.8px;">Sau khi chuyển khoản thành công, xin
                                                            vui lòng chụp màn hình gửi qua email hotro@ibie.vn hoặc zalo số
                                                            0901.295.161 cho chúng tôi để được xử lý nhanh hơn.
                                                        </p>
                                                        <p style="line-height: 20.8px;">Nếu có thắc mắc, xin vui lòng liên
                                                            hệ Tổng đài hỗ trợ: 08.2216.5678 hoặc 0901 295 161
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="payment2" style="display: none;" class="tabcontent litecheckout__group litecheckout__payment-methods">
                                                <div class="litecheckout__group "
                                                     data-ca-toggling-by="payments_form_wrapper_6" data-ca-hideble="true">
                                                    <div class="litecheckout__group" style="padding: 10px;">
                                                        <div class="litecheckout__container" style="font-size: 16px;">
                                                            <label for="order_id">Mã hóa đơn: </label>
                                                            <label class="form-control"  type="text" >{{ time().$quotes['quotes']->id }}</label>
                                                        </div>
                                                        <div class="litecheckout__container" style="font-size: 16px; font-weight: bold;">
                                                            <label for="amount">Số tiền:</label>
                                                            <bdi><label class="form-control"  type="text" >{{ current_price($quotes['quotes']->total)}}</label> VNĐ</bdi>
                                                        </div>
                                                        <div class="litecheckout__container" style="font-size: 16px;">
                                                            <label for="order_desc">Nội dung thanh toán:</label>
                                                            <textarea class="litecheckout__input litecheckout__input--textarea" autocomplete="disabled"
                                                                      placeholder=" " data-ca-lite-checkout-element="customer_notes" name="noi_dung_tt"
                                                                      data-ca-lite-checkout-auto-save="true"  placeholder="Nội dung thanh toán"></textarea>
                                                        </div>
                                                        <div class="litecheckout__container" style="font-size: 16px;">
                                                            <label for="bank_code">Ngân hàng</label>
                                                            <select name="bank_code" id="bank_code" style="font-size: 16px;">
                                                                <option value="">Không chọn</option>
                                                                <option value="NCB"> Ngân hàng NCB</option>
                                                                <option value="AGRIBANK"> Ngân hàng Agribank</option>
                                                                <option value="SCB"> Ngân hàng SCB</option>
                                                                <option value="SACOMBANK">Ngân hàng SacomBank</option>
                                                                <option value="EXIMBANK"> Ngân hàng EximBank</option>
                                                                <option value="MSBANK"> Ngân hàng MSBANK</option>
                                                                <option value="NAMABANK"> Ngân hàng NamABank</option>
                                                                <option value="VNMART"> Ví điện tử VnMart</option>
                                                                <option value="VIETINBANK">Ngân hàng Vietinbank</option>
                                                                <option value="VIETCOMBANK"> Ngân hàng VCB</option>
                                                                <option value="HDBANK">Ngân hàng HDBank</option>
                                                                <option value="DONGABANK"> Ngân hàng Dong A</option>
                                                                <option value="TPBANK"> Ngân hàng TPBank</option>
                                                                <option value="OJB"> Ngân hàng OceanBank</option>
                                                                <option value="BIDV"> Ngân hàng BIDV</option>
                                                                <option value="TECHCOMBANK"> Ngân hàng Techcombank</option>
                                                                <option value="VPBANK"> Ngân hàng VPBank</option>
                                                                <option value="MBBANK"> Ngân hàng MBBank</option>
                                                                <option value="ACB"> Ngân hàng ACB</option>
                                                                <option value="OCB"> Ngân hàng OCB</option>
                                                                <option value="IVB"> Ngân hàng IVB</option>
                                                            </select>
                                                        </div>
{{--                                                        <button type="submit" class="btn btn-primary" id="btnPopup">Thanh toán Popup</button>--}}
{{--                                                        <button type="submit" class="btn btn-default">Thanh toán Redirect</button>--}}

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Inline script moved to the bottom of the page -->
                                <div class="litecheckout__group">
                                    <div class="litecheckout__item" style="width: 100%;">
                                        <div
                                            class="ty-profile-field__switch ty-address-switch clearfix litecheckout__address-switch">
                                            <div class="ty-profile-field__switch-label"><label
                                                    for="sw_billing_address_suffix_no">Giao đến địa chỉ khác?</label></div>
                                            <div class="ty-profile-field__switch-actions">
                                                <input type="hidden" value="0" name="ship_to_another"
                                                       data-ca-lite-checkout-field="ship_to_another"
                                                       data-ca-lite-checkout-auto-save-on-change="true">
                                                <input type="hidden" value="0" name="user_data[ship_to_another]"
                                                       data-ca-lite-checkout-field="user_data.ship_to_another"
                                                       data-ca-lite-checkout-auto-save-on-change="true">
                                                <input id="sw_billing_address_suffix_no" type="checkbox" value="1"
                                                       name="user_data[ship_to_another]"
                                                       data-ca-lite-checkout-field="user_data.ship_to_another"
                                                       data-ca-lite-checkout-auto-save-on-change="true"
                                                       class="checkbox cm-switch-availability cm-switch-visibility">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="billing_address" class="litecheckout__container hidden">
                                    <div class="litecheckout__group">
                                        <input type="hidden" value="1" name="ship_to_another"
                                               data-ca-lite-checkout-field="ship_to_another"
                                               data-ca-lite-checkout-auto-save-on-change="true" disabled="disabled">
                                        <div
                                            class="litecheckout__field cm-field-container litecheckout__field--small litecheckout__field--input"
                                            data-ca-error-message-target-method="append">
                                            <input class="litecheckout__input billing-first-name disabled" placeholder=" "
                                                   id="litecheckout_b_fullname" type="text" name="user_data[b_fullname]"
                                                   value="" data-ca-lite-checkout-field="user_data.b_fullname"
                                                   data-ca-lite-checkout-auto-save="true" autocomplete=""
                                                   aria-label="Họ tên" title="Họ tên"
                                                   data-ca-fullname-format="firstname_first" disabled="disabled">
                                            <label class="litecheckout__label " for="litecheckout_b_fullname">Họ tên</label>
                                        </div>
                                        <div
                                            class="litecheckout__field cm-field-container litecheckout__field--small litecheckout__field--input"
                                            data-ca-error-message-target-method="append">
                                            <input class="litecheckout__input billing-phone cm-mask-phone disabled"
                                                   placeholder=" " id="litecheckout_b_phone" type="tel"
                                                   name="user_data[b_phone]" value=""
                                                   data-ca-lite-checkout-field="user_data.b_phone"
                                                   data-ca-lite-checkout-auto-save="true" autocomplete=""
                                                   aria-label="Điện thoại" title="Điện thoại" disabled="disabled">
                                            <label class="litecheckout__label  cm-mask-phone-label"
                                                   for="litecheckout_b_phone">Điện thoại</label>
                                        </div>
                                        <div
                                            class="litecheckout__field cm-field-container litecheckout__field--small litecheckout__field--input"
                                            data-ca-error-message-target-method="append">
                                            <input class="litecheckout__input billing-address disabled" placeholder=" "
                                                   id="litecheckout_b_address" type="text" name="user_data[b_address]"
                                                   value="" data-ca-lite-checkout-field="user_data.b_address"
                                                   data-ca-lite-checkout-auto-save="true" autocomplete=""
                                                   aria-label="Số nhà/đường phố/thôn xã" title="Số nhà/đường phố/thôn xã"
                                                   disabled="disabled">
                                            <label class="litecheckout__label " for="litecheckout_b_address">Số nhà/đường
                                                phố/thôn xã</label>
                                        </div>
                                        <div
                                            class="litecheckout__field cm-field-container litecheckout__field--small litecheckout__field--input"
                                            data-ca-error-message-target-method="append">
                                            <input class="litecheckout__input billing-zip-code disabled" placeholder=" "
                                                   id="litecheckout_b_zipcode" type="text" name="user_data[b_zipcode]"
                                                   value="700000" data-ca-lite-checkout-field="user_data.b_zipcode"
                                                   data-ca-lite-checkout-auto-save="true" autocomplete=""
                                                   aria-label="Mã Zip/bưu điện" title="Mã Zip/bưu điện" disabled="disabled">
                                            <label class="litecheckout__label " for="litecheckout_b_zipcode">Mã Zip/bưu
                                                điện</label>
                                        </div>
                                        <div
                                            class="litecheckout__field cm-field-container litecheckout__field--small litecheckout__field--input"
                                            data-ca-error-message-target-method="append">
                                            <input class="litecheckout__input billing-city disabled" placeholder=" "
                                                   id="litecheckout_b_city" type="text" name="user_data[b_city]"
                                                   value="TP. Hồ Chí Minh" data-ca-lite-checkout-field="user_data.b_city"
                                                   data-ca-lite-checkout-auto-save="true" autocomplete=""
                                                   aria-label="Thành phố" title="Thành phố" disabled="disabled">
                                            <label class="litecheckout__label " for="litecheckout_b_city">Thành phố</label>
                                        </div>
                                        <div
                                            class="litecheckout__field cm-field-container litecheckout__field--small litecheckout__field--state"
                                            data-ca-error-message-target-method="append">
                                            <input x-autocompletetype="state" type="text" id="litecheckout_b_state_d"
                                                   name="user_data[b_state]" size="32" maxlength="64" value="HCM"
                                                   disabled=""
                                                   class="cm-state cm-location-billing ty-input-text litecheckout__input hidden disabled cm-skip-avail-switch"
                                                   data-ca-lite-checkout-field="user_data.b_state"
                                                   data-ca-lite-checkout-auto-save-on-change="true">
                                            <label class="litecheckout__label " for="litecheckout_b_state">Tỉnh/TP</label>
                                        </div>
                                        <div
                                            class="litecheckout__field cm-field-container litecheckout__field--small litecheckout__field--country"
                                            data-ca-error-message-target-method="append">
                                            <select x-autocompletetype="country" id="litecheckout_b_country"
                                                    class="ty-profile-field__select-country cm-country litecheckout__input litecheckout__input--selectable litecheckout__input--selectable--select cm-location-billing  billing-country disabled"
                                                    data-ca-lite-checkout-field="user_data.b_country"
                                                    data-ca-lite-checkout-auto-save-on-change="true" aria-label="Quốc gia"
                                                    title="Quốc gia" disabled="disabled" name="user_data[b_country]">
                                                <option value="">- Chọn quốc gia -</option>
                                                <option selected="selected" value="VN">Việt Nam</option>
                                            </select>
                                            <label class="litecheckout__label " for="litecheckout_b_country">Quốc
                                                gia</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="litecheckout__group litecheckout__submit-order" id="litecheckout_final_section">
                                <div class="clearfix ">
                                </div>
                                <input type="hidden" name="update_steps" value="1">
                                <div class="litecheckout__item litecheckout__item--full litecheckout__submit-order">
                                    <button class="litecheckout__submit-btn " type="submit"
                                            name="dispatch[checkout.place_order]" id="litecheckout_place_order">
                                        Đặt hàng (
                                        <bdi><span>{{ current_price($quotes['quotes']->total) }}</span>&nbsp;đ</bdi>
                                        )
                                        <!--litecheckout_place_order-->
                                    </button>
                                </div>
                            </div>
                            <!--litecheckout_payments_form-->
                        </form>
                    </div>
                    <!--litecheckout_form-->
                </div>
            </div>
            <div class="span4 side-grid vs-checkout-side">
                <div class="vs-sidebox clearfix ty-sidebox order-products">
                    <h2 class="vs-sidebox-title clearfix">
                        <span>Sản phẩm đặt mua</span>
                        <span class="vs-title-toggle cm-combination visible-phone visible-tablet" id="sw_sidebox_33">
            <i class="ty-sidebox__icon-open ty-icon-down-open"></i>
            <i class="ty-sidebox__icon-hide ty-icon-up-open"></i>
            </span>
                    </h2>
                    <div class="vs-sidebox-body vs-toggle-body clearfix" id="sidebox_33">
                        <div id="checkout_info_products_2394">
                            <ul class="order-product-list">
                                @foreach($quotes['items'] as $item)
                                <li class="clearfix">
                                    <bdi><a class="product-image animate scale ty-float-left ty-order-products__a"
                                            href="#">
                                            <img class="ty-pict  primary active    cm-image" id="det_img_2139788150"
                                                 src="{{ load_avt($item->product_id) }}" style=""
                                                 data-src="" alt="{{ $item->product_name }}"
                                                 title="{{ $item->product_name }}">
                                        </a></bdi>
                                    <div class="ty-float-left vs-order-product-details">
                                        <div class="vs-order-product-name"><a
                                                href="#"
                                                class="product-name litecheckout__order-products-p">{{ $item->product_name }}</a>
                                            <a data-ca-dispatch="delete_cart_item"
                                               href="{{ route('att.remove.item', [$quotes['quotes']->id, $item->id]) }}"
                                               class="ty-order-products__item-delete delete"
                                               data-ca-target-id="cart_status*"><i title="Loại bỏ"
                                                                                   class="vs-icon-delete"></i></a>
                                        </div>
                                        <div class="ty-order-products__price">
                                            {{ $item->amount }}&nbsp;x&nbsp;<bdi><span>{{ current_price($item->price) }}</span>&nbsp;đ</bdi>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="vs-sidebox clearfix ty-sidebox order-summary">
                    <h2 class="vs-sidebox-title clearfix">
                        <span>Đơn hàng</span>
                        <span class="vs-title-toggle cm-combination visible-phone visible-tablet" id="sw_sidebox_32">
            <i class="ty-sidebox__icon-open ty-icon-down-open"></i>
            <i class="ty-sidebox__icon-hide ty-icon-up-open"></i>
            </span>
                    </h2>
                    <div class="vs-sidebox-body vs-toggle-body clearfix" id="sidebox_32">
                        <div class="ty-checkout-summary" id="checkout_info_summary_2395">
                            <table class="ty-checkout-summary__block">
                                <tbody>
                                <tr>
                                    <td class="ty-checkout-summary__item">1 SP</td>
                                    <td class="ty-checkout-summary__item ty-right" data-ct-checkout-summary="items">
                                        <span><bdi><span>{{ current_price($quotes['quotes']->total) }}</span>&nbsp;đ</bdi></span>
                                    </td>
                                </tr>
                                @if($quotes['quotes']->discount)
                                <tr class="ty-checkout-summary__order_discount">
                                    <td class="ty-checkout-summary__item">Đơn hàng giảm giá</td>
                                    <td class="ty-checkout-summary__item ty-right discount-price"
                                        data-ct-checkout-summary="order-discount">
                                        <span>-<bdi><span>{{ current_price($quotes['quotes']->discount) }}</span>&nbsp;đ</bdi></span>
                                    </td>
                                </tr>
                                @endif
                                <tr>
                                    <td colspan="2" class="ty-checkout-summary__item">
                                        <div>
                                            <form class="cm-ajax cm-ajax-force cm-ajax-full-render cm-processed-form"
                                                  name="coupon_code_form" action="#" method="post">
                                                <input type="hidden" name="result_ids"
                                                       value="checkout*,cart_status*,cart_items,payment-methods,litecheckout_form">
                                                <input type="hidden" name="redirect_url"
                                                       value="index.php?payment_id=6&amp;dispatch=checkout.checkout">
                                                <div
                                                    class="ty-gift-certificate-coupon ty-discount-coupon__control-group ty-input-append">
                                                    <label for="coupon_field" class="hidden cm-required">Mã giảm giá</label>
                                                    <input type="text" class="ty-input-text cm-hint" id="coupon_field"
                                                           name="hint_coupon_code" size="40"
                                                           value="Thẻ quà tặng/ mã giảm giá">
                                                    <button title="Áp dụng" class="ty-btn-go" type="submit">Áp dụng</button>
                                                    <input type="hidden" name="dispatch" value="checkout.apply_coupon">
                                                </div>
                                            </form>
                                        </div>
                                        <ul class="ty-coupons__list ty-discount-info">
                                            <li class="ty-caret-info"><span class="ty-caret-outer"></span><span
                                                    class="ty-caret-inner"></span></li>
                                            <li class="ty-coupons__item">
                                                <div id="applied_promotions">
                                                    <span class="ty-strong">Khuyến mãi</span>
                                                    <ul>
                                                        <li>
                                                            <a id="sw_promo_description_61"
                                                               class="cm-combination ty-dashed-link">Giảm giá 20% cho đơn
                                                                hàng từ 10.000.000 đ</a>
                                                            <div id="promo_description_61"
                                                                 class="ty-wysiwyg-content hidden">
                                                                <p>Hệ thống sẽ tự động
                                                                    giảm giá ở bước Thanh toán, nếu Giỏ hàng của Quý khách
                                                                    bằng hoặc lớn hơn 10.000.000 đ
                                                                </p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <!--applied_promotions-->
                                                </div>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                </tbody>
                                <tbody>
                                <tr>
                                    <th class="ty-checkout-summary__total" colspan="2"
                                        data-ct-checkout-summary="order-total">
                                        <div>
                                            Tổng cộng
                                            <span class="ty-checkout-summary__total-sum"><bdi><span>{{ current_price($quotes['quotes']->total) }}</span>&nbsp;đ</bdi></span>
                                        </div>
                                    </th>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="center ty-banner__image-wrapper">
                    <img class="ty-pict cm-image" id="det_img_239296125"
                         src="https://ibie.vn/images/promo/32/ttonline-m.png" alt="" title="">
                    <noscript><img class="   cm-image" src="https://ibie.vn/images/promo/32/ttonline-m.png" width="290"
                                   height="400" alt="" title=""/></noscript>
                </div>
            </div>
        </div>
    </div>
    @include('frontend.layouts.js')
{{--    <link href="https://sandbox.vnpayment.vn/paymentv2/lib/vnpay/vnpay.css" rel="stylesheet"/>--}}
{{--    <script src="https://sandbox.vnpayment.vn/paymentv2/lib/vnpay/vnpay.js"></script>--}}
    <script type="text/javascript">
{{--        $("#btnPopup").click(function () {--}}
{{--            var postData = $("#create_form").serialize();--}}
{{--            var submitUrl = $("#create_form").attr("action");--}}
{{--            $.ajax({--}}
{{--                type: "POST",--}}
{{--                url: submitUrl,--}}
{{--                data: postData,--}}
{{--                dataType: 'JSON',--}}
{{--                success: function (x) {--}}
{{--                    if (x.code === '00') {--}}
{{--                        if (window.vnpay) {--}}
{{--                            vnpay.open({width: 768, height: 600, url: x.data});--}}
{{--                        } else {--}}
{{--                            location.href = x.data;--}}
{{--                        }--}}
{{--                        return false;--}}
{{--                    } else {--}}
{{--                        alert(x.Message);--}}
{{--                    }--}}
{{--                }--}}
{{--            });--}}
{{--            return false;--}}
{{--        });--}}
        function openTab(value) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById('payment' + value).style.display = "block";
            // evt.currentTarget.className += " active";
        }
    </script>

@endsection
