@if(isset($quotes['quotes']) && !empty($quotes['quotes']) && isset($quotes['items']) && !empty($quotes['items']))
<div class="top-cart-content float-right ty-float-right">
    <div class="ty-dropdown-box" id="cart_status_2147">
        <a href="{{ route('att.basket') }}" id="sw_dropdown_2147" class="ty-dropdown-box__title cm-combination">
            <span class="minicart-title empty-cart hand">Giỏ hàng</span>
            <span class="cart-content">{{ $quotes['quotes']->quote_number }}&nbsp;SP<span class="vs-cart-price">&nbsp;-&nbsp;<bdi><span>{{ current_price($quotes['quotes']->total) }}</span>&nbsp;đ</bdi></span></span><i class="vs-icon-grid-add-to-cart"></i>
            <div class="vs-cart-content hidden-desktop"><span>0</span></div>
        </a>
        <div id="dropdown_2147" class="cm-popup-box ty-dropdown-box__content hidden">
            <i class="ty-icon-up-dir"></i>
            <div class="cm-cart-content cm-cart-content-thumb cm-cart-content-delete">
                <div class="ty-cart-items" id="att_cart_items">
                        <ul class="ty-cart-items__list">
                        @foreach($quotes['items'] as $item)
                                <li class="ty-cart-items__list-item clearfix">
                                <div class="ty-cart-items__list-item-image">
                                    <a href="#" class="vs-cart-product-image">
                                        <img class="ty-pict cm-image" src="{{ load_avt($item->product_id) }}"
                                             style="" data-src="" alt="{{ $item->product_name }}"
                                             title="{{ $item->product_name }}">
                                    </a>
                                </div>
                                <div class="ty-cart-items__list-item-desc">
                                    <a href="#" class="vs-cart-product-title">{{ $item->product_name }}</a>
                                    <p class="vs-cart-product-qty">
                                        <span>{{ $item->amount }}</span><span>&nbsp;x&nbsp;</span><bdi><span id="sec_price_1441395505_2147" class="top-cart-price">{{ current_price($item->price) }}</span>&nbsp;<span class="top-cart-price">đ</span></bdi>
                                    </p>
                                </div>
                                <div class="ty-cart-items__list-item-tools cm-cart-item-delete">
                                </div>
                            </li>
                            @endforeach
                        </ul>
                </div>
                <div class="cm-cart-buttons ty-cart-content__buttons buttons-container">
                    <div class="ty-float-left view-cart-button">
                        <a href="{{ route('att.basket') }}" rel="nofollow" class="view-cart">Xem giỏ hàng</a>
                    </div>
                    <div class="ty-float-right">
                        <a href="{{ route('att.checkout') }}" rel="nofollow" class="ty-btn ty-btn__primary">Thanh toán</a>
                    </div>
                </div>
            </div>
        </div>
        <!--cart_status_2147-->
    </div>
</div>
@else
    <div class="top-cart-content float-right ty-float-right">
        <div class="ty-dropdown-box" id="cart_status_2147">
            <a href="{{ route('att.basket') }}" id="sw_dropdown_2147" class="ty-dropdown-box__title cm-combination">
                <span class="minicart-title empty-cart hand">Giỏ hàng</span>
                <span class="cart-content">0&nbsp;SP<span class="vs-cart-price">&nbsp;-&nbsp;<bdi><span>0</span>&nbsp;đ</bdi></span></span><i class="vs-icon-grid-add-to-cart"></i>
                <div class="vs-cart-content hidden-desktop"><span>0</span></div>
            </a>
            <div id="dropdown_2147" class="cm-popup-box ty-dropdown-box__content hidden">
                <i class="ty-icon-up-dir"></i>
                <div class="cm-cart-content cm-cart-content-thumb cm-cart-content-delete">
                    <div class="ty-cart-items" id="att_cart_items">
                        <p class="ty-center vs-cart-empty-text">Giỏ hàng trống</p>
                    </div>
                </div>
            </div>
            <!--cart_status_2147-->
        </div>
    </div>
@endif
