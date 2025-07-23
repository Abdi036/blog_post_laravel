<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\blogController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blogs', [blogController::class, 'index'])->name('blogs.index');

Route::get('/blogs/create', [blogController::class,'create'])->name('blogs.create');

Route::get('/blogs/{id}', [blogController::class,'show'])->name('blogs.show');

Route::post('/blogs', [blogController::class,'store'])->name('blogs.store');

Route::delete('/blogs/{id}', [blogController::class,'destroy'])->name('blogs.destroy');

Route::patch('/blogs/{id}', [blogController::class,'update'])->name('blogs.update');
