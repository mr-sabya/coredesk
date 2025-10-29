<?php

use Illuminate\Support\Facades\Route;


foreach (config('tenancy.central_domains') as $domain) {
    Route::domain($domain)->group(function () {
        Route::get('/', [\App\Http\Controllers\Core\Frontend\HomeController::class, 'index'])->name('home');

        // service
        Route::get('/service', [\App\Http\Controllers\Core\Frontend\PageController::class, 'servicePage'])->name('pages.service');

        // pricing
        Route::get('/pricing', [\App\Http\Controllers\Core\Frontend\PageController::class, 'pricingPage'])->name('pages.pricing');


        Route::get('/register', [\App\Http\Controllers\Core\Frontend\AuthController::class, 'showRegisterForm'])->name('register');

        Route::get('/login', [\App\Http\Controllers\Core\Frontend\AuthController::class, 'showLoginForm'])->name('login');
    });
}
