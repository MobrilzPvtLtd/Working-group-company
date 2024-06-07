@extends('frontend.layouts.app')

@section('title')
    {{ app_name() }}
@endsection

@section('content')
    <!--<< Mouse Cursor Start >>-->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>

    <!--<< Hero Section Start >>-->
    <div class="container">
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
            input:checked + label{
                        color: #fff;
                    background: #000;
              }
              .hw1{
                border: 1px solid #ddd !important;
                padding: 5px 20px !important;
            }
            </style>
            <style>
              .radio-switch
              input{
                display:none;
              }
              input:checked + label{
                        color: #fff;
                    background: #000;
              }
              .hw1{
                border: 1px solid #ddd !important;
                padding: 5px 20px !important;
            }
            </style>

        </html>
    @endsection
