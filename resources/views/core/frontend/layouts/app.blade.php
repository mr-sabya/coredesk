<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="images/logo/favicon.ico">
    <title>Exsit - Software, SaaS & Startup HTML5 Template</title>
    <meta name="description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="keywords" content="html, css, bootstrap, admin template, dashboard, saas, software, responsive">
    <meta name="author" content="Your Name or Company">
    <meta name="theme-color" content="#ffffff"><!-- Font -->
    <link rel="preload" href="{{ asset('assets/frontend/fonts/Sora-400.woff2') }}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{ asset('assets/frontend/fonts/Sora-500.woff2') }}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{ asset('assets/frontend/fonts/Sora-600.woff2') }}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{ asset('assets/frontend/css/main.css') }}" as="style"><!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/main.css') }}"><!-- Splide slider css -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/splideslider.css') }}">
    
    @livewireStyles
</head>

<body>
    
    <livewire:core.frontend.theme.preloader />

    <!-- main wrapper -->
    <div id="page">

        <!-- search wrap -->
        <div class="search-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex flex-row">
                        <input type="text" class="form-control form-control-lg h-100 border-0 shadow-none fs-22 ps-0"
                            placeholder="Search everythings...">
                        <button class="btn btn-lg text-gray-900 border-0" id="close-search" aria-label="search">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                <path
                                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- arrow top circle -->
        <div class="arrow-round">
            <div class="arrow-round-wrap primary"><svg class="arrow-circle svg-content text-white" width="100%"
                    height="100%" viewBox="-1 -1 102 102">
                    <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
                </svg>
                <div class="arrow-svg"><svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor"
                        stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                        class="css-i6dzq1 text-primary">
                        <polyline points="18 15 12 9 6 15"></polyline>
                    </svg></div>
            </div>
        </div>

        <!-- upper header -->
        <livewire:core.frontend.theme.top-header />

        <!-- header wrap -->
        <livewire:core.frontend.theme.header />
        <!-- header wrap -->

        @yield('content')

        <!-- footer wrap -->
        <livewire:core.frontend.theme.footer />

    </div>

    <!-- loader js -->
    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>
    @livewireScripts

</html>