<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Product;

class HomeController extends Controller
{
    function index()
    {
        $product = Product::all();
        
        return view('Frontend.index',compact('product'));
    }
}
