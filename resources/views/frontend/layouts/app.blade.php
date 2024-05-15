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
        {{-- <link rel="shortcut icon" href="assets/img/preloader.svg"> --}}
        <!--<< Bootstrap min.css >>-->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!--<< Font Awesome.css >>-->
        <link rel="stylesheet" href="assets/css/font-awesome.css">
        <!--<< Animate.css >>-->
        <link rel="stylesheet" href="assets/css/animate.css">
        <!--<< Magnific Popup.css >>-->
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <!--<< MeanMenu.css >>-->
        <link rel="stylesheet" href="assets/css/meanmenu.css">
        <!--<< Slick.css >>-->
        <link rel="stylesheet" href="assets/css/slick.css">
        <!--<< Nice Select.css >>-->
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <!--<< Main.css >>-->
        <link rel="stylesheet" href="assets/css/main1.css">
        <!--<< Style.css >>-->
        {{-- <link rel="stylesheet" href="style.css"> --}}
    
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
       

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">


 <body>
 @include('frontend.includes.header')
 @yield('content')
 @include('frontend.includes.footer')
</body>

</html>
