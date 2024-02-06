@extends("layouts.app")

@section("app")
    <a href="{{ route("houses.create") }}" class="btn btn-primary">Create house</a>

    <hr>

    <div class="row">
        @foreach($houses as $house)
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        Address : {{ $house->address }}
                        Created : {{ $house->created_at  }}
                    </div>
                    <a href="{{ route("houses.show", $house) }}" class="btn btn-primary">Show</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
