<?php

use App\Http\Controllers\Homecontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [Homecontroller::class, 'index'])->name('home');

Route::get('/home/login', [Homecontroller::class, 'login'])->name('login');

Route::get('/home/create', [Homecontroller::class, 'createAccount'])->name('create_account');

Route::get('/user_dashboard', [Homecontroller::class, 'user_dashboard'])->name('user_dashboard');

Route::get('/lessons', [Homecontroller::class, 'lessons'])->name('lessons');

Route::get('/testbank', [Homecontroller::class, 'test_bank'])->name('test_bank');

Route::get('/lesson', [Homecontroller::class, 'lesson'])->name('lesson');

Route::get('/score', [Homecontroller::class, 'score'])->name('score');
