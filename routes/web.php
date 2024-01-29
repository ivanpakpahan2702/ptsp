<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HukumController;
use App\Http\Controllers\PerdataController;
use App\Http\Controllers\PidanaController;
use App\Http\Controllers\PosbakumController;
use App\Http\Controllers\UmumController;
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

Route::get('/', [DashboardController::class, 'index']);

Route::get('/bagian-perdata', [PerdataController::class, 'index']);

Route::get('/bagian-pidana', [PidanaController::class, 'index']);

Route::get('/bagian-hukum', [HukumController::class, 'index']);

Route::get('/bagian-umum', [UmumController::class, 'index']);

Route::get('/posbakum', [PosbakumController::class, 'index']);
