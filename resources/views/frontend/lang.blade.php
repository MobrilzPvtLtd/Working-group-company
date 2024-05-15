@extends('frontend.layouts.app')

@section('title')
    {{ app_name() }}
@endsection

@section('content')
<body>

    <div class="popup-search-box d-none d-lg-block">
        <button class="searchClose"><i class="fal fa-times"></i></button>
        <form action="#">
            <input type="text" placeholder="What are you looking for?">
            <button type="submit"><i class="fal fa-search"></i></button>
        </form>
    </div>
    <!--==============================
    Mobile Menu
  ============================== -->
   ===============
Hero Area
==============================-->
    <section class="themeholy-hero-wrapper hero-3" id="hero">
        <div class="hero-slider-3 themeholy-carousel" data-fade="true" data-slide-show="1" data-md-slide-show="1" data-arrows="true" data-xl-arrows="true" data-ml-arrows="true" data-lg-arrows="true">
            <div class="themeholy-hero-slide">
                <div class="themeholy-hero-bg zoom" data-bg-src="assets/img/hero/6020cb22035bcf6ef9dd4a72_home-cleaning-hero.jpg">
                </div>
                <div class="container">
                    <div class="hero-style3">
                        <span class="hero-subtitle" data-ani="slideindown" data-ani-delay="0.1s"><img src="assets/img/shape/title_left.svg" alt="shape">We’re Provide best services</span>
                        <h1 class="hero-title" data-ani="slideindown" data-ani-delay="0.0s">Cleaning services from any where</h1>
                        <div class="btn-group justify-content-center slideinup" data-ani="slideinleft" data-ani-delay="0.9s">
                            <a href="#" class="themeholy-btn blue-btn2">Free Quote!<span class="icon"><i class="fa-sharp fa-regular fa-paper-plane"></i></span></a>
                            <a href="about.html" class="themeholy-btn white-btn">Read More<span class="icon"><i class="fa-solid fa-arrow-up-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="themeholy-hero-slide">
                <div class="themeholy-hero-bg zoom" data-bg-src="assets/img/hero/AdobeStock_62722164-scaled.jpeg">
                </div>
                <div class="container">
                    <div class="hero-style3">
                        <span class="hero-subtitle" data-ani="slideindown" data-ani-delay="0.1s"><img src="assets/img/shape/title_left.svg" alt="shape">We’re Provide best services</span>
                        <h1 class="hero-title" data-ani="slideindown" data-ani-delay="0.0s">Dog walking and dog care</h1>
                        <div class="btn-group justify-content-center slideinup" data-ani="slideinleft" data-ani-delay="0.9s">
                            <a href="#" class="themeholy-btn blue-btn2">Free Quote!<span class="icon"><i class="fa-sharp fa-regular fa-paper-plane"></i></span></a>
                            <a href="about.html" class="themeholy-btn white-btn">Read More<span class="icon"><i class="fa-solid fa-arrow-up-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="shape-mockup movingX d-none d-xxl-block" data-top="25%" data-left="0%"><img src="assets/img/hero/shape_1.svg" alt="shape"></div> -->
        <!-- <div class="shape-mockup movingX d-none d-xxl-block" data-bottom="0px" data-right="0%"><img src="assets/img/hero/shape_2.svg" alt="shape"></div> -->
    </section>
    <!--======== / Hero Section ========-->
    <!--==============================
