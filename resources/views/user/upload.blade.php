@extends('layouts.userbase')
@section('title', "Upload Photo")

@section('content')
    <div id="all-output" class="col-md-10 upload">
        <div id="upload">
            <div class="row">
                <!-- upload -->
                <div class="col-md-8">
                    <h1 class="page-title"><span>Upload</span> Photo</h1>
                    <form action="{{route('uploadstore')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label>Post Title</label>
                                <input type="text" class="form-control" placeholder="title" name="title">
                            </div>
                            <div class="col-md-6">
                                <label>Post Category</label>
                                <select type="text" class="form-control" placeholder="category">
                                    @foreach($sliderdata as $rs)
                                    <option value="{{$rs->id}}">{{$rs->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label>Post Keywords</label>
                                <input type="text" class="form-control" placeholder="Post Tags" name="keywords">
                            </div>
                            <div class="col-md-6">
                                <label>Photo upload</label>
                                <input id="upload_file" type="file" class="file" name="image">
                            </div>
                            <div class="col-md-12">
                                <label>Post Description</label>
                                <textarea class="form-control" rows="4"  placeholder="COMMENT" name="description"></textarea>
                            </div>
                            <div class="col-md-12">
                                <label>Post Detail</label>
                                <textarea class="form-control" rows="4"  placeholder="COMMENT" name="detail"></textarea>
                            </div>
                            <div class="col-md-6">
                                @auth
                                <button type="submit" id="contact_submit" class="btn btn-dm">Save your post</button>
                                @else
                                    <a href="/login" class="btn btn-dm">Pleas Sign In To Post Photo</a>
                                @endauth
                            </div>
                        </div>
                    </form>
                </div><!-- // col-md-8 -->
            </div><!-- // row -->
        </div><!-- // upload -->
    </div>
@endsection
