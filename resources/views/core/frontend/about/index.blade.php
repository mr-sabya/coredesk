@extends('core.frontend.layouts.app')


@section('content')
<!-- banner wrap -->
<div class="banner-wrap font-dm position-relative light-blue-banner">
    <div class="container py-100">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center justify-content-center">
                <div class="d-flex flex-row mx-auto justify-content-center">
                    <div class="px-3 py-1 border border-gray-200 shadow-sm rounded-3 fs-13 fw-600 text-uppercase text-info bg-white align-items-center gap-2 d-flex w-auto"
                        data-aos="zoom-in" data-aos-delay="0" data-aos-duration="400"><svg viewBox="0 0 24 24"
                            width="18" height="18" stroke="currentColor" stroke-width="2" fill="none"
                            stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                            <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                        </svg> Our customer feedback</div>
                </div>
                <h2 class="display6-size text-gray-900 fw-700 mb-lg-2 mb-1 mt-3 lh-5" data-aos="fade-up"
                    data-aos-duration="200">Our Story</h2>
                <p class="text-gray-700 fw-400" data-aos="fade-up" data-aos-duration="300">Empowering
                    Businesses, One Solution at a Time</p>
            </div>
        </div>
    </div>
</div>
<!-- banner wrap -->

<!-- about wrap -->
<div class="contant-wrap font-dm pb-100 border-bottom border-gray-100">
    <div class="maxw-1100 mx-auto">
        <div class="container">
            <div class="row g-4 pb-65">
                <div class="col-lg-6">
                    <img src="{{ url('assets/frontend/images/about-5.webp') }}" alt="banner" class="object-fit-cover w-100 rounded-4" loading="eager">
                </div>
                <div class="col-lg-6">
                    <div class="">
                        <img src="{{ url('assets/frontend/images/about-6.webp') }}" alt="banner" class="object-fit-cover w-100 rounded-4" loading="eager">
                    </div>
                    <div class="mt-4">
                        <div class="font-dm bg-gray-200 border border-gray-200 rounded-4 p-4 bg-gradient-cyan-blue d-flex flex-column"
                            style="height: 265px;">
                            <div class="avatar-group d-flex flex-row pt-1">
                                <div class="avatar me-2 avatar-rounded">
                                    <img src="{{ url('assets/frontend/images/avatars/avater-11.webp') }}" alt="member-avatar" class="rounded-pill w-11 h-11" loading="lazy">
                                </div>
                                <div class="avatar me-2 avatar-rounded">
                                    <img src="{{ url('assets/frontend/images/avatars/avater-12.webp') }}" alt="member-avatar" class="rounded-pill w-11 h-11" loading="lazy">
                                </div>
                                <div class="avatar me-2 avatar-rounded">
                                    <img src="{{ url('assets/frontend/images/avatars/avater-13.webp') }}" alt="member-avatar" class="rounded-pill w-11 h-11" loading="lazy">
                                </div>
                                <div class="avatar me-2 avatar-rounded">
                                    <img src="{{ url('assets/frontend/images/avatars/avater-14.webp') }}" alt="member-avatar" class="rounded-pill w-11 h-11" loading="lazy">
                                </div>
                            </div>
                            <div class="mt-auto">
                                <h3 class="display6-size fw-500 text-gray-900 mb-1" style="font-size: 75px;">30x
                                </h3>
                                <p class="text-gray-900 display2-size fw-400 pe-2 fst-italic w-lg-75 mb-0">
                                    Genuine feedback those who know us best.</p>
                            </div>
                            <div class="position-absolute end-0 bottom-5 d-none d-lg-flex">
                                <svg
                                    viewBox="0 0 24 24" width="150" height="150" stroke="currentColor"
                                    stroke-width="0.35" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round" class="css-i6dzq1 text-gray-900 opacity-50">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="2" y1="12" x2="22" y2="12"></line>
                                    <path
                                        d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gy-4">
                <div class="col-lg-6">
                    <div class="w-lg-75" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">
                        <h3 class="text-gray-900 fw-600 display4-size mt-3">We built the growth platform we
                            always wanted, so you don't have to. We are more than just a company</h3>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-5">
                    <p class="text-gray-900 fw-400" data-aos="fade-up" data-aos-duration="500"
                        data-aos-delay="400">Get intent on data the accounts you want to target as well as
                        emails, direct dials, and cell phones. Everything you need to close the deal is right at
                        your fingertips. Do not risk losing your current customers because they are not aware of
                        additional products or services you provide. Build your ultimate prospecting list and
                        know when your prospects intent signals increase or decrease to optimize your pipeline.
                    </p>
                    <p class="text-gray-900 fw-400 mb-4 pb-2" data-aos="fade-up" data-aos-duration="500"
                        data-aos-delay="600">Get intent on data the accounts you want to target as well as
                        emails, direct dials, and cell phones. Everything you need to close the deal is right at
                        your fingertips. Do not risk losing your current customers because they are not aware of
                        additional products.</p>
                    <div><a href="about-2.html"
                            class="btn bg-info btn-lg rounded-2 px-4 text-white mb-1 btn-hover-bg-darken-info border-0"
                            data-aos="fade-up" data-aos-duration="500" data-aos-delay="400"><span>Explore
                                more</span> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-arrow-up-right ms-2">
                                <line x1="7" y1="17" x2="17" y2="7"></line>
                                <polyline points="7 7 17 7 17 17"></polyline>
                            </svg></a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about wrap -->

