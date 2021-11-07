<!doctype html>
<html lang="fa">
<head>
    <!-- ======================================== Start for responsive ======================================== -->
    <meta charset="UTF-8"/>
    <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <!-- ======================================== End for responsive ======================================== -->
    <!-- ======================================== Start for css ======================================== -->
    @yield('css-for-me')
    <link href="{{asset('./assets/fontawesome/all.css')}}" rel="stylesheet"/>
    <link href="{{asset('./assets/css/style.css')}}" rel="stylesheet"/>
    <link href="{{asset('./assets/swiper/swiper-bundle.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('./assets/swiper/swiper-css-me.css')}}" rel="stylesheet"/>
    <!-- ======================================== End for css ======================================== -->
    <!-- ======================================== Start for seo and social ======================================== -->
    @yield('seo-for-me')
<!-- ======================================== End for seo and social ======================================== -->
    <!-- ======================================== Start for favicon ======================================== -->
    {{--    <link rel="icon" href="{{asset('assets/images/logo.png')}}" type="image/png'}}">--}}
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('./assets/images/favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('./assets/images/favicon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('./assets/images/favicon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('./assets/images/favicon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('./assets/images/favicon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('./assets/images/favicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('./assets/images/favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('./assets/images/favicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('./assets/images/favicon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192"
          href="{{asset('./assets/images/favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('./assets/images/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('./assets/images/favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('./assets/images/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('./assets/images/favicon/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- ======================================== End for favicon ======================================== -->
</head>
<body>
<!-- ======================================== Start make website ======================================== -->
@yield('content-for-me')
<!-- ======================================== Start make javascript ======================================== -->
<script src="{{mix('js/app.js')}}"></script>
<script src="{{asset('assets/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/swiper/swiper-js-me.js')}}"></script>
@yield('js-for-me')
<!-- ======================================== End make javascript ======================================== -->
<!-- ======================================== End make website ======================================== -->
</body>
</html>

