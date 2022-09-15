<?php

namespace App\Http\Controllers;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Orders;
use App\Models\Orders_details;
use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{

    public function index(Products $products_id){
       dd(Cart::content());
        $cartItems = Cart::content();
        return view('checkout');
    }


    public function placeorder(Request $request, Products $products_id){
        $order = new Orders();
        // $order->user_id = Auth::id();
        $order->fname = $request->input('fname');
        $order->lname = $request->input('lname');
        $order->email = $request->input('email');
        $order->phone = $request->input('phone');
        $order->address = $request->input('address');
        $order->zipcode = $request->input('zipcode');
        $order->state = $request->input('state');
        $order->province = $request->input('province');
        $order->tracking_no = 'njonjo'.rand(1111,9999);
        $order->save();



        $cartItems = Cart::content();
        $products = DB::table('products')->where('products_id', $products_id)->get();
        // $products = Products::where('products_id',$products_id);

        foreach ($cartItems as $cartItem) {
            Orders_details::create([
                'order_id' => $order->orders_id,
                'product_id' => $cartItem->id,
                'quantity' => $cartItem->qty,
                'price' => $cartItem->price
            ]);
            // $product = Products::where('products_id', $cartItem->product_id)->first();
            // $product->qty = $product->products_quantity - $cartItem->qty;
            // $product->update();
            # code...
        }
// if the information is not saved in the users table
        // if(Auth::user()->address == NULL){
        //     $user = User::where('id', Auth::id()->first());
        //     $user->fname = $request->input('fname');
        //     $user->lname = $request->input('lname');
        //     $user->email = $request->input('email');
        //     $user->phone = $request->input('phone');
        //     $user->address = $request->input('address');
        //     $user->zipcode = $request->input('zipcode');
        //     $user->state = $request->input('state');
        //     $user->province = $request->input('province');
        //     $user->update();
        // }


        $cartItems = Cart::content();
        Cart::destroy($cartItems);
        return redirect('/products')->with('status', 'Order placed Successfully');
    }
}
