<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\P10NilaiKelasController;
use App\Http\Controllers\P10NilaiMapelController;
use App\Http\Controllers\P10NilaiGuruController;
use App\Http\Controllers\P10NilaiSiswaController;
use App\Http\Controllers\P10NilaiGuruKelasController;
use App\Http\Controllers\P10NilaiGuruMapelController;
use App\Http\Controllers\P10NilaiNilaiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// CRUD Kelas
Route::resource('kelas', P10NilaiKelasController::class)->names('kelas');

// CRUD Mapel
Route::resource('mapel', P10NilaiMapelController::class)->names('mapel');

// CRUD Guru + foto
Route::resource('guru', P10NilaiGuruController::class)->names('guru');

// CRUD Siswa + foto
Route::resource('siswa', P10NilaiSiswaController::class)->names('siswa');

// Transaksi Guru Kelas
Route::resource('guru-kelas', P10NilaiGuruKelasController::class)->names('guru-kelas');

// Transaksi Guru Mapel
Route::resource('guru-mapel', P10NilaiGuruMapelController::class)->names('guru-mapel');

// Transaksi Nilai
Route::resource('nilai', P10NilaiNilaiController::class)->names('nilai');

Auth::routes();
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
