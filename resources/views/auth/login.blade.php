@extends('layout.login')
@section('login_form')
    <form method="post" action="{{ route('process_login') }}">
        @csrf
        <div class="form-group">
            <label >Email</label>
            <input class="form-control" type="email" placeholder="Enter your email" name="email">
        </div>

        <div class="form-group">
            <label>Password</label>
            <div class="input-group input-group-merge">
                <input type="password" name="password" class="form-control" placeholder="Enter your password">
                <div class="input-group-append" data-password="false">
                    <div class="input-group-text">
                        <span class="password-eye"></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group mb-3">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked>
                <label class="custom-control-label" for="checkbox-signin">Remember me</label>
            </div>
        </div>
        <div class="form-group mb-0 text-center">
            <button class="btn btn-primary" type="submit"> Log In </button>
        </div>
    </form>
@endsection
