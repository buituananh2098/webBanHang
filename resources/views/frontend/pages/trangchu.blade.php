@extends('frontend.layouts.master')
@section('titlePage', 'IBIE - Mua Đồ Nội Thất Và Trang Trí Trực Tuyến Uy Tín Giá Tốt')
@section('css')
    <style>
        .section-4 img{
            width: auto;
        }
    </style>
    <link type="text/css" rel="stylesheet" href="{{ route('att.index') }}/assets/css/customStyle.css" />
@endsection
@section('content')
<div class="tygh-content clearfix">
    <div class="container content-grid">
        <div class="row">
            <div class="span16 vs-full-width" >
                @include('frontend.blocks.banner')
            </div>
        </div>
        <div class="row">
            <div class="span16 section-4" >
                @include('frontend.blocks.danh-muc-noi-bat')
            </div>
        </div>
        <div class="row">
            <div class="span16 vs-full-width space-bottom vs-home-mid-banners" >
                @include('frontend.blocks.san-pham-moi')
            </div>
        </div>
        <div class="row">
            <div class="span16 section-5" >
                @include('frontend.blocks.bo-suu-tap-moi')
            </div>
        </div>
        <div class="row">
            <div class="span16 section-8" >
                @include('frontend.blocks.danh-gia-khach-hang')
                @include('frontend.blocks.bo-suu-tap-noi-bat')
            </div>
        </div>
        <div class="row">
            <div class="span16 " >
                <div class="pb-20 ">
                    <div class="center ty-banner__image-wrapper">
                        <a href="#promotions/" >
                            <img class="ty-pict     vs_lazy_additional vs_lazy_mobile cm-image" id="det_img_2083834494"  src="./design/themes/vivashop/media/images/vs-empty.png" style="padding: 0 0 35.020746887967%; width: 1205px; height: 0 !important; opacity: .5;" data-src="att/images/promo/32/giamgia5.png"   alt="" title=""/>
                            <noscript><img class="   cm-image"   src="att/images/promo/32/giamgia5.png" width="1205" height="422"  alt="" title=""/></noscript>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="span16 section-7" >
                <div class="vs-mainbox-general clearfix">
                    <h2 class="vs-mainbox-title clearfix">
                        <i class="vs-icon-justify"></i><span>Chọn theo Chất liệu - Phong cách</span>
                    </h2>
                    <div class="vs-mainbox-body clearfix">
                        <div class="ty-wysiwyg-content"  data-ca-live-editor-object-id="0" data-ca-live-editor-object-type="">
                            <div class="custom-row cl-collect">
                                <div class="collect-content-3"><a href="#bo-suu-tap-go-soi-tu-nhien/">
                                        <img class="lazy" data-srcset="./images/companies/1/Layout/Res/BSTCL/GSTN1.jpg" src="./design/themes/vivashop/media/images/icons/ajax_loader.gif"/>
                                    </a> <a href="#bo-suu-tap-go-soi-tu-nhien/">Gỗ sồi tự nhiên</a>
                                </div>
                                <div class="collect-content-3"><a href="#bo-suu-tap-go-soi-son-mau/">
                                        <img  class="lazy" data-srcset="./images/companies/1/Layout/Res/BSTCL/GSSM1.jpg" src="./design/themes/vivashop/media/images/icons/ajax_loader.gif"/>
                                    </a> <a href="#bo-suu-tap-go-soi-son-mau/">Gỗ sồi Sơn màu</a>
                                </div>
                                <div class="collect-content-3"><a href="#bo-suu-tap-go-oc-cho-walnut/">
                                        <img class="lazy"  data-srcset="./images/companies/1/Layout/Res/BSTCL/BSTNTOC.jpg" src="./design/themes/vivashop/media/images/icons/ajax_loader.gif"/>
                                    </a> <a href="#bo-suu-tap-go-oc-cho-walnut/">Gỗ Óc Chó</a>
                                </div>
                                <div class="collect-content-2"><a href="#bo-suu-tap-vintage/">
                                        <img class="lazy"  data-srcset="./images/companies/1/Layout/Res/BSTCL/NTVT.jpg" src="./design/themes/vivashop/media/images/icons/ajax_loader.gif"/>
                                    </a> <a href="#bo-suu-tap-vintage/">Phong cách Vintage </a>
                                </div>
                                <div class="collect-content-2"><a href="#bo-suu-tap-han-quoc/">
                                        <img  class="lazy" data-srcset="./images/companies/1/Layout/Res/BSTCL/NTPCHQ.jpg" src="./design/themes/vivashop/media/images/icons/ajax_loader.gif"/>
                                    </a> <a href="#bo-suu-tap-han-quoc/"> Phong cách Hàn Quốc</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="span16 section-9" >
                <div class="ty-wysiwyg-content"  data-ca-live-editor-object-id="0" data-ca-live-editor-object-type="">
                    <div class="custom-row">
                        <div class="col-2">
                            <div class="col-banner-2"><img class="lazy" data-srcset="att/images/companies/1/Layout/banner/phattrien.jpg" src="" /></div>
                            <div class="col-banner-2"><img class="lazy" data-srcset="att/images/companies/1/Layout/banner/chatluong.jpg" src="" /></div>
                        </div>
                        <div class="col-2">
                            <div class="col-banner-2"><img class="lazy" data-srcset="att/images/companies/1/Layout/banner/tinhte2.jpg" src="" /></div>
                            <div class="col-banner-2"><img class="lazy" data-srcset="att/images/companies/1/Layout/banner/giaohang.jpg" src="" /></div>
                        </div>
                    </div>
                </div>
                <div class="vs-mainbox-general clearfix">
                    <h2 class="vs-mainbox-title clearfix">
                        <i class="vs-icon-justify"></i><span>Chọn Nội Thất Theo Phòng</span>
                    </h2>
                    <div class="vs-mainbox-body clearfix">
                        <div class="ty-wysiwyg-content"  data-ca-live-editor-object-id="0" data-ca-live-editor-object-type="">
                            <div class="custom-row cl-collect">
                                <div class="collect-content-3"><a href="#phong-lam-viec/"><img class="lazy" data-srcset="./images/companies/1/Layout/Res/Nttp/NTTPPLV.jpg" src="./design/themes/vivashop/media/images/icons/ajax_loader.gif" /> </a> <a href="#phong-lam-viec/">Phòng Làm Việc</a></div>
                                <div class="collect-content-3"><a href="#phong-khach/"><img class="lazy" data-srcset="./images/companies/1/Layout/Res/Nttp/PK.jpg" src="./design/themes/vivashop/media/images/icons/ajax_loader.gif" /> </a> <a href="#phong-khach/">Phòng Khách</a></div>
                                <div class="collect-content-3 "><a href="#phong-an/"><img class="lazy" data-srcset="./images/companies/1/Layout/Res/Nttp/NTTPA.jpg" src="./design/themes/vivashop/media/images/icons/ajax_loader.gif" /> </a> <a href="#phong-an/">Phòng Ăn</a></div>
                                <div class="collect-content-3 "><a href="#phong-ngu/"><img class="lazy" data-srcset="./images/companies/1/Layout/Res/Nttp/NTTPPN.jpg" src="./design/themes/vivashop/media/images/icons/ajax_loader.gif" /> </a> <a href="#phong-ngu/">Phòng Ngủ</a></div>
                                <div class="collect-content-3"><a href="#ban-cong-ngoai-troi/"><img class="lazy" data-srcset="./images/companies/1/Layout/Res/Nttp/NT.jpg" src="./design/themes/vivashop/media/images/icons/ajax_loader.gif" /> </a> <a href="#ban-cong-ngoai-troi/">Ban công - Ngoài Trời</a></div>
                                <div class="collect-content-3"><a href="#phong-tre-em/"><img class="lazy" data-srcset="./images/companies/1/Layout/Res/Nttp/TE.jpg" src="./design/themes/vivashop/media/images/icons/ajax_loader.gif" /> </a> <a href="#phong-tre-em/">Phòng Trẻ Em</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="span16 section-11" >
                <div class="row">
                    <div class="span16 section-10" >
                        <div class="ty-wysiwyg-content"  data-ca-live-editor-object-id="0" data-ca-live-editor-object-type="">
                            <div class="title-section">
                                <div class="title">
                                    <h3><a href="https://www.facebook.com/pg/ibie.vn/reviews/?ref=page_internal" style="text-decoration:none;" target="_blank">Đề xuất trên Facebook</a></h3>
                                </div>
                                <div class="rate-base"><a href="https://www.facebook.com/pg/ibie.vn/reviews/?ref=page_internal" target="_blank"><span> <i class="ty-icon-star"> </i> <i class="ty-icon-star"> </i> <i class="ty-icon-star"> </i> <i class="ty-icon-star"> </i> <i class="ty-icon-star-half"> </i> </span> </a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="span16 " >
                        <div class="ty-wysiwyg-content"  data-ca-live-editor-object-id="0" data-ca-live-editor-object-type="">
                            <div id="view-ad-image">
                                <div class="review-carou owl-carousel owl-theme">
                                    <div class="item"><a href="https://www.facebook.com/pg/ibie.vn/reviews/?ref=page_internal" target="_blank">
                                            <img src="att/images/promo/31/reviewkh1.jpg" /> </a>
                                    </div>
                                    <div class="item"><a href="https://www.facebook.com/pg/ibie.vn/reviews/?ref=page_internal" target="_blank">
                                            <img src="att/images/promo/31/reviewkh2.jpg" />
                                        </a>
                                    </div>
                                    <div class="item"><a href="https://www.facebook.com/pg/ibie.vn/reviews/?ref=page_internal" target="_blank">
                                            <img src="att/images/promo/31/review3.jpg" />
                                        </a>
                                    </div>
                                    <div class="item"><a href="https://www.facebook.com/pg/ibie.vn/reviews/?ref=page_internal" target="_blank">
                                            <img src="att/images/promo/31/review4.jpg" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="span16 " >
                <div class="vs-mainbox-general clearfix hp-box">
                    <h1 class="vs-mainbox-title clearfix">
                        <span>GIỚI THIỆU VỀ IBIE</span>
                    </h1>
                    <div class="vs-mainbox-body clearfix">
                        <div class="ty-wysiwyg-content"  data-ca-live-editor-object-id="0" data-ca-live-editor-object-type="">
                            <p>IBIE là công ty chuyên sản xuất, kinh doanh&nbsp;nội thất và đồ&nbsp;trang trí nhà cửa&nbsp;trên toàn quốc. Các sản phẩm của IBIE được thiết kế tinh tế, mẫu mã đa dạng, phù hợp với nhiều phong cách nội thất&nbsp;khác nhau. Đặc biệt, việc phân phối trực tiếp&nbsp;từ xưởng&nbsp;đến tận tay người tiêu dùng, bỏ qua các khâu trung gian phân phối&nbsp;đã giúp chúng tôi tiết kiệm được nhiều chi phí, từ đó làm giảm&nbsp;giá thành, giúp Khách hàng mua được đồ nội thất cao cấp với mức giá rẻ nhất. Ngoài ra, chúng tôi luôn nỗ lực&nbsp;cải thiện&nbsp;chất lượng phục vụ và&nbsp;tạo ra nhiều chương trình khuyến mãi hấp dẫn mỗi ngày, từ đó&nbsp;nâng cao trải nghiệm mua sắm của Quý khách trên IBIE.VN.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="span16 background-section-1" >
                @include('frontend.blocks.bai-viet-moi')
            </div>
        </div>
    </div>
</div>
@endsection
