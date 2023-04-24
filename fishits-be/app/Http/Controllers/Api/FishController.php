<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Fish;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;

class FishController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fish = Fish::all();
        return response()->json([
            'status' => 'success',
            'data' => [
                'fish' => $fish
            ]
         ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'weight' => 'required',
            'price' => 'required|int',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'data' => [],
                'message' => $validator->errors(),
                'success' => false
            ]);
        }

        $fish = Fish::create([
            'name' => $request->name,
            'weight' => $request->weight,
            'price' => $request->price,
        ]);

        return response()->json([
            'status' => 'success',
            'data' => [
                'fish' => $fish
            ]
         ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
