<?php

use App\Http\Controllers\dashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


use App\Http\Controllers\DashboardUserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard/user', [DashboardUserController::class, 'index']);
Route::get('/dashboard/{nama}', [DashboardController::class, 'tampilkan']);

Route::view('/data-siswa', 'data_siswa');
Route::view('/daftar-user', 'daftar_user');

Route::view('/dashboard-siswa', 'dashboard_siswa');
Route::view('/koleksi', 'koleksi');

Route::view('/buku', 'daftar_buku');
Route::view('/peminjam', 'Data_peminjaman');
