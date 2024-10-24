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
    .nav-item a{

    color: #fff;
}
.nav-item a:hover{
    background-color: #fff;
    color: #0d75bc
}

</style>

<div class="contianer-fluid">
    <div class=" d-md-flex">
        <div class="col-md-2  d-none d-sm-none d-md-block">
            <img src=".\public\assets\img\WGC-logo 1.png" alt="logo1" class="px-5 py-4">
        </div>
        <div class="col-md-10">
            <div class="col-md-12  d-none d-sm-none d-md-block">
                <div class="d-flex justify-content-end py-5">

                    <div class="me-2  py-2" style="color: #0d75bc;">
                        <span class="px-5"> <i class="far fa-envelope me-2"></i>
                            info@ilende.com</span>


                        <span class="px-5"> <i class="fas fa-phone me-2"></i>
                            +240222867206
                        </span>


                        <span class="px-5" > <a href="/login_form" style="color: #0d75bc;"><i class="fas fa-user me-2"></i>
                                Se connecter </a> </span>
                    </div>
                    <div class="social-icons d-inline-block me-4 py-2 " >
                        <a href="#"><i class="fab fa-facebook mx-2" style="color: #0d75bc;"></i></a>
                        <a href="#"><i class="fab fa-twitter mx-2" style="color: #0d75bc;"></i></a>
                        <a href="#"><i class="fab fa-instagram mx-2" style="color: #0d75bc;"></i></a>
                        <a href="#"><i class="fab fa-whatsapp mx-2" style="color: #0d75bc;"></i></a>
                    </div>
                </div>

            </div>
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg " style="background-color: #0d75bc;">
                    <div class="container">
                        <a class="navbar-brand rounded d-block d-sm-none" href="/">
                            <img src=".\public\assets\img\WGC-logo 1.png" alt="99" width="35" height="35">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse " id="navbarNav">
                            <ul class="navbar-nav fs-6">
                                <li class="nav-item">
                                    <a class="nav-link  mx-3 py-4 " href="/">Maison</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  mx-3 py-4" href="/about">À propos de nous</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  mx-3 py-4" href="#">Aide</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  mx-3 py-4" href="/service">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  mx-3 py-4" href="/contact">Contactez-nous</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  mx-3 py-4" href="/popular_service">Rejoignez-Nous En Tant
                                        Que Professionnel</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

    </div>
</div>




{{-- <div class="container-fluid"> --}}
{{-- <div class="bg-white topnav ">
                    <div class="d-flex justify-content-end">
                        <ul class="d-flex mx-2">
                            <li class="mx-2"><span><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                        <path
                                            d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z" />
                                    </svg></span> mobrilz@gmail.com</li>
                            <li class="mx-2"><span><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" class="bi bi-telephone-fill"
                                        viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                    </svg></span>8976321230</li>
                            <li class="mx-2"> <span><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" class="bi bi-person-fill"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                    </svg></span> person</li>
                            <li class="mx-2"><span><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                        <path
                                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                                    </svg></span> </li>
                        </ul>
                    </div>
                </div> --}}
{{-- </div> --}}
