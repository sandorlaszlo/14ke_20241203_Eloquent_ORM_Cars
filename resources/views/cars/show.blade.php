<x-layout>
    <h1>Model: {{ $car->model }}</h1>
    <p>Type: {{ $car->type }}</p>
    <p>Color: {{ $car->color }}</p>
    <p>Price: ${{ $car->price }}</p>
    <p>Year: {{ $car->year }}</p>
    <p>Category: {{ $car->category->name }}</p>

    <a class="btn btn-warning" href="{{ route('cars.edit', $car->id) }}">Edit</a>

    <form method="POST" action="{{ route('cars.destroy', $car->id) }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger my-2" href="">Delete</button>
    </form>
</x-layout>
