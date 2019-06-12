@extends('layouts.layout')

@section('content')
    @yield('title', '')

    <div class="createForm">
        <form class="opdrachtform" method="POST" action={{url("/students/$students->id")}}>
            {{csrf_field()}}
            @method("PATCH")

            <div class="form-group">
                <label class="studentStyle" for="studentNameInput">Add New student</label>
                <input type="text" class="form-control" id="studentNameInput" name="studentNameInput"
                       placeholder="Student name" required="required"
                       value="{ $students->studentName }}" required="required">
            </div>
            <div class="form-group">
                <label class="studentNmrStyle" for="studentNmrInput">student number</label>
                <input type="text" class="form-control" id="studentNmrInput" name='studentNmrInput' placeholder="Student number" required="required"
                       value="{$students->studentNmr }}" required="required">
            </div>
        
            <div class="col-auto my-1">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>




@stop