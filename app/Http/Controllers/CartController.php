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
        // if ($r->session()->has('user')) {
        //     $carts = new Cart;
        //     $carts->products_id = $r->products_id;
        //     $carts->quantity = $r->quantity;
        //     $carts->orderId = "";
        //     $carts->save();
        //     return redirect('cart');
        // } else {
        //     return redirect('/login');
        // }


        $products = DB::select('select products_id from products');
        // return $products;
        $user = DB::select('select id from users');

        $userId = Auth::user();
        // return ["userId" =>$userId, "user"=>$user];



        // ["orderId" ,"userId", "quantity","productsId"]
        $carts = Cart::create([

            'quantity' => $r->quantity,
            'orderId' => '',
            'productsId' => $products,
            'userId' => $userId->id,

        ]);
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
