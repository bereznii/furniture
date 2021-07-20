<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>{{ $metaData['title'] ?? 'Мебельный мастер' }}</title>
        <meta name="description" content="{{ $metaData['description'] ?? 'Проектирую и изготавливаю корпусную мебель по индивидуальным заказам для дома, офиса и торговых точек. Превращаю Ваши идеи в реальность, от эскиза до результата. Способствую созданию комфорта, уюта и максимального удобства для Вашего Дома и Бизнеса!' }}">
        <meta name="keywords" content="{{ $metaData['keywords'] ?? '' }}">
        <meta name="robots" content="index, follow">
        <link rel="icon" href="{{ asset('img/icons/wardrobe2.ico') }}" type="image/icon type">
        <!-- Font Icons -->
        <link rel="preload" href="{{ asset('css/home/fonts/icomoon/icomoon.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="{{ asset('css/home/fonts/icomoon/icomoon.css') }}"></noscript>

        <link rel="preload" href="{{ asset('css/home/fonts/roxine-font-icon/roxine-font.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="{{ asset('css/home/fonts/roxine-font-icon/roxine-font.css') }}"></noscript>

        <link rel="preload" href="{{ asset('vendors/font-awesome/css/font-awesome.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="{{ asset('vendors/font-awesome/css/font-awesome.css') }}"></noscript>
        <!-- Vendors -->
        <link rel="preload" href="{{ asset('vendors/owl-carousel/dist/assets/owl.carousel.min.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="{{ asset('vendors/owl-carousel/dist/assets/owl.carousel.min.css') }}"></noscript>
        <link media="all" rel="stylesheet" href="{{ asset('vendors/owl-carousel/dist/assets/owl.theme.default.min.css') }}">

        <link rel="preload" href="{{ asset('vendors/animate/animate.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="{{ asset('vendors/animate/animate.css') }}"></noscript>

        <link media="all" rel="stylesheet" href="{{ asset('vendors/bootstrap-datepicker/css/bootstrap-datepicker.css') }}">
        <link media="all" rel="stylesheet" href="{{ asset('vendors/fancyBox/source/jquery.fancybox.css') }}">
        <link media="all" rel="stylesheet" href="{{ asset('vendors/fancyBox/source/helpers/jquery.fancybox-thumbs.css') }}">
        <!-- Bootstrap 4 -->
        <link rel="preload" href="{{ asset('css/home/bootstrap.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="{{ asset('css/home/bootstrap.css') }}"></noscript>
        <!-- Rev Slider -->
        <link rel="preload" href="{{ asset('vendors/rev-slider/revolution/css/settings.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="{{ asset('vendors/rev-slider/revolution/css/settings.css') }}"></noscript>
        <!-- Custom CSS -->
        <link media="all" rel="stylesheet" href="{{ asset('css/construction.min.css') }}">
        <link media="all" rel="stylesheet" href="{{ asset('css/home/custom.css') }}">
    </head>
    <body>

        <script type="application/ld+json">
         {
             "@context": "https://schema.org",
             "@type": "Organization",
             "name": "Мебельный Мастер",
             "legalName": "Мебельный Мастер",
             "url": "https://mebelnyymaster.com.ua/",
             "description": "Проектирую и изготавливаю корпусную мебель по индивидуальным заказам для дома, офиса и торговых точек. Превращаю Ваши идеи в реальность, от эскиза до результата. Способствую созданию комфорта, уюта и максимального удобства для Вашего Дома и Бизнеса!",
             "foundingDate": "2017",
             "contactPoint": {
                 "@type": "ContactPoint",
                 "contactType": "Customer support",
                 "telephone" : "+380638443748"
                }
         }
        </script>

        <!-- main wrapper -->
        <div id="wrapper">
            <div class="page-wrapper">
                @include('client.layouts.header')
                @yield('client.pages.content')
            </div>
            @include('client.layouts.footer')
        </div>

        <a href="#" class="section-scroll" id="scroll-to-top"><i class="fa fa-angle-up"></i></a>
        <!-- jquery library -->
        <script src="{{ asset('vendors/jquery/jquery-2.1.4.min.js') }}"></script>
        <!-- external scripts -->
        <script src="{{ asset('vendors/tether/dist/js/tether.min.js') }}"></script>
        <script src="{{ asset('vendors/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('vendors/stellar/jquery.stellar.min.js') }}"></script>
        <script src="{{ asset('vendors/isotope/javascripts/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('vendors/owl-carousel/dist/owl.carousel.js') }}"></script>
        <script src="{{ asset('vendors/waypoint/waypoints.min.js') }}"></script>
        <script src="{{ asset('vendors/fancyBox/source/jquery.fancybox.pack.js') }}"></script>
        <script src="{{ asset('vendors/fancyBox/source/helpers/jquery.fancybox-thumbs.js') }}"></script>
        <script src="{{ asset('vendors/image-stretcher-master/image-stretcher.js') }}"></script>
        <script src="{{ asset('vendors/wow/wow.min.js') }}"></script>
        <script src="{{ asset('vendors/rateyo/jquery.rateyo.js') }}"></script>
        <script src="{{ asset('vendors/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
        <script src="{{ asset('vendors/bootstrap-slider-master/src/js/bootstrap-slider.js') }}"></script>
        <script src="{{ asset('vendors/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
        <script src="{{ asset('js/mega-menu.js') }}"></script>
        <!-- custom jquery script -->
        <script src="{{ asset('js/jquery.main.js') }}"></script>
        <!-- REVOLUTION JS FILES -->
        <script type="text/javascript" src="{{ asset('vendors/rev-slider/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('vendors/rev-slider/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
        <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
        <script type="text/javascript" src="{{ asset('vendors/rev-slider/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('vendors/rev-slider/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('vendors/rev-slider/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('vendors/rev-slider/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('vendors/rev-slider/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('vendors/rev-slider/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('vendors/rev-slider/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('vendors/rev-slider/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('vendors/rev-slider/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
        <!-- SNOW ADD ON -->
        <script type="text/javascript" src="{{ asset('vendors/rev-slider/revolution-addons/snow/revolution.addon.snow.min.js') }}"></script>
        <!-- revolutions slider script -->
        <script src="{{ asset('js/revolution.js') }}"></script>
    </body>
</html>
