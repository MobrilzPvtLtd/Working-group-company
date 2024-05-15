<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->currentLocale()) }}" dir="{{ language_direction() }}">

    <head>
        <meta charset="utf-8" />
        <link href="{{ asset('img/favicon.png') }}" rel="apple-touch-icon" sizes="76x76">
        <link type="image/png" href="{{ asset('img/favicon.png') }}" rel="icon">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>@yield('title') | {{ config('app.name') }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="{{ setting('meta_description') }}">
        <meta name="keyword" content="{{ setting('meta_keyword') }}">
        @include('frontend.includes.meta')

        <!-- Shortcut Icon -->
        <link href="{{ asset('img/favicon.png') }}" rel="shortcut icon">
        <link type="image/ico" href="{{ asset('img/favicon.png') }}" rel="icon" />
        <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicons/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicons/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicons/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicons/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicons/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicons/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicons/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicons/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicons/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicons/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
        <link rel="manifest" href="assets/img/favicons/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="assets/img/favicons/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
    
        <!--==============================
          Google Fonts
        ============================== -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
        <!-- <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&ampfamily=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,500&ampdisplay=swap" rel="stylesheet"> -->
    
        <!--==============================
            All CSS File
        ============================== -->
        <!-- Bootstrap -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- Fontawesome Icon -->
        <link rel="stylesheet" href="assets/css/fontawesome.min.css">
        <!-- Magnific Popup -->
        <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
        <!-- Slick Slider -->
        <link rel="stylesheet" href="assets/css/slick.min.css">
        <!-- Theme Custom CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/ankit.css">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

       

       

        @stack('after-styles')

        
    </head>

    <body>

        @include('frontend.includes.header')

        
            @yield('content')
        

        @include('frontend.includes.footer')

        <!-- Scripts -->
        @livewireScripts
        @stack('after-scripts')
    </body>

</html>
