@extends('layouts.layout')

@section('content')

@if ( Session::has('flash_message') )

        <div class="text-center" id="errorMessage">
            <div class="alert {{ Session::get('flash_type') }}">
                {{ Session::get('flash_message') }}
            </div>
        </div>
    @endif


    <table class="firstTable text-white">
        <tr>
            <th><h2>Students</h2></th>
        </tr>
        <div class="col-6 text-right mt-1">
            <a class="btn btn-success neef" href={{ url("/students/create") }}>Add a New Student </a>
        </div>
        <tr style="border-bottom: solid 2px white;">
            <th>Student name</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>

        @foreach($students as $row)
            <tr>
                <td>{{ $row->studentName }}</td>
                <td><a class="btn btn-info btn-sm text-white"
                       href="{{ url("students/" . $row->id) }}">Details</a></td>
                <td><a class=" btn btn-warning btn-sm text-white"
                       href={{ url("students/" . $row->id . "/edit") }}>Update</a></td>
                <td>
                    <form method="POST" action="{{ url("/students/$row->id") }}">
                        @method('DELETE')
                        @CSRF
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach

    </table>
    <script type="text/javascript">
        setTimeout(function() {
            $('#errorMessage').fadeOut('fast');
        }, 3000); // <-- time in milliseconds
    </script>

@stop