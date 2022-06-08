<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostCreateRequest;
use App\Http\Requests\PostUpdateRequest;
use App\Models\PageConfig;
// use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\PageConfigController;


class postController extends Controller
{

    public function index()
    {
        
        $limit = PageConfig::find(1)->posts_per_page;       
            
        return view('posts.index', [            
            'posts' => Post::orderBy('id', 'desc')->paginate($limit),
        ]);
    }

    public function create(): View
    {
        return view('posts.create');
    }

    public function store(string $locale, PostCreateRequest $request)
    {

        $validatedData = $request->validated();
        $post = new Post([
            'title' => $request['title'],
            'image' => $request['image'],
            'body' => $request['body'],

        ]);
        $post->save();

        return redirect()->route('posts.show', ['post' => $post, 'locale' => app()->getLocale()]);
    }

    public function show(string $locale, Post $post): View
    {
        return view('posts.show', [
            'post' => $post,
        ]);
    }

    public function edit(string $locale, Post $post): View
    {
        return view('posts.edit', [
            'post' => $post,
        ]);
    }

    public function update(string $locale, PostUpdateRequest $request, Post $post)
    {

        $validatedData = $request->validated();
        $post->title = $validatedData['title'];
        $post->image = $validatedData['image'];
        $post->body = $validatedData['body'];
        $post->save();

        // return redirect()->route('posts.show', ['post' => $post, 'locale' => app()->getLocale()]);
        return redirect()->route('posts.admin', app()->getLocale());
        // return redirect()->route('MainNav.index', app()->getLocale());
    }

    public function destroy(string $locale, Post $post)
    {
        $post->delete();

        return back();
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
