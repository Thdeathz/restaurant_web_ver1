@extends('layout.master')
@section('content')
    <div class="card">
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
        <div class="card-body">
            <a class="btn btn-success" href="{{ route('restaurants.create') }}">
                Thêm
            </a>
            <form class="float-right form-group form-inline">
                <label class="mr-2">Search:</label>
                <input type="search" name="q" value="{{ $search }}" class="form-control">
            </form>
            <div class="container-fluid pt-5">
                <div class="row px-xl-5 pb-3">
                    @foreach($data as $each)
                    <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">

                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="{{ asset('storage/images/') . $each->image }}" alt="A image">
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3">{{ $each->name }}</h6>
                                <div class="d-flex justify-content-center">
                                    <h6>${{ $each->price }}</h6><h6 class="text-muted ml-2"></h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <a href="" class="btn btn-sm text-dark p-0">Chi tiết</a>
                                <a href="{{ route('restaurants.edit', $each) }}" class="btn btn-sm text-dark p-0">Chỉnh sửa</a>
                            </div>
                            <div class="d-flex justify-content-sm-around bg-light border">
                                <form action="{{ route('restaurants.destroy', $each) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm rounded-0" type="submit" data-toggle="tooltip" data-placement="bottom" title="Delete">X</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <nav>
                <ul class="pagination pagination-rounded mb-0">
                    {{ $data->links() }}
                </ul>
            </nav>
        </div>
    </div>
@endsection
