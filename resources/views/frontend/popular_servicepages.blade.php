@extends('frontend.layouts.app')

@section('title')
    {{ app_name() }}
@endsection

@section('content')
    <!--<< Mouse Cursor Start >>-->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>





    {{-- service & Develop keypoints --}}


    <div class="container-fluid my-4 ">
        <div class="row  position-relative">


            <div class="col-md-6 text-start  rounded py-2" style="background-color: #E7F1F8;  width:55%">
                <h2 class="text-center py-2" style="color: #0d75bc;">Garantissez des emplois et <br /> Développez votre
                    entreprise</h2>

                <h4 class="text-muted pt-4" style="padding: 0 16%;">Services populaires</h4>
                <div class="d-flex justify-content-center py-3 my-3">

                    <div class="col-md-4">
                        <ul class="text-black font-semibold">
                            <li><a href="/service_form"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                        <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                                    </svg> Services de déménagement </a></li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-dot" viewBox="0 0 16 16">
                                    <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                                </svg><a href="/service_form"> Peinture </a></li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-dot" viewBox="0 0 16 16">
                                    <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                                </svg><a href="/service_form"> Ménage de fin de location </a></li>
                            <li> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-dot" viewBox="0 0 16 16">
                                    <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                                </svg><a href="/service_form"> Services de livraison </a></li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-dot" viewBox="0 0 16 16">
                                    <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                                </svg><a href="/service_form"> Services de soins à domicile </a></li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-dot" viewBox="0 0 16 16">
                                    <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                                </svg><a href="/service_form"> Services de dédouanement</a></li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-dot" viewBox="0 0 16 16">
                                    <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                                </svg><a href="/service_form"> Assemblage de meubles </a></li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-dot" viewBox="0 0 16 16">
                                    <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                                </svg><a href="/service_form"> Réparation de téléviseurs et d'électroménagers </a></li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-dot" viewBox="0 0 16 16">
                                    <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                                </svg><a href="/service_form"> Réparation de téléphone </a></li>


                        </ul>

                    </div>
                    <div class="col-md-4">

                        <ul class="text-black">
                            <li> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-dot" viewBox="0 0 16 16">
                                    <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                                </svg><a href="/service_form">Acheteur personnel</a> </li>
                            <li> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-dot" viewBox="0 0 16 16">
                                    <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                                </svg><a href="/service_form"> Services de blanchisserie</a></li>
                            <li> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-dot" viewBox="0 0 16 16">
                                    <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                                </svg><a href="/service_form">Repassage des vêtements</a></li>
                            <li> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                    <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                                </svg><a href="/service_form">Nettoyage des chaussures</a></li>
                            <li> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                    <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                                </svg><a href="/service_form">Prestations de coiffure</a></li>
                            <li> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                    <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                                </svg><a href="/service_form">Services de traduction</a></li>
                            <li> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                    <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                                </svg><a href="/service_form">Livraison de courrier express</a></li>
                            <li> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                    <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                                </svg><a href="/service_form">Conseil</a></li>
                        </ul>

                    </div>
                </div>

                <div class="d-flex justify-content-center py-2">

                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search Service"
                            aria-label="Search">
                        <button class="btn btn-outline-light " type="submit"><a href="/service_form"
                                class="">Search </a></button>
                    </form>

                </div>
            </div>

            <div class="col-md-6 d-none d-md-block" style="margin-left: -5%;  width:38%"> <img
                    src="./resources\views\assets\img\hero\people.png" alt="111" class="w-75"
                    style="min-height: -webkit-fill-available;">
            </div>
            {{-- mobile view img   --}}
            <div class="col-md-6 d-block d-sm-block d-md-none"> <img src="./resources\views\assets\img\hero\people.png"
                    alt="111" class="w-100">
            </div>

        </div>


    </div>


    <!--<< Footer Section Start >>-->

    </body>

    </html>
@endsection
