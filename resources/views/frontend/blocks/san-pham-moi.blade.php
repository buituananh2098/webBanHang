@if(isset($blockNewProducts) && !empty($blockNewProducts))
<div class="row">
    <div class="span16 vs-full-width">
        <div class="row">
            <div class="span16 space-bottom">
                <div class="vs-scroller-container clearfix">
                    <h2 class="vs-mainbox-title clearfix">
                        <i class="vs-icon-justify"></i><span>SẢN PHẨM MỚI</span>
                    </h2>
                    <div class="vs-mainbox-body clearfix">
                        <div id="scroll_list_72" class="owl-carousel">
                            @foreach($blockNewProducts as $item)
                            <div class="jscroll-item vs-grid">
                                <div class="ty-center scroll-image animate carousel-scroll-animations">
                                    <div class="thumb-discount-label"><span>-35%</span></div>
                                    <a href="#san-pham/ghe-an-columbia/" class="vs-image-auto-scroller">
                                        @foreach(load_image($item->id) as $key => $imgPath)
                                            @if($key == 0)
                                        <img class="ty-pict  primary active  lazyOwl  vs_lazy_mobile cm-image"
                                             src="{{ $imgPath->path }}"
                                             width="100%"
                                             data-src="{{ $imgPath->path }}"
                                             alt="{{ $item->code }}" title="{{ $item->name }}"/>
                                            @else
                                        <img class="ty-pict  additional   vs_lazy_additional cm-image"
                                             src="{{ $imgPath->path }}"
                                             data-src="{{ $imgPath->path }}"
                                             width="100%"
                                             alt="{{ $item->code }}" title="{{ $item->name }}"/>
                                        <noscript><img class=" additional  cm-image"
                                                       src="{{ $imgPath->path }}"
                                                       width="386" height="386" alt="{{ $item->code }}" title="{{ $item->name }}"/></noscript>
                                            @endif
                                        @endforeach
                                    </a>
                                </div>
                                <div class="center compact">
                                    <div class="product-container clearfix">
                                        <form action="#" method="post" name="product_form_{{ $item->code }}"
                                              enctype="multipart/form-data"
                                              class="cm-disable-empty-files  cm-ajax cm-ajax-full-render cm-ajax-status-middle ">
                                            <input type="hidden" name="result_ids"
                                                   value="cart_status*,wish_list*,checkout*,account_info*"/>
                                            <input type="hidden" name="product_data[{{$item->id}}]"
                                                   value="{{ $item->id }}"/>
                                            <div class="title-wrapper">
                                                <div class="title-wrapper-inner">
                                                    <bdi>
                                                        <a href="#{{ $item->code }}" class="product-title"
                                                           title="{{ $item->name }}">{{ $item->name }}</a>
                                                    </bdi>
                                                </div>
                                            </div>
                                            <div class="price-wrapper ">
                                                <div class="prices-container clearfix">
                                                    <div class="clearfix product-prices">
                                                        <div class="ty-float-left">
                                                            <span
                                                                class="cm-reload-{{ $item->id }} ty-price-update"
                                                                id="price_update_{{ $item->id }}">
                                                                <span class="ty-price"
                                                                      id="line_discounted_price_{{ $item->id }}"><bdi><span
                                                                            id="sec_discounted_price_{{ $item->id }}"
                                                                            class="ty-price-num">{{ current_price($item->cost) }}</span>&nbsp;<span
                                                                            class="ty-price-num">đ</span></bdi></span>
                                                            </span>
                                                            <br/>
                                                        </div>
                                                        <div class="ty-float-right">
                                                            <span
                                                                class="cm-reload-{{ $item->id }}"
                                                                id="old_price_update_{{ $item->id }}">
                                                                <span
                                                                    class="ty-list-price ty-nowrap"
                                                                    id="line_list_price_{{ $item->id }}"><span
                                                                        class="ty-strike"><bdi><span
                                                                                id="sec_list_price_{{ $item->id }}"
                                                                                class="ty-list-price ty-nowrap">4.140.000</span>&nbsp;<span
                                                                                class="ty-list-price ty-nowrap">đ</span></bdi></span></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="rating-buttons clearfix">
                                                <div class="ty-float-left vs-rating">
                                                    <p class="nowrap stars">
                                                        <a href="#">
                                                            <i class="ty-icon-star"></i><i class="ty-icon-star"></i><i
                                                                class="ty-icon-star"></i><i class="ty-icon-star"></i><i
                                                                class="ty-icon-star"></i></a>
                                                    </p>
                                                </div>
                                                <div class="ty-float-right vs-buttons clearfix">
                                                    <a class="cm-tooltip vs-quick-view vs-button cm-dialog-opener cm-dialog-auto-size"
                                                       title="Xem nhanh" data-ca-view-id="10679"
                                                       data-ca-target-id="product_quick_view"
                                                       href="#"
                                                       data-ca-dialog-title="Xem nhanh sản phẩm" rel="nofollow">
                                                        <i class="vs-icon-quick-view"></i>
                                                    </a>
                                                    <div class="cm-reload-{{ $item->id }} ty-float-left clearfix "
                                                         id="add_to_cart_update_{{ $item->id }}">
                                                        <input type="hidden" name="appearance[show_add_to_cart]"
                                                               value="1"/>
                                                        <input type="hidden" name="appearance[show_list_buttons]"
                                                               value="1"/>
                                                        <input type="hidden" name="appearance[but_role]"
                                                               value="action"/>
                                                        <input type="hidden" name="appearance[quick_view]" value=""/>
                                                        <div id="cart_buttons_block_{{ $item->id }}"
                                                             class="add-buttons add-to-wish clearfix ty-float-left">
                                                            <a
                                                                class="cm-tooltip vs-button vs-add-to-wishlist cm-submit"
                                                                id="button_wishlist_{{ $item->id }}"
                                                                data-ca-dispatch="dispatch[{{ $item->id }}]"
                                                                title="Thêm vào Yêu thích">
                                                                <i class="vs-icon-wishlist"></i>
                                                            </a>
{{--                                                            <a--}}
{{--                                                                class="cm-tooltip vs-button vs-add-to-compare ty-add-to-compare cm-ajax cm-ajax-full-render"--}}
{{--                                                                href="#"--}}
{{--                                                                rel="nofollow"--}}
{{--                                                                data-ca-target-id="comparison_list,account_info*"--}}
{{--                                                                title="Thêm vào So sánh">--}}
{{--                                                                <i class="vs-icon-compare"></i>--}}
{{--                                                            </a>--}}
                                                        </div>
                                                        <div class="ty-float-left"
                                                             id="cart_add_block_{{ $item->id }}">
                                                            <a class="cm-tooltip vs-button vs-add-to-cart cm-submit"
                                                                id="button_cart_{{ $item->id }}"
                                                                data-action-cart="add_to_cart"
                                                                data-ca-dispatch="dispatch[checkout.add.{{ $item->id }}]"
                                                                title="Mua ngay">
                                                                <i class="vs-icon-grid-add-to-cart"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <!-- Inline script moved to the bottom of the page -->
                        <!-- Inline script moved to the bottom of the page -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
