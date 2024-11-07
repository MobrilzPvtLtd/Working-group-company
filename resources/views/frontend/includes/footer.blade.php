{{-- <footer class="footer-section section-bg-3">
     <div class="container">

        <div class="footer-widgets-wrapper">
            <div class="row">
                <div class="col-xl-3 col-sm-6 col-md-6 col-lg-3 wow fadeInUp" data-wow-delay=".2s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <a href="index-3.html">
                                <img src="assets/img/logo/logo1111 (1) (3).png" alt="logo-img">
                            </a>
                        </div>
                        <div class="footer-content">
                            <p>
                                {{__('We believe it has the power to do <br> amazing things.')}}
                            </p>
                            <span>{{__('Interested in working with us?')}}</span> <br>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 ps-lg-5 col-sm-6 col-md-3 col-lg-3 wow fadeInUp" data-wow-delay=".4s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <h5>{{__('Quick Links')}}</h5>
                        </div>
                        <ul class="list-items">
                            <li>
                                <a href="#">
                                    {{__('Services')}}
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                {{__('About Company')}}
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                {{__('Latest News')}}
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                {{__('Team Member')}}
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                {{__('Testimonials')}}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 ps-lg-4 col-sm-6 col-md-3 col-lg-3 wow fadeInUp" data-wow-delay=".6s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <h5> {{__('My Account')}}</h5>
                        </div>
                        <ul class="list-items">
                            <li>
                                <a href="#">
                                {{__('Forum Support')}}
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                {{__('Help & FAQ')}}
                                </a>
                            </li>
                            <li>
                                <a href="3">
                                {{__('Contact Us')}}
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                {{__('Pricing And Plans')}}
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                {{__('Cookies Policy')}}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-sm-6 col-md-6 col-lg-3 wow fadeInUp" data-wow-delay=".8s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <h5>{{__('Address')}}</h5>
                        </div>
                        <div class="footer-address-text">
                            <p>{{__('570 8th Ave, New York,NY 10018 United States')}}</p>
                            <h5>{{__('Hours:')}}</h5>
                            <p>
                            {{__('9.30am – 6.30pm <br> Monday to Friday')}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 ps-xl-5 col-sm-6 col-md-6 col-lg-4 wow fadeInUp" data-wow-delay=".9s">
                    <div class="single-footer-widget">
                        <div class="widget-head">
                            <h5>{{__('24/7 Support Center')}}</h5>
                        </div>
                        <div class="footer-apps-items">
                            <div class="support-text">
                                <h3><a href="tel:+1718-904-4450">{{__('+1718-904-4450')}}</a></h3>
                            </div>
                            <div class="footer-content">

                                <a href="mailto:info@example.com" class="link">{{__('info@example.com')}}</a>
                                <div class="social-icon d-flex align-items-center">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-vimeo-v"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-wrapper d-flex align-items-center justify-content-between">
                <p class="wow fadeInLeft color-2" data-wow-delay=".3s">
                {{__('Copyright © 2024')}} <a href="#">{{__('Mobrilz')}}</a>. {{__('All Rights Reserved.')}}
                </p>
                <ul class="footer-menu wow fadeInRight" data-wow-delay=".5s">
                    <li>
                        <a href="#">
                        {{__('Company')}}
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            {{__('Support')}}
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            {{__('Privacy')}}
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            {{__('Faqs')}}
                        </a>
                    </li>
                </ul>



                <div class="language-dropdown-menu" id="language-dropdown-menu">

                    <select class="language-switcher" name="language-switcher" onchange="ChangeLang(this.value);">
                        @foreach (config('app.available_locales') as $locale_code => $locale_name)
                            <option value="{{$locale_code}}"

                            @if (strtolower(app()->currentLocale()) == $locale_code)

                            selected

                            @endif
                            >{{ $locale_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

        </div>
        <a href="#" id="scrollUp" class="scroll-icon">
            <i class="far fa-arrow-up"></i>
        </a>
    </div>




</footer> --}}

{{-- <footer style="background-color: #0d75bc;">

    <div class="container-fluid py-5">
        <div class="row">
            <div class="col-md-4 text-center col-4 mb-2">
                <img src=".\public\assets\img\WGC-logo 1.png" alt="99" class="rounded">
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-4 col-12">
                        <h3 class="text-white">Société du groupe Workin (WGC)</h3>
                        <p class="text-muted pt-2">Notre mission est d’accompagner les individus dans leur cheminement
                            vers un travail indépendant, en leur offrant une flexibilité et une liberté sans précédent.
                        </p>

                        <div class="d-flex justify-content-start pt-5 mb-2">
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
                    <div class="col-md-2 col-6">
                        <h3 class="text-white">Navigation</h3>
                        <ul class="text-white pt-2">
                            <li>Maison </li>
                            <li>À propos </li>
                            <li>Aide </li>
                            <li>Services </li>
                            <li>Contactez-nous</li>


                        </ul>

                    </div>
                    <div class="col-md-2 col-6">

                        <h3 class="text-white"> Notre bureau </h3>
                        <p class="text-white pt-2">Société du groupe <br /> Workin (WGC) <br />CH-1232xyz <br />22-34-15
                        </p>
                    </div>
                    <div class="col-md-4 col-12">
                        <h3 class="text-white"> Entrer en contact </h3>
                        <ul class="text-white pt-2">

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




                    </div>
                </div>




            </div>







        </div>
        <hr class="border border-2" />
        <p class="text-white">Mobrilz © 2024 All Rights Reserved.</p>
    </div>

</footer> --}}
<style>
    .img_footer{
        background-image: url('./public/assets/img/bg/wokinggroup_footer.png');
         background-repeat: no-repeat;
        background-size: cover;
        /* height: 250px; */
        width: 100%;

    }

</style>


<footer>


    <div class="container-fluid  img_footer d-none d-sm-none d-md-block"  >

        <div class="row" >

            <div class="text-start"> <img src="./public/assets/img/WGC-logo 1.png" alt="WGC Logo" class="rounded px-5"> </div>
            <div class="text-end position-absolute fixed"><a href=""> <img src=".\public\img\chat_logo.png" alt="chat" width="3%">  </a> </div>
        </div>
        <div class="row mx-auto">

                <div class="col-md-4 pt-5 col-12 ">
                    <h3 class="text-white">Société du groupe Workin (WGC)</h3>
                    <p class="text-white pt-2">
                        Notre mission est d’accompagner les individus dans leur cheminement vers un travail indépendant,
                        en leur offrant une flexibilité et une liberté sans précédent.
                    </p>
                    <div class="d-flex justify-content-start pt-5 mb-2">
                        <a href="#" class="text-white mx-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                class="bi bi-facebook" viewBox="0 0 16 16">
                                <path
                                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                            </svg>
                        </a>
                        <a href="#" class="text-white mx-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                class="bi bi-envelope-at-fill" viewBox="0 0 16 16">
                                <path
                                    d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2zm-2 9.8V4.698l5.803 3.546zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.5 4.5 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586zM16 9.671V4.697l-5.803 3.546.338.208A4.5 4.5 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671" />
                                <path
                                    d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791" />
                            </svg>
                        </a>
                        <a href="#" class="text-white mx-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                class="bi bi-twitter" viewBox="0 0 16 16">
                                <path
                                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 pt-5 col-6" >
                    <h3 class="text-white">Navigation</h3>
                    <ul class="text-white pt-2">
                        <li> <a href="/"></a>Maison</li>
                        <li><a href="/about"></a>À propos</li>
                        <li><a href="#"></a>Aide</li>
                        <li><a href="/service"></a>Services</li>
                        <li><a href="/contact"></a>Contactez-nous</li>
                    </ul>
                </div>
                <div class="col-md-3 pt-5 col-6" >
                    <h3 class="text-white">Notre bureau</h3>
                    <p class="text-white pt-2">
                        Société du groupe Workin (WGC) <br />
                        CH-1232xyz <br />
                        22-34-15
                    </p>
                </div>
                <div class="col-md-2 pt-5 col-12 ">
                    <h3 class="text-white">Entrer en contact</h3>
                    <ul class="text-white pt-2">
                        <li class="py-2"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                fill="currentColor" class="bi bi-geo-alt-fill">
                                <path
                                    d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                            </svg> Lorem ipsum dolor sit amet</li>
                        <li class="py-2"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                fill="currentColor" class="bi bi-envelope-fill">
                                <path
                                    d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z" />
                            </svg> noida2024@gmail.com</li>
                        <li class="py-2"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                fill="currentColor" class="bi bi-telephone-fill">
                                <path fill-rule="evenodd"
                                    d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                            </svg> 0751-236578</li>
                        <li class="py-2"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                fill="currentColor" class="bi bi-whatsapp">
                                <path
                                    d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                            </svg> 9078653421</li>
                    </ul>
                </div>
                 <hr class="border border-2" />
                <p class="text-white text-start">Mobrilz © 2024 All Rights Reserved.</p>

            </div>


    </div>

  {{-- mobile view start  --}}

  <div class="container-fluid bg-white d-block d-md-none">

    <div class="d-flex justify-content-between mb-3 align-items-center">

        <div> <img src="./public/assets/img/WGC-logo 1.png" alt="WGC Logo" class="rounded w-75"> </div>
        <div class="text-end"><a href=""> <img src=".\public\img\chat_logo.png" alt="chat" width="10%">  </a> </div>
    </div>

</div>

<div class="container-fluid  d-block d-md-none " style="background-color: #0d75bc"  >


    <div class="row">

            <div class="col-md-4 pt-5 col-12 ">
                <h3 class="text-white">Société du groupe Workin (WGC)</h3>
                <p class="text-white pt-2">
                    Notre mission est d’accompagner les individus dans leur cheminement vers un travail indépendant,
                    en leur offrant une flexibilité et une liberté sans précédent.
                </p>
                <div class="d-flex justify-content-start pt-5 mb-2">
                    <a href="#" class="text-white mx-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                            class="bi bi-facebook" viewBox="0 0 16 16">
                            <path
                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                        </svg>
                    </a>
                    <a href="#" class="text-white mx-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                            class="bi bi-envelope-at-fill" viewBox="0 0 16 16">
                            <path
                                d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2zm-2 9.8V4.698l5.803 3.546zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.5 4.5 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586zM16 9.671V4.697l-5.803 3.546.338.208A4.5 4.5 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671" />
                            <path
                                d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791" />
                        </svg>
                    </a>
                    <a href="#" class="text-white mx-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                            class="bi bi-twitter" viewBox="0 0 16 16">
                            <path
                                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-md-2 pt-5 col-6" >
                <h3 class="text-white">Navigation</h3>
                <ul class="text-white pt-2">
                    <li> <a href="/"></a>Maison</li>
                    <li><a href="/about"></a>À propos</li>
                    <li><a href="#"></a>Aide</li>
                    <li><a href="/service"></a>Services</li>
                    <li><a href="/contact"></a>Contactez-nous</li>
                </ul>
            </div>
            <div class="col-md-2 pt-5 col-6" >
                <h3 class="text-white">Notre bureau</h3>
                <p class="text-white pt-2">
                    Société du groupe Workin (WGC) <br />
                    CH-1232xyz <br />
                    22-34-15
                </p>
            </div>
            <div class="col-md-4 pt-5 col-12 ">
                <h3 class="text-white">Entrer en contact</h3>
                <ul class="text-white pt-2">
                    <li class="py-2"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                            fill="currentColor" class="bi bi-geo-alt-fill">
                            <path
                                d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                        </svg> Lorem ipsum dolor sit amet</li>
                    <li class="py-2"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                            fill="currentColor" class="bi bi-envelope-fill">
                            <path
                                d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z" />
                        </svg> noida2024@gmail.com</li>
                    <li class="py-2"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                            fill="currentColor" class="bi bi-telephone-fill">
                            <path fill-rule="evenodd"
                                d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                        </svg> 0751-236578</li>
                    <li class="py-2"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                            fill="currentColor" class="bi bi-whatsapp">
                            <path
                                d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                        </svg> 9078653421</li>
                </ul>
            </div>
             <hr class="border border-2" />
            <p class="text-white text-start">Mobrilz © 2024 All Rights Reserved.</p>

        </div>


</div>

{{-- mobile view end  --}}

</footer>


<script>
    function ChangeLang(lang) {

        window.location.replace('{{ route('language.switch', '') }}' + '/' + lang);

    }
</script>

<style>
    header.header-section-3 {
        padding: 18px;
    }

    section.hero-section.hero-3 {
        margin-top: -110px;
    }

    .sticky {
        padding: 18px;
    }

    .service-box-items-2 {
        background-color: var(--white);
        -webkit-box-shadow: var(---box-shadow);
        box-shadow: var(---box-shadow);
        border-radius: 10px;
        padding: 25px 25px;
        border: 2px solid transparent;
        -webkit-transition: all 0.4s ease-in-out;
        transition: all 0.4s ease-in-out;
        position: relative;
        z-index: 9;
    }

    .service-box-items-2 p {
        font-weight: 600;
    }

    .line-shape {
        position: absolute;
    }

    @media (min-width: 1200px) {
        .d-xl-block {
            display: block !important;
            z-index: 999 !important;
        }
    }

    .header-3 .mega-menu-wrapper .header-main .header-right .header__hamburger .sidebar__toggle .header-bar span:first-child {
        background: #0d75bc !important;
    }

    .header-3 .mega-menu-wrapper .header-main .header-right .header__hamburger .sidebar__toggle .header-bar span {
        background: #0d75bc !important;
    }

    .header-main .main-menu ul li {
        position: relative;
        list-style: none;
        display: list-item !important;
        -webkit-margin-end: 0px !important;
        margin-inline-end: 0px !important;
    }

    .header-main .main-menu ul li a {

        padding: 10px 0 !important;

    }
</style>
