@extends('layouts.layout')

@section('content')
    @yield('title', '')


    <div class="createForm">
        <form class="needs-validation" novalidate method="POST" action={{url('/assignments')}}>

            @CSRF


            <div class="form-group">
                <label class="projectStyle" for="projectNameInput">New Project</label>
                <input type="text" class="form-control" id="projectNameInput" name="projectNameInput"
                       placeholder="Project name" required="required">
                <div class="valid-feedback">
                    Looks good!
                </div>
                <div class="invalid-feedback">
                    Please enter a valid project name.
            </div>
            <div class="form-group">
                <label class="imageUrlStyle" for="imageUrlInput">Project teacher</label>
                <input type="text" class="form-control" id="imageUrlInput" name='imageUrlInput'
                       placeholder="Project teacher" required="required">
                <div class="valid-feedback">
                    Looks good!
                </div>
                <div class="invalid-feedback">
                    Please enter a valid project subject.
            </div>
            <div class="form-group">
                <label class="projectDescriptionStyle" for="projectDescriptionTextArea">Project description</label>
                <textarea class="form-control" id="projectDescriptionTextArea" name='projectDescriptionTextArea'
                          rows="3" placeholder="Description" required="required"></textarea>
                <div class="valid-feedback">
                    Looks good!
                </div>
                <div class="invalid-feedback">
                    Please enter a valid description.
            </div>
            <div class="col-auto my-1">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>

        <script>(function () {
                        'use strict';
                        window.addEventListener('load', function () {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
                            var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
                            var validation = Array.prototype.filter.call(forms, function (form) {
                                form.addEventListener('submit', function (event) {
                                    if (form.checkValidity() === false) {
                                        event.preventDefault();
                                        event.stopPropagation();
                                    }
                                    form.classList.add('was-validated');
                                }, false);
                            });
                        }, false);
                    })();</script>
    </div>






@stop