<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;


Route::view('/', [TestController::class, 'home']);
Route::view('/article', [TestController::class, 'article']);
Route::view('contact', [TestController::class, 'contact']);
//Route::get('invoice', [TestController::class, 'invoice']);

// Route::post(); bikin data
// Route::get(); nampilkan data
// Route::put(); edit data
// Route::delete(); hapus data 