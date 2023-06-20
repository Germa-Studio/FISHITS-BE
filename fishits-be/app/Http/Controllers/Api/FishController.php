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

    public function show(string $id)
    {
        $fish = Fish::find($id);
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
        // store controller with foreign key locations_id
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'weight' => 'required',
            'price' => 'required',
            'locations_id' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'data' => [
                    'message' => $validator->errors()
                ]
            ]);
        }

        $fish = Fish::create([
            'name' => $request->name,
            'weight' => $request->weight,
            'price' => $request->price,
            'locations_id' => $request->locations_id
        ]);

        return response()->json([
            'status' => 'success',
            'data' => [
                'fish' => $fish
            ]
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'weight' => 'required',
            'price' => 'required',
            'locations_id' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'data' => [
                    'message' => $validator->errors()
                ]
            ]);
        }

        $fish = Fish::find($id);
        $fish->update([
            'name' => $request->name,
            'weight' => $request->weight,
            'price' => $request->price,
            'locations_id' => $request->locations_id
        ]);

        return response()->json([
            'status' => 'success',
            'data' => [
                'fish' => $fish
            ]
        ]);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $fish = Fish::find($id);
        $fish->delete();

        return response()->json([
            'status' => 'success',
            'data' => [
                'fish' => $fish
            ]
        ]);
    }
}
