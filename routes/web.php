<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentController;

// Home route
Route::get('/', function () {
    return view('Preview.home');
})->name('home');

// Other page routes
Route::get('/about', function () {
    $about = \App\Models\AboutContent::first();
    return view('Preview.about', ['about' => $about]);
})->name('about');

Route::get('/education', function () {
    return view('Preview.education');
})->name('education');

Route::get('/contact', function () {
    return view('Preview.contact');
})->name('contact');

// Article routes
Route::get('/article/{id}', function ($id) {
    return view('Preview.article');
})->name('article');
// Market routes
Route::get('/market', function () {
    return view('Preview.market');
})->name('market');

// Content Edit Routes
Route::get('/edit/about', [ContentController::class, 'editAbout'])->name('content.editAbout');
Route::put('/edit/about', [ContentController::class, 'updateAbout'])->name('content.updateAbout');

Route::get('/edit/footer', [ContentController::class, 'editFooter'])->name('content.editFooter');
Route::put('/edit/footer', [ContentController::class, 'updateFooter'])->name('content.updateFooter');


