@extends('frontend.layouts.app')

@section('title')
    {{ app_name() }}
@endsection

@section('style')
    <style>
        .content h6 {
            font-size: 16px !important;
        }

        .heading_txt {

            margin: 0% 7%;
            padding: 3% 0%;
            background-color: #f4f4f4b0
        }

        .bg24 {
            background-image: url('./public/assets/img/bg/bg_women24.png');
            height: 42rem;

            background-repeat: no-repeat;
            background-size: cover;

        }

        @media (max-width:1024px) {
            .bg24 {
                height: 34rem;
            }

            h2 {
                font-size: 30px;
            }

            ul li {
                font-size: small;
            }

            ul {
                padding: 12px 0px
            }

            .heading_txt {

                margin: 0 8%;
                padding-top: 1%;

            }


        }

        .bg_mobimg {
            background-image: linear-gradient(to right, rgba(235, 240, 245, 0.998), rgba(0, 113, 200, 0.47)),
                url('./public/assets/img/bg/About_bgimg.jpg');
            background-repeat: no-repeat;
            background-size: cover;

            background-position: center;

            height: 28rem;

        }

        .img_size {

            position: absolute;
            z-index: 1;
            left: 6%;


        }



        @media (max-width: 768px) {
            .bg_mobimg {
                height: 30rem;

            }
        }

        @media (max-width: 576px) {
            .bg_mobimg {
                height: 25rem;

            }


        }

        .girl_txt {
            margin-left: -5%;
            margin-top: 2%;
            background-color: #0d75bc;
            right: 0;
            position: absolute;
        }


        @media (min-width:768px) and (max-width:1230px) {
            .para_txt {
                font-size: 11px;
            }
        }


        @media (min-width:1240px) and (max-width:1439px) {
            .para_txt {
                font-size: 18px;
            }
        }

        @media (min-width:1440px) and (max-width:1590px) {
            .para_txt {
                font-size: 21px;
                line-height: normal
            }
        }

        @media (min-width:1591px) {
            .para_txt {
                font-size: 25px;
                line-height: normal
            }
        }
    </style>
