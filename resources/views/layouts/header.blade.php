<div class="navbar-custom bg-head">
    <ul class="list-unstyled topbar-menu float-end mb-0">
        <li class="dropdown notification-list d-lg-none">
            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <i class="dripicons-search noti-icon text-white"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                <form class="p-3">
                    <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                </form>
            </div>
        </li>

        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <i class="fa fa-bell noti-icon" style="color: #ffffff; font-weight: bold;"></i>
                <span class="noti-icon-badge"></span>
            </a>
        </li>

        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <i class="fa fa-comment noti-icon" style="color: #ffffff; font-weight: bold;"></i>
                <span class="noti-icon-badge"></span>
            </a>
        </li>

        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle arrow-none me-0 nav-user" data-bs-toggle="dropdown" role="button" aria-haspopup="false" aria-expanded="false">
                <span class="account-user-avatar"> 
                    <img src="{{ URL::asset(Auth::user()->profile != '' ? 'assets/images/profile/'. Auth::user()->profile : 'assets/images/dp.png') }}" height="40px" alt="user-image" class="rounded-circle">
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                <div class=" dropdown-header noti-title">
                    <h6 class="text-overflow m-0">PROFILE</h6>
                </div>

                <a href="{{route('user')}}" class="dropdown-item notify-item">
                    <i class="mdi mdi-account-edit me-1"></i>
                    <span>Profile Setting</span>
                </a>
                <a href="{{route('password')}}" class="dropdown-item notify-item">
                    <i class="mdi mdi-lock-reset me-1"></i>
                    <span>Change Password</span>
                </a>
                <a href="{{route('logout')}}" class="dropdown-item notify-item">
                    <i class="mdi mdi-logout me-1"></i>
                    <span>Logout</span>
                </a>
            </div>
        </li>

    </ul>
    <button class="d-lg-none d-xl-none d-md-none button-menu-mobile open-left">
        <i class="mdi mdi-menu" style="color:#fffffffa"></i>
    </button>
    <div class="app-search dropdown d-none d-lg-block">
        <form>
            <div class="input-group">
                <input type="text" class="form-control dropdown-toggle" placeholder="Search..." id="top-search">
                <span class="mdi mdi-magnify search-icon"></span>
                <button class="input-group-text btn-dark" type="submit">Search</button>
            </div>
        </form>
    </div>
</div>