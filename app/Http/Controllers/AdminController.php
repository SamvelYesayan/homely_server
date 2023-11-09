<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Token;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function admin_get_requests(){
        $requests = User::all()->where('role','=','waiting');
        return response()->json([$requests]);
    }
    public function admin_accept_request(Request $request){
        $userId = $request->user_id;
        $user = User::find($userId);
        $password = Str::random(6);


    }
}
