<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/home', function () {
    return view('fashionstore');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('registration');
});
Route::post('/insert', [LoginController::class, 'register'])->name('register');
Route::post('/validate', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


