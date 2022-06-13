<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.category.index', [
            'Category' => Category::orderBy('id', 'desc')->paginate(10),

        ]);       
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request )
    {

        $category = new Category();

        $request->validate([
            'profile_picture' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
        ]);       


        $CategoryImageName = $request->input('slug').'_'.time().'.'.request()->image->getClientOriginalExtension();
        $request->image->move(public_path('images/categories/'), $CategoryImageName); 
        $category->image = $CategoryImageName;

        $category->name = $request->input('name');
        $category->slug = $request->input('slug');
        $category->description = $request->input('description');  
        $category->created_by_id = Auth::user()->id;
        $category->created_by_firstname = Auth::user()->firstName;
        $category->created_by_lastName = Auth::user()->lastName;

        

        $category->save();      
    
        return redirect()->route('admin.categories.index', ['locale' => app()->getLocale()] )->with('status', 'Category created sucessfuly');
        
    }
}
