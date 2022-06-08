@extends('templates.app')
@section('admin')
<div>
    <br><br>
    <div class="pageTitle text-sky-500 text-xl pl-3 font-bold text-left capitalize">@lang('admin.title') » @lang('admin.MainNav Name')</div>
    <hr style="width: 75%; float: left; margin: 5px; height: 2px;" color="#019ad2">
    <br>
    @if ($MainNavs->Where('visible', 1 )->count() > 5)
        <b class="pl-4 text-rose-300">@lang('admin.MainNav Create limit')</b>
    @else
        <button class="bg-sky-500 pt-1 pb-1 pl-5 pr-5 ml-5 rounded-md text-white" 
        onclick="window.location.href='{{ route('MainNav.create', app()->getLocale()) }}';">         
        @lang('admin.MainNav Create new')
        </button>  
    @endif       
    <div class="float-right mr-5 font-bold text-gray-600">
        @lang('admin.MainNav count info') {{ $MainNavs->count()}} <br> 
        @if ($MainNavs->Where('visible', 1 )->count() > 4)
            <span class="text-red-500">{{ $MainNavs->Where('visible', 1 )->count() }}</span>
        @else
            <span class="text-green-500">{{ $MainNavs->Where('visible', 1 )->count() }}</span>
        @endif
        @lang('admin.MainNav count active')
    </div> 
    <br><br>
    <table class="border-collapse w-[98%] text-center ml-3 mb-10" >
        <tr class="bg-sky-400 text-white">
            <th class="border border-solid border-gray-200 p-1">@lang('admin.MainNav id')</th>
            <th class="border border-solid border-gray-200 p-1">@lang('admin.MainNav title')</th>
            <th class="border border-solid border-gray-200 p-1">@lang('admin.MainNav route')</th>
            <th class="border border-solid border-gray-200 p-1">@lang('admin.MainNav Order')</th>
            <th class="border border-solid border-gray-200 p-1">@lang('admin.MainNav Visible')</th>                        
            <th class="border border-solid border-gray-200 p-1">@lang('admin.MainNav Actions')</th>
        </tr>        
        @foreach ($MainNavs as $MainNav)
            <tr class="bg-white even:bg-gray-100 hover:bg-gray-200 text-gray-600">                
                <th class="border border-solid border-gray-200 p-1">{{ $MainNav->id }}</>
                <th class="border border-solid border-gray-200 p-1">{{ $MainNav->name }}</>
                <th class="border border-solid border-gray-200 p-1"><a href="{{ $MainNav->link }}"><i>{{ $MainNav->link }}</i></a></td>
                <th class="border border-solid border-gray-200 p-1">{{ $MainNav->order }}</>
                <th class="border border-solid border-gray-200 p-1">{{ $MainNav->visible }}</>             
                <th class="border border-solid border-gray-200 p-1 w-24">  
                    {{-- {{ dd($MainNav)}} --}}
                    <a href="{{ route('MainNav.edit', ['MainNav'  => $MainNav, 'locale' => app()->getLocale()]) }}">                    
                        <img class="float-left w-6 h-6 mr-2 ml-3 " height="20px" height="20px" alt="edit" src="{{ asset('css/images') }}/icons/application_edit.png" >
                    </a>&nbsp;&nbsp;                    
                    <a onclick="return confirm('Are you sure?')" href="{{ route('MainNav.destroy', ['MainNav'  => $MainNav, 'locale' => app()->getLocale()]) }}" class="delete-confirm">
                        <img class="float-left w-6 h-6" height="20px" height="20px" alt="delete" src="{{ asset('css/images') }}/icons/application_delete.png" >
                    </a>                    
                </td>                                                  
            </tr>
        @endforeach  
    </table>
</div>   
@endsection





       


