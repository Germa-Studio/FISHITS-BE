<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pendaratan;
use App\Models\Fish;
use App\Models\User;
use Illuminate\Http\Request;

class PendaratanController extends Controller
{
    // Show all pendaratan
    public function index()
    {
        $pendaratans = Pendaratan::all();
        return response()->json([
            'success' => true,
            'message' => 'Daftar data pendaratan',
            'data' => $pendaratans
        ], 200);
    }

    // Show pendaratan by fish_id
    public function show($id)
    {
        $pendaratans = Pendaratan::where('fish_id', $id)->get();
        return response()->json([
            'success' => true,
            'message' => 'Detail data pendaratan',
            'data' => $pendaratans
        ], 200);
    }
}
