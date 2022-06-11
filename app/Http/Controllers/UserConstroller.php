<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class UserConstroller extends Controller
{

    public function index(string $locale, User $user): View
    {
        
        return view('users.index', [
            'user' => $user,
            'users' => User::get(),
        ]);    
    }


    public function show(string $locale, User $user): View
    {
        
        return view('users.show', [
            'user' => $user,
            'users' => User::get(),
        ]);    
    }

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
