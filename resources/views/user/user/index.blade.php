@extends('layouts.userbase')
@section('title', "User Panel")
@section('content')
    <div class="col-md-10">
        <br>
        <h1>User Panel</h1>
        <div id="watch">
            @include('profile.show')
        </div>
    </div>
@endsection
