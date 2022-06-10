@extends('templates.app')
@section('admin')
    <div class="w-full m-5">       
        <div class="pageTitle text-sky-500 text-xl pl-3 font-bold text-left capitalize">@lang('admin.Title') » @lang('admin.NP Name') » @lang('admin.NP Create Name')</div>
        <hr style="width: 75%; float: left; margin: 5px; height: 2px;" color="#019ad2">
            <br>
            @if ($errors->any())
                <div class="bg-rose-300 m-5 p-2 w-2/4 rounded-md text-Black-opticaly-08 pl-10">        
                    @foreach ($errors->all() as $error)
                        {{ $error }} <br>
                    @endforeach            
                </div>    
            @endif
            <form action="{{ route('posts.create', app()->getLocale()) }}" method="POST">
                @csrf

                <span>
                    <div class="float-left pt-5 w-1/4 text-gray-600">
                        <font color="red">*</font><b>@lang('admin.NP Create Title')</b>
                    </div>
                    <div>
                        <input class="w-2/4 border border-solid border-gray-400 rounded-md focus:border-sky-200 drop-shadow box-border outline-none mt-3" type="text" name="title" value="{{ old('title') }}"><br ><br>
                    </div>            
                </span>
                <span>
                    <div class="float-left pt-5 w-1/4 text-gray-600">
                        <font color="red">*</font><b>@lang('admin.NP Create Image')</b>
                    </div>
                    <div>
                        <input class="w-2/4 border border-solid border-gray-400 rounded-md focus:border-sky-200 drop-shadow box-border outline-none mt-3" type="text" name="image" value="{{ old('image') }}"><br ><br>
                    </div>            
                </span>
                <span>
                    <div class="float-left pt-5 w-1/4 text-gray-600">
                        <font color="red">*</font><b>@lang('admin.NP Create Body')</b>
                    </div>
                    <div>
                        <textarea class="w-2/3 h-[300px] mt-2 border border-solid border-gray-400 rounded-md focus:border-sky-200 drop-shadow box-border outline-none" name="body" >{{ old('body') }}</textarea>
                    </div>                                
                </span>
                <br>
                <input class="float-left bg-sky-500 p-1 w-auto text-white rounded-lg hover:bg-sky-600 m-5 pl-5 pr-5" type="submit" value="@lang('admin.NP Create News Submit')">
            </form>
    </div>
@endsection