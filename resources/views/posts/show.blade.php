@extends('templates.app')
@section('userInfoBar')
@include('templates.userInfoBar')
@endsection
@section('content')
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



{{-- @foreach ($post->comments as $comment )

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

</form> --}}




@endsection


