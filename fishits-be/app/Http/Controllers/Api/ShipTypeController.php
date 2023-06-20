<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ShipType;
use Illuminate\Support\Facades\Validator;

class ShipTypeController extends Controller
{
    public function index(){
        $shipType = ShipType::all();
        return response()->json([
            'status' => 'success',
            'data' => [
                'shipType' => $shipType
            ]
        ]);
    }

    public function show(string $id){
        $shipType = ShipType::find($id);
        return response()->json([
            'status' => 'success',
            'data' => [
                'shipType' => $shipType
            ]
        ]);
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'machine' => 'required',
            'bbm' => 'required',
            'speed' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'data' => [],
                'message' => $validator->errors(),
                'success' => false
            ]);
        }

        $shipType = ShipType::create([
            'name' => $request->name,
            'machine' => $request->machine,
            'bbm' => $request->bbm,
            'speed' => $request->speed,
        ]);

        return response()->json([
            'status' => 'success',
            'data' => [
                'shipType' => $shipType
            ]
        ]);
    }

    public function update(Request $request, string $id){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'machine' => 'required',
            'bbm' => 'required',
            'speed' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'data' => [],
                'message' => $validator->errors(),
                'success' => false
            ]);
        }

        $shipType = ShipType::find($id);
        $shipType->update([
            'name' => $request->name,
            'machine' => $request->machine,
            'bbm' => $request->bbm,
            'speed' => $request->speed,
        ]);

        return response()->json([
            'status' => 'success',
            'data' => [
                'shipType' => $shipType
            ]
        ]);
    }

    public function destroy(string $id){
        $shipType = ShipType::find($id);
        $shipType->delete();

        return response()->json([
            'status' => 'success',
            'data' => [
                'shipType' => $shipType
            ]
        ]);
    }
}
