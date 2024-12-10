<x-layout>
    <h1>Update Car</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form method="POST" action="{{ route('cars.update', $car->id) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="type" class="form-label">Type: </label>
            <input type="text" class="form-control" id="type" name="type" value="{{ $car->type }}">
        </div>
        <div class="mb-3">
            <label for="model" class="form-label">Model: </label>
            <input type="text" class="form-control" id="model" name="model" value="{{ $car->model }}">
        </div>
        <div class="mb-3">
            <label for="year" class="form-label">Year: </label>
            <input type="number" class="form-control" id="year" name="year" value="{{ $car->year }}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price: </label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $car->price }}">
        </div>
        <div class="mb-3">
            <label for="color" class="form-label">Color: </label>
            <input type="color" class="form-control" id="color" name="color" value="{{ $car->color }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-layout>
