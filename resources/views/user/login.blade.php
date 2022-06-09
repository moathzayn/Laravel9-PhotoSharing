@extends('layouts.userbase')
@section('title', "Login")



@section('content')
    <div class="col-md-10">
        <br>
        <h1>Login</h1>
        <br>
        <div id="watch">
            @include('auth.login')
        </div>
    </div>
@endsection
