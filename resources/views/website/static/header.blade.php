<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>GIFS Gallery </title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Gifs" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta tag Keywords -->

    <!-- Custom-Files -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="{{asset('css/lightbox.css')}}">
    <!-- Banner-Slider-CSS -->
    <link rel="stylesheet" href="{{asset('css/banner-style.css')}}">
    <link rel="stylesheet" href="{{asset('/css/aos.css')}}">
    <link href='{{asset('css/aos-animation.css')}}' rel='stylesheet prefetch' type="text/css" media="all" />
    <!-- owl carousel -->
    <link rel="stylesheet" href="{{asset('/css/style.css')}}" type="text/css" media="all" />
    <!-- Style-CSS -->
    <link rel="stylesheet" href="{{asset('css/fontawesome-all.css')}}">
    <!-- Font-Awesome-Icons-CSS -->
    <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700" rel="stylesheet">

</head>

<body>
{{--@include('website.static.loader')--}}
<section class="content-main-w3" id="home">
    <!--/nav-->
    <div class="header_top_w3ls">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler navbar-toggler-right mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/history">Search History</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">Logout [ {{ Auth::user()->name }} ]</a>
                        <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                    <li class="nav-item">
                        <form  action="/search" method="get" >
                            <div class="form-group">
                                <input class="form-control" type="text" name="query" placeholder="Search ..." required min="2"/>
                            </div>

                        </form>
                    </li>

                </ul>
            </div>

        </nav>
        <div class="logo-wthree text-center">
            <a class="navbar-brand" href="index.html">
                GIFS <span> Library</span></a>
        </div>

    </div>
    <!--//nav-->
</section>
