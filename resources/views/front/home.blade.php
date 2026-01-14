@extends('layouts.front')

@section('title', 'Home - Cunnet Agency')

@section('content')

    <div class="tp-hero-area tp-title-middle-wrap tp-hero-spacing p-relative">
        <div class="container">
            <div class="tp-hero-content-wrap">
                <div class="row">
                    <div class="col-12">
                        <div class="tp-hero-title-wrap text-center mb-40 tp_fade_anim" data-delay=".4">
                            <h2 class="tp-hero-title tp-title-middle-animetion tp-ff-sequel-bold-head">Cunnet Agency</h2>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-5">
                        <div class="tp-hero-dec-wrap mb-30 tp_fade_anim" data-delay=".5">
                            <p class="tp-hero-dec">
                                <span class="tp-hero-shape">
                                    <svg width="32" height="23" viewBox="0 0 32 23" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10 3C10.3395 8.37596 14.624 12.6605 20 13C14.624 13.3395 10.3395 17.624 10 23C9.66052 17.624 5.37596 13.3395 0 13C5.37596 12.6605 9.66052 8.37596 10 3Z"
                                            fill="currentColor" />
                                        <path
                                            d="M25 0C25.2376 3.76317 28.2368 6.76236 32 7C28.2368 7.23765 25.2376 10.2368 25 14C24.7624 10.2368 21.7632 7.23765 18 7C21.7632 6.76236 24.7624 3.76317 25 0Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                We build websites, apps &<br>
                                campaigns that actually move the<br>
                                needle for growing brands.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-7">
                        <div class="tp-hero-btn mb-30 d-flex flex-wrap gap-2 justify-content-md-center">
                            <div class="tp_fade_anim" data-delay=".6" data-fade-from="bottom" data-ease="bounce">
                                <a class="tp-btn" href="#">
                                    <span>
                                        <span class="text-1">Explore All Work</span>
                                        <span class="text-2">Explore All Work</span>
                                    </span>
                                </a>
                            </div>
                            <div class="tp_fade_anim" data-delay=".7" data-fade-from="bottom" data-ease="bounce">
                                <a class="tp-btn tp-btn-grey" href="#">
                                    <span>
                                        <span class="text-1">Contact Me</span>
                                        <span class="text-2">Contact Me</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 text-end">
                        <div class="tp-hero-social ml-100 mb-30 tp_fade_anim" data-delay=".8" data-fade-from="bottom"
                            data-ease="bounce">
                            <a href="#">Facebook</a>
                            <a href="#">LinkedIn</a>
                            <a href="#">Twitter</a>
                            <a href="#">Instagram</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper tp-hero-slider-active pt-170">
            <div class="swiper-wrapper slide-transtion">
                <div class="swiper-slide">
                    <div class="background-img">
                        <a href="#">
                            <img src="{{ asset('assets/img/hero/thumb.jpg') }}" alt="Studio">
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="background-img">
                        <a href="#">
                            <img src="{{ asset('assets/img/hero/thumb-2.jpg') }}" alt="Beauty">
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="background-img">
                        <a href="#">
                            <img src="{{ asset('assets/img/hero/thumb-3.jpg') }}" alt="Beauty">
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="background-img">
                        <a href="#">
                            <img src="{{ asset('assets/img/hero/thumb-4.jpg') }}" alt="Beauty">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="tp-about-area">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-xxl-10 col-xl-12">
                    <div class="tp-about-title-wrap mb-30">
                        <h2 class="tp-section-title tp-text-perspective">At cunnet, we don’t just build website<br>
                            or campaigns we craft purpose-driven
                            digital journeys.
                            <span class="tp-about-btn-transform d-inline-block ml-20">
                                <a class="tp-btn tp-ff-inter" href="#">
                                    <span>
                                        <span class="text-1">About Us</span>
                                        <span class="text-2">About Us</span>
                                    </span>
                                </a>
                            </span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="tp-about-border mt-20 pt-55">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="tp-about-subtitle-wrap mb-30">
                            <span class="tp-about-subtitle">
                                About Us
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="tp-about-thumb-wrap ml-75">
                            <div class="row gx-80">
                                <div class="col-lg-6 col-md-6">
                                    <div class="tp-about-item anim-zoomin-wrap mb-40">
                                        <div class="mb-35">
                                            <div class="tp-about-thumb fix anim-zoomin">
                                                <img data-speed=".8" src="{{ asset('assets/img/about/thumb.jpg') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="tp-about-content">
                                            <h3 class="tp-about-title mb-10">Creative-First Approach</h3>
                                            <p class="tp-about-dec">Every design, app, or campaign starts with a bold idea
                                                rooted<br> in originality and purpose.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="tp-about-item anim-zoomin-wrap mb-40">
                                        <div class="mb-35">
                                            <div class="tp-about-thumb fix anim-zoomin">
                                                <img data-speed=".8" src="{{ asset('assets/img/about/thumb-2.jpg') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="tp-about-content">
                                            <h3 class="tp-about-title mb-10">Tailored Digital Solutions</h3>
                                            <p class="tp-about-dec">Every design, app, or campaign starts with a bold idea
                                                rooted<br> in originality and purpose.</p>
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

    <div class="tp-service-area tp-panel-pin-area tp-bg-grey pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tp-service-subtitle-wrap tp-about-border pt-25 d-flex justify-content-between gap-3 mb-50">
                        <span class="tp-section-subtitle tp-ff-sequel-roman">Our latest Services</span>
                        <span class="tp-section-subtitle tp-ff-sequel-roman">( 24 )</span>
                    </div>
                </div>
                <div class="col-lg-4 mb-40">
                    <div class="tp-service-content mr-60 mt-20">
                        <div class="tp-service-sales-wrap tp-panel-pin fix p-relative">
                            <div class="tp-service-img-wrapper image-container">
                                <div class="hover-image"><img class="thumb"
                                        src="{{ asset('assets/img/service/service.jpg') }}" alt="Service Image"></div>
                                <div class="hover-image"><img class="thumb"
                                        src="{{ asset('assets/img/service/service-2.jpg') }}" alt="Service Image"></div>
                                <div class="hover-image"><img class="thumb"
                                        src="{{ asset('assets/img/service/service-3.jpg') }}" alt="Service Image"></div>
                                <div class="hover-image"><img class="thumb"
                                        src="{{ asset('assets/img/service/service-4.jpg') }}" alt="Service Image"></div>
                                <div class="hover-image"><img class="thumb"
                                        src="{{ asset('assets/img/service/service-4.jpg') }}" alt="Service Image"></div>
                                <div class="hover-image"><img class="thumb"
                                        src="{{ asset('assets/img/service/service-4.jpg') }}" alt="Service Image"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 mb-40">
                    <div class="tp-service-list-wrap ml-60">
                        <div class="tp-service-item service-item mb-5 active"
                            data-img="{{ asset('assets/img/service/service.jpg') }}">
                            <h2 class="tp-service-title tp-ff-sequel-roman d-inline-block">
                                <a href="#">Branding <span class="tp-service-icon d-inline-block"></span></a>
                            </h2>
                        </div>
                        <div class="tp-service-item service-item mb-5"
                            data-img="{{ asset('assets/img/service/service-2.jpg') }}">
                            <h2 class="tp-service-title tp-ff-sequel-roman d-inline-block">
                                <a href="#">Infodesign <span class="tp-service-icon d-inline-block"></span></a>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="tp-portfolio-area pt-145 pb-60" data-bg-color="#1e1e1e">
        <div class="container">
            <div class="row gx-50">
                <div class="col-lg-9">
                    <div class="tp-portfolio-title-wrap mb-65">
                        <h2 class="tp-section-title tp-text-perspective text-white">At Cunnet, we don’t just design
                            websites...
                            <span class="tp-about-btn-transform d-inline-block ml-20">
                                <a class="tp-btn tp-btn-white-border tp-ff-inter" href="#">
                                    <span>
                                        <span class="text-1">All Portfolio</span>
                                        <span class="text-2">All Portfolio</span>
                                    </span>
                                </a>
                            </span>
                        </h2>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="tp-portfolio-item anim-zoomin-wrap mb-70">
                        <div class="tp-portfolio-thumb mb-20 anim-zoomin not-hide-cursor" data-cursor="View<br>Demo">
                            <a class="cursor-hide" href="#">
                                <img src="{{ asset('assets/img/portfolio/portfolio.jpg') }}" alt="">
                            </a>
                        </div>
                        <div
                            class="tp-portfolio-content d-flex flex-wrap gap-2 justify-content-between align-items-center">
                            <h2 class="tp-portfolio-title tp-title-anim fix mb-20">
                                <a class="tp-title-text" href="#">Mirela Vienna</a>
                            </h2>
                            <span class="tp-portfolio-subtitle tp-ff-sequel-roman mb-20">Branding 2019</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
