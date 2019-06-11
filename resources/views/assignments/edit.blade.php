@extends('layouts.layout')

@section('content')
    @yield('title', '')

    <div class="createForm">
        <form class="opdrachtform" method="POST" action={{url("/assignments/$assigments->id")}}>
            {{csrf_field()}}
            @method("PATCH")

            <div class="form-group">
                <label class="projectStyle" for="projectNameInput">New Project</label>
                <input type="text" class="form-control" id="projectNameInput" name="projectNameInput"
                       placeholder="Opdracht" required="required"
                       value="{{ $assigments->project_name }}" required="required">
            </div>
            <div class="form-group">
                <label class="imageUrlStyle" for="imageUrlInput">Project image url</label>
                <input type="text" class="form-control" id="imageUrlInput" name='imageUrlInput' placeholder="Image url" required="required"
                       value="{{ $assigments->image_url }}" required="required">
            </div>
            <div class="form-group">
                <label class="projectDescriptionStyle" for="projectDescriptionTextArea">Project description</label>
                <textarea class="form-control" id="projectDescriptionTextArea" name='projectDescriptionTextArea'
                          rows="3" placeholder="Description" required="required"> {{$assigments->description }}</textarea>

            </div>
            <div class="col-auto my-1">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>




@stop