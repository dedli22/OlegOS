@extends('templates.app')
@section('admin')
<div>
    <br><br>
    <div class="pageTitle text-sky-500 text-xl pl-3 font-bold text-left capitalize">@lang('admin.title') » category's » Create category</div>
    <hr style="width: 75%; float: left; margin: 5px; height: 2px;" color="#019ad2">
    <br>         
    <br><br>
    
    <form action="{{ route('admin.categories.create', app()->getLocale()) }}" method="POST" enctype="multipart/form-data">
        @csrf

        <span>
            <div class="float-left pt-5 w-1/4 text-gray-600">
                <font color="red">*</font><b>Category Name</b>
            </div>
            <div>
                <input class="w-2/4 border border-solid border-gray-400 rounded-md focus:border-sky-200 drop-shadow box-border outline-none mt-3" type="text" name="name" value="{{ old('name') }}"><br ><br>
            </div>            
        </span>
        <span>
            <div class="float-left pt-5 w-1/4 text-gray-600">
                <font color="red">*</font><b>Category slug</b>
            </div>
            <div>
                <input class="w-2/4 border border-solid border-gray-400 rounded-md focus:border-sky-200 drop-shadow box-border outline-none mt-3" type="text" name="slug" value="{{ old('slug') }}"><br ><br>                
            </div>                                
        </span>
        <span>
            <div class="float-left pt-5 w-1/4 text-gray-600">
                <font color="red">*</font><b>Category description</b>
            </div>
            <div>
                <input class="w-2/4 border border-solid border-gray-400 rounded-md focus:border-sky-200 drop-shadow box-border outline-none mt-3" type="text" name="description" value="{{ old('description') }}"><br><br>                
            </div>                                
        </span>
        <span>
            <div class="float-left pt-5 w-1/4 text-gray-600">
                <font color="red">*</font><b>@lang('admin.NP Create Image')</b>
            </div>
            <div>
                
                <input type="file" name="image"><br>
                <br><br>
            </div>            
        </span>
        
        <br>        
        <input class="float-left bg-sky-500 p-1 w-auto text-white rounded-lg hover:bg-sky-600 m-5 pl-5 pr-5" type="submit" value="Create category">
    </form>

</div>   
@endsection





       


