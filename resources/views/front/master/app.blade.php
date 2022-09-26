<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="{{ asset('/') }}assets/front/fonts/interstate/Interstate-LightCond.woff2"
          as=" font" type="font/woff2" crossorigin>
        <link rel="stylesheet" href="{{ asset('/') }}assets/front/fonts/butler/Butler.woff2" as=" font"
          type="font/woff2" crossorigin>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('/') }}assets/front/css/bootstrap.min.css">
        <!-- Boxicons CSS -->
        <link rel="stylesheet" href="{{ asset('/') }}assets/front/css/boxicons.min.css">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="{{ asset('/') }}assets/front/css/magnific-popup.min.css">
        <!-- Owl Carousel -->
        <link rel="stylesheet" href="{{ asset('/') }}assets/front/css/owl.carousel.min.css">
        <link rel="stylesheet" href="{{ asset('/') }}assets/front/css/owl.theme.default.min.css">
        <!-- Slick Slider CSS -->
        <link rel="stylesheet" href="{{ asset('/') }}assets/front/css/slick.min.css">
        <link rel="stylesheet" href="{{ asset('/') }}assets/front/css/slick-theme.min.css">
        <!-- Meanmenu JS -->
        <link rel="stylesheet" href="{{ asset('/') }}assets/front/css/meanmenu.css">
        <!-- Nice Select JS -->
        <link rel="stylesheet" href="{{ asset('/') }}assets/front/css/nice-select.min.css">
        <!-- Progressbar CSS -->
        <link rel="stylesheet" href="{{ asset('/') }}assets/front/css/progressbar.min.css">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="{{ asset('/') }}assets/front/css/animate.min.css">
        <!-- Swiper Slider CSS -->
        <link rel="stylesheet" href="{{ asset('/') }}assets/front/css/swiper.min.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="{{ asset('/') }}assets/front/css/style.css">
        {{-- <link rel="stylesheet" href="{{ asset('/') }}assets/front/css/swiper-bundle.min.css"> --}}
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{ asset('/') }}assets/front/css/responsive.css">
        <link rel="stylesheet" href="{{ asset('/') }}assets/front/cs/google-translate.css">

        <title>Tripshiptask</title>

        <link rel="icon" type="image/png" href="{{ asset('/') }}assets/front/img/ride/favicon.png">

        <style>
            iframe#\:1\.container {
                display: none;
            }
        </style>
    </head>

    <body data-spy="scroll" data-offset="70">

        @include('front.inc.header')

        @yield('main-body')

        @include('front.inc.footer')



        <!-- Essential JS -->
        <script src="{{ asset('/') }}assets/front/js/jquery.min.js"></script>
        <script src="{{ asset('/') }}assets/front/js/popper.min.js"></script>
        <script src="{{ asset('/') }}assets/front/js/bootstrap.min.js"></script>
        <!-- Magnific Popup JS -->
        <script src="{{ asset('/') }}assets/front/js/jquery.magnific-popup.min.js"></script>
        <!-- Owl Carousel JS -->
        <script src="{{ asset('/') }}assets/front/js/owl.carousel.min.js"></script>
        <!-- Form Ajaxchimp JS -->
        <script src="{{ asset('/') }}assets/front/js/jquery.ajaxchimp.min.js"></script>
        <!-- Form Validator JS -->
        <script src="{{ asset('/') }}assets/front/js/form-validator.min.js"></script>
        <!-- Contact JS -->
        <script src="{{ asset('/') }}assets/front/js/contact-form-script.js"></script>
        <!-- Meanmenu JS -->
        <script src="{{ asset('/') }}assets/front/js/jquery.meanmenu.js"></script>
        <!-- Slick Slider JS -->
        <script src="{{ asset('/') }}assets/front/js/slick.min.js"></script>
        <!-- Nice Select JS -->
        <script src="{{ asset('/') }}assets/front/js/jquery.nice-select.min.js"></script>
        <!-- Progressbar JS -->
        <script src="{{ asset('/') }}assets/front/js/progressbar.min.js"></script>
        <!-- Wow JS -->
        <script src="{{ asset('/') }}assets/front/js/wow.min.js"></script>
        <!-- Swiper Slider JS -->
        {{-- <script src="{{ asset('/') }}assets/front/js/swiper-bundle.min.js"></script> --}}

        <!-- Custom JS -->
        <script src="{{ asset('/') }}assets/front/js/custom.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
        {{-- <script src="{{ asset('/') }}assets/front/js/lang.js"></script> --}}


    </body>

</html>
