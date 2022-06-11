<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use App\Models\User;
use Illuminate\Http\Request;

class FriendController extends Controller
{
    
    public function showAllUsers(string $locale, User $user): View
    {
        return view('friends.show', [
            'user' => $user,
            'users' => User::all(),
            'Users' => User::all(),
        ]);
    }
}
