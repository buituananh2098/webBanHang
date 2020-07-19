@extends('frontend.layouts.master')
@section('titlePage', 'Blog')
@section('css')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="span16 ">
                <div id="breadcrumbs_253">
                    <div class="ty-breadcrumbs clearfix">
                        <a href="https://ibie.vn/" class="ty-breadcrumbs__a">Nội thất</a><i
                            class="vs-icon-arrow-right"></i><span class="ty-breadcrumbs__current"><bdi>Blog</bdi></span>
                    </div>
                    <!--breadcrumbs_253-->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="span16 ">
                <div class="row">
                    <div class="span4 ">
                        <div class="ty-menu ty-menu-vertical cp-blog-menu">
                            @include('frontend.blocks.left-menu-blog')
                        </div>
                        <div class="cp-blog-archive__block">
                            <ul class="cp-blog-archive__list">
                                <li>
                                    <a href="https://ibie.vn/tap-chi/?blog_date=1561914000">Tháng bảy, 2019</a>
                                </li>
                                <hr>
                                <li>
                                    <a href="https://ibie.vn/tap-chi/?blog_date=1559322000">Tháng sáu, 2019</a>
                                </li>
                                <hr>
                                <li>
                                    <a href="https://ibie.vn/tap-chi/?blog_date=1556643600">Tháng năm, 2019</a>
                                </li>
                            </ul>
                        </div>
                        <div class="cp-blog-search__block">
                            <form action="https://ibie.vn/" name="cp_search_form" method="get"
                                  class="cm-processed-form">
                                <input type="text" placeholder="Tìm kiếm" name="hint_search" value=""
                                       id="search_input_2162" title=""
                                       class="input-medium cp-blog-search__input cm-hint">
                                <button title="Tìm kiếm" class="cp-search-magnifier" type="submit"><i
                                        class="ty-icon-cp-search"></i></button>
                                <input type="hidden" name="dispatch" value="cp_blog_categories.view">
                            </form>
                        </div>
                        <div class="cp-blog-subscribe__block">
                            <form action="https://ibie.vn/" method="post" name="cp_subscribe_form"
                                  class="cm-processed-form">
                                <input type="hidden" name="redirect_url"
                                       value="index.php?sef_rewrite=1&amp;dispatch=cp_blog_categories.view&amp;category_id=5">
                                <input type="hidden" name="newsletter_format" value="2">
                                <p><span>Đăng ký nhận bài viết mới nhất</span></p>
                                <div class="cp-input-append">
                                    <label class="cm-required cm-email hidden" for="subscr_email336">Email</label>
                                    <input type="text" name="hint_subscribe_email" id="subscr_email336" size="20"
                                           value="Nhập email của bạn" class="ty-input-text cm-hint">
                                    <button title="Đi" class="cp-btn-go" type="submit"><i
                                            class="cp-btn-go__icon ty-icon-right-dir"></i></button>
                                    <input type="hidden" name="dispatch" value="cp_blog.add_subscriber">
                                </div>
                            </form>
                            <div class="cp-blog-subscribe__rss">
                                <a href="https://ibie.vn/index.php?dispatch=cp_blog.rss"><i class="fa fa-rss"></i>&nbsp;Subscribe
                                    to RSS</a>
                            </div>
                        </div>
                        <div class="ty-blog-sidebox vs-blog-sidebar">
                            <ul class="ty-blog-sidebox__list">
                                <li class="ty-blog-sidebox__item clearfix">
                                    <div class="ty-blog__img-block ty-float-left">
                                        <a href="https://ibie.vn/xu-huong-mau-sac-nam-2019-la-gi-vi/">
                                            <img class="ty-pict      cm-image" id="det_img_109"
                                                 src="https://ibie.vn/images/thumbnails/52/38/blog/29/mau-sac-chu-dao-nam-2019.jpg"
                                                 style="" data-src="" alt="màu sắc của năm 2019"
                                                 title="màu sắc của năm 2019">
                                        </a>
                                    </div>
                                    <div class="ty-float-left vs-blog-text-wrapper">
                                        <a class="vs-blog-title"
                                           href="https://ibie.vn/xu-huong-mau-sac-nam-2019-la-gi-vi/">Xu hướng màu sắc
                                            năm 2019 là gì?</a>
                                        <div class="blog_sidebar_recent">
                                            <div class="ty-blog__date"><i class="ty-icon-calendar"></i> 31/05/2019</div>
                                            <div class="vs-comments">
                                                <i class="vs-icon-testimonial"></i> 0
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="ty-blog-sidebox__item clearfix">
                                    <div class="ty-blog__img-block ty-float-left">
                                        <a href="https://ibie.vn/can-bep-than-thien-voi-moi-truong/">
                                            <img class="ty-pict      cm-image" id="det_img_110"
                                                 src="https://ibie.vn/images/thumbnails/52/38/blog/29/lifestyle-can-bep-than-thien-moi-truong.png"
                                                 style="" data-src="" alt="thói quen sống lành mạnh"
                                                 title="thói quen sống lành mạnh">
                                        </a>
                                    </div>
                                    <div class="ty-float-left vs-blog-text-wrapper">
                                        <a class="vs-blog-title"
                                           href="https://ibie.vn/can-bep-than-thien-voi-moi-truong/">Căn bếp thân thiện
                                            với môi trường: Những thói quen sống lành mạnh bạn nên biết</a>
                                        <div class="blog_sidebar_recent">
                                            <div class="ty-blog__date"><i class="ty-icon-calendar"></i> 31/05/2019</div>
                                            <div class="vs-comments">
                                                <i class="vs-icon-testimonial"></i> 0
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="ty-blog-sidebox__item clearfix">
                                    <div class="ty-blog__img-block ty-float-left">
                                        <a href="https://ibie.vn/tim-hieu-ve-go-oc-cho/">
                                            <img class="ty-pict      cm-image" id="det_img_104"
                                                 src="https://ibie.vn/images/thumbnails/52/38/blog/29/go-oc-cho-walnut.png"
                                                 style="" data-src="" alt="tìm hiểu về gỗ óc chó"
                                                 title="tìm hiểu về gỗ óc chó">
                                        </a>
                                    </div>
                                    <div class="ty-float-left vs-blog-text-wrapper">
                                        <a class="vs-blog-title" href="https://ibie.vn/tim-hieu-ve-go-oc-cho/">Gỗ óc chó
                                            là gì? Ưu, nhược điểm của gỗ óc chó và ứng dụng trong sản xuất nội thất</a>
                                        <div class="blog_sidebar_recent">
                                            <div class="ty-blog__date"><i class="ty-icon-calendar"></i> 30/05/2019</div>
                                            <div class="vs-comments">
                                                <i class="vs-icon-testimonial"></i> 0
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="span12 ">
                        <div class="cp-blog__blog" itemscope="" itemtype="http://schema.org/Article">
                            <meta content="Lí Giải Đặc Trưng Của 14 Phong Cách Thiết Kế Nội Thất Phổ Biến"
                                  itemprop="name">
                            <div class="cp-blog__params">
                                <span><i class="fa fa-clock-o"></i>&nbsp;<span
                                            itemprop="dateCreated">{{ $blog[0] -> created_at }}</span></span>
                                <span><i
                                            class="fa fa-user"></i>&nbsp;<span
                                            itemprop="author">{{ $blog[0] -> author_blog }}</span></span>
                                <span>
                                       <i
                                                class="fa fa-list"></i>&nbsp;{{ $blog[0] -> name }}                  </span>
                                <span>
                             <a title="Regular article" href="https://ibie.vn/tap-chi/?type=R"><i
                                     class="fa fa-pencil"></i></a>                                                                                            </span>
                            </div>
                            <div class="post-divider">
                                <hr>
                            </div>
                        </div>
                        <div>
                            {!! $blog[0] -> content_blog !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


