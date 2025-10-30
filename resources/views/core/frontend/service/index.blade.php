@extends('core.frontend.layouts.app')


@section('content')


<!-- about wrap -->
<div class="contant-wrap font-dm border-bottom border-gray-100 light-blue-banner position-relative z-1">
    <div class="mx-auto maxw-1100 pt-75 pb-100">
        <div class="container pb-65">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center pb-65">

                    <h2 class="display6-size text-gray-900 fw-700 mb-lg-2 mb-1" data-aos="fade-up"
                        data-aos-duration="400" data-aos-delay="0">Our Customer Our Reach</h2>
                    <p class="text-gray-700 fw-400 mb-0" data-aos="fade-up" data-aos-duration="400"
                        data-aos-delay="100">Making a difference — Our Story to get there.</p>
                </div>
                <div class="col-lg-12 p-0 bg-gradient-blue-light rounded-4" data-aos="fade-up"
                    data-aos-duration="400" data-delay="00">
                    <a href="{{ url('assets/frontend/images/about-video.mp4') }}" class="glightbox video-wrapper position-relative" data-type="video">
                        <img src="{{ url('assets/frontend/images/about-video.webp') }}" alt="banner" class="object-fit-cover w-100 rounded-4" loading="eager">
                        <div class="play-icon position-absolute translate-middle top-50 start-50 w-13 h-13">
                            <img src="{{ url('assets/frontend/images/icon-play.png') }}" alt="play" class="w-100 h-100">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about wrap -->

<!-- brand wrap -->
<livewire:core.frontend.components.brand />
<!-- brand wrap -->

<!-- counter wrap -->
<div class="counter-wrap py-100 bg-gradient-home-banner">
    <div class="container">

        <!-- Section Header -->
        <div class="row pb-65 justify-content-center">
            <div class="col-lg-6 text-center">
                <h2 class="display5-size text-gray-900 fw-600 mb-lg-3 mb-2">
                    Discover how businesses in your industry use quizzes
                </h2>
                <p class="text-gray-900 fw-400 px-lg-5">
                    Whether you're building a startup landing page, a dashboard interface, or a modern web app, it gives you full control.
                </p>
            </div>
        </div>

        <!-- Counter Cards -->
        <div class="row gy-4 justify-content-center mx-auto" id="exsit-counter">

            <!-- SEO Performance -->
            <div class="col-lg-4 text-center d-flex flex-column" data-aos="zoom-in" data-aos-duration="400" data-delay="200">
                <div class="d-flex flex-column gap-4 p-4 bg-gradient-white-light shadow-hover-lg rounded-4 border border-gray-200 mb-4">

                    <!-- Icon -->
                    <div class="w-16 h-16 bg-gradient-primary rounded-pill d-flex align-items-center justify-content-center mx-auto mt-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-lightning-charge-fill text-white" viewBox="0 0 16 16">
                            <path d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"></path>
                        </svg>
                    </div>

                    <!-- Text -->
                    <div class="d-flex flex-column">
                        <h3 class="text-gray-900 display2-size fw-600 mb-1">SEO Performance</h3>
                        <p class="text-gray-800 px-lg-4 mt-2">
                            Our design services start and end with a best-in-class experience strategy that builds brands.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Content Management -->
            <div class="col-lg-4 text-center d-flex flex-column" data-aos="zoom-in" data-aos-duration="400" data-delay="200">
                <div class="d-flex flex-column gap-4 p-4 bg-gradient-white-light shadow-hover-lg rounded-4 border border-gray-200">

                    <!-- Icon -->
                    <div class="w-16 h-16 bg-gradient-secondary rounded-pill d-flex align-items-center justify-content-center mx-auto mt-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-box-seam-fill text-white" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.01-.003.268-.108a.75.75 0 0 1 .558 0l.269.108.01.003zM10.404 2 4.25 4.461 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339L8 5.961 5.596 5l6.154-2.461z"></path>
                        </svg>
                    </div>

                    <!-- Text -->
                    <div class="d-flex flex-column">
                        <h3 class="text-gray-900 display2-size fw-600 mb-1">Content Management</h3>
                        <p class="text-gray-800 px-lg-4 mt-2">
                            Every design begins and ends with design strategy because great brands are not built by accident.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Marketing Strategy -->
            <div class="col-lg-4 text-center d-flex flex-column" data-aos="zoom-in" data-aos-duration="400" data-delay="200">
                <div class="d-flex flex-column gap-4 p-4 bg-gradient-white-light shadow-hover-lg rounded-4 border border-gray-200 mb-4">

                    <!-- Icon -->
                    <div class="w-16 h-16 bg-gradient-orange rounded-pill d-flex align-items-center justify-content-center mx-auto mt-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-layers-fill text-white" viewBox="0 0 16 16">
                            <path d="M7.765 1.559a.5.5 0 0 1 .47 0l7.5 4a.5.5 0 0 1 0 .882l-7.5 4a.5.5 0 0 1-.47 0l-7.5-4a.5.5 0 0 1 0-.882z"></path>
                            <path d="m2.125 8.567-1.86.992a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882l-1.86-.992-5.17 2.756a1.5 1.5 0 0 1-1.41 0z"></path>
                        </svg>
                    </div>

                    <!-- Text -->
                    <div class="d-flex flex-column">
                        <h3 class="text-gray-900 display2-size fw-600 mb-1">Marketing Strategy</h3>
                        <p class="text-gray-800 px-lg-4 mt-2">
                            From first concept to final detail, our design is rooted in experience strategy that drives brand growth.
                        </p>
                    </div>
                </div>
            </div>

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