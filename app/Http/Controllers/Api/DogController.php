<?php

namespace App\Http\Controllers\Api;

use App\Models\Dog;
use Illuminate\Http\Request;
use App\Http\Requests\DogRequest;
use App\Http\Controllers\Controller;

class DogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Dog::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DogRequest $request)
    {
        return Dog::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Dog::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DogRequest $request, string $id)
    {
        $dog = Dog::findOrFail($id);
        $dog->update($request->validated());
        return $dog;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Dog::findOrFail($id)->delete();
    }
}