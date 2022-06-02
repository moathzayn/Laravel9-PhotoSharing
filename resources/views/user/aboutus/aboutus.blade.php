@extends('layouts.userbase')
@section('title', "".$setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('icon',Storage::url($setting->icon))

@section('content')
    <div class="col-md-10">
        <br>
        <h1>About Us</h1>
        <div id="watch">
            {!! $setting->aboutus !!}
        </div>
    </div>
@endsection
