<header class="th-header header-default">
    <div class="sticky-wrapper">
        <!-- Main Menu Area -->
        <div class="menu-area">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="header-logo">
                            <a href="{{ route('home') }}">
                                {{-- <span data-mask-src="{{ asset('assets/img/logo.png') }}" class="logo-mask"></span> --}}
                                <img src="{{ asset('assets/img/logo.png') }}" alt="Funix Digital">
                            </a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <nav class="main-menu d-none d-lg-inline-block">
                            <ul>
                                {{-- <li class="menu-item-has-children">
                                    <a href="{{ route('home') }}">HOME</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('home') }}">Home Esports</a></li>
                                        <li><a href="home-2.html">Home Streaming</a></li>
                                        <li><a href="home-3.html">Home Video Gaming</a></li>
                                        <li><a href="home-4.html">Home Tournament</a></li>
                                        <li><a href="home-5.html">Home Gamer</a></li>
                                    </ul>
                                </li> --}}
                                <li><a href="{{ route('home') }}">HOME</a></li>
                                <li><a href="{{ route('home') }}#about-sec">ABOUT US</a></li>
                                <li><a href="{{ route('home') }}#latest-work-sec">Latest Work</a></li>
                                <li><a href="{{ route('home') }}#gallery-sec">Gallery</a></li>
                                <li><a href="{{ route('home') }}#blog-sec">Blogs</a></li>

                            </ul>
                        </nav>
                        <div class="header-button d-flex d-lg-none">
                            <button type="button" class="th-menu-toggle"><span class="btn-border"></span><i class="far fa-bars"></i></button>
                        </div>
                    </div>
                    <div class="col-auto d-none d-xl-block">
                        <div class="header-button">
                            <button type="button" class="simple-icon searchBoxToggler"><i class="far fa-search"></i></button>
                            <button type="button" class="simple-icon sideMenuInfo">
                                <i class="fa-solid fa-bars"></i>
                            </button>
                            <div class="d-xxl-block d-none">
                                <a href="{{ route('contact') }}" class="th-btn"><i class="fa-brands fa-twitch me-1"></i> CONTACT US</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="logo-bg"></div>
        </div>
    </div>
</header>