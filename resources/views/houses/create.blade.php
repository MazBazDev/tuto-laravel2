@extends("layouts.app")

@section("app")
    <div class="card">
        <div class="card-body">
            <form action="{{ route("houses.store") }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <input type="text" class="form-control" name="address">

                    @error('address')
                        <span>{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="check" name="display">
                    <label class="form-check-label" for="check">Display</label>
                </div>

                <button type="submit" class="btn btn-success">Save</button>
            </form>
        </div>
    </div>
@endsection
