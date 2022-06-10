
@extends('templates.app')
@section('userInfoBar')
@include('templates.userInfoBar')
@endsection
@section('content')

<ul class="capitalize">    
    <li>

        

        <a class="active block float-left w-auto border-l border-r border-t border-solid border-sky-500 ml-5 pl-3 text-center rounded-t-lg text-sky-500 font-bold pt-1 pr-3 h-[42.5px] bg-white mt-[-10px] hover:h-[42.5px] hover:bg-white hover:mt-[-10px]" href="{{ route('users.UsersEditMainInfo', [Auth::user()->id, 'locale' => app()->getLocale()]) }}">
            Main info
        </a>
    </li>
    <li class="active">
        <a class="block float-left w-auto border-l border-r border-t border-solid border-sky-500 ml-5 pl-3 text-center rounded-t-lg text-sky-500 font-bold h-8 pt-1 pr-3 active:h-[42.5px] active:bg-white active:mt-[-10px] hover:h-[42.5px] hover:bg-white hover:mt-[-10px]" href="{{ route('users.editProfilePicture', [Auth::user()->id, 'locale' => app()->getLocale()]) }}">
            Change Profile Picture
        </a>
    </li>
    <li>
        <a class="block float-left w-auto border-l border-r border-t border-solid border-sky-500 ml-5 pl-3 text-center rounded-t-lg text-sky-500 font-bold h-8 pt-1 pr-3 active:h-[42.5px] active:bg-white active:mt-[-10px] hover:h-[42.5px] hover:bg-white hover:mt-[-10px]" href="{{ route('users.changePassword', [Auth::user()->id, 'locale' => app()->getLocale()]) }}">
            Change Password
        </a>
    </li>
</ul>
<div class="border border-solid border-sky-500 w-full mt-8 p-5">



Edit Main info <br>




User email: {{ Auth::user()->email }}<br>
User firstName: {{ Auth::user()->firstName }}<br>
User lastName: {{ Auth::user()->lastName }}<br>
User nickname: {{ Auth::user()->nickname }}<br>
User profile_picture: {{ Auth::user()->profile_picture }}<br>
User gender: {{ Auth::user()->gender }}<br>
User country: {{ Auth::user()->country }}<br>
User city: {{ Auth::user()->city }}<br>

</div>

@endsection