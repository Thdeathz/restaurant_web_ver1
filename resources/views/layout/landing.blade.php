@extends('layout.master')
@section('content')
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
@endsection
