<?php

namespace App\Http\Controllers;

use App\User;

class UserController extends Controller
{
    public function __invoke()
    {
        return User::all();
    }
}
