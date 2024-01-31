<?php

use App\Http\Controllers\Authentication\LoginController;
use App\Http\Controllers\Authentication\RegisterController;
use App\Http\Controllers\User\DashboardController as UserDashboardController;
use App\Http\Controllers\User\HukumController as UserHukumController;
use App\Http\Controllers\User\PerdataController as UserPerdataController;
use App\Http\Controllers\User\PidanaController as UserPidanaController;
use App\Http\Controllers\User\PosbakumController as UserPosbakumController;
use App\Http\Controllers\User\RoomChatController;
use App\Http\Controllers\User\UmumController as UserUmumController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;


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

Route::get('/', [UserDashboardController::class, 'index']);

Route::get('/room-chat', [RoomChatController::class, 'index'])->middleware('verified');

Route::get('/bagian-perdata', [UserPerdataController::class, 'index']);

Route::get('/bagian-pidana', [UserPidanaController::class, 'index']);

Route::get('/bagian-hukum', [UserHukumController::class, 'index']);

Route::get('/bagian-umum', [UserUmumController::class, 'index']);

Route::get('/posbakum', [UserPosbakumController::class, 'index']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');

Route::get('/logout', function () {
    auth()->logout();
    return redirect()->route('login');
})->middleware('auth');


Route::get('/email/verify', function () {
    return view('verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');
