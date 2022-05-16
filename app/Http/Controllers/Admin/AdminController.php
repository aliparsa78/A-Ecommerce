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
        $req->validate([
            'name'=>'required',
            'lastName'=>'required',
            'city'=>'required',
            'email'=>'required',
            'country'=>'required',
            'address1'=>'required',
            'address2'=>'required',
            'phone'=>'required',
            'name'=>'required',
        ]);
        $admin = new User();
        $admin->name = $req->input('name');
        $admin->lastName = $req->input('lastName');
        $admin->email = $req->input('email');
        $admin->city= $req->input('city');
        $admin->country = $req->input('country');
        $admin->address1 = $req->input('address1');
        $admin->address2 = $req->input('address2');
        $admin->phone = $req->input('phone');
        $admin->role_as = '1';
        if($req->input('password')==$req->input('password_confirmation'))
        {
            $req->validate([
                'password'=>'required|min:8',
                //'password_confirmation'=>'required|min:8',
            ]);
            $admin->password =Hash::make($req->input('password_confirmation'));
        }else{
            return back()->withErrors(['msg'=>'password not matched']);
        }
        $admin->save();
        return redirect()->route('dashboard')->with('success','User added successfuly');
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
            return back()->withErrors(['msg'=>'The email is already in user!']);
           }else{
               $req->validate([
                   'email'=>'required',
               ]);
            $id= auth::user()->id;
            $user = User::find($id);
            $user->email=$req->email;
            $user->update();
            return back()->with('success','Email updated successfuly');
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

