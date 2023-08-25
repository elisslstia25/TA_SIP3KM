<nav class="main-header navbar navbar-expand navbar-white navbar-primary">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          {{ Auth::guard('admin')->user()->nama }}
          <span class="fa fa-user"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
          <i class="fa fa-user"></i> Profile
          </a>
          <a href="{{url('logout')}}" class="dropdown-item">
          <i class="fa fa-arrow-left"></i> Logout
          </a>
        </div>
      </li>

    </ul>
</nav>


