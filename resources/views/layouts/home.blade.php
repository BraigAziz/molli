<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Molla - Bootstrap eCommerce Template</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/icons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/icons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/icons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/images/icons/site.html') }}">
    <link rel="mask-icon" href="{{ asset('assets/images/icons/safari-pinned-tab.svg') }}" color="#666666">
    <link rel="shortcut icon" href="{{ asset('assets/images/icons/favicon.ico') }}">
    <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="{{ asset('assets/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css') }}">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/owl-carousel/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/magnific-popup/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/jquery.countdown.css') }}">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/skins/skin-demo-2.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/demos/demo-2.css') }}">
</head>

<body>
<div class="page-wrapper">
    <header class="header header-2 header-intro-clearance">
        <div class="header-top">
            <div class="container">
                <div class="header-left">
                    <p>Special collection already available.</p><a href="{{ asset('#') }}">&nbsp;Read more ...</a>
                </div><!-- End .header-left -->

                <div class="header-right">

                    <ul class="top-menu">
                        <li>
                            <a href="{{ asset('#') }}">Links</a>
                            <ul>
                                <li>
                                    <div class="header-dropdown">
                                        <a href="{{ asset('#') }}">USD</a>
                                        <div class="header-menu">
                                            <ul>
                                                <li><a href="{{ asset('#') }}">Eur</a></li>
                                                <li><a href="{{ asset('#') }}">Usd</a></li>
                                            </ul>
                                        </div><!-- End .header-menu -->
                                    </div>
                                </li>
                                <li>
                                    <div class="header-dropdown">
                                        <a href="{{ asset('#') }}">English</a>
                                        <div class="header-menu">
                                            <ul>
                                                <li><a href="{{ asset('#') }}">English</a></li>
                                                <li><a href="{{ asset('#') }}">French</a></li>
                                                <li><a href="{{ asset('#') }}">Spanish</a></li>
                                            </ul>
                                        </div><!-- End .header-menu -->
                                    </div>
                                </li>
                                <li>
                                    @guest
                                        @if (Route::has('login'))
                                            <a href="{{ route('login') }}">Sign in / Sign up</a>
                                        @endif
                                    @else
                                        <div class="header-dropdown">
                                            <a href="{{ asset('#') }}">{{ Auth::user()->name }}</a>
                                            <div class="header-menu">
                                                <ul>
                                                    <li><a href="">My account</a></li>
                                                    <li>
                                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                            Logout
                                                        </a>

                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                            @csrf
                                                        </form>
                                                    </li>

                                                </ul>
                                            </div><!-- End .header-menu -->
                                        </div>
                                    @endguest
                                </li>
                            </ul>
                        </li>
                    </ul><!-- End .top-menu -->
                </div><!-- End .header-right -->

            </div><!-- End .container -->
        </div><!-- End .header-top -->

        <div class="header-middle">
            <div class="container">
                <div class="header-left">
                    <button class="mobile-menu-toggler">
                        <span class="sr-only">Toggle mobile menu</span>
                        <i class="icon-bars"></i>
                    </button>

                    <a href="{{ asset('index.html') }}" class="logo">
                        <img src="{{ asset('assets/images/demos/demo-2/logo.png') }}" alt="Molla Logo" width="105" height="25">
                    </a>
                </div><!-- End .header-left -->

                <div class="header-center">
                    <div class="header-search header-search-extended header-search-visible header-search-no-radius d-none d-lg-block">
                        <a href="{{ asset('#') }}" class="search-toggle" role="button"><i class="icon-search"></i></a>
                        <form action="#" method="get">
                            <div class="header-search-wrapper search-wrapper-wide">
                                <label for="q" class="sr-only">Search</label>
                                <input type="search" class="form-control" name="q" id="q" placeholder="Search product ..." required>
                                <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                            </div><!-- End .header-search-wrapper -->
                        </form>
                    </div><!-- End .header-search -->
                </div>

                <div class="header-right">
                    <div class="account">
                        <a href="{{ asset('dashboard.html') }}" title="My account">
                            <div class="icon">
                                <i class="icon-user"></i>
                            </div>
                            <p>Account</p>
                        </a>
                    </div><!-- End .compare-dropdown -->

                    <div class="wishlist">
                        <a href="{{ asset('wishlist.html') }}" title="Wishlist">
                            <div class="icon">
                                <i class="icon-heart-o"></i>
                                <span class="wishlist-count badge">3</span>
                            </div>
                            <p>Wishlist</p>
                        </a>
                    </div><!-- End .compare-dropdown -->

                    <div class="dropdown cart-dropdown">
                        <a href="{{ asset('#') }}" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                            <div class="icon">
                                <i class="icon-shopping-cart"></i>
                                <span class="cart-count">2</span>
                            </div>
                            <p>Cart</p>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-cart-products">
                                <div class="product">
                                    <div class="product-cart-details">
                                        <h4 class="product-title">
                                            <a href="{{ asset('product.html') }}">Beige knitted elastic runner shoes</a>
                                        </h4>

                                        <span class="cart-product-info">
                                                <span class="cart-product-qty">1</span>
                                                x $84.00
                                            </span>
                                    </div><!-- End .product-cart-details -->

                                    <figure class="product-image-container">
                                        <a href="{{ asset('product.html') }}" class="product-image">
                                            <img src="{{ asset('assets/images/products/cart/product-1.jpg') }}" alt="product">
                                        </a>
                                    </figure>
                                    <a href="{{ asset('#') }}" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                </div><!-- End .product -->

                                <div class="product">
                                    <div class="product-cart-details">
                                        <h4 class="product-title">
                                            <a href="{{ asset('product.html') }}">Blue utility pinafore denim dress</a>
                                        </h4>

                                        <span class="cart-product-info">
                                                <span class="cart-product-qty">1</span>
                                                x $76.00
                                            </span>
                                    </div><!-- End .product-cart-details -->

                                    <figure class="product-image-container">
                                        <a href="{{ asset('product.html') }}" class="product-image">
                                            <img src="{{ asset('assets/images/products/cart/product-2.jpg') }}" alt="product">
                                        </a>
                                    </figure>
                                    <a href="{{ asset('#') }}" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                </div><!-- End .product -->
                            </div><!-- End .cart-product -->

                            <div class="dropdown-cart-total">
                                <span>Total</span>

                                <span class="cart-total-price">$160.00</span>
                            </div><!-- End .dropdown-cart-total -->

                            <div class="dropdown-cart-action">
                                <a href="{{ asset('cart.html') }}" class="btn btn-primary">View Cart</a>
                                <a href="{{ asset('checkout.html') }}" class="btn btn-outline-primary-2"><span>Checkout</span><i class="icon-long-arrow-right"></i></a>
                            </div><!-- End .dropdown-cart-total -->
                        </div><!-- End .dropdown-menu -->
                    </div><!-- End .cart-dropdown -->
                </div><!-- End .header-right -->
            </div><!-- End .container -->
        </div><!-- End .header-middle -->

        <div class="header-bottom sticky-header">
            <div class="container">
                <div class="header-left">
                    <div class="dropdown category-dropdown">
                        <a href="{{ asset('#') }}" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static" title="Browse Categories">
                            Browse Categories
                        </a>

                        <div class="dropdown-menu">
                            <nav class="side-nav">
                                <ul class="menu-vertical sf-arrows">
                                    <li class="item-lead"><a href="{{ asset('#') }}">Daily offers</a></li>
                                    <li class="item-lead"><a href="{{ asset('#') }}">Gift Ideas</a></li>
                                    <li><a href="{{ asset('#') }}">Beds</a></li>
                                    <li><a href="{{ asset('#') }}">Lighting</a></li>
                                    <li><a href="{{ asset('#') }}">Sofas & Sleeper sofas</a></li>
                                    <li><a href="{{ asset('#') }}">Storage</a></li>
                                    <li><a href="{{ asset('#') }}">Armchairs & Chaises</a></li>
                                    <li><a href="{{ asset('#') }}">Decoration </a></li>
                                    <li><a href="{{ asset('#') }}">Kitchen Cabinets</a></li>
                                    <li><a href="{{ asset('#') }}">Coffee & Tables</a></li>
                                    <li><a href="{{ asset('#') }}">Outdoor Furniture </a></li>
                                </ul><!-- End .menu-vertical -->
                            </nav><!-- End .side-nav -->
                        </div><!-- End .dropdown-menu -->
                    </div><!-- End .category-dropdown -->
                </div><!-- End .header-left -->

                <div class="header-center">
                    <nav class="main-nav">
                        <ul class="menu sf-arrows">
                            <li class="megamenu-container active">
                                <a href="{{ asset('index.html') }}" class="sf-with-ul">Home</a>

                                <div class="megamenu demo">
                                    <div class="menu-col">
                                        <div class="menu-title">Choose your demo</div><!-- End .menu-title -->

                                        <div class="demo-list">
                                            <div class="demo-item">
                                                <a href="{{ asset('index-1.html') }}">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/1.jpg);"></span>
                                                    <span class="demo-title">01 - furniture store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item">
                                                <a href="{{ asset('index-2.html') }}">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/2.jpg);"></span>
                                                    <span class="demo-title">02 - furniture store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item">
                                                <a href="{{ asset('index-3.html') }}">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/3.jpg);"></span>
                                                    <span class="demo-title">03 - electronic store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item">
                                                <a href="{{ asset('index-4.html') }}">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/4.jpg);"></span>
                                                    <span class="demo-title">04 - electronic store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item">
                                                <a href="{{ asset('index-5.html') }}">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/5.jpg);"></span>
                                                    <span class="demo-title">05 - fashion store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item">
                                                <a href="{{ asset('index-6.html') }}">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/6.jpg);"></span>
                                                    <span class="demo-title">06 - fashion store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item">
                                                <a href="{{ asset('index-7.html') }}">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/7.jpg);"></span>
                                                    <span class="demo-title">07 - fashion store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item">
                                                <a href="{{ asset('index-8.html') }}">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/8.jpg);"></span>
                                                    <span class="demo-title">08 - fashion store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item">
                                                <a href="{{ asset('index-9.html') }}">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/9.jpg);"></span>
                                                    <span class="demo-title">09 - fashion store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item">
                                                <a href="{{ asset('index-10.html') }}">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/10.jpg);"></span>
                                                    <span class="demo-title">10 - shoes store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="{{ asset('index-11.html') }}">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/11.jpg);"></span>
                                                    <span class="demo-title">11 - furniture simple store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="{{ asset('index-12.html') }}">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/12.jpg);"></span>
                                                    <span class="demo-title">12 - fashion simple store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="{{ asset('index-13.html') }}">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/13.jpg);"></span>
                                                    <span class="demo-title">13 - market</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="{{ asset('index-14.html') }}">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/14.jpg);"></span>
                                                    <span class="demo-title">14 - market fullwidth</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="{{ asset('index-15.html') }}">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/15.jpg);"></span>
                                                    <span class="demo-title">15 - lookbook 1</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="{{ asset('index-16.html') }}">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/16.jpg);"></span>
                                                    <span class="demo-title">16 - lookbook 2</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="{{ asset('index-17.html') }}">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/17.jpg);"></span>
                                                    <span class="demo-title">17 - fashion store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="{{ asset('index-18.html') }}">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/18.jpg);"></span>
                                                    <span class="demo-title">18 - fashion store (with sidebar)</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="{{ asset('index-19.html') }}">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/19.jpg);"></span>
                                                    <span class="demo-title">19 - games store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="{{ asset('index-20.html') }}">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/20.jpg);"></span>
                                                    <span class="demo-title">20 - book store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="{{ asset('index-21.html') }}">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/21.jpg);"></span>
                                                    <span class="demo-title">21 - sport store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="{{ asset('index-22.html') }}">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/22.jpg);"></span>
                                                    <span class="demo-title">22 - tools store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="{{ asset('index-23.html') }}">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/23.jpg);"></span>
                                                    <span class="demo-title">23 - fashion left navigation store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="{{ asset('index-24.html') }}">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/24.jpg);"></span>
                                                    <span class="demo-title">24 - extreme sport store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                        </div><!-- End .demo-list -->

                                        <div class="megamenu-action text-center">
                                            <a href="{{ asset('#') }}" class="btn btn-outline-primary-2 view-all-demos"><span>View All Demos</span><i class="icon-long-arrow-right"></i></a>
                                        </div><!-- End .text-center -->
                                    </div><!-- End .menu-col -->
                                </div><!-- End .megamenu -->
                            </li>
                            <li>
                                <a href="{{ asset('category.html') }}" class="sf-with-ul">Shop</a>

                                <div class="megamenu megamenu-md">
                                    <div class="row no-gutters">
                                        <div class="col-md-8">
                                            <div class="menu-col">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="menu-title">Shop with sidebar</div><!-- End .menu-title -->
                                                        <ul>
                                                            <li><a href="{{ asset('category-list.html') }}">Shop List</a></li>
                                                            <li><a href="{{ asset('category-2cols.html') }}">Shop Grid 2 Columns</a></li>
                                                            <li><a href="{{ asset('category.html') }}">Shop Grid 3 Columns</a></li>
                                                            <li><a href="{{ asset('category-4cols.html') }}">Shop Grid 4 Columns</a></li>
                                                            <li><a href="{{ asset('category-market.html') }}"><span>Shop Market<span class="tip tip-new">New</span></span></a></li>
                                                        </ul>

                                                        <div class="menu-title">Shop no sidebar</div><!-- End .menu-title -->
                                                        <ul>
                                                            <li><a href="{{ asset('category-boxed.html') }}"><span>Shop Boxed No Sidebar<span class="tip tip-hot">Hot</span></span></a></li>
                                                            <li><a href="{{ asset('category-fullwidth.html') }}">Shop Fullwidth No Sidebar</a></li>
                                                        </ul>
                                                    </div><!-- End .col-md-6 -->

                                                    <div class="col-md-6">
                                                        <div class="menu-title">Product Category</div><!-- End .menu-title -->
                                                        <ul>
                                                            <li><a href="{{ asset('product-category-boxed.html') }}">Product Category Boxed</a></li>
                                                            <li><a href="{{ asset('product-category-fullwidth.html') }}"><span>Product Category Fullwidth<span class="tip tip-new">New</span></span></a></li>
                                                        </ul>
                                                        <div class="menu-title">Shop Pages</div><!-- End .menu-title -->
                                                        <ul>
                                                            <li><a href="{{ asset('cart.html') }}">Cart</a></li>
                                                            <li><a href="{{ asset('checkout.html') }}">Checkout</a></li>
                                                            <li><a href="{{ asset('wishlist.html') }}">Wishlist</a></li>
                                                            <li><a href="{{ asset('dashboard.html') }}">My Account</a></li>
                                                            <li><a href="{{ asset('#') }}">Lookbook</a></li>
                                                        </ul>
                                                    </div><!-- End .col-md-6 -->
                                                </div><!-- End .row -->
                                            </div><!-- End .menu-col -->
                                        </div><!-- End .col-md-8 -->

                                        <div class="col-md-4">
                                            <div class="banner banner-overlay">
                                                <a href="{{ asset('category.html') }}" class="banner banner-menu">
                                                    <img src="{{ asset('assets/images/menu/banner-1.jpg') }}" alt="Banner">

                                                    <div class="banner-content banner-content-top">
                                                        <div class="banner-title text-white">Last <br>Chance<br><span><strong>Sale</strong></span></div><!-- End .banner-title -->
                                                    </div><!-- End .banner-content -->
                                                </a>
                                            </div><!-- End .banner banner-overlay -->
                                        </div><!-- End .col-md-4 -->
                                    </div><!-- End .row -->
                                </div><!-- End .megamenu megamenu-md -->
                            </li>
                            <li>
                                <a href="{{ asset('product.html') }}" class="sf-with-ul">Product</a>

                                <div class="megamenu megamenu-sm">
                                    <div class="row no-gutters">
                                        <div class="col-md-6">
                                            <div class="menu-col">
                                                <div class="menu-title">Product Details</div><!-- End .menu-title -->
                                                <ul>
                                                    <li><a href="{{ asset('product.html') }}">Default</a></li>
                                                    <li><a href="{{ asset('product-centered.html') }}">Centered</a></li>
                                                    <li><a href="{{ asset('product-extended.html') }}"><span>Extended Info<span class="tip tip-new">New</span></span></a></li>
                                                    <li><a href="{{ asset('product-gallery.html') }}">Gallery</a></li>
                                                    <li><a href="{{ asset('product-sticky.html') }}">Sticky Info</a></li>
                                                    <li><a href="{{ asset('product-sidebar.html') }}">Boxed With Sidebar</a></li>
                                                    <li><a href="{{ asset('product-fullwidth.html') }}">Full Width</a></li>
                                                    <li><a href="{{ asset('product-masonry.html') }}">Masonry Sticky Info</a></li>
                                                </ul>
                                            </div><!-- End .menu-col -->
                                        </div><!-- End .col-md-6 -->

                                        <div class="col-md-6">
                                            <div class="banner banner-overlay">
                                                <a href="{{ asset('category.html') }}">
                                                    <img src="{{ asset('assets/images/menu/banner-2.jpg') }}" alt="Banner">

                                                    <div class="banner-content banner-content-bottom">
                                                        <div class="banner-title text-white">New Trends<br><span><strong>spring 2019</strong></span></div><!-- End .banner-title -->
                                                    </div><!-- End .banner-content -->
                                                </a>
                                            </div><!-- End .banner -->
                                        </div><!-- End .col-md-6 -->
                                    </div><!-- End .row -->
                                </div><!-- End .megamenu megamenu-sm -->
                            </li>
                            <li>
                                <a href="{{ asset('#') }}" class="sf-with-ul">Pages</a>

                                <ul>
                                    <li>
                                        <a href="{{ asset('about.html') }}" class="sf-with-ul">About</a>

                                        <ul>
                                            <li><a href="{{ asset('about.html') }}">About 01</a></li>
                                            <li><a href="{{ asset('about-2.html') }}">About 02</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ asset('contact.html') }}" class="sf-with-ul">Contact</a>

                                        <ul>
                                            <li><a href="{{ asset('contact.html') }}">Contact 01</a></li>
                                            <li><a href="{{ asset('contact-2.html') }}">Contact 02</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ asset('login.html') }}">Login</a></li>
                                    <li><a href="{{ asset('faq.html') }}">FAQs</a></li>
                                    <li><a href="{{ asset('404.html') }}">Error 404</a></li>
                                    <li><a href="{{ asset('coming-soon.html') }}">Coming Soon</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ asset('blog.html') }}" class="sf-with-ul">Blog</a>

                                <ul>
                                    <li><a href="{{ asset('blog.html') }}">Classic</a></li>
                                    <li><a href="{{ asset('blog-listing.html') }}">Listing</a></li>
                                    <li>
                                        <a href="{{ asset('#') }}">Grid</a>
                                        <ul>
                                            <li><a href="{{ asset('blog-grid-2cols.html') }}">Grid 2 columns</a></li>
                                            <li><a href="{{ asset('blog-grid-3cols.html') }}">Grid 3 columns</a></li>
                                            <li><a href="{{ asset('blog-grid-4cols.html') }}">Grid 4 columns</a></li>
                                            <li><a href="{{ asset('blog-grid-sidebar.html') }}">Grid sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ asset('#') }}">Masonry</a>
                                        <ul>
                                            <li><a href="{{ asset('blog-masonry-2cols.html') }}">Masonry 2 columns</a></li>
                                            <li><a href="{{ asset('blog-masonry-3cols.html') }}">Masonry 3 columns</a></li>
                                            <li><a href="{{ asset('blog-masonry-4cols.html') }}">Masonry 4 columns</a></li>
                                            <li><a href="{{ asset('blog-masonry-sidebar.html') }}">Masonry sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ asset('#') }}">Mask</a>
                                        <ul>
                                            <li><a href="{{ asset('blog-mask-grid.html') }}">Blog mask grid</a></li>
                                            <li><a href="{{ asset('blog-mask-masonry.html') }}">Blog mask masonry</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ asset('#') }}">Single Post</a>
                                        <ul>
                                            <li><a href="{{ asset('single.html') }}">Default with sidebar</a></li>
                                            <li><a href="{{ asset('single-fullwidth.html') }}">Fullwidth no sidebar</a></li>
                                            <li><a href="{{ asset('single-fullwidth-sidebar.html') }}">Fullwidth with sidebar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ asset('elements-list.html') }}" class="sf-with-ul">Elements</a>

                                <ul>
                                    <li><a href="{{ asset('elements-products.html') }}">Products</a></li>
                                    <li><a href="{{ asset('elements-typography.html') }}">Typography</a></li>
                                    <li><a href="{{ asset('elements-titles.html') }}">Titles</a></li>
                                    <li><a href="{{ asset('elements-banners.html') }}">Banners</a></li>
                                    <li><a href="{{ asset('elements-product-category.html') }}">Product Category</a></li>
                                    <li><a href="{{ asset('elements-video-banners.html') }}">Video Banners</a></li>
                                    <li><a href="{{ asset('elements-buttons.html') }}">Buttons</a></li>
                                    <li><a href="{{ asset('elements-accordions.html') }}">Accordions</a></li>
                                    <li><a href="{{ asset('elements-tabs.html') }}">Tabs</a></li>
                                    <li><a href="{{ asset('elements-testimonials.html') }}">Testimonials</a></li>
                                    <li><a href="{{ asset('elements-blog-posts.html') }}">Blog Posts</a></li>
                                    <li><a href="{{ asset('elements-portfolio.html') }}">Portfolio</a></li>
                                    <li><a href="{{ asset('elements-cta.html') }}">Call to Action</a></li>
                                    <li><a href="{{ asset('elements-icon-boxes.html') }}">Icon Boxes</a></li>

                                </ul>
                            </li>
                        </ul><!-- End .menu -->
                    </nav><!-- End .main-nav -->
                </div><!-- End .header-center -->

                <div class="header-right">
                    <i class="la la-lightbulb-o"></i><p>Clearance<span class="highlight">&nbsp;Up to 30% Off</span></p>
                </div>
            </div><!-- End .container -->
        </div><!-- End .header-bottom -->
    </header><!-- End .header -->

    <main class="main">




        @yield('content')




    </main><!-- End .main -->

    <footer class="footer footer-2">
        <div class="icon-boxes-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="icon-box icon-box-side">
                                <span class="icon-box-icon text-dark">
                                    <i class="icon-rocket"></i>
                                </span>
                            <div class="icon-box-content">
                                <h3 class="icon-box-title">Free Shipping</h3><!-- End .icon-box-title -->
                                <p>orders $50 or more</p>
                            </div><!-- End .icon-box-content -->
                        </div><!-- End .icon-box -->
                    </div><!-- End .col-sm-6 col-lg-3 -->

                    <div class="col-sm-6 col-lg-3">
                        <div class="icon-box icon-box-side">
                                <span class="icon-box-icon text-dark">
                                    <i class="icon-rotate-left"></i>
                                </span>

                            <div class="icon-box-content">
                                <h3 class="icon-box-title">Free Returns</h3><!-- End .icon-box-title -->
                                <p>within 30 days</p>
                            </div><!-- End .icon-box-content -->
                        </div><!-- End .icon-box -->
                    </div><!-- End .col-sm-6 col-lg-3 -->

                    <div class="col-sm-6 col-lg-3">
                        <div class="icon-box icon-box-side">
                                <span class="icon-box-icon text-dark">
                                    <i class="icon-info-circle"></i>
                                </span>

                            <div class="icon-box-content">
                                <h3 class="icon-box-title">Get 20% Off 1 Item</h3><!-- End .icon-box-title -->
                                <p>When you sign up</p>
                            </div><!-- End .icon-box-content -->
                        </div><!-- End .icon-box -->
                    </div><!-- End .col-sm-6 col-lg-3 -->

                    <div class="col-sm-6 col-lg-3">
                        <div class="icon-box icon-box-side">
                                <span class="icon-box-icon text-dark">
                                    <i class="icon-life-ring"></i>
                                </span>

                            <div class="icon-box-content">
                                <h3 class="icon-box-title">We Support</h3><!-- End .icon-box-title -->
                                <p>24/7 amazing services</p>
                            </div><!-- End .icon-box-content -->
                        </div><!-- End .icon-box -->
                    </div><!-- End .col-sm-6 col-lg-3 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .icon-boxes-container -->

        <div class="footer-newsletter bg-image" style="background-image: url(assets/images/backgrounds/bg-2.jpg)">
            <div class="container">
                <div class="heading text-center">
                    <h3 class="title">Get The Latest Deals</h3><!-- End .title -->
                    <p class="title-desc">and receive <span>$20 coupon</span> for first shopping</p><!-- End .title-desc -->
                </div><!-- End .heading -->

                <div class="row">
                    <div class="col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                        <form action="#">
                            <div class="input-group">
                                <input type="email" class="form-control" placeholder="Enter your Email Address" aria-label="Email Adress" aria-describedby="newsletter-btn" required>
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit" id="newsletter-btn"><span>Subscribe</span><i class="icon-long-arrow-right"></i></button>
                                </div><!-- .End .input-group-append -->
                            </div><!-- .End .input-group -->
                        </form>
                    </div><!-- End .col-sm-10 offset-sm-1 col-lg-6 offset-lg-3 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .footer-newsletter bg-image -->

        <div class="footer-middle">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-lg-6">
                        <div class="widget widget-about">
                            <img src="{{ asset('assets/images/demos/demo-2/logo.png') }}" class="footer-logo" alt="Footer Logo" width="105" height="25">
                            <p>Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus. </p>

                            <div class="widget-about-info">
                                <div class="row">
                                    <div class="col-sm-6 col-md-4">
                                        <span class="widget-about-title">Got Question? Call us 24/7</span>
                                        <a href="{{ asset('tel:123456789') }}">+0123 456 789</a>
                                    </div><!-- End .col-sm-6 -->
                                    <div class="col-sm-6 col-md-8">
                                        <span class="widget-about-title">Payment Method</span>
                                        <figure class="footer-payments">
                                            <img src="{{ asset('assets/images/payments.png') }}" alt="Payment methods" width="272" height="20">
                                        </figure><!-- End .footer-payments -->
                                    </div><!-- End .col-sm-6 -->
                                </div><!-- End .row -->
                            </div><!-- End .widget-about-info -->
                        </div><!-- End .widget about-widget -->
                    </div><!-- End .col-sm-12 col-lg-3 -->

                    <div class="col-sm-4 col-lg-2">
                        <div class="widget">
                            <h4 class="widget-title">Information</h4><!-- End .widget-title -->

                            <ul class="widget-list">
                                <li><a href="{{ asset('about.html') }}">About Molla</a></li>
                                <li><a href="{{ asset('#') }}">How to shop on Molla</a></li>
                                <li><a href="{{ asset('#') }}">FAQ</a></li>
                                <li><a href="{{ asset('contact.html') }}">Contact us</a></li>
                                <li><a href="{{ asset('login.html') }}">Log in</a></li>
                            </ul><!-- End .widget-list -->
                        </div><!-- End .widget -->
                    </div><!-- End .col-sm-4 col-lg-3 -->

                    <div class="col-sm-4 col-lg-2">
                        <div class="widget">
                            <h4 class="widget-title">Customer Service</h4><!-- End .widget-title -->

                            <ul class="widget-list">
                                <li><a href="{{ asset('#') }}">Payment Methods</a></li>
                                <li><a href="{{ asset('#') }}">Money-back guarantee!</a></li>
                                <li><a href="{{ asset('#') }}">Returns</a></li>
                                <li><a href="{{ asset('#') }}">Shipping</a></li>
                                <li><a href="{{ asset('#') }}">Terms and conditions</a></li>
                                <li><a href="{{ asset('#') }}">Privacy Policy</a></li>
                            </ul><!-- End .widget-list -->
                        </div><!-- End .widget -->
                    </div><!-- End .col-sm-4 col-lg-3 -->

                    <div class="col-sm-4 col-lg-2">
                        <div class="widget">
                            <h4 class="widget-title">My Account</h4><!-- End .widget-title -->

                            <ul class="widget-list">
                                <li><a href="{{ asset('#') }}">Sign In</a></li>
                                <li><a href="{{ asset('cart.html') }}">View Cart</a></li>
                                <li><a href="{{ asset('#') }}">My Wishlist</a></li>
                                <li><a href="{{ asset('#') }}">Track My Order</a></li>
                                <li><a href="{{ asset('#') }}">Help</a></li>
                            </ul><!-- End .widget-list -->
                        </div><!-- End .widget -->
                    </div><!-- End .col-sm-64 col-lg-3 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .footer-middle -->

        <div class="footer-bottom">
            <div class="container">
                <p class="footer-copyright">Copyright © 2019 Molla Store. All Rights Reserved.</p><!-- End .footer-copyright -->
                <ul class="footer-menu">
                    <li><a href="{{ asset('#') }}">Terms Of Use</a></li>
                    <li><a href="{{ asset('#') }}">Privacy Policy</a></li>
                </ul><!-- End .footer-menu -->

                <div class="social-icons social-icons-color">
                    <span class="social-label">Social Media</span>
                    <a href="{{ asset('#') }}" class="social-icon social-facebook" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                    <a href="{{ asset('#') }}" class="social-icon social-twitter" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                    <a href="{{ asset('#') }}" class="social-icon social-instagram" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                    <a href="{{ asset('#') }}" class="social-icon social-youtube" title="Youtube" target="_blank"><i class="icon-youtube"></i></a>
                    <a href="{{ asset('#') }}" class="social-icon social-pinterest" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
                </div><!-- End .soial-icons -->
            </div><!-- End .container -->
        </div><!-- End .footer-bottom -->
    </footer><!-- End .footer -->
