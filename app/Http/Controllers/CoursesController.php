<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');    
        $this->middleware('admin');
    }
    public function index()
    {
        $courses = \App\Course::all();
        return view('courses.index', compact('courses'));
    }

    function update(){

    }



}
