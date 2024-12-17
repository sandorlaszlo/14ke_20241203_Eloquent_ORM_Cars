<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCarRequest;
use App\Models\Car;
use App\Models\Category;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$cars = Car::all();
        $cars = Car::with('category')->get();
        // dd($cars);
        return view('cars.index', [
            'cars' => $cars
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('cars.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCarRequest $request)
    {
        // $car = new Car();
        // $car->type = $request->type;
        // $car->model = $request->model;
        // $car->year = $request->year;
        // $car->price = $request->price;
        // $car->color = $request->color;
        // $car->save();

        // Car::create($request->only(['type', 'model', 'year', 'price', 'color']));

        $validated = $request->validated();
        Car::create($validated);

        return redirect()->route('cars.index')->with('success', 'Car created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $car = Car::find($id);
        // if (!$car) {
        //     return redirect()->route('cars.index');
        //     // abort(404);
        // }

        $car = Car::findOrFail($id);

        return view('cars.show', [
            'car' => $car
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $car = Car::findOrFail($id);
        return view('cars.edit', [
            'car' => $car
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreCarRequest $request, string $id)
    {
        //UPDATE cars SET (type='Octavia', model = 'Skoda' ....) WHERE id = 2
        $car = Car::findOrFail($id);
        $validated = $request->validated();
        $car->update($validated);
        return redirect()->route('cars.show', $id)->with('success', 'Car updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $car = Car::findorFail($id);
        $car->delete();
        return redirect()->route('cars.index')->with('success', 'Car deleted successfully');

    }
}
