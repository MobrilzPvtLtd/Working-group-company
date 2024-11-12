@extends('frontend.layouts.app')

@section('title')
    {{ app_name() }}
@endsection

@section('content')
    <!--<< Mouse Cursor Start >>-->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>




    <div class="container-fluid my-4">
        <div class="row ">
            <div class="col-md-6">
                <img src=".\public\assets\img\bg\womencare.png" alt="11" class="w-100">
            </div>

            <div class="col-md-6 p-5 my-auto">
                <h2 class="py-5">indépendante</h2>
                <h6 style="color:  #0d75bc" class="py-2">Fournir le nom</h6>
                <p>Travaillez en tant que prestataire de soins à domicile <br />indépendant avec WGC, offrant soutien et
                    compagnie aux <br /> personnes seules.</p>
                <button class="py-3 px-5 text-white mt-3" style="background-color: #0d75bc"  data-bs-toggle="modal" data-bs-target="#exampleModal">Réservez maintenant  </button>
            </div>

        </div>
        <div class="row ">
            <div class="col-md-6 d-none d-md-block ">
                <div class="card  border-0 rounded-top text-start px-5 py-3"
                    style="
                        margin-top: -110px;
                             padding: 38px 0;">
                    <h3 style="color:  #36a1eb" class="pb-2">Services de soins à domicile</h3>
                    <p>Nos aides à domicile vous apportent soutien et accompagnement, vous offrant une présence
                        bienveillante et des services personnalisés.</p>
                </div>
            </div>
            {{-- mobile view  start--}}
            <div class="col-md-6 d-block d-sm-block d-md-none  ">
                <div class="card  border-0 rounded-top text-start px-5 py-3"
                    style="position:absolute; top:44%">
                    <h3 style="color:  #36a1eb" class="pb-2">Services de soins à domicile</h3>
                    <p>Nos aides à domicile vous apportent soutien et accompagnement, vous offrant une présence
                        bienveillante et des services personnalisés.</p>
                </div>
            </div>
            {{-- mobile view end --}}
            <div class="col-md-6"></div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10  mx-auto my-2 ">
                <div class="card shadow-lg p-5 border-0 ">
                    <h3 class="p-3">Autres services prestataires de</h3>
                    <div
                        style="
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


  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="ModalLabel24" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #0d75bc">
          <h1 class="modal-title fs-5 text-white " id="ModalLabel24">Book Now</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="">
                <input type="text" class="form-control mb-3" placeholder="Name">
                <input type="email" class="form-control mb-3" placeholder="Email">
                <input type="number" class="form-control mb-3" placeholder="Mobile">
                <input type="text" class="form-control mb-3" placeholder="Address">
                <button class="btn btn-outline-primary">Submit</button>
            </form>

        </div>

      </div>
     </div>
</div>

    <!--<< Footer Section Start >>-->

    </body>

    </html>
@endsection
