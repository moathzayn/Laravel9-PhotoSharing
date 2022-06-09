<div class="sidebar" data-color="rose" data-background-color="black" data-image="{{asset('assets')}}/admin/img/sidebar-1.jpg">
      <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-mini">
          CT
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Creative Tim
        </a></div>
      <div class="sidebar-wrapper">
        <div class="user">
          <div class="photo">
            <img src="{{asset('assets')}}/admin/img/faces/avatar.jpg" />
          </div>
          <div class="user-info">
            <a data-toggle="collapse" href="#collapseExample" class="username">
              <span>
                {{Auth::user()->name}}
                <b class="caret"></b>
              </span>
            </a>
            <div class="collapse" id="collapseExample">
              <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span class="sidebar-mini"> MP </span>
                    <span class="sidebar-normal"> My Profile </span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="/home">
              <i class="material-icons">dashboard</i>
              <p> Dashboard </p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/home">
              <i class="material-icons">account_circle</i>
              <p> User </p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.photos.index')}}">
              <i class="material-icons">photo</i>
              <p> Photos </p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.message.index')}}">
              <i class="material-icons">comment</i>
              <p> Messages </p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{route('admin.category.index')}}">
              <i class="material-icons">grid_on</i>
              <p> Category </p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.faq.index')}}">
              <i class="material-icons">quiz</i>
              <p> FAQ </p>
            </a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="{{route('admin.comment.index')}}">
              <i class="material-icons">question_answer</i>
              <p> Comments </p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin/setting">
              <i class="material-icons">settings</i>
              <p> Setting </p>
            </a>
          </li>
        </ul>
      </div>
    </div>
