<?php

use App\Http\Controllers\Authentication\EmailVerifyController;
use App\Http\Controllers\Authentication\LoginController;
use App\Http\Controllers\Authentication\RegisterController;
use App\Http\Controllers\User\DashboardController as UserDashboardController;
use App\Http\Controllers\User\HukumController as UserHukumController;
use App\Http\Controllers\User\PerdataController as UserPerdataController;
use App\Http\Controllers\User\PidanaController as UserPidanaController;
use App\Http\Controllers\User\PosbakumController as UserPosbakumController;
use App\Http\Controllers\User\RoomChatController;
use App\Http\Controllers\User\UmumController as UserUmumController;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

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

Route::get('/room-chat', [RoomChatController::class, 'index'])->middleware(['auth', 'verified'])->name('user-room-chat');

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

Route::get('/email/verify', [EmailVerifyController::class, 'index'])->middleware('auth')->middleware('auth')->name('verification.notice');

Route::post('/email/verification-notification', [EmailVerifyController::class, 'resend'])->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('/email/verify/{id}/{hash}', [EmailVerifyController::class, 'handle'])->middleware('auth')->middleware('auth')->middleware(['auth', 'signed'])->name('verification.verify');

// Email Verify

// Forgot Password
Route::get('/forgot-password', function () {
    return view('authentication.forgot-password', ['title' => 'Lupa Password']);
})->middleware('guest')->name('password.request');

Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
    ? back()->with(['status' => __($status)])
    : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');

Route::get('/reset-password/{token}', function (string $token) {
    return view('authentication.reset-password', ['token' => $token, 'email' => request()->email, 'title' => 'Setel Ulang Password']);
})->middleware('guest')->name('password.reset');

Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:6',
    ]);

    $status = Password::reset(
        $request->only('email', 'password', 'token'),
        function (User $user, string $password) {
            $user->forceFill([
                'password' => Hash::make($password),
            ])->setRememberToken(Str::random(60));

            $user->save();

            event(new PasswordReset($user));
        }
    );

    return $status === Password::PASSWORD_RESET
    ? redirect()->route('login')->with('status', __($status))
    : back()->withErrors(['email' => [__($status)]]);
})->middleware('guest')->name('password.update');
// Forgot Password
