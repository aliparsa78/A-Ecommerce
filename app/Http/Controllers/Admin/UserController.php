<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class UserController extends Controller
{
    
    function user()
    {
       $user = User::all()->where('role_as','0');
       return view('Admin.Users.index',compact('user'));
    }
    function remove_user($id)
    {
        $user = User::find($id);
        if(User::Exists($user)){
            $user->delete();
        }
        return redirect('admin');
    }
    function update_user($id)
    {
        $user = User::find($id);
        return view('Admin.Users.update_user',compact('user'));
    }
    function update(Request $req,$id)
    {
        if(Auth::check()){
        $user = User::find($id);
        $user->name = $req->name;
        $user->lastName=$req->lastName;
        $user->country=$req->country;
        $user->address1=$req->address1;
        $user->address2=$req->address2;
        $user->phone=$req->phone;
        $user->city= $req->city;
        $user->update();
        return redirect('dashboard');
        }
    }
}
