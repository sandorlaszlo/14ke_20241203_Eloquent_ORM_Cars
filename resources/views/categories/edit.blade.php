<x-layout>
    <h1>Rename category</h1>
    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" 
                class="form-control @error('name') is-invalid @enderror" 
                value="{{old('name') ?? $category->name}}">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <input type="submit" value="Update" class="btn btn-primary">
    </form>
</x-layout>
