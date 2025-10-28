<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

/**
 * Ensures a central user (Auth::guard('web')) is logged in
 * AND has access to manage the currently active tenant.
 * This middleware is for central users interacting with tenant-specific management routes.
 */
class AuthenticateCentralUserForTenantManagement
{
    public function handle(Request $request, Closure $next): Response
    {
        // 1. Ensure a central user is logged in
        if (!Auth::guard('web')->check()) {
            return redirect()->route('login'); // Redirect to central login
        }

        $user = Auth::guard('web')->user();
        $currentTenant = tenancy()->tenant; // tenancy()->tenant is guaranteed to exist by EnsureTenantContext

        // 2. Ensure the central user has an association with this specific tenant
        if (!$user->tenants->contains($currentTenant)) {
            return redirect()->route('dashboard')->with('error', 'You do not have permission to manage this company.');
        }

        return $next($request);
    }
}
