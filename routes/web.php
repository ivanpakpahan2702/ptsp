<?php

use App\Http\Controllers\Authentication\LoginController;
use App\Http\Controllers\Authentication\RegisterController;
use App\Http\Controllers\User\DashboardController as UserDashboardController;
use App\Http\Controllers\User\HukumController as UserHukumController;
use App\Http\Controllers\User\PerdataController as UserPerdataController;
use App\Http\Controllers\User\PidanaController as UserPidanaController;
use App\Http\Controllers\User\PosbakumController as UserPosbakumController;
use App\Http\Controllers\User\RoomPerdataController;
use App\Http\Controllers\User\UmumController as UserUmumController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [UserDashboardController::class, 'index'])->name('home');


Route::get('/bagian-perdata', [UserPerdataController::class, 'index']);
Route::get('/room-perdata', [RoomPerdataController::class, 'index'])->middleware('verified');


Route::get('/bagian-pidana', [UserPidanaController::class, 'index']);


Route::get('/bagian-hukum', [UserHukumController::class, 'index']);


Route::get('/bagian-umum', [UserUmumController::class, 'index']);


Route::get('/posbakum', [UserPosbakumController::class, 'index']);

Route::get('/register', [RegisterController::class, 'index']);

Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
