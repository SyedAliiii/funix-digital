@extends('home.layout.master')

@section('title', $blog['title'] ?? 'Blog Details')

@section('header')
    @include('home.partials.header-alt')
@endsection
@section('content')
<!--============================== Breadcumb ============================== -->
<div class="breadcumb-wrapper " data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.png') }}"> <!-- 1902-350 -->
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">{{ $blog['title'] ?? '' }}</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Blog Details</li>
            </ul>
        </div>
    </div>
</div><!--============================== Blog Area ==============================-->
<section class="th-blog-wrapper blog-details space-top space-extra2-bottom">
    <div class="container">
        <div class="row gx-40">
            <!-- <div class="col-xxl-8 col-lg-7 col-12"> -->
            <div class="col-12">
                <div class="th-blog blog-single">
                    <div class="blog-img">
                        <img src="{{ asset($blog['img']) }}" alt="{{ $blog['title'] ?? '' }}" class="w-100">
                    </div>
                    <div class="blog-content">
                        {{-- <div class="blog-meta">
                            <a class="author" href="blog.html"><i class="fa-light fa-user"></i>By Jonson</a>
                            <a href="blog.html"><i class="fa-light fa-calendar"></i>30 Nov, 2024</a>
                            <a href="blog-details.html"><i class="fa-light fa-comment"></i>3 Comments</a>
                        </div> --}}
                        {{-- <h2 class="blog-title">{{ $blog['title'] ?? '' }}</h2> --}}
                        {!! $blog['content'] ?? '' !!}
                        <div class="row gx-40">
                            <div class="col-md-6">
                                <div class="blog-img">
                                    <img class="w-100" src="{{ asset('assets/img/blog/366-300.png') }}" alt="{{ $blog['title'] ?? '' }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="blog-img">
                                    <img class="w-100" src="{{ asset('assets/img/blog/366-300-2.png') }}" alt="{{ $blog['title'] ?? '' }}">
                                </div>
                            </div>
                        </div>
                        {!! $blog['final-thoughts'] ?? '' !!}
                        {{-- <div class="share-links clearfix ">
                            <div class="row justify-content-between">
                                <div class="col-md-auto">
                                    <span class="share-links-title">Tags:</span>
                                    <div class="tagcloud">
                                        <a href="blog.html">E-Sports</a>
                                        <a href="blog.html">Tournaments</a>
                                    </div>
                                </div>
                                <div class="col-md-auto text-xl-end">
                                    <div class="th-social style3 align-items-center">
                                        <span class="share-links-title">Share:</span>
                                        <a class="facebook" href="https://www.facebook.com/"><span><i class="fab fa-facebook-f"></i></span></a>
                                        <a href="https://www.twitter.com/"><span><img src="{{ asset('assets/img/icon/x-twitter-icon.svg') }}" alt="img"></span></a>
                                        <a href="https://www.instagram.com/"><span><img src="{{ asset('assets/img/icon/instagram-icon.svg') }}" alt="img"></span></a>
                                    </div>
                                </div><!-- Share Links Area end -->
                            </div>
                        </div> --}}
                    </div>
                </div>
                {{-- <div class="blog-author">
                    <div class="auhtor-img">
                        <img src="assets/img/blog/blog-author.jpg" alt="Blog Author Image">
                    </div>
                    <div class="media-body">
                        <div class="media">
                            <div class="media-left">
                                <h3 class="author-name"><a href="team-details.html">Ronald Richards</a></h3>
                                <span class="author-desig">Founder & CEO</span>
                            </div>
                            <div class="media-body">
                                <div class="th-social style2 align-items-center">
                                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>

                        <p class="author-text">Unleash the full potential of your enterprise with our comprehensive range of consulting services, designed to align with your goals and foster innovation.</p>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</section>
@section('footer')
    @include('home.partials.footer-alt')
@endsection
@endsection