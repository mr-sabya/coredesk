<form wire:submit.prevent="login">

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email" wire:model.defer="email">
        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <div class="mb-3">
        <div class="float-end">
            <a href="auth-pass-reset-basic.html" class="text-muted">Forgot password?</a>
        </div>
        <label class="form-label" for="password-input">Password</label>
        <div class="position-relative auth-pass-inputgroup mb-3">
            <input type="password" class="form-control pe-5 password-input" placeholder="Enter password" id="password-input" wire:model.defer="password">
            <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon material-shadow-none" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
        </div>
        @error('password') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="auth-remember-check" wire:model.defer="remember">
        <label class="form-check-label" for="auth-remember-check">Remember me</label>
    </div>

    @if (session()->has('error'))
    <div class="alert alert-danger mt-3">
        {{ session('error') }}
    </div>
    @endif

    <div class="mt-4">
        <button class="btn btn-success w-100" type="submit">Sign In</button>
    </div>
</form>