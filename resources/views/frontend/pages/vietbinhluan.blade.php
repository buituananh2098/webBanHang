@extends('frontend.layouts.master')
@section('titlePage', 'Ý kiến đánh giá')

@section('content')
    <div class="container content-grid">

        <div class="row">
            <div class="span16 breadcrumbs-grid">
                <div id="breadcrumbs_58">

                    <div class="ty-breadcrumbs clearfix">
                    <span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb" class="no-padding"><a
                            itemprop="url" href="https://ibie.vn/" class="ty-breadcrumbs__a"><span itemprop="title"
                                                                                                   class="no-padding">Nội thất</span></a></span><span
                            class="ty-breadcrumbs__slash">/</span><span class="ty-breadcrumbs__current">Ý kiến đánh
                        giá</span>
                    </div>

                    <!--breadcrumbs_58-->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="span16 main-content-grid">
                <div class="vs-mainbox-general clearfix">
                    <h1 class="vs-mainbox-title clearfix">
                        <span>Ý kiến đánh giá</span>
                    </h1>
                    <div class="vs-mainbox-body clearfix">
                        <div class="discussion-block" id="content_discussion">

                            <div class="cp-disc__left-block">
                                <div class="ty-discussion__rating-wrapper">
                                    <p class="nowrap stars">
                                        <i class="ty-icon-star"></i><i class="ty-icon-star"></i><i
                                            class="ty-icon-star"></i><i class="ty-icon-star"></i><i
                                            class="ty-icon-star-half"></i></p>
                                    <a class="ty-discussion__review-a cm-external-click" data-ca-scroll="content_discussion"
                                       data-ca-external-click-id="discussion">
                                        4 Đánh giá
                                    </a>
                                </div>


                            </div>
                            <div class="cp-disc__right-block">
                                <div class="cp-prod-tab-rev-sorting">
                                    <span>Sắp xếp theo:</span>

                                    <select id="sort_review_top" name="sort_review"
                                            onchange="fn_pr_change_sorting(this.value, 'pagination_contents_comments_0');">
                                        <option
                                            value="index.php?dispatch=discussion.view&amp;thread_id=26&amp;cp_sort_by=NW&amp;selected_section=discussion#content_discussion_block">
                                            Mới nhất</option>
                                        <option
                                            value="index.php?dispatch=discussion.view&amp;thread_id=26&amp;cp_sort_by=OD&amp;selected_section=discussion#content_discussion_block">
                                            Cũ nhất</option>
                                        <option
                                            value="index.php?dispatch=discussion.view&amp;thread_id=26&amp;cp_sort_by=MH&amp;selected_section=discussion#content_discussion_block">
                                            Hữu ích nhất</option>
                                        <option
                                            value="index.php?dispatch=discussion.view&amp;thread_id=26&amp;cp_sort_by=HR&amp;selected_section=discussion#content_discussion_block">
                                            Đánh giá cao nhất</option>
                                        <option
                                            value="index.php?dispatch=discussion.view&amp;thread_id=26&amp;cp_sort_by=LR&amp;selected_section=discussion#content_discussion_block">
                                            Đánh giá thấp nhất</option>
                                    </select>
                                </div>
                                <div id="cp_posts_list_0">

                                    <div class="ty-pagination-container cm-pagination-container"
                                         id="pagination_contents_comments_0">




                                        <div class="ty-discussion-post__content ty-mb-l">

                                        <span itemscope="" itemtype="http://schema.org/Review">
                                            <span itemprop="reviewRating" itemscope=""
                                                  itemtype="http://schema.org/Rating">
                                                <meta itemprop="ratingValue" content="5">
                                            </span>
                                            <meta itemprop="itemReviewed" content="IBIE">
                                            <span itemprop="author" itemscope="" itemtype="http://schema.org/Person">
                                                <meta itemprop="name" content="Nguyễn Tuấn">
                                            </span>
                                            <meta itemprop="datePublished" content="2019-12-13">
                                            <meta itemprop="reviewBody"
                                                  content="Hàng chuẩn, nệm ghế thiết kế lõm chứ không bằng như hàng ngoài NGT, ngồi lâu dễ chịu. Mọi người mua đi, yên tâm về chất lượng.">
                                        </span>
                                            <div class="cp-review-main-block-string clearfix">
                                                <div class="cp-review-left-block   cp-two-blocks cp-no-attributes">
                                                    <div class="cp-review-left-block-rating-aver">
                                                        <div class="c100 p100 center">
                                                            <span>5</span>
                                                            <div class="slice">
                                                                <div class="bar"></div>
                                                                <div class="fill"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="hidden">1</p>
                                                </div>
                                                <div
                                                    class="cp-review-right-block cp_need_left_marg cp-two-blocks cp-no-attributes">

                                                    <div class="cp-review-right-block-info">
                                                        <span class="cp-rev-post__author">Nguyễn Tuấn</span>

                                                    </div>
                                                    <div class="cp-msg-plus-img">
                                                        <div class="cp-review-right-block-msg">
                                                            Hàng chuẩn, nệm ghế thiết kế lõm chứ không bằng như hàng ngoài
                                                            NGT, ngồi lâu dễ chịu. Mọi người mua đi, yên tâm về chất lượng.
                                                        </div>
                                                        <div class="cp-post-images-block">
                                                        <span class="cp-post-span-img"
                                                              style="width:60px; height:60px; line-height: 60px;">
                                                            <span
                                                                class="ty-image-zoom__wrapper easyzoom easyzoom--adjacent"><a
                                                                    id="det_img_link_4304_31735"
                                                                    data-ca-image-id="preview[post_images_4304]"
                                                                    class="cm-image-previewer cm-previewer ty-previewer"
                                                                    data-ca-image-width="800" data-ca-image-height="800"
                                                                    href="https://ibie.vn/images/detailed/31/501-co-tay-mau-den.jpg"
                                                                    title=""><img class="ty-pict      cm-image"
                                                                                  id="det_img_4304_31735"
                                                                                  src="https://ibie.vn/images/thumbnails/60/60/detailed/31/501-co-tay-mau-den.jpg"
                                                                                  style="" data-src="" alt="" title=""><svg
                                                                        class="ty-pict__container" aria-hidden="true"
                                                                        width="60" height="60" viewBox="0 0 60 60"
                                                                        style="max-height: 100%; max-width: 100%; position: absolute; top: 0; left: 50%; transform: translateX(-50%); z-index: -1;">
                                                                        <rect fill="transparent" width="60" height="60">
                                                                        </rect>
                                                                    </svg>
                                                                    <span
                                                                        class="ty-previewer__icon hidden-phone"></span></a></span>

                                                        </span>
                                                        </div>
                                                        <div
                                                            class="cp-review-right-block-likes  cp-two-blocks cp-no-attributes">
                                                        <span><span class="cp-users-likes">0</span><a rel="nofollow"
                                                                                                      class="cm-ajax" data-ca-target-id="cp_posts_list_0"
                                                                                                      href="https://ibie.vn/index.php?dispatch=discussion.cp_like_post&amp;object_id=0&amp;det_page=N&amp;object_type=E&amp;cp_like=Y&amp;post_id=4304&amp;cp_sort_by=&amp;selected_section=discussion&amp;thread_id=26"><i
                                                                    class="cp-rev-icons-up-down cp_pr-ico-thumbs-up"></i></a></span>
                                                            <span><span class="cp-users-likes">0</span><a rel="nofollow"
                                                                                                          class="cm-ajax" data-ca-target-id="cp_posts_list_0"
                                                                                                          href="https://ibie.vn/index.php?dispatch=discussion.cp_like_post&amp;object_id=0&amp;det_page=N&amp;object_type=E&amp;cp_like=N&amp;post_id=4304&amp;cp_sort_by=&amp;selected_section=discussion&amp;thread_id=26"><i
                                                                        class="cp-rev-icons-up-down cp_pr-ico-thumbs-down"></i></a></span>
                                                            <span class="hidden">
                                                            <a href="" data-ca-target-id="cp_login_block_0"
                                                               class="cm-dialog-opener cm-dialog-auto-size"
                                                               rel="nofollow">Đăng nhập</a>
                                                        </span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>


                                        </div>
                                        <div class="ty-discussion-post__content ty-mb-l">

                                        <span itemscope="" itemtype="http://schema.org/Review">
                                            <span itemprop="reviewRating" itemscope=""
                                                  itemtype="http://schema.org/Rating">
                                                <meta itemprop="ratingValue" content="5">
                                            </span>
                                            <meta itemprop="itemReviewed" content="IBIE">
                                            <span itemprop="author" itemscope="" itemtype="http://schema.org/Person">
                                                <meta itemprop="name" content="Trần Anh">
                                            </span>
                                            <meta itemprop="datePublished" content="2016-06-16">
                                            <meta itemprop="reviewBody"
                                                  content="Thiết kế đẹp, sản phẩm chất lượng, hậu mãi chu đáo">
                                        </span>
                                            <div class="cp-review-main-block-string clearfix">
                                                <div class="cp-review-left-block   cp-two-blocks cp-no-attributes">
                                                    <div class="cp-review-left-block-rating-aver">
                                                        <div class="c100 p100 center">
                                                            <span>5</span>
                                                            <div class="slice">
                                                                <div class="bar"></div>
                                                                <div class="fill"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="hidden">1</p>
                                                </div>
                                                <div
                                                    class="cp-review-right-block cp_need_left_marg cp-two-blocks cp-no-attributes">

                                                    <div class="cp-review-right-block-info">
                                                        <span class="cp-rev-post__author">Trần Anh</span>

                                                    </div>
                                                    <div class="cp-msg-plus-img">
                                                        <div class="cp-review-right-block-msg">
                                                            Thiết kế đẹp, sản phẩm chất lượng, hậu mãi chu đáo
                                                        </div>
                                                        <div
                                                            class="cp-review-right-block-likes  cp-two-blocks cp-no-attributes">
                                                        <span><span class="cp-users-likes">0</span><a rel="nofollow"
                                                                                                      class="cm-ajax" data-ca-target-id="cp_posts_list_0"
                                                                                                      href="https://ibie.vn/index.php?dispatch=discussion.cp_like_post&amp;object_id=0&amp;det_page=N&amp;object_type=E&amp;cp_like=Y&amp;post_id=39&amp;cp_sort_by=&amp;selected_section=discussion&amp;thread_id=26"><i
                                                                    class="cp-rev-icons-up-down cp_pr-ico-thumbs-up"></i></a></span>
                                                            <span><span class="cp-users-likes">0</span><a rel="nofollow"
                                                                                                          class="cm-ajax" data-ca-target-id="cp_posts_list_0"
                                                                                                          href="https://ibie.vn/index.php?dispatch=discussion.cp_like_post&amp;object_id=0&amp;det_page=N&amp;object_type=E&amp;cp_like=N&amp;post_id=39&amp;cp_sort_by=&amp;selected_section=discussion&amp;thread_id=26"><i
                                                                        class="cp-rev-icons-up-down cp_pr-ico-thumbs-down"></i></a></span>
                                                            <span class="hidden">
                                                            <a href="" data-ca-target-id="cp_login_block_0"
                                                               class="cm-dialog-opener cm-dialog-auto-size"
                                                               rel="nofollow">Đăng nhập</a>
                                                        </span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>


                                        </div>
                                        <div class="ty-discussion-post__content ty-mb-l">

                                        <span itemscope="" itemtype="http://schema.org/Review">
                                            <span itemprop="reviewRating" itemscope=""
                                                  itemtype="http://schema.org/Rating">
                                                <meta itemprop="ratingValue" content="4">
                                            </span>
                                            <meta itemprop="itemReviewed" content="IBIE">
                                            <span itemprop="author" itemscope="" itemtype="http://schema.org/Person">
                                                <meta itemprop="name" content="Tuấn">
                                            </span>
                                            <meta itemprop="datePublished" content="2013-11-08">
                                            <meta itemprop="reviewBody" content="Tôi rất ấn tượng với dịch vụ hậu mãi của IBIE. Rất nhanh chóng và thân thiện.
