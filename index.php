<?php include("includes/header.php") ?>
<!-- header-section start -->
<style>
    .slider {
        margin: 0 auto;
        max-width: auto;
    }

    .slide_viewer {
        height: 760px;
        overflow: hidden;
        position: relative;
        margin-top: -45px;
    }

    .slide_group {
        height: 100%;
        position: relative;
        width: 100%;
    }

    .slide {
        display: none;
        height: 100%;
        position: absolute;
        width: 100%;
    }

    .slide:first-child {
        display: block;
    }

    .slide_buttons {
        left: 0;
        position: absolute;
        right: 0;
        text-align: center;
    }

    a.slide_btn {
        color: #474544;
        font-size: 42px;
        margin: 0 0.175em;
        -webkit-transition: all 0.4s ease-in-out;
        -moz-transition: all 0.4s ease-in-out;
        -ms-transition: all 0.4s ease-in-out;
        -o-transition: all 0.4s ease-in-out;
        transition: all 0.4s ease-in-out;
    }

    .slide_btn.active,
    .slide_btn:hover {
        color: #428CC6;
        cursor: pointer;
    }

    .directional_nav {
        height: 0px;
        margin: 0 auto;
        max-width: 940px;
        position: relative;
        top: -340px;
    }

    .previous_btn {
        bottom: 0;
        left: 100px;
        margin: auto;
        position: absolute;
        top: 0;
    }

    .next_btn {
        bottom: 0;
        margin: auto;
        position: absolute;
        right: 100px;
        top: 0;
    }

    .previous_btn,
    .next_btn {
        cursor: pointer;
        height: 65px;
        opacity: 0.5;
        -webkit-transition: opacity 0.4s ease-in-out;
        -moz-transition: opacity 0.4s ease-in-out;
        -ms-transition: opacity 0.4s ease-in-out;
        -o-transition: opacity 0.4s ease-in-out;
        transition: opacity 0.4s ease-in-out;
        width: 65px;
    }

    .previous_btn:hover,
    .next_btn:hover {
        opacity: 1;
    }

    @media only screen and (max-width: 767px) {
        .previous_btn {
            left: 50px;
        }

        .next_btn {
            right: 50px;
        }

    }

    .fs-three,
    h3,
    h3>a {
        font-size: 22px;
    }

    .company-story__part {
        border: solid 1px white;
        padding: 30px;
        border-radius: 19px;
    }

    .p1-xxl-bg2 {
        background-color: #f5c06d;
    }


    /* > Process Styles */
    .process-wrap {
        width: 55%;
        margin: 100px auto;
        margin-left: -50px
    }

    .process-main {
        width: 100%;
        min-width: 320px;
        display: flex;
    }

    .col-3 {
        width: 50%;
        position: relative;
    }

    .col-3:first-child .process-step:before {
        content: '1';
    }

    .col-3:nth-child(2) .process-step:before {
        content: '2';
    }

    .col-3:nth-child(3) .process-step:before {
        content: '3';
    }

    .col-3:last-child .process-step:before {
        content: '4';
    }

    .process-main .col-3:not(:first-child):before {
        content: "";
        display: block;
        position: absolute;
        width: 100%;
        height: 4px;
        top: 17.5px;
        left: calc(-50% + 17px);
        right: 0;
        background: #ebebeb;
        border: 2px #ebebeb solid;
        -o-transition: .8s;
        -ms-transition: .8s;
        -moz-transition: .8s;
        -webkit-transition: .8s;
        transition: .8s;
    }

    .process-step-cont {
        font-family: sans-serif;
        font-size: 16px;
        text-transform: uppercase;
        text-decoration: none;
        white-space: nowrap;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        align-content: space-between;
    }

    .process-step {
        border: 5px #ebebeb solid;
        border-radius: 100%;
        line-height: 0;
        background: #959595;
        text-align: center;
        align-items: center;
        justify-content: center;
        align-self: center;
        display: flex;
        color: #fff;
        width: 35px;
        height: 35px;
        font-weight: 700;
        margin-bottom: 7px;
        z-index: 4;
        cursor: pointer;
    }

    .process-label {
        color: #959595;
        font-weight: 600;
        width: 100%;
        text-align: center;
    }

    .process-dots {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background-color: #ebebeb;
        cursor: pointer;
    }


    .process-dot-cont {
        display: flex;
        justify-content: space-around;
        align-items: stretch;
        width: 60%;
        padding-top: 5px;
    }

    .active-step1 .col-3:first-child .process-step,
    .active-step1 .col-3:first-child .process-dots:first-child,
    .active-step1-mini2 .col-3:first-child .process-step,
    .active-step1-mini2 .col-3:first-child .process-dots:nth-child(-n+2),
    .active-step1-mini3 .col-3:first-child .process-step,
    .active-step1-mini3 .col-3:first-child .process-dots:nth-child(-n+3),
    .active-step1-mini4 .col-3:first-child .process-step,
    .active-step1-mini4 .col-3:first-child .process-dots:nth-child(-n+4) {
        background-color: #f89828;
    }

    .active-step1-mini2 .col-3:first-child .process-dots:first-child,
    .active-step1-mini3 .col-3:first-child .process-dots:nth-child(-n+2),
    .active-step1-mini4 .col-3:first-child .process-dots:nth-child(-n+3) {
        background-color: #fbcb93;
    }

    .active-step1 .col-3:first-child .process-label,
    .active-step1-mini3 .col-3:first-child .process-label,
    .active-step1-mini2 .col-3:first-child .process-label,
    .active-step1-mini4 .col-3:first-child .process-label {
        color: #f89828;
    }

    .active-step2 .col-3:first-child,
    .active-step3 .col-3:nth-child(-n+2),
    .active-step4 .col-3:nth-child(-n+3) {
        opacity: 0.5;
        /*pointer-events: none;*/
    }

    .active-step2 .col-3:first-child .process-step:before,
    .active-step3 .col-3:nth-child(-n+2) .process-step:before,
    .active-step4 .col-3:nth-child(-n+3) .process-step:before {
        content: '\2713';
        padding: 7px;
    }

    .active-step2 .col-3:nth-child(-n+2) .process-step,
    .active-step2 .col-3:nth-child(-n+2) .process-dots,
    .active-step3 .col-3:nth-child(-n+3) .process-step,
    .active-step3 .col-3:nth-child(-n+3) .process-dots,
    .active-step4 .col-3:nth-child(-n+4) .process-step,
    .active-step4 .col-3:nth-child(-n+4) .process-dots {
        background-color: #f89828;
    }

    .active-step2 .col-3:nth-child(-n+2) .process-label,
    .active-step3 .col-3:nth-child(-n+3) .process-label,
    .active-step4 .col-3:nth-child(-n+4) .process-label {
        color: #f89828;
    }

    .active-step2 .col-3:nth-child(-n+2):before,
    .active-step3 .col-3:nth-child(-n+3):before,
    .active-step4 .col-3:nth-child(-n+4):before {
        background: #f89828 !important;
    }

    @media (min-width: 991px) {
        .pb-lg-120 {
            padding-bottom: 180px !important;
        }
    }

    @media screen and (max-width: 640px) {
        .process-main {
            flex-wrap: wrap;
        }

        .col-3 {
            width: 50%;
        }

        .process-main .col-3:nth-of-type(3):not(:first-child):before {
            top: -19.5px;
            left: calc(-50% + 145px);
            transform: rotate(150deg);
        }
    }

    .our-clients .container {
        width: 100%;
        height: 35%;
        display: flex;
        align-items: center;
        overflow: hidden;
    }

    .our-clients .container ul {
        display: flex;
        flex-wrap: nowrap;
        width: 100%;
        transition: 0.3s;
    }

    .our-clients .container ul li {
        list-style: none;
        width: 40%;
        height: 100px;
        flex-shrink: 0;
        box-sizing: border-box;
        padding: 0 8px;
        margin-top: 25px;
    }

    .our-clients .container ul li p {
        background: #58585a;
        text-align: center;
        color: #fff;
        line-height: 100px;
        border-radius: 8px;
    }

    .our-clients {
        margin-top: 10px;
    }

    .get-started::after {
        position: relative;
        content: "\2192";
        display: flex;
        float: right;
        bottom: 111px;
        font-size: 70px;
        left: 80px;
        color: #9ad953;
    }


    .pb-120 {
        padding-bottom: 60px !important;
    }

    .pt-120 {
        padding-top: 60px !important;
    }
