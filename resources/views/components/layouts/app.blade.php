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
        @show
        <link rel="icon" href="{{ asset('assets/logo/icon.png') }}" type="image/png">
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:description" content="HG DIGITAL cung cấp giải pháp thiết kế website tối ưu, chuẩn SEO, giao diện đẹp mắt và thân thiện người dùng." />
    <meta property="og:image" content="{{ asset('assets/img/logo/banner.png') }}" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Dịch vụ thiết kế website HG DIGITAL" />
    <meta name="twitter:description" content="HG DIGITAL cung cấp giải pháp thiết kế website tối ưu, chuẩn SEO, giao diện đẹp mắt và thân thiện người dùng." />
    <meta name="twitter:image" content="{{ asset('assets/img/logo/banner.png') }}" />
    <meta name="google-site-verification" content="Gv7agN348ttTOuMfVTN2Kb3ioHwHrrMxctDM1-Hnjwg" />





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
  .sd-ser-content .sd-title,.sd-ser-content  h2, .template_info h2 , .filter_heading , .page-title-box .title ,  .title-head    .page-title-box .title ,.blog-details_item .item_details_info_heading a,.current-price,            .cybersecurity h1,.xb-pricing-nav .nav-item .nav-link, .xb-pricing-nav .nav-item .nav-link.active, .cybersecurity h2, .cybersecurity h3, .cybersecurity h4, .cybersecurity h5, .cybersecurity h6, .main-menu ul li a, .footer-style-three .footer-widget .xb-item--list {
            font-family: "Montserrat", serif !important ;
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
    <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg"
    alt="Facebook Fanpage"
    class="facebook-button"
    onclick="openFacebook()">
    <style>
        /* Vị trí cố định góc dưới bên phải */
        .facebook-button {
    position: fixed;
    bottom: 121px;
    right: 56px;
    width: 55px;
    height: 55px;
    cursor: pointer;
    z-index: 999;
    border-radius: 50%;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    animation: blink 1.2s infinite alternate;
}

        /* Hiệu ứng nháy nháy */
        @keyframes blink {
            0% { filter: brightness(1); }
            100% { filter: brightness(1.5); }
        }
    </style>
<script>
   function openFacebook() {
       window.open("https://www.facebook.com/CONG.TY.TNHH.HG.DIGITAL/", "_blank");
   }
</script>
    <!-- Footer -->
    <div class="gtranslate_wrapper"></div>
    <script>window.gtranslateSettings = {"default_language":"en","languages":["en","vi","fr","zh-CN","ja","ko","it"],"wrapper_selector":".gtranslate_wrapper"}</script>
    <script src="https://cdn.gtranslate.net/widgets/latest/float.js" defer></script>
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
    <script src="https://sp.zalo.me/plugins/sdk.js"></script>

    <div class="zalo-chat-widget" data-oaid="1715225565559061022" data-welcome-message="HG DIGITAL" data-autopopup="0" data-width="100" data-height="200"></div>

    </div>
    <!-- Livewire Scripts -->
    @livewireScripts
</body>

</html>
