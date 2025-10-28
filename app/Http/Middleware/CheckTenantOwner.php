<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckTenantOwner
{
    public function handle(Request $request, Closure $next): Response
    {
        // This middleware assumes Auth::guard('web') is already checked by a prior middleware
        $user = Auth::guard('web')->user();
        $currentTenant = tenancy()->tenant; // Guaranteed by EnsureTenantContext

        // Ensure the central user is an 'owner' for the active tenant
        if (!$user || !$currentTenant || !$user->isOwnerOfTenant($currentTenant)) {
            abort(403, 'Unauthorized: You must be the owner of this company to perform this action.');
        }

        return $next($request);
    }
}
