
@extends('templates.app')
@section('userInfoBar')
@include('templates.userInfoBar')
@endsection
@section('content')



All user's functions from DB <br>


User ID: {{ Auth::user()->id }}<br>
User name: {{ Auth::user()->name }}<br>
User email: {{ Auth::user()->email }}<br>
User firstName: {{ Auth::user()->firstName }}<br>
User lastName: {{ Auth::user()->lastName }}<br>
User nickname: {{ Auth::user()->nickname }}<br>
User profile_picture: {{ Auth::user()->profile_picture }}<br>
User gender: {{ Auth::user()->gender }}<br>
User about: {{ Auth::user()->about }}<br>
User country: {{ Auth::user()->country }}<br>
User city: {{ Auth::user()->city }}<br>
User work: {{ Auth::user()->work }}<br>


@endsection