@extends('layouts.layout')

@section('content')
    @yield('title', 'contact page')

    <div class="emailContainer">
        <form action="action_page.php">

            <label class="firstName" for="fname">First Name</label>

        </form>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">

        <label class="lastName" for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">


        <label class="inputLabel" for="subject">Subject</label>
        <textarea id="subjectText" name="subject" placeholder="Write something.." style="height:200px"></textarea>

        <input type="submit" value="Submit">

        </form>
    </div>

@stop