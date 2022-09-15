<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class SellerController extends Controller
{
    public function sellerindex()
    {
        return view('seller.seller_login');
    }

    public function sellerdashboard()
    {
        return view('seller.index');
    }

    public function sellerlogin(Request $request)
    {
        // dd($request->all());

        $check = $request->all();
        // if everything is correct directed to the seller dashboard
        if (Auth::guard('seller')->attempt(['email' => $check['email'], 'password' => $check['password']])) {
            return view('/products/create')->with('error', 'Seller Login Successful');
        } else {
            // when wrong credentials u return to admin.login
            return back()->with('error', 'Invalid Email or Password');
        }
    }
    public function sellerlogout()
    {
        Auth::guard('seller')->logout();
        return redirect()->route('seller_login_from')->with('error', 'Seller Logout Successful');
    }

    public function sellerregister(){

        return view('seller.seller_register');
    }

    public function sellerregistercreate(Request $request){
        Seller::insert([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'phone_no' => $request->phone_no,
            'password' => Hash::make($request->password),
            'created_at' => Carbon::now(),
        ]);

        return redirect()->route('seller_login_from')->with('error', 'Seller Registered Successful');
    }
}
