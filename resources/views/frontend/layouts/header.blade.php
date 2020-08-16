<div class="tygh-header clearfix front_page">
    <div class="container header-grid">
        <div class="row">
            <div class="span16 " >
                <div class="row">
                    <div class="span4 top-logo-grid" >
                        <div class="top-logo ">
                            <div class="ty-logo-container">
                                <a href="{{ route('att.index') }}" title="Nội thất IBIE">
                                    <img class="ty-pict  ty-logo-container__image    cm-image" id="det_img_702188806"  src="https://ibie.vn/images/logos/3/logo150_v78c-ez.png" style="" data-src=""   width="150" height="41" alt="Nội thất IBIE" title="Nội thất IBIE"/>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="span9 top-block-grid vs-search" >
                        <div class="top-search ">
                            <div class="ty-search-block">
                                <form action="{{ route('att.index') }}" name="search_form" method="get">
                                    <select name="cid" class="energo-searchbox">
                                        <option value="0">Danh mục</option>
                                        @if(isset($headerCate) && !empty($headerCate))
                                            @foreach($headerCate as $hcate)
                                                <option value="{{ $hcate->id }}">{{ $hcate->name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    <input type="text" name="q" value="" id="search_input" title="Tìm kiếm sản phẩm" class="ty-search-block__input cm-hint" />
                                    <input type="hidden" name="dispatch" value="products.search"><input class="vs-flat-submit hidden-phone" type="submit" value="Tìm kiếm"><button title="Search" class="ty-search-magnifier hidden-tablet hidden-desktop vs-top-search-submit" type="submit"><i class="ty-icon-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="span3 top-block-grid vs-cart" id="att_cart_items">
                        @include('frontend.blocks.mini-cart')
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="span16 " >
                <div class="row">
                    <div class="span16 et-sticky-menu hidden-phone hidden-tablet hidden" >
                        <div class="row">
                            <div class="span4 " >
                                <div class="vs-mega-menu vs-floating-menu-block ty-float-left">
                                    <div class="wrap-dropdown-hybrid">
                                        <!-- level 1 wrapper - horizontal -->
                                        <ul class="dropdown-hybrid clearfix">
                                            <!-- level 1 items - horizontal -->
                                            <li class="">
                                                <a class="drop item-1" ><i class="vs-icon-menu"></i><span>Danh mục</span></a>
                                                <!-- end level 1 items - horizontal -->
                                            </li>
                                        </ul>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('frontend.blocks.menu-header')

{{--        mobie search header fixed--}}
{{--        @include('frontend.widget.mobile-search-fixed')--}}
    </div>
</div>