</style>


<iframe
    src="https://fxpricing.com/fx-widget/ticker-tape-widget.php?id=1,2,3,5,14,20&border=show&speed=50&click_target=blank&theme=dark&tm-cr=212529&hr-cr=FFFFFF13&by-cr=28A745&sl-cr=DC3545&flags=circle&d_mode=regular&column=&lang=en&font=Arial, sans-serif"
    width="100%" height="85" style="border: unset;margin-top:132px"></iframe>
<style type="text/css">
    #fx-pricing-widget-copyright {
        text-align: center;
        font-size: 13px;
        font-family: sans-serif;
        margin-top: 10px;
        margin-bottom: 10px;
        color: #9db2bd;
    }

    #fx-pricing-widget-copyright a {
        text-decoration: unset;
        color: #bb3534;
        font-weight: 600;
    }
</style>

<!-- hero section start-->

<!-- slider -->
<div class="slider">
    <div class="slide_viewer">
        <div class="slide_group">
            <div class="slide hero-section--secondary hero-section position-relative z-0 ">
                <div class="animation position-absolute top-0 left-0 w-100 h-100 z-n1">
                    <img src="assets/images/hero_vector.png" alt="hero_vector"
                        class="position-absolute d-none d-xxxl-flex bottom-0 end-0 previewShapeRevX" class="lazyload">
                </div>
                <div class="container">
                    <div
                        class="row pt-4 pt-lg-10 gy-12 gy-lg-0 justify-content-center justify-content-lg-between align-items-center">
                        <div class="col-lg-6 col-xxl-7">
                            <div class="hero-card p1-xxl-bg pt-xl-20 pb-xl-20 position-relative">
                                <div class="pt-xxl-10 pb-xxl-10">
                                    <div
                                        class="first d-center cus-z1 position-absolute end-0 top-0 d-none d-xxl-flex  me-lg-10 mt-lg-10">


                                    </div>
                                    <span class="heading p1-max-xxl nb4-xxl-color fs-five mb-3">Trade with a Reliable
                                        Broker - TradersEra</span>
                                    <h1 class="display-two nb4-xxl-color mb-5 mb-lg-6" style="font-size:45px" ;>Trade
                                        across FX, Indices, Commodities, Crypto and Stocks.
                                    </h1>
                                    <p class="fs-six-up fw_500 nb4-xxl-color">24/5 Dedicated Customer Support</p>
                                    <div class="d-flex mt-8">

                                        <img class="mx-4" src="images\icon\logo UTIP logo black white baground.png"
                                            alt="openai" style="height: 35px;" class="lazyload">
                                        <a href="https://tradersera.com/Installapk.php">
                                            <img style="border-radius:10px; width: 140px;
                                            height: 45px;" src="assets/images/_download APK.webp" alt="_download APK"
                                                class="lazyload"></a>
                                        <!-- <img class="mx-4" src="assets/images/icon/Equinix_logo.svg.png"
                                            alt="Equinix_logo" style="height: 40px;"> -->
                                    </div>

                                    <div
                                        class="d-inline-flex flex-wrap gap-4 gap-lg-10 align-items-center mt-8 mt-lg-10">
                                        <a href="https://private.tradersera.cfd/signup" target="blank"
                                            class="cmn-btn alt-xxl-bg fs-five nb4-xxl-bg gap-2 gap-lg-3 align-items-center py-2 px-5 py-lg-3 px-lg-6">Register
                                            <i class="ti ti-trending-up"></i></a>
                                        <a href="https://private.tradersera.cfd/signup" target="blank"
                                            class="cmn-btn link link-xxl-color fs-five  gap-2 gap-lg-3 align-items-center "><i
                                                class="ti ti-arrow-narrow-right fs-four"></i> Try demo account</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-10 col-lg-6 col-xxl-5">
                            <div class="hero-section__thumbs pb-xxl-10">
                                <img src="assets/images/526 x 394 Size.png" class="max-auto max-xxl-un" alt="banner one"
                                    class="lazyload">
                                <img src="assets/images/banner 1 resize.png" class="logo small_logo d-sm-none"
                                    alt="logo" class="lazyload">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        

        </div>
        <style>
            @media (max-width: 576px) {
                .hero-section__thumbs img {
                    width: 100%;
                    /* Ensure image fills its container */
                    height: auto;
                    /* Maintain aspect ratio */
                    display: block;
                    /* Ensure image behaves as a block element */
                    /* Add some spacing between the images if needed */
                }
            }

            @media (max-width: 576px) {
                .hero-section-2 img {
                    width: 100%;
                    height: auto;
                    display: block;
                }
            }

            .hero-section__thumbs img {
                max-width: 100%;
                /* Ensure image fills its container */
                height: auto;
                /* Maintain aspect ratio */
            }
        </style>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <div class="client_company_section py-10 p1-bg align-items-center justify-content-center">
        <!-- Swiper -->
        <div class="swiper client_company swiper-initialized swiper-horizontal swiper-pointer-events">
            <div class="swiper-wrapper align-items-center" id="swiper-wrapper-103fd5d41f551ce67" aria-live="off"
                style="transition-duration: 6000ms; transform: translate3d(-1964px, 0px, 0px);">
                <div class="swiper-slide text-center swiper-slide-duplicate" data-swiper-slide-index="0" role="group"
                    aria-label="1 / 7" style="width: 230.571px; margin-right: 50px;">
                    <img src="assets/images/icon/logo equinix logo black.png" alt="logo equinix logo black"
                        class="lazyload">
                </div>
                <div class="swiper-slide text-center swiper-slide-duplicate" data-swiper-slide-index="1" role="group"
                    aria-label="2 / 7" style="width: 230.571px; margin-right: 50px;">
                    <img src="assets/images/icon/logo UTIP logo black.png" alt="logo UTIP logo black" class="lazyload">
                </div>
                <div class="swiper-slide text-center swiper-slide-duplicate swiper-slide-duplicate-prev"
                    data-swiper-slide-index="2" role="group" aria-label="3 / 7"
                    style="width: 230.571px; margin-right: 50px;">
                    <img src="assets/images/icon/logo marketcheese logo black.png" alt="logo marketcheese logo black"
                        class="lazyload">
                </div>
                <div class="swiper-slide text-center swiper-slide-duplicate swiper-slide-duplicate-active"
                    data-swiper-slide-index="3" role="group" aria-label="4 / 7"
                    style="width: 230.571px; margin-right: 50px;">
                    <img src="assets/images/icon/logo SSL secured logo black.png" alt="logo SSL secured logo black "
                        class="lazyload">
                </div>
                <div class="swiper-slide text-center swiper-slide-duplicate swiper-slide-duplicate-next"
                    data-swiper-slide-index="4" role="group" aria-label="5 / 7"
                    style="width: 230.571px; margin-right: 50px;">
                    <img src="assets/images/icon/logo trading view logo black.png" alt="logo trading view logo black"
                        class="lazyload">
                </div>
                <div class="swiper-slide text-center" data-swiper-slide-index="0" role="group" aria-label="1 / 7"
                    style="width: 230.571px; margin-right: 50px;">
                    <img src="assets/images/icon/logo equinix logo black.png" alt="logo equinix logo black"
                        class="lazyload">
                </div>
                <div class="swiper-slide text-center" data-swiper-slide-index="1" role="group" aria-label="2 / 7"
                    style="width: 230.571px; margin-right: 50px;">
                    <img src="assets/images/icon/logo UTIP logo black.png" alt="logo UTIP logo black" class="lazyload">
                </div>
                <div class="swiper-slide text-center swiper-slide-prev" data-swiper-slide-index="2" role="group"
                    aria-label="3 / 7" style="width: 230.571px; margin-right: 50px;">
                    <img src="assets/images/icon/logo marketcheese logo black.png" alt="logo marketcheese  logo black"
                        class="lazyload">
                </div>
                <div class="swiper-slide text-center swiper-slide-active" data-swiper-slide-index="3" role="group"
                    aria-label="4 / 7" style="width: 230.571px; margin-right: 50px;">
                    <img src="assets/images/icon/logo investor in people logo black.png"
                        alt="logo investor in people logo black" class="lazyload">
                </div>
                <div class="swiper-slide text-center swiper-slide-next" data-swiper-slide-index="4" role="group"
                    aria-label="5 / 7" style="width: 230.571px; margin-right: 50px;">
                    <img src="assets/images/icon/logo trading view logo black.png" alt="logo trading view logo black"
                        class="lazyload">
                </div>
                <div class="swiper-slide text-center swiper-slide-duplicate" data-swiper-slide-index="0" role="group"
                    aria-label="1 / 7" style="width: 230.571px; margin-right: 50px;">
                    <img src="assets/images/icon/logo equinix logo black.png" alt="logo equinix logo black"
                        class="lazyload">
                </div>
                <div class="swiper-slide text-center swiper-slide-duplicate" data-swiper-slide-index="1" role="group"
                    aria-label="2 / 7" style="width: 230.571px; margin-right: 50px;">
                    <img src="assets/images/icon/logo UTIP logo black.png" alt="logo UTIP logo black" class="lazyload">
                </div>
                <div class="swiper-slide text-center swiper-slide-duplicate swiper-slide-duplicate-prev"
                    data-swiper-slide-index="2" role="group" aria-label="3 / 7"
                    style="width: 230.571px; margin-right: 50px;">
                    <img src="assets/images/icon/logo marketcheese logo black.png" alt="logo marketcheese  logo black"
                        class="lazyload">
                </div>
                <div class="swiper-slide text-center swiper-slide-duplicate swiper-slide-duplicate-active"
                    data-swiper-slide-index="3" role="group" aria-label="4 / 7"
                    style="width: 230.571px; margin-right: 50px;">
                    <img src="assets/images/icon/logo investor in people logo black.png" alt="people logo black"
                        class="lazyload">
                </div>
                <div class="swiper-slide text-center swiper-slide-duplicate swiper-slide-duplicate-next"
                    data-swiper-slide-index="4" role="group" aria-label="5 / 7"
                    style="width: 230.571px; margin-right: 50px;">
                    <img src="assets/images/icon/logo trading view logo black.png" alt="view logo black"
                        class="lazyload">
                </div>
            </div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        </div>
    </div>

    <style>
        @media (max-width: 576px) {
            .client_company_section {
                margin-top: 30px;
                /* Adjust this value as needed */
            }
        }
    </style>

    <!--Trade On start-->
    <section class="pt-120 pb-120" style="background-color: #000;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xxl-7">
                    <div class="heading__content mb-10 mb-lg-15 text-center">
                        <!-- <span class="heading p1-color fs-five mb-5">Global Trust, Unbeatable Rates</span> -->
                        <h2 class="mb-5 mb-lg-6">Benefits with TradersEra
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row gy-15 gy-lg-0 justify-content-center align-items-center">
                <div class="col-sm-10 col-lg-6 col-xxl-6">
                    <div class="row d-flex justify-content-end">
                        <div class="col-xxl-12">
                            <div class="company-story__part">
                                <div class="row">
                                    <div class="col-lg-2 d-flex align-items-center">
                                        <img src="assets/images/icon/seesaw.png" alt="seesaw" class="lazyload">
                                    </div>
                                    <div class="col-lg-10 d-flex align-items-center">
                                        <div class="row">
                                            <h3 class="">Multiple Assets Under One Roof
                                            </h3>
                                            <span>Multiple options of trading like Forex, Crypto, Stocks, Indices and
                                                commodities.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-12 mt-8 mt-md-10 mt-xxl-13">
                            <div class="company-story__part d-flex align-items-sm-center flex-column flex-sm-row">
                                <div class="row">
                                    <div class="col-lg-2 d-flex align-items-center">
                                        <img src="assets/images/icon/chart.png" alt="candlestick-chart"
                                            class="lazyload">
                                    </div>
                                    <div class="col-lg-10 d-flex align-items-center">
                                        <div class="row">
                                            <h3 class="">Easy Funding Methods
                                            </h3>
                                            <span>Local and international funding options for better trading.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-12 mt-8 mt-md-10 mt-xxl-13">
                            <div class="company-story__part d-flex align-items-sm-center flex-column flex-sm-row">
                                <div class="row">
                                    <div class="col-lg-2 d-flex align-items-center">
                                        <img src="assets/images/icon/Web-Platform.png" alt="Web-Platform"
                                            class="lazyload">
                                    </div>
                                    <div class="col-lg-10 d-flex align-items-center">
                                        <div class="row">
                                            <h3 class="">Free Market Forecast</h3>
                                            <span>Learn and understand the market better with our free market forecast.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10 col-lg-6 col-xxl-6 ">
                    <div class="row d-flex justify-content-end">
                        <div class="col-xxl-12 ">
                            <div class="company-story__part">
                                <div class="row">
                                    <div class="col-lg-2 d-flex align-items-center">
                                        <img src="assets/images/icon/Multiple Funding.png" alt="Multiple Funding"
                                            class="lazyload">
                                    </div>
                                    <div class="col-lg-10 d-flex align-items-center">
                                        <div class="row">
                                            <h3 class="">Web Platform</h3>
                                            <span> No download, trade with anywhere on any device.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-12 mt-md-10 mt-xxl-13">
                            <div class="company-story__part d-flex align-items-sm-center flex-column flex-sm-row">
                                <div class="row">
                                    <div class="col-lg-2 d-flex align-items-center">
                                        <img src="assets/images/icon/active-user.png" alt="active-user"
                                            class="lazyload">
                                    </div>
                                    <div class="col-lg-10 d-flex align-items-center">
                                        <div class="row">
                                            <h3 class=""> Trade With Top Platform</h3>
                                            <span>UTIP is one of the best platforms in the market

                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-12 mt-8 mt-md-10 mt-xxl-13">
                            <div class="company-story__part d-flex align-items-sm-center flex-column flex-sm-row">
                                <div class="row">
                                    <div class="col-lg-2 d-flex align-items-center">
                                        <img src="assets/images/icon/24-hours-support.png" alt="24-hours-support"
                                            class="lazyload">
                                    </div>
                                    <div class="col-lg-10 d-flex align-items-center">
                                        <div class="row">
                                            <h3 class="">24/5 Customer Support</h3>
                                            <span>Team available for all your trading support
                                            </span>
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

    <!-- section 3-->

    <section class="pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xxl-7">
                    <div class="heading__content mb-10 mb-lg-15 text-center">
                        <h2 class="mb-5 mb-lg-6">Peace of Mind with TradersEra</h2>
                    </div>
                </div>
            </div>

            <div class="row gy-15 gy-lg-0 justify-content-center align-items-center">
                <div class="col-sm-6 col-lg-3 col-xxl-3 text-center">
                    <div class="company-story__part1 mb-lg-6">
                        <img src="images/icon/withdrawal.png" class="img-fluid medium-image" alt="Quick Withdrawals"
                            class="lazyload">
                        <div class="mt-4">
                            <h3 class="mb-3">Quick Withdrawals</h3>
                            <span>Simple access to your money at all times and places</span>
                        </div>
                    </div>

                    <div class="company-story__part1 mt-15">
                        <img src="images/icon/compatibility.png" class="img-fluid medium-image" alt="High Compatibility"
                            class="lazyload">
                        <div class="mt-4">
                            <h3 class="mb-3">True ECN Technology
                            </h3>
                            <span>Access the market directly and use any strategies.
                            </span>
                        </div>
                    </div>
                </div>


                <div class="col-sm-6 col-lg-6 col-xxl-6 text-center">
                    <img src="assets/images/features of tradersera - section 3.webp" class="img-fluid medium-image"
                        style="border: none;" alt="Middle Image" class="lazyload">
                </div>


                <div class="col-sm-6 col-lg-3 col-xxl-3 text-center">
                    <div class="company-story__part1 mb-lg-6">
                        <img src="images/icon/stable.png" class="img-fluid medium-image" alt="Low and stable spreads"
                            class="lazyload">
                        <div class="mt-4">
                            <h3 class="mb-3">Lowest spreads</h3>
                            <span>Stable trading with tight spreads starting from 0 pips.</span>
                        </div>
                    </div>

                    <div class="company-story__part1 mt-15">
                        <img src="images/icon/fundingoptions.png" class="img-fluid medium-image"
                            alt="Multiple Funding Options" class="lazyload">
                        <div class="mt-4">
                            <h3 class="mb-3">Multiple Funding Options</h3>
                            <span>Choose a method that works for you and start trading.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .medium-image {
            max-width: 350px;
        }
    </style>



    <section class="provide-world pt-120 position-relative z-0 mb-10 pb-120" style="background-color: #000;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-xxl-10">
                    <div class="heading__content mb-10 mb-lg-15 text-center">
                        <h2 class="mb-5 mb-lg-6">Open an account in 4 simple steps
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row gy-6 gy-xxl-0">
                <div class="col-md-6 col-xxl-3">
                    <div class="provide-world__card nb3-bg text-center cus-rounded-1 py-5 py-lg-10 px-4 px-lg-9">
                        <span class="provide-card__icon d-center nb4-bg p-4 rounded-circle mx-auto">
                            <img src="assets/images/icon/number-1.png" alt="number-1" class="lazyload">
                        </span>
                        <h3 class="mt-5 mb-5">Register</h3>
                        <p>Sign up using your personal details and login to dashboard.</p>

                    </div>
                </div>
                <div class="col-md-6 col-xxl-3">
                    <div class="provide-world__card nb3-bg text-center cus-rounded-1 py-5 py-lg-10 px-4 px-lg-9">
                        <span class="provide-card__icon d-center nb4-bg p-4 rounded-circle mx-auto">
                            <img src="assets/images/icon/two.png" alt="two" class="lazyload">
                        </span>
                        <h3 class="mt-5 mb-5">Verify</h3>
                        <p>Submit your KYC documents and get verified.

                        </p> <br>

                    </div>
                </div>
                <div class="col-md-6 col-xxl-3">
                    <div class="provide-world__card nb3-bg text-center cus-rounded-1 py-5 py-lg-10 px-4 px-lg-9">
                        <span class="provide-card__icon d-center nb4-bg p-4 rounded-circle mx-auto">
                            <img src="assets/images/icon/number-3.png" alt="number-3" class="lazyload">
                        </span>
                        <h3 class="mt-5 mb-5">Fund</h3>
                        <p>Fund your trading account using a wide range of funding methods.</p>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-3">
                    <div class="provide-world__card nb3-bg text-center cus-rounded-1 py-5 py-lg-10 px-4 px-lg-9">
                        <span class="provide-card__icon d-center nb4-bg p-4 rounded-circle mx-auto">
                            <img src="assets/images/icon/number-4.png" alt="number-4" class="lazyload">
                        </span>
                        <h3 class="mt-5 mb-5">Trade</h3>
                        <p>Start trading using UTIP platform.</p>
                        <br>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="container ">
                <div
                    class="start-earning nb3-bg cus-rounded-2 d-flex align-items-center p-4 p-sm-6 p-md-10 p-lg-15 p-xl-20 pe-lg-6 pe-xl-16 overflow-hidden position-relative">
                    <div class="vector_effect position-absolute d-center justify-content-end end-0  d-flex gap-20">
                        <img src="assets/images/star2.png" alt="star2" class="d-none d-xxl-flex push_animat"
                            class="lazyload">
                        <img src="assets/images/star_focus.png" alt="star_focus"
                            class="d-none d-sm-flex rotate time_dur ms-auto ms-lg-0 me-md-5" class="lazyload">
                    </div>
                    <div class="row gy-6 w-100 text-center text-sm-start align-items-center justify-content-sm-between">
                        <div class="col-sm-8">
                            <h4>Start Trading today with TradersEra with $50</h4>
                            <p class="fs-six-up fw_500 mt-5">Trade & Learn Risk Free with our Free DEMO Account on UTIP
                                Platform.
                            </p>
                        </div>
                        <div class="col-sm-4 text-sm-end">
                            <a href="https://private.tradersera.cfd/signup"
                                class="cmn-btn secondary-alt ms-auto fs-five nb4-xxl-bg gap-2 align-items-center  py-2 px-4 py-lg-3 px-lg-5"
                                target="blank">Open
                                An
                                Account <i class="ti ti-arrow-right fs-four"></i></a>
                        </div>
                    </div>
                </div>
            </div>
    </section>
  
    <!-- Trade On end -->
    <section class="provide-world pt-120 pb-120  position-relative z-0">
        <div class="animation position-absolute top-0 left-0 w-100 h-100 z-n1">
            <img src="assets/images/vector.png" alt="vector"
                class="position-absolute top-0 pt-120 ms-20 ps-xxl-20 jello d-none d-xl-flex" class="lazyload">
            <img src="assets/images/vector9.png" alt="vector9"
                class="position-absolute rotate top-0 end-0 p-20 mt-5 me-7 d-none d-xxxl-flex" class="lazyload">
            <!-- <img src="assets/images/vector_rocket1.png" alt="vector_rocket1"
                class="position-absolute bottom-0 start-0 d-none d-xxxl-flex pb-120 mb-10 ms-20 fadeInTopRight" class="lazyload"> -->
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xxl-7">
                    <div class="heading__content mb-10 mb-lg-15 text-center">
                        <h2 class="">Markets Data</h2>
                        <br>

                    </div>
                </div>
            </div>
            <div class="row gy-6 gy-xxl-0">
                <div class="col-12">
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container" style="margin-top: 0px;">
                        <div class="tradingview-widget-container__widget"></div>
                        <script type="text/javascript"
                            src="https://s3.tradingview.com/external-embedding/embed-widget-market-quotes.js" async>
                                {
                                    "width": "100%",
                                        "height": 800,
                                            "symbolsGroups": [
                                                {
                                                    "name": "Forex",
                                                    "originalName": "Forex",
                                                    "symbols": [
                                                        {
                                                            "name": "FX:EURUSD",
                                                            "displayName": "EUR to USD"
                                                        },
                                                        {
                                                            "name": "FX:GBPUSD",
                                                            "displayName": "GBP to USD"
                                                        },
                                                        {
                                                            "name": "FX:USDJPY",
                                                            "displayName": "USD to JPY"
                                                        },
                                                        {
                                                            "name": "FX:USDCHF",
                                                            "displayName": "USD to CHF"
                                                        },
                                                        {
                                                            "name": "FX:AUDUSD",
                                                            "displayName": "AUD to USD"
                                                        },
                                                        {
                                                            "name": "FX:USDCAD",
                                                            "displayName": "USD to CAD"
                                                        },
                                                        {
                                                            "name": "FX:USDCHF",
                                                            "displayName": "USD to CHF"
                                                        }
                                                    ]
                                                },
                                                {
                                                    "name": "Commodity",
                                                    "symbols": [
                                                        {
                                                            "name": "OANDA:XAUUSD",
                                                            "displayName": "GOLD"
                                                        },
                                                        {
                                                            "name": "OANDA:XAGUSD",
                                                            "displayName": "SILVER"
                                                        },
                                                        {
                                                            "name": "TVC:USOIL",
                                                            "displayName": "USOIL"
                                                        },
                                                        {
                                                            "name": "TVC:UKOIL",
                                                            "displayName": "UKOIL"
                                                        },
                                                        {
                                                            "name": "FOREXCOM:NATURALGAS",
                                                            "displayName": "NGAS"
                                                        },
                                                        {
                                                            "name": "ACTIVTRADES:COCOAK2024",
                                                            "displayName": "COCOA"
                                                        },
                                                        {
                                                            "name": "ACTIVTRADES:COTTONK2024",
                                                            "displayName": "COTTON"
                                                        }
                                                    ]
                                                },
                                                {
                                                    "name": "Indices",
                                                    "symbols": [
                                                        {
                                                            "name": "CAPITALCOM:US100",
                                                            "displayName": "US100"
                                                        },
                                                        {
                                                            "name": "PEPPERSTONE:US500",
                                                            "displayName": "US500"
                                                        },
                                                        {
                                                            "name": "TVC:UKX",
                                                            "displayName": "UK 100"
                                                        },
                                                        {
                                                            "name": "PEPPERSTONE:JPN225",
                                                            "displayName": "JPN225"
                                                        },
                                                        {
                                                            "name": "PEPPERSTONE:HK50",
                                                            "displayName": "HONGKONG"
                                                        },
                                                        {
                                                            "name": "NSE:NIFTY",
                                                            "displayName": "INDIA NSE"
                                                        },
                                                        {
                                                            "name": "PEPPERSTONE:US30",
                                                            "displayName": "US30"
                                                        },
                                                        {
                                                            "name": "TVC:VIX",
                                                            "displayName": "GLOBAL VIX"
                                                        }
                                                    ]
                                                },
                                                {
                                                    "name": "Stocks",
                                                    "symbols": [
                                                        {
                                                            "name": "NASDAQ:AAPL",
                                                            "displayName": "APPLE"
                                                        },
                                                        {
                                                            "name": "NASDAQ:GOOGL",
                                                            "displayName": "GOOGLE"
                                                        },
                                                        {
                                                            "name": "NASDAQ:TSLA",
                                                            "displayName": "TESLA"
                                                        },
                                                        {
                                                            "name": "NASDAQ:AMZN",
                                                            "displayName": "AMAZON"
                                                        },
                                                        {
                                                            "name": "NASDAQ:MSFT",
                                                            "displayName": "MICROSOFT"
                                                        },
                                                        {
                                                            "name": "NASDAQ:NFLX",
                                                            "displayName": "NETFLIX"
                                                        }
                                                    ]
                                                },
                                                {
                                                    "name": "Crypto",
                                                    "symbols": [
                                                        {
                                                            "name": "BINANCE:BTCUSDT"
                                                        },
                                                        {
                                                            "name": "BITSTAMP:BTCUSD"
                                                        },
                                                        {
                                                            "name": "BINANCE:DOGEUSDT"
                                                        },
                                                        {
                                                            "name": "BITSTAMP:ETHUSD"
                                                        },
                                                        {
                                                            "name": "COINBASE:SOLUSD"
                                                        },
                                                        {
                                                            "name": "BINANCE:XRPUSDT"
                                                        },
                                                        {
                                                            "name": "BINANCE:NEARUSDT"
                                                        }
                                                    ]
                                                }
                                            ],
                                                "showSymbolLogo": true,
                                                    "isTransparent": false,
                                                        "colorTheme": "dark",
                                                            "locale": "en",
                                                                "backgroundColor": "#131722"
                                }
                            </script>
                    </div>
                    <!-- TradingView Widget END -->
                </div>
            </div>
        </div>
    </section>


    <style>
        /* Basic reset for the button */
        .btn-1 {
            border: none;
            padding: 0;
            background: none;
            cursor: pointer;
        }

        /* Style for the link inside the button */
        .btn-1 a {
            display: inline-block;
            text-decoration: none;
            color: #fff;
            /* White text */
            background-color: #000000;
            /* Blue background */
            padding: 13px 23px;
            /* Padding around the text */
            border-radius: 10px;
            /* Rounded corners */
            font-size: 18px;
            /* Font size */

            transition: background-color 0.3s ease, transform 0.2s ease;
            /* Smooth transition for hover effects */
        }

        /* Hover effect */
        .btn-1 a:hover {
            color: #000000;
            /* White text */
            background-color: #f5c06d;
            /* Darker blue */
            transform: scale(1.05);
            /* Slightly enlarge the button */
        }

        /* Icon style */
        .btn-1 i {
            margin-left: 8px;
            /* Space between text and icon */
            font-size: 20px;
            /* Icon size */
        }

        .btn-2 {
            font-size: 20px;
            /* Font size */
        }
    </style>


    <section class="worldwide alt-color p1-bg pseudo_element_after">
        <div class="animation vector position-absolute top-0 left-0 w-100 h-100 z-n1">
            <!-- <img src="assets/images/cross.png" alt="cross"
            class="position-absolute push_animat ms-lg-20 ps-4 top-0 pt-120 mt-20 start-0 d-none d-xxxl-flex" class="lazyload"> -->
            <img src="assets/images/star.png" alt="star"
                class="position-absolute push_animat end-0 top-0 mt-20 pt-xl-15 me-xl-20 pe-10 d-none d-md-flex"
                class="lazyload">
            <img src="assets/images/vector2.png" alt="vector2"
                class="position-absolute bottom-0 start-0 d-none d-xxxl-flex" class="lazyload">
            <!-- <img src="assets/images/vector_rocket2.png" alt="vector_rocket2"
            class="position-absolute d-none d-xxxl-flex bottom-0 end-0  pe-12 pb-10 fadeInTopLeft" class="lazyload"> -->
            <!-- <img src="assets/images/cross2.png" alt="cross2"
            class="position-absolute push_animat ms-lg-20 ps-4 top-0 start-50 pt-120 mt-20 d-none d-xxxl-flex"> -->
        </div>
        <div class="container position-relative">
            <div class="row gy-10 gy-lg-0 justify-content-center justify-content-lg-between align-items-end">
                <div class="col-lg-6 col-xxl-5 pt-xl-20">
                    <div class="trade_on__content me-xl-10 pt-120 pb-0 pb-lg-120">
                        <span class="heading p1-color fs-six mb-5"></span>
                        <h2 class="mb-4 mb-lg-5" style="font-size: 32px;">Trade Anywhere, Anytime with Web Trader</h2>
                        <p class="mx-ch">Don't let trading opportunities slip away.</p>
                        <br>
                        <p class="mx-ch">Download the TradersEra Trader app for commission-free trading and ultra-low
                            spreads on major FX pairs and gold.</p>
                        <br>
                        <p class="mx-ch">All you require in a single app.</p>
                        <br>



                        <div class="d-inline-flex flex-wrap gap-4 gap-lg-10 align-items-center mt-8 mt-lg-10">
                            <button class="btn-1"><a href="https://private.tradersera.cfd/signup" target="_blank">
                                    Register
                                </a></button>

                            <a href="https://private.tradersera.cfd/signup" target="_blank" class="btn-2">
                                <i class="ti ti-arrow-narrow-right fs-four"></i> Try demo account
                            </a>
                        </div>


                    </div>
                </div>
                <div class="col-8 col-sm-7 col-lg-6 col-xxl-5">
                    <div class="worldwide_thumb d-flex ms-lg-15 ms-xl-0">
                        <img src="assets/images/tradersera logo inside phone 2.png" class="max-xl-un"
                            alt="TradersEra Trading app " class="lazyload">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container pb-120" style="margin-top: 70px; ">
            <div class="row gy-15 gy-lg-0 justify-content-center align-items-center">
                <div class="col-sm-10 col-lg-6 col-xxl-5 order-2 order-lg-0">
                    <div class="company-story__thumbs d-center">
                        <img src="assets/images/Multiple Funding Options Home.webp" class="cus-rounded-1 w-100"
                            alt="TradersEra's Visa, Mastercard, wire transfer, or crypto  your funding "
                            class="lazyload">
                    </div>
                </div>
                <div class="col-lg-6 col-xxl-7">
                    <div class="row ms-xl-3 ms-xxl-10">
                        <div class="col-xxl-12">
                            <div class="">
                                <h2 class="mb-3 mt-5" style="font-size: 32px;">Multiple Funding Options</h2>
                                <br>
                                <p>
                                    TradersEra offers a variety of funding options to accommodate different trading
                                    needs. From traditional bank transfers to modern e-wallet solutions, traders can
                                    choose the method that best suits them. This flexibility ensures a seamless and
                                    convenient funding experience for all users.


                                </p>
                                <br>
                            </div>
                        </div>
                        <ul class=" d-flex   gap-md-3 mt-4">
                            <li><img style=" height:35px;" src="assets/images/icon/a. visa white _logo.png" alt="visa"
                                    class="lazyload">
                            </li>
                            <li><img style=" height:35px;" src="assets/images/icon/a. mastercard.png" alt=" mastercard"
                                    class="lazyload">
                            </li>
                            <li><img style=" height:35px;" src="assets/images/icon/a.bitcoin-logo.png" alt="bitcoin"
                                    class="lazyload">
                            </li>
                            <li><img style=" height:35px;" src="assets/images/icon/Tether.png" alt="Tether"
                                    class="lazyload"></li>
                            <li><img style=" height:35px;" src="assets/images/icon/Perfect-Money- white logo.png"
                                    alt="Perfect" class="lazyload"></li>
                            <li><img style=" height:35px;" src="assets/images/icon/a. Wire Transfer white logo.png"
                                    alt="Wire" class="lazyload"></li>
                            <li><img style=" height:35px;" src="assets/images/icon/upi.webp" alt="Payment"
                                    class="lazyload"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        $('.slider').each(function () {
            var $this = $(this);
            var $group = $this.find('.slide_group');
            var $slides = $this.find('.slide');
            var bulletArray = [];
            var currentIndex = 0;
            var timeout;
            var animationDuration = 1200; // Adjust this value to control the animation speed
            function move(newIndex) {
                var animateLeftFirst, slideLeftFirst, animateLeftSecond, slideLeftSecond;
                advance();
                if ($group.is(':animated') || currentIndex === newIndex) {
                    return;
                }
                bulletArray[currentIndex].removeClass('active');
                bulletArray[newIndex].addClass('active');
                if (newIndex > currentIndex) {
                    slideLeftFirst = '50%';
                    animateLeftFirst = '0%';
                    slideLeftSecond = '50%';
                    animateLeftSecond = '0%';
                } else {
                    slideLeftFirst = '-100%';
                    animateLeftFirst = '0%';
                    slideLeftSecond = '-50%';
                    animateLeftSecond = '0%';
                }
                $slides.eq(newIndex).css({
                    display: 'block',
                    left: slideLeftSecond
                });
                $group.animate({
                    left: animateLeftFirst
                }, animationDuration);
                $slides.eq(newIndex).animate({
                    left: 0
                }, animationDuration);
                $slides.eq(currentIndex).css({
                    display: 'none',
                    left: 0
                });
                currentIndex = newIndex;
            }
            function advance() {
                clearTimeout(timeout);
                timeout = setTimeout(function () {
                    if (currentIndex < ($slides.length - 1)) {
                        move(currentIndex + 1);
                    } else {
                        move(0);
                    }
                }, 7000); // Timeout between slides
            }
            $('.next_btn').on('click', function () {
                if (currentIndex < ($slides.length - 1)) {
                    move(currentIndex + 1);
                } else {
                    move(0);
                }
            });
            $('.previous_btn').on('click', function () {
                if (currentIndex !== 0) {
                    move(currentIndex - 1);
                } else {
                    move($slides.length - 1);
                }
            });
            $.each($slides, function (index) {
                var $button = $('<a class="slide_btn">&bull;</a>');

                if (index === currentIndex) {
                    $button.addClass('active');
                }
                $button.on('click', function () {
                    move(index);
                }).appendTo('.slide_buttons');
                bulletArray.push($button);
            });
            advance();
        });
        /**This is just a demo to add the process classes**/
        $(document).ready(function ($) {
            $(".process-step").click(function () {
                var theClass = $(this).attr("class").match(/(^|\s)step-\S+/g);
                var bute = $.trim(theClass);
                switch (bute) {
                    case "step-1":
                        $(".process-wrap").addClass("active-step1")
                        break;
                    case 'step-2':
                        $(".process-wrap").attr('class', 'process-wrap');
                        $(this).parents(".process-wrap").addClass("active-step2")
                        break;
                    case 'step-3':
                        $(".process-wrap").attr('class', 'process-wrap');
                        $(this).parents(".process-wrap").addClass("active-step3")
                        break;
                    case 'step-4':
                        $(".process-wrap").attr('class', 'process-wrap');
                        $(this).parents(".process-wrap").addClass("active-step4 ")
                        break;
                    default:
                        $(".process-wrap").attr('class', 'process-wrap');
                }
            })
            $(".process-dots").click(function () {
                if ($(this).hasClass("ship-process-dot-1")) {
                    $(".process-wrap").attr('class', 'process-wrap active-step1')
                    $(this).parents().find(".process-wrap").addClass("active-step1")

                }
                if ($(this).hasClass("ship-process-dot-2")) {
                    $(".process-wrap").attr('class', 'process-wrap active-step1')
                    $(this).parents().find(".process-wrap").addClass("active-step1-mini2")

                }
                if ($(this).hasClass("ship-process-dot-3")) {
                    $(".process-wrap").attr('class', 'process-wrap active-step1')
                    $(this).parents().find(".process-wrap").addClass("active-step1-mini3")

                }
                if ($(this).hasClass("ship-process-dot-4")) {
                    $(".process-wrap").attr('class', 'process-wrap active-step1')
                    $(this).parents().find(".process-wrap").addClass("active-step1-mini4")
                }
            });
        });
        //  script our partners start slider
        var clientSlider = document.getElementById('client-slider');
        var clientList = clientSlider.getElementsByTagName('li');
        setInterval(() => {
            clientSlider.style.transform = "translateX(-20%)";
        }, 3000);
        clientSlider.addEventListener('transitionend', function () {
            clientSlider.appendChild(clientSlider.firstElementChild);
            clientSlider.style.transition = "none";
            clientSlider.style.transform = "translateX(0)";
            setTimeout(() => {
                clientSlider.style.transition = "0.3s";
            });
        })
        // script our partners end slider
    </script>

    <!-- schema -->

    <script type="application/ld+json">
{
  "@context": "https://schema.org/", 
  "@type": "Product",
"name": "Tradersera",
  "image": "https://tradersera.com/assets/images/logo.png",
  "brand": {
    "@type": "Brand",
    "name": "Forex Traders"
},
  "review": {
    "@type": "Review",
    "name": "Suraj Patel",
    "reviewBody": "excellent experience",
    "reviewRating": {
      "@type": "Rating",
      "ratingValue": "5",
      "bestRating": "5",
      "worstRating": "1"
    },
    "datePublished": "2024-08-01",
    "author": {"@type": "Person", "name": "tradersera"}
  }
}
</script>


    <?php include("includes/footer.php") ?>