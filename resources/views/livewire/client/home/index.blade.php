<!DOCTYPE html>
<html class="rtl" lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    <meta name="description" content="Index page">
    <meta name="keywords" content="index, page">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="frontend/imgs/template/favicon.svg">
    <link href="frontend/css/style.css?v=2.1" rel="stylesheet">
    <title>Home 6 - Ecom Marketplace Template</title>
</head>
<body>
<header class="header sticky-bar">
    <div class="container">
        <div class="main-header">
            <div class="header-left">
                <div class="header-logo"><a class="d-flex" href="index.html"><img alt="Ecom"
                                                                                  src="/backend/img/amazon.png"></a>
                </div>
                <div class="header-search">
                    <div class="box-header-search">
                        <form class="form-search" method="post" action="#">
                            <div class="box-category">
                                <select class="select-active select2-hidden-accessible">
                                    <option>دسته بندی ها</option>
                                    @forelse($categories as $category)
                                        <option value="Computers Accessories">{{$category->title}}</option>
                                    @empty
                                    @endforelse
                                </select>
                            </div>
                            <div class="box-keysearch">
                                <input class="form-control font-xs" type="text" value="" placeholder="جستجو">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="header-nav">
                    <nav class="nav-main-menu d-none d-xl-block">
{{--                        <ul class="main-menu">--}}
{{--                            <li class="has-children"><a class="active" href="index.html">Home</a>--}}
{{--                                <ul class="sub-menu two-col">--}}
{{--                                    <li><a href="index.html">Homepage - 1</a></li>--}}
{{--                                    <li><a href="index-2.html">Homepage - 2</a></li>--}}
{{--                                    <li><a href="index-3.html">Homepage - 3</a></li>--}}
{{--                                    <li><a href="index-4.html">Homepage - 4</a></li>--}}
{{--                                    <li><a href="index-5.html">Homepage - 5</a></li>--}}
{{--                                    <li><a href="index-6.html">Homepage - 6</a></li>--}}
{{--                                    <li><a href="index-7.html">Homepage - 7</a></li>--}}
{{--                                    <li><a href="index-8.html">Homepage - 8</a></li>--}}
{{--                                    <li><a href="index-9.html">Homepage - 9</a></li>--}}
{{--                                    <li><a href="index-10.html">Homepage - 10</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li class="has-children"><a href="shop-grid.html">Shop</a>--}}
{{--                                <ul class="sub-menu two-col">--}}
{{--                                    <li><a href="shop-grid.html">Shop Grid</a></li>--}}
{{--                                    <li><a href="shop-grid-2.html">Shop Grid 2</a></li>--}}
{{--                                    <li><a href="shop-list.html">Shop list - Left sidebar</a></li>--}}
{{--                                    <li><a href="shop-list-2.html">Shop list - Right sidebar</a></li>--}}
{{--                                    <li><a href="shop-fullwidth.html">Shop Fullwidth</a></li>--}}
{{--                                    <li><a href="shop-single-product.html">Single Product</a></li>--}}
{{--                                    <li><a href="shop-single-product-2.html">Single Product 2</a></li>--}}
{{--                                    <li><a href="shop-single-product-3.html">Single Product 3</a></li>--}}
{{--                                    <li><a href="shop-single-product-4.html">Single Product 4</a></li>--}}
{{--                                    <li><a href="shop-cart.html">Shop Cart</a></li>--}}
{{--                                    <li><a href="shop-checkout.html">Shop Checkout</a></li>--}}
{{--                                    <li><a href="shop-compare.html">Shop Compare</a></li>--}}
{{--                                    <li><a href="shop-wishlist.html">Shop Wishlist</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li class="has-children"><a href="shop-vendor-list.html">Vendors</a>--}}
{{--                                <ul class="sub-menu">--}}
{{--                                    <li><a href="shop-vendor-list.html">Vendors Listing</a></li>--}}
{{--                                    <li><a href="shop-vendor-single.html">Vendor Single</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li class="has-children"><a href="#">Pages</a>--}}
{{--                                <ul class="sub-menu">--}}
{{--                                    <li><a href="page-about-us.html">About Us</a></li>--}}
{{--                                    <li><a href="page-contact.html">Contact Us</a></li>--}}
{{--                                    <li><a href="page-careers.html">Careers</a></li>--}}
{{--                                    <li><a href="page-term.html">Term and Condition</a></li>--}}
{{--                                    <li><a href="page-register.html">Register</a></li>--}}
{{--                                    <li><a href="page-login.html">Login</a></li>--}}
{{--                                    <li><a href="page-404.html">Error 404</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li class="has-children"><a href="blog.html">Blog</a>--}}
{{--                                <ul class="sub-menu">--}}
{{--                                    <li><a href="blog.html">Blog - No Sidebar</a></li>--}}
{{--                                    <li><a href="blog-2.html">Blog - Right Sidebar</a></li>--}}
{{--                                    <li><a href="blog-list.html">Blog List</a></li>--}}
{{--                                    <li><a href="blog-big.html">Blog category big</a></li>--}}
{{--                                    <li><a href="blog-single.html">Blog Single - Left sidebar</a></li>--}}
{{--                                    <li><a href="blog-single-2.html">Blog Single - Right sidebar</a></li>--}}
{{--                                    <li><a href="blog-single-3.html">Blog Single - No sidebar</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li><a href="page-contact.html">ارتباط با ما</a></li>--}}
{{--                        </ul>--}}
                    </nav>
                    <div class="burger-icon burger-icon-white"><span class="burger-icon-top"></span><span
                            class="burger-icon-mid"></span><span class="burger-icon-bottom"></span></div>
                </div>
                <div class="header-shop">
                    <div class="d-inline-block box-dropdown-cart"><span class="font-lg icon-list icon-account"><span>Account</span></span>
                        <div class="dropdown-account">
                            <ul>
                                <li><a href="page-account.html">My Account</a></li>
                                <li><a href="page-account.html">Order Tracking</a></li>
                                <li><a href="page-account.html">My Orders</a></li>
                                <li><a href="page-account.html">My Wishlist</a></li>
                                <li><a href="page-account.html">Setting</a></li>
                                <li><a href="page-login.html">Sign out</a></li>
                            </ul>
                        </div>
                    </div>
                    <a class="font-lg icon-list icon-wishlist" href="shop-wishlist.html"><span>Wishlist</span><span
                            class="number-item font-xs">5</span></a>
                    <div class="d-inline-block box-dropdown-cart"><span
                            class="font-lg icon-list icon-cart"><span>Cart</span><span
                                class="number-item font-xs">2</span></span>
                        <div class="dropdown-cart">
                            <div class="item-cart mb-20">
                                <div class="cart-image"><img src="frontend/imgs/page/homepage1/imgsp5.png" alt="Ecom">
                                </div>
                                <div class="cart-info"><a class="font-sm-bold color-brand-3"
                                                          href="shop-single-product.html">2022 Apple iMac with Retina 5K
                                        Display 8GB RAM, 256GB SSD</a>
                                    <p><span class="color-brand-2 font-sm-bold">1 x $2856.4</span></p>
                                </div>
                            </div>
                            <div class="item-cart mb-20">
                                <div class="cart-image"><img src="frontend/imgs/page/homepage1/imgsp4.png" alt="Ecom">
                                </div>
                                <div class="cart-info"><a class="font-sm-bold color-brand-3"
                                                          href="shop-single-product-2.html">2022 Apple iMac with Retina
                                        5K Display 8GB RAM, 256GB SSD</a>
                                    <p><span class="color-brand-2 font-sm-bold">1 x $2856.4</span></p>
                                </div>
                            </div>
                            <div class="border-bottom pt-0 mb-15"></div>
                            <div class="cart-total">
                                <div class="row">
                                    <div class="col-6 text-start"><span class="font-md-bold color-brand-3">Total</span>
                                    </div>
                                    <div class="col-6"><span class="font-md-bold color-brand-1">$2586.3</span></div>
                                </div>
                                <div class="row mt-15">
                                    <div class="col-6 text-start"><a class="btn btn-cart w-auto" href="shop-cart.html">View
                                            cart</a></div>
                                    <div class="col-6"><a class="btn btn-buy w-auto"
                                                          href="shop-checkout.html">Checkout</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="font-lg icon-list icon-compare" href="shop-compare.html"><span>Compare</span></a>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
    <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-content-area">
            <div class="mobile-logo"><a class="d-flex" href="index.html"><img alt="Ecom"
                                                                              src="frontend/imgs/template/logo.svg"></a>
            </div>
            <div class="perfect-scroll">
                <div class="mobile-menu-wrap mobile-header-border">
                    <nav class="mt-15">
                        <ul class="mobile-menu font-heading">
                            <li class="has-children"><a class="active" href="index.html">Home</a>
                                <ul class="sub-menu">
                                    <li><a href="index.html">Homepage - 1</a></li>
                                    <li><a href="index-2.html">Homepage - 2</a></li>
                                    <li><a href="index-3.html">Homepage - 3</a></li>
                                    <li><a href="index-4.html">Homepage - 4</a></li>
                                    <li><a href="index-5.html">Homepage - 5</a></li>
                                    <li><a href="index-6.html">Homepage - 6</a></li>
                                    <li><a href="index-6.html">Homepage - 6</a></li>
                                    <li><a href="index-7.html">Homepage - 7</a></li>
                                    <li><a href="index-8.html">Homepage - 8</a></li>
                                    <li><a href="index-9.html">Homepage - 9</a></li>
                                    <li><a href="index-10.html">Homepage - 10</a></li>
                                </ul>
                            </li>
                            <li class="has-children"><a href="shop-grid.html">Shop</a>
                                <ul class="sub-menu">
                                    <li><a href="shop-grid.html">Shop Grid</a></li>
                                    <li><a href="shop-grid-2.html">Shop Grid 2</a></li>
                                    <li><a href="shop-list.html">Shop List</a></li>
                                    <li><a href="shop-list-2.html">Shop List 2</a></li>
                                    <li><a href="shop-fullwidth.html">Shop Fullwidth</a></li>
                                    <li><a href="shop-single-product.html">Single Product</a></li>
                                    <li><a href="shop-single-product-2.html">Single Product 2</a></li>
                                    <li><a href="shop-single-product-3.html">Single Product 3</a></li>
                                    <li><a href="shop-single-product-4.html">Single Product 4</a></li>
                                    <li><a href="shop-cart.html">Shop Cart</a></li>
                                    <li><a href="shop-checkout.html">Shop Checkout</a></li>
                                    <li><a href="shop-compare.html">Shop Compare</a></li>
                                    <li><a href="shop-wishlist.html">Shop Wishlist</a></li>
                                </ul>
                            </li>
                            <li class="has-children"><a href="shop-vendor-list.html">Vendors</a>
                                <ul class="sub-menu">
                                    <li><a href="shop-vendor-list.html">Vendors Listing</a></li>
                                    <li><a href="shop-vendor-single.html">Vendor Single</a></li>
                                </ul>
                            </li>
                            <li class="has-children"><a href="#">Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="page-about-us.html">About Us</a></li>
                                    <li><a href="page-contact.html">Contact Us</a></li>
                                    <li><a href="page-careers.html">Careers</a></li>
                                    <li><a href="page-term.html">Term and Condition</a></li>
                                    <li><a href="page-register.html">Register</a></li>
                                    <li><a href="page-login.html">Login</a></li>
                                    <li><a href="page-404.html">Error 404</a></li>
                                </ul>
                            </li>
                            <li class="has-children"><a href="blog.html">Blog</a>
                                <ul class="sub-menu">
                                    <li><a href="blog.html">Blog Grid</a></li>
                                    <li><a href="blog-2.html">Blog Grid 2</a></li>
                                    <li><a href="blog-list.html">Blog List</a></li>
                                    <li><a href="blog-big.html">Blog Big</a></li>
                                    <li><a href="blog-single.html">Blog Single - Left sidebar</a></li>
                                    <li><a href="blog-single-2.html">Blog Single - Right sidebar</a></li>
                                    <li><a href="blog-single-3.html">Blog Single - No sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="page-contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="mobile-account">
                    <div class="mobile-header-top">
                        <div class="user-account"><a href="page-account.html"><img
                                    src="frontend/imgs/template/ava_1.png" alt="Ecom"></a>
                            <div class="content">
                                <h6 class="user-name">Hello<span class="text-brand"> Steven !</span></h6>
                                <p class="font-xs text-muted">You have 3 new messages</p>
                            </div>
                        </div>
                    </div>
                    <ul class="mobile-menu">
                        <li><a href="page-account.html">My Account</a></li>
                        <li><a href="page-account.html">Order Tracking</a></li>
                        <li><a href="page-account.html">My Orders</a></li>
                        <li><a href="page-account.html">My Wishlist</a></li>
                        <li><a href="page-account.html">Setting</a></li>
                        <li><a href="page-login.html">Sign out</a></li>
                    </ul>
                </div>
                <div class="mobile-banner">
                    <div class="bg-5 block-iphone"><span class="color-brand-3 font-sm-lh32">Starting from $899</span>
                        <h3 class="font-xl mb-10">iPhone 12 Pro 128Gb</h3>
                        <p class="font-base color-brand-3 mb-10">Special Sale</p><a class="btn btn-arrow"
                                                                                    href="shop-grid.html">learn more</a>
                    </div>
                </div>
                <div class="site-copyright color-gray-400 mt-30">Copyright 2022 &copy; Ecom - Marketplace Template.<br>Designed
                    by<a href="http://alithemes.com" target="_blank">&nbsp; AliThemes</a></div>
            </div>
        </div>
    </div>
</div>
<div class="sidebar-left"><a class="btn btn-open" href="#"></a>
    <ul class="menu-icons hidden">
        <li><a href="javascript:void(0)"><img src="frontend/imgs/page/homepage6/armchair.svg" alt="Ecom"></a></li>
        <li><a href="javascript:void(0)"><img src="frontend/imgs/page/homepage6/bathhub.svg" alt="Ecom"></a></li>
        <li><a href="#"><img src="frontend/imgs/page/homepage6/bed.svg" alt="Ecom"></a></li>
        <li><a href="#"><img src="frontend/imgs/page/homepage6/office.svg" alt="Ecom"></a></li>
        <li><a href="#"><img src="frontend/imgs/page/homepage6/chair.svg" alt="Ecom"></a></li>
        <li><a href="#"><img src="frontend/imgs/page/homepage6/chest.svg" alt="Ecom"></a></li>
        <li><a href="#"><img src="frontend/imgs/page/homepage6/dressing.svg" alt="Ecom"></a></li>
        <li><a href="#"><img src="frontend/imgs/page/homepage6/lamp.svg" alt="Ecom"></a></li>
        <li><a href="#"><img src="frontend/imgs/page/homepage6/sofa.svg" alt="Ecom"></a></li>
        <li><a href="#"><img src="frontend/imgs/page/homepage6/storage.svg" alt="Ecom"></a></li>
        <li><a href="#"><img src="frontend/imgs/page/homepage6/electric.svg" alt="Ecom"></a></li>
        <li><a href="#"><img src="frontend/imgs/page/homepage6/wardrobe.svg" alt="Ecom"></a></li>
    </ul>
    <ul class="menu-texts menu-close">
        <li class="has-children"><a href="shop-grid-2.html"><span class="img-link"><img
                        src="frontend/imgs/page/homepage6/armchair.svg" alt="Ecom"></span><span class="text-link">Armchair</span></a>
            <ul class="sub-menu">
                <li><a href="shop-grid.html">Cross Back</a></li>
                <li><a href="shop-grid.html">Open Back</a></li>
                <li><a href="shop-grid.html">Queen Anne Back</a></li>
                <li><a href="shop-grid.html">Solid Back</a></li>
                <li><a href="shop-grid.html">Wing Back</a></li>
            </ul>
        </li>
        <li class="has-children"><a href="#"><span class="img-link"><img src="frontend/imgs/page/homepage6/bathhub.svg"
                                                                         alt="Ecom"></span><span class="text-link">Bathtub</span></a>
            <ul class="sub-menu">
                <li><a href="shop-grid.html">Cross Back</a></li>
                <li><a href="shop-grid.html">Open Back</a></li>
                <li><a href="shop-grid.html">Queen Anne Back</a></li>
                <li><a href="shop-grid.html">Solid Back</a></li>
                <li><a href="shop-grid.html">Wing Back</a></li>
            </ul>
        </li>
        <li class="has-children"><a href="shop-grid.html"><span class="img-link"><img
                        src="frontend/imgs/page/homepage6/bed.svg" alt="Ecom"></span><span class="text-link">Bed</span></a>
            <ul class="sub-menu">
                <li><a href="shop-grid.html">Cross Back</a></li>
                <li><a href="shop-grid.html">Open Back</a></li>
                <li><a href="shop-grid.html">Queen Anne Back</a></li>
                <li><a href="shop-grid.html">Solid Back</a></li>
                <li><a href="shop-grid.html">Wing Back</a></li>
            </ul>
        </li>
        <li class="has-children"><a href="shop-grid.html"><span class="img-link"><img
                        src="frontend/imgs/page/homepage6/office.svg" alt="Ecom"></span><span class="text-link">Office Cabinet</span></a>
            <ul class="sub-menu">
                <li><a href="shop-grid.html">Chair</a></li>
                <li><a href="shop-grid.html">Chest</a></li>
                <li><a href="shop-grid.html">Cross Back</a></li>
                <li><a href="shop-grid.html">Open Back</a></li>
                <li><a href="shop-grid.html">Queen Anne Back</a></li>
                <li><a href="shop-grid.html">Solid Back</a></li>
                <li><a href="shop-grid.html">Wing Back</a></li>
            </ul>
        </li>
        <li><a href="shop-grid.html"><span class="img-link"><img src="frontend/imgs/page/homepage6/chair.svg"
                                                                 alt="Ecom"></span><span class="text-link">Chair</span></a>
        </li>
        <li><a href="shop-grid.html"><span class="img-link"><img src="frontend/imgs/page/homepage6/chest.svg"
                                                                 alt="Ecom"></span><span class="text-link">Chest</span></a>
        </li>
        <li><a href="shop-grid.html"><span class="img-link"><img src="frontend/imgs/page/homepage6/dressing.svg"
                                                                 alt="Ecom"></span><span class="text-link">Dressing Table</span></a>
        </li>
        <li><a href="shop-grid.html"><span class="img-link"><img src="frontend/imgs/page/homepage6/lamp.svg" alt="Ecom"></span><span
                    class="text-link">Lamp</span></a></li>
        <li><a href="shop-grid.html"><span class="img-link"><img src="frontend/imgs/page/homepage6/sofa.svg" alt="Ecom"></span><span
                    class="text-link">Sofa</span></a></li>
        <li><a href="shop-grid.html"><span class="img-link"><img src="frontend/imgs/page/homepage6/storage.svg"
                                                                 alt="Ecom"></span><span
                    class="text-link">Storage</span></a></li>
        <li><a href="shop-grid.html"><span class="img-link"><img src="frontend/imgs/page/homepage6/electric.svg"
                                                                 alt="Ecom"></span><span class="text-link">Electric Table</span></a>
        </li>
        <li><a href="shop-grid.html"><span class="img-link"><img src="frontend/imgs/page/homepage6/wardrobe.svg"
                                                                 alt="Ecom"></span><span
                    class="text-link">Wardrobe</span></a></li>
    </ul>
