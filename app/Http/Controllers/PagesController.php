<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('index');
    }

    public function about(){
        return view('about');
    }

    public function  assignments(){
        return view('assignments');
    }

    public function  dashboard(){
        return view('dashboard');
    }

    public function  email(){
        return view('email');
    }

    public function  students(){
        return view('students');
    }
}
