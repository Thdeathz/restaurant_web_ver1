@extends('layout.master')
@section('content')
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ session('tasks_url') }}"><---Quay lại</a></li>
                        </ol>
                    </div>
                    <h4 class="page-title">Thêm nhà hàng</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        @if ($errors->any())
            <div class="card-header">
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('restaurants.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="name">Tên nhà hàng</label>
                                        <input type="text" name="name" id="name" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="price">Mức giá</label>
                                        <input type="text" name="price" id="price" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Địa chỉ</label>
                                        <input type="text" name="address" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="description">Mô tả</label>
                                        <textarea class="form-control" name="description" id="description" rows="5" ></textarea>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="form-group mt-3 mt-xl-0">
                                        <label for="name" class="mb-0">Hình ảnh</label>
                                        <p class="text-muted font-14">Kích thước đề nghị 800x400 (px).</p>
                                        <input type="file" name="image">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Thêm</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
