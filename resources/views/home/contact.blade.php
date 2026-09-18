@extends('home.layout.master')

@section('title', 'CONTACT US')

@section('header')
    @include('home.partials.header-alt')
@endsection
@section('content')
    <!--============================== Breadcumb ============================== -->
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.png') }}"> <!-- 1902-350 -->
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">CONTACT US</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>CONTACT US</li>
                </ul>
            </div>
        </div>
    </div>
    <!--============================== Contact Area ==============================-->
    <div class="contact-page-1 space">
        <div class="contact-sec-1 space bg-repeat overflow-hidden" data-bg-src="assets/img/bg/jiji-bg2.png">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-6 pe-xxl-5">
                        <div class="title-area">
                            <span class="sub-title style2"># Get In Touch</span>
                            <h2 class="sec-title text-white">
                                Contact Us & Meet Our Team
                                <span class="text-theme">!</span>
                            </h2>
                        </div>
                        <form method="POST" action="{{ route('contact.send') }}" class="contact-form pb-xl-0 space-bottom">
                        @csrf
                        <div class="row">
                            <div class="form-group style-border2 col-md-6">
                                <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                                <i class="fal fa-user"></i>
                            </div>
                            <div class="form-group style-border2 col-md-6">
                                <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="form-group style-border2 col-md-6">
                                <input type="text" class="form-control" name="number" placeholder="Phone Number">
                                <i class="fal fa-phone"></i>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group style-border2">
                                    <select class="form-select" name="subject" required>
                                        <option value="">Choose Subject</option>
                                        <option value="Logo Design">Logo Design</option>
                                        <option value="Overlay">Overlay</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    <i class="fal fa-angle-down"></i>
                                </div>
                            </div>
                            <div class="col-12 form-group style-border2">
                                <textarea name="message" placeholder="Write Message..." class="form-control" required></textarea>
                                <i class="far fa-pencil"></i>
                            </div>
                            <div class="form-btn col-12">
                                <button type="submit" class="th-btn">
                                    Send Message
                                    <i class="fa-solid fa-arrow-right ms-2"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    </div>
                    <div class="col-xl-6 ps-xxl-5">
                        <div class="title-area">
                            <span class="sub-title style2"># Information</span>
                            <h2 class="sec-title text-white">
                                Contact Information's <span class="text-theme">!</span>
                            </h2>
                        </div>
                        <div class="contact-feature">
                            <div class="contact-feature-icon icon-masking">
                                <span class="mask-icon" data-mask-src="assets/img/icon/contact-map-icon1.svg"></span>
                                <img src="assets/img/icon/contact-map-icon1.svg" alt="img" />
                            </div>
                            <div class="media-body">
                                <h4 class="box-title">ADDRESS:</h4>
                                <a href="https://maps.google.com/?q=24301+Brazos+Town+Crossing+Suite+500+PMB1053+Rosenberg+TX+77471+United+States" target="_blank" class="contact-feature_link">
                                     PRINCIPAL PLACE OF BUSINESS
                                     <br>
                                     24301 Brazos Town Crossing
                                     <br>
                                     Suite 500 PMB1053
                                     <br>
                                     Rosenberg, TX 77471 United States
                                 </a>
                            </div>
                        </div>
                        {{-- <div class="contact-feature">
                            <div class="contact-feature-icon icon-masking">
                                <span class="mask-icon" data-mask-src="assets/img/icon/contact-phone-icon1.svg"></span>
                                <img src="assets/img/icon/contact-phone-icon1.svg" alt="img" />
                            </div>
                            <div class="media-body">
                                <h4 class="box-title">OFFICE NUMBER:</h4>
                                <a href="tel:16365981254" class="contact-feature_link">Mobile: +163 6598 1254</a>
                                <a href="tel:16365981254" class="contact-feature_link">Fax: +163 6985 2365</a>
                            </div>
                        </div> --}}
                        <div class="contact-feature">
                            <div class="contact-feature-icon icon-masking">
                                <span class="mask-icon"
                                     data-mask-src="assets/img/icon/contact-envelope-icon1.svg"></span>
                                <img src="assets/img/icon/contact-envelope-icon1.svg" alt="img" />
                            </div>
                            <div class="media-body">
                                <h4 class="box-title">OFFICE EMAIL:</h4>
                                <a href="mailto:info@funixdigital.com" class="contact-feature_link">Office Mail:
                                     info@funixdigital.com</a>
                                <a href="mailto:info@funixdigital.com" class="contact-feature_link">CEO Mail:
                                     info@funixdigital.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-map">
        <iframe
            src="https://maps.google.com/maps?q=24301+Brazos+Town+Crossing+Suite+500+PMB1053+Rosenberg+TX+77471&t=&z=15&ie=UTF8&iwloc=&output=embed"
            allowfullscreen="" loading="lazy"></iframe>
    </div>
@endsection