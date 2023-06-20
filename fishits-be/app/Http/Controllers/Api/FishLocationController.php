<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fish;
use App\Models\Location;

class FishLocationController extends Controller
{
    public function index(Fish $fish){
        $locations = $fish->locations;
        return response()->json([
            'status' => 'success',
            'data' => [
                'locations' => $locations
            ]
        ]);
    }

    public function store(Request $request, Fish $fish)
    {
        $locationIds = $request->input('locations_id');

        $fish->locations()->attach($locationIds);

        return response()->json('Locations attached successfully');
    }

    public function destroy(Request $request, Fish $fish)
    {
        $locationIds = $request->input('locations_id');

        $fish->locations()->detach($locationIds);

        return response()->json('Locations detached successfully');
    }
}
