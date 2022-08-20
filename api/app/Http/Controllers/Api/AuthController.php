<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request) {
        $email = request()->get("email");
        $password = request()->get("password");

        $user = User::where('email', $email)->first();


        if ($user->email != $email || $user->password != $password ) {
            return response(['message' => 'Incorrect user name or password!']);
        }

        $accessToken = $user->createToken('TestToken')->accessToken;

        return response(['user' => $user, 'access_token' => $accessToken]);
    }
}