@endsection
@section('content')
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>



    <!--<< Service Section Start >>-->
    <div class="container-fluid position-relative bg24 d-none d-lg-block">

        <div class="row ">
            <div class="col-md-5 col-6 heading_txt rounded">
                <h2 class="px-3">Service <br />Formulaire de réservation</h2>
                <ul class="text-black fs-5  py-4 px-2">
                    <li class="py-3 fs-md-6 py-md-1"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            fill="currentColor" class="bi bi-check2-all mx-2" viewBox="0 0 16 16">
                            <path
                                d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0" />
                            <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708" />
                        </svg> Lorem Ipsumest simplement un texte factice </li>
                    <li class="py-3 py-md-1"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            fill="currentColor" class="bi bi-check2-all mx-2" viewBox="0 0 16 16">
                            <path
                                d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0" />
                            <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708" />
                        </svg> Ipsumest simplement un texte factice de l'impression</li>
                    <li class="py-3 py-md-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            fill="currentColor" class="bi bi-check2-all mx-2" viewBox="0 0 16 16">
                            <path
                                d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0" />
                            <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708" />
                        </svg> Texte simplement factice de l'impression</li>
                </ul>
                <div class="row py-2 mx-3">
                    <div class="col-md-6 "><input placeholder="Votre code postal ou ville" type="text"
                            class="form-control border-0 border-primary px-2 py-2" /></div>
                    <div class="col-md-5"> <button class="px-3 py-2  px-md-3 text-white rounded"
                            style="background-color: #0d75bc;">Allons-y!</button></div>
                </div>
            </div>


        </div>

        <div class="row ">
            <div class="col-md-5 position-absolute" style="left: 30%;  top: 90%; z-index:1">
                <div class="card shadow-lg rounded" style="padding: 30px;">
                    <h2 class="text-center">Guide de réservation </h2>
                </div>
            </div>
        </div>
    </div>
    {{-- mobile view div  --}}
    <div class="col-md-12 pt-5 d-block d-sm-block d-lg-none bg_mobimg">
        <h2 class="px-3 py-2">Service <br />Formulaire de réservation</h2>
        <ul class="text-black  py-4" style="font-size: smaller">
            <li class="py-2"><span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        fill="currentColor" class="bi bi-check2-all mx-2" viewBox="0 0 16 16">
                        <path
                            d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0" />
                        <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708" />
                    </svg> </span> Lorem Ipsumest simplement un texte factice de l'impression </li>
            <li class="py-2"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                    class="bi bi-check2-all mx-2" viewBox="0 0 16 16">
                    <path
                        d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0" />
                    <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708" />
                </svg> Ipsumest simplement un texte factice de l'impression</li>
            <li class="py-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                    class="bi bi-check2-all mx-2" viewBox="0 0 16 16">
                    <path
                        d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0" />
                    <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708" />
                </svg> Texte simplement factice de l'impression</li>
        </ul>
        <div class="d-flex justify-content-center py-2 mx-2">
            <div class="col-md-3 me-3"><input placeholder="Votre code postal ou ville" type="text"
                    class="form-control  p-2 " /></div>
            <div class="col-md-3"> <button class="p-2 text-white rounded"
                    style="background-color: #0d75bc;">Allons-y!</button></div>
        </div>
    </div>

    {{-- mobile view end div  --}}






    <section class="service-section section-bg-4 fix section-padding ">
        <div class="container">

            <div class="service-wrapper-3">
                <div class="service-box-items style-2 wow fadeInUp" data-wow-delay=".7s">
                    <div class="icon  bg-primary-subtle rounded-circle">
                        <i class="fas fa-badge-check"></i>
                    </div>
                    <div class="content">
                        <h6>
                            <a href="#">
                                {{ __('High Quality') }}
                            </a>
                        </h6>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, ipsa ipsam </p>

                    </div>
                </div>
                <div class="service-box-items style-2 wow fadeInUp" data-wow-delay=".8s">
                    <div class="icon">
                        <i class="fa fa-file-certificate"></i>
                    </div>
                    <div class="content">
                        <h6>
                            <a href="#">
                                {{ __('Excellent Result') }}
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
                                {{ __('Low Cost') }}
                            </a>

                        </h6>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, ipsa ipsam</p>
                    </div>
                </div>


            </div>

        </div>
    </section>


    {{-- Presenttion  --}}


    <section class="service-section fix  "
        style=" background: linear-gradient(rgba(0, 119, 200, 0.8), rgba(0, 119, 200, 0.8)),
       url('./public/assets/img/bg/bgpresentation.png') center/cover;
        padding: 55px 0;
          position: relative; background-repeat:no-repeat ; background-size:cover ">


        <div class="container">
            <div class="row">

                <div class="col-md-4 my-auto">
                    <h4 class="text-white">Présentation de</h4>
                    <h2 class="text-white"> Nos prestations </h2><button class="bg-white my-4 p-3 rounded-pill fs-3 w-75 "
                        style="color: #0D75BC">Tous les services</button>
                </div>
                <div class="col-md-8 text-start text-white">
                    <div class="row py-3 ">
                        <div class="col-md-4 col-4 rounded text-center"> <img
                                src="./resources\views\assets\img\hero\paint.png" alt="1" class="w-100 pt-5  ">
                            <h6 class="text-white">Peinture</h6>
                        </div>
                        <div class="col-md-4 col-4 text-center">
                            <img src="./resources\views\assets\img\hero\doctor.png" alt="2"
                                class="w-100 pt-5  rounded">
                            <h6 class="text-white">Maison services de soins</h6>

                        </div>
                        <div class="col-md-4 col-4 text-center "> <img
                                src="./resources\views\assets\img\hero\delivery.png" alt="2"
                                class="w-100 pt-5  rounded">
                            <h6 class="text-white">Autorisation services</h6>

                        </div>
                    </div>
                    <div class="row  ">
                        <div class="col-md-4 col-4 text-center "> <img src="./resources\views\assets\img\hero\wood.png"
                                alt="1" class="w-100 pt-5  rounded">
                            <h6 class="text-white">Assemblage de meubles</h6>
                        </div>
                        <div class="col-md-4 col-4 text-center"> <img src="./resources\views\assets\img\hero\mobile.png"
                                alt="2" class="w-100 pt-5  rounded">
                            <h6 class="text-white">Réparation de téléviseurs et d'appareils électroménagers</h6>
                        </div>
                        <div class="col-md-4 col-4 text-center "> <img
                                src="./resources\views\assets\img\hero\phone_internal.png" alt="2"
                                class="w-100 pt-5  rounded">
                            <h6 class="text-white">Téléphone Réparation</h6>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </section>

    {{-- Girl banner --}}


    <div class="container-fluid mt-3 d-none  d-sm-none d-md-block">
        <div class="row">

            <div class="col-md-4">
                <img src="./resources\views\assets\img\bg\girl.png" alt="111" class=" "
                    style="
                       position: relative;
                        left: 18%;
                       width: -webkit-fill-available;
                       ">

            </div>





            <div class="col-md-7 rounded pt-5 px-5 py-3 px-sm-3 mb-3 z-1" style="background-color: #0d75bc;   ">
                <div class="text-white ">

                    <h2 class="text-white pb-2">L'histoire du WGC</h2>
                    <p class="px-3 pt-3 px-sm-1 mt-2 text-center para_txt"> Workin Group Company (WGC) a été fondée dans le
                        but de
                        promouvoir l'entrepreneuriat individuel et de
                        permettre aux gens de gérer leur emploi du temps de manière autonome. Notre mission est
                        d’accompagner
                        les individus dans leur cheminement vers un travail indépendant, en leur offrant une flexibilité et
                        une
                        liberté sans précédent. Nous accordons une attention particulière aux mères célibataires, en leur
                        offrant des opportunités de travail adaptées à leur vie de famille.


                        <br /> <br>
                        L’idée de WGC est née d’une volonté de transformation sociale, permettant aux individus de prendre
                        en
                        main leur avenir professionnel. Nous croyons à l’importance de l’autonomie et à la capacité de
                        chacun à
                        réussir seul avec le bon accompagnement. WGC aspire à être un partenaire de confiance pour tous ceux
                        qui
                        cherchent à démarrer leur propre entreprise, en leur fournissant les outils nécessaires pour
                        prospérer
                        dans un monde de plus en plus connecté et dynamique.
                    </p>


                </div>

            </div>
        </div>


    </div>

    {{-- mobile view start --}}
    <div class="container-fluid d-block d-sm-block d-md-none">
        <div class="row">
            <div class="col-md-4"> <img src="./resources\views\assets\img\bg\girl.png" alt="111" class="w-100">
            </div>

            <div class="text-xl col-md-8 mb-3 text-start text-white rounded-top py-5" style="background-color: #0d75bc;">
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
    {{-- mobile view end --}}




    <!--<<  Start gallery section>>-->
    <section class="service-section fix " style="background-color: #7fc1eda8;">


        <div class="container py-4">
            <div class="text-center">
                <h3 style="color: #0d75bc;">GALERIE</h3>
                <h2>Photo et vidéo</h2>
            </div>

            <div class="row py-3">
                <div class="col-md-6 col-6 my-auto"><img src="./public/assets/img/hero/shopping.png"
                        class="img-fluid  w-100 h-75 " alt="11"></div>
                <div class="col-md-6 col-6">
                    <div class="row py-2 ">
                        <div class="col-md-6 col-6 "> <img src="./resources\views\assets\img\hero\women.png"
                                alt="1" class="w-100   rounded"></div>
                        <div class="col-md-6 col-6 "> <img src="./resources\views\assets\img\hero\hairs.png"
                                alt="2" class="w-100   rounded"></div>
                    </div>
                    <div class="row ">
                        <div class="col-md-6 col-6 "> <img src="./resources\views\assets\img\hero\hairs.png"
                                alt="3" class="w-100  rounded"></div>
                        <div class="col-md-6 col-6 "> <img src="./resources\views\assets\img\hero\iron.png"
                                alt="4" class="w-100   rounded"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    {{-- advantage points --}}


    <section class="service-section fix"
        style=" background: linear-gradient(rgba(0, 119, 200, 0.8), rgba(0, 119, 200, 0.8)),
                    url('./public/assets/img/bg/bg_advantage.png') center/cover;
        height: 30rem;
        position: relative; background-repeat:no-repeat ; background-size:cover ">



        <div class="container" style="position: relative;">
            <div class="text-center py-3 mt-3">

                <img src=".\public\assets\img\bg\advantage_logo.png" alt="99" width="width: 10%" class="">
                <h2 class="text-white text-xl  pt-3 pb-5">Avantages de l'utilisation de WGC</h2>
            </div>
            <div class="row d-block d-sm-block d-md-none ">
                <div class="col-md-4 my-2">
                    <div class="card" style="">
                        <div class="card-body py-5">
                            <h5 class="card-title">Mobile Services</h5>

                            <p class="card-text">Devenez un déménageur indépendant avec WGC, aidant les clients à
                                transporter leurs biens en toute sécurité et efficacement.</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-2">
                    <div class="card" style="">
                        <div class="card-body py-5">
                            <h5 class="card-title">Nettoyage de fin de bail</h5>

                            <p class="card-text">En tant que nettoyeur indépendant chez WGC, aidez les locataires à
                                récupérer leurs dépôts de garantie avec un ménage impeccable.</p>

                        </div>
                    </div>

                </div>
                <div class="col-md-4 my-2">
                    <div class="card" style="">
                        <div class="card-body py-5">
                            <h5 class="card-title">Services de soins à domicile</h5>

                            <p class="card-text">Travaillez en tant que fournisseur de soins à domicile indépendant avec
                                WGC, offrant soutien et compagnie aux personnes seules.</p>

                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>

    <div class="d-none d-md-block" style="transform: translateY(-45%);">
        <div class="container ">
            <div class="row">


                <div id="carouselExampleAutoplaying" class="carousel slide mt-2" data-bs-ride="carousel">


                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-4 my-2">
                                    <div class="card shadow border-0 ">
                                        <div class="card-body p-5">
                                            <h5 class="card-title text-center">Mobile Services</h5>

                                            <p class="text-center">Devenez un déménageur indépendant avec WGC, aidant les
                                                clients à
                                                transporter leurs biens en toute sécurité et efficacement.</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 my-2">
                                    <div class="card shadow border-0 ">
                                        <div class="card-body p-5">
                                            <h5 class="card-title text-center">Nettoyage de fin de bail</h5>

                                            <p class="text-center">En tant que nettoyeur indépendant chez WGC, aidez les
                                                locataires à
                                                récupérer leurs dépôts de garantie avec un ménage impeccable.</p>

                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-4 my-2">
                                    <div class="card shadow border-0 ">
                                        <div class="card-body p-5">
                                            <h5 class="card-title text-center">Services de soins à domicile</h5>

                                            <p class="text-center">Travaillez en tant que fournisseur de soins à domicile
                                                indépendant avec
                                                WGC, offrant soutien et compagnie aux personnes seules.</p>

                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-4 my-2">
                                    <div class="card shadow border-0">
                                        <div class="card-body p-5">
                                            <h5 class="card-title text-center">Mobile Services</h5>

                                            <p class="text-center">Devenez un déménageur indépendant avec WGC, aidant les
                                                clients à
                                                transporter leurs biens en toute sécurité et efficacement.</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 my-2">
                                    <div class="card shadow border-0">
                                        <div class="card-body p-5">
                                            <h5 class="card-title text-center">Nettoyage de fin de bail</h5>

                                            <p class="text-center">En tant que nettoyeur indépendant chez WGC, aidez les
                                                locataires à
                                                récupérer leurs dépôts de garantie avec un ménage impeccable.</p>

                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-4 my-2">
                                    <div class="card shadow border-0">
                                        <div class="card-body p-5">
                                            <h5 class="card-title text-center">Services de soins à domicile</h5>

                                            <p class="text-center">Travaillez en tant que fournisseur de soins à domicile
                                                indépendant avec
                                                WGC, offrant soutien et compagnie aux personnes seules.</p>

                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-4 my-2">
                                    <div class="card shadow border-0">
                                        <div class="card-body p-5">
                                            <h5 class="card-title text-center">Mobile Services</h5>

                                            <p class="text-center">Devenez un déménageur indépendant avec WGC, aidant les
                                                clients à
                                                transporter leurs biens en toute sécurité et efficacement.</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 my-2">
                                    <div class="card shadow border-0">
                                        <div class="card-body p-5">
                                            <h5 class="card-title text-center">Nettoyage de fin de bail</h5>

                                            <p class="text-center">En tant que nettoyeur indépendant chez WGC, aidez les
                                                locataires à
                                                récupérer leurs dépôts de garantie avec un ménage impeccable.</p>

                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-4 my-2">
                                    <div class="card shadow border-0">
                                        <div class="card-body p-5">
                                            <h5 class="card-title text-center">Services de soins à domicile</h5>

                                            <p class="text-center">Travaillez en tant que fournisseur de soins à domicile
                                                indépendant avec
                                                WGC, offrant soutien et compagnie aux personnes seules.</p>

                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
            {{-- <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                    class="active bg-primary" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2" class="bg-primary"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3" class="bg-primary"></button>
            </div> --}}
        </div>

    </div>



