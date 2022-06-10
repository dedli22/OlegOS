
@extends('templates.app')

{{-- @section('userInfoBar')
@include('templates.userInfoBar')
@endsection --}}

@section('profile')
    <div class="ml-10 m-5 w-[93.5%]">
        <div class="ml-5 w-[250px] h-[251px] float-left"   >
            <img src="{{ $user->profile_picture }}" width="100%" height="100%" class="mr-10 rounded-lg shadow-md shadow-sky-200"   >    
        </div>
        <div class="ml-10">            
            <div class="text-gray-500 font-bold text-4xl max-w-[43%] float-left mt-5 ml-14">
                <span class="w-5 h-5 bg-green-400 rounded-full inline-block"></span>
                {{ $user->firstName . ' ' . $user->lastName }}
                <br>
                <div class="text-sm text-sky-500 pl-5"> 
                    Full stack developer
                </div>
            </div>
            <div class="text-gray-300 text-sm w-[20%]   float-left mt-5 ml-10 pt-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 float-left" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                  </svg>
                  Location in map 
            </div>
            <div class="float-right ">
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 m-5   hover:text-gray-400 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                    </svg>
                </a>
            </div> 
            <div class="float-left mt-8 ml-10 w-[70%] font-bold text-xl text-sky-400">
                <div>
                    <span class="mr-2">
                        7,3
                    </span>
                    <span class="text-yellow-300">               
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline opacity-40" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    </span>           
                </div> 
            </div>
            <div class="float-left mt-16 ml-10 w-[75%] inline capitalize ">
                <li class="float-left  p-3 bg-sky-400 rounded-md text-white mr-2 hover:bg-sky-500 hover:text-gray-200 list-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <a href="">
                        send message
                    </a>
                </li>
                <li class="float-left  p-3 bg-sky-400 rounded-md text-white mr-2 hover:bg-sky-500 hover:text-gray-200 list-none">
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                        </svg>
                        add friend
                    </a>
                </li>
                <li class="float-left  p-3 bg-sky-400 rounded-md text-white mr-2 hover:bg-sky-500 hover:text-gray-200 list-none">
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
                        </svg>
                        block user
                    </a>
                </li>
                <li class="inline p-3 bg-gray-200 rounded-md text-red-400 hover:text-red-500 font-bold float-right">
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                        report user
                    </a>
                </li>                
            </div>           
        </div>
        <div class="w-[25%] mt-10 capitalize float-left">            
                <span class="bg-white pr-4 pl-5 font-bold text-lg text-sky-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                      </svg>
                      work 
                </span>
                <hr class="-mt-3" color="#38BDF8" />
                <div class="p-5 text-gray-500">
    
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim molestias distinctio nesciunt consequatur, porro vitae voluptatem nisi laudantium temporibus autem provident tempore nostrum officia dolorum. Iure, fuga? Nam, aliquam placeat?
                </div>              
                <span class="bg-white pr-4 pl-5 font-bold text-lg text-sky-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z" />
                    </svg>
                    Skils 
                </span>
                <hr class="-mt-3" color="#38BDF8" />
                <div class="p-5 text-gray-500">
    
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim molestias distinctio nesciunt consequatur, porro vitae voluptatem nisi laudantium temporibus autem provident tempore nostrum officia dolorum. Iure, fuga? Nam, aliquam placeat?
                </div> 
        </div> 
        <div class="float-left w-[65%] m-10">
            <div class="w-full">
                <li class="float-left  p-3 list-none border-b-4 border-solid border-gray-300 hover:border-b-4 hover:border-sky-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                    <a href="{{ route('user.profile.timeline', ['user' => $user->id, 'locale' => app()->getLocale()]) }}">
                        Timeline
                    </a>
                </li>
                <li class="float-left  p-3 list-none border-b-4 border-solid border-gray-300 hover:border-b-4 hover:border-sky-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                      </svg>
                    <a href="{{ route('user.profile.basicInfo', ['user' => $user->id, 'locale' => app()->getLocale()]) }}">
                        Baisic Information
                    </a>
                </li>
                <li class="float-left  p-3 list-none border-b-4 border-solid border-gray-300 hover:border-b-4 hover:border-sky-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <a href="{{ route('user.profile.about', ['user' => $user->id, 'locale' => app()->getLocale()]) }}">
                        About
                    </a>
                </li>
                <li class="float-left  p-3 list-none border-b-4 border-solid border-gray-300 hover:border-b-4 hover:border-sky-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    <a href="{{ route('user.profile.contacts', ['user' => $user->id, 'locale' => app()->getLocale()]) }}">
                        Contact's
                    </a>
                </li>
                <li class="float-left  p-3 list-none border-b-4 border-solid border-gray-300 hover:border-b-4 hover:border-sky-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                    </svg>
                    <a href="{{ route('user.profile.comments', ['user' => $user->id, 'locale' => app()->getLocale()]) }}">
                        Comments
                    </a>
                </li>               
                
            </div>
            <br><br><br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit eligendi accusamus ex molestiae sequi quidem illo eius, quaerat quam vel iusto repellat tenetur dicta. Possimus, accusamus. Neque sit nemo consequatur.        
            
            
            
        </div>

        


        <br><br><br><br><br><br><br><br><br><br><br>
    </div>
    



{{-- 
   users id: {{$user->id}}<br>
   users name: {{$user->name}}<br>

<br><br>

All user's functions from DB <br>


User ID: {{ Auth::user()->id }}<br>
User name: {{ Auth::user()->name }}<br>
User email: {{ Auth::user()->email }}<br>
User firstName: {{ Auth::user()->firstName }}<br>
User lastName: {{ Auth::user()->lastName }}<br>
User nickname: {{ Auth::user()->nickname }}<br>
User profile_picture: {{ Auth::user()->profile_picture }}<br>
User gender: {{ Auth::user()->gender }}<br>
User about: {{ Auth::user()->about }}<br>
User country: {{ Auth::user()->country }}<br>
User city: {{ Auth::user()->city }}<br>
User work: {{ Auth::user()->work }}<br> --}}


@endsection