<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// admin dashboard
Route::prefix('admin')->group(function () {
    Route::get('/', [App\Http\Controllers\Backend\HomeController::class, 'index'])->name('admin.bashboard');

    Route::get('/users', function () {
        return view('backend.users.index');
    })->name('user.index');
});
