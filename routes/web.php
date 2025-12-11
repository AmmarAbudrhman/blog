<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController as ControllersPostController;

Route::get('/', function () {
    
    return view('welcome');
});



Route::get('/post', [PostController::class, 'firstAction']);

