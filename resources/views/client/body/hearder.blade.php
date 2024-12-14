<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
      <a class="navbar-brand brand-logo" href="{{ route('client.dashboard') }}">MKBA</a>
      <a class="navbar-brand brand-logo-mini" href="{{ route('client.dashboard') }}">MKBA</a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-stretch">
      <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="mdi mdi-menu"></span>
      </button>
      <div class="search-field d-none d-md-block">
        <form class="d-flex align-items-center h-100" action="#">
          <div class="input-group">
            <div class="input-group-prepend bg-transparent">
              <i class="input-group-text border-0 mdi mdi-magnify"></i>
            </div>
            <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
          </div>
        </form>
      </div>
      <ul class="navbar-nav navbar-nav-right">
        <li class="nav-item nav-profile dropdown">
          <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
            <div class="nav-profile-img">
              <img src="{{ (!empty($profileData->photo)) ? url('assets/images/'.$profileData->photo) : 
              url('assets/images/faces/pic-1.png')}}" alt="image">
              <span class="availability-status online"></span>
            </div>
            <div class="nav-profile-text">
              <p class="mb-1 text-black">{{ Auth::user()->name }}</p>
            </div>
          </a>
          <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
            <a class="dropdown-item" href="#">
              <i class="mdi mdi-cached me-2 text-success"></i> User Profile </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <i class="mdi mdi-account me-2 text-primary"></i> Profile </a>
              <a class="dropdown-item" href="#">
                <i class="mdi mdi-brightness-7 me-2 text-primary"></i> Edit Profile </a>
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-account-check me-2 text-primary"></i> Change password </a>
                  <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                        
                <button class="badge badge-success">
                  Log out
                  <i class="mdi mdi-logout"></i>
                </button>
                    </x-responsive-nav-link>
                </form>
              </div>
            </li>
            <li class="nav-item nav-logout d-none d-lg-block">
            <form method="POST" action="{{ route('logout') }}">
              @csrf

              <x-responsive-nav-link :href="route('logout')"
                      onclick="event.preventDefault();
                                  this.closest('form').submit();">
            <i class="mdi mdi-logout"></i>
              </x-responsive-nav-link>
          </form>
        </li>
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="mdi mdi-menu"></span>
      </button>
    </div>
  </nav>