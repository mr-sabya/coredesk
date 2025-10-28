<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Stancl\Tenancy\Resolvers\AppUrlTenantResolver; // Not directly used here, but good for context awareness.

class EnsureTenantContext
{
    public function handle(Request $request, Closure $next): Response
    {
        // If no tenant is resolved by stancl/tenancy, something is wrong
        // or the request hit a tenant domain that doesn't exist.
        if (!tenancy()->tenant) {
            // Redirect to a central route or a dedicated error page.
            // It's crucial not to redirect to a tenant-specific route here.
            return redirect()->route('dashboard')->with('error', 'No active company context. Please select a company.');
        }

        return $next($request);
    }
}
