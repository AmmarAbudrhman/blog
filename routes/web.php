<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController as ControllersPostController;

Route::get('/', function () {
    
    return view('welcome');
});



Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::get('/posts/{id}/delete', [PostController::class, 'delete'])->name('posts.delete');
Route::post('/posts/{id}/update', [PostController::class, 'update'])->name('posts.update');
Route::post('/posts', action: [PostController::class, 'store'])->name('posts.store');
