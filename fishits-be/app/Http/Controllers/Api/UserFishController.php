<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Fish;
use Illuminate\Support\Facades\Validator;

class UserFishController extends Controller
{
    public function attachFish(Request $request, User $user)
    {
        $fishId = $request->input('fish_id');
        $amount = $request->input('amount');
        $bbm = $request->input('bbm');

        $user->fish()->attach($fishId, ['amount' => $amount, 'bbm' => $bbm]);

        return response()->json(['message' => 'Fish attached to user successfully']);
    }

    public function detachFish(User $user, Fish $fish)
    {
        $user->fish()->detach($fish->id);

        return response()->json(['message' => 'Fish detached from user successfully']);
    }
}
