@extends('layout.master')
@section('content')
    <div class="container-fluid">
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
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Nhà hàng</h4>
                </div>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-sm-4">
                <a href="{{ route('restaurants.create') }}" class="btn btn-success btn-rounded mb-3"><i class="mdi mdi-plus"></i> Thêm nhà hàng</a>
            </div>
            <div class="col-sm-8">
                <div class="text-sm-right">
                    <div class="app-search dropdown">
                        <form>
                            <div class="input-group">
                                <input type="search" name="q" class="form-control" value="{{ $search }}" placeholder="Search...">
                                <span class="mdi mdi-magnify search-icon"></span>
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($data as $each)
            <div class="col-md-4 col-xl-4">
                <!-- project card -->
                <div class="card d-block">
                    <img class="card-img-top" src="{{ public_path() . '/storage/images/' . $each->image }}" style="max-height: 200px;" alt="A wonderfull restaurant">
                    <div class="card-body">
                        <div class="dropdown card-widgets">
                            <a href="#" class="dropdown-toggle arrow-none" data-toggle="dropdown" aria-expanded="false">
                                <i class="dripicons-dots-3"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" style="">
                                <a href="{{ route('restaurants.edit', $each) }}" class="dropdown-item"><i class="mdi mdi-pencil mr-1"></i>Chỉnh sửa</a>
                                <form action="{{ route('restaurants.destroy', $each) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="dropdown-item" type="submit"><i class="mdi mdi-delete mr-1"></i>Xóa</button>
                                </form>
                            </div>
                        </div>

                        <h4 class="mt-0">
                            {{ $each->name }}
                        </h4>

                        <p class="text-muted font-13 mb-3">
                            {{ $each->address }}
                            <br>
                            <a href="{{ route('restaurants.show', $each) }}" class="font-weight-bold text-muted font-15">...Xem chi tiết</a>
                        </p>

                        <p class="mb-1">
                            <span class="pr-2 text-nowrap mb-2 d-inline-block">
                                <b>{{ $each->price }}</b> $
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <nav>
            <ul class="pagination pagination-rounded mb-0">
                {{ $data->links() }}
            </ul>
        </nav>
    </div>
@endsection
