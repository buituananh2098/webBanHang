@extends('frontend.layouts.master')
@section('titlePage', 'IBIE - Mua Đồ Nội Thất Và Trang Trí Trực Tuyến Uy Tín Giá Tốt')

@section('content')
<div class="container ">
  <div class="row">
    <div class="span16 ">
      <div id="breadcrumbs_58">
        <div class="ty-breadcrumbs clearfix">
          <span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb" class="no-padding"><a
            itemprop="url" href="https://ibie.vn/" class="ty-breadcrumbs__a"><span itemprop="title"
            class="no-padding">Nội thất</span></a></span><span
            class="ty-breadcrumbs__slash">/</span><span
            class="ty-breadcrumbs__current">Bán chạy nhất</span>
          </div>
          <!--breadcrumbs_58-->
        </div>
      </div>
    </div>
    <div class="row">
      <div class="span12 ">
        <div class="space-bottom ">
          <div class="center ty-banner__image-wrapper">
            <a href="https://ibie.vn/"> <img class="ty-pict cm-image" id="det_img_469434740"
             src="https://ibie.vn/images/promo/21/viva_skin_bestseller-banner.jpg"
             alt=""
             title="">
             <noscript><img class="   cm-image"
               src="https://ibie.vn/images/promo/21/viva_skin_bestseller-banner.jpg"
               width="894"
               height="122" alt="" title=""/></noscript>
             </a>
           </div>
         </div>
         <div class="vs-mainbox-general clearfix">
          <h1 class="vs-mainbox-title clearfix">
            <span> <span>Sản phẩm mới  nhất</span>
          </span>
        </h1>
        <div class="vs-mainbox-body clearfix">
          <div id="bestsellers_search_11">
            <div class="ty-pagination-container cm-pagination-container" id="pagination_contents">
              <div><a data-ca-scroll=".cm-pagination-container" href="" data-ca-page=""
                data-ca-target-id="pagination_contents" class="hidden"></a></div>
                <div class="grid-list vs-grid-table-wrapper">
                  @foreach($Products as $product)
                  <div class="ty-column3" style="width: 33%;">
                    <div class="ty-grid-list__item ty-quick-view-button__wrapper">
                      <form action="#" method="post"
                      name="product_form_{{ $product -> code }}"
                      enctype="multipart/form-data"
                      class="cm-disable-empty-files cm-ajax cm-ajax-full-render cm-ajax-status-middle cm-processed-form">
                      <input type="hidden" name="result_ids"
                      value="cart_status*,wish_list*,checkout*,account_info*">
                      <input type="hidden" name="redirect_url"
                      value="index.php?sef_rewrite=1&amp;dispatch=products.bestsellers">
                      <input type="hidden" name="product_data[{{ $product -> id }}][{{ $product -> id }}]"
                      value="{{ $product -> id }}">
                      <div class="vs-grid vs-grid-table">
                        <div class="preview-image">
                          <div
                          class="ty-center scroll-image animate scale already-visible">
                          <span id="image_preview_update_2_249" class="ecl_sticker "
                          style="z-index: 9999;
                          right:0px;     bottom:1px;     transform: translate(0%,0%);
                          width: 65px;
                          position: absolute">
                          <img style="border-radius: 0px; max-width: 65px"
                          src="https://ibie.vn/images/promo/31/icon-ship-21.png">
                          <!--image_preview_update_2_249--></span>

                          <div class="thumb-discount-label">
                            <span>-35%</span>
                          </div>
                          <a href="#"
                          class="vs-image-auto-scroller">
                          <img class="ty-pict primary cm-image active"
                          id="det_img_249"
                          src="{{$product -> path}}"
                          alt="Bộ bàn ghế mầm non mẫu giáo bút chì"
                          title="Bộ bàn ghế mầm non mẫu giáo bút chì">
                          <img class="ty-pict additional cm-image"
                          id="det_img_249_2839"
                          src="https://ibie.vn/images/thumbnails/213/213/detailed/3/Bo-ban-ghe-mam-non-mau-giao-but-chi-hinh-chup.jpg"
                          style="margin-left: -106.5px;"
                          alt="Bộ bàn ghế mầm non mẫu giáo bút chì"
                          title="Bộ bàn ghế mầm non mẫu giáo bút chì">
                          <noscript><img
                            class=" additional  cm-image"
                            src="https://ibie.vn/images/thumbnails/213/213/detailed/3/Bo-ban-ghe-mam-non-mau-giao-but-chi-hinh-chup.jpg"
                            width="213" height="213"
                            alt="Bộ bàn ghế mầm non mẫu giáo bút chì"
                            title="Bộ bàn ghế mầm non mẫu giáo bút chì"/>
                          </noscript>

                        </a>
                      </div>
                    </div>
                    <div class="title-wrapper">
                      <div class="title-wrapper-inner">
                        <bdi>
                          <a href=""
                          class="product-title"
                          title="Bộ bàn ghế mầm non hình bút chì">{{$product->name}}</a>
                        </bdi>
                      </div>
                    </div>
                    <div class="price-wrapper ">
                      <div class="clearfix prices-container">
                        <div class="clearfix">
                          <div class="ty-float-left">
                            <span
                            class="cm-reload-249 ty-price-update"
                            id="price_update_{{ $product -> id }}">
                            <input type="hidden"
                            name="appearance[show_price_values]"
                            value="1">
                            <input type="hidden" name="appearance[show_price]"
                            value="1">

                            <span class="ty-price"
                            id="line_discounted_price_{{ $product -> id }}"><bdi><span
                              id="sec_discounted_price_{{ $product -> id }}"
                              class="ty-price-num">{{ $product -> cost }}</span>&nbsp;<span
                              class="ty-price-num">đ</span></bdi></span>

                            </span>
                            <br></div>
                            <div class="ty-float-right">
                              <span class="cm-reload-249"
                              id="old_price_update_249">

                              <span class="ty-list-price ty-nowrap"
                              id="line_list_price_249"><span
                              class="ty-strike"><bdi><span
                                id="sec_list_price_249"
                                class="ty-list-price ty-nowrap">{{ $product -> cost }}</span>&nbsp;
                                <span class="ty-list-price ty-nowrap">đ</span></bdi></span></span>

                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="product-description">
                        <div class="rating-buttons clearfix">
                          <div class="ty-float-left vs-rating">
                          </div>
                          <div class="ty-float-right vs-buttons clearfix">

                            <a class="cm-tooltip vs-quick-view vs-button cm-dialog-opener cm-dialog-auto-size"
                            title="Xem nhanh" data-ca-view-id="249"
                            data-ca-target-id="product_quick_view"
                            href="#"
                            data-ca-dialog-title="Xem nhanh sản phẩm"
                            rel="nofollow">
                            <i class="vs-icon-quick-view"></i>
                          </a>
                          <div class="cm-reload-{{ $product->id }} ty-float-left clearfix "
                           id="add_to_cart_update_{{ $product->id }}">
                           <input type="hidden"
                           name="appearance[show_add_to_cart]"
                           value="1">
                           <input type="hidden"
                           name="appearance[show_list_buttons]"
                           value="1">
                           <input type="hidden" name="appearance[but_role]"
                           value="action">
                           <input type="hidden"
                           name="appearance[quick_view]"
                           value="">

                           <div id="cart_buttons_block_{{ $product->id }}"
                             class="add-buttons add-to-wish clearfix ty-float-left">

                             <a class="cm-tooltip vs-button vs-add-to-wishlist cm-submit"
                             id="button_wishlist_{{ $product->id }}"
                             data-ca-dispatch="dispatch[wishlist.add..{{ $product->id }}]"
                             title="Thêm vào Yêu thích">
                             <i class="vs-icon-wishlist"></i>
                           </a>


                           <a class="cm-tooltip vs-button vs-add-to-compare ty-add-to-compare cm-ajax cm-ajax-full-render"
                           href="#"
                           rel="nofollow"
                           data-ca-target-id="comparison_list,account_info*"
                           title="Thêm vào So sánh">
                           <i class="vs-icon-compare"></i>
                         </a>
                       </div>
                       <div class="ty-float-left"
                       id="cart_add_block_{{ $product->id }}">
                       <a class="cm-tooltip vs-button vs-add-to-cart cm-submit"
                       id="button_cart_{{ $product->id }}"
                       data-ca-dispatch="dispatch[checkout.add.{{ $product->id }}]"
                       title="Mua ngay">
                       <i class="vs-icon-grid-add-to-cart"></i>
                     </a>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </form>
     </div>
   </div>
   @endforeach
 </div>
 <style>
  .pagination{
    float: right;
  }
  .pagination li {
    float: left;
    padding: 5px 10px 5px 10px;
    margin: 2px;
    border:1px solid #bbb;
  }
  .pagination li:hover{
    background: #cc4125;
    color: #ffffff !important;
  }
  .pagination li a:hover{
    color: #ffffff !important;
  }
  .pagination li.active{
    background: #cc4125;
    border-color: #cc4125;
    color: #fff;
  }
