<header>
    <div class="container-full">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-12">
                <a id="main-category-toggler" class="hidden-md hidden-lg hidden-md" href="#">
                    <i class="fa fa-navicon"></i>
                </a>
                <a id="main-category-toggler-close" class="hidden-md hidden-lg hidden-md" href="#">
                    <i class="fa fa-close"></i>
                </a>
                <div id="logo">
                    <a href="/"><img src="{{asset('assets')}}/user/img/logo.png" alt=""></a>
                </div>
            </div><!-- // col-md-2 -->
            <div class="col-lg-3 col-md-3 col-sm-6 hidden-xs hidden-sm">
                <div class="search-form">
                    <form id="search" action="#" method="post">
                        <input type="text" placeholder="Search here video posts...">
                        <input type="submit" value="Keywords">
                    </form>
                </div>
            </div><!-- // col-md-3 -->
            <div class="col-lg-3 col-md-3 col-sm-5 hidden-xs hidden-sm">
                <ul class="top-menu">
                    <li><a href="/">home</a></li>
                    <li><a href="#">trending</a></li>
                    <li><a href="14-history.html">history</a></li>
                </ul>
            </div><!-- // col-md-4 -->
            <div class="col-lg-2 col-md-2 col-sm-4 hidden-xs hidden-sm">
                <ul class="notifications">
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown"><i class="fa fa-users"></i>
                            <span class="badge badge-color1 header-badge"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-friend-requests ">
                            <li>
                                <div class="friend-requests-info">
                                    <div class="thumb"><a href="#"><img src="{{asset('assets')}}/userdemo_img/z1.jpg" alt=""></a></div>
                                    <a href="#" class="name">Ahmed Saleh </a>
                                    <span>Ahmed Saleh : Follow you now</span>
                                </div>
                            </li>
                            <li>
                                <div class="friend-requests-info">
                                    <div class="thumb"><a href="#"><img src="{{asset('assets')}}/user/demo_img/z2.jpg" alt=""></a></div>
                                    <a href="#" class="name">Ahmed Saleh </a>
                                    <span>Ahmed Saleh : Follow you now</span>
                                </div>
                            </li>
                            <li>
                                <div class="friend-requests-info">
                                    <div class="thumb"><a href="#"><img src="{{asset('assets')}}/user/demo_img/z3.jpg" alt=""></a></div>
                                    <a href="#" class="name">Ahmed Saleh </a>
                                    <span>Ahmed Saleh : Follow you now</span>
                                </div>
                            </li>
                            <li>
                                <div class="friend-requests-info">
                                    <div class="thumb"><a href="#"><img src="{{asset('assets')}}/user/demo_img/z4.jpg" alt=""></a></div>
                                    <a href="#" class="name">Ahmed Saleh </a>
                                    <span>Ahmed Saleh : Follow you now</span>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown"><i class="fa fa-info-circle"></i>
                            <span class="badge badge-color2 header-badge"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-help-cnter">
                            <li>
                                <h2 class="title">Help center</h2>
                                <div class="search-form">
                                    <form id="search-2" action="#" method="post">
                                        <input type="text" placeholder="Search here video posts...">
                                        <input type="submit" value="Keywords">
                                    </form>
                                </div>
                            </li>
                            <li>
                                <h2 class="title">Help on</h2>
                                <ul class="help-cat-link">
                                    <li><a href="#">the video</a></li>
                                    <li><a href="#">Copyrights</a></li>
                                    <li><a href="#">Members</a></li>
                                    <li><a href="#">Register</a></li>
                                    <li><a href="#">Comments</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown"><i class="fa fa-bell-o"></i>
                            <span class="badge badge-color3 header-badge"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-notifications-items ">
                            <li>
                                <div class="notification-info">
                                    <a href="#"><i class="fa fa-video-camera color-1"></i>
                                        <strong>Rabie Elkheir</strong> Add a new <span>Video</span>
                                        <h5 class="time">4 hours ago</h5>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="notification-info">
                                    <a href="#"><i class="fa fa-thumbs-up color-2"></i>
                                        <strong>Rabie Elkheir</strong> Add a new <span>Video</span>
                                        <h5 class="time">4 hours ago</h5>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="notification-info">
                                    <a href="#"><i class="fa fa-comment color-3"></i>
                                        <strong>Rabie Elkheir</strong> Add a new <span>Video</span>
                                        <h5 class="time">4 hours ago</h5>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="notification-info">
                                    <a href="#"><i class="fa fa-video-camera color-1"></i>
                                        <strong>Rabie Elkheir</strong> Add a new <span>Video</span>
                                        <h5 class="time">4 hours ago</h5>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="all_notifications">All Notifications</a>
                            </li>
                        </ul>

                    </li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-3 hidden-xs hidden-sm">
                <div class="dropdown">
                    @auth
                    <a data-toggle="dropdown" href="#" class="user-area">
                        <div class="thumb"><img src="{{asset('assets')}}/user/demo_img/user-1.png" alt=""></div>
                        <h2>{{Auth::user()->name}}</h2>

                        <i class="fa fa-angle-down"></i>
                    </a>
                        <ul class="dropdown-menu account-menu">
                            <li><a href="#"><i class="fa fa-edit color-1"></i>Edit profile</a></li>
                            <li><a href="#"><i class="fa fa-video-camera color-2"></i>add video</a></li>
                            <li><a href="#"><i class="fa fa-star color-3"></i>Favorites</a></li>
                            <li><a href="{{route('logout')}}"><i class="fa fa-sign-out color-4"></i>Logout</a></li>
                        </ul>
                    @endauth
                    @guest
                        <div class="col-lg-3 col-md-3 col-sm-5 hidden-xs hidden-sm">
                            <ul class="top-menu">
                                <li><a href="{{route('register')}}">Register</a>
                                <li><a href="{{route('login')}}">Login</a></li>
                            </ul>
                        </div>
                    @endguest

                </div>
            </div>
        </div><!-- // row -->
    </div><!-- // container-full -->
</header>
