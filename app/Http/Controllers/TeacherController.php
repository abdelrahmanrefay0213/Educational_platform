<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        return view('teacher.t_dashboard');
    }
    public function studentsList()
    {
        return view('teacher.students_list');
    }
    public function studentScore()
    {
        return view('teacher.student_score');
    }
}
