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
            <form action="{{ route('restaurants.update', $each )}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                Tên nhà hàng:
                <input type="text" name="name" value="{{ $each->name }}">
                <br>
                Mức giá:
                <input type="text" name="price" value="{{ $each->price }}">
                <br>
                Địa chỉ:
                <input type="text" name="address" value="{{ $each->address }}">
                <br>
                Ảnh
                <input type="file" name="image">
                <br>
                <img class="img-fluid w-100" src="{{ public_path() . '/' . $each->image }}" alt="A image">
                <br>
                Mô tả:
                <textarea name="description">{{ $each->description }}</textarea>
                <br>
                <button type="submit">Cập nhật</button>
            </form>
        </div>
    </div>
@endsection
