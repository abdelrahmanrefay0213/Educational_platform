<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [StudentController::class, 'index'])->name('home');

Route::post('/login', [StudentController::class, 'login'])->name('login');

Route::get('/create', [StudentController::class, 'createAccount'])->name('create_account');

Route::get('/user_dashboard', [StudentController::class, 'user_dashboard'])->name('user_dashboard');

Route::get('/lessons', [StudentController::class, 'lessons'])->name('lessons');

Route::get('/testbank', [StudentController::class, 'test_bank'])->name('test_bank');

Route::get('/lesson', [StudentController::class, 'lesson'])->name('lesson');

Route::get('/score', [StudentController::class, 'score'])->name('score');

Route::get('/live', [StudentController::class, 'live'])->name('live');

Route::get('/teacher_dashboard', [TeacherController::class, 'index'])->name('teacher_dashboard');
Route::get('/students_list', [TeacherController::class, 'studentsList'])->name('students_list');
Route::get('/student_score', [TeacherController::class, 'studentScore'])->name('student_score');