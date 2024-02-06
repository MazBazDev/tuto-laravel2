@extends("layouts.app")

@section("app")
    <h1>Show house {{ $house->id }}</h1>
    <a href="{{ route("houses.edit", $house) }}" class="btn btn-primary">Edit</a>
    <div class="card">
        <div class="card-body">
            Address : {{ $house->address }}
            Created : {{ $house->created_at }}
        </div>
    </div>
@endsection
