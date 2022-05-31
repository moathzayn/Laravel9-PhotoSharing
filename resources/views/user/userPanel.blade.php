@extends('layouts.userbase')
@section('title','Home')
@section('content')
<div id="all-output" class="col-md-10">
    <h1 class="new-video-title"><i class="fa fa-bolt"></i> Trending</h1>
    <div class="row">
        @foreach($imagedata as $rs)
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="video-item">
                <div class="thumb">
                    <div class="hover-efect"></div>
                    <small class="time">Trend</small>
                    <a href="/home/photo/{{$rs->id}}"><img src="{{Storage::url($rs->image)}}" alt="" style="height:140px ;width: 300px"></a>
                </div>
                <div class="video-info">
                    <a href="/home/photo/{{$rs->id}}" class="title">{{$rs->title}} </a>
                    <a class="channel-name" href="/home/photo/{{$rs->id}}">{{$rs->id}}<span>

                </div>
            </div>
        </div>
        @endforeach
    </div><!-- // row -->
    <div id="loading-more">
        <i class="fa fa-refresh faa-spin animated"></i> <span>Loading more</span>
    </div>
</div>
@endsection
