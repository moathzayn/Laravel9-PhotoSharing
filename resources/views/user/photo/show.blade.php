@extends('layouts.userbase')
@section('title', "".$data->title)
@section('content')
    <div class="col-md-10">
        <div id="watch">

            <!-- Video Player -->
            <h1 class="video-title">{{$data->title}}</h1>
            <div class="video-code">
                <img width="100%"  src="{{\Illuminate\Support\Facades\Storage::url($data->image)}}">
            </div><!-- // video-code -->
            <h1>Upload Time:</h1><time datetime="2017-03-24T18:18">{{$data->created_at}}</time>
            <div id="comments" class="post-comments">
                <h3 class="post-box-title"><span></span> Details</h3>
                <p>{!! $data->detail !!}</p>
            </div>
            <div class="video-share">
                <ul class="like">
                    <li><a class="deslike" href="#"> <i class="fa fa-thumbs-down"></i></a></li>
                    <li><a class="like" href="#">{{$data->like}} <i class="fa fa-thumbs-up"></i></a></li>
                </ul>
                <ul class="social_link">
                    <li><a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a class="youtube" href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                    <li><a class="linkedin" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    <li><a class="google" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    <li><a class="twitter" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a class="rss" href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                </ul><!-- // Social -->
            </div><!-- // video-share -->
            <!-- // Video Player -->
            <div id="comments" class="post-comments">
                <h3 class="post-box-title"><span></span> Description </h3>
                <p>{!! $data->description !!}</p>
            </div>

            <!-- Chanels Item -->
            <div class="chanel-item">
                <div class="chanel-thumb">
                    <a href="#"><img src="demo_img/ch-1.jpg" alt=""></a>
                </div>
                <div class="chanel-info">
                    <a class="title" href="#">Rabie Elkheir</a>
                    <span class="subscribers">436,414 subscribers</span>
                </div>
                <a href="#" class="subscribe">Follow</a>
            </div>
            <!-- // Chanels Item -->


            <!-- Comments -->
            <div id="comments" class="post-comments">
                <h3 class="post-box-title"><span></span> Comments</h3>
                <ul class="comments-list">
                    <li>
                        <div class="post_author">
                            <div class="img_in">
                                <a href="#"><img src="demo_img/c1.jpg" alt=""></a>
                            </div>
                            <a href="#" class="author-name">Rabie Elkheir</a>
                            <time datetime="2017-03-24T18:18">{{$data->created_at}}</time>
                        </div>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum</p>



                    </li>

                </ul>


                <h3 class="post-box-title">Add Comments</h3>
                <form>
                    <textarea class="form-control" rows="8" id="Message" placeholder="COMMENT"></textarea>
                    <button type="button" id="contact_submit" class="btn btn-dm">Post Comment</button>
                </form>
            </div>
            <!-- // Comments -->


        </div><!-- // watch -->
    </div>

@endsection
