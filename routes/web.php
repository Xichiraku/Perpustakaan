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