<html>
    <head>
        <title>@yield('title')</title>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="keywords" content="Blog website templates" />
        <meta name="description" content="Author - Personal Blog Wordpress Template">
        <meta name="author" content="Rabie Elkheir">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"  type="text/css" />

        
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800|Raleway:400,500,700|Roboto:300,400,500,700,900|Ubuntu:300,300i,400,400i,500,500i,700" rel="stylesheet">
        
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/responsive.css" />

    </head>
    <body>
    <header>
        <div class="container-full">
        	<div class="row">
                <div class="col-lg-2 col-md-2 col-sm-12">
					<a id="main-category-toggler" class="hidden-md hidden-lg hidden-md"  href="#">
                    	<i class="fa fa-navicon"></i>
                    </a>
					<a id="main-category-toggler-close" class="hidden-md hidden-lg hidden-md" href="#">
                    	<i class="fa fa-close"></i>
                    </a>
                    <div id="logo">
                        <a href="01-home.html"><img src="img/logo.png" alt=""></a>
                    </div>
                </div><!-- // col-md-2 -->
                <div class="col-lg-3 col-md-3 col-sm-6 hidden-xs hidden-sm">
                    <div class="search-form">
                        <form id="search" action="#" method="post">
                            <input type="text" placeholder="Search here video posts..."/>
                            <input type="submit" value="Keywords" />
                        </form>
                    </div>
                </div><!-- // col-md-3 -->
                <div class="col-lg-3 col-md-3 col-sm-5 hidden-xs hidden-sm">
                    <ul class="top-menu">
                        <li><a href="01-home.html">home</a></li>
                        <li><a href="#">trending</a></li>
                        <li><a href="14-history.html">history</a></li>
                    </ul>
                </div><!-- // col-md-4 -->
                <div class="col-lg-2 col-md-2 col-sm-4 hidden-xs hidden-sm">
                    <ul class="notifications">
                        <li class="dropdown">
                        <a href="#"  data-toggle="dropdown"><i class="fa fa-users"></i>
                        	<span class="badge badge-color1 header-badge"></span>
                        </a>
                              <ul class="dropdown-menu dropdown-menu-friend-requests ">
                                <li>
                                	<div class="friend-requests-info">
                                        <div class="thumb"><a href="#"><img src="demo_img/z1.jpg" alt=""></a></div>
                                        <a href="#" class="name">Ahmed Saleh </a>
                                        <span>Ahmed Saleh : Follow you now</span>
                                    </div>
                                </li>
                                <li>
                                	<div class="friend-requests-info">
                                        <div class="thumb"><a href="#"><img src="demo_img/z2.jpg" alt=""></a></div>
                                        <a href="#" class="name">Ahmed Saleh </a>
                                        <span>Ahmed Saleh : Follow you now</span>
                                    </div>
                                </li>
                                <li>
                                	<div class="friend-requests-info">
                                        <div class="thumb"><a href="#"><img src="demo_img/z3.jpg" alt=""></a></div>
                                        <a href="#" class="name">Ahmed Saleh </a>
                                        <span>Ahmed Saleh : Follow you now</span>
                                    </div>
                                </li>
                                <li>
                                	<div class="friend-requests-info">
                                        <div class="thumb"><a href="#"><img src="demo_img/z4.jpg" alt=""></a></div>
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
                                        <input type="text" placeholder="Search here video posts..."/>
                                        <input type="submit" value="Keywords" />
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
                        <a data-toggle="dropdown" href="#" class="user-area">
                            <div class="thumb"><img src="demo_img/user-1.png" alt=""></div>
                            <h2>Hello User</h2>
                            <h3>10 Followers</h3>
                            
                        </a>
    				</div>
                </div>
            </div><!-- // row -->
        </div><!-- // container-full -->
      </header>
      <div id="main-category">
        <div class="container-full">
        	<div class="row">
                <div class="col-md-12">
                    <ul class="main-category-menu">
                        <li class="color-1"><a href="02-category.html"><i class="fa fa-music"></i>Music</a></li>
                        <li class="color-2"><a href="02-category.html"><i class="fa fa-soccer-ball-o"></i>Sports</a></li>
                        <li class="color-3"><a href="02-category.html"><i class="fa fa-gamepad"></i>Gaming</a></li>
                        <li class="color-4"><a href="02-category.html"><i class="fa fa-globe"></i>News</a></li>
                        <li class="color-3"><a href="02-category.html"><i class="fa fa-th-large"></i>Template Pages</a>
                        	<ul>
                            	<li><a href="01-home.html">01-home </a></li>
                            	<li><a href="02-category.html">02-category </a></li>
                            	<li><a href="03-category_videos.html">03-category_videos  </a></li>
                            	<li><a href="04-category_chanels.html">04-category_chanels </a></li>
                            	<li><a href="05-category_playlists.html">05-category_playlists </a></li>
                            	<li><a href="06-category_about.html">06-category_about </a></li>
                            	<li><a href="07-log_in_page.html">07-log_in_page </a></li>
                            	<li><a href="08-sign_up_page.html">08-sign_up_page </a></li>
                            	<li><a href="09-watch.html">09-watch </a></li>
                            	<li><a href="10-upload.html">10-upload </a></li>
                            	<li><a href="11-blog.html">11-blog </a></li>
                            	<li><a href="12-single.html">12-single </a></li>
                            	<li><a href="13-404_page.html">13-404_page </a></li>
                            	<li><a href="14-history.html">14-history </a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
              </div>
          </div>
      </div>
      <div class="site-output">
      	<div class="col-md-2 no-padding-left hidden-sm hidden-xs">
        	<div class="left-sidebar">
            	<div id="sidebar-stick" >
            	<ul class="menu-sidebar">
                	<li><a href="01-home.html"><i class="fa fa-home"></i>Home</a></li>
                	<li><a href="#"><i class="fa fa-bolt"></i>Trending</a></li>
                	<li><a href="14-history.html"><i class="fa fa-clock-o"></i>History</a></li>
                	<li><a href="11-blog.html"><i class="fa fa-file-text"></i>blog</a></li>
                	<li><a href="10-upload.html"><i class="fa fa-upload"></i>upload</a></li>
                </ul>
            	<ul class="menu-sidebar">
                	<li><a href="#"><i class="fa fa-edit"></i>edit profile</a></li>
                	<li><a href="/logout"><i class="fa fa-sign-out"></i>Logout</a></li>
                </ul>
            	<ul class="menu-sidebar">
                	<li><a href="#"><i class="fa fa-gear"></i>Settings</a></li>
                	<li><a href="#"><i class="fa fa-question-circle"></i>Help</a></li>
                	<li><a href="#"><i class="fa fa-send-o"></i>Send feedback</a></li>
                </ul>
                </div><!-- // sidebar-stick -->
                <div class="clear"></div>
            </div><!-- // left-sidebar -->
        </div>
        <div id="all-output" class="col-md-10">
        	@yield('we')

		</div>
        
        
    </body>
</html>