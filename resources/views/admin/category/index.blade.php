@extends('templates.app')
@section('admin')
<div>
    <br><br>
    <div class="pageTitle text-sky-500 text-xl pl-3 font-bold text-left capitalize">@lang('admin.title') » category's</div>
    <hr style="width: 75%; float: left; margin: 5px; height: 2px;" color="#019ad2">
    <br>
    <button class="bg-sky-500 pt-1 pb-1 pl-5 pr-5 ml-5 rounded-md text-white" onclick="window.location.href='{{ route('admin.categories.create', app()->getLocale()) }}';">         
        Create New Category
    </button> 
    <div class="float-right mr-5 font-bold text-gray-600">
        Total categories {{ $Category->count()}}
    </div>          
    <br><br>
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
                <th class="border border-solid border-gray-200 p-1">Actions</th>
                                               
            </tr>    
            @endforeach               
    </table>
    <div class="m-10 w-[98%] float-left mb-5 mr-5">
        {{ $Category->links('pagination::tailwind') }}
    </div>
</div>   
@endsection





       


