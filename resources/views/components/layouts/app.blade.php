<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">




    @section('metatags')
        <meta name="description" content="{{ config('app.meta.default_description') }}">
        <meta name="keywords" content="{{ config('app.meta.default_keywords') }}">
        <meta property="og:description" content="{{ config('app.meta.og_description') }}">
        <meta property="og:image" content="{{ asset('default-image.png') }}">
        <link rel="icon" href="{{ asset('assets/logo/icon.png') }}" type="image/png">

    @show








    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/cursor.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom-font.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style>
        .cybersecurity h1,.xb-pricing-nav .nav-item .nav-link, .xb-pricing-nav .nav-item .nav-link.active, .cybersecurity h2, .cybersecurity h3, .cybersecurity h4, .cybersecurity h5, .cybersecurity h6, .main-menu ul li a, .footer-style-three .footer-widget .xb-item--list {
            font-family: "Montserrat", serif ;
  font-optical-sizing: auto;
  font-weight: <weight>;
  font-style: normal;
}

    </style>
    <!-- Livewire Styles -->
    @livewireStyles
</head>

<body>
    <!-- Navigation (Optional if needed for the project) -->

    <!-- Page Content -->
    {{ $slot }}

    <!-- Footer -->

    <!-- Scripts -->
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/gsap.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/appear.js') }}"></script>
    <script src="{{ asset('assets/js/parallaxie.js') }}"></script>
    <script src="{{ asset('assets/js/parallax-scroll.js') }}"></script>
    <script src="{{ asset('assets/js/odometer.min.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/cursor-bundle.js') }}"></script>
    <script src="{{ asset('assets/js/easing.min.js') }}"></script>
    <script src="{{ asset('assets/js/scrollspy.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.marquee.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- Livewire Scripts -->
    @livewireScripts
</body>

</html>
