<?php

use App\Http\Middleware\AuthenticateCentralUserForTenantManagement;
use App\Http\Middleware\CheckTenantAdmin;
use App\Http\Middleware\CheckTenantOwner;
use App\Http\Middleware\EnsureTenantContext;
use App\Http\Middleware\IsSuperAdmin;
use App\Http\Middleware\RedirectTenantGuests;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
        then: function () {
            // CENTRAL Admin Routes
            Route::middleware('web')
                ->prefix('admin')
                ->name('admin.')
                ->group(base_path('routes/admin.php'));
        },
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
        $middleware->web(append: [
            // Example of adding global web middleware, if needed
        ]);

        $middleware->alias([
            'is_super_admin' => IsSuperAdmin::class,
            'ensure_tenant_context' => EnsureTenantContext::class,
            'auth_central_for_tenant_management' => AuthenticateCentralUserForTenantManagement::class,
            'check_tenant_owner' => CheckTenantOwner::class,
            'check_tenant_admin' => CheckTenantAdmin::class,

            // For tenant-specific user authentication (using 'tenant' guard)
            // 'auth' for tenant guard
            'auth_tenant' => \Illuminate\Auth\Middleware\Authenticate::class . ':tenant',
            // 'guest' for tenant guard
            'guest_tenant' => RedirectTenantGuests::class,
        ]);

        // --- GUEST REDIRECTION CONFIGURATION for CENTRAL APP ---
        // This only needs to handle central guest redirection (for 'web' guard).
        // The tenant guest redirection is now handled by RedirectTenantGuests middleware.
        $middleware->redirectGuestsTo(function (Request $request) {
            // If it's a central request AND the 'web' user is not authenticated, redirect to central login.
            // We determine 'is central' by checking if no tenant context is active.
            if (!tenancy()->tenant && !Auth::guard('web')->check()) {
                return route('login');
            }

            // For all other cases (e.g., tenant request, or web user is authenticated),
            // let subsequent middleware/route logic handle it.
            return null;
        });
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
