<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Restaurant - Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <!-- App favicon -->

    <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/app-creative.min.css') }}" rel="stylesheet" type="text/css" id="light-style" />
</head>

<body data-layout-config='{"darkMode":false}'>

<!-- NAVBAR START -->
<nav class="navbar navbar-expand-lg py-lg-3 navbar-dark">
    <div class="container">

        <!-- logo -->
        <a href="index.html" class="navbar-brand mr-lg-5">
            <img src="assets/images/logo.png" alt="" class="logo-dark" height="18" />
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <i class="mdi mdi-menu"></i>
        </button>

        <!-- menus -->
        <div class="collapse navbar-collapse" id="navbarNavDropdown">

            <!-- left menu -->
            <ul class="navbar-nav mr-auto align-items-center">
                <li class="nav-item mx-lg-1">
                    <a class="nav-link active" href="">Trang chủ</a>
                </li>
                @if(!session()->get('id'))
                    <li class="nav-item mx-lg-1">
                        <a class="nav-link" href="{{ route('login') }}">Đăng nhập</a>
                    </li>
                    <li class="nav-item mx-lg-1">
                        <a class="nav-link" href="{{ route('signup') }}">Đăng ký</a>
                    </li>
                @endif
            </ul>

            <!-- right menu -->
            @if(session()->get('id'))
                <ul class="navbar-nav ml-auto align-items-center float-right mb-0">
                    <li class="nav-item mr-0 dropdown notification-list">
                        <a href="#" class="btn btn-sm btn-light d-none d-lg-inline-flex " data-toggle="dropdown" aria-haspopup="true">
                            {{ session()->get('name') }}
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
            @endif

        </div>
    </div>
</nav>
<!-- NAVBAR END -->

<!-- START HERO -->
<section class="hero-section">
    <div class="container text-center">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-5">
                <div class="mt-md-4">
                    <h2 class="text-white font-weight-normal mb-4 mt-3 hero-title">
                        Chào mừng tới trang web giới thiệu nhà hàng
                    </h2>

                    @if(!session()->get('id'))
                        <p class="mb-4 font-16 text-white-50">Mời đăng nhập để biết thêm thông tin</p>
                        <a href="{{ route('login') }}" class="btn btn-success">Đăng nhập </a>
                        <a href="{{ route('signup') }}" class="btn btn-primary ml-3">Đăng ký</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END HERO -->

<script src="{{ asset('js/vendor.min.js') }}"></script>
<script src="{{ asset('js/app.min.js') }}"></script>

</body>

</html>
