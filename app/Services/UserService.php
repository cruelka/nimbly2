<?php


namespace App\Services;

use App\Models\User;

class UserService
{
    public function index()
    {
        return User::all()->toArray();
    }
}
