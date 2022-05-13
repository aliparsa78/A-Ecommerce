<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    function index()
    {
       return view('admin.index');
    }
    function admin()
    {
        $user = User::all()->where('role_as','1');
        return view('Admin.admin.index',compact('user'));
    }
    function admin_regester(Request $req){
        $admin = new User();
        $admin->name = $req->input('name');
        $admin->lastName = $req->input('lastName');
        $admin->email = $req->input('email');
        $admin->password = $req->input('password');
        $admin->city= $req->input('city');
        $admin->country = $req->input('country');
        $admin->address1 = $req->input('address1');
        $admin->address2 = $req->input('address2');
        $admin->role_as = '1';
        $admin->address1 = $req->input('address1');
        $admin->save();
        return redirect('/admin');
    }
}
