<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Title -->
        <title>Made In Pak</title>

        <!-- Required Meta Tags Always Come First -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Favicon -->
        <link rel="shortcut icon" href="assets/favicon.png">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">

        <!-- CSS Implementing Plugins -->
        <link rel="stylesheet" href="assets/vendor/font-awesome/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/css/font-electro.css">

        <link rel="stylesheet" href="assets/vendor/animate.css/animate.min.css">
        <link rel="stylesheet" href="assets/vendor/hs-megamenu/src/hs.megamenu.css">
        <link rel="stylesheet" href="assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
        <link rel="stylesheet" href="assets/vendor/fancybox/jquery.fancybox.css">
        <link rel="stylesheet" href="assets/vendor/slick-carousel/slick/slick.css">
        <link rel="stylesheet" href="assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css">

        <!-- CSS Electro Template -->
        <link rel="stylesheet" href="assets/css/theme.css">
    </head>

    <body>

        <!-- ========== HEADER ========== -->
        <header id="header" class="u-header u-header-left-aligned-nav">
            <div class="u-header__section">
                <!-- Topbar -->
                <div class="u-header-topbar py-2 d-none d-xl-block">
                    <div class="container">
                        <div class="d-flex align-items-center">
                            <div class="topbar-left">
                                <a href="#" class="text-gray-110 font-size-13 u-header-topbar__nav-link">Welcome to Made-in-Pak</a>
                            </div>
                            <div class="topbar-right ml-auto">
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border">
                                        <a href="#" class="u-header-topbar__nav-link"><i class="ec ec-map-pointer mr-1"></i> Store Locator</a>
                                    </li>
                                    <li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border">
                                        <a href="../shop/track-your-order.html" class="u-header-topbar__nav-link"><i class="ec ec-transport mr-1"></i> Track Your Order</a>
                                    </li>
                                    <li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border
                                     u-header-topbar__nav-item-no-border u-header-topbar__nav-item-border-single">
                                        <div class="d-flex align-items-center">
                                            <!-- Language -->
                                            <div class="position-relative">
                                                <a id="languageDropdownInvoker" class="dropdown-nav-link dropdown-toggle d-flex align-items-center u-header-topbar__nav-link font-weight-normal" href="javascript:;" role="button"
                                                    aria-controls="languageDropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"
                                                    data-unfold-event="hover"
                                                    data-unfold-target="#languageDropdown"
                                                    data-unfold-type="css-animation"
                                                    data-unfold-duration="300"
                                                    data-unfold-delay="300"
                                                    data-unfold-hide-on-scroll="true"
                                                    data-unfold-animation-in="slideInUp"
                                                    data-unfold-animation-out="fadeOut">
                                                    {{-- <span class="d-inline-block d-sm-none">US</span> --}}
                                                    <span class="d-none d-sm-inline-flex align-items-center"><i class="ec ec-dollar mr-1"></i>
                                                         As Seller</span>
                                                </a>

                                                <div id="languageDropdown" class="dropdown-menu dropdown-unfold" aria-labelledby="languageDropdownInvoker">
                                                    {{-- <a class="dropdown-item active" href="#">English</a> --}}
                                                    <a class="dropdown-item" href="/seller/loginform">Sign In</a>
                                                    <a class="dropdown-item" href="/seller/registerform">Sign Up‎</a>
                                                </div>
                                            </div>
                                            <!-- End Language -->
                                        </div>
                                    </li>


                                                    @if ($id=Session::get('id'))
                                                    @php
                                                    $a= App\Buyer::where('id',$id)->value('first_name');
                                                    //   $name=$a->first_name.' '.$a->last_name;
                                                     @endphp
                                                       <i class="ec ec-user mr-1"></i> {{$a}}
                                                    @else
                                                    <li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border u-header-topbar__nav-item-no-border u-header-topbar__nav-item-border-single">
                                                        <div class="d-flex align-items-center">
                                                            <!-- Language -->
                                                            <div class="position-relative">
                                                                <a id="languageDropdownInvoker" class="dropdown-nav-link dropdown-toggle d-flex align-items-center u-header-topbar__nav-link font-weight-normal" href="javascript:;" role="button"
                                                                    aria-controls="languageDropdown"
                                                                    aria-haspopup="true"
                                                                    aria-expanded="false"
                                                                    data-unfold-event="hover"
                                                                    data-unfold-target="#language"
                                                                    data-unfold-type="css-animation"
                                                                    data-unfold-duration="300"
                                                                    data-unfold-delay="300"
                                                                    data-unfold-hide-on-scroll="true"
                                                                    data-unfold-animation-in="slideInUp"
                                                                    data-unfold-animation-out="fadeOut">
                                                                    {{-- <span class="d-inline-block d-sm-none">US</span> --}}
                                                                    <span class="d-none d-sm-inline-flex align-items-center"><i class="ec ec-dollar mr-1"></i>As Buyer</span>
                                                                </a>

                                                                <div id="language" class="dropdown-menu dropdown-unfold" aria-labelledby="languageDropdownInvoker">
                                                                    {{-- <a class="dropdown-item active" href="#">English</a> --}}

                                                                   <a class="dropdown-item" href="/buyer/loginform">Sign In</a>
                                                                    <a class="dropdown-item" href="/buyer/registerform">Sign Up‎</a>
                                                                </div>
                                                            </div>
                                            <!-- End Language -->
                                                        </div>
                                                        </li>
                                                    @endif


                                    {{-- <li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border">
                                        <!-- Account Sidebar Toggle Button -->
                                        <a id="sidebarNavToggler" href="javascript:;" role="button" class="u-header-topbar__nav-link"
                                            aria-controls="sidebarContent"
                                            aria-haspopup="true"
                                            aria-expanded="false"
                                            data-unfold-event="click"
                                            data-unfold-hide-on-scroll="false"
                                            data-unfold-target="#sidebarContent"
                                            data-unfold-type="css-animation"
                                            data-unfold-animation-in="fadeInRight"
                                            data-unfold-animation-out="fadeOutRight"
                                            data-unfold-duration="500">
                                            <?php
                                            if($id=Session::get('id')){
                                                $s=DB::table('vendors')->where('id','=',$id)->get();
                                                if($s){
                                                    foreach($s as $a){
                                                        $name=$a->first_name.' '.$a->last_name;
                                                    }
                                                }
                                                ?>
                                                <i class="ec ec-user mr-1"></i> {{$name}}
                                                <?php
                                            }else{
                                                ?>
                                            <!-- <i class="ec ec-user mr-1"></i> Register <span class="text-gray-50">or</span> Sign in -->
                                                <a href="/seller/loginform">Sign In</a><span class="text-gray-50"></span> Or
                                                <a href="/seller/registerform">Sign Up</a>
                                                <?php
                                            }
                                            ?>

                                        </a>
                                        <!-- End Account Sidebar Toggle Button -->
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Topbar -->

                <!-- Logo and Menu -->
                <div class="py-2 py-xl-4 bg-primary-down-lg">
                    <div class="container my-0dot5 my-xl-0">
                        <div class="row align-items-center">
                            <!-- Logo-offcanvas-menu -->
                            <div class="col-auto">
                                <!-- Nav -->
                                <nav class="navbar navbar-expand u-header__navbar py-0 justify-content-xl-between max-width-270 min-width-270">
                                    <!-- Logo -->
                                    <a class="order-1 order-xl-0 navbar-brand u-header__navbar-brand u-header__navbar-brand-center" href="../home/index.html" aria-label="Electro">
                                       <img src="assets/logo.png">
                                    </a>
                                    <!-- End Logo -->

                                    <!-- Fullscreen Toggle Button -->
                                    <button id="sidebarHeaderInvokerMenu" type="button" class="navbar-toggler d-block btn u-hamburger mr-3 mr-xl-0"
                                        aria-controls="sidebarHeader"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                        data-unfold-event="click"
                                        data-unfold-hide-on-scroll="false"
                                        data-unfold-target="#sidebarHeader1"
                                        data-unfold-type="css-animation"
                                        data-unfold-animation-in="fadeInLeft"
                                        data-unfold-animation-out="fadeOutLeft"
                                        data-unfold-duration="500">
                                        <span id="hamburgerTriggerMenu" class="u-hamburger__box">
                                            <span class="u-hamburger__inner"></span>
                                        </span>
                                    </button>
                                    <!-- End Fullscreen Toggle Button -->
                                </nav>
                                <!-- End Nav -->

                                <!-- ========== HEADER SIDEBAR ========== -->
                                <aside id="sidebarHeader1" class="u-sidebar u-sidebar--left" aria-labelledby="sidebarHeaderInvokerMenu">
                                    <div class="u-sidebar__scroller">
                                        <div class="u-sidebar__container">
                                            <div class="u-header-sidebar__footer-offset pb-0">
                                                <!-- Toggle Button -->
                                                <div class="position-absolute top-0 right-0 z-index-2 pt-4 pr-7">
                                                    <button type="button" class="close ml-auto"
                                                        aria-controls="sidebarHeader"
                                                        aria-haspopup="true"
                                                        aria-expanded="false"
                                                        data-unfold-event="click"
                                                        data-unfold-hide-on-scroll="false"
                                                        data-unfold-target="#sidebarHeader1"
                                                        data-unfold-type="css-animation"
                                                        data-unfold-animation-in="fadeInLeft"
                                                        data-unfold-animation-out="fadeOutLeft"
                                                        data-unfold-duration="500">
                                                        <span aria-hidden="true"><i class="ec ec-close-remove text-gray-90 font-size-20"></i></span>
                                                    </button>
                                                </div>
                                                <!-- End Toggle Button -->

                                                <!-- Content -->
                                                <div class="js-scrollbar u-sidebar__body">
                                                    <div id="headerSidebarContent" class="u-sidebar__content u-header-sidebar__content">
                                                        <!-- Logo -->
                                                        <a class="d-flex ml-0 navbar-brand u-header__navbar-brand u-header__navbar-brand-vertical" href="../home/index.html" aria-label="Electro">
                                                            <img src="assets/logo.png">
                                                        </a>
                                                        <!-- End Logo -->

                                                        <!-- List -->
                                                        <ul id="headerSidebarList" class="u-header-collapse__nav">
                                                            <!-- Home Section -->
                                                            <li class="u-has-submenu u-header-collapse__submenu">
                                                                <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarHomeCollapse" data-target="#headerSidebarHomeCollapse">
                                                                    Home & Static Pages
                                                                </a>

                                                                <div id="headerSidebarHomeCollapse" class="collapse" data-parent="#headerSidebarContent">
                                                                    <ul id="headerSidebarHomeMenu" class="u-header-collapse__nav-list">
                                                                        <!-- Home - v1 -->
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="../home/index.html">Home v1</a></li>
                                                                        <!-- End Home - v1 -->
                                                                        <!-- Home - v2 -->
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="../home/home-v2.html">Home v2</a></li>
                                                                        <!-- End Home - v2 -->
                                                                        <!-- Home - v3 -->
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="../home/home-v3.html">Home v3</a></li>
                                                                        <!-- End Home - v3 -->
                                                                        <!-- Home - v3-full-color-bg -->
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="../home/home-v3-full-color-bg.html">Home v3.1</a></li>
                                                                        <!-- End Home - v3-full-color-bg -->
                                                                        <!-- Home - v4 -->
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="../home/home-v4.html">Home v4</a></li>
                                                                        <!-- End Home - v4 -->
                                                                        <!-- Home - v5 -->
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="../home/home-v5.html">Home v5</a></li>
                                                                        <!-- End Home - v5 -->
                                                                        <!-- Home - v6 -->
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="../home/home-v6.html">Home v6</a></li>
                                                                        <!-- End Home - v6 -->
                                                                        <!-- Home - v7 -->
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="../home/home-v7.html">Home v7</a></li>
                                                                        <!-- End Home - v7 -->
                                                                        <!-- About -->
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="../home/about.html">About</a></li>
                                                                        <!-- End About -->
                                                                        <!-- Contact v1 -->
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="../home/contact-v1.html">Contact v1</a></li>
                                                                        <!-- End Contact v1 -->
                                                                        <!-- Contact v2 -->
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="../home/contact-v2.html">Contact v2</a></li>
                                                                        <!-- End Contact v2 -->
                                                                        <!-- FAQ -->
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="../home/faq.html">FAQ</a></li>
                                                                        <!-- End FAQ -->
                                                                        <!-- Store Directory -->
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="../home/store-directory.html">Store Directory</a></li>
                                                                        <!-- End Store Directory -->
                                                                        <!-- Terms and Conditions -->
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="../home/terms-and-conditions.html">Terms and Conditions</a></li>
                                                                        <!-- End Terms and Conditions -->
                                                                        <!-- 404 -->
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="../home/404.html">404</a></li>
                                                                        <!-- End 404 -->
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <!-- End Home Section -->

                                                            <!-- Shop Pages -->
                                                            <li class="u-has-submenu u-header-collapse__submenu">
                                                                <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarPagesCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarPagesCollapse">
                                                                    Shop Pages
                                                                </a>

                                                                <div id="headerSidebarPagesCollapse" class="collapse" data-parent="#headerSidebarContent">
                                                                    <ul id="headerSidebarPagesMenu" class="u-header-collapse__nav-list">
                                                                        <!-- Shop Grid -->
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="../shop/shop-grid.html">Shop Grid</a></li>
                                                                        <!-- End Shop Grid -->

                                                                        <!-- Shop Grid Extended -->
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="../shop/shop-grid-extended.html">Shop Grid Extended</a></li>
                                                                        <!-- End Shop Grid Extended -->

                                                                        <!-- Shop List View -->
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="../shop/shop-list-view.html">Shop List View</a></li>
                                                                        <!-- End Shop List View -->

                                                                        <!-- Shop List View Small -->
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="../shop/shop-list-view-small.html">Shop List View Small</a></li>
                                                                        <!-- End Shop List View Small -->

                                                                        <!-- Shop Left Sidebar -->
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="../shop/shop-left-sidebar.html">Shop Left Sidebar</a></li>
                                                                        <!-- End Shop Left Sidebar -->

                                                                        <!-- Shop Full width -->
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="../shop/shop-full-width.html">Shop Full width</a></li>
                                                                        <!-- End Shop Full width -->

                                                                        <!-- Shop Right Sidebar -->
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="../shop/shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                                                        <!-- End Shop Right Sidebar -->
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <!-- End Shop Pages -->

                                                            <!-- Product Categories -->
                                                            <li class="u-has-submenu u-header-collapse__submenu">
                                                                <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarBlogCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarBlogCollapse">
                                                                    Product Categories
                                                                </a>

                                                                <div id="headerSidebarBlogCollapse" class="collapse" data-parent="#headerSidebarContent">
                                                                    <ul id="headerSidebarBlogMenu" class="u-header-collapse__nav-list">
                                                                        <!-- 4 Column Sidebar -->
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="../shop/product-categories-4-column-sidebar.html">4 Column Sidebar</a></li>
                                                                        <!-- End 4 Column Sidebar -->

                                                                        <!-- 5 Column Sidebar -->
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="../shop/product-categories-5-column-sidebar.html">5 Column Sidebar</a></li>
                                                                        <!-- End 5 Column Sidebar -->

                                                                        <!-- 6 Column Full width -->
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="../shop/product-categories-6-column-full-width.html">6 Column Full width</a></li>
                                                                        <!-- End 6 Column Full width -->

                                                                        <!-- 7 Column Full width -->
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="../shop/product-categories-7-column-full-width.html">7 Column Full width</a></li>
                                                                        <!-- End 7 Column Full width -->
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <!-- End Product Categories -->

                                                            <!-- Single Product Pages -->
                                                            <li class="u-has-submenu u-header-collapse__submenu">
                                                                <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarShopCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarShopCollapse">
                                                                    Single Product Pages
                                                                </a>

                                                                <div id="headerSidebarShopCollapse" class="collapse" data-parent="#headerSidebarContent">
                                                                    <ul id="headerSidebarShopMenu" class="u-header-collapse__nav-list">
                                                                        <!-- Single Product Extended -->
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="../shop/single-product-extended.html">Single Product Extended</a></li>
                                                                        <!-- End Single Product Extended -->

                                                                        <!-- Single Product Fullwidth -->
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="../shop/single-product-fullwidth.html">Single Product Fullwidth</a></li>
                                                                        <!-- End Single Product Fullwidth -->

                                                                        <!-- Single Product Sidebar -->
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="../shop/single-product-sidebar.html">Single Product Sidebar</a></li>
                                                                        <!-- End Single Product Sidebar -->
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <!-- End Single Product Pages -->

                                                            <!-- Ecommerce Pages -->
                                                            <li class="u-has-submenu u-header-collapse__submenu">
                                                                <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarDemosCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarDemosCollapse">
                                                                    Ecommerce Pages
                                                                </a>

                                                                <div id="headerSidebarDemosCollapse" class="collapse" data-parent="#headerSidebarContent">
                                                                    <ul id="headerSidebarDemosMenu" class="u-header-collapse__nav-list">
                                                                        <!-- Shop -->
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="../shop/shop.html">Shop</a></li>
                                                                        <!-- End Shop -->

                                                                        <!-- Cart -->
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="../shop/cart.html">Cart</a></li>
                                                                        <!-- End Cart -->

                                                                        <!-- Checkout -->
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="../shop/checkout.html">Checkout</a></li>
                                                                        <!-- End Checkout -->

                                                                        <!-- My Account -->
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="../shop/my-account.html">My Account</a></li>
                                                                        <!-- End My Account -->

                                                                        <!-- Track your Order -->
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="../shop/track-your-order.html">Track your Order</a></li>
                                                                        <!-- End Track your Order -->

                                                                        <!-- Compare -->
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="../shop/compare.html">Compare</a></li>
                                                                        <!-- End Compare -->

                                                                        <!-- wishlist -->
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="../shop/wishlist.html">wishlist</a></li>
                                                                        <!-- End wishlist -->
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <!-- End Ecommerce Pages -->

                                                            <!-- Shop Columns -->
                                                            <li class="u-has-submenu u-header-collapse__submenu">
                                                                <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebardocsCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebardocsCollapse">
                                                                    Shop Columns
                                                                </a>

                                                                <div id="headerSidebardocsCollapse" class="collapse" data-parent="#headerSidebarContent">
                                                                    <ul id="headerSidebardocsMenu" class="u-header-collapse__nav-list">
                                                                        <!-- 7 Column Full width -->
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="../shop/shop-7-columns-full-width.html">7 Column Full width</a></li>
                                                                        <!-- End 7 Column Full width -->

                                                                        <!-- 6 Column Full width -->
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="../shop/shop-6-columns-full-width.html">6 Column Full width</a></li>
                                                                        <!-- End 6 Column Full width -->

                                                                        <!-- 5 Column Sidebar -->
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="../shop/shop-5-columns-sidebar.html">5 Column Sidebar</a></li>
                                                                        <!-- End 5 Column Sidebar -->

                                                                        <!-- 4 Column Sidebar -->
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="../shop/shop-4-columns-sidebar.html">4 Column Sidebar</a></li>
                                                                        <!-- End 4 Column Sidebar -->

                                                                        <!-- 3 Column Sidebar -->
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="../shop/shop-3-columns-sidebar.html">3 Column Sidebar</a></li>
                                                                        <!-- End 3 Column Sidebar -->
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <!-- End Shop Columns -->

                                                            <!-- Blog Pages -->
                                                            <li class="u-has-submenu u-header-collapse__submenu">
                                                                <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascript:;" data-target="#headerSidebarblogsCollapse" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="headerSidebarblogsCollapse">
                                                                    Blog Pages
                                                                </a>

                                                                <div id="headerSidebarblogsCollapse" class="collapse" data-parent="#headerSidebarContent">
                                                                    <ul id="headerSidebarblogsMenu" class="u-header-collapse__nav-list">
                                                                        <!-- Blog v1 -->
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="../blog/blog-v1.html">Blog v1</a></li>
                                                                        <!-- End Blog v1 -->

                                                                        <!-- Blog v2 -->
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="../blog/blog-v2.html">Blog v2</a></li>
                                                                        <!-- End Blog v2 -->

                                                                        <!-- Blog v3 -->
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="../blog/blog-v3.html">Blog v3</a></li>
                                                                        <!-- End Blog v3 -->

                                                                        <!-- Blog Full Width -->
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="../blog/blog-full-width.html">Blog Full Width</a></li>
                                                                        <!-- End Blog Full Width -->

                                                                        <!-- Single Blog Post -->
                                                                        <li><a class="u-header-collapse__submenu-nav-link" href="../blog/single-blog-post.html">Single Blog Post</a></li>
                                                                        <!-- End Single Blog Post -->
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <!-- End Blog Pages -->
                                                        </ul>
                                                        <!-- End List -->
                                                    </div>
                                                </div>
                                                <!-- End Content -->
                                            </div>
                                        </div>
                                    </div>
                                </aside>
                                <!-- ========== END HEADER SIDEBAR ========== -->
                            </div>
                            <!-- End Logo-offcanvas-menu -->
                            <!-- Primary Menu -->
                            <div class="col d-none d-xl-block">
                                <!-- Nav -->
                                <nav class="js-mega-menu navbar navbar-expand-md u-header__navbar u-header__navbar--no-space">
                                    <!-- Navigation -->
                                    <div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse">
                                        <ul class="navbar-nav u-header__navbar-nav">
                                            <!-- Home -->
                                            <li class="nav-item hs-has-sub-menu u-header__nav-item"
                                                data-event="hover"
                                                data-animation-in="slideInUp"
                                                data-animation-out="fadeOut">
                                                <a id="HomeMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="HomeSubMenu">Home</a>

                                                <!-- Home - Submenu -->
                                                <ul id="HomeSubMenu" class="hs-sub-menu u-header__sub-menu animated fadeOut" aria-labelledby="HomeMegaMenu" style="min-width: 230px; display: none;">
                                                    <li><a class="nav-link u-header__sub-menu-nav-link" href="../home/index.html">Home v1</a></li>
                                                    <li><a class="nav-link u-header__sub-menu-nav-link" href="../home/home-v2.html">Home v2</a></li>
                                                    <li><a class="nav-link u-header__sub-menu-nav-link" href="../home/home-v3.html">Home v3</a></li>
                                                    <li><a class="nav-link u-header__sub-menu-nav-link" href="../home/home-v3-full-color-bg.html">Home v3.1</a></li>
                                                    <li><a class="nav-link u-header__sub-menu-nav-link" href="../home/home-v4.html">Home v4</a></li>
                                                    <li><a class="nav-link u-header__sub-menu-nav-link" href="../home/home-v5.html">Home v5</a></li>
                                                    <li><a class="nav-link u-header__sub-menu-nav-link" href="../home/home-v6.html">Home v6</a></li>
                                                    <li><a class="nav-link u-header__sub-menu-nav-link" href="../home/home-v7.html">Home v7</a></li>
                                                </ul>
                                                <!-- End Home - Submenu -->
                                            </li>
                                            <!-- End Home -->

                                            <!-- Pages -->
                                            <li class="nav-item hs-has-mega-menu u-header__nav-item"
                                                data-event="hover"
                                                data-animation-in="slideInUp"
                                                data-animation-out="fadeOut">
                                                <a id="pagesMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false">Pages</a>

                                                <!-- Home - Mega Menu -->
                                                <div class="hs-mega-menu w-100 u-header__sub-menu" aria-labelledby="pagesMegaMenu">
                                                    <div class="row u-header__mega-menu-wrapper">
                                                        <div class="col-md-3">
                                                            <span class="u-header__sub-menu-title">Home & Static Pages</span>
                                                            <ul class="u-header__sub-menu-nav-group">
                                                                <li><a href="../home/index.html" class="nav-link u-header__sub-menu-nav-link">Home v1</a></li>
                                                                <li><a href="../home/home-v2.html" class="nav-link u-header__sub-menu-nav-link">Home v2</a></li>
                                                                <li><a href="../home/home-v3.html" class="nav-link u-header__sub-menu-nav-link">Home v3</a></li>
                                                                <li><a href="../home/home-v3-full-color-bg.html" class="nav-link u-header__sub-menu-nav-link">Home v3.1</a></li>
                                                                <li><a href="../home/home-v4.html" class="nav-link u-header__sub-menu-nav-link">Home v4</a></li>
                                                                <li><a href="../home/home-v5.html" class="nav-link u-header__sub-menu-nav-link">Home v5</a></li>
                                                                <li><a href="../home/home-v6.html" class="nav-link u-header__sub-menu-nav-link">Home v6</a></li>
                                                                <li><a href="../home/home-v7.html" class="nav-link u-header__sub-menu-nav-link">Home v7</a></li>
                                                                <li><a href="../home/about.html" class="nav-link u-header__sub-menu-nav-link">About</a></li>
                                                                <li><a href="../home/contact-v1.html" class="nav-link u-header__sub-menu-nav-link">Contact v1</a></li>
                                                                <li><a href="../home/contact-v2.html" class="nav-link u-header__sub-menu-nav-link">Contact v2</a></li>
                                                                <li><a href="../home/faq.html" class="nav-link u-header__sub-menu-nav-link">FAQ</a></li>
                                                                <li><a href="../home/store-directory.html" class="nav-link u-header__sub-menu-nav-link">Store Directory</a></li>
                                                                <li><a href="../home/terms-and-conditions.html" class="nav-link u-header__sub-menu-nav-link">Terms and Conditions</a></li>
                                                                <li><a href="../home/404.html" class="nav-link u-header__sub-menu-nav-link">404</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="u-header__sub-menu-title">Shop Pages</span>
                                                            <ul class="u-header__sub-menu-nav-group mb-3">
                                                                <li><a href="../shop/shop-grid.html" class="nav-link u-header__sub-menu-nav-link">Shop Grid</a></li>
                                                                <li><a href="../shop/shop-grid-extended.html" class="nav-link u-header__sub-menu-nav-link">Shop Grid Extended</a></li>
                                                                <li><a href="../shop/shop-list-view.html" class="nav-link u-header__sub-menu-nav-link">Shop List View</a></li>
                                                                <li><a href="../shop/shop-list-view-small.html" class="nav-link u-header__sub-menu-nav-link">Shop List View Small</a></li>
                                                                <li><a href="../shop/shop-left-sidebar.html" class="nav-link u-header__sub-menu-nav-link">Shop Left Sidebar</a></li>
                                                                <li><a href="../shop/shop-full-width.html" class="nav-link u-header__sub-menu-nav-link">Shop Full width</a></li>
                                                                <li><a href="../shop/shop-right-sidebar.html" class="nav-link u-header__sub-menu-nav-link">Shop Right Sidebar</a></li>
                                                            </ul>
                                                            <span class="u-header__sub-menu-title">Product Categories</span>
                                                            <ul class="u-header__sub-menu-nav-group">
                                                                <li><a href="../shop/product-categories-4-column-sidebar.html" class="nav-link u-header__sub-menu-nav-link">4 Column Sidebar</a></li>
                                                                <li><a href="../shop/product-categories-5-column-sidebar.html" class="nav-link u-header__sub-menu-nav-link">5 Column Sidebar</a></li>
                                                                <li><a href="../shop/product-categories-6-column-full-width.html" class="nav-link u-header__sub-menu-nav-link">6 Column Full width</a></li>
                                                                <li><a href="../shop/product-categories-7-column-full-width.html" class="nav-link u-header__sub-menu-nav-link">7 Column Full width</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="u-header__sub-menu-title">Single Product Pages</span>
                                                            <ul class="u-header__sub-menu-nav-group mb-3">
                                                                <li><a href="../shop/single-product-extended.html" class="nav-link u-header__sub-menu-nav-link">Single Product Extended</a></li>
                                                                <li><a href="../shop/single-product-fullwidth.html" class="nav-link u-header__sub-menu-nav-link">Single Product Fullwidth</a></li>
                                                                <li><a href="../shop/single-product-sidebar.html" class="nav-link u-header__sub-menu-nav-link">Single Product Sidebar</a></li>
                                                            </ul>
                                                            <span class="u-header__sub-menu-title">Ecommerce Pages</span>
                                                            <ul class="u-header__sub-menu-nav-group">
                                                                <li><a href="../shop/shop.html" class="nav-link u-header__sub-menu-nav-link">Shop</a></li>
                                                                <li><a href="../shop/cart.html" class="nav-link u-header__sub-menu-nav-link">Cart</a></li>
                                                                <li><a href="../shop/checkout.html" class="nav-link u-header__sub-menu-nav-link">Checkout</a></li>
                                                                <li><a href="../shop/my-account.html" class="nav-link u-header__sub-menu-nav-link">My Account</a></li>
                                                                <li><a href="../shop/track-your-order.html" class="nav-link u-header__sub-menu-nav-link">Track your Order</a></li>
                                                                <li><a href="../shop/compare.html" class="nav-link u-header__sub-menu-nav-link">Compare</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <span class="u-header__sub-menu-title">Blog Pages</span>
                                                            <ul class="u-header__sub-menu-nav-group mb-3">
                                                                <li><a href="../blog/blog-v1.html" class="nav-link u-header__sub-menu-nav-link">Blog v1</a></li>
                                                                <li><a href="../blog/blog-v2.html" class="nav-link u-header__sub-menu-nav-link">Blog v2</a></li>
                                                                <li><a href="../blog/blog-v3.html" class="nav-link u-header__sub-menu-nav-link">Blog v3</a></li>
                                                                <li><a href="../blog/blog-full-width.html" class="nav-link u-header__sub-menu-nav-link">Blog Full Width</a></li>
                                                                <li><a href="../blog/single-blog-post.html" class="nav-link u-header__sub-menu-nav-link">Single Blog Post</a></li>
                                                            </ul>
                                                            <span class="u-header__sub-menu-title">Shop Columns</span>
                                                            <ul class="u-header__sub-menu-nav-group">
                                                                <li><a href="../shop/shop-7-columns-full-width.html" class="nav-link u-header__sub-menu-nav-link">7 Column Full width</a></li>
                                                                <li><a href="../shop/shop-6-columns-full-width.html" class="nav-link u-header__sub-menu-nav-link">6 Column Full width</a></li>
                                                                <li><a href="../shop/shop-5-columns-sidebar.html" class="nav-link u-header__sub-menu-nav-link">5 Column Sidebar</a></li>
                                                                <li><a href="../shop/shop-4-columns-sidebar.html" class="nav-link u-header__sub-menu-nav-link">4 Column Sidebar</a></li>
                                                                <li><a href="../shop/shop-3-columns-sidebar.html" class="nav-link u-header__sub-menu-nav-link">3 Column Sidebar</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Home - Mega Menu -->
                                            </li>
                                            <!-- End Pages -->

                                            <!-- Blog -->
                                            <li class="nav-item hs-has-sub-menu u-header__nav-item"
                                                data-event="hover"
                                                data-animation-in="slideInUp"
                                                data-animation-out="fadeOut">
                                                <a id="blogMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="blogSubMenu">Blog</a>

                                                <!-- Blog - Submenu -->
                                                <ul id="blogSubMenu" class="hs-sub-menu u-header__sub-menu" aria-labelledby="blogMegaMenu" style="min-width: 230px;">
                                                    <li><a class="nav-link u-header__sub-menu-nav-link" href="../blog/blog-v1.html">Blog v1</a></li>
                                                    <li><a class="nav-link u-header__sub-menu-nav-link" href="../blog/blog-v2.html">Blog v2</a></li>
                                                    <li><a class="nav-link u-header__sub-menu-nav-link" href="../blog/blog-v3.html">Blog v3</a></li>
                                                    <li><a class="nav-link u-header__sub-menu-nav-link" href="../blog/blog-full-width.html">Blog Full Width</a></li>
                                                    <li><a class="nav-link u-header__sub-menu-nav-link" href="../blog/single-blog-post.html">Single Blog Post</a></li>
                                                </ul>
                                                <!-- End Submenu -->
                                            </li>
                                            <!-- End Blog -->

                                            <!-- About us -->
                                            <li class="nav-item u-header__nav-item">
                                                <a class="nav-link u-header__nav-link" href="../home/about.html">About us</a>
                                            </li>
                                            <!-- End About us -->

                                            <!-- FAQs -->
                                            <li class="nav-item u-header__nav-item">
                                                <a class="nav-link u-header__nav-link" href="../home/faq.html">FAQs</a>
                                            </li>
                                            <!-- End FAQs -->

                                            <!-- Contact Us -->
                                            <li class="nav-item u-header__nav-item">
                                                <a class="nav-link u-header__nav-link" href="../home/contact-v1.html">Contact Us</a>
                                            </li>
                                            <!-- End Contact Us -->
                                        </ul>
                                    </div>
                                    <!-- End Navigation -->
                                </nav>
                                <!-- End Nav -->
                            </div>
                            <!-- End Primary Menu -->
                            <!-- Customer Care -->
                            <div class="d-none d-xl-block col-md-auto">
                                <div class="d-flex">
                                    <i class="ec ec-support font-size-50 text-primary"></i>
                                    <div class="ml-2">
                                        <div class="phone">
                                            <strong>Support</strong> <a href="tel:(92) 51 5147116" class="text-gray-90">(92) 51 5147116</a>
                                        </div>
                                        <div class="email">
                                            E-mail: <a href="mailto:Info@madeinpak.co?subject=Help Need" class="text-gray-90">Info@madeinpak.co</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Customer Care -->
                            <!-- Header Icons -->
                            <div class="d-xl-none col col-xl-auto text-right text-xl-left pl-0 pl-xl-3 position-static">
                                <div class="d-inline-flex">
                                    <ul class="d-flex list-unstyled mb-0 align-items-center">
                                        <!-- Search -->
                                        <li class="col d-xl-none px-2 px-sm-3 position-static">
                                            <a id="searchClassicInvoker" class="font-size-22 text-gray-90 text-lh-1 btn-text-secondary" href="javascript:;" role="button"
                                                data-toggle="tooltip"
                                                data-placement="top"
                                                title="Search"
                                                aria-controls="searchClassic"
                                                aria-haspopup="true"
                                                aria-expanded="false"
                                                data-unfold-target="#searchClassic"
                                                data-unfold-type="css-animation"
                                                data-unfold-duration="300"
                                                data-unfold-delay="300"
                                                data-unfold-hide-on-scroll="true"
                                                data-unfold-animation-in="slideInUp"
                                                data-unfold-animation-out="fadeOut">
                                                <span class="ec ec-search"></span>
                                            </a>

                                            <!-- Input -->
                                            <div id="searchClassic" class="dropdown-menu dropdown-unfold dropdown-menu-right left-0 mx-2" aria-labelledby="searchClassicInvoker">
                                                <form class="js-focus-state input-group px-3">
                                                    <input class="form-control" type="search" placeholder="Search Product">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-primary px-3" type="button"><i class="font-size-18 ec ec-search"></i></button>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- End Input -->
                                        </li>
                                        <!-- End Search -->
                                        <li class="col d-none d-xl-block"><a href="../shop/compare.html" class="text-gray-90" data-toggle="tooltip" data-placement="top" title="Compare"><i class="font-size-22 ec ec-compare"></i></a></li>
                                        <li class="col d-none d-xl-block"><a href="../shop/wishlist.html" class="text-gray-90" data-toggle="tooltip" data-placement="top" title="Favorites"><i class="font-size-22 ec ec-favorites"></i></a></li>
                                        <li class="col d-xl-none px-2 px-sm-3"><a href="../shop/my-account.html" class="text-gray-90" data-toggle="tooltip" data-placement="top" title="My Account"><i class="font-size-22 ec ec-user"></i></a></li>
                                        <li class="col pr-xl-0 px-2 px-sm-3">
                                            <a href="../shop/cart.html" class="text-gray-90 position-relative d-flex " data-toggle="tooltip" data-placement="top" title="Cart">
                                                <i class="font-size-22 ec ec-shopping-bag"></i>
                                                <span class="width-22 height-22 bg-dark position-absolute d-flex align-items-center justify-content-center rounded-circle left-12 top-8 font-weight-bold font-size-12 text-white">2</span>
                                                <span class="d-none d-xl-block font-weight-bold font-size-16 text-gray-90 ml-3">$1785.00</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Header Icons -->
                        </div>
                    </div>
                </div>
                <!-- End Logo and Menu -->

                <!-- Vertical-and-Search-Bar -->
                <div class="d-none d-xl-block bg-primary">
                    <div class="container">
                        <div class="row align-items-stretch min-height-50">
                            <!-- Vertical Menu -->
                            <div class="col-md-auto d-none d-xl-flex align-items-end">
                                <div class="max-width-270 min-width-270">
                                    <!-- Basics Accordion -->
                                    <div id="basicsAccordion">
                                        <!-- Card -->
                                        <div class="card border-0 rounded-0">
                                            <div class="card-header bg-primary rounded-0 card-collapse border-0" id="basicsHeadingOne">
                                                <button type="button" class="btn-link btn-remove-focus btn-block d-flex card-btn py-3 text-lh-1 px-4 shadow-none btn-primary rounded-top-lg border-0 font-weight-bold text-gray-90"
                                                    data-toggle="collapse"
                                                    data-target="#basicsCollapseOne"
                                                    aria-expanded="true"
                                                    aria-controls="basicsCollapseOne">
                                                    <span class="pl-1 text-gray-90">Shop By Department</span>
                                                    <span class="text-gray-90 ml-3">
                                                        <span class="ec ec-arrow-down-search"></span>
                                                    </span>
                                                </button>
                                            </div>
                                            <div id="basicsCollapseOne" class="collapse vertical-menu v1"
                                                aria-labelledby="basicsHeadingOne"
                                                data-parent="#basicsAccordion">
                                                <div class="card-body p-0">
        <nav class="js-mega-menu navbar navbar-expand-xl u-header__navbar u-header__navbar--no-space hs-menu-initialized">
        <div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse">
            <ul class="navbar-nav u-header__navbar-nav border-primary border-top-0">
                   <?php
                        //  $a=\App\Category::get();
                        //  foreach($a as $b){
                     ?>
                        <li class="nav-item hs-has-mega-menu u-header__nav-item"
                    data-event="hover"
                    data-animation-in="slideInUp"
                    data-animation-out="fadeOut"
                    data-position="left">
                    <a id="basicMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle"
                     href="/products" aria-haspopup="true" aria-expanded="false">{{$b->cat_name}}</a>

                    <!-- Nav Item - Mega Menu -->
                    <div class="hs-mega-menu vmm-tfw u-header__sub-menu" aria-labelledby="basicMegaMenu">
                        <div class="vmm-bg">
                            <!-- <img class="img-fluid" src="assets/img/500X400/img1.png" alt="Image Description"> -->
                        </div>
                                    <div class="row u-header__mega-menu-wrapper">

                                        <?php
                                    $sub=DB::select("select * from sub_categories where cat_id='$b->id'");

                                    // foreach($sub as $s){
                                    //     //echo $s->subcat_name;
                                    //         ?>
                                    //     <div class="col mb-3 mb-sm-0">
                                    //         <span class="u-header__sub-menu-title">{{$s->subcat_name}}</span>

                                    //         <ul class="u-header__sub-menu-nav-group mb-3">
                                    //                                      <?php
                                    //                                         $item=DB::select("select * from item_types where subcat_id='$s->id'");
                                    //                                         foreach($item as $ss){
                                    //                                         //echo $ss->itemtype_name;

                                    //                                         ?>
                                    //                                                 <li><a class="nav-link u-header__sub-menu-nav-link" href="#">{{$ss->itemtype_name}}</a></li>

                                    //                                                 <?php
                                    //                                             }
                                    //                                             ?>
                                    //                                             </ul>


                                    //                                         </div>
                                    //                                             <?php
                                    //                                     }
                                    //                                     ?>
                                    //                                         <!-- <div class="col mb-3 mb-sm-0">
                                    //                                             <span class="u-header__sub-menu-title">Office & Stationery</span>
                                    //                                             <ul class="u-header__sub-menu-nav-group">
                                    //                                                 <li><a class="nav-link u-header__sub-menu-nav-link" href="#">All Office & Stationery</a></li>
                                    //                                             </ul>
                                    //                                         </div> -->
                                    //                                     </div>
                                    //                                 </div>
                                    //                                 <!-- End Nav Item - Mega Menu -->
                                    //                             </li>
                                    //                             <?php
                                    //                                         }




                                    //                                             ?>




                                    //                             {{-- <!-- @foreach($categories as $all) --> --}}
                                    //                             <!-- <li class="nav-item u-header__nav-item"
                                    //                                 data-event="hover"
                                    //                                 data-position="left">
                                    //                                 {{-- <a href="#" class="nav-link u-header__nav-link font-weight-bold">{{$all->cat_name}}</a> --}}
                                    //                             </li> -->
                                    //                             {{-- <!-- @endforeach --> --}}
                                    //                             <!-- <li class="nav-item hs-has-mega-menu u-header__nav-item"
                                    //                                 data-event="hover"
                                    //                                 data-animation-in="slideInUp"
                                    //                                 data-animation-out="fadeOut"
                                    //                                 data-position="left">
                                    //                                 <a id="basicMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="/products" aria-haspopup="true" aria-expanded="false">Computers & Accessories</a>

                                    //                                  Nav Item - Mega Menu
                                    //                                 <div class="hs-mega-menu vmm-tfw u-header__sub-menu" aria-labelledby="basicMegaMenu">
                                    //                                     <div class="vmm-bg">
                                    //                                         <img class="img-fluid" src="assets/img/500X400/img1.png" alt="Image Description">
                                    //                                     </div>
                                    //                                     <div class="row u-header__mega-menu-wrapper">
                                    //                                         <div class="col mb-3 mb-sm-0">
                                    //                                             <span class="u-header__sub-menu-title">Computers & Accessories</span>
                                    //                                             <ul class="u-header__sub-menu-nav-group mb-3">
                                    //                                                 <li><a class="nav-link u-header__sub-menu-nav-link" href="#">All Computers & Accessories</a></li>
                                    //                                                 <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Laptops, Desktops & Monitors</a></li>
                                    //                                                 <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Printers & Ink</a></li>
                                    //                                                 <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Networking & Internet Devices</a></li>
                                    //                                                 <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Computer Accessories</a></li>
                                    //                                                 <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Software</a></li>
                                    //                                                 <li>
                                    //                                                     <a class="nav-link u-header__sub-menu-nav-link u-nav-divider border-top pt-2 flex-column align-items-start" href="#">
                                    //                                                         <div class="">All Electronics</div>
                                    //                                                         <div class="u-nav-subtext font-size-11 text-gray-30">Discover more products</div>
                                    //                                                     </a>
                                    //                                                 </li>
                                    //                                             </ul>
                                    //                                         </div>

                                    //                                         <div class="col mb-3 mb-sm-0">
                                    //                                             <span class="u-header__sub-menu-title">Office & Stationery</span>
                                    //                                             <ul class="u-header__sub-menu-nav-group">
                                    //                                                 <li><a class="nav-link u-header__sub-menu-nav-link" href="#">All Office & Stationery</a></li>
                                    //                                             </ul>
                                    //                                         </div>
                                    //                                     </div>
                                    //                                 </div>
                                    //                                 End Nav Item - Mega Menu
                                    //                             </li> -->
                                    //                             <!-- End Nav Item MegaMenu-->
                                    //                             <!-- Nav Item MegaMenu -->

                                    //                             <!-- End Nav Item -->
                                    //                         </ul>
                                    //                     </div>
                                    //                 </nav>
                                    //             </div>
                                    //         </div>
                                    //     </div>
                                    //     <!-- End Card -->
                                    // </div>
                                    <!-- End Basics Accordion -->
                                </div>
                            </div>
                            <!-- End Vertical Menu -->
                            <!-- Search bar -->
                            <div class="col align-self-center">
                                <!-- Search-Form -->
                                <form class="js-focus-state">
                                    <label class="sr-only" for="searchProduct">Search</label>
                                    <div class="input-group">
                                        <input type="email" class="form-control py-2 pl-5 font-size-15 border-0 height-40 rounded-left-pill" name="email" id="searchProduct" placeholder="Search for Products" aria-label="Search for Products" aria-describedby="searchProduct1" required>
                                        <div class="input-group-append">
                                            <!-- Select -->
                                            <select class="js-select selectpicker dropdown-select custom-search-categories-select"
                                                data-style="btn height-40 text-gray-60 font-weight-normal border-0 rounded-0 bg-white px-5 py-2">
                                                <option value="one" selected>All Categories</option>
                                                {{-- @foreach($categories as $cat)
                                                <option value="">{{$cat->cat_name}}</option>

                                                @endforeach --}}
                                            </select>
                                            <!-- End Select -->
                                            <button class="btn btn-dark height-40 py-2 px-3 rounded-right-pill" type="button" id="searchProduct1">
                                                <span class="ec ec-search font-size-24"></span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <!-- End Search-Form -->
                            </div>
                            <!-- End Search bar -->
                            <!-- Header Icons -->
                            <div class="col-md-auto align-self-center">
                                <div class="d-flex">
                                    <ul class="d-flex list-unstyled mb-0">
                                        <li class="col"><a href="../shop/compare.html" class="text-gray-90" data-toggle="tooltip" data-placement="top" title="Compare"><i class="font-size-22 ec ec-compare"></i></a></li>
                                        <li class="col"><a href="../shop/wishlist.html" class="text-gray-90" data-toggle="tooltip" data-placement="top" title="Favorites"><i class="font-size-22 ec ec-favorites"></i></a></li>
                                        <li class="col pr-0">
                                            <a href="../shop/cart.html" class="text-gray-90 position-relative d-flex " data-toggle="tooltip" data-placement="top" title="Cart">
                                                <i class="font-size-22 ec ec-shopping-bag"></i>
                                                <span class="width-22 height-22 bg-dark position-absolute flex-content-center text-white rounded-circle left-12 top-8 font-weight-bold font-size-12">2</span>
                                                <span class="font-weight-bold font-size-16 text-gray-90 ml-3">$1785.00</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Header Icons -->
                        </div>
                    </div>
                </div>
                <!-- End Vertical-and-secondary-menu -->
            </div>
        </header>



@yield('content')


<footer>
            <!-- Footer-top-widget -->
            <div class="container d-none d-lg-block mb-3">
                <div class="row">
                    <div class="col-wd-3 col-lg-4">
                        <div class="widget-column">
                            <div class="border-bottom border-color-1 mb-5">
                                <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Featured Products</h3>
                            </div>
                            <ul class="list-unstyled products-group">
                                <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                                    <div class="col-auto">
                                        <a href="../shop/single-product-fullwidth.html" class="d-block width-75 text-center"><img class="img-fluid" src="assets/img/75X75/img1.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col pl-4 d-flex flex-column">
                                        <h5 class="product-item__title mb-0"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Purple Wireless Headphones Solo 2 HD</a></h5>
                                        <div class="prodcut-price mt-auto">
                                            <div class="font-size-15">$1149.00</div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                                    <div class="col-auto">
                                        <a href="../shop/single-product-fullwidth.html" class="d-block width-75 text-center"><img class="img-fluid" src="assets/img/75X75/img2.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col pl-4 d-flex flex-column">
                                        <h5 class="product-item__title mb-0"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Powerbank 1130 mAh Blue</a></h5>
                                        <div class="prodcut-price mt-auto">
                                            <div class="font-size-15">$210.00</div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                                    <div class="col-auto">
                                        <a href="../shop/single-product-fullwidth.html" class="d-block width-75 text-center"><img class="img-fluid" src="assets/img/75X75/img3.jpg" alt="Image Description"></a>
                                    </div>
                                    <div class="col pl-4 d-flex flex-column">
                                        <h5 class="product-item__title mb-0"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Nerocool EN52377 Dead Silence Gaming Cube Case</a></h5>
                                        <div class="prodcut-price mt-auto">
                                            <div class="font-size-15">$180.00</div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-wd-3 col-lg-4">
                        <div class="border-bottom border-color-1 mb-5">
                            <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Onsale Products</h3>
                        </div>
                        <ul class="list-unstyled products-group">
                            <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                                <div class="col-auto">
                                    <a href="../shop/single-product-fullwidth.html" class="d-block width-75 text-center"><img class="img-fluid" src="assets/img/75X75/img4.jpg" alt="Image Description"></a>
                                </div>
                                <div class="col pl-4 d-flex flex-column">
                                    <h5 class="product-item__title mb-0"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Yellow Earphones Waterproof with Bluetooth</a></h5>
                                    <div class="prodcut-price mt-auto flex-horizontal-center">
                                        <ins class="font-size-15 text-decoration-none">$110.00</ins>
                                        <del class="font-size-12 text-gray-9 ml-2">$250.00</del>
                                    </div>
                                </div>
                            </li>
                            <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                                <div class="col-auto">
                                    <a href="../shop/single-product-fullwidth.html" class="d-block width-75 text-center"><img class="img-fluid" src="assets/img/75X75/img5.jpg" alt="Image Description"></a>
                                </div>
                                <div class="col pl-4 d-flex flex-column">
                                    <h5 class="product-item__title mb-0"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Camera C430W 4k Waterproof</a></h5>
                                    <div class="prodcut-price mt-auto flex-horizontal-center">
                                        <ins class="font-size-15 text-decoration-none">$899.00</ins>
                                        <del class="font-size-12 text-gray-9 ml-2">$1200.00</del>
                                    </div>
                                </div>
                            </li>
                            <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                                <div class="col-auto">
                                    <a href="../shop/single-product-fullwidth.html" class="d-block width-75 text-center"><img class="img-fluid" src="assets/img/75X75/img6.jpg" alt="Image Description"></a>
                                </div>
                                <div class="col pl-4 d-flex flex-column">
                                    <h5 class="product-item__title mb-0"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Smartphone 6S 32GB LTE</a></h5>
                                    <div class="prodcut-price mt-auto flex-horizontal-center">
                                        <ins class="font-size-15 text-decoration-none">$2100.00</ins>
                                        <del class="font-size-12 text-gray-9 ml-2">$3299.00</del>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-wd-3 col-lg-4">
                        <div class="border-bottom border-color-1 mb-5">
                            <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Top Rated Products</h3>
                        </div>
                        <ul class="list-unstyled products-group">
                            <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                                <div class="col-auto">
                                    <a href="../shop/single-product-fullwidth.html" class="d-block width-75 text-center"><img class="img-fluid" src="assets/img/75X75/img7.jpg" alt="Image Description"></a>
                                </div>
                                <div class="col pl-4 d-flex flex-column">
                                    <h5 class="product-item__title mb-0"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Smartwatch 2.0 LTE Wifi Waterproof</a></h5>
                                    <div class="text-warning mb-2">
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                    </div>
                                    <div class="prodcut-price mt-auto">
                                        <div class="font-size-15">$725.00</div>
                                    </div>
                                </div>
                            </li>
                            <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                                <div class="col-auto">
                                    <a href="../shop/single-product-fullwidth.html" class="d-block width-75 text-center"><img class="img-fluid" src="assets/img/75X75/img8.jpg" alt="Image Description"></a>
                                </div>
                                <div class="col pl-4 d-flex flex-column">
                                    <h5 class="product-item__title mb-0"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">22Mps Camera 6200U with 500GB SDcard</a></h5>
                                    <div class="text-warning mb-2">
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="far fa-star text-muted"></small>
                                    </div>
                                    <div class="prodcut-price mt-auto">
                                        <div class="font-size-15">$2999.00</div>
                                    </div>
                                </div>
                            </li>
                            <li class="product-item product-item__list row no-gutters mb-6 remove-divider">
                                <div class="col-auto">
                                    <a href="../shop/single-product-fullwidth.html" class="d-block width-75 text-center"><img class="img-fluid" src="assets/img/75X75/img9.jpg" alt="Image Description"></a>
                                </div>
                                <div class="col pl-4 d-flex flex-column">
                                    <h5 class="product-item__title mb-0"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Full Color LaserJet Pro M452dn</a></h5>
                                    <div class="text-warning mb-2">
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="fas fa-star"></small>
                                        <small class="far fa-star text-muted"></small>
                                    </div>
                                    <div class="prodcut-price mt-auto">
                                        <div class="font-size-15">$439.00</div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-wd-3 d-none d-wd-block">
                        <a href="../shop/shop.html" class="d-block"><img class="img-fluid" src="assets/img/330X360/img1.jpg" alt="Image Description"></a>
                    </div>
                </div>
            </div>
            <!-- End Footer-top-widget -->
            <!-- Footer-newsletter -->
            <div class="bg-primary py-3">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7 mb-md-3 mb-lg-0">
                            <div class="row align-items-center">
                                <div class="col-auto flex-horizontal-center">
                                    <i class="ec ec-newsletter font-size-40"></i>
                                    <h2 class="font-size-20 mb-0 ml-3">Sign up to Newsletter</h2>
                                </div>
                                <div class="col my-4 my-md-0">
                                    <h5 class="font-size-15 ml-4 mb-0">...and receive <strong>$20 coupon for first shopping.</strong></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <!-- Subscribe Form -->
                            <form class="js-validate js-form-message">
                                <label class="sr-only" for="subscribeSrEmail">Email address</label>
                                <div class="input-group input-group-pill">
                                    <input type="email" class="form-control border-0 height-40" name="email" id="subscribeSrEmail" placeholder="Email address" aria-label="Email address" aria-describedby="subscribeButton" required
                                    data-msg="Please enter a valid email address.">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-dark btn-sm-wide height-40 py-2" id="subscribeButton">Sign Up</button>
                                    </div>
                                </div>
                            </form>
                            <!-- End Subscribe Form -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Footer-newsletter -->
            <!-- Footer-bottom-widgets -->
            <div class="pt-8 pb-4 bg-gray-13">
                <div class="container mt-1">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="mb-6">
                                       <!-- Logo -->
                                    <a class="order-1 order-xl-0 navbar-brand u-header__navbar-brand u-header__navbar-brand-center" href="../home/index.html" aria-label="Electro">
                                        <img src="assets/logo.png">

                                    </a>
                                    <!-- End Logo -->
                            </div>
                            <div class="mb-4">
                                <div class="row no-gutters">
                                    <div class="col-auto">
                                        <i class="ec ec-support text-primary font-size-56"></i>
                                    </div>
                                    <div class="col pl-3">
                                        <div class="font-size-13 font-weight-light">Got questions? Call us 24/7!</div>
                                        <a href="tel:+80080018588" class="font-size-20 text-gray-90">(92) 51 5147116</a>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <h6 class="mb-1 font-weight-bold">Contact info</h6>
                                <address class="">
                                    4th Floor Madeinpak HQ,Sector A, DHA 2, Islamabad Pakistan
                                </address>
                            </div>
                            <div class="my-4 my-md-4">
                                <ul class="list-inline mb-0 opacity-7">
                                    <li class="list-inline-item mr-0">
                                        <a class="btn font-size-20 btn-icon btn-soft-dark btn-bg-transparent rounded-circle" href="#">
                                            <span class="fab fa-facebook-f btn-icon__inner"></span>
                                        </a>
                                    </li>
                                    <li class="list-inline-item mr-0">
                                        <a class="btn font-size-20 btn-icon btn-soft-dark btn-bg-transparent rounded-circle" href="#">
                                            <span class="fab fa-google btn-icon__inner"></span>
                                        </a>
                                    </li>
                                    <li class="list-inline-item mr-0">
                                        <a class="btn font-size-20 btn-icon btn-soft-dark btn-bg-transparent rounded-circle" href="#">
                                            <span class="fab fa-twitter btn-icon__inner"></span>
                                        </a>
                                    </li>
                                    <li class="list-inline-item mr-0">
                                        <a class="btn font-size-20 btn-icon btn-soft-dark btn-bg-transparent rounded-circle" href="#">
                                            <span class="fab fa-github btn-icon__inner"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="row">
                                <div class="col-12 col-md mb-4 mb-md-0">
                                    <h6 class="mb-3 font-weight-bold">Find it Fast</h6>
                                    <!-- List Group -->
                                    <ul class="list-group list-group-flush list-group-borderless mb-0 list-group-transparent">
                                        <li><a class="list-group-item list-group-item-action" href="../shop/product-categories-5-column-sidebar.html">Laptops & Computers</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="../shop/product-categories-5-column-sidebar.html">Cameras & Photography</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="../shop/product-categories-5-column-sidebar.html">Smart Phones & Tablets</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="../shop/product-categories-5-column-sidebar.html">Video Games & Consoles</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="../shop/product-categories-5-column-sidebar.html">TV & Audio</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="../shop/product-categories-5-column-sidebar.html">Gadgets</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="../shop/product-categories-5-column-sidebar.html">Car Electronic & GPS</a></li>
                                    </ul>
                                    <!-- End List Group -->
                                </div>

                                <div class="col-12 col-md mb-4 mb-md-0">
                                    <!-- List Group -->
                                    <ul class="list-group list-group-flush list-group-borderless mb-0 list-group-transparent mt-md-6">
                                        <li><a class="list-group-item list-group-item-action" href="../shop/product-categories-5-column-sidebar.html">Printers & Ink</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="../shop/product-categories-5-column-sidebar.html">Software</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="../shop/product-categories-5-column-sidebar.html">Office Supplies</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="../shop/product-categories-5-column-sidebar.html">Computer Components</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="../shop/product-categories-5-column-sidebar.html">Accesories</a></li>
                                    </ul>
                                    <!-- End List Group -->
                                </div>

                                <div class="col-12 col-md mb-4 mb-md-0">
                                    <h6 class="mb-3 font-weight-bold">Customer Care</h6>
                                    <!-- List Group -->
                                    <ul class="list-group list-group-flush list-group-borderless mb-0 list-group-transparent">
                                        <li><a class="list-group-item list-group-item-action" href="../shop/my-account.html">My Account</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="../shop/track-your-order.html">Order Tracking</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="../shop/wishlist.html">Wish List</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="../home/terms-and-conditions.html">Customer Service</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="../home/terms-and-conditions.html">Returns / Exchange</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="../home/faq.html">FAQs</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="../home/terms-and-conditions.html">Product Support</a></li>
                                    </ul>
                                    <!-- End List Group -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Footer-bottom-widgets -->
            <!-- Footer-copy-right -->
            <div class="bg-gray-14 py-2">
                <div class="container">
                    <div class="flex-center-between d-block d-md-flex">
                        <div class="mb-3 mb-md-0">© <a href="#" class="font-weight-bold text-gray-90">Made-in-Pak</a> - All rights Reserved</div>
                        <div class="text-md-right">
                            <span class="d-inline-block bg-white border rounded p-1">
                                <img class="max-width-5" src="assets/img/100X60/img1.jpg" alt="Image Description">
                            </span>
                            <span class="d-inline-block bg-white border rounded p-1">
                                <img class="max-width-5" src="assets/img/100X60/img2.jpg" alt="Image Description">
                            </span>
                            <span class="d-inline-block bg-white border rounded p-1">
                                <img class="max-width-5" src="assets/img/100X60/img3.jpg" alt="Image Description">
                            </span>
                            <span class="d-inline-block bg-white border rounded p-1">
                                <img class="max-width-5" src="assets/img/100X60/img4.jpg" alt="Image Description">
                            </span>
                            <span class="d-inline-block bg-white border rounded p-1">
                                <img class="max-width-5" src="assets/img/100X60/img5.jpg" alt="Image Description">
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Footer-copy-right -->
        </footer>

        <aside id="sidebarContent" class="u-sidebar u-sidebar__lg" aria-labelledby="sidebarNavToggler">
            <div class="u-sidebar__scroller">
                <div class="u-sidebar__container">
                    <div class="js-scrollbar u-header-sidebar__footer-offset pb-3">
                        <!-- Toggle Button -->
                        <div class="d-flex align-items-center pt-4 px-7">
                            <button type="button" class="close ml-auto"
                                aria-controls="sidebarContent"
                                aria-haspopup="true"
                                aria-expanded="false"
                                data-unfold-event="click"
                                data-unfold-hide-on-scroll="false"
                                data-unfold-target="#sidebarContent"
                                data-unfold-type="css-animation"
                                data-unfold-animation-in="fadeInRight"
                                data-unfold-animation-out="fadeOutRight"
                                data-unfold-duration="500">
                                <i class="ec ec-close-remove"></i>
                            </button>
                        </div>
                        <!-- End Toggle Button -->

                        <!-- Content -->
                        <div class="js-scrollbar u-sidebar__body">
                            <div class="u-sidebar__content u-header-sidebar__content">
                                <form class="js-validate">
                                    <!-- Login -->
                                    <div id="login" data-target-group="idForm">
                                        <!-- Title -->
                                        <header class="text-center mb-7">
                                        <h2 class="h4 mb-0">Welcome Back!</h2>
                                        <p>Login to manage your account.</p>
                                        </header>
                                        <!-- End Title -->

                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <div class="js-form-message js-focus-state">
                                                <label class="sr-only" for="signinEmail">Email</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="signinEmailLabel">
                                                            <span class="fas fa-user"></span>
                                                        </span>
                                                    </div>
                                                    <input type="email" class="form-control" name="email" id="signinEmail" placeholder="Email" aria-label="Email" aria-describedby="signinEmailLabel" required
                                                    data-msg="Please enter a valid email address."
                                                    data-error-class="u-has-error"
                                                    data-success-class="u-has-success">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Form Group -->

                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <div class="js-form-message js-focus-state">
                                              <label class="sr-only" for="signinPassword">Password</label>
                                              <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="signinPasswordLabel">
                                                        <span class="fas fa-lock"></span>
                                                    </span>
                                                </div>
                                                <input type="password" class="form-control" name="password" id="signinPassword" placeholder="Password" aria-label="Password" aria-describedby="signinPasswordLabel" required
                                                   data-msg="Your password is invalid. Please try again."
                                                   data-error-class="u-has-error"
                                                   data-success-class="u-has-success">
                                              </div>
                                            </div>
                                        </div>
                                        <!-- End Form Group -->

                                        <div class="d-flex justify-content-end mb-4">
                                            <a class="js-animation-link small link-muted" href="javascript:;"
                                               data-target="#forgotPassword"
                                               data-link-group="idForm"
                                               data-animation-in="slideInUp">Forgot Password?</a>
                                        </div>

                                        <div class="mb-2">
                                            <button type="submit" class="btn btn-block btn-sm btn-primary transition-3d-hover">Login</button>
                                        </div>

                                        <div class="text-center mb-4">
                                            <span class="small text-muted">Do not have an account?</span>
                                            <a class="js-animation-link small text-dark" href="javascript:;"
                                               data-target="#signup"
                                               data-link-group="idForm"
                                               data-animation-in="slideInUp">Signup
                                            </a>
                                        </div>

                                        <div class="text-center">
                                            <span class="u-divider u-divider--xs u-divider--text mb-4">OR</span>
                                        </div>

                                        <!-- Login Buttons -->
                                        <div class="d-flex">
                                            <a class="btn btn-block btn-sm btn-soft-facebook transition-3d-hover mr-1" href="#">
                                              <span class="fab fa-facebook-square mr-1"></span>
                                              Facebook
                                            </a>
                                            <a class="btn btn-block btn-sm btn-soft-google transition-3d-hover ml-1 mt-0" href="#">
                                              <span class="fab fa-google mr-1"></span>
                                              Google
                                            </a>
                                        </div>
                                        <!-- End Login Buttons -->
                                    </div>

                                    <!-- Signup -->
                                    <div id="signup" style="display: none; opacity: 0;" data-target-group="idForm">
                                        <!-- Title -->
                                        <header class="text-center mb-7">
                                        <h2 class="h4 mb-0">Welcome to Made In Pak.</h2>
                                        <p>Fill out the form to get started.</p>
                                        </header>
                                        <!-- End Title -->

                                        <form method="POST" action="/seller/register">
                                            @csrf
                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <div class="js-form-message js-focus-state">
                                                <label class="sr-only" for="signupEmail">Email</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="signupEmailLabel">
                                                            <span class="fas fa-user"></span>
                                                        </span>
                                                    </div>
                                                    <input type="email" class="form-control" name="email" id="signupEmail" placeholder="Email" aria-label="Email" aria-describedby="signupEmailLabel" required
                                                    data-msg="Please enter a valid email address."
                                                    data-error-class="u-has-error"
                                                    data-success-class="u-has-success">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Input -->

                                        <!-- Form Group -->
                                         <div class="form-group">
                                            <div class="js-form-message js-focus-state">
                                                <label class="sr-only" for="signupPassword">Password</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="signupPasswordLabel">
                                                            <span class="fas fa-lock"></span>
                                                        </span>
                                                    </div>
                                                    <input type="password" class="form-control" name="password" id="signupPassword" placeholder="Password" aria-label="Password" aria-describedby="signupPasswordLabel" required
                                                    data-msg="Your password is invalid. Please try again."
                                                    data-error-class="u-has-error"
                                                    data-success-class="u-has-success">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Input -->

                                        <!-- Form Group -->
                                         <div class="form-group">
                                            <div class="js-form-message js-focus-state">
                                            <label class="sr-only" for="signupConfirmPassword">Confirm Password</label>
                                                <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="signupConfirmPasswordLabel">
                                                        <span class="fas fa-key"></span>
                                                    </span>
                                                </div>
                                                <input type="password" class="form-control" name="confirmPassword" id="signupConfirmPassword" placeholder="Confirm Password" aria-label="Confirm Password" aria-describedby="signupConfirmPasswordLabel" required
                                                data-msg="Password does not match the confirm password."
                                                data-error-class="u-has-error"
                                                data-success-class="u-has-success">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Input -->

                                         <div class="mb-2">
                                            <button type="submit" class="btn btn-block btn-sm btn-primary transition-3d-hover">Get Started</button>
                                        </div>
                                           </form>
                                        <div class="text-center mb-4">
                                            <span class="small text-muted">Already have an account?</span>
                                            <a class="js-animation-link small text-dark" href="javascript:;"
                                                data-target="#login"
                                                data-link-group="idForm"
                                                data-animation-in="slideInUp">Login
                                            </a>
                                        </div>

                                        <div class="text-center">
                                            <span class="u-divider u-divider--xs u-divider--text mb-4">OR</span>
                                        </div>

                                        <!-- Login Buttons -->
                                        <div class="d-flex">
                                            <a class="btn btn-block btn-sm btn-soft-facebook transition-3d-hover mr-1" href="#">
                                                <span class="fab fa-facebook-square mr-1"></span>
                                                Facebook
                                            </a>
                                            <a class="btn btn-block btn-sm btn-soft-google transition-3d-hover ml-1 mt-0" href="#">
                                                <span class="fab fa-google mr-1"></span>
                                                Google
                                            </a>
                                        </div>
                                        <!-- End Login Buttons -->
                                    </div>
                                    <!-- End Signup -->


                                    <!-- Forgot Password -->
                                    <div id="forgotPassword" style="display: none; opacity: 0;" data-target-group="idForm">
                                        <!-- Title -->
                                        <header class="text-center mb-7">
                                            <h2 class="h4 mb-0">Recover Password.</h2>
                                            <p>Enter your email address and an email with instructions will be sent to you.</p>
                                        </header>
                                        <!-- End Title -->

                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <div class="js-form-message js-focus-state">
                                                <label class="sr-only" for="recoverEmail">Your email</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="recoverEmailLabel">
                                                            <span class="fas fa-user"></span>
                                                        </span>
                                                    </div>
                                                    <input type="email" class="form-control" name="email" id="recoverEmail" placeholder="Your email" aria-label="Your email" aria-describedby="recoverEmailLabel" required
                                                    data-msg="Please enter a valid email address."
                                                    data-error-class="u-has-error"
                                                    data-success-class="u-has-success">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Form Group -->

                                        <div class="mb-2">
                                            <button type="submit" class="btn btn-block btn-sm btn-primary transition-3d-hover">Recover Password</button>
                                        </div>

                                        <div class="text-center mb-4">
                                            <span class="small text-muted">Remember your password?</span>
                                            <a class="js-animation-link small" href="javascript:;"
                                               data-target="#login"
                                               data-link-group="idForm"
                                               data-animation-in="slideInUp">Login
                                            </a>
                                        </div>
                                    </div>
                                    <!-- End Forgot Password -->
                                </form>
                            </div>
                        </div>
                        <!-- End Content -->
                    </div>
                </div>
            </div>
        </aside>


        <a class="js-go-to u-go-to" href="#"
            data-position='{"bottom": 15, "right": 15 }'
            data-type="fixed"
            data-offset-top="400"
            data-compensation="#header"
            data-show-effect="slideInUp"
            data-hide-effect="slideOutDown">
            <span class="fas fa-arrow-up u-go-to__inner"></span>
        </a>

        <script src="{{asset('assets/vendor/jquery/dist/jquery.min.js')}}"></script>
        <!-- <script src="assets/vendor/jquery/dist/jquery.min.js"></script> -->
        <script src="{{asset('assets/vendor/jquery-migrate/dist/jquery-migrate.min.js')}}"></script>
        <script src="{{asset('assets/vendor/popper.js/dist/umd/popper.min.js')}}"></script>
        <script src="{{asset('assets/vendor/bootstrap/bootstrap.min.js')}}"></script>

        <!-- JS Implementing Plugins -->
        <script src="assets/vendor/appear.js"></script>
        <script src="assets/vendor/jquery.countdown.min.js"></script>
        <script src="assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
        <script src="assets/vendor/svg-injector/dist/svg-injector.min.js"></script>
        <script src="assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
        <script src="assets/vendor/fancybox/jquery.fancybox.min.js"></script>
        <script src="assets/vendor/typed.js/lib/typed.min.js"></script>
        <script src="assets/vendor/slick-carousel/slick/slick.js"></script>
        <script src="assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>

        <!-- JS Electro -->
        <script src="assets/js/hs.core.js"></script>
        <script src="assets/js/components/hs.countdown.js"></script>
        <script src="assets/js/components/hs.header.js"></script>
        <script src="assets/js/components/hs.hamburgers.js"></script>
        <script src="assets/js/components/hs.unfold.js"></script>
        <script src="assets/js/components/hs.focus-state.js"></script>
        <script src="assets/js/components/hs.malihu-scrollbar.js"></script>
        <script src="assets/js/components/hs.validation.js"></script>
        <script src="assets/js/components/hs.fancybox.js"></script>
        <script src="assets/js/components/hs.onscroll-animation.js"></script>
        <script src="assets/js/components/hs.slick-carousel.js"></script>
        <script src="assets/js/components/hs.show-animation.js"></script>
        <script src="assets/js/components/hs.svg-injector.js"></script>
        <script src="assets/js/components/hs.go-to.js"></script>
        <script src="assets/js/components/hs.selectpicker.js"></script>
        @stack('scripts')

</body>
</html>
