<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class FollowsController extends Controller
{
    public function store(User $user)
    {
        //have the login user to follow the given user
        current_user()->toggleFollow($user);
       
        return back();
    }
    
}
