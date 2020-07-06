<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use Auth;
use App\adminSupport;
use App\User;

class AdminController extends Controller
{
    // public function __constructor()
    // {
    //     return $this->middleware('guest:admin');
    // }
    public function login()
    {
    
       return view('admin.admin_login');
    }

    public function check_admin(Request $request)
    {
        // return $request->all();
         $request->validate([
            "username"=>'required',
            "password"=>'required'
        ]);

         $name = $request->input('username');
         $password = $request->input('password');

        // dd(Auth::guard('admin')->attempt(['name' => $name, 'password' => $password]));
        if (Auth::guard('admin')->attempt(['username' => $name, 'password' => $password]))
        {
            return redirect()->route('adminDashboard');
        }
        else
        {
            return redirect()->route('adminLogin')->with('error_message', 'Something Wrong');
        }
    }

    public function admin_dashboard()
    {
        
        return view('admin.admin_dashboard');

    }

    public function admin_logout()
    {
         Auth::guard('admin')->logout();
        return redirect()->route('adminLogin');
    }

    public function manage_permission()
    {
        $permission = adminSupport::all();
        return view('admin.manage_permission',['permission'=>$permission]);
        
    }

    public function edit_permission($id)
    {
       
        $edit_permission = adminSupport::where('id',$id)->first();
        return view('admin.edit_permission',['edit_permission'=>$edit_permission]);
        // return view('admin.edit_permission');
        
    }

    public function update_permission(Request $request)
    {
        // return $request->all();
        $update_support=adminSupport::find($request->permission_id);
        $update_support->currency_name = $request->currency_name;
        $update_support->reffered_bouns_ammount = $request->reffered_bouns_ammount;
        $update_support->signup_bonus = $request->signup_bonus;
        $update_support->interest_ammount = $request->interest_ammount;
        $update_support->save();
    
        return redirect()->route('managePermission')->with('success_message', 'data updated succesfully');
        }

        public function all_user()
        {
              $all_user = User::all();
             return view('admin.manage_user',['all_user'=>$all_user]);
        
        }

        public function edit_user($id)
        {
            $edit_user = User::where('id',$id)->first();
            return view('admin.edit_user',['edit_user'=>$edit_user]);
        }

        public function update_user(Request $request)
        {
            // return $request->all();
        $update_user=User::find($request->id);
        $update_user->name = $request->name;
        $update_user->username = $request->username;
        $update_user->email = $request->email;
        $update_user->save();
    
        return redirect()->route('allUser')->with('success_message', 'data updated succesfully');
        }
}
