<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blogs', function () {
  $datas = [
    ["title" => "First Blog", "content" => "This is the content of the first blog.", "author" => "John Doe", "id" => "1"],
    ["title" => "Second Blog", "content" => "This is the content of the second blog.", "author" => "Jane Smith", "id" => "2"],
  ];

  return view('blogs.index', ["data" => $datas]);
});

Route::get('/blogs/create', function () {
  return view('blogs.create');
});

Route::get('/blogs/{id}', function ($id) {
  return view('blogs.blog', ['id' => $id]);
});