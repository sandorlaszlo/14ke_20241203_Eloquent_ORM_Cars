<x-layout>
    <h1>Create Car</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form method="POST" action="{{ route('cars.store') }}">
        @csrf
        <div class="mb-3">
            <label for="type" class="form-label">Type: </label>
            <input type="text" class="form-control" id="type" name="type">
        </div>
        <div class="mb-3">
            <label for="model" class="form-label">Model: </label>
            <input type="text" class="form-control" id="model" name="model">
        </div>
        <div class="mb-3">
            <label for="year" class="form-label">Year: </label>
            <input type="number" class="form-control" id="year" name="year">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price: </label>
            <input type="number" class="form-control" id="price" name="price">
        </div>
        <div class="mb-3">
            <label for="color" class="form-label">Color: </label>
            <input type="color" class="form-control" id="color" name="color">
        </div>

        <div class="mb-3">
            <label for="category_id" class="form-label">Category: </label>
            <select name="category_id" id="category_id" class="form-select">
                    <option value="">Select a category</option>
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-layout>
