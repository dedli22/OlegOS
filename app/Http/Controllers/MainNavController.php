<?php

namespace App\Http\Controllers;

use App\Http\Requests\MainNavCreateRequest;
use App\Http\Requests\MainNavUpdateRequest;
use App\Http\Requests\StoreMainNavRequest;
use App\Http\Requests\UpdateMainNavRequest;
use App\Models\MainNav;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Mail;

class MainNavController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.MainNav.index', [

            'MainNavs' => MainNav::all()->sortBy('order'),

        ]);
    }

    public function create(): View
    {
        return view('admin.MainNav.create');
    }

    public function store(MainNavCreateRequest $request)
    {
        $validatedData = $request->validated();
        $MainNav = new MainNav([
            'name' => $validatedData['name'],
            'link' => $validatedData['link'],
            'visible' => $validatedData['visible'],
            'order' => $validatedData['order'],
        ]);
        $MainNav->save();

        return redirect()->route('MainNav.index');
    }

    public function show()
    {
        return view('admin.MainNav.show');
    }

    public function edit(MainNav $MainNav): View
    {
        return view('admin.MainNav.edit', [
            'MainNav' => $MainNav,
        ]);
    }

    public function update(MainNavUpdateRequest $request, MainNav $MainNav)
    {
        $validatedData = $request->validated();
        $MainNav->name = $validatedData['name'];
        $MainNav->link = $validatedData['link'];
        $MainNav->visible = $validatedData['visible'];
        $MainNav->order = $validatedData['order'];
        $MainNav->Save();

        return redirect()->route('MainNav.index', ['MainNav' => $MainNav]);
    }

    public function destroy(MainNav $MainNav)
    {
        $MainNav->delete();

        return back()->with('success','Navigation Link deleted successfully');
    }
}


// public function destroy(Post $post)
// {
//     $post->delete();

//     return redirect()->route('posts.admin');
// }