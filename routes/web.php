<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KuotaController;
use App\Http\Controllers\pulsaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PenukaranController;

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
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/penukaran', function () {
    return view('penukaran');
})->name('penukaran');
Route::get('/gantinomor', function () {
    return view('gantinomor');
});
Route::get('/kuota', function () {
    return view('kuota');
});
Route::get('/pulsa', function () {
    return view('pulsa');
});

Route::put('/kuota', [KuotaController::class, 'store'])->name('kuota.store');
Route::put('/pulsa', [PulsaController::class, 'store'])->name('pulsa.store');