<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Topico - Clean, Minimal E-commerce HTML5 Template </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico in the root directory -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

		<!-- CSS here -->
        <link rel="stylesheet" href="assets/css/preloader.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/backToTop.css">
        <link rel="stylesheet" href="assets/css/meanmenu.css">
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
        <link rel="stylesheet" href="assets/css/fontAwesome5Pro.css">
        <link rel="stylesheet" href="assets/css/ui-range-slider.css">
        <link rel="stylesheet" href="assets/css/default.css">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- Add your site or application content here -->

        <!-- preloader area start -->
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div id="object"></div>
                </div>
            </div>
        </div>
        <!-- preloader area end -->

        <!-- back to top start -->
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
        <!-- back to top end -->

        <!-- header area start -->
        <header>
            <div class="header__area">
                <div class="header__top header__padding d-none d-sm-block">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-lg-6 col-md-5 d-none d-md-block">
                                <div class="header__welcome">
                                    <span>Welcome to Worldwide Electronics Store</span>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-7">
                                <div class="header__action d-flex justify-content-center justify-content-md-end">
                                    <ul>
                                        <li><a href="#">My Account</a></li>
                                        <li><a href="#">My Wishlist</a></li>
                                        <li><a href="login.html">Sign In</a></li>
                                        <li><a href="#">Compare</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header__info header__padding">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-3">
                                <div class="header__info-left d-flex justify-content-center justify-content-sm-between align-items-center">
                                    <div class="logo">
                                        <a href="index.html"><img src="assets/img/logo/logo-black.png" alt="logo"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-9">
                                <div class="header__info-right">
                                    <div class="header__search f-left d-none d-sm-block">
                                        <form action="#">
                                            <div class="header__search-box">
                                                <input type="text" placeholder="Search For Products...">
                                                <button type="submit">Search</button>
                                            </div>
                                            <div class="header__search-cat">
                                                <select>
                                                    <option>All Categories</option>
                                                    <option>Best Seller Products</option>
                                                    <option>Top 10 Offers</option>
                                                    <option>New Arrivals</option>
                                                    <option>Phones & Tablets</option>
                                                    <option>Electronics & Digital</option>
                                                    <option>Fashion & Clothings</option>
                                                    <option>Jewelry & Watches</option>
                                                    <option>Health & Beauty</option>
                                                    <option>Sound & Speakers</option>
                                                    <option>TV & Audio</option>
                                                    <option>Computers</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="cart__mini-wrapper d-none d-md-flex f-right p-relative">
                                        <a href="javascript:void(0);" class="cart__toggle">
                                            <span class="cart__total-item">01</span>
                                        </a>
                                        <span class="cart__content">
                                            <span class="cart__my">My Cart:</span>
                                            <span class="cart__total-price">$ 255.00</span>
                                        </span>
                                        <div class="cart__mini">
                                          <div class="cart__close"><button type="button" class="cart__close-btn"><i class="fal fa-times"></i></button></div>
                                          <ul>
                                              <li>
                                                <div class="cart__title">
                                                  <h4>My Cart</h4>
                                                  <span>(1 Item in Cart)</span>
                                                </div>
                                              </li>
                                              <li>
                                                <div class="cart__item d-flex justify-content-between align-items-center">
                                                  <div class="cart__inner d-flex">
                                                    <div class="cart__thumb">
                                                      <a href="product-details.html">
                                                        <img src="assets/img/shop/product/cart/cart-mini-1.jpg" alt="">
                                                      </a>
                                                    </div>
                                                    <div class="cart__details">
                                                      <h6><a href="product-details.html"> Samsung C49J89: £875, Debenhams Plus  </a></h6>
                                                      <div class="cart__price">
                                                        <span>$255.00</span>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="cart__del">
                                                      <a href="#"><i class="fal fa-trash-alt"></i></a>
                                                  </div>
                                                </div>
                                              </li>
                                              <li>
                                                <div class="cart__sub d-flex justify-content-between align-items-center">
                                                  <h6>Car Subtotal</h6>
                                                  <span class="cart__sub-total">$255.00</span>
                                                </div>
                                              </li>
                                              <li>
                                                <a href="checkout.html" class="t-y-btn w-100 mb-10">Proceed to checkout</a>
                                                <a href="cart.html" class="t-y-btn t-y-btn-border w-100 mb-10">view add edit cart</a>
                                              </li>
                                          </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header__bottom header__padding header__bottom-border">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-6 col-6">
                              <div class="header__bottom-left d-flex d-xl-block align-items-center">
                                <div class="side-menu d-xl-none mr-20">
                                  <button type="button" class="side-menu-btn offcanvas-toggle-btn"><i class="fas fa-bars"></i></button>
                                </div>
                                <div class="main-menu d-none d-md-block">
                                    <nav id="mobile-menu-2">
                                        <ul>
                                            <li>
                                                <a href="index.html">Home</a>
                                            </li>
                                            <li><a href="product.html">Features <i class="far fa-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="product.html">Product Type</a></li>
                                                    <li><a href="product.html">Product Features <i class="far fa-angle-down"></i></a>
                                                        <ul class="submenu">
                                                            <li><a href="product-details.html">Simple Product</a></li>
                                                            <li><a href="product-details-config.html">Configurable Product</a></li>
                                                            <li><a href="product-details-group.html">Group Product</a></li>
                                                            <li><a href="product-details-download.html">Downloadable Product</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="product.html">Shop By Brand</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="blog.html">Blog <i class="far fa-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="blog-detaills.html">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="about.html">about us</a></li>
                                            <li><a href="contact.html">contact</a></li>
                                            <li><a href="register.html">Register</a></li>
                                        </ul>
                                    </nav>
                                </div>
                              </div>
                            </div>
                            <div class="col-xl-3 col-lg-3  col-sm-6  col-6 d-md-none d-lg-block">
                                <div class="header__bottom-right d-flex justify-content-end">
                                    <!-- <div class="header__currency">
                                        <select>
                                            <option>USD</option>
                                            <option>USD</option>
                                            <option>USD</option>
                                            <option>USD</option>
                                            <option>USD</option>
                                        </select>
                                    </div> -->
                                    <!-- <div class="header__lang d-md-none d-lg-block">
                                        <select>
                                            <option>English</option>
                                            <option>Bangla</option>
                                            <option>Arabic</option>
                                            <option>Hindi</option>
                                            <option>Urdu</option>
                                        </select>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header area end -->

        <!-- offcanvas area start -->
        <div class="offcanvas__area">
            <div class="offcanvas__wrapper">
            <div class="offcanvas__close">
                <button class="offcanvas__close-btn" id="offcanvas__close-btn">
                    <i class="fal fa-times"></i>
                </button>
            </div>
            <div class="offcanvas__content">
                <div class="offcanvas__logo mb-40">
                    <a href="index.html">
                    <img src="assets/img/logo/logo-black.png" alt="logo">
                    </a>
                </div>
                <div class="offcanvas__search mb-25">
                    <form action="#">
                        <input type="text" placeholder="What are you searching for?">
                        <button type="submit" ><i class="far fa-search"></i></button>
                    </form>
                </div>
                <div class="mobile-menu-2 fix"></div>
                <div class="offcanvas__action">

                </div>
            </div>
            </div>
        </div>
        <!-- offcanvas area end -->      
        <div class="body-overlay"></div>
        <!-- offcanvas area end -->

        <main>
            
            <!-- breadcrumb area start -->
            <section class="breadcrumb__area box-plr-75">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="breadcrumb__wrapper">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                      <li class="breadcrumb-item active" aria-current="page">Register</li>
                                    </ol>
                                  </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb area end -->

            <!-- login Area Strat-->
            <section class="login-area pb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="basic-login">
                                <h3 class="text-center mb-60">Signup From Here</h3>
                                <form action="#">
                                    <label for="fname">Firstname <span>*</span></label>
                                    <input id="fname" type="text" name="fname"/>
                                    <label for="lname">Lastname <span>*</span></label>
                                    <input id="lname" type="text" name="lname"/>
                                    <label for="email-id">Email Address <span>*</span></label>
                                    <input id="email-id" type="email"  name="email"/>
                                    <label for="phone">Phone Number <span>*</span></label>
                                    <input id="text" type="text"  name="number"/>
                                    <label for="pass">Password <span>*</span></label>
                                    <input id="pass" type="password" name="password"/>
                                    <div class="mt-10"></div>
                                    <button class="t-y-btn w-100">Register Now</button>
                                    <div class="or-divide"><span>or</span></div>
                                    <a href="login.html" class="t-y-btn t-y-btn-grey w-100">login Now</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- login Area End-->
 
        </main>

              <!-- footer area start -->
              <footer>
                <div class="footer__area footer-bg">
                    <div class="footer__top pt-80 pb-40">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-7 col-lg-12">
                                    <div class="footer__top-left">
                                        <div class="row">
                                            <div class="col-xl-5 col-lg-6 col-md-6 col-sm-6">
                                                <div class="footer__widget">
                                                    <div class="footer__widget-title mb-45">
                                                        <div class="footer__logo">
                                                            <a href="index.html"><img src="assets/img/logo/logo-white.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="footer__widget-content">
                                                        <div class="footer__hotline d-flex align-items-center mb-30">
                                                            <div class="icon mr-15">
                                                                <i class="fal fa-headset"></i>
                                                            </div>
                                                            <div class="text">
                                                                <h4>Hotline Free 24/24:</h4>
                                                                <span><a href="tel:100-123-456-7890">(+100) 123 456 7890</a></span>
                                                            </div>
                                                        </div>
                                                        <div class="footer__info">
                                                            <ul>
                                                                <li>
                                                                    <span>Add:  <a target="_blank" href="https://www.google.com/maps/place/Dhaka/@23.7806207,90.3492859,12z/data=!3m1!4b1!4m5!3m4!1s0x3755b8b087026b81:0x8fa563bbdd5904c2!8m2!3d23.8104753!4d90.4119873">Walls Street 68, Mahattan, New York, USA</a></span></li>
                                                                <li><span>Email: <a href="mailto:info@thebuesky.com">info@thebuesky.com</a>  </span></li>
                                                                <li><span>Fax: <a href="tel:123-456-7890">(+100) 123 456 7890</a> - <a href="tel:-100-123-456-7891">(+100) 123 456 7891</a> </span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-7 col-lg-6 col-md-6 col-sm-6">
                                                <div class="row">
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                                        <div class="footer__widget">
                                                            <div class="footer__widget-title">
                                                                <h4>Information</h4>
                                                            </div>
                                                            <div class="footer__widget-content">
                                                                <div class="footer__link">
                                                                    <ul>
                                                                        <li><a href="#"> Custom Service </a></li>
                                                                        <li><a href="#">F.A.Q.’s</a></li>
                                                                        <li><a href="#">Ordering Tracking</a></li>
                                                                        <li><a href="#"> Contacts</a></li>
                                                                        <li><a href="#">Events</a></li>
                                                                        <li><a href="#">Popular</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                                        <div class="footer__widget">
                                                            <div class="footer__widget-title">
                                                                <h4>Our Services</h4>
                                                            </div>
                                                            <div class="footer__widget-content">
                                                                <div class="footer__link">
                                                                    <ul>
                                                                        <li><a href="#">Sitemap</a></li>
                                                                        <li><a href="#">Privacy Policy</a></li>
                                                                        <li><a href="#">Your Account</a></li>
                                                                        <li><a href="#">Advanced Search</a></li>
                                                                        <li><a href="#">Terms & Condition</a></li>
                                                                        <li><a href="#"> Contact Us</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-lg-12">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                            <div class="footer__widget">
                                                <div class="footer__widget-title">
                                                    <h4>My Account</h4>
                                                </div>
                                                <div class="footer__widget-content">
                                                    <div class="footer__link">
                                                        <ul>
                                                            <li><a href="#"> About us </a></li>
                                                            <li><a href="#">Delivery Information</a></li>
                                                            <li><a href="#">Privacy Policy</a></li>
                                                            <li><a href="#">Discount</a></li>
                                                            <li><a href="#">Custom Service</a></li>
                                                            <li><a href="#">Terms & Condition</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                            <div class="footer__widget">
                                                <div class="footer__widget-title">
                                                    <h4>Payment & Shipping</h4>
                                                </div>
                                                <div class="footer__widget-content">
                                                    <div class="footer__link">
                                                        <ul>
                                                            <li><a href="#">Terms Of Use</a></li>
                                                            <li><a href="#">Payment Methods</a></li>
                                                            <li><a href="#">Shipping Guide</a></li>
                                                            <li><a href="#">Locations We Ship To</a></li>
                                                            <li><a href="#">Estimated Delivery Time</a></li>
                                                            <li><a href="#">Express</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--<div class="footer__bottom pt-60 pb-60">
                         <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="footer__links text-center">
                                        <p>
                                            <a href="#">Air Conditioners</a>
                                            <a href="#">Audios & Theaters</a>
                                            <a href="#">Car Electronics</a>
                                            <a href="#">Office Electronics</a>
                                            <a href="#">TV Televisions</a>
                                            <a href="#">Washing Machines</a>
                                        </p>
                                        <p>
                                            <a href="#">Cookware</a>
                                            <a href="#">Decoration</a>
                                            <a href="#">Furniture </a>
                                            <a href="#">Garden Tools</a>
                                            <a href="#">Garden Equipments</a>
                                            <a href="#">Powers And Hand Tools </a>
                                            <a href="#">Utensil & Gadget </a>
                                            <a href="#">Printers</a>
                                            <a href="#">Projectors</a>
                                            <a href="#">Scanners</a>
                                            <a href="#">Store</a>
                                            <a href="#">Business</a>
                                        </p>
                                        <p>
                                            <a href="#">4K Ultra</a>
                                            <a href="#"> HD TVs </a>
                                            <a href="#">LED TVs</a>
                                            <a href="#">OLED TVs</a>
                                            <a href="#">Desktop</a>
                                            <a href="#">PC</a>
                                            <a href="#">Laptop</a>
                                            <a href="#">Smartphones</a>
                                            <a href="#">Tablet</a>
                                            <a href="#">Game Controller</a>
                                            <a href="#">Audio & Video</a>
                                            <a href="#"> Wireless Speaker</a>
                                            <a href="#">Drone</a>
                                        </p>
                                    </div>
                                    <div class="footer__download text-center">
                                        <h4>Download The App - Get 30% Sale Coupon</h4>
                                        <a href="#" class="m-img"><img src="assets/img/icon/app-store.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>-->
                    <div class="footer__copyright pt-30 pb-35 footer-bottom-bg">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="footer__copyright-text">
                                        <p>Copyright © <a href="index.html">Topico.</a> All Rights Reserved.</p>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="footer__payment f-right">
                                        <a href="#" class="m-img"><img src="assets/img/icon/payment.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

		<!-- JS here -->
        <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
        <script src="assets/js/vendor/waypoints.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/meanmenu.js"></script>
        <script src="assets/js/slick.min.js"></script>
        <script src="assets/js/backToTop.js"></script>
        <script src="assets/js/jquery.fancybox.min.js"></script>
        <script src="assets/js/countdown.js"></script>
        <script src="assets/js/nice-select.min.js"></script>
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/magnific-popup.min.js"></script>
        <script src="assets/js/jquery-ui-slider-range.js"></script>
        <script src="assets/js/ajax-form.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>
