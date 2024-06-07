@extends('frontend.layouts.app')

@section('title')
    {{ app_name() }}
@endsection

@section('content')
    <!--<< Mouse Cursor Start >>-->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>

    <!--<< Hero Section Start >>-->
    <section class="tw-py-12 tw-bg-gray-100" data-testid="landing-header-container">
        <div class="tw-container tw-m-auto container">
          <div class="md:tw-grid md:tw-gap-2 md:tw-grid-cols-2">
            <div>
              <h1
                class="tw-mb-3 tw-mt-0 tw-text-4xl md:tw-text-5xl tw-text-dark-blue-500" style="font-size: 64px"
              >
                {{ __('Secure Jobs And Grow Your Business') }}
              </h1>
              <p class="tw-mt-0 tw-mb-2 tw-text-lg tw-text-gray-600">
                {{__('1000’s of local and remote clients are already waiting for your services')}}
              </p>
              <div class="tw-py-6" data-testid="category-search">
                <div class="tw-flex tw-gap-2">
                  <div class="bark-autocomplete_wrapper__9-ftj tw-grow-1 tw-w-full">
                    <div class="bark-autocomplete_input__oqc2S">
                      <div class="Input_inputIconWrapperBase__WhfG2">
                        <div class="Input_inputWrapperBase__gttO8" style="color: #000">
                          <input
                            name="autocomplete"
                            id="signup-choose-category"
                            aria-label="autocomplete"
                            type="text"
                            class="Input_inputBase__duizE Input_inputWithoutIcon__6Rf68"
                            autocomplete="off"
                            role="combobox"
                            style="color: #000"
                            placeholder="{{ __('What service do you provide?') }}"
                            data-cy="seller-signup-splash-category-search"
                            value=""
                          />
                          <div class="Input_inputBorderBase__rCJW3"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <button onclick="document.location='{{ route('form2') }}'"
                    class="Button_base__5Wcwx Button_lg__UQt1r Button_minWidth__WGVzH Button_textWhite__9w5Wn Button_bgDarkBlue__9V6YV tw-h-[48px] tw-py-2.5 tw-grow-0 tw-shrink-0 tw-whitespace-nowrap"
                    data-cy="seller-signup-splash-submit"
                  >
                    <span class="tw-flex tw-justify-center"
                      ><span class="button-main"
                        ><span class="child-container Button_childContainer__YG7FP"
                          >{{ __('Get started') }}</span
                        ></span
                      ></span
                    >
                  </button>
                </div>
              </div>
              <div data-testid="popular-services-list">
                <p class="PopularServices_popularServicesHeader__KNB5K">
                  {{ __('Popular services') }}
                </p>
                <div class="PopularServices_popularServicesBlock__sMKIy">
                  <div>
                    <div>
                      <a
                        href="{{ route('form2') }}"
                        class="PopularServices_itemLink__FhD1M item-link"
                        data-cy="seller-signup-splash-popular-service"
                        ><span class="PopularServices_itemLabelText__L7nmu"
                          ><span class="tw-pr-2"
                            ><svg
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                              class="tw-inline-block"
                            >
                              <rect width="24" height="24"></rect>
                              <path
                                d="M16 11H15V4C15 2.34 13.66 1 12 1C10.34 1 9 2.34 9 4V11H8C5.24 11 3 13.24 3 16V21C3 22.1 3.9 23 5 23H19C20.1 23 21 22.1 21 21V16C21 13.24 18.76 11 16 11ZM19 21H17V18C17 17.45 16.55 17 16 17C15.45 17 15 17.45 15 18V21H13V18C13 17.45 12.55 17 12 17C11.45 17 11 17.45 11 18V21H9V18C9 17.45 8.55 17 8 17C7.45 17 7 17.45 7 18V21H5V16C5 14.35 6.35 13 8 13H16C17.65 13 19 14.35 19 16V21Z"
                                fill="currentColor"
                              ></path></svg></span
                          ><span class="tw-truncate label-text"
                            >{{ __('House Cleaning') }}</span
                          ></span
                        ></a
                      >
                    </div>
                    <div>
                      <a
                        href="{{ route('form2') }}"
                        class="PopularServices_itemLink__FhD1M item-link"
                        data-cy="seller-signup-splash-popular-service"
                        ><span class="PopularServices_itemLabelText__L7nmu"
                          ><span class="tw-pr-2"
                            ><svg
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                              class="tw-inline-block"
                            >
                              <rect width="24" height="24"></rect>
                              <path
                                d="M12 8C13.1046 8 14 7.10457 14 6C14 4.89543 13.1046 4 12 4C10.8954 4 10 4.89543 10 6C10 7.10457 10.8954 8 12 8Z"
                                fill="currentColor"
                              ></path>
                              <path
                                d="M21 16V14C18.76 14 16.84 13.04 15.4 11.32L14.06 9.72C13.68 9.26 13.12 9 12.53 9H11.48C10.89 9 10.33 9.26 9.95 9.72L8.61 11.32C7.16 13.04 5.24 14 3 14V16C5.77 16 8.19 14.83 10 12.75V15L6.12 16.55C5.45 16.82 5 17.48 5 18.21C5 19.2 5.8 20 6.79 20H9V19.5C9 18.12 10.12 17 11.5 17H14.5C14.78 17 15 17.22 15 17.5C15 17.78 14.78 18 14.5 18H11.5C10.67 18 10 18.67 10 19.5V20H17.21C18.2 20 19 19.2 19 18.21C19 17.48 18.55 16.82 17.88 16.55L14 15V12.75C15.81 14.83 18.23 16 21 16Z"
                                fill="currentColor"
                              ></path></svg></span
                          ><span class="tw-truncate label-text"
                            >{{ __('Life Coaching') }}</span
                          ></span
                        ></a
                      >
                    </div>
                    <div>
                      <a
                        href="{{ route('form2') }}"
                        class="PopularServices_itemLink__FhD1M item-link"
                        data-cy="seller-signup-splash-popular-service"
                        ><span class="PopularServices_itemLabelText__L7nmu"
                          ><span class="tw-pr-2"
                            ><svg
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                              class="tw-inline-block"
                            >
                              <rect width="24" height="24"></rect>
                              <path
                                d="M21 2H3C1.9 2 1 2.9 1 4V16C1 17.1 1.9 18 3 18H10V20H8V22H16V20H14V18H21C22.1 18 23 17.1 23 16V4C23 2.9 22.1 2 21 2ZM21 16H3V4H21V16Z"
                                fill="currentColor"
                              ></path></svg></span
                          ><span class="tw-truncate label-text"
                            >{{ __('Web Design') }}</span
                          ></span
                        ></a
                      >
                    </div>
                    <div>
                      <a
                        href="{{ route('form2') }}"
                        class="PopularServices_itemLink__FhD1M item-link"
                        data-cy="seller-signup-splash-popular-service"
                        ><span class="PopularServices_itemLabelText__L7nmu"
                          ><span class="tw-pr-2"
                            ><svg
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                              class="tw-inline-block"
                            >
                              <rect width="24" height="24"></rect>
                              <path
                                d="M12 15.2C13.7673 15.2 15.2 13.7673 15.2 12C15.2 10.2327 13.7673 8.8 12 8.8C10.2327 8.8 8.8 10.2327 8.8 12C8.8 13.7673 10.2327 15.2 12 15.2Z"
                                fill="currentColor"
                              ></path>
                              <path
                                d="M9 2L7.17 4H4C2.9 4 2 4.9 2 6V18C2 19.1 2.9 20 4 20H20C21.1 20 22 19.1 22 18V6C22 4.9 21.1 4 20 4H16.83L15 2H9ZM12 17C9.24 17 7 14.76 7 12C7 9.24 9.24 7 12 7C14.76 7 17 9.24 17 12C17 14.76 14.76 17 12 17Z"
                                fill="currentColor"
                              ></path></svg></span
                          ><span class="tw-truncate label-text"
                            >{{ __('General Photography') }}</span
                          ></span
                        ></a
                      >
                    </div>
                    <div>
                      <a
                        href="{{ route('form2') }}"
                        class="PopularServices_itemLink__FhD1M item-link"
                        data-cy="seller-signup-splash-popular-service"
                        ><span class="PopularServices_itemLabelText__L7nmu"
                          ><span class="tw-pr-2"
                            ><svg
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                              class="tw-inline-block"
                            >
                              <rect width="24" height="24"></rect>
                              <path
                                d="M8.7 15.9L4.8 12L8.7 8.1C9.09 7.71 9.09 7.09 8.7 6.7C8.31 6.31 7.69 6.31 7.3 6.7L2.71 11.29C2.32 11.68 2.32 12.31 2.71 12.7L7.3 17.3C7.69 17.69 8.31 17.69 8.7 17.3C9.09 16.91 9.09 16.29 8.7 15.9V15.9ZM15.3 15.9L19.2 12L15.3 8.1C14.91 7.71 14.91 7.09 15.3 6.7C15.69 6.31 16.31 6.31 16.7 6.7L21.29 11.29C21.68 11.68 21.68 12.31 21.29 12.7L16.7 17.3C16.31 17.69 15.69 17.69 15.3 17.3C14.91 16.91 14.91 16.29 15.3 15.9V15.9Z"
                                fill="currentColor"
                              ></path></svg></span
                          ><span class="tw-truncate label-text"
                            >{{ __('Web Development') }}</span
                          ></span
                        ></a
                      >
                    </div>
                    <div>
                      <a
                        href="{{ route('form2') }}"
                        class="PopularServices_itemLink__FhD1M item-link"
                        data-cy="seller-signup-splash-popular-service"
                        ><span class="PopularServices_itemLabelText__L7nmu"
                          ><span class="tw-pr-2"
                            ><svg
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                              class="tw-inline-block"
                            >
                              <rect width="24" height="24"></rect>
                              <path
                                d="M18 12C18 12.55 18.45 13 19 13H21C21.55 13 22 12.55 22 12C22 11.45 21.55 11 21 11H19C18.45 11 18 11.45 18 12Z"
                                fill="currentColor"
                              ></path>
                              <path
                                d="M16.59 16.82C16.26 17.26 16.35 17.87 16.79 18.19C17.32 18.58 17.88 19 18.41 19.4C18.85 19.73 19.47 19.64 19.79 19.2C19.79 19.19 19.8 19.19 19.8 19.18C20.13 18.74 20.04 18.12 19.6 17.8C19.07 17.4 18.51 16.98 17.99 16.59C17.55 16.26 16.93 16.36 16.6 16.8C16.6 16.81 16.59 16.82 16.59 16.82Z"
                                fill="currentColor"
                              ></path>
                              <path
                                d="M19.81 4.81C19.81 4.8 19.8 4.8 19.8 4.79C19.47 4.35 18.85 4.26 18.42 4.59C17.89 4.99 17.32 5.41 16.8 5.81C16.36 6.14 16.28 6.76 16.61 7.19C16.61 7.2 16.62 7.2 16.62 7.21C16.95 7.65 17.56 7.74 18 7.41C18.53 7.02 19.09 6.59 19.62 6.19C20.05 5.87 20.13 5.25 19.81 4.81Z"
                                fill="currentColor"
                              ></path>
                              <path
                                d="M8 9H4C2.9 9 2 9.9 2 11V13C2 14.1 2.9 15 4 15H5V18C5 18.55 5.45 19 6 19C6.55 19 7 18.55 7 18V15H8L13 18V6L8 9Z"
                                fill="currentColor"
                              ></path>
                              <path
                                d="M15.5 12C15.5 10.67 14.92 9.47 14 8.65V15.34C14.92 14.53 15.5 13.33 15.5 12Z"
                                fill="currentColor"
                              ></path></svg></span
                          ><span class="tw-truncate label-text"
                            >{{ __('Social Media Marketing') }}</span
                          ></span
                        ></a
                      >
                    </div>
                  </div>
                  <div>
                    <div>
                      <a
                        href="{{ route('form2') }}"
                        class="PopularServices_itemLink__FhD1M item-link"
                        data-cy="seller-signup-splash-popular-service"
                        ><span class="PopularServices_itemLabelText__L7nmu"
                          ><span class="tw-pr-2"
                            ><svg
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                              class="tw-inline-block"
                            >
                              <rect width="24" height="24"></rect>
                              <path
                                d="M7 14C5.34 14 4 15.34 4 17C4 18.31 2.84 19 2 19C2.92 20.22 4.49 21 6 21C8.21 21 10 19.21 10 17C10 15.34 8.66 14 7 14ZM20.71 4.63L19.37 3.29C18.98 2.9 18.35 2.9 17.96 3.29L9 12.25L11.75 15L20.71 6.04C21.1 5.65 21.1 5.02 20.71 4.63V4.63Z"
                                fill="currentColor"
                              ></path></svg></span
                          ><span class="tw-truncate label-text"
                            >{{ __('Graphic Design') }}</span
                          ></span
                        ></a
                      >
                    </div>
                    <div>
                      <a
                        href="{{ route('form2') }}"
                        class="PopularServices_itemLink__FhD1M item-link"
                        data-cy="seller-signup-splash-popular-service"
                        ><span class="PopularServices_itemLabelText__L7nmu"
                          ><span class="tw-pr-2"
                            ><svg
                              class="MuiSvgIcon-root"
                              focusable="false"
                              viewBox="0 0 24 24"
                              aria-hidden="true"
                            >
                              <path
                                d="M14 2H6c-1.1 0-1.99.9-1.99 2L4 20c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z"
                              ></path></svg></span
                          ><span class="tw-truncate label-text"
                            >{{ __('Bookkeeping Services') }}</span
                          ></span
                        ></a
                      >
                    </div>
                    <div>
                      <a
                        href="{{ route('form2') }}"
                        class="PopularServices_itemLink__FhD1M item-link"
                        data-cy="seller-signup-splash-popular-service"
                        ><span class="PopularServices_itemLabelText__L7nmu"
                          ><span class="tw-pr-2"
                            ><svg
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                              class="tw-inline-block"
                            >
                              <rect width="24" height="24"></rect>
                              <path
                                d="M21.67 18.17L16.37 12.87H15.38L12.84 15.41V16.4L18.14 21.7C18.53 22.09 19.16 22.09 19.55 21.7L21.67 19.58C22.06 19.2 22.06 18.56 21.67 18.17Z"
                                fill="currentColor"
                              ></path>
                              <path
                                d="M17.34 10.19L18.75 8.78L20.87 10.9C22.04 9.73 22.04 7.83 20.87 6.66L17.33 3.12L15.92 4.53V1.71L15.22 1L11.68 4.54L12.39 5.25H15.22L13.81 6.66L14.87 7.72L11.98 10.61L7.85 6.48V5.06L4.83 2.04L2 4.87L5.03 7.9H6.44L10.57 12.03L9.72 12.88H7.6L2.3 18.18C1.91 18.57 1.91 19.2 2.3 19.59L4.42 21.71C4.81 22.1 5.44 22.1 5.83 21.71L11.13 16.41V14.29L16.28 9.14L17.34 10.19Z"
                                fill="currentColor"
                              ></path></svg></span
                          ><span class="tw-truncate label-text"
                            >{{ __('Building Contractors') }}</span
                          ></span
                        ></a
                      >
                    </div>
                    <div>
                      <a
                        href="{{ route('form2') }}"
                        class="PopularServices_itemLink__FhD1M item-link"
                        data-cy="seller-signup-splash-popular-service"
                        ><span class="PopularServices_itemLabelText__L7nmu"
                          ><span class="tw-pr-2"
                            ><svg
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                              class="tw-inline-block"
                            >
                              <rect width="24" height="24"></rect>
                              <path
                                d="M20.57 14.86L22 13.43L20.57 12L17 15.57L8.43 7L12 3.43L10.57 2L9.14 3.43L7.71 2L5.57 4.14L4.14 2.71L2.71 4.14L4.14 5.57L2 7.71L3.43 9.14L2 10.57L3.43 12L7 8.43L15.57 17L12 20.57L13.43 22L14.86 20.57L16.29 22L18.43 19.86L19.86 21.29L21.29 19.86L19.86 18.43L22 16.29L20.57 14.86Z"
                                fill="currentColor"
                              ></path></svg></span
                          ><span class="tw-truncate label-text"
                            >{{ __('Personal Trainers') }}</span
                          ></span
                        ></a
                      >
                    </div>
                    <div>
                      <a
                        href="{{ route('form2') }}"
                        class="PopularServices_itemLink__FhD1M item-link"
                        data-cy="seller-signup-splash-popular-service"
                        ><span class="PopularServices_itemLabelText__L7nmu"
                          ><span class="tw-pr-2"
                            ><svg
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                              class="tw-inline-block"
                            >
                              <rect width="24" height="24"></rect>
                              <path
                                d="M12 22C16.97 22 21 17.97 21 13C16.03 13 12 17.03 12 22ZM5.6 10.25C5.6 11.63 6.72 12.75 8.1 12.75C8.63 12.75 9.11 12.59 9.52 12.31L9.5 12.5C9.5 13.88 10.62 15 12 15C13.38 15 14.5 13.88 14.5 12.5L14.48 12.31C14.88 12.59 15.37 12.75 15.9 12.75C17.28 12.75 18.4 11.63 18.4 10.25C18.4 9.25 17.81 8.4 16.97 8C17.81 7.6 18.4 6.75 18.4 5.75C18.4 4.37 17.28 3.25 15.9 3.25C15.37 3.25 14.89 3.41 14.48 3.69L14.5 3.5C14.5 2.12 13.38 1 12 1C10.62 1 9.5 2.12 9.5 3.5L9.52 3.69C9.12 3.41 8.63 3.25 8.1 3.25C6.72 3.25 5.6 4.37 5.6 5.75C5.6 6.75 6.19 7.6 7.03 8C6.19 8.4 5.6 9.25 5.6 10.25ZM12 5.5C13.38 5.5 14.5 6.62 14.5 8C14.5 9.38 13.38 10.5 12 10.5C10.62 10.5 9.5 9.38 9.5 8C9.5 6.62 10.62 5.5 12 5.5ZM3 13C3 17.97 7.03 22 12 22C12 17.03 7.97 13 3 13Z"
                                fill="currentColor"
                              ></path></svg></span
                          ><span class="tw-truncate label-text">{{ __('Gardening') }}</span></span
                        ></a
                      >
                    </div>
                    <div>
                      <a
                        href="{{ route('form2') }}"
                        class="PopularServices_itemLink__FhD1M item-link"
                        data-cy="seller-signup-splash-popular-service"
                        ><span class="PopularServices_itemLabelText__L7nmu"
                          ><span class="tw-pr-2"
                            ><svg
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                              class="tw-inline-block"
                            >
                              <rect width="24" height="24"></rect>
                              <path
                                d="M8.17 5.7L1 10.48V21H6V13H10V21H15V10.25L8.17 5.7Z"
                                fill="currentColor"
                              ></path>
                              <path
                                d="M10 3V4.51L12 5.84L13.73 7H15V7.85L17 9.19V11H19V13H17V15H19V17H17V21H23V3H10ZM19 9H17V7H19V9Z"
                                fill="currentColor"
                              ></path></svg></span
                          ><span class="tw-truncate label-text"
                            >{{ __('Commercial & Office Cleaning') }}</span
                          ></span
                        ></a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tw-hidden md:tw-flex tw-items-center">
              <div class="tw-max-w-[70%] tw-ml-auto">
                <div
                  class="tw-relative"
                  data-testid="rated-excellent-trustpilot"
                  data-cy="seller-signup-splash-rated-excellent"
                >
                  <img
                    src="assets/img/hero/a-dog-walk-walking-the-dogs-in-the-city-2022-11-08-10-52-58-utc.jpg"
                    class="tw-relative tw-left-0 tw-top-0 tw-w-full tw-object-cover"
                    alt="Splash"
                  />
                  <!-- <svg
                    class="tw-text-white tw-absolute tw-left-0 tw-top-0 tw-text-3xl"
                    width="100%"
                    height="100%"
                    viewBox="0 0 500 500"
                  >
                    <text
                      x="40"
                      class="tw-my-0 tw-font-gordita-regular"
                      fill="currentColor"
                    >
                      Bark is rated
                    </text>
                    <text x="40" y="50" fill="currentColor">Excellent</text>
                  </svg>
                  <div
                    class="tw-absolute tw-text-white tw-bottom-[20px] tw-left-[20px] tw-w-full"
                  > -->
                    <!-- <div
                      class="trustpilot-widget !tw-absolute"
                      data-cy="trustpilot-trustbox-widget"
                      data-testid="trustpilot-trustbox-widget"
                      data-locale="en-IN"
                      data-template-id="53aa8807dec7e10d38f59f32"
                      data-businessunit-id="55bf24b60000ff000581b801"
                      data-style-height="120px"
                      data-style-width="80%"
                      data-theme="dark"
                      data-stars="1,2,3,4,5"
                      data-text-color="#FFFFFF"
                      style="position: relative; bottom: 0px; left: 0px"
                    >
                      <iframe
                        title="Customer reviews powered by Trustpilot"
                        loading="auto"
                        src="https://widget.trustpilot.com/trustboxes/53aa8807dec7e10d38f59f32/index.html?templateId=53aa8807dec7e10d38f59f32&amp;businessunitId=55bf24b60000ff000581b801#cy=trustpilot-trustbox-widget&amp;testid=trustpilot-trustbox-widget&amp;locale=en-IN&amp;styleHeight=120px&amp;styleWidth=80%25&amp;theme=dark&amp;stars=1%2C2%2C3%2C4%2C5&amp;textColor=%23FFFFFF"
                        style="
                          position: relative;
                          height: 120px;
                          width: 80%;
                          border-style: none;
                          display: block;
                          overflow: hidden;
                        "
                      ></iframe>
                    </div>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


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
                width: 35vw;
                padding-top: 50px;
            }

            .tw-container.tw-m-auto.container {
                padding: 50px;
            }
        </style>

        </html>
    @endsection
