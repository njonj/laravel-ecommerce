<?php

namespace App\Http\Controllers;

// use Gloudemans\Shoppingcart\Facades\Cart;

use App\Models\Cart;
use App\Models\Orders;
use App\Models\Products;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function addcart(Request $request, $products_id)
    {

        if (Auth::id()) {
            $user = auth()->user();
            $products = Products::findOrFail($products_id);
            $cart = new Cart;
            $cart->userId = $user->id;
            $cart->name = $user->name;
            $cart->phone = $user->phone_no;
            $cart->products_name = $products->products_name;
            $cart->price = $products->products_price;
            $cart->quantity = $request->quantity;
            $cart->save();



            return redirect()->back()->with('message', 'Product Added Successfully');
        } else {
            return redirect('login');
        }
    }

    public function showcart(Cart $userId)
    {

        $user = auth()->user();
        // dd($user);
        // $cart = DB::select('select * from carts where userId = :userId'  . $userId);
        $cart = DB::table('carts')->where('userId', $user->id)->get();
        // dd($cart);
        return view('carts.cart', ['cart' => $cart]);
    }

    public function deletecart($id)
    {
        $data = Cart::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Product Removed Successfully');
    }

    public function confirmorder(Request $request)
    {
        $user = auth()->user();
        $name = $user->name;
        $phone = $user->phone;
        $userId = $user->id;


        foreach ($request->productname as $key => $productname) {
            # code...
            $order = new Orders;
            $order->products_name = $request->productname[$key];
            $order->price = $request->price[$key];
            $order->quantity = $request->quantity[$key];
            $order->name = $name;
            $order->phone = $phone;
            $order->userId = $userId;
            $order->status = 'not delivered';
            $order->save();
        }
        DB::table('carts')->where('userId', $userId)->delete();
        return redirect()->route('checkout')->with('message', 'Product Ordered Successfully');
    }

    public function getOrder()
    {
        $user = auth()->user();
        // dd($user);

        $orders = DB::table('orders')->where('userId', $user->id)->get(['products_name', 'quantity', 'price']);
        //  dd($orders);
        return view('carts.order', ['orders' => $orders]);
    }
    public function checkout(){
        return view('carts.checkout');
    }
}
