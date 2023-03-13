<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryUpdateRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

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
            'image' => 'require|image|mimes:png,jpg,jpeg|max:2048',
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

    public function edit(string $locale, Category $Category)
    {
        return view('admin.category.edit', [
            'Category' => $Category,
        ]);
    }

    public function update(string $locale, CategoryUpdateRequest $request, Category $Category)
    {      
 
        
        $CategoryImageName = $request->input('slug').'_'.time().'.'.request()->image->getClientOriginalExtension();
        $request->image->move(public_path('images/categories/'), $CategoryImageName); 
        $Category->image = $CategoryImageName;        

        $validatedData = $request->validated();
        $Category->name = $validatedData['name'];
        $Category->slug = $validatedData['slug'];
        $Category->description = $validatedData['description'];
        $Category->update();

        return redirect()->route('admin.categories.index', ['locale' => app()->getLocale()] )->with('success', 'Category updated sucessfuly');

    }

    public function destroy(string $locale, Category $Category)
    {
        $Category->delete();

        return redirect()->route('admin.categories.index', ['locale' => app()->getLocale()] )->with('success', 'Category sucessfuly deleted');
    }

}

