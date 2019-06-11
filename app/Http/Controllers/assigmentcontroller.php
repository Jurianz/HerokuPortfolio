<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\assigments;
use Illuminate\Support\Facades\Validator;

class assigmentcontroller extends Controller
{

    public function index()
    {

        $assigments = \App\assigments::all();
        return view('assignments.index', compact('assigments'));
    }

    public function edit($id)
    {
        $assigments = assigments::findOrFail($id);
        return view("assignments.edit", compact("assigments"));
    }
    public function show($id)
    {
        $assigments = assigments::findOrFail($id);
        return view('assignments.show', compact('assigments'));
    }

    public function create() {
        $assigments = assigments::all();
        return view('assignments.create');
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
        $assigment = new assigments();

        $assigment->project_name = request('projectNameInput');
        $assigment->image_url = request('imageUrlInput');
        $assigment->description = request('projectDescriptionTextArea');
        $assigment->save();

        return redirect('/assignments');
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

        $assigment = assigments::findOrFail($id);
        $assigment->project_name = request('projectNameInput');
        $assigment->image_url = request('imageUrlInput');
        $assigment->description = request('projectDescriptionTextArea');
        $assigment->save();
        return redirect('/assignments');
    }

    public function destroy($id)
    {
        assigments::findOrFail($id)->delete();
        return redirect('/assignments');
    }
}
