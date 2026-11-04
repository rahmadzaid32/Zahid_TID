<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\Portofolio1202Controller;
use App\Http\Controllers\CvController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

route::get ('/home',[HomeController::class,'index']);

route::get ('dashboard',[DashboardController::class,'index'])->name('dashboard');

Route::resource('pelanggan', PelangganController::class);

Route::resource('portofolio', Portofolio1202Controller::class);

Route::resource('cv', CvController::class);

Route::resource('user', UserController::class);
