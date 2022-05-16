<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Auth;
use App\Models\Category;

class ProductController extends Controller
{
    function index()
    {
        $product = Product::all();
        return view('Admin.Product.index',compact('product'));
    }
    function remove($id)
    {
        if(Auth::check())
        {
            $product = Product::find($id);
            if($product)
            {
                $product->delete();
                return redirect()->route('product')->with('success','product deleted!');
            }else{
                return back();
            }
        }else{
            return redirect('login');
        }
        
    }
    function edite($id)
    {
        if(Auth::check())
        {
            $product = Product::find($id);
            return view('Admin.Product.update');
        }
    }
    function add_product()
    {
        if(Auth::check())
        {
            $category = Category::all();
            return view('Admin.Product.add',compact('category'));
        }
    }
    function add(Request $req)
    {
        if(Auth::check())
        {
            $id = Auth::user()->id;
            $product = new Product();
            $product->name=$req->input('name');
            $product->cat_id=$req->input('cat_id');
            $product->description=$req->input('description');
            $product->original_price=$req->input('original_price');
            $product->selling_price=$req->input('selling_price');
            $product->weight=$req->input('weight');
            $product->tax=$req->input('tax');
            $product->qty=$req->input('qty');
            // imagepart
            if($req->file('image')){
                $file = $req->file('image');
                $exe = $file->getClientOriginalExtension();
                $filename = time().'.'.$exe;
                $file->move('Admin/Products/',$filename);
                $product->image =$filename;

            }else{
                return back()->withErrors(['msg'=>'image not selected']);
            }
            $product->save();
            return redirect()->route('product')->with('success','product added successfuly!');


        }
    }
}
