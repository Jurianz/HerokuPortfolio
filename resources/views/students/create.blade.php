@extends('layouts.layout')

@section('content')
    @yield('title', '')


    <div class="createForm">
        <form class="needs-validation" novalidate method="POST" action={{url('/students')}}>

            @CSRF


            <div class="form-group">
                <label class="studentNameStyle" for="studentNameInput">New Project</label>
                <input type="text" class="form-control" id="studentNameInput" name="studentNameInput"
                       placeholder="Student name" required="required">
                <div class="valid-feedback">
                    Looks good!
                </div>
                <div class="invalid-feedback">
                    Please enter a valid name.
            </div>
            <div class="form-group">
                <label class="studentNmrStyle" for="studentNmrInput">Project teacher</label>
                <input type="text" class="form-control" id="studentNmrInput" name='studentNmrInput'
                       placeholder="Student Nmr" required="required">
                <div class="valid-feedback">
                    Looks good!
                </div>
                <div class="invalid-feedback">
                    Please enter a valid student number.
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