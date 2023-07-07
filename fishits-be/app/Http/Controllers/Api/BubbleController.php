<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Bubble;
// validate use
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class BubbleController extends Controller
{
    public function index()
    {
        $bubbles = Bubble::all();
        return response()->json($bubbles);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'latitude' => 'required',
            'longitude' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $bubble = Bubble::create($request->all());
        return response()->json($bubble, 201);
    }

    public function show($id)
    {
        $bubble = Bubble::find($id);
        if (is_null($bubble)) {
            return response()->json(['message' => 'Record not found'], 404);
        }
        return response()->json($bubble);
    }

    public function update(Request $request, $id)
    {
        $bubble = Bubble::find($id);
        if (is_null($bubble)) {
            return response()->json(['message' => 'Record not found'], 404);
        }
        $bubble->update($request->all());
        return response()->json($bubble);
    }

    public function destroy($id)
    {
        $bubble = Bubble::find($id);
        if (is_null($bubble)) {
            return response()->json(['message' => 'Record not found'], 404);
        }
        $bubble->delete();
        return response()->json(null, 204);
    }
}
