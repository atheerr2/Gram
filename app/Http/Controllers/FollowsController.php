<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class FollowsController extends Controller
{
    public function store(User $user){
        // return $user->username;
        return auth()->user->following()->toggle($user->profile);

    }
}
