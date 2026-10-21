<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelangganController;

Route::get('/', function () {
    return view('welcome');
});

route::get ('/home',[HomeController::class,'index']);

route::get ('dashboard',[DashboardController::class,'index'])->name('dashboard');

Route::resource('pelanggan', PelangganController::class);
