<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{   //login process api postman
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
                    'token' => null,
                     'message' => 'this is wrong password'
                ]); }
        }else{
            return response()->json([
                'user' => null,
                'token' => null,
                 'message' => 'this is wrong email'
            ]);
        }
     }

     //api register
     public function register(Request $req) {
          $data = [
            'name' => $req->name,
            'email' => $req->email,
             'password' => Hash::make($req->password)
          ];
          User::create($data);
          $user = User::where('email',$req->email)->first();
          return response()->json([
            'user' => $user,
            'token' => $user->createToken(time())->plainTextToken
          ]);
       }


    //data get from category
       public function category() {
          $category = Category::get();
          return response()->json([
             'category' => $category
          ]);
       }







































}
