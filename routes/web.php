<?php

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

Route::get('/', function () {
    return view('dashboard', [
        'title' => 'Dashboard'
    ]);
});

Route::get('/bagian-perdata', function () {
    return view('perdata', [
        'title' => 'Bagian Perdata'
    ]);
});

Route::get('/bagian-pidana', function () {
    return view('pidana', [
        'title' => 'Bagian Pidana'
    ]);
});

Route::get('/bagian-hukum', function () {
    return view('hukum', [
        'title' => 'Bagian Hukum'
    ]);
});

Route::get('/bagian-umum', function () {
    return view('umum', [
        'title' => 'Bagian Umum dan Keuangan'
    ]);
});

Route::get('/posbakum', function () {
    return view('posbakum', [
        'title' => 'Posbakum'
    ]);
});
