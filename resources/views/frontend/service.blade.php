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
            background-image:
                url('./public/assets/img/bg/service247_bg.jpg');
            background-repeat: no-repeat;
            background-size: cover;

            background-position: center;

            height: 28rem;

        }


        .mob_img {
            height: 30vh;
            }

        @media (max-width: 768px) {
            .bg24 {
                height: 30rem;

            }
        }

        @media (max-width: 576px) {
            .bg24 {
                height: 25rem;

            }

            h2 {
                font-size: 1.5rem;

            }

            .mob_img {
                width: 100%
            }
        }
    </style>

    <!-- Offcanvas Area Start -->







    <!-- Header Area Start -->

    <!--<< Hero Section Start >>-->
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



    <div class="container-fluid bg24 position-relative w-100">
        <div class="row justify-content-start align-items-center h-100">
            <h2 class="text-start text-white ps-5">Nos  prestations</h2>
        </div>

    </div>


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 p-3">
                <div class="card shadow-lg  border-0">
                    <h3 class="px-5 py-4">Filters</h3>
                    <hr class="border border-2">
                    <h6 class="px-5 py-3">CATÉGORIES</h6>
                    <ul class="px-5">
                        <li class="py-1"> <a href="/service">Services de déménagement</a></li>
                        <li class="py-1"><a href="/service"> Peinture </a></li>
                        <li class="py-1"><a href="/service"> Ménage de fin de location </a></li>
                        <li class="py-1"><a href="/service"> Services de livraison </a></li>
                        <li class="py-1"><a href="/service">  Services de soins à domicile </a></li>
                        <li class="py-1"><a href="/service"> Services de dédouanement </a></li>
                        <li class="py-1"><a href="/service">  Assemblage de meubles</li>
                        <li class="py-1"><a href="/service"> Réparation de téléviseurs et d'électroménagers </a></li>
                        <li class="py-1"><a href="/service"> Réparation de téléphone </a></li>
                        <li class="py-1"><a href="/service"> Acheteur personnel </a></li>

                    </ul>
                    <h6 class="px-5 py-3">FOURNISSEUSE </h6>

                    <ul class="px-5">
                        <li class="py-1"><a href="#">indépendant</a>  </li>
                        <li class="py-1"><a href="#">agence</a>  </li>
                    </ul>

                    <h6 class="px-5 py-3">EMPLACEMENT</h6>
                    <select name="" id="" class="py-2 mx-5 my-3 border border-1">
                        <option value="">sélectionner la ville</option>
                        <option value="">--1--</option>
                        <option value="">--2--</option>
                        <option value="">--3--</option>
                        <option value="">--4--</option>
                        <option value="">--5--</option>
                    </select>
                    <hr class="border border-2">
                    <h6 class="py-4 px-5">LISTE DE PRIX </h6>
                    <div>
                        {{-- <label for="vol">Volume (between 0 and 50):</label> --}}
                        <input type="range" id="vol" class="w-75 mx-4 " name="vol" min="0"
                            max="100"><br />
                        <div class="row py-3 pb-5 mx-3"> <select name="" id=""
                                class="py-2  w-50 border border-1">
                                <option value="">Min</option>
                                <option value="">--1--</option>
                                <option value="">--2--</option>
                                <option value="">--3--</option>
                                <option value="">--4--</option>
                                <option value="">--5--</option>
                            </select>
                            <select name="" id="" class="py-2 w-50 border border-1">
                                <option value="">$1000</option>
                                <option value="">--1--</option>
                                <option value="">--2--</option>
                                <option value="">--3--</option>
                                <option value="">--4--</option>
                                <option value="">--5--</option>
                            </select>
                        </div>


                    </div>

                </div>


            </div>

            <div class="col-md-9 p-3">
                <div class="card shadow-lg p-3 border-0 h-100">
                    <h3 class="p-3">Tous les prestataires de services</h3>


                    <div class="row ">

                         <div class=" col-md-4 text-center ">
                            <div class="  ">
                                 <a href="/categories">  <img src="./resources\views\assets\img\hero\paint.png" alt="1"
                                    class="w-100 pt-3  mob_img ">  </a>

                                <h6 class="">Peinture</h6>
                            </div>
                        </div>
                        <div class="col-md-4 text-center ">
                            <div class="  ">
                                <a href="/categories">   <img src="./resources\views\assets\img\hero\doctor.png" alt="2"
                                    class="w-100 pt-3  mob_img "> </a>

                                <h6 class="">Maison services de soins</h6>
                            </div>
                        </div>
                        <div class="col-md-4 text-center  ">
                            <div class="  ">
                                <a href="/categories">  <img src="./resources\views\assets\img\hero\delivery.png" alt="2"
                                    class="w-100 pt-3  mob_img ">

                                <h6 class="">Autorisation services</h6>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-md-4 text-center  ">
                            <div class="card border-0 text-center">
                                <a href="/categories">
                                <img src="./resources\views\assets\img\hero\wood.png" alt="1"
                                    class=" w-100 pt-3 rounded mob_img "> </a>
                                <h6 class="">Assemblage de meubles</h6>
                            </div>
                        </div>
                        <div class="col-md-4 text-center ">
                            <div class="card border-0 text-center">
                                <img src="./resources\views\assets\img\hero\mobile.png" alt="2"
                                    class=" w-100  pt-3 rounded mob_img ">
                                <h6 class="">Réparation de téléviseurs</h6>
                            </div>
                        </div>
                        <div class="col-md-4 text-center  ">
                            <div class="card border-0 text-center">
                                <img src="./resources\views\assets\img\hero\phone_internal.png" alt="2"
                                    class=" w-100 pt-3 rounded mob_img ">
                                <h6 class="">Téléphone Réparation</h6>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 my-2">
                            <div class="card border-0 text-center">
                                <a href="/categories">

                                    <img src="./resources\views\assets\img\hero\paint.png" alt="1"
                                        class=" w-100  pt-3 rounded mob_img ">
                                    <h6 class="">Peinture</h6>
                                </a>


                            </div>
                        </div>
                        <div class="col-md-4 my-2">
                            <div class="card border-0 text-center">

                                <img src="./resources\views\assets\img\hero\doctor.png" alt="2"
                                    class="w-100  pt-3 rounded mob_img ">
                                <h6 class="">Maison services de soins</h6>


                            </div>

                        </div>
                        <div class="col-md-4 my-2">
                            <div class="card border-0 text-center">
                                <img src="./resources\views\assets\img\hero\delivery.png" alt="2"
                                    class="w-100  pt-3 rounded mob_img ">
                                <h6 class="">Autorisation services</h6>


                            </div>

                        </div>

                    </div>




{{--
                    <div class="d-flex justify-content-center py-4"> <button class="btn btn-outline-primary ">Afficher
                            plus</button> </div> --}}

                </div>
            </div>


        </div>
    </div>


























    {{-- 0ld code --}}
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

                <div class="service-wrapper-3">
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
                <!-- <div class="service-text-areacol-md-4 text-center mt-5 wow fadeInUp" data-wow-delay=".4s">
                    <h5>
                        Bring them together and you overcome the ordinary.
                        <a href="service.html" class="link-btn link-btn-2">
                            <span>View More Service</span>
                            <i class="fal fa-plus"></i>
                        </a>
                    </h5>
                </div> -->
            </div>
        </section> --}}

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
