<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment; // problem

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
}