</div>
<div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
    <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-content-area">
            <div class="mobile-logo"><a class="d-flex" href="index.html"><img alt="Ecom"
                                                                              src="frontend/imgs/template/logo.svg"></a>
            </div>
            <div class="perfect-scroll">
                <div class="mobile-menu-wrap mobile-header-border">
                    <nav class="mt-15">
                        <ul class="mobile-menu font-heading">
                            <li class="has-children"><a class="active" href="index.html">Home</a>
                                <ul class="sub-menu">
                                    <li><a href="index.html">Homepage - 1</a></li>
                                    <li><a href="index-2.html">Homepage - 2</a></li>
                                    <li><a href="index-3.html">Homepage - 3</a></li>
                                    <li><a href="index-4.html">Homepage - 4</a></li>
                                    <li><a href="index-5.html">Homepage - 5</a></li>
                                    <li><a href="index-6.html">Homepage - 6</a></li>
                                    <li><a href="index-6.html">Homepage - 6</a></li>
                                    <li><a href="index-7.html">Homepage - 7</a></li>
                                    <li><a href="index-8.html">Homepage - 8</a></li>
                                    <li><a href="index-9.html">Homepage - 9</a></li>
                                    <li><a href="index-10.html">Homepage - 10</a></li>
                                </ul>
                            </li>
                            <li class="has-children"><a href="shop-grid.html">Shop</a>
                                <ul class="sub-menu">
                                    <li><a href="shop-grid.html">Shop Grid</a></li>
                                    <li><a href="shop-grid-2.html">Shop Grid 2</a></li>
                                    <li><a href="shop-list.html">Shop List</a></li>
                                    <li><a href="shop-list-2.html">Shop List 2</a></li>
                                    <li><a href="shop-fullwidth.html">Shop Fullwidth</a></li>
                                    <li><a href="shop-single-product.html">Single Product</a></li>
                                    <li><a href="shop-single-product-2.html">Single Product 2</a></li>
                                    <li><a href="shop-single-product-3.html">Single Product 3</a></li>
                                    <li><a href="shop-single-product-4.html">Single Product 4</a></li>
                                    <li><a href="shop-cart.html">Shop Cart</a></li>
                                    <li><a href="shop-checkout.html">Shop Checkout</a></li>
                                    <li><a href="shop-compare.html">Shop Compare</a></li>
                                    <li><a href="shop-wishlist.html">Shop Wishlist</a></li>
                                </ul>
                            </li>
                            <li class="has-children"><a href="shop-vendor-list.html">Vendors</a>
                                <ul class="sub-menu">
                                    <li><a href="shop-vendor-list.html">Vendors Listing</a></li>
                                    <li><a href="shop-vendor-single.html">Vendor Single</a></li>
                                </ul>
                            </li>
                            <li class="has-children"><a href="#">Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="page-about-us.html">About Us</a></li>
                                    <li><a href="page-contact.html">Contact Us</a></li>
                                    <li><a href="page-careers.html">Careers</a></li>
                                    <li><a href="page-term.html">Term and Condition</a></li>
                                    <li><a href="page-register.html">Register</a></li>
                                    <li><a href="page-login.html">Login</a></li>
                                    <li><a href="page-404.html">Error 404</a></li>
                                </ul>
                            </li>
                            <li class="has-children"><a href="blog.html">Blog</a>
                                <ul class="sub-menu">
                                    <li><a href="blog.html">Blog Grid</a></li>
                                    <li><a href="blog-2.html">Blog Grid 2</a></li>
                                    <li><a href="blog-list.html">Blog List</a></li>
                                    <li><a href="blog-big.html">Blog Big</a></li>
                                    <li><a href="blog-single.html">Blog Single - Left sidebar</a></li>
                                    <li><a href="blog-single-2.html">Blog Single - Right sidebar</a></li>
                                    <li><a href="blog-single-3.html">Blog Single - No sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="page-contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="mobile-account">
                    <div class="mobile-header-top">
                        <div class="user-account"><a href="page-account.html"><img
                                    src="frontend/imgs/template/ava_1.png" alt="Ecom"></a>
                            <div class="content">
                                <h6 class="user-name">Hello<span class="text-brand"> Steven !</span></h6>
                                <p class="font-xs text-muted">You have 3 new messages</p>
                            </div>
                        </div>
                    </div>
                    <ul class="mobile-menu">
                        <li><a href="page-account.html">My Account</a></li>
                        <li><a href="page-account.html">Order Tracking</a></li>
                        <li><a href="page-account.html">My Orders</a></li>
                        <li><a href="page-account.html">My Wishlist</a></li>
                        <li><a href="page-account.html">Setting</a></li>
                        <li><a href="page-login.html">Sign out</a></li>
                    </ul>
                </div>
                <div class="mobile-banner">
                    <div class="bg-5 block-iphone"><span class="color-brand-3 font-sm-lh32">Starting from $899</span>
                        <h3 class="font-xl mb-10">iPhone 12 Pro 128Gb</h3>
                        <p class="font-base color-brand-3 mb-10">Special Sale</p><a class="btn btn-arrow"
                                                                                    href="shop-grid.html">learn more</a>
                    </div>
                </div>
                <div class="site-copyright color-gray-400 mt-30">Copyright 2022 &copy; Ecom - Marketplace Template.<br>Designed
                    by<a href="http://alithemes.com" target="_blank">&nbsp; AliThemes</a></div>
            </div>
        </div>
    </div>
