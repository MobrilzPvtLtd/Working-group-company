@extends('frontend.layouts.app')

@section('title')
    {{ app_name() }}
@endsection

@section('content')
    <!--<< Mouse Cursor Start >>-->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>


    <!-- Offcanvas Area Start -->


    {{-- service & Develop keypoints --}}
    <section class="service-section fix  my-5">

        <div class="container-fluid">
            <div class="row" style=" position: relative">


                <div class="col-md-6 text-start  rounded py-4" style="background-color: #88c8f294;  ">
                    <h3 class="text-center py-4" style="color: #0d75bc;">Garantissez des emplois et <br /> Développez votre
                        entreprise</h3>

                    <h6 class="text-muted py-4" style="padding: 0 145px;">Services populaires</h6>
                    <div class="d-flex justify-content-center py-3 my-3">

                        <div class="col-md-4">
                            <ul class="text-black font-semibold">
                                <li><a href="/service_form"> Services de déménagement </a></li>
                                <li>Peinture</li>
                                <li>Ménage de fin de location </li>
                                <li>Services de livraison</li>
                                <li>Services de soins à domicile</li>
                                <li>Services de dédouanement</li>
                                <li>Assemblage de meubles</li>
                                <li> Réparation de téléviseurs et d'électroménagers</li>
                                <li>Réparation de téléphone</li>


                            </ul>

                        </div>
                        <div class="col-md-4">

                            <ul class="text-black">
                                <li>Acheteur personnel </li>
                                <li> Services de blanchisserie</li>
                                <li>Repassage des vêtements</li>
                                <li>Nettoyage des chaussures</li>
                                <li>Prestations de coiffure</li>
                                <li>Services de traduction</li>
                                <li>Livraison de courrier express</li>
                                <li>Conseil</li>
                            </ul>

                        </div>
                    </div>
                    {{-- <div class="d-flex justify-content-center pt-5">
                        <p>Des milliers de clients locaux et distants attendent déjà vos services</p>

                    </div> --}}

                    <div class="d-flex justify-content-center pt-5">
                        <div class="col-md-3 "><input placeholder="Quel service fournissez-vous?" type="text"
                                class="form-control rounded-start py-2" /></div>
                        <div class="col-md-3 ms-1"> <button class="px-2 py-2 rounded text-white"
                                style="background-color: #0d75bc;">POUR COMMENCER </button></div>
                    </div>
                </div>

                <div class="col-md-6 d-none d-md-block" style="margin-left: -165px;"> <img src="./resources\views\assets\img\hero\people.png"
                        alt="111" class="w-100">
                </div>
                <div class="col-md-6 d-block d-sm-block d-md-none" > <img src="./resources\views\assets\img\hero\people.png"
                    alt="111" class="w-100">
            </div>

            </div>


        </div>
    </section>




    <!-- Header Area Start -->



    <!--<< Footer Section Start >>-->

    </body>

    </html>
@endsection
