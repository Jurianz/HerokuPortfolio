@extends('layouts.layout')

@section('content')
    @yield('title', '')
<div class="showStyle">
    <div>
        <div class="row">
            <div class="col-6 text-left mt-2">
                <h4>The details of the windmill rotations</h4>
            </div>
            <div class="col-6 text-right mt-1">
                <a class="btn btn-primary" href={{ url("assignments/") }}>Go back</a>
            </div>
        </div>
    </div>


    <div class="card-body text-left">
        <table>
            <tr>
                <th>project</th>
                <td></td>
                <th>image url</th>
                <td></td>
                <th>description</th>
            </tr>

            <tr>
                <td >{{$assigments->project_name}}</td>
                <td></td>
                <td>{{$assigments->image_url}}</td>
                <td></td>
                <td> {{$assigments->description}}</td>
        <td><a class="btn btn-primary btn-sm"
               href="{{ url('/assignments/' . $assigments->id . '/edit') }}">Edit</a></td>
            </tr>
        </table>
    </div>
</div>


@stop