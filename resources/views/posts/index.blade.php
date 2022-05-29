@extends('templates.app')
@section('userInfoBar')
@include('templates.userInfoBar')
@endsection
@section('content')
<div id="newsContainer">
    @foreach ($posts as $post)
    <div class="newsContent">
        <div class="newsTitle">            
            {{ $post->title }} and ID = {{ $post->id }}
        </div>                 
        <img class="newsImage" width="328px" height="248px" alt="News Image" src="{{ $post->image }}"/>
        <div class="newsArticle">
            {{ $post->body }}
            <?php // echo substr_replace($row['text'], "...", 1000); ?>             
        </div>
                      
        <button class="read_more" onclick="window.location.href='{{ route('posts.show', ['post' => $post->id]) }}';">         
        Lasīt vairāk...
        </button>
        <div style="float: right;">
            Comments: {{ $post->comments()->count() }}
        </div>  
    </div> 
    @endforeach
        
    <br>
    {{ $posts->links( ) }}
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
   