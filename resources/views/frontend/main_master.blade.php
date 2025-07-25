<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Ud.loc</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/img/favicon.png') }}">
        <link rel="stylesheet" href="{{ asset('frontend//css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend//css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend//css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend//css/fontawesome-all.min.css') }}') }}">
        <link rel="stylesheet" href="{{ asset('frontend//css/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend//css/default.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend//css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
    </head>
    <body>
        <div id="preloader">
            <div class="rasalina-spin-box"></div>
        </div>
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <header>
            @include('frontend.body.header')
        </header>
        <main>
            @yield('main')
        </main>
        @include('frontend.body.footer')
        <script src="{{ asset('frontend/js/vendor/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('frontend/js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('frontend/js/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('frontend/js/element-in-view.js') }}"></script>
        <script src="{{ asset('frontend/js/slick.min.js') }}"></script>
        <script src="{{ asset('frontend/js/ajax-form.js') }}"></script>
        <script src="{{ asset('frontend/js/wow.min.js') }}"></script>
        <script src="{{ asset('frontend/js/plugins.js') }}"></script>
        <script src="{{ asset('frontend/js/main.js') }}"></script>
    </body>
</html>
