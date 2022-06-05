@extends('layouts.userbase')
@section('title', "".$setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('content')
<div id="all-output" class="col-md-10">
    <br>
    <h1>FAQ</h1>
    <div id="all-output" class="col-md-8">
    <div class="row">
        @foreach($data as $rs)
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$rs->id}}">{{$rs->question}}</a>
                    </h4>
                </div>
                <div id="collapse{{$rs->id}}" class="panel-collapse collapse">
                    <div class="panel-body">{!! $rs->answer !!}</div>
                </div>
            </div>
        @endforeach
    </div>
    </div>
</div>
@endsection
