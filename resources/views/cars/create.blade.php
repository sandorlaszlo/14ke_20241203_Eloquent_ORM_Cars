<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Create Car</h1>

        @if($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <p>{{$error}}</p>
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
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>
