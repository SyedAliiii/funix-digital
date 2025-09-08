<!--============================== Mobile Menu ============================== -->
<div class="th-menu-wrapper">
    <div class="th-menu-area text-center">
        <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo">
            <a href="{{ route('home') }}">
                {{-- <span data-mask-src="{{ asset('assets/img/logo.png') }}" class="logo-mask"></span> --}}
                <img src="{{ asset('assets/img/logo.png') }}" alt="Funix Digital"></a>
        </div>
        <div class="th-mobile-menu">
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
