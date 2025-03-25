<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GYMORT - Fitness And GYM</title>
    <!-- CSS Here -->
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon/favicon.ico') }}" type="image/x-icon">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">
    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate_plugin.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/media-query.css') }}">
</head>
<body>
    <!-- Preloader Start -->
    <div class="preloader">
        <div class="preloader-content">
            <div class="preloader_img_circle"></div>
            <div class="preloader_img">
                <img src="assets/images/preloader/fitness_preimg.gif" alt="fitness_preimg">
            </div>
        </div>
    </div>
    <!-- Preloader end -->
    <div class="site_content">
        <!-- Header Start -->
        @include('include.frontend.header')
        <!-- Header end -->
        @yield('content')
        <!-- Banner-Slider Start -->
        
        <!-- footer Start -->
        @include('include.frontend.footer')
        <!-- footer End -->

        <!-- Scroll-Top Start -->
        <div class="scrolltop_area orangeglow">
            <button id="scroll-top-btn">
                <span class="scroll-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <mask style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                        <path d="M0 0H24V24H0V0Z" fill="white"/>
                        </mask>
                        <g>
                        <path d="M7 11L12 6L17 11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M7 17L12 12L17 17" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                    </svg>                        
                </span>
                <span id="scroll-percentage"></span>
            </button>    
        </div>
        <!-- Scroll-Top End --> 

        <!-- custome mouse -->
        <div class="megic-cursor">
            <div class="megic-cursor-item"></div>
        </div>

    </div>
    <!-- JS Here -->
    <script src="{{ asset('assets/js/jquery-3.7.1.js') }}"></script>
    <script src="{{ asset('assets/js/myplugin.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick-animation.min.js') }}"></script>
    <script src="{{ asset('assets/js/aos.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/TweenMax.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/allsliders.js') }}"></script>
    <script src="{{ asset('assets/js/custome-cursor.js') }}"></script>
    <script src="{{ asset('assets/js/style.js') }}"></script>
    <!-- AOS Animation -->
    <script>
        AOS.init({
            duration: 1600,
        });
        AOS.init();
    </script>
</body>
</html>