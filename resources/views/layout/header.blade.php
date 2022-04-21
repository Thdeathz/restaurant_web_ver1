<!-- Topbar Start -->
<div class="navbar-custom topnav-navbar topnav-navbar-dark">
    <div class="container-fluid dropdown">
        <!-- LOGO -->
        <a href="index.html" class="topnav-logo">
                    <span class="topnav-logo-lg">
                        <img src="assets/images/logo-light.png" alt="" height="16">
                    </span>
            <span class="topnav-logo-sm">
                        <img src="assets/images/logo_sm.png" alt="" height="16">
                    </span>
        </a>
        @if(session()->has('id'))
            @include('layout.dropdown')
        @endif
    </div>
</div>
<!-- end Topbar -->
