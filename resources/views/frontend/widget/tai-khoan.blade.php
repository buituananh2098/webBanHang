
<div class="ty-dropdown-box  top-my-account ty-float-left">
    <div id="sw_dropdown_2156" class="ty-dropdown-box__title cm-combination unlogged clearfix">
        <a class="ty-account-info__title" href="https://ibie.vn/profiles-update/">
            <i class="vs-icon-menu-my-account"></i>
            <span class="vs-my-account-text ty-account-info__title-txt" >Tài khoản</span>
        </a>
    </div>
    <div id="dropdown_2156" class="cm-popup-box ty-dropdown-box__content hidden clearfix">
        <div id="account_info_2156" class="vs-my-account">
            <ul class="ty-account-info">
                <li class="ty-account-info__item ty-dropdown-box__item"><a class="ty-account-info__a underlined" href="#" rel="nofollow">Đơn hàng</a></li>
                <li class="ty-account-info__item ty-dropdown-box__item"><a class="ty-account-info__a underlined" href="#" rel="nofollow">Danh sách so sánh</a></li>
                <li class="ty-account-info__item ty-dropdown-box__item"><a class="ty-account-info__a" href="#" rel="nofollow">Danh sách yêu thích</a></li>
            </ul>
            <div class="ty-account-info__orders updates-wrapper track-orders" id="track_orders_block_2156">
                <form action="#" method="POST" class="cm-ajax cm-post cm-ajax-full-render" name="track_order_quick">
                    <input type="hidden" name="result_ids" value="track_orders_block_*" />
                    <input type="hidden" name="return_url" value="index.php" />
                    <div class="ty-account-info__orders-txt">Kiểm tra đơn hàng</div>
                    <div class="ty-account-info__orders-input ty-control-group ty-input-append">
                        <label for="track_order_item2156" class="cm-required hidden">Kiểm tra đơn hàng</label>
                        <input type="text" size="20" class="ty-input-text cm-hint" id="track_order_item2156" name="track_data" value="Mã ID đơn hàng/Email" />
                        <button title="Đi" class="ty-btn-go" type="submit"><i class="vs-icon-arrow-right"></i></button>
                        <input type="hidden" name="dispatch" value="orders.track_request" />
                    </div>
                </form>
                <!--track_orders_block_2156-->
            </div>
            @if(isset($customer) && !empty($customer))
                <div class="ty-account-info__buttons buttons-container">
                    <a href="{{ route('att.logout') }}" rel="nofollow" class="ty-btn ty-btn__primary">Đăng xuất</a>
                </div>
            @else
            <div class="ty-account-info__buttons buttons-container">
{{--                <a href="{{ route('att.page.login') }}" data-ca-target-id="login_block2156" class="cm-dialog-opener cm-dialog-auto-size account" rel="nofollow">Đăng nhập</a><span>hoặc</span><a href="{{ route('att.page.register') }}" rel="nofollow" class="account">Đăng ký</a>--}}
                <a href="{{ route('att.page.login') }}"  rel="nofollow">Đăng nhập</a><span>hoặc</span><a href="{{ route('att.page.register') }}" rel="nofollow" class="account">Đăng ký</a>
                <div  id="login_block2156" class="hidden" title="Đăng nhập">
                    <div class="ty-login-popup">
                        <form name="" action="{{ route('att.login') }}" method="post" class="cm-ajax cm-ajax-full-render">
                            @csrf
                            <div class="ty-control-group">
                                <label for="login_popup2156" class="ty-login__filed-label ty-control-group__label cm-required cm-trim cm-email">Email</label>
                                <input type="text" id="login_popup2156" name="user_login" size="30" value="" class="ty-login__input cm-focus" />
                            </div>
                            <div class="ty-control-group ty-password-forgot">
                                <label for="psw_popup2156" class="ty-login__filed-label ty-control-group__label ty-password-forgot__label cm-required">Mật khẩu</label><a href="https://ibie.vn/index.php?dispatch=auth.recover_password" class="ty-password-forgot__a"  tabindex="5">Quên mật khẩu?</a>
                                <input type="password" id="psw_popup2156" name="password" size="30" value="" class="ty-login__input" maxlength="32" />
                            </div>
                            <div class="ty-login-form__wrong-credentials-container" id="login_error_popup2156">
                                <!--login_error_popup2156-->
                            </div>
                            <div class="ty-login-reglink ty-center">
                                <a class="ty-login-reglink__a" href="{{ route('att.page.register') }}" rel="nofollow">Đăng ký tài khoản</a>
                            </div>
                            <div class="buttons-container clearfix">
                                <div class="ty-float-right">
                                    <button  class="ty-btn__login ty-btn__secondary ty-btn" type="submit">Đăng nhập</button>
                                </div>
                                <div class="ty-login__remember-me">
                                    <label for="remember_me_popup2156" class="ty-login__remember-me-label"><input class="checkbox" type="checkbox" name="remember_me" id="remember_me_popup2156" value="Y" />Nhớ mật khẩu</label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endif
            <!--account_info_2156-->
        </div>
    </div>
</div>
