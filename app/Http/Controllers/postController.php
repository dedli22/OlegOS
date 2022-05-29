<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostCreateRequest;
use App\Http\Requests\PostUpdateRequest;
// use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Contracts\View\View;

class postController extends Controller
{
    public function index(): View
    {
        return view('posts.index', [
            'posts' => Post::orderBy('id', 'desc')->paginate(3),
        ]);
    }

    public function create(): View
    {
        return view('posts.create');
    }

    public function store(PostCreateRequest $request)
    {

        $validatedData = $request->validated();
        $post = new Post([
            'title' => $request['title'],
            'image' => $request['image'],
            'body' => $request['body'],

        ]);
        $post->save();

        return redirect()->route('posts.show', ['post' => $post]);
    }

    public function show(Post $post): View
    {
        return view('posts.show', [
            'post' => $post,
        ]);
    }

    public function edit(Post $post): View
    {
        return view('posts.edit', [
            'post' => $post,
        ]);
    }

    public function update(PostUpdateRequest $request, Post $post)
    {

        $validatedData = $request->validated();
        $post->title = $validatedData['title'];
        $post->image = $validatedData['image'];
        $post->body = $validatedData['body'];
        $post->save();

        return redirect()->route('posts.show', ['post' => $post]);
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.admin');
    }

    public function admin()
    {

        // $string = '1300'; 
        // $result = Str::substrReplace($string, ':', 2, 0);
        // // '13:00'        
        // // Replace the remainder of a string
        // $result = (string) Str::of('Laravel Framework')
        // ->substrReplace('– The PHP Framework for Web Artisans', 8);

        // $string = '1300';
        // $result = Post::substr($string, ':', 2);
        return view('posts.admin', [


            'posts' => Post::get()->sortDesc(),

        ]);
    }
}
