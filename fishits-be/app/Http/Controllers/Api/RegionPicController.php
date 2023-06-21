<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RegionPic;
use Illuminate\Support\Facades\Validator;

class RegionPicController extends Controller
{
    public function index(){
        $regionPic = RegionPic::all();
        return response()->json([
            'status' => 'success',
            'data' => [
                'regionPic' => $regionPic
            ]
        ]);
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'month' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'data' => [],
                'message' => $validator->errors(),
                'success' => false
            ]);
        }

        if($request->hasFile('file')){
            $file = $request->file('file');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->storeAs('public/regionPic', $filename);

            $regionPic = RegionPic::create([
                'name' => $request->name,
                'file' => $filename,
                'month' => $request->month,
            ]);

            return response()->json([
                'status' => 'success',
                'data' => [
                    'regionPic' => $regionPic
                ]
            ]);
        }

        return response()->json([
            'status' => 'failed',
            'data' => [
                'regionPic' => []
            ]
        ]);
    }
}
