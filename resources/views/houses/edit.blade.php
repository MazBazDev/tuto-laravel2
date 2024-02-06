@extends("layouts.app")

@section("app")
    <h1>Edit house {{ $house->id }}</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route("houses.update", $house) }}" method="POST">
                @csrf
                @method('PATCH')

                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" value="{{ old("address", $house->address) }}">

                    @error('address')
                        <span>{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="check" name="display" @checked($house->display)>
                    <label class="form-check-label" for="check">Display</label>
                </div>

                <button type="submit" class="btn btn-success">Save</button>
            </form>

            <form action="{{ route("houses.destroy", $house) }}" method="POST">
                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">Delete</button>
            </form>

        </div>
    </div>
@endsection
