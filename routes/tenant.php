<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;

/*
|--------------------------------------------------------------------------
| Tenant Routes
|--------------------------------------------------------------------------
|
| Here you can register the tenant routes for your application.
| These routes are loaded by the TenantRouteServiceProvider.
|
| Feel free to customize them however you want. Good luck!
|
*/

Route::middleware([
    'web',
    'ensure_tenant_context',
    InitializeTenancyByDomain::class,
    PreventAccessFromCentralDomains::class,
])->group(function () {
    Route::get('/', function () {
        return 'This is your multi-tenant application. The id of the current tenant is ' . tenant('id');
    });

    // Guest routes for tenant login/registration
    Route::middleware('guest_tenant')->group(function () {});


    // Authenticated tenant routes
    Route::middleware('auth_tenant')->group(function () {});


    Route::middleware(['auth:web', 'auth_central_for_tenant_management'])->prefix('manage')->name('tenant.manage.')->group(function () {

        // setting
        // users


        Route::middleware('check_tenant_owner')->group(function () {
            // billling
        });

        Route::middleware('check_tenant_admin')->group(function () {
            // setting
        });
    });
});
