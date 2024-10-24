@extends('frontend.layouts.app')

@section('title')
    {{ app_name() }}
@endsection

@section('content')
    <style>
        .top-bar {
            background-color: #ffffff;
            padding: 10px 0;
        }

        .navbar {
            background-color: #0077c8;
        }

        .navbar-nav .nav-link {
            color: white !important;
            padding: 1rem 1.5rem !important;
        }

        .contact-info {
            color: #0077c8;
        }

        .hero-section {
            background: linear-gradient(rgba(0, 119, 200, 0.8), rgba(0, 119, 200, 0.8)),
                url('.///asset//img/b//bg/ad/antage.png') center/cover;
            padding: 100px 0;
            position: relative;
        }

        .service-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            height: 200px;
        }

        .service-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .login-btn {
            background-color: transparent;
            border: 2px solid #0077c8;
            color: #0077c8;
            padding: 5px 15px;
            border-radius: 5px;
            text-decoration: none;
        }

        .social-icons a {
            color: #0077c8;
            margin-left: 15px;
            text-decoration: none;
        }
        .bg24{
            background-image: linear-gradient(rgba(235, 240, 245, 0.998), rgba(0, 113, 200, 0.849)),
                               url('./public/assets/img/bg/contactbg24.png ');
            height:38rem;
            background-repeat:no-repeat;
            background-size:cover;

        }
    </style>
    {{-- </head> --}}
    {{-- <body> --}}
    <!-- Top Bar -->
    {{-- <div class="top-bar">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-3">
                <img src="/api/placeholder/150/50" alt="WGC Logo" class="img-fluid" style="max-height: 60px;">
            </div>
            <div class="col-md-6 text-center contact-info">
                <span class="me-4">
                    <i class="far fa-envelope me-2"></i>
                    info@ilende.com
                </span>
                <span>
                    <i class="fas fa-phone me-2"></i>
                    +240222867206
                </span>
            </div>
            <div class="col-md-3 text-end">
                <a href="#" class="login-btn">Se connecter</a>
                <div class="social-icons d-inline-block">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="container-fluid bg24 position-relative w-100"  >

    <div class="row position-absolute top-50"> <h2 class="text-start ps-5">Contactez-nous </h2></div>
</div>

<div class="container my-5">
    <div class="row ">
        <div class="col-md-8 col-11 py-5 shadow-lg mx-auto">
            <div class="row">
                <div class="col-md-6 col-6 py-4" style="background-color: #0d75bc;     margin-left: -4%;">
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

                <div class="col-md-6  col-6 p-4">
                    <h3 style="color: #0D75BC">Entrer en contact</h3>
                    <p>N'hésitez pas à nous écrire ci-dessous !</p>
                    <form class="py-4">
                        <input type="text" placeholder="Nom d'utilisateur" class="form-control mb-3">
                        <input type="text" placeholder="Votre e-mail" class="form-control mb-3">
                        <textarea class="form-control mb-2" placeholder="Tapez votre message ici"></textarea><br />
                        <button class="text-white p-2" style="background-color: #0d75bc;">ENVOYER</button>

                    </form>
                </div> </div>
            </div>
        </div>
    </section>
    </div>
</div>









    <!-- Navigation -->
    {{-- <nav class="navbar navbar-expand-lg">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Maison</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">À propos de nous</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Aide</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contactez-nous</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Rejoignez-Nous En Tant Que Professionnel</a>
                </li>
            </ul>
        </div>
    </div>
</nav> --}}

    <!-- Hero Section -->
    {{-- <section class="hero-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="text-white display-4 mb-5">Nos <br>prestations</h1>
                <div class="row">
                    <div class="col-6 mb-4">
                        <div class="service-card">
                            <img src="/api/placeholder/400/300" alt="Art Supplies">
                        </div>
                    </div>
                    <div class="col-6 mb-4">
                        <div class="service-card">
                            <img src="/api/placeholder/400/300" alt="Carpentry">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="service-card">
                            <img src="/api/placeholder/400/300" alt="Electronics">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="service-card">
                            <img src="/api/placeholder/400/300" alt="Repair">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script> --}}
    </body>

    </html>
@endsection
