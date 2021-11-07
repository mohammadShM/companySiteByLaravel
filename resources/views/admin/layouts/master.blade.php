<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title-for-admin','صفحه مدیریت')</title>
    <!-- ======================================== Start for css ======================================== -->
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/styleBackend.css')}}">
@yield('css-for-admin')
<!-- ======================================== End for css ======================================== -->
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
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('./assets/images/favicon/android-icon-192x192.png')}}">
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
<!-- ======================================== Start for content ======================================== -->
{{-- start main --}}
<section class="container-fluid m-0 p-0">
    {{-- start make menu --}}
    <section class="menu fixed-top shadow">
        <nav class="navbar navbar-expand-sm navbar-light bg-dark">
            <a class="navbar-brand text-white" href="{{route('home-page')}}" target="_blank">Home Page</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
                    aria-controls="collapsibleNavId"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <!-- ======================== Start for home ======================== -->
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="{{route('admin')}}">Home
                            <span class="sr-only">(current)</span></a>
                    </li>
                    <!-- ======================== End for home ======================== -->
                    <!-- ======================== Start for parallax ======================== -->
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="{{route('parallax.index')}}">Parallax
                            <span class="sr-only">(current)</span></a>
                    </li>
                    <!-- ======================== End for parallax ======================== -->
                    <!-- ======================== Start for link ======================== -->
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="{{route('link.index')}}">Link
                            <span class="sr-only">(current)</span></a>
                    </li>
                    <!-- ======================== End for link ======================== -->
                    <!-- ======================== Start for news ======================== -->
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="{{route('news.index')}}">News
                            <span class="sr-only">(current)</span></a>
                    </li>
                    <!-- ======================== End for news ======================== -->
                    <!-- ======================== Start for comment ======================== -->
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="{{route('comment.index')}}">Comment
                            <span class="sr-only">(current)</span></a>
                    </li>
                    <!-- ======================== End for comment ======================== -->
                    <!-- ======================== Start for contact ======================== -->
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="{{route('contact.index')}}">Contact
                            <span class="sr-only">(current)</span></a>
                    </li>
                    <!-- ======================== End for contact ======================== -->
                    <!-- ======================== Start for slider ======================== -->
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="{{route('slider.index')}}">Slider
                            <span class="sr-only">(current)</span></a>
                    </li>
                    <!-- ======================== End for slider ======================== -->
                    <!-- ======================== Start for logout ======================== -->
                    <li class="nav-item">
                        <a class="nav-link text-danger ml-5 font-weight-bolder" href="{{route('logout')}}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Exit</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                    <!-- ======================== End for logout ======================== -->
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <a href="{{route('admin')}}">
                        <img src="{{asset('assets/images/logo.png')}}" alt="logo">
                    </a>
                </form>
            </div>
        </nav>
    </section>
    {{-- end make menu --}}
    {{-- start make content --}}
    <section class="mt-5">
        @yield('content-for-admin')
    </section>
    {{-- end make content --}}
</section>
{{-- end main --}}
<!-- ======================================== End for content ======================================== -->
<!-- ======================================== Start for js ======================================== -->
<script src="{{mix('js/app.js')}}"></script>
@yield('js-for-admin')
<!-- ======================================== End for js ======================================== -->
</body>
</html>
