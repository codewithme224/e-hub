<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


// Auth Routes
Route::prefix('api/auth')->group(function () {
    Route::post('login', [AuthController::class, 'login'])->name('auth.login');
    Route::post('register', [AuthController::class, 'register'])->name('auth.register');
    Route::post('logout', [AuthController::class, 'logout'])->name('auth.logout');
    Route::get('auth-user', [AuthController::class, 'user'])->name('auth.user');
    Route::post('reset-password', [AuthController::class, 'resetPassword']);
    Route::post('update-password', [AuthController::class, 'updatePassword']);
    Route::post('update-profile', [AuthController::class, 'updateProfile']);
    Route::post('update-profile-picture', [AuthController::class, 'updateProfilePicture']);
    Route::post('update-profile-cover', [AuthController::class, 'updateProfileCover']);
    Route::post('update-profile-details', [AuthController::class, 'updateProfileDetails']);
    Route::post('update-profile-contacts', [AuthController::class, 'updateProfileContacts']);
    Route::post('update-profile-socials', [AuthController::class, 'updateProfileSocials']);
    Route::post('update-profile-password', [AuthController::class, 'updateProfilePassword']);
    Route::post('update-profile-email', [AuthController::class, 'updateProfileEmail']);
    Route::post('update-profile-phone', [AuthController::class, 'updateProfilePhone']);
});


Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->name('welcome');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/module', function () {
    return Inertia::render('Modules');
})->name('module');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
