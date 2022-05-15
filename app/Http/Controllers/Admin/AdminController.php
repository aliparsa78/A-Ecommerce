<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Auth;
use File;

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
            $user = User::all()->where('id',auth::id())->first();

            return view('Admin.admin.setting',compact('user'));
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
    function change_password()
    {
        if(Auth::check()){
            $user = User::all()->where('id',auth::id())->first();
            
            return view('Admin.admin.change_password',compact('user'));
        }
    }
    function update_pass(Request $req,$id)
    {
        if(Auth::check()){
            $user = User::find($id);
            $current_pass = $req->input('current_pass');
            if(Hash::check($current_pass,$user->password)){
                $new_pass = $req->input('new_pass');
                $conf_pass = $req->input('password_confirmation');
                if($new_pass==$conf_pass){
                    $req->validate([
                        'password_confirmation'=>'required|min:8',
                    ]);
                    $user->password = Hash::make($conf_pass);
                    $user->update();
                    return redirect('admin_setting')->with('success','Password changed successfuly');
                }else{
                    return back()->withErrors(['msg'=>'Password not matched']);
                }
            }else{
                return back()->withErrors(['msg'=>'Currect password was wrong!']);
            }
        }
    }
    function profile(Request $req,$id)
    {
        $user = User::find($id);
        if(Auth::check())
        { 
            if($req->hasFile('profile'))
            {   
                $path = "Admin/Profile/".$user->profile;
                if(File::exists($path))
                {
                    File::delete($path);
                }
                    $file = $req->file('profile');
                    $exe = $file->getClientOriginalExtension();
                    $filename = time().'.'.$exe;
                    $file->move('Admin/Profile/',$filename);
                    $user->profile = $filename;
                    $user->update();
                    
                }
            } 
            return back();
                 
        }
    }

