<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\{
    AuthController,
    ProfileController,
};

Route::post('email-check', [AuthController::class, 'emailCheck']);
Route::post('register', [AuthController::class, 'register']);

Route::middleware('auth:sanctum')->group( function () {
    Route::resource('profile', ProfileController::class);
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});