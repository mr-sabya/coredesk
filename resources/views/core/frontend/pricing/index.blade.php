@extends('core.frontend.layouts.app')


@section('content')
<!-- price wrap -->
<div class="price-wrap font-dm position-relative light-blue-banner">
    <div class="maxw-1250 mx-auto">
        <div class="container py-100">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <!-- Heading -->
                    <h2 class="display6-size text-gray-900 fw-700 mb-lg-3 mb-3 mt-0 lh-5"
                        data-aos="fade-up" data-aos-duration="200">
                        Zero Cost to Start. Unlock potential as you grow
                    </h2>

                    <!-- Subtext -->
                    <p class="text-gray-700 fw-400 pe-lg-5"
                        data-aos="fade-up" data-aos-duration="300">
                        Our pricing is built to support every stage of your journey—from your first booking.
                    </p>

                    <!-- Highlight Box -->
                    <div class="d-flex flex-row mx-auto justify-content-center mt-4">
                        <div class="px-3 py-1 border border-gray-200 shadow-sm rounded-3 fs-13 fw-600 
                        text-uppercase text-white bg-info align-items-center gap-2 d-flex w-auto"
                            data-aos="zoom-in" data-aos-delay="0" data-aos-duration="400">
                            <!-- Star Icon -->
                            <svg viewBox="0 0 24 24" width="18" height="18" stroke="currentColor" stroke-width="2"
                                fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 
                                     18.18 21.02 12 17.77 5.82 21.02 
                                     7 14.14 2 9.27 8.91 8.26 12 2">
                                </polygon>
                            </svg>
                            Our customer feedback
                        </div>
                    </div>
                </div>
            </div>


            <!-- Pricing Cards -->
            <livewire:core.frontend.components.plans />
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