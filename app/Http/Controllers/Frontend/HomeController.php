<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    function index()
    {
        $product = Product::all()->where('qty','>=','1');
        
        $latest =  DB::table('products')->orderBy('id','desc')->limit(10)->get();

        $category =  DB::table('categories')->orderBy('id','desc')->limit(10)->get();
        
       
        
        return view('Frontend.index',compact('product','latest','category'));
    }
}
