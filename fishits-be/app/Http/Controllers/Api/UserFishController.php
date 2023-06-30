<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Fish;
use App\Models\Pendaratan;
use Illuminate\Support\Facades\Validator;

class UserFishController extends Controller
{
    public function getFish(User $user)
    {
        return response()->json($user->fish()
                        ->orderBy('users_has_fish.tanggal', 'desc')
                        ->get(), 200);
    }

    public function getAllFish()
    {
        $users = User::with(['fish' => function ($query) {
            $query->orderBy('users_has_fish.tanggal', 'desc')
                ->orderBy('users_has_fish.id', 'desc');
        }])
        ->get(['id', 'username']);

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
            'tanggal' => 'required|date',
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
            'tanggal' => $request->tanggal,
            // 'waktu' => $request->waktu
        ]);

        // Create a variable that takes only month and year from $request->tanggal with format YYYYMM
        $dateMonth = date('Ym', strtotime($request->tanggal));

        // if dateMonth for fish in pendaratans table is not exist, create new one
        if(!Pendaratan::where('monthYear', $dateMonth)->where('fish_id', $request->fish_id)->exists()) {
            Pendaratan::create([
                'berat' => $request->berat,
                'harga' => $request->harga,
                'nilaiProduksi' => $request->berat * $request->harga,
                'monthYear' => $dateMonth,
                'fish_id' => $request->fish_id
            ]);
        } else {
            // if dateMonth for fish in pendaratans table is exist, update it
            $pendaratan = Pendaratan::where('monthYear', $dateMonth)->where('fish_id', $request->fish_id)->first();
            $pendaratan->berat += $request->berat;
            $pendaratan->harga = $request->harga;
            $pendaratan->nilaiProduksi = $pendaratan->berat * $pendaratan->harga;
            $pendaratan->save();
        }

        // $user->fish()->attach($fishId, ['amount' => $amount, 'bbm' => $bbm]);

        return response()->json(['message' => 'Fish attached to user successfully']);
    }

    // Get fish based on date for all users
    public function getAllFishByDate($date)
    {
        $users = User::with(['fish' => function ($query) use ($date) {
            $query->where('tanggal', $date)
                  ->orderBy('users_has_fish.id', 'desc');
        }])
        ->get(['id', 'username']);

        return response()->json($users, 200);
    }

    // Get fish based on date
    public function getFishByDate(User $user, $date)
    {
        $fish = $user->fish()
        ->where('tanggal', $date)
        ->orderBy('users_has_fish.id', 'desc')
        ->get();
        return response()->json($fish, 200);
    }

    public function detachFish(User $user, Fish $fish)
    {
        $user->fish()->detach($fish->id);

        return response()->json(['message' => 'Fish detached from user successfully']);
    }
}
