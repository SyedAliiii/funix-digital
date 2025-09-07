
<!--============================== Header Area ==============================-->
<header class="th-header header-layout1">
    <div class="header-top">
        <div class="container">
            <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                <div class="col-auto d-none d-lg-block">
                    <p class="header-notice"></p>
                    <div class="header-links">
                        <ul>
                            <li>
                                <div class="header-notice">Welcome to our <a href="{{ route('home') }}">Bame</a> Esports team</div>
                            </li>
                            <li>
                                <div class="dropdown-link">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-globe"></i> English</a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                        <li>
                                            <a href="#">German</a>
                                            <a href="#">French</a>
                                            <a href="#">Italian</a>
                                            <a href="#">Latvian</a>
                                            <a href="#">Spanish</a>
                                            <a href="#">Greek</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="header-links">
                        <ul>
                            <li><a href="https://www.facebook.com/">Facebook</a></li>
                            <li><a href="https://www.twitter.com/">Twitter</a></li>
                            <li><a href="https://www.pinterest.com/">Pinterest</a></li>
                            <li><a href="https://www.instagram.com/">Instagram</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-wrapper">
        <!-- Main Menu Area -->
        <div class="menu-area">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="header-logo">
                            <a href="{{ route('home') }}">
                                <span data-mask-src="{{ asset('assets/img/logo.svg') }}" class="logo-mask"></span>
                                <img src="{{ asset('assets/img/logo.svg') }}" alt="Bame">
                            </a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <nav class="main-menu d-none d-lg-inline-block">
                            <ul>
                                <li class="menu-item-has-children">
                                    <a href="{{ route('home') }}">HOME</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('home') }}">Home Esports</a></li>
                                        <li><a href="home-2.html">Home Streaming</a></li>
                                        <li><a href="home-3.html">Home Video Gaming</a></li>
                                        <li><a href="home-4.html">Home Tournament</a></li>
                                        <li><a href="home-5.html">Home Gamer</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">ABOUT US</a></li>
                                <li class="menu-item-has-children">
                                    <a href="#">TOURNAMENT</a>
                                    <ul class="sub-menu">
                                        <li><a href="tournament.html">Tournament</a></li>
                                        <li><a href="tournament-details.html">Tournament Details</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">BLOG</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">PAGES</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children">
                                            <a href="#">Shop</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop.html">Shop</a></li>
                                                <li><a href="shop-details.html">Shop Details</a></li>
                                                <li><a href="cart.html">Cart Page</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="team.html">Players</a></li>
                                        <li><a href="team-details.html">Players Details</a></li>
                                        <li><a href="game.html">Game</a></li>
                                        <li><a href="game-details.html">Game Details</a></li>
                                        <li><a href="gallery.html">Gallery</a></li>
                                        <li><a href="point-table.html">Point Table</a></li>
                                        <li><a href="error.html">Error Page</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="contact.html">CONTACT</a>
                                </li>
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
                                <a href="contact.html" class="th-btn"><i class="fa-brands fa-twitch me-1"></i> Live Streaming</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="logo-bg"></div>
        </div>
    </div>
</header>