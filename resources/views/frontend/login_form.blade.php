@extends('frontend.layouts.app')

@section('title')
    {{ app_name() }}
@endsection

@section('content')
    <!--<< Mouse Cursor Start >>-->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>

    <!--<< Hero Section Start >>-->
    {{-- <div class="container">
        <h2 class="mt-4">{{ __('House Cleaning Details') }}</h2>
        <form action="submit_cleaning_details.php" method="post">
            <div class="form-group">
                <label for="name">{{ __('Your name:') }}</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="name">{{ __('Company name:') }}</label>
                <input type="text" class="form-control" id="companyname" name="name" required>
            </div>
            <div class="form-group">
                <p>{{ __("If you aren't a business or don't have this information, you can leave this blank") }}
                </p>
                <label for="email">{{ __('Email address:') }}</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="phone">{{ __('Phone number:') }}</label>
                <input type="tel" class="form-control" id="phone" name="phone" required>
            </div>

            <div class="radio-switch">
                <p>{{ __('Are you a freelancer') }}</p>
                <input type="radio" name="younice" id="youniceyes1">
                <label class="hw1" for="youniceyes">{{ __('Yes') }}</label>
                <input type="radio" name="younice" id="youniceno1">
                <label class="hw1" for="youniceno">{{ __('No') }}</label>
            </div>
            <div class="radio-switch">
                <p>{{ __('Do you own a agency') }}</p>
                <input type="radio" name="younice" id="youniceyes2">
                <label class="hw1" for="youniceyes">{{ __('Yes') }}</label>
                <input type="radio" name="younice" id="youniceno2">
                <label class="hw1" for="youniceno">{{ __('No') }}</label>
            </div>
            <div class="radio-switch">
                <p>{{ __('Does your company have a website?') }}</p>
                <input type="radio" name="younice" id="youniceyes">
                <label class="hw1" for="youniceyes">{{ __('Yes') }}</label>
                <input type="radio" name="younice" id="youniceno">
                <label class="hw1" for="youniceno">{{ __('No') }}</label>
            </div>

            <div class="radio-switch">
                <p>{{ __('Company size, employees') }}</p>
                <input type="radio" name="younice" id="youniceyes1">
                <label class="hw1" for="youniceyes1">{{ __('Self-employed, Sole trader') }}</label>
                <input type="radio" name="younice" id="youniceno1">
                <label class="hw1" for="youniceno1">2-10</label>
                <input type="radio" name="younice" id="youniceno2">
                <label class="hw1" for="youniceno2">11-50</label>
                <input type="radio" name="younice" id="youniceno3">
                <label class="hw1" for="youniceno3">21-200</label>
                <input type="radio" name="younice" id="youniceno4">
                <label class="hw1" for="youniceno4">200+</label>
            </div>

            <div class="py-4"><button type="submit" class="btn btn-primary">{{ __('Submit') }}</button></div>
        </form>
    </div> --}}

    <div class="container my-5 ">
        <div class="row ">
        <div class="col-8 mx-auto  p-4" style="background-color: #0d75bc;">

          <h2 class="text-white text-center">Connectez-vous à votre compte</h2>
          <p class="text-white text-center">Créez un compte pour profiter de tous nos services.</p>
          <div class="text-center mx-4 py-3">

          <form>


          <input type="text" class="form-control mb-2 py-3 border-0" placeholder="Nom d'utilisateur ou e-mail" style="background-color: #4697ce" />
          <input type="text" class="form-control  mb-2 py-3 border-0" placeholder="Mot de passe" style="background-color: #4697ce"  />
          <a href="#" class="text-end text-white">vous avez oublié votre mot de passe ?</a>

          <button class="btn btn-light mt-3 fs-3 w-100 py-2 " style="color: #0d75bc">Se connecter</button>


          </form>  </div>
          <div class="text-center text-white py-4">
            <p>Vous n'avez pas de compte ? S'inscrire</p>


            <p>Vous pouvez également vous connecter avec</p>


          </div>
          <div class="d-flex justify-content-center py-3">
            <a href="#">

            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-facebook text-white " viewBox="0 0 16 16">
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
              </svg> </a>
              <a href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-envelope-at-fill text-white mx-3" viewBox="0 0 16 16">
                <path d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2zm-2 9.8V4.698l5.803 3.546zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.5 4.5 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586zM16 9.671V4.697l-5.803 3.546.338.208A4.5 4.5 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671"/>
                <path d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791"/>
              </svg> </a>

              <a href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-twitter text-white" viewBox="0 0 16 16">
                <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15"/>
              </svg> </a>
          </div>


        </div>



        </div>
    </div>



    <!--<< Footer Section Start >>-->

    </body>
    <style>
        /* header.header-section-3 {
                    padding: 18px;
                } */

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

        .md\:tw-grid.md\:tw-gap-2.md\:tw-grid-cols-2 {
            display: flex;
        }

        .PopularServices_popularServicesBlock__sMKIy {
            display: flex;
        }

        svg.MuiSvgIcon-root {
            width: 1.3vw;
        }

        .PopularServices_popularServicesBlock__sMKIy {
            display: flex;
            width: 40vw;
            gap: 50px;
        }

        .tw-flex.tw-gap-2 {
            display: flex;
            gap: 35px;
        }

        p.PopularServices_popularServicesHeader__KNB5K {
            padding: 15px 0px;
        }

        input#signup-choose-category {
            width: 13vw;
            padding: 10px;
        }

        span.button-main {
            background: #0d75bc;
            padding: 15px;
            border-radius: 5px;
            color: #fff;
        }

        p.tw-mt-0.tw-mb-2.tw-text-lg.tw-text-gray-600 {
            padding: 15px 0px;
        }

        .tw-relative {
            width: 25vw;
        }

        .tw-container.tw-m-auto.container {
            padding: 50px;
        }

        input:checked+label {
            color: #fff;
            background: #000;
        }

        .hw1 {
            border: 1px solid #ddd !important;
            padding: 5px 20px !important;
        }
    </style>
    <style>
        .radio-switch input {
            display: none;
        }

        input:checked+label {
            color: #fff;
            background: #000;
        }

        .hw1 {
            border: 1px solid #ddd !important;
            padding: 5px 20px !important;
        }
    </style>

    </html>
@endsection
