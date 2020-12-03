  <nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">
<ul class="navbar-nav border-left flex-row ">
<li class="nav-item dropdown">
<a class="dropdown-item" href="{{ route('admin.profile')}}" style="text-align:center;">
<i class="material-icons">&#xE7FD;</i>
</br>
 My profile
 </a>
</li>
<li class="nav-item dropdown">
<a class="dropdown-item" href="{{ route('tasks.index')}}" style="text-align:center;">
<i class="fa fa-calendar"></i>
</br>
 My calendar
 </a>
</li>
</ul>

			<form action="#" class="main-navbar__search w-100 d-none d-md-flex d-lg-flex">
                <div class="input-group input-group-seamless ml-3">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fas fa-search"></i>
                    </div>
                  </div>
                  <input class="navbar-search form-control" type="text" placeholder="Search for something..." aria-label="Search"> </div>
              </form>
              <ul class="navbar-nav border-left flex-row ">

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-nowrap px-3" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <img class="user-avatar rounded-circle mr-2" src="{{ asset('public/profile_pic/admin/1604750972.jpg') }}" style="width:40px;height:40px;border-radius:50%;"alt="User Avatar">
                    <span class="d-none d-md-inline-block"> {{ Auth::user()->firstname }}</span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-small" style="margin-left:-24px;">
                    <a class="dropdown-item" href="{{ route('admin.profile')}}">
                      <i class="material-icons">&#xE7FD;</i> Profile</a>
					  
                    <a class="dropdown-item" href="{{route('admin.edit.profile')}}">
                      <i class="material-icons">vertical_split</i> Change info</a>
					  
                    <a class="dropdown-item" href="{{route('change.password.adminview')}}">
                      <i class="material-icons">note_add</i> Change password</a>
					  
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                      <i class="material-icons text-danger">&#xE879;</i> Logout </a>
					   <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                  </div>
                </li>
              </ul>
              <nav class="nav">
                <a href="#" class="nav-link nav-link-icon toggle-sidebar d-md-inline d-lg-none text-center border-left" data-toggle="collapse" data-target=".header-navbar" aria-expanded="false" aria-controls="header-navbar">
                  <i class="material-icons">&#xE5D2;</i>
                </a>
              </nav>
            </nav>