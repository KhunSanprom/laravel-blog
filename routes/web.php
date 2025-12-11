<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('blog',[adminController::class,'index'])->name('blog-page');
Route::get('create',[adminController::class,'create_blog'])->name('create-blog');

Route::post('insert',[adminController::class,'insert']);