<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Contracts\View\View;

class ProfileController extends Controller
{
    public function profileTimeline(string $locale, User $user): View
    {

        return view('users.show.timeline', [
            'user' => $user,
            'users' => User::get(),
        ]);
    }

    public function profileBaisicInfo(string $locale, User $user): View
    {

        return view('users.show.basic-information', [
            'user' => $user,
            'users' => User::get(),
        ]);
    }

    public function profileAbout(string $locale, User $user): View
    {

        return view('users.show.about', [
            'user' => $user,
            'users' => User::get(),
        ]);
    }

    public function profileContacts(string $locale, User $user): View
    {

        return view('users.show.contacts', [
            'user' => $user,
            'users' => User::get(),
        ]);
    }

    public function profileComments(string $locale, User $user): View
    {

        return view('users.show.comments', [
            'user' => $user,
            'users' => User::get(),
        ]);
    }
}
