


{{-- Comment SUB/SUB Replay --}}
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{ route('reply.add') }}" method="POST">
        @csrf
        @foreach($comments as $comment)
        <h2>Replay: {{ $comment->id }}</h2> 
        <p>{{ $comment->comment }}</p>
        <div class="border border-solid border-sky-500 w-full pb-6 mb-1.5 bg-gray-100 ml-5">
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
        {{-- @include('posts.comment_replies', ['comments' => $comment->replies])  --}}
@endforeach
