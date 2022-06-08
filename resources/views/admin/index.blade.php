@extends('templates.app')

@section('admin')
<div id="acpContainer" class="w-full m-5">
    <br><br>
    <div class="pageTitle text-sky-500 text-xl pl-3 font-bold text-left capitalize">@lang('admin.Title') »</div>
    <hr style="width: 75%; float: left; margin: 5px; height: 2px;" color="#019ad2">
    <br>
    <a href="{{ route('PageConfig.show', app()->getLocale()) }}">   
        <div class="w-52 border-2 border-solid border-sky-500 float-left rounded-md text-center m-2">
            <div class="w-full h-full ">            
                <svg xmlns="http://www.w3.org/2000/svg" class="h-40 w-40 mx-auto text-sky-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                </svg>
            </div>
            <div class="text-sky-500 font-bold text-center mb-5">
                @lang('admin.category.General Settings')
            </div>
        </div>    
    </a>
    <a href="{{ route('MainNav.index', app()->getLocale()) }}">    
        <div class="w-52 border-2 border-solid border-sky-500 float-left rounded-md text-center m-2">
            <div class="w-full h-full ">            
                <svg xmlns="http://www.w3.org/2000/svg" class="h-40 w-40 mx-auto text-sky-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                </svg>
            </div>
            <div class="text-sky-500 font-bold text-center mb-5">
                @lang('admin.category.Main Navigation')
            </div>
        </div>    
    </a>
    <a href="{{ route('posts.admin', app()->getLocale()) }}">
        <div class="w-52 border-2 border-solid border-sky-500 float-left rounded-md text-center m-2">
            <div class="w-full h-full ">             
                <svg xmlns="http://www.w3.org/2000/svg" class="h-40 w-40 mx-auto text-sky-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                </svg>
            </div>
            <div class="text-sky-500 font-bold text-center mb-5">
                @lang('admin.category.News')
            </div>
        </div>
    </a>
    <div class="opacity-30">
        <div class="w-52 border-2 border-solid border-sky-500 float-left rounded-md text-center m-2">
            <div class="w-full h-full ">             
                <svg xmlns="http://www.w3.org/2000/svg" class="h-40 w-40 mx-auto text-sky-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                </svg>
            </div>
            <div class="text-sky-500 font-bold text-center mb-5">
                @lang('admin.category.User Navigation')
            </div>
        </div>
    </div>
    <div class="opacity-30">
        <div class="w-52 border-2 border-solid border-sky-500 float-left rounded-md text-center m-2">
            <div class="w-full h-full ">        
                <svg xmlns="http://www.w3.org/2000/svg" class="h-40 w-40 mx-auto text-sky-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
            </div>
            <div class="text-sky-500 font-bold text-center mb-5">
                @lang('admin.category.Messages')
            </div>
        </div>
    </div>
    <div class="opacity-30">
        <div class="w-52 border-2 border-solid border-sky-500 float-left rounded-md text-center m-2">
            <div class="w-full h-full ">            
                <svg xmlns="http://www.w3.org/2000/svg" class="h-40 w-40 mx-auto text-sky-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
            </div>
            <div class="text-sky-500 font-bold text-center mb-5">
                @lang('admin.category.Users')
            </div>
        </div>
    </div>
    <div class="opacity-30">
        <div class="w-52 border-2 border-solid border-sky-500 float-left rounded-md text-center m-2">
            <div class="w-full h-full ">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-40 w-40 mx-auto text-sky-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                </svg>                         
            </div>
            <div class="text-sky-500 font-bold text-center mb-5">
                @lang('admin.category.Statistic')
            </div>
        </div>
    </div>
</div> 
@endsection