<div id="main-category">
    <div class="container-full">
        <div class="row">
            <div class="col-md-12">
                <ul class="main-category-menu">


                    <li class="color-3"><a href="02-category.html"><i class="fa fa-th-large"></i>Category</a>
                        <ul>
                            @foreach($sliderdata as $rs)
                                <li><a href="{{route('category',['id'=>$rs->id])}}">{{$rs->title}}</a></li>
                            @endforeach
                        </ul>
                    </li>

                </ul>
            </div><!-- // col-md-14 -->
        </div><!-- // row -->
    </div><!-- // container-full -->
</div>
