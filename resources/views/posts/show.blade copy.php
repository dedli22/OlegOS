@extends('templates.app')
@section('userInfoBar')
@include('templates.userInfoBar')
@endsection
{{-- @section('content2')
    <h1>Show</h1>
    <br> 

    {{ $post->id}}
    <br>
    {{ $post->title}}
    <br>
    {{ $post->body}}

    <br><br><br>

<h2>Comments: {{ $post->comments()->count() }}</h2>

<ul>
    @foreach ($post->comments as $comment)
        <li>{{ $comment->authorName . ': ' . $comment->body}}
    @endforeach
</ul>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('comments.store') }}" method="POST">
    @csrf
    <div>
        Author : <input type="text" name="authorName" value="{{ old('authorName')}}">
    </div>
    <div>
        Body : <input type="text" name="body" value="{{ old('body')}}">
    </div>    

    <input type="hidden" name="commentable_id" value="{{ $post->id }}">
    <input type="hidden" name="commentable_type" value="{{ get_class( $post ); }}">
    <input type="submit">
</form> 



@foreach ($post->comments as $comment )

    {{$comment->authorName }}<br>
    {{$comment->body }}

    
@endforeach

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <h2>Comments:</h2>{{ $post->comments()->count() }}
<form action="{{ route('comments.store') }}" method="POST">
    @csrf
    <div>
        Author: <input type="text" name="authorName" value="{{ old('authorName') }}">

    </div>
    <div>
       body <input type="text" name="body" value="{{ old('body') }}">

    </div>
    <input type="hidden" name="post_id" value="{{ $post->commentable_id }}">
    <input type="hidden" name="post_id" value="{{ get_class($post) }}">
    <input type="submit">

</form>




@endsection --}}

@section('content')


<div class="w-full float-left mt-2">
    <div class="float-left w-[97%] p-5 m-5 border border-solid border-sky-500 rounded-lg relative ">
        <div class="mb-5 font-bold text-sky-500 text-4xl ">            
            {{ $post->title }}
        </div>
        <div class="text-gray-400 text-sm mt-[-13px]">
            Rakstu izveidoja <a class="text-gray-600" href="#" >{{ $post->authorName }}</a>   {{ $post->created_at }}  
        </div>                 
        <img class="float-right relative w-80 h-60 mb-10" width="328px" height="248px" alt="News Image" src="{{ $post->image }}"/>
        <div class="p-5 text-gray-600 min-h-full mb-10">
            {{ $post->body }}
            <?php // echo substr_replace($row['text'], "...", 1000); ?>             
        </div>                
    </div>            
    <br>

{{-- comments --}}

