<?php

use App\Http\Controllers\Admin\UserDataController;
use App\Http\Controllers\Authentication\EmailVerifyController;
use App\Http\Controllers\Authentication\LoginController;
use App\Http\Controllers\Authentication\RegisterController;
use App\Http\Controllers\Authentication\ResetPasswordController;
use App\Http\Controllers\User\AccountController;
use App\Http\Controllers\User\DashboardController as UserDashboardController;
use App\Http\Controllers\User\HukumController as UserHukumController;
use App\Http\Controllers\User\PerdataController as UserPerdataController;
use App\Http\Controllers\User\PidanaController as UserPidanaController;
use App\Http\Controllers\User\PosbakumController as UserPosbakumController;
use App\Http\Controllers\User\UmumController as UserUmumController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

// User

Route::get('/', [UserDashboardController::class, 'index']);

Route::get('/bagian-perdata', [UserPerdataController::class, 'index']);

Route::get('/bagian-pidana', [UserPidanaController::class, 'index']);

Route::get('/bagian-hukum', [UserHukumController::class, 'index']);

Route::get('/bagian-umum', [UserUmumController::class, 'index']);

Route::get('/posbakum', [UserPosbakumController::class, 'index']);

// User

//Register, Login, and Logout

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');

Route::post('/login', [LoginController::class, 'handle']);

Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth');

//Register, Login, and Logout

// Email Verify

Route::get('/email/verify', [EmailVerifyController::class, 'index'])->middleware('auth')->name('verification.notice');

Route::post('/email/verification-notification', [EmailVerifyController::class, 'resend'])->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('/email/verify/{id}/{hash}', [EmailVerifyController::class, 'handle'])->middleware(['auth', 'signed'])->name('verification.verify');

// Email Verify

// Forgot Password

Route::get('/forgot-password', [ResetPasswordController::class, 'index'])->middleware('guest')->name('password.request');

Route::post('/forgot-password', [ResetPasswordController::class, 'sending'])->middleware('guest')->name('password.email');

Route::get('/reset-password/{token}', [ResetPasswordController::class, 'handle'])->middleware('guest')->name('password.reset');

Route::post('/reset-password', [ResetPasswordController::class, 'update'])->middleware('guest')->name('password.update');

// Forgot Password

// Account Control

Route::get('/account', [AccountController::class, 'index'])->middleware('auth');

Route::put('/update-profil/{user}', [AccountController::class, 'update'])->middleware('auth')->name('update-profil');

Route::put('/update-password/{user}', [AccountController::class, 'update_password'])->middleware('auth')->name('update-pass');

Route::delete('/delete-profil/{user}', [AccountController::class, 'destroy'])->middleware('auth')->name('delete-profil');
// Account Control

// User-Admin (Perdata-Pidana-Hukum-Umum-Posbakum)

Route::put('/update-dashboard/{dashboard_id}', [UserDashboardController::class, 'update'])->middleware('auth');

Route::delete('/delete-carousel/{carousel_file}', [UserDashboardController::class, 'delete_carousel'])->middleware('auth');

Route::post('/upload-carousel', [UserDashboardController::class, 'upload_carousel'])->middleware('auth');

Route::delete('/delete-admin/{admin}', [UserDashboardController::class, 'delete_admin'])->middleware('auth');

Route::post('/upload-admin', [UserDashboardController::class, 'upload_admin'])->middleware('auth');

Route::put('/update-perdata/{perdata_id}', [UserPerdataController::class, 'update'])->middleware('auth');

Route::put('/update-pidana/{pidana_id}', [UserPidanaController::class, 'update'])->middleware('auth');

Route::put('/update-hukum/{hukum_id}', [UserHukumController::class, 'update'])->middleware('auth');

Route::put('/update-umum/{umum_id}', [UserUmumController::class, 'update'])->middleware('auth');

Route::put('/update-posbakum/{posbakum_id}', [UserPosbakumController::class, 'update'])->middleware('auth');

// User-Admin (Perdata-Pidana-Hukum-Umum-Posbakum)

// Chat
Route::get('unreadcount', function () {
    $count = auth()->user()->getChatCount();
    return response()->json(['count' => $count]);
})->name('unreadcount');
// Chat

// Clear Cache
Route::get('/clear-cache', function () {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});
// Clear Cache

// Symlink
Route::get('/symlink', function () {
    $exitCode = Artisan::call('storage:link');
    return 'DONE'; //Return anything
});
// Symlink

// Master Admin
Route::resource('user-table', UserDataController::class);
// Master Admin
