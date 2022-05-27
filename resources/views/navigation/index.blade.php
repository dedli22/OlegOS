@extends('templates.app')
@section('userInfoBar')
@include('templates.userInfoBar')
@endsection
@section('content')
<div id="newsContainer">
    <div class="newsContent">

        <br><br><br><br><br><br><br><br><br><br><br>



        <div class="userNavigation">
            <ul>

                @foreach ($MainNavs as $MainNav)  
                @if (!$MainNav->visible === true)
                
                    
                @else

                <li><a href="{{ $MainNav->link }}">{{ $MainNav->name }} </a></li>
                
                @endif
                @endforeach      



            </ul>
        </div>
        
        

        <br>
       Name 
       link 
       order


           
        visible link {{ $MainNav->visible }} <br>      
       Link name is = {{ $MainNav->name }} <br>
       Link addres is =  {{ $MainNav->link }} <br>
       
       <br><br>
       

       
    </div> 



</div>
@endsection
