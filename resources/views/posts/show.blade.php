@extends('templates.app')
@section('userInfoBar')
@include('templates.userInfoBar')
@endsection
@section('content')


{{-- Show Post --}}
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


{{-- Replay comments --}}
    <script>
        function CommentReplay() {
        var x = document.getElementById("commentReplay");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
        }
    </script>
               
           

{{--  Sub SUb Replay comments with from --}}
    @foreach ($post->comments as $comment)        
    <div class="border border-solid border-sky-500 w-full pb-6 mb-1.5">
        ID : {{ $comment->id }}
        <div>
            <img class="rounded-full m-2 w-14 h-14 float-left" src="{{ asset('css/images/')}}/userPic.jpg" alt="userPicture" width="56" height="56" />
        </div>
        <div>
            <a class="text-gray-600 font-bold capitalize" href="" >{{ $comment->authorName }}</a> 
            <span class="text-gray-500 pl-5">Ievietots: {{ $comment->created_at->diffForHumans(); }}</span> 
            <span class="pl-2 text-sky-500 font-bold capitalize text-sm">
            <button class="font-bold text-sm" onclick="commentReplay()">Replay</button>                    
        </div>
        <div>
            {{ $comment->body }}
        </div>
    </div>    
    
{{-- Include replay comments --}}
    @include('posts.comment_replies', ['comments' => $comment->replies])

    
{{-- Replay by main comment form  --}}
<div id="CommentReplay">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif  
    <form action="{{ route('reply.add') }}" method="POST" id="replycomment-{{ $comment->id }}">
    @csrf
    <p>{{ $comment->comment }}</p>
    <div class="border border-solid border-sky-500 w-[97.5%] pb-6 mb-1.5 bg-gray-100 ml-5">
         id: {{ $comment->id}}
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
            <input type="hidden" name="parent_id" value="{{ $comment->id }}" />
            <input class="m-2 bg-sky-500 rounded-md pt-2 pb-2 pl-8 pr-8 text-white" type="submit">                
        </div>
    </div>
    </form>     
</div>







    @endforeach


{{-- INCLUDE main comment replay --}}
    {{-- <div id="CommentReplay">
        @include('posts.comments', ['comments' => $post->comments, 'post_id' => $post->id]) 
    </div> --}}
    



{{-- Main comment --}}
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
</form> 
{{-- @include('posts.comment_replies', ['comments' => $post->comments, 'post_id' => $post->id]) --}}
@endsection

