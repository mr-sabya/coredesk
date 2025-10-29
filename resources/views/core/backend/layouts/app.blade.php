<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">

<head>

    <meta charset="utf-8" />
    <title>Dashboard | Velzon - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/backend/images/favicon.ico') }}">

    <!-- jsvectormap css -->
    <link href="{{ asset('assets/backend/libs/jsvectormap/jsvectormap.min.css') }}" rel="stylesheet" type="text/css" />

    <!--Swiper slider css-->
    <link href="{{ asset('assets/backend/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="{{ asset('assets/backend/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/backend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/backend/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- toaster -->
    <link href="{{ asset('assets/backend/libs/toastify/toastify.css') }}" rel="stylesheet" type="text/css">
    <!-- App Css-->
    <link href="{{ asset('assets/backend/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('assets/backend/css/custom.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/backend/css/custom.css') }}" rel="stylesheet" type="text/css" />
    @livewireStyles
</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <livewire:core.backend.theme.header />

        <!-- removeNotificationModal -->
        <div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="NotificationModalbtn-close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mt-2 text-center">
                            <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                            <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                <h4>Are you sure ?</h4>
                                <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                            </div>
                        </div>
                        <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                            <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete It!</button>
                        </div>
                    </div>

                </div><!-- /.modal-content -->
            </div><!-- /.modal -->
        </div><!-- /.modal-dialog -->

        <!-- ========== App Menu ========== -->
        <livewire:core.backend.theme.app-menu />

        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">
                    @yield('content')


                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <livewire:core.backend.theme.footer />
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>


    <!-- JAVASCRIPT -->
    <script data-navigate-once src="{{ asset('assets/backend/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script data-navigate-once src="{{ asset('assets/backend/libs/simplebar/simplebar.min.js') }}"></script>
    <script data-navigate-once src="{{ asset('assets/backend/libs/node-waves/waves.min.js') }}"></script>
    <script data-navigate-once src="{{ asset('assets/backend/libs/feather-icons/feather.min.js') }}"></script>
    <script data-navigate-once src="{{ asset('assets/backend/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
    <script data-navigate-once src="{{ asset('assets/backend/js/plugins.js') }}"></script>

    <!-- apexcharts -->
    <script data-navigate-once src="{{ asset('assets/backend/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- Vector map-->
    <script data-navigate-once src="{{ asset('assets/backend/libs/jsvectormap/jsvectormap.min.js') }}"></script>
    <script data-navigate-once src="{{ asset('assets/backend/libs/jsvectormap/maps/world-merc.js') }}"></script>

    <!--Swiper slider js-->
    <script data-navigate-once src="{{ asset('assets/backend/libs/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Dashboard init -->
    <script data-navigate-once src="{{ asset('assets/backend/js/pages/dashboard-ecommerce.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('assets/backend/js/app.js') }}"></script>

    @livewireScripts

    <script>
        // Global listener for toast events from Livewire
        window.addEventListener('show-toast', event => {
            Toastify({
                text: event.detail[0].message,
                duration: 3000,
                close: true,
                gravity: "top", // top or bottom
                position: "right", // left, center or right
                style: {
                    background: event.detail[0].type === 'success' ? "#4CAF50" : event.detail[0].type === 'error' ? "#F44336" : "#333"
                },
            }).showToast();
        });
    </script>
</body>



</html>