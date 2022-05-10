<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
class UserController extends Controller
{
    function index()
    {
        if(Auth::user()->role_as=='1'){
            return view('Admin.index');
        }else{
       
            return view('Frontend.index');
        }
    }
}
