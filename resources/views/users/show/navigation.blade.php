<div class="w-full">
    <li class="float-left  p-3 list-none border-b-4 border-solid border-gray-300 hover:border-b-4 hover:border-sky-500 "  @if(request()->routeIs('user.profile.timeline', app()->getLocale())) style="border-bottom:solid 4px #38BDF8;"  @else '' @endif >
        <a href="{{ route('user.profile.timeline', ['user' => $user->id, 'locale' => app()->getLocale()]) }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
            </svg>        
            Timeline
        </a>
    </li>
    <li class="float-left  p-3 list-none border-b-4 border-solid border-gray-300 hover:border-b-4 hover:border-sky-500" @if(request()->routeIs('user.profile.basicInfo', app()->getLocale())) style="border-bottom:solid 4px #38BDF8;"  @else '' @endif >
        <a href="{{ route('user.profile.basicInfo', ['user' => $user->id, 'locale' => app()->getLocale()]) }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>        
            Baisic Information
        </a>
    </li>
    <li class="float-left  p-3 list-none border-b-4 border-solid border-gray-300 hover:border-b-4 hover:border-sky-500" @if(request()->routeIs('user.profile.about', app()->getLocale())) style="border-bottom:solid 4px #38BDF8;"  @else '' @endif >
        <a href="{{ route('user.profile.about', ['user' => $user->id, 'locale' => app()->getLocale()]) }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
            </svg>        
            About
        </a>
    </li>
    <li class="float-left  p-3 list-none border-b-4 border-solid border-gray-300 hover:border-b-4 hover:border-sky-500" @if(request()->routeIs('user.profile.contacts', app()->getLocale())) style="border-bottom:solid 4px #38BDF8;"  @else '' @endif >
        <a href="{{ route('user.profile.contacts', ['user' => $user->id, 'locale' => app()->getLocale()]) }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
            </svg>        
            Contact's
        </a>
    </li>
    <li class="float-left  p-3 list-none border-b-4 border-solid border-gray-300 hover:border-b-4 hover:border-sky-500" @if(request()->routeIs('user.profile.comments', app()->getLocale())) style="border-bottom:solid 4px #38BDF8;"  @else '' @endif >
        <a href="{{ route('user.profile.comments', ['user' => $user->id, 'locale' => app()->getLocale()]) }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
            </svg>        
            Comments
        </a>
    </li>       
</div>

