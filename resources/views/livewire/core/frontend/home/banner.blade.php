<div class="banner-wrap bg-size-cover font-sora analytics-banner pb-3">
    <div class="container h-100 position-relative">
        <div class="row h-100 justify-content-center">
            <div class="col-lg-10 text-center py-lg-5 py-4 my-4">
                @if($bannerData) {{-- Check if banner data exists --}}
                <div>
                    <span class="d-inline-block py-1 ps-1 pe-3 rounded-pill border border-gray-200 bg-white fs-14 lh-26 d-lg-inline-block text-deepcyan text-dark-white fw-500 shadow-sm"
                        data-aos="fade-up" data-aos-duration="200">
                        @if($bannerData->news_tag)
                        <span class="d-inline-block py-0 px-3 rounded-pill lh-34 fs-13 bg-deepblue text-white fw-400 me-2">{{ $bannerData->news_tag }}</span>
                        @endif
                        {{ $bannerData->news_text }}
                    </span>
                </div>
                <h1 class="text-deepblue fw-300 display6-size pt-4">{{ $bannerData->title }}</h1>
                <p class="fw-500 text-gray-800 lh-28 mt-3 mb-3 text-center text-dark-gray">{{ $bannerData->description }}</p>
                @else
                {{-- Fallback content if no banner data is found --}}
                <p>No banner content configured.</p>
                @endif
                <div class="row justify-content-center">
                    <div class="col-lg-5 pt-2">
                        <div class="d-flex flex-md-row flex-column gap-3 mt-2 mb-3"><input type="text"
                                class="form-control form-control-lg" placeholder="Enter email address."> <button
                                class="btn btn-lg bg-deepblue text-gray-100 btn-hover-bg-darken-dark-deepblue border-0"><span>Subscribe</span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center">
                @if($bannerData && $bannerData->image)
                {{-- Assuming images are stored in public/storage --}}
                <img src="{{ asset('storage/' . $bannerData->image) }}" alt="{{ $bannerData->title }}" class="rounded-4 shadow-sm overflow-hidden img-fluid">
                @else
                {{-- Fallback image if no specific banner image is set --}}
                <img src="{{ url('assets/frontend/images/home-9-admin.webp') }}" alt="admin" class="rounded-4 shadow-sm overflow-hidden img-fluid">
                @endif
            </div>
        </div>
    </div>
</div>