Service Area  
==============================-->
    <section class="bg-smoke space" data-bg-src="assets/img/bg/service_bg_2.png">
        <div class="container">
            <div class="row">
                <div class="title-area mt-n1 text-center">
                    <span class="sub-title"><img src="assets/img/shape/title_left.svg" alt="shape">Our Services</span>
                    <h2 class="sec-title">Popular Services</h2>
                </div>
            </div>
            <div class="row slider-shadow themeholy-carousel" id="serviceSlide1" data-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1" data-arrows="true">

                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="service-box style3">
                        <div class="service-box_shape moving_X">
                            <img src="assets/img/service/01.svg" alt="Service">
                        </div>
                        <div class="service-box-content">
                            <div class="service-box_icon"><img src="assets/img/icon/dog.svg" alt=""></div>
                            <h3 class="service-box_title"><a href="#">Dog Walking</a></h3>
                            <p class="service-box_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe suscipit maxime temporibus sapiente,</p>
                            <a href="#" class="line-btn">Read more<i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="service-box style3">
                        <div class="service-box_shape moving_X">
                            <img src="assets/img/service/child-care (1).svg" alt="Service">
                        </div>
                        <div class="service-box-content">
                            <div class="service-box_icon"><img src="assets/img/icon/child-care.svg" alt=""></div>
                            <h3 class="service-box_title"><a href="#">Caring For Children</a></h3>
                            <p class="service-box_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe suscipit maxime temporibus sapiente,</p>
                            <a href="#" class="line-btn">Read more<i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="service-box style3">
                        <div class="service-box_shape moving_X">
                            <img src="assets/img/service/appointment.png" alt="Service">
                        </div>
                        <div class="service-box-content">
                            <div class="service-box_icon"><img src="assets/img/icon/images-_2_.svg" alt=""></div>
                            <h3 class="service-box_title"><a href="#">Taking People to appointments</a></h3>
                            <p class="service-box_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe suscipit maxime,</p>
                            <a href="#" class="line-btn">Read more<i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="service-box style3">
                        <div class="service-box_shape moving_X">
                            <img src="assets/img/service/download-_6_.svg" alt="Service">
                        </div>
                        <div class="service-box-content">
                            <div class="service-box_icon"><img src="assets/img/icon/shopping.svg" alt=""></div>
                            <h3 class="service-box_title"><a href="#">Shopping</a></h3>
                            <p class="service-box_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe suscipit maxime temporibus sapiente,</p>
                            <a href="#" class="line-btn">Read more<i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="service-box style3">
                        <div class="service-box_shape moving_X">
                            <img src="assets/img/service/walking.png" alt="Service">
                        </div>
                        <div class="service-box-content">
                            <div class="service-box_icon"><img src="assets/img/icon/walking.svg" alt=""></div>
                            <h3 class="service-box_title"><a href="#">Eldery Walking</a></h3>
                            <p class="service-box_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe suscipit maxime temporibus sapiente,</p>
                            <a href="#" class="line-btn">Read more<i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="service-box style3">
                        <div class="service-box_shape moving_X">
                            <img src="assets/img/service/repair.png" alt="Service">
                        </div>
                        <div class="service-box-content">
                            <div class="service-box_icon"><img src="assets/img/icon/repair.svg" alt=""></div>
                            <h3 class="service-box_title"><a href="#">Small Repairs</a></h3>
                            <p class="service-box_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe suscipit maxime temporibus sapiente,</p>
                            <a href="#" class="line-btn">Read more<i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!--==============================
