<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class UserController extends Controller
{
    function index()
    {
       $user = User::all();
       return view('Admin.Users.index',compact('user'));
    }
    function remove_user($id)
    {
        $user = User::find($id);
        if(User::Exists($user)){
            $user->delete();
        }
        return redirect('user');
    }
}
