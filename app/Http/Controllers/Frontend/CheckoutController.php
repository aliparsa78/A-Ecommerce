<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use Auth;

class CheckoutController extends Controller
{
    function index(Request $req)
    {
        
        $cartitem = Cart::where('user_id',Auth::id())->get();
        
        return view('Frontend.orders.checkout',compact('cartitem'));
    }
}
