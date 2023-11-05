<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('auth/signup',[UserController::class,'auth_signup'])->name('auth_signup');
Route::post('auth/signin',[UserController::class,'auth_signin'])->name('auth_signin');
Route::post('admin/get/requests',[AdminController::class,'admin_get_requests'])->name('admin_get_requests');