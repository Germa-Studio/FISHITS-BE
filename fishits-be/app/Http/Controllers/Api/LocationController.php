<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Location;

class LocationController extends Controller
{
    // ---------Basic--------------------------
    public function index(){
        $location = Location::all();
        return response()->json([
            'status' => 'success',
            'data' => [
                'location' => $location
            ]
        ]);
    }

    public function show(string $id){
        $location = Location::find($id);
        return response()->json([
            'status' => 'success',
            'data' => [
                'location' => $location
            ]
        ]);
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            's' => 'required',
            'e' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'data' => [],
                'message' => $validator->errors(),
                'success' => false
            ]);
        }

        $location = Location::create([
            'name' => $request->name,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            's' => $request->s,
            'e' => $request->e,
        ]);

        return response()->json([
            'status' => 'success',
            'data' => [
                'location' => $location
            ]
        ]);
    }

    public function update(Request $request, string $id){
        $location = Location::find($id);

        if(!$location){
            return response()->json([
                'status' => 'error',
                'message' => 'location not found'
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            's' => 'required',
            'e' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'data' => [],
                'message' => $validator->errors(),
                'success' => false
            ]);
        }

        $location->update([
            'name' => $request->name,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            's' => $request->s,
            'e' => $request->e,
        ]);

        return response()->json([
            'status' => 'update success'
        ]);
    }

    public function destroy(string $id){
        $location = Location::find($id);

        if(!$location){
            return response()->json([
                'status' => 'error',
                'message' => 'location not found'
            ], 404);
        }

        $location->delete();

        return response()->json([
            'status' => 'delete success'
        ]);
    }

    //-----------------Advanced------------------------

    // show fish by location
    public function showFishByLocation(string $id){
        $location = Location::find($id);
        $fish = $location->fish;
        return response()->json([
            'status' => 'success',
            'data' => [
                'fish' => $fish
            ]
        ]);
    }
}
