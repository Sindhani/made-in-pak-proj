<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Title -->
    <title>@yield('title', 'Made in Pak')</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/favicon.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{asset('frontend/assets/vendor/font-awesome/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/font-electro.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/assets/vendor/animate.css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/vendor/hs-megamenu/src/hs.megamenu.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/vendor/fancybox/jquery.fancybox.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/vendor/slick-carousel/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}">

    <!-- CSS Electro Template -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/theme.css')}}">
</head>

<body>
@include('frontend.partials.header')
@yield('contents')
@include('frontend.partials.footer')
{{--All Scripts tags--}}
<script src="{{asset('frontend/assets/vendor/jquery/dist/jquery.min.js')}}"></script>
<!-- <script src="assets/vendor/jquery/dist/jquery.min.js"></script> -->
<script src="{{asset('frontend/assets/vendor/jquery-migrate/dist/jquery-migrate.min.js')}}"></script>
<script src="{{asset('frontend/assets/vendor/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('frontend/assets/vendor/bootstrap/bootstrap.min.js')}}"></script>

<!-- JS Implementing Plugins -->
<script src="{{asset('frontend/assets/vendor/appear.js')}}"></script>
<script src="{{asset('frontend/assets/vendor/jquery.countdown.min.js')}}"></script>
<script src="{{asset('frontend/assets/vendor/hs-megamenu/src/hs.megamenu.js')}}"></script>
<script src="{{asset('frontend/assets/vendor/svg-injector/dist/svg-injector.min.js')}}"></script>
<script src="{{asset('frontend/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('frontend/assets/vendor/jquery-validation/dist/jquery.validate.min.js')}}"></script>
<script src="{{asset('frontend/assets/vendor/fancybox/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('frontend/assets/vendor/typed.js/lib/typed.min.js')}}"></script>
<script src="{{asset('frontend/assets/vendor/slick-carousel/slick/slick.js')}}"></script>
<script src="{{asset('frontend/assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>

<!-- JS Electro -->
<script src="{{asset('frontend/assets/js/hs.core.js')}}"></script>
<script src="{{asset('frontend/assets/js/components/hs.countdown.js')}}"></script>
<script src="{{asset('frontend/assets/js/components/hs.header.js')}}"></script>
<script src="{{asset('frontend/assets/js/components/hs.hamburgers.js')}}"></script>
<script src="{{asset('frontend/assets/js/components/hs.unfold.js')}}"></script>
<script src="{{asset('frontend/assets/js/components/hs.focus-state.js')}}"></script>
<script src="{{asset('frontend/assets/js/components/hs.malihu-scrollbar.js')}}"></script>
<script src="{{asset('frontend/assets/js/components/hs.validation.js')}}"></script>
<script src="{{asset('frontend/assets/js/components/hs.fancybox.js')}}"></script>
<script src="{{asset('frontend/assets/js/components/hs.onscroll-animation.js')}}"></script>
<script src="{{asset('frontend/assets/js/components/hs.slick-carousel.js')}}"></script>
<script src="{{asset('frontend/assets/js/components/hs.show-animation.js')}}"></script>
<script src="{{asset('frontend/assets/js/components/hs.svg-injector.js')}}"></script>
<script src="{{asset('frontend/assets/js/components/hs.go-to.js')}}"></script>
<script src="{{asset('frontend/assets/js/components/hs.selectpicker.js')}}"></script>
@stack('scripts')

</body>
