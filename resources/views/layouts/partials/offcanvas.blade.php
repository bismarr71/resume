<div id="preloader">
    <div class="preloader">
        <span></span>
        <span></span>
    </div>
</div>

<div id="magic-cursor" class="cursor-black-bg">
    <div id="ball"></div>
</div>

<div class="back-to-top-wrapper">
    <button id="back_to_top" type="button" class="back-to-top-btn">
        <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                stroke-linejoin="round" />
        </svg>
    </button>
</div>

<div class="tp-search-body-overlay"></div>
<div class="tp-search-form-toggle">
    <div class="container">
        <div class="row mb-70">
            <div class="col-lg-12">
                <div class="tp-search-top d-flex justify-content-between align-items-center">
                    <div class="tp-header-logo tp-search-logo">
                        <a href="{{ url('/') }}">
                            <img class="logo-1" data-width="140" src="{{ asset('assets/img/logo/logo.png') }}"
                                alt="">
                            <img class="logo-2" data-width="140" src="{{ asset('assets/img/logo/logo-white.png') }}"
                                alt="">
                        </a>
                    </div>
                    <button class="tp-search-close">
                        <i class="fa-light fa-xmark"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="tp-search-form">
                    <form action="#">
                        <div class="tp-search-form-input">
                            <input type="text" placeholder="What are you looking for?" required>
                            <span class="tp-search-focus-border"></span>
                            <button class="tp-search-form-icon" type="submit">
                                <i class="fa-sharp fa-regular fa-magnifying-glass"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="tp-offcanvas-area">
    <div class="tp-offcanvas">
        <div class="tp-offcanvas-top d-flex align-items-center justify-content-between">
            <div class="tp-offcanvas-logo">
                <a href="{{ url('/') }}">
                    <img class="logo-1" data-width="140" src="{{ asset('assets/img/logo/logo.png') }}" alt="">
                    <img class="logo-2" data-width="140" src="{{ asset('assets/img/logo/logo-white.png') }}"
                        alt="">
                </a>
            </div>
            <div class="tp-offcanvas-close-btn">
                <button class="close-btn">
                    <svg width="37" height="38" viewBox="0 0 37 38" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.19141 9.80762L27.5762 28.1924" stroke="currentColor" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M9.19141 28.1924L27.5762 9.80761" stroke="currentColor" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
        </div>
        <div class="tp-offcanvas-content d-none d-xl-block">
            <h3 class="tp-offcanvas-title">Hello There!</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, </p>
        </div>
        <div class="tp-offcanvas-menu d-xl-none">
            <nav></nav>
        </div>
        <div class="tp-offcanvas-gallery d-none d-xl-block">
            <div class="row gx-2">
                <div class="col-md-3 col-3">
                    <div class="tp-offcanvas-gallery-img fix">
                        <a class="popup-image" href="{{ asset('assets/img/offcanvas/offcanvas-1.jpg') }}"><img
                                src="{{ asset('assets/img/offcanvas/offcanvas-1.jpg') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-md-3 col-3">
                    <div class="tp-offcanvas-gallery-img fix">
                        <a class="popup-image" href="{{ asset('assets/img/offcanvas/offcanvas-2.jpg') }}"><img
                                src="{{ asset('assets/img/offcanvas/offcanvas-2.jpg') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-md-3 col-3">
                    <div class="tp-offcanvas-gallery-img fix">
                        <a class="popup-image" href="{{ asset('assets/img/offcanvas/offcanvas-3.jpg') }}"><img
                                src="{{ asset('assets/img/offcanvas/offcanvas-3.jpg') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-md-3 col-3">
                    <div class="tp-offcanvas-gallery-img fix">
                        <a class="popup-image" href="{{ asset('assets/img/offcanvas/offcanvas-4.jpg') }}"><img
                                src="{{ asset('assets/img/offcanvas/offcanvas-4.jpg') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="tp-offcanvas-contact">
            <h3 class="tp-offcanvas-title sm">Information</h3>
            <ul>
                <li><a href="tel:1245654">+ 4 20 7700 1007</a></li>
                <li><a href="mailto:hello@cunnet.com">hello@cunnet.com</a></li>
                <li><a href="#">Avenue de Roma 158b, Lisboa</a></li>
            </ul>
        </div>
        <div class="tp-offcanvas-social">
            <h3 class="tp-offcanvas-title sm">Follow Us</h3>
            <ul>
                <li><a href="#"><svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.25 1.5H4.75C2.95507 1.5 1.5 2.95507 1.5 4.75V11.25C1.5 13.0449 2.95507 14.5 4.75 14.5H11.25C13.0449 14.5 14.5 13.0449 14.5 11.25V4.75C14.5 2.95507 13.0449 1.5 11.25 1.5Z"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M10.6016 7.5907C10.6818 8.13166 10.5894 8.68414 10.3375 9.16955C10.0856 9.65497 9.68711 10.0486 9.19862 10.2945C8.71014 10.5404 8.15656 10.6259 7.61663 10.5391C7.0767 10.4522 6.57791 10.1972 6.19121 9.81055C5.80451 9.42385 5.54959 8.92506 5.46271 8.38513C5.37583 7.8452 5.46141 7.29163 5.70728 6.80314C5.95315 6.31465 6.34679 5.91613 6.83221 5.66425C7.31763 5.41238 7.87011 5.31998 8.41107 5.4002C8.96287 5.48202 9.47372 5.73915 9.86817 6.1336C10.2626 6.52804 10.5197 7.0389 10.6016 7.5907Z"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M11.5742 4.42578H11.5842" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg></a></li>
            </ul>
        </div>
    </div>
</div>
<div class="body-overlay"></div>

<div class="tp-offcanvas-2-area p-relative">
    <div class="offcanvas-bg"></div>
    <div class="tp-offcanvas-2-wrapper offcanvas-menu">
        <div class="tp-offcanvas-2-left">
            <div class="tp-header-logo d-flex justify-content-between align-items-center mb-50">
                <a href="{{ url('/') }}">
                    <img class="logo-1" data-width="170" src="{{ asset('assets/img/logo/logo.png') }}"
                        alt="">
                    <img class="logo-2" data-width="170" src="{{ asset('assets/img/logo/logo-white.png') }}"
                        alt="">
                </a>
                <span class="hamburger-close-btn">
                    <svg width="37" height="38" viewBox="0 0 37 38" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.19141 9.80762L27.5762 28.1924" stroke="currentColor" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M9.19141 28.1924L27.5762 9.80761" stroke="currentColor" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </span>
            </div>
            <div class="tp-offcanvas-menu counter-row">
                <nav></nav>
            </div>
            <span class="hamburger-close-btn hamburger-mobile-close-btn d-md-none">CLOSE</span>
        </div>
    </div>
</div>
