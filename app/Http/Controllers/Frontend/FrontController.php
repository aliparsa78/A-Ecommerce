<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Product;
use App\Models\Category;

class FrontController extends Controller
{
    //

    function detail($id)
    {
        $category = Product::all()->where('id',$id)->first();
        $cat_id = $category->cat_id;

        
        $product = Product::find($id);
        
        $related = Product::all()->where('cat_id',$cat_id);
        
        
        
        return view('Frontend.details',compact('product','related'));
    }
}
