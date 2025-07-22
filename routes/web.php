<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\blogController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blogs', [blogController::class, 'index']);

Route::get('/blogs/create', function () {
  return view('blogs.create');
});

Route::get('/blogs/{id}', function ($id) {
  return view('blogs.blog', ['id' => $id]);
});