</div><!-- End .page-wrapper -->
<button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

<!-- Mobile Menu -->
<div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

<div class="mobile-menu-container mobile-menu-light">
    <div class="mobile-menu-wrapper">
        <span class="mobile-menu-close"><i class="icon-close"></i></span>

        <form action="#" method="get" class="mobile-search">
            <label for="mobile-search" class="sr-only">Search</label>
            <input type="search" class="form-control" name="mobile-search" id="mobile-search" placeholder="Search product ..." required>
            <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
        </form>

        <ul class="nav nav-pills-mobile nav-border-anim" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="mobile-menu-link" data-toggle="tab" href="{{ asset('#mobile-menu-tab') }}" role="tab" aria-controls="mobile-menu-tab" aria-selected="true">Menu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="mobile-cats-link" data-toggle="tab" href="{{ asset('#mobile-cats-tab') }}" role="tab" aria-controls="mobile-cats-tab" aria-selected="false">Categories</a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane fade show active" id="mobile-menu-tab" role="tabpanel" aria-labelledby="mobile-menu-link">
                <nav class="mobile-nav">
                    <ul class="mobile-menu">
                        <li class="active">
                            <a href="{{ asset('index.html') }}">Home</a>

                            <ul>
                                <li><a href="{{ asset('index-1.html') }}">01 - furniture store</a></li>
                                <li><a href="{{ asset('index-2.html') }}">02 - furniture store</a></li>
                                <li><a href="{{ asset('index-3.html') }}">03 - electronic store</a></li>
                                <li><a href="{{ asset('index-4.html') }}">04 - electronic store</a></li>
                                <li><a href="{{ asset('index-5.html') }}">05 - fashion store</a></li>
                                <li><a href="{{ asset('index-6.html') }}">06 - fashion store</a></li>
                                <li><a href="{{ asset('index-7.html') }}">07 - fashion store</a></li>
                                <li><a href="{{ asset('index-8.html') }}">08 - fashion store</a></li>
                                <li><a href="{{ asset('index-9.html') }}">09 - fashion store</a></li>
                                <li><a href="{{ asset('index-10.html') }}">10 - shoes store</a></li>
                                <li><a href="{{ asset('index-11.html') }}">11 - furniture simple store</a></li>
                                <li><a href="{{ asset('index-12.html') }}">12 - fashion simple store</a></li>
                                <li><a href="{{ asset('index-13.html') }}">13 - market</a></li>
                                <li><a href="{{ asset('index-14.html') }}">14 - market fullwidth</a></li>
                                <li><a href="{{ asset('index-15.html') }}">15 - lookbook 1</a></li>
                                <li><a href="{{ asset('index-16.html') }}">16 - lookbook 2</a></li>
                                <li><a href="{{ asset('index-17.html') }}">17 - fashion store</a></li>
                                <li><a href="{{ asset('index-18.html') }}">18 - fashion store (with sidebar)</a></li>
                                <li><a href="{{ asset('index-19.html') }}">19 - games store</a></li>
                                <li><a href="{{ asset('index-20.html') }}">20 - book store</a></li>
                                <li><a href="{{ asset('index-21.html') }}">21 - sport store</a></li>
                                <li><a href="{{ asset('index-22.html') }}">22 - tools store</a></li>
                                <li><a href="{{ asset('index-23.html') }}">23 - fashion left navigation store</a></li>
                                <li><a href="{{ asset('index-24.html') }}">24 - extreme sport store</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ asset('category.html') }}">Shop</a>
                            <ul>
                                <li><a href="{{ asset('category-list.html') }}">Shop List</a></li>
                                <li><a href="{{ asset('category-2cols.html') }}">Shop Grid 2 Columns</a></li>
                                <li><a href="{{ asset('category.html') }}">Shop Grid 3 Columns</a></li>
                                <li><a href="{{ asset('category-4cols.html') }}">Shop Grid 4 Columns</a></li>
                                <li><a href="{{ asset('category-boxed.html') }}"><span>Shop Boxed No Sidebar<span class="tip tip-hot">Hot</span></span></a></li>
                                <li><a href="{{ asset('category-fullwidth.html') }}">Shop Fullwidth No Sidebar</a></li>
                                <li><a href="{{ asset('product-category-boxed.html') }}">Product Category Boxed</a></li>
                                <li><a href="{{ asset('product-category-fullwidth.html') }}"><span>Product Category Fullwidth<span class="tip tip-new">New</span></span></a></li>
                                <li><a href="{{ asset('cart.html') }}">Cart</a></li>
                                <li><a href="{{ asset('checkout.html') }}">Checkout</a></li>
                                <li><a href="{{ asset('wishlist.html') }}">Wishlist</a></li>
                                <li><a href="{{ asset('#') }}">Lookbook</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ asset('product.html') }}" class="sf-with-ul">Product</a>
                            <ul>
                                <li><a href="{{ asset('product.html') }}">Default</a></li>
                                <li><a href="{{ asset('product-centered.html') }}">Centered</a></li>
                                <li><a href="{{ asset('product-extended.html') }}"><span>Extended Info<span class="tip tip-new">New</span></span></a></li>
                                <li><a href="{{ asset('product-gallery.html') }}">Gallery</a></li>
                                <li><a href="{{ asset('product-sticky.html') }}">Sticky Info</a></li>
                                <li><a href="{{ asset('product-sidebar.html') }}">Boxed With Sidebar</a></li>
                                <li><a href="{{ asset('product-fullwidth.html') }}">Full Width</a></li>
                                <li><a href="{{ asset('product-masonry.html') }}">Masonry Sticky Info</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ asset('#') }}">Pages</a>
                            <ul>
                                <li>
                                    <a href="{{ asset('about.html') }}">About</a>

                                    <ul>
                                        <li><a href="{{ asset('about.html') }}">About 01</a></li>
                                        <li><a href="{{ asset('about-2.html') }}">About 02</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ asset('contact.html') }}">Contact</a>

                                    <ul>
                                        <li><a href="{{ asset('contact.html') }}">Contact 01</a></li>
                                        <li><a href="{{ asset('contact-2.html') }}">Contact 02</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ asset('login.html') }}">Login</a></li>
                                <li><a href="{{ asset('faq.html') }}">FAQs</a></li>
                                <li><a href="{{ asset('404.html') }}">Error 404</a></li>
                                <li><a href="{{ asset('coming-soon.html') }}">Coming Soon</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ asset('blog.html') }}">Blog</a>

                            <ul>
                                <li><a href="{{ asset('blog.html') }}">Classic</a></li>
                                <li><a href="{{ asset('blog-listing.html') }}">Listing</a></li>
                                <li>
                                    <a href="{{ asset('#') }}">Grid</a>
                                    <ul>
                                        <li><a href="{{ asset('blog-grid-2cols.html') }}">Grid 2 columns</a></li>
                                        <li><a href="{{ asset('blog-grid-3cols.html') }}">Grid 3 columns</a></li>
                                        <li><a href="{{ asset('blog-grid-4cols.html') }}">Grid 4 columns</a></li>
                                        <li><a href="{{ asset('blog-grid-sidebar.html') }}">Grid sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ asset('#') }}">Masonry</a>
                                    <ul>
                                        <li><a href="{{ asset('blog-masonry-2cols.html') }}">Masonry 2 columns</a></li>
                                        <li><a href="{{ asset('blog-masonry-3cols.html') }}">Masonry 3 columns</a></li>
                                        <li><a href="{{ asset('blog-masonry-4cols.html') }}">Masonry 4 columns</a></li>
                                        <li><a href="{{ asset('blog-masonry-sidebar.html') }}">Masonry sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ asset('#') }}">Mask</a>
                                    <ul>
                                        <li><a href="{{ asset('blog-mask-grid.html') }}">Blog mask grid</a></li>
                                        <li><a href="{{ asset('blog-mask-masonry.html') }}">Blog mask masonry</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ asset('#') }}">Single Post</a>
                                    <ul>
                                        <li><a href="{{ asset('single.html') }}">Default with sidebar</a></li>
                                        <li><a href="{{ asset('single-fullwidth.html') }}">Fullwidth no sidebar</a></li>
                                        <li><a href="{{ asset('single-fullwidth-sidebar.html') }}">Fullwidth with sidebar</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ asset('elements-list.html') }}">Elements</a>
                            <ul>
                                <li><a href="{{ asset('elements-products.html') }}">Products</a></li>
                                <li><a href="{{ asset('elements-typography.html') }}">Typography</a></li>
                                <li><a href="{{ asset('elements-titles.html') }}">Titles</a></li>
                                <li><a href="{{ asset('elements-banners.html') }}">Banners</a></li>
                                <li><a href="{{ asset('elements-product-category.html') }}">Product Category</a></li>
                                <li><a href="{{ asset('elements-video-banners.html') }}">Video Banners</a></li>
                                <li><a href="{{ asset('elements-buttons.html') }}">Buttons</a></li>
                                <li><a href="{{ asset('elements-accordions.html') }}">Accordions</a></li>
                                <li><a href="{{ asset('elements-tabs.html') }}">Tabs</a></li>
                                <li><a href="{{ asset('elements-testimonials.html') }}">Testimonials</a></li>
                                <li><a href="{{ asset('elements-blog-posts.html') }}">Blog Posts</a></li>
                                <li><a href="{{ asset('elements-portfolio.html') }}">Portfolio</a></li>
                                <li><a href="{{ asset('elements-cta.html') }}">Call to Action</a></li>
                                <li><a href="{{ asset('elements-icon-boxes.html') }}">Icon Boxes</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav><!-- End .mobile-nav -->
            </div><!-- .End .tab-pane -->
            <div class="tab-pane fade" id="mobile-cats-tab" role="tabpanel" aria-labelledby="mobile-cats-link">
                <nav class="mobile-cats-nav">
                    <ul class="mobile-cats-menu">
                        <li><a class="mobile-cats-lead" href="{{ asset('#') }}">Daily offers</a></li>
                        <li><a class="mobile-cats-lead" href="{{ asset('#') }}">Gift Ideas</a></li>
                        <li><a href="{{ asset('#') }}">Beds</a></li>
                        <li><a href="{{ asset('#') }}">Lighting</a></li>
                        <li><a href="{{ asset('#') }}">Sofas & Sleeper sofas</a></li>
                        <li><a href="{{ asset('#') }}">Storage</a></li>
                        <li><a href="{{ asset('#') }}">Armchairs & Chaises</a></li>
                        <li><a href="{{ asset('#') }}">Decoration </a></li>
                        <li><a href="{{ asset('#') }}">Kitchen Cabinets</a></li>
                        <li><a href="{{ asset('#') }}">Coffee & Tables</a></li>
                        <li><a href="{{ asset('#') }}">Outdoor Furniture </a></li>
                    </ul><!-- End .mobile-cats-menu -->
                </nav><!-- End .mobile-cats-nav -->
            </div><!-- .End .tab-pane -->
        </div><!-- End .tab-content -->

        <div class="social-icons">
            <a href="{{ asset('#') }}" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
            <a href="{{ asset('#') }}" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
            <a href="{{ asset('#') }}" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
            <a href="{{ asset('#') }}" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
        </div><!-- End .social-icons -->
    </div><!-- End .mobile-menu-wrapper -->
