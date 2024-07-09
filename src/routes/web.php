<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('books', BookController::class);
Route::get('/login', function () {
    return view('auth.login');
});