@foreach ($PageConfigs as $PageConfig)    
    @if ($PageConfig->page_offline === 0)
        <script>window.location = "http://localhost/";</script>    
    @else    
        <!DOCTYPE html>
        <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="description" content="the page description"/>
            <link rel='canonical' href='http://localhost/hosts/project/portal_v2/' />    
            <link href="{{ asset('css/app.css') }}" rel="stylesheet">  
            <title>Page Title</title>
        </head>
        <body class="bg-red-400 text-center ">
            <div class=" place-content-center py-8 content-center grid text-zinc-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-36 w-36 content-center animate-pulse" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                </svg>
            </div>
            <div class="capitalize font-bold text-white text-4xl opacity-80 ">
                {{ $PageConfig->page_offline_msg}}
            </div>
        </body>
        </html>
    @endif
@endforeach