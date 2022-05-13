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
}