<!-- counter wrap -->
<div class="counter-wrap py-100 bg-gradient-home-banner">
    <div class="container">
        <div class="row pb-65 justify-content-center">
            <div class="col-lg-7 text-center">
                <h2 data-aos="fade-up" data-aos-duration="400" data-delay="200"
                    class="display5-size text-gray-900 fw-600 mb-lg-3 mb-2 px-lg-4">Trusted by 150,000+ content
                    creators agencies</h2>
                <p data-aos="fade-up" data-aos-duration="400" data-delay="300"
                    class="text-gray-900 fw-400 px-lg-5">Quizzes are working for them — and they can for you
                    too. or a modern web app gives you full control.</p>
            </div>
        </div>
        <div class="row gy-4 maxw-1000 justify-content-center mx-auto pb-lg-5" id="exsit-counter">
            <div class="col-lg-4 text-center d-flex flex-column" data-aos="zoom-in" data-aos-duration="400"
                data-delay="200">
                <h2 class="display6-size fw-400 text-gray-900"><span data-percentage="22.5"
                        class="exsit-counter"></span>k</h2>
                <p class="display1-size text-gray-900 fw-400 mb-0">Higher Conversion Rates</p>
            </div>
            <div class="col-lg-4 text-center d-flex flex-column" data-aos="zoom-in" data-aos-duration="400"
                data-delay="300">
                <h2 class="display6-size fw-400 text-gray-900">+<span data-percentage="65"
                        class="exsit-counter"></span>m</h2>
                <p class="display1-size text-gray-900 fw-400 mb-0">Backed by those who believe.</p>
            </div>
            <div class="col-lg-4 text-center d-flex flex-column" data-aos="zoom-in" data-aos-duration="400"
                data-delay="400">
                <h2 class="display6-size fw-400 text-gray-900">><span data-percentage="99.2"
                        class="exsit-counter"></span><span class="display5-size">%</span></h2>
                <p class="display1-size text-gray-900 fw-400 mb-0">People who trust what we.</p>
            </div>
        </div>
        <div class="row py-lg-4 bg-white rounded-4 mt-5 pt-4">
            <div data-aos="zoom-in" data-aos-duration="400" data-delay="200"
                class="col-lg-2 col-md-6 col-6 text-center"><img src="{{ url('assets/frontend/images/brands/b-1.png') }}" alt="brand"
                    class="h-7 mb-4 mb-md-0" loading="lazy"></div>
            <div data-aos="zoom-in" data-aos-duration="400" data-delay="200"
                class="col-lg-2 col-md-6 col-6 text-center"><img src="{{ url('assets/frontend/images/brands/b-2.png') }}" alt="brand"
                    class="h-7 mb-4 mb-md-0" loading="lazy"></div>
            <div data-aos="zoom-in" data-aos-duration="400" data-delay="200"
                class="col-lg-2 col-md-6 col-6 text-center"><img src="{{ url('assets/frontend/images/brands/b-3.png') }}" alt="brand"
                    class="h-7 mb-4 mb-md-0" loading="lazy"></div>
            <div data-aos="zoom-in" data-aos-duration="400" data-delay="200"
                class="col-lg-2 col-md-6 col-6 text-center"><img src="{{ url('assets/frontend/images/brands/b-4.png') }}" alt="brand"
                    class="h-7 mb-4 mb-md-0" loading="lazy"></div>
            <div data-aos="zoom-in" data-aos-duration="400" data-delay="200"
                class="col-lg-2 col-md-6 col-6 text-center"><img src="{{ url('assets/frontend/images/brands/b-5.png') }}" alt="brand"
                    class="h-7 mb-4 mb-md-0" loading="lazy"></div>
            <div data-aos="zoom-in" data-aos-duration="400" data-delay="200"
                class="col-lg-2 col-md-6 col-6 text-center"><img src="{{ url('assets/frontend/images/brands/b-6.png') }}" alt="brand"
                    class="h-7 mb-4 mb-md-0" loading="lazy"></div>
        </div>
    </div>
</div>
<!-- counter wrap -->

<!-- team wrap -->
<livewire:core.frontend.components.team />
<!-- team wrap -->

<!-- faq wrapper -->
<livewire:core.frontend.components.faq />
<!-- faq wrapper -->


<!-- cta wrapper -->
<livewire:core.frontend.components.cta />
<!-- cta wrapper -->
@endsection