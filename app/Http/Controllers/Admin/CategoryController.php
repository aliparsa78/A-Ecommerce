<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    function index()
    {
        $category = Category::all();
        return view('Admin.Category.index',compact('category'));
    }
    function add(Request $req)
    {
        $category = new Category();
        $category->name = $req->category;
        $category->featured = $req->featured;
        $category->active = $req->active;
        $category->save();
        return redirect()->route('category');
    }
    function update_category($id)
    {
        $category = Category::find($id);
        return view('Admin.Category.update',compact('category'));
    }
    function update(Request $req,$id)
    {
        $category = Category::find($id);
        $category->name = $req->category;
        $category->featured = $req->featured;
        $category->active = $req->active;
        $category->update();
        return redirect()->route('category')->with('success','Category update successfuly!');
    }
    function remove($id)
    {
        $category = Category::find($id);
        if($category)
        {
            $category->delete();
            return redirect()->route('category')->with('success','Category deleted!');
        }
        
    }
}
