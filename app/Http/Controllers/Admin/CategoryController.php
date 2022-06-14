<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use File;

class CategoryController extends Controller
{
    function index()
    {
        $category = Category::all();
        return view('Admin.Category.index',compact('category'));
    }
    function add(Request $req)
    {
        $req->validate([
            'category'=>'required',
            'featured'=>'required',
            'active'=>'required',
            'image'=>'required',
        ]);
        $category = new Category();
        $category->name = $req->category;
        $category->featured = $req->featured;
        $category->active = $req->active;
        if($req->File('image')){
            $file = $req->file('image');
            $exe = $file->getClientOriginalExtension();
            $filename = time().'.'.$exe;
            $file->move('Admin/Category/',$filename);
            $category->image = $filename;
        }else{
            return back()->withErrors(['msg'=>'image required']);
        }
        
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
        $catagory = Category::find($id);
        if($req->hasFile('image')){
            $path ="Admin/Category/".$catagory->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $file = $req->file('image');
            $exe = $file->getClientOriginalExtension();
            $filename = time().'.'.$exe;
            $file->move('Admin/Category/',$filename);
            $catagory->image= $filename; 
        }
        $catagory->name=$req->category;
        $catagory->featured = $req->featured;
        $catagory->active= $req->active;
        $catagory->update();
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