{{-- keypoints of service --}}



    <section class="service-section fix mt-3  d-none d-md-block" style="">

        <div class="container-fluid">
            <div class="row mx-auto">

                <div class="col-md-4 position-relative" style="left:6%">
                    <img src="./resources\views\assets\img\hero\people.png" alt="111" class=""
                        style="min-height: -webkit-fill-available; width:90%">

                </div>
                <div class="col-md-7 text-start  rounded" style="background-color: #E7F1F8;    ">
                    <h2 class="text-center pt-5" style="color: #0d75bc;">Réservez votre prestation</h2>
                    <ul class="p-lg-4 p-md-2 fs-4 ">

                        <li class=" py-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                fill="currentColor" class="bi bi-check2-all mx-2" viewBox="0 0 16 16">
                                <path
                                    d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0" />
                                <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708" />
                            </svg> Des hommes et des femmes de ménage qualifiés et expérimentés


                        </li>

                        <li class=" py-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
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
                            </svg> Contrats sans engagement </li>
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
                            </svg> Application mobile dédiée à la gestion de vos ménages  </li>
                        <li class=" py-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                fill="currentColor" class="bi bi-check2-all mx-2" viewBox="0 0 16 16">
                                <path
                                    d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0" />
                                <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708" />
                            </svg> Des solutions flexibles et sur mesure</li>
                    </ul>

                    <div class="d-flex justify-content-center py-2 mx-5">
                        <div class="col-md-6 col-12 me-3">
                            <input placeholder="Votre code postal ou ville" type="text"
                                class="form-control  border-0" />
                        </div>
                        <div class="col-md-3 col-12">
                            <button class="btn btn-primary w-100" style="background-color: #0d75bc;">Allons-y!</button>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>


    {{-- mobile view start --}}
    <div class="container-fluid d-block d-sm-block d-md-none">
        <div class="row">
            <div class="col-md-4">
                <img src="./resources\views\assets\img\hero\people.png" alt="111" class="w-100">
            </div>
            <div class="col-md-8 p-3 text-start text-white rounded-top" style="  background-color: #79bfedfc  ">
                <h2 class="text-center pt-4" style="color: #0d75bc;">Réservez votre prestation</h2>
                <ul class="py-3 " style="font-size: x-small;">

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
                        </svg> Application mobile dédiée à la gestion de vos ménages  </li>
                    <li class=" py-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            fill="currentColor" class="bi bi-check2-all mx-2" viewBox="0 0 16 16">
                            <path
                                d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0" />
                            <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708" />
                        </svg> Des solutions flexibles et sur mesure</li>
                </ul>

                <div class="d-flex justify-content-start py-2 mx-2">
                    <div class="col-md-3 me-3"><input placeholder="Votre code postal ou ville " type="text"
                            class="form-control border-0" /></div>
                    <div class="col-md-3"> <button class="px-2 py-1 text-white rounded"
                            style="background-color: #0d75bc;">Allons-y!</button></div>
                </div>
            </div>

        </div>
    </div>
    {{-- mobile view end --}}













                                                                            {{-- old code  --}}


















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
                            <div class="about-image bg-cover wow fadeInLeft" data-wow-delay=".3s"
                                style="background-image: url('assets/img/about/engineering-maintenance-500x500.webp');">

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-5 mt-lg-0">
                        <div class="about-content">
                            <div class="section-title">

                                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                    {{ __('This Is How It Works') }}
                                </h2>
                            </div>


                            <div class="service-box-items-2">

                                <div class="content">

                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic mollitia a illum in
                                        necessitatibus consectetur,
                                    </p>
                                </div>
                            </div>
                            <br>
                            <div class="service-box-items-2">

                                <div class="content">

                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic mollitia a illum in
                                        necessitatibus consectetur,
                                    </p>
                                </div>
                            </div>
                            <br>
                            <div class="service-box-items-2">
                                <div class="content">

                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic mollitia a illum in
                                        necessitatibus consectetur,
                                    </p>
                                </div>
                            </div>




                            <div class="about-author">
                                <div class="about-button wow fadeInUp" data-wow-delay=".8s">
                                    <a href="#" class="theme-btn">
                                        <span>
                                            {{ __('Explore more about') }}
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

    <!-- Services Section -->
    {{-- <section class="bg-wgc-blue text-white py-5">
        <div class="container">
            <h4 class="mb-2">Présentation de</h4>
            <h2 class="mb-5">Nos prestations</h2>
            <div class="services-grid">
                <div class="service-card">
                    <img src="/api/placeholder/400/300" alt="Ménage" class="w-100">
                    <div class="p-3 text-dark">
                        <h5>Ménage</h5>
                        <p class="mb-0">Service professionnel</p>
                    </div>
                </div>
                <div class="service-card">
                    <img src="/api/placeholder/400/300" alt="Nettoyage" class="w-100">
                    <div class="p-3 text-dark">
                        <h5>Nettoyage fin de bail</h5>
                        <p class="mb-0">Remise à neuf</p>
                    </div>
                </div>
                <div class="service-card">
                    <img src="/api/placeholder/400/300" alt="Services" class="w-100">
                    <div class="p-3 text-dark">
                        <h5>Services à domicile</h5>
                        <p class="mb-0">Prestations personnalisées</p>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="#" class="btn btn-light px-4">Tous les Services</a>
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
                    {{ __('Services We Can Offer You') }}
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
                                    {{ __('Cleaning') }}
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
                    <div class="service-box-items active">
                        <div class="icon">
                            <i class="fa fa-dog-leashed"></i>

                        </div>
                        <div class="content">
                            <h3>
                                <a href="#">
                                    {{ __('Dog walking') }}
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
                                    {{ __('shopping') }}
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
                                    {{ __('Elderly Walks') }}
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
                                    {{ __('Small repairs') }}
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
                                    {{ __('Car services') }}
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
                                    {{ __('Taking people to appointments') }}
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
                                    {{ __('Caring for children') }}
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
                        <span class="text-slider"><img src="assets/img/asterisk-3.svg" alt="img"></span><span
                            class="text-slider text-style-2">{{ __('Caring for children') }}</span>
                        <span class="text-slider"><img src="assets/img/asterisk-3.svg" alt="img"></span><span
                            class="text-slider text-style-2"> {{ __('Shopping') }}</span>
                        <span class="text-slider"><img src="assets/img/asterisk-3.svg" alt="img"></span><span
                            class="text-slider text-style-2"> {{ __('Elderly walks') }}</span>
                        <span class="text-slider"><img src="assets/img/asterisk-3.svg" alt="img"></span><span
                            class="text-slider text-style-2"> {{ __('Small repairs ') }}</span>
                        <span class="text-slider"><img src="assets/img/asterisk-3.svg" alt="img"></span><span
                            class="text-slider text-style-2"> {{ __('Taking people to appointments ') }}</span>
                        <span class="text-slider"><img src="assets/img/asterisk-3.svg" alt="img"></span><span
                            class="text-slider text-style-2"> {{ __('Caring for children ') }}</span>
                        <span class="text-slider"><img src="assets/img/asterisk-3.svg" alt="img"></span><span
                            class="text-slider text-style-2"> {{ __('Outdoor maintenance') }}</span>
                        <span class="text-slider"><img src="assets/img/asterisk-3.svg" alt="img"></span><span
                            class="text-slider text-style-2"> {{ __('Cleaning ') }}</span>
                    </li>
                </ul>
            </div>
        </div>
    </div> --}}



    <!--<< Testimonial Section Start >>-->
    {{-- <section class="testimonial-section-2 section-bg-2 fix section-padding">
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
                    <div class="testimonial-image bg-cover"
                        style="background-image: url('assets/img/testimonial/02.png');"></div>
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
                    <div class="testimonial-image bg-cover"
                        style="background-image: url('assets/img/testimonial/02.png');"></div>
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
                    <div class="testimonial-image bg-cover"
                        style="background-image: url('assets/img/testimonial/02.png');"></div>
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
                    <div class="testimonial-image bg-cover"
                        style="background-image: url('assets/img/testimonial/02.png');"></div>
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
                    <div class="testimonial-image bg-cover"
                        style="background-image: url('assets/img/testimonial/02.png');"></div>
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
                        <h3> {{ __('Do You Also Want To Get In Touch With Us?') }}</h3>

                    </div>
                </div>
                <a href="#" class="theme-btn bg-white wow fadeInUp" data-wow-delay=".5s">
                    <span>
                        {{ __('Contact us') }}

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
                                <span class="wow fadeInUp"> {{ __('freequently Ask Questions') }}</span>
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                    {{ __('have a question in your mind?') }}
                                </h2>
                            </div>
                            <p class=" mt-4 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate temporibus repellendus
                                alias nisi consectetur earum voluptatum?
                            </p>



                            <div class="circle-progress-bar-wrapper style-2">
                                <div class="single-circle-bar wow fadeInUp" data-wow-delay=".7s">
                                    <div class="circle-bar" data-percent="68" data-duration="1000">
                                    </div>
                                    <div class="content">
                                        <h6>
                                            {{ __('Organizations') }} <br>
                                            {{ __('work support') }}
                                        </h6>
                                    </div>
                                </div>
                                <div class="single-circle-bar wow fadeInUp" data-wow-delay=".9s">
                                    <div class="circle-bar" data-percent="93" data-duration="1000">
                                    </div>
                                    <div class="content">
                                        <h6>
                                            {{ __('Management &') }} <br>
                                            {{ __('Support Services') }}
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
                                            {{ __('Organizations ') }} <br>
                                            {{ __('work support ') }}
                                        </h6>
                                    </div>
                                </div>
                                <div class="single-circle-bar wow fadeInUp" data-wow-delay=".9s">
                                    <div class="circle-bar" data-percent="93" data-duration="1000">
                                    </div>
                                    <div class="content">
                                        <h6>
                                            {{ __('Management & ') }} <br>
                                            {{ __('Support Services ') }}
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
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="false"
                                                aria-controls="faq1">
                                                Lorem ipsum dolor?
                                            </button>
                                        </h4>
                                        <div id="faq1" class="accordion-collapse collapse"
                                            data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam quaerat,
                                                veritatis, vitae accusamus dolorum placeat esse saepe voluptate quam nemo
                                                ipsam quod, neque consequatur! Sequi ipsum hic ex amet dolor.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".5s">
                                        <h4 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#faq2" aria-expanded="true" aria-controls="faq2">
                                                Lorem ipsum dolor?
                                            </button>
                                        </h4>
                                        <div id="faq2" class="accordion-collapse collapse show"
                                            data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam quaerat,
                                                veritatis, vitae accusamus dolorum placeat esse saepe voluptate quam nemo
                                                ipsam quod, neque consequatur! Sequi ipsum hic ex amet dolor.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
                                        <h4 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false"
                                                aria-controls="faq3">
                                                Lorem ipsum dolor?
                                            </button>
                                        </h4>
                                        <div id="faq3" class="accordion-collapse collapse"
                                            data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam quaerat,
                                                veritatis, vitae accusamus dolorum placeat esse saepe voluptate quam nemo
                                                ipsam quod, neque consequatur! Sequi ipsum hic ex amet dolor.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".9s">
                                        <h4 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false"
                                                aria-controls="faq4">
                                                Lorem ipsum dolor?
                                            </button>
                                        </h4>
                                        <div id="faq4" class="accordion-collapse collapse"
                                            data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam quaerat,
                                                veritatis, vitae accusamus dolorum placeat esse saepe voluptate quam nemo
                                                ipsam quod, neque consequatur! Sequi ipsum hic ex amet dolor.
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
