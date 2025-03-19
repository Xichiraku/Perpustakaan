<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardUserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard/user', [DashboardUserController::class, 'index']);
