<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile">
        <a href="#" class="nav-link">
          <div class="nav-profile-image">
            <img src="{{ (!empty($profileData->photo)) ? url('assets/images/'.$profileData->photo) : 
            url('assets/images/faces/pic-1.png')}}" alt="profile">
            <span class="login-status online"></span>
            <!--change to offline or busy as needed-->
          </div>
          <div class="nav-profile-text d-flex flex-column">
            <span class="font-weight-bold mb-2">{{ Auth::user()->name }}
              <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i></span>
            <span class="text-secondary text-small">{{ Auth::user()->email }}</span>
          </div>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
          <span class="menu-title">Dashboard</span>
          <i class="mdi mdi-home menu-icon"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-title">Manage accounts</span>
          <i class="menu-arrow"></i>
          <i class="mdi mdi-crosshairs-gps menu-icon"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="#">User</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Clients</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <span class="menu-title">Enquiries</span>
          <i class="mdi mdi-comment-question-outline menu-icon"></i>
        </a>
      </li>
    </ul>
  </nav>