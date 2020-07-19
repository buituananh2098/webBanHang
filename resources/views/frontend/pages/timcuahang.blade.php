@extends('frontend.layouts.master')
@section('titlePage', 'Tìm cửa hàng')

@section('content')
    <div class="container content-grid">

        <div class="row">
            <div class="span16 breadcrumbs-grid">
                <div id="breadcrumbs_58">

                    <div class="ty-breadcrumbs clearfix">
                    <span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb" class="no-padding"><a
                            itemprop="url" href="https://ibie.vn/" class="ty-breadcrumbs__a"><span itemprop="title"
                                                                                                   class="no-padding">Nội thất</span></a></span><span
                            class="ty-breadcrumbs__slash">/</span><span class="ty-breadcrumbs__current">Tìm cửa hàng</span>
                    </div>

                    <!--breadcrumbs_58-->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="span16 main-content-grid">
                <div class="vs-mainbox-general clearfix">
                    <div class="vs-mainbox-body clearfix">

                        <form action="https://ibie.vn/index.php?dispatch=store_locator.search"
                              id="store_locator_search_form" class="cm-processed-form">
                            <input type="hidden" name="result_ids"
                                   value="store_locator_search_controls,store_locator_location,store_locator_search_block_*">
                            <input type="hidden" name="full_render" value="Y">

                            <div id="store_locator_search_controls" class="store-locator__location--wrapper">
                                <h2 class="store-locator__step-title">Tìm cửa hàng</h2>

                                <div class="store-locator__location store-locator__location--city sl-search-control">
                                    <label class="store-locator__select-label" for="store_locator_search_city">Địa
                                        chỉ:</label>
                                    <select name="sl_search[city]" id="store_locator_search_city"
                                            class="store-locator__select">
                                        <option value="">Tất cả</option>
                                        <option value="Hà Nội">Hà Nội</option>
                                        <option value="Hồ Chí Minh">Hồ Chí Minh</option>
                                    </select>
                                </div>

                                <!--store_locator_search_controls-->
                            </div>

                            <div id="store_locator_location">

                                <div class="store-locator">

                                    <div class="pickup pickup--map-list">




                                        <div class="pickup__map-wrapper">





                                            <div class="cm-sl-pickup-map-marker hidden"
                                                 data-ca-geo-map-marker-lat="10.798585121353472"
                                                 data-ca-geo-map-marker-lng="106.64116233587265">
                                                <div class="store-locator-ya-baloon">
                                                    <strong class="store-locator-ya-baloon__store-name">Văn phòng &amp; Cửa
                                                        hàng</strong>

                                                    <p class="store-locator-ya-baloon__store-address">405/6 Trường Chinh,
                                                        Phường 14,&nbsp;Q.Tân Bình, TP.HCM</p>
                                                    <p class="store-locator-ya-baloon__store-phone"><a
                                                            href="tel:0901295161">0901295161</a></p>
                                                    <p class="store-locator-ya-baloon__store-time">8h00 - 17h30</p>
                                                    <div class="store-locator-ya-baloon__store-description">
                                                        <p>Hẻm 405 Trường Chinh&nbsp;gần đường Trương Công Định, Q.Tân Bình,
                                                            hướng về phía An Sương. Hẻm xe tải, công ty có chỗ đậu xe.</p>
                                                    </div>
                                                </div>
                                            </div>






                                            <div class="cm-sl-pickup-map-marker hidden"
                                                 data-ca-geo-map-marker-lat="20.98444977186033"
                                                 data-ca-geo-map-marker-lng="105.79913477519759">
                                                <div class="store-locator-ya-baloon">
                                                    <strong class="store-locator-ya-baloon__store-name">CN Hà Nội</strong>

                                                    <p class="store-locator-ya-baloon__store-address">18N3 ngõ 58 Triều
                                                        Khúc, P.Thanh Xuân Nam, Q.Thanh Xuân, TP.HN</p>
                                                    <p class="store-locator-ya-baloon__store-phone"><a
                                                            href="tel:0916662259">0916662259</a></p>
                                                    <p class="store-locator-ya-baloon__store-time">8h00 - 17h30</p>
                                                </div>
                                            </div>


                                            <div class="pickup__map-container cm-geo-map-container"
                                                 id="store_locator_stores_map" data-ca-geo-map-initial-lat="20.98444977186"
                                                 data-ca-geo-map-initial-lng="105.7991347752" data-ca-geo-map-zoom="16"
                                                 data-ca-geo-map-controls-enable-zoom="true"
                                                 data-ca-geo-map-controls-enable-fullscreen="true"
                                                 data-ca-geo-map-controls-enable-layers="true"
                                                 data-ca-geo-map-controls-enable-ruler="true"
                                                 data-ca-geo-map-behaviors-enable-drag="true"
                                                 data-ca-geo-map-behaviors-enable-drag-on-mobile="false"
                                                 data-ca-geo-map-behaviors-enable-dbl-click-zoom="true"
                                                 data-ca-geo-map-behaviors-enable-multi-touch="true"
                                                 data-ca-geo-map-language="vi"
                                                 data-ca-geo-map-marker-selector=".cm-sl-pickup-map-marker"
                                                 style="position: relative; overflow: hidden;">
                                                <div
                                                    style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                                                    <div class="gm-style"
                                                         style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;">
                                                        <div tabindex="0"
                                                             style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; touch-action: pan-x pan-y;">
                                                            <div
                                                                style="z-index: 1; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);">
                                                                <div
                                                                    style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;">
                                                                    <div
                                                                        style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                                                        <div
                                                                            style="position: absolute; z-index: 995; transform: matrix(1, 0, 0, 1, -113, -144);">
                                                                            <div
                                                                                style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px;">
                                                                                <div style="width: 256px; height: 256px;">
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px;">
                                                                                <div style="width: 256px; height: 256px;">
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px;">
                                                                                <div style="width: 256px; height: 256px;">
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px;">
                                                                                <div style="width: 256px; height: 256px;">
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px;">
                                                                                <div style="width: 256px; height: 256px;">
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px;">
                                                                                <div style="width: 256px; height: 256px;">
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px;">
                                                                                <div style="width: 256px; height: 256px;">
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px;">
                                                                                <div style="width: 256px; height: 256px;">
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px;">
                                                                                <div style="width: 256px; height: 256px;">
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                style="position: absolute; left: -512px; top: 256px; width: 256px; height: 256px;">
                                                                                <div style="width: 256px; height: 256px;">
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                style="position: absolute; left: -512px; top: 0px; width: 256px; height: 256px;">
                                                                                <div style="width: 256px; height: 256px;">
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                style="position: absolute; left: -512px; top: -256px; width: 256px; height: 256px;">
                                                                                <div style="width: 256px; height: 256px;">
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                style="position: absolute; left: 512px; top: -256px; width: 256px; height: 256px;">
                                                                                <div style="width: 256px; height: 256px;">
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                style="position: absolute; left: 512px; top: 0px; width: 256px; height: 256px;">
                                                                                <div style="width: 256px; height: 256px;">
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                style="position: absolute; left: 512px; top: 256px; width: 256px; height: 256px;">
                                                                                <div style="width: 256px; height: 256px;">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;">
                                                                </div>
                                                                <div
                                                                    style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;">
                                                                </div>
                                                                <div
                                                                    style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;">
                                                                    <div
                                                                        style="position: absolute; left: 0px; top: 0px; z-index: -1;">
                                                                        <div
                                                                            style="position: absolute; z-index: 995; transform: matrix(1, 0, 0, 1, -113, -144);">
                                                                            <div
                                                                                style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 0px;">
                                                                            </div>
                                                                            <div
                                                                                style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: 0px;">
                                                                            </div>
                                                                            <div
                                                                                style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: -256px;">
                                                                            </div>
                                                                            <div
                                                                                style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: -256px;">
                                                                            </div>
                                                                            <div
                                                                                style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: -256px;">
                                                                            </div>
                                                                            <div
                                                                                style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: 0px;">
                                                                            </div>
                                                                            <div
                                                                                style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: 256px;">
                                                                            </div>
                                                                            <div
                                                                                style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 256px;">
                                                                            </div>
                                                                            <div
                                                                                style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: 256px;">
                                                                            </div>
                                                                            <div
                                                                                style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -512px; top: 256px;">
                                                                            </div>
                                                                            <div
                                                                                style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -512px; top: 0px;">
                                                                            </div>
                                                                            <div
                                                                                style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -512px; top: -256px;">
                                                                            </div>
                                                                            <div
                                                                                style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 512px; top: -256px;">
                                                                            </div>
                                                                            <div
                                                                                style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 512px; top: 0px;">
                                                                            </div>
                                                                            <div
                                                                                style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 512px; top: 256px;">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        style="width: 27px; height: 43px; overflow: hidden; position: absolute; left: -4px; top: 78px; z-index: 121;">
                                                                        <img alt=""
                                                                             src="https://maps.gstatic.com/mapfiles/api-3/images/spotlight-poi2_hdpi.png"
                                                                             draggable="false"
                                                                             style="position: absolute; left: 0px; top: 0px; width: 27px; height: 43px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                                    </div>
                                                                    <div
                                                                        style="width: 27px; height: 43px; overflow: hidden; position: absolute; left: -23px; top: -164px; z-index: -121;">
                                                                        <img alt=""
                                                                             src="https://maps.gstatic.com/mapfiles/api-3/images/spotlight-poi2_hdpi.png"
                                                                             draggable="false"
                                                                             style="position: absolute; left: 0px; top: 0px; width: 27px; height: 43px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                                                    <div
                                                                        style="position: absolute; z-index: 995; transform: matrix(1, 0, 0, 1, -113, -144);">
                                                                        <div
                                                                            style="position: absolute; left: 512px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                                            <img draggable="false" alt=""
                                                                                 role="presentation"
                                                                                 src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i5!2i27!3i13!4i256!2m3!1e0!2sm!3i505221996!3m12!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2&amp;key=AIzaSyAIhQIMo5ppi-IAdiUtcOnyqP59RVcGsrA&amp;token=76444"
                                                                                 style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                                        </div>
                                                                        <div
                                                                            style="position: absolute; left: 512px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                                            <img draggable="false" alt=""
                                                                                 role="presentation"
                                                                                 src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i5!2i27!3i14!4i256!2m3!1e0!2sm!3i505221996!3m12!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2&amp;key=AIzaSyAIhQIMo5ppi-IAdiUtcOnyqP59RVcGsrA&amp;token=107951"
                                                                                 style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                                        </div>
                                                                        <div
                                                                            style="position: absolute; left: -512px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                                            <img draggable="false" alt=""
                                                                                 role="presentation"
                                                                                 src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i5!2i23!3i15!4i256!2m3!1e0!2sm!3i505222308!3m12!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2&amp;key=AIzaSyAIhQIMo5ppi-IAdiUtcOnyqP59RVcGsrA&amp;token=59908"
                                                                                 style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                                        </div>
                                                                        <div
                                                                            style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                                            <img draggable="false" alt=""
                                                                                 role="presentation"
                                                                                 src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i5!2i24!3i15!4i256!2m3!1e0!2sm!3i505222296!3m12!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2&amp;key=AIzaSyAIhQIMo5ppi-IAdiUtcOnyqP59RVcGsrA&amp;token=8491"
                                                                                 style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                                        </div>
                                                                        <div
                                                                            style="position: absolute; left: 512px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                                            <img draggable="false" alt=""
                                                                                 role="presentation"
                                                                                 src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i5!2i27!3i15!4i256!2m3!1e0!2sm!3i505221624!3m12!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2&amp;key=AIzaSyAIhQIMo5ppi-IAdiUtcOnyqP59RVcGsrA&amp;token=17606"
                                                                                 style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                                        </div>
                                                                        <div
                                                                            style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                                            <img draggable="false" alt=""
                                                                                 role="presentation"
                                                                                 src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i5!2i24!3i14!4i256!2m3!1e0!2sm!3i505222308!3m12!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2&amp;key=AIzaSyAIhQIMo5ppi-IAdiUtcOnyqP59RVcGsrA&amp;token=82708"
                                                                                 style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                                        </div>
                                                                        <div
                                                                            style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                                            <img draggable="false" alt=""
                                                                                 role="presentation"
                                                                                 src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i5!2i25!3i15!4i256!2m3!1e0!2sm!3i505222296!3m12!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2&amp;key=AIzaSyAIhQIMo5ppi-IAdiUtcOnyqP59RVcGsrA&amp;token=62798"
                                                                                 style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                                        </div>
                                                                        <div
                                                                            style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                                            <img draggable="false" alt=""
                                                                                 role="presentation"
                                                                                 src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i5!2i26!3i14!4i256!2m3!1e0!2sm!3i505221996!3m12!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2&amp;key=AIzaSyAIhQIMo5ppi-IAdiUtcOnyqP59RVcGsrA&amp;token=53644"
                                                                                 style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                                        </div>
                                                                        <div
                                                                            style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                                            <img draggable="false" alt=""
                                                                                 role="presentation"
                                                                                 src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i5!2i26!3i15!4i256!2m3!1e0!2sm!3i505222260!3m12!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2&amp;key=AIzaSyAIhQIMo5ppi-IAdiUtcOnyqP59RVcGsrA&amp;token=13350"
                                                                                 style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                                        </div>
                                                                        <div
                                                                            style="position: absolute; left: -512px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                                            <img draggable="false" alt=""
                                                                                 role="presentation"
                                                                                 src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i5!2i23!3i14!4i256!2m3!1e0!2sm!3i505222308!3m12!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2&amp;key=AIzaSyAIhQIMo5ppi-IAdiUtcOnyqP59RVcGsrA&amp;token=28401"
                                                                                 style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                                        </div>
                                                                        <div
                                                                            style="position: absolute; left: -512px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                                            <img draggable="false" alt=""
                                                                                 role="presentation"
                                                                                 src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i5!2i23!3i13!4i256!2m3!1e0!2sm!3i505222308!3m12!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2&amp;key=AIzaSyAIhQIMo5ppi-IAdiUtcOnyqP59RVcGsrA&amp;token=127965"
                                                                                 style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                                        </div>
                                                                        <div
                                                                            style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                                            <img draggable="false" alt=""
                                                                                 role="presentation"
                                                                                 src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i5!2i24!3i13!4i256!2m3!1e0!2sm!3i505222308!3m12!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2&amp;key=AIzaSyAIhQIMo5ppi-IAdiUtcOnyqP59RVcGsrA&amp;token=51201"
                                                                                 style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                                        </div>
                                                                        <div
                                                                            style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                                            <img draggable="false" alt=""
                                                                                 role="presentation"
                                                                                 src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i5!2i25!3i14!4i256!2m3!1e0!2sm!3i505222308!3m12!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2&amp;key=AIzaSyAIhQIMo5ppi-IAdiUtcOnyqP59RVcGsrA&amp;token=5944"
                                                                                 style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                                        </div>
                                                                        <div
                                                                            style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                                            <img draggable="false" alt=""
                                                                                 role="presentation"
                                                                                 src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i5!2i25!3i13!4i256!2m3!1e0!2sm!3i505222308!3m12!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2&amp;key=AIzaSyAIhQIMo5ppi-IAdiUtcOnyqP59RVcGsrA&amp;token=105508"
                                                                                 style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                                        </div>
                                                                        <div
                                                                            style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                                            <img draggable="false" alt=""
                                                                                 role="presentation"
                                                                                 src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i5!2i26!3i13!4i256!2m3!1e0!2sm!3i505221996!3m12!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2&amp;key=AIzaSyAIhQIMo5ppi-IAdiUtcOnyqP59RVcGsrA&amp;token=22137"
                                                                                 style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="gm-style-pbc"
                                                                 style="z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0;">
                                                                <p class="gm-style-pbt"></p>
                                                            </div>
                                                            <div
                                                                style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; touch-action: pan-x pan-y;">
                                                                <div
                                                                    style="z-index: 4; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);">
                                                                    <div
                                                                        style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;">
                                                                    </div>
                                                                    <div
                                                                        style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;">
                                                                    </div>
                                                                    <div
                                                                        style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;">
                                                                        <div></div>
                                                                        <div></div>
                                                                        <div
                                                                            style="width: 27px; height: 43px; overflow: hidden; position: absolute; opacity: 0; left: -4px; top: 78px; z-index: 121;">
                                                                            <img alt=""
                                                                                 src="https://maps.gstatic.com/mapfiles/api-3/images/spotlight-poi2_hdpi.png"
                                                                                 draggable="false" usemap="#gmimap0"
                                                                                 style="position: absolute; left: 0px; top: 0px; width: 27px; height: 43px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"><map
                                                                                name="gmimap0" id="gmimap0"><area log="miw"
                                                                                                                  coords="13.5,0,4,3.75,0,13.5,13.5,43,27,13.5,23,3.75"
                                                                                                                  shape="poly" title=""
                                                                                                                  style="cursor: pointer; touch-action: none;"></map>
                                                                        </div>
                                                                        <div
                                                                            style="width: 27px; height: 43px; overflow: hidden; position: absolute; opacity: 0; left: -23px; top: -164px; z-index: -121;">
                                                                            <img alt=""
                                                                                 src="https://maps.gstatic.com/mapfiles/api-3/images/spotlight-poi2_hdpi.png"
                                                                                 draggable="false" usemap="#gmimap1"
                                                                                 style="position: absolute; left: 0px; top: 0px; width: 27px; height: 43px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"><map
                                                                                name="gmimap1" id="gmimap1"><area log="miw"
                                                                                                                  coords="13.5,0,4,3.75,0,13.5,13.5,43,27,13.5,23,3.75"
                                                                                                                  shape="poly" title=""
                                                                                                                  style="cursor: pointer; touch-action: none;"></map>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><iframe aria-hidden="true" frameborder="0" tabindex="-1"
                                                                      style="z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: none;"></iframe>
                                                        <div
                                                            style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;">
                                                            <a target="_blank" rel="noopener"
                                                               href="https://maps.google.com/maps?ll=15.956182,106.220149&amp;z=5&amp;t=m&amp;hl=en-US&amp;gl=US&amp;mapclient=apiv3"
                                                               title="Open this area in Google Maps (opens a new window)"
                                                               style="position: static; overflow: visible; float: none; display: inline;">
                                                                <div style="width: 66px; height: 26px; cursor: pointer;">
                                                                    <img alt=""
                                                                         src="https://maps.gstatic.com/mapfiles/api-3/images/google4_hdpi.png"
                                                                         draggable="false"
                                                                         style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;">
                                                                </div>
                                                            </a></div>
                                                        <div
                                                            style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-sizing: border-box; box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 300px; height: 180px; position: absolute; left: 267px; top: 160px;">
                                                            <div
                                                                style="padding: 0px 0px 10px; font-size: 16px; box-sizing: border-box;">
                                                                Map Data</div>
                                                            <div style="font-size: 13px;">Map data ©2020 GBRMPA, Google, SK
                                                                telecom</div><button draggable="false" title="Close"
                                                                                     aria-label="Close" type="button" class="gm-ui-hover-effect"
                                                                                     style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; position: absolute; cursor: pointer; user-select: none; top: 0px; right: 0px; width: 37px; height: 37px;"><img
                                                                    src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224px%22%20height%3D%2224px%22%20viewBox%3D%220%200%2024%2024%22%20fill%3D%22%23000000%22%3E%0A%20%20%20%20%3Cpath%20d%3D%22M19%206.41L17.59%205%2012%2010.59%206.41%205%205%206.41%2010.59%2012%205%2017.59%206.41%2019%2012%2013.41%2017.59%2019%2019%2017.59%2013.41%2012z%22%2F%3E%0A%20%20%20%20%3Cpath%20d%3D%22M0%200h24v24H0z%22%20fill%3D%22none%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                                                    style="pointer-events: none; display: block; width: 13px; height: 13px; margin: 12px;"></button>
                                                        </div>
                                                        <div class="gmnoprint"
                                                             style="z-index: 1000001; position: absolute; right: 164px; bottom: 0px; width: 220px;">
                                                            <div draggable="false" class="gm-style-cc"
                                                                 style="user-select: none; height: 14px; line-height: 14px;">
                                                                <div
                                                                    style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                                    <div style="width: 1px;"></div>
                                                                    <div
                                                                        style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;">
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                                                    <a
                                                                        style="text-decoration: none; cursor: pointer; display: none;">Map
                                                                        Data</a><span>Map data ©2020 GBRMPA, Google, SK
                                                                    telecom</span></div>
                                                            </div>
                                                        </div>
                                                        <div class="gmnoscreen"
                                                             style="position: absolute; right: 0px; bottom: 0px;">
                                                            <div
                                                                style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">
                                                                Map data ©2020 GBRMPA, Google, SK telecom</div>
                                                        </div>
                                                        <div class="gmnoprint gm-style-cc" draggable="false"
                                                             style="z-index: 1000001; user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;">
                                                            <div
                                                                style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                                <div style="width: 1px;"></div>
                                                                <div
                                                                    style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;">
                                                                </div>
                                                            </div>
                                                            <div
                                                                style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                                                <a href="https://www.google.com/intl/en-US_US/help/terms_maps.html"
                                                                   target="_blank" rel="noopener"
                                                                   style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">Terms
                                                                    of Use</a></div>
                                                        </div><button draggable="false" title="Toggle fullscreen view"
                                                                      aria-label="Toggle fullscreen view" type="button"
                                                                      class="gm-control-active gm-fullscreen-control"
                                                                      style="background: none rgb(255, 255, 255); border: 0px; margin: 10px; padding: 0px; position: absolute; cursor: pointer; user-select: none; border-radius: 2px; height: 40px; width: 40px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; overflow: hidden; top: 58px; right: 0px;"><img
                                                                src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%20018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                                                style="height: 18px; width: 18px;"><img
                                                                src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                                                style="height: 18px; width: 18px;"><img
                                                                src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                                                style="height: 18px; width: 18px;"></button>
                                                        <div draggable="false" class="gm-style-cc"
                                                             style="user-select: none; height: 14px; line-height: 14px; display: none; position: absolute; right: 0px; bottom: 0px;">
                                                            <div
                                                                style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                                <div style="width: 1px;"></div>
                                                                <div
                                                                    style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;">
                                                                </div>
                                                            </div>
                                                            <div
                                                                style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                                                <a target="_blank" rel="noopener"
                                                                   title="Report errors in the road map or imagery to Google"
                                                                   href="https://www.google.com/maps/@15.9561823,106.2201486,5z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3"
                                                                   style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;">Report
                                                                    a map error</a></div>
                                                        </div>
                                                        <div class="gmnoprint gm-bundled-control" draggable="false"
                                                             controlwidth="40" controlheight="81"
                                                             style="margin: 10px; user-select: none; position: absolute; left: 0px; top: 200px;">
                                                            <div class="gmnoprint" controlwidth="40" controlheight="81"
                                                                 style="position: absolute; left: 0px; top: 0px;">
                                                                <div draggable="false"
                                                                     style="user-select: none; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; background-color: rgb(255, 255, 255); width: 40px; height: 81px;">
                                                                    <button draggable="false" title="Zoom in"
                                                                            aria-label="Zoom in" type="button"
                                                                            class="gm-control-active"
                                                                            style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; position: relative; cursor: pointer; user-select: none; overflow: hidden; width: 40px; height: 40px; top: 0px; left: 0px;"><img
                                                                            src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23666%22%20points%3D%2218%2C7%2011%2C7%2011%2C0%207%2C0%207%2C7%200%2C7%200%2C11%207%2C11%207%2C18%2011%2C18%2011%2C11%2018%2C11%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                                                            style="height: 18px; width: 18px;"><img
                                                                            src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23333%22%20points%3D%2218%2C7%2011%2C7%2011%2C0%207%2C0%207%2C7%200%2C7%200%2C11%207%2C11%207%2C18%2011%2C18%2011%2C11%2018%2C11%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                                                            style="height: 18px; width: 18px;"><img
                                                                            src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23111%22%20points%3D%2218%2C7%2011%2C7%2011%2C0%207%2C0%207%2C7%200%2C7%200%2C11%207%2C11%207%2C18%2011%2C18%2011%2C11%2018%2C11%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                                                            style="height: 18px; width: 18px;"></button>
                                                                    <div
                                                                        style="position: relative; overflow: hidden; width: 30px; height: 1px; margin: 0px 5px; background-color: rgb(230, 230, 230); top: 0px;">
                                                                    </div><button draggable="false" title="Zoom out"
                                                                                  aria-label="Zoom out" type="button"
                                                                                  class="gm-control-active"
                                                                                  style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; position: relative; cursor: pointer; user-select: none; overflow: hidden; width: 40px; height: 40px; top: 0px; left: 0px;"><img
                                                                            src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C7h18v4H0V7z%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                                                            style="height: 18px; width: 18px;"><img
                                                                            src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C7h18v4H0V7z%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                                                            style="height: 18px; width: 18px;"><img
                                                                            src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C7h18v4H0V7z%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                                                            style="height: 18px; width: 18px;"></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="gmnoprint gm-style-mtc"
                                                             style="margin: 10px; z-index: 0; position: absolute; cursor: pointer; text-align: left; width: 120px; right: 0px; top: 0px;">
                                                            <div role="button" tabindex="0" title="Change map style"
                                                                 aria-label="Change map style" aria-pressed="false"
                                                                 draggable="false"
                                                                 style="direction: ltr; overflow: hidden; text-align: left; position: relative; color: black; font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 18px; background-color: rgb(255, 255, 255); padding: 8px 17px; border-radius: 2px; background-clip: padding-box; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; font-weight: 500;">
                                                                Map<img alt=""
                                                                        src="https://maps.gstatic.com/mapfiles/arrow-down.png"
                                                                        draggable="false"
                                                                        style="user-select: none; border: 0px; padding: 0px; margin: -2px 0px 0px; position: absolute; right: 6px; top: 50%; width: 7px; height: 4px;">
                                                            </div>
                                                            <div
                                                                style="background-color: white; z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; position: absolute; top: 100%; left: 0px; right: 0px; text-align: left; display: none;">
                                                                <div draggable="false" title="Show street map"
                                                                     style="color: black; font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 18px; background-color: rgb(255, 255, 255); padding: 5px; font-weight: 500;">
                                                                    Map</div>
                                                                <div draggable="false" title="Show satellite imagery"
                                                                     style="color: black; font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 18px; background-color: rgb(255, 255, 255); padding: 5px;">
                                                                    Satellite</div>
                                                                <div
                                                                    style="margin: 1px 0px; border-top: 1px solid rgb(235, 235, 235);">
                                                                </div>
                                                                <div draggable="false" title="Show street map with terrain"
                                                                     style="color: black; font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 18px; background-color: rgb(255, 255, 255); padding: 5px 8px 5px 5px; direction: ltr; text-align: left; white-space: nowrap;">
                                                                <span role="checkbox"
                                                                      style="vertical-align: middle;"><img
                                                                        src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224px%22%20height%3D%2224px%22%20viewBox%3D%220%200%2024%2024%22%20fill%3D%22%23000000%22%3E%0A%20%20%20%20%3Cpath%20d%3D%22M0%200h24v24H0z%22%20fill%3D%22none%22%2F%3E%0A%20%20%20%20%3Cpath%20d%3D%22M19%203H5c-1.11%200-2%20.9-2%202v14c0%201.1.89%202%202%202h14c1.11%200%202-.9%202-2V5c0-1.1-.89-2-2-2zm-9%2014l-5-5%201.41-1.41L10%2014.17l7.59-7.59L19%208l-9%209z%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                                                        style="height: 1em; width: 1em; transform: translateY(0.15em); display: none;"><img
                                                                        src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224px%22%20height%3D%2224px%22%20viewBox%3D%220%200%2024%2024%22%20fill%3D%22%23000000%22%3E%0A%20%20%20%20%3Cpath%20d%3D%22M19%205v14H5V5h14m0-2H5c-1.1%200-2%20.9-2%202v14c0%201.1.9%202%202%202h14c1.1%200%202-.9%202-2V5c0-1.1-.9-2-2-2z%22%2F%3E%0A%20%20%20%20%3Cpath%20d%3D%22M0%200h24v24H0z%22%20fill%3D%22none%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                                                        style="height: 1em; width: 1em; transform: translateY(0.15em);"></span><label
                                                                        style="vertical-align: middle; cursor: pointer;">Terrain</label>
                                                                </div>
                                                                <div
                                                                    style="margin: 1px 0px; border-top: 1px solid rgb(235, 235, 235); display: none;">
                                                                </div>
                                                                <div draggable="false"
                                                                     title="Show imagery with street names"
                                                                     style="color: black; font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 18px; background-color: rgb(255, 255, 255); padding: 5px 8px 5px 5px; direction: ltr; text-align: left; white-space: nowrap; display: none;">
                                                                <span role="checkbox"
                                                                      style="vertical-align: middle;"><img
                                                                        src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224px%22%20height%3D%2224px%22%20viewBox%3D%220%200%2024%2024%22%20fill%3D%22%23000000%22%3E%0A%20%20%20%20%3Cpath%20d%3D%22M0%200h24v24H0z%22%20fill%3D%22none%22%2F%3E%0A%20%20%20%20%3Cpath%20d%3D%22M19%203H5c-1.11%200-2%20.9-2%202v14c0%201.1.89%202%202%202h14c1.11%200%202-.9%202-2V5c0-1.1-.89-2-2-2zm-9%2014l-5-5%201.41-1.41L10%2014.17l7.59-7.59L19%208l-9%209z%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                                                        style="height: 1em; width: 1em; transform: translateY(0.15em);"><img
                                                                        src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224px%22%20height%3D%2224px%22%20viewBox%3D%220%200%2024%2024%22%20fill%3D%22%23000000%22%3E%0A%20%20%20%20%3Cpath%20d%3D%22M19%205v14H5V5h14m0-2H5c-1.1%200-2%20.9-2%202v14c0%201.1.9%202%202%202h14c1.1%200%202-.9%202-2V5c0-1.1-.9-2-2-2z%22%2F%3E%0A%20%20%20%20%3Cpath%20d%3D%22M0%200h24v24H0z%22%20fill%3D%22none%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                                                        style="height: 1em; width: 1em; transform: translateY(0.15em); display: none;"></span><label
                                                                        style="vertical-align: middle; cursor: pointer;">Labels</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div draggable="false" class="gm-style-cc"
                                                             style="position: absolute; user-select: none; height: 14px; line-height: 14px; right: 71px; bottom: 0px;">
                                                            <div
                                                                style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                                <div style="width: 1px;"></div>
                                                                <div
                                                                    style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;">
                                                                </div>
                                                            </div>
                                                            <div
                                                                style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                                                <span>200 km&nbsp;</span>
                                                                <div
                                                                    style="position: relative; display: inline-block; height: 8px; bottom: -1px; width: 45px;">
                                                                    <div
                                                                        style="width: 100%; height: 4px; position: absolute; left: 0px; top: 0px;">
                                                                    </div>
                                                                    <div
                                                                        style="width: 4px; height: 8px; left: 0px; top: 0px; background-color: rgb(255, 255, 255);">
                                                                    </div>
                                                                    <div
                                                                        style="width: 4px; height: 8px; position: absolute; background-color: rgb(255, 255, 255); right: 0px; bottom: 0px;">
                                                                    </div>
                                                                    <div
                                                                        style="position: absolute; background-color: rgb(102, 102, 102); height: 2px; left: 1px; bottom: 1px; right: 1px;">
                                                                    </div>
                                                                    <div
                                                                        style="position: absolute; width: 2px; height: 6px; left: 1px; top: 1px; background-color: rgb(102, 102, 102);">
                                                                    </div>
                                                                    <div
                                                                        style="width: 2px; height: 6px; position: absolute; background-color: rgb(102, 102, 102); bottom: 1px; right: 1px;">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pickup__map-container--mobile-hint">Use two fingers to move the map
                                            </div>
                                        </div>





                                        <a href="#store_locator_search_form" class="store-locator__scroll-top-btn">Scroll to
                                            top</a>


                                        <div class="pickup__offices-wrapper pickup__offices-wrapper-open">


                                            <div class="pickup__search">

                                                <div
                                                    class="pickup__search-field store-locator__field store-locator__all-stores cm-store-locator__all-stores store-locator__all-stores--hidden sl-search-control">
                                                    <button
                                                        class="cm-store-locator-view-locations store-locator__all-stores-btn"
                                                        type="button" data-ca-stores-list-filter-id="pickup-search"
                                                        data-ca-target-map-id="store_locator_stores_map">xem tất cả</button>
                                                </div>
                                            </div>



                                            <label for="pickup_office_list" class="cm-required cm-multiple-radios hidden"
                                                   data-ca-validator-error-message="Sorry, we couldn't determine your pickpoint. Please choose the desired pickpoint from the list, so that we could deliver your purchase."></label>
                                            <div class="store-locator__fields-row store-locator__fields-row--wrapped pickup__offices pickup__offices--list"
                                                 id="pickup_office_list">

                                                <div class="js-one-city ty-one-city">
                                                    <div class="ty-one-city__name">Hồ Chí Minh</div>

                                                    <label for="store_0__1"
                                                           class="ty-one-store cm-store-locator-map-marker js-store-locator-search-block cm-store-locator-view-location cm-store-location-id_1 "
                                                           data-ca-geo-map-marker-lat="10.798585121353472"
                                                           data-ca-geo-map-marker-lng="106.64116233587265"
                                                           data-ca-target-map-id="store_locator_stores_map">

                                                        <input type="radio"
                                                               class="ty-one-store__radio-0 cm-sl-pickup-select-store"
                                                               name="select_store[0][]" value="1" id="store_0__1"
                                                               data-ca-pickup-select-store="true" data-ca-shipping-id=""
                                                               data-ca-group-key="0" data-ca-location-id="1">

                                                        <div class="ty-sdek-store__label ty-one-store__label">
                                                            <p class="ty-one-store__name">
                                                            <span class="ty-one-store__name-text">Văn phòng &amp; Cửa
                                                                hàng</span>
                                                            </p>

                                                            <div class="ty-one-store__description">
                                                            <span class="ty-one-office__address">405/6 Trường Chinh,
                                                                Phường 14,&nbsp;Q.Tân Bình, TP.HCM</span>
                                                                <br>
                                                                <span class="ty-one-office__worktime">8h00 - 17h30</span>
                                                                <br>
                                                                <span class="ty-one-office__worktime">0901295161</span>
                                                                <br>
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>

                                                <div class="js-one-city ty-one-city">
                                                    <div class="ty-one-city__name">Hà Nội</div>

                                                    <label for="store_0__2"
                                                           class="ty-one-store cm-store-locator-map-marker js-store-locator-search-block cm-store-locator-view-location cm-store-location-id_2 "
                                                           data-ca-geo-map-marker-lat="20.98444977186033"
                                                           data-ca-geo-map-marker-lng="105.79913477519759"
                                                           data-ca-target-map-id="store_locator_stores_map">

                                                        <input type="radio"
                                                               class="ty-one-store__radio-0 cm-sl-pickup-select-store"
                                                               name="select_store[0][]" value="2" id="store_0__2"
                                                               data-ca-pickup-select-store="true" data-ca-shipping-id=""
                                                               data-ca-group-key="0" data-ca-location-id="2">

                                                        <div class="ty-sdek-store__label ty-one-store__label">
                                                            <p class="ty-one-store__name">
                                                                <span class="ty-one-store__name-text">CN Hà Nội</span>
                                                            </p>

                                                            <div class="ty-one-store__description">
                                                            <span class="ty-one-office__address">18N3 ngõ 58 Triều Khúc,
                                                                P.Thanh Xuân Nam, Q.Thanh Xuân, TP.HN</span>
                                                                <br>
                                                                <span class="ty-one-office__worktime">8h00 - 17h30</span>
                                                                <br>
                                                                <span class="ty-one-office__worktime">0916662259</span>
                                                                <br>
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>

                                            <div
                                                class="js-store-locator__not-found ty-store-locator__not-found ty-store-locator__not-found__hidden">
                                                Địa chỉ không tìm thấy</div>

                                        </div>


                                    </div>

                                </div>
                                <!--store_locator_location-->
                            </div>
                            <!-- Inline script moved to the bottom of the page -->
                            <!-- Inline script moved to the bottom of the page -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
