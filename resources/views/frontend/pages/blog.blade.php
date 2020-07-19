@extends('frontend.layouts.master')
@section('titlePage', 'Blog')
@section('css')
    <style>
        #author {
            content: "\f017";
        }
    </style>
@endsection
@section('content')
    <div class="container ">
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
{{--                        <div class="cp-blog-archive__block">--}}
{{--                            <ul class="cp-blog-archive__list">--}}
{{--                                <li>--}}
{{--                                    <a href="https://ibie.vn/tap-chi/?blog_date=1561914000">Tháng bảy, 2019</a>--}}
{{--                                </li>--}}
{{--                                <hr>--}}
{{--                                <li>--}}
{{--                                    <a href="https://ibie.vn/tap-chi/?blog_date=1559322000">Tháng sáu, 2019</a>--}}
{{--                                </li>--}}
{{--                                <hr>--}}
{{--                                <li>--}}
{{--                                    <a href="https://ibie.vn/tap-chi/?blog_date=1556643600">Tháng năm, 2019</a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
                        <div class="cp-blog-search__block">
                            <form action="{{ route('frontend.blog.blogWithTitle') }}" name="cp_search_form" method="get" enctype="multipart/form-data"
                                  class="cm-processed-form">
                                <input type="text" placeholder="Tìm kiếm" name="keyword_search" value=""
                                       id="search_input_2162" title=""
                                       class="input-medium cp-blog-search__input cm-hint">
                                <button title="Tìm kiếm" class="cp-search-magnifier" type="submit"><i
                                        class="ty-icon-cp-search"></i></button>
                            </form>
                        </div>
{{--                        <div class="cp-blog-subscribe__block">--}}
{{--                            <form action="https://ibie.vn/" method="post" name="cp_subscribe_form"--}}
{{--                                  class="cm-processed-form">--}}
{{--                                <input type="hidden" name="redirect_url"--}}
{{--                                       value="index.php?sef_rewrite=1&amp;dispatch=cp_blog.manage">--}}
{{--                                <input type="hidden" name="newsletter_format" value="2">--}}
{{--                                <p><span>Đăng ký nhận bài viết mới nhất</span></p>--}}
{{--                                <div class="cp-input-append">--}}
{{--                                    <label class="cm-required cm-email hidden" for="subscr_email332">Email</label>--}}
{{--                                    <input type="text" name="hint_subscribe_email" id="subscr_email332" size="20"--}}
{{--                                           value="Nhập email của bạn" class="ty-input-text cm-hint">--}}
{{--                                    <button title="Đi" class="cp-btn-go" type="submit"><i--}}
{{--                                            class="cp-btn-go__icon ty-icon-right-dir"></i></button>--}}
{{--                                    <input type="hidden" name="dispatch" value="cp_blog.add_subscriber">--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                        </div>--}}
                    </div>
                    <div class="span12 ">
                        <div class="blog-list">
                            <div class="ty-pagination-container cm-pagination-container" id="pagination_contents">
                                <div><a data-ca-scroll=".cm-pagination-container" href="" data-ca-page=""
                                        data-ca-target-id="pagination_contents" class="hidden"></a></div>
                                <div class="cp-blog-grid__block clearfix">
                                    @foreach($blog as $blg)
                                        <div class="ty-column3">
                                            <div class="cp-blog-grid__item">
                                                <div class="cp-blog-grid__image clearfix">
                                                    <a href="{{ route('frontend.blog.blogWithCate', [$blg->slug, $blg->id]) }}">
                                                        <img class="ty-pict      cm-image" id="det_img_1149045864"
                                                             src="{{$blg->path}}" style="" data-src=""
                                                             alt="14 phong cách thiết kế nội thất"
                                                             title="14 phong cách thiết kế nội thất">
                                                    </a>
                                                </div>
                                                <div class="cp-blog-grid__info">
                                                    <div class="cp-blog-grid__title ">
                                                        <a href="https://ibie.vn/bai-viet/14-phong-cach-thiet-ke-noi-that-pho-bien/">{{$blg->title_blog}}</a>
                                                    </div>
                                                    <div class="cp-blog-grid__date-info ">
                                                    <span>
                                                        <a href="https://ibie.vn/tap-chi/?date=1562259600">
                                                            <i class="fa fa-clock-o"></i>&nbsp;{{$blg->created_at}}</a>
                                                    </span>
                                                        <span>
                                                        <a href="https://ibie.vn/tap-chi/?author=Th%C6%B0+L%C3%AA">
                                                            <i id="author" class="fa fa-user"></i>&nbsp;{{$blg->author_blog}}</a>
                                                    </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                    <div class="ty-pagination__bottom">
                                        <div class="ty-pagination vs-pagination">
                                            <a data-ca-scroll=".cm-pagination-container"
                                               class="ty-pagination__item ty-pagination__btn "><i
                                                    class="vs-icon-arrow-left"></i></a>
                                            <div class="ty-pagination__items">
                                                <span class="ty-pagination__selected">1</span>
                                                <a data-ca-scroll=".cm-pagination-container"
                                                   href="https://ibie.vn/tap-chi/page-2/?sef_rewrite=1" data-ca-page="2"
                                                   class="cm-history ty-pagination__item cm-ajax"
                                                   data-ca-target-id="pagination_contents">2</a>
                                                <a data-ca-scroll=".cm-pagination-container"
                                                   href="https://ibie.vn/tap-chi/page-3/?sef_rewrite=1" data-ca-page="3"
                                                   class="cm-history ty-pagination__item cm-ajax"
                                                   data-ca-target-id="pagination_contents">3</a>
                                            </div>
                                            <a data-ca-scroll=".cm-pagination-container"
                                               class="ty-pagination__item ty-pagination__btn ty-pagination__next cm-history cm-ajax"
                                               href="https://ibie.vn/tap-chi/page-2/?sef_rewrite=1" data-ca-page="2"
                                               data-ca-target-id="pagination_contents"><i
                                                    class="vs-icon-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <!--pagination_contents--></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
