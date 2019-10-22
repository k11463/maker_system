<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserStoreRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        // return view('');
    }

    public function store(UserStoreRequest $request)
    {
        return $request;
        // $passwordHashed = Hash::make($request->password, [
        //     'rounds' => 12
        // ]);
        // $request->password = $passwordHashed;
        // $user = new User;
        // $user->fill($request->all());
        // $user->save();
    }

    public function show(User $user)
    {
        //
    }

    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
