<header class="header-wrapper w-100 z-10 py-lg-0 py-1">
    <nav class="navbar navbar-one navbar-expand-lg border-0 py-0">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-between w-100">

                <!-- Logo -->
                <a class="navbar-brand light-logo logo position-relative" href="{{ route('home') }}" wire:navigate>
                    <img src="{{ url('assets/frontend/images/logo/logo.png') }}" alt="logo" class="logo_light" width="156" height="50" loading="eager">
                    <img src="{{ url('assets/frontend/images/logo/logo-white.png') }}" alt="logo" class="logo_dark" width="156" height="50" loading="eager">
                </a>

                <div class="menu-overlay"></div>

                <!-- Menu Block -->
                <div class="menu-block p-lg-0 p-3">
                    <!-- Menu Head -->
                    <div class="menu-head align-items-center justify-content-between">
                        <a href="#" class="logo-sub">
                            <img src="{{ url('assets/frontend/images/logo/logo.png') }}" alt="logo" loading="eager">
                        </a>
                        <div class="menu-close">
                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </div>
                    </div>

                    <!-- Navbar Menu -->
                    <ul class="navbar-nav font-sora gap-3 text-white fw-600" id="navbar-main">

                        <!-- Demo Menu Item -->
                        <li class="nav-item">
                            <a class="nav-link text-gray-900" href="{{ route('home') }}" wire:navigate>
                                Home
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-gray-900" href="{{ route('pages.pricing') }}" wire:navigate>
                                Pricing
                            </a>
                        </li>



                        <!-- Other Menu Items -->
                        <li class="nav-item">
                            <a class="nav-link text-gray-900" href="{{ route('pages.service')}}" wire:navigate>
                                Service
                            </a>
                        </li>
                        <li class="nav-item"><a class="nav-link text-gray-900" href="about.html">About</a></li>
                        <li class="nav-item"><a class="nav-link text-gray-900" href="contact.html">Contact</a></li>

                    </ul>

                    <!-- Menu Bottom -->
                    <div class="menu-bottom">
                        <a href="register.html" class="btn bg-deepblue btn-md rounded-2 px-4">Register</a>
                    </div>
                </div>

                <!-- Header Actions -->
                <div class="d-flex align-items-center gap-3 font-sora">
                    <!-- Search Button -->
                    <button aria-label="search" class="btn btn-outline text-gray-700 p-0" id="search-btn">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="text-gray-900">
                            <circle cx="11" cy="11" r="8"></circle>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                        </svg>
                    </button>

                    <!-- Dark/Light Mode -->
                    <button aria-label="dark" class="btn btn-outline dark-btn rounded-pill" id="dark-switch">
                        <div class="align-items-center gap-2 dark-mode">
                            <svg viewBox="0 0 24 24" width="22" height="22" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                                <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                            </svg>
                            <span>Dark</span>
                        </div>
                        <div class="align-items-center gap-2 light-mode">
                            <svg viewBox="0 0 24 24" width="22" height="22" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                                <circle cx="12" cy="12" r="5"></circle>
                                <line x1="12" y1="1" x2="12" y2="3"></line>
                                <line x1="12" y1="21" x2="12" y2="23"></line>
                                <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                                <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                                <line x1="1" y1="12" x2="3" y2="12"></line>
                                <line x1="21" y1="12" x2="23" y2="12"></line>
                                <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                                <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                            </svg>
                            <span>Light</span>
                        </div>
                    </button>

                    <!-- Register Button (Desktop) -->
                    <a href="{{ route('register') }}" wire:navigate class="btn bg-deepblue text-white fw-500 btn-md rounded-2 px-4 ms-2 d-none d-md-flex">Register</a>

                    <!-- Mobile Menu Trigger -->
                    <button aria-label="menu" class="mobile-menu-trigger btn btn-outline px-0 text-gray-700 d-flex d-lg-none">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="text-gray-900">
                            <line x1="3" y1="12" x2="21" y2="12"></line>
                            <line x1="3" y1="6" x2="21" y2="6"></line>
                            <line x1="3" y1="18" x2="21" y2="18"></line>
                        </svg>
                    </button>
                </div>

            </div>
        </div>
    </nav>
</header>