</div>
<main class="main">
    <section class="section-box mt-35">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="banner-left">
                        {{--                            <img src="{{$banner[0]->image->file}}">--}}
                        <div class="box-adsolute-banner">
                            <h5>Office Collection</h5><a class="btn btn-link-brand-2 text-capitalize">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-30">
                    <div class="box-swiper">
                        <div class="swiper-container swiper-banner-1">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="banner-middle"
                                         style="background-image: url(frontend/imgs/page/homepage6/banner2.png)">
                                        <div class="box-adsolute-banner">
                                            <h6 class="mb-10">Big & Fresh Offers</h6>
                                            <h2 class="mb-5">DECORA & CRAFTS</h2>
                                            <h6 class="sale-tag">Sale On This Weekend</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="banner-middle"
                                         style="background-image: url(frontend/imgs/page/homepage6/banner2-2.png)">
                                        <div class="box-adsolute-banner">
                                            <h6 class="mb-10">Big & Fresh Offers</h6>
                                            <h2 class="mb-5">DECORA & CRAFTS</h2>
                                            <h6 class="sale-tag">Sale On This Weekend</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-next swiper-button-next-style-4"></div>
                            <div class="swiper-button-prev swiper-button-prev-style-4"></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="banner-right-home6">
                        <img src="{{@$banner[1]->image->file}}">
                        <div class="box-adsolute-banner">
                            <h5>Comfort Chair</h5><a class="btn btn-link-brand-2 text-capitalize">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section-box mt-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>محبوب ترین دسته بندی ها</h3>
                </div>

            </div>
            <div class="mt-50">
                <div class="box-swiper">
                    <div class="swiper-container swiper-group-5">
                        <div class="swiper-wrapper pt-5">
                            @forelse($categories as $category)
                                <div class="swiper-slide">
                                    <div class="card-category">
                                        <div class="card-image"><a><img src="{{$category->image->file}}" alt="Genz"></a>
                                        </div>
                                        <div class="card-info"><a href="blog-single.html">
                                                <h5 class="color-brand-3 mb-5">{{$category->title}}</h5>
                                                <p class="font-md color-gray-500">{{$category->where('show', 1)->count()}}</p>
                                            </a></div>
                                    </div>
                                </div>
                            @empty
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-bottom"></div>
        </div>
    </section>
    <section class="section-box mt-50">
        <div class="container">
            <div class="head-main bd-gray-200">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <h3 class="mb-5">برگزیده ماهانه</h3>
                    </div>
                    <div class="col-xl-6 col-lg-6 position-relative">
                        <ul class="nav nav-tabs text-uppercase pl-100" role="tablist">
                            <li><a class="active" href="#tab-3-all" data-bs-toggle="tab" role="tab"
                                   aria-controls="tab-3-all" aria-selected="true" data-index="1">All</a></li>
                            <li><a href="#tab-3-bestseller" data-bs-toggle="tab" role="tab"
                                   aria-controls="tab-3-bestseller" aria-selected="false" data-index="2">Best seller</a>
                            </li>
                            <li><a href="#tab-3-mostviewed" data-bs-toggle="tab" role="tab"
                                   aria-controls="tab-3-mostviewed" aria-selected="false" data-index="3">Most viewed</a>
                            </li>
                            <li><a href="#tab-3-topbrands" data-bs-toggle="tab" role="tab"
                                   aria-controls="tab-3-topbrands" aria-selected="false" data-index="4">Top Brands</a>
                            </li>
                        </ul>
                        <!-- Button slider-->
                        <div class="box-button-slider">
                            <div class="button-slider-nav" id="tab-3-all-nav">
                                <div class="swiper-button-next swiper-button-next-tab-1"></div>
                                <div class="swiper-button-prev swiper-button-prev-tab-1"></div>
                            </div>
                            <div class="button-slider-nav" id="tab-3-bestseller-nav" style="display: none;">
                                <div class="swiper-button-next swiper-button-next-tab-2"></div>
                                <div class="swiper-button-prev swiper-button-prev-tab-2"></div>
                            </div>
                            <div class="button-slider-nav" id="tab-3-mostviewed-nav" style="display: none;">
                                <div class="swiper-button-next swiper-button-next-tab-3"></div>
                                <div class="swiper-button-prev swiper-button-prev-tab-3"></div>
                            </div>
                            <div class="button-slider-nav" id="tab-3-topbrands-nav" style="display: none;">
                                <div class="swiper-button-next swiper-button-next-tab-4"></div>
                                <div class="swiper-button-prev swiper-button-prev-tab-4"></div>
                            </div>
                        </div>
                        <!-- End Button slider-->
                    </div>
                </div>
            </div>
            <div class="tab-content tab-content-slider">
                <div class="tab-pane fade active show" id="tab-3-all" role="tabpanel" aria-labelledby="tab-3-all">
                    <div class="box-swiper">
                        <div class="swiper-container swiper-tab-1">
                            <div class="swiper-wrapper pt-5">
                                <div class="swiper-slide">
                                    <div class="list-products-5">
                                        <div class="card-grid-style-3 home6-style">
                                            <div class="card-grid-inner">
                                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                                      aria-label="Trend" data-bs-placement="left"></a><a
                                                        class="btn btn-wishlist btn-tooltip mb-10"
                                                        href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a
                                                        class="btn btn-compare btn-tooltip mb-10"
                                                        href="shop-compare.html" aria-label="Compare"></a><a
                                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                                        href="shop-single-product-2.html"><img
                                                            src="frontend/imgs/page/homepage6/sp1.png" alt="Ecom"></a>
                                                </div>
                                                <div class="info-right"><a class="font-xs color-gray-500"
                                                                           href="shop-vendor-single.html">Apple</a><br><a
                                                        class="color-brand-3 font-sm-bold"
                                                        href="shop-single-product-2.html">HP 11.6&quot; Chromebook, AMD
                                                        A4, 4GB RAM, 32GB Storage</a>
                                                    <div class="rating"><img src="frontend/imgs/template/icons/star.svg"
                                                                             alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><span
                                                            class="font-xs color-gray-500">(65)</span></div>
                                                    <div class="price-info mb-10"><strong
                                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                            class="color-gray-500 price-line">$3225.6</span></div>
                                                    <div class="mt-10 box-btn-cart"><a class="btn btn-cart"
                                                                                       href="shop-cart.html">Add To
                                                            Cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-grid-style-3 home6-style">
                                            <div class="card-grid-inner">
                                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                                      aria-label="Trend" data-bs-placement="left"></a><a
                                                        class="btn btn-wishlist btn-tooltip mb-10"
                                                        href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a
                                                        class="btn btn-compare btn-tooltip mb-10"
                                                        href="shop-compare.html" aria-label="Compare"></a><a
                                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                                <div class="image-box"><span class="label bg-danger">Hot</span><a
                                                        href="shop-single-product-2.html"><img
                                                            src="frontend/imgs/page/homepage6/sp2.png" alt="Ecom"></a>
                                                </div>
                                                <div class="info-right"><a class="font-xs color-gray-500"
                                                                           href="shop-vendor-single.html">Apple</a><br><a
                                                        class="color-brand-3 font-sm-bold"
                                                        href="shop-single-product-2.html">ASUS VivoBook 15.6&quot; 1080p
                                                        PC Laptops, Intel Core i3</a>
                                                    <div class="rating"><img src="frontend/imgs/template/icons/star.svg"
                                                                             alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><span
                                                            class="font-xs color-gray-500">(65)</span></div>
                                                    <div class="price-info mb-10"><strong
                                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                            class="color-gray-500 price-line">$3225.6</span></div>
                                                    <div class="mt-10 box-btn-cart"><a class="btn btn-cart"
                                                                                       href="shop-cart.html">Add To
                                                            Cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-grid-style-3 home6-style">
                                            <div class="card-grid-inner">
                                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                                      aria-label="Trend" data-bs-placement="left"></a><a
                                                        class="btn btn-wishlist btn-tooltip mb-10"
                                                        href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a
                                                        class="btn btn-compare btn-tooltip mb-10"
                                                        href="shop-compare.html" aria-label="Compare"></a><a
                                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                                <div class="image-box"><span class="label bg-success">New</span><a
                                                        href="shop-single-product-2.html"><img
                                                            src="frontend/imgs/page/homepage6/sp3.png" alt="Ecom"></a>
                                                </div>
                                                <div class="info-right"><a class="font-xs color-gray-500"
                                                                           href="shop-vendor-single.html">Apple</a><br><a
                                                        class="color-brand-3 font-sm-bold"
                                                        href="shop-single-product-2.html">2020 Apple 10.9-inch iPad Air
                                                        Wi-Fi 64GB - Silver</a>
                                                    <div class="rating"><img src="frontend/imgs/template/icons/star.svg"
                                                                             alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><span
                                                            class="font-xs color-gray-500">(65)</span></div>
                                                    <div class="price-info mb-10"><strong
                                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                            class="color-gray-500 price-line">$3225.6</span></div>
                                                    <div class="mt-10 box-btn-cart"><a class="btn btn-cart"
                                                                                       href="shop-cart.html">Add To
                                                            Cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-grid-style-3 home6-style">
                                            <div class="card-grid-inner">
                                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                                      aria-label="Trend" data-bs-placement="left"></a><a
                                                        class="btn btn-wishlist btn-tooltip mb-10"
                                                        href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a
                                                        class="btn btn-compare btn-tooltip mb-10"
                                                        href="shop-compare.html" aria-label="Compare"></a><a
                                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                                <div class="image-box"><a href="shop-single-product-2.html"><img
                                                            src="frontend/imgs/page/homepage6/sp4.png" alt="Ecom"></a>
                                                </div>
                                                <div class="info-right"><a class="font-xs color-gray-500"
                                                                           href="shop-vendor-single.html">Apple</a><br><a
                                                        class="color-brand-3 font-sm-bold"
                                                        href="shop-single-product-2.html">MSI Optix G272 27&quot; Full
                                                        HD LED Gaming LCD Monitor</a>
                                                    <div class="rating"><img src="frontend/imgs/template/icons/star.svg"
                                                                             alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><span
                                                            class="font-xs color-gray-500">(65)</span></div>
                                                    <div class="price-info mb-10"><strong
                                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                            class="color-gray-500 price-line">$3225.6</span></div>
                                                    <div class="mt-10 box-btn-cart"><a class="btn btn-cart"
                                                                                       href="shop-cart.html">Add To
                                                            Cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-grid-style-3 home6-style">
                                            <div class="card-grid-inner">
                                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                                      aria-label="Trend" data-bs-placement="left"></a><a
                                                        class="btn btn-wishlist btn-tooltip mb-10"
                                                        href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a
                                                        class="btn btn-compare btn-tooltip mb-10"
                                                        href="shop-compare.html" aria-label="Compare"></a><a
                                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                                <div class="image-box"><a href="shop-single-product-2.html"><img
                                                            src="frontend/imgs/page/homepage6/sp5.png" alt="Ecom"></a>
                                                </div>
                                                <div class="info-right"><a class="font-xs color-gray-500"
                                                                           href="shop-vendor-single.html">Apple</a><br><a
                                                        class="color-brand-3 font-sm-bold"
                                                        href="shop-single-product-2.html">MSI Optix G272 27&quot; Full
                                                        HD LED Gaming LCD Monitor</a>
                                                    <div class="rating"><img src="frontend/imgs/template/icons/star.svg"
                                                                             alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><span
                                                            class="font-xs color-gray-500">(65)</span></div>
                                                    <div class="price-info mb-10"><strong
                                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                            class="color-gray-500 price-line">$3225.6</span></div>
                                                    <div class="mt-10 box-btn-cart"><a class="btn btn-cart"
                                                                                       href="shop-cart.html">Add To
                                                            Cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-grid-style-3 home6-style">
                                            <div class="card-grid-inner">
                                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                                      aria-label="Trend" data-bs-placement="left"></a><a
                                                        class="btn btn-wishlist btn-tooltip mb-10"
                                                        href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a
                                                        class="btn btn-compare btn-tooltip mb-10"
                                                        href="shop-compare.html" aria-label="Compare"></a><a
                                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                                        href="shop-single-product-2.html"><img
                                                            src="frontend/imgs/page/homepage6/sp6.png" alt="Ecom"></a>
                                                </div>
                                                <div class="info-right"><a class="font-xs color-gray-500"
                                                                           href="shop-vendor-single.html">Apple</a><br><a
                                                        class="color-brand-3 font-sm-bold"
                                                        href="shop-single-product-2.html">HP 11.6&quot; Chromebook, AMD
                                                        A4, 4GB RAM, 32GB Storage</a>
                                                    <div class="rating"><img src="frontend/imgs/template/icons/star.svg"
                                                                             alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><span
                                                            class="font-xs color-gray-500">(65)</span></div>
                                                    <div class="price-info mb-10"><strong
                                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                            class="color-gray-500 price-line">$3225.6</span></div>
                                                    <div class="mt-10 box-btn-cart"><a class="btn btn-cart"
                                                                                       href="shop-cart.html">Add To
                                                            Cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-grid-style-3 home6-style">
                                            <div class="card-grid-inner">
                                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                                      aria-label="Trend" data-bs-placement="left"></a><a
                                                        class="btn btn-wishlist btn-tooltip mb-10"
                                                        href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a
                                                        class="btn btn-compare btn-tooltip mb-10"
                                                        href="shop-compare.html" aria-label="Compare"></a><a
                                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                                <div class="image-box"><span class="label bg-danger">Hot</span><a
                                                        href="shop-single-product-2.html"><img
                                                            src="frontend/imgs/page/homepage6/sp7.png" alt="Ecom"></a>
                                                </div>
                                                <div class="info-right"><a class="font-xs color-gray-500"
                                                                           href="shop-vendor-single.html">Apple</a><br><a
                                                        class="color-brand-3 font-sm-bold"
                                                        href="shop-single-product-2.html">ASUS VivoBook 15.6&quot; 1080p
                                                        PC Laptops, Intel Core i3</a>
                                                    <div class="rating"><img src="frontend/imgs/template/icons/star.svg"
                                                                             alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><span
                                                            class="font-xs color-gray-500">(65)</span></div>
                                                    <div class="price-info mb-10"><strong
                                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                            class="color-gray-500 price-line">$3225.6</span></div>
                                                    <div class="mt-10 box-btn-cart"><a class="btn btn-cart"
                                                                                       href="shop-cart.html">Add To
                                                            Cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-grid-style-3 home6-style">
                                            <div class="card-grid-inner">
                                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                                      aria-label="Trend" data-bs-placement="left"></a><a
                                                        class="btn btn-wishlist btn-tooltip mb-10"
                                                        href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a
                                                        class="btn btn-compare btn-tooltip mb-10"
                                                        href="shop-compare.html" aria-label="Compare"></a><a
                                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                                <div class="image-box"><span class="label bg-success">New</span><a
                                                        href="shop-single-product-2.html"><img
                                                            src="frontend/imgs/page/homepage6/sp8.png" alt="Ecom"></a>
                                                </div>
                                                <div class="info-right"><a class="font-xs color-gray-500"
                                                                           href="shop-vendor-single.html">Apple</a><br><a
                                                        class="color-brand-3 font-sm-bold"
                                                        href="shop-single-product-2.html">2020 Apple 10.9-inch iPad Air
                                                        Wi-Fi 64GB - Silver</a>
                                                    <div class="rating"><img src="frontend/imgs/template/icons/star.svg"
                                                                             alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><span
                                                            class="font-xs color-gray-500">(65)</span></div>
                                                    <div class="price-info mb-10"><strong
                                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                            class="color-gray-500 price-line">$3225.6</span></div>
                                                    <div class="mt-10 box-btn-cart"><a class="btn btn-cart"
                                                                                       href="shop-cart.html">Add To
                                                            Cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-grid-style-3 home6-style">
                                            <div class="card-grid-inner">
                                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                                      aria-label="Trend" data-bs-placement="left"></a><a
                                                        class="btn btn-wishlist btn-tooltip mb-10"
                                                        href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a
                                                        class="btn btn-compare btn-tooltip mb-10"
                                                        href="shop-compare.html" aria-label="Compare"></a><a
                                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                                <div class="image-box"><a href="shop-single-product-2.html"><img
                                                            src="frontend/imgs/page/homepage6/sp9.png" alt="Ecom"></a>
                                                </div>
                                                <div class="info-right"><a class="font-xs color-gray-500"
                                                                           href="shop-vendor-single.html">Apple</a><br><a
                                                        class="color-brand-3 font-sm-bold"
                                                        href="shop-single-product-2.html">MSI Optix G272 27&quot; Full
                                                        HD LED Gaming LCD Monitor</a>
                                                    <div class="rating"><img src="frontend/imgs/template/icons/star.svg"
                                                                             alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><span
                                                            class="font-xs color-gray-500">(65)</span></div>
                                                    <div class="price-info mb-10"><strong
                                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                            class="color-gray-500 price-line">$3225.6</span></div>
                                                    <div class="mt-10 box-btn-cart"><a class="btn btn-cart"
                                                                                       href="shop-cart.html">Add To
                                                            Cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-grid-style-3 home6-style">
                                            <div class="card-grid-inner">
                                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                                      aria-label="Trend" data-bs-placement="left"></a><a
                                                        class="btn btn-wishlist btn-tooltip mb-10"
                                                        href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a
                                                        class="btn btn-compare btn-tooltip mb-10"
                                                        href="shop-compare.html" aria-label="Compare"></a><a
                                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                                <div class="image-box"><a href="shop-single-product-2.html"><img
                                                            src="frontend/imgs/page/homepage6/sp10.png" alt="Ecom"></a>
                                                </div>
                                                <div class="info-right"><a class="font-xs color-gray-500"
                                                                           href="shop-vendor-single.html">Apple</a><br><a
                                                        class="color-brand-3 font-sm-bold"
                                                        href="shop-single-product-2.html">MSI Optix G272 27&quot; Full
                                                        HD LED Gaming LCD Monitor</a>
                                                    <div class="rating"><img src="frontend/imgs/template/icons/star.svg"
                                                                             alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><span
                                                            class="font-xs color-gray-500">(65)</span></div>
                                                    <div class="price-info mb-10"><strong
                                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                            class="color-gray-500 price-line">$3225.6</span></div>
                                                    <div class="mt-10 box-btn-cart"><a class="btn btn-cart"
                                                                                       href="shop-cart.html">Add To
                                                            Cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-3-bestseller" role="tabpanel" aria-labelledby="tab-3-bestseller">
                    <div class="box-swiper">
                        <div class="swiper-container swiper-tab-2">
                            <div class="swiper-wrapper pt-5">
                                <div class="swiper-slide">
                                    <div class="list-products-5">
                                        <div class="card-grid-style-3 home6-style">
                                            <div class="card-grid-inner">
                                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                                      aria-label="Trend" data-bs-placement="left"></a><a
                                                        class="btn btn-wishlist btn-tooltip mb-10"
                                                        href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a
                                                        class="btn btn-compare btn-tooltip mb-10"
                                                        href="shop-compare.html" aria-label="Compare"></a><a
                                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                                        href="shop-single-product-2.html"><img
                                                            src="frontend/imgs/page/homepage6/sp1.png" alt="Ecom"></a>
                                                </div>
                                                <div class="info-right"><a class="font-xs color-gray-500"
                                                                           href="shop-vendor-single.html">Apple</a><br><a
                                                        class="color-brand-3 font-sm-bold"
                                                        href="shop-single-product-2.html">HP 11.6&quot; Chromebook, AMD
                                                        A4, 4GB RAM, 32GB Storage</a>
                                                    <div class="rating"><img src="frontend/imgs/template/icons/star.svg"
                                                                             alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><span
                                                            class="font-xs color-gray-500">(65)</span></div>
                                                    <div class="price-info mb-10"><strong
                                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                            class="color-gray-500 price-line">$3225.6</span></div>
                                                    <div class="mt-10 box-btn-cart"><a class="btn btn-cart"
                                                                                       href="shop-cart.html">Add To
                                                            Cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-grid-style-3 home6-style">
                                            <div class="card-grid-inner">
                                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                                      aria-label="Trend" data-bs-placement="left"></a><a
                                                        class="btn btn-wishlist btn-tooltip mb-10"
                                                        href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a
                                                        class="btn btn-compare btn-tooltip mb-10"
                                                        href="shop-compare.html" aria-label="Compare"></a><a
                                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                                <div class="image-box"><span class="label bg-danger">Hot</span><a
                                                        href="shop-single-product-2.html"><img
                                                            src="frontend/imgs/page/homepage6/sp2.png" alt="Ecom"></a>
                                                </div>
                                                <div class="info-right"><a class="font-xs color-gray-500"
                                                                           href="shop-vendor-single.html">Apple</a><br><a
                                                        class="color-brand-3 font-sm-bold"
                                                        href="shop-single-product-2.html">ASUS VivoBook 15.6&quot; 1080p
                                                        PC Laptops, Intel Core i3</a>
                                                    <div class="rating"><img src="frontend/imgs/template/icons/star.svg"
                                                                             alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><span
                                                            class="font-xs color-gray-500">(65)</span></div>
                                                    <div class="price-info mb-10"><strong
                                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                            class="color-gray-500 price-line">$3225.6</span></div>
                                                    <div class="mt-10 box-btn-cart"><a class="btn btn-cart"
                                                                                       href="shop-cart.html">Add To
                                                            Cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-grid-style-3 home6-style">
                                            <div class="card-grid-inner">
                                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                                      aria-label="Trend" data-bs-placement="left"></a><a
                                                        class="btn btn-wishlist btn-tooltip mb-10"
                                                        href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a
                                                        class="btn btn-compare btn-tooltip mb-10"
                                                        href="shop-compare.html" aria-label="Compare"></a><a
                                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                                <div class="image-box"><span class="label bg-success">New</span><a
                                                        href="shop-single-product-2.html"><img
                                                            src="frontend/imgs/page/homepage6/sp3.png" alt="Ecom"></a>
                                                </div>
                                                <div class="info-right"><a class="font-xs color-gray-500"
                                                                           href="shop-vendor-single.html">Apple</a><br><a
                                                        class="color-brand-3 font-sm-bold"
                                                        href="shop-single-product-2.html">2020 Apple 10.9-inch iPad Air
                                                        Wi-Fi 64GB - Silver</a>
                                                    <div class="rating"><img src="frontend/imgs/template/icons/star.svg"
                                                                             alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><span
                                                            class="font-xs color-gray-500">(65)</span></div>
                                                    <div class="price-info mb-10"><strong
                                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                            class="color-gray-500 price-line">$3225.6</span></div>
                                                    <div class="mt-10 box-btn-cart"><a class="btn btn-cart"
                                                                                       href="shop-cart.html">Add To
                                                            Cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-grid-style-3 home6-style">
                                            <div class="card-grid-inner">
                                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                                      aria-label="Trend" data-bs-placement="left"></a><a
                                                        class="btn btn-wishlist btn-tooltip mb-10"
                                                        href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a
                                                        class="btn btn-compare btn-tooltip mb-10"
                                                        href="shop-compare.html" aria-label="Compare"></a><a
                                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                                <div class="image-box"><a href="shop-single-product-2.html"><img
                                                            src="frontend/imgs/page/homepage6/sp4.png" alt="Ecom"></a>
                                                </div>
                                                <div class="info-right"><a class="font-xs color-gray-500"
                                                                           href="shop-vendor-single.html">Apple</a><br><a
                                                        class="color-brand-3 font-sm-bold"
                                                        href="shop-single-product-2.html">MSI Optix G272 27&quot; Full
                                                        HD LED Gaming LCD Monitor</a>
                                                    <div class="rating"><img src="frontend/imgs/template/icons/star.svg"
                                                                             alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><span
                                                            class="font-xs color-gray-500">(65)</span></div>
                                                    <div class="price-info mb-10"><strong
                                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                            class="color-gray-500 price-line">$3225.6</span></div>
                                                    <div class="mt-10 box-btn-cart"><a class="btn btn-cart"
                                                                                       href="shop-cart.html">Add To
                                                            Cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-grid-style-3 home6-style">
                                            <div class="card-grid-inner">
                                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                                      aria-label="Trend" data-bs-placement="left"></a><a
                                                        class="btn btn-wishlist btn-tooltip mb-10"
                                                        href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a
                                                        class="btn btn-compare btn-tooltip mb-10"
                                                        href="shop-compare.html" aria-label="Compare"></a><a
                                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                                <div class="image-box"><a href="shop-single-product-2.html"><img
                                                            src="frontend/imgs/page/homepage6/sp5.png" alt="Ecom"></a>
                                                </div>
                                                <div class="info-right"><a class="font-xs color-gray-500"
                                                                           href="shop-vendor-single.html">Apple</a><br><a
                                                        class="color-brand-3 font-sm-bold"
                                                        href="shop-single-product-2.html">MSI Optix G272 27&quot; Full
                                                        HD LED Gaming LCD Monitor</a>
                                                    <div class="rating"><img src="frontend/imgs/template/icons/star.svg"
                                                                             alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><span
                                                            class="font-xs color-gray-500">(65)</span></div>
                                                    <div class="price-info mb-10"><strong
                                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                            class="color-gray-500 price-line">$3225.6</span></div>
                                                    <div class="mt-10 box-btn-cart"><a class="btn btn-cart"
                                                                                       href="shop-cart.html">Add To
                                                            Cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-grid-style-3 home6-style">
                                            <div class="card-grid-inner">
                                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                                      aria-label="Trend" data-bs-placement="left"></a><a
                                                        class="btn btn-wishlist btn-tooltip mb-10"
                                                        href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a
                                                        class="btn btn-compare btn-tooltip mb-10"
                                                        href="shop-compare.html" aria-label="Compare"></a><a
                                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                                        href="shop-single-product-2.html"><img
                                                            src="frontend/imgs/page/homepage6/sp6.png" alt="Ecom"></a>
                                                </div>
                                                <div class="info-right"><a class="font-xs color-gray-500"
                                                                           href="shop-vendor-single.html">Apple</a><br><a
                                                        class="color-brand-3 font-sm-bold"
                                                        href="shop-single-product-2.html">HP 11.6&quot; Chromebook, AMD
                                                        A4, 4GB RAM, 32GB Storage</a>
                                                    <div class="rating"><img src="frontend/imgs/template/icons/star.svg"
                                                                             alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><span
                                                            class="font-xs color-gray-500">(65)</span></div>
                                                    <div class="price-info mb-10"><strong
                                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                            class="color-gray-500 price-line">$3225.6</span></div>
                                                    <div class="mt-10 box-btn-cart"><a class="btn btn-cart"
                                                                                       href="shop-cart.html">Add To
                                                            Cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-grid-style-3 home6-style">
                                            <div class="card-grid-inner">
                                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                                      aria-label="Trend" data-bs-placement="left"></a><a
                                                        class="btn btn-wishlist btn-tooltip mb-10"
                                                        href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a
                                                        class="btn btn-compare btn-tooltip mb-10"
                                                        href="shop-compare.html" aria-label="Compare"></a><a
                                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                                <div class="image-box"><span class="label bg-danger">Hot</span><a
                                                        href="shop-single-product-2.html"><img
                                                            src="frontend/imgs/page/homepage6/sp7.png" alt="Ecom"></a>
                                                </div>
                                                <div class="info-right"><a class="font-xs color-gray-500"
                                                                           href="shop-vendor-single.html">Apple</a><br><a
                                                        class="color-brand-3 font-sm-bold"
                                                        href="shop-single-product-2.html">ASUS VivoBook 15.6&quot; 1080p
                                                        PC Laptops, Intel Core i3</a>
                                                    <div class="rating"><img src="frontend/imgs/template/icons/star.svg"
                                                                             alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><span
                                                            class="font-xs color-gray-500">(65)</span></div>
                                                    <div class="price-info mb-10"><strong
                                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                            class="color-gray-500 price-line">$3225.6</span></div>
                                                    <div class="mt-10 box-btn-cart"><a class="btn btn-cart"
                                                                                       href="shop-cart.html">Add To
                                                            Cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-grid-style-3 home6-style">
                                            <div class="card-grid-inner">
                                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                                      aria-label="Trend" data-bs-placement="left"></a><a
                                                        class="btn btn-wishlist btn-tooltip mb-10"
                                                        href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a
                                                        class="btn btn-compare btn-tooltip mb-10"
                                                        href="shop-compare.html" aria-label="Compare"></a><a
                                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                                <div class="image-box"><span class="label bg-success">New</span><a
                                                        href="shop-single-product-2.html"><img
                                                            src="frontend/imgs/page/homepage6/sp8.png" alt="Ecom"></a>
                                                </div>
                                                <div class="info-right"><a class="font-xs color-gray-500"
                                                                           href="shop-vendor-single.html">Apple</a><br><a
                                                        class="color-brand-3 font-sm-bold"
                                                        href="shop-single-product-2.html">2020 Apple 10.9-inch iPad Air
                                                        Wi-Fi 64GB - Silver</a>
                                                    <div class="rating"><img src="frontend/imgs/template/icons/star.svg"
                                                                             alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><span
                                                            class="font-xs color-gray-500">(65)</span></div>
                                                    <div class="price-info mb-10"><strong
                                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                            class="color-gray-500 price-line">$3225.6</span></div>
                                                    <div class="mt-10 box-btn-cart"><a class="btn btn-cart"
                                                                                       href="shop-cart.html">Add To
                                                            Cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-grid-style-3 home6-style">
                                            <div class="card-grid-inner">
                                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                                      aria-label="Trend" data-bs-placement="left"></a><a
                                                        class="btn btn-wishlist btn-tooltip mb-10"
                                                        href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a
                                                        class="btn btn-compare btn-tooltip mb-10"
                                                        href="shop-compare.html" aria-label="Compare"></a><a
                                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                                <div class="image-box"><a href="shop-single-product-2.html"><img
                                                            src="frontend/imgs/page/homepage6/sp9.png" alt="Ecom"></a>
                                                </div>
                                                <div class="info-right"><a class="font-xs color-gray-500"
                                                                           href="shop-vendor-single.html">Apple</a><br><a
                                                        class="color-brand-3 font-sm-bold"
                                                        href="shop-single-product-2.html">MSI Optix G272 27&quot; Full
                                                        HD LED Gaming LCD Monitor</a>
                                                    <div class="rating"><img src="frontend/imgs/template/icons/star.svg"
                                                                             alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><span
                                                            class="font-xs color-gray-500">(65)</span></div>
                                                    <div class="price-info mb-10"><strong
                                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                            class="color-gray-500 price-line">$3225.6</span></div>
                                                    <div class="mt-10 box-btn-cart"><a class="btn btn-cart"
                                                                                       href="shop-cart.html">Add To
                                                            Cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-grid-style-3 home6-style">
                                            <div class="card-grid-inner">
                                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                                      aria-label="Trend" data-bs-placement="left"></a><a
                                                        class="btn btn-wishlist btn-tooltip mb-10"
                                                        href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a
                                                        class="btn btn-compare btn-tooltip mb-10"
                                                        href="shop-compare.html" aria-label="Compare"></a><a
                                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                                <div class="image-box"><a href="shop-single-product-2.html"><img
                                                            src="frontend/imgs/page/homepage6/sp10.png" alt="Ecom"></a>
                                                </div>
                                                <div class="info-right"><a class="font-xs color-gray-500"
                                                                           href="shop-vendor-single.html">Apple</a><br><a
                                                        class="color-brand-3 font-sm-bold"
                                                        href="shop-single-product-2.html">MSI Optix G272 27&quot; Full
                                                        HD LED Gaming LCD Monitor</a>
                                                    <div class="rating"><img src="frontend/imgs/template/icons/star.svg"
                                                                             alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><span
                                                            class="font-xs color-gray-500">(65)</span></div>
                                                    <div class="price-info mb-10"><strong
                                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                            class="color-gray-500 price-line">$3225.6</span></div>
                                                    <div class="mt-10 box-btn-cart"><a class="btn btn-cart"
                                                                                       href="shop-cart.html">Add To
                                                            Cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-3-mostviewed" role="tabpanel" aria-labelledby="tab-3-mostviewed">
                    <div class="box-swiper">
                        <div class="swiper-container swiper-tab-3">
                            <div class="swiper-wrapper pt-5">
                                <div class="swiper-slide">
                                    <div class="list-products-5">
                                        <div class="card-grid-style-3 home6-style">
                                            <div class="card-grid-inner">
                                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                                      aria-label="Trend" data-bs-placement="left"></a><a
                                                        class="btn btn-wishlist btn-tooltip mb-10"
                                                        href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a
                                                        class="btn btn-compare btn-tooltip mb-10"
                                                        href="shop-compare.html" aria-label="Compare"></a><a
                                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                                        href="shop-single-product-2.html"><img
                                                            src="frontend/imgs/page/homepage6/sp1.png" alt="Ecom"></a>
                                                </div>
                                                <div class="info-right"><a class="font-xs color-gray-500"
                                                                           href="shop-vendor-single.html">Apple</a><br><a
                                                        class="color-brand-3 font-sm-bold"
                                                        href="shop-single-product-2.html">HP 11.6&quot; Chromebook, AMD
                                                        A4, 4GB RAM, 32GB Storage</a>
                                                    <div class="rating"><img src="frontend/imgs/template/icons/star.svg"
                                                                             alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><span
                                                            class="font-xs color-gray-500">(65)</span></div>
                                                    <div class="price-info mb-10"><strong
                                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                            class="color-gray-500 price-line">$3225.6</span></div>
                                                    <div class="mt-10 box-btn-cart"><a class="btn btn-cart"
                                                                                       href="shop-cart.html">Add To
                                                            Cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-grid-style-3 home6-style">
                                            <div class="card-grid-inner">
                                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                                      aria-label="Trend" data-bs-placement="left"></a><a
                                                        class="btn btn-wishlist btn-tooltip mb-10"
                                                        href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a
                                                        class="btn btn-compare btn-tooltip mb-10"
                                                        href="shop-compare.html" aria-label="Compare"></a><a
                                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                                <div class="image-box"><span class="label bg-danger">Hot</span><a
                                                        href="shop-single-product-2.html"><img
                                                            src="frontend/imgs/page/homepage6/sp2.png" alt="Ecom"></a>
                                                </div>
                                                <div class="info-right"><a class="font-xs color-gray-500"
                                                                           href="shop-vendor-single.html">Apple</a><br><a
                                                        class="color-brand-3 font-sm-bold"
                                                        href="shop-single-product-2.html">ASUS VivoBook 15.6&quot; 1080p
                                                        PC Laptops, Intel Core i3</a>
                                                    <div class="rating"><img src="frontend/imgs/template/icons/star.svg"
                                                                             alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><span
                                                            class="font-xs color-gray-500">(65)</span></div>
                                                    <div class="price-info mb-10"><strong
                                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                            class="color-gray-500 price-line">$3225.6</span></div>
                                                    <div class="mt-10 box-btn-cart"><a class="btn btn-cart"
                                                                                       href="shop-cart.html">Add To
                                                            Cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-grid-style-3 home6-style">
                                            <div class="card-grid-inner">
                                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                                      aria-label="Trend" data-bs-placement="left"></a><a
                                                        class="btn btn-wishlist btn-tooltip mb-10"
                                                        href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a
                                                        class="btn btn-compare btn-tooltip mb-10"
                                                        href="shop-compare.html" aria-label="Compare"></a><a
                                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                                <div class="image-box"><span class="label bg-success">New</span><a
                                                        href="shop-single-product-2.html"><img
                                                            src="frontend/imgs/page/homepage6/sp3.png" alt="Ecom"></a>
                                                </div>
                                                <div class="info-right"><a class="font-xs color-gray-500"
                                                                           href="shop-vendor-single.html">Apple</a><br><a
                                                        class="color-brand-3 font-sm-bold"
                                                        href="shop-single-product-2.html">2020 Apple 10.9-inch iPad Air
                                                        Wi-Fi 64GB - Silver</a>
                                                    <div class="rating"><img src="frontend/imgs/template/icons/star.svg"
                                                                             alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><span
                                                            class="font-xs color-gray-500">(65)</span></div>
                                                    <div class="price-info mb-10"><strong
                                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                            class="color-gray-500 price-line">$3225.6</span></div>
                                                    <div class="mt-10 box-btn-cart"><a class="btn btn-cart"
                                                                                       href="shop-cart.html">Add To
                                                            Cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-grid-style-3 home6-style">
                                            <div class="card-grid-inner">
                                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                                      aria-label="Trend" data-bs-placement="left"></a><a
                                                        class="btn btn-wishlist btn-tooltip mb-10"
                                                        href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a
                                                        class="btn btn-compare btn-tooltip mb-10"
                                                        href="shop-compare.html" aria-label="Compare"></a><a
                                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                                <div class="image-box"><a href="shop-single-product-2.html"><img
                                                            src="frontend/imgs/page/homepage6/sp4.png" alt="Ecom"></a>
                                                </div>
                                                <div class="info-right"><a class="font-xs color-gray-500"
                                                                           href="shop-vendor-single.html">Apple</a><br><a
                                                        class="color-brand-3 font-sm-bold"
                                                        href="shop-single-product-2.html">MSI Optix G272 27&quot; Full
                                                        HD LED Gaming LCD Monitor</a>
                                                    <div class="rating"><img src="frontend/imgs/template/icons/star.svg"
                                                                             alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><span
                                                            class="font-xs color-gray-500">(65)</span></div>
                                                    <div class="price-info mb-10"><strong
                                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                            class="color-gray-500 price-line">$3225.6</span></div>
                                                    <div class="mt-10 box-btn-cart"><a class="btn btn-cart"
                                                                                       href="shop-cart.html">Add To
                                                            Cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-grid-style-3 home6-style">
                                            <div class="card-grid-inner">
                                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                                      aria-label="Trend" data-bs-placement="left"></a><a
                                                        class="btn btn-wishlist btn-tooltip mb-10"
                                                        href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a
                                                        class="btn btn-compare btn-tooltip mb-10"
                                                        href="shop-compare.html" aria-label="Compare"></a><a
                                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                                <div class="image-box"><a href="shop-single-product-2.html"><img
                                                            src="frontend/imgs/page/homepage6/sp5.png" alt="Ecom"></a>
                                                </div>
                                                <div class="info-right"><a class="font-xs color-gray-500"
                                                                           href="shop-vendor-single.html">Apple</a><br><a
                                                        class="color-brand-3 font-sm-bold"
                                                        href="shop-single-product-2.html">MSI Optix G272 27&quot; Full
                                                        HD LED Gaming LCD Monitor</a>
                                                    <div class="rating"><img src="frontend/imgs/template/icons/star.svg"
                                                                             alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><span
                                                            class="font-xs color-gray-500">(65)</span></div>
                                                    <div class="price-info mb-10"><strong
                                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                            class="color-gray-500 price-line">$3225.6</span></div>
                                                    <div class="mt-10 box-btn-cart"><a class="btn btn-cart"
                                                                                       href="shop-cart.html">Add To
                                                            Cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-grid-style-3 home6-style">
                                            <div class="card-grid-inner">
                                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                                      aria-label="Trend" data-bs-placement="left"></a><a
                                                        class="btn btn-wishlist btn-tooltip mb-10"
                                                        href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a
                                                        class="btn btn-compare btn-tooltip mb-10"
                                                        href="shop-compare.html" aria-label="Compare"></a><a
                                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                                        href="shop-single-product-2.html"><img
                                                            src="frontend/imgs/page/homepage6/sp6.png" alt="Ecom"></a>
                                                </div>
                                                <div class="info-right"><a class="font-xs color-gray-500"
                                                                           href="shop-vendor-single.html">Apple</a><br><a
                                                        class="color-brand-3 font-sm-bold"
                                                        href="shop-single-product-2.html">HP 11.6&quot; Chromebook, AMD
                                                        A4, 4GB RAM, 32GB Storage</a>
                                                    <div class="rating"><img src="frontend/imgs/template/icons/star.svg"
                                                                             alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><span
                                                            class="font-xs color-gray-500">(65)</span></div>
                                                    <div class="price-info mb-10"><strong
                                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                            class="color-gray-500 price-line">$3225.6</span></div>
                                                    <div class="mt-10 box-btn-cart"><a class="btn btn-cart"
                                                                                       href="shop-cart.html">Add To
                                                            Cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-grid-style-3 home6-style">
                                            <div class="card-grid-inner">
                                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                                      aria-label="Trend" data-bs-placement="left"></a><a
                                                        class="btn btn-wishlist btn-tooltip mb-10"
                                                        href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a
                                                        class="btn btn-compare btn-tooltip mb-10"
                                                        href="shop-compare.html" aria-label="Compare"></a><a
                                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                                <div class="image-box"><span class="label bg-danger">Hot</span><a
                                                        href="shop-single-product-2.html"><img
                                                            src="frontend/imgs/page/homepage6/sp7.png" alt="Ecom"></a>
                                                </div>
                                                <div class="info-right"><a class="font-xs color-gray-500"
                                                                           href="shop-vendor-single.html">Apple</a><br><a
                                                        class="color-brand-3 font-sm-bold"
                                                        href="shop-single-product-2.html">ASUS VivoBook 15.6&quot; 1080p
                                                        PC Laptops, Intel Core i3</a>
                                                    <div class="rating"><img src="frontend/imgs/template/icons/star.svg"
                                                                             alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><span
                                                            class="font-xs color-gray-500">(65)</span></div>
                                                    <div class="price-info mb-10"><strong
                                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                            class="color-gray-500 price-line">$3225.6</span></div>
                                                    <div class="mt-10 box-btn-cart"><a class="btn btn-cart"
                                                                                       href="shop-cart.html">Add To
                                                            Cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-grid-style-3 home6-style">
                                            <div class="card-grid-inner">
                                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                                      aria-label="Trend" data-bs-placement="left"></a><a
                                                        class="btn btn-wishlist btn-tooltip mb-10"
                                                        href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a
                                                        class="btn btn-compare btn-tooltip mb-10"
                                                        href="shop-compare.html" aria-label="Compare"></a><a
                                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                                <div class="image-box"><span class="label bg-success">New</span><a
                                                        href="shop-single-product-2.html"><img
                                                            src="frontend/imgs/page/homepage6/sp8.png" alt="Ecom"></a>
                                                </div>
                                                <div class="info-right"><a class="font-xs color-gray-500"
                                                                           href="shop-vendor-single.html">Apple</a><br><a
                                                        class="color-brand-3 font-sm-bold"
                                                        href="shop-single-product-2.html">2020 Apple 10.9-inch iPad Air
                                                        Wi-Fi 64GB - Silver</a>
                                                    <div class="rating"><img src="frontend/imgs/template/icons/star.svg"
                                                                             alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><span
                                                            class="font-xs color-gray-500">(65)</span></div>
                                                    <div class="price-info mb-10"><strong
                                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                            class="color-gray-500 price-line">$3225.6</span></div>
                                                    <div class="mt-10 box-btn-cart"><a class="btn btn-cart"
                                                                                       href="shop-cart.html">Add To
                                                            Cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-grid-style-3 home6-style">
                                            <div class="card-grid-inner">
                                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                                      aria-label="Trend" data-bs-placement="left"></a><a
                                                        class="btn btn-wishlist btn-tooltip mb-10"
                                                        href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a
                                                        class="btn btn-compare btn-tooltip mb-10"
                                                        href="shop-compare.html" aria-label="Compare"></a><a
                                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                                <div class="image-box"><a href="shop-single-product-2.html"><img
                                                            src="frontend/imgs/page/homepage6/sp9.png" alt="Ecom"></a>
                                                </div>
                                                <div class="info-right"><a class="font-xs color-gray-500"
                                                                           href="shop-vendor-single.html">Apple</a><br><a
                                                        class="color-brand-3 font-sm-bold"
                                                        href="shop-single-product-2.html">MSI Optix G272 27&quot; Full
                                                        HD LED Gaming LCD Monitor</a>
                                                    <div class="rating"><img src="frontend/imgs/template/icons/star.svg"
                                                                             alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><span
                                                            class="font-xs color-gray-500">(65)</span></div>
                                                    <div class="price-info mb-10"><strong
                                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                            class="color-gray-500 price-line">$3225.6</span></div>
                                                    <div class="mt-10 box-btn-cart"><a class="btn btn-cart"
                                                                                       href="shop-cart.html">Add To
                                                            Cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-grid-style-3 home6-style">
                                            <div class="card-grid-inner">
                                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                                      aria-label="Trend" data-bs-placement="left"></a><a
                                                        class="btn btn-wishlist btn-tooltip mb-10"
                                                        href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a
                                                        class="btn btn-compare btn-tooltip mb-10"
                                                        href="shop-compare.html" aria-label="Compare"></a><a
                                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                                <div class="image-box"><a href="shop-single-product-2.html"><img
                                                            src="frontend/imgs/page/homepage6/sp10.png" alt="Ecom"></a>
                                                </div>
                                                <div class="info-right"><a class="font-xs color-gray-500"
                                                                           href="shop-vendor-single.html">Apple</a><br><a
                                                        class="color-brand-3 font-sm-bold"
                                                        href="shop-single-product-2.html">MSI Optix G272 27&quot; Full
                                                        HD LED Gaming LCD Monitor</a>
                                                    <div class="rating"><img src="frontend/imgs/template/icons/star.svg"
                                                                             alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><span
                                                            class="font-xs color-gray-500">(65)</span></div>
                                                    <div class="price-info mb-10"><strong
                                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                            class="color-gray-500 price-line">$3225.6</span></div>
                                                    <div class="mt-10 box-btn-cart"><a class="btn btn-cart"
                                                                                       href="shop-cart.html">Add To
                                                            Cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-3-topbrands" role="tabpanel" aria-labelledby="tab-3-topbrands">
                    <div class="box-swiper">
                        <div class="swiper-container swiper-tab-4">
                            <div class="swiper-wrapper pt-5">
                                <div class="swiper-slide">
                                    <div class="list-products-5">
                                        <div class="card-grid-style-3 home6-style">
                                            <div class="card-grid-inner">
                                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                                      aria-label="Trend" data-bs-placement="left"></a><a
                                                        class="btn btn-wishlist btn-tooltip mb-10"
                                                        href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a
                                                        class="btn btn-compare btn-tooltip mb-10"
                                                        href="shop-compare.html" aria-label="Compare"></a><a
                                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                                        href="shop-single-product-2.html"><img
                                                            src="frontend/imgs/page/homepage6/sp1.png" alt="Ecom"></a>
                                                </div>
                                                <div class="info-right"><a class="font-xs color-gray-500"
                                                                           href="shop-vendor-single.html">Apple</a><br><a
                                                        class="color-brand-3 font-sm-bold"
                                                        href="shop-single-product-2.html">HP 11.6&quot; Chromebook, AMD
                                                        A4, 4GB RAM, 32GB Storage</a>
                                                    <div class="rating"><img src="frontend/imgs/template/icons/star.svg"
                                                                             alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><span
                                                            class="font-xs color-gray-500">(65)</span></div>
                                                    <div class="price-info mb-10"><strong
                                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                            class="color-gray-500 price-line">$3225.6</span></div>
                                                    <div class="mt-10 box-btn-cart"><a class="btn btn-cart"
                                                                                       href="shop-cart.html">Add To
                                                            Cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-grid-style-3 home6-style">
                                            <div class="card-grid-inner">
                                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                                      aria-label="Trend" data-bs-placement="left"></a><a
                                                        class="btn btn-wishlist btn-tooltip mb-10"
                                                        href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a
                                                        class="btn btn-compare btn-tooltip mb-10"
                                                        href="shop-compare.html" aria-label="Compare"></a><a
                                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                                <div class="image-box"><span class="label bg-danger">Hot</span><a
                                                        href="shop-single-product-2.html"><img
                                                            src="frontend/imgs/page/homepage6/sp2.png" alt="Ecom"></a>
                                                </div>
                                                <div class="info-right"><a class="font-xs color-gray-500"
                                                                           href="shop-vendor-single.html">Apple</a><br><a
                                                        class="color-brand-3 font-sm-bold"
                                                        href="shop-single-product-2.html">ASUS VivoBook 15.6&quot; 1080p
                                                        PC Laptops, Intel Core i3</a>
                                                    <div class="rating"><img src="frontend/imgs/template/icons/star.svg"
                                                                             alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><span
                                                            class="font-xs color-gray-500">(65)</span></div>
                                                    <div class="price-info mb-10"><strong
                                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                            class="color-gray-500 price-line">$3225.6</span></div>
                                                    <div class="mt-10 box-btn-cart"><a class="btn btn-cart"
                                                                                       href="shop-cart.html">Add To
                                                            Cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-grid-style-3 home6-style">
                                            <div class="card-grid-inner">
                                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                                      aria-label="Trend" data-bs-placement="left"></a><a
                                                        class="btn btn-wishlist btn-tooltip mb-10"
                                                        href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a
                                                        class="btn btn-compare btn-tooltip mb-10"
                                                        href="shop-compare.html" aria-label="Compare"></a><a
                                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                                <div class="image-box"><span class="label bg-success">New</span><a
                                                        href="shop-single-product-2.html"><img
                                                            src="frontend/imgs/page/homepage6/sp3.png" alt="Ecom"></a>
                                                </div>
                                                <div class="info-right"><a class="font-xs color-gray-500"
                                                                           href="shop-vendor-single.html">Apple</a><br><a
                                                        class="color-brand-3 font-sm-bold"
                                                        href="shop-single-product-2.html">2020 Apple 10.9-inch iPad Air
                                                        Wi-Fi 64GB - Silver</a>
                                                    <div class="rating"><img src="frontend/imgs/template/icons/star.svg"
                                                                             alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><span
                                                            class="font-xs color-gray-500">(65)</span></div>
                                                    <div class="price-info mb-10"><strong
                                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                            class="color-gray-500 price-line">$3225.6</span></div>
                                                    <div class="mt-10 box-btn-cart"><a class="btn btn-cart"
                                                                                       href="shop-cart.html">Add To
                                                            Cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-grid-style-3 home6-style">
                                            <div class="card-grid-inner">
                                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                                      aria-label="Trend" data-bs-placement="left"></a><a
                                                        class="btn btn-wishlist btn-tooltip mb-10"
                                                        href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a
                                                        class="btn btn-compare btn-tooltip mb-10"
                                                        href="shop-compare.html" aria-label="Compare"></a><a
                                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                                <div class="image-box"><a href="shop-single-product-2.html"><img
                                                            src="frontend/imgs/page/homepage6/sp4.png" alt="Ecom"></a>
                                                </div>
                                                <div class="info-right"><a class="font-xs color-gray-500"
                                                                           href="shop-vendor-single.html">Apple</a><br><a
                                                        class="color-brand-3 font-sm-bold"
                                                        href="shop-single-product-2.html">MSI Optix G272 27&quot; Full
                                                        HD LED Gaming LCD Monitor</a>
                                                    <div class="rating"><img src="frontend/imgs/template/icons/star.svg"
                                                                             alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><span
                                                            class="font-xs color-gray-500">(65)</span></div>
                                                    <div class="price-info mb-10"><strong
                                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                            class="color-gray-500 price-line">$3225.6</span></div>
                                                    <div class="mt-10 box-btn-cart"><a class="btn btn-cart"
                                                                                       href="shop-cart.html">Add To
                                                            Cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-grid-style-3 home6-style">
                                            <div class="card-grid-inner">
                                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                                      aria-label="Trend" data-bs-placement="left"></a><a
                                                        class="btn btn-wishlist btn-tooltip mb-10"
                                                        href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a
                                                        class="btn btn-compare btn-tooltip mb-10"
                                                        href="shop-compare.html" aria-label="Compare"></a><a
                                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                                <div class="image-box"><a href="shop-single-product-2.html"><img
                                                            src="frontend/imgs/page/homepage6/sp5.png" alt="Ecom"></a>
                                                </div>
                                                <div class="info-right"><a class="font-xs color-gray-500"
                                                                           href="shop-vendor-single.html">Apple</a><br><a
                                                        class="color-brand-3 font-sm-bold"
                                                        href="shop-single-product-2.html">MSI Optix G272 27&quot; Full
                                                        HD LED Gaming LCD Monitor</a>
                                                    <div class="rating"><img src="frontend/imgs/template/icons/star.svg"
                                                                             alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><span
                                                            class="font-xs color-gray-500">(65)</span></div>
                                                    <div class="price-info mb-10"><strong
                                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                            class="color-gray-500 price-line">$3225.6</span></div>
                                                    <div class="mt-10 box-btn-cart"><a class="btn btn-cart"
                                                                                       href="shop-cart.html">Add To
                                                            Cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-grid-style-3 home6-style">
                                            <div class="card-grid-inner">
                                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                                      aria-label="Trend" data-bs-placement="left"></a><a
                                                        class="btn btn-wishlist btn-tooltip mb-10"
                                                        href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a
                                                        class="btn btn-compare btn-tooltip mb-10"
                                                        href="shop-compare.html" aria-label="Compare"></a><a
                                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                                        href="shop-single-product-2.html"><img
                                                            src="frontend/imgs/page/homepage6/sp6.png" alt="Ecom"></a>
                                                </div>
                                                <div class="info-right"><a class="font-xs color-gray-500"
                                                                           href="shop-vendor-single.html">Apple</a><br><a
                                                        class="color-brand-3 font-sm-bold"
                                                        href="shop-single-product-2.html">HP 11.6&quot; Chromebook, AMD
                                                        A4, 4GB RAM, 32GB Storage</a>
                                                    <div class="rating"><img src="frontend/imgs/template/icons/star.svg"
                                                                             alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><span
                                                            class="font-xs color-gray-500">(65)</span></div>
                                                    <div class="price-info mb-10"><strong
                                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                            class="color-gray-500 price-line">$3225.6</span></div>
                                                    <div class="mt-10 box-btn-cart"><a class="btn btn-cart"
                                                                                       href="shop-cart.html">Add To
                                                            Cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-grid-style-3 home6-style">
                                            <div class="card-grid-inner">
                                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                                      aria-label="Trend" data-bs-placement="left"></a><a
                                                        class="btn btn-wishlist btn-tooltip mb-10"
                                                        href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a
                                                        class="btn btn-compare btn-tooltip mb-10"
                                                        href="shop-compare.html" aria-label="Compare"></a><a
                                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                                <div class="image-box"><span class="label bg-danger">Hot</span><a
                                                        href="shop-single-product-2.html"><img
                                                            src="frontend/imgs/page/homepage6/sp7.png" alt="Ecom"></a>
                                                </div>
                                                <div class="info-right"><a class="font-xs color-gray-500"
                                                                           href="shop-vendor-single.html">Apple</a><br><a
                                                        class="color-brand-3 font-sm-bold"
                                                        href="shop-single-product-2.html">ASUS VivoBook 15.6&quot; 1080p
                                                        PC Laptops, Intel Core i3</a>
                                                    <div class="rating"><img src="frontend/imgs/template/icons/star.svg"
                                                                             alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><span
                                                            class="font-xs color-gray-500">(65)</span></div>
                                                    <div class="price-info mb-10"><strong
                                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                            class="color-gray-500 price-line">$3225.6</span></div>
                                                    <div class="mt-10 box-btn-cart"><a class="btn btn-cart"
                                                                                       href="shop-cart.html">Add To
                                                            Cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-grid-style-3 home6-style">
                                            <div class="card-grid-inner">
                                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                                      aria-label="Trend" data-bs-placement="left"></a><a
                                                        class="btn btn-wishlist btn-tooltip mb-10"
                                                        href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a
                                                        class="btn btn-compare btn-tooltip mb-10"
                                                        href="shop-compare.html" aria-label="Compare"></a><a
                                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                                <div class="image-box"><span class="label bg-success">New</span><a
                                                        href="shop-single-product-2.html"><img
                                                            src="frontend/imgs/page/homepage6/sp8.png" alt="Ecom"></a>
                                                </div>
                                                <div class="info-right"><a class="font-xs color-gray-500"
                                                                           href="shop-vendor-single.html">Apple</a><br><a
                                                        class="color-brand-3 font-sm-bold"
                                                        href="shop-single-product-2.html">2020 Apple 10.9-inch iPad Air
                                                        Wi-Fi 64GB - Silver</a>
                                                    <div class="rating"><img src="frontend/imgs/template/icons/star.svg"
                                                                             alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><span
                                                            class="font-xs color-gray-500">(65)</span></div>
                                                    <div class="price-info mb-10"><strong
                                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                            class="color-gray-500 price-line">$3225.6</span></div>
                                                    <div class="mt-10 box-btn-cart"><a class="btn btn-cart"
                                                                                       href="shop-cart.html">Add To
                                                            Cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-grid-style-3 home6-style">
                                            <div class="card-grid-inner">
                                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                                      aria-label="Trend" data-bs-placement="left"></a><a
                                                        class="btn btn-wishlist btn-tooltip mb-10"
                                                        href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a
                                                        class="btn btn-compare btn-tooltip mb-10"
                                                        href="shop-compare.html" aria-label="Compare"></a><a
                                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                                <div class="image-box"><a href="shop-single-product-2.html"><img
                                                            src="frontend/imgs/page/homepage6/sp9.png" alt="Ecom"></a>
                                                </div>
                                                <div class="info-right"><a class="font-xs color-gray-500"
                                                                           href="shop-vendor-single.html">Apple</a><br><a
                                                        class="color-brand-3 font-sm-bold"
                                                        href="shop-single-product-2.html">MSI Optix G272 27&quot; Full
                                                        HD LED Gaming LCD Monitor</a>
                                                    <div class="rating"><img src="frontend/imgs/template/icons/star.svg"
                                                                             alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><span
                                                            class="font-xs color-gray-500">(65)</span></div>
                                                    <div class="price-info mb-10"><strong
                                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                            class="color-gray-500 price-line">$3225.6</span></div>
                                                    <div class="mt-10 box-btn-cart"><a class="btn btn-cart"
                                                                                       href="shop-cart.html">Add To
                                                            Cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-grid-style-3 home6-style">
                                            <div class="card-grid-inner">
                                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                                      aria-label="Trend" data-bs-placement="left"></a><a
                                                        class="btn btn-wishlist btn-tooltip mb-10"
                                                        href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a
                                                        class="btn btn-compare btn-tooltip mb-10"
                                                        href="shop-compare.html" aria-label="Compare"></a><a
                                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                                <div class="image-box"><a href="shop-single-product-2.html"><img
                                                            src="frontend/imgs/page/homepage6/sp10.png" alt="Ecom"></a>
                                                </div>
                                                <div class="info-right"><a class="font-xs color-gray-500"
                                                                           href="shop-vendor-single.html">Apple</a><br><a
                                                        class="color-brand-3 font-sm-bold"
                                                        href="shop-single-product-2.html">MSI Optix G272 27&quot; Full
                                                        HD LED Gaming LCD Monitor</a>
                                                    <div class="rating"><img src="frontend/imgs/template/icons/star.svg"
                                                                             alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><span
                                                            class="font-xs color-gray-500">(65)</span></div>
                                                    <div class="price-info mb-10"><strong
                                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                            class="color-gray-500 price-line">$3225.6</span></div>
                                                    <div class="mt-10 box-btn-cart"><a class="btn btn-cart"
                                                                                       href="shop-cart.html">Add To
                                                            Cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-box mt-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-30">
                    <div class="card-banner hover-up">
                        <div class="card-image"><a href="#"> <img src="frontend/imgs/page/homepage6/banner-bottom-1.png"
                                                                  alt="Ecom"></a></div>
                        <div class="card-info mt-10 text-center"><a href="#">
                                <h4 class="color-gray-900">Kitchen sets from $9.99</h4></a>
                            <p class="font-md color-gray-900">Upto 30% offer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-30">
                    <div class="card-banner hover-up">
                        <div class="card-image"><a href="#"><img src="frontend/imgs/page/homepage6/banner-bottom-2.png"
                                                                 alt="Ecom"></a></div>
                        <div class="card-info mt-10 text-center"><a href="#">
                                <h4 class="color-gray-900">Livingroom sets from $9.99</h4></a>
                            <p class="font-md color-gray-900">Upto 30% offer</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-bottom"></div>
        </div>
    </section>
    <section class="section-box mt-50">
        <div class="container">
            <div class="head-main bd-gray-200">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <h3 class="mb-5">برگزیده هفتگی</h3>
                    </div>
                    <div class="col-xl-6 col-lg-6 position-relative">
                        <ul class="nav nav-tabs text-uppercase pl-100" role="tablist">
                            <li><a class="active" href="#tab-4-all" data-bs-toggle="tab" role="tab"
                                   aria-controls="tab-4-all" aria-selected="true" data-index="5">All</a></li>
                            <li><a href="#tab-4-bestseller" data-bs-toggle="tab" role="tab"
                                   aria-controls="tab-4-bestseller" aria-selected="false" data-index="6">Best seller</a>
                            </li>
                            <li><a href="#tab-4-mostviewed" data-bs-toggle="tab" role="tab"
                                   aria-controls="tab-4-mostviewed" aria-selected="false" data-index="7">Most viewed</a>
                            </li>
                            <li><a href="#tab-4-topbrands" data-bs-toggle="tab" role="tab"
                                   aria-controls="tab-4-topbrands" aria-selected="false" data-index="8">Top Brands</a>
                            </li>
                        </ul>
                        <!-- Button slider-->
                        <div class="box-button-slider">
                            <div class="button-slider-nav" id="tab-4-all-nav">
                                <div class="swiper-button-next swiper-button-next-tab-5"></div>
                                <div class="swiper-button-prev swiper-button-prev-tab-5"></div>
                            </div>
                            <div class="button-slider-nav" id="tab-4-bestseller-nav" style="display: none;">
                                <div class="swiper-button-next swiper-button-next-tab-6"></div>
                                <div class="swiper-button-prev swiper-button-prev-tab-6"></div>
                            </div>
                            <div class="button-slider-nav" id="tab-4-mostviewed-nav" style="display: none;">
                                <div class="swiper-button-next swiper-button-next-tab-7"></div>
                                <div class="swiper-button-prev swiper-button-prev-tab-7"></div>
                            </div>
                            <div class="button-slider-nav" id="tab-4-topbrands-nav" style="display: none;">
                                <div class="swiper-button-next swiper-button-next-tab-8"></div>
                                <div class="swiper-button-prev swiper-button-prev-tab-8"></div>
                            </div>
                        </div>
                        <!-- End Button slider-->
                    </div>
                </div>
            </div>
            <div class="tab-content tab-content-slider">
                <div class="tab-pane fade active show" id="tab-4-all" role="tabpanel" aria-labelledby="tab-4-all">
                    <div class="box-swiper">
                        <div class="swiper-container swiper-tab-5">
                            <div class="swiper-wrapper pt-5">
                                <div class="swiper-slide">
                                    <div class="list-products-5">
                                        <div class="card-grid-style-3 home6-style">
                                            <div class="card-grid-inner">
                                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                                      aria-label="Trend" data-bs-placement="left"></a><a
                                                        class="btn btn-wishlist btn-tooltip mb-10"
                                                        href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a
                                                        class="btn btn-compare btn-tooltip mb-10"
                                                        href="shop-compare.html" aria-label="Compare"></a><a
                                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                                        href="shop-single-product-2.html"><img
                                                            src="frontend/imgs/page/homepage6/sp1.png" alt="Ecom"></a>
                                                </div>
                                                <div class="info-right"><a class="font-xs color-gray-500"
                                                                           href="shop-vendor-single.html">Apple</a><br><a
                                                        class="color-brand-3 font-sm-bold"
                                                        href="shop-single-product-2.html">HP 11.6&quot; Chromebook, AMD
                                                        A4, 4GB RAM, 32GB Storage</a>
                                                    <div class="rating"><img src="frontend/imgs/template/icons/star.svg"
                                                                             alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><span
                                                            class="font-xs color-gray-500">(65)</span></div>
                                                    <div class="price-info mb-10"><strong
                                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                            class="color-gray-500 price-line">$3225.6</span></div>
                                                    <div class="mt-10 box-btn-cart"><a class="btn btn-cart"
                                                                                       href="shop-cart.html">Add To
                                                            Cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-grid-style-3 home6-style">
                                            <div class="card-grid-inner">
                                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                                      aria-label="Trend" data-bs-placement="left"></a><a
                                                        class="btn btn-wishlist btn-tooltip mb-10"
                                                        href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a
                                                        class="btn btn-compare btn-tooltip mb-10"
                                                        href="shop-compare.html" aria-label="Compare"></a><a
                                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                                <div class="image-box"><span class="label bg-danger">Hot</span><a
                                                        href="shop-single-product-2.html"><img
                                                            src="frontend/imgs/page/homepage6/sp2.png" alt="Ecom"></a>
                                                </div>
                                                <div class="info-right"><a class="font-xs color-gray-500"
                                                                           href="shop-vendor-single.html">Apple</a><br><a
                                                        class="color-brand-3 font-sm-bold"
                                                        href="shop-single-product-2.html">ASUS VivoBook 15.6&quot; 1080p
                                                        PC Laptops, Intel Core i3</a>
                                                    <div class="rating"><img src="frontend/imgs/template/icons/star.svg"
                                                                             alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><span
                                                            class="font-xs color-gray-500">(65)</span></div>
                                                    <div class="price-info mb-10"><strong
                                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                            class="color-gray-500 price-line">$3225.6</span></div>
                                                    <div class="mt-10 box-btn-cart"><a class="btn btn-cart"
                                                                                       href="shop-cart.html">Add To
                                                            Cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-grid-style-3 home6-style">
                                            <div class="card-grid-inner">
                                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                                      aria-label="Trend" data-bs-placement="left"></a><a
                                                        class="btn btn-wishlist btn-tooltip mb-10"
                                                        href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a
                                                        class="btn btn-compare btn-tooltip mb-10"
                                                        href="shop-compare.html" aria-label="Compare"></a><a
                                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                                <div class="image-box"><span class="label bg-success">New</span><a
                                                        href="shop-single-product-2.html"><img
                                                            src="frontend/imgs/page/homepage6/sp3.png" alt="Ecom"></a>
                                                </div>
                                                <div class="info-right"><a class="font-xs color-gray-500"
                                                                           href="shop-vendor-single.html">Apple</a><br><a
                                                        class="color-brand-3 font-sm-bold"
                                                        href="shop-single-product-2.html">2020 Apple 10.9-inch iPad Air
                                                        Wi-Fi 64GB - Silver</a>
                                                    <div class="rating"><img src="frontend/imgs/template/icons/star.svg"
                                                                             alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><span
                                                            class="font-xs color-gray-500">(65)</span></div>
                                                    <div class="price-info mb-10"><strong
                                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                            class="color-gray-500 price-line">$3225.6</span></div>
                                                    <div class="mt-10 box-btn-cart"><a class="btn btn-cart"
                                                                                       href="shop-cart.html">Add To
                                                            Cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-grid-style-3 home6-style">
                                            <div class="card-grid-inner">
                                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                                      aria-label="Trend" data-bs-placement="left"></a><a
                                                        class="btn btn-wishlist btn-tooltip mb-10"
                                                        href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a
                                                        class="btn btn-compare btn-tooltip mb-10"
                                                        href="shop-compare.html" aria-label="Compare"></a><a
                                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                                <div class="image-box"><a href="shop-single-product-2.html"><img
                                                            src="frontend/imgs/page/homepage6/sp4.png" alt="Ecom"></a>
                                                </div>
                                                <div class="info-right"><a class="font-xs color-gray-500"
                                                                           href="shop-vendor-single.html">Apple</a><br><a
                                                        class="color-brand-3 font-sm-bold"
                                                        href="shop-single-product-2.html">MSI Optix G272 27&quot; Full
                                                        HD LED Gaming LCD Monitor</a>
                                                    <div class="rating"><img src="frontend/imgs/template/icons/star.svg"
                                                                             alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><span
                                                            class="font-xs color-gray-500">(65)</span></div>
                                                    <div class="price-info mb-10"><strong
                                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                            class="color-gray-500 price-line">$3225.6</span></div>
                                                    <div class="mt-10 box-btn-cart"><a class="btn btn-cart"
                                                                                       href="shop-cart.html">Add To
                                                            Cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-grid-style-3 home6-style">
                                            <div class="card-grid-inner">
                                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                                      aria-label="Trend" data-bs-placement="left"></a><a
                                                        class="btn btn-wishlist btn-tooltip mb-10"
                                                        href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a
                                                        class="btn btn-compare btn-tooltip mb-10"
                                                        href="shop-compare.html" aria-label="Compare"></a><a
                                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                                <div class="image-box"><a href="shop-single-product-2.html"><img
                                                            src="frontend/imgs/page/homepage6/sp5.png" alt="Ecom"></a>
                                                </div>
                                                <div class="info-right"><a class="font-xs color-gray-500"
                                                                           href="shop-vendor-single.html">Apple</a><br><a
                                                        class="color-brand-3 font-sm-bold"
                                                        href="shop-single-product-2.html">MSI Optix G272 27&quot; Full
                                                        HD LED Gaming LCD Monitor</a>
                                                    <div class="rating"><img src="frontend/imgs/template/icons/star.svg"
                                                                             alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><span
                                                            class="font-xs color-gray-500">(65)</span></div>
                                                    <div class="price-info mb-10"><strong
                                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                            class="color-gray-500 price-line">$3225.6</span></div>
                                                    <div class="mt-10 box-btn-cart"><a class="btn btn-cart"
                                                                                       href="shop-cart.html">Add To
                                                            Cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-4-bestseller" role="tabpanel" aria-labelledby="tab-4-bestseller">
                    <div class="box-swiper">
                        <div class="swiper-container swiper-tab-6">
                            <div class="swiper-wrapper pt-5">
                                <div class="swiper-slide">
                                    <div class="list-products-5">
                                        <div class="card-grid-style-3 home6-style">
                                            <div class="card-grid-inner">
                                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                                      aria-label="Trend" data-bs-placement="left"></a><a
                                                        class="btn btn-wishlist btn-tooltip mb-10"
                                                        href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a
                                                        class="btn btn-compare btn-tooltip mb-10"
                                                        href="shop-compare.html" aria-label="Compare"></a><a
                                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                                        href="shop-single-product-2.html"><img
                                                            src="frontend/imgs/page/homepage6/sp1.png" alt="Ecom"></a>
                                                </div>
                                                <div class="info-right"><a class="font-xs color-gray-500"
                                                                           href="shop-vendor-single.html">Apple</a><br><a
                                                        class="color-brand-3 font-sm-bold"
                                                        href="shop-single-product-2.html">HP 11.6&quot; Chromebook, AMD
                                                        A4, 4GB RAM, 32GB Storage</a>
                                                    <div class="rating"><img src="frontend/imgs/template/icons/star.svg"
                                                                             alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><span
                                                            class="font-xs color-gray-500">(65)</span></div>
                                                    <div class="price-info mb-10"><strong
                                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                            class="color-gray-500 price-line">$3225.6</span></div>
                                                    <div class="mt-10 box-btn-cart"><a class="btn btn-cart"
                                                                                       href="shop-cart.html">Add To
                                                            Cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-grid-style-3 home6-style">
                                            <div class="card-grid-inner">
                                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                                      aria-label="Trend" data-bs-placement="left"></a><a
                                                        class="btn btn-wishlist btn-tooltip mb-10"
                                                        href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a
                                                        class="btn btn-compare btn-tooltip mb-10"
                                                        href="shop-compare.html" aria-label="Compare"></a><a
                                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                                <div class="image-box"><span class="label bg-danger">Hot</span><a
                                                        href="shop-single-product-2.html"><img
                                                            src="frontend/imgs/page/homepage6/sp2.png" alt="Ecom"></a>
                                                </div>
                                                <div class="info-right"><a class="font-xs color-gray-500"
                                                                           href="shop-vendor-single.html">Apple</a><br><a
                                                        class="color-brand-3 font-sm-bold"
                                                        href="shop-single-product-2.html">ASUS VivoBook 15.6&quot; 1080p
                                                        PC Laptops, Intel Core i3</a>
                                                    <div class="rating"><img src="frontend/imgs/template/icons/star.svg"
                                                                             alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><span
                                                            class="font-xs color-gray-500">(65)</span></div>
                                                    <div class="price-info mb-10"><strong
                                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                            class="color-gray-500 price-line">$3225.6</span></div>
                                                    <div class="mt-10 box-btn-cart"><a class="btn btn-cart"
                                                                                       href="shop-cart.html">Add To
                                                            Cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-grid-style-3 home6-style">
                                            <div class="card-grid-inner">
                                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                                      aria-label="Trend" data-bs-placement="left"></a><a
                                                        class="btn btn-wishlist btn-tooltip mb-10"
                                                        href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a
                                                        class="btn btn-compare btn-tooltip mb-10"
                                                        href="shop-compare.html" aria-label="Compare"></a><a
                                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                                <div class="image-box"><span class="label bg-success">New</span><a
                                                        href="shop-single-product-2.html"><img
                                                            src="frontend/imgs/page/homepage6/sp3.png" alt="Ecom"></a>
                                                </div>
                                                <div class="info-right"><a class="font-xs color-gray-500"
                                                                           href="shop-vendor-single.html">Apple</a><br><a
                                                        class="color-brand-3 font-sm-bold"
                                                        href="shop-single-product-2.html">2020 Apple 10.9-inch iPad Air
                                                        Wi-Fi 64GB - Silver</a>
                                                    <div class="rating"><img src="frontend/imgs/template/icons/star.svg"
                                                                             alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><span
                                                            class="font-xs color-gray-500">(65)</span></div>
                                                    <div class="price-info mb-10"><strong
                                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                            class="color-gray-500 price-line">$3225.6</span></div>
                                                    <div class="mt-10 box-btn-cart"><a class="btn btn-cart"
                                                                                       href="shop-cart.html">Add To
                                                            Cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-grid-style-3 home6-style">
                                            <div class="card-grid-inner">
                                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                                      aria-label="Trend" data-bs-placement="left"></a><a
                                                        class="btn btn-wishlist btn-tooltip mb-10"
                                                        href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a
                                                        class="btn btn-compare btn-tooltip mb-10"
                                                        href="shop-compare.html" aria-label="Compare"></a><a
                                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                                <div class="image-box"><a href="shop-single-product-2.html"><img
                                                            src="frontend/imgs/page/homepage6/sp4.png" alt="Ecom"></a>
                                                </div>
                                                <div class="info-right"><a class="font-xs color-gray-500"
                                                                           href="shop-vendor-single.html">Apple</a><br><a
                                                        class="color-brand-3 font-sm-bold"
                                                        href="shop-single-product-2.html">MSI Optix G272 27&quot; Full
                                                        HD LED Gaming LCD Monitor</a>
                                                    <div class="rating"><img src="frontend/imgs/template/icons/star.svg"
                                                                             alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><span
                                                            class="font-xs color-gray-500">(65)</span></div>
                                                    <div class="price-info mb-10"><strong
                                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                            class="color-gray-500 price-line">$3225.6</span></div>
                                                    <div class="mt-10 box-btn-cart"><a class="btn btn-cart"
                                                                                       href="shop-cart.html">Add To
                                                            Cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-grid-style-3 home6-style">
                                            <div class="card-grid-inner">
                                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                                      aria-label="Trend" data-bs-placement="left"></a><a
                                                        class="btn btn-wishlist btn-tooltip mb-10"
                                                        href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a
                                                        class="btn btn-compare btn-tooltip mb-10"
                                                        href="shop-compare.html" aria-label="Compare"></a><a
                                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                                <div class="image-box"><a href="shop-single-product-2.html"><img
                                                            src="frontend/imgs/page/homepage6/sp5.png" alt="Ecom"></a>
                                                </div>
                                                <div class="info-right"><a class="font-xs color-gray-500"
                                                                           href="shop-vendor-single.html">Apple</a><br><a
                                                        class="color-brand-3 font-sm-bold"
                                                        href="shop-single-product-2.html">MSI Optix G272 27&quot; Full
                                                        HD LED Gaming LCD Monitor</a>
                                                    <div class="rating"><img src="frontend/imgs/template/icons/star.svg"
                                                                             alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><span
                                                            class="font-xs color-gray-500">(65)</span></div>
                                                    <div class="price-info mb-10"><strong
                                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                            class="color-gray-500 price-line">$3225.6</span></div>
                                                    <div class="mt-10 box-btn-cart"><a class="btn btn-cart"
                                                                                       href="shop-cart.html">Add To
                                                            Cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-4-mostviewed" role="tabpanel" aria-labelledby="tab-4-mostviewed">
                    <div class="box-swiper">
                        <div class="swiper-container swiper-tab-7">
                            <div class="swiper-wrapper pt-5">
                                <div class="swiper-slide">
                                    <div class="list-products-5">
                                        <div class="card-grid-style-3 home6-style">
                                            <div class="card-grid-inner">
                                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                                      aria-label="Trend" data-bs-placement="left"></a><a
                                                        class="btn btn-wishlist btn-tooltip mb-10"
                                                        href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a
                                                        class="btn btn-compare btn-tooltip mb-10"
                                                        href="shop-compare.html" aria-label="Compare"></a><a
                                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                                        href="shop-single-product-2.html"><img
                                                            src="frontend/imgs/page/homepage6/sp1.png" alt="Ecom"></a>
                                                </div>
                                                <div class="info-right"><a class="font-xs color-gray-500"
                                                                           href="shop-vendor-single.html">Apple</a><br><a
                                                        class="color-brand-3 font-sm-bold"
                                                        href="shop-single-product-2.html">HP 11.6&quot; Chromebook, AMD
                                                        A4, 4GB RAM, 32GB Storage</a>
                                                    <div class="rating"><img src="frontend/imgs/template/icons/star.svg"
                                                                             alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><span
                                                            class="font-xs color-gray-500">(65)</span></div>
                                                    <div class="price-info mb-10"><strong
                                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                            class="color-gray-500 price-line">$3225.6</span></div>
                                                    <div class="mt-10 box-btn-cart"><a class="btn btn-cart"
                                                                                       href="shop-cart.html">Add To
                                                            Cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-grid-style-3 home6-style">
                                            <div class="card-grid-inner">
                                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                                      aria-label="Trend" data-bs-placement="left"></a><a
                                                        class="btn btn-wishlist btn-tooltip mb-10"
                                                        href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a
                                                        class="btn btn-compare btn-tooltip mb-10"
                                                        href="shop-compare.html" aria-label="Compare"></a><a
                                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                                <div class="image-box"><span class="label bg-danger">Hot</span><a
                                                        href="shop-single-product-2.html"><img
                                                            src="frontend/imgs/page/homepage6/sp2.png" alt="Ecom"></a>
                                                </div>
                                                <div class="info-right"><a class="font-xs color-gray-500"
                                                                           href="shop-vendor-single.html">Apple</a><br><a
                                                        class="color-brand-3 font-sm-bold"
                                                        href="shop-single-product-2.html">ASUS VivoBook 15.6&quot; 1080p
                                                        PC Laptops, Intel Core i3</a>
                                                    <div class="rating"><img src="frontend/imgs/template/icons/star.svg"
                                                                             alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><span
                                                            class="font-xs color-gray-500">(65)</span></div>
                                                    <div class="price-info mb-10"><strong
                                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                            class="color-gray-500 price-line">$3225.6</span></div>
                                                    <div class="mt-10 box-btn-cart"><a class="btn btn-cart"
                                                                                       href="shop-cart.html">Add To
                                                            Cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-grid-style-3 home6-style">
                                            <div class="card-grid-inner">
                                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                                      aria-label="Trend" data-bs-placement="left"></a><a
                                                        class="btn btn-wishlist btn-tooltip mb-10"
                                                        href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a
                                                        class="btn btn-compare btn-tooltip mb-10"
                                                        href="shop-compare.html" aria-label="Compare"></a><a
                                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                                <div class="image-box"><span class="label bg-success">New</span><a
                                                        href="shop-single-product-2.html"><img
                                                            src="frontend/imgs/page/homepage6/sp3.png" alt="Ecom"></a>
                                                </div>
                                                <div class="info-right"><a class="font-xs color-gray-500"
                                                                           href="shop-vendor-single.html">Apple</a><br><a
                                                        class="color-brand-3 font-sm-bold"
                                                        href="shop-single-product-2.html">2020 Apple 10.9-inch iPad Air
                                                        Wi-Fi 64GB - Silver</a>
                                                    <div class="rating"><img src="frontend/imgs/template/icons/star.svg"
                                                                             alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><span
                                                            class="font-xs color-gray-500">(65)</span></div>
                                                    <div class="price-info mb-10"><strong
                                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                            class="color-gray-500 price-line">$3225.6</span></div>
                                                    <div class="mt-10 box-btn-cart"><a class="btn btn-cart"
                                                                                       href="shop-cart.html">Add To
                                                            Cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-grid-style-3 home6-style">
                                            <div class="card-grid-inner">
                                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                                      aria-label="Trend" data-bs-placement="left"></a><a
                                                        class="btn btn-wishlist btn-tooltip mb-10"
                                                        href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a
                                                        class="btn btn-compare btn-tooltip mb-10"
                                                        href="shop-compare.html" aria-label="Compare"></a><a
                                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                                <div class="image-box"><a href="shop-single-product-2.html"><img
                                                            src="frontend/imgs/page/homepage6/sp4.png" alt="Ecom"></a>
                                                </div>
                                                <div class="info-right"><a class="font-xs color-gray-500"
                                                                           href="shop-vendor-single.html">Apple</a><br><a
                                                        class="color-brand-3 font-sm-bold"
                                                        href="shop-single-product-2.html">MSI Optix G272 27&quot; Full
                                                        HD LED Gaming LCD Monitor</a>
                                                    <div class="rating"><img src="frontend/imgs/template/icons/star.svg"
                                                                             alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><span
                                                            class="font-xs color-gray-500">(65)</span></div>
                                                    <div class="price-info mb-10"><strong
                                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                            class="color-gray-500 price-line">$3225.6</span></div>
                                                    <div class="mt-10 box-btn-cart"><a class="btn btn-cart"
                                                                                       href="shop-cart.html">Add To
                                                            Cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-grid-style-3 home6-style">
                                            <div class="card-grid-inner">
                                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                                      aria-label="Trend" data-bs-placement="left"></a><a
                                                        class="btn btn-wishlist btn-tooltip mb-10"
                                                        href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a
                                                        class="btn btn-compare btn-tooltip mb-10"
                                                        href="shop-compare.html" aria-label="Compare"></a><a
                                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                                <div class="image-box"><a href="shop-single-product-2.html"><img
                                                            src="frontend/imgs/page/homepage6/sp5.png" alt="Ecom"></a>
                                                </div>
                                                <div class="info-right"><a class="font-xs color-gray-500"
                                                                           href="shop-vendor-single.html">Apple</a><br><a
                                                        class="color-brand-3 font-sm-bold"
                                                        href="shop-single-product-2.html">MSI Optix G272 27&quot; Full
                                                        HD LED Gaming LCD Monitor</a>
                                                    <div class="rating"><img src="frontend/imgs/template/icons/star.svg"
                                                                             alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><span
                                                            class="font-xs color-gray-500">(65)</span></div>
                                                    <div class="price-info mb-10"><strong
                                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                            class="color-gray-500 price-line">$3225.6</span></div>
                                                    <div class="mt-10 box-btn-cart"><a class="btn btn-cart"
                                                                                       href="shop-cart.html">Add To
                                                            Cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-4-topbrands" role="tabpanel" aria-labelledby="tab-4-topbrands">
                    <div class="box-swiper">
                        <div class="swiper-container swiper-tab-8">
                            <div class="swiper-wrapper pt-5">
                                <div class="swiper-slide">
                                    <div class="list-products-5">
                                        <div class="card-grid-style-3 home6-style">
                                            <div class="card-grid-inner">
                                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                                      aria-label="Trend" data-bs-placement="left"></a><a
                                                        class="btn btn-wishlist btn-tooltip mb-10"
                                                        href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a
                                                        class="btn btn-compare btn-tooltip mb-10"
                                                        href="shop-compare.html" aria-label="Compare"></a><a
                                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                                        href="shop-single-product-2.html"><img
                                                            src="frontend/imgs/page/homepage6/sp1.png" alt="Ecom"></a>
                                                </div>
                                                <div class="info-right"><a class="font-xs color-gray-500"
                                                                           href="shop-vendor-single.html">Apple</a><br><a
                                                        class="color-brand-3 font-sm-bold"
                                                        href="shop-single-product-2.html">HP 11.6&quot; Chromebook, AMD
                                                        A4, 4GB RAM, 32GB Storage</a>
                                                    <div class="rating"><img src="frontend/imgs/template/icons/star.svg"
                                                                             alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><span
                                                            class="font-xs color-gray-500">(65)</span></div>
                                                    <div class="price-info mb-10"><strong
                                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                            class="color-gray-500 price-line">$3225.6</span></div>
                                                    <div class="mt-10 box-btn-cart"><a class="btn btn-cart"
                                                                                       href="shop-cart.html">Add To
                                                            Cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-grid-style-3 home6-style">
                                            <div class="card-grid-inner">
                                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                                      aria-label="Trend" data-bs-placement="left"></a><a
                                                        class="btn btn-wishlist btn-tooltip mb-10"
                                                        href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a
                                                        class="btn btn-compare btn-tooltip mb-10"
                                                        href="shop-compare.html" aria-label="Compare"></a><a
                                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                                <div class="image-box"><span class="label bg-danger">Hot</span><a
                                                        href="shop-single-product-2.html"><img
                                                            src="frontend/imgs/page/homepage6/sp2.png" alt="Ecom"></a>
                                                </div>
                                                <div class="info-right"><a class="font-xs color-gray-500"
                                                                           href="shop-vendor-single.html">Apple</a><br><a
                                                        class="color-brand-3 font-sm-bold"
                                                        href="shop-single-product-2.html">ASUS VivoBook 15.6&quot; 1080p
                                                        PC Laptops, Intel Core i3</a>
                                                    <div class="rating"><img src="frontend/imgs/template/icons/star.svg"
                                                                             alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><span
                                                            class="font-xs color-gray-500">(65)</span></div>
                                                    <div class="price-info mb-10"><strong
                                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                            class="color-gray-500 price-line">$3225.6</span></div>
                                                    <div class="mt-10 box-btn-cart"><a class="btn btn-cart"
                                                                                       href="shop-cart.html">Add To
                                                            Cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-grid-style-3 home6-style">
                                            <div class="card-grid-inner">
                                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                                      aria-label="Trend" data-bs-placement="left"></a><a
                                                        class="btn btn-wishlist btn-tooltip mb-10"
                                                        href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a
                                                        class="btn btn-compare btn-tooltip mb-10"
                                                        href="shop-compare.html" aria-label="Compare"></a><a
                                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                                <div class="image-box"><span class="label bg-success">New</span><a
                                                        href="shop-single-product-2.html"><img
                                                            src="frontend/imgs/page/homepage6/sp3.png" alt="Ecom"></a>
                                                </div>
                                                <div class="info-right"><a class="font-xs color-gray-500"
                                                                           href="shop-vendor-single.html">Apple</a><br><a
                                                        class="color-brand-3 font-sm-bold"
                                                        href="shop-single-product-2.html">2020 Apple 10.9-inch iPad Air
                                                        Wi-Fi 64GB - Silver</a>
                                                    <div class="rating"><img src="frontend/imgs/template/icons/star.svg"
                                                                             alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><span
                                                            class="font-xs color-gray-500">(65)</span></div>
                                                    <div class="price-info mb-10"><strong
                                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                            class="color-gray-500 price-line">$3225.6</span></div>
                                                    <div class="mt-10 box-btn-cart"><a class="btn btn-cart"
                                                                                       href="shop-cart.html">Add To
                                                            Cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-grid-style-3 home6-style">
                                            <div class="card-grid-inner">
                                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                                      aria-label="Trend" data-bs-placement="left"></a><a
                                                        class="btn btn-wishlist btn-tooltip mb-10"
                                                        href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a
                                                        class="btn btn-compare btn-tooltip mb-10"
                                                        href="shop-compare.html" aria-label="Compare"></a><a
                                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                                <div class="image-box"><a href="shop-single-product-2.html"><img
                                                            src="frontend/imgs/page/homepage6/sp4.png" alt="Ecom"></a>
                                                </div>
                                                <div class="info-right"><a class="font-xs color-gray-500"
                                                                           href="shop-vendor-single.html">Apple</a><br><a
                                                        class="color-brand-3 font-sm-bold"
                                                        href="shop-single-product-2.html">MSI Optix G272 27&quot; Full
                                                        HD LED Gaming LCD Monitor</a>
                                                    <div class="rating"><img src="frontend/imgs/template/icons/star.svg"
                                                                             alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><span
                                                            class="font-xs color-gray-500">(65)</span></div>
                                                    <div class="price-info mb-10"><strong
                                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                            class="color-gray-500 price-line">$3225.6</span></div>
                                                    <div class="mt-10 box-btn-cart"><a class="btn btn-cart"
                                                                                       href="shop-cart.html">Add To
                                                            Cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-grid-style-3 home6-style">
                                            <div class="card-grid-inner">
                                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                                                      aria-label="Trend" data-bs-placement="left"></a><a
                                                        class="btn btn-wishlist btn-tooltip mb-10"
                                                        href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a
                                                        class="btn btn-compare btn-tooltip mb-10"
                                                        href="shop-compare.html" aria-label="Compare"></a><a
                                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                                <div class="image-box"><a href="shop-single-product-2.html"><img
                                                            src="frontend/imgs/page/homepage6/sp5.png" alt="Ecom"></a>
                                                </div>
                                                <div class="info-right"><a class="font-xs color-gray-500"
                                                                           href="shop-vendor-single.html">Apple</a><br><a
                                                        class="color-brand-3 font-sm-bold"
                                                        href="shop-single-product-2.html">MSI Optix G272 27&quot; Full
                                                        HD LED Gaming LCD Monitor</a>
                                                    <div class="rating"><img src="frontend/imgs/template/icons/star.svg"
                                                                             alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><span
                                                            class="font-xs color-gray-500">(65)</span></div>
                                                    <div class="price-info mb-10"><strong
                                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                            class="color-gray-500 price-line">$3225.6</span></div>
                                                    <div class="mt-10 box-btn-cart"><a class="btn btn-cart"
                                                                                       href="shop-cart.html">Add To
                                                            Cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-box mt-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-sm-6">
                            <div class="banner-bottom-1"><a href="#">
                                    <div class="banner-bottom-info top-style-1">
                                        <h4 class="color-white mb-5">Reading Table</h4>
                                        <p class="font-base-2 color-white">Under $50</p>
                                    </div>
                                </a></div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-sm-6">
                            <div class="banner-bottom-2"><a href="#">
                                    <div class="banner-bottom-info top-style-1">
                                        <h4 class="color-white mb-5">Table Lamp Collection</h4>
                                        <p class="font-base-2 color-white">Aqua Shift Special Edition</p>
                                    </div>
                                </a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="banner-bottom-3"><a href="#">
                            <div class="banner-bottom-info top-style-2">
                                <h4 class="color-white mb-5">Top Rated Chair</h4>
                                <p class="font-base-2 color-white mb-20">Under $120</p><a
                                    class="btn btn-info btn-arrow-right">Shop Now</a>
                            </div>
                        </a></div>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-sm-6">
                            <div class="banner-bottom-4"><a href="#">
                                    <div class="banner-bottom-info top-style-1">
                                        <h4 class="color-white mb-5">Sofa Collection</h4>
                                        <p class="font-base-2 color-white">Aqua Shift Special Edition</p>
                                    </div>
                                </a></div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-sm-6">
                            <div class="banner-bottom-5"><a href="#">
                                    <div class="banner-bottom-info top-style-1">
                                        <h4 class="color-white mb-5">Relaxing Chair</h4>
                                        <p class="font-base-2 color-white">From $100. Free shipping</p>
                                    </div>
                                </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-box mt-50">
        <div class="container">
            <div class="head-main">
                <h3 class="mb-5">آخرین اخبار و رویدادها</h3>
                <div class="box-button-slider">
                    <div class="swiper-button-next swiper-button-next-group-4"></div>
                    <div class="swiper-button-prev swiper-button-prev-group-4"></div>
                </div>
            </div>
        </div>
        <div class="container mt-10">
            <div class="box-swiper">
                <div class="swiper-container swiper-group-4">
                    <div class="swiper-wrapper pt-5">
                        <div class="swiper-slide">
                            <div class="card-grid-style-1">
                                <div class="image-box"><a href="blog-single-2.html"></a><img
                                        src="frontend/imgs/page/homepage6/news1.png" alt="Ecom"></div>
                                <a class="tag-dot font-xs" href="blog-list.html">News</a><a class="color-gray-1100"
                                                                                            href="blog-single-2.html">
                                    <h4>Smart home that makes you feel like living in resort</h4></a>
                                <div class="mt-20"><span
                                        class="color-gray-500 font-xs mr-30">August 30, 2022</span><span
                                        class="color-gray-500 font-xs">4<span> Mins read</span></span></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-grid-style-1">
                                <div class="image-box"><a href="blog-single.html"></a><img
                                        src="frontend/imgs/page/homepage6/news2.png" alt="Ecom"></div>
                                <a class="tag-dot font-xs" href="blog-list.html">News</a><a class="color-gray-1100"
                                                                                            href="blog-single.html">
                                    <h4>New chair styles make your room interesting</h4></a>
                                <div class="mt-20"><span
                                        class="color-gray-500 font-xs mr-30">August 30, 2022</span><span
                                        class="color-gray-500 font-xs">5<span> Mins read</span></span></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-grid-style-1">
                                <div class="image-box"><a href="blog-single-3.html"></a><img
                                        src="frontend/imgs/page/homepage6/news3.png" alt="Ecom"></div>
                                <a class="tag-dot font-xs" href="blog-list.html">News</a><a class="color-gray-1100"
                                                                                            href="blog-single-3.html">
                                    <h4>Kitchen furniture you need to get a cozy house</h4></a>
                                <div class="mt-20"><span
                                        class="color-gray-500 font-xs mr-30">August 30, 2022</span><span
                                        class="color-gray-500 font-xs">3<span> Mins read</span></span></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-grid-style-1">
                                <div class="image-box"><a href="blog-single-2.html"></a><img
                                        src="frontend/imgs/page/homepage6/news4.png" alt="Ecom"></div>
                                <a class="tag-dot font-xs" href="blog-list.html">Tips</a><a class="color-gray-1100"
                                                                                            href="blog-single-2.html">
                                    <h4>How to decore your living room that interesting</h4></a>
                                <div class="mt-20"><span
                                        class="color-gray-500 font-xs mr-30">August 30, 2022</span><span
                                        class="color-gray-500 font-xs">7<span> Mins read</span></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-box mt-90 mb-50">
        <div class="container">
            <ul class="list-col-5">
                <li>
                    <div class="item-list">
                        <div class="icon-left"><img src="frontend/imgs/template/delivery.svg" alt="Ecom"></div>
                        <div class="info-right">
                            <h5 class="font-lg-bold color-gray-100">Free Delivery</h5>
                            <p class="font-sm color-gray-500">From all orders over $10</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-list">
                        <div class="icon-left"><img src="frontend/imgs/template/support.svg" alt="Ecom"></div>
                        <div class="info-right">
                            <h5 class="font-lg-bold color-gray-100">Support 24/7</h5>
                            <p class="font-sm color-gray-500">Shop with an expert</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-list">
                        <div class="icon-left"><img src="frontend/imgs/template/voucher.svg" alt="Ecom"></div>
                        <div class="info-right">
                            <h5 class="font-lg-bold color-gray-100">Gift voucher</h5>
                            <p class="font-sm color-gray-500">Refer a friend</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-list">
                        <div class="icon-left"><img src="frontend/imgs/template/return.svg" alt="Ecom"></div>
                        <div class="info-right">
                            <h5 class="font-lg-bold color-gray-100">Return &amp; Refund</h5>
                            <p class="font-sm color-gray-500">Free return over $200</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-list">
                        <div class="icon-left"><img src="frontend/imgs/template/secure.svg" alt="Ecom"></div>
                        <div class="info-right">
                            <h5 class="font-lg-bold color-gray-100">Secure payment</h5>
                            <p class="font-sm color-gray-500">100% Protected</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <section class="section-box box-newsletter">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7 col-sm-12">
                    <h3 class="color-white">Subscrible &amp; Get <span class="color-warning">10%</span> Discount</h3>
                    <p class="font-lg color-white">Get E-mail updates about our latest shop and <span
                            class="font-lg-bold">special offers.</span></p>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-12">
                    <div class="box-form-newsletter mt-15">
                        <form class="form-newsletter">
                            <input class="input-newsletter font-xs" value="" placeholder="Your email Address">
                            <button class="btn btn-brand-2">Sign Up</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="ModalQuickview" tabindex="-1" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-xl">
            <div class="modal-content apply-job-form">
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body p-30">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="gallery-image">
                                <div class="galleries-2">
                                    <div class="detail-gallery">
                                        <div class="product-image-slider-2">
                                            <figure class="border-radius-10"><img
                                                    src="frontend/imgs/page/product/img-gallery-1.jpg"
                                                    alt="product image"></figure>
                                            <figure class="border-radius-10"><img
                                                    src="frontend/imgs/page/product/img-gallery-2.jpg"
                                                    alt="product image"></figure>
                                            <figure class="border-radius-10"><img
                                                    src="frontend/imgs/page/product/img-gallery-3.jpg"
                                                    alt="product image"></figure>
                                            <figure class="border-radius-10"><img
                                                    src="frontend/imgs/page/product/img-gallery-4.jpg"
                                                    alt="product image"></figure>
                                            <figure class="border-radius-10"><img
                                                    src="frontend/imgs/page/product/img-gallery-5.jpg"
                                                    alt="product image"></figure>
                                            <figure class="border-radius-10"><img
                                                    src="frontend/imgs/page/product/img-gallery-6.jpg"
                                                    alt="product image"></figure>
                                            <figure class="border-radius-10"><img
                                                    src="frontend/imgs/page/product/img-gallery-7.jpg"
                                                    alt="product image"></figure>
                                        </div>
                                    </div>
                                    <div class="slider-nav-thumbnails-2">
                                        <div>
                                            <div class="item-thumb"><img
                                                    src="frontend/imgs/page/product/img-gallery-1.jpg"
                                                    alt="product image"></div>
                                        </div>
                                        <div>
                                            <div class="item-thumb"><img
                                                    src="frontend/imgs/page/product/img-gallery-2.jpg"
                                                    alt="product image"></div>
                                        </div>
                                        <div>
                                            <div class="item-thumb"><img
                                                    src="frontend/imgs/page/product/img-gallery-3.jpg"
                                                    alt="product image"></div>
                                        </div>
                                        <div>
                                            <div class="item-thumb"><img
                                                    src="frontend/imgs/page/product/img-gallery-4.jpg"
                                                    alt="product image"></div>
                                        </div>
                                        <div>
                                            <div class="item-thumb"><img
                                                    src="frontend/imgs/page/product/img-gallery-5.jpg"
                                                    alt="product image"></div>
                                        </div>
                                        <div>
                                            <div class="item-thumb"><img
                                                    src="frontend/imgs/page/product/img-gallery-6.jpg"
                                                    alt="product image"></div>
                                        </div>
                                        <div>
                                            <div class="item-thumb"><img
                                                    src="frontend/imgs/page/product/img-gallery-7.jpg"
                                                    alt="product image"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-tags">
                                <div class="d-inline-block mr-25"><span class="font-sm font-medium color-gray-900">Category:</span><a
                                        class="link" href="#">Smartphones</a></div>
                                <div class="d-inline-block"><span
                                        class="font-sm font-medium color-gray-900">Tags:</span><a class="link" href="#">Blue</a>,<a
                                        class="link" href="#">Smartphone</a></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="product-info">
                                <h5 class="mb-15">SAMSUNG Galaxy S22 Ultra, 8K Camera & Video, Brightest Display Screen,
                                    S Pen Pro</h5>
                                <div class="info-by"><span class="bytext color-gray-500 font-xs font-medium">by</span><a
                                        class="byAUthor color-gray-900 font-xs font-medium"
                                        href="shop-vendor-list.html"> Ecom Tech</a>
                                    <div class="rating d-inline-block"><img src="frontend/imgs/template/icons/star.svg"
                                                                            alt="Ecom"><img
                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><img
                                            src="frontend/imgs/template/icons/star.svg" alt="Ecom"><span
                                            class="font-xs color-gray-500 font-medium"> (65 reviews)</span></div>
                                </div>
                                <div class="border-bottom pt-10 mb-20"></div>
                                <div class="box-product-price">
                                    <h3 class="color-brand-3 price-main d-inline-block">$2856.3</h3><span
                                        class="color-gray-500 price-line font-xl line-througt mr-10">$3225.6</span>
                                </div>
                                <div class="product-description mt-10 color-gray-900">
                                    <ul class="list-dot">
                                        <li>8k super steady video</li>
                                        <li>Nightography plus portait mode</li>
                                        <li>50mp photo resolution plus bright display</li>
                                        <li>Adaptive color contrast</li>
                                        <li>premium design & craftmanship</li>
                                        <li>Long lasting battery plus fast charging</li>
                                    </ul>
                                </div>
                                <div class="box-product-color mt-10">
                                    <p class="font-sm color-gray-900">Color:<span class="color-brand-2 nameColor">Pink Gold</span>
                                    </p>
                                    <ul class="list-colors">
                                        <li class="disabled"><img src="frontend/imgs/page/product/img-gallery-1.jpg"
                                                                  alt="Ecom" title="Pink"></li>
                                        <li><img src="frontend/imgs/page/product/img-gallery-2.jpg" alt="Ecom"
                                                 title="Gold"></li>
                                        <li><img src="frontend/imgs/page/product/img-gallery-3.jpg" alt="Ecom"
                                                 title="Pink Gold"></li>
                                        <li><img src="frontend/imgs/page/product/img-gallery-4.jpg" alt="Ecom"
                                                 title="Silver"></li>
                                        <li class="active"><img src="frontend/imgs/page/product/img-gallery-5.jpg"
                                                                alt="Ecom" title="Pink Gold"></li>
                                        <li class="disabled"><img src="frontend/imgs/page/product/img-gallery-6.jpg"
                                                                  alt="Ecom" title="Black"></li>
                                        <li class="disabled"><img src="frontend/imgs/page/product/img-gallery-7.jpg"
                                                                  alt="Ecom" title="Red"></li>
                                    </ul>
                                </div>
                                <div class="box-product-style-size mt-10">
                                    <div class="row">
                                        <div class="col-lg-12 mb-10">
                                            <p class="font-sm color-gray-900">Style:<span
                                                    class="color-brand-2 nameStyle">S22</span></p>
                                            <ul class="list-styles">
                                                <li class="disabled" title="S22 Ultra">S22 Ultra</li>
                                                <li class="active" title="S22">S22</li>
                                                <li title="S22 + Standing Cover">S22 + Standing Cover</li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-12 mb-10">
                                            <p class="font-sm color-gray-900">Size:<span class="color-brand-2 nameSize">512GB</span>
                                            </p>
                                            <ul class="list-sizes">
                                                <li class="disabled" title="1GB">1GB</li>
                                                <li class="active" title="512 GB">512 GB</li>
                                                <li title="256 GB">256 GB</li>
                                                <li title="128 GB">128 GB</li>
                                                <li class="disabled" title="64GB">64GB</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="buy-product mt-5">
                                    <p class="font-sm mb-10">Quantity</p>
                                    <div class="box-quantity">
                                        <div class="input-quantity">
                                            <input class="font-xl color-brand-3" type="text" value="1"><span
                                                class="minus-cart"></span><span class="plus-cart"></span>
                                        </div>
                                        <div class="button-buy"><a class="btn btn-cart" href="shop-cart.html">Add to
                                                cart</a><a class="btn btn-buy" href="shop-checkout.html">Buy now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<footer class="footer">
    <div class="footer-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 width-25 mb-30">
                    <h4 class="mb-30 color-gray-1000">Contact</h4>
                    <div class="font-md mb-20 color-gray-900"><strong class="font-md-bold">Address:</strong> 502 New
                        Design Str, Melbourne, San Francisco, CA 94110, United States
                    </div>
                    <div class="font-md mb-20 color-gray-900"><strong class="font-md-bold">Phone:</strong> (+01)
                        123-456-789
                    </div>
                    <div class="font-md mb-20 color-gray-900"><strong class="font-md-bold">E-mail:</strong>
                        contact@ecom-market.com
                    </div>
                    <div class="font-md mb-20 color-gray-900"><strong class="font-md-bold">Hours:</strong> 8:00 - 17:00,
                        Mon - Sat
                    </div>
                    <div class="mt-30"><a class="icon-socials icon-facebook" href="#"></a><a
                            class="icon-socials icon-instagram" href="#"></a><a class="icon-socials icon-twitter"
                                                                                href="#"></a><a
                            class="icon-socials icon-linkedin" href="#"></a></div>
                </div>
                <div class="col-lg-3 width-20 mb-30">
                    <h4 class="mb-30 color-gray-1000">Make Money with Us</h4>
                    <ul class="menu-footer">
                        <li><a href="page-about-us.html">Mission &amp; Vision</a></li>
                        <li><a href="page-about-us.html">Our Team</a></li>
                        <li><a href="page-careers.html">Careers</a></li>
                        <li><a href="#">Press &amp; Media</a></li>
                        <li><a href="#">Advertising</a></li>
                        <li><a href="#">Testimonials</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 width-16 mb-30">
                    <h4 class="mb-30 color-gray-1000">Company</h4>
                    <ul class="menu-footer">
                        <li><a href="blog-2.html">Our Blog</a></li>
                        <li><a href="#">Plans &amp; Pricing</a></li>
                        <li><a href="#">Knowledge Base</a></li>
                        <li><a href="#">Cookie Policy</a></li>
                        <li><a href="#">Office Center</a></li>
                        <li><a href="blog.html">News &amp; Events</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 width-16 mb-30">
                    <h4 class="mb-30 color-gray-1000">My account</h4>
                    <ul class="menu-footer">
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">Editor Help</a></li>
                        <li><a href="#">Community</a></li>
                        <li><a href="#">Live Chatting</a></li>
                        <li><a href="page-contact.html">Contact Us</a></li>
                        <li><a href="#">Support Center</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 width-23">
                    <h4 class="mb-30 color-gray-1000">App &amp; Payment</h4>
                    <div>
                        <p class="font-md color-gray-900">Download our Apps and get extra 15% Discount on your first
                            Order&mldr;!</p>
                        <div class="mt-20"><a class="ml-10" href="#"><img src="frontend/imgs/template/appstore.png"
                                                                          alt="Ecom"></a><a href="#"><img
                                    src="frontend/imgs/template/google-play.png" alt="Ecom"></a></div>
                        <p class="font-md color-gray-900 mt-20 mb-10">Secured Payment Gateways</p><img
                            src="frontend/imgs/template/payment-method.png" alt="Ecom">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
