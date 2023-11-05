<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Token;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function auth_signup(Request $request){
        $firstname = $request->input("first_name");
        $lastname = $request->input("last_name");
        $phone = $request->input("phone");
        $email = $request->input("email");
        
        $userCheck = User::all()->where("email","=", $email);
        
        // Email Check
        if(count($userCheck) > 0){
            return response()->json([
                'success' => false
            ]);
        }

        // Signup Process
        $user = new User;
        $user->first_name = $firstname;
        $user->last_name = $lastname;
        $user->phone = $phone;
        $user->email = $email;
        $user->save();

        return response()->json([
            'success'=> true
        ]);
    }

    public function auth_signin(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');

        $userCheck = User::all()->where('email','=', $email)->where('password','=', $password);
        if(count($userCheck) > 0){
            foreach($userCheck as $userVal){
                $userId = $userVal->id;
            }
            $token = Hash::make($password);
            $newToken = new Token;
            $newToken->user_id = $userId;
            $newToken->token = $token;
            $newToken->save();
            // Success
            return response()->json([
                'success'=> true,
                'token'=> $token
            ]);

        }else{
            // Incorrect email or password
            return response()->json([
                'success'=> false
            ]);
        }
    }

 
}
