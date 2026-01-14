<header>
    <div class="tp-header-area tp-header-spacing header-transparent">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-3 col-6">
                    <div class="tp-header-logo">
                        <a href="{{ url('/') }}">
                            <img class="logo-1" data-width="140" src="{{ asset('assets/img/logo/logo.png') }}"
                                alt="">
                            <img class="logo-2" data-width="140" src="{{ asset('assets/img/logo/logo-white.png') }}"
                                alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xl-6 d-none d-xl-block">
                    <div class="tp-main-menu d-flex justify-content-center">
                        <nav class="tp-mobile-menu-active">
                            <ul>
                                <li><a href="{{ url('/') }}">Home</a></li>

                                <li class="has-dropdown">
                                    <a href="#">Page</a>
                                    <ul class="submenu">
                                        <li><a href="#">About Me</a></li>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Service</a></li>
                                        <li><a href="#">Team</a></li>
                                        <li><a href="#">Pricing</a></li>
                                        <li><a href="#">FAQ</a></li>
                                    </ul>
                                </li>

                                <li class="has-dropdown">
                                    <a href="#">Project</a>
                                    <ul class="submenu">
                                        <li><a href="#">Project Grid</a></li>
                                        <li><a href="#">Project Details</a></li>
                                    </ul>
                                </li>

                                <li class="has-dropdown">
                                    <a href="#">Shop</a>
                                    <ul class="submenu">
                                        <li><a href="#">Shop List</a></li>
                                        <li><a href="#">Shop Details</a></li>
                                        <li><a href="#">Cart</a></li>
                                        <li><a href="#">Checkout</a></li>
                                        <li><a href="#">Wishlist</a></li>
                                    </ul>
                                </li>

                                <li class="has-dropdown">
                                    <a href="#">News</a>
                                    <ul class="submenu">
                                        <li><a href="#">Blog List</a></li>
                                        <li><a href="#">Blog Grid Sidebar</a></li>
                                        <li><a href="#">Blog Details</a></li>
                                    </ul>
                                </li>

                                <li class="has-dropdown">
                                    <a href="#">Contact</a>
                                    <ul class="submenu">
                                        <li><a href="#">Contact Me</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-3 col-6">
                    <div class="tp-header-right d-flex justify-content-end align-items-center">
                        <button class="tp-header-search-btn tp-search-click">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M18.7508 18.5233L13.5538 13.392M13.5538 13.392C14.9604 12.0032 15.7506 10.1196 15.7506 8.15551C15.7506 6.19144 14.9604 4.30782 13.5538 2.91902C12.1472 1.53022 10.2395 0.75 8.25028 0.75C6.26108 0.75 4.35336 1.53022 2.94678 2.91902C1.54021 4.30782 0.75 6.19144 0.75 8.15551C0.75 10.1196 1.54021 12.0032 2.94678 13.392C4.35336 14.7808 6.26108 15.561 8.25028 15.561C10.2395 15.561 12.1472 14.7808 13.5538 13.392Z"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </button>
                        <button class="tp-menu-bar tp-header-sidebar-btn ml-10">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button id="header-sticky" class="hamburger-open-btn tp-header-sidebar-btn hamburger-sticky-menu">
        <span></span>
        <span></span>
    </button>
</header>
