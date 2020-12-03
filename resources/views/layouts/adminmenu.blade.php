<aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0 bgr-black">
          <div class="main-navbar">
            <nav class="navbar align-items-stretch navbar-light flex-md-nowrap border-bottom p-0 bgr-black">
              <a class="navbar-brand w-100 mr-0" href="" style="line-height: 25px;">
                <div class="d-table m-auto">
                  <span class="d-none d-md-inline ml-1 text-while">TO-DO APPLICATION</span>
                </div>
              </a>
              <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
                <i class="material-icons">&#xE5C4;</i>
              </a>
            </nav>
          </div>
          <form action="#" class="main-sidebar__search w-100 border-right d-sm-flex d-md-none d-lg-none">
            <div class="input-group input-group-seamless ml-3">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fas fa-search"></i>
                </div>
              </div>
              <input class="navbar-search form-control" type="text" placeholder="Search for something..." aria-label="Search"> </div>
          </form>
          <div class="nav-wrapper">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" id="menu-a" href="{{ route('home') }}">
                  <i class="fa fa-home"></i>
                  <span>Dashboard</span>
                </a>
              </li>
	
	          <li class="nav-item">
                <a class="nav-link " id="menu-a" href="{{ route('myday.index') }}">
                  <i class="material-icons">view_module</i>
                  <span>My day</span>
                </a>
              </li>
			  
			  
			  <li class="nav-item">
                <a class="nav-link " id="menu-a" href="{{ route('tasks.index') }}">
                   <i class="fa fa-calendar"></i>
                   <span>Calendar </span>
                </a>
              </li>
			  		 
              
			<li class="nav-item">
                <a class="nav-link " id="menu-a" href="{{ route('mydocuments.index') }}">
                  <i class="fa fa-file"></i>
                  <span>Documents</span>
                </a>
              </li>
			

			  
              <!--<li class="nav-item">
                <a class="nav-link " href="">
                  <i class="fa fa-users"></i>
                  <span>Users</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="">
                  <i class="material-icons">view_module</i>
                  <span>Records</span>
                </a>
              </li> 
			  <li class="nav-item">
                <a class="nav-link " href="<?php echo date('Y');?>">
                  <i class="material-icons">table_chart</i>
                  <span>Statistic </span>
                </a>
              </li>
 
<li class="nav-item">
                <a class="nav-link " href="user-profile-lite.html">
                  <i class="material-icons">person</i>
                  <span>User Profile</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="errors.html">
                  <i class="material-icons">error</i>
                  <span>Errors</span>
                </a>
              </li>-->
            </ul>
          </div>
        </aside>