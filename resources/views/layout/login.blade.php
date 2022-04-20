<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Đăng nhập</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/app-creative.min.css') }}" rel="stylesheet" type="text/css" id="light-style" />
</head>

<body class="authentication-bg" data-layout-config='{"darkMode":false}'>

    <div class="account-pages mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card">
                        <div class="card-body p-4">
                            @yield('login_form')
                         </div>
                        <!-- end card -->
                        <div class="row mt-1">
                            <div class="col-12 text-center">
                                <p class="text-muted">Chưa đăng ký tài khoản? <a href="{{ route('signup') }}" class="text-muted ml-1"><b>Đăng ký</b></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="{{ asset('js/vendor.min.js') }}"></script>
<script src="{{ asset('js/app.min.js') }}"></script>

</body>
</html>
