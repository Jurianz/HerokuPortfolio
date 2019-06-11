
@extends('layouts.layout')

@section('content')
    @yield('title', 'Dashboard page')
    <div class="tableDashboard">
    {{--<table>--}}
        {{--<thead>--}}
        {{--<tr>--}}
            {{--<th scope="col">Course</th>--}}
            {{--<th scope="col">Grade</th>--}}
            {{--<th scope="col">ECTS</th>--}}
        {{--</tr>--}}
        {{--</thead>--}}
        {{--<tbody>--}}
        {{--@foreach($courses as $row)--}}
            {{--<tr>--}}

                {{--<td>{{ $row->Name }}</td>--}}
                {{--<td>{{ $row->Grade }}</td>--}}
                {{--<td>{{ $row->ECTS }}</td>--}}

            {{--</tr>--}}
        {{--@endforeach--}}
        {{--</tbody>--}}
        {{--</thead>--}}
    {{--</table>--}}

    </div>
@stop