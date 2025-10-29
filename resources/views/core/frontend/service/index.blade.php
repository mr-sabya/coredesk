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
<div class="team-wrap py-100">
    <div class="container">

        <!-- Section Header -->
        <div class="row pb-65 justify-content-center">
            <div class="col-lg-7 text-center">
                <h2 class="display5-size text-gray-900 fw-600 mb-lg-2 mb-1" data-aos="fade-up" data-aos-duration="400" data-aos-delay="0">
                    Discover what customers expect and go beyond to amaze them
                </h2>
                <p class="text-gray-700 fw-400 pe-lg-5 mb-0" data-aos="fade-up" data-aos-duration="400" data-aos-delay="100">
                    More balanced you — and works tirelessly to help you get there.
                </p>
            </div>
        </div>

        <!-- Team Members -->
        <div class="row gy-4">

            <!-- Member 1 -->
            <div class="col-lg-3 col-md-6 col-sm-6 member-wrap" data-aos="zoom-in" data-aos-delay="0" data-aos-duration="400">
                <div class="d-flex flex-column gap-3">
                    <div class="overflow-hidden rounded-4 position-relative image-zoom-onhover">
                        <a href="#">
                            <img src="{{ url('assets/frontend/images/team/member-23.webp') }}" alt="member" class="w-100 img-fluid" width="306" height="407" loading="lazy">
                        </a>

                        <!-- Social Links -->
                        <div class="social-wrap social-wrap-box position-absolute top-4">
                            <ul class="d-flex flex-column gap-2 ms-3">
                                <li class="mb-1">
                                    <a href="https://www.linkedin.com/">
                                        <span class="visually-hidden">linkedin</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-linkedin text-cyan" viewBox="0 0 16 16">
                                            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z" />
                                        </svg>
                                    </a>
                                </li>
                                <li class="mb-1">
                                    <a href="https://www.twitch.com/">
                                        <span class="visually-hidden">twitch</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-twitch text-red" viewBox="0 0 16 16">
                                            <path d="M3.857 0 1 2.857v10.286h3.429V16l2.857-2.857H9.57L14.714 8V0zm9.714 7.429-2.285 2.285H9l-2 2v-2H4.429V1.143h9.142z" />
                                            <path d="M11.857 3.143h-1.143V6.57h1.143zm-3.143 0H7.571V6.57h1.143z" />
                                        </svg>
                                    </a>
                                </li>
                                <li class="mb-1">
                                    <a href="https://www.twitter.com/">
                                        <span class="visually-hidden">twitter</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-twitter-x text-gray-900" viewBox="0 0 16 16">
                                            <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Member Info -->
                    <div class="text-center">
                        <h3 class="text-gray-900 display3-size fw-600 mb-0">Goria Coast</h3>
                        <p class="text-gray-700 fw-500 fs-16 mb-0">Founder and CEO of Exsit</p>
                    </div>
                </div>
            </div>

            <!-- Member 2 -->
            <div class="col-lg-3 col-md-6 col-sm-6 member-wrap" data-aos="zoom-in" data-aos-delay="100" data-aos-duration="400">
                <div class="d-flex flex-column gap-3">
                    <div class="overflow-hidden rounded-4 position-relative image-zoom-onhover">
                        <a href="#">
                            <img src="{{ url('assets/frontend/images/team/member-22.webp') }}" alt="member" class="w-100 img-fluid" width="306" height="407" loading="lazy">
                        </a>
                        <div class="social-wrap social-wrap-box position-absolute top-4">
                            <!-- Social links repeated here (LinkedIn, Twitch, Twitter) -->
                        </div>
                    </div>
                    <div class="text-center">
                        <h3 class="text-gray-900 display3-size fw-600 mb-0">Medico Deo</h3>
                        <p class="text-gray-700 fw-500 fs-16 mb-0">Founder and CEO of Exsit</p>
                    </div>
                </div>
            </div>

            <!-- Member 3 -->
            <div class="col-lg-3 col-md-6 col-sm-6 member-wrap" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="400">
                <div class="d-flex flex-column gap-3">
                    <div class="overflow-hidden rounded-4 position-relative image-zoom-onhover">
                        <a href="#">
                            <img src="{{ url('assets/frontend/images/team/member-21.webp') }}" alt="member" class="w-100 img-fluid" width="306" height="407" loading="lazy">
                        </a>
                        <div class="social-wrap social-wrap-box position-absolute top-4">
                            <!-- Social links repeated here -->
                        </div>
                    </div>
                    <div class="text-center">
                        <h3 class="text-gray-900 display3-size fw-600 mb-0">Sophia Carter</h3>
                        <p class="text-gray-700 fw-500 fs-16 mb-0">Founder and CEO of Exsit</p>
                    </div>
                </div>
            </div>

            <!-- Member 4 -->
            <div class="col-lg-3 col-md-6 col-sm-6 member-wrap" data-aos="zoom-in" data-aos-delay="300" data-aos-duration="400">
                <div class="d-flex flex-column gap-3">
                    <div class="overflow-hidden rounded-4 position-relative image-zoom-onhover">
                        <a href="#">
                            <img src="{{ url('assets/frontend/images/team/member-20.webp') }}" alt="member" class="w-100 img-fluid" width="306" height="407" loading="lazy">
                        </a>
                        <div class="social-wrap social-wrap-box position-absolute top-4">
                            <!-- Social links repeated here -->
                        </div>
                    </div>
                    <div class="text-center">
                        <h3 class="text-gray-900 display3-size fw-600 mb-0">Emily Grace</h3>
                        <p class="text-gray-700 fw-500 fs-16 mb-0">Founder and CEO of Exsit</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- team wrap -->

<!-- faq wrapper -->
<livewire:core.frontend.components.faq />
<!-- faq wrapper -->


<!-- cta wrapper -->
<livewire:core.frontend.components.cta />
<!-- cta wrapper -->
@endsection