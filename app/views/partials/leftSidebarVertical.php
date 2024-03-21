<!-- Sidebar Start -->
<aside class="left-sidebar with-vertical">
    <div>
        <!-- ---------------------------------- -->
        <!-- Start Vertical Layout Sidebar -->
        <!-- ---------------------------------- -->
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="../main/index.html" class="text-nowrap logo-img">
                <b class="logo-icon">
                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                    <!-- Dark Logo icon -->
                    <img src="<?= URL_PATH ?>/assets/images/logos/logo-icon.svg" alt="homepage" class="dark-logo" />
                    <!-- Light Logo icon -->
                    <img src="<?= URL_PATH ?>/assets/images/logos/logo-light-icon.svg" alt="homepage"
                        class="light-logo" />
                </b>
                <!--End Logo icon -->
                <!-- Logo text -->
                <span class="logo-text">
                    <!-- dark Logo text -->
                    <img src="<?= URL_PATH ?>/assets/images/logos/logo-text.svg" alt="homepage"
                        class="dark-logo ps-2" />
                    <!-- Light Logo text -->
                    <img src="<?= URL_PATH ?>/assets/images/logos/logo-light-text.svg" class="light-logo ps-2"
                        alt="homepage" />
                </span>
            </a>
        </div>

        <nav class="sidebar-nav scroll-sidebar" data-simplebar>
            <ul id="sidebarnav">
                <!-- User Profile-->
                <li class="pt-3">
                    <!-- User Profile-->
                    <div class="user-profile d-flex no-block dropdown mt-3">
                        <div class="user-pic">
                            <img src="<?= URL_PATH ?>/assets/images/profile/user-6.jpg" alt="users"
                                class="rounded-circle" width="40" />
                        </div>
                        <div class="user-content hide-menu ms-2">
                            <a href="#" class="" id="Userdd" role="button" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <h5 class="mb-0 user-name fw-medium d-flex">
                                    Steave Jobs
                                    <iconify-icon icon="solar:alt-arrow-down-outline" class="ms-2"></iconify-icon>
                                </h5>
                                <span class="op-5 text-muted">info@xtreme.com</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="Userdd">
                                <a class="dropdown-item d-flex" href="../main/page-user-profile.html">
                                    <iconify-icon icon="solar:user-linear"
                                        class="text-info iconify-sm me-2 ms-1"></iconify-icon>
                                    My Profile</a>
                                <a class="dropdown-item d-flex" href="../main/page-user-profile.html">
                                    <iconify-icon icon="solar:card-outline"
                                        class="text-primary iconify-sm me-2 ms-1"></iconify-icon>
                                    My Balance</a>
                                <a class="dropdown-item d-flex" href="../main/app-email.html">
                                    <iconify-icon icon="solar:inbox-linear"
                                        class="text-success iconify-sm me-2 ms-1"></iconify-icon>
                                    Inbox</a>
                                <a class="dropdown-item d-flex border-bottom border-top mt-1 py-3"
                                    href="../main/page-account-settings.html">
                                    <iconify-icon icon="solar:settings-outline"
                                        class="text-warning iconify-sm me-2 ms-1"></iconify-icon>
                                    Account Setting</a>

                                <a class="dropdown-item d-flex py-3 pb-2" href="../main/authentication-login.html">
                                    <iconify-icon icon="solar:login-2-outline"
                                        class="text-danger iconify-sm me-2 ms-1"></iconify-icon>
                                    Logout</a>
                            </div>
                        </div>
                    </div>
                    <!-- End User Profile-->
                </li>
                <li class="mt-3 pt-3">
                    <a href="../main/authentication-register.html"
                        class="btn btn-block bg-primary text-white no-block d-flex align-items-center py-2 px-2 border-0">
                        <iconify-icon icon="solar:add-square-linear" class="fs-5"></iconify-icon>
                        <span class="hide-menu ms-2">Create New</span>
                    </a>
                </li>
                <!-- ---------------------------------- -->
                <!-- Home -->
                <!-- ---------------------------------- -->
                <li class="nav-small-cap">
                    <iconify-icon icon="solar:menu-dots-bold" class="nav-small-cap-icon fs-4"></iconify-icon>
                    <span class="hide-menu">Personal</span>
                </li>
                <!-- ---------------------------------- -->
                <!-- Dashboard -->
                <!-- ---------------------------------- -->
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <span class="d-flex">
                            <iconify-icon icon="solar:screencast-2-outline" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="../main/index.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Classic</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/index2.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Analytical</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/index3.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Cryptocurrency</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/index4.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Overview</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/index5.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">E-Commerce</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/index6.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Sales</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/index7.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">General</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/index8.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Trendy</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/index9.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Campaign</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/index10.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Modern</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- ---------------------------------- -->
                <!-- Page Layout -->
                <!-- ---------------------------------- -->
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <span class="d-flex">
                            <iconify-icon icon="solar:clipboard-heart-outline" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu">Page Layouts</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="../main/layout-inner-left-sidebar.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu"> Inner Left Sidebar </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/layout-inner-right-sidebar.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu"> Inner Right Sidebar </span>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- ---------------------------------- -->
                <!-- Apps -->
                <!-- ---------------------------------- -->
                <li class="nav-small-cap">
                    <iconify-icon icon="solar:menu-dots-bold" class="nav-small-cap-icon fs-4"></iconify-icon>
                    <span class="hide-menu">Apps</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="../main/app-calendar.html" aria-expanded="false">
                        <iconify-icon icon="solar:calendar-minimalistic-outline" class="fs-5"></iconify-icon>
                        <span class="hide-menu">Calendar</span></a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="../main/app-kanban.html" aria-expanded="false">
                        <iconify-icon icon="solar:widget-4-outline" class="fs-5"></iconify-icon>
                        <span class="hide-menu">Kanban</span></a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="../main/app-chat.html" aria-expanded="false">
                        <iconify-icon icon="solar:chat-round-unread-outline" class="fs-5"></iconify-icon>
                        <span class="hide-menu">Chat Apps</span></a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="../main/app-email.html" aria-expanded="false">
                        <iconify-icon icon="solar:mailbox-line-duotone" class="fs-5"></iconify-icon>
                        <span class="hide-menu">Email</span></a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="../main/app-notes.html" aria-expanded="false">
                        <iconify-icon icon="solar:notification-unread-lines-outline" class="fs-5"></iconify-icon>
                        <span class="hide-menu">Notes</span></a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="../main/app-contact.html" aria-expanded="false">
                        <iconify-icon icon="solar:phone-outline" class="fs-5"></iconify-icon>
                        <span class="hide-menu">Contact Table</span></a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="../main/app-contact2.html" aria-expanded="false">
                        <iconify-icon icon="solar:clipboard-list-outline" class="fs-5"></iconify-icon>
                        <span class="hide-menu">Contact List</span></a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="../main/app-invoice.html" aria-expanded="false">
                        <iconify-icon icon="solar:file-text-line-duotone" class="fs-5"></iconify-icon>
                        <span class="hide-menu">Invoice</span></a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="../main/page-user-profile.html" aria-expanded="false">
                        <iconify-icon icon="solar:user-circle-line-duotone" class="fs-5"></iconify-icon>
                        <span class="hide-menu">User Profile</span></a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <span class="d-flex">
                            <iconify-icon icon="solar:pie-chart-3-line-duotone" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu">Blog</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="../main/blog-posts.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu"> Posts </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/blog-detail.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu"> Details </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <span class="d-flex">
                            <iconify-icon icon="solar:smart-speaker-minimalistic-line-duotone"
                                class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu">Ecommerce</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="../main/eco-shop.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu"> Shop </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/eco-shop-detail.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu"> Details </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/eco-product-list.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu"> List </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/eco-checkout.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu"> Checkout </span>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- ---------------------------------- -->
                <!-- Pages -->
                <!-- ---------------------------------- -->
                <li class="nav-small-cap">
                    <iconify-icon icon="solar:menu-dots-bold" class="nav-small-cap-icon fs-4"></iconify-icon>
                    <span class="hide-menu">Pages</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="../main/page-pricing.html" aria-expanded="false">
                        <iconify-icon icon="solar:calendar-minimalistic-outline" class="fs-5"></iconify-icon>
                        <span class="hide-menu">Pricing</span></a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="../main/page-faq.html" aria-expanded="false">
                        <iconify-icon icon="solar:question-circle-linear" class="fs-5"></iconify-icon>
                        <span class="hide-menu">FAQ</span></a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="../main/page-account-settings.html"
                        aria-expanded="false">
                        <iconify-icon icon="solar:user-circle-line-duotone" class="fs-5"></iconify-icon>
                        <span class="hide-menu">Account Settings</span></a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="../landingpage/index.html" aria-expanded="false">
                        <iconify-icon icon="solar:laptop-minimalistic-outline" class="fs-5"></iconify-icon>
                        <span class="hide-menu">Landing Page</span></a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <span class="d-flex">
                            <iconify-icon icon="solar:smart-speaker-minimalistic-line-duotone"
                                class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu">Widgets</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="../main/widgets-cards.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu"> Cards </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/widgets-charts.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu"> Charts </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/widgets-banners.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu"> Banner </span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a href="../main/widgets-feeds.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu"> Feed Widgets </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/widgets-apps.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu"> Apps Widgets </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/widgets-data.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu"> Data Widgets </span>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- ---------------------------------- -->
                <!-- UI -->
                <!-- ---------------------------------- -->
                <li class="nav-small-cap">
                    <iconify-icon icon="solar:menu-dots-bold" class="nav-small-cap-icon fs-4"></iconify-icon>
                    <span class="hide-menu">UI</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <span class="d-flex">
                            <iconify-icon icon="solar:text-underline-cross-line-duotone" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu">UI Elements</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="../main/ui-accordian.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Accordian</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/ui-badge.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Badge</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/ui-buttons.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Buttons</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/ui-dropdowns.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Dropdowns</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/ui-modals.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Modals</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/ui-tab.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Tab</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/ui-tooltip-popover.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Tooltip & Popover</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/ui-notification.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Notification</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/ui-progressbar.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Progressbar</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/ui-pagination.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Pagination</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/ui-typography.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Typography</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/ui-bootstrap-ui.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Bootstrap UI</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/ui-breadcrumb.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Breadcrumb</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/ui-offcanvas.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Offcanvas</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/ui-lists.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Lists</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/ui-grid.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Grid</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/ui-carousel.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Carousel</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/ui-scrollspy.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Scrollspy</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/ui-spinner.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Spinner</span>
                            </a>
                        </li>
                        <li class="sidebar-item mb-3">
                            <a href="../main/ui-link.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Link</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <span class="d-flex">
                            <iconify-icon icon="solar:sim-cards-broken" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu">Cards</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="../main/ui-cards.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Basic Cards</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/ui-card-customs.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Custom Cards</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/ui-card-weather.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Weather Cards</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/ui-card-draggable.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Draggable Cards</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <span class="d-flex">
                            <iconify-icon icon="solar:compass-square-outline" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu">Component</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="../main/component-sweetalert.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Sweet Alert</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/component-nestable.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Nestable</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/component-noui-slider.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Noui slider</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/component-rating.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Rating</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/component-toastr.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Toastr</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- ---------------------------------- -->
                <!-- forms -->
                <!-- ---------------------------------- -->
                <li class="nav-small-cap">
                    <iconify-icon icon="solar:menu-dots-bold" class="nav-small-cap-icon fs-4"></iconify-icon>
                    <span class="hide-menu">FORMS</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <span class="d-flex">
                            <iconify-icon icon="solar:book-2-line-duotone" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu">Form Elements</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="../main/form-inputs.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Forms Input</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/form-input-groups.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Input Groups</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/form-input-grid.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Input Grid</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/form-checkbox-radio.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Checkbox & Radios</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/form-bootstrap-touchspin.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Bootstrap Touchspin</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/form-bootstrap-switch.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Bootstrap Switch</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/form-select2.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Select2</span>
                            </a>
                        </li>
                        <li class="sidebar-item mb-3">
                            <a href="../main/form-dual-listbox.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Dual Listbox</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <span class="d-flex">
                            <iconify-icon icon="solar:qr-code-line-duotone" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu">Form Addons</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="../main/form-paginator.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Paginator</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/form-img-cropper.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Image Cropper</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/form-dropzone.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Dropzone</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/form-mask.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Form Mask</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/form-typeahead.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Form Typehead</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <span class="d-flex">
                            <iconify-icon icon="solar:danger-circle-line-duotone" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu">Form Validation</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="../main/form-bootstrap-validation.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Bootstrap Validation</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/form-custom-validation.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Custom Validation</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <span class="d-flex">
                            <iconify-icon icon="solar:document-add-line-duotone" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu">Form Picker</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="../main/form-picker-colorpicker.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Colorpicker</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/form-picker-datetimepicker.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Datetimepicker</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/form-picker-bootstrap-rangepicker.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Bootstrap Rangepicker</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/form-picker-bootstrap-datepicker.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Bootstrap Datepicker</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/form-picker-material-datepicker.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Material Datepicker</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <span class="d-flex">
                            <iconify-icon icon="solar:document-add-line-duotone" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu">Form Editor</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="../main/form-editor-ckeditor.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Ck Editor</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/form-editor-quill.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Quill Editor</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/form-editor-summernote.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Summernote Editor</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/form-editor-tinymce.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Tinymce Edtor</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="../main/form-basic.html" aria-expanded="false">
                        <span class="d-flex">
                            <iconify-icon icon="solar:document-text-linear" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu">Basic Form</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="../main/form-vertical.html" aria-expanded="false">
                        <span class="d-flex">
                            <iconify-icon icon="solar:slider-vertical-outline" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu">Form Vertical</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="../main/form-horizontal.html" aria-expanded="false">
                        <span class="d-flex">
                            <iconify-icon icon="solar:align-vertical-spacing-outline" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu">Form Horizontal</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="../main/form-actions.html" aria-expanded="false">
                        <span class="d-flex">
                            <iconify-icon icon="solar:recive-square-outline" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu">Form Actions</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="../main/form-row-separator.html" aria-expanded="false">
                        <span class="d-flex">
                            <iconify-icon icon="solar:hamburger-menu-line-duotone" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu">Row Separator</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="../main/form-bordered.html" aria-expanded="false">
                        <span class="d-flex">
                            <iconify-icon icon="solar:bill-list-linear" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu">Form Bordered</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="../main/form-detail.html" aria-expanded="false">
                        <span class="d-flex">
                            <iconify-icon icon="solar:documents-minimalistic-linear" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu">Form Detail</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="../main/form-striped-row.html" aria-expanded="false">
                        <span class="d-flex">
                            <iconify-icon icon="solar:bedside-table-outline" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu">Striped Rows</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="../main/form-floating-input.html" aria-expanded="false">
                        <span class="d-flex">
                            <iconify-icon icon="solar:flip-horizontal-outline" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu">Form Floating Input</span>
                    </a>
                </li>
                <!-- ---------------------------------- -->
                <!-- Form Wizard -->
                <!-- ---------------------------------- -->
                <li class="sidebar-item">
                    <a class="sidebar-link" href="../main/form-wizard.html" aria-expanded="false">
                        <span class="d-flex">
                            <iconify-icon icon="solar:weigher-broken" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu">Form Wizard</span>
                    </a>
                </li>
                <!-- ---------------------------------- -->
                <!-- Form Repeater -->
                <!-- ---------------------------------- -->
                <li class="sidebar-item">
                    <a class="sidebar-link" href="../main/form-repeater.html" aria-expanded="false">
                        <span class="d-flex">
                            <iconify-icon icon="solar:text-selection-linear" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu">Form Repeater</span>
                    </a>
                </li>

                <!------------------------------------ -->
                <!-- Tables -->
                <!------------------------------------ -->
                <li class="nav-small-cap">
                    <iconify-icon icon="solar:menu-dots-bold" class="nav-small-cap-icon fs-4"></iconify-icon>
                    <span class="hide-menu">TABLES</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <span class="d-flex">
                            <iconify-icon icon="solar:sidebar-minimalistic-line-duotone" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu">Bootstrap Table</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="../main/table-basic.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Basic Table</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/table-dark-basic.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Dark Basic Table</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/table-sizing.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Sizing Table</span>
                            </a>
                        </li>
                        <li class="sidebar-item mb-3">
                            <a href="../main/table-layout-coloured.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Coloured Table</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <span class="d-flex">
                            <iconify-icon icon="solar:tablet-line-duotone" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu">Datatables</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="../main/table-datatable-basic.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Basic Initialisation</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/table-datatable-api.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">API</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/table-datatable-advanced.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Advanced Initialisation</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- ---------------------------------- -->
                <!-- Table Jsgrid -->
                <!-- ---------------------------------- -->
                <li class="sidebar-item">
                    <a class="sidebar-link" href="../main/table-jsgrid.html" aria-expanded="false">
                        <span class="d-flex">
                            <iconify-icon icon="solar:align-top-line-duotone" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu">Table Jsgrid</span>
                    </a>
                </li>
                <!-- ---------------------------------- -->
                <!-- Table Responsive -->
                <!-- ---------------------------------- -->
                <li class="sidebar-item">
                    <a class="sidebar-link" href="../main/table-responsive.html" aria-expanded="false">
                        <span class="d-flex">
                            <iconify-icon icon="solar:adhesive-plaster-outline" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu">Table Responsive</span>
                    </a>
                </li>
                <!-- ---------------------------------- -->
                <!-- Table Footable -->
                <!-- ---------------------------------- -->
                <li class="sidebar-item">
                    <a class="sidebar-link" href="../main/table-footable.html" aria-expanded="false">
                        <span class="d-flex">
                            <iconify-icon icon="solar:stop-line-duotone" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu">Table Footable</span>
                    </a>
                </li>
                <!-- ---------------------------------- -->
                <!-- Table Editable -->
                <!-- ---------------------------------- -->
                <li class="sidebar-item">
                    <a class="sidebar-link" href="../main/table-editable.html" aria-expanded="false">
                        <span class="d-flex">
                            <iconify-icon icon="solar:pen-new-square-broken" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu">Table Editable</span>
                    </a>
                </li>
                <!-- ---------------------------------- -->
                <!-- Table Bootstrap -->
                <!-- ---------------------------------- -->
                <li class="sidebar-item">
                    <a class="sidebar-link" href="../main/table-bootstrap.html" aria-expanded="false">
                        <span class="d-flex">
                            <iconify-icon icon="solar:chart-square-line-duotone" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu">Table Bootstrap</span>
                    </a>
                </li>

                <!-- ---------------------------------- -->
                <!-- Charts -->
                <!-- ---------------------------------- -->
                <li class="nav-small-cap">
                    <iconify-icon icon="solar:menu-dots-bold" class="nav-small-cap-icon fs-4"></iconify-icon>
                    <span class="hide-menu">Charts</span>
                </li>
                <!-- ---------------------------------- -->
                <!-- Apex Chart -->
                <!-- ---------------------------------- -->
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <span class="d-flex">
                            <iconify-icon icon="solar:pie-chart-3-broken" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu">Apex Charts</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="../main/chart-apex-line.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Line Chart</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/chart-apex-area.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Area Chart</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/chart-apex-bar.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Bar Chart</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/chart-apex-pie.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Pie Chart</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/chart-apex-radial.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Radial Chart</span>
                            </a>
                        </li>
                        <li class="sidebar-item mb-3">
                            <a href="../main/chart-apex-radar.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Radar Chart</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="../main/chart-sparkline.html" aria-expanded="false">
                        <span class="d-flex">
                            <iconify-icon icon="solar:chart-square-line-duotone" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu">Sparkline Chart</span>
                    </a>
                </li>

                <!-- ---------------------------------- -->
                <!-- Sample pages -->
                <!-- ---------------------------------- -->
                <li class="nav-small-cap">
                    <iconify-icon icon="solar:menu-dots-bold" class="nav-small-cap-icon fs-4"></iconify-icon>
                    <span class="hide-menu">SAMPLE PAGES</span>
                </li>
                <!-- ---------------------------------- -->
                <!-- Apex Chart -->
                <!-- ---------------------------------- -->
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <span class="d-flex">
                            <iconify-icon icon="solar:documents-linear" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu">Sample Pages</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="../main/pages-animation.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Animation</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/pages-search-result.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Search Result</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/pages-gallery.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Gallery</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/pages-treeview.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Treeview</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/pages-block-ui.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Block-Ui</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/pages-session-timeout.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Session Timeout</span>
                            </a>
                        </li>
                        <li class="sidebar-item mb-3">
                            <a href="../main/pages-utility-classes.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Helper Classes</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- ---------------------------------- -->
                <!-- Icons -->
                <!-- ---------------------------------- -->
                <li class="nav-small-cap">
                    <iconify-icon icon="solar:menu-dots-bold" class="nav-small-cap-icon fs-4"></iconify-icon>
                    <span class="hide-menu">Icons</span>
                </li>
                <!-- ---------------------------------- -->
                <!-- Tabler Icon -->
                <!-- ---------------------------------- -->

                <li class="sidebar-item">
                    <a class="sidebar-link" href="../main/icon-tabler.html" aria-expanded="false">
                        <span class="d-flex">
                            <iconify-icon icon="solar:archive-broken" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu">Tabler Icon</span>
                    </a>
                </li>

                <!-- ---------------------------------- -->
                <!-- Authentication -->
                <!-- ---------------------------------- -->
                <li class="nav-small-cap">
                    <iconify-icon icon="solar:menu-dots-bold" class="nav-small-cap-icon fs-4"></iconify-icon>
                    <span class="hide-menu">Auth</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="../main/authentication-error.html" aria-expanded="false">
                        <span class="d-flex">
                            <iconify-icon icon="solar:bug-broken" class="fs-6"></iconify-icon>
                        </span>

                        <span class="hide-menu">Error</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <span class="d-flex">
                            <iconify-icon icon="solar:login-2-line-duotone" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu">Login</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="../main/authentication-login.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Side Login</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/authentication-login2.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Boxed Login</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <span class="d-flex">
                            <iconify-icon icon="solar:user-plus-broken" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu">Register</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="../main/authentication-register.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Side Register</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/authentication-register2.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Boxed Register</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <span class="d-flex">
                            <iconify-icon icon="solar:refresh-bold-duotone" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu">Forgot Password</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="../main/authentication-forgot-password.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Side Forgot Password</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/authentication-forgot-password2.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Boxed Forgot Password</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <span class="d-flex">
                            <iconify-icon icon="solar:magnifer-zoom-in-linear" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu">Two Steps</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="../main/authentication-two-steps.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Side Two Steps</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../main/authentication-two-steps2.html" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Boxed Two Steps</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="../main/authentication-maintenance.html"
                        aria-expanded="false">
                        <span class="d-flex">
                            <iconify-icon icon="solar:settings-linear" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu">Maintenance</span>
                    </a>
                </li>

                <!-- ---------------------------------- -->
                <!-- OTHER -->
                <!-- ---------------------------------- -->
                <li class="nav-small-cap">
                    <iconify-icon icon="solar:menu-dots-bold" class="nav-small-cap-icon fs-4"></iconify-icon>
                    <span class="hide-menu">OTHER</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <span class="d-flex">
                            <iconify-icon icon="solar:layers-minimalistic-line-duotone" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu">Menu Level</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="javascript:void(0)" class="sidebar-link sublink">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Level 1</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow sublink" href="javascript:void(0)" aria-expanded="false">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="sidebar-icon"></i>
                                </div>
                                <span class="hide-menu">Level 1.1</span>
                            </a>
                            <ul aria-expanded="false" class="collapse two-level">
                                <li class="sidebar-item">
                                    <a href="javascript:void(0)" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Level 2</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link has-arrow sublink" href="javascript:void(0)"
                                        aria-expanded="false">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <i class="sidebar-icon"></i>
                                        </div>
                                        <span class="hide-menu">Level 2.1</span>
                                    </a>
                                    <ul aria-expanded="false" class="collapse three-level">
                                        <li class="sidebar-item">
                                            <a href="javascript:void(0)" class="sidebar-link sublink">
                                                <div class="round-16 d-flex align-items-center justify-content-center">
                                                    <i class="sidebar-icon"></i>
                                                </div>
                                                <span class="hide-menu">Level 3</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="javascript:void(0)" class="sidebar-link sublink">
                                                <div class="round-16 d-flex align-items-center justify-content-center">
                                                    <i class="sidebar-icon"></i>
                                                </div>
                                                <span class="hide-menu">Level 3.1</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link link-disabled" href="#disabled" aria-expanded="false">
                        <span class="d-flex">
                            <iconify-icon icon="solar:forbidden-circle-line-duotone" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu">Disabled</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="#sub" aria-expanded="false">
                        <span class="d-flex">
                            <iconify-icon icon="solar:star-line-duotone" class="fs-6"></iconify-icon>
                        </span>
                        <div class="lh-base">
                            <div class="hide-menu">SubCaption</div>
                            <div class="hide-menu fs-2">This is the sutitle</div>
                        </div>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link justify-content-between" href="#chip" aria-expanded="false">
                        <div class="d-flex align-items-center gap-2">
                            <span class="d-flex">
                                <iconify-icon icon="solar:shield-check-line-duotone" class="fs-6"></iconify-icon>
                            </span>
                            <span class="hide-menu">Chip</span>
                        </div>
                        <div class="hide-menu">
                            <span
                                class="badge rounded-circle bg-primary d-flex align-items-center justify-content-center rounded-pill fs-2">9</span>
                        </div>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link justify-content-between" href="#outlined" aria-expanded="false">
                        <div class="d-flex align-items-center gap-2">
                            <span class="d-flex">
                                <iconify-icon icon="solar:smile-circle-outline" class="fs-6"></iconify-icon>
                            </span>
                            <span class="hide-menu">Outlined</span>
                        </div>
                        <span
                            class="hide-menu badge rounded-pill border border-primary text-primary fs-2 py-1 px-2">Outline</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="https://google.com" aria-expanded="false">
                        <span class="d-flex">
                            <iconify-icon icon="solar:link-square-linear" class="fs-6"></iconify-icon>
                        </span>
                        <span class="hide-menu">External Link</span>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- ---------------------------------- -->
        <!-- Start Vertical Layout Sidebar -->
        <!-- ---------------------------------- -->
    </div>
</aside>
<!--  Sidebar End -->