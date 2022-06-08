
@extends('templates.app')
@section('userInfoBar')
@include('templates.userInfoBar')
@endsection
@section('content')





<ul class="capitalize">    
    <li>
        <a class="block float-left w-auto border-l border-r border-t border-solid border-sky-500 ml-5 pl-3 text-center rounded-t-lg text-sky-500 font-bold h-8 pt-1 pr-3 active:h-[42.5px] active:bg-white active:mt-[-10px] hover:h-[42.5px] hover:bg-white hover:mt-[-10px]" href="{{ route('users.UsersEditMainInfo', [Auth::user()->id, 'locale' => app()->getLocale()]) }}" >
            Main info
        </a>
    </li>
    <li class="active">
        <a class="block float-left w-auto border-l border-r border-t border-solid border-sky-500 ml-5 pl-3 text-center rounded-t-lg text-sky-500 font-bold h-8 pt-1 pr-3 active:h-[42.5px] active:bg-white active:mt-[-10px] hover:h-[42.5px] hover:bg-white hover:mt-[-10px]" href="{{ route('users.editProfilePicture', [Auth::user()->id, 'locale' => app()->getLocale()]) }}">
            Change Profile Picture
        </a>
    </li>
    <li>
        <a class="block float-left w-auto border-l border-r border-t border-solid border-sky-500 ml-5 pl-3 text-center rounded-t-lg text-sky-500 font-bold h-8 pt-1 pr-3 active:h-[42.5px] active:bg-white active:mt-[-10px] hover:h-[42.5px] hover:bg-white hover:mt-[-10px]" 
        :href="route('users.changePassword', [Auth::user()->id, 'locale' => app()->getLocale()])" :active="request()->routeIs('users.changePassword', app()->getLocale())">     

        {{-- href="{{ route('users.changePassword', [Auth::user()->id, 'locale' => app()->getLocale()])}}" :active="request()->routeIs('users.changePassword', app()->getLocale())"> --}}
            Change Password
        </a>
    </li>
</ul>
<div class="border border-solid border-sky-500 w-full mt-8 p-5">

    <form method="POST" action="{{ route('password.update', app()->getLocale()) }}">
        @csrf
        <span>
            <div class="float-left pt-5 w-1/4 text-gray-600">
                <font color="red">*</font><b>Password:</b>
            </div>
            <div>
                <input class="w-2/3 mt-2 border border-solid border-gray-400 rounded-md focus:border-sky-200 drop-shadow box-border outline-none" type="password" name="password" required size="" /><br /><br>
            </div>            
        </span>
        <span>
            <div class="float-left pt-5 w-1/4 text-gray-600">
                <font color="red">*</font><b>Password Confirm:</b>
            </div>
            <div>
                <input class="w-2/3 mt-2 border border-solid border-gray-400 rounded-md focus:border-sky-200 drop-shadow box-border outline-none" type="password" name="password_confirmation" required size="" /><br /><br>
            </div>            
        </span>
        <input class="float-left bg-sky-500 p-1 w-auto text-white rounded-lg hover:bg-sky-600 m-5 pl-5 pr-5" type="submit" value="Change Password" />
    </form> 
    <br><br>
</div>

@endsection