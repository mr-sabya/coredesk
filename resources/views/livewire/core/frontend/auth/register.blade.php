<div class="auth-wrapper position-relative">
    <div class="w-100 h-100 d-none d-lg-flex position-absolute end-0 bg-size-cover bg-repeat-no-repeat"
        style="background-position: center right; background-image: url(assets/frontend/images/auth-bg-2.webp);">
        <div class="bg-overlay-two position-absolute top-0 start-0 w-100 h-100"></div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 py-100 d-flex align-items-center">
                <div class="text-start w-100 bg-white rounded-3 position-relative z-5 p-lg-5 p-4">

                    <!-- Header -->
                    <div class="mb-0 mt-0">
                        <h1 class="fw-700 text-gray-900 mb-1 lh-5 display5-size">
                            Create a<br>new account
                        </h1>
                        <p class="text-gray-700 mb-0 fs-15 fw-500">
                            Enter your information to get started
                        </p>
                    </div>

                    <!-- Form -->
                    <form wire:submit.prevent="register"> <!-- Add wire:submit.prevent -->
                        <div class="row row g-3 mt-0">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <div class="input-group mb-3">
                                        <div class="form-floating">
                                            <input type="text" class="form-control @error('first_name') is-invalid @enderror"
                                                placeholder="First name" id="floatingInputGroup1" wire:model.defer="first_name">
                                            <label for="floatingInputGroup1" class="form-label">First name</label>
                                            @error('first_name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <div class="input-group mb-3">
                                        <div class="form-floating">
                                            <input type="text" class="form-control @error('last_name') is-invalid @enderror"
                                                placeholder="Last name" id="floatingInputGroup2" wire:model.defer="last_name">
                                            <label for="floatingInputGroup2" class="form-label">Last name</label>
                                            @error('last_name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                placeholder="name@example.com" id="floatingemail" wire:model.defer="email">
                            <label for="floatingemail" class="form-label">Email address</label>
                            @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="form-floating mb-3 position-relative">
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                placeholder="Password" id="floatingInputPass" wire:model.defer="password">
                            <label for="floatingInputPass" class="form-label">Password</label>
                            <div class="input-icon py-2 bg-transparent position-absolute end-1 top-2 p-2 cursor-pointer">
                                <i data-feather="eye" class="w-5 h-5 text-gray-500"></i>
                            </div>
                            @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="form-floating mb-2 position-relative">
                            <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
                                placeholder="Confirm Password" id="floatingInputPassconfirm" wire:model.defer="password_confirmation">
                            <label for="floatingInputPassconfirm" class="form-label">Confirm Password</label>
                            <div class="input-icon py-2 bg-transparent position-absolute end-1 top-2 p-2 cursor-pointer">
                                <i data-feather="eye" class="w-5 h-5 text-gray-500"></i>
                            </div>
                            @error('password_confirmation') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="form-check d-block">
                            <input type="checkbox" class="form-check-input position-relative @error('terms_accepted') is-invalid @enderror"
                                id="customCheck11" wire:model.defer="terms_accepted">
                            <label class="form-check-label text-gray-500 text-start lh-22 mb-0 fs-15 fw-500" for="customCheck11">
                                By clicking all term and condition apply out
                                <a href="#" class="link text-gray-900">Privacy policy</a> and
                                <a href="#" class="link text-gray-900">Term and Conditions.</a>
                            </label>
                            @error('terms_accepted') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="mt-3">
                            <button type="submit" class="btn btn-info bg-gradient btn-lg mb-2 w-100">Register</button>
                        </div>
                    </form>

                    <!-- Register Link -->
                    <div class="mt-3 text-center">
                        <span class="fw-500 fs-16">Already have an account.</span>
                        <a class="text-primary fw-500" href="{{ route('login') }}" wire:navigate>Login</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>