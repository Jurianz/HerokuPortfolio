@extends('layouts.layout')

@section('content')
    @yield('title', '')

    <div class="errorTitle">500</div>
    <div class="errorText500">There was an internal server error, we are working on it.</div>



    <a class="btn btn-lg text-white Zyellow errorActionsItem" href="javascript:history.back()">Go back</a>
    <a class="btn btn-lg text-white Zblue errorActionsItem" href="{{ url('/') }}">More information</a>





@stop