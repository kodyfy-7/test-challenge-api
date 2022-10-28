<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Models\Child;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Traits\HttpResponses;
use Illuminate\Support\Facades\Auth;

/**
 * @group 1. Authentication
 * APIs to manage authentication
 */
class AuthController extends Controller
{
    use HttpResponses;

    /**
    * Check email availability.
    *
    * @unauthenticated
    * @bodyParam email string required Your email address.
    * @response 200 {
    *     "success": "Request was successful.",
    *      "message": "Email address is valid",
    *     "data": null
    * }
    * @response 409 {
    *   "status": "An error has occurred...",
    *   "message": "Email address already registered",
    *   "data": null
    *}
    * @response 401 {
    *   "status": "An error has occurred...",
    *   "message": [
    *       "The email field is required."
    *   ],
    *   "data": null
    *}
    */ 
    public function emailCheck(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'An error has occurred...',
                'message' => $validator->errors()->all(),
                'data' => null
            ], 400);
        }
        $user = User::where('email', $request->email)->first();
        if ($user) {
            return response()->json([
                'status' => 'An error has occurred...',
                'message' => 'Email address already registered',
                'data' => null
            ], 409);
        }

        return response()->json([
            'status' => 'Request was successful.',
            'message' => 'Email address is valid',
            'data' => null
        ], 200);
    }

    /**
    * Register a user and dispatch token.
    *
    * @unauthenticated
    * @bodyParam name string required Your name address.
    * @bodyParam email string required Your email address.
    * @bodyParam children object required Your children.
    * @response 200 {
    *     "success": "Request was successful.",
    *      "message": null,
    *     "data": {
    *           "user": {
    *               "name": "Harrison Jo",
    *              "token": "7|sjosUbQh2C9VQO4VWyINN58VRlT4fsbN1qoNE3bl"
    *          }
    *      }
    * }
    * @response 401 {
    *    "error": [
    *        "The email has already been taken."
    *    ]
    *}
    */ 
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users',
            'name' => 'required',
            'children' => 'required',
        ]);

        if ($validator->fails()) {
           // return $this->error('', 'Credentials do not match', 401);
            return response()->json(['error' => $validator->errors()->all()]);
        }

        try{
            $password = Str::random(6);
            $password = Hash::make($password);
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $password
            ]);

            for($i = 0; $i < count($request->children); $i++)
            {
                $code= Str::random(6);
                $code = Str::upper($code);
                if(Child::where('code', $code)->exists()) {
                    $code = $code . Str::random(1);
                }
                Child::create([
                    'user_id' => $user->id,
                    'name' => $request->children[$i]["name"],
                    'age_range' => $request->children[$i]["age_range"],
                    'code' => $code
                ]);
            }
            $user_data['name'] = $user->name;
            $user_data['token'] = $user->createToken('API Token')->plainTextToken;
            return $this->success([
                'user' => $user_data
            ]);
        } catch(Exception $e)
        {
            Log::error($e);
        }
    }

    /**
    * Authenticate a user and dispatch token.
    *
    * @unauthenticated
    * @bodyParam email string required Your email address.
    * @bodyParam password string required Your password.
    * @response 200 {
    *     "success": "Request was successful.",
    *      "message": null,
    *     "data": {
    *           "user": {
    *               "name": "Harrison Jo",
    *              "token": "7|sjosUbQh2C9VQO4VWyINN58VRlT4fsbN1qoNE3bl"
    *          }
    *      }
    * }
    * @response 401 {
    *   "message": "The email field is required.",
    *   "errors": {
    *       "email": [
    *           "The email field is required."
    *       ]
    *   }
    *}
    * @response 401  {
    *   "status": "An error has occurred...",
    *   "message": "Credentials do not match",
    *   "data": ""
    * }
    */    
    public function login(LoginUserRequest $request)
    {
        $request->validated($request->only(['email', 'password']));

        if(!Auth::attempt($request->only(['email', 'password']))) {
            return $this->error('', 'Credentials do not match', 401);
        }

        $user = User::where('email', $request->email)->first();
        $user_data['name'] = $user->name;
        $user_data['token'] = $user->createToken('API Token')->plainTextToken;

        return $this->success([
            'user' => $user_data
        ]);
    }

    /**
    * Logout a user and delete token.
    *
    * @response 200 {
    *     "success": "Request was successful.",
    *      "message": "You have succesfully been logged out and your token has been removed",
    *     "data": null
    * }
    */
    public function logout(Request $request) 
    {
        $request->user()->tokens()->delete();
        return response()->json([
            'status' => 'Request was successful.',
            'message' => 'You have succesfully been logged out and your token has been removed',
            'data' => null
        ], 200);
    }
}
