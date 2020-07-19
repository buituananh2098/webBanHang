<!DOCTYPE html>
<html
    lang="vi" dir="ltr">
<head>
    <title>@yield('titlePage')</title>
{{--    @include('frontend.layouts.headfixed')--}}
    @include('frontend.layouts.css')

    @yield('css')
</head>
<body>
    @if(Session::has('message'))
    @include('frontend.widget.message')
    @endif
    <div class="ty-tygh   bp-tygh-container" id="tygh_container">
        <div class="ty-helper-container bp-tygh-main-container--padding" id="tygh_main_container">
{{--            @include('frontend.layouts.headfixed')--}}
            @include('frontend.layouts.header')
        </div>
        <div class="container">
{{--            <div class="row">--}}
{{--                <div class="span16 ">--}}
{{--                    <div id="breadcrumbs_58"><div class="ty-breadcrumbs clearfix">--}}
{{--                            <span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb" class="no-padding">--}}
{{--                                <a itemprop="url" href="https://ibie.vn/" class="ty-breadcrumbs__a">--}}
{{--                                    <span itemprop="title" class="no-padding">Nội thất</span>--}}
{{--                                </a></span>--}}
{{--                            <span class="ty-breadcrumbs__slash">/</span>--}}
{{--                            <span class="ty-breadcrumbs__current">Bán chạy nhất</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="container content-grid">
                @yield('content')
            </div>
        </div>

        <div class="tygh-footer clearfix">
            @include('frontend.layouts.footer')
            <!--tygh_main_container-->
        </div>
        <!-- Inline script moved to the bottom of the page -->
        <!-- Inline script moved to the bottom of the page -->
        <div id="fb-root"></div>
        <!-- Inline script moved to the bottom of the page -->
        <style>
            #cfacebook{
                position: fixed;
                bottom: 0px;
                right: 15px;
                z-index: 999999999999999;
                width: 250px; height: auto;
                box-shadow: 6px 6px 6px 10px rgba(0,0,0,0.2);
                border-top-left-radius: 5px;
                border-top-right-radius: 5px;
                overflow: hidden;
            }
            #cfacebook .fchat{float: left; width: 100%; height: 295px; overflow: hidden; display: none; background-color: #fff;}
            #cfacebook .fchat .chat-single{float: left; line-height: 25px; line-height: 25px; color: #333; width: 100%;}
            #cfacebook .fchat .chat-single a{float: right; text-decoration: none; margin-right: 10px; color: #888; font-size: 12px;}
            #cfacebook .fchat .chat-single a:hover{color: #222;}
            #cfacebook .fchat .fb-page{margin-top: 0px; float: left;}
            #cfacebook a.chat_fb{
                float: left;
                padding: 0 25px;
                width: 250px;
                color: #fff;
                text-decoration: none;
                height: 30px;
                line-height: 30px;
                text-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
                background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAAqCAMAAABFoMFOAAAAWlBMV…8/UxBxQDQuFwlpqgBZBq6+P+unVY1GnDgwqbD2zGz5e1lBdwvGGPE6OgAAAABJRU5ErkJggg==);
                background-repeat: repeat-x;
                background-size: auto;
                background-position: 0 0;
                background-color: #0065BF;
                border: 0;
                border-bottom: 1px solid #0065BF;
                z-index: 9999999;
                margin-right: 12px; font-size: 16px;}
            #cfacebook a.chat_fb:hover{color: yellow; text-decoration: none;}
        </style>
        <!-- Inline script moved to the bottom of the page -->
        <div id="cfacebook">
            <a href="javascript:;" class="chat_fb" onclick="javascript:fchat();"><i class="fa fa-comments"></i> Hỗ trợ trực tuyến</a>
            <div id="fchat" class="fchat">
                <div class="fb-page" data-href="https://www.facebook.com/ibie.vn/" data-tabs="messages, events" data-width="250" data-height="270" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false">
                    <div class="fb-xfbml-parse-ignore">
                        <blockquote cite="https://www.facebook.com/ibie.vn/"><a href="https://www.facebook.com/ibie.vn/">IBIE</a></blockquote>
                    </div>
                </div>
                <div class="chat-single"><a target="_blank" href="https://www.facebook.com/ibie.vn/"><i class="fa fa-facebook-square"></i> Fanpage Nội thất IBIE.VN </a></div>
            </div>
            <input type="hidden" id="tchat" value="0"/>
        </div>
        <a href="#" id="scroll-up" class="hidden">
            <i class="ty-icon-upload"></i>
        </a>
        <!--tygh_container-->
    </div>
    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>
        window.fbAsyncInit = function () {
            FB.init({
                xfbml: true,
                version: 'v7.0'
            });
        };

        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
            // js.src = '../../../js/xfbml.customerchat.js';

            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

    <!-- Your customer chat code -->
    <div class="fb-customerchat"
         attribution=setup_tool
         page_id="111729403863727"
         theme_color="#13cf13"
         logged_in_greeting="Chào bạn! Đồ ăn vặt Tuấn Anh có thể giúp gì cho bạn ?"
         logged_out_greeting="Chào bạn! Đồ ăn vặt Tuấn Anh có thể giúp gì cho bạn ?">
    </div>

    <div class="fb-customerchat"
         page_id="<PAGE_ID>">
    </div>
    @include('frontend.layouts.js')
</body>
</html>
