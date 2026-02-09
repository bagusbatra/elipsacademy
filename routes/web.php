<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengunjungController;

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

// PENGUNJUNG
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Halaman Program
Route::get('/program', [PengunjungController::class, 'HalamanProgram'])
    ->name('program');

Route::get('/daftarkursus', [PengunjungController::class, 'HalamanDaftarKursus'])
    ->name('daftarkursus');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/kursus', function () {
    return view('kursus');
})->name('kursus');

Route::get('/artikel', function () {
    return view('artikel');
})->name('artikel');

Route::get('/portofolio', function () {
    return view('portofolio');
})->name('portofolio');





























// ADMIN


// SISWA


// TENTOR