About Area  
==============================-->
    <div class="overflow-hidden space" id="about-sec">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="img-box4">
                        <div class="img4">
                            <img src="assets/img/normal/collarge.jpg" alt="About">
                        </div>
                        <div class="about-counter bounce-slide">
                            <h2 class="counter-card_number"><span class="counter-number">25</span>+</h2>
                            <p class="counter-card_text">Years Working Experience</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="title-area mb-35">
                        <span class="sub-title"><img src="assets/img/shape/title_left.svg" alt="shape">About US</span>
                        <h2 class="sec-title">Heading Lorem, ipsum dolor sit amet consectetur</h2>
                    </div>
                    <p class="mt-n2 mr-10">Donec rutrum congue leo eget malesuada. Curabitur aliquet quam id dui posuere
                        blandit. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Praesent sapien massa,
                        convallis a pellentesque nec,</p>
                    <div class="about-wrap">
                        <div class="about-content">
                            <div class="about_icon">
                                <img src="assets/img/icon/about_3_1.svg" alt="icon">
                            </div>
                            <div class="media-body">
                                <h3 class="about_title">Heading</h3>
                                <p class="about_text">Sed porttitor lectus nibh. Curabitur arcu erat, accumsan id
                                    imperdiet et, porttitor at sem. Lorem ipsum dolo</p>
                            </div>
                        </div>
                        <div class="about-content">
                            <div class="about_icon">
                                <img src="assets/img/icon/about_3_2.svg" alt="icon">
                            </div>
                            <div class="media-body">
                                <h3 class="about_title">Heading</h3>
                                <p class="about_text">Proin eget tortor risus. Vestibulum ante ipsum primis in faucibus
                                    orci luctus et ultrices posuere cubilia Curae</p>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group mt-45">
                        <a href="#" class="themeholy-btn">Discover More<i class="fa-solid fa-arrow-right"></i></a>
                        <div class="popup-search-box d-none d-lg-block">
                            <button class="searchClose"><i class="fal fa-times"></i></button>
                            <form action="#">
                                <input type="text" placeholder="Wonach suchen Sie?">
                                <button type="submit"><i class="fal fa-search"></i></button>
                            </form>
                        </div>
                        <!--==============================
                            Mobile Menu
                          ============================== -->
                           ===============
                        Hero-Bereich
                        ==============================-->
                        <section class="themeholy-hero-wrapper hero-3" id="hero">
                            <div class="hero-slider-3 themeholy-carousel" data-fade="true" data-slide-show="1" data-md-slide-show="1" data-arrows="true" data-xl-arrows="true" data-ml-arrows="true" data-lg-arrows="true">
                                <div class="themeholy-hero-slide">
                                    <div class="themeholy-hero-bg zoom" data-bg-src="assets/img/hero/6020cb22035bcf6ef9dd4a72_home-cleaning-hero.jpg">
                                    </div>
                                    <div class="container">
                                        <div class="hero-style3">
                                            <span class="hero-subtitle" data-ani="slideindown" data-ani-delay="0.1s"><img src="assets/img/shape/title_left.svg" alt="shape">Wir bieten die besten Dienstleistungen an</span>
                                            <h1 class="hero-title" data-ani="slideindown" data-ani-delay="0.0s">Reinigungsdienste von überall</h1>
                                            <div class="btn-group justify-content-center slideinup" data-ani="slideinleft" data-ani-delay="0.9s">
                                                <a href="#" class="themeholy-btn blue-btn2">Kostenloser Kostenvoranschlag!<span class="icon"><i class="fa-sharp fa-regular fa-paper-plane"></i></span></a>
                                                <a href="about.html" class="themeholy-btn white-btn">Mehr erfahren<span class="icon"><i class="fa-solid fa-arrow-up-right"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="themeholy-hero-slide">
                                    <div class="themeholy-hero-bg zoom" data-bg-src="assets/img/hero/AdobeStock_62722164-scaled.jpeg">
                                    </div>
                                    <div class="container">
                                        <div class="hero-style3">
                                            <span class="hero-subtitle" data-ani="slideindown" data-ani-delay="0.1s"><img src="assets/img/shape/title_left.svg" alt="shape">Wir bieten die besten Dienstleistungen an</span>
                                            <h1 class="hero-title" data-ani="slideindown" data-ani-delay="0.0s">Hunde spazieren und Hundebetreuung</h1>
                                            <div class="btn-group justify-content-center slideinup" data-ani="slideinleft" data-ani-delay="0.9s">
                                                <a href="#" class="themeholy-btn blue-btn2">Kostenloser Kostenvoranschlag!<span class="icon"><i class="fa-sharp fa-regular fa-paper-plane"></i></span></a>
                                                <a href="about.html" class="themeholy-btn white-btn">Mehr erfahren<span class="icon"><i class="fa-solid fa-arrow-up-right"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="shape-mockup movingX d-none d-xxl-block" data-top="25%" data-left="0%"><img src="assets/img/hero/shape_1.svg" alt="shape"></div> -->
                            <!-- <div class="shape-mockup movingX d-none d-xxl-block" data-bottom="0px" data-right="0%"><img src="assets/img/hero/shape_2.svg" alt="shape"></div> -->
                        </section>
                        <!--======== / Hero Section ========-->
                        <!--==============================
                        Service-Bereich  
                        ==============================-->
                        <section class="bg-smoke space" data-bg-src="assets/img/bg/service_bg_2.png">
                            <div class="container">
                                <div class="row">
                                    <div class="title-area mt-n1 text-center">
                                        <span class="sub-title"><img src="assets/img/shape/title_left.svg" alt="shape">Unsere Dienstleistungen</span>
                                        <h2 class="sec-title">Beliebte Dienstleistungen</h2>
                                    </div>
                                </div>
                                <div class="row slider-shadow themeholy-carousel" id="serviceSlide1" data-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1" data-arrows="true">
                        
                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <div class="service-box style3">
                                            <div class="service-box_shape moving_X">
                                                <img src="assets/img/service/01.svg" alt="Service">
                                            </div>
                                            <div class="service-box-content">
                                                <div class="service-box_icon"><img src="assets/img/icon/dog.svg" alt=""></div>
                                                <h3 class="service-box_title"><a href="#">Hunde spazieren</a></h3>
                                                <p class="service-box_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe suscipit maxime temporibus sapiente,</p>
                                                <a href="#" class="line-btn">Mehr erfahren<i class="fa-solid fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                        
                                    <!-- Restliche Dienste... -->
                        
                                </div>
                            </div>
                        </section>
                        <!--==============================
                        Über-Bereich  
                        ==============================-->
                        <div class="overflow-hidden space" id="about-sec">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="img-box4">
                                            <div class="img4">
                                                <img src="assets/img/normal/collarge.jpg" alt="About">
                                            </div>
                                            <div class="about-counter bounce-slide">
                                                <h2 class="counter-card_number"><span class="counter-number">25</span>+</h2>
                                                <p class="counter-card_text">Jahre Arbeitserfahrung</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="title-area mb-35">
                                            <span class="sub-title"><img src="assets/img/shape/title_left.svg" alt="shape">Über uns</span>
                                            <h2 class="sec-title">Überschrift Lorem, ipsum dolor sit amet consectetur</h2>
                                        </div>
                                        <p class="mt-n2 mr-10">Donec rutrum congue leo eget malesuada. Curabitur aliquet quam id dui posuere
                                            blandit. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Praesent sapien massa,
                                            convallis a pellentesque nec,</p>
                                        <div class="about-wrap">
                                            <div class="about-content">
                                                <div class="about_icon">
                                                    <img src="assets/img/icon/about_3_1.svg" alt="icon">
                                                </div>
                                                <div class="media-body">
                                                    <h3 class="about_title">Überschrift</h3>
                                                    <p class="about_text">Sed porttitor lectus nibh. Curabitur arcu erat, accumsan id
                                                        imperdiet et, porttitor at sem. Lorem ipsum dolo</p>
                                                </div>
                                            </div>
                                            <div class="about-content">
                                                <div class="about_icon">
                                                    <img src="assets/img/icon/about_3_2.svg" alt="icon">
                                                </div>
                                                <div class="media-body">
                                                    <h3 class="about_title">Überschrift</h3>
                                                    <p class="about_text">Proin eget tortor risus. Vestibulum ante ipsum primis in faucibus
                                                        orci luctus et ultrices posuere cubilia Curae</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-group mt-45">
                                            <a href="#" class="themeholy-btn">Mehr entdecken<i class="fa-solid fa-arrow-right"></i></a>
                        