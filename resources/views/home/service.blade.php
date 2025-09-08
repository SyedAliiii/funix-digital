@extends('home.layout.master')

@section('title', $service['title'] ?? 'service Details')

@section('header')
    @include('home.partials.header-alt')
@endsection
@section('content')
<!--============================== Breadcumb ============================== -->
<div class="breadcumb-wrapper " data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.png') }}"> <!-- 1902-350 -->
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Service Details</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Service Details</li>
            </ul>
        </div>
    </div>
</div><!--============================== Service Area ==============================-->
<section class="space-top space-extra-bottom">
    <div class="container">
        <div class="row">
            <div class="col-xxl-8 col-lg-8">
                <div class="page-single mb-40">
                    <div class="page-content">{!! $service['content'] ?? '' !!}</div>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-4">
                <aside class="sidebar-area">
                    <div class="widget widget_categories  ">
                        <h3 class="widget_title">All Services</h3>
                        <ul>
                            <li>
                                <a href="#">Custom Gaming Logos</a>
                                <span><i class="fas fa-angle-right"></i></span>
                            </li>
                            <li>
                                <a href="#">Twitch Overlays & Panels</a>
                                <span><i class="fas fa-angle-right"></i></span>
                            </li>
                            <li>
                                <a href="#">Animated Alerts & Scenes</a>
                                <span><i class="fas fa-angle-right"></i></span>
                            </li>
                            <li>
                                <a href="#">YouTube & Streaming Banners</a>
                                <span><i class="fas fa-angle-right"></i></span>
                            </li>
                            <li>
                                <a href="#">2D & 3D Vtuber Models</a>
                                <span><i class="fas fa-angle-right"></i></span>
                            </li>
                            <li>
                                <a href="#">Custom Illustrations</a>
                                <span><i class="fas fa-angle-right"></i></span>
                            </li>
                            <li>
                                <a href="#">Digital Artwork & Posters</a>
                                <span><i class="fas fa-angle-right"></i></span>
                            </li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
@endsection