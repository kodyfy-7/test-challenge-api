<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

/**
 * @group 2. Profile
 * APIs to manage profile resource
 */
class ProfileController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @response 200 {
    *   "id": 8,
    *   "name": "Harrison Jo",
    *    "email": "ytytay@gmail",
    *   "email_verified_at": null,
    *   "created_at": "2022-10-26T08:07:35.000000Z",
    *   "updated_at": "2022-10-26T08:07:35.000000Z",
    *   "children": [
    *       {
    *           "id": 7,
    *           "user_id": 8,
    *           "name": "Moon Knight",
    *           "age_range": "5-7",
    *           "code": "NAVSOY",
    *           "created_at": "2022-10-26T08:07:35.000000Z",
    *           "updated_at": "2022-10-26T08:07:35.000000Z"
    *       }
    *    ]   
    * }
    */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = $request->user();
        $profile = User::with('children')->whereId($user->id)->first();
        return $profile;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
