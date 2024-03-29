
<!DOCTYPE html>
<html class="no-js" lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8" />
    <title>Hatbazar | @yield('title')</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/frontend')}}/imgs/theme/favicon.svg" />
    <!-- Template CSS -->
    @include('frontend.layouts.inc.style')
</head>

<body>
    <!-- Quick view -->
    <div class="modal fade custom-modal" id="quickViewModal" tabindex="-1" aria-labelledby="quickViewModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12 mb-md-0 mb-sm-5">
                            <div class="detail-gallery">
                                <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                <!-- MAIN SLIDES -->
                                <div class="product-image-slider">
                                    <figure class="border-radius-10">
                                        <img src="{{asset('assets/frontend')}}/imgs/shop/product-16-2.jpg" alt="product image" />
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="{{asset('assets/frontend')}}/imgs/shop/product-16-1.jpg" alt="product image" />
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="{{asset('assets/frontend')}}/imgs/shop/product-16-3.jpg" alt="product image" />
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="{{asset('assets/frontend')}}/imgs/shop/product-16-4.jpg" alt="product image" />
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="{{asset('assets/frontend')}}/imgs/shop/product-16-5.jpg" alt="product image" />
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="{{asset('assets/frontend')}}/imgs/shop/product-16-6.jpg" alt="product image" />
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="{{asset('assets/frontend')}}/imgs/shop/product-16-7.jpg" alt="product image" />
                                    </figure>
                                </div>
                                <!-- THUMBNAILS -->
                                <div class="slider-nav-thumbnails">
                                    <div><img src="{{asset('assets/frontend')}}/imgs/shop/thumbnail-3.jpg" alt="product image" /></div>
                                    <div><img src="{{asset('assets/frontend')}}/imgs/shop/thumbnail-4.jpg" alt="product image" /></div>
                                    <div><img src="{{asset('assets/frontend')}}/imgs/shop/thumbnail-5.jpg" alt="product image" /></div>
                                    <div><img src="{{asset('assets/frontend')}}/imgs/shop/thumbnail-6.jpg" alt="product image" /></div>
                                    <div><img src="{{asset('assets/frontend')}}/imgs/shop/thumbnail-7.jpg" alt="product image" /></div>
                                    <div><img src="{{asset('assets/frontend')}}/imgs/shop/thumbnail-8.jpg" alt="product image" /></div>
                                    <div><img src="{{asset('assets/frontend')}}/imgs/shop/thumbnail-9.jpg" alt="product image" /></div>
                                </div>
                            </div>
                            <!-- End Gallery -->
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="detail-info pr-30 pl-30">
                                <span class="stock-status out-stock"> Sale Off </span>
                                <h3 class="title-detail"><a class='text-heading' href='shop-product-right.html'>Seeds of Change Organic Quinoa, Brown</a></h3>
                                <div class="product-detail-rating">
                                    <div class="product-rate-cover text-end">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (32 reviews)</span>
                                    </div>
                                </div>
                                <div class="clearfix product-price-cover">
                                    <div class="product-price primary-color float-left">
                                        <span class="current-price text-brand">$38</span>
                                        <span>
                                            <span class="save-price font-md color3 ml-15">26% Off</span>
                                            <span class="old-price font-md ml-15">$52</span>
                                        </span>
                                    </div>
                                </div>
                                <div class="detail-extralink mb-30">
                                    <div class="detail-qty border radius">
                                        <a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                                        <span class="qty-val">1</span>
                                        <a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                                    </div>
                                    <div class="product-extra-link2">
                                        <button type="submit" class="button button-add-to-cart"><i class="fi-rs-shopping-cart"></i>Add to cart</button>
                                    </div>
                                </div>
                                <div class="font-xs">
                                    <ul>
                                        <li class="mb-5">Vendor: <span class="text-brand">Nest</span></li>
                                        <li class="mb-5">MFG:<span class="text-brand"> Jun 4.2022</span></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Detail Info -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header class="header-area header-style-1 header-style-5 header-height-2">
        <div class="mobile-promotion">
            <span>Grand opening, <strong>up to 15%</strong> off all items. Only <strong>3 days</strong> left</span>
        </div>
{{-- Top Bar --}}
@include('frontend.layouts.inc.topbar')
{{-- End Top Bar --}}

{{-- Header Middle --}}
@include('frontend.layouts.inc.header-middle')
{{-- End Header Middle --}}

