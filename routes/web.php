<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminAuthController;
// User Route
Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// End User Route

Route::middleware('redirectAdmin')->prefix('admin')->name('admin.')->group(function(){
    Route::controller(AdminAuthController::class)->group(function() {
        Route::get('login', 'showLoginForm')->name('login');
        Route::post('login', 'login')->name('login.post');
        Route::post('logout', 'logout')->name('logout');
    });
});

// Admin route group
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function(){
    Route::controller(AdminController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard');
    });
});
// End Admin route group

require __DIR__.'/auth.php';
