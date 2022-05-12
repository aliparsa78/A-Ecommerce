<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    function index()
    {
       return view('admin.index');
    }
}
