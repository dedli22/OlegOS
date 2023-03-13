
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
            <h1 class="text-lg font-bold">Contacts</h1>
                <br><br>

                Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit eligendi accusamus ex molestiae sequi quidem illo eius, quaerat quam vel iusto repellat tenetur dicta. Possimus, accusamus. Neque sit nemo consequatur.        
            
            
            
            </div>
        </div>
    @endsection