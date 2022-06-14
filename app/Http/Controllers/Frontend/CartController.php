<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    function add($id)
    {
        return view('Frontend.Cart.index');
    }
}