</style>
<br>
{{ $Products->links() }}
{{--                                {{ $newProducts->render('frontend.blocks.paging') }}--}}
{{--                                <div class="ty-pagination__bottom">--}}
  {{--                                    <div class="ty-pagination vs-pagination">--}}
    {{--                                        <a data-ca-scroll=".cm-pagination-container"--}}
    {{--                                           class="ty-pagination__item ty-pagination__btn "><i--}}
    {{--                                                class="vs-icon-arrow-left"></i></a>--}}

    {{--                                        <div class="ty-pagination__items">--}}
      {{--                                            <span class="ty-pagination__selected">1</span>--}}
      {{--                                            <a data-ca-scroll=".cm-pagination-container"--}}
      {{--                                               href="https://ibie.vn/san-pham-ban-chay/page-2/?sef_rewrite=1"--}}
      {{--                                               data-ca-page="2" class="cm-history ty-pagination__item cm-ajax"--}}
      {{--                                               data-ca-target-id="pagination_contents">2</a>--}}
      {{--                                            <a data-ca-scroll=".cm-pagination-container"--}}
      {{--                                               href="https://ibie.vn/san-pham-ban-chay/page-3/?sef_rewrite=1"--}}
      {{--                                               data-ca-page="3" class="cm-history ty-pagination__item cm-ajax"--}}
      {{--                                               data-ca-target-id="pagination_contents">3</a>--}}
      {{--                                            <a data-ca-scroll=".cm-pagination-container"--}}
      {{--                                               href="https://ibie.vn/san-pham-ban-chay/page-4/?sef_rewrite=1"--}}
      {{--                                               data-ca-page="4" class="cm-history ty-pagination__item cm-ajax"--}}
      {{--                                               data-ca-target-id="pagination_contents">4</a>--}}
      {{--                                            <a data-ca-scroll=".cm-pagination-container"--}}
      {{--                                               href="https://ibie.vn/san-pham-ban-chay/page-5/?sef_rewrite=1"--}}
      {{--                                               data-ca-page="5" class="cm-history ty-pagination__item cm-ajax"--}}
      {{--                                               data-ca-target-id="pagination_contents">5</a>--}}
      {{--                                            <a data-ca-scroll=".cm-pagination-container"--}}
      {{--                                               href="https://ibie.vn/san-pham-ban-chay/page-6/?sef_rewrite=1"--}}
      {{--                                               data-ca-page="6" class="cm-history ty-pagination__item cm-ajax"--}}
      {{--                                               data-ca-target-id="pagination_contents">6</a>--}}
    {{--                                        </div>--}}

    {{--                                        <a data-ca-scroll=".cm-pagination-container"--}}
    {{--                                           class="ty-pagination__item ty-pagination__btn ty-pagination__next cm-history cm-ajax"--}}
    {{--                                           href="https://ibie.vn/san-pham-ban-chay/page-2/?sef_rewrite=1"--}}
    {{--                                           data-ca-page="2"--}}
    {{--                                           data-ca-target-id="pagination_contents"><i--}}
    {{--                                                class="vs-icon-arrow-right"></i></a>--}}

    {{--                                        <a data-ca-scroll=".cm-pagination-container"--}}
    {{--                                           href="https://ibie.vn/san-pham-ban-chay/page-9/?sef_rewrite=1"--}}
    {{--                                           data-ca-page="9"--}}
    {{--                                           class="cm-history ty-pagination__item hidden-phone ty-pagination__range cm-ajax"--}}
    {{--                                           data-ca-target-id="pagination_contents">2 - 16</a>--}}
  {{--                                    </div>--}}
{{--                                </div>--}}