">
                                        </span>
                                            <div class="cp-review-main-block-string clearfix">
                                                <div class="cp-review-left-block   cp-two-blocks cp-no-attributes">
                                                    <div class="cp-review-left-block-rating-aver">
                                                        <div class="c100 p80 center">
                                                            <span>4</span>
                                                            <div class="slice">
                                                                <div class="bar"></div>
                                                                <div class="fill"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="hidden">1</p>
                                                </div>
                                                <div
                                                    class="cp-review-right-block cp_need_left_marg cp-two-blocks cp-no-attributes">

                                                    <div class="cp-review-right-block-info">
                                                        <span class="cp-rev-post__author">Tuấn</span>

                                                    </div>
                                                    <div class="cp-msg-plus-img">
                                                        <div class="cp-review-right-block-msg">
                                                            Tôi rất ấn tượng với dịch vụ hậu mãi của IBIE. Rất nhanh chóng
                                                            và thân thiện.<br>

                                                        </div>
                                                        <div
                                                            class="cp-review-right-block-likes  cp-two-blocks cp-no-attributes">
                                                        <span><span class="cp-users-likes">0</span><a rel="nofollow"
                                                                                                      class="cm-ajax" data-ca-target-id="cp_posts_list_0"
                                                                                                      href="https://ibie.vn/index.php?dispatch=discussion.cp_like_post&amp;object_id=0&amp;det_page=N&amp;object_type=E&amp;cp_like=Y&amp;post_id=18&amp;cp_sort_by=&amp;selected_section=discussion&amp;thread_id=26"><i
                                                                    class="cp-rev-icons-up-down cp_pr-ico-thumbs-up"></i></a></span>
                                                            <span><span class="cp-users-likes">0</span><a rel="nofollow"
                                                                                                          class="cm-ajax" data-ca-target-id="cp_posts_list_0"
                                                                                                          href="https://ibie.vn/index.php?dispatch=discussion.cp_like_post&amp;object_id=0&amp;det_page=N&amp;object_type=E&amp;cp_like=N&amp;post_id=18&amp;cp_sort_by=&amp;selected_section=discussion&amp;thread_id=26"><i
                                                                        class="cp-rev-icons-up-down cp_pr-ico-thumbs-down"></i></a></span>
                                                            <span class="hidden">
                                                            <a href="" data-ca-target-id="cp_login_block_0"
                                                               class="cm-dialog-opener cm-dialog-auto-size"
                                                               rel="nofollow">Đăng nhập</a>
                                                        </span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>


                                        </div>
                                        <div class="ty-discussion-post__content ty-mb-l">

                                        <span itemscope="" itemtype="http://schema.org/Review">
                                            <span itemprop="reviewRating" itemscope=""
                                                  itemtype="http://schema.org/Rating">
                                                <meta itemprop="ratingValue" content="5">
                                            </span>
                                            <meta itemprop="itemReviewed" content="IBIE">
                                            <span itemprop="author" itemscope="" itemtype="http://schema.org/Person">
                                                <meta itemprop="name" content="Hương">
                                            </span>
                                            <meta itemprop="datePublished" content="2013-11-08">
                                            <meta itemprop="reviewBody" content="Sản phẩm rất đẹp và chất lượng. Cảm ơn IBIE!
