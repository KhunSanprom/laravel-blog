<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('blog',[adminController::class,'index'])->name('blog-page');
