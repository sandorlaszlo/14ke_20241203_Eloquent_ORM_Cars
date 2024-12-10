<x-layout>
    <h1>{{$category->name}}</h1>
    <p>Registered at: {{$category->created_at}}</p>
    <b>Available cars in this category</b>
    <ul>
    @foreach ($category->cars as $car)
        <li>{{$car->type}} {{$car->model}}</li>    
    @endforeach
    </ul>
</x-layout>