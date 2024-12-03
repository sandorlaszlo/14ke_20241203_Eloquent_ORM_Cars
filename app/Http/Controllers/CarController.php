<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCarRequest;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::all();
        return view('cars.index', [
            'cars' => $cars
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cars.create');
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

        Car::create($request->only(['type', 'model', 'year', 'price', 'color']));

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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
