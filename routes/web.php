<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\MyController;

Route::get('/home', function () {
    return Inertia::render('Home');
});

Route::get('/content', function () {
    return Inertia::render('Content');
});

Route::get('/about', function () {
    return Inertia::render('About');
});

Route::get('/contactus', function () {
    return Inertia::render('ContactUs');
});

Route::get('/services', function () {
    return Inertia::render('Services');
});

Route::get('/page1', [MyController::class, 'page1']);
Route::post('/page2', [MyController::class, 'page2']);
 
