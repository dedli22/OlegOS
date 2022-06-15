@extends('templates.app')
@section('admin')
<div>
    <br><br>
    <div class="pageTitle text-sky-500 text-xl pl-3 font-bold text-left capitalize">
        <a href="{{ route('admin.index', app()->getLocale()) }}"> @lang('admin.Title') </a>»
        <a href="{{ route('admin.categories.index', app()->getLocale()) }}"> category's </a>»
        <a href="{{ route('admin.categories.edit', [ 'locale' => app()->getLocale(), 'category' => $Category->id]) }}"> Edit</a> 
    </div>
    <hr style="width: 75%; float: left; margin: 5px; height: 2px;" color="#019ad2">
    <br> 
        @if ($errors->any())
            <div class="bg-rose-300 m-5 p-2 w-2/4 rounded-md text-Black-opticaly-08 pl-10">        
                @foreach ($errors->all() as $error)
                    {{ $error }} <br>
                @endforeach            
            </div>    
        @endif
        <form class="m-5" action="{{ $Category->id }}" method="POST" enctype="multipart/form-data">
            @csrf

            <span>
                <div class="float-left pt-5 w-1/4 text-gray-600">
                    <font color="red">*</font><b>Category Name</b>
                </div>
                <div>
                    <input class="w-2/4 border border-solid border-gray-400 rounded-md focus:border-sky-200 drop-shadow box-border outline-none mt-3" type="text" name="name" value="{{ $Category->name }}"><br ><br>
                </div>            
            </span>
            <span>
                <div class="float-left pt-5 w-1/4 text-gray-600">
                    <font color="red">*</font><b>Category slug</b>
                </div>
                <div>
                    <input class="w-2/4 border border-solid border-gray-400 rounded-md focus:border-sky-200 drop-shadow box-border outline-none mt-3" type="text" name="slug" value="{{ $Category->slug }}"><br ><br>                
                </div>                                
            </span>
            <span>
                <div class="float-left pt-5 w-1/4 text-gray-600">
                    <font color="red">*</font><b>Category description</b>
                </div>
                <div>
                    <input class="w-2/4 border border-solid border-gray-400 rounded-md focus:border-sky-200 drop-shadow box-border outline-none mt-3" type="text" name="description" value="{{ $Category->description }}"><br><br>                
                </div>                                
            </span>
            <span>
                <div class="float-left pt-5 w-1/4 text-gray-600">
                    <font color="red">*</font><b>Category image right now</b>
                </div>
                <div>                    
                    <img src="{{ asset('images/categories/'. $Category->image) }}" width="70px" width="70px"> <br>                    
                </div>            
            </span>
            <span>
                <div class="float-left pt-5 w-1/4 text-gray-600">
                    <font color="red">*</font><b>Category image</b>
                </div>
                <div>
                    
                    <input class="file:mt-5  file:border-sky-500 file:py-2 file:px-3 file:mr-2 text-sm text-slate-500 file:rounded-full file:border-0 file:bg-sky-200 file:text-sky-600 file:font-bold hover:file:bg-sky-300 file:cursor-pointer" type="file" value="{{ $Category->image }}" name="image"><br>
                    <br><br>
                </div>            
            </span>
            
            <br>        
            <input class="float-left bg-sky-500 p-1 w-auto text-white rounded-lg hover:bg-sky-600 m-5 pl-5 pr-5 cursor-pointer" type="submit" value="Create category">
        </form>

</div>   
@endsection





       


