{{-- <div class="fix-area">
    <div class="offcanvas__info">
        <div class="offcanvas__wrapper">
            <div class="offcanvas__content">


                <div class="offcanvas__top  d-flex justify-content-between align-items-center">
                    <div class="offcanvas__logo">
                        <a href="{{ route('frontend.index') }}">
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


                    <header class="header-section-3">
                        <div id="header-sticky2" class="header-3">
                            <div class="container-fluid" style="padding: 0px;">
                                <div class="mega-menu-wrapper">
                                    <div class="header-main">
                                        <div class="header-main">
                                            <div class="header-left">
                                                <div class="mean__menu-wrapper">
                                                    <div class="main-menu">
                                                        <nav id="mobile-menu">
                                                            <ul>
                                                                <li class="has-dropdown active menu-thumb">
                                                                    <a href="home">
                                                                        Home
                                                                        Home
                                                                    </a>
                                                                </li>
                                                                </li>
                                                                <li>
                                                                    <a href="about">About</a>
                                                                </li>
                                                                <li>
                                                                    <a href="service">Services <i
                                                                            class="fas fa-angle-down"></i>
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
                                                                        <a href="{{ route('login') }}">
                                                                            <i class=""></i>Login
                                                                            <i class=""></i>Login
                                                                        </a>
                                                                    </li>
                                                                @endguest


                                                                @auth
                                                                    <div style="display: flex; align-items: center;">
                                                                        <a class="user_icon"
                                                                            href="{{ route('frontend.users.profile') }}"
                                                                            style="margin-right: 10px;">
                                                                            <i class="fa-solid fa-user"></i> Hello
                                                                            {{ Auth::user()->name }}
                                                                        </a>


                                                                        <form id="logout-form" style="margin-left: 10px;"
                                                                            action="{{ route('logout') }}" method="POST">
                                                                            {{ csrf_field() }}
                                                                            <button class="btn btn-info"
                                                                                type="submit">Logout</button>
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

             <div class="mega-menu-wrapper">
                <div class="header-main">
                    <div class="logo" style="z-index: 999;">
                        <a href="{{ route('frontend.index') }}" class="header-logo">
                            <img src="assets/img/logo/logo1111 (1) (3).png" alt="logo-img">
                        </a>
                    </div>
                    <div class="header-left">

                    </div>
                    <div class="header-right d-flex justify-content-end align-items-center">
                        <div class="header-button">
                            <a href="#" class="theme-btn theme-btn-2">
                                <span>
                                    {{ __('Login') }}
                                    <i class="fas fa-chevron-right"></i>
                                </span>
                            </a>
                        </div>
                        <div class="header-button">
                            <a href="{{ route('form1') }}" class="theme-btn theme-btn-2">
                                <span>
                                    {{ __('Join as a Professional') }}
                                    <i class="fas fa-chevron-right"></i>
                                </span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>

        </div>
   </header>

 <div class="header__hamburger d-xl-block my-auto">
    <div class="sidebar__toggle">
        <div class="header-bar">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
 </div>


</div> --}}


