<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function index()
    {
        return view('entering.home');
    }

    public function login()
    {
        return view('entering.login');
    }
    public function createAccount()
    {
        return view('entering.create_account');
    }
    public function user_dashboard()
    {
        return view('user_dashboard');
    }
    public function lessons()
    {
        return view('lessons');
    }
    public function test_bank()
    {
        return view('test_bank');
    }
    public function lesson()
    {
        return view('lesson');
    }
    public function score()
    {
        return view('score');
    }
}
