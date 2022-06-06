<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Comment; // problem
use App\Models\Post;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'authorName' => 'required',
            'body' => 'required',
            'commentable_id' => 'required',
            'commentable_type' => 'required',
            
        ]);

        $comment = Comment::create([
            'authorName' => $validatedData['authorName'],
            'body' => $validatedData['body'],
            'commentable_id' => $validatedData['commentable_id'],
            'commentable_type' => $validatedData['commentable_type'],   
            
        ]);

        $comment->save();
        return redirect()->back();
    }

    public function replyStore(Request $request)
    {

        $validatedData = $request->validate([
            'authorName' => 'required',
            'body' => 'required',
            'commentable_id' => 'required',
            'commentable_type' => 'required',
            'parent_id' => 'required',
        ]);

        $reply = Comment::create([
            'authorName' => $validatedData['authorName'],
            'body' => $validatedData['body'],
            'commentable_id' => $validatedData['commentable_id'],
            'commentable_type' => $validatedData['commentable_type'],
            'parent_id' => $validatedData['parent_id']
        ]);

        $reply->save();
        return redirect()->back();



        // $reply = new Comment();
        // $reply->body = $request->get('comment_body');
        // $reply->parent_id = $request->get('comment_id');
        // $post = Post::find($request->get('post_id'));

        // $post->comments()->save();

        // return back();

    }
}