<style>
    :root {
        --primary-blue: #0d75bc;
    }

    /* Essential custom styles */
    .top-bar-text {
        color: var(--primary-blue);
        font-size: 1rem;
        font-weight: 600;
    }

    .top-bar-icon {
        color: var(--primary-blue);
        font-size: 1rem;
    }

    .navbar {
        padding: 0 !important;
        background-color: var(--primary-blue) !important;
    }

    .navbar-nav .nav-link {
        color: #fff !important;
        padding: 1.75rem 1rem !important;
        font-weight: 600 !important;
        font-size: 0.9rem;
        transition: all 0.3s ease;
    }

    .navbar-nav .nav-link:hover,
    .navbar-nav .nav-link:focus,
    .navbar-nav .nav-item.active .nav-link {
        background-color: #fff !important;
        color: var(--primary-blue) !important;
    }

    .logo-container img {
        max-width: 180px;
        padding: 1rem;
    }

    .social-icon {
        font-size: 1.3rem;
        transition: opacity 0.3s ease;
    }

    .social-icon:hover {
        opacity: 0.8;
    }

    @media (min-width:769px) {
        .mar_navbar{
            padding: 0 20px;
        }


    }

    @media (max-width:425px) {
        .mobile-logo {
            max-width: 65px;
            padding: 0.5rem 0;
        }

    }
    /* Specific styles for 1024px screens */
    @media (min-width: 992px) and (max-width: 1279px) {
        .logo-container img {
            max-width: 150px;
            padding: 0.75rem;
        }

        .top-bar-text {
            font-size: 0.9rem;
        }

        .top-bar-icon {
            font-size: 0.9rem;
        }

        .navbar-nav .nav-link {
            padding: 1.4rem 0.75rem;
            font-size: 0.85rem;
        }

        .social-icon {
            font-size: 1.2rem;
        }

        .top-contact-info {
            gap: 0.75rem !important;
        }

        .social-icons-container {
            gap: 0.5rem !important;
        }
    }

    /* Large screens (1440px and above) */
    @media (min-width: 1280px) {
        .navbar-nav .nav-link {
            padding: 1.75rem 1.5rem !important;
            font-size: 1.3rem;
        }

        .logo-container img {
            max-width: 200px;
            padding: 1rem 2rem;
        }

        .top-bar-text {
            font-size: 1.3rem;
        }

    }

    /* Mobile styles */
    @media (max-width: 991.98px) {



        .navbar-toggler {
            /* border-color: #fff !important; */
            margin: 0.5rem 0;
        }


    }
    @media (min-width: 426px) and (max-width:991.98px){
        .mobile-logo {
            max-width: 120px;
            padding: 0.5rem 0;
        }
        .navbar-nav .nav-link {
            padding: 1rem 1.5rem !important;
        }

    }

    @media (max-width: 425px){
        .mobile-logo {
            max-width: 65px;
            padding: 0.5rem 0.5rem;
        }
        .navbar-nav .nav-link {
            padding: 0.1rem 0.5rem !important;
        }

    }

    </style>

<div class="container-fluid p-0">
    <div class="row g-0">
        <!-- Logo Section -->
        <div class="col-auto d-none d-lg-block bg-white">
            <div class="logo-container">
                <img src="./public/assets/img/WGC-logo 1.png" alt="WGC Logo" class="img-fluid">
            </div>
        </div>

        <!-- Main Content Section -->
        <div class="col">
            <!-- Top Bar -->
            <div class="d-none d-lg-block bg-white">
                <div class="container-fluid py-4">
                    <div class="d-flex justify-content-center align-items-center">
                        <!-- Contact Info -->
                        <div class="d-flex align-items-center me-3 top-contact-info gap-5">
                            <span class="top-bar-text">
                                <i class="far fa-envelope me-2 top-bar-icon"></i>
                                info@ilende.com
                            </span>
                            <span class="top-bar-text">
                                <i class="fas fa-phone me-2 top-bar-icon"></i>
                                +240222867206
                            </span>
                            <a href="/login_form" class="top-bar-text text-decoration-none">
                                <i class="fas fa-user me-2 top-bar-icon"></i>
                                Se connecter
                            </a>
                        </div>

                        <!-- Social Icons -->
                        <div class="d-flex align-items-center social-icons-container gap-2 ms-5">
                            <a href="#" class="social-icon" style="color: var(--primary-blue);">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a href="#" class="social-icon" style="color: var(--primary-blue);">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="social-icon" style="color: var(--primary-blue);">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="social-icon" style="color: var(--primary-blue);">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation -->
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid px-0">
                    <!-- Mobile Logo -->
                    <a class="navbar-brand d-lg-none" href="/">
                        <img src="./public/assets/img/WGC-logo 1.png" alt="WGC Logo" class="mobile-logo rounded-circle">
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav" aria-controls="navbarNav"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mar_navbar">
                            <li class="nav-item">
                                <a class="nav-link" href="/">Maison</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/about">À propos de nous</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Aide</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/service">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/contact">Contactez-nous</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/popular_service">Rejoignez-Nous En Tant Que Professionnel</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>



