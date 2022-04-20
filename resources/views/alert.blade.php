@include('sweetalert::alert')
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('toast_error'))
    <div class="alert alert-danger">
        {{ session('toast_error') }}
    </div>
@endif

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


