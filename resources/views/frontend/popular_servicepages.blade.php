@extends('frontend.layouts.app')

@section('title')
    {{ app_name() }}
@endsection

@section('content')
    <!--<< Mouse Cursor Start >>-->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>


    <!-- Offcanvas Area Start -->
<style>
    li {
    padding: 12px 0px;
}
</style>

    {{-- service & Develop keypoints --}}


        <div class="container-fluid my-3">
            <div class="row" style=" position: relative">


                <div class="col-md-6 text-start  rounded py-4" style="background-color: #88c8f294;  ">
                    <h3 class="text-center py-4" style="color: #0d75bc;">Garantissez des emplois et <br /> Développez votre
                        entreprise</h3>

                    <h4 class="text-muted pt-4" style="padding: 0 115px;">Services populaires</h4>
                    <div class="d-flex justify-content-center py-3 my-3">

                        <div class="col-md-4">
                            <ul class="text-black font-semibold">
                                <li><a href="/service_form">Services de déménagement </a></li>
                                <li><a href="/service_form"> Peinture </a></li>
                                <li><a href="/service_form">Ménage de fin de location </a></li>
                                <li> <a href="/service_form">Services de livraison </a></li>
                                <li><a href="/service_form">Services de soins à domicile </a></li>
                                <li><a href="/service_form">Services de dédouanement</a></li>
                                <li><a href="/service_form">Assemblage de meubles </a></li>
                                <li><a href="/service_form"> Réparation de téléviseurs et d'électroménagers </a></li>
                                <li><a href="/service_form">Réparation de téléphone </a></li>


                            </ul>

                        </div>
                        <div class="col-md-4">

                            <ul class="text-black">
                                <li><a href="/service_form">Acheteur personnel</a> </li>
                                <li><a href="/service_form"> Services de blanchisserie</a></li>
                                <li><a href="/service_form">Repassage des vêtements</a></li>
                                <li><a href="/service_form">Nettoyage des chaussures</a></li>
                                <li><a href="/service_form">Prestations de coiffure</a></li>
                                <li><a href="/service_form">Services de traduction</a></li>
                                <li><a href="/service_form">Livraison de courrier express</a></li>
                                <li><a href="/service_form">Conseil</a></li>
                            </ul>

                        </div>
                    </div>

                    <div class="d-flex justify-content-center pt-5">
                        <div class="col-md-6 " style="margin-left: 18%;"><input placeholder="Quel service fournissez-vous?" type="text"
                                class="form-control rounded-start py-2" /></div>
                        <div class="col-md-5 ms-1"> <button class="px-2 py-2 rounded text-white fs-6"
                                style="background-color: #0d75bc;">POUR COMMENCER </button></div>
                    </div>
                </div>

                <div class="col-md-6 d-none d-md-block" style="margin-left: -85px; "> <img src="./resources\views\assets\img\hero\people.png"
                        alt="111" class="w-100" style="min-height: -webkit-fill-available;">
                </div>
                {{-- mobile view img   --}}
                <div class="col-md-6 d-block d-sm-block d-md-none" > <img src="./resources\views\assets\img\hero\people.png"
                    alt="111" class="w-100">
            </div>

            </div>


        </div>


    <!-- Header Area Start -->



    <!--<< Footer Section Start >>-->

    </body>

    </html>
@endsection
