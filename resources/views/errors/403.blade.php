@extends('layouts.layout')

@section('content')
    @yield('title', '')

        <div class="errorTitle">403</div>
        <div class="errorText404">Sorry you don't have permission to visit this site.</div>


        <a class="btn btn-lg text-white ZWyellow errorActionsItem" href="javascript:history.back()">Go back</a>
        <a class="btn btn-lg text-white ZWblue errorActionsItem" href="{{ url('/') }}">More information</a>



    @stop