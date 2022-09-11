<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Cart;
use Auth;

class CartController extends Controller
{
    function index()
    {
        if(Auth::check())
        {
            $id = auth::user()->id;
            
            $cart = Cart::all()->where('user_id',$id);
            return view('Frontend/Cart/index',compact('cart'));
            
        }else{
            return redirect('/login');
        }
    }
    function add(Request $req,$id)
    {
        $product_id = $id;
        if(Cart::where('product_id',$product_id)->where('user_id',auth::id())->exists())
        {
            return back()->with('danger','product already exists!');
        }else{

        
        $user = auth::user()->id;
        $add_to_cart = new Cart();
        $add_to_cart->user_id = $user;
        $add_to_cart->product_id = $id;
        $add_to_cart->product_qty = $req->input('product-quatity');
        $add_to_cart->save();
        $cart = Cart::all();
        
        return back()->with('status','product added to cart');
        }
    }
    function delete_cart_item($id)
    {
        if(Auth::check())
        {
            $cart = Cart::find($id);
            if($cart->delete())
            {
                return back()->with('status','cart item deleted');

            }else{
                return back()->withError(['msg'=>"couldn't delete cart item"]);
            }
        }else{
            return redirect('/login');
        }
    }
}
