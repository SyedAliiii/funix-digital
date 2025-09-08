@extends('home.layout.master')

@section('title', 'Digital Creative Agency & Branding Services')
@section('style')
<style>
    .hero-cta-slider1 .hero-shape-area .hero-bg-shape .hero-bg-border-anime {
        inset: unset !important;
    }
</style>
@endsection
@section('content')
    <!--============================== Hero Area ==============================-->
    <div class="th-hero-wrapper hero-1" id="hero" data-bg-src="{{ asset('assets/img/hero/hero-bg1-1.png') }}"> <!-- 1920-900 -->
        <div class="container">
            <div class="hero-style1 text-center">
                <span class="sub-title custom-anim-top wow animated" data-wow-duration="1.2s" data-wow-delay="0.1s"># World Class Digital Design & Creative Solutions</span>
                <h1 class="hero-title">
                    <span class="title1 custom-anim-top wow animated" data-wow-duration="1.1s" data-wow-delay="0.3s" data-bg-src="{{ asset('assets/img/hero/hero-title-bg-shape1.svg') }}">SHAPING THE FUTURE OF</span>
                    <span class="title2 custom-anim-top wow animated" data-wow-duration="1.1s" data-wow-delay="0.4s">INNOVATION & BRANDING</span>
                </h1>
                <div class="btn-group custom-anim-top wow animated" data-wow-duration="1.2s" data-wow-delay="0.7s">
                    <a href="{{ route('contact') }}" class="th-btn">CONTACT US <i class="fa-solid fa-arrow-right ms-2"></i></a>
                    <a href="#" class="th-btn style2">PORTFOLIO <i class="fa-solid fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!--======== / Hero Section ========-->
    <div class="swiper th-slider hero-cta-slider1" id="heroSlider1" data-slider-options='{"effect":"fade"}'>
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="hero-cta-inner">
                    <div class="container th-container2">
                        <div class="hero-shape-area">
                            <div class="hero-bg-shape">
                                <div class="hero-bg-border-anime" data-mask-src="{{ asset('assets/img/hero/hero-bg-shape.png') }}"></div>
                                <svg viewBox="0 0 1600 520" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1599 30V490C1599 506.016 1586.02 519 1570 519H1062.43C1054.74 519 1047.36 515.945 1041.92 510.506L1009.49 478.08C1003.68 472.266 995.795 469 987.574 469H612.426C604.205 469 596.32 472.266 590.506 478.08L558.08 510.506C552.641 515.945 545.265 519 537.574 519H30C13.9837 519 1 506.016 1 490V30C1 13.9837 13.9837 1 30 1H400H537.574C545.265 1 552.641 4.05535 558.08 9.4939L590.506 41.9203C596.32 47.7339 604.205 51 612.426 51H987.574C995.795 51 1003.68 47.7339 1009.49 41.9203L1041.92 9.4939C1047.36 4.05535 1054.74 1 1062.43 1H1200H1570C1586.02 1 1599 13.9837 1599 30Z" fill="black" stroke="url(#paint0_linear1_47_22)" stroke-width="2" />
                                    <mask id="mask0_47_22" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0">
                                        <path d="M1600 490V30C1600 13.4315 1586.57 0 1570 0H1200H1062.43C1054.47 0 1046.84 3.1607 1041.21 8.7868L1008.79 41.2132C1003.16 46.8393 995.53 50 987.574 50H612.426C604.47 50 596.839 46.8393 591.213 41.2132L558.787 8.7868C553.161 3.16071 545.53 0 537.574 0H400H30C13.4315 0 0 13.4314 0 30V490C0 506.569 13.4315 520 30 520H537.574C545.53 520 553.161 516.839 558.787 511.213L591.213 478.787C596.839 473.161 604.47 470 612.426 470H987.574C995.53 470 1003.16 473.161 1008.79 478.787L1041.21 511.213C1046.84 516.839 1054.47 520 1062.43 520H1570C1586.57 520 1600 506.569 1600 490Z" fill="black" />
                                    </mask>
                                    <g mask="url(#mask0_47_22)">
                                        <g filter="url(#filter0_f_47_22)">
                                            <circle cx="1413" cy="314" r="287" fill="var(--theme-color2)" fill-opacity="0.2" />
                                        </g>
                                        <g filter="url(#filter01_f_47_22)">
                                            <circle cx="231" cy="172" r="229" fill="var(--theme-color)" fill-opacity="0.5" />
                                        </g>
                                    </g>
                                    <defs>
                                        <filter id="filter0_f_47_22" x="566" y="-533" width="1694" height="1694" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                                            <feGaussianBlur stdDeviation="280" result="effect1_foregroundBlur_47_22" />
                                        </filter>
                                        <filter id="filter01_f_47_22" x="-558" y="-617" width="1578" height="1578" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                                            <feGaussianBlur stdDeviation="280" result="effect1_foregroundBlur_47_22" />
                                        </filter>
                                        <linearGradient id="paint0_linear1_47_22" x1="0" y1="0" x2="1600" y2="520" gradientUnits="userSpaceOnUse">
                                            <stop offset="0" stop-color="var(--theme-color)" />
                                            <stop offset="1" stop-color="var(--theme-color2)" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                                <div class="hero-img1 z-index-common pb-sm-0 pb-md-5 pb-lg-5 pb-5" data-ani="slideinleft" data-ani-delay="0.4s"><!-- 520-658 -->
                                    <img src="{{ asset('assets/img/hero/hero-1-1.png') }}" alt="Image">
                                </div>
                                <div class="hero-img2 z-index-common pb-sm-0 pb-md-5 pb-lg-5 pb-5" data-ani="slideinright" data-ani-delay="0.4s"><!-- 477-658 -->
                                    <img src="{{ asset('assets/img/hero/hero-1-2.png') }}" alt="Image">
                                </div>
                            </div>
                            <div class="title-area mb-0">
                                <h2 class="sec-title text-white custom-anim-top wow animated" data-wow-duration="1.3s" data-wow-delay="0.1s">Where Creativity and Innovation Converge</h2>
                                <p class="mt-30 mb-30 custom-anim-top wow animated" data-wow-duration="1.3s" data-wow-delay="0.2s">We're a creative agency specializing in brand strategy, digital design, and cutting-edge design solutions that help streamers to grow. We deliver innovative design that drive your growth and elevate your online presence.</p>
                                <div class="btn-group custom-anim-top wow animated" data-wow-duration="1.3s" data-wow-delay="0.2s">
                                    <a href="{{ route('contact') }}" class="th-btn style-border">
                                        <span class="btn-border">
                                            Get in Touch <i class="fa-solid fa-arrow-right ms-2"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="swiper-slide">
                <div class="hero-cta-inner">
                    <div class="container th-container2">
                        <div class="hero-shape-area">
                            <div class="hero-bg-shape">
                                <div class="hero-bg-border-anime" data-mask-src="{{ asset('assets/img/hero/hero-bg-shape.png') }}"></div>
                                <svg viewBox="0 0 1600 520" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1599 30V490C1599 506.016 1586.02 519 1570 519H1062.43C1054.74 519 1047.36 515.945 1041.92 510.506L1009.49 478.08C1003.68 472.266 995.795 469 987.574 469H612.426C604.205 469 596.32 472.266 590.506 478.08L558.08 510.506C552.641 515.945 545.265 519 537.574 519H30C13.9837 519 1 506.016 1 490V30C1 13.9837 13.9837 1 30 1H400H537.574C545.265 1 552.641 4.05535 558.08 9.4939L590.506 41.9203C596.32 47.7339 604.205 51 612.426 51H987.574C995.795 51 1003.68 47.7339 1009.49 41.9203L1041.92 9.4939C1047.36 4.05535 1054.74 1 1062.43 1H1200H1570C1586.02 1 1599 13.9837 1599 30Z" fill="black" stroke="url(#paint0_linear2_47_22)" stroke-width="2" />
                                    <mask id="mask1_47_22" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0">
                                        <path d="M1600 490V30C1600 13.4315 1586.57 0 1570 0H1200H1062.43C1054.47 0 1046.84 3.1607 1041.21 8.7868L1008.79 41.2132C1003.16 46.8393 995.53 50 987.574 50H612.426C604.47 50 596.839 46.8393 591.213 41.2132L558.787 8.7868C553.161 3.16071 545.53 0 537.574 0H400H30C13.4315 0 0 13.4314 0 30V490C0 506.569 13.4315 520 30 520H537.574C545.53 520 553.161 516.839 558.787 511.213L591.213 478.787C596.839 473.161 604.47 470 612.426 470H987.574C995.53 470 1003.16 473.161 1008.79 478.787L1041.21 511.213C1046.84 516.839 1054.47 520 1062.43 520H1570C1586.57 520 1600 506.569 1600 490Z" fill="black" />
                                    </mask>
                                    <g mask="url(#mask1_47_22)">
                                        <g filter="url(#filter1_f_47_22)">
                                            <circle cx="1413" cy="314" r="287" fill="var(--theme-color2)" fill-opacity="0.2" />
                                        </g>
                                        <g filter="url(#filter02_f_47_22)">
                                            <circle cx="231" cy="172" r="229" fill="var(--theme-color)" fill-opacity="0.5" />
                                        </g>
                                    </g>
                                    <defs>
                                        <filter id="filter1_f_47_22" x="566" y="-533" width="1694" height="1694" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                                            <feGaussianBlur stdDeviation="280" result="effect1_foregroundBlur_47_22" />
                                        </filter>
                                        <filter id="filter02_f_47_22" x="-558" y="-617" width="1578" height="1578" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                                            <feGaussianBlur stdDeviation="280" result="effect1_foregroundBlur_47_22" />
                                        </filter>
                                        <linearGradient id="paint0_linear2_47_22" x1="0" y1="0" x2="1600" y2="520" gradientUnits="userSpaceOnUse">
                                            <stop offset="0" stop-color="var(--theme-color)" />
                                            <stop offset="1" stop-color="var(--theme-color2)" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                                <!-- <div class="verses-thumb d-xl-none d-block">
                                    <img src="{{ asset('assets/img/tournament/game-vs1.svg') }}" alt="tournament image">
                                </div> -->
                                <div class="hero-img1 z-index-common pb-sm-0 pb-md-5 pb-lg-5 pb-5" data-ani="slideinleft" data-ani-delay="0.4s"><!-- 561-658 -->
                                    <img src="{{ asset('assets/img/hero/hero-1-3.png') }}" alt="Image">
                                </div>
                                <div class="hero-img2 z-index-common pb-sm-0 pb-md-5 pb-lg-5 pb-5" data-ani="slideinright" data-ani-delay="0.4s"><!-- 486-658 -->
                                    <img src="{{ asset('assets/img/hero/hero-1-4.png') }}" alt="Image">
                                </div>
                            </div>
                            <div class="title-area mb-0">
                                <h2 class="sec-title text-white custom-anim-top wow animated" data-wow-duration="1.3s" data-wow-delay="0.1s">Where Creativity and Innovation Converge</h2>
                                <p class="mt-30 mb-30 custom-anim-top wow animated" data-wow-duration="1.3s" data-wow-delay="0.2s">We're a creative agency specializing in brand strategy, digital design, and cutting-edge design solutions that help streamers to grow. We deliver innovative design that drive your growth and elevate your online presence.</p>
                                <div class="btn-group custom-anim-top wow animated" data-wow-duration="1.3s" data-wow-delay="0.2s">
                                    <a href="{{ route('contact') }}" class="th-btn style-border">
                                        <span class="btn-border">
                                            Get in Touch <i class="fa-solid fa-arrow-right ms-2"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="swiper-slide">
                <div class="hero-cta-inner">
                    <div class="container th-container2">
                        <div class="hero-shape-area">
                            <div class="hero-bg-shape">
                                <div class="hero-bg-border-anime" data-mask-src="{{ asset('assets/img/hero/hero-bg-shape.png') }}"></div>
                                <svg viewBox="0 0 1600 520" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1599 30V490C1599 506.016 1586.02 519 1570 519H1062.43C1054.74 519 1047.36 515.945 1041.92 510.506L1009.49 478.08C1003.68 472.266 995.795 469 987.574 469H612.426C604.205 469 596.32 472.266 590.506 478.08L558.08 510.506C552.641 515.945 545.265 519 537.574 519H30C13.9837 519 1 506.016 1 490V30C1 13.9837 13.9837 1 30 1H400H537.574C545.265 1 552.641 4.05535 558.08 9.4939L590.506 41.9203C596.32 47.7339 604.205 51 612.426 51H987.574C995.795 51 1003.68 47.7339 1009.49 41.9203L1041.92 9.4939C1047.36 4.05535 1054.74 1 1062.43 1H1200H1570C1586.02 1 1599 13.9837 1599 30Z" fill="black" stroke="url(#paint0_linear3_47_22)" stroke-width="2" />
                                    <mask id="mask2_47_22" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0">
                                        <path d="M1600 490V30C1600 13.4315 1586.57 0 1570 0H1200H1062.43C1054.47 0 1046.84 3.1607 1041.21 8.7868L1008.79 41.2132C1003.16 46.8393 995.53 50 987.574 50H612.426C604.47 50 596.839 46.8393 591.213 41.2132L558.787 8.7868C553.161 3.16071 545.53 0 537.574 0H400H30C13.4315 0 0 13.4314 0 30V490C0 506.569 13.4315 520 30 520H537.574C545.53 520 553.161 516.839 558.787 511.213L591.213 478.787C596.839 473.161 604.47 470 612.426 470H987.574C995.53 470 1003.16 473.161 1008.79 478.787L1041.21 511.213C1046.84 516.839 1054.47 520 1062.43 520H1570C1586.57 520 1600 506.569 1600 490Z" fill="black" />
                                    </mask>
                                    <g mask="url(#mask2_47_22)">
                                        <g filter="url(#filter3_f_47_22)">
                                            <circle cx="1413" cy="314" r="287" fill="var(--theme-color2)" fill-opacity="0.2" />
                                        </g>
                                        <g filter="url(#filter03_f_47_22)">
                                            <circle cx="231" cy="172" r="229" fill="var(--theme-color)" fill-opacity="0.5" />
                                        </g>
                                    </g>
                                    <defs>
                                        <filter id="filter3_f_47_22" x="566" y="-533" width="1694" height="1694" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                                            <feGaussianBlur stdDeviation="280" result="effect1_foregroundBlur_47_22" />
                                        </filter>
                                        <filter id="filter03_f_47_22" x="-558" y="-617" width="1578" height="1578" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                                            <feGaussianBlur stdDeviation="280" result="effect1_foregroundBlur_47_22" />
                                        </filter>
                                        <linearGradient id="paint0_linear3_47_22" x1="0" y1="0" x2="1600" y2="520" gradientUnits="userSpaceOnUse">
                                            <stop offset="0" stop-color="var(--theme-color)" />
                                            <stop offset="1" stop-color="var(--theme-color2)" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                                <div class="verses-thumb d-xl-none d-block">
                                    <img src="{{ asset('assets/img/tournament/game-vs1.svg') }}" alt="tournament image">
                                </div>
                                <div class="hero-img1 z-index-common pb-sm-0 pb-md-5 pb-lg-5 pb-5" data-ani="slideinleft" data-ani-delay="0.4s"><!-- 476-658 -->
                                    <img src="{{ asset('assets/img/hero/hero-1-5.png') }}" alt="Image">
                                </div>
                                <div class="hero-img2 z-index-common pb-sm-0 pb-md-5 pb-lg-5 pb-5" data-ani="slideinright" data-ani-delay="0.4s"><!-- 476-658 -->
                                    <img src="{{ asset('assets/img/hero/hero-1-6.png') }}" alt="Image">
                                </div>
                            </div>
                            <div class="title-area mb-0">
                                <h2 class="sec-title text-white custom-anim-top wow animated" data-wow-duration="1.3s" data-wow-delay="0.1s">Where Creativity and Innovation Converge</h2>
                                <p class="mt-30 mb-30 custom-anim-top wow animated" data-wow-duration="1.3s" data-wow-delay="0.2s">We're a creative agency specializing in brand strategy, digital design, and cutting-edge design solutions that help streamers to grow. We deliver innovative design that drive your growth and elevate your online presence.</p>
                                <div class="btn-group custom-anim-top wow animated" data-wow-duration="1.3s" data-wow-delay="0.2s">
                                    <a href="{{ route('contact') }}" class="th-btn style-border">
                                        <span class="btn-border">
                                            Get in Touch <i class="fa-solid fa-arrow-right ms-2"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="slider-pagination"></div>
    </div>
    <!--============================== Marquee Area (Page Links) ==============================-->
    <div class="marquee-area-1 bg-repeat  overflow-hidden" data-bg-src="{{ asset('assets/img/bg/jiji-bg.png') }}">
        <div class="container-fluid">
            <div class="swiper th-slider" id="marqueeSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":"auto"}},"autoplay":{"delay":1500,"disableOnInteraction":false},"spaceBetween":50}'>
                <div class="swiper-wrapper">
                    <!-- Single Item -->
                    <div class="marquee-item swiper-slide">
                        <div class="marquee_icon">
                            <img src="{{ asset('assets/img/normal/star.png') }}" alt="Icon">
                        </div>
                        <h3 class="marquee-title"><a href="{{ route('service.details', ['slug' => 'gaming-logo-branding']) }}">Gaming Logo & Branding</a></h3>
                    </div>
                    <div class="marquee-item swiper-slide">
                        <div class="marquee_icon">
                            <img src="{{ asset('assets/img/normal/star.png') }}" alt="Icon">
                        </div>
                        <h3 class="marquee-title"><a href="{{ route('service.details', ['slug' => 'twitch-overlays-design']) }}">Twitch Overlays Design</a></h3>
                    </div>
                    <div class="marquee-item swiper-slide">
                        <div class="marquee_icon">
                            <img src="{{ asset('assets/img/normal/star.png') }}" alt="Icon">
                        </div>
                        <h3 class="marquee-title"><a href="{{ route('service.details', ['slug' => 'animated-overlays']) }}">Animated Overlays</a></h3>
                    </div>
                    <div class="marquee-item swiper-slide">
                        <div class="marquee_icon">
                            <img src="{{ asset('assets/img/normal/star.png') }}" alt="Icon">
                        </div>
                        <h3 class="marquee-title"><a href="{{ route('service.details', ['slug' => '2d-3d-vtuber-models']) }}">2D & 3D Vtuber Models</a></h3>
                    </div>
                    <div class="marquee-item swiper-slide">
                        <div class="marquee_icon">
                            <img src="{{ asset('assets/img/normal/star.png') }}" alt="Icon">
                        </div>
                        <h3 class="marquee-title"><a href="{{ route('service.details', ['slug' => 'custom-illustrations-art']) }}">Custom Illustrations & Art</a></h3>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--============================== About Area (Panda)  ==============================-->
    <div class="overflow-hidden space" id="about-sec">
        <div class="about-bg-img shape-mockup" data-top="0" data-left="0">
            <img src="{{ asset('assets/img/bg/about-bg1.png') }}" alt="img">
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 mb-50 mb-xl-0">
                    <div class="img-box1">
                        <div class="img1 custom-anim-left wow animated" data-wow-duration="1.5s" data-wow-delay="0.2s">
                            <img src="{{ asset('assets/img/normal/about1-1.png') }}" alt="About"> <!-- 528-545 -->
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-wrap1">
                        <div class="about-title-wrap mb-n1">
                            <div class="about-title-thumb custom-anim-top wow animated" data-wow-duration="1.5s" data-wow-delay="0.1s">
                                <img src="{{ asset('assets/img/normal/about1-2.png') }}" alt="img"> <!-- 105-109 -->
                            </div>
                            <div class="title-area custom-anim-left wow animated" data-wow-duration="1.5s" data-wow-delay="0.1s">
                                <span class="sub-title"># About Funix Digital</span>
                                <h2 class="sec-title mb-0">We’re more than just a design studio</h2>
                            </div>
                        </div>
                        <div class="about-grid">
                            <div class="icon custom-anim-top wow animated" data-wow-duration="1.5s" data-wow-delay="0.2s">
                                <img src="{{ asset('assets/img/icon/about_feature_1.svg') }}" alt="img">
                            </div>
                            <div class="about-grid-details custom-anim-left wow animated" data-wow-duration="1.5s" data-wow-delay="0.2s">
                                <h3 class="about-grid_title h5">Over <span class="text-theme">1k+</span> Affiliate & Partnerships</h3>
                                <p class="about-grid_text">Stay ahead with the latest in gaming news, releases, and industry updates.</p>
                            </div>
                        </div>
                        <div class="about-grid">
                            <div class="icon custom-anim-top wow animated" data-wow-duration="1.5s" data-wow-delay="0.2s">
                                <img src="{{ asset('assets/img/icon/about_feature_2.svg') }}" alt="img">
                            </div>
                            <div class="about-grid-details custom-anim-left wow animated" data-wow-duration="1.5s" data-wow-delay="0.2s">
                                <h3 class="about-grid_title h5">Tournament Highlights</h3>
                                <p class="about-grid_text">Track upcoming competitions with our live calendar featuring dates, times, and titles.</p>
                            </div>
                        </div>
                        <div class="about-grid">
                            <div class="icon custom-anim-top wow animated" data-wow-duration="1.5s" data-wow-delay="0.2s">
                                <img src="{{ asset('assets/img/icon/about_feature_3.svg') }}" alt="img">
                            </div>
                            <div class="about-grid-details custom-anim-left wow animated" data-wow-duration="1.5s" data-wow-delay="0.2s">
                                <h3 class="about-grid_title h5">Community & Support</h3>
                                <p class="about-grid_text">Connect with pro players, explore their journeys, and get 24/7 support from our team.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============================== Game Area   ==============================-->
    <section class="overflow-hidden" id="latest-work-sec">
        <div class="container th-container2">
            <div class="game-sec-wrap1 space" data-bg-src="{{ asset('assets/img/bg/game-sec1-bg.png') }}">
                <div class="title-area text-center custom-anim-top wow animated" data-wow-duration="1.5s" data-wow-delay="0.1s">
                    <span class="sub-title"># Our Latest Work</span>
                    <h2 class="sec-title">Think, Design, Grow <span class="text-theme">!</span></h2>
                </div>
                <div class="slider-area">
                    <div class="swiper th-slider game-slider-1" id="gameSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="game-card gradient-border">
                                    <div class="game-card-img">
                                        <a href="game-details.html">
                                            <img src="{{ asset('assets/img/cards/1-1.png') }}" alt="game image"> <!-- 248-240 -->
                                        </a>
                                    </div>
                                    <div class="game-card-details my-3">
                                        <h3 class="box-title"><a href="game-details.html">2SPYSEE</a></h3>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="game-card gradient-border">
                                    <div class="game-card-img">
                                        <a href="game-details.html">
                                            <img src="{{ asset('assets/img/cards/2-1.png') }}" alt="game image">
                                        </a>
                                    </div>
                                    <div class="game-card-details my-3">
                                        <h3 class="box-title"><a href="game-details.html">AGENT TALYN</a></h3>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="game-card gradient-border">
                                    <div class="game-card-img">
                                        <a href="game-details.html">
                                            <img src="assets/img/cards/3-1.png" alt="game image">
                                        </a>
                                    </div>
                                    <div class="game-card-details my-3">
                                        <h3 class="box-title"><a href="game-details.html">ANTZMAN24</a></h3>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="game-card gradient-border">
                                    <div class="game-card-img">
                                        <a href="game-details.html">
                                            <img src="assets/img/cards/4-1.png" alt="game image">
                                        </a>
                                    </div>
                                    <div class="game-card-details my-3">
                                        <h3 class="box-title"><a href="game-details.html">CAZTIC</a></h3>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="game-card gradient-border">
                                    <div class="game-card-img">
                                        <a href="game-details.html">
                                            <img src="assets/img/cards/5-1.png" alt="game image">
                                        </a>
                                    </div>
                                    <div class="game-card-details my-3">
                                        <h3 class="box-title"><a href="game-details.html">DIRTB4II</a></h3>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="game-card gradient-border">
                                    <div class="game-card-img">
                                        <a href="game-details.html">
                                            <img src="assets/img/cards/6-1.png" alt="game image">
                                        </a>
                                    </div>
                                    <div class="game-card-details my-3">
                                        <h3 class="box-title"><a href="game-details.html">DRAKON KAYRAN</a></h3>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="game-card gradient-border">
                                    <div class="game-card-img">
                                        <a href="game-details.html">
                                            <img src="assets/img/cards/7-1.png" alt="game image">
                                        </a>
                                    </div>
                                    <div class="game-card-details my-3">
                                        <h3 class="box-title"><a href="game-details.html">l3g3ndarya1</a></h3>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="game-card gradient-border">
                                    <div class="game-card-img">
                                        <a href="game-details.html">
                                            <img src="assets/img/cards/8-1.png" alt="game image">
                                        </a>
                                    </div>
                                    <div class="game-card-details my-3">
                                        <h3 class="box-title"><a href="game-details.html">LETIGRE</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============================== Feature Area   ==============================-->
    <section class="space">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="title-area text-center custom-anim-top wow animated" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <span class="sub-title"># World Class Facilities For Gamers </span>
                        <h2 class="sec-title">Funix Brings Every Streamer the Tools to Shine <span class="text-theme">!</span></h2>
                    </div>
                </div>
            </div>
            <div class="feature-sec-wrap1" data-bg-src="{{ asset('assets/img/bg/feature-sec1-bg.png') }}">
                <div class="feature-card-wrap">
                    <div class="feature-card-border">
                        <div class="feature-card">
                            <div class="feature-card-icon custom-anim-top wow animated" data-wow-duration="1.5s" data-wow-delay="0.2s">
                                <span class="feature-card-icon-mask" data-mask-src="{{ asset('assets/img/icon/feature_1.svg') }}"></span>
                                <img src="{{ asset('assets/img/icon/feature_1.svg') }}" alt="img">
                            </div>
                            <div class="feature-card-details custom-anim-top wow animated" data-wow-duration="1.5s" data-wow-delay="0.2s">
                                <h3 class="feature-card-title">Animated Alerts</h3>
                                <p class="feature-card-text">Custom-designed logos built to reflect your unique gaming identity. Perfect for esports teams, streamers, and personal brands.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="feature-card-wrap">
                    <div class="feature-card-border">
                        <div class="feature-card">
                            <div class="feature-card-icon custom-anim-top wow animated" data-wow-duration="1.5s" data-wow-delay="0.2s">
                                <span class="feature-card-icon-mask" data-mask-src="{{ asset('assets/img/icon/feature_2.svg') }}"></span>
                                <img src="{{ asset('assets/img/icon/feature_2.svg') }}" alt="img">
                            </div>
                            <div class="feature-card-details custom-anim-top wow animated" data-wow-duration="1.5s" data-wow-delay="0.2s">
                                <h3 class="feature-card-title">Stream Overlays</h3>
                                <p class="feature-card-text">Enhance your live streams with clean, stylish, and functional overlays. Make your channel look polished and stand out from the crowd.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="feature-card-wrap">
                    <div class="feature-card-border">
                        <div class="feature-card">
                            <div class="feature-card-icon custom-anim-top wow animated" data-wow-duration="1.5s" data-wow-delay="0.2s">
                                <span class="feature-card-icon-mask" data-mask-src="{{ asset('assets/img/icon/feature_3.svg') }}"></span>
                                <img src="{{ asset('assets/img/icon/feature_3.svg') }}" alt="img">
                            </div>
                            <div class="feature-card-details custom-anim-top wow animated" data-wow-duration="1.5s" data-wow-delay="0.2s">
                                <h3 class="feature-card-title">Vtuber Models</h3>
                                <p class="feature-card-text">Fully customized 2D & 3D avatars tailored to your personality. Express yourself with smooth rigging and unique character designs.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============================== Gallery Area   ==============================-->
    <div class="container-fluid p-0" id="gallery-sec">
        <div class="gallery-area-1 overflow-hidden text-center">
            <div class="slider-area gallery-slider1">
                <div class="swiper th-slider" id="gallerySlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}},"effect":"coverflow","coverflowEffect":{"rotate":"0","stretch":"0","depth":"150","modifier":"1"},"centeredSlides":"true"}'>
                    <div class="swiper-wrapper">
                        <!--============================== Gallery Area   ==============================-->
                        <div class="swiper-slide gallery-wrap1">
                            <div class="th-video">
                                <img src="{{ asset('assets/img/video/1-2.png') }}" alt="img">
                                <a href="{{ asset('assets/img/video/1-2.png') }}" class="play-btn popup-image style3"><i class="fa-solid fa-arrow-up-right"></i></a>
                            </div>
                        </div>

                        <div class="swiper-slide gallery-wrap1">
                            <div class="th-video">
                                <img src="{{ asset('assets/img/video/1-1.png') }}" alt="img"> <!-- 808-500 -->
                                <a href="{{ asset('assets/img/video/1-1.png') }}" class="play-btn popup-image style3"><i class="fa-solid fa-arrow-up-right"></i></a>
                            </div>
                        </div>

                        <div class="swiper-slide gallery-wrap1">
                            <div class="th-video">
                                <img src="{{ asset('assets/img/video/1-3.png') }}" alt="img">
                                <a href="{{ asset('assets/img/video/1-3.png') }}" class="play-btn popup-image style3"><i class="fa-solid fa-arrow-up-right"></i></a>
                            </div>
                        </div>

                        <div class="swiper-slide gallery-wrap1">
                            <div class="th-video">
                                <img src="{{ asset('assets/img/video/1-4.png') }}" alt="img">
                                <a href="{{ asset('assets/img/video/1-4.png') }}" class="play-btn popup-image style3"><i class="fa-solid fa-arrow-up-right"></i></a>
                            </div>
                        </div>

                        <div class="swiper-slide gallery-wrap1">
                            <div class="th-video">
                                <img src="{{ asset('assets/img/video/1-5.png') }}" alt="img">
                                <a href="{{ asset('assets/img/video/1-5.png') }}" class="play-btn popup-image style3"><i class="fa-solid fa-arrow-up-right"></i></a>
                            </div>
                        </div>

                        <div class="swiper-slide gallery-wrap1">
                            <div class="th-video">
                                <img src="{{ asset('assets/img/video/1-6.png') }}" alt="img">
                                <a href="{{ asset('assets/img/video/1-6.png') }}" class="play-btn popup-image style3"><i class="fa-solid fa-arrow-up-right"></i></a>
                            </div>
                        </div>

                        <div class="swiper-slide gallery-wrap1">
                            <div class="th-video">
                                <img src="{{ asset('assets/img/video/1-7.png') }}" alt="img">
                                <a href="{{ asset('assets/img/video/1-7.png') }}" class="play-btn popup-image style3"><i class="fa-solid fa-arrow-up-right"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
                <button data-slider-prev="#gallerySlider1" class="slider-arrow slider-prev"><i class="fas fa-angle-left"></i></button>
                <button data-slider-next="#gallerySlider1" class="slider-arrow slider-next"><i class="fas fa-angle-right"></i></button>
            </div>
        </div>
    </div>
    <!--============================== Team Area  ==============================-->
    <section class="team-sec-1 space">
        <div class="team-shape1-1 shape-mockup" data-top="0" data-right="0"><img src="{{ asset('assets/img/bg/team-sec1-bg.png') }}" alt="img"></div> <!-- 445-860 -->
        <div class="container th-container3">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-8">
                    <div class="title-area text-center custom-anim-top wow animated" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <span class="sub-title"># Top World Class Streamer</span>
                        <h2 class="sec-title">Let’s See Our Latest Work</h2>
                    </div>
                </div>
            </div>
            <div class="slider-area team-slider1">
                <div class="swiper th-slider has-shadow" id="teamSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"4"},"1200":{"slidesPerView":"5"}}}'>
                    <div class="swiper-wrapper">
                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-card">
                                <div class="team-card-corner team-card-corner1"></div>
                                <div class="team-card-corner team-card-corner2"></div>
                                <div class="team-card-corner team-card-corner3"></div>
                                <div class="team-card-corner team-card-corner4"></div>
                                <div class="img-wrap">
                                    <div class="team-img">
                                        <img src="{{ asset('assets/img/team/244-435-Agent-Talyn.png') }}" alt="Team">
                                    </div>
                                    <img class="game-logo" src="{{ asset('assets/img/team/44-50-Agent-Talyn.png') }}" alt="Team">
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title"><a href="team-details.html">Agent-Talyn</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-card">
                                <div class="team-card-corner team-card-corner1"></div>
                                <div class="team-card-corner team-card-corner2"></div>
                                <div class="team-card-corner team-card-corner3"></div>
                                <div class="team-card-corner team-card-corner4"></div>
                                <div class="img-wrap">
                                    <div class="team-img">
                                        <img src="{{ asset('assets/img/team/244-435-Cazstic.png') }}" alt="Team">
                                    </div>
                                    <img class="game-logo" src="{{ asset('assets/img/team/44-50-Cazstic.png') }}" alt="Team">
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title"><a href="team-details.html">Cazstic</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-card">
                                <div class="team-card-corner team-card-corner1"></div>
                                <div class="team-card-corner team-card-corner2"></div>
                                <div class="team-card-corner team-card-corner3"></div>
                                <div class="team-card-corner team-card-corner4"></div>
                                <div class="img-wrap">
                                    <div class="team-img">
                                        <img src="{{ asset('assets/img/team/244-435-Darrowynn.png') }}" alt="Team">
                                    </div>
                                    <img class="game-logo" src="{{ asset('assets/img/team/44-50-Darrowynn.png') }}" alt="Team">
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title"><a href="team-details.html">Darrowynn</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-card">
                                <div class="team-card-corner team-card-corner1"></div>
                                <div class="team-card-corner team-card-corner2"></div>
                                <div class="team-card-corner team-card-corner3"></div>
                                <div class="team-card-corner team-card-corner4"></div>
                                <div class="img-wrap">
                                    <div class="team-img">
                                        <img src="{{ asset('assets/img/team/244-435-FlowerChild0822.png') }}" alt="Team">
                                    </div>
                                    <img class="game-logo" src="{{ asset('assets/img/team/44-50-FlowerChild0822.png') }}" alt="Team">
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title"><a href="team-details.html">Flower Child</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-card">
                                <div class="team-card-corner team-card-corner1"></div>
                                <div class="team-card-corner team-card-corner2"></div>
                                <div class="team-card-corner team-card-corner3"></div>
                                <div class="team-card-corner team-card-corner4"></div>
                                <div class="img-wrap">
                                    <div class="team-img">
                                        <img src="{{ asset('assets/img/team/244-435-KGLMDEAF.png') }}" alt="Team">
                                    </div>
                                    <img class="game-logo" src="{{ asset('assets/img/team/44-50-KGLMDEAF.png') }}" alt="Team">
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title"><a href="team-details.html">KGLMDEAF</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-card">
                                <div class="team-card-corner team-card-corner1"></div>
                                <div class="team-card-corner team-card-corner2"></div>
                                <div class="team-card-corner team-card-corner3"></div>
                                <div class="team-card-corner team-card-corner4"></div>
                                <div class="img-wrap">
                                    <div class="team-img">
                                        <img src="{{ asset('assets/img/team/244-435-nickolaijams.png') }}" alt="Team">
                                    </div>
                                    <img class="game-logo" src="{{ asset('assets/img/team/44-50-nickolaijams.png') }}" alt="Team">
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title"><a href="team-details.html">Nickolai Jams</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-card">
                                <div class="team-card-corner team-card-corner1"></div>
                                <div class="team-card-corner team-card-corner2"></div>
                                <div class="team-card-corner team-card-corner3"></div>
                                <div class="team-card-corner team-card-corner4"></div>
                                <div class="img-wrap">
                                    <div class="team-img">
                                        <img src="{{ asset('assets/img/team/244-435-Shintuan.png') }}" alt="Team">
                                    </div>
                                    <img class="game-logo" src="{{ asset('assets/img/team/44-50-Shintuan.png') }}" alt="Team">
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title"><a href="team-details.html">Shintuan</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-card">
                                <div class="team-card-corner team-card-corner1"></div>
                                <div class="team-card-corner team-card-corner2"></div>
                                <div class="team-card-corner team-card-corner3"></div>
                                <div class="team-card-corner team-card-corner4"></div>
                                <div class="img-wrap">
                                    <div class="team-img">
                                        <img src="{{ asset('assets/img/team/244-435-TatsuoJeff.png') }}" alt="Team">
                                    </div>
                                    <img class="game-logo" src="{{ asset('assets/img/team/44-50-TatsuoJeff.png') }}" alt="Team">
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title"><a href="team-details.html">TatsuoJeff</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-card">
                                <div class="team-card-corner team-card-corner1"></div>
                                <div class="team-card-corner team-card-corner2"></div>
                                <div class="team-card-corner team-card-corner3"></div>
                                <div class="team-card-corner team-card-corner4"></div>
                                <div class="img-wrap">
                                    <div class="team-img">
                                        <img src="{{ asset('assets/img/team/244-435-XHellraiser.png') }}" alt="Team">
                                    </div>
                                    <img class="game-logo" src="{{ asset('assets/img/team/44-50-XHellraiser.png') }}" alt="Team">
                                </div>
                                <div class="team-card-content">
                                    <h3 class="box-title"><a href="team-details.html">XHellraiser</a></h3>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <button data-slider-prev="#teamSlider1" class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button>
                <button data-slider-next="#teamSlider1" class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
            </div>
        </div>
    </section>
    <!--============================== Cta Area useless  ==============================-->
    <div class="container th-container4">
        <div class="cta-area-1">
            <div class="cta-bg-shape-border">
                <svg width="1464" height="564" viewBox="0 0 1464 564" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1463.5 30V534C1463.5 550.292 1450.29 563.5 1434 563.5H1098H927.426C919.603 563.5 912.099 560.392 906.567 554.86L884.14 532.433C878.42 526.713 870.663 523.5 862.574 523.5H601.426C593.337 523.5 585.58 526.713 579.86 532.433L557.433 554.86C551.901 560.392 544.397 563.5 536.574 563.5H366H30C13.7076 563.5 0.5 550.292 0.5 534V30C0.5 13.7076 13.7076 0.5 30 0.5H366H536.574C544.397 0.5 551.901 3.60802 557.433 9.14034L579.86 31.5668C585.58 37.2866 593.337 40.5 601.426 40.5H862.574C870.663 40.5 878.42 37.2866 884.14 31.5668L906.567 9.14035C912.099 3.60803 919.603 0.5 927.426 0.5H1098H1434C1450.29 0.5 1463.5 13.7076 1463.5 30Z" stroke="url(#paint0_linear_202_547)" />
                    <defs>
                        <linearGradient id="paint0_linear_202_547" x1="0" y1="0" x2="1505.47" y2="412.762" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="var(--theme-color)" />
                            <stop offset="1" stop-color="var(--theme-color2)" />
                        </linearGradient>
                    </defs>
                </svg>
            </div>
            <div class="cta-wrap-bg bg-repeat" data-bg-src="{{ asset('assets/img/bg/jiji-bg.png') }}" data-mask-src="{{ asset('assets/img/shape/cta-bg-shape1.svg') }}">
                <div class="cta-bg-img">
                    <img src="{{ asset('assets/img/bg/cta-sec1-bg.png') }}" alt="img">
                </div>
                <div class="cta-thumb">
                    <img src="{{ asset('assets/img/normal/cta1-1.png') }}" alt="img">
                </div>
            </div>
            <div class="cta-wrap">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="title-area mb-0 custom-anim-left wow animated" data-wow-duration="1.5s" data-wow-delay="0.2s">
                            <span class="sub-title"># World Best Gaming Site</span>
                            <h2 class="sec-title">Join Funix Digital to Level Up Your  <span class="text-theme fw-medium">Gaming Identity Today !</span></h2>
                            <p class="mt-30 mb-30">From custom gaming logos to Twitch overlays, animated alerts, Vtuber models, and digital artwork — we design everything a gamer or streamer needs to stand out.</p>
                            <a href="#" class="th-btn">JOIN COMMUNITY <i class="fa-solid fa-arrow-right ms-2"></i></a> <!-- Discord Link -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============================== Blog Area  ==============================-->
    <section class="" id="blog-sec">
        <div class="container">
            <div class="title-area text-center custom-anim-top wow animated" data-wow-duration="1.5s" data-wow-delay="0.2s">
                <span class="sub-title"># Latest News</span>
                <h2 class="sec-title">Stay Updated With Our Blog <span class="text-theme">!</span></h2>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider has-shadow" id="blogSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="blog-card">
                                <div class="blog-img">
                                    <a href="{{ route('blog.details', ['slug' => 'best-twitch-overlays-and-logos-to-level-up-your-stream-in-2025']) }}">
                                        <img src="{{ asset('assets/img/blog/392-300-Best-Twitch-Overlays-and-Logos-to-Level-Up-Your-Stream-in-2025.png') }}" alt="Best-Twitch-Overlays-and-Logos-to-Level-Up-Your-Stream-in-2025">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <a href="{{ route('blog.details', ['slug' => 'best-twitch-overlays-and-logos-to-level-up-your-stream-in-2025']) }}"><i class="far fa-user"></i>By Jonson</a>
                                        <a href="{{ route('blog.details', ['slug' => 'best-twitch-overlays-and-logos-to-level-up-your-stream-in-2025']) }}"><i class="far fa-calendar"></i>30 Nov, 2024</a>
                                    </div>
                                    <h3 class="blog-title"><a href="{{ route('blog.details', ['slug' => 'best-twitch-overlays-and-logos-to-level-up-your-stream-in-2025']) }}">Best Twitch Overlays and Logos to Level Up Your Stream in 2025</a></h3>
                                    <a href="{{ route('blog.details', ['slug' => 'best-twitch-overlays-and-logos-to-level-up-your-stream-in-2025']) }}" class="link-btn style2">Read More <i class="fas fa-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="blog-card">
                                <div class="blog-img">
                                    <a href="{{ route('blog.details', ['slug' => 'stream-branding-101-how-to-build-a-unique-twitch-channel']) }}">
                                        <img src="{{ asset('assets/img/blog/392-300-Stream-Branding-101-How-to-Build-a-Unique-Twitch-Channel.png') }}" alt="Stream-Branding-101-How-to-Build-a-Unique-Twitch-Channel">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <a href="{{ route('blog.details', ['slug' => 'stream-branding-101-how-to-build-a-unique-twitch-channel']) }}"><i class="far fa-user"></i>By Jonson</a>
                                        <a href="{{ route('blog.details', ['slug' => 'stream-branding-101-how-to-build-a-unique-twitch-channel']) }}"><i class="far fa-calendar"></i>25 Dec, 2024</a>
                                    </div>
                                    <h3 class="blog-title"><a href="{{ route('blog.details', ['slug' => 'stream-branding-101-how-to-build-a-unique-twitch-channel']) }}">Stream Branding 101 How to Build a Unique Twitch Channel</a></h3>
                                    <a href="{{ route('blog.details', ['slug' => 'stream-branding-101-how-to-build-a-unique-twitch-channel']) }}" class="link-btn style2">Read More <i class="fas fa-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="blog-card">
                                <div class="blog-img">
                                    <a href="{{ route('blog.details', ['slug' => 'the-difference-between-static-and-animated-twitch-overlays']) }}">
                                        <img src="{{ asset('assets/img/blog/392-300-The-Difference-Between-Static-and-Animated-Twitch-Overlays.png') }}" alt="The-Difference-Between-Static-and-Animated-Twitch-Overlays">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <a href="{{ route('blog.details', ['slug' => 'the-difference-between-static-and-animated-twitch-overlays']) }}"><i class="far fa-user"></i>By Jonson</a>
                                        <a href="{{ route('blog.details', ['slug' => 'the-difference-between-static-and-animated-twitch-overlays']) }}"><i class="far fa-calendar"></i>23 Jun, 2024</a>
                                    </div>
                                    <h3 class="blog-title"><a href="{{ route('blog.details', ['slug' => 'the-difference-between-static-and-animated-twitch-overlays']) }}">The Difference Between Static and Animated Twitch Overlays</a></h3>
                                    <a href="{{ route('blog.details', ['slug' => 'the-difference-between-static-and-animated-twitch-overlays']) }}" class="link-btn style2">Read More <i class="fas fa-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============================== Client Area  ==============================-->
    <div class="client-area-1 overflow-hidden space">
        <div class="container-fluid p-0">
            <div class="swiper th-slider client-slider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":2},"400":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"4"},"1200":{"slidesPerView":"7"},"1300":{"slidesPerView":"9"}}, "spaceBetween": "0", "loop": "true"}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="#" class="client-card">
                            <img src="{{ asset('assets/img/client/90-120-Agent-Talyn.png') }}" alt="Agent-Talyn">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="client-card">
                            <img src="{{ asset('assets/img/client/90-120-antzman24.png') }}" alt="antzman24">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="client-card">
                            <img src="{{ asset('assets/img/client/90-120-Cazstic.png') }}" alt="Cazstic">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="client-card">
                            <img src="{{ asset('assets/img/client/90-120-Darrowynn.png') }}" alt="Darrowynn">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="client-card">
                            <img src="{{ asset('assets/img/client/90-120-DirtB4II.png') }}" alt="DirtB4II">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="client-card">
                            <img src="{{ asset('assets/img/client/90-120-Drakon_Kayran.png') }}" alt="Drakon_Kayran">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="client-card">
                            <img src="{{ asset('assets/img/client/90-120-Dylo603.png') }}" alt="Dylo603">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="client-card">
                            <img src="{{ asset('assets/img/client/90-120-Flippy.png') }}" alt="Flippy">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="client-card">
                            <img src="{{ asset('assets/img/client/90-120-Ghostframe-Gaming.png') }}" alt="Ghostframe-Gaming">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="client-card">
                            <img src="{{ asset('assets/img/client/90-120-GHOSTWALL.png') }}" alt="GHOSTWALL">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="client-card">
                            <img src="{{ asset('assets/img/client/90-120-Guzz.png') }}" alt="Guzz">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="client-card">
                            <img src="{{ asset('assets/img/client/90-120-Hunterito00.png') }}" alt="Hunterito00">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="client-card">
                            <img src="{{ asset('assets/img/client/90-120-illidian88.png') }}" alt="illidian88">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="client-card">
                            <img src="{{ asset('assets/img/client/90-120-letigre.png') }}" alt="letigre">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="client-card">
                            <img src="{{ asset('assets/img/client/90-120-Mystic.png') }}" alt="Mystic">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="client-card">
                            <img src="{{ asset('assets/img/client/90-120-nickolaijams.png') }}" alt="nickolaijams">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="client-card">
                            <img src="{{ asset('assets/img/client/90-120-PangolinMkV.png') }}" alt="PangolinMkV">
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="client-card">
                            <img src="{{ asset('assets/img/client/90-120alex_the_-great5404.png') }}" alt="alex_the_-great5404">
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
@endsection