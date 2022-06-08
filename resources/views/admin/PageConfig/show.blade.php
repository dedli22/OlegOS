@extends('templates.app')
@section('admin')
    <div class="w-full m-5">
        <br><br>
        <div class="pageTitle text-sky-500 text-xl pl-3 font-bold text-left capitalize">@lang('admin.Title') » @lang('admin.GSP Name')</div>
        <hr style="width: 75%; float: left; margin: 5px; height: 2px;" color="#019ad2">
        <br>
        @foreach ($PageConfigs as $PageConfig)   
            @if ($errors->any())
                <div class="bg-rose-300 m-5 p-2 w-2/4 rounded-md text-Black-opticaly-08 pl-10">        
                        @foreach ($errors->all() as $error)
                            {{ $error }} <br>
                        @endforeach            
                </div>    
            @endif
            <br><br>
            <form action="{{ route('PageConfig.update', app()->getLocale()) }}" method="POST">
            {{-- <form action="{{ route('PageConfig.show') }}" method="POST"> --}}
                
                @csrf
                <span>
                    <div class="float-left pt-5 w-1/4 text-gray-600">
                        <font color="red">*</font><b> @lang('admin.GSP Title'):</b>
                    </div>
                    <div>
                        <input class="w-2/4 border border-solid border-gray-400 rounded-md focus:border-sky-200 drop-shadow box-border outline-none mt-3" type="text" name="page_title" value="{{ $PageConfig->page_title }}" size="" /><br /><br>
                    </div>            
                </span>
                <span>
                    <div class="float-left pt-5 w-1/4 text-gray-600">
                        <font color="red">*</font><b> @lang('admin.GSP Status'):</b>
                    </div>
                    <div class="mt-3" style="justify-content: center;">
                        <input type="radio" name="page_offline" {{ ($PageConfig->page_offline === 0) ? 'checked' : '' }} value="0"> @lang('admin.GSP Online')
                        <input class="ml-5" type="radio" name="page_offline" {{ ($PageConfig->page_offline === 1) ? 'checked' : '' }} value="1"> @lang('admin.GSP Offline') &nbsp;&nbsp;&nbsp;
                        
                        <br><br><br>
                    </div>            
                </span>
                <span>
                    <div class="float-left pt-5 w-1/4 text-gray-600">
                        <font color="red">* </font><b>@lang('admin.GSP Offline Msg'):</b>
                    </div>
                    <div>
                        <input class="w-2/4 border border-solid border-gray-400 rounded-md focus:border-sky-200 drop-shadow box-border outline-none mt-3" type="text" name="page_offline_msg" value="{{ $PageConfig->page_offline_msg }}" size="" /><br /><br>
                    </div>            
                </span>
                <span>
                    <div class="float-left pt-5 w-1/4 text-gray-600">
                        &nbsp;&nbsp;&nbsp;<b>@lang('admin.GSP Verssion'):</b>
                    </div>
                    <div>
                        <input class="w-2/4 border border-solid border-gray-400 rounded-md focus:border-sky-200 drop-shadow box-border outline-none mt-3" type="text" name="page_version" readonly value="{{ $PageConfig->page_version }}" size="" /><br /><br>
                    </div>            
                </span>
                <span>
                    <div class="float-left pt-5 w-1/4 text-gray-600">
                        <font color="red">*</font><b> @lang('admin.GSP News Per Page'):</b>
                    </div>
                    <div>
                        <input class="w-2/4 border border-solid border-gray-400 rounded-md focus:border-sky-200 drop-shadow box-border outline-none mt-3" type="text" name="posts_per_page" value="{{ $PageConfig->posts_per_page }}" size="" /><br /><br>
                    </div>            
                </span>              
                <br><br><br>
                <input class="float-left bg-sky-500 p-1 w-auto text-white rounded-lg hover:bg-sky-600 m-5 pl-5 pr-5" type="submit" value="@lang('admin.GSP Submit')" />            
            </form>
        @endforeach
    </div>
@endsection