{{--  Header Bootom--}}
@include('frontend.layouts.inc.header-bottom')
{{-- End  Header Bootom --}}

    </header>
    <!-- Mobile Header -->
    <div class="mobile-header-active mobile-header-wrapper-style">
        <div class="mobile-header-wrapper-inner">
            <div class="mobile-header-top">
                <div class="mobile-header-logo">
                    <a href='index.html'><img src="{{asset('assets/frontend')}}/imgs/theme/logo.svg" alt="logo" /></a>
                </div>
                <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                    <button class="close-style search-close">
                        <i class="icon-top"></i>
                        <i class="icon-bottom"></i>
                    </button>
                </div>
            </div>
            <div class="mobile-header-content-area">
                <div class="mobile-search search-style-3 mobile-header-border">
                    <form action="#">
                        <input type="text" placeholder="Search for items…" />
                        <button type="submit"><i class="fi-rs-search"></i></button>
                    </form>
                </div>
                <div class="mobile-menu-wrap mobile-header-border">
                    <!-- mobile menu start -->
                    <nav>
                        <ul class="mobile-menu font-heading">
                            <li class="menu-item-has-children">
                                <a href='index.html'>Home</a>
                                <ul class="dropdown">
                                    <li><a href='index.html'>Home 1</a></li>
                                    <li><a href='index-2.html'>Home 2</a></li>
                                    <li><a href='index-3.html'>Home 3</a></li>
                                    <li><a href='index-4.html'>Home 4</a></li>
                                    <li><a href='index-5.html'>Home 5</a></li>
                                    <li><a href='index-6.html'>Home 6</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href='shop-grid-right.html'>shop</a>
                                <ul class="dropdown">
                                    <li><a href='shop-grid-right.html'>Shop Grid – Right Sidebar</a></li>
                                    <li><a href='shop-grid-left.html'>Shop Grid – Left Sidebar</a></li>
                                    <li><a href='shop-list-right.html'>Shop List – Right Sidebar</a></li>
                                    <li><a href='shop-list-left.html'>Shop List – Left Sidebar</a></li>
                                    <li><a href='shop-fullwidth.html'>Shop - Wide</a></li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Single Product</a>
                                        <ul class="dropdown">
                                            <li><a href='shop-product-right.html'>Product – Right Sidebar</a></li>
                                            <li><a href='shop-product-left.html'>Product – Left Sidebar</a></li>
                                            <li><a href='shop-product-full.html'>Product – No sidebar</a></li>
                                            <li><a href='shop-product-vendor.html'>Product – Vendor Infor</a></li>
                                        </ul>
                                    </li>
                                    <li><a href='shop-filter.html'>Shop – Filter</a></li>
                                    <li><a href='shop-wishlist.html'>Shop – Wishlist</a></li>
                                    <li><a href='shop-cart.html'>Shop – Cart</a></li>
                                    <li><a href='shop-checkout.html'>Shop – Checkout</a></li>
                                    <li><a href='shop-compare.html'>Shop – Compare</a></li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Shop Invoice</a>
                                        <ul class="dropdown">
                                            <li><a href='shop-invoice-1.html'>Shop Invoice 1</a></li>
                                            <li><a href='shop-invoice-2.html'>Shop Invoice 2</a></li>
                                            <li><a href='shop-invoice-3.html'>Shop Invoice 3</a></li>
                                            <li><a href='shop-invoice-4.html'>Shop Invoice 4</a></li>
                                            <li><a href='shop-invoice-5.html'>Shop Invoice 5</a></li>
                                            <li><a href='shop-invoice-6.html'>Shop Invoice 6</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Vendors</a>
                                <ul class="dropdown">
                                    <li><a href='vendors-grid.html'>Vendors Grid</a></li>
                                    <li><a href='vendors-list.html'>Vendors List</a></li>
                                    <li><a href='vendor-details-1.html'>Vendor Details 01</a></li>
                                    <li><a href='vendor-details-2.html'>Vendor Details 02</a></li>
                                    <li><a href='vendor-dashboard.html'>Vendor Dashboard</a></li>
                                    <li><a href='vendor-guide.html'>Vendor Guide</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Mega menu</a>
                                <ul class="dropdown">
                                    <li class="menu-item-has-children">
                                        <a href="#">Women's Fashion</a>
                                        <ul class="dropdown">
                                            <li><a href='shop-product-right.html'>Dresses</a></li>
                                            <li><a href='shop-product-right.html'>Blouses & Shirts</a></li>
                                            <li><a href='shop-product-right.html'>Hoodies & Sweatshirts</a></li>
                                            <li><a href='shop-product-right.html'>Women's Sets</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Men's Fashion</a>
                                        <ul class="dropdown">
                                            <li><a href='shop-product-right.html'>Jackets</a></li>
                                            <li><a href='shop-product-right.html'>Casual Faux Leather</a></li>
                                            <li><a href='shop-product-right.html'>Genuine Leather</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Technology</a>
                                        <ul class="dropdown">
                                            <li><a href='shop-product-right.html'>Gaming Laptops</a></li>
                                            <li><a href='shop-product-right.html'>Ultraslim Laptops</a></li>
                                            <li><a href='shop-product-right.html'>Tablets</a></li>
                                            <li><a href='shop-product-right.html'>Laptop Accessories</a></li>
                                            <li><a href='shop-product-right.html'>Tablet Accessories</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href='blog-category-fullwidth.html'>Blog</a>
                                <ul class="dropdown">
                                    <li><a href='blog-category-grid.html'>Blog Category Grid</a></li>
                                    <li><a href='blog-category-list.html'>Blog Category List</a></li>
                                    <li><a href='blog-category-big.html'>Blog Category Big</a></li>
                                    <li><a href='blog-category-fullwidth.html'>Blog Category Wide</a></li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Single Product Layout</a>
                                        <ul class="dropdown">
                                            <li><a href='blog-post-left.html'>Left Sidebar</a></li>
                                            <li><a href='blog-post-right.html'>Right Sidebar</a></li>
                                            <li><a href='blog-post-fullwidth.html'>No Sidebar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href='page-about-2.html'>About Us</a></li>
                                    <li><a href='page-contact.html'>Contact</a></li>
                                    <li><a href='page-account.html'>My Account</a></li>
                                    <li><a href='page-login.html'>Login</a></li>
                                    <li><a href='page-register.html'>Register</a></li>
                                    <li><a href='page-forgot-password.html'>Forgot password</a></li>
                                    <li><a href='page-reset-password.html'>Reset password</a></li>
                                    <li><a href='page-purchase-guide.html'>Purchase Guide</a></li>
                                    <li><a href='page-privacy-policy.html'>Privacy Policy</a></li>
                                    <li><a href='page-terms.html'>Terms of Service</a></li>
                                    <li><a href='page-404.html'>404 Page</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Language</a>
                                <ul class="dropdown">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">German</a></li>
                                    <li><a href="#">Spanish</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <!-- mobile menu end -->
                </div>
                <div class="mobile-header-info-wrap">
                    <div class="single-mobile-header-info">
                        <a href='page-contact.html'><i class="fi-rs-marker"></i> Our location </a>
                    </div>
                    <div class="single-mobile-header-info">
                        <a href='page-login.html'><i class="fi-rs-user"></i>Log In / Sign Up </a>
                    </div>
                    <div class="single-mobile-header-info">
                        <a href="#"><i class="fi-rs-headphones"></i>(+01) - 2345 - 6789 </a>
                    </div>
                </div>
                <div class="mobile-social-icon mb-50">
                    <h6 class="mb-15">Follow Us</h6>
                    <a href="#"><img src="{{asset('assets/frontend')}}/imgs/theme/icons/icon-facebook-white.svg" alt="" /></a>
                    <a href="#"><img src="{{asset('assets/frontend')}}/imgs/theme/icons/icon-twitter-white.svg" alt="" /></a>
                    <a href="#"><img src="{{asset('assets/frontend')}}/imgs/theme/icons/icon-instagram-white.svg" alt="" /></a>
                    <a href="#"><img src="{{asset('assets/frontend')}}/imgs/theme/icons/icon-pinterest-white.svg" alt="" /></a>
                    <a href="#"><img src="{{asset('assets/frontend')}}/imgs/theme/icons/icon-youtube-white.svg" alt="" /></a>
                </div>
                <div class="site-copyright">Copyright 2022 © Nest. All rights reserved. Powered by AliThemes.</div>
            </div>
        </div>
    </div>
    <!-- End Mobile Header -->
    <!--End header-->
    <main class="main">
        <!-- Main Content -->
        @yield('content')
        <!-- End Main Content -->
    </main>
    <!--Footer -->
    @include('frontend.layouts.inc.footer')
    <!--End Footer -->

    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="text-center">
                    <img src="{{asset('assets/frontend')}}/imgs/theme/loading.gif" alt="" />
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor JS-->
    @include('frontend.layouts.inc.script')
</body>
</html>
