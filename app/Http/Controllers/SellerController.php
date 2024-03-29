<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use App\Models\Products;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class SellerController extends Controller
{
    public function show()
    {

        // $id = User::find($id);

        $products = DB::select('select * from products');
        // dd($user);

        return view('seller.index', [
            'products' => $products
        ]);
    }
    public function sellerindex()
    {
        return view('seller.seller_login');
    }

    public function sellerlogin(Request $request)
    {
        // dd($request->all());

        $check = $request->all();

        // if everything is correct directed to the admin dashboard
        if (Auth::guard('seller')->attempt(['email' => $check['email'], 'password' => $check['password']])) {
            return redirect()->route('products.create')->with('error', 'Admin Login Successful');
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

    public function sellerregister()
    {

        return view('seller.seller_register');
    }

    public function sellerregistercreate(Request $request)
    {
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
