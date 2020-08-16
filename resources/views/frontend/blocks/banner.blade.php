@if(isset($banner) && !empty($banner))
    <div class="row">
        <div class="span16 vs-full-width vs-home-mid-banners section-1">
            <div class="homepage-banners second-skin-banners ">
                <div id="banner_slider_2176" class="banners owl-carousel">
{{--                    {{dd($banner)}}--}}
                    @foreach($banner as $item)
                        <div class="item ty-banner__image-item">
                            <a class="banner-link banner__link" href="#">
                                <div style="max-height: 360px; overflow: hidden;" class="vs-main-banner-img">
                                    <img class="ty-pict    lazyOwl  vs_lazy_mobile cm-image" id="det_img_122752582"
                                         src="{{ $item->path }}"
                                         style="padding: 0 0 30%; width: 1200px; height: 0 !important; opacity: .5;"
                                         data-src="{{ $item->path }}" alt="" title=""/>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <!-- Inline script moved to the bottom of the page -->
            </div>
        </div>
    </div>
@endif
