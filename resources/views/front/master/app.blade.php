<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{ asset('/') }}assets/front/css/responsive.css">

        <title>Taro | Multi-Purpose Website Templates</title>

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
        <script src="{{ asset('/') }}assets/front/js/swiper.min.js"></script>

        <!-- Custom JS -->
        <script src="{{ asset('/') }}assets/front/js/custom.js"></script>
        <style>
            #google_translate_element {
                position: absolute;
                bottom: calc(53px + 16px);
                right: 16px !important;
                // z-index: 99999;
            }

            .goog-te-gadget {
                font-family: Roboto, 'Open Sans', sans-serif !important;
                text-transform: uppercase;
            }

            .goog-te-gadget-simple {
                background-color: rgba(255, 255, 255, 0.20) !important;
                border: 1px solid rgba(255, 255, 255, 0.50) !important;
                padding: 8px !important;
                border-radius: 4px !important;
                font-size: 1rem !important;
                line-height: 2rem !important;
                display: inline-block;
                cursor: pointer;
                zoom: 1;
            }

            .goog-te-menu2 {
                max-width: 100%;
            }

            .goog-te-menu-value {
                color: #fff !important;

                &:before {
                    font-family: 'Material Icons';
                    content: "\E927";
                    margin-right: 16px;
                    font-size: 2rem;
                    vertical-align: -10px;
                    // width:32px!important;
                }
            }

            .goog-te-menu-value span:nth-child(5) {
                display: none;
            }

            .goog-te-menu-value span:nth-child(3) {
                border: none !important;
                font-family: 'Material Icons';

                &:after {
                    font-family: 'Material Icons';
                    content: "\E5C5";
                    font-size: 1.5rem;
                    vertical-align: -6px;
                }
            }

            .goog-te-gadget-icon {
                background-image: url(https://placehold.it/32) !important;
                background-position: 0px 0px;
                height: 32px !important;
                width: 32px !important;
                margin-right: 8px !important;
                //     OR
                display: none;
            }

            // ============ HIDE TOP BAR ============
            .goog-te-banner-frame.skiptranslate {
                display: none !important;
            }

            body {
                top: 0px !important;
            }

            /* ================================== *\
    Mediaqueries
\* ================================== */
            @media (max-width: 667px) {
                #google_translate_element {
                    bottom: calc(100% - 50% - 53px);
                    left: 16px !important;
                    width: 100% !important;

                    goog-te-gadget {
                        width: 100% !important;
                    }

                    .skiptranslate {
                        width: 100% !important;
                    }

                    .goog-te-gadget-simple {
                        width: calc(100% - 32px) !important;
                        text-align: center;
                    }
                }
            }
        </style>

        <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'ar,bn,zh-CN,zh-TW,fi,ht,ko,ru,es,ur', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
        }
        </script>
        <script src="{{ asset('/') }}assets/front/js/lang.js"></script>


    </body>

</html>
