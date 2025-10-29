@extends('core.frontend.layouts.app')


@section('content')
<!-- price wrap -->
<div class="price-wrap font-dm position-relative header-top light-blue-banner">
    <div class="maxw-1250 mx-auto">
        <div class="container py-100">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center justify-content-center">
                    <h2 class="display6-size text-gray-900 fw-700 mb-lg-3 mb-3 mt-0 lh-5" data-aos="fade-up"
                        data-aos-duration="200">Zero Cost to Start. Unlock potential as you grow</h2>
                    <p class="text-gray-700 fw-400 pe-lg-5" data-aos="fade-up" data-aos-duration="300">Our
                        pricing is built to support every stage of your journey—from your first booking.</p>
                    <div class="d-flex flex-row mx-auto justify-content-center mt-4">
                        <div class="px-3 py-1 border border-gray-200 shadow-sm rounded-3 fs-13 fw-600 text-uppercase text-white bg-info align-items-center gap-2 d-flex w-auto"
                            data-aos="zoom-in" data-aos-delay="0" data-aos-duration="400"><svg
                                viewBox="0 0 24 24" width="18" height="18" stroke="currentColor"
                                stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                class="css-i6dzq1">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                </polygon>
                            </svg> Our customer feedback</div>
                    </div>
                    <div class="d-flex flex-row gap-2 justify-content-center align-items-center pt-3"
                        data-aos="fade-up" data-aos-delay="200" data-aos-duration="200"><span
                            class="text-gray-900 fw-500 pt-1 fs-16">Bill monthly</span>
                        <div class="form-check form-switch pt-0"><input
                                class="form-check-input form-checked-success pt-0" type="checkbox" role="switch"
                                id="billing-toggle" checked=""> <label class="form-check-label form-label mb-0"
                                for="billing-toggle"></label></div><span
                            class="text-gray-900 fw-500 pt-1 fs-16">Bill annually</span>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center gy-4 gx-4 pt-lg-5 mt-4">
                <div class="col-lg-4" data-aos="zoom-in" data-aos-duration="400" data-aos-delay="0">
                    <div class="d-flex flex-column p-5 bg-gray-100 border border-gray-200 rounded-4 mt-2">
                        <h3 class="fs-22 fw-600 text-gray-900">Startup</h3>
                        <p class="text-gray-700 fw-400 mb-0 fs-16 mt-1">Best for startup business owners who
                            needs for business.</p>
                        <h2 class="display5-size fw-700 text-gray-900 lh-1 my-4 py-2"><span class="price"
                                data-monthly="29" data-annually="299">$29</span><span
                                class="fs-16 fw-500 text-gray-700 d-inline-block lh-1 ls-1"> / month</span></h2>
                        <p class="text-gray-700 fw-400 mb-2 fs-16 d-flex flex-row align-items-center gap-2"><svg
                                xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-check-circle-fill text-info" viewBox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z">
                                </path>
                            </svg> 10 GB disk space availability</p>
                        <p class="text-gray-700 fw-400 mb-2 fs-16 d-flex flex-row align-items-center gap-2"><svg
                                xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-check-circle-fill text-info" viewBox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z">
                                </path>
                            </svg> 50 GB NVMe SSD for use</p>
                        <p class="text-gray-700 fw-400 mb-2 fs-16 d-flex flex-row align-items-center gap-2"><svg
                                xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-check-circle-fill text-info" viewBox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z">
                                </path>
                            </svg> Free platform access for all</p>
                        <p class="text-gray-700 fw-400 mb-2 fs-16 d-flex flex-row align-items-center gap-2"><svg
                                xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-check-circle-fill text-info" viewBox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z">
                                </path>
                            </svg> Lifetime updates facility</p>
                        <p class="text-gray-700 fw-400 mb-2 fs-16 d-flex flex-row align-items-center gap-2"><svg
                                xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-check-circle-fill text-info" viewBox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z">
                                </path>
                            </svg> One year support</p><a href="#"
                            class="btn bg-info btn-lg rounded-2 pt-3 mt-4 text-white btn-hover-bg-darken-info border-0"><span>Start
                                trial for 14 days</span> <svg viewBox="0 0 24 24" width="20" height="20"
                                stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"
                                stroke-linejoin="round" class="text-white">
                                <line x1="7" y1="17" x2="17" y2="7"></line>
                                <polyline points="7 7 17 7 17 17"></polyline>
                            </svg></a>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="zoom-in" data-aos-duration="400" data-aos-delay="100">
                    <div class="d-flex flex-column p-5 bg-info rounded-4">
                        <h3 class="fs-22 fw-500 text-white">Business</h3>
                        <p class="text-gray-200 fw-400 mb-0 fs-16 mt-1">The team is responsive, professional,
                            and genuinely cares.</p>
                        <h2 class="display5-size fw-700 text-white lh-1 my-4 py-2 ls-2"><span class="price"
                                data-monthly="49" data-annually="499">$49</span><span
                                class="fs-16 fw-400 text-gray-200 d-inline-block lh-1"> / month</span></h2>
                        <p class="text-gray-400 fw-400 mb-2 fs-16 d-flex flex-row align-items-center gap-2"><svg
                                xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-check-circle-fill text-white" viewBox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z">
                                </path>
                            </svg> 20 GB disk space availability</p>
                        <p class="text-gray-200 fw-400 mb-2 fs-16 d-flex flex-row align-items-center gap-2"><svg
                                xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-check-circle-fill text-white" viewBox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z">
                                </path>
                            </svg> 100 GB NVMe SSD for use</p>
                        <p class="text-gray-200 fw-400 mb-2 fs-16 d-flex flex-row align-items-center gap-2"><svg
                                xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-check-circle-fill text-white" viewBox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z">
                                </path>
                            </svg> Free platform access for all</p>
                        <p class="text-gray-200 fw-400 mb-2 fs-16 d-flex flex-row align-items-center gap-2"><svg
                                xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-check-circle-fill text-white" viewBox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z">
                                </path>
                            </svg> Lifetime updates facility</p>
                        <p class="text-gray-200 fw-400 mb-2 fs-16 d-flex flex-row align-items-center gap-2"><svg
                                xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-check-circle-fill text-white" viewBox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z">
                                </path>
                            </svg> Automate reminders support</p>
                        <p class="text-gray-200 fw-400 mb-2 fs-16 d-flex flex-row align-items-center gap-2"><svg
                                xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-check-circle-fill text-white" viewBox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z">
                                </path>
                            </svg> 24/7 chat support</p><a href="#"
                            class="btn bg-white btn-lg rounded-2 pt-3 mt-4 text-info border-0"><span>Start trial
                                for 14 days</span> <svg viewBox="0 0 24 24" width="20" height="20"
                                stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"
                                stroke-linejoin="round" class="text-info">
                                <line x1="7" y1="17" x2="17" y2="7"></line>
                                <polyline points="7 7 17 7 17 17"></polyline>
                            </svg></a>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="zoom-in" data-aos-duration="400" data-aos-delay="200">
                    <div class="d-flex flex-column p-5 bg-gray-100 border border-gray-200 rounded-4 mt-2">
                        <h3 class="fs-22 fw-600 text-gray-900">Enterprise</h3>
                        <p class="text-gray-700 fw-400 mb-0 fs-16 mt-1">Best for startup business owners who
                            needs for business.</p>
                        <h2 class="display5-size fw-700 text-gray-900 lh-1 my-4 py-2"><span class="price"
                                data-monthly="99" data-annually="799">$99</span><span
                                class="fs-16 fw-500 text-gray-700 d-inline-block lh-1 ls-1"> / month</span></h2>
                        <p class="text-gray-700 fw-400 mb-2 fs-16 d-flex flex-row align-items-center gap-2"><svg
                                xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-check-circle-fill text-info" viewBox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z">
                                </path>
                            </svg> Enable SSO &amp; SAML</p>
                        <p class="text-gray-700 fw-400 mb-2 fs-16 d-flex flex-row align-items-center gap-2"><svg
                                xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-check-circle-fill text-info" viewBox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z">
                                </path>
                            </svg> Dedicated account support</p>
                        <p class="text-gray-700 fw-400 mb-2 fs-16 d-flex flex-row align-items-center gap-2"><svg
                                xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-check-circle-fill text-info" viewBox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z">
                                </path>
                            </svg> Security and legal reviews</p>
                        <p class="text-gray-700 fw-400 mb-2 fs-16 d-flex flex-row align-items-center gap-2"><svg
                                xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-check-circle-fill text-info" viewBox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z">
                                </path>
                            </svg> Lifetime updates facility</p>
                        <p class="text-gray-700 fw-400 mb-2 fs-16 d-flex flex-row align-items-center gap-2"><svg
                                xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-check-circle-fill text-info" viewBox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z">
                                </path>
                            </svg> One year support</p><a href="#"
                            class="btn bg-info btn-lg rounded-2 pt-3 mt-4 text-white btn-hover-bg-darken-info border-0"><span>Contact
                                with us</span> <svg viewBox="0 0 24 24" width="20" height="20"
                                stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"
                                stroke-linejoin="round" class="text-white">
                                <line x1="7" y1="17" x2="17" y2="7"></line>
                                <polyline points="7 7 17 7 17 17"></polyline>
                            </svg></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- price wrap -->


<!-- brand wrap -->
<livewire:core.frontend.components.brand />
<!-- brand wrap -->

<!-- faq wrapper -->
<livewire:core.frontend.components.faq />
<!-- faq wrapper -->

<!-- cta wrapper -->
<livewire:core.frontend.components.cta />
<!-- cta wrapper -->
@endsection