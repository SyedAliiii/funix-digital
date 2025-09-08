<footer class="footer-wrapper footer-layout1">
    <div class="container">
        <div class="footer-top text-center">
            <div class="footer-logo bg-repeat" data-bg-src="{{ asset('assets/img/bg/jiji-bg.png') }}">
                <a href="{{ route('home') }}">
                    {{-- <span data-mask-src="{{ asset('assets/img/logo.png') }}" class="logo-mask"></span> --}}
                    <img src="{{ asset('assets/img/logo.png') }}" alt="Funix Digital">
                </a>
            </div>
            <div class="footer-links">
                <ul>
                    <li><a href="{{ route('home') }}">HOME</a></li>
                    <li><a href="{{ route('home') }}#about-sec">ABOUT US</a></li>
                    <li><a href="{{ route('home') }}#latest-work-sec">Latest Work</a></li>
                    <li><a href="{{ route('home') }}#gallery-sec">Gallery</a></li>
                    <li><a href="{{ route('home') }}#blog-sec">Blogs</a></li>
                    <li><a href="{{ route('contact') }}#blog-sec">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="widget-area">
            <div class="row justify-content-between">
                <div class="col-md-6 col-lg-auto">
                    <div class="widget footer-widget">
                        <h3 class="widget_title">Office <span class="text-theme">Location:</span></h3>
                        <div class="th-widget-contact">
                            <div class="info-box">
                                <p class="info-box_text">
                                    Floor 2, 4 Naval St, Ancoats, Manchester
                                    M4 6EW, United Kingdom
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-auto">
                    <div class="widget footer-widget">
                        <h3 class="widget_title">Contact <span class="text-theme">Information:</span></h3>
                        <div class="th-widget-contact">
                            <div class="info-box">
                                <p class="info-box_text">
                                    <a class="info-box_link" href="tel:163254736587">(+163)-2547-36587</a>
                                    <a class="info-box_link" href="mailto:infohelp@Funix Digitalexample.com">info@funixdigital.com</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-auto">
                    <div class="widget footer-widget">
                        <h3 class="widget_title">Follow <span class="text-theme">With Us:</span></h3>
                        <div class="th-widget-contact">
                            <div class="th-social style-mask">
                                <a class="facebook" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a class="twitter" href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a class="instagram" href="https://www.instagram.com/">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a class="linkedin" href="https://www.linkedin.com/"><i class="fab fa-linkedin"></i></a>
                                <a class="google-play" href="https://www.google.com/">
                                    <img src="{{ asset('assets/img/icon/google-playstore-icon.svg') }}" alt="icon">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <form class="newsletter-form">
                    <div class="form-group">
                        <input class="form-control" type="email" placeholder="Subscribe to Our Newsletter" required="">
                        <button type="submit" class="th-btn">SUBSCRIBE NOW <i class="far fa-arrow-right ms-2"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="copyright-wrap text-center bg-repeat" data-bg-src="{{ asset('assets/img/bg/jiji-bg.png') }}">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6">
                    <p class="copyright-text bg-repeat" data-bg-src="{{ asset('assets/img/bg/jiji-bg.png') }}">
                        <i class="fal fa-copyright"></i> Copyright 2024 <a href="{{ route('home') }}">Funix Digital.</a> All Rights Reserved.
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>