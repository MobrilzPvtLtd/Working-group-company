@extends('frontend.layouts.app')

@section('title')
    {{ app_name() }}
@endsection

@section('content')



        <!--<< Mouse Cursor Start >>-->
        <div class="mouse-cursor cursor-outer"></div>
        <div class="mouse-cursor cursor-inner"></div>


 <!-- Offcanvas Area Start -->




 <div class="container-fluid my-4">
    <div class="row">
        <div class="col-md-6">
            <img src=".\public\assets\img\bg\womencare.png" alt="11" class="w-100">
        </div>

        <div class="col-md-6 p-5 my-auto">
            <h2 class="py-5">indépendante</h2>
            <h6 style="color:  #0d75bc" class="py-2">Fournir le nom</h6>
            <p>Travaillez en tant que prestataire de soins à domicile <br/>indépendant avec WGC, offrant soutien et compagnie aux <br/> personnes seules.</p>
            <button class="py-3 px-5 text-white mt-3" style="background-color: #0d75bc ">Réservez maintenant</button>
        </div>

    </div>
    <div class="row">
        <div class="col-md-6  ">
            <div class="card  border-0 rounded-top text-start px-5 py-3" style="
            margin-top: -110px;
            padding: 38px 0;">
            <h3 style="color:  #36a1eb" class="pb-2">Services de soins à domicile</h3>
            <p>Nos aides à domicile vous apportent soutien et accompagnement, vous offrant une présence bienveillante et des services personnalisés.</p>
        </div></div>
        <div class="col-md-6"></div>
    </div>

</div>



<div class="container-fluid">
    <div class="row">
        <div class="col-md-10  mx-auto my-2 ">
            <div class="card shadow-lg p-5 border-0 " >
                <h3 class="p-3">Autres services</h3>
                <div style="
                overflow-y: scroll;
                height: 87vh;
                overflow-x: hidden; ">
                <div class="row pt-3 ">
                    <div class="col-md-3  text-center"> <img src="./resources\views\assets\img\hero\paint.png"
                            alt="1" class="w-75 h-75 pt-3 rounded ">
                        <h6 class="">Peinture</h6>
                    </div>
                    <div class="col-md-3 text-center">
                        <img src="./resources\views\assets\img\hero\doctor.png" alt="2"
                            class="w-75 h-75 pt-3 rounded ">
                        <h6 class="">Maison services de soins</h6>

                    </div>
                    <div class="col-md-3 text-center "> <img src="./resources\views\assets\img\hero\delivery.png"
                            alt="2" class="w-75 h-75 pt-3 rounded ">
                        <h6 class="">Autorisation services</h6>

                    </div>
                    <div class="col-md-3 text-center"> <img src="./resources\views\assets\img\hero\mobile.png"
                        alt="2" class="w-75 h-75 pt-3 rounded ">
                    <h6 class="">Réparation de téléviseurs et d'appareils électroménagers</h6>
                </div>
                </div>
                <div class="row  ">
                    <div class="col-md-3 text-center "> <img src="./resources\views\assets\img\hero\wood.png"
                            alt="1" class="w-75 h-75 pt-3 rounded ">
                        <h6 class="">Assemblage de meubles</h6>
                    </div>
                    <div class="col-md-3 text-center"> <img src="./resources\views\assets\img\hero\mobile.png"
                            alt="2" class="w-75 h-75 pt-3 rounded ">
                        <h6 class="">Réparation de téléviseurs et d'appareils électroménagers</h6>
                    </div>
                    <div class="col-md-3 text-center">
                        <img src="./resources\views\assets\img\hero\doctor.png" alt="2"
                            class="w-75 h-75 pt-3 rounded ">
                        <h6 class="">Maison services de soins</h6>

                    </div>
                    <div class="col-md-3 text-center "> <img
                            src="./resources\views\assets\img\hero\phone_internal.png" alt="2"
                            class="w-75 h-75 pt-3 rounded ">
                        <h6 class="">Téléphone Réparation</h6>
                    </div>
                </div>
                <div class="row pt-3 ">
                    <div class="col-md-3 text-center">
                        <img src="./resources\views\assets\img\hero\doctor.png" alt="2"
                            class="w-75 h-75 pt-3 rounded ">
                        <h6 class="">Maison services de soins</h6>

                    </div>
                    <div class="col-md-3  text-center"> <img src="./resources\views\assets\img\hero\paint.png"
                            alt="1" class="w-75 h-75 pt-3 rounded ">
                        <h6 class="">Peinture</h6>
                    </div>
                    <div class="col-md-3 text-center">
                        <img src="./resources\views\assets\img\hero\doctor.png" alt="2"
                            class="w-75 h-75 pt-3 rounded ">
                        <h6 class="">Maison services de soins</h6>

                    </div>
                    <div class="col-md-3 text-center "> <img src="./resources\views\assets\img\hero\delivery.png"
                            alt="2" class="w-75 h-75 pt-3 rounded ">
                        <h6 class="">Autorisation services</h6>

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