</div><!-- End .mobile-menu-container -->


<div class="container newsletter-popup-container mfp-hide" id="newsletter-popup-form">
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="row no-gutters bg-white newsletter-popup-content">
                <div class="col-xl-3-5col col-lg-7 banner-content-wrap">
                    <div class="banner-content text-center">
                        <img src="{{ asset('assets/images/popup/newsletter/logo.png') }}" class="logo" alt="logo" width="60" height="15">
                        <h2 class="banner-title">get <span>25<light>%</light></span> off</h2>
                        <p>Subscribe to the Molla eCommerce newsletter to receive timely updates from your favorite products.</p>
                        <form action="#">
                            <div class="input-group input-group-round">
                                <input type="email" class="form-control form-control-white" placeholder="Your Email Address" aria-label="Email Adress" required>
                                <div class="input-group-append">
                                    <button class="btn" type="submit"><span>go</span></button>
                                </div><!-- .End .input-group-append -->
                            </div><!-- .End .input-group -->
                        </form>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="register-policy-2" required>
                            <label class="custom-control-label" for="register-policy-2">Do not show this popup again</label>
                        </div><!-- End .custom-checkbox -->
                    </div>
                </div>
                <div class="col-xl-2-5col col-lg-5 ">
                    <img src="{{ asset('assets/images/popup/newsletter/img-1.jpg') }}" class="newsletter-img" alt="newsletter">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Plugins JS File -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.hoverIntent.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('assets/js/superfish.min.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.plugin.min.js') }}"></script>
{{--<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>--}}
<script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-input-spinner.js') }}"></script>
<script src="{{ asset('assets/js/jquery.elevateZoom.min.js') }}"></script>
<!-- Main JS File -->
<script src="{{ asset('assets/js/main.js') }}"></script>
{{--<script src="{{ asset('assets/js/demos/demo-2.js') }}"></script>--}}

</body>


<!-- molla/index-1.html  22 Nov 2019 09:55:32 GMT -->
</html>
