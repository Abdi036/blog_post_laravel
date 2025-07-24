<?php

use App\Http\Controllers\authController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\blogController;

Route::get('/', function () {
    return view('welcome');
});

// Authentication
Route::post('/signout', [authController::class, 'signout'])->name('signout');
Route::middleware("guest")->controller(authController::class)->group(function () {
    Route::get("/signup",[authController::class,"showSignup"])->name("show.signup");
    Route::get('/login', [authController::class, 'showlogin'])->name('show.login');

    Route::post("/signup",[authController::class,"signup"])->name("signup");
    Route::post('/login', [authController::class, 'login'])->name('login');
});

Route::middleware('auth')->controller(blogController::class)->group(function(){
    Route::get('/blogs', 'index')->name('blogs.index');
    Route::get('/blogs/create', 'create')->name('blogs.create');
    Route::get('/blogs/{id}', 'show')->name('blogs.show');
    Route::post('/blogs', 'store')->name('blogs.store');
    Route::delete('/blogs/{id}', 'destroy')->name('blogs.destroy');
    Route::patch('/blogs/{id}', 'update')->name('blogs.update');
});
