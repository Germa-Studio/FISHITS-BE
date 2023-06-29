<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Fish;
use Illuminate\Support\Facades\Validator;

class UserFishController extends Controller
{
    public function getFish(User $user)
    {
        return response()->json($user->fish()->get(), 200);
    }

    public function getAllFish()
    {
        // List all user and their fish
        $users = User::with('fish')->get();
        return response()->json($users, 200);
    }

    public function attachFish(Request $request, User $user)
    {
        $validator = Validator::make($request->all(), [
            'fish_id' => 'required|exists:fish,id',
            'berat' => 'required|numeric',
            'satuanBerat' => 'required|string',
            // 'jumlah' => 'required|numeric',
            'harga' => 'required|numeric',
            'bbmTerpakai' => 'required|numeric',
            'jarakTempuh' => 'required|numeric',
            'pengeluaran' => 'required|numeric',
            'pendapatan' => 'required|numeric',
            'keuntungan' => 'required|numeric',
            // 'tanggal' => 'required|date',
            // 'waktu' => 'required|date_format:H:i:s'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $user->fish()->attach($request->fish_id, [
            'berat' => $request->berat,
            'satuanBerat' => $request->satuanBerat,
            // 'jumlah' => $request->jumlah,
            'harga' => $request->harga,
            'bbmTerpakai' => $request->bbmTerpakai,
            'jarakTempuh' => $request->jarakTempuh,
            'pengeluaran' => $request->pengeluaran,
            'pendapatan' => $request->pendapatan,
            'keuntungan' => $request->keuntungan,
            // get current date and time
            'tanggal' => date('Y-m-d'),
            'waktu' => date('H:i:s')
        ]);

        // $user->fish()->attach($fishId, ['amount' => $amount, 'bbm' => $bbm]);

        return response()->json(['message' => 'Fish attached to user successfully']);
    }

    public function detachFish(User $user, Fish $fish)
    {
        $user->fish()->detach($fish->id);

        return response()->json(['message' => 'Fish detached from user successfully']);
    }
}
