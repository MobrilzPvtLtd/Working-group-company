@extends('frontend.layouts.app')

@section('title')
    {{ app_name() }}
@endsection

@section('content')
    <!--<< Mouse Cursor Start >>-->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>


    <!-- Offcanvas Area Start -->




















    <!--<< Hero Section Start >>-->
    <section class="hero-section hero-3">
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

        </div>
    </section>

    <div class="container my-5">
        <div class="row ">
            <div class="col-md-8 py-5 shadow-lg mx-auto">
                <div class="row">
                    <div class="col-md-6 p-4" style="background-color: #0d75bc;     margin-left: -70px;">

                        <h3 class="text-center text-white pb-4">Contactez-nous</h3>
                        <ul class="text-white my-2">

                            <li class="py-2"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                                </svg>
                                Lorem ipsum dolor sit amet, </li>
                            <li class="py-2"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z" />
                                </svg>


                                noida2024@gmail.com</li>
                            <li class="py-2"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                </svg> 0751-236578</li>
                            <li class="py-2"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-whatsapp " viewBox="0 0 16 16">
                                    <path
                                        d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                                </svg> 9078653421</li>

                        </ul>

                        <div class="d-flex justify-content-center pt-5">
                            <a href="#">

                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                    fill="currentColor" class="bi bi-facebook text-white " viewBox="0 0 16 16">
                                    <path
                                        d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                                </svg> </a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                    fill="currentColor" class="bi bi-envelope-at-fill text-white mx-3"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2zm-2 9.8V4.698l5.803 3.546zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.5 4.5 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586zM16 9.671V4.697l-5.803 3.546.338.208A4.5 4.5 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671" />
                                    <path
                                        d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791" />
                                </svg> </a>

                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                    fill="currentColor" class="bi bi-twitter text-white" viewBox="0 0 16 16">
                                    <path
                                        d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15" />
                                </svg> </a>
                        </div>

                    </div>
                    <div class="col-md-6 p-4">
                        <h3 style="color: #0D75BC">Entrer en contact</h3>
                        <p>N'hésitez pas à nous écrire ci-dessous !</p>

                        <form class="py-4">
                            <input type="text" placeholder="Nom d'utilisateur" class="form-control mb-3">
                            <input type="text" placeholder="Votre e-mail" class="form-control mb-3">
                            <textarea class="form-control mb-2" placeholder="Tapez votre message ici"></textarea><br />
                            <button class="btn btn-primary">ENVOYER</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    {{-- old code --}}

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
                <!-- <div class="service-text-area text-center mt-5 wow fadeInUp" data-wow-delay=".4s">
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
