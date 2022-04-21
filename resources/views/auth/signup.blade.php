@extends('layout.signup')
@section('signup_form')
    @include('sweetalert::alert')
    <form method="post" action="{{ route('process_signup') }}">
        @csrf
        <div class="form-group">
            <label for="name">Họ và tên</label>
            <input class="form-control" type="text" name="name" id="name" placeholder="Enter your name" value="{{ old('name') }}">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" type="email" name="email" id="email" required placeholder="Enter your email" value="{{ old('email') }}">
        </div>

        <div class="form-group">
            <label for="password">Mật khẩu</label>
            <div class="input-group input-group-merge">
                <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password">
                <div class="input-group-append" data-password="false">
                    <div class="input-group-text">
                        <span class="password-eye"></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="password">Xác nhận mật khẩu</label>
            <div class="input-group input-group-merge">
                <input type="password" name="confirm_password" id="password" class="form-control" placeholder="Enter your password">
                <div class="input-group-append" data-password="false">

                </div>
            </div>
        </div>
        <div class="form-group mb-0 text-center">
            <button class="btn btn-primary" type="submit"> Đăng ký </button>
        </div>
    </form>
@endsection
