
@extends('templates.app')
@section('userInfoBar')
@include('templates.userInfoBar')
@endsection
@section('content')

 @foreach ($users as $user)
    <a href="{{ route('user.profile.timeline', ['user' => $user->id, 'locale' => app()->getLocale()]) }}" >
        <div class="w-28 inline-block m-1">
            <div class="rounded-lg">
                <img class="rounded-md" src="{{ $user->profile_picture }}" alt="User image">
            </div>
            <div class="text-gray-600 capitalize text-center font-bold">
                {{ $user->firstName }}<br>
                {{ $user->lastName }}
            </div>
            <div class="text-sm text-center">
                {{ $user->country .' '. $user->city }}
            </div>
        </div>
    </a>
    

 @endforeach
@endsection