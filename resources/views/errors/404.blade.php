@extends('layouts.layout')

@section('content')
    @yield('title', '')

        <div class="errorTitle">404</div>
        <div class="errorText404">The page you requested was not found.</div>


        <a class="btn btn-lg text-white ZWyellow errorActionsItem" href="javascript:history.back()">Go back</a>
        <a class="btn btn-lg text-white ZWblue errorActionsItem" href="{{ url('/') }}">More information</a>



    @stop