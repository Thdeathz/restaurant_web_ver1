<ul class="list-unstyled topbar-right-menu float-right mb-0">
    <li class="dropdown notification-list">
        <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" data-toggle="dropdown" id="topbar-userdrop" href="#" role="button" aria-haspopup="true"
           aria-expanded="false">
            <span>
                <span class="account-user-name">{{ session()->get('name') }}</span>
                <span class="account-position">------</span>
            </span>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu profile-dropdown" aria-labelledby="topbar-userdrop">
            <!-- item-->
            <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Chào mừng !</h6>
            </div>
            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
                <i class="mdi mdi-account-circle mr-1"></i>
                <span>Thông tin tài khoản</span>
            </a>

            <!-- item-->
            <a href="{{ route('logout') }}" class="dropdown-item notify-item">
                <i class="mdi mdi-logout mr-1"></i>
                <span>Đăng xuất</span>
            </a>

        </div>
    </li>
</ul>
