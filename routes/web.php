<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cmsController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [cmsController::class, 'index']);   
Route::get('/about', [cmsController::class, 'index']);   
Route::get('/article', [cmsController::class, 'index']);   
Route::get('/footer', [cmsController::class, 'index']);   
Route::get('/hero', [cmsController::class, 'index']);   
Route::get('/higlight', [cmsController::class, 'index']);   
Route::get('/edit', [cmsController::class, 'index']);   
Route::get('/halaman', [cmsController::class, 'index']);   
Route::get('/halaman', [cmsController::class, 'index']);   
Route::get('/halaman', [cmsController::class, 'index']);   
Route::get('/halaman', [cmsController::class, 'index']);   