<!--pagination_contents-->
</div>


<!--bestsellers_search_11-->
</div>
</div>
</div>
</div>

<div class="span4 ">
  <div class="vs-sidebox clearfix animate scale vs-sidebox-icon already-visible">
    <h2 class="vs-sidebox-title clearfix">
      <i class="vs-icon-justify"></i><span class="vs-sidebox-name">Bình chọn nhiều nhất</span>

      <span class="vs-title-toggle cm-combination visible-phone visible-tablet" id="sw_sidebox_106">
        <i class="ty-sidebox__icon-open ty-icon-down-open"></i>
        <i class="ty-sidebox__icon-hide ty-icon-up-open"></i>
      </span>

    </h2>
    <div class="vs-sidebox-body vs-toggle-body clearfix" id="sidebox_106">


      <ul class="template-small-item">
        @foreach($Products as $product)
        <li class="clearfix">
          <form action="#" method="post" name="product_form_{{ $product->code }}"
            enctype="multipart/form-data"
            class="cm-disable-empty-files cm-ajax cm-ajax-full-render cm-ajax-status-middle cm-processed-form">
            <input type="hidden" name="result_ids"
            value="cart_status*,wish_list*,checkout*,account_info*">
            <input type="hidden" name="redirect_url"
            value="index.php?sef_rewrite=1&amp;dispatch=products.bestsellers">
            <input type="hidden" name="product_data[257][product_id]" value="{{ $product->code }}">

            <div class="item-image product-item-image animate scale already-visible">
              <div class="thumb-discount-label"><span>-35%</span></div>

              <a href="https://ibie.vn/san-pham/giuong-tang-cao-cong-chua/"><img
                class="ty-pict cm-image"
                src="https://ibie.vn/images/thumbnails/60/60/detailed/16/Giường-tầng-Công-chúa-cho-bé-gái_0.jpg"
                alt="{{$product->name}}"
                title="{{$product->name}}">

              </a>
            </div>
            <div class="item-description">
              <bdi>
                <a href="https://ibie.vn/san-pham/giuong-tang-cao-cong-chua/"
                class="product-title" title="{{$product->name}}">
                {{$product->name}}
              </a>

            </bdi>

            <div class="rating-wrapper">
              <p class="nowrap stars">
                <a
                href="https://ibie.vn/san-pham/giuong-tang-cao-cong-chua/?selected_section=discussion#discussion">
                <i class="ty-icon-star"></i>
                <i class="ty-icon-star"></i>
                <i class="ty-icon-star"></i>
                <i class="ty-icon-star"></i>
                <i class="ty-icon-star"></i>
              </a>
            </p>

          </div>
          <div>
            <span class="cm-reload-106000257 ty-price-update" id="price_update_106000257">
              <input type="hidden" name="appearance[show_price_values]" value="1">
              <input type="hidden" name="appearance[show_price]" value="1">

              <span class="ty-price" id="line_discounted_price_106000257"><bdi><span
                id="sec_discounted_price_106000257"
                class="ty-price-num">{{ $product->cost }}</span>&nbsp;<span
                class="ty-price-num">đ</span></bdi></span>
              </span>
              <span class="cm-reload-106000257" id="old_price_update_106000257">

                <span class="ty-list-price ty-nowrap" id="line_list_price_106000257"><span
                  class="ty-strike"><bdi><span id="sec_list_price_106000257"
                   class="ty-list-price ty-nowrap">{{ $product->cost }}</span>&nbsp;<span
                   class="ty-list-price ty-nowrap">đ</span></bdi></span></span>
                 </span>

               </div>

             </div>
           </form>

         </li>
         @endforeach
       </ul>
     </div>
   </div>
   <div class="vs-sidebox clearfix">
    <h2 class="vs-sidebox-title">
      <span>Danh mục</span>
      <span class="vs-title-toggle cm-combination visible-phone visible-tablet" id="sw_sidebox_92">
        <i class="ty-sidebox__icon-open ty-icon-down-open"></i>
        <i class="ty-sidebox__icon-hide ty-icon-up-open"></i>
      </span>
    </h2>
    <div class="vs-toggle-body vs-sidebox-body vs-side-subcateg clearfix" id="sidebox_92">

      @foreach( $headerCate as $cate)
      <div class="item1-wrapper">
        <a href="{{$cate->slug}}" class="item1 ">
          {{$cate->name}}
        </a>
      </div>
      @endforeach
    </div>
  </div>
</div>
</div>
</div>
@endsection
