<?php

use App\Http\Controllers\Central\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Central\Admin\TenantManagementController;
use App\Http\Controllers\Central\Admin\UserManagementController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Central Admin Routes
|--------------------------------------------------------------------------
| These routes are for Super Administrators to manage the entire platform.
| They are independent from any tenant context and require the 'is_super_admin' middleware.
*/


Route::get('/login', [App\Http\Controllers\Core\Backend\AuthController::class, 'showLoginForm'])->name('login');

Route::middleware(['is_super_admin'])->group(function () {
    Route::get('/', [App\Http\Controllers\Core\Backend\HomeController::class, 'index'])->name('bashboard');
    
    Route::get('/users', function () {
        return view('core.backend.users.index');
    })->name('user.index');
    
    // Add other super-admin specific features here
    // tenant
    Route::get('/tenant', [App\Http\Controllers\Core\Backend\TenantController::class, 'index'])->name('tenant.index');
    Route::get('/tenant/create', [App\Http\Controllers\Core\Backend\TenantController::class, 'create'])->name('tenant.create');
    
    
    // plans
    Route::get('/plans', [App\Http\Controllers\Core\Backend\PlanController::class, 'index'])->name('plan.index');
    Route::get('/plans/create', [App\Http\Controllers\Core\Backend\PlanController::class, 'create'])->name('plan.create');
    Route::get('/plans/{id}/edit', [App\Http\Controllers\Core\Backend\PlanController::class, 'edit'])->name('plan.edit');
});
