@extends('frontend.layouts.app')

@section('title')
    {{ app_name() }}
@endsection

@section('content')
  
<div class="mouse-cursor cursor-outer"></div>
<div class="mouse-cursor cursor-inner"></div> 

<section class="hero-section hero-3">
    <div class="slider-button">
        <div class="hero-nav-prev"><i class="fal fa-long-arrow-left"></i></div>
        <div class="hero-nav-next"><i class="fal fa-long-arrow-right"></i></div>
    </div>
    <div class="hero-slider-active-2">
        <div class="single-slide">
            <div class="slide-bg bg-cover" style="background-image: url('./assets/img/hero/three-people-doing-house-cleaning-rm5bzw5kkayn968b.jpg');">
                <div class="container">
                    <div class="hero-content">
                        <h1 class="fs-lg animated" data-animation-in="fadeInUp" data-delay-in="0.5">
                            Les meilleures demandes pour le nettoyage
                        </h1>
                        <p style="color: #ffffff; font-size: 20px;" data-animation-in="fadeInUp" data-delay-in="0.5"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia dolorum esse nemo eligendi quibusdam nostrum quo rerum ullam. Assumenda unde autem repellendus optio nisi quas praesentium magnam itaque voluptatem aliquam? </p>
                        <div class="hero-button fs-lg animated" data-animation-in="fadeInUp" data-delay-in="0.7">
                            <a href="#" class="theme-btn theme-btn-2 hover-white">
                                <span>
                                    Entrer en contact
                                    <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="single-slide">
            <div class="slide-bg bg-cover" style="background-image: url('./assets/img/hero/a-dog-walk-walking-the-dogs-in-the-city-2022-11-08-10-52-58-utc.jpg');">
                <div class="container">
                    <div class="hero-content">
                        <h1 class="fs-lg animated" data-animation-in="fadeInUp" data-delay-in="0.5">
                            Les meilleures demandes pour la promenade des chiens
                        </h1>
                        <p style="color: #ffffff; font-size: 20px;" data-animation-in="fadeInUp" data-delay-in="0.5"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia dolorum esse nemo eligendi quibusdam nostrum quo rerum ullam. Assumenda unde autem repellendus optio nisi quas praesentium magnam itaque voluptatem aliquam? </p>
                        <div class="hero-button fs-lg animated" data-animation-in="fadeInUp" data-delay-in="0.7">
                            <a href="#" class="theme-btn theme-btn-2 hover-white">
                                <span>
                                    Entrer en contact 
                                    <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="service-section section-bg-4 fix section-padding">
    <div class="container">
        <div class="service-wrapper-3">
            <div class="service-box-items style-2 wow fadeInUp" data-wow-delay=".7s">
                <div class="icon">                              
                    <i class="fas fa-badge-check"></i>
                </div>
                <div class="content">
                    <h6>
                        <a href="#">
                            Haute qualité
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
                            Excellent résultat
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
                            Faible coût
                        </a>
                    </h6>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, ipsa ipsam</p>
                </div>
            </div>
        </div>
    </div>
</section>

              <!-- <div class="service-text-area text-center mt-5 wow fadeInUp" data-wow-delay=".4s">
    <h5>
        Rassemblez-les et vous surmontez l'ordinaire.
        <a href="service.html" class="link-btn link-btn-2">
            <span>Voir plus de services</span>
            <i class="fal fa-plus"></i>
        </a>
    </h5>
</div> -->
</div>
</section>

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
<section class="about-section fix section-padding " id="about">
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
                                Voici comment ça fonctionne
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
                                        En savoir plus sur
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
</section>




<!--<< Service Section Start >>-->
<section class="service-section fix section-padding" style="background-color: #f6f3ee;">
    <div class="line-shape">
        <img src="assets/img/line.png" alt="shape-img">
    </div>

    <div class="container">
        <div class="section-title text-center">

            <h2 class="wow fadeInUp" data-wow-delay=".3s">
                Les services que nous pouvons vous offrir
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
                                Nettoyage
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
                                Promenade des chiens
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
                                Shopping
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
                                Promenades pour personnes âgées
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
                                Petites réparations
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
                                Services automobiles
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
                                Emmener les gens à leurs rendez-vous
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
                                Soins aux enfants
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
</section>