<div class="float-left w-[97%] p-5 m-5 border border-solid border-sky-500 rounded-lg relative ">
    <h2>Comments: {{ $post->comments()->count() }}</h2>
    

    {{-- @foreach ($post->comments as $comment)    
    <div class="border border-solid border-sky-500 w-full pb-6 mb-1.5">
        <div>
            <img class="rounded-full m-2 w-14 h-14 float-left" src="{{ asset('css/images/')}}/userPic.jpg" alt="userPicture" width="56" height="56" />
        </div>
        <div>
            <a class="text-gray-600 font-bold capitalize" href="" >{{ $comment->authorName }}</a> 
            <span class="text-gray-500 pl-5">Ievietots: {{ $comment->created_at->diffForHumans(); }}</span> 
            <span class="pl-2 text-sky-500 font-bold capitalize text-sm"><a href="">Replay</a></span>
            {{$comment->id}}               
        </div>
        <div>
            {{ $comment->body }}
        </div>
    </div>
    @endforeach --}}

    {{-- Replay comments --}}
    {{-- <script>
        function myFunction() {
          var x = document.getElementById("myDIV");
          if (x.style.display === "none") {
            x.style.display = "block";
          } else {
            x.style.display = "none";
          }
        }
        </script> --}}
    

        {{--  Sub SUb Replay comments with from --}}
    @foreach ($post->comments as $comment)        
    <div class="border border-solid border-sky-500 w-full pb-6 mb-1.5">
        <div>
            <img class="rounded-full m-2 w-14 h-14 float-left" src="{{ asset('css/images/')}}/userPic.jpg" alt="userPicture" width="56" height="56" />
        </div>
        <div>
            <a class="text-gray-600 font-bold capitalize" href="" >{{ $comment->authorName }}</a> 
            <span class="text-gray-500 pl-5">Ievietots: {{ $comment->created_at->diffForHumans(); }}</span> 
            <span class="pl-2 text-sky-500 font-bold capitalize text-sm">
            <button onclick="myFunction()">Try it</button>
                <a href="">Replay</a></span>
            {{$comment->id}}               
        </div>
        <div>
            {{ $comment->body }}
        </div>
    </div>    
    @include('posts.comment_replies', ['comments' => $comment->replies])


    
    {{-- <div id="myDIV">
        This is my DIV element.
        </div> --}}

               
                {{-- @foreach ($comment->replies as $comment)
                <p>{{ $comment->comment }}</p>

                <div class="border border-solid border-sky-500 w-full pb-6 mb-1.5">
                    <div>
                        <img class="rounded-full m-2 w-14 h-14 float-left" src="{{ asset('css/images/')}}/userPic.jpg" alt="userPicture" width="56" height="56" />
                    </div>
                    <div>
                        <a class="text-gray-600 font-bold capitalize" href="" >{{ $comment->authorName }}</a> 
                        <span class="text-gray-500 pl-5">Ievietots: {{ $comment->created_at->diffForHumans(); }}</span> 
                        <span class="pl-2 text-sky-500 font-bold capitalize text-sm"><a href="">Replay</a></span>
                        {{$comment->id}}               
                    </div>
                    <div>
                        {{ $comment->body }}
                    </div>
                </div>
                @include('posts.comment_replies', ['comments' => $comment->replies])
                @endforeach --}}
    @endforeach

    @include('posts.comments', ['comments' => $post->comments, 'post_id' => $post->id])

{{-- Template Kipa --}}
    {{-- <div class="border border-solid border-sky-500 pb-6 ml-5 mb-5">
        <div>
            <img class="rounded-full m-2 w-14 h-14 float-left" src="{{ asset('css/images/')}}/userPic.jpg" alt="userPicture" width="56" height="56" />
        </div>
        <div>
            <a class="text-gray-600 font-bold capitalize" href="" >{{ $comment->authorName }}</a> 
            <span class="text-gray-500 pl-5">Ievietots: {{ $comment->created_at->diffForHumans(); }}</span> 
            <span class="pl-2 text-sky-500 font-bold capitalize text-sm"><a href="">Replay</a></span>               
        </div>
        <div>
            {{ $comment->body }}
        </div>
    </div> --}}
    
    


{{-- <div class="float-left w-[97%] p-5 m-5 border border-solid border-sky-500 rounded-lg relative ">
    <h2>Comments: {{ $post->comments()->count() }}</h2>
    
    @include('posts.comment_replies', ['comments' => $post->comments, 'post_id' => $post->id])

    <hr />
   </div> --}}



   {{-- Main comment --}}
   {{-- @if ($errors->any())
   <div class="alert alert-danger">
       <ul>
           @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
           @endforeach
       </ul>
   </div>
@endif
<form action="{{ route('comments.store') }}" method="POST">
   @csrf
   <div class="border border-solid border-sky-500 w-full pb-6 mb-1.5 bg-gray-100">
       <div>
           <img class="rounded-full m-2 w-14 h-14 float-left" src="{{ asset('css/images/')}}/userPic.jpg" alt="userPicture" width="56" height="56" />
       </div>
       <div class="ml-20">
           <span class="w-20 "> Author :</span> 
           <input class="w-[83%] rounded-md mt-2 ml-5" type="text" name="authorName" value="{{ old('authorName')}}">                                
       </div>
       <div class="mt-5">
           <span class="ml-2 w-20 float-left" >Body :</span>
           <textarea class=" float-left block w-3/4 rounded-md" name="body" placeholder="Write a comment.">{{ old('body')}}</textarea>                  
       </div>
       <div>
           <input type="hidden" name="commentable_id" value="{{ $post->id }}">
           <input type="hidden" name="commentable_type" value="{{ get_class( $post ); }}">
           <input class="m-2 bg-sky-500 rounded-md pt-2 pb-2 pl-8 pr-8 text-white" type="submit">
       </div>
   </div>
</form>  --}}
{{-- @include('posts.comment_replies', ['comments' => $post->comments, 'post_id' => $post->id]) --}}
@endsection

