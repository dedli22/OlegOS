@extends('templates.app')
@section('userInfoBar')
@include('templates.userInfoBar')
@endsection
@section('content')
<div class="w-full float-left mt-2">
    @foreach ($posts as $post)
    <div class="float-left w-[97%] p-5 m-5 border border-solid border-sky-500 rounded-lg relative ">
        <div class="mb-5 font-bold text-sky-500 text-4xl ">            
            {{ $post->title }}
        </div>                 
        <img class="float-right relative w-80 h-60 mb-10" width="328px" height="248px" alt="News Image" src="{{ $post->image }}"/>
        <div class="p-5 text-gray-600 min-h-full mb-10">
            {{ $post->body }}
            <?php // echo substr_replace($row['text'], "...", 1000); ?>             
        </div>
        <div class="absolute inset-x-0 bottom-0 m-5">

            
            <button class="float-left bg-sky-500 p-1 w-32 text-white rounded-lg hover:bg-sky-600" 
                onclick="window.location.href='{{ route('posts.show',  ['post' => $post->id, 'locale' => app()->getLocale()]) }}';">         
                @lang('admin.NP Index Read More')
            </button>


            
            <div class="float-right text-gray-700 ">
                @lang('admin.NP Index Comments') {{ $post->comments()->count() }}
            </div> 
        </div>              
         
    </div> 
    @endforeach
        
    <br>
    <div class="m-10 w-full float-left mb-5">
        {{ $posts->links('pagination::tailwind') }}
    </div>

</div>
@endsection


{{-- 
   
    <div class="newsContent">
        <div class="newsTitle">            
            {{ $post->title }}
        </div>                 
        <img class="newsImage" width="328px" height="248px" alt="News Image" src=""/>
        <div class="newsArticle">
            {{ $post->body }}
            <?php // echo substr_replace($row['text'], "...", 1000); ?>             
        </div>                
        <button class="read_more" onclick="" type="submit" value="Lasīt vairāk...">
        Lasīt vairāk...
        </button>  
    </div>                    

    --}}
   