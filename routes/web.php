<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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


Route::prefix('/admin')->controller(AdminController::class)->group(function(){
    Route::get('/','index')->name("AdminHomePage");
});

Route::controller(HomeController::class)->group(function(){
    Route::get('/','index')->name("HomePage");
});