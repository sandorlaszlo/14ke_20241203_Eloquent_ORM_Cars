<h1>Cars</h1>
<ul>
@foreach ($cars as $car)
    <li><a href="{{route('cars.show', $car->id)}}">{{$car->type}} {{$car->model}}</a></li>
@endforeach
</ul>