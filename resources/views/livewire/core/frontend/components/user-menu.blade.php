<div class="">
    <button
        class="btn btn-sm btn-primary bg-gradient text-white fw-semibold rounded-pill px-3 py-1 d-flex align-items-center dropdown-toggle shadow-sm"
        type="button"
        id="profileDropdown"
        data-bs-toggle="dropdown"
        aria-expanded="false">
        <img
            src="{{ Auth::user()->avatar_url ?? asset('assets/frontend/images/default-avatar.png') }}"
            alt="User Avatar"
            class="rounded-circle me-2 border border-dark-subtle"
            width="26" height="26">
        <span class=" d-lg-inline fs-6">{{ Str::limit(Auth::user()->name, 12) }}</span>
    </button>

    <ul class="dropdown-menu dropdown-menu-end shadow border-0 rounded-3 mb-2 show-on-top position-absolute"
        aria-labelledby="profileDropdown">

        <li class="px-3 py-2">
            <div class="d-flex align-items-center">
                <img
                    src="{{ Auth::user()->avatar_url ?? asset('assets/frontend/images/default-avatar.png') }}"
                    alt="User Avatar"
                    class="rounded-circle me-2"
                    width="40" height="40">
                <div>
                    <h6 class="mb-0 fw-semibold">{{ Str::limit(Auth::user()->name, 18) }}</h6>
                    <small class="text-muted">{{ Auth::user()->email }}</small>
                </div>
            </div>
        </li>

        <li>
            <hr class="dropdown-divider my-2">
        </li>

        <li>
            <a class="dropdown-item d-flex align-items-center" href="{{ route('user.profile') }}" wire:navigate>
                <i class="bi bi-person-circle me-2 fs-5 text-primary"></i> My Profile
            </a>
        </li>
        <li>
            <a class="dropdown-item d-flex align-items-center" href="{{ route('user.profile') }}" wire:navigate>
                <i class="bi bi-speedometer2 me-2 fs-5 text-success"></i> Dashboard
            </a>
        </li>

        <li>
            <hr class="dropdown-divider my-2">
        </li>

        <li>

            <livewire:core.frontend.auth.logout />
        </li>
    </ul>
</div>