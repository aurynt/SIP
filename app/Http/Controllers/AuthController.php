<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('username', $request->username)->first();
        if (!$user) {
            return response()->json(['error' => 'Username tidak ditemukan'], 401);
        } else if (!Hash::check($request->password, $user->password)) {
            return response()->json(['error' => 'Kata sandi salah'], 401);
        }

        return  response()->json([ 'token' => $user->createToken('access token')->plainTextToken ], 200);
    }

    public function logout(Request $request)
    {
        $user = Auth::user();
        $request->user()->currentAccessToken()->delete();
        return response()->json(['message' => 'Berhasil Logout'], 200);
    }
}
