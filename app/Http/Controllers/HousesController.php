<?php

namespace App\Http\Controllers;

use App\Http\Requests\HouseRequest;
use App\Models\House;
use Illuminate\Http\Request;

class HousesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $houses = House::where("display", true)->orderBy('order', 'ASC')->get();

        return view("houses.index", [
            "houses" => $houses,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("houses.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HouseRequest $request)
    {
        House::create([
            "address" => $request->address,
            "display" => $request->has("display")
        ]);

        return redirect()->route("houses.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(House $house)
    {
        return view("houses.show", [
            "house" => $house
        ]);
    }

    /**
     * Edit the specified resource.
     */
    public function edit(House $house)
    {
        return view("houses.edit", [
            "house" => $house
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HouseRequest $request, House $house)
    {
        $house->update([
            "address" => $request->address,
            "display" => $request->display
        ]);

        return redirect()->route("houses.edit", $house);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(House $house)
    {
        $house->delete();

        return redirect()->route("houses.index");
    }
}
