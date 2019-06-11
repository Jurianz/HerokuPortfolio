<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function index(){

        $students = \App\Student::all();
        return view('students/index', compact('students'));
    }
}
