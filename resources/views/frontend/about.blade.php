@extends('frontend.layouts.app')

@section('title')
    {{ app_name() }}
@endsection

@section('content')
    <!--<< Mouse Cursor Start >>-->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>
    <style>
        .bg24 {
            background-image: linear-gradient(rgba(235, 240, 245, 0.998), rgba(0, 113, 200, 0.849)),
                url('./public/assets/img/bg/aboutbg24.png ');
            background-repeat: no-repeat;
            background-size: cover;
            height: 45rem;

        }
    </style>
    {{-- <section class="hero-section hero-3">
        <div class="slider-button">
            <div class="hero-nav-prev"><i class="fal fa-long-arrow-left"></i></div>
            <div class="hero-nav-next"><i class="fal fa-long-arrow-right"></i></div>
        </div>
        <div class="hero-slider-active-2">
            <div class="single-slide">
                <div class="slide-bg bg-cover"
                    style="background-image: url('./assets/img/hero/three-people-doing-house-cleaning-rm5bzw5kkayn968b.jpg');">
                    <div class="container">
                        <div class="hero-content">

                            <h1 class="fs-lg animated" data-animation-in="fadeInUp" data-delay-in="0.5">
                                The best requests for <br>Cleaning
                            </h1>
                            <p style="color: #ffffff; font-size: 20px;" data-animation-in="fadeInUp" data-delay-in="0.5">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia dolorum esse nemo eligendi
                                quibusdam nostrum quo rerum ullam. Assumenda unde autem repellendus optio nisi quas
                                praesentium magnam itaque voluptatem aliquam? </p>


                            <div class="hero-button fs-lg animated" data-animation-in="fadeInUp" data-delay-in="0.7">
                                <a href="#" class="theme-btn theme-btn-2 hover-white">
                                    <span>
                                        Get in touch
                                        <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="single-slide">
                <div class="slide-bg bg-cover"
                    style="background-image: url('./assets/img/hero/a-dog-walk-walking-the-dogs-in-the-city-2022-11-08-10-52-58-utc.jpg');">
                    <div class="container">
                        <div class="hero-content">

                            <h1 class="fs-lg animated" data-animation-in="fadeInUp" data-delay-in="0.5">
                                The best requests for <br>Dog walking
                            </h1>
                            <p style="color: #ffffff; font-size: 20px;" data-animation-in="fadeInUp" data-delay-in="0.5">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia dolorum esse nemo eligendi
                                quibusdam nostrum quo rerum ullam. Assumenda unde autem repellendus optio nisi quas
                                praesentium magnam itaque voluptatem aliquam? </p>
                            <div class="hero-button fs-lg animated" data-animation-in="fadeInUp" data-delay-in="0.7">
                                <a href="#" class="theme-btn theme-btn-2 hover-white">
                                    <span>
                                        Get in touch
                                        <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    {{-- bg -- img  --}}
    {{-- <div class="container-fluid">
        <div class="">

        </div>

    </div> --}}

    <div class="container-fluid  bg24 position-relative w-100">
        <div class="row position-absolute top-50 ">
            <h2 class="text-start ps-5">À propos <br />de nous</h2>
        </div>
    </div>

    <section class="service-section fix section-padding my-5">

        <div class="container-fluid">
            <div class="row position-relative" style=" ">

                <div class="position-relative  " style="left: 14rem"> <img src="./resources\views\assets\img\bg\girl.png"
                        alt="111" class="w-25">
                </div>
                <div class=" col-md-8  col-8 position-absolute top-50 end-0 translate-middle-y text-start text-white rounded p-5
                "
                    style="background-color: #0d75bc;">
                    <h4 class="text-white pb-3">L'histoire du WGC</h4>
                    Workin Group Company (WGC) a été fondée dans le but de promouvoir l'entrepreneuriat individuel et de
                    permettre aux gens de gérer leur emploi du temps de manière autonome. Notre mission est d’accompagner
                    les individus dans leur cheminement vers un travail indépendant, en leur offrant une flexibilité et une
                    liberté sans précédent. Nous accordons une attention particulière aux mères célibataires, en leur
                    offrant des opportunités de travail adaptées à leur vie de famille.

                    <br /><br /><br />

                    L’idée de WGC est née d’une volonté de transformation sociale, permettant aux individus de prendre en
                    main leur avenir professionnel. Nous croyons à l’importance de l’autonomie et à la capacité de chacun à
                    réussir seul avec le bon accompagnement. WGC aspire à être un partenaire de confiance pour tous ceux qui
                    cherchent à démarrer leur propre entreprise, en leur fournissant les outils nécessaires pour prospérer
                    dans un monde de plus en plus connecté et dynamique.
                </div>
            </div>


        </div>
    </section>


    <section class="testimonial-section-2 section-bg-2 fix section-padding">
        <div class="container">
            <div class="section-title text-center">
                <span class="wow fadeInUp"> {{ __('Support Help') }}</span>
                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                    {{ __('What Customer say about us') }}
                </h2>
            </div>
        </div>
        <div class="testimonial-wrapper">
            <div class="testimonial-carousel-active-2">
                <div class="testimonial-card-items-2">
                    <div class="testimonial-image bg-cover" style="background-image: url('assets/img/testimonial/02.png');">
                    </div>
                    <div class="testimonial-content">
                        <div class="star">
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star color-2"></span>
                        </div>
                        <p>
                            “Good Time is very good in what they're doing and
                            more than happy to challenge and push you to
                            think about your decisions both from usability and
                            design standpoints.”
                        </p>
                        <div class="author-name">
                            <h6>Cameron Williamson</h6>
                            <p>CEO, Business Co</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card-items-2">
                    <div class="testimonial-image bg-cover" style="background-image: url('assets/img/testimonial/02.png');">
                    </div>
                    <div class="testimonial-content">
                        <div class="star">
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star color-2"></span>
                        </div>
                        <p>
                            “Good Time is very good in what they're doing and
                            more than happy to challenge and push you to
                            think about your decisions both from usability and
                            design standpoints.”
                        </p>
                        <div class="author-name">
                            <h6>Cameron Williamson</h6>
                            <p>CEO, Business Co</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card-items-2">
                    <div class="testimonial-image bg-cover" style="background-image: url('assets/img/testimonial/02.png');">
                    </div>
                    <div class="testimonial-content">
                        <div class="star">
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star color-2"></span>
                        </div>
                        <p>
                            “Good Time is very good in what they're doing and
                            more than happy to challenge and push you to
                            think about your decisions both from usability and
                            design standpoints.”
                        </p>
                        <div class="author-name">
                            <h6>Cameron Williamson</h6>
                            <p>CEO, Business Co</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card-items-2">
                    <div class="testimonial-image bg-cover" style="background-image: url('assets/img/testimonial/02.png');">
                    </div>
                    <div class="testimonial-content">
                        <div class="star">
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star color-2"></span>
                        </div>
                        <p>
                            “Good Time is very good in what they're doing and
                            more than happy to challenge and push you to
                            think about your decisions both from usability and
                            design standpoints.”
                        </p>
                        <div class="author-name">
                            <h6>Cameron Williamson</h6>
                            <p>CEO, Business Co</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card-items-2">
                    <div class="testimonial-image bg-cover" style="background-image: url('assets/img/testimonial/02.png');">
                    </div>
                    <div class="testimonial-content">
                        <div class="star">
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star color-2"></span>
                        </div>
                        <p>
                            “Good Time is very good in what they're doing and
                            more than happy to challenge and push you to
                            think about your decisions both from usability and
                            design standpoints.”
                        </p>
                        <div class="author-name">
                            <h6>Cameron Williamson</h6>
                            <p>CEO, Business Co</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="service-section fix section-padding my-5" style="
           height: 80vh;
                   ">

        <div class="container-fluid">
            <div class="row" style=" position: relative">

                <div class=""
                    style="

                     position: absolute;
                     z-index: 10;
                     left: 195px;

                    ">
                    <img src="./resources\views\assets\img\hero\people.png" alt="111" class="">
                </div>
                <div class=" p-5 text-start text-white rounded"
                    style="right: 0;background-color: #79bfedfc; width: 60%; position: absolute;  background-color: #79bfedfc  ">
                    <h2 class="text-center pt-4" style="color: #0d75bc;">Réservez votre prestation</h2>
                    <ul class="p-5 fs-6">

                        <li class=" py-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                fill="currentColor" class="bi bi-check2-all mx-2" viewBox="0 0 16 16">
                                <path
                                    d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0" />
                                <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708" />
                            </svg> Des hommes et des femmes de ménage qualifiés et expérimentés


                        </li>



                        <li class=" py-2"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                fill="currentColor" class="bi bi-check2-all mx-2" viewBox="0 0 16 16">
                                <path
                                    d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0" />
                                <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708" />
                            </svg> Un support client personnalisé et dédié </li>

                        <li class=" py-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                fill="currentColor" class="bi bi-check2-all mx-2" viewBox="0 0 16 16">
                                <path
                                    d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0" />
                                <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708" />
                            </svg>Contrats sans engagement </li>
                        <li class=" py-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                fill="currentColor" class="bi bi-check2-all mx-2" viewBox="0 0 16 16">
                                <path
                                    d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0" />
                                <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708" />
                            </svg> Des prix attractifs </li>
                        <li class=" py-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                fill="currentColor" class="bi bi-check2-all mx-2" viewBox="0 0 16 16">
                                <path
                                    d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0" />
                                <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708" />
                            </svg> Application mobile dédiée à la gestion de vos ménages</li>
                        <li class=" py-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                fill="currentColor" class="bi bi-check2-all mx-2" viewBox="0 0 16 16">
                                <path
                                    d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0" />
                                <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708" />
                            </svg> Des solutions flexibles et sur mesure</li>
                    </ul>

                    <div class="d-flex justify-content-start py-2 mx-5">
                        <div class="col-md-3 me-3"><input placeholder="Votre code postal ou ville " type="text"
                                class="form-control border-0" /></div>
                        <div class="col-md-3"> <button class="px-4 py-1 text-white rounded"
                                style="background-color: #0d75bc;">Allons-y!</button></div>
                    </div>
                </div>
            </div>


        </div>
    </section>






    <!-- <div class="single-slide">
                            <div class="slide-bg bg-cover" style="background-image: url('assets/img/hero/hero-7.jpg');">
                                <div class="container">
                                    <div class="hero-content">
                                        <h4 class="fs-lg animated" data-animation-in="fadeInUp" data-delay-in="0.3">5m+ Trusted Our Clients</h4>
                                        <h1 class="fs-lg animated" data-animation-in="fadeInUp" data-delay-in="0.5">
                                            Empower Your <br>
                                            business Journey <br>
                                            with it Expertise
                                        </h1>
                                        <div class="hero-button fs-lg animated" data-animation-in="fadeInUp" data-delay-in="0.7">
                                            <a href="service-details.html" class="theme-btn theme-btn-2 hover-white">
                                                <span>
                                                    Explore Our Service
                                                    <i class="fas fa-chevron-right"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->




    <!--
                        <div class="single-slide">
                            <div class="slide-bg bg-cover" style="background-image: url('assets/img/hero/hero-8.jpg');">
                                <div class="container">
                                    <div class="hero-content">
                                        <h4 class="fs-lg animated" data-animation-in="fadeInUp" data-delay-in="0.3">5m+ Trusted Our Clients</h4>
                                        <h1 class="fs-lg animated" data-animation-in="fadeInUp" data-delay-in="0.5">
                                            Empower Your <br>
                                            business Journey <br>
                                            with it Expertise
                                        </h1>
                                        <div class="hero-button fs-lg animated" data-animation-in="fadeInUp" data-delay-in="0.7">
                                            <a href="service-details.html" class="theme-btn theme-btn-2 hover-white">
                                                <span>
                                                    Explore Our Service
                                                    <i class="fas fa-chevron-right"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->



    <!--<< Service Section Start >>-->
    {{-- <section class="service-section section-bg-4 fix section-padding">
            <div class="container">




                <div class="service-wrapper-3">
                    <div class="service-box-items style-2 wow fadeInUp" data-wow-delay=".7s">
                        <div class="icon">
                            <i class="fas fa-badge-check"></i>
                        </div>
                        <div class="content">
                            <h6>
                                <a href="#">
                                    High Quality
                                </a>
                            </h6>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, ipsa ipsam  </p>

                        </div>
                    </div>
                    <div class="service-box-items style-2 wow fadeInUp" data-wow-delay=".8s">
                        <div class="icon">
                            <i class="fa fa-file-certificate"></i>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     </div>
                        <div class="content">
                            <h6>
                                <a href="#">
                                    Excellent Result
                                </a>
                            </h6>

                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, ipsa ipsam</p>

                        </div>
                    </div>
                    <div class="service-box-items style-2 wow fadeInUp" data-wow-delay=".9s">
                        <div class="icon">
                            <i class="fa fa-money-bill"></i>

                        </div>
                        <div class="content">
                            <h6>
                                <a href="#">
                                    Low Cost
                                </a>

                            </h6>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, ipsa ipsam</p>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
    <!-- <div class="title-section-area">
                            <div class="section-title style-2">
                                <span class="wow fadeInUp">Our Services Area</span>
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                    WHAT WE’RE OFFERING TO <br>
                                    OUR CUSTOMERS
                                </h2>
                            </div>
                            <p class="wow fadeInUp" data-wow-delay=".5s">
                                Transmds is the world’s driving worldwide coordinations supplier <br> uphold industry and exchange the worldwide trade of merchandi <br>
                                do eiusmod tempor incididunt ut labore et simply free text dolore
                            </p>
                        </div> -->


    <!-- <div class="service-box-items style-2 wow fadeInUp" data-wow-delay=".3s">
                                <div class="icon">
                                    <i class="flaticon-coding"></i>
                                </div>
                                <div class="content">
                                    <h6>
                                        <a href="#">
                                            UI / UX <br>
                                            CREATIVE DESIGN
                                        </a>
                                    </h6>
                                </div>
                            </div> -->
    <!-- <div class="service-box-items style-2 active wow fadeInUp" data-wow-delay=".5s">
                                <div class="icon">
                                    <i class="flaticon-server"></i>
                                </div>
                                <div class="content">
                                    <h6>
                                        <a href="service-details.html">
                                            Desktop <br>
                                            Computing Services
                                        </a>
                                    </h6>
                                </div>
                            </div> -->


    <!-- <div class="service-text-area text-center mt-5 wow fadeInUp" data-wow-delay=".4s">
                            <h5>
                                Bring them together and you overcome the ordinary.
                                <a href="service.html" class="link-btn link-btn-2">
                                    <span>View More Service</span>
                                    <i class="fal fa-plus"></i>
                                </a>
                            </h5>
                        </div> -->


    <!--<< Brand Section Start >>-->
    <!-- <div class="brand-section fix">
                    <div class="container">
                        <div class="brand-wrapper-3">
                            <div class="brand-carousel-active">
                                <div class="brand-image">
                                    <img src="assets/img/brand/02.png" alt="brand-img">
                                </div>
                                <div class="brand-image">
                                    <img src="assets/img/brand/02.png" alt="brand-img">
                                </div>
                                <div class="brand-image">
                                    <img src="assets/img/brand/02.png" alt="brand-img">
                                </div>
                                <div class="brand-image">
                                    <img src="assets/img/brand/02.png" alt="brand-img">
                                </div>
                                <div class="brand-image">
                                    <img src="assets/img/brand/02.png" alt="brand-img">
                                </div>
                                <div class="brand-image">
                                    <img src="assets/img/brand/02.png" alt="brand-img">
                                </div>
                                <div class="brand-image">
                                    <img src="assets/img/brand/02.png" alt="brand-img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

    <!--<< About Section Start >>-->
    {{-- <section class="about-section fix section-padding " id="about">
        <div class="container">
            <div class="about-wrapper">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-image-items">
                            <div class="circle-shape">
                                <img src="assets/img/about/circle2 (1).png" alt="img" class="text-circle">
                                <div class="award-img">
                                    <img src="assets/img/about/award.png" alt="img">
                                </div>
                            </div>
                            <div class="border-shape">
                                <img src="assets/img/about/border-shape.png" alt="shape-img">
                            </div>
                            <div class="about-image bg-cover wow fadeInLeft" data-wow-delay=".3s" style="background-image: url('assets/img/about/engineering-maintenance-500x500.webp');">

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-5 mt-lg-0">
                        <div class="about-content">
                            <div class="section-title">

                                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                    This is how it works
                                </h2>
                            </div>


                            <div class="service-box-items-2">

                                <div class="content">

                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic mollitia a illum in necessitatibus consectetur,
                                    </p>
                                </div>
                            </div>
                            <br>
                            <div class="service-box-items-2">

                                <div class="content">

                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic mollitia a illum in necessitatibus consectetur,
                                    </p>
                                </div>
                            </div>
                            <br>
                            <div class="service-box-items-2">
                               <div class="content">

                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic mollitia a illum in necessitatibus consectetur,
                                    </p>
                                </div>
                            </div>




                            <div class="about-author">
                                <div class="about-button wow fadeInUp" data-wow-delay=".8s">
                                    <a href="#" class="theme-btn">
                                       <span>
                                            Explore more about
                                            <i class="fas fa-chevron-right"></i>
                                       </span>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}





    <!--<< Service Section Start >>-->
    {{-- <section class="service-section fix section-padding" style="background-color: #f6f3ee;">
    <div class="line-shape">
        <img src="assets/img/line.png" alt="shape-img">
    </div>

    <div class="container">
        <div class="section-title text-center">

            <h2 class="wow fadeInUp" data-wow-delay=".3s">
                Services we can offer you
            </h2>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="service-box-items">
                    <div class="icon">
                        <i class="fa fa-vacuum" aria-hidden="true"></i>
                    </div>
                    <div class="content">
                        <h3>
                            <a href="#">
                                Cleaning
                            </a>
                        </h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur,
                            <br> <br></p>

                        <a href="#" class="arrow-icon">
                            <i class="far fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                <div class="service-box-items active">
                    <div class="icon">
                        <i class="fa fa-dog-leashed"></i>

                    </div>
                    <div class="content">
                        <h3>
                            <a href="#">
                                Dog walking
                            </a>
                        </h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur,
                            <br> <br>
                        </p>
                        <a href="#" class="arrow-icon">
                            <i class="far fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                <div class="service-box-items">
                    <div class="icon">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    </div>
                    <div class="content">
                        <h3>
                            <a href="#">
                                shopping
                            </a>
                        </h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur,
                            <br> <br>
                        </p>
                        <a href="#" class="arrow-icon">
                            <i class="far fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".9s">
                <div class="service-box-items">
                    <div class="icon">
                        <i class="fas fa-walking"></i>
                    </div>
                    <div class="content">
                        <h3>
                            <a href="#">
                                elderly walks
                            </a>
                        </h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur,
                            <br> <br>
                        </p>
                        <a href="#" class="arrow-icon">
                            <i class="far fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="service-box-items">
                    <div class="icon">
                        <i class="fa fa-wrench" aria-hidden="true"></i>
                    </div>
                    <div class="content">
                        <h3>
                            <a href="#">
                                small repairs
                            </a>
                        </h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur,
                            <br> <br>
                        </p>
                        <a href="#" class="arrow-icon">
                            <i class="far fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                <div class="service-box-items">
                    <div class="icon">
                        <i class="fas fa-car-mechanic"></i>
                    </div>
                    <div class="content">
                        <h3>
                            <a href="#">
                                car services
                            </a>
                        </h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur,
                            <br> <br>
                        </p>
                        <a href="#" class="arrow-icon">
                            <i class="far fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                <div class="service-box-items">
                    <div class="icon">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                    </div>
                    <div class="content">
                        <h3>
                            <a href="#">
                                taking people to appointments
                            </a>
                        </h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur,
                        </p>
                        <a href="#" class="arrow-icon">
                            <i class="far fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".9s">
                <div class="service-box-items">
                    <div class="icon">
                        <i class='fas fa-baby-carriage'></i>
                    </div>
                    <div class="content">
                        <h3>
                            <a href="#">
                                caring for children
                            </a>
                        </h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur,
                            <br> <br>
                        </p>
                        <a href="#" class="arrow-icon">
                            <i class="far fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}



    <!--<< Case Studies Start >>-->
    {{-- <div class="marque-section section-padding">
    <div class="marquee-wrapper text-slider style-height">
        <div class="marquee-inner to-left">
            <ul class="marqee-list d-flex">
                <li class="marquee-item style-2">
                    <span class="text-slider"><img src="assets/img/asterisk-3.svg" alt="img"></span><span class="text-slider text-style-2">Dog walking</span>
                    <span class="text-slider"><img src="assets/img/asterisk-3.svg" alt="img"></span><span class="text-slider text-style-2">Shopping</span>
                    <span class="text-slider"><img src="assets/img/asterisk-3.svg" alt="img"></span><span class="text-slider text-style-2">Elderly walks</span>
                    <span class="text-slider"><img src="assets/img/asterisk-3.svg" alt="img"></span><span class="text-slider text-style-2">Small repairs</span>
                    <span class="text-slider"><img src="assets/img/asterisk-3.svg" alt="img"></span><span class="text-slider text-style-2">Taking people to appointments</span>
                    <span class="text-slider"><img src="assets/img/asterisk-3.svg" alt="img"></span><span class="text-slider text-style-2">Caring for children</span>
                    <span class="text-slider"><img src="assets/img/asterisk-3.svg" alt="img"></span><span class="text-slider text-style-2">Outdoor maintenance</span>
                    <span class="text-slider"><img src="assets/img/asterisk-3.svg" alt="img"></span><span class="text-slider text-style-2">Cleaning</span>
                </li>
            </ul>
        </div>
    </div>
</div> --}}



    <!--<< Testimonial Section Start >>-->
    {{-- <section class="testimonial-section-2 section-bg-2 fix section-padding">
    <div class="container">
        <div class="section-title text-center">
            <span class="wow fadeInUp">Support Help</span>
            <h2 class="wow fadeInUp" data-wow-delay=".3s">
                What Customer say about us
            </h2>
        </div>
    </div>
    <div class="testimonial-wrapper">
        <div class="testimonial-carousel-active-2">
            <div class="testimonial-card-items-2">
                <div class="testimonial-image bg-cover" style="background-image: url('assets/img/testimonial/02.png');"></div>
                <div class="testimonial-content">
                    <div class="star">
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star color-2"></span>
                    </div>
                    <p>
                        “Good Time is very good in what they're doing and
                        more than happy to challenge and push you to
                        think about your decisions both from usability and
                        design standpoints.”
                    </p>
                    <div class="author-name">
                        <h6>Cameron Williamson</h6>
                        <p>CEO, Business Co</p>
                    </div>
                </div>
            </div>
            <div class="testimonial-card-items-2">
                <div class="testimonial-image bg-cover" style="background-image: url('assets/img/testimonial/02.png');"></div>
                <div class="testimonial-content">
                    <div class="star">
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star color-2"></span>
                    </div>
                    <p>
                        “Good Time is very good in what they're doing and
                        more than happy to challenge and push you to
                        think about your decisions both from usability and
                        design standpoints.”
                    </p>
                    <div class="author-name">
                        <h6>Cameron Williamson</h6>
                        <p>CEO, Business Co</p>
                    </div>
                </div>
            </div>
            <div class="testimonial-card-items-2">
                <div class="testimonial-image bg-cover" style="background-image: url('assets/img/testimonial/02.png');"></div>
                <div class="testimonial-content">
                    <div class="star">
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star color-2"></span>
                    </div>
                    <p>
                        “Good Time is very good in what they're doing and
                        more than happy to challenge and push you to
                        think about your decisions both from usability and
                        design standpoints.”
                    </p>
                    <div class="author-name">
                        <h6>Cameron Williamson</h6>
                        <p>CEO, Business Co</p>
                    </div>
                </div>
            </div>
            <div class="testimonial-card-items-2">
                <div class="testimonial-image bg-cover" style="background-image: url('assets/img/testimonial/02.png');"></div>
                <div class="testimonial-content">
                    <div class="star">
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star color-2"></span>
                    </div>
                    <p>
                        “Good Time is very good in what they're doing and
                        more than happy to challenge and push you to
                        think about your decisions both from usability and
                        design standpoints.”
                    </p>
                    <div class="author-name">
                        <h6>Cameron Williamson</h6>
                        <p>CEO, Business Co</p>
                    </div>
                </div>
            </div>
            <div class="testimonial-card-items-2">
                <div class="testimonial-image bg-cover" style="background-image: url('assets/img/testimonial/02.png');"></div>
                <div class="testimonial-content">
                    <div class="star">
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star"></span>
                        <span class="fas fa-star color-2"></span>
                    </div>
                    <p>
                        “Good Time is very good in what they're doing and
                        more than happy to challenge and push you to
                        think about your decisions both from usability and
                        design standpoints.”
                    </p>
                    <div class="author-name">
                        <h6>Cameron Williamson</h6>
                        <p>CEO, Business Co</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}



    <!--<< Cta Chat Section Start >>-->
    {{-- <section class="cta-chat-section-2" style="margin-top: -40px;">
            <div class="container">



                <div class="cta-chat-wrapper style-2">
                    <div class="chat-items wow fadeInUp" data-wow-delay=".3s">
                        <div class="icon">
                            <i class="flaticon-chat"></i>
                        </div>
                        <div class="content">
                            <h3>Do you also want to get in touch with us?</h3>

                        </div>
                    </div>
                    <a href="#" class="theme-btn bg-white wow fadeInUp" data-wow-delay=".5s">
                       <span>
                        Contact us

                       </span>
                    </a>
                </div>
            </div>
        </section> --}}


    <!--<< Case Studies Section Start >>-->
    {{-- <section class="case-study section-padding pt-0">
            <div class="container">
                <div class="about-wrapper section-padding pb-0">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="about-content">
                                <div class="section-title style-2">
                                    <span class="wow fadeInUp">freequently Ask Questions</span>
                                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                        have a question in <br>
                                        your mind?
                                    </h2>
                                </div>
                                <p class=" mt-4 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate temporibus repellendus alias nisi consectetur earum voluptatum?
                                </p>



                                <div class="circle-progress-bar-wrapper style-2">
                                    <div class="single-circle-bar wow fadeInUp" data-wow-delay=".7s">
                                        <div class="circle-bar" data-percent="68" data-duration="1000">
                                        </div>
                                        <div class="content">
                                            <h6>
                                                Organizations <br>
                                                work support
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="single-circle-bar wow fadeInUp" data-wow-delay=".9s">
                                        <div class="circle-bar" data-percent="93" data-duration="1000">
                                        </div>
                                        <div class="content">
                                            <h6>
                                                Management & <br>
                                                Support Services
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="circle-progress-bar-wrapper style-2">
                                    <div class="single-circle-bar wow fadeInUp" data-wow-delay=".7s">
                                        <div class="circle-bar" data-percent="68" data-duration="1000">
                                        </div>
                                        <div class="content">
                                            <h6>
                                                Organizations <br>
                                                work support
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="single-circle-bar wow fadeInUp" data-wow-delay=".9s">
                                        <div class="circle-bar" data-percent="93" data-duration="1000">
                                        </div>
                                        <div class="content">
                                            <h6>
                                                Management & <br>
                                                Support Services
                                            </h6>
                                        </div>
                                    </div>
                                </div>





                            </div>
                        </div>
                        <div class="col-lg-6 mt-5 mt-lg-0">
                            <div class="faq-content style-2">
                                <div class="faq-accordion">
                                    <div class="accordion" id="accordion">
                                        <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                                            <h4 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="false" aria-controls="faq1">
                                                    Lorem ipsum dolor?
                                                </button>
                                            </h4>
                                            <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam quaerat, veritatis, vitae accusamus dolorum placeat esse saepe voluptate quam nemo ipsam quod, neque consequatur! Sequi ipsum hic ex amet dolor.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item wow fadeInUp" data-wow-delay=".5s">
                                            <h4 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="true" aria-controls="faq2">
                                                    Lorem ipsum dolor?
                                                </button>
                                            </h4>
                                            <div id="faq2" class="accordion-collapse collapse show" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam quaerat, veritatis, vitae accusamus dolorum placeat esse saepe voluptate quam nemo ipsam quod, neque consequatur! Sequi ipsum hic ex amet dolor.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
                                            <h4 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                                                    Lorem ipsum dolor?
                                                </button>
                                            </h4>
                                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam quaerat, veritatis, vitae accusamus dolorum placeat esse saepe voluptate quam nemo ipsam quod, neque consequatur! Sequi ipsum hic ex amet dolor.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item wow fadeInUp" data-wow-delay=".9s">
                                            <h4 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                                                    Lorem ipsum dolor?
                                                </button>
                                            </h4>
                                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam quaerat, veritatis, vitae accusamus dolorum placeat esse saepe voluptate quam nemo ipsam quod, neque consequatur! Sequi ipsum hic ex amet dolor.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}


    <!--<< Footer Section Start >>-->

    </body>

    </html>
@endsection
