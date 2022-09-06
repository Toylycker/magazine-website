<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@lang('app.app-name') | @yield('title')</title>
    <link rel="icon" href="{{ asset('img/akenmar.png') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/front.css') }}">
    <link rel="stylesheet" href="{{ asset('css/splide.min.css') }}">
    <script type="text/javascript" src="{{asset('js/swiper-bundle.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/aos.js') }}"></script>

    <script class="u-script" type="text/javascript" src="{{ asset('js/jquery.js') }}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{ asset('js/nicepage.js') }}" defer=""></script>
    <script src="{{asset('js\jquery-3.6.0.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/splide.min.js') }}"></script>
    <!-- PWA  -->
    <meta name="theme-color" content="#969892" />
    <link rel="apple-touch-icon" href="{{ asset('img/akenmar.png') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">
</head>

<body class="d-flex flex-column min-vh-100" style="background-image:url('{{ $dark ?asset('img/background-dark.svg'):asset('img/background-light.svg') }}'); background-size:cover;">
    @include('front.app.navbar')
    @yield('content')
    @include('front.app.footer')
    <div id="scrollToTop" class="py-1 px-2 rounded-circle"><i class="bi bi-arrow-up-short"></i></div>
    <script>
        const scrollToTop = document.querySelector("#scrollToTop");
        window.addEventListener("scroll", scrollFunction);

        function scrollFunction() {
            if (window.pageYOffset > 300) {
                scrollToTop.style.display = "flex";
            } else {
                scrollToTop.style.display = "none";
            }
        }

        scrollToTop.addEventListener("click", backToTop);

        function backToTop() {
            window.scrollTo(0, 0);
        }
    </script>
    <script>
        setTimeout(function() {
            $('#preloader').fadeToggle();
        }, 600);
    </script>
    <script src="{{ asset('/sw.js') }}"></script>
    <script>
        if (!navigator.serviceWorker.controller) {
            navigator.serviceWorker.register("/sw.js").then(function(reg) {
                console.log("Service worker has been registered for scope: " + reg.scope);
            });
        }
    </script>
    <script>
        AOS.init();
    </script>
    <style>
        #scrollToTop {
            display: none;
            justify-content: right;
            align-items: end;
            position: fixed;
            padding: 10px 15px;
            bottom: 30px;
            right: 30px;
            background-color: #fff;
            cursor: pointer;
            transition: all 0.5s ease 0s;
        }
    </style>
</body>

</html>