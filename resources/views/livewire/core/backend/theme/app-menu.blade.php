<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ url('assets/backend/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ url('assets/backend/images/logo-dark.png') }}" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ url('assets/backend/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ url('assets/backend/images/logo-light.png') }}" alt="" height="17">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>


    <div id="scrollbar">
        <div class="container-fluid">


            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('admin.bashboard') }}" wire:navigate>
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Dashboards</span>
                    </a>
                </li> <!-- end Dashboard Menu -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('admin.user.index') }}" wire:navigate>
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-users">Users</span>
                    </a>
                </li> <!-- end Dashboard Menu -->

                <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-pages">SaaS</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link {{ Route::is('admin.tenant.*') ? 'collapsed active' : '' }}" href="#tenantManagement" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps">
                        <i class="ri-apps-2-line"></i> <span data-key="t-tenant">Tenant</span>
                    </a>
                    <div class="collapse menu-dropdown {{ Route::is('admin.tenant.*') ? 'show' : '' }}" id="tenantManagement">
                        <ul class="nav nav-sm flex-column">

                            <li class="nav-item">
                                <a href="{{ route('admin.tenant.index') }}" wire:navigate class="nav-link {{ Route::is('admin.tenant.index') ? 'active' : '' }}">
                                    <span data-key="t-tenant"> Tenant </span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="apps-file-manager.html" class="nav-link">
                                    <span data-key="t-domains"> Domains </span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link {{ Route::is('admin.plan.*') ? 'collapsed active' : '' }}" href="#planManagement" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps">
                        <i class="ri-apps-2-line"></i> <span data-key="t-Plan">Plan</span>
                    </a>
                    <div class="collapse menu-dropdown {{ Route::is('admin.plan.*') ? 'show' : '' }}" id="planManagement">
                        <ul class="nav nav-sm flex-column">

                            <li class="nav-item">
                                <a href="{{ route('admin.plan.index') }}" wire:navigate class="nav-link {{ Route::is('admin.plan.index') ? 'active' : '' }}">
                                    <span data-key="t-plan"> Plan </span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="apps-file-manager.html" class="nav-link">
                                    <span data-key="t-subscriptions"> Subscriptions</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>



            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>