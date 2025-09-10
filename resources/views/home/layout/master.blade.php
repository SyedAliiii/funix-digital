<!doctype html>
<html class="no-js " lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title', 'Graphic Service & Logo Creation') | Funix Digital</title>
    <meta name="author" content="Funix Digital">
    <!-- Meta Description (150–160 chars is best for SEO) -->
    <meta name="description" content="Funix Digital creates professional gaming logos, 3D characters, Twitch overlays, animated alerts, and digital branding for streamers and gamers.">

    <!-- Meta Keywords (not very useful for SEO today, but fine to include) -->
    <meta name="keywords" content="gaming logos, 3D characters, Twitch overlays, animated overlays, Vtuber models, custom illustrations, Funix Digital">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="icon" sizes="192x192" href="{{ asset('assets/img/favicons/android-chrome-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicons/favicon-16x16.png') }}">


    <!-- Apple Touch Icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicons/apple-touch-icon.png') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    {{-- <meta name="msapplication-TileImage" content="{{ asset('assets/img/favicons/ms-icon-144x144.png') }}"> --}}
    <meta name="theme-color" content="#ffffff">

    <!--==============================
 Google Fonts
 ============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Goldman:wght@400;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rajdhani:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!--==============================
 All CSS File
 ============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
    <!-- Swiper Js -->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- Jquery -->
    <script src="{{ asset('assets/js/vendor/jquery-3.7.1.min.js') }}"></script>
    @yield('style')
</head>

<body>
    <div class="cursor-animation cursor-image"></div>
    <div class="preloader ">
        {{-- <button class="th-btn preloaderCls">CANCEL PRELOADER </button> --}}
        <div class="preloader-inner">
            <span class="loader"></span>
        </div>
    </div>

    @include('home.partials.sidebar')
    @include('home.partials.mobile-sidebar')
    @yield('header', view('home.partials.header'))
    @if (session('message'))
        <script>
            $(document).ready(function () {
                _alert("{{ session('message') }}", "success");
            });
        </script>
    @endif
    @if (session('error'))
        <script>
            $(document).ready(function () {
                _alert("{{ session('error') }}", "warning");
            });
        </script>
    @endif
    @yield('content')

    @include('home.partials.footer')
    @include('home.partials.scripts')

    @yield('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const _alert = (msg, type = 'success') => {
            const icons = {
                success: '#28a745',
                error: '#f27474',
                warning: '#ffc107',
                info: '#17a2b8'
            };
            Swal.fire({
                position: 'top-end',
                icon: type,
                title: `<span style="font-size: 15px;">${msg}</span>`,
                showConfirmButton: false,
                timer: 3000,
                toast: true,
                background: '#1e1e1e',   // dark background
                color: '#fff', 
                customClass: { title: 'custom-title', popup: 'custom-toast' },
                iconColor: icons[type] || icons.success
            });
        }
        const confirmationModal = (title = 'Are You Sure?', icon = 'warning') => {
            return Swal.fire({
                title, icon,
                confirmButtonText: "Yes",
                cancelButtonText: "Cancel",
                showCancelButton: true,
                showCloseButton: true
            });
        };
        // Usage :)
        // let alMsg = 'Are you sure these details are proper?';
        // confirmationModal(alMsg).then((result) => {
        //     if (result.isConfirmed) {
        //         _alert('Is Confirmed');
        //     } else {
        //         _alert('Is Cancel', 'error');
        //         return;
        //     }
        //     console.log('ggs')
        // });
    </script>
</body>

</html>
