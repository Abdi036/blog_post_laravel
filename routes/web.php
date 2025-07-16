<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/blogs', function () {
    $datas = [
        [
            "id"=> "1",
            'title' => 'First Blog',
            'content' => 'This is the content of the first blog.',
            'author' => 'John Doe',
        ],
        [
            "id"=> "2",
            'title' => 'Second Blog',
            'content' => 'This is the content of the second blog.',
            'author' => 'Jane Smith',
        ],
    ];
    return view('blogs.index', ["data" => $datas]);
});
Route::get('/blogs/{id}', function ($id) {
    $datas = [
        [
            "id"=> "1",
            'title' => 'First Blog',
            'content' => 'This is the content of the first blog.',
            'author' => 'John Doe',
        ],
        [
            "id"=> "2",
            'title' => 'Second Blog',
            'content' => 'This is the content of the second blog.',
            'author' => 'Jane Smith',
        ],
    ];
    return view('blogs.about', ["data" => $datas]);
});