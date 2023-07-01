<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Spatie\LaravelIgnition\Recorders\DumpRecorder\DumpHandler;

class AuthController extends Controller
{
    public function register(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string',
            'username' => 'required|string|unique:users'
        ]);


        if($validator->fails()){
            return response()->json([
                'data' => [],
                'message' => $validator->errors(),
                'success' => false
            ]);
        }

        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'username' => $request->username
        ]);

        $user->save();

        $token = $user->createToken('auth_token')->plainTextToken;
        // save token to database
        $user->tokens()->where('tokenable_id', $user->id)->update([
            'created_at' => Carbon::now()
        ]);

        return response()->json([
            'message' => 'Successfully created user!',
            'data' => $user,
            'access_token' => $token,
            'token_type' => 'Bearer'
        ], 201);
    }

    public function login(Request $request)
    {
        $loginType = filter_var($request->email, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        $request->merge([$loginType => $request->email]);

        $validator = Validator::make($request->all(), [
            $loginType => 'required|string',
            'password' => 'required|string'
        ]);

        if($validator->fails()){
            return response()->json([
                'data' => [],
                'message' => $validator->errors(),
                'success' => false
            ]);
        }

        if (!Auth::attempt($request->only($loginType, 'password'))) {
            return response()->json([
                'message' => 'Invalid login details'
            ], 401);
        }

        $user = $request->user();

        $expirationTime = Carbon::now()->addHours(8);
        $tokenResult = $user->createToken('auth_token', ['expires_at' => $expirationTime]);
        $token = $tokenResult->plainTextToken;

        return response()
            ->json(['message' => 'Hi ' . $user->name . ', welcome to home',
                    'data' => $user,
                    'access_token' => $token,
                    'token_type' => 'Bearer']);
    }

    // login only with token
    public function relogin(Request $request)
    {
        $user = $request->user();

        // if failed, return failed with keterangan login with username or email
        if (!$user) {
            return response()->json([
                'message' => 'Invalid login details'
            ], 401);
        }

        $tokenResult = $user->createToken('auth_token');
        $token = $tokenResult->plainTextToken;

        return response()
            ->json(['message' => 'Hi ' . $user->name . ', welcome to home',
                    'data' => $user,
                    'access_token' => $token,
                    'token_type' => 'Bearer']);
    }

    public function user(Request $request)
    {
        return response()->json($request->user());
    }

    public function update(Request $request)
    {
        $user = $request->user();

        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'username' => 'required|string|unique:users,username,'.$user->id,
            'email' => 'required|string|email|unique:users,email,'.$user->id,
            'password' => 'nullable|string'
        ]);

        if($validator->fails()){
            return response()->json([
                'data' => [],
                'message' => $validator->errors(),
                'success' => false
            ]);
        }

        $user->update([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email
        ]);

        if($request->password){
            $user->update([
                'password' => bcrypt($request->password)
            ]);
        }

        return response()->json([
            'message' => 'Successfully updated user!',
            'data' => $user
        ], 201);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }
}
