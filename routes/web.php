<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;


Route::get('/', function () {
    return view('welcome');
});

route::get ('/home',[HomeController::class,'index']);

route::get ('dashboard',[DashboardController::class,'index'])->name('dashboard');
