<x-layout>
    <h1>Categories</h1>
    @foreach ($categories as $category)
        <li><a href="{{route('categories.show', $category->id)}}">{{ $category->name }}</a></li>
    @endforeach
</x-layout>