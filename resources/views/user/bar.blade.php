<div id="main-category">
    <div class="container-full">
        <div class="row">
            <div class="col-md-12">
                <ul class="main-category-menu">
                    <ul>
                            @foreach($sliderdata as $rs)
                            <li><a href="">{{$rs->title}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </div><!-- // col-md-14 -->
        </div><!-- // row -->
    </div><!-- // container-full -->
</div>
