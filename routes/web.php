<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landingpage');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/daftar', function () {
    return view('daftar');
});

Route::get('/informasidata', function () {
    return view('informasidata');
});

Route::get('/gantinomor', function () {
    return view('gantinomor');
});

Route::get('/penukaran', function () {
    return view('penukaran');
});

Route::get('/kuota', function () {
    return view('kuota');
});



Route::get('/pulsa', function () {
    return view('pulsa');
});