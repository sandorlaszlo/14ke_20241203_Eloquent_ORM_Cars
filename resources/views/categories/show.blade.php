<x-layout>
    <h1>{{$category->name}}</h1>
    <p>Registered at: {{$category->created_at}}</p>
    <b>Available cars in this category</b>
    <ul>
    @forelse ($category->cars as $car)
        <li>{{$car->type}} {{$car->model}}</li>    
    @empty
        <li>No cars in this category</li>
    @endforelse
    </ul>

    <a href="{{route('categories.edit', $category->id)}}" class="btn btn-warning mb-3">Edit</a>

    <form action="{{route('categories.destroy', $category->id)}}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="Delete" class="btn btn-danger">
    </form>

</x-layout>