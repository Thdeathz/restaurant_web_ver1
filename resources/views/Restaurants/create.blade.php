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
            <form action="{{ route('restaurants.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                Tên nhà hàng:
                <input type="text" name="name">
                <br>
                Mức giá:
                <input type="text" name="price">
                <br>
                Địa chỉ:
                <input type="text" name="address">
                <br>
                Ảnh
                <input type="file" name="image">
                <br>
                Mô tả:
                <textarea name="description"></textarea>
                <br>
                <button type="submit">Thêm</button>
            </form>
        </div>
    </div>
@endsection
