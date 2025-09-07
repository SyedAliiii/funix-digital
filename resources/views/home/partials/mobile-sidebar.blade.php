
    <!--============================== Mobile Menu ============================== -->
    <div class="th-menu-wrapper">
        <div class="th-menu-area text-center">
            <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="{{ route('home') }}"><span data-mask-src="{{ asset('assets/img/logo.svg') }}" class="logo-mask"></span><img src="{{ asset('assets/img/logo.svg') }}" alt="Bame"></a>
            </div>
            <div class="th-mobile-menu">
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
            </div>
        </div>
    </div>
    <div class="color-scheme-wrap active">
        <button class="switchIcon"><i class="fa-solid fa-palette"></i></button>
        <h4 class="color-scheme-wrap-title"><i class="far fa-palette"></i> Color Switcher</h4>
        <div class="color-switch-btns">
            <button data-color="#6240CF"><i class="fa-solid fa-droplet"></i></button>
            <button data-color="#FFBE18"><i class="fa-solid fa-droplet"></i></button>
            <button data-color="#24FFF2"><i class="fa-solid fa-droplet"></i></button>
            <button data-color="#45F882"><i class="fa-solid fa-droplet"></i></button>
            <button data-color="#FF7E02"><i class="fa-solid fa-droplet"></i></button>
        </div>
    </div>