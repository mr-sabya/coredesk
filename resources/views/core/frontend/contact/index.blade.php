@extends('core.frontend.layouts.app')


@section('content')
<div class="banner-wrap font-dm position-relative light-blue-banner">
    <div class="container py-100">
        <div class="row justify-content-center">
            <div class="col-lg-5 text-center justify-content-center">
                <div class="d-flex flex-row mx-auto justify-content-center">
                    <div class="px-3 py-1 border border-gray-200 shadow-sm rounded-3 fs-13 fw-600 text-uppercase text-info bg-white align-items-center gap-2 d-flex w-auto"
                        data-aos="zoom-in" data-aos-delay="0" data-aos-duration="400"><svg viewBox="0 0 24 24"
                            width="18" height="18" stroke="currentColor" stroke-width="2" fill="none"
                            stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                            <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                        </svg> Our customer feedback</div>
                </div>
                <h2 class="display6-size text-gray-900 fw-700 mb-lg-2 mb-1 mt-3 lh-5" data-aos="fade-up"
                    data-aos-duration="200">Get in touch with our team</h2>
                <p class="text-gray-700 fw-400" data-aos="fade-up" data-aos-duration="300">Genuine feedback from
                    those who know us best.</p>
            </div>
        </div>
    </div>
</div><!-- contact wrap -->
<div class="contant-wrap font-dm pb-100 border-bottom border-gray-100">
    <div class="maxw-1250 mx-auto">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6" data-aos="zoom-in" data-aos-duration="400" data-delay="00">
                    <img src="{{ url('assets/frontend/images/contact.webp') }}" alt="banner"
                        class="object-fit-cover w-100 rounded-4 img-fluid" loading="eager" width="637"
                        height="844">
                </div>
                <div class="col-lg-6">
                    <div class="contact-form-wrap bg-gray-100 border border-gray-200 rounded-4 p-lg-5 p-4"
                        data-aos="zoom-in" data-aos-duration="400" data-delay="200"><span
                            class="text-gray-900 fw-600 display4-size">Connect with us</span>
                        <p class="text-gray-800 fw-400 pe-lg-5" data-aos="fade-up" data-aos-duration="400"
                            data-delay="300">Streamline HR processes and empower your team with our products.
                            Facilitate manage employee data.</p>
                        <div class="contact-form mt-4 pt-lg-3">
                            <form id="contactForm">
                                <div class="row mb-3">
                                    <div class="col-md-6"><label for="firstName"
                                            class="form-label fw-500 fs-15 text-gray-900">First name</label>
                                        <input type="text" class="form-control form-control-lg" id="firstName"
                                            name="firstName" placeholder="Sophia etc." required>
                                    </div>
                                    <div class="col-md-6"><label for="lastName"
                                            class="form-label fw-500 fs-15 text-gray-900">Last name</label>
                                        <input type="text" class="form-control form-control-lg" id="lastName"
                                            name="lastName" placeholder="Carter etc." required>
                                    </div>
                                </div>
                                <div class="mb-3"><label for="email"
                                        class="form-label fw-500 fs-15 text-gray-900">Enter email
                                        address</label> <input type="email" class="form-control form-control-lg"
                                        id="email" name="email" placeholder="support@gmail.com" required></div>
                                <div class="mb-3"><label for="phone"
                                        class="form-label fw-500 fs-15 text-gray-900">Phone number</label>
                                    <input type="tel" class="form-control form-control-lg" id="phone"
                                        name="phone" placeholder="+91 0000 12345">
                                </div>
                                <div class="mb-4"><label for="message"
                                        class="form-label fw-500 fs-15 text-gray-900">Put the message</label>
                                    <textarea class="form-control form-control-lg" id="message" name="message"
                                        rows="5" placeholder="Provide any details regarding your query …"
                                        required></textarea>
                                </div>
                                <div class="pt-2"></div><button type="submit"
                                    class="btn btn-primary btn-lg">Send message <svg viewBox="0 0 24 24"
                                        width="20" height="20" stroke="currentColor" stroke-width="2"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round"
                                        class="text-white ms-2">
                                        <line x1="7" y1="17" x2="17" y2="7"></line>
                                        <polyline points="7 7 17 7 17 17"></polyline>
                                    </svg></button>
                                <div id="formResult" class="mt-3"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact wrap -->

<!-- faq wrapper -->
<livewire:core.frontend.components.faq />
<!-- faq wrapper -->


<!-- cta wrapper -->
<livewire:core.frontend.components.cta />
<!-- cta wrapper -->
@endsection