<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DataSiswaController;
use App\Http\Controllers\DataBukuController;

Route::get('/', function () {
    return view('beranda');
});

Route::get('/beranda', [BerandaController::class, 'index'])->name('beranda');
Route::get('/datasiswa', [DataSiswaController::class, 'index'])->name('datasiswa');
Route::get('/databuku', [DataBukuController::class, 'index'])->name('databuku');

