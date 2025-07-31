<?php

use App\Http\Controllers\Auth\PermissionController;
use App\Http\Controllers\Auth\RoleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pages/about-us', [HomeController::class, 'about'])->name('about-us');
Route::get('/pages/package', [HomeController::class, 'package'])->name('package');
Route::get('/pages/package-details', [HomeController::class, 'packageDetails'])->name('package-details');
Route::get('/pages/contact-us', [HomeController::class, 'contact'])->name('contact-us');
Route::get('/pages/booking-now', [HomeController::class, 'bookingNow'])->name('booking-now');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionController::class);
});

require __DIR__.'/auth.php';
