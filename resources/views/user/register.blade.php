@extends('layouts.userbase')
@section('title', "register")



@section('content')
    <div class="col-md-10">
        <br>
        <h1>Register</h1>
        <br>
        <div id="watch">
            @include('auth.register')
        </div>
    </div>
@endsection
