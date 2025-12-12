<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('blog',[adminController::class,'index'])->name('blog-page');
Route::get('create',[adminController::class,'create_blog'])->name('create-blog');

Route::post('insert',[adminController::class,'insert']);
Route::get('delete/{id}',[adminController::class,'delete'])->name('delete');
Route::get('statusChange/{id}',[adminController::class,'statusChange'])->name('statusChange');
Route::get('egit/{id}',[adminController::class,'edit'])->name('edit');