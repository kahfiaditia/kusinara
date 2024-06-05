<!DOCTYPE html>
<html lang="en">
    <!--<< Header Area >>-->

    @include('layouts.head')

    <body>

        <!-- Preloader Start -->
        <div id="preloader" class="preloader">
            <div class="animation-preloader">
                <div class="spinner">
                </div>
                <div class="txt-loading">
                    <span data-text-preloader="K" class="letters-loading">
                        K
                    </span>
                    <span data-text-preloader="U" class="letters-loading">
                        U
                    </span>
                    <span data-text-preloader="S" class="letters-loading">
                        S
                    </span>
                    <span data-text-preloader="I" class="letters-loading">
                        I
                    </span>
                    <span data-text-preloader="N" class="letters-loading">
                        N
                    </span>
                    <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>
                    <span data-text-preloader="R" class="letters-loading">
                        R
                    </span>
                    <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>
                </div>
                <p class="text-center">Loading</p>
            </div>
            <div class="loader">
                <div class="row">
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                </div>
            </div>
        </div>

        <!--<< Mouse Cursor Start >>-->
        <div class="mouse-cursor cursor-outer"></div>
        <div class="mouse-cursor cursor-inner"></div>

        <!-- Offcanvas Area Start -->
        <div class="fix-area">
            <div class="offcanvas__info">
                <div class="offcanvas__wrapper">
                    <div class="offcanvas__content">
                        <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                            <div class="offcanvas__logo">
                                <a href="index.html">
                                    <img src="{{ asset('assets2/img/logo/kusinaraa.jpg') }}" alt="logo-img">
                                </a>
                            </div>
                            <div class="offcanvas__close">
                                <button>
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <p class="d-none d-xl-block">
                            Ne summo dictas pertinacia nam. Illum cetero vocent ei vim, case regione signiferumque vim
                            te. Ex mea quem munere lobortis. Duis aute irure dolor in reprehenderit in voluptate velit
                            esse cillum.
                        </p>
                        <div class="mobile-menu fix mb-3"></div>
                        <div class="offcanvas__contact">
                            <h4>Contact Info</h4>
                            <ul>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon">
                                        <i class="fal fa-map-marker-alt"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a target="_blank" href="#">Main Street, Melbourne, Australia</a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a href="mailto:info@netband.com"><span
                                                class="mailto:info@netband.com">info@netband.com</span></a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="fal fa-clock"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a target="_blank" href="#">Mod-friday, 09am -05pm</a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="far fa-phone"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a href="tel:+11002345909">+11002345909</a>
                                    </div>
                                </li>
                            </ul>
                            <div class="header-button mt-4">
                                <a href="contact.html" class="theme-btn text-center">
                                    <span>Contact Us<i class="fas fa-chevron-right"></i></span>
                                </a>
                            </div>
                            <div class="social-icon d-flex align-items-center">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="offcanvas__overlay"></div>

        <!-- Header Top Start -->
        <div class="header-top-section fix">
            <div class="container">
                <div class="header-top-wrapper">
                    <ul class="contact-list">
                        <li>
                            <i class="far fa-envelope"></i>
                            <a href="mailto:info@example.com" class="link">info@kusinara.com</a>
                        </li>
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            Jalan KH Tanah Binong No 29 Tangerang
                        </li>
                    </ul>
                    <div class="top-right">
                        <div class="social-icon d-flex align-items-center">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-vimeo-v"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        </div>
                        <ul class="header-menu">
                            <li>
                                <a href="">
                                    Help
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Support
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Faqs
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Header Area Start -->
        <header class="header-section-1">
            <div id="header-sticky" class="header-1">
                <div class="container-fluid">
                    <div class="mega-menu-wrapper">
                        <div class="header-main">
                            <div class="header-left">
                                <div class="logo">
                                    <a href="#" class="header-logo">
                                        <img src="{{ asset('assets2/img/logo/kusinaraa.jpg') }}" alt="logo-img">
                                    </a>
                                </div>
                                @include('layouts.menu')
                            </div>
                            <div class="header-right d-flex justify-content-end align-items-center">
                                <div class="contact-info">
                                    <div class="icon">
                                        <img src="{{ asset('assets2/img/call.png') }}" alt="img">
                                    </div>
                                    <div class="content">
                                        <p>Phone:</p>
                                        <h6>
                                            <a href="tel:+23645689622">+236 (456) 896 22</a>
                                        </h6>
                                    </div>
                                </div>
                                <div class="header-button">
                                    <div class="social-icon d-flex align-items-center">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-vimeo-v"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    </div>

                                </div>
                                {{-- <div class="header-button">
                                    <a href="contact.html" class="link-btn">
                                        <span>Contact us</span>
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                </div>
                                <a href="#0" class="search-trigger search-icon"><i
                                        class="fal fa-search"></i>
                                </a> --}}
                                <div class="header__hamburger d-xl-none my-auto">
                                    <div class="sidebar__toggle">
                                        <i class="far fa-bars"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Search Area Start -->
        <div class="search-wrap">
            <div class="search-inner">
                <i class="fas fa-times search-close" id="search-close"></i>
                <div class="search-cell">
                    <form method="get">
                        <div class="search-field-holder">
                            <input type="search" class="main-search-input" placeholder="Search...">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--<< Hero Section Start >>-->
        <section class="hero-section hero-1">
            <div class="array-button">
                <button class="array-prev"><i class="fas fa-chevron-left"></i></button>
                <button class="array-next"><i class="fas fa-chevron-right"></i></button>
            </div>
            <div class="swiper hero-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="hero-image bg-cover"
                            style="background-image: url('{{ asset('assets2/img/logo/blog.png') }}');">
                        </div>
                        <div class="container">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-xl-8">
                                    <div class="hero-content">
                                        <h6 data-animation="fadeInUp" data-delay="1.3s">
                                            Infomasi
                                        </h6>
                                        <h1 class="text-white" data-animation="fadeInUp" data-delay="1.5s">
                                            Blog
                                        </h1>
                                        <div class="hero-button">
                                            <a href="index.html" class="theme-btn" data-animation="fadeInUp"
                                                data-delay="1.59s">
                                                <span> Explore More
                                                    <i class="fas fa-chevron-right"></i></span>
                                            </a>
                                            <span class="button-text" data-animation="fadeInUp" data-delay="1.9s">
                                                <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I"
                                                    class="video-btn ripple video-popup">
                                                    <i class="fas fa-play"></i>
                                                </a>
                                                <span class="ms-4 d-line">Watch Video</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="frame-shape">
                                        <img src="{{ asset('assets2/img/hero/frame-shape.png') }}" alt="shape-img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="hero-image bg-cover"
                            style="background-image: url('{{ asset('assets2/img/logo/kajian.png') }}');">
                        </div>
                        <div class="container">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-xl-8">
                                    <div class="hero-content">
                                        <h6 data-animation="fadeInUp" data-delay="1.3s">
                                            Best Solution
                                        </h6>
                                        <h1 class="text-white" data-animation="fadeInUp" data-delay="1.5s">
                                            Kajian
                                        </h1>

                                        <div class="hero-button">
                                            <a href="" class="theme-btn" data-animation="fadeInUp"
                                                data-delay="1.59s">
                                                <span> Explore More
                                                    <i class="fas fa-chevron-right"></i></span>
                                            </a>
                                            <span class="button-text" data-animation="fadeInUp" data-delay="1.9s">
                                                <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I"
                                                    class="video-btn ripple video-popup">
                                                    <i class="fas fa-play"></i>
                                                </a>
                                                <span class="ms-4 d-line">Watch Video</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="frame-shape">
                                        <img src="{{ asset('assets2/img/hero/frame-shape.png') }}" alt="shape-img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="hero-image bg-cover"
                            style="background-image: url('{{ asset('assets2/img/logo/teknologi.png') }}');">
                        </div>
                        <div class="container">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-xl-8">
                                    <div class="hero-content">
                                        <h6 data-animation="fadeInUp" data-delay="1.3s">
                                            Kusinara
                                        </h6>
                                        <h1 class="text-white" data-animation="fadeInUp" data-delay="1.5s">
                                            Teknologi
                                        </h1>
                                        <div class="hero-button">
                                            <a href="index.html" class="theme-btn" data-animation="fadeInUp"
                                                data-delay="1.59s">
                                                <span> Explore More
                                                    <i class="fas fa-chevron-right"></i></span>
                                            </a>
                                            <span class="button-text" data-animation="fadeInUp" data-delay="1.9s">
                                                <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I"
                                                    class="video-btn ripple video-popup">
                                                    <i class="fas fa-play"></i>
                                                </a>
                                                <span class="ms-4 d-line">Watch Video</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="frame-shape">
                                        <img src="{{ asset('assets2/img/shape.png') }}" alt="shape-img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="service-details fix section-padding">
            <div class="container">
                <div class="service-details-wrapper">
                    <div class="row g-5">
                        <div class="col-12 col-lg-8">
                            <div class="service-details-items">
                                <div class="details-image">
                                    <img src="{{ asset('assets2/img/logo/newsblog.png') }}" alt="img">
                                </div>
                                <div class="details-content">
                                    <h3>Digital Marketing</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat qui ducimus
                                        illum modi? perspiciatis
                                        accusamus soluta perferendis, ad illum, nesciunt, reiciendis iusto et cupidit
                                        Repudiandae provident to
                                        consectetur, sapiente, libero iure necessitatibus corporis nulla voluptate,
                                        quisquam aut perspiciatis?
                                        Fugiat labore aspernatur eius, perspiciatis ut molestiae, delectus rem.
                                    </p>

                                    {{-- <div class="service-details-video">
                                        <div class="row g-4 align-items-center">
                                            <div class="col-lg-6">
                                                <div class="details-video-content">
                                                    <h3>Why Marketing Important ?</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="details-image-2">
                                        <div class="row g-4">
                                            <div class="col-lg-6">
                                                <img src="{{ asset('assets2/img/logo/newsblog.png') }}"
                                                    alt="img">
                                                <h4>
                                                    <a href="news-details.html">
                                                        Bermunajat Dalam Doa
                                                    </a>
                                                </h4>
                                            </div>

                                            <div class="col-lg-6">
                                                <img src="{{ asset('assets2/img/logo/newsblog.png') }}"
                                                    alt="img">
                                                <h4>
                                                    <a href="news-details.html">
                                                        Kajian Malam Jumat
                                                    </a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="main-sidebar">
                                <div class="single-sidebar-widget">
                                    <div class="wid-title">
                                        <h3>Menu</h3>
                                    </div>
                                    <div class="service-category">
                                        <a href="service-details.html" class="active">
                                            Kajian
                                            <i class="fal fa-long-arrow-right"></i>
                                        </a>
                                        <a href="service-details.html">
                                            Tulisan
                                            <i class="fal fa-long-arrow-right"></i>
                                        </a>
                                        <a href="service-details.html">
                                            Karya
                                            <i class="fal fa-long-arrow-right"></i>
                                        </a>
                                        <a href="service-details.html">
                                            Tentang
                                            <i class="fal fa-long-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="single-sidebar-widget">
                                    <div class="wid-title">
                                        <h3>Any Question For Us</h3>
                                    </div>
                                    <form action="#" id="contact-form" class="message-form">
                                        <div class="row g-3">
                                            <div class="col-lg-12">
                                                <div class="single-form-input">
                                                    <input type="text" placeholder="your name">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="single-form-input">
                                                    <input type="email" placeholder="email address">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="single-form-input">
                                                    <textarea placeholder="Enter Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <button class="theme-btn" type="submit">
                                                    <span>
                                                        Get a Free Quate
                                                        <i class="fas fa-chevron-right"></i>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--<< Footer Section Start >>-->
        <footer class="footer-section footer-bg section-padding pb-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="newsletter-area">
                            <div class="shape-1">
                                <img src="{{ asset('assets2/img/footer-shape.png') }}" alt="shape-img">
                            </div>
                            <div class="shape-2">
                                <img src="{{ asset('assets2/img/footer-shape-2.png') }}" alt="shape-img">
                            </div>
                            <div class="newsletter-title">
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">Join Our Newsletter</h2>
                                <p class="wow fadeInUp" data-wow-delay=".5s">We Provide Best Pricing package to grow
                                    your lead capture</p>
                            </div>
                            <div class="newsletter-items">
                                <div class="form-clt wow fadeInUp" data-wow-delay=".3s">
                                    <input type="text" name="email" id="email2" placeholder="Email Address">
                                </div>
                                <button class="theme-btn hover-white wow fadeInUp" data-wow-delay=".5s"
                                    type="submit">
                                    <span>Subscribe <i class="fas fa-chevron-right"></i></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-widgets-wrapper">
                    <div class="row">
                        <div class="col-xl-3 col-sm-6 col-md-6 col-lg-3 wow fadeInUp" data-wow-delay=".2s">
                            <div class="single-footer-widget">
                                <div class="widget-head">
                                    <a href="">
                                        <img src="{{ asset('assets2/img/logo/kusinaraa.jpg') }}" alt="logo-img">
                                    </a>
                                </div>
                                <div class="footer-content">
                                    <p>
                                        We believe it has the power to do <br>
                                        amazing things.
                                    </p>
                                    <span>Interested in working with us?</span> <br>
                                    <a href="mailto:info@example.com" class="link">info@example.com</a>
                                    <div class="social-icon d-flex align-items-center">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-vimeo-v"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 ps-lg-5 col-sm-6 col-md-3 col-lg-3 wow fadeInUp" data-wow-delay=".4s">
                            <div class="single-footer-widget">
                                <div class="widget-head">
                                    <h5>Quick Links</h5>
                                </div>
                                <ul class="list-items">
                                    <li>
                                        <a href="service-details.html">
                                            Services
                                        </a>
                                    </li>
                                    <li>
                                        <a href="about.html">
                                            About company
                                        </a>
                                    </li>
                                    <li>
                                        <a href="news-details.html">
                                            latest news
                                        </a>
                                    </li>
                                    <li>
                                        <a href="team.html">
                                            team member
                                        </a>
                                    </li>
                                    <li>
                                        <a href="testimonial.html">
                                            testimonials
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 ps-lg-4 col-sm-6 col-md-3 col-lg-3 wow fadeInUp" data-wow-delay=".6s">
                            <div class="single-footer-widget">
                                <div class="widget-head">
                                    <h5>My account</h5>
                                </div>
                                <ul class="list-items">
                                    <li>
                                        <a href="contact.html">
                                            Forum Support
                                        </a>
                                    </li>
                                    <li>
                                        <a href="faq.html">
                                            Help & FAQ
                                        </a>
                                    </li>
                                    <li>
                                        <a href="contact.html">
                                            Contact Us
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pricing.html">
                                            Pricing and plans
                                        </a>
                                    </li>
                                    <li>
                                        <a href="contact.html">
                                            Cookies Policy
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-sm-6 col-md-6 col-lg-3 wow fadeInUp" data-wow-delay=".8s">
                            <div class="single-footer-widget">
                                <div class="widget-head">
                                    <h5>Address:</h5>
                                </div>
                                <div class="footer-address-text">
                                    <p>
                                        570 8th Ave, New York,NY 10018
                                        United States
                                    </p>
                                    <h5>Hours:</h5>
                                    <p>
                                        9.30am – 6.30pm <br>
                                        Monday to Friday
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 ps-xl-5 col-sm-6 col-md-6 col-lg-4 wow fadeInUp" data-wow-delay=".9s">
                            <div class="single-footer-widget">
                                <div class="widget-head">
                                    <h5>Install app</h5>
                                </div>
                                <div class="footer-apps-items">
                                    <p>From App Store or Google Play</p>
                                    <div class="apps-image d-flex align-items-center">
                                        <a href="#"><img src="{{ asset('assets2/img/app-store.png') }}"
                                                alt="store-img"></a>
                                        <a href="#"><img src="{{ asset('assets2/img/google-play.png') }}"
                                                alt="store-img"></a>
                                    </div>
                                    <div class="support-text">
                                        <p>24/7 Support center</p>
                                        <h3><a href="tel:+1718-904-4450">+1718-904-4450</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="footer-wrapper d-flex align-items-center justify-content-between">
                        <p class="wow fadeInLeft color-2" data-wow-delay=".3s">
                            Copyright © 2024 <a href="/">Kusinara</a>. All Rights Reserved.
                        </p>
                        <ul class="footer-menu wow fadeInRight" data-wow-delay=".5s">
                            <li>
                                <a href="">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Support
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Privacy
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Faqs
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <a href="#" id="scrollUp" class="scroll-icon">
                    <i class="far fa-arrow-up"></i>
                </a>
            </div>
        </footer>

        <!--<< All JS Plugins >>-->
        <script src="{{ asset('assets2/js/jquery-3.7.1.min.js') }}"></script>
        <!--<< Viewport Js >>-->
        <script src="{{ asset('assets2/js/viewport.jquery.js') }}"></script>
        <!--<< Bootstrap Js >>-->
        <script src="{{ asset('assets2/js/bootstrap.bundle.min.js') }}"></script>
        <!--<< Nice Select Js >>-->
        <script src="{{ asset('assets2/js/jquery.nice-select.min.js') }}"></script>
        <!--<< Waypoints Js >>-->
        <script src="{{ asset('assets2/js/jquery.waypoints.js') }}"></script>
        <!--<< Counterup Js >>-->
        <script src="{{ asset('assets2/js/jquery.counterup.min.js') }}"></script>
        <!--<< Slick Js >>-->
        <script src="{{ asset('assets2/js/slick.min.js') }}"></script>
        <!--<< Swiper Js >>-->
        <script src="{{ asset('assets2/js/swiper-bundle.min.js') }}"></script>
        <!--<< Slick Animation Js >>-->
        <script src="{{ asset('assets2/js/slick-animation.min.js') }}"></script>
        <!--<< MeanMenu Js >>-->
        <script src="{{ asset('assets2/js/jquery.meanmenu.min.js') }}"></script>
        <!--<< Magnific Popup Js >>-->
        <script src="{{ asset('assets2/js/jquery.magnific-popup.min.js') }}"></script>
        <!--<< Wow Animation Js >>-->
        <script src="{{ asset('assets2/js/wow.min.js') }}"></script>
        <!--<< Circle Progress Js >>-->
        <script src="{{ asset('assets2/js/circle-progress.js') }}"></script>
        <!--<< Main.js >>-->
        <script src="{{ asset('assets2/js/main.js') }}"></script>
    </body>

</html>
