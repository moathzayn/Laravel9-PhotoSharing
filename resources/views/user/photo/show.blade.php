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
                @foreach($comment as $rs)
                <ul class="comments-list">
                    <li>
                        <div class="post_author">
                            <div class="img_in">
                                <a href="#"><img src="demo_img/c1.jpg" alt=""></a>
                            </div>
                            <a href="#" class="author-name">{{$rs->user->name}}</a>
                            <time datetime="2017-03-24T18:18">{{$rs->created_at}}</time>
                        </div>
                        <p>{{$rs->comment}}</p>
                        <div>Rate:
                        @if($rs->rate=="1")★ @endif
                        @if($rs->rate=="2")★★ @endif
                        @if($rs->rate=="3")★★★ @endif
                        @if($rs->rate=="4")★★★★ @endif
                        @if($rs->rate=="5")★★★★★ @endif
                        </div>
                    </li>
                </ul>
                @endforeach
                @include('user.contact.message')
                <h3 class="post-box-title">Add Comments</h3>
                <form action="{{route('storecomment')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="photo_id" value="{{$data->id}}">
                    <textarea class="form-control" name="comment" rows="8" id="Message" placeholder="COMMENT"></textarea>
                    <p>Rate:</p>
                    <fieldset class="rating">

                        <input type="radio" id="star5" name="rate" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                        <input type="radio" id="star4" name="rate" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                        <input type="radio" id="star3" name="rate" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                        <input type="radio" id="star2" name="rate" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                        <input type="radio" id="star1" name="rate" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                    </fieldset>
                    <br><br>
                    @auth
                    <button type="submit" id="contact_submit" class="btn btn-dm">Post Comment</button>
                    @else
                        <a href="/login" class="btn btn-dm">Pleas Sign In To Post Comment</a>
                    @endauth
                </form>
            </div>
        </div>
    </div>
<style>


    /****** Style Star Rating Widget *****/

    .rating {
        border: none;
        float: left;
    }

    .rating > input { display: none; }
    .rating > label:before {
        margin: 5px;
        font-size: 1.25em;
        font-family: FontAwesome;
        display: inline-block;
        content: "\f005";
    }

    .rating > .half:before {
        content: "\f089";
        position: absolute;
    }

    .rating > label {
        color: #ddd;
        float: right;
    }

    /***** CSS Magic to Highlight Stars on Hover *****/

    .rating > input:checked ~ label, /* show gold star when clicked */
    .rating:not(:checked) > label:hover, /* hover current star */
    .rating:not(:checked) > label:hover ~ label { color: #FFD700;  } /* hover previous stars in list */

    .rating > input:checked + label:hover, /* hover current star when changing rating */
    .rating > input:checked ~ label:hover,
    .rating > label:hover ~ input:checked ~ label, /* lighten current selection */
    .rating > input:checked ~ label:hover ~ label { color: #FFED85;  }
</style>
@endsection
