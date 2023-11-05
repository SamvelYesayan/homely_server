<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Token;
class AdminController extends Controller
{
    public function admin_get_requests(){
        $requests = User::all()->where('role','=','waiting');
        return response()->json([$requests]);
    }
}
