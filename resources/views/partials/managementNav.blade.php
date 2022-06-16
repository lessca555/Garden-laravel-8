<div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="../../../assets/management-assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, {{ Auth::user()->name }}</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-divider"></div>
                <form method="POST" action="/logout">
                @csrf
                        <a class="dropdown-item has-icon text-danger" href="/logout"
                            onclick="event.preventDefault();
                                this.closest('form').submit();">
                            <i class="fas fa-sign-out-alt"></i>
                            <span>Logout</span>
                        </a>
                    
                </form>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
            <div class="sidebar-brand">
                <a href="index.html">Hotel Hebat</a>
            </div>
            <div class="sidebar-brand sidebar-brand-sm">
                <a href="index.html">HBT</a>
            </div>
            @if (Auth::user()->role == 'admin')
                <ul class="sidebar-menu">
                    <li class="menu-header">Dashboard</li>
                    <li class="{{ (request()->is('admin/dashboard')) ? 'active' : '' }}"><a class="nav-link" href="/admin/dashboard"><i class="fas fa-home"></i><span>Dashboard</span></a></li>
                    <li class="menu-header">Menu</li>
                    <li class="{{ (request()->is('admin/rooms')) ? 'active' : '' }}"><a class="nav-link" href="/admin/rooms"><i class="fas fa-hotel"></i><span>Rooms</span></a></li>
                    <li class="{{ (request()->is('admin/roomFacilities')) ? 'active' : '' }}"><a class="nav-link" href="/admin/roomFacilities"><i class="fas fa-shower"></i><span>Room Facilities</span></a></li>
                    <li class="{{ (request()->is('admin/hotelFacilities')) ? 'active' : '' }}"><a class="nav-link" href="/admin/hotelFacilities"><i class="fas fa-dumbbell"></i><span>Hotel Facilities</span></a></li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-users"></i> <span>Users</span></a>
                        <ul class="dropdown-menu">
                          <li><a class="nav-link" href="/admin/adminAccounts">Admin</a></li>
                          <li><a class="nav-link" href="/admin/receptionistAccounts">Receptionist</a></li>
                          <li><a class="nav-link" href="/admin/guestAccounts">Guest</a></li>
                        </ul>
                    </li>
                </ul>
            @else
                <ul class="sidebar-menu">
                    <li class="menu-header">Dashboard</li>
                    <li class="{{ (request()->is('receptionist/dashboard')) ? 'active' : '' }}"><a class="nav-link" href="/receptionist/dashboard"><i class="fas fa-home"></i><span>Dashboard</span></a></li>
                    <li class="menu-header">Menu</li>
                    <li class="{{ (request()->is('receptionist/reservations')) ? 'active' : '' }}"><a class="nav-link" href="/receptionist/reservations"><i class="fas fa-clipboard-list"></i><span>Reservation Data</span></a></li>
                </ul>
            @endif
        </aside>
      </div>