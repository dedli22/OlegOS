@auth    
    <section class="mt-[-150px] ml-10">
        <div class="w-48 h-48 bg-slate-50 float-left rounded-full">
            <img class="rounded-full m-2 w-44 h-44" src="{{ Auth::user()->profile_picture }}" alt="Profile Picture" width="165" height="165" />                            
        </div>
    </section>
    <section class="float-left text-center h-10 mt-20 overflow-hidden bg-Black-opticaly-08 w-[81.8%] mb-20">
        <ul class="h-10 leading-6 p-2 capitalize">
            <li>
                <a class="block float-left w-32 text-gray-200 font-bold" href="#">@lang('app.Timeline')</a>
            </li>
            <li>
                <a class="block float-left w-20 text-gray-200 font-bold" href="#">@lang('app.Messages')</a>
            </li>
            <li>
                <a class="block float-left w-20 text-gray-200 font-bold" href="#">@lang('app.Album')</a>
            </li>
            <li>
                <a class="block float-left w-20 text-gray-200 font-bold" href="#">@lang('app.Friends')</a>
            </li>
            <li>
                <a class="block float-left w-20 text-gray-200 font-bold" href="#">@lang('app.About')</a>
            </li>       
            <li class="float-right">                            
                <form method="POST" action="{{ route('logout', app()->getLocale()) }}">
                    @csrf                
                    <button class="text-white font-bold mr-1" type="submit">@lang('app.Log Out')</button>            
                </form>                           
            </li>
                @if (Auth::user()->is_admin)
                    <li>
                        <a class="block float-left w-28 text-red-500 font-bold" href="{{ route('admin.index', app()->getLocale()) }}">@lang('app.Admin')</a>
                    </li>
                @endif                                  
        </ul>
    </section>     

    <aside class="float-left w-3/12 border-r border-solid border-sky-500 m-5">
        <div class="text-sky-500 text-xl pb-5 capitalize">
            Hello, 
                <a class="text-sky-500 font-bold" href=' {{ route('user.show', [Auth::user()->id, 'locale' => app()->getLocale()]) }} '> 
                    {{ Auth::user()->firstName }} 
                    {{ Auth::user()->lastName }}            
                </a>
        <br/>
            <div class="text-gray-400 text-xs">
                Your rank:
                <a class="text-red-500" href="">                
                    {{ (Auth::user()->is_admin === 1) ? 'Admin' : ''}}             
                </a>
                <a class="text-yellow-500" href="">
                    {{ (Auth::user()->is_moderator === 1) ? 'Moderator' : ''}}                  
                </a>
                <a class="text-rose-800" href="">
                    {{ (Auth::user()->is_main_admin === 1) ? 'Main Admin' : ''}} 
                </a>
            </div>
            
        </div>
        <div>
            <ul class="capitalize">
                <li class="h-8 block pl-5">
                    <a class="block text-sky-600 hover:text-sky-900 hover:pl-3" href="{{ route('users.UsersEditMainInfo', [Auth::user()->id, 'locale' => app()->getLocale()]) }}">» Edit profile</a>
                </li>
                <li class="h-8 block pl-5">
                    <a class="block text-sky-600 hover:text-sky-900 hover:pl-3" href="#">» Edit about me</a>
                </li>
                <li class="h-8 block pl-5">
                    <a class="block text-sky-600 hover:text-sky-900 hover:pl-3" href="#">» Edit album</a>
                </li>
                <li class="h-8 block pl-5">
                    <a class="block text-sky-600 hover:text-sky-900 hover:pl-3" href="#">» Edit </a>
                </li>
                <li class="h-8 block pl-5">
                    <a class="block text-sky-600 hover:text-sky-900 hover:pl-3" href="#">» Edit profile</a>
                </li>
            </ul>
        </div>
    </aside>
@endauth