<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Product;

class FrontController extends Controller
{
    //

    function detail($id)
    {
        $product = Product::find($id);
        $related = Product::latest()->get();
        
        
        return view('Frontend.details',compact('product','related'));
    }
}
