<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Food::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'food_name' => 'required',
            'food_type' => 'required',
            'food_composition' => 'required',
            'price_of_one_serving_of_food' => 'required'
        ]);

        return Food::create($request->all());
    }

    /**
     * Search for a name
     */
    public function search(string $name)
    {
        return Food::where('food_name', 'like', '%'.$name.'%')->get();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Food::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $food = Food::find($id);
        $food->update($request->all());
        return $food;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return Food::destroy($id);
    }
}
