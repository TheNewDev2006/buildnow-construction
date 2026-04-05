<?php
session_start();
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>
<!DOCTYPE html>
<html lang="en">
    <!--<< Header Area >>-->
    <head>
       <!-- ========== Meta Tags ========== -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="wowtheme7">
        <meta name="description" content="Buildnow - Construction HTML Template">
        <!-- ======== Page title ============ -->
        <title>Buildnow - Construction HTML Template</title>
        <!--<< Favcion >>-->
        <link rel="shortcut icon" href="assets/img/favicon.svg">
        <!--<< Bootstrap min.css >>-->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!--<< All Min Css >>-->
        <link rel="stylesheet" href="assets/css/all.min.css">
        <!--<< Animate.css >>-->
        <link rel="stylesheet" href="assets/css/animate.css">
        <!--<< Magnific Popup.css >>-->
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <!--<< MeanMenu.css >>-->
        <link rel="stylesheet" href="assets/css/meanmenu.css">
        <!--<< Swiper Bundle.css >>-->
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
        <!--<< Nice Select.css >>-->
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <!--<< Main.css >>-->
        <link rel="stylesheet" href="assets/css/main.css">
                            
    </head>
    <body>

         <!-- Preloader -->
        <div class="preloader">
            <div class="spinner-wrap">
                <div class="preloader-logo">
                    <img src="assets/img/preloader.svg" alt="" class="img-fluid">
                </div>
                <div class="spinner"></div>
            </div>
        </div>

         <!-- Back To Top Start -->
        <button id="back-top" class="back-to-top">
            <i class="fa-regular fa-arrow-up"></i>
        </button>

        <!-- MouseCursor Start -->
        <div class="mouseCursor cursor-outer"></div>
        <div class="mouseCursor cursor-inner"></div>

        <!-- Offcanvas Area Start -->
        <div class="fix-area">
            <div class="offcanvas__info">
                <div class="offcanvas__wrapper">
                    <div class="offcanvas__content">
                        <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                            <div class="offcanvas__logo">
                                <a href="index.html">
                                    <img src="assets/img/logo/black-logo.svg" alt="logo-img">
                                </a>
                            </div>
                            <div class="offcanvas__close">
                                <button>
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <h3 class="offcanvas-title">Hello There!</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi natus quasi sunt eum ducimus. </p>
                        <div class="mobile-menu fix mt-15"></div>
                        <div class="social-icon d-flex align-items-center">
                            <a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
                            <a href="javascript:void(0)"><i class="fab fa-twitter"></i></a>
                            <a href="javascript:void(0)"><i class="fab fa-youtube"></i></a>
                            <a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a>
                        </div>

                        <div class="offcanvas__contact">
                            <h3>Contact Us</h3>
                            <ul class="contact-list">
                                <li>
                                    <div class="icon">
                                       <i class="far fa-phone-alt"></i>
                                    </div>
                                    <div class="content">
                                        <p>Call Us</p>
                                        <h4><a href="tel:+4903983493999">+49 (03) 9834 939 99</a></h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                       <i class="fal fa-envelope"></i>
                                    </div>
                                    <div class="content">
                                        <p>Send Email</p>
                                        <h4><a href="mailto:yordomain@gmial.com">yordomain@gmial.com</a></h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                       <i class="fal fa-map-marker-alt"></i>
                                    </div>
                                    <div class="content">
                                        <p>Location</p>
                                        <h4>
                                            Chicago 53755 NY, USA
                                        </h4>
                                    </div>
                                </li>
                            </ul>
                        </div>
                         <a href="contact.html" class="theme-btn-main style-2">
                            <span class="theme-btn-arrow-left"> <i class="fa-solid fa-arrow-up-right"></i> </span>
                            <span class="theme-btn">GET A QUOTE</span>
                            <span class="theme-btn-arrow-right"> <i class="fa-solid fa-arrow-up-right"></i> </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="offcanvas__overlay"></div>

        <!-- Header Section Start -->
        <header class="hero-section-2">
            <div class="header-top">
                <div class="container-fluid">
                    <div class="header-top-wrapper">
                        <p>
                            Transforming landscapes with over 29 years of expertise.
                        </p>
                        <ul class="contact-list">
                            <li>
                                <div class="icon">
                                    <i class="fa-solid fa-phone-plus"></i>
                                </div>
                                <div class="content">
                                    <h4><a href="tel:++18096598654">+1.809.659.8654</a></h4>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa-solid fa-envelopes"></i>
                                </div>
                                <div class="content">
                                    <h4><a href="mailto:[construction-company]@gmail.com">[construction-company]@gmail.com</a></h4>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div class="content">
                                    <h4>
                                    7300-7398 Colonial Rd, Brooklyn, NY 11209
                                    </h4>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="header-sticky" class="header-2">
                <div class="container-fluid">
                    <div class="mega-menu-wrapper">
                        <div class="header-main">
                            <a href="index.html" class="header-logo">
                                <img src="assets/img/logo/black-logo.svg" alt="img">
                            </a>
                            <div class="header-right d-flex justify-content-end align-items-center">
                                 <div class="mean__menu-wrapper">
                                <div class="main-menu">
                                    <nav id="mobile-menu">
                                    <ul>
                                        <li class="has-dropdown menu-thumb">
                                            <a href="javascript:void(0)">
                                                Home
                                                <i class="fas fa-chevron-down"></i>
                                            </a>
                                            <ul class="submenu has-homemenu">
                                                <li>
                                                    <div class="homemenu-items">
                                                        <div class="row row-cols-xl-4 row-cols-md-2 row-cols-2">
                                                            <div class="col homemenu">
                                                                <div class="homemenu-thumb">
                                                                    <img src="assets/img/header/home-1.jpg" alt="img">
                                                                    <div class="demo-button">
                                                                        <a class="theme-btn-main style-2" href="index.html">
                                                                            <span class="theme-btn-arrow-left"> <i class="fa-solid fa-arrow-up-right"></i> </span>
                                                                            <span class="theme-btn">Demo Page</span>
                                                                            <span class="theme-btn-arrow-right"> <i class="fa-solid fa-arrow-up-right"></i> </span>
                                                                        </a>
                                                                            <a class="theme-btn-main style-2" href="index-one.html">
                                                                            <span class="theme-btn-arrow-left"> <i class="fa-solid fa-arrow-up-right"></i> </span>
                                                                            <span class="theme-btn">One Pages</span>
                                                                            <span class="theme-btn-arrow-right"> <i class="fa-solid fa-arrow-up-right"></i> </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="homemenu-content text-center">
                                                                    <h4 class="homemenu-title">
                                                                        <a href="index.html">
                                                                            Main Home
                                                                        </a>
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                            <div class="col homemenu">
                                                                <div class="homemenu-thumb mb-15">
                                                                    <img src="assets/img/header/home-2.jpg" alt="img">
                                                                        <div class="demo-button">
                                                                        <a class="theme-btn-main style-2" href="index-2.html">
                                                                            <span class="theme-btn-arrow-left"> <i class="fa-solid fa-arrow-up-right"></i> </span>
                                                                            <span class="theme-btn">Demo Page</span>
                                                                            <span class="theme-btn-arrow-right"> <i class="fa-solid fa-arrow-up-right"></i> </span>
                                                                        </a>
                                                                            <a class="theme-btn-main style-2" href="index-one-2.html">
                                                                            <span class="theme-btn-arrow-left"> <i class="fa-solid fa-arrow-up-right"></i> </span>
                                                                            <span class="theme-btn">One Pages</span>
                                                                            <span class="theme-btn-arrow-right"> <i class="fa-solid fa-arrow-up-right"></i> </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="homemenu-content text-center">
                                                                    <h4 class="homemenu-title">
                                                                        <a href="index-2.html">
                                                                        Home Constructon 01
                                                                        </a>
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                            <div class="col homemenu">
                                                                <div class="homemenu-thumb mb-15">
                                                                    <img src="assets/img/header/home-3.jpg" alt="img">
                                                                        <div class="demo-button">
                                                                        <a class="theme-btn-main style-2" href="index-3.html">
                                                                            <span class="theme-btn-arrow-left"> <i class="fa-solid fa-arrow-up-right"></i> </span>
                                                                            <span class="theme-btn">Demo Page</span>
                                                                            <span class="theme-btn-arrow-right"> <i class="fa-solid fa-arrow-up-right"></i> </span>
                                                                        </a>
                                                                            <a class="theme-btn-main style-2" href="index-one-3.html">
                                                                            <span class="theme-btn-arrow-left"> <i class="fa-solid fa-arrow-up-right"></i> </span>
                                                                            <span class="theme-btn">One Pages</span>
                                                                            <span class="theme-btn-arrow-right"> <i class="fa-solid fa-arrow-up-right"></i> </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="homemenu-content text-center">
                                                                    <h4 class="homemenu-title">
                                                                        <a href="index-3.html">
                                                                        Home Constructon 02
                                                                        </a>
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                            <div class="col homemenu">
                                                                <div class="homemenu-thumb mb-15">
                                                                        <img src="assets/img/header/home-4.jpg" alt="img">
                                                                        <div class="demo-button">
                                                                        <a class="theme-btn-main style-2" href="index-4.html">
                                                                            <span class="theme-btn-arrow-left"> <i class="fa-solid fa-arrow-up-right"></i> </span>
                                                                            <span class="theme-btn">Demo Page</span>
                                                                            <span class="theme-btn-arrow-right"> <i class="fa-solid fa-arrow-up-right"></i> </span>
                                                                        </a>
                                                                            <a class="theme-btn-main style-2" href="index-one-4.html">
                                                                            <span class="theme-btn-arrow-left"> <i class="fa-solid fa-arrow-up-right"></i> </span>
                                                                            <span class="theme-btn">One Pages</span>
                                                                            <span class="theme-btn-arrow-right"> <i class="fa-solid fa-arrow-up-right"></i> </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="homemenu-content text-center">
                                                                    <h4 class="homemenu-title">
                                                                        <a href="index-4.html">
                                                                            Industry Home
                                                                        </a>
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                            <div class="col homemenu">
                                                                <div class="homemenu-thumb mb-15">
                                                                    <img src="assets/img/header/home-5.jpg" alt="img">
                                                                    <div class="demo-button">
                                                                        <a class="theme-btn-main style-2" href="index-5.html">
                                                                            <span class="theme-btn-arrow-left"> <i class="fa-solid fa-arrow-up-right"></i> </span>
                                                                            <span class="theme-btn">Demo Page</span>
                                                                            <span class="theme-btn-arrow-right"> <i class="fa-solid fa-arrow-up-right"></i> </span>
                                                                        </a>
                                                                            <a class="theme-btn-main style-2" href="index-one-5.html">
                                                                            <span class="theme-btn-arrow-left"> <i class="fa-solid fa-arrow-up-right"></i> </span>
                                                                            <span class="theme-btn">One Pages</span>
                                                                            <span class="theme-btn-arrow-right"> <i class="fa-solid fa-arrow-up-right"></i> </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="homemenu-content text-center">
                                                                    <h4 class="homemenu-title">
                                                                        <a href="index-5.html">
                                                                        Construction
                                                                        </a>
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                            <div class="col homemenu">
                                                                <div class="homemenu-thumb mb-15">
                                                                    <img src="assets/img/header/home-6.jpg" alt="img">
                                                                    <div class="demo-button">
                                                                        <a class="theme-btn-main style-2" href="index-6.html">
                                                                            <span class="theme-btn-arrow-left"> <i class="fa-solid fa-arrow-up-right"></i> </span>
                                                                            <span class="theme-btn">Demo Page</span>
                                                                            <span class="theme-btn-arrow-right"> <i class="fa-solid fa-arrow-up-right"></i> </span>
                                                                        </a>
                                                                            <a class="theme-btn-main style-2" href="index-one-6.html">
                                                                            <span class="theme-btn-arrow-left"> <i class="fa-solid fa-arrow-up-right"></i> </span>
                                                                            <span class="theme-btn">One Pages</span>
                                                                            <span class="theme-btn-arrow-right"> <i class="fa-solid fa-arrow-up-right"></i> </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="homemenu-content text-center">
                                                                    <h4 class="homemenu-title">
                                                                        <a href="index-6.html">
                                                                        Oil Industry
                                                                        </a>
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                            <div class="col homemenu">
                                                                <div class="homemenu-thumb mb-15">
                                                                    <img src="assets/img/header/home-7.jpg" alt="img">
                                                                    <div class="demo-button">
                                                                        <a class="theme-btn-main style-2" href="index-7.html">
                                                                            <span class="theme-btn-arrow-left"> <i class="fa-solid fa-arrow-up-right"></i> </span>
                                                                            <span class="theme-btn">Demo Page</span>
                                                                            <span class="theme-btn-arrow-right"> <i class="fa-solid fa-arrow-up-right"></i> </span>
                                                                        </a>
                                                                            <a class="theme-btn-main style-2" href="index-one-7.html">
                                                                            <span class="theme-btn-arrow-left"> <i class="fa-solid fa-arrow-up-right"></i> </span>
                                                                            <span class="theme-btn">One Pages</span>
                                                                            <span class="theme-btn-arrow-right"> <i class="fa-solid fa-arrow-up-right"></i> </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="homemenu-content text-center">
                                                                    <h4 class="homemenu-title">
                                                                        <a href="index-7.html">
                                                                            Renovation 
                                                                        </a>
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                            <div class="col homemenu">
                                                                <div class="homemenu-thumb mb-15">
                                                                    <img src="assets/img/header/home-8.jpg" alt="img">
                                                                </div>
                                                                <div class="homemenu-content text-center">
                                                                    <h4 class="homemenu-title">
                                                                        Coming Soon
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown active d-xl-none">
                                            <a href="javascript:void(0)" class="border-none">
                                            Home
                                            </a>
                                            <ul class="submenu">
                                                <li><a href="index.html">Main Home</a></li>
                                                <li><a href="index-2.html">Home Constructon 01</a></li>
                                                <li><a href="index-3.html">Home Constructon 02</a></li>
                                                <li><a href="index-4.html">Industry Home</a></li>
                                                <li><a href="index-5.html">Construction</a></li>
                                                <li><a href="index-6.html">Oil Industry</a></li>
                                                <li><a href="index-7.html">Renovation</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="javascript:void(0)">
                                                Pages
                                                <i class="fas fa-chevron-down"></i>
                                            </a>
                                            <ul class="submenu">
                                                <li>
                                                    <a href="about.html">About Us</a>
                                                </li>
                                                <li class="has-dropdown">
                                                    <a href="javascript:void(0)">
                                                        Our Team
                                                        <i class="fas fa-angle-right"></i>
                                                    </a>
                                                    <ul class="submenu">
                                                        <li><a href="team.html">Our Team</a></li>
                                                        <li><a href="team-details.html">Team Details</a></li>
                                                    </ul>
                                                </li>
                                                <li class="has-dropdown">
                                                    <a href="javascript:void(0)">
                                                        Shop Page
                                                        <i class="fas fa-angle-right"></i>
                                                    </a>
                                                    <ul class="submenu">
                                                        <li><a href="shop.html">Shop Page</a></li>
                                                        <li><a href="shop-details.html">Shop Details</a></li>
                                                        <li><a href="shop-cart.html">Shop Cart</a></li>
                                                        <li><a href="checkout.html">CheckOut</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="pricing.html">Pricing Plan</a></li>
                                                <li><a href="gallery.html">Our Gallery</a></li>
                                                <li><a href="faq.html">Faqs</a></li>
                                                <li><a href="404.html">404 Error</a></li>
                                            </ul>
                                        </li>
                                            <li>
                                            <a href="javascript:void(0)">
                                                Services
                                                <i class="fas fa-chevron-down"></i>
                                            </a>
                                            <ul class="submenu">
                                                <li><a href="service.html">Our Services</a></li>
                                                <li><a href="service-details.html">Service Details</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                Projects
                                                <i class="fas fa-chevron-down"></i>
                                            </a>
                                            <ul class="submenu">
                                                <li><a href="project.html">Our Project</a></li>
                                                <li><a href="project-details.html">Project Details</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                News
                                                <i class="fas fa-chevron-down"></i>
                                            </a>
                                            <ul class="submenu">
                                                <li><a href="news.html">Our News</a></li>
                                                <li><a href="news-details.html">News Details</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="contact.html">
                                                Contacts
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                                </div>
                            </div>
                                <div class="header-right-icon">
                                    <a href="shop-cart.html" class="cart-icon"><i class="far fa-shopping-bag"></i>
                                        <span>2</span>
                                    </a>
                                    <a href="#" class="main-header__search search-toggler">
                                        <i class="far fa-search"></i>
                                    </a>
                                </div>
                                <div class="header__hamburger">
                                    <a href="contact.html" class="contact-btn">GET A QUOTE</a>
                                    <div class="sidebar__toggle">
                                        <div class="header-bar">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

         <!-- Search Start -->
        <div class="search-popup">
            <div class="search-popup__overlay search-toggler"></div>
            <div class="search-popup__content">
                <form role="search" method="get" class="search-popup__form" action="#">
                    <input type="text" id="search" name="search" placeholder="Search Here...">
                    <button type="submit" aria-label="search submit" class="search-btn">
                        <span><i class="fa-regular fa-magnifying-glass"></i></span>
                    </button>
                </form>
            </div>
        </div>

        <div id="smooth-wrapper">
            <div id="smooth-content">

                <!-- Breadcrumb Section Start -->
                <section class="breadcrumb-wrapper bg-cover fix" style="background-image: url(assets/img/inner-page/breadcrumb.jpg);">
                    <div class="container">
                        <div class="page-heading">
                            <ul class="breadcrumb-list">
                                <li><a href="index.html">Home</a></li>
                                <li>/</li>
                                <li>contact us</li>
                            </ul>
                            <h1 class="breadcrumb-title">contact us</h1>
                        </div>
                    </div>
                </section>

                <!-- Contact Section Start -->
                <section class="contact-section-inner section-padding fix bg-color-3 pb-0">
                    <div class="container">
                        <div class="row g-4 align-items-center">
                            <div class="col-xl-5 col-lg-6 wow fadeInUp">
                                <div class="contact-left-image-inner fix">
                                    <img data-speed=".8" src="assets/img/inner-page/contact/contact-01.jpg" alt="img">
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-6">
                                <div class="contact-right-items-inner">
                                    <div class="section-title">
                                        <span class="sub-title wow fadeInUp">
                                           Contact Us
                                        </span>
                                        <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">
                                            Let’s Contact with Us
                                        </h2>
                                    </div>
                                    <ul class="contact-information-list">
                                        <li class="wow fadeInUp" data-wow-delay=".6s">
                                            <div class="icon">
                                                <img src="assets/img/inner-page/contact/icon-01.svg" alt="img">
                                            </div>
                                            <div class="content">
                                                <h5>Contact us:</h5>
                                                <p><a href="tel:+483939993900">Call Consulting: +483 9399 939 00</a></p>
                                                <p><a href="mailto:hello[construction-company]@gmail.com">Send Email: hello[construction-company]@gmail.com</a></p>
                                            </div>
                                        </li>
                                        <li class="wow fadeInUp" data-wow-delay=".8s">
                                            <div class="icon">
                                                <img src="assets/img/inner-page/contact/icon-02.svg" alt="img">
                                            </div>
                                            <div class="content">
                                                <h5>Our Location:</h5>
                                                <p>2220 Plymouth Rd 302, Hopkins, <span class="d-block">New  York Minnesota(MN), 55305</span></p>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="contact-content-style-7">
                                        <form action="contact-us.php" id="contact-form1" method="POST" class="contact-form-items">
                                            <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
                                            <div class="row g-4">
                                                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                                                    <div class="form-clt">
                                                        <input type="text" placeholder="Your name">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                                                    <div class="form-clt">
                                                        <input type="text" placeholder="Email address">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".7s">
                                                    <div class="form-clt">
                                                        <input type="text" placeholder="Phone number">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".7s">
                                                    <div class="form-clt">
                                                        <input type="text" placeholder="Company name">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 wow fadeInUp" data-wow-delay=".9s">
                                                    <div class="form-clt">
                                                        <textarea name="message" placeholder="Your message"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 wow fadeInUp" data-wow-delay=".3s">
                                                    <button type="submit" class="theme-btn-main style-2">
                                                        <span class="theme-btn-arrow-left"> <i class="fa-solid fa-arrow-up-right"></i> </span>
                                                        <span class="theme-btn">MAKE AN APPOINTMENT</span>
                                                        <span class="theme-btn-arrow-right"> <i class="fa-solid fa-arrow-up-right"></i> </span>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contact-bottom-items-inner section-padding">
                            <div class="info-items wow fadeInUp" data-wow-delay=".2s">
                                <div class="icon">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div class="content">
                                    <h5>Our Email Us</h5>
                                    <h6><a href="mailto:[business@domain].com">[business@domain].com</a></h6>
                                </div>
                            </div>
                            <div class="info-items wow fadeInUp" data-wow-delay=".4s">
                                <div class="icon">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div class="content">
                                    <h5>Call Us</h5>
                                    <h6><a href="tel:+00479394888">+00 (47) 939 4888</a></h6>
                                </div>
                            </div>
                            <div class="info-items wow fadeInUp" data-wow-delay=".6s">
                                <div class="icon">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div class="content">
                                    <h5>Location</h5>
                                    <h6>Graaf Floriss 22A CH NY</h6>
                                </div>
                            </div>
                            <div class="info-items border-none wow fadeInUp" data-wow-delay=".8s">
                                <div class="icon">
                                    <i class="fa-regular fa-clock"></i>
                                </div>
                                <div class="content">
                                    <h5>Opening Hour</h5>
                                    <h6>Mon - Fri: 09am - 07pm</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            
                <!-- Contact Map Start -->
                <div class="google-map-items">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6678.7619084840835!2d144.9618311901502!3d-37.81450084255415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642b4758afc1d%3A0x3119cc820fdfc62e!2sEnvato!5e0!3m2!1sen!2sbd!4v1641984054261!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>

                 <!-- Cta-Bg-Section-5 Start -->
                <section class="cta-bg-section-5 fix bg-cover" style="background-image: url(assets/img/home-5/cta/cta-bg.jpg);">
                    <div class="left-shape">
                            <img src="assets/img/home-5/cta/shape-1.png" alt="img">
                        </div>
                        <div class="right-shape float-bob-x">
                            <img src="assets/img/home-5/cta/shape-2.png" alt="img">
                        </div>
                        <div class="container">
                            <div class="cta-bg-wrapper-5">
                                <div class="cta-content">
                                    <div class="section-title">
                                        <span class="sub-title style-2 text-white wow fadeInUp">
                                            BUILDING YOUR DREAM
                                        </span>
                                        <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim text-white">
                                            Construction <br> Today For Your <br> Home
                                        </h2>
                                    </div>
                                    <div class="cta-button wow fadeInUp" data-wow-delay=".3s">
                                            <a class="theme-btn-main style-2" href="contact.html">
                                            <span class="theme-btn-arrow-left"> <i class="fa-solid fa-arrow-up-right"></i> </span>
                                            <span class="theme-btn">CONTACT WITH US</span>
                                            <span class="theme-btn-arrow-right"> <i class="fa-solid fa-arrow-up-right"></i> </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="cta-man wow slideInUp" data-wow-delay="100ms" data-wow-duration="2500ms">
                                    <img src="assets/img/home-5/cta/cta-man.png" alt="img">
                                </div>
                                <div class="cta-contact-item">
                                    <div class="contact-item wow fadeInUp" data-wow-delay=".3s">
                                        <div class="icon">
                                            <i class="fa-light fa-phone"></i>
                                        </div>
                                        <div class="content">
                                            <span>Call Us 7/24</span>
                                            <h5>
                                                <a href="tel:+2085550112">+208 555 0112</a>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="contact-item mb-0 wow fadeInUp" data-wow-delay=".5s">
                                        <div class="icon">
                                            <i class="fa-light fa-envelope"></i>
                                        </div>
                                        <div class="content">
                                            <span>Make a Quote</span>
                                            <h5>
                                                <a href="mailto:yourdomain@gmail.com">yourdomain@gmail.com</a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>

                <!-- Footer-section Start -->
                <footer class="footer-section-5 bg-cover" style="background-image: url(assets/img/home-5/footer-bg.jpg);">
                    <div class="right-shape">
                        <img src="assets/img/home-5/piler-2.png" alt="img">
                    </div>
                    <div class="container">
                        <div class="footer-wrapper style-3">
                            <div class="row">
                                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-8 col-sm-12 wow fadeInUp" data-wow-delay=".2s">
                                    <div class="single-footer-widget">
                                        <div class="widget-title">
                                            <a href="index.html">
                                                <img src="assets/img/logo/white-logo.svg" alt="img">
                                            </a>
                                        </div>
                                        <div class="footer-contact">
                                            <p>
                                                Lorem ipsum dolor sit amet, porro quisquam est, qui dolorem ipsum quia sed dolor sit amet, consectetur
                                            </p>
                                            <h5>Follow Us:</h5>
                                            <div class="social-list-3">
                                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                            <a href="#"><i class="fa-light fa-basketball"></i></a>
                                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".4s">
                                    <div class="single-footer-widget">
                                        <div class="widget-title">
                                            <h4>About Us</h4>
                                        </div>
                                        <ul class="list-area">
                                            <li>
                                                <a href="contact.html">
                                                    Support Centre
                                                </a>
                                            </li>
                                            <li>
                                                <a href="team.details.html">
                                                    Our Team
                                                </a>
                                            </li>
                                            <li>
                                                <a href="contact.html">
                                                    Our Solutions
                                                </a>
                                            </li>
                                            <li>
                                                <a href="contact.html">
                                                    Why Choose Us
                                                </a>
                                            </li>
                                            <li>
                                                <a href="contact.html">
                                                    Contact Us
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xl-4 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".6s">
                                    <div class="single-footer-widget">
                                        <div class="widget-title">
                                            <h4>Our Services</h4>
                                        </div>
                                        <ul class="list-area">
                                            <li>
                                                <a href="service-details.html">
                                                    Architecture Design
                                                </a>
                                            </li>
                                            <li>
                                                <a href="service-details.html">
                                                    Building Renovation
                                                </a>
                                            </li>
                                            <li>
                                                <a href="service-details.html">
                                                    Building Construction
                                                </a>
                                            </li>
                                            <li>
                                                <a href="service-details.html">
                                                Flooring & Roofing
                                                </a>
                                            </li>
                                            <li>
                                                <a href="service-details.html">
                                                    General Contracting
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-xl-4 ps-xxl-5 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                                    <div class="footer-widget-items footer-contact-form">
                                        <div class="footer-shape">
                                            <img src="assets/img/home-5/footer-shape.png" alt="img">
                                        </div>
                                        <div class="footer-shape-2">
                                            <img src="assets/img/home-5/footer-shape-2.png" alt="img">
                                        </div>
                                        <div class="icon">
                                            <img src="assets/img/home-5/icon/09.svg" alt="img">
                                        </div>
                                        <h3>Sign Up to Our Newsletter</h3>
                                        <p>
                                            Subscribe to our Newsletter and Event right now to be updated
                                        </p>
                                        <form action="#">
                                            <input type="text" placeholder="Your email">
                                            <button class="theme-btn-2" type="submit">
                                                Subscribe Now
                                            </button>
                                        </form>
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>
                    <div class="footer-bottom-5">
                        <div class="container">
                            <div class="footer-wrapper-5">
                                <p class="wow fadeInUp" data-wow-delay=".3s">
                                    Copyright © 2026 Buildnow by WowTheme7. All Rights Reserved. 
                                </p>
                                <img src="assets/img/home-5/group-shape.png" alt="img" class="wow fadeInUp" data-wow-delay=".5s">
                            </div>
                        </div>
                    </div>
                </footer>

            </div>
        </div>
       
        
        <!--<< All JS Plugins >>-->
        <script src="assets/js/jquery-3.7.1.min.js"></script>
        <!--<< Viewport Js >>-->
        <script src="assets/js/viewport.jquery.js"></script>
        <!--<< Bootstrap Js >>-->
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <!--<< Gsap Min Js >>-->
        <script src="assets/js/gsap.min.js"></script>
        <!--<< ScrollTrigger Min Js >>-->
        <script src="assets/js/ScrollTrigger.min.js"></script>
        <!--<< ScrollSmoother Min Js >>-->
        <script src="assets/js/ScrollSmoother.min.js"></script>
        <!--<< ScrollToPlugin Min Js >>-->
        <script src="assets/js/ScrollToPlugin.min.js"></script>
        <!--<< SplitText Min Js >>-->
        <script src="assets/js/SplitText.min.js"></script>
        <!--<< TextPlugin Min Js >>-->
        <script src="assets/js/TextPlugin.js"></script>
         <!--<< Chroma Min Js >>-->
        <script src="assets/js/chroma.min.js"></script>
        <!--<< nice-selec Js >>-->
        <script src="assets/js/jquery.nice-select.min.js"></script>
        <!--<< Waypoints Js >>-->
        <script src="assets/js/jquery.waypoints.js"></script>
        <!--<< Counterup Js >>-->
        <script src="assets/js/jquery.counterup.min.js"></script>
        <!--<< Swiper Slider Js >>-->
        <script src="assets/js/swiper-bundle.min.js"></script>
        <!--<< MeanMenu Js >>-->
        <script src="assets/js/jquery.meanmenu.min.js"></script>
        <!--<< Parallaxie Js >>-->
        <script src="assets/js/parallaxie.js"></script>
        <!--<< Magnific Popup Js >>-->
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <!--<< Wow Animation Js >>-->
        <script src="assets/js/wow.min.js"></script>
        <!--<< Ajax Mail Js >>-->
        <script src="assets/js/ajax-mail.js"></script>
        <!--<< Main.js >>-->
        <script src="assets/js/main.js"></script>
    </body>
</html>
