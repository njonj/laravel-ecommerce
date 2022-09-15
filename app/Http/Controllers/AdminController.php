<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.admin_login');
    }

    public function dashboard()
    {
        return view('admin.index');
    }

    public function login(Request $request)
    {
        // dd($request->all());

        $check = $request->all();
        // if everything is correct directed to the admin dashboard
        if (Auth::guard('admin')->attempt(['email' => $check['email'], 'password' => $check['password']])) {
            return redirect()->route('admin.dashboard')->with('error', 'Admin Login Successful');
        } else {
            // when wrong credentials u return to admin.login
            return back()->with('error', 'Invalid Email or Password');
        }
    }
    public function adminlogout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('login_from')->with('error', 'Admin Logout Successful');
    }

    public function adminregister(){

        return view('admin.admin_register');
    }

    public function adminregistercreate(Request $request){
        Admin::insert([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'phone_no' => $request->phone_no,
            'password' => Hash::make($request->password),
            'created_at' => Carbon::now(),
        ]);

        return redirect()->route('login_from')->with('error', 'Admin Registered Successful');
    }
}
