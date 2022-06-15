@extends('templates.app')
@section('admin')
<div>
    <br><br>
   <div class="pageTitle text-sky-500 text-xl pl-3 font-bold text-left capitalize">
        <a href="{{ route('admin.index', app()->getLocale()) }}"> @lang('admin.Title') </a> »
        <a href="{{ route('admin.categories.index', app()->getLocale()) }}"> category's </a>
    </div>
    <hr style="width: 75%; float: left; margin: 5px; height: 2px;" color="#019ad2">
    <br>
    <button class="bg-sky-500 pt-1 pb-1 pl-5 pr-5 ml-5 rounded-md text-white" onclick="window.location.href='{{ route('admin.categories.create', app()->getLocale()) }}';">         
        Create New Category
    </button> 
    <div class="float-right mr-5 font-bold text-gray-600">
        Total categories {{ $Category->count()}}
    </div>          
    <br><br>
    @if ($message = Session::get('success'))
    <div class="font-bold bg-green-100 w-[97%] ml-5 -mt-2 mb-2 border border-solid border-green-200 p-4 rounded-md text-center text-green-700">
        {{ $message }}        
    </div>    
    @endif
    <table class="border-collapse w-[98%] text-center ml-3 mb-10" >
        <tr class="bg-sky-400 text-white">
            <th class="border border-solid border-gray-200 p-1">ID</th>
            <th class="border border-solid border-gray-200 p-1">name</th>
            <th class="border border-solid border-gray-200 p-1">slug</th>            
            <th class="border border-solid border-gray-200 p-1">description</th>
            <th class="border border-solid border-gray-200 p-1">created by</th>
            <th class="border border-solid border-gray-200 p-1">image</th>   
            <th class="border border-solid border-gray-200 p-1">Actions</th>   
        </tr>       
            @foreach ($Category as $cat)
            <tr class="bg-white even:bg-gray-100 hover:bg-gray-200 text-gray-600">                
                <th class="border border-solid border-gray-200 p-1">{{ $cat->id }}</th>
                <th class="border border-solid border-gray-200 p-1">{{ $cat->name }}</th>
                <th class="border border-solid border-gray-200 p-1">{{ $cat->slug }}</th>                
                <th class="border border-solid border-gray-200 p-1">{{ $cat->description }}</th>
                <th class="border border-solid border-gray-200 p-1"><a href=" {{ route('user.profile.timeline', [$cat->created_by_id , 'locale' => app()->getLocale()]) }}">{{ $cat->created_by_firstName . ' ' . $cat->created_by_lastName  }}</a></th>
                <th class="border border-solid border-gray-200 p-1">
                    <img class="m-auto" width="70px" height="70px" src="{{ asset('images/categories/'.$cat->image) }}" alt="Category image">
                </th>
                <th class="border border-solid border-gray-200 p-1">
                    <a href="{{ route('admin.categories.edit', ['locale' => app()->getLocale(), 'category' => $cat->id]) }}" >
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-sky-500 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                    </a>
                    <a href="{{ route('admin.categories.destroy', ['locale' => app()->getLocale(), 'category' => $cat->id]) }}" >
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-red-500 inline ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                          </svg>
                    </a> 

                </th>
                                               
            </tr>    
            @endforeach               
    </table>
    <div class="m-10 w-[98%] float-left mb-5 mr-5">
        {{ $Category->links('pagination::tailwind') }}
    </div>
</div>   
@endsection





       


