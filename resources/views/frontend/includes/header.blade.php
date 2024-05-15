<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="modinatheme">
   <meta name="description" content="Homedeal">
    <title>Working Group Corporation</title>
    <link rel="shortcut icon" href="assets/img/preloader.svg">
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
    <link rel="stylesheet" href="assets/css/main.css">
    <!--<< Style.css >>-->
    <link rel="stylesheet" href="style.css">
</head>
 <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="modinatheme">
       <meta name="description" content="Homedeal">
        <title>Working Group Corporation</title>
        <link rel="shortcut icon" href="assets/img/preloader.svg">
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
        <link rel="stylesheet" href="assets/css/main.css">
        <!--<< Style.css >>-->
        <link rel="stylesheet" href="style.css">
    </head>

    <body>

   
        <div class="mouse-cursor cursor-outer"></div>
        <div class="mouse-cursor cursor-inner"></div> 

      
 <div class="fix-area">
    <div class="offcanvas__info">
        <div class="offcanvas__wrapper">
            <div class="offcanvas__content">


                <div class="offcanvas__top  d-flex justify-content-between align-items-center">
                    <div class="offcanvas__logo">
                        <a href="index-3.html">
                            <img src="assets/img/logo/logo1111 (1) (3).png" alt="logo-img">
                        </a>
                    </div>
                    <div class="offcanvas__close">
                        <button>
                        <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                
                <div class="mobile-menu fix mb-3"></div>
                <div class="offcanvas__contact">


 <!-- Header Area Start -->
 <header class="header-section-3">
    <div id="header-sticky2" class="header-3">
        <div class="container-fluid" style="padding: 0px;">
            <div class="mega-menu-wrapper">
                <div class="header-main">                    
                    <div class="header-left">
                        <div class="mean__menu-wrapper">
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li class="has-dropdown active menu-thumb">
                                            <a href="home">
                                            Home                                            
                                            </a>
                                                      
                                        </li>                                       
                                        <li>
                                            <a href="about">About</a>
                                        </li>
                                        <li>
                                            <a href="service">Services <i class="fas fa-angle-down"></i>
                                          </a>
                                            <ul class="submenu">
                                                <li><a href="#">Services</a></li>
                                                <li><a href="#">Service Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="pages">
                                                Pages
                                               
                                            </a>
                                        
                                        </li>
                                        <li>
                                            <a href="portfolio">
                                                Blog
                                               
                                            </a>
                                            
                                        </li>
                                        <li>
                                            <a href="contactus">Contact</a>
                                        </li>
                                        @guest
                                        <li>
                                            <a href="{{route('login') }}">
                                                <i class=""></i>Login 
                                            </a>
                                        </li>
                                        @endguest
                                        
                                        @auth
                                        <div style="display: flex; align-items: center;">
                                            <a class="user_icon" href="{{ route('frontend.users.profile') }}" style="margin-right: 10px;">
                                                <i class="fa-solid fa-user"></i> Hello {{ Auth::user()->name }}
                                            </a>
                                    
                                            <form id="logout-form" style="margin-left: 10px;" action="{{ route('logout') }}" method="POST">
                                                {{ csrf_field() }}
                                                <button class="btn btn-info" type="submit">Logout</button>
                                            </form>
                                        </div>
                                    @endauth
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</header>
</div>
</div>
 </div>
</div>
<header class="header-section-3">
    <div id="header-sticky" class="header-3">
        <div class="container-fluid">
            <div class="mega-menu-wrapper">
                <div class="header-main">
                    <div class="logo" style="z-index: 999;">
                        <a href="#" class="header-logo">
                            <img src="assets/img/logo/logo1111 (1) (3).png" alt="logo-img">
                        </a>
                    </div>
                    <div class="header-left">

                    </div>
                    <div class="header-right d-flex justify-content-end align-items-center">
                        <div class="header-button">
                            <a href="#" class="theme-btn theme-btn-2">
                                <span>
                                    contact us
                                    <i class="fas fa-chevron-right"></i>
                                </span>
                             </a>
                        </div>
                        <div class="header__hamburger d-xl-block my-auto">
                            <div class="sidebar__toggle">
                                <div class="header-bar">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>







