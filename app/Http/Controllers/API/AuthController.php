<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function login(Request $req)
    {
        $data = [
            'email' => $req->email,
            'password' => $req->password
        ];
        // dd($data);
        if (auth()->attempt($data)) {
            $token = auth()->user()->createToken('Token')->accessToken;
            return response()->json(['user' => $token], 200);
        }
    }
    function register(Request $req)
    {
        // dd($req);
        $user = User::create([
            'name' => $req->name,
            'email' => $req->email,
            'password' => Hash::make($req->password)
        ]);

        $token = $user->createToken('Token')->accessToken;
        return response()->json(['token' => $token, 'user' => $user], 200);
    }
    function userInfo()
    {
        $user =  auth()->user();
        return response()->json(['user' => $user], 200);
    }
}
