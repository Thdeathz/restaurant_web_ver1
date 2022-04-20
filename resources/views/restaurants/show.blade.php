@extends('layout.master')
@section('content')
<div class="container-fluid">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">eCommerce</a></li>
                        <li class="breadcrumb-item active">Product Details</li>
                    </ol>
                </div>
                <h4 class="page-title">Thông tin chi tiết</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-5">
                            <!-- Product image -->
                            <a href="javascript: void(0);" class="text-center d-block mb-4">
                                <img src="{{ asset('storage/images/' . $each->image) }}" class="img-fluid" style="max-width: 400px;" alt="A wonderfull restaurant">
                            </a>
                        </div>

                        <div class="col-lg-7">
                            <h3 class="mt-0">{{ $each->name }}<a href="{{ route('restaurants.edit', $each) }}" class="text-muted"><i class="mdi mdi-square-edit-outline ml-2"></i></a> </h3>
                            <p class="mb-1">Chỉnh sửa lần cuối: {{ $each->updated_at->format('d/m/Y') }} </p>
                            <p class="font-16">
                                <span class="text-warning mdi mdi-star"></span>
                                <span class="text-warning mdi mdi-star"></span>
                                <span class="text-warning mdi mdi-star"></span>
                                <span class="text-warning mdi mdi-star"></span>
                                <span class="text-warning mdi mdi-star"></span>
                            </p>

                            <div class="mt-4">
                                <h6 class="font-14">Tầm giá</h6>
                                <h3>{{ $each->price }} $</h3>
                            </div>


                            <div class="mt-4">
                                <h6 class="font-14">Địa chỉ</h6>
                                <p>{{ $each->address }}</p>
                            </div>

                            <div class="mt-4">
                                <h6 class="font-14">Mô tả</h6>
                                <p>{{ $each->description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
