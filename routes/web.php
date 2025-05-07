<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\BerandaSiswaController;
use App\Http\Controllers\DataSiswaController;
use App\Http\Controllers\DataBukuController;
use App\Http\Controllers\StatistikController;

Route::get('/', function () {
    return view('beranda');
});

Route::get('/beranda', [BerandaController::class, 'index'])->name('beranda');
Route::get('/berandasiswa', [BerandaSiswaController::class, 'index'])->name('berandasiswa');

Route::get('/datasiswa', [DataSiswaController::class, 'index'])->name('datasiswa');
Route::get('/databuku', [DataBukuController::class, 'index'])->name('databuku');
Route::get('/datapeminjaman', [DataPeminjamanController::class, 'index'])->name('datapeminjaman');
oute::get('/riwayataktivitas', [RiwayatAktivitasController::class, 'index'])->name('riwayataktivitas');
Route::get('/riwayatpeminjaman', [RiwayatPeminjamanController::class, 'index'])->name('riwayatpeminjaman');
Route::get('/statistik', [StatistikController::class, 'index'])->name('statistik');