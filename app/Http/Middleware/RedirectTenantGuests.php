<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectTenantGuests
{
    /**
     * Handle an incoming request for unauthenticated tenant users.
     * If the tenant user is already authenticated, redirect them away from guest routes.
     * If no tenant context is active, this middleware should not even be hit.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // First, ensure a tenant context is active.
        // This is primarily a double-check, as `EnsureTenantContext` should run first.
        if (!tenancy()->tenant) {
            // This scenario indicates a misconfiguration or direct access without tenant context.
            // Redirect to a central route or a general error.
            return redirect()->route('dashboard')->with('error', 'No active company context. Cannot access tenant guest routes.');
        }

        // Check if a tenant user is authenticated.
        if (Auth::guard('tenant')->check()) {
            // If they are, redirect them to their tenant dashboard, as they shouldn't be on guest pages (login/register).
            return redirect()->intended(route('tenant.dashboard', [], false)); // <-- Change here
        }

        // If not authenticated, proceed to the guest route (e.g., login form).
        return $next($request);
    }
}
