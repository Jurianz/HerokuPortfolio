<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{

    public function index()
    {
        $students = Student::all();
        return view('students/index', compact('students'));
    }

    public function edit($id)
    {
        $students = Student::findOrFail($id);
        return view("students/edit", compact("students"));
    }
    public function show($id)
    {
        $students = Student::findOrFail($id);
        return view('students/show', compact('students'));
    }

    public function create() {
        $students = Student::all();
        return view('students/create', compact('students'));
    }

    public function store(Request $request){

//        $validator = Validator::make($request->all(), [
//            'projectNameInput' => 'required|string',
//            'imageUrlInput' => 'required|string',
//            'projectDescriptionTextArea' => 'required|text',
//        ]);
//
//        if ($validator->fails()) {
//            Session::flash('flash_message', $validator->messages()->first());
//            Session::flash('flash_type', 'alert-danger');
//            return redirect()->back()->withErrors($validator);
//        }
        $students = new Student();

        $students->studentName = request('studentNameInput');
        $students->studentNmr = request('studentNmrInput');
        $students->save();

        return redirect('/students');
    }

    public function update(Request $request ,$id)
    {
//
//        $validator = Validator::make($request->all(), [
//            'projectNameInput' => 'required|string',
//            'imageUrlInput' => 'required|string',
//            'projectDescriptionTextArea' => 'required|text',
//        ]);
//
//        if ($validator->fails()) {
//            Session::flash('flash_message', $validator->messages()->first());
//            Session::flash('flash_type', 'alert-danger');
//            return redirect()->back()->withErrors($validator);
//        }

        $students = Student::findOrFail($id);
        $students->studentName = request('projectNameInput');
        $students->studentNmr = request('imageUrlInput');
        $students->save();
        return redirect('/students');
    }

    public function destroy($id)
    {
        Student::findOrFail($id)->delete();
        return redirect('/students');
    }
}
