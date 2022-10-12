<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Orders;
use App\Models\Products;
use App\Models\User;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;



class OrderController extends Controller
{
    public function add(){
        $r = request();
        $addOrder = Orders::create([
            'amount' => $r->amount,
            'paymentStatus' =>'pending',
            'id'=>Auth::id(),
        ]);

        $orders_id = DB::table('orders')->where('id','=',Auth::id())->orderBy('created_at', 'desc')->first();  //get the latest order I
    }
}
