@extends('templates.app')

@section('admin')
<div id="acpContainer">        
    <br><br>
    <div class="pageTitle">
        <h1>Edit Post</h1>
       <hr >      
    </div> 
    <div class="PageLinks" >
        <a href="">Link</a> -> <a href="">Link</a> -> <a href="">Link</a> 
    </div>
    <br><br>

    @if ($errors->any())
        <div class="error">        
                @foreach ($errors->all() as $error)
                    {{ $error }} <br>
                @endforeach            
        </div>
    @endif
    <form action="/posts/edit/{{ $post->id}}" method="POST">
        @csrf

        <div><b>Jaunumu nosaukums </b><font color="red">*</font>:<br /></div>
            <input type="text" name="title" value="{{ $post->title }}" size="" /><br />
        
        <div><b>Jaunumu bilde </b><font color="red">*</font>:<br /></div>
            <input type="text" name="image" value="{{ $post->image }}" size="" />         
                <label for="file-upload" class="imgUpload">
                    <class=""></class=> Custom Upload
                </label>
                <input id="file-upload" type="file"/>
                               
                <img class="EditPostImage" width="228px" height="148px" alt="News Image" src="{{ $post->image }}"/>
        <br>

        <div><b>Jaunumu body </b><font color="red">*</font>:<br /></div>
            <textarea name="body" >{{ $post->body }}</textarea><br />

        <input type="submit" value="Labot jaunumus" />
    </form>
</div>
@endsection




