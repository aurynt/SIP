<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Ramsey\Uuid\Uuid;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $id = Auth::user()->id;
            $user = User::find($id);
            $token = $user->createToken('api-token')->plainTextToken;
            return response()->json(['token' => $token], 200);
        } else {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        Auth::logout();
        return response()->json(['message' => 'Berhasil Logout'], 200);
    }

    public function register(Request $request)
    {
        $uuid = Uuid::uuid4();
        $user = User::create([
            'id'       => $uuid,
            'username' => $request->username,
            'full_name' => $request->full_name,
            'password' => Hash::make($request->password),
        ]);

        return response()->json(['message' => 'Berhasil Register', 'data' => $user], 201);
    }
}
