
@extends('templates.app')
@section('userInfoBar')
@include('templates.userInfoBar')
@endsection
@section('content')

<ul class="capitalize">    
    <li>

        

        <a class="block float-left w-auto border-l border-r border-t border-solid border-sky-500 ml-5 pl-3 text-center rounded-t-lg text-sky-500 font-bold h-8 pt-1 pr-3 active:h-[42.5px] active:bg-white active:mt-[-10px] hover:h-[42.5px] hover:bg-white hover:mt-[-10px]" href="{{ route('users.UsersEditMainInfo', [Auth::user()->id, 'locale' => app()->getLocale()]) }}">
            Main info
        </a>
    </li>
    <li class="active">
        <a class="block float-left w-auto border-l border-r border-t border-solid border-sky-500 ml-5 pl-3 text-center rounded-t-lg text-sky-500 font-bold h-8 pt-1 pr-3 active:h-[42.5px] active:bg-white active:mt-[-10px] hover:h-[42.5px] hover:bg-white hover:mt-[-10px]" href="{{ route('users.editProfilePicture', [Auth::user()->id, 'locale' => app()->getLocale()]) }}">
            Change Profile Picture
        </a>
    </li>
    <li>
        <a class="active block float-left w-auto border-l border-r border-t border-solid border-sky-500 ml-5 pl-3 text-center rounded-t-lg text-sky-500 font-bold h-8 pt-1 pr-3 active:h-[42.5px] active:bg-white active:mt-[-10px] hover:h-[42.5px] hover:bg-white hover:mt-[-10px]" href="{{ route('users.changePassword', [Auth::user()->id, 'locale' => app()->getLocale()]) }}">
            Change Password
        </a>
    </li>
</ul>
<div class="border border-solid border-sky-500 w-full mt-8 p-5 mb-5">
    @if ($message = Session::get('success'))
    <div class="font-bold bg-green-100 w-[60%] border border-solid border-green-200 p-4 rounded-md text-center text-green-700">
        {{ $message }}        
    </div>    
@endif
    <img class=" rounded-2xl shadow-md shadow-blue-300 float-right" src="{{ Auth::user()->profile_picture }}" width="200px" height="200px" >
    <br>    
    <form action="{{ route('users.updateProfilePicture', [Auth::user()->id, 'locale' => app()->getLocale()]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <span>
            <div class="float-left pt-5 w-1/4 text-gray-600">
                <b>Upload new profile Image</b>
            </div>
            <div>               
  
                @error('image')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                <input type="file" name="image" @error('image') is-invalid @enderror class="pt-5 block w-3/5 text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0    file:text-sm file:font-semibold file:bg-sky-50 file:text-sky-500 hover:file:bg-sky-100"/>
                <br /><br>
            </div>            
        </span>       
        <input class="float-left bg-sky-500 p-1 w-auto text-white rounded-lg hover:bg-sky-600 m-5 pl-5 pr-5" type="submit" value="Add profile Image" />
    </form> 
    <br><br>

</div>

@endsection