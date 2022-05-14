<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Auth;

class AdminController extends Controller
{
    function index()
    {
        $user = User::all();
       return view('admin.index',compact('user'));
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
        $admin->password =Hash::make($req->input('password'));
        $admin->city= $req->input('city');
        $admin->country = $req->input('country');
        $admin->address1 = $req->input('address1');
        $admin->address2 = $req->input('address2');
        $admin->phone = $req->input('phone');
        $admin->role_as = '1';
        $admin->address1 = $req->input('address1');
        $admin->save();
        return redirect('/admin');
    }
    function admin_setting(){
        if(Auth::check()){
            $user= auth::user()->id;
            return view('Admin.admin.setting');
        }
    }
    function change_email(Request $req)
    {
        if(Auth::check()){
            
            $email = User::all('email');
           if(User::where('email',$req->input('email'))->exists()){
                return back()->withErrors(['msg'=>'this email already in use!']);
           }else{
               $req->validate([
                   'email'=>'required',
               ]);
            $id= auth::user()->id;
            $user = User::find($id);
            $user->email=$req->email;
            $user->update();
            return redirect('admin');

           }
           
        }
    }
}