<!--<< Case Studies Start >>-->
<<div class="marque-section section-padding">
    <div class="marquee-wrapper text-slider style-height">
        <div class="marquee-inner to-left">
            <ul class="marqee-list d-flex">
                <li class="marquee-item style-2">
                    <span class="text-slider"><img src="assets/img/asterisk-3.svg" alt="img"></span><span class="text-slider text-style-2">Promenade des chiens</span>
                    <span class="text-slider"><img src="assets/img/asterisk-3.svg" alt="img"></span><span class="text-slider text-style-2">Achats</span>
                    <span class="text-slider"><img src="assets/img/asterisk-3.svg" alt="img"></span><span class="text-slider text-style-2">Promenades pour personnes âgées</span>
                    <span class="text-slider"><img src="assets/img/asterisk-3.svg" alt="img"></span><span class="text-slider text-style-2">Petites réparations</span>
                    <span class="text-slider"><img src="assets/img/asterisk-3.svg" alt="img"></span><span class="text-slider text-style-2">Emmener les gens à leurs rendez-vous</span>
                    <span class="text-slider"><img src="assets/img/asterisk-3.svg" alt="img"></span><span class="text-slider text-style-2">Soins aux enfants</span>
                    <span class="text-slider"><img src="assets/img/asterisk-3.svg" alt="img"></span><span class="text-slider text-style-2">Entretien extérieur</span>
                    <span class="text-slider"><img src="assets/img/asterisk-3.svg" alt="img"></span><span class="text-slider text-style-2">Nettoyage</span>
                </li>
            </ul>
        </div>
    </div>
</div>

<!--<< Testimonial Section Start >>-->
<section class="testimonial-section-2 section-bg-2 fix section-padding">
    <div class="container">
        <div class="section-title text-center">
            <span class="wow fadeInUp">Aide au support</span>
            <h2 class="wow fadeInUp" data-wow-delay=".3s">
                Ce que nos clients disent de nous
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
                        “Good Time est très bon dans ce qu'ils font et
                        plus qu'heureux de vous pousser et de vous
                        amener à réfléchir à vos décisions tant du point de vue de l'utilisabilité que du
                        design.”
                    </p>
                    <section class="testimonial-section-2 section-bg-2 fix section-padding">
                        <div class="container">
                            <div class="section-title text-center">
                                <span class="wow fadeInUp">Aide au support</span>
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                    Ce que disent nos clients de nous
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
                                            "Good Time est très bon dans ce qu'ils font et
                                            plus que heureux de vous pousser à
                                            réfléchir à vos décisions à la fois du point de vue de l'utilisabilité et
                                            du design."
                                        </p>
                                        <div class="author-name">
                                            <h6>Cameron Williamson</h6>
                                            <p>PDG, Business Co</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Repeat similar structure for other testimonials -->
                            </div>
                        </div>
                    </section>
                    
                    <!-- Section de chat CTA -->
                    <section class="cta-chat-section-2" style="margin-top: -40px;">
                        <div class="container">
                            <div class="cta-chat-wrapper style-2">
                                <div class="chat-items wow fadeInUp" data-wow-delay=".3s">
                                    <div class="icon">
                                        <i class="flaticon-chat"></i>
                                    </div>
                                    <div class="content">
                                        <h3>Voulez-vous aussi entrer en contact avec nous?</h3>
                                    </div>
                                </div>
                                <a href="#" class="theme-btn bg-white wow fadeInUp" data-wow-delay=".5s">
                                    <span>Nous contacter</span>
                                </a>
                            </div>
                        </div>
                    </section>
                    
                    <!-- Section des études de cas -->
                    <section class="case-study section-padding pt-0">
                        <div class="container">
                            <div class="about-wrapper section-padding pb-0">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="about-content">
                                            <div class="section-title style-2">
                                                <span class="wow fadeInUp">Questions fréquemment posées</span>
                                                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                                    Avez-vous une question en <br>
                                                    tête?
                                                </h2>
                                            </div>
                                            <p class="mt-4 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate temporibus repellendus alias nisi consectetur earum voluptatum?
                                            </p>
                                            <!-- Remaining content -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    




                                <div class="col-lg-6 mt-5 mt-lg-0">
                                    <div class="faq-content style-2">
                                        <div class="faq-accordion">
                                            <div class="accordion" id="accordion">
                                                <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                                                    <h4 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="false" aria-controls="faq1">
                                                            Lorem ipsum dolor ?
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
                                                            Lorem ipsum dolor ?
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
                                                            Lorem ipsum dolor ?
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
                                                            Lorem ipsum dolor ?
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
                                
              <!--<< Footer Section Start >>-->
  
    </body>
</html>
@endsection