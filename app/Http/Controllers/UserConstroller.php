<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class UserConstroller extends Controller
{

    public function show(string $locale, User $user): View
    {
        return view('users.show', [
            'user' => $user,
        ]);
    }

    public function editMainInfo(string $locale, User $user): View
    {
        return view('users.editMain', [
            'user' => $user,
        ]);
    }

    public function editProfilePicture(string $locale, User $user): View
    {
        return view('users.editProfilePicture', [
            'user' => $user,
        ]);
    }

    public function updateProfilePicture(string $locale, User $user, Request $request)
    {

        $request->validate([
            'profile_picture' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
        ]);       

        $profilePictureName = $user->id.'_profile_picture_'.time().'.'.request()->image->getClientOriginalExtension();  
        
        $request->image->move(public_path('images/user_pictures/'.$user->id.'/'), $profilePictureName); 
        
        $user->profile_picture = 'http://localhost/images/user_pictures/'.$user->id.'/'.$profilePictureName;

        $user->save();        
    
        return back()->with('success','You have successfully upload image.');

    }


    public function changePassword(string $locale, User $user): View
    {
        return view('users.changePassword', [
            'user' => $user,
        ]);
    }

}
