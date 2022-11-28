<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Products;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function addToCart()
    {
        $r = request();
        $product = Products::where('products_id')->first();
        // return $product;
        if (empty($product)) {
            Session::flash('error', 'Invalid Product');
            return back();
        }


        // $products = DB::select('select products_id from products');
        // return $products;
        $user = DB::select('select id from users');


        // return ["userId" =>$userId, "user"=>$user];

        $carts = new Cart;
        $carts->quantity = $r->quantity;
        $carts->orderId = '';
        $carts->productsId = $product->products_id;
        $carts->userId = auth()->user()->id;
        return $carts;
        $carts->save();


        Session::flash('success', "Product add Successful!");
        return redirect()->route('cart');
    }

    public function cart()
    {
        // $userId = Session::get('user')['id'];
        // $products = DB::table('carts')
        //     ->leftjoin('products', 'products_id', '=', 'carts.productsId')
        //     ->where('carts.userId', '=', Auth::id())
        //     ->select('products.*', 'carts.id as cart_id')
        //     ->get();

        // return view('cart', ['products' => $products]);

        $carts = DB::table('carts')
            ->leftjoin('products', 'products_id', '=', 'carts.productsId')
            ->select('carts.quantity as qty', 'carts.id as cid', 'products.*')
            ->where('carts.orderId', '=', '') //'' haven't make payment
            ->where('carts.userId', '=', Auth::id())
            ->get();
        //->paginate(3);
        return view('cart')->with('carts', $carts);
    }
}
