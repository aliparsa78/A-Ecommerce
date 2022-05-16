<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    function index()
    {
        $product = Product::all();
        return view('Admin.Product.index',compact('product'));
    }
    function remove($id)
    {
        if(Auth)
        {
            $product = Product::find($id);
            if($product)
            {
                $product->delete();
                return redirect()->toute('product')->with('success','product deleted');
            }
        }
        
    }
}
