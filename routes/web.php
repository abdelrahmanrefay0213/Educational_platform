<?php

use App\Http\Controllers\Homecontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [Homecontroller::class, 'index'])->name('home');

Route::get('/home/login', [Homecontroller::class, 'login'])->name('login');

Route::get('/home/create_account', [Homecontroller::class, 'createAccount'])->name('create_account');