@foreach ($PageConfigs as $PageConfig)    
    @if ($PageConfig->page_offline === 0)
        <!DOCTYPE html>
        <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="description" content="the page description"/>
            <link rel='canonical' href='http://localhost/' />    
            <link rel="stylesheet" href="{{ asset('css/app.css') }}">            
            <title>Page Title</title>
        </head>
        <body class="max-w-7xl h-full mx-auto pt-2.5 bg-gray-100" >
            <div class="container border border-solid border-cyan-600 overflow-hidden bg-white" >
                <header class="bg-Forest=Fog h-96 bg-no-repeat bg-[length:100%_100%]">
                    <div class="float-left h-14 w-full bg-Black-opticaly-08 p-1.5">
                        <div class="float-left">
                            <a href="http://localhost/">
                                <img src="{{ asset('css/images/')}}/header/logo_small1_trans.png" alt="Logo" height="40px" width="171px"/>
                            </a>
                        </div>
                        <div class="float-left ">
                            <form class="float-left ">
                                <input class="ml-52 float-left mt-1 px-3 py-2 bg-black border shadow-sm border-slate-500 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-80 rounded-md sm:text-sm focus:ring-1 opacity-60 text-white " type="search" placeholder="Search...">					  
                            </form>   
                        </div>
                        <nav class="float-right text-center h-96 overflow-hidden w-2/5">
                            <ul class="h-96 leading-6 p-2 float-right capitalize">
                                @foreach ($MainNavs as $MainNav)  
                                    @if (!$MainNav->visible === true)                              
                                    @else                    
                                        <li class="h-96 leading-6 inline float-right capitalize">
                                            <a class="block float-right w-20 text-gray-200 " href="{{ $MainNav->link }}">{{ $MainNav->name }} </a>
                                        </li>
                                    @endif
                                @endforeach                            
                            </ul>
                        </nav>
                    </div>
                    <div class="bg-Black-opticaly-08 w-40 float-right rounded-bl-2xl ">
                        <div class="float-right opacity-70">                                              
                            {{-- <a class="float-right mr-2" href="{{ route(Route::currentRouteName(), ['locale' => 'ru', 'MainNav' => $MainNav->id, 'post' => $post->id]) }}">
                                <img width="34px" height="24px" @if (app()->getLocale() === 'ru') style="width: 38px;height: 28p;" @endif   style="margin: 5px; opacity: 0.5;" src="{{ asset('css/images/')}}/header/russia.png" alt="Russian"/>
                            </a>
                            <a class="float-right" href="{{ route(Route::currentRouteName(), ['locale' => 'en', 'MainNav' => $MainNav->id, 'post' => $post->id]) }}">
                                <img width="34px" height="24px" @if (app()->getLocale() === 'en') style="width: 38px;height: 28px" @endif style="margin: 5px; opacity: 0.5;" src="{{ asset('css/images/')}}/header/english.png" alt="English"/>
                            </a>
                            <a class="float-right" href="{{ route(Route::currentRouteName(), ['locale' => 'lv', 'MainNav' => $MainNav->id, 'post' => $post->id]) }}">
                                <img width="44px" height="34px" @if (app()->getLocale() === 'lv') style="width: 38px;height: 28px" @endif style=" padding-left:10px; margin: 5px; opacity: 0.5;" src="{{ asset('css/images/')}}/header/latvia.png" alt="Latvian"/>
                            </a> --}}
                        </div>
                    </div>        
                </header>

                @auth                                             
                @yield('userInfoBar')
                @endauth 
                
                @yield('admin')    
                <section class="float-left w-[70%] ">        
                    @yield('content')        
                </section>
                <footer class="w-full bg-sky-500 h-44 float-left">
                    <div class='float-left ml-10 mt-5 text-white '>
                        <b>Portal.lv</b> - @lang('app.Footer Copy')
                    </div>       
                    <div class='float-right mr-10 mt-5 text-white'>
                        © 
                        <?php
                            $copyYear = 2022; // Mājaslapas sākuma laiks
                            $curYear = date('Y'); // Gads ,kurš ir
                            echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');
                        ?> 
                        Copyright.
                    </div>    
                </footer>
            </div>            
        </body>
        </html>   
    @else
        <script>window.location = "{{ route('PageConfig.offline', app()->getLocale())}}";</script>
    @endif
@endforeach