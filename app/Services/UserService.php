<?php

namespace App\Services;

use App\Models\User;

class UserService
{
    public function index()
    {
        return User::all()->toArray();
    }

    public function login($credantials)
    {
        try {
            auth()->attempt($credantials);
            $accessToken = auth()->user()->createToken('authToken')->accessToken;
            return ['user' => auth()->user(), 'access_token' => $accessToken];
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function logout()
    {
        try {
            return auth()->logout();
        } catch (\Exception $e)
        {
            return $e;
        }
    }
}
