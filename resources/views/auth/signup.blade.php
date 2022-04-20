@extends('layout.signup')
@section('signup_form')
    <form method="post" action="{{ route('process_signup') }}">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input class="form-control" type="text" name="name" id="name" placeholder="Enter your name" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" type="email" name="email" id="email" required placeholder="Enter your email">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
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
            <label for="password">Confirm password</label>
            <div class="input-group input-group-merge">
                <input type="password" id="password" class="form-control" placeholder="Enter your password">
                <div class="input-group-append" data-password="false">

                </div>
            </div>
        </div>
        <div class="form-group mb-0 text-center">
            <button class="btn btn-primary" type="submit"> Sign Up </button>
        </div>
    </form>
@endsection
