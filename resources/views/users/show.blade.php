
@extends('templates.app')
@section('profile')
    <div class="ml-10 m-5 w-[93.5%]">
        @include('users.show.components.profile-image')
        
        <div class="ml-10">                        
            @include('users.show.components.head')
            @include('users.show.components.ranking')
            @include('users.show.components.buttons')           
        </div>
        @include('users.show.components.side-panel')        
        <div class="float-left w-[65%] m-10">
            @include('users.show.components.navigation') 
            <br><br><br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit eligendi accusamus ex molestiae sequi quidem illo eius, quaerat quam vel iusto repellat tenetur dicta. Possimus, accusamus. Neque sit nemo consequatur.
            
            
            
        </div>

        


        <br><br><br><br><br><br><br><br><br><br><br>
    </div>
    



{{-- 
   users id: {{$user->id}}<br>
   users name: {{$user->name}}<br>

<br><br>

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
User work: {{ Auth::user()->work }}<br> --}}


@endsection