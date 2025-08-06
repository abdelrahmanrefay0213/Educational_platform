<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $name = "Student";
        return view('student.home', ['name' => $name]);
    }

    public function login()
    {
        return view('student.login');
    }
    public function createAccount()
    {
        return view('student.create_account');
    }
    public function user_dashboard()
    {
        return view('student.user_dashboard');
    }
    public function lessons()
    {
        return view('student.lessons');
    }
    public function test_bank()
    {
        return view('student.test_bank');
    }
    public function lesson()
    {
        return view('student.lesson');
    }
    public function score()
    {
        return view('student.score');
    }
    public function live()
    {
        return view('student.live');
    }
}
