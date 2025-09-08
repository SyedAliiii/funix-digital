<!--============================== Sidemenu ============================== -->
{{-- <div class="sidemenu-wrapper sidemenu-cart ">
    <div class="sidemenu-content">
        <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
        <div class="widget woocommerce widget_shopping_cart">
            <h3 class="widget_title">Shopping cart</h3>
            <div class="widget_shopping_cart_content">
                <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                    <li class="woocommerce-mini-cart-item mini_cart_item">
                        <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                        <a href="#"><img src="{{ asset('assets/img/product/product_thumb_1_1.png') }}"
                                alt="Cart Image">Gaming Headphone</a>
                        <span class="quantity">1 ×
                            <span class="woocommerce-Price-amount amount">
                                <span class="woocommerce-Price-currencySymbol">$</span>940.00</span>
                        </span>
                    </li>
                    <li class="woocommerce-mini-cart-item mini_cart_item">
                        <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                        <a href="#"><img src="{{ asset('assets/img/product/product_thumb_1_2.png') }}"
                                alt="Cart Image">Gaming Mouse</a>
                        <span class="quantity">1 ×
                            <span class="woocommerce-Price-amount amount">
                                <span class="woocommerce-Price-currencySymbol">$</span>899.00</span>
                        </span>
                    </li>
                    <li class="woocommerce-mini-cart-item mini_cart_item">
                        <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                        <a href="#"><img src="{{ asset('assets/img/product/product_thumb_1_3.png') }}"
                                alt="Cart Image">Gaming Keyboard</a>
                        <span class="quantity">1 ×
                            <span class="woocommerce-Price-amount amount">
                                <span class="woocommerce-Price-currencySymbol">$</span>756.00</span>
                        </span>
                    </li>
                    <li class="woocommerce-mini-cart-item mini_cart_item">
                        <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                        <a href="#"><img src="{{ asset('assets/img/product/product_thumb_1_4.png') }}"
                                alt="Cart Image">Gaming Chair</a>
                        <span class="quantity">1 ×
                            <span class="woocommerce-Price-amount amount">
                                <span class="woocommerce-Price-currencySymbol">$</span>723.00</span>
                        </span>
                    </li>
                    <li class="woocommerce-mini-cart-item mini_cart_item">
                        <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                        <a href="#"><img src="{{ asset('assets/img/product/product_thumb_1_5.png') }}"
                                alt="Cart Image">Microphone G9000</a>
                        <span class="quantity">1 ×
                            <span class="woocommerce-Price-amount amount">
                                <span class="woocommerce-Price-currencySymbol">$</span>1080.00</span>
                        </span>
                    </li>
                </ul>
                <p class="woocommerce-mini-cart__total total">
                    <strong>Subtotal:</strong>
                    <span class="woocommerce-Price-amount amount">
                        <span class="woocommerce-Price-currencySymbol">$</span>4398.00</span>
                </p>
                <p class="woocommerce-mini-cart__buttons buttons">
                    <a href="cart.html" class="th-btn wc-forward">View cart <span class="icon"><i
                                class="fa-solid fa-arrow-up-right ms-3"></i></span></a>
                    <a href="checkout.html" class="th-btn checkout wc-forward">Checkout <span class="icon"><i
                                class="fa-solid fa-arrow-up-right ms-3"></i></span></a>
                </p>
            </div>
        </div>
    </div>
</div> --}}
<!--============================== Sidemenu ============================== -->
<div class="sidemenu-wrapper sidemenu-info d-none d-lg-block ">
    <div class="sidemenu-content">
        <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
        <div class="widget footer-widget">
            <div class="th-widget-about">
                <div class="about-logo">
                    <a href="{{ route('home') }}">
                        {{-- <span data-mask-src="{{ asset('assets/img/logo.png') }}" class="logo-mask"></span> --}}
                        <img src="{{ asset('assets/img/logo.png') }}" alt="Funix Digital">
                    </a>
                </div>
                <p class="about-text"> At Funix Digital, we design creative solutions that bring your gaming identity to life. Whether you’re a streamer, esports team, or content creator, our services help you stand out with bold visuals and unique branding.</p>
                <h3 class="widget_title">Follow <span class="text-theme">With Us:</span></h3>
                <div class="th-widget-contact">
                    <div class="th-social style-mask">
                        <a class="facebook" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a class="twitter" href="https://www.twitter.com/"><img
                                src="{{ asset('assets/img/icon/x-twitter-icon.svg') }}" alt="icon"></a>
                        <a class="instagram" href="https://www.instagram.com/">
                            <img src="{{ asset('assets/img/icon/instagram-icon.svg') }}" alt="icon">
                        </a>
                        <a class="linkedin" href="https://www.linkedin.com/"><i class="fab fa-linkedin"></i></a>
                        <a class="google-play" href="https://www.google.com/">
                            <img src="{{ asset('assets/img/icon/google-playstore-icon.svg') }}" alt="icon">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="widget  ">
            <h3 class="widget_title">Recent Posts</h3>
            <div class="recent-post-wrap">
                <div class="recent-post">
                    <div class="media-img">
                        <a href="{{ route('blog.details', ['slug' => 'best-twitch-overlays-and-logos-to-level-up-your-stream-in-2025']) }}">
                            <img src="{{ asset('assets/img/blog/392-300-Best-Twitch-Overlays-and-Logos-to-Level-Up-Your-Stream-in-2025.png') }}" alt="Best Twitch Overlays and Logos to Level Up Your Stream in 2025">
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="post-title">
                            <a class="text-inherit" href="{{ route('blog.details', ['slug' => 'best-twitch-overlays-and-logos-to-level-up-your-stream-in-2025']) }}">
                                Best Twitch Overlays and Logos to Level Up Your Stream in 2025
                            </a>
                        </h4>
                        <div class="recent-post-meta">
                            <a href="{{ route('blog.details', ['slug' => 'best-twitch-overlays-and-logos-to-level-up-your-stream-in-2025']) }}">
                                <i class="fa-light fa-calendar"></i>30 Nov, 2024
                            </a>
                        </div>
                    </div>
                </div>

                <div class="recent-post">
                    <div class="media-img">
                        <a href="{{ route('blog.details', ['slug' => 'stream-branding-101-how-to-build-a-unique-twitch-channel']) }}">
                            <img src="{{ asset('assets/img/blog/392-300-Stream-Branding-101-How-to-Build-a-Unique-Twitch-Channel.png') }}" alt="Stream Branding 101 How to Build a Unique Twitch Channel">
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="post-title">
                            <a class="text-inherit" href="{{ route('blog.details', ['slug' => 'stream-branding-101-how-to-build-a-unique-twitch-channel']) }}">
                                Stream Branding 101: How to Build a Unique Twitch Channel
                            </a>
                        </h4>
                        <div class="recent-post-meta">
                            <a href="{{ route('blog.details', ['slug' => 'stream-branding-101-how-to-build-a-unique-twitch-channel']) }}">
                                <i class="fa-light fa-calendar"></i>25 Dec, 2024
                            </a>
                        </div>
                    </div>
                </div>

                <div class="recent-post">
                    <div class="media-img">
                        <a href="{{ route('blog.details', ['slug' => 'the-difference-between-static-and-animated-twitch-overlays']) }}">
                            <img src="{{ asset('assets/img/blog/392-300-The-Difference-Between-Static-and-Animated-Twitch-Overlays.png') }}" alt="The Difference Between Static and Animated Twitch Overlays">
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="post-title">
                            <a class="text-inherit" href="{{ route('blog.details', ['slug' => 'the-difference-between-static-and-animated-twitch-overlays']) }}">
                                The Difference Between Static and Animated Twitch Overlays
                            </a>
                        </h4>
                        <div class="recent-post-meta">
                            <a href="{{ route('blog.details', ['slug' => 'the-difference-between-static-and-animated-twitch-overlays']) }}">
                                <i class="fa-light fa-calendar"></i>23 Jun, 2024
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="widget newsletter-widget  ">
            <h3 class="widget_title">Newsletter</h3>
            <p class="footer-text">Subscribe to our newsletter to get our
                latest update & news consenter</p>
            <form class="newsletter-form">
                <div class="form-group">
                    <input class="form-control" type="email" placeholder="Email Address" required="">
                    <button type="submit" class="th-btn"><i class="far fa-paper-plane"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="popup-search-box d-none d-lg-block">
    <button class="searchClose"><i class="fal fa-times"></i></button>
    <form action="#">
        <input type="text" placeholder="What are you looking for?">
        <button type="submit"><i class="fal fa-search"></i></button>
    </form>
</div>
