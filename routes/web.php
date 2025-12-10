<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', function () {
    $blogs=[
        [
            'title'=>"Blog 1",
            'content' => "Content 1",
            'status' => true
        ],
        [
            'title'=>"Blog 2",
            'content' => "Content 2",
            'status' => true
        ],
        [
            'title'=>"Blog 3",
            'content' => "Content 3",
            'status' => false
        ],
        [
            'title'=>"Blog 4",
            'content' => "Content 4",
            'status' => true
        ]
    ];
    return view('blog',compact('blogs'));
})->name('blog-page');
