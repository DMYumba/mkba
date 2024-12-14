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
        <a class="nav-link" href="{{ route('client.dashboard') }}">
          <span class="menu-title">Dashboard</span>
          <i class="mdi mdi-home menu-icon"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-title">Motor vehicle</span>
          <i class="menu-arrow"></i>
          <i class="mdi mdi-car menu-icon"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('client.services.vehicles.customs_clearing') }}">Customs clearing</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('client.services.vehicles.clearing_deliver') }}">Clearing and deliverying</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('client.services.vehicles.full_service') }}">Full service (sourcing,clearing & deliverying)</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
          <span class="menu-title">Goods</span>
          <i class="menu-arrow"></i>
          <i class="mdi mdi-cart menu-icon"></i>
        </a>
        <div class="collapse" id="general-pages">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('client.services.goods.customs_clearing') }}"> Customs clearing </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('client.services.goods.full_service') }}"> Full service (sourcing,clearing, code securing & deliverying) </a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item nav-logout d-none d-lg-block">
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
    </li>
    </ul>
  </nav>