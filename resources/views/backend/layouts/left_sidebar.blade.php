<div id="aside" class="page-sidenav no-shrink bg-light nav-dropdown fade" aria-hidden="true">
    <div class="sidenav h-100 modal-dialog bg-light">
        <div class="navbar">
            <a href="{{ route('admin.dashboard') }}" class="navbar-brand">
                <svg width="32" height="32" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"
                     fill="currentColor">
                    <g class="loading-spin" style="transform-origin: 256px 256px">
                        <path
                            d="M200.043 106.067c-40.631 15.171-73.434 46.382-90.717 85.933H256l-55.957-85.933zM412.797 288A160.723 160.723 0 0 0 416 256c0-36.624-12.314-70.367-33.016-97.334L311 288h101.797zM359.973 134.395C332.007 110.461 295.694 96 256 96c-7.966 0-15.794.591-23.448 1.715L310.852 224l49.121-89.605zM99.204 224A160.65 160.65 0 0 0 96 256c0 36.639 12.324 70.394 33.041 97.366L201 224H99.204zM311.959 405.932c40.631-15.171 73.433-46.382 90.715-85.932H256l55.959 85.932zM152.046 377.621C180.009 401.545 216.314 416 256 416c7.969 0 15.799-.592 23.456-1.716L201.164 288l-49.118 89.621z"></path>
                    </g>
                </svg>
                <span class="hidden-folded d-inline l-s-n-1x">Basik</span>
            </a>
        </div>
        <div class="flex scrollable hover">
            <div class="nav-active-text-primary" data-nav>
                <ul class="nav bg">
                    <li class="nav-header hidden-folded"><span class="text-muted">Main</span></li>
                    <li><a href="dashboard.html"><span class="nav-icon text-primary"><i data-feather="home"></i></span>
                            <span class="nav-text">Bảng điều khiển</span></a></li>

                    <li class="nav-header hidden-folded"><span class="text-muted">Đơn hàng</span></li>
                    <li><a href="{{ route('admin.order.index') }}"><span class="nav-icon text-info"><i
                                    data-feather="calendar"></i></span> <span class="nav-text">Đơn hàng</span> <span
                                class="nav-badge"><b class="badge-circle xs text-danger"></b></span></a></li>

                    <li class="nav-header hidden-folded"><span class="text-muted">Sản phẩm</span></li>
                    <li><a href="{{ route('admin.category.index') }}"><span class="nav-icon text-info"><i
                                    data-feather="calendar"></i></span> <span class="nav-text">Danh mục</span> <span
                                class="nav-badge"><b class="badge-circle xs text-danger"></b></span></a></li>
                    <li><a href="{{ route('admin.product.index') }}"><span class="nav-icon text-danger"><i
                                    data-feather="mail"></i></span> <span class="nav-text">Sản phẩm</span></a></li>
                    <li>
                        <a href="javascript:void(0)" class=""><span class="nav-icon"><i data-feather="box"></i></span>
                            <span  class="nav-text">Blogs</span> <span class="nav-caret"></span></a>
                        <ul class="nav-sub nav-mega">
                            <li><a href="{{ route('admin.blog_category.index') }}" class=""><span class="nav-text">Quản lý danh mục</span></a></li>
                            <li><a href="{{ route('admin.blog.index') }}" class=""><span class="nav-text">Quản lý bài viết</span></a></li>
                        </ul>
                    </li>

                    <li class="nav-header hidden-folded"><span class="text-muted">Marketing</span></li>
                    <li>
                        <a href="{{ route('admin.discount.index') }}"><span class="nav-icon text-info"><i data-feather="calendar"></i></span> <span
                                class="nav-text">Mã giảm giá</span> <span class="nav-badge"><b
                                    class="badge-circle xs text-danger"></b></span></a>
                    </li>
                    <li class="nav-header hidden-folded"><span class="text-muted">Tùy chỉnh</span></li>
                    <li>
                        <a href="#" class="" data-pjax-state="anchor-empty"><span class="nav-icon"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18"
                                                                                               height="11" rx="2"
                                                                                               ry="2"></rect><path
                                        d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg></span> <span
                                class="nav-text">Cấu hình</span> <span class="nav-caret"></span></a>
                        <ul class="nav-sub nav-mega">
                            <li><a href="signin.1.html" class="" data-pjax-state=""><span class="nav-text">Logo</span></a>
                            </li>
                            <li><a href="signup.1.html" class="" data-pjax-state=""><span class="nav-text">Title</span></a>
                            </li>
                            <li><a href="{{ route('admin.banner.index') }}" class="" data-pjax-state=""><span class="nav-text">Slide Banner</span></a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav">
                    <li class="nav-header hidden-folded"><span class="text-muted">Hệ thống</span></li>
                    <li>
                        <a href="javascript:void(0)" class="">
                            <span class="nav-icon" data-pjax-state=""><i data-feather="credit-card"></i></span>
                            <span class="nav-text">Hình thức thanh toán</span>
                            <span
                                class="nav-caret">
                            </span>
                        </a>
                        <ul class="nav-sub nav-mega">
                            <li><a href="{{ route('admin.payment.index') }}"><span
                                        class="nav-text">VNPay</span></a></li>
                            <li><a href="{{ route('admin.payment.index') }}" class=""><span class="nav-text">Momo</span></a>
                            </li>
                        </ul>
                    </li>

                        <li>
                        <a href="javascript:void(0)" class=""><span class="nav-icon text-success"><i
                                    data-feather="users"></i></span> <span class="nav-text">Thành viên</span> <span
                                class="nav-caret"></span></a>
                        <ul class="nav-sub nav-mega">
                            <li><a href="{{ route('admin.user.index') }}"><span
                                        class="nav-text">Quản lý thành viên</span></a></li>
                            <li><a href="{{ route('admin.role.index') }}" class=""><span class="nav-text">Quản lý vai trò</span></a>
                            </li>
                            <li><a href="########" class=""><span class="nav-text">Quản lý quyền hạn</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="" data-pjax-state="anchor-empty"><span class="nav-icon"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18"
                                                                                               height="11" rx="2"
                                                                                               ry="2"></rect><path
                                        d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg></span> <span
                                class="nav-text">Pages</span> <span class="nav-caret"></span></a>
                        <ul class="nav-sub nav-mega">
                            <li><a href="{{ route('admin.pages.block') }}" class="" data-pjax-state=""><span class="nav-text">Blocks</span></a>
                            </li>
                            <li><a href="{{ route('admin.pages.page') }}" class="" data-pjax-state=""><span class="nav-text">Pages</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class=""><span class="nav-icon"><i data-feather="box"></i></span>
                            <span class="nav-text">Plugins</span> <span class="nav-caret"></span></a>
                        <ul class="nav-sub nav-mega">
                            <li><a href="ui.scroll.html" class=""><span class="nav-text">Infinite Scroll</span></a></li>
                            <li><a href="ui.sortable.html" class=""><span class="nav-text">Sortable</span></a></li>
                            <li><a href="ui.map.html" class=""><span class="nav-text">Vector Map</span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="no-shrink">
            <div class="p-3 d-flex align-items-center">
                <div class="text-sm hidden-folded text-muted">Trial: 35%</div>
                <div class="progress mx-2 flex" style="height:4px">
                    <div class="progress-bar gd-success" style="width: 35%"></div>
                </div>
            </div>
        </div>
    </div>
</div>
