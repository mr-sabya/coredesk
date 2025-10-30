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
                    <div class="mb-3 mt-0">
                        <h1 class="fw-700 text-gray-900 mb-1 display5-size lh-5">
                            Login into<br>your account
                        </h1>
                        <p class="text-gray-700 mb-0 fs-15 fw-500">
                            Enter your information to get started
                        </p>
                    </div>

                    <!-- Form -->
                    <form wire:submit.prevent="authenticate">
                        <!-- Email -->
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="name@example.com" id="floatingemail" wire:model.blur="email" autocomplete="email" autofocus>
                            <label for="floatingemail" class="form-label">Email address</label>
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="form-floating mb-3 position-relative">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" id="floatingpassword" wire:model.blur="password" autocomplete="current-password">
                            <label for="floatingpassword" class="form-label">Password</label>
                            <div class="position-absolute translate-middle-y top-50 me-3 end-0">
                                <i data-feather="eye" class="w-5 h-5 text-gray-500"></i>
                            </div>
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <!-- Remember Me -->
                        <div class="form-check d-block">
                            <input type="checkbox" class="form-check-input position-relative" id="remember" wire:model="remember">
                            <label class="form-check-label text-gray-500 text-start lh-22 mb-0 fs-15 fw-500" for="remember">
                                Remember me
                            </label>
                        </div>

                        <!-- Submit Button -->
                        <div class="mt-3">
                            <button type="submit" class="btn btn-info bg-gradient btn-lg mb-2 w-100" wire:loading.attr="disabled">
                                <span wire:loading.remove wire:target="authenticate">Login</span>
                                <span wire:loading wire:target="authenticate">Logging in...</span>
                            </button>
                        </div>
                    </form>

                    <!-- Register Link -->
                    <div class="mt-3 text-center">
                        <span class="fw-500 fs-16">Don't have an account yet?</span>
                        <a class="text-primary fw-500" href="{{ route('register')}}" wire:navigate>Register</a>
                    </div>

                    <!-- Social Login -->
                    <div class="d-flex justify-content-center gap-3 mt-4">
                        <button class="btn bg-gray-100 border border-gray-200 btn-lg btn-icon rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                class="bi bi-facebook text-primary" viewBox="0 0 16 16">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"></path>
                            </svg>
                        </button>

                        <button class="btn bg-gray-100 border border-gray-200 btn-lg btn-icon rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                class="bi bi-google text-danger" viewBox="0 0 16 16">
                                <path d="M15.545 6.558a9.4 9.4 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.7 7.7 0 0 1 5.352 2.082l-2.284 2.284A4.35 4.35 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.8 4.8 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.7 3.7 0 0 0 1.599-2.431H8v-3.08z"></path>
                            </svg>
                        </button>

                        <button class="btn bg-gray-100 border border-gray-200 btn-lg btn-icon rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                class="bi bi-gitlab text-gray-800" viewBox="0 0 16 16">
                                <path d="m15.734 6.1-.022-.058L13.534.358a.57.57 0 0 0-.563-.356.6.6 0 0 0-.328.122.6.6 0 0 0-.193.294l-1.47 4.499H5.025l-1.47-4.5A.572.572 0 0 0 2.47.358L.289 6.04l-.022.057A4.044 4.044 0 0 0 1.61 10.77l.007.006.02.014 3.318 2.485 1.64 1.242 1 .755a.67.67 0 0 0 .814 0l1-.755 1.64-1.242 3.338-2.5.009-.007a4.05 4.05 0 0 0 1.34-4.668Z"></path>
                            </svg>
                        </button>
                    </div>


                </div>
            </div>
        </div>
    </div>

</div>