">
                                        </span>
                                            <div class="cp-review-main-block-string clearfix">
                                                <div class="cp-review-left-block   cp-two-blocks cp-no-attributes">
                                                    <div class="cp-review-left-block-rating-aver">
                                                        <div class="c100 p100 center">
                                                            <span>5</span>
                                                            <div class="slice">
                                                                <div class="bar"></div>
                                                                <div class="fill"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="hidden">1</p>
                                                </div>
                                                <div
                                                    class="cp-review-right-block cp_need_left_marg cp-two-blocks cp-no-attributes">

                                                    <div class="cp-review-right-block-info">
                                                        <span class="cp-rev-post__author">Hương</span>

                                                    </div>
                                                    <div class="cp-msg-plus-img">
                                                        <div class="cp-review-right-block-msg">
                                                            Sản phẩm rất đẹp và chất lượng. Cảm ơn IBIE!<br>

                                                        </div>
                                                        <div
                                                            class="cp-review-right-block-likes  cp-two-blocks cp-no-attributes">
                                                        <span><span class="cp-users-likes">0</span><a rel="nofollow"
                                                                                                      class="cm-ajax" data-ca-target-id="cp_posts_list_0"
                                                                                                      href="https://ibie.vn/index.php?dispatch=discussion.cp_like_post&amp;object_id=0&amp;det_page=N&amp;object_type=E&amp;cp_like=Y&amp;post_id=19&amp;cp_sort_by=&amp;selected_section=discussion&amp;thread_id=26"><i
                                                                    class="cp-rev-icons-up-down cp_pr-ico-thumbs-up"></i></a></span>
                                                            <span><span class="cp-users-likes">0</span><a rel="nofollow"
                                                                                                          class="cm-ajax" data-ca-target-id="cp_posts_list_0"
                                                                                                          href="https://ibie.vn/index.php?dispatch=discussion.cp_like_post&amp;object_id=0&amp;det_page=N&amp;object_type=E&amp;cp_like=N&amp;post_id=19&amp;cp_sort_by=&amp;selected_section=discussion&amp;thread_id=26"><i
                                                                        class="cp-rev-icons-up-down cp_pr-ico-thumbs-down"></i></a></span>
                                                            <span class="hidden">
                                                            <a href="" data-ca-target-id="cp_login_block_0"
                                                               class="cm-dialog-opener cm-dialog-auto-size"
                                                               rel="nofollow">Đăng nhập</a>
                                                        </span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>


                                        </div>


                                        <!--pagination_contents_comments_0-->
                                    </div>

                                    <div id="cp_login_block_0" class="hidden" title="Đăng nhập">
                                        <div class="ty-login-popup">


                                            <form name="popup0_form" action="https://ibie.vn/" method="post"
                                                  class="cm-ajax cm-ajax-full-render cm-processed-form">
                                                <input type="hidden" name="result_ids" value="login_error_popup0">
                                                <input type="hidden" name="error_container_id" value="login_error_popup0">
                                                <input type="hidden" name="quick_login" value="1">

                                                <input type="hidden" name="return_url"
                                                       value="index.php?dispatch=discussion.view&amp;thread_id=26">
                                                <input type="hidden" name="redirect_url"
                                                       value="index.php?dispatch=discussion.view&amp;thread_id=26">

                                                <div class="ty-control-group">
                                                    <label for="login_popup0"
                                                           class="ty-login__filed-label ty-control-group__label cm-required cm-trim cm-email">Email</label>
                                                    <input type="text" id="login_popup0" name="user_login" size="30"
                                                           value="" class="ty-login__input cm-focus">
                                                </div>

                                                <div class="ty-control-group ty-password-forgot">
                                                    <label for="psw_popup0"
                                                           class="ty-login__filed-label ty-control-group__label ty-password-forgot__label cm-required">Mật
                                                        khẩu</label><a
                                                        href="https://ibie.vn/index.php?dispatch=auth.recover_password"
                                                        class="ty-password-forgot__a" tabindex="5">Quên mật khẩu?</a>
                                                    <input type="password" id="psw_popup0" name="password" size="30"
                                                           value="" class="ty-login__input" maxlength="32">
                                                </div>


                                                <div class="ty-login-form__wrong-credentials-container"
                                                     id="login_error_popup0">
                                                    <!--login_error_popup0-->
                                                </div>




                                                <div class="ty-login-reglink ty-center">
                                                    <a class="ty-login-reglink__a" href="https://ibie.vn/profiles-add/"
                                                       rel="nofollow">Đăng ký tài khoản</a>
                                                </div>
                                                <div class="buttons-container clearfix">
                                                    <div class="ty-float-right">


                                                        <button class="ty-btn__login ty-btn__secondary ty-btn" type="submit"
                                                                name="dispatch[auth.login]">Đăng nhập</button>


                                                    </div>
                                                    <div class="ty-login__remember-me">
                                                        <label for="remember_me_popup0"
                                                               class="ty-login__remember-me-label"><input class="checkbox"
                                                                                                          type="checkbox" name="remember_me" id="remember_me_popup0"
                                                                                                          value="Y">Nhớ mật khẩu</label>
                                                    </div>
                                                </div>



                                            </form>


                                        </div>
                                    </div>
                                    <!--cp_posts_list_0-->
                                </div>





                                <a href="https://ibie.vn/index.php?dispatch=discussion.get_new_post_form&amp;object_type=E&amp;object_id=0&amp;obj_prefix=&amp;post_redirect_url=index.php%3Fdispatch%3Ddiscussion.view%26thread_id%3D26"
                                   class="ty-btn cm-dialog-opener cm-dialog-auto-size ty-btn__primary " rel="nofollow"
                                   data-ca-target-id="new_post_dialog_0" title="Viết nhận xét">Viết nhận xét</a>



                            </div>
                        </div>
                        <!-- Inline script moved to the bottom of the page -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
