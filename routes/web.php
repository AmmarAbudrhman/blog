<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/', function () {
    
    return view('welcome');
});



Route::get('/test', [TestController::class, 'firstAction']);


Route::get('/ammar', function () {
    $name= "amar";
     $boooks=['html','Css',"JS"];
    return view('ammar', compact('name', 'boooks'));
});