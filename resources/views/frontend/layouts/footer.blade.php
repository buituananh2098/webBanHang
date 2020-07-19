<footer class="tygh-footer clearfix" id="tygh_footer">
    <div class="container vs-footer-grid">
        <div class="row">
            <div class="span16 vs-full-width newsletter-social-wrapper" >
                <div class="row">
                    <div class="span11 newsletter-social" >
                        <div class="animate fade-down ty-float-left">
                            <div class="subscribe-block ty-footer-form-block  cm-processing-personal-data">
                                <form action="{{ route('att.index') }}" method="post" name="subscribe_form">
                                    <input type="hidden" name="redirect_url" value="index.php" />
                                    <div class="clearfix">
                                        <p class="subscribe-notice ty-float-left">Đăng ký nhận tin<br> Tặng ngay Voucher trị giá 50k</p>
                                        <div class="control-group input-append subscribe ty-float-left vs-subscribe">
                                            <label class="cm-required cm-email hidden" for="elm_subscr_email59">Email</label>
                                            <input type="text" name="subscribe_email" id="elm_subscr_email59" size="20" value="Nhập email của bạn" class="cm-hint ty-input-text vs-subscribe-email " />
                                            <button title="Đi" class="ty-btn-go vs-subscribe-button" type="submit">Đăng ký</button>
                                            <input type="hidden" name="dispatch" value="em_subscribers.update" />
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="span5 " >
                        <div class="ty-float-right vs-social animate scale ">
                            <div class="ty-wysiwyg-content"  data-ca-live-editor-object-id="0" data-ca-live-editor-object-type="">
                                <div class="ty-social-link-block">
                                    <h3 class="ty-social-link__title">Theo dõi IBIE</h3>
                                    <div class="ty-social-link facebook">
                                        <a href="https://www.facebook.com/ibie.vn/"><i class="ty-icon-facebook ty-icon-moon-facebook"></i></a>
                                    </div>
                                    <div class="ty-social-link instagram">
                                        <a href="https://www.instagram.com/ibie.vn/"><i class="ty-icon-instagram ty-icon-moon-instagram"></i></a>
                                    </div>
                                    <div class="ty-social-link youtube">
                                        <a href="https://www.youtube.com/channel/UCpKQb_mI0d7PQesdQaeAI7g"><i class="ty-icon-youtube ty-icon-moon-youtube"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="span16 vs-full-width footer-menu animate fade-down" >
                <div class="row">
                    <div class="span4 demo-store-grid" >
                        <div class="vs-footerbox clearfix">
                            <h4 class="vs-footerbox-title clearfix">
                                <span>Tài khoản</span>
                                <span class="vs-title-toggle cm-combination visible-phone visible-tablet" id="sw_vs_box_61">
                                                <i class="ty-sidebox__icon-open ty-icon-down-open"></i>
                                                <i class="ty-sidebox__icon-hide ty-icon-up-open"></i>
                                                </span>
                            </h4>
                            <div class="vs-footerbox-body vs-toggle-body clearfix" id="vs_box_61">
                                <ul id="account_info_links_2167">
                                    <li class="ty-footer-menu__item"><a href="{{ route('att.page.login') }}" rel="nofollow">Đăng nhập</a></li>
                                    <li class="ty-footer-menu__item"><a href="{{ route('att.index') }}" rel="nofollow">Tạo tài khoản</a></li>
                                    <li class="ty-footer-menu__item"><a href="{{ route('att.index') }}">Danh sách yêu thích</a></li>
                                    <li class="ty-footer-menu__item"><a href="{{ route('att.index') }}">Danh sách so sánh</a></li>
                                    <!--account_info_links_2167-->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="span4 my-account-grid" >
                        <div class="vs-footerbox clearfix footer-no-wysiwyg">
                            <h4 class="vs-footerbox-title clearfix">
                                <span>IBIE.VN</span>
                                <span class="vs-title-toggle cm-combination visible-phone visible-tablet" id="sw_vs_box_62">
                                                <i class="ty-sidebox__icon-open ty-icon-down-open"></i>
                                                <i class="ty-sidebox__icon-hide ty-icon-up-open"></i>
                                                </span>
                            </h4>
                            <div class="vs-footerbox-body vs-toggle-body clearfix" id="vs_box_62">
                                <div class="ty-wysiwyg-content"  data-ca-live-editor-object-id="0" data-ca-live-editor-object-type="">
                                    <ul>
                                        <li><a href="{{ route('att.index') }}vi-sao-chon-ibie/">Về chúng tôi</a></li>
                                        <li><a href="{{ route('att.index') }}lien-he/">Liên hệ</a></li>
                                        <li style="display:none;"><a href="{{ route('att.index') }}gift-certificates/">Thẻ quà tặng</a></li>
                                        <li><a href="{{ route('att.index') }}sitemap/">Sitemap</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="span4 demo-store-grid" >
                        <div class="vs-footerbox clearfix footer-no-wysiwyg">
                            <h4 class="vs-footerbox-title clearfix">
                                <span>Dịch vụ khách hàng</span>
                                <span class="vs-title-toggle cm-combination visible-phone visible-tablet" id="sw_vs_box_63">
                                                <i class="ty-sidebox__icon-open ty-icon-down-open"></i>
                                                <i class="ty-sidebox__icon-hide ty-icon-up-open"></i>
                                                </span>
                            </h4>
                            <div class="vs-footerbox-body vs-toggle-body clearfix" id="vs_box_63">
                                <div class="ty-wysiwyg-content"  data-ca-live-editor-object-id="0" data-ca-live-editor-object-type="">
                                    <ul>
                                        <li><a href="{{ route('att.index') }}tra-gop/">Hướng dẫn trả góp 0%</a></li>
                                        <li><a href="{{ route('att.index') }}chinh-sach-ban-hang/">Chính sách bán hàng</a></li>
                                        <li><a href="{{ route('att.index') }}dich-vu-lap-dat/">Dịch vụ lắp đặt</a></li>
                                        <li><a href="{{ route('att.index') }}chinh-sach-bao-mat/">Chính sách bảo mật</a></li>
                                        <li><a href="{{ route('att.index') }}index.php?dispatch=discussion.view&amp;thread_id=26">Viết nhận xét</a></li>
                                        <li><a href="{{ route('att.index') }}index.php?q=&amp;dispatch=store_locator.search">Tìm cửa hàng</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="span4 customer-service-grid" >
                        <div class="vs-footerbox clearfix">
                            <h4 class="vs-footerbox-title clearfix">
                                <span>Liên hệ</span>
                                <span class="vs-title-toggle cm-combination visible-phone visible-tablet" id="sw_vs_box_64">
                                                <i class="ty-sidebox__icon-open ty-icon-down-open"></i>
                                                <i class="ty-sidebox__icon-hide ty-icon-up-open"></i>
                                                </span>
                            </h4>
                            <div class="vs-footerbox-body vs-toggle-body clearfix" id="vs_box_64">
                                <div class="ty-wysiwyg-content"  data-ca-live-editor-object-id="0" data-ca-live-editor-object-type="">
                                    <div class="clearfix footer-contact-item">
                                        <div class="location ty-float-left"><i class="vs-icon-location" style="vertical-align: middle;display:inline-block;line-height:20px"></i>&nbsp;CN1: 405/6 Trường Chinh, P.14,<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;Q.Tân Bình, TP.HCM
                                        </div>
                                        <div class="location ty-float-left"><i class="vs-icon-location" style="vertical-align: middle;display:inline-block;line-height:20px"></i>&nbsp;CN2: 18N3, ngõ 58 Triều Khúc,<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P.TXN, Q.Thanh Xuân, TP.HN
                                        </div>
                                        <div class="clearfix footer-contact-item" style="vertical-align: middle;">
                                            <div class="phone ty-float-left"><span style="display:inline-block; font-size: 15px;color:#666">☎</span>&nbsp;028.2216.5678</div>
                                            <div class="phone ty-float-left"><i class="fa fa-phone" style="vertical-align: middle;display:inline-block;line-height:20px;font-size:16px;"></i>&nbsp;&nbsp;0901.295.161</div>
                                            <br>
                                            <div class="phone ty-float-left">&nbsp; Hotro@ibie.vn</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="span16 vs-full-width animate fade-down" >
                <div class="row">
                    <div class="span10 copyright-grid" >
                        <div class=" ty-float-left">
                            <div class="ty-wysiwyg-content"  data-ca-live-editor-object-id="0" data-ca-live-editor-object-type="">
                                <p>Công ty TNHH Sản xuất và Thương mại IBIE. GPĐKKD số 0313497397 do Sở KH &amp; ĐT TPHCM cấp ngày 20/10/2015.<br />
                                    Địa chỉ: 29/3 A1 đường TA16, P.Thới An, Q.12, TP.HCM&nbsp;- Tel: 028.22165678 - Email: hotro@ibie.vn<br />
                                    © 2015-2020&nbsp;IBIE Co., Ltd.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="span6 " >
                        <div class=" ty-float-right">
                            <div class="ty-payment-icons">
                                <span class="ty-payment-icons__item twocheckout">&nbsp;</span>
                                <span class="ty-payment-icons__item paypal">&nbsp;</span>
                                <span class="ty-payment-icons__item mastercard">&nbsp;</span>
                                <span class="ty-payment-icons__item visa">&nbsp;</span>
                            </div>
                        </div>
                        <div class=" ty-float-right">
                            <div class="ty-wysiwyg-content"  data-ca-live-editor-object-id="0" data-ca-live-editor-object-type="">
                                <p><a href="http://online.gov.vn/HomePage/CustomWebsiteDisplay.aspx?DocId=37494" rel="nofollow" target="_blank"><img alt="Đã đăng ký BCT" src="{{ route('att.index') }}images/companies/1/DKBCT/20150827110756-dathongbao.png?1506046495073" style="width: 150px; height: 57px;" /></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
