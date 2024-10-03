<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

Route::get('welcome', function () {
    return view('welcome');
});


Route::view('add','add-blog');
Route::view('edit','edit');

Route::post('add',[BlogController::class,'addBlog']);

Route::get('list',[BlogController::class,'list']);

Route::get('delete/{id}',[BlogController::class,'delete']);

Route::get('edit/{id}',[BlogController::class,'edit']);

Route::put('edit/{id}',[BlogController::class,'editBlog']);

Route::get('view/{id}',[BlogController::class,'viewBlog']);



