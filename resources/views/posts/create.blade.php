@extends('templates.app')
@section('userInfoBar')
@include('templates.userInfoBar')
@endsection
@section('content')
    <h1>Create</h1>


    <h1>Create Post</h1>
 
    @if ($errors->any())
    <div class="error">        
            @foreach ($errors->all() as $error)
                {{ $error }} <br>
            @endforeach            
    </div>
@endif
    <form action="{{ route('posts.create') }}" method="POST">
        @csrf

        Title: <input type="text" name="title" value="{{ old('title') }}"><br>
        Image:  <input type="text" name="image" value="{{ old('image') }}"><br>
        Body:  <input type="text" name="body" value="{{ old('body') }}"><br>
        <input type="submit">
    </form>
@endsection