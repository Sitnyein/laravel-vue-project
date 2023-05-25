<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $req) {
        $user = User::where('email',$req->email)->first();
        if(isset($user))
        {
            if(Hash::check($req->password, $user->password)) {
                return response()->json([
                    'user' => $user,
                    'token' =>$user->createToken(time())->plainTextToken
                ]);
            }else{
                return response()->json([
                    'user' => null,
                    'token' => null
                ]); }
        }else{
            return response()->json([
                'user' => null,
                'token' => null
            ]);
        }
